import { db, isAdmin, persistent } from '../../../lib/db';

export const dynamic = 'force-dynamic';
const json = (d, s = 200) => Response.json(d, { status: s });

export async function POST(req) {
  let b;
  try { b = await req.json(); } catch { return json({ error: 'JSON invalide' }, 400); }
  const nom = String(b.nom || '').trim().slice(0, 120);
  const presence = b.presence === 'non' ? 'non' : 'oui';
  const personnes = presence === 'oui' ? Math.min(6, Math.max(1, parseInt(b.personnes, 10) || 1)) : 0;
  if (!nom) return json({ error: 'Nom requis' }, 400);
  const c = await db();
  // Une réponse par nom : la dernière remplace la précédente.
  const ex = await c.execute({ sql: 'SELECT id FROM rsvp WHERE lower(nom) = lower(?)', args: [nom] });
  if (ex.rows.length) {
    await c.execute({ sql: "UPDATE rsvp SET presence=?, personnes=?, created_at=datetime('now') WHERE id=?", args: [presence, personnes, ex.rows[0].id] });
  } else {
    await c.execute({ sql: 'INSERT INTO rsvp (nom, presence, personnes) VALUES (?,?,?)', args: [nom, presence, personnes] });
  }
  return json({ ok: true });
}

export async function GET(req) {
  if (!isAdmin(req)) return json({ error: 'Non autorisé' }, 401);
  const c = await db();
  const r = await c.execute('SELECT id, nom, presence, personnes, created_at FROM rsvp ORDER BY created_at DESC');
  return json({ rows: r.rows.map(x => ({ ...x })), persistent: persistent() });
}

export async function DELETE(req) {
  if (!isAdmin(req)) return json({ error: 'Non autorisé' }, 401);
  const id = parseInt(new URL(req.url).searchParams.get('id'), 10);
  if (!id) return json({ error: 'id requis' }, 400);
  const c = await db();
  await c.execute({ sql: 'DELETE FROM rsvp WHERE id=?', args: [id] });
  return json({ ok: true });
}
