<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="WinterCare Lawn — your complete, practical guide to protecting lawns, plants and gardens through the cold winter months." />
  <meta name="theme-color" content="#0d3b3e" />
  <title>WinterCare Lawn — Complete Winter Garden Care Guide</title>
  <style>
    :root {
      --ink: #12353a;
      --ink-soft: #42616a;
      --pine: #0d3b3e;
      --pine-2: #135258;
      --frost: #e8f3f4;
      --frost-2: #f4f9f9;
      --ice: #cfe6e8;
      --mint: #4f9d8b;
      --mint-bright: #6fc2ae;
      --snow: #ffffff;
      --gold: #d8a24a;
      --shadow: 0 18px 50px rgba(13, 59, 62, 0.12);
      --shadow-sm: 0 6px 18px rgba(13, 59, 62, 0.10);
      --radius: 18px;
      --maxw: 1120px;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }

    html { scroll-behavior: smooth; }

    body {
      font-family: "Segoe UI", system-ui, -apple-system, Roboto, Helvetica, Arial, sans-serif;
      color: var(--ink);
      background: var(--frost-2);
      line-height: 1.65;
      -webkit-font-smoothing: antialiased;
    }

    a { color: inherit; text-decoration: none; }
    img { max-width: 100%; display: block; }
    ul { list-style: none; }

    /* Inline SVG icons */
    .icon {
      width: 1em;
      height: 1em;
      display: block;
      fill: none;
      stroke: currentColor;
      stroke-width: 2;
      stroke-linecap: round;
      stroke-linejoin: round;
      flex-shrink: 0;
    }
    .msg-icon { display: inline-block; vertical-align: -0.15em; margin-right: .3em; }

    .container { width: min(92%, var(--maxw)); margin-inline: auto; }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: .55rem;
      padding: .85rem 1.6rem;
      border-radius: 999px;
      font-weight: 600;
      font-size: .96rem;
      border: 1.5px solid transparent;
      cursor: pointer;
      transition: transform .18s ease, box-shadow .18s ease, background .18s ease;
    }
    .btn:hover { transform: translateY(-2px); }
    .btn-primary {
      background: var(--mint);
      color: #fff;
      box-shadow: 0 10px 24px rgba(79, 157, 139, .35);
    }
    .btn-primary:hover { background: #468c7c; }
    .btn-ghost {
      background: transparent;
      color: var(--snow);
      border-color: rgba(255,255,255,.5);
    }
    .btn-ghost:hover { background: rgba(255,255,255,.12); }
    .btn-outline {
      background: transparent;
      color: var(--pine);
      border-color: var(--ice);
    }
    .btn-outline:hover { background: var(--frost); }

    /* ---------- Header ---------- */
    header.site-header {
      position: sticky;
      top: 0;
      z-index: 50;
      background: rgba(244, 249, 249, .9);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid var(--ice);
    }
    .nav {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-block: .85rem;
    }
    .brand {
      display: flex;
      align-items: center;
      gap: .6rem;
      font-weight: 800;
      font-size: 1.2rem;
      letter-spacing: -.02em;
      color: var(--pine);
    }
    .brand .leaf {
      width: 34px; height: 34px;
      display: grid; place-items: center;
      background: var(--pine);
      color: #fff;
      border-radius: 10px;
      font-size: 1.05rem;
    }
    .brand small { display: block; font-size: .62rem; font-weight: 600; color: var(--mint); letter-spacing: .18em; text-transform: uppercase; }
    .nav-links { display: flex; align-items: center; gap: 1.6rem; }
    .nav-links a { font-size: .92rem; font-weight: 600; color: var(--ink-soft); transition: color .15s; }
    .nav-links a:hover { color: var(--mint); }
    .menu-toggle {
      display: none;
      background: none; border: none; cursor: pointer;
      color: var(--pine);
    }
    .menu-toggle .icon { width: 1.6rem; height: 1.6rem; }

    /* ---------- Hero ---------- */
    .hero {
      position: relative;
      overflow: hidden;
      background: linear-gradient(135deg, var(--pine) 0%, var(--pine-2) 55%, #1a6b68 100%);
      color: #fff;
      padding: 5.5rem 0 6.5rem;
    }
    .hero::before, .hero::after {
      content: "";
      position: absolute;
      border-radius: 50%;
      background: rgba(255,255,255,.05);
    }
    .hero::before { width: 420px; height: 420px; top: -160px; right: -80px; }
    .hero::after { width: 260px; height: 260px; bottom: -120px; left: -60px; }
    .hero-grid {
      position: relative;
      z-index: 1;
      display: grid;
      grid-template-columns: 1.15fr .85fr;
      gap: 3rem;
      align-items: center;
    }
    .eyebrow {
      display: inline-flex; align-items: center; gap: .5rem;
      font-size: .78rem; font-weight: 700; letter-spacing: .14em;
      text-transform: uppercase;
      color: #bfe6dc;
      background: rgba(255,255,255,.1);
      padding: .45rem .9rem;
      border-radius: 999px;
      margin-bottom: 1.3rem;
    }
    .hero h1 {
      font-size: clamp(2.4rem, 5.2vw, 3.9rem);
      line-height: 1.08;
      letter-spacing: -.03em;
      margin-bottom: 1.2rem;
    }
    .hero h1 span { color: var(--mint-bright); }
    .hero p.lead {
      font-size: 1.12rem;
      color: #d7ebe8;
      max-width: 540px;
      margin-bottom: 2rem;
    }
    .hero-actions { display: flex; flex-wrap: wrap; gap: .8rem; }
    .hero-actions .icon { width: 1.05rem; height: 1.05rem; }
    .hero-card {
      background: rgba(255,255,255,.1);
      border: 1px solid rgba(255,255,255,.2);
      border-radius: 24px;
      padding: 1.8rem;
      backdrop-filter: blur(6px);
    }
    .hero-card h3 { font-size: 1rem; margin-bottom: 1rem; color: #fff; }
    .hero-stat {
      display: flex; align-items: center; gap: 1rem;
      padding: .85rem 0;
      border-bottom: 1px solid rgba(255,255,255,.14);
    }
    .hero-stat:last-child { border-bottom: none; }
    .hero-stat .ic {
      width: 42px; height: 42px; flex: 0 0 42px;
      display: grid; place-items: center;
      background: rgba(255,255,255,.14);
      border-radius: 12px; font-size: 1.2rem;
    }
    .hero-stat strong { display: block; font-size: .95rem; }
    .hero-stat span { font-size: .8rem; color: #bcd9d5; }

    /* ---------- Section shared ---------- */
    section.block { padding: 5rem 0; }
    .section-head { max-width: 640px; margin-bottom: 2.6rem; }
    .section-head.center { margin-inline: auto; text-align: center; }
    .kicker {
      font-size: .78rem; font-weight: 800; letter-spacing: .16em;
      text-transform: uppercase; color: var(--mint);
      margin-bottom: .6rem;
    }
    .section-head h2 {
      font-size: clamp(1.9rem, 4vw, 2.6rem);
      letter-spacing: -.025em;
      line-height: 1.15;
      margin-bottom: .8rem;
    }
    .section-head p { color: var(--ink-soft); }

    /* ---------- Quick tips strip ---------- */
    .tips {
      background: var(--snow);
      padding: 2.4rem 0;
      border-bottom: 1px solid var(--ice);
    }
    .tips-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1.4rem;
    }
    .tip {
      display: flex; align-items: center; gap: .9rem;
    }
    .tip .ic {
      width: 48px; height: 48px; flex: 0 0 48px;
      border-radius: 14px;
      background: var(--frost);
      color: var(--pine);
      display: grid; place-items: center; font-size: 1.35rem;
    }
    .tip strong { display: block; font-size: .95rem; }
    .tip span { font-size: .82rem; color: var(--ink-soft); }

    /* ---------- Guide cards ---------- */
    .cards {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem;
    }
    .card {
      background: var(--snow);
      border: 1px solid var(--ice);
      border-radius: var(--radius);
      padding: 1.9rem;
      box-shadow: var(--shadow-sm);
      transition: transform .2s ease, box-shadow .2s ease, border-color .2s;
    }
    .card:hover {
      transform: translateY(-6px);
      box-shadow: var(--shadow);
      border-color: var(--mint-bright);
    }
    .card .ic {
      width: 52px; height: 52px;
      display: grid; place-items: center;
      font-size: 1.5rem;
      border-radius: 14px;
      background: linear-gradient(135deg, var(--frost), var(--ice));
      margin-bottom: 1.1rem;
      color: var(--pine-2);
    }
    .card h3 { font-size: 1.15rem; margin-bottom: .55rem; }
    .card p { font-size: .9rem; color: var(--ink-soft); margin-bottom: .9rem; }
    .card ul { display: grid; gap: .45rem; }
    .card li {
      font-size: .86rem;
      padding-left: 1.3rem;
      position: relative;
      color: var(--ink-soft);
    }
    .card li::before {
      content: "";
      position: absolute; left: 0; top: 3px;
      width: 14px; height: 14px;
      background: no-repeat center / contain url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%234f9d8b' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='20 6 9 17 4 12'/%3E%3C/svg%3E");
    }

    /* ---------- Checklist / calendar ---------- */
    .checklist { background: var(--frost); }
    .calendar {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem;
    }
    .month {
      background: var(--snow);
      border: 1px solid var(--ice);
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: var(--shadow-sm);
    }
    .month .top {
      background: linear-gradient(135deg, var(--pine), var(--pine-2));
      color: #fff;
      padding: 1.1rem 1.4rem;
      display: flex; align-items: center; justify-content: space-between;
    }
    .month .top h3 { font-size: 1.1rem; }
    .month .top span { font-size: .78rem; color: #bfe6dc; }
    .month ul { padding: 1.2rem 1.4rem 1.5rem; display: grid; gap: .7rem; }
    .month li { display: flex; gap: .65rem; font-size: .88rem; color: var(--ink-soft); }
    .month li .icon {
      width: 12px; height: 12px;
      color: var(--mint);
      stroke-width: 3;
      margin-top: .35rem;
    }

    /* ---------- FAQ ---------- */
    .faq-wrap { max-width: 800px; margin-inline: auto; }
    .faq-item {
      background: var(--snow);
      border: 1px solid var(--ice);
      border-radius: 14px;
      margin-bottom: .9rem;
      overflow: hidden;
    }
    .faq-q {
      width: 100%;
      display: flex; align-items: center; justify-content: space-between;
      gap: 1rem;
      padding: 1.15rem 1.4rem;
      background: none; border: none; cursor: pointer;
      font: inherit; font-weight: 650; font-size: 1rem;
      color: var(--ink);
      text-align: left;
    }
    .faq-q .plus {
      width: 1.2rem; height: 1.2rem;
      color: var(--mint);
      transition: transform .2s;
    }
    .faq-item.open .faq-q .plus { transform: rotate(45deg); }
    .faq-a {
      max-height: 0;
      overflow: hidden;
      transition: max-height .3s ease;
    }
    .faq-a p { padding: 0 1.4rem 1.3rem; color: var(--ink-soft); font-size: .92rem; }

    /* ---------- CTA ---------- */
    .cta {
      background: linear-gradient(135deg, var(--pine), var(--pine-2));
      color: #fff;
      text-align: center;
      padding: 4.5rem 0;
      border-radius: var(--radius);
      margin: 0 auto;
    }
    .cta-inner { width: min(90%, 760px); margin-inline: auto; }
    .cta h2 { font-size: clamp(1.8rem, 4vw, 2.5rem); margin-bottom: .8rem; letter-spacing: -.02em; }
    .cta p { color: #c9e2de; margin-bottom: 1.8rem; }
    .newsletter {
      display: flex; gap: .6rem; max-width: 500px; margin-inline: auto;
      flex-wrap: wrap; justify-content: center;
    }
    .newsletter input {
      flex: 1 1 240px;
      padding: .85rem 1.1rem;
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,.35);
      background: rgba(255,255,255,.12);
      color: #fff; font: inherit; outline: none;
    }
    .newsletter input::placeholder { color: #c9e2de; }
    .newsletter input:focus { border-color: var(--mint-bright); }
    .form-msg { display: block; width: 100%; margin-top: .7rem; font-size: .85rem; color: #bfe6dc; min-height: 1.2rem; }

    /* ---------- Footer ---------- */
    footer.site-footer {
      background: var(--ink);
      color: #c6d7d6;
      padding: 3.2rem 0 1.5rem;
      margin-top: 5rem;
    }
    .footer-grid {
      display: grid;
      grid-template-columns: 1.4fr 1fr 1fr;
      gap: 2rem;
      margin-bottom: 2rem;
    }
    .footer-brand .brand { color: #fff; margin-bottom: .8rem; }
    .footer-brand p { font-size: .9rem; max-width: 320px; }
    .footer-col h4 { color: #fff; font-size: .95rem; margin-bottom: .9rem; }
    .footer-col a, .footer-col button {
      display: block; font-size: .88rem; padding: .25rem 0;
      color: #b9cccb; background: none; border: none; cursor: pointer;
      font-family: inherit; text-align: left;
    }
    .footer-col a:hover, .footer-col button:hover { color: var(--mint-bright); }
    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,.12);
      padding-top: 1.3rem;
      display: flex; justify-content: space-between; flex-wrap: wrap; gap: .8rem;
      font-size: .82rem;
    }
    .footer-bottom button {
      background: none; border: none; color: #b9cccb; cursor: pointer; font: inherit;
    }
    .footer-bottom button:hover { color: var(--mint-bright); }

    /* ---------- Modal (Terms / Privacy) ---------- */
    .modal-overlay {
      position: fixed; inset: 0; z-index: 100;
      background: rgba(8, 28, 30, .65);
      backdrop-filter: blur(4px);
      display: flex; align-items: center; justify-content: center;
      padding: 1.2rem;
      opacity: 0; visibility: hidden;
      transition: opacity .25s, visibility .25s;
    }
    .modal-overlay.active { opacity: 1; visibility: visible; }
    .modal {
      background: var(--snow);
      width: min(100%, 680px);
      max-height: 82vh;
      border-radius: 20px;
      display: flex; flex-direction: column;
      box-shadow: var(--shadow);
      transform: translateY(16px) scale(.98);
      transition: transform .25s;
    }
    .modal-overlay.active .modal { transform: translateY(0) scale(1); }
    .modal-head {
      display: flex; align-items: center; justify-content: space-between;
      padding: 1.3rem 1.6rem;
      border-bottom: 1px solid var(--ice);
    }
    .modal-head h2 { font-size: 1.3rem; }
    .modal-close {
      background: var(--frost); border: none; cursor: pointer;
      width: 36px; height: 36px; border-radius: 10px;
      color: var(--pine); font-size: 1.1rem;
      display: grid; place-items: center;
    }
    .modal-body {
      padding: 1.5rem 1.6rem 2rem;
      overflow-y: auto;
      font-size: .92rem;
      color: var(--ink-soft);
    }
    .modal-body h3 { color: var(--ink); font-size: 1.02rem; margin: 1.3rem 0 .45rem; }
    .modal-body h3:first-child { margin-top: 0; }
    .modal-body p { margin-bottom: .7rem; }
    .modal-body ul { list-style: disc; padding-left: 1.2rem; display: grid; gap: .35rem; }
    .modal-body .updated { font-size: .8rem; color: var(--mint); font-weight: 700; }

    /* ---------- Back to top ---------- */
    #toTop {
      position: fixed; right: 1.4rem; bottom: 1.4rem; z-index: 40;
      width: 46px; height: 46px; border-radius: 50%;
      background: var(--pine); color: #fff; border: none; cursor: pointer;
      font-size: 1.2rem; box-shadow: var(--shadow-sm);
      display: grid; place-items: center;
      opacity: 0; visibility: hidden; transition: opacity .25s, visibility .25s;
    }
    #toTop.show { opacity: 1; visibility: visible; }
    #toTop .icon { width: 1.25rem; height: 1.25rem; }

    /* ---------- Responsive ---------- */
    @media (max-width: 900px) {
      .hero-grid { grid-template-columns: 1fr; }
      .hero-card { max-width: 480px; }
      .cards, .calendar { grid-template-columns: repeat(2, 1fr); }
      .tips-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 680px) {
      .menu-toggle { display: block; }
      .nav-links {
        display: none;
        position: absolute; top: 100%; left: 0; right: 0;
        flex-direction: column; align-items: stretch; gap: 0;
        background: var(--snow); border-bottom: 1px solid var(--ice);
        padding: .6rem 5%;
        box-shadow: var(--shadow-sm);
      }
      .nav-links.show { display: flex; }
      .nav-links a { padding: .7rem .2rem; }
      .cards, .calendar, .tips-grid, .footer-grid { grid-template-columns: 1fr; }
      .hero { padding: 4rem 0 4.5rem; }
      section.block { padding: 3.5rem 0; }
    }
  </style>
</head>
<body>

  <!-- ===== SVG icon sprite ===== -->
  <svg xmlns="http://www.w3.org/2000/svg" style="position:absolute;width:0;height:0;overflow:hidden" aria-hidden="true">
    <symbol id="i-snowflake" viewBox="0 0 24 24">
      <line x1="12" y1="2" x2="12" y2="22"/><line x1="2" y1="12" x2="22" y2="12"/>
      <line x1="4.9" y1="4.9" x2="19.1" y2="19.1"/><line x1="19.1" y1="4.9" x2="4.9" y2="19.1"/>
      <path d="M9 4l3 3 3-3M9 20l3-3 3 3M4 9l3 3-3 3M20 9l-3 3 3 3"/>
    </symbol>
    <symbol id="i-sprout" viewBox="0 0 24 24">
      <path d="M7 21h10"/><path d="M12 21v-9"/>
      <path d="M12 12C9 12 7 10 7 7c3 0 5 2 5 5z"/>
      <path d="M12 14c3 0 5-2 5-5-3 0-5 2-5 5z"/>
    </symbol>
    <symbol id="i-leaf" viewBox="0 0 24 24">
      <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.5 19 2c1 2 2 4.2 2 8 0 5.5-4.8 10-10 10z"/>
      <path d="M2 21c0-3 1.9-5.4 5.1-6C9.5 14.5 12 13 13 12"/>
    </symbol>
    <symbol id="i-plant" viewBox="0 0 24 24">
      <path d="M4 13h16l-2 8H6l-2-8z"/><path d="M12 13V7"/>
      <path d="M12 7c0-2.5 2-4.5 4.5-4.5C16.5 5 14.5 7 12 7z"/>
      <path d="M12 9c0-2-1.8-3.5-4-3.5C8 7.5 9.8 9 12 9z"/>
    </symbol>
    <symbol id="i-calendar" viewBox="0 0 24 24">
      <rect x="3" y="5" width="18" height="17" rx="2"/>
      <line x1="16" y1="3" x2="16" y2="7"/><line x1="8" y1="3" x2="8" y2="7"/>
      <line x1="3" y1="11" x2="21" y2="11"/>
    </symbol>
    <symbol id="i-droplet" viewBox="0 0 24 24">
      <path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"/>
    </symbol>
    <symbol id="i-layers" viewBox="0 0 24 24">
      <polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/>
      <polyline points="2 12 12 17 22 12"/>
    </symbol>
    <symbol id="i-scissors" viewBox="0 0 24 24">
      <circle cx="6" cy="6" r="3"/><circle cx="6" cy="18" r="3"/>
      <line x1="20" y1="4" x2="8.1" y2="15.9"/><line x1="14.5" y1="14.5" x2="20" y2="20"/>
      <line x1="8.1" y1="8.1" x2="12" y2="12"/>
    </symbol>
    <symbol id="i-shield" viewBox="0 0 24 24">
      <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
      <polyline points="9 12 11 14 15 10"/>
    </symbol>
    <symbol id="i-grass" viewBox="0 0 24 24">
      <line x1="2" y1="21" x2="22" y2="21"/>
      <path d="M6 21c-.5-4 .5-7 3-10"/><path d="M12 21c0-5 0-9 2-13"/>
      <path d="M18 21c.5-4-.5-7-3-10"/><path d="M3 21c0-3 .5-5 2-7"/>
      <path d="M21 21c0-3-.5-5-2-7"/>
    </symbol>
    <symbol id="i-bug" viewBox="0 0 24 24">
      <path d="M9 6a3 3 0 0 1 6 0"/><rect x="7" y="6" width="10" height="13" rx="5"/>
      <line x1="12" y1="6" x2="12" y2="19"/>
      <path d="M7 11H4M7 15H4M17 11h3M17 15h3M9 19l-2 2M15 19l2 2"/>
    </symbol>
    <symbol id="i-tools" viewBox="0 0 24 24">
      <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.8-3.8a6 6 0 0 1-7.9 7.9l-6.9 6.9a2.1 2.1 0 0 1-3-3l6.9-6.9a6 6 0 0 1 7.9-7.9l-3.8 3.8z"/>
    </symbol>
    <symbol id="i-check" viewBox="0 0 24 24">
      <polyline points="20 6 9 17 4 12"/>
    </symbol>
    <symbol id="i-alert" viewBox="0 0 24 24">
      <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="13"/>
      <line x1="12" y1="17" x2="12.01" y2="17"/>
    </symbol>
    <symbol id="i-check-circle" viewBox="0 0 24 24">
      <path d="M22 11.1V12a10 10 0 1 1-5.9-9.1"/>
      <polyline points="22 4 12 14.01 9 11.01"/>
    </symbol>
    <symbol id="i-x" viewBox="0 0 24 24">
      <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
    </symbol>
    <symbol id="i-plus" viewBox="0 0 24 24">
      <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
    </symbol>
    <symbol id="i-arrow-up" viewBox="0 0 24 24">
      <line x1="12" y1="19" x2="12" y2="5"/><polyline points="5 12 12 5 19 12"/>
    </symbol>
    <symbol id="i-arrow-down" viewBox="0 0 24 24">
      <line x1="12" y1="5" x2="12" y2="19"/><polyline points="19 12 12 19 5 12"/>
    </symbol>
    <symbol id="i-menu" viewBox="0 0 24 24">
      <line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/>
      <line x1="3" y1="18" x2="21" y2="18"/>
    </symbol>
    <symbol id="i-dot" viewBox="0 0 24 24">
      <circle cx="12" cy="12" r="8" fill="currentColor" stroke="none"/>
    </symbol>
  </svg>

  <!-- ===== Header ===== -->
  <header class="site-header">
    <div class="container nav">
      <a href="#top" class="brand">
        <span class="leaf"><svg class="icon"><use href="#i-snowflake"/></svg></span>
        <span>WinterCare Lawn<small>Garden Survival Guide</small></span>
      </a>
      <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
        <svg class="icon"><use href="#i-menu"/></svg>
      </button>
      <nav class="nav-links" id="navLinks">
        <a href="#guide">The Guide</a>
        <a href="#calendar">Calendar</a>
        <a href="#faq">FAQ</a>
        <a href="#newsletter">Get Tips</a>
      </nav>
    </div>
  </header>

  <!-- ===== Hero ===== -->
  <section class="hero" id="top">
    <div class="container hero-grid">
      <div>
        <span class="eyebrow"><svg class="icon"><use href="#i-snowflake"/></svg> Winter Gardening Made Simple</span>
        <h1>Keep your garden <span>alive</span> all winter long.</h1>
        <p class="lead">A complete, no-nonsense guide to protecting your lawn, plants and soil through frost, snow and freezing temperatures — so everything comes back greener in spring.</p>
        <div class="hero-actions">
          <a href="#guide" class="btn btn-primary">Explore the guide <svg class="icon"><use href="#i-arrow-down"/></svg></a>
          <a href="#calendar" class="btn btn-ghost">View winter calendar</a>
        </div>
      </div>
      <aside class="hero-card">
        <h3>This guide covers</h3>
        <div class="hero-stat">
          <div class="ic"><svg class="icon"><use href="#i-sprout"/></svg></div>
          <div><strong>Lawn &amp; soil care</strong><span>Feeding, aerating &amp; frost protection</span></div>
        </div>
        <div class="hero-stat">
          <div class="ic"><svg class="icon"><use href="#i-leaf"/></svg></div>
          <div><strong>Pruning &amp; mulching</strong><span>When to cut and how to insulate</span></div>
        </div>
        <div class="hero-stat">
          <div class="ic"><svg class="icon"><use href="#i-plant"/></svg></div>
          <div><strong>Plants &amp; containers</strong><span>Indoor and outdoor plant safety</span></div>
        </div>
        <div class="hero-stat">
          <div class="ic"><svg class="icon"><use href="#i-calendar"/></svg></div>
          <div><strong>Month-by-month plan</strong><span>A simple winter to-do calendar</span></div>
        </div>
      </aside>
    </div>
  </section>

  <!-- ===== Quick tips strip ===== -->
  <div class="tips">
    <div class="container tips-grid">
      <div class="tip"><div class="ic"><svg class="icon"><use href="#i-droplet"/></svg></div><div><strong>Water before a freeze</strong><span>Moist soil holds heat better</span></div></div>
      <div class="tip"><div class="ic"><svg class="icon"><use href="#i-layers"/></svg></div><div><strong>Mulch roots deeply</strong><span>2–4 inches of insulation</span></div></div>
      <div class="tip"><div class="ic"><svg class="icon"><use href="#i-scissors"/></svg></div><div><strong>Prune dormant plants</strong><span>But not spring bloomers</span></div></div>
      <div class="tip"><div class="ic"><svg class="icon"><use href="#i-shield"/></svg></div><div><strong>Shield tender plants</strong><span>Cloches, fleece or move indoors</span></div></div>
    </div>
  </div>

  <!-- ===== Guide cards ===== -->
  <section class="block" id="guide">
    <div class="container">
      <div class="section-head center">
        <p class="kicker">The essentials</p>
        <h2>Your winter care toolkit</h2>
        <p>Eight practical pillars that keep a garden healthy through the coldest months. Work through them once, then maintain with the calendar below.</p>
      </div>
      <div class="cards">
        <article class="card">
          <div class="ic"><svg class="icon"><use href="#i-grass"/></svg></div>
          <h3>Lawn Care</h3>
          <p>Your lawn goes dormant, but it still needs a little attention before the snow arrives.</p>
          <ul>
            <li>Apply a winter fertiliser in late autumn</li>
            <li>Aerate compacted soil to help roots breathe</li>
            <li>Keep traffic off frozen or waterlogged grass</li>
            <li>Set mower height to about 5 cm before dormancy</li>
          </ul>
        </article>
        <article class="card">
          <div class="ic"><svg class="icon"><use href="#i-leaf"/></svg></div>
          <h3>Mulching &amp; Soil</h3>
          <p>Insulate roots and lock in moisture with a protective layer of organic mulch.</p>
          <ul>
            <li>Add 2–4 inches of bark, straw or compost</li>
            <li>Keep mulch away from tree trunks and crowns</li>
            <li>Shred fallen leaves as a free soil booster</li>
            <li>Avoid digging heavy, frozen soil</li>
          </ul>
        </article>
        <article class="card">
          <div class="ic"><svg class="icon"><use href="#i-scissors"/></svg></div>
          <h3>Pruning</h3>
          <p>Timing matters. Dormancy is the safest window for most structural pruning.</p>
          <ul>
            <li>Prune dead or diseased branches anytime</li>
            <li>Shape deciduous trees and shrubs in dormancy</li>
            <li>Skip spring-flowering shrubs until after blooms</li>
            <li>Use sharp, clean, sterilised tools</li>
          </ul>
        </article>
        <article class="card">
          <div class="ic"><svg class="icon"><use href="#i-droplet"/></svg></div>
          <h3>Watering</h3>
          <p>Winter watering is lighter, but evergreens and new plantings still need it.</p>
          <ul>
            <li>Water deeply before the ground freezes</li>
            <li>Water on warm, dry days above freezing</li>
            <li>Focus on evergreens and newly planted stock</li>
            <li>Avoid evening watering to prevent ice</li>
          </ul>
        </article>
        <article class="card">
          <div class="ic"><svg class="icon"><use href="#i-shield"/></svg></div>
          <h3>Frost Protection</h3>
          <p>Shield vulnerable plants from frost, wind and heavy snow damage.</p>
          <ul>
            <li>Cover tender plants with horticultural fleece</li>
            <li>Use cloches for small beds and seedlings</li>
            <li>Brush heavy snow gently off branches</li>
            <li>Position windbreaks for exposed plants</li>
          </ul>
        </article>
        <article class="card">
          <div class="ic"><svg class="icon"><use href="#i-plant"/></svg></div>
          <h3>Containers &amp; Indoors</h3>
          <p>Potted plants and houseplants face their own winter challenges.</p>
          <ul>
            <li>Move tender pots into a sheltered spot or indoors</li>
            <li>Insulate container roots with bubble wrap or mulch</li>
            <li>Reduce houseplant watering in low light</li>
            <li>Keep plants away from cold drafts and heaters</li>
          </ul>
        </article>
        <article class="card">
          <div class="ic"><svg class="icon"><use href="#i-bug"/></svg></div>
          <h3>Pests &amp; Disease</h3>
          <p>Cold weather slows pests, but a few problems can persist or hide in wait.</p>
          <ul>
            <li>Check for overwintering insects on stems and bark</li>
            <li>Remove fallen diseased leaves and debris</li>
            <li>Watch for fungal issues in damp, mild spells</li>
            <li>Clean and oil tools before storage</li>
          </ul>
        </article>
        <article class="card">
          <div class="ic"><svg class="icon"><use href="#i-tools"/></svg></div>
          <h3>Tools &amp; Planning</h3>
          <p>Use the quiet season to get organised for a strong spring start.</p>
          <ul>
            <li>Clean, sharpen and oil all garden tools</li>
            <li>Drain and store hoses and irrigation systems</li>
            <li>Order seeds and plan next season's beds</li>
            <li>Test soil pH and plan amendments</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <!-- ===== Calendar ===== -->
  <section class="block checklist" id="calendar">
    <div class="container">
      <div class="section-head center">
        <p class="kicker">Stay on schedule</p>
        <h2>Winter care calendar</h2>
        <p>A simple month-by-month rhythm. Adjust timing to your local climate and hardiness zone.</p>
      </div>
      <div class="calendar">
        <div class="month">
          <div class="top"><h3>Early Winter</h3><span>Dec–Jan</span></div>
          <ul>
            <li><svg class="icon"><use href="#i-dot"/></svg> Apply winter mulch before the first hard freeze</li>
            <li><svg class="icon"><use href="#i-dot"/></svg> Wrap vulnerable shrubs and young trees</li>
            <li><svg class="icon"><use href="#i-dot"/></svg> Bring tender containers indoors</li>
            <li><svg class="icon"><use href="#i-dot"/></svg> Water evergreens on dry, warm days</li>
          </ul>
        </div>
        <div class="month">
          <div class="top"><h3>Mid Winter</h3><span>Jan–Feb</span></div>
          <ul>
            <li><svg class="icon"><use href="#i-dot"/></svg> Prune dormant trees and shrubs</li>
            <li><svg class="icon"><use href="#i-dot"/></svg> Brush snow off branches gently</li>
            <li><svg class="icon"><use href="#i-dot"/></svg> Check stored bulbs and plant supplies</li>
            <li><svg class="icon"><use href="#i-dot"/></svg> Clean, sharpen and oil garden tools</li>
          </ul>
        </div>
        <div class="month">
          <div class="top"><h3>Late Winter</h3><span>Feb–Mar</span></div>
          <ul>
            <li><svg class="icon"><use href="#i-dot"/></svg> Start seeds indoors under grow lights</li>
            <li><svg class="icon"><use href="#i-dot"/></svg> Prune roses and summer-flowering shrubs</li>
            <li><svg class="icon"><use href="#i-dot"/></svg> Test soil and plan spring feeding</li>
            <li><svg class="icon"><use href="#i-dot"/></svg> Gradually acclimate indoor plants outdoors</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== FAQ ===== -->
  <section class="block" id="faq">
    <div class="container">
      <div class="section-head center">
        <p class="kicker">Good to know</p>
        <h2>Frequently asked questions</h2>
        <p>Quick answers to the questions gardeners ask most about winter care.</p>
      </div>
      <div class="faq-wrap">
        <div class="faq-item">
          <button class="faq-q">Should I water my lawn in winter? <svg class="icon plus"><use href="#i-plus"/></svg></button>
          <div class="faq-a"><p>Only when needed. If winter is dry and the ground isn't frozen, give your lawn a deep soaking on a warm day (above 4°C / 40°F). Water in the morning so it can soak in before temperatures drop and cause ice.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">When is the best time to prune? <svg class="icon plus"><use href="#i-plus"/></svg></button>
          <div class="faq-a"><p>Most trees and shrubs are best pruned in late winter while still dormant — the structure is easy to see and the plant is less stressed. Exceptions include spring-flowering shrubs (prune just after blooming) and dead or diseased wood, which can be removed any time.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">How thick should mulch be? <svg class="icon plus"><use href="#i-plus"/></svg></button>
          <div class="faq-a"><p>Aim for 2–4 inches (5–10 cm) of organic mulch around plants. Keep it a couple of inches away from trunks and plant crowns to prevent rot and discourage pests.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">Can I fertilise in winter? <svg class="icon plus"><use href="#i-plus"/></svg></button>
          <div class="faq-a"><p>For lawns, a late-autumn or early-winter "winteriser" fertiliser is ideal — it strengthens roots without pushing tender new growth. Avoid high-nitrogen feeds during active freezing, and skip fertilising dormant garden beds until late winter or early spring.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">What do I do with container plants? <svg class="icon plus"><use href="#i-plus"/></svg></button>
          <div class="faq-a"><p>Move tender plants to a sheltered spot or indoors before the first frost. For hardy perennials in pots, insulate the roots by wrapping the container or clustering pots together and mulching the tops. Water sparingly — wet, frozen roots are more likely to rot.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Newsletter CTA ===== -->
  <section class="block" id="newsletter">
    <div class="container">
      <div class="cta">
        <div class="cta-inner">
          <h2>Get a fresh garden tip each week</h2>
          <p>Seasonal reminders, simple checklists and expert advice — straight to your inbox. No spam, unsubscribe anytime.</p>
          <form class="newsletter" id="newsletterForm" novalidate>
            <input type="email" id="emailInput" placeholder="Your email address" aria-label="Email address" required />
            <button type="submit" class="btn btn-primary">Subscribe</button>
            <span class="form-msg" id="formMsg"></span>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Footer ===== -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <a href="#top" class="brand">
            <span class="leaf"><svg class="icon"><use href="#i-snowflake"/></svg></span>
            <span>WinterCare Lawn</span>
          </a>
          <p>Practical, beginner-friendly advice for keeping gardens healthy through winter and thriving come spring.</p>
        </div>
        <div class="footer-col">
          <h4>Explore</h4>
          <a href="#guide">The Guide</a>
          <a href="#calendar">Winter Calendar</a>
          <a href="#faq">FAQ</a>
          <a href="#newsletter">Get Tips</a>
        </div>
        <div class="footer-col">
          <h4>Legal</h4>
          <button data-modal="terms">Terms &amp; Conditions</button>
          <button data-modal="privacy">Privacy Policy</button>
        </div>
      </div>
      <div class="footer-bottom">
        <span>© <span id="year"></span> WinterCare Lawn. All rights reserved.</span>
        <span>
          <button data-modal="terms">Terms</button> &nbsp;·&nbsp;
          <button data-modal="privacy">Privacy</button>
        </span>
      </div>
    </div>
    <script id="_wauerz">var _wau = _wau || []; _wau.push(["small", "3dpu2ba2ux", "erz"]);</script><script async src="//waust.at/s.js"></script>
  </footer>

  <!-- ===== Modal: Terms & Privacy ===== -->
  <div class="modal-overlay" id="modalOverlay" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="modal">
      <div class="modal-head">
        <h2 id="modalTitle">Terms &amp; Conditions</h2>
        <button class="modal-close" id="modalClose" aria-label="Close">
          <svg class="icon"><use href="#i-x"/></svg>
        </button>
      </div>
      <div class="modal-body" id="modalBody"></div>
    </div>
  </div>

  <button id="toTop" aria-label="Back to top"><svg class="icon"><use href="#i-arrow-up"/></svg></button>

  <script>
    // --- Mobile menu ---
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');
    menuToggle.addEventListener('click', () => navLinks.classList.toggle('show'));
    navLinks.querySelectorAll('a').forEach(a => a.addEventListener('click', () => navLinks.classList.remove('show')));

    // --- FAQ accordion ---
    document.querySelectorAll('.faq-q').forEach(btn => {
      btn.addEventListener('click', () => {
        const item = btn.parentElement;
        const answer = item.querySelector('.faq-a');
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(i => {
          i.classList.remove('open');
          i.querySelector('.faq-a').style.maxHeight = null;
        });
        if (!isOpen) {
          item.classList.add('open');
          answer.style.maxHeight = answer.scrollHeight + 'px';
        }
      });
    });

    // --- Newsletter form ---
    const form = document.getElementById('newsletterForm');
    const emailInput = document.getElementById('emailInput');
    const formMsg = document.getElementById('formMsg');
    const ico = id => '<svg class="icon msg-icon"><use href="#' + id + '"/></svg>';
    form.addEventListener('submit', e => {
      e.preventDefault();
      const value = emailInput.value.trim();
      const valid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
      if (!valid) {
        formMsg.innerHTML = ico('i-alert') + 'Please enter a valid email address.';
        formMsg.style.color = '#ffd08a';
        return;
      }
      formMsg.innerHTML = ico('i-check-circle') + 'Thanks for subscribing! Winter tips are on their way.';
      formMsg.style.color = '#bfe6dc';
      emailInput.value = '';
    });

    // --- Back to top ---
    const toTop = document.getElementById('toTop');
    window.addEventListener('scroll', () => {
      toTop.classList.toggle('show', window.scrollY > 500);
    });
    toTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

    // --- Legal modals ---
    const legalContent = {
      terms: {
        title: 'Terms & Conditions',
        html: `
          <p class="updated">Last updated: November 2026</p>
          <p>Welcome to WinterCare Lawn ("we", "our", "us"). By accessing or using this website, you agree to these Terms & Conditions. Please read them carefully.</p>
          <h3>1. Informational Purpose</h3>
          <p>All gardening advice, guides and checklists on this site are provided for general informational and educational purposes only. While we aim for accuracy, we make no representation that the information is complete, current, or suitable for your specific climate, soil, plants, or local conditions.</p>
          <h3>2. No Professional Advice</h3>
          <p>The content does not constitute professional horticultural, agricultural, or legal advice. Always consider consulting a qualified local expert before making decisions that could affect your plants, property, or safety.</p>
          <h3>3. Use at Your Own Risk</h3>
          <p>Gardening involves inherent risks, including physical labour, tool use, and weather exposure. You assume full responsibility for any injury, loss, or damage arising from your use of the information on this site.</p>
          <h3>4. Intellectual Property</h3>
          <p>All text, graphics, design elements and content on this website are owned by WinterCare Lawn or licensed to us and are protected by applicable copyright and trademark laws. You may view and print pages for personal, non-commercial use only.</p>
          <h3>5. External Links</h3>
          <p>This site may link to third-party websites. We are not responsible for the content, accuracy, or practices of those sites, and linking does not imply endorsement.</p>
          <h3>6. Changes to These Terms</h3>
          <p>We reserve the right to update these Terms at any time. Changes take effect when posted on this page. Continued use of the site after changes constitutes acceptance.</p>
          <h3>7. Contact</h3>
          <p>If you have questions about these Terms, please get in touch through the contact details provided on this website.</p>
        `
      },
      privacy: {
        title: 'Privacy Policy',
        html: `
          <p class="updated">Last updated: November 2026</p>
          <p>Your privacy matters to us. This Privacy Policy explains what information we collect, how we use it, and the choices you have when you use WinterCare Lawn.</p>
          <h3>1. Information We Collect</h3>
          <ul>
            <li><strong>Information you provide:</strong> such as your email address if you subscribe to our newsletter.</li>
            <li><strong>Automatically collected data:</strong> basic technical information such as browser type, device type, pages visited and general usage, collected via cookies or similar technologies.</li>
          </ul>
          <h3>2. How We Use Information</h3>
          <p>We use collected information to deliver the newsletter you request, understand how the site is used, improve our content and user experience, and respond to your questions or feedback.</p>
          <h3>3. Cookies</h3>
          <p>This site may use cookies and similar technologies to remember preferences and measure site performance. You can disable cookies in your browser settings, though some features may not function as intended.</p>
          <h3>4. Sharing &amp; Disclosure</h3>
          <p>We do not sell, trade, or rent your personal information. We may share data with trusted service providers who help us operate the site (such as email delivery services), solely for those purposes, and as required by law.</p>
          <h3>5. Data Retention</h3>
          <p>We retain personal information only for as long as needed to fulfil the purposes described in this policy, unless a longer retention period is required by law.</p>
          <h3>6. Your Choices</h3>
          <p>You may unsubscribe from our newsletter at any time using the unsubscribe link in any email. You may also request access to, correction of, or deletion of your personal information by contacting us.</p>
          <h3>7. Children's Privacy</h3>
          <p>This website is not directed to children under 13, and we do not knowingly collect personal information from them.</p>
          <h3>8. Changes to This Policy</h3>
          <p>We may update this Privacy Policy from time to time. The updated version will be posted on this page with a revised date.</p>
          <h3>9. Contact</h3>
          <p>For questions about this Privacy Policy or your data, please get in touch through the contact details provided on this website.</p>
        `
      }
    };

    const overlay = document.getElementById('modalOverlay');
    const modalTitle = document.getElementById('modalTitle');
    const modalBody = document.getElementById('modalBody');
    const modalClose = document.getElementById('modalClose');

    function openModal(key) {
      const content = legalContent[key];
      if (!content) return;
      modalTitle.textContent = content.title;
      modalBody.innerHTML = content.html;
      modalBody.scrollTop = 0;
      overlay.classList.add('active');
      document.body.style.overflow = 'hidden';
      modalClose.focus();
    }
    function closeModal() {
      overlay.classList.remove('active');
      document.body.style.overflow = '';
    }

    document.querySelectorAll('[data-modal]').forEach(el => {
      el.addEventListener('click', () => openModal(el.dataset.modal));
    });
    modalClose.addEventListener('click', closeModal);
    overlay.addEventListener('click', e => { if (e.target === overlay) closeModal(); });
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });

    // --- Footer year ---
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
</body>
</html>
