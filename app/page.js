'use client';
import { useEffect, useRef, useState } from 'react';

function Envelope() {
  const [open, setOpen] = useState(false);
  const [gone, setGone] = useState(false);
  useEffect(() => {
    if (!gone) document.body.style.overflow = 'hidden';
    return () => { document.body.style.overflow = ''; };
  }, [gone]);
  const go = () => {
    if (open) return;
    setOpen(true);
    setTimeout(() => {
      setGone(true);
      document.body.style.overflow = '';
      window.scrollTo(0, 0);
      try { if (location.hash) document.querySelector(location.hash)?.scrollIntoView(); } catch {}
    }, 2700);
  };
  return (
    <div className={'env' + (open ? ' open' : '') + (gone ? ' gone' : '')} role="button" tabIndex={0}
      aria-label="Ouvrir l’invitation" onClick={go}
      onKeyDown={k => { if (k.key === 'Enter' || k.key === ' ') { k.preventDefault(); go(); } }}>
      <div className="env-wrap"><div className="env-back" />
        <div className="env-card serif"><span>Vous êtes invités</span><b>Augustin &amp; Ayoni</b></div>
        <div className="env-front" /><div className="env-flap" /><div className="seal serif">A&amp;A</div></div>
      <p className="env-hint">Touchez pour ouvrir</p>
    </div>
  );
}

function Reveal({ as: Tag = 'section', className = '', children, ...rest }) {
  const ref = useRef(null);
  const [inView, setIn] = useState(false);
  useEffect(() => {
    const el = ref.current;
    if (!('IntersectionObserver' in window)) { setIn(true); return; }
    const io = new IntersectionObserver(es => es.forEach(e => { if (e.isIntersecting) { setIn(true); io.disconnect(); } }), { threshold: .12 });
    io.observe(el);
    return () => io.disconnect();
  }, []);
  return <Tag ref={ref} className={`${className} rv${inView ? ' in' : ''}`} {...rest}>{children}</Tag>;
}

function Rsvp() {
  const [nom, setNom] = useState('');
  const [tel, setTel] = useState('');
  const [v, setV] = useState('oui');
  const [nb, setNb] = useState('1');
  const [err, setErr] = useState('');
  const [sent, setSent] = useState(false);
  const [busy, setBusy] = useState(false);
  const n = nom.trim();

  const onSend = async e => {
    e.preventDefault();
    if (!n) { setErr('Merci d’indiquer votre nom.'); document.getElementById('nom').focus(); return; }
    if (tel.replace(/\D/g, '').length < 8) { setErr('Merci d’indiquer un numéro de téléphone valide.'); document.getElementById('tel').focus(); return; }
    setBusy(true);
    try {
      const r = await fetch('/api/rsvp', { method: 'POST', headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ nom: n, telephone: tel.trim(), presence: v, personnes: Number(nb) }) });
      if (r.ok) setSent({ nom: n, presence: v, personnes: Number(nb) });
      else setErr((await r.json().catch(() => ({}))).error || 'Une erreur est survenue, merci de réessayer.');
    } catch { setErr('Connexion impossible, merci de réessayer.'); }
    setBusy(false);
  };

  if (sent) return (
    <div className="confirm" role="status">
      <div className="orn">◆</div>
      {sent.presence === 'oui' ? <>
        <h3 className="serif">Merci {sent.nom} !</h3>
        <p>Votre présence est bien confirmée{sent.personnes > 1 ? ` pour ${sent.personnes} personnes` : ''}.</p>
        <p>Nous avons hâte de célébrer avec vous le <b>samedi 19 décembre 2026</b>.</p>
      </> : <>
        <h3 className="serif">Merci {sent.nom}</h3>
        <p>Nous avons bien noté que vous ne pourrez pas être des nôtres.</p>
        <p>Vous serez dans nos pensées en ce jour si spécial.</p>
      </>}
      <button type="button" className="cta ghost" onClick={() => setSent(false)}>Modifier ma réponse</button>
    </div>
  );

  return (
    <form onSubmit={onSend}>
      <div><label htmlFor="nom">Votre nom complet</label>
        <input id="nom" autoComplete="name" placeholder="Ex : Kouamé Aya" value={nom} onChange={e => { setNom(e.target.value); setErr(''); setSent(false); }} /></div>
      <div><label htmlFor="tel">Numéro de téléphone</label>
        <input id="tel" type="tel" inputMode="tel" autoComplete="tel" placeholder="Ex : 07 00 00 00 00" value={tel} onChange={e => { setTel(e.target.value); setErr(''); setSent(false); }} /></div>
      <div><label>Serez-vous des nôtres ?</label>
        <div className="choice">
          <button type="button" aria-pressed={v === 'oui'} onClick={() => { setV('oui'); setSent(false); }}>Avec joie</button>
          <button type="button" aria-pressed={v === 'non'} onClick={() => { setV('non'); setSent(false); }}>Je ne pourrai pas</button>
        </div></div>
      {v === 'oui' && <div><label htmlFor="nb">Nombre de personnes</label>
        <select id="nb" value={nb} onChange={e => { setNb(e.target.value); setSent(false); }}>
          {[1, 2, 3, 4, 5, 6].map(i => <option key={i}>{i}</option>)}
        </select></div>}
      <p className="err" role="alert">{err}</p>
      <button className="cta" type="submit" disabled={busy} style={{ width: '100%', border: 0, cursor: 'pointer', fontFamily: 'inherit', opacity: busy ? .6 : 1 }}>{busy ? 'Envoi…' : 'Envoyer ma réponse'}</button>
    </form>
  );
}

export default function Invitation() {
  return (
    <>
      <Envelope />
      <header className="hero">
        <div className="mono serif">A&amp;A</div>
        <div className="eyebrow">Ensemble avec leurs familles</div>
        <h1>Augustin<em>&amp;</em>Ayoni</h1>
        <div className="eyebrow">vous convient à leur mariage</div>
        <div className="date">Samedi<b>19 · 12 · 2026</b></div>
        <div className="orn">◆</div>
        <a className="cta" style={{ minWidth: 250 }} href="#confirmation">Confirmer ma présence</a>
        <div className="scroll">Défiler ↓</div>
      </header>

      <Reveal>
        <div className="eyebrow">Avec joie</div>
        <h2>Une journée pour célébrer l’amour</h2>
        <p className="lead">Nous aurons l’immense bonheur de partager avec vous les moments les plus précieux de notre union.</p>
        <p className="parents" style={{ marginTop: 34, fontSize: 12, letterSpacing: '.2em', textTransform: 'uppercase', color: 'var(--muted)' }}>KOUAKOU KOUASSI AUGUSTIN<br />ASSIROU AYONI YETUNDE SIDIKAT</p>
      </Reveal>

      <Reveal>
        <div className="eyebrow">Parole de Dieu</div>
        <h2>Deux cœurs, une bénédiction</h2>
        <div className="verse"><p className="lead">« Celui qui trouve une femme trouve le bonheur ; c’est une grâce qu’il obtient de l’Éternel. »</p><cite>Proverbes 18:22</cite><span className="who">Augustin</span></div>
        <div className="verse" style={{ margin: 0 }}><p className="lead">« Pareil à un pommier au milieu des arbres de la forêt, tel est mon bien-aimé parmi les jeunes hommes. J’aime m’asseoir à son ombre, et son fruit est doux à mon goût. »</p><cite>Cantique des cantiques 2:3</cite><span className="who">Ayoni</span></div>
      </Reveal>

      <Reveal className="alt"><div>
        <div className="eyebrow">Programme</div>
        <h2>Le déroulé de la journée</h2>
        <div className="tl">
          <div className="ev"><div className="h">09h00</div><h3>Mairie</h3><p>Mairie du Plateau</p></div>
          <div className="ev"><div className="h">12h00</div><h3>Bénédiction religieuse</h3><p>Église des Assemblées de Dieu d’Aboboté<br />Temple Le Triomphe du Christ</p></div>
          <div className="ev"><div className="h">15h00</div><h3>Réception</h3><p>494 Rue Tiémoko Justin Koné<br />ou Lakhouse, derrière la SODEFOR</p></div>
        </div>
      </div></Reveal>

      <Reveal id="confirmation">
        <div className="eyebrow">R.S.V.P.</div>
        <h2>Confirmez votre présence</h2>
        <Rsvp />
      </Reveal>

      <Reveal className="alt"><div>
        <div className="eyebrow">Contact</div>
        <h2>Une question ?</h2>
        <a className="cta ghost" href="tel:+2250788730795">07 88 73 07 95</a>
      </div></Reveal>

      <footer className="serif" style={{ fontSize: 22, fontStyle: 'italic' }}>Votre présence sera notre plus beau cadeau.<br /><span style={{ fontSize: 13, fontStyle: 'normal', letterSpacing: '.3em' }}>A &amp; A · 2026</span></footer>
    </>
  );
}
