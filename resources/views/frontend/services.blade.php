<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact | Mahin IT Software Technology</title>
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
    a:focus-visible,button:focus-visible,summary:focus-visible{outline:3px solid var(--warm);outline-offset:2px}

    .m-nav{position:sticky;top:0;z-index:50;background:rgba(11,16,38,.82);backdrop-filter:blur(12px);border-bottom:1px solid var(--line);transition:background .3s,box-shadow .3s}
    .m-nav.scrolled{background:rgba(11,16,38,.96);box-shadow:0 8px 30px rgba(0,0,0,.25)}
    .m-brand{font-family:'Sora';font-weight:800;color:#fff!important;font-size:clamp(1.15rem,3vw,1.35rem);display:flex;align-items:center;gap:.5rem}
    .m-brand i{color:var(--accent)}
    .m-nav .nav-link{color:var(--muted)!important;font-weight:500;padding:.5rem .9rem!important;border-radius:999px;transition:.25s}
    .m-nav .nav-link:hover,.m-nav .nav-link.active{color:#fff!important;background:rgba(255,255,255,.08)}
    .m-nav .navbar-toggler{border-color:var(--line);padding:.35rem .6rem}
    .m-nav .navbar-toggler-icon{filter:invert(1)}

    .m-hero{position:relative;background:radial-gradient(ellipse at 20% 0%,#1d2a6b 0%,var(--ink) 55%);color:var(--text);padding:clamp(3rem,8vw,6rem) 1rem clamp(5.5rem,11vw,8rem);overflow:hidden;isolation:isolate;text-align:center}
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
    .btn-m{display:inline-flex;align-items:center;justify-content:center;gap:.5rem;padding:.85rem 1.5rem;border-radius:12px;font-weight:700;text-decoration:none;border:0;transition:transform .25s,box-shadow .25s;cursor:pointer}
    .btn-m:hover{transform:translateY(-3px)}
    .btn-primary-m{background:var(--accent);color:#04201b;box-shadow:0 10px 30px rgba(53,224,194,.3)}
    .btn-primary-m:hover{color:#04201b;box-shadow:0 14px 36px rgba(53,224,194,.45)}

    /* Layout: form + info */
    .contact{display:grid;grid-template-columns:1.2fr .8fr;gap:1.5rem;margin-top:-4.5rem;position:relative;z-index:2;align-items:start}
    .panel{background:#fff;border:1px solid #e3e7f3;border-radius:22px;padding:clamp(1.2rem,4vw,2.25rem);box-shadow:0 24px 50px rgba(27,33,64,.12);min-width:0}
    .panel h2{font-size:clamp(1.25rem,3vw,1.45rem);font-weight:800;margin-bottom:.25rem}
    .panel .sub{color:#5b6388;margin-bottom:1.5rem;font-size:clamp(.9rem,2vw,1rem)}

    .f-row{display:grid;gap:1rem;grid-template-columns:1fr 1fr}
    .field{position:relative;margin-bottom:1.15rem;min-width:0}
    .field label{display:block;font-weight:600;font-size:.9rem;margin-bottom:.35rem}
    .field input,.field select,.field textarea{width:100%;max-width:100%;min-width:0;padding:.8rem 1rem;border-radius:12px;border:1.5px solid #d7dcee;background:#f9faff;color:var(--paper-text);font-size:1rem;transition:border-color .25s,box-shadow .25s,background .25s;font-family:inherit}
    .field textarea{min-height:130px;resize:vertical}
    .field input:focus,.field select:focus,.field textarea:focus{outline:0;border-color:var(--accent-2);background:#fff;box-shadow:0 0 0 4px rgba(109,123,255,.15)}
    .field.bad input,.field.bad select,.field.bad textarea{border-color:#d83b5b;background:#fff6f8;animation:shake .35s}
    .field .err{display:none;color:#c02847;font-size:.82rem;margin-top:.3rem}
    .field.bad .err{display:block}
    @keyframes shake{25%{transform:translateX(-5px)}75%{transform:translateX(5px)}}
    .count-t{display:block;text-align:right;margin-top:.25rem;font-size:.75rem;color:#8a92b5}
    .form-ok{display:none;text-align:center;padding:2rem 1rem}
    .form-ok i{font-size:3rem;color:#17b89d;animation:pop .6s cubic-bezier(.2,1.6,.4,1)}
    @keyframes pop{from{transform:scale(0)}}
    .spin{display:none;width:18px;height:18px;border:3px solid rgba(4,32,27,.3);border-top-color:#04201b;border-radius:50%;animation:rot .7s linear infinite}
    .sending .spin{display:inline-block}
    @keyframes rot{to{transform:rotate(360deg)}}

    /* Info cards */
    .info{display:grid;gap:1rem;min-width:0}
    .ic{display:flex;gap:1rem;align-items:center;background:#fff;border:1px solid #e3e7f3;border-radius:18px;padding:1.05rem 1.2rem;text-decoration:none;color:inherit;transition:transform .3s,box-shadow .3s,border-color .3s;min-width:0}
    .ic>div:last-child{min-width:0;overflow-wrap:anywhere}
    a.ic:hover{transform:translateX(6px);box-shadow:0 14px 30px rgba(27,33,64,.12);border-color:var(--accent-2);color:inherit}
    .ic .ico{flex:0 0 46px;height:46px;border-radius:14px;display:grid;place-items:center;color:#fff;font-size:1.1rem;background:linear-gradient(135deg,var(--accent-2),#3a49c9)}
    .ic:nth-child(2) .ico{background:linear-gradient(135deg,#17b89d,#0e7f78)}
    .ic:nth-child(3) .ico{background:linear-gradient(135deg,#ff9f43,#e0612a)}
    .ic:nth-child(4) .ico{background:linear-gradient(135deg,#ff6b9a,#c2306b)}
    .ic b{display:block;font-family:'Sora';font-size:.95rem}
    .ic span{color:#5b6388;font-size:.9rem}
    .open-dot{display:inline-block;width:8px;height:8px;border-radius:50%;background:#17b89d;margin-right:.4rem;animation:pulse 2s infinite}
    @keyframes pulse{70%{box-shadow:0 0 0 8px rgba(23,184,157,0)}0%{box-shadow:0 0 0 0 rgba(23,184,157,.6)}}

    /* FAQ */
    .sec-head{text-align:center;max-width:40rem;margin:0 auto 2rem;padding:0 .5rem}
    .sec-head h2{font-size:clamp(1.5rem,4vw,2.3rem);font-weight:800}
    .faq{max-width:780px;width:100%;margin:0 auto;display:grid;gap:.8rem}
    .faq details{background:#fff;border:1px solid #e3e7f3;border-radius:16px;overflow:hidden;transition:border-color .3s,box-shadow .3s}
    .faq details[open]{border-color:var(--accent-2);box-shadow:0 14px 30px rgba(27,33,64,.1)}
    .faq summary{list-style:none;cursor:pointer;padding:1rem 1.2rem;font-weight:700;font-size:clamp(.95rem,2vw,1.05rem);display:flex;justify-content:space-between;gap:1rem;align-items:center}
    .faq summary::-webkit-details-marker{display:none}
    .faq summary i{transition:transform .3s;color:var(--accent-2);flex-shrink:0}
    .faq details[open] summary i{transform:rotate(180deg)}
    .faq p{margin:0;padding:0 1.2rem 1.1rem;color:#4a5278;font-size:clamp(.9rem,2vw,1rem);line-height:1.65;animation:open .4s ease}
    @keyframes open{from{opacity:0;transform:translateY(-8px)}}

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
      .contact{grid-template-columns:1fr;margin-top:-3.5rem}
      .m-foot .grid-f{grid-template-columns:1fr 1fr}
      .m-foot .grid-f>:first-child{grid-column:1/-1}
    }
    @media (max-width:767px){
      .m-nav .navbar-collapse{padding:.75rem 0 .25rem;border-top:1px solid var(--line);margin-top:.5rem}
      .m-nav .nav-link{border-radius:10px;padding:.6rem .9rem!important}
      a.ic:hover{transform:translateY(-3px)}
    }
    @media (max-width:560px){
      .f-row{grid-template-columns:1fr;gap:0}
      .contact{margin-top:-2.75rem;gap:1.15rem}
      .panel{border-radius:18px}
      .m-foot .grid-f{grid-template-columns:1fr;gap:1.5rem}
      .btn-m{width:100%}
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
          <a class="nav-link" href="/projects"><i class="fa-solid fa-bars-progress"></i> Projects</a>
          <a class="nav-link" href="/blog"><i class="fa-brands fa-schlix"></i> Blog</a>
          <a class="nav-link active" aria-current="page" href="/contact"><i class="fa-solid fa-circle-right"></i> Contact</a>
        </div>
      </div>
    </div>
  </nav>

  <header class="m-hero">
    <div class="blob b1"></div><div class="blob b2"></div>
    <h1 class="rise d1">Let's talk about your project</h1>
    <p class="rise d2">Tell us what you want to build. We reply within one business day with next steps and a price estimate.</p>
  </header>

  <section class="px-3">
    <div class="m-in contact">

      <!-- Form -->
      <div class="panel reveal">
        <div id="formWrap">
          <h2>Send us a message</h2>
          <p class="sub">Fields marked * are required.</p>
          <form id="cf" novalidate method="POST" action="{{ url('/contact') }}">
            @csrf
            <div class="f-row">
              <div class="field"><label for="name">Full name *</label><input id="name" name="name" type="text" autocomplete="name" placeholder="Your name"><div class="err">Please enter your name.</div></div>
              <div class="field"><label for="email">Email *</label><input id="email" name="email" type="email" autocomplete="email" placeholder="you@example.com"><div class="err">Enter a valid email address.</div></div>
            </div>
            <div class="f-row">
              <div class="field"><label for="phone">Phone</label><input id="phone" name="phone" type="tel" autocomplete="tel" placeholder="+880 1XXX-XXXXXX"><div class="err">Use digits, spaces, + or - only.</div></div>
              <div class="field"><label for="service">Service *</label>
                <select id="service" name="service">
                  <option value="">Choose a service</option>
                  <option>Web App (Full Stack)</option><option>Website Design UI | UX</option><option>Deploy & Hosting</option><option>Maintenance</option><option>Other</option>
                </select><div class="err">Please choose a service.</div></div>
            </div>
            <div class="field"><label for="msg">Message *</label><textarea id="msg" name="message" maxlength="600" placeholder="Describe your idea, timeline and budget..."></textarea><span class="count-t" id="cnt">0 / 600</span><div class="err">Write at least 10 characters.</div></div>
            <button class="btn-m btn-primary-m mt-3" id="send" type="submit"><span class="spin"></span><i class="fa-solid fa-paper-plane"></i> Send message</button>
          </form>
        </div>
        <div class="form-ok" id="ok" role="status">
          <i class="fa-solid fa-circle-check"></i>
          <h2 class="mt-3">Message sent</h2>
          <p class="sub mb-3">Thank you! We will reply within one business day.</p>
          <button class="btn-m btn-primary-m" id="again">Send another message</button>
        </div>
      </div>

      <!-- Info -->
      <div class="info reveal">
        <a class="ic" href="mailto:info@mahinit.com"><div class="ico"><i class="fa-solid fa-envelope"></i></div><div><b>Email</b><span>info@mahinit.com</span></div></a>
        <a class="ic" href="tel:+8801000000000"><div class="ico"><i class="fa-solid fa-phone"></i></div><div><b>Phone</b><span>+880 1000-000000</span></div></a>
        <div class="ic"><div class="ico"><i class="fa-solid fa-location-dot"></i></div><div><b>Office</b><span>Your address, City, Country</span></div></div>
        <div class="ic"><div class="ico"><i class="fa-solid fa-clock"></i></div><div><b>Working hours</b><span><span class="open-dot"></span>Sat - Thu, 10:00 AM - 7:00 PM</span></div></div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="m-sec">
    <div class="sec-head reveal"><h2>Quick answers</h2></div>
    <div class="faq reveal">
      <details open><summary>How fast will you reply? <i class="fa-solid fa-chevron-down"></i></summary><p>We reply to every message within one business day.</p></details>
      <details><summary>How long does a website take? <i class="fa-solid fa-chevron-down"></i></summary><p>A simple website takes 1 to 2 weeks. A full stack web app usually takes 4 to 8 weeks, depending on features.</p></details>
      <details><summary>Do you help with domain and hosting? <i class="fa-solid fa-chevron-down"></i></summary><p>Yes. We set up affordable domain and hosting for you, and we can maintain the site after launch.</p></details>
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

    // Set to false once your Laravel POST /contact route is ready
    const DEMO = true;

    const form = document.getElementById('cf'), btn = document.getElementById('send');
    const rules = {
      name: v => v.trim().length >= 2,
      email: v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v),
      phone: v => v === '' || /^[0-9+\-\s()]{7,20}$/.test(v),
      service: v => v !== '',
      message: v => v.trim().length >= 10
    };
    function check(el) {
      const ok = rules[el.name](el.value);
      el.closest('.field').classList.toggle('bad', !ok);
      return ok;
    }
    form.querySelectorAll('input,select,textarea').forEach(el => {
      el.addEventListener('blur', () => check(el));
      el.addEventListener('input', () => { if (el.closest('.field').classList.contains('bad')) check(el); });
    });
    const msg = document.getElementById('msg'), cnt = document.getElementById('cnt');
    msg.addEventListener('input', () => cnt.textContent = msg.value.length + ' / 600');

    form.addEventListener('submit', e => {
      const all = [...form.querySelectorAll('input:not([type=hidden]),select,textarea')];
      const valid = all.map(check).every(Boolean);
      if (!valid) { e.preventDefault(); form.querySelector('.bad input,.bad select,.bad textarea')?.focus(); return; }
      if (!DEMO) return; // real submit to Laravel
      e.preventDefault();
      btn.classList.add('sending'); btn.disabled = true;
      setTimeout(() => {
        document.getElementById('formWrap').style.display = 'none';
        document.getElementById('ok').style.display = 'block';
        btn.classList.remove('sending'); btn.disabled = false;
      }, 1100);
    });
    document.getElementById('again').addEventListener('click', () => {
      form.reset(); cnt.textContent = '0 / 600';
      document.getElementById('ok').style.display = 'none';
      document.getElementById('formWrap').style.display = 'block';
    });

    const io = new IntersectionObserver(es => es.forEach(e => {
      if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
    }), { threshold: .12 });
    document.querySelectorAll('.reveal').forEach(n => io.observe(n));

    const nav = document.getElementById('nav'), topBtn = document.getElementById('top');
    addEventListener('scroll', () => {
      nav.classList.toggle('scrolled', scrollY > 20);
      topBtn.classList.toggle('show', scrollY > 500);
    }, { passive: true });
    topBtn.addEventListener('click', () => scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' }));
  </script>
</body>
</html>