<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projects & Price List | Mahin IT Software Technology</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Sora:wght@600;700;800&display=swap" rel="stylesheet">

  <style>
    :root{--ink:#0b1026;--ink-2:#121a3a;--line:rgba(255,255,255,.12);--text:#e8ecff;--muted:#a3acd1;--accent:#35e0c2;--accent-2:#6d7bff;--warm:#ffb84d;--paper:#f4f6fb;--paper-text:#1b2140}
    *,*::before,*::after{box-sizing:border-box}
    html{scroll-behavior:smooth;max-width:100%;overflow-x:hidden}
    body{font-family:'DM Sans',system-ui,sans-serif;background:var(--paper);color:var(--paper-text);overflow-x:hidden;width:100%}
    h1,h2,h3,h4,h5{font-family:'Sora',system-ui,sans-serif;letter-spacing:-.02em;word-wrap:break-word}
    a:focus-visible,button:focus-visible{outline:3px solid var(--warm);outline-offset:2px}

    .m-nav{position:sticky;top:0;z-index:50;background:rgba(11,16,38,.82);backdrop-filter:blur(12px);border-bottom:1px solid var(--line);transition:background .3s,box-shadow .3s}
    .m-nav.scrolled{background:rgba(11,16,38,.96);box-shadow:0 8px 30px rgba(0,0,0,.25)}
    .m-brand{font-family:'Sora';font-weight:800;color:#fff!important;font-size:clamp(1.15rem,3vw,1.35rem);display:flex;align-items:center;gap:.5rem}
    .m-brand i{color:var(--accent)}
    .m-nav .nav-link{color:var(--muted)!important;font-weight:500;padding:.5rem .9rem!important;border-radius:999px;transition:.25s}
    .m-nav .nav-link:hover,.m-nav .nav-link.active{color:#fff!important;background:rgba(255,255,255,.08)}
    .m-nav .navbar-toggler{border-color:var(--line);padding:.35rem .6rem}
    .m-nav .navbar-toggler-icon{filter:invert(1)}

    .m-hero{position:relative;background:radial-gradient(ellipse at 20% 0%,#1d2a6b 0%,var(--ink) 55%);color:var(--text);padding:clamp(3rem,8vw,6rem) 1rem clamp(3.5rem,8vw,6rem);overflow:hidden;isolation:isolate;text-align:center}
    .m-hero::before{content:"";position:absolute;inset:0;z-index:-1;background-image:linear-gradient(var(--line) 1px,transparent 1px),linear-gradient(90deg,var(--line) 1px,transparent 1px);background-size:48px 48px;mask-image:radial-gradient(ellipse at center,#000 20%,transparent 75%);animation:grid-drift 20s linear infinite}
    .blob{position:absolute;border-radius:50%;filter:blur(70px);opacity:.45;z-index:-1;animation:float 9s ease-in-out infinite;pointer-events:none}
    .blob.b1{width:clamp(180px,30vw,260px);height:clamp(180px,30vw,260px);background:var(--accent-2);top:-60px;right:10%}
    .blob.b2{width:clamp(150px,25vw,200px);height:clamp(150px,25vw,200px);background:var(--accent);bottom:-60px;left:8%;animation-delay:-4s}
    @keyframes float{0%,100%{transform:translateY(0) scale(1)}50%{transform:translateY(30px) scale(1.08)}}
    @keyframes grid-drift{to{background-position:48px 48px}}
    .m-hero h1{font-size:clamp(1.85rem,6vw,3.6rem);font-weight:800;margin:0 0 .75rem;line-height:1.15}
    .m-hero p{color:var(--muted);max-width:38rem;margin:0 auto;font-size:clamp(.95rem,2.2vw,1.15rem);padding:0 .5rem}
    .rise{opacity:0;transform:translateY(24px);animation:rise .8s cubic-bezier(.2,.7,.2,1) forwards}
    .rise.d1{animation-delay:.1s}.rise.d2{animation-delay:.25s}
    @keyframes rise{to{opacity:1;transform:none}}

    .m-sec{padding:clamp(2.5rem,6vw,4.5rem) 1rem}
    .m-in{max-width:1140px;width:100%;margin:0 auto}
    .btn-m{display:inline-flex;align-items:center;justify-content:center;gap:.5rem;padding:.8rem 1.5rem;border-radius:12px;font-weight:700;text-decoration:none;border:0;transition:transform .25s,box-shadow .25s;cursor:pointer}
    .btn-m:hover{transform:translateY(-3px)}
    .btn-primary-m{background:var(--accent);color:#04201b;box-shadow:0 10px 30px rgba(53,224,194,.3)}
    .btn-primary-m:hover{color:#04201b;box-shadow:0 14px 36px rgba(53,224,194,.45)}

    /* Filters */
    .filters{display:flex;flex-wrap:wrap;gap:.5rem;justify-content:center;margin-bottom:2rem}
    .filters button{border:1px solid #d7dcee;background:#fff;color:var(--paper-text);border-radius:999px;padding:.45rem 1.05rem;font-size:.9rem;font-weight:500;transition:.25s;cursor:pointer}
    .filters button:hover{border-color:var(--accent-2);color:var(--accent-2)}
    .filters button.on{background:var(--ink);color:#fff;border-color:var(--ink)}

    /* Price cards */
    .grid-p{display:grid;gap:1.25rem;grid-template-columns:repeat(auto-fill,minmax(min(100%,250px),1fr))}
    .pc{background:#fff;border:1px solid #e3e7f3;border-radius:20px;padding:clamp(1.25rem,3vw,1.6rem);display:flex;flex-direction:column;gap:.85rem;position:relative;overflow:hidden;transition:transform .3s,box-shadow .3s,border-color .3s;animation:pop .45s ease both;min-width:0}
    .pc::after{content:"";position:absolute;left:0;top:0;height:4px;width:0;background:linear-gradient(90deg,var(--accent),var(--accent-2));transition:width .4s}
    .pc:hover{transform:translateY(-6px);box-shadow:0 22px 44px rgba(27,33,64,.13);border-color:transparent}
    .pc:hover::after{width:100%}
    @keyframes pop{from{opacity:0;transform:translateY(14px) scale(.98)}}
    .pc .ico{width:50px;height:50px;border-radius:14px;display:grid;place-items:center;font-size:1.2rem;color:#fff;background:linear-gradient(135deg,var(--accent-2),#3a49c9);transition:transform .35s;flex-shrink:0}
    .pc:hover .ico{transform:rotate(-8deg) scale(1.1)}
    .pc[data-tier="standard"] .ico{background:linear-gradient(135deg,#17b89d,#0e7f78)}
    .pc[data-tier="advanced"] .ico{background:linear-gradient(135deg,#ff9f43,#e0612a)}
    .pc h3{font-size:1.1rem;font-weight:700;margin:0;padding-right:4.5rem}
    .price{font-family:'Sora';font-weight:800;font-size:clamp(1.65rem,4vw,2rem);line-height:1.1;display:flex;align-items:baseline;flex-wrap:wrap;gap:.2rem}
    .price small{font-family:'DM Sans';font-weight:500;font-size:.85rem;color:#6a7298;margin-left:.25rem}
    .pc .go{margin-top:auto;font-weight:700;color:var(--accent-2);text-decoration:none;display:inline-flex;align-items:center;gap:.35rem}
    .pc .go i{transition:transform .25s}
    .pc .go:hover i{transform:translateX(5px)}
    .pop{position:absolute;top:1rem;right:1rem;background:var(--warm);color:#4a2e00;font-size:.75rem;font-weight:700;padding:.2rem .65rem;border-radius:999px}

    /* Included strip */
    .inc{display:grid;gap:1rem;grid-template-columns:repeat(auto-fit,minmax(min(100%,210px),1fr));background:linear-gradient(135deg,var(--ink),#1a2560);color:#fff;border-radius:24px;padding:clamp(1.35rem,4vw,2.25rem)}
    .inc div{display:flex;gap:.75rem;align-items:center;font-weight:500;font-size:clamp(.92rem,2vw,1rem);min-width:0}
    .inc i{color:var(--accent);font-size:1.2rem;flex-shrink:0}

    /* CTA */
    .cta{background:linear-gradient(120deg,var(--accent-2),#3a49c9 55%,#17b89d);background-size:200% 200%;animation:shift 10s ease infinite;color:#fff;border-radius:24px;padding:clamp(1.75rem,6vw,3.5rem) clamp(1.25rem,4vw,2rem);text-align:center}
    .cta h2{font-weight:800;font-size:clamp(1.45rem,4vw,2.3rem)}
    .cta .down{display:block;font-size:1.4rem;margin-bottom:1rem;animation:bounce 1.6s infinite}
    @keyframes bounce{50%{transform:translateY(8px)}}
    @keyframes shift{50%{background-position:100% 50%}}

    .m-foot{background:var(--ink);color:var(--muted);padding:3rem 1rem 1.5rem}
    .m-foot .grid-f{max-width:1140px;margin:0 auto;display:grid;gap:2rem;grid-template-columns:1.4fr 1fr 1fr}
    .m-foot h5{color:#fff;font-size:1rem;margin-bottom:.75rem}
    .m-foot a{color:var(--muted);text-decoration:none;display:block;padding:.25rem 0;transition:color .2s,transform .2s}
    .m-foot a:hover{color:var(--accent);transform:translateX(4px)}
    .socials{display:flex;gap:.6rem;margin-top:1rem;flex-wrap:wrap}
    .socials a{width:40px;height:40px;border-radius:50%;border:1px solid var(--line);display:grid;place-items:center;padding:0;transition:.25s}
    .socials a:hover{background:var(--accent);color:#04201b;transform:translateY(-4px)}
    .copy{max-width:1140px;margin:2rem auto 0;padding-top:1.25rem;border-top:1px solid var(--line);text-align:center;font-size:.85rem}
    #top{position:fixed;right:1rem;bottom:1rem;width:44px;height:44px;border-radius:50%;border:0;background:var(--accent);color:#04201b;box-shadow:0 10px 25px rgba(0,0,0,.3);opacity:0;pointer-events:none;transform:translateY(12px);transition:.3s;z-index:60;display:grid;place-items:center}
    #top.show{opacity:1;pointer-events:auto;transform:none}
    .reveal{opacity:0;transform:translateY(28px);transition:opacity .7s,transform .7s}
    .reveal.in{opacity:1;transform:none}

    /* Responsive Breakpoints */
    @media (max-width:860px){
      .m-foot .grid-f{grid-template-columns:1fr 1fr}
      .m-foot .grid-f>:first-child{grid-column:1/-1}
    }
    @media (max-width:767px){
      .m-nav .navbar-collapse{padding:.75rem 0 .25rem;border-top:1px solid var(--line);margin-top:.5rem}
      .m-nav .nav-link{border-radius:10px;padding:.6rem .9rem!important}
    }
    @media (max-width:520px){
      .m-foot .grid-f{grid-template-columns:1fr;gap:1.5rem}
      .btn-m{width:100%}
      .cta{border-radius:18px}
      .inc{border-radius:18px}
      .filters button{padding:.4rem .85rem;font-size:.85rem}
    }
    @media (prefers-reduced-motion:reduce){
      *,*::before,*::after{animation:none!important;transition:none!important}
      .rise,.reveal{opacity:1;transform:none}html{scroll-behavior:auto}
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-md m-nav" id="nav">
    <div class="container">
      <a class="navbar-brand m-brand" href="/"><i class="fa-solid fa-layer-group"></i> Mahin IT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse justify-content-end" id="menu">
        <div class="navbar-nav gap-1 pt-2 pt-md-0">
          <a class="nav-link" href="/"><i class="fa-solid fa-house-signal"></i> Home</a>
          <a class="nav-link" href="/services"><i class="fa-brands fa-servicestack"></i> Services</a>
          <a class="nav-link active" aria-current="page" href="/projects"><i class="fa-solid fa-bars-progress"></i> Projects</a>
          <a class="nav-link" href="/blog"><i class="fa-brands fa-schlix"></i> Blog</a>
          <a class="nav-link" href="/contact"><i class="fa-solid fa-circle-right"></i> Contact</a>
        </div>
      </div>
    </div>
  </nav>

  <header class="m-hero">
    <div class="blob b1"></div><div class="blob b2"></div>
    <h1 class="rise d1">Our Project & Price-List</h1>
    <p class="rise d2">Pick the website type that fits your business. Starting prices are shown in US dollars.</p>
  </header>

  <section class="m-sec">
    <div class="m-in">
      <div class="filters" id="filters" role="group" aria-label="Filter by price">
        <button class="on" data-t="all">All</button>
        <button data-t="starter">Starter (up to $300)</button>
        <button data-t="standard">Standard ($400 - $600)</button>
        <button data-t="advanced">Advanced ($800)</button>
      </div>

      <div class="grid-p" id="grid">
        <article class="pc" data-tier="starter"><div class="ico"><i class="fa-solid fa-user-tie"></i></div><h3>Portfolio Website</h3><div class="price">$<span class="num" data-to="250">250</span><small>starting</small></div><a class="go" href="/contact">Get this <i class="fa-solid fa-arrow-right"></i></a></article>
        <article class="pc" data-tier="starter"><span class="pop"><i class="fa-solid fa-star"></i> Popular</span><div class="ico"><i class="fa-solid fa-briefcase"></i></div><h3>Business Website</h3><div class="price">$<span class="num" data-to="300">300</span><small>starting</small></div><a class="go" href="/contact">Get this <i class="fa-solid fa-arrow-right"></i></a></article>
        <article class="pc" data-tier="starter"><div class="ico"><i class="fa-solid fa-rocket"></i></div><h3>Landing Website</h3><div class="price">$<span class="num" data-to="150">150</span><small>starting</small></div><a class="go" href="/contact">Get this <i class="fa-solid fa-arrow-right"></i></a></article>
        <article class="pc" data-tier="standard"><div class="ico"><i class="fa-solid fa-school"></i></div><h3>School Website</h3><div class="price">$<span class="num" data-to="400">400</span><small>starting</small></div><a class="go" href="/contact">Get this <i class="fa-solid fa-arrow-right"></i></a></article>
        <article class="pc" data-tier="standard"><div class="ico"><i class="fa-solid fa-utensils"></i></div><h3>Restaurant Website</h3><div class="price">$<span class="num" data-to="400">400</span><small>starting</small></div><a class="go" href="/contact">Get this <i class="fa-solid fa-arrow-right"></i></a></article>
        <article class="pc" data-tier="standard"><div class="ico"><i class="fa-solid fa-hospital"></i></div><h3>Clinic/Hospital Website</h3><div class="price">$<span class="num" data-to="600">600</span><small>starting</small></div><a class="go" href="/contact">Get this <i class="fa-solid fa-arrow-right"></i></a></article>
        <article class="pc" data-tier="advanced"><div class="ico"><i class="fa-solid fa-cart-shopping"></i></div><h3>Ecommerce Website</h3><div class="price">$<span class="num" data-to="800">800</span><small>starting</small></div><a class="go" href="/contact">Get this <i class="fa-solid fa-arrow-right"></i></a></article>
        <article class="pc" data-tier="advanced"><div class="ico"><i class="fa-solid fa-key"></i></div><h3>Rental Website</h3><div class="price">$<span class="num" data-to="800">800</span><small>starting</small></div><a class="go" href="/contact">Get this <i class="fa-solid fa-arrow-right"></i></a></article>
      </div>
    </div>
  </section>

  <section class="m-sec" style="padding-top:0">
    <div class="m-in">
      <div class="inc reveal">
        <div><i class="fa-solid fa-mobile-screen"></i> Responsive on every device</div>
        <div><i class="fa-solid fa-user-shield"></i> Secure by design</div>
        <div><i class="fa-solid fa-rocket"></i> Deploy and hosting help</div>
        <div><i class="fa-solid fa-screwdriver-wrench"></i> Affordable maintenance</div>
      </div>
    </div>
  </section>

  <section class="m-sec" style="padding-top:0">
    <div class="m-in">
      <div class="cta reveal">
        <i class="fa-solid fa-angles-down down" aria-hidden="true"></i>
        <h2>You can contact with us</h2>
        <p class="mb-4">Tell us which website you need and we will confirm the final price.</p>
        <a href="/contact" class="btn-m" style="background:#fff;color:#1b2140"><i class="fa-solid fa-envelope"></i> Contact Mahin IT</a>
      </div>
    </div>
  </section>

  <footer class="m-foot">
    <div class="grid-f">
      <div>
        <h5><i class="fa-solid fa-layer-group" style="color:var(--accent)"></i> Mahin IT Limited</h5>
        <p>Providing reliable tech since 1992.</p>
        <div class="socials">
          <a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
          <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
        </div>
      </div>
      <div><h5>Pages</h5><a href="/">Home</a><a href="/services">Services</a><a href="/projects">Projects</a></div>
      <div><h5>Company</h5><a href="/blog">Blog</a><a href="/contact">Contact</a></div>
    </div>
    <div class="copy">Copyright © Mahin IT. All rights reserved.</div>
  </footer>

  <button id="top" aria-label="Back to top"><i class="fa-solid fa-arrow-up"></i></button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script>
    const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Price filter
    const cards = [...document.querySelectorAll('#grid .pc')];
    document.getElementById('filters').addEventListener('click', e => {
      const b = e.target.closest('button'); if (!b) return;
      document.querySelectorAll('#filters button').forEach(x => x.classList.toggle('on', x === b));
      cards.forEach(c => {
        const show = b.dataset.t === 'all' || c.dataset.tier === b.dataset.t;
        c.style.display = show ? '' : 'none';
        if (show) { c.style.animation = 'none'; c.offsetHeight; c.style.animation = ''; }
      });
    });

    // Price count-up when cards first appear
    function countUp(n) {
      const to = +n.dataset.to, start = performance.now(), dur = 1100;
      (function step(t) {
        const p = Math.min((t - start) / dur, 1);
        n.textContent = Math.round(to * (1 - Math.pow(1 - p, 3)));
        if (p < 1) requestAnimationFrame(step);
      })(start);
    }
    const io = new IntersectionObserver(es => es.forEach(e => {
      if (!e.isIntersecting) return;
      e.target.classList.add('in');
      if (!reduce) e.target.querySelectorAll('.num').forEach(countUp);
      io.unobserve(e.target);
    }), { threshold: .15 });
    document.querySelectorAll('.reveal').forEach(n => io.observe(n));
    if (!reduce) cards.forEach((c, k) => { c.style.animationDelay = k * 60 + 'ms'; io.observe(c); });

    const nav = document.getElementById('nav'), topBtn = document.getElementById('top');
    addEventListener('scroll', () => {
      nav.classList.toggle('scrolled', scrollY > 20);
      topBtn.classList.toggle('show', scrollY > 500);
    }, { passive: true });
    topBtn.addEventListener('click', () => scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' }));
  </script>
</body>
</html>