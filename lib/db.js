import { createClient } from '@libsql/client';
import fs from 'node:fs';
import path from 'node:path';

// Base SQLite via libSQL.
// - En local : fichier ./data/rsvp.db
// - En production : TURSO_DATABASE_URL (+ TURSO_AUTH_TOKEN) = SQLite hébergé et persistant.
//   Sans Turso sur Vercel, repli sur /tmp (non persistant entre redémarrages).
function makeClient() {
  if (process.env.TURSO_DATABASE_URL) {
    return createClient({ url: process.env.TURSO_DATABASE_URL, authToken: process.env.TURSO_AUTH_TOKEN });
  }
  const dir = process.env.VERCEL ? '/tmp' : path.join(process.cwd(), 'data');
  fs.mkdirSync(dir, { recursive: true });
  return createClient({ url: 'file:' + path.join(dir, 'rsvp.db') });
}

const g = globalThis;
let ready;
export async function db() {
  if (!g.__rsvpDb) g.__rsvpDb = makeClient();
  if (!ready) {
    ready = g.__rsvpDb.execute(`CREATE TABLE IF NOT EXISTS rsvp (
      id INTEGER PRIMARY KEY AUTOINCREMENT,
      nom TEXT NOT NULL,
      presence TEXT NOT NULL CHECK (presence IN ('oui','non')),
      personnes INTEGER NOT NULL DEFAULT 0,
      created_at TEXT NOT NULL DEFAULT (datetime('now'))
    )`);
  }
  await ready;
  return g.__rsvpDb;
}

export function isAdmin(req) {
  const pw = process.env.ADMIN_PASSWORD || 'mariage2026';
  return req.headers.get('x-admin-password') === pw;
}

export const persistent = () => !!process.env.TURSO_DATABASE_URL || !process.env.VERCEL;
