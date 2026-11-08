'use client';
import { useEffect, useRef, useState } from 'react';

const WHATSAPP = '2250777442882';

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
  const [v, setV] = useState('oui');
  const [nb, setNb] = useState('1');
  const [err, setErr] = useState('');
  const [sent, setSent] = useState(false);
  const n = nom.trim();
  const text = v === 'oui'
    ? `Bonjour, c’est ${n}. Je confirme ma présence au mariage d’Augustin et Ayoni le 19 décembre 2026 (${nb} personne${nb > 1 ? 's' : ''}). Avec joie !`
    : `Bonjour, c’est ${n}. Je suis désolé(e), je ne pourrai pas être présent(e) au mariage d’Augustin et Ayoni le 19 décembre 2026. Tous mes vœux de bonheur !`;
  const href = `https://wa.me/${WHATSAPP}?text=${encodeURIComponent(text)}`;

  const onSend = e => {
    if (!n) { e.preventDefault(); setErr('Merci d’indiquer votre nom.'); document.getElementById('nom').focus(); return; }
    // Enregistre la réponse en base, puis le lien ouvre WhatsApp (comportement d’origine).
    fetch('/api/rsvp', { method: 'POST', keepalive: true, headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ nom: n, presence: v, personnes: Number(nb) }) })
      .then(r => { if (r.ok) setSent(true); }).catch(() => {});
  };

  return (
    <form onSubmit={e => e.preventDefault()}>
      <div><label htmlFor="nom">Votre nom complet</label>
        <input id="nom" autoComplete="name" placeholder="Ex : Kouamé Aya" value={nom} onChange={e => { setNom(e.target.value); setErr(''); setSent(false); }} /></div>
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
      <a className="cta" href={href} target="_blank" rel="noopener" onClick={onSend}>Envoyer ma réponse</a>
      {sent ? <p className="ok">Merci ! Votre réponse a bien été enregistrée.</p>
        : <p style={{ fontSize: 12, color: 'var(--muted)', textAlign: 'center', margin: 0 }}>Votre réponse sera enregistrée et envoyée par WhatsApp aux mariés.</p>}
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
