# Mariage Augustin & Ayoni — invitation + liste des invités

App React (Next.js) : l’invitation d’origine, un formulaire RSVP qui enregistre chaque réponse
dans une base SQLite puis ouvre WhatsApp, et un espace des mariés sur `/admin`.

## Lancer en local
```
npm install
npm run dev        # http://localhost:3000  ·  admin : http://localhost:3000/admin
```
La base locale est le fichier `data/rsvp.db`.

## Variables d’environnement (Vercel → Settings → Environment Variables)
| Variable | Rôle |
|---|---|
| `ADMIN_PASSWORD` | Mot de passe de `/admin` (défaut : `mariage2026` — à changer !) |
| `TURSO_DATABASE_URL` | URL libsql://… d’une base SQLite hébergée Turso (persistance en production) |
| `TURSO_AUTH_TOKEN` | Jeton de cette base Turso |

Sur Vercel le disque est éphémère : sans Turso, la base SQLite vit dans `/tmp` et peut être
effacée à tout moment. Turso (offre gratuite) est du SQLite hébergé, le code est le même.
