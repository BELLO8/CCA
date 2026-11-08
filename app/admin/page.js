'use client';
import { useEffect, useMemo, useState } from 'react';

export default function Admin() {
  const [pw, setPw] = useState('');
  const [authed, setAuthed] = useState(false);
  const [rows, setRows] = useState([]);
  const [persistent, setPersistent] = useState(true);
  const [err, setErr] = useState('');
  const [q, setQ] = useState('');
  const [tab, setTab] = useState('oui');

  const load = async (p = pw) => {
    const r = await fetch('/api/rsvp', { headers: { 'x-admin-password': p }, cache: 'no-store' });
    if (r.status === 401) { setAuthed(false); setErr('Mot de passe incorrect.'); try { sessionStorage.removeItem('adm'); } catch {} return; }
    const d = await r.json();
    setRows(d.rows); setPersistent(d.persistent); setAuthed(true); setErr('');
    try { sessionStorage.setItem('adm', p); } catch {}
  };

  useEffect(() => {
    let saved = null; try { saved = sessionStorage.getItem('adm'); } catch {}
    if (saved) { setPw(saved); load(saved); }
  }, []);
  useEffect(() => { if (!authed) return; const t = setInterval(() => load(), 30000); return () => clearInterval(t); }, [authed, pw]);

  const stats = useMemo(() => {
    const oui = rows.filter(r => r.presence === 'oui');
    return { invites: oui.reduce((s, r) => s + Number(r.personnes), 0), oui: oui.length, non: rows.length - oui.length };
  }, [rows]);

  const shown = rows.filter(r => (tab === 'tous' || r.presence === tab) && r.nom.toLowerCase().includes(q.toLowerCase()));

  const del = async r => {
    if (!confirm(`Supprimer la réponse de ${r.nom} ?`)) return;
    await fetch('/api/rsvp?id=' + r.id, { method: 'DELETE', headers: { 'x-admin-password': pw } });
    load();
  };

  const csv = () => {
    const esc = s => `"${String(s).replace(/"/g, '""')}"`;
    const lines = [['Nom', 'Téléphone', 'Présence', 'Personnes', 'Date'], ...rows.map(r => [r.nom, r.telephone || '', r.presence, r.personnes, r.created_at])];
    const blob = new Blob(['﻿' + lines.map(l => l.map(esc).join(';')).join('\n')], { type: 'text/csv;charset=utf-8' });
    const a = document.createElement('a'); a.href = URL.createObjectURL(blob); a.download = 'invites-augustin-ayoni.csv'; a.click();
  };

  const fmt = s => { try { return new Date(s.replace(' ', 'T') + 'Z').toLocaleString('fr-FR', { dateStyle: 'medium', timeStyle: 'short' }); } catch { return s; } };

  if (!authed) return (
    <main className="admin">
      <div className="eyebrow">Espace des mariés</div>
      <h1>Liste des invités</h1>
      <form className="login" onSubmit={e => { e.preventDefault(); load(); }}>
        <div><label htmlFor="pw">Mot de passe</label><input id="pw" type="password" value={pw} onChange={e => setPw(e.target.value)} autoFocus /></div>
        <p className="err">{err}</p>
        <button className="cta" type="submit" style={{ border: 0, cursor: 'pointer', font: 'inherit' }}>Entrer</button>
      </form>
    </main>
  );

  return (
    <main className="admin">
      <div className="eyebrow">Espace des mariés</div>
      <h1>Liste des invités</h1>
      {!persistent && <div className="warn">Base temporaire : configurez TURSO_DATABASE_URL sur Vercel pour que les réponses soient conservées durablement.</div>}
      <div className="stats">
        <div className="stat"><b>{stats.invites}</b><span>Personnes attendues</span></div>
        <div className="stat"><b>{stats.oui}</b><span>Confirmations</span></div>
        <div className="stat"><b>{stats.non}</b><span>Absents</span></div>
      </div>
      <div className="bar">
        <div className="tabs">
          {[['oui', 'Présents'], ['non', 'Absents'], ['tous', 'Tous']].map(([k, l]) =>
            <button key={k} aria-pressed={tab === k} onClick={() => setTab(k)}>{l}</button>)}
        </div>
        <input placeholder="Rechercher un nom…" value={q} onChange={e => setQ(e.target.value)} />
        <button className="sm" onClick={() => load()}>Actualiser</button>
        <button className="sm" onClick={csv} disabled={!rows.length}>Exporter CSV</button>
      </div>
      <div className="list">
        {shown.length === 0 && <p className="empty">Aucune réponse pour le moment.</p>}
        {shown.map(r => (
          <div className="row" key={r.id}>
            <div><span className="n">{r.nom}</span><small>{r.telephone ? <><a href={'tel:' + r.telephone.replace(/\s/g, '')} style={{ color: 'inherit' }}>{r.telephone}</a> · </> : null}{fmt(r.created_at)}</small></div>
            <span className={'pill ' + r.presence}>{r.presence === 'oui' ? `${r.personnes} pers.` : 'Absent'}</span>
            <button className="del" title="Supprimer" aria-label={`Supprimer ${r.nom}`} onClick={() => del(r)}>×</button>
          </div>
        ))}
      </div>
    </main>
  );
}
