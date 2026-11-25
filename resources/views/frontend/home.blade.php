<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mahin IT Software Technology</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Sora:wght@600;700;800&display=swap" rel="stylesheet">

  <style>
    :root{--ink:#0b1026;--ink-2:#121a3a;--line:rgba(255,255,255,.12);--text:#e8ecff;--muted:#a3acd1;--accent:#35e0c2;--accent-2:#6d7bff;--warm:#ffb84d;--paper:#f4f6fb;--paper-text:#1b2140}
    *,*::before,*::after{box-sizing:border-box}
    html{scroll-behavior:smooth;max-width:100%;overflow-x:hidden}
    body{font-family:'DM Sans',system-ui,sans-serif;background:var(--paper);color:var(--paper-text);overflow-x:hidden;width:100%}
    h1,h2,h3,h4,h5{font-family:'Sora',system-ui,sans-serif;letter-spacing:-.02em;word-wrap:break-word}
    a:focus-visible,button:focus-visible,summary:focus-visible{outline:3px solid var(--warm);outline-offset:2px}

    /* Navbar */
    .m-nav{position:sticky;top:0;z-index:50;background:rgba(11,16,38,.82);backdrop-filter:blur(12px);border-bottom:1px solid var(--line);transition:background .3s,box-shadow .3s}
    .m-nav.scrolled{background:rgba(11,16,38,.96);box-shadow:0 8px 30px rgba(0,0,0,.25)}
    .m-brand{font-family:'Sora';font-weight:800;color:#fff!important;font-size:clamp(1.15rem,3vw,1.35rem);display:flex;align-items:center;gap:.5rem}
    .m-brand i{color:var(--accent)}
    .m-nav .nav-link{color:var(--muted)!important;font-weight:500;padding:.5rem .9rem!important;border-radius:999px;transition:.25s}
    .m-nav .nav-link:hover,.m-nav .nav-link.active{color:#fff!important;background:rgba(255,255,255,.08)}
    .m-nav .navbar-toggler{border-color:var(--line);padding:.35rem .6rem}
    .m-nav .navbar-toggler-icon{filter:invert(1)}

    /* Hero */
    .m-hero{position:relative;background:radial-gradient(ellipse at 20% 0%,#1d2a6b 0%,var(--ink) 55%);color:var(--text);padding:clamp(3rem,8vw,6rem) 1rem clamp(3.5rem,9vw,7rem);overflow:hidden;isolation:isolate}
    .m-hero::before{content:"";position:absolute;inset:0;z-index:-1;background-image:linear-gradient(var(--line) 1px,transparent 1px),linear-gradient(90deg,var(--line) 1px,transparent 1px);background-size:48px 48px;mask-image:radial-gradient(ellipse at center,#000 20%,transparent 75%);animation:grid-drift 20s linear infinite}
    .blob{position:absolute;border-radius:50%;filter:blur(70px);opacity:.45;z-index:-1;animation:float 9s ease-in-out infinite;pointer-events:none}
    .blob.b1{width:clamp(180px,30vw,280px);height:clamp(180px,30vw,280px);background:var(--accent-2);top:-60px;right:8%}
    .blob.b2{width:clamp(150px,25vw,220px);height:clamp(150px,25vw,220px);background:var(--accent);bottom:-60px;left:6%;animation-delay:-4s}
    @keyframes float{0%,100%{transform:translateY(0) scale(1)}50%{transform:translateY(30px) scale(1.08)}}
    @keyframes grid-drift{to{background-position:48px 48px}}
    .m-hero .wrap{max-width:1140px;width:100%;margin:0 auto;display:grid;gap:2.5rem;grid-template-columns:1.05fr .95fr;align-items:center}
    .m-hero .wrap>div{min-width:0}
    .m-hero h1{font-size:clamp(1.85rem,5.5vw,3.6rem);font-weight:800;line-height:1.15;margin:0 0 1rem}
    .rot{display:inline-block;position:relative;min-width:6.5ch;height:1.25em;vertical-align:bottom;overflow:hidden}
    .rot span{position:absolute;left:0;top:0;padding:0 .4rem;border-radius:8px;color:#fff;opacity:0;transform:translateY(100%);transition:opacity .5s,transform .5s}
    .rot span.on{opacity:1;transform:none}
    .rot span.out{opacity:0;transform:translateY(-100%)}
    .rot .r1{background:#0f766e}.rot .r2{background:#b91c1c}.rot .r3{background:#1d4ed8}
    .m-hero p.lead{color:var(--muted);font-size:clamp(.95rem,2.2vw,1.15rem);max-width:34rem;line-height:1.65}
    .btn-m{display:inline-flex;align-items:center;justify-content:center;gap:.5rem;padding:.8rem 1.5rem;border-radius:12px;font-weight:700;text-decoration:none;border:0;transition:transform .25s,box-shadow .25s}
    .btn-m:hover{transform:translateY(-3px)}
    .btn-primary-m{background:var(--accent);color:#04201b;box-shadow:0 10px 30px rgba(53,224,194,.3)}
    .btn-primary-m:hover{color:#04201b;box-shadow:0 14px 36px rgba(53,224,194,.45)}
    .btn-ghost-m{background:transparent;color:#fff;border:1px solid var(--line)}
    .btn-ghost-m:hover{background:rgba(255,255,255,.08);color:#fff}
    .hero-img{position:relative;min-width:0}
    .hero-img img{width:100%;height:auto;max-height:440px;object-fit:cover;border-radius:28px 28px 28px 80px;box-shadow:0 30px 60px rgba(0,0,0,.45);border:1px solid var(--line);animation:bob 7s ease-in-out infinite}
    @keyframes bob{50%{transform:translateY(-10px)}}
    .chip{position:absolute;left:12px;bottom:20px;max-width:calc(100% - 24px);background:#fff;color:var(--paper-text);border-radius:14px;padding:.6rem .9rem;font-weight:700;font-size:clamp(.8rem,2vw,.9rem);box-shadow:0 14px 30px rgba(0,0,0,.3);display:flex;gap:.5rem;align-items:center}
    .chip i{color:var(--accent-2);flex-shrink:0}
    .rise{opacity:0;transform:translateY(24px);animation:rise .8s cubic-bezier(.2,.7,.2,1) forwards}
    .rise.d1{animation-delay:.1s}.rise.d2{animation-delay:.25s}.rise.d3{animation-delay:.4s}.rise.d4{animation-delay:.55s}
    @keyframes rise{to{opacity:1;transform:none}}

    .m-sec{padding:clamp(2.75rem,7vw,5.5rem) 1rem}
    .m-in{max-width:1140px;width:100%;margin:0 auto}
    .sec-head{text-align:center;max-width:40rem;margin:0 auto 2.5rem;padding:0 .5rem}
    .sec-head h2{font-size:clamp(1.55rem,4vw,2.5rem);font-weight:800}
    .sec-head p{color:#5b6388;font-size:clamp(.95rem,2vw,1.05rem)}

    /* 3D cards (daisyUI hover-3d) */
    .cards3d{display:grid;gap:2rem;grid-template-columns:repeat(auto-fit,minmax(min(100%,240px),1fr));justify-items:center}
    .card3d{text-align:center;width:100%;max-width:320px;min-width:0}
    .card3d figure{border-radius:20px;overflow:hidden;box-shadow:0 20px 40px rgba(27,33,64,.18)}
    .card3d img{width:100%;height:auto;display:block}
    .card3d h4{margin:1rem 0 .25rem;font-weight:700;font-size:1.15rem}
    .card3d p{margin:0;color:#5b6388;font-size:.93rem}

    /* Chat */
    .chat-wrap{max-width:640px;width:100%;margin:0 auto}
    .chat-bubble{background:var(--ink)!important;color:#fff!important;font-weight:500;font-size:clamp(.9rem,2vw,1rem);transition:color .25s,transform .25s}
    .chat-bubble:hover{color:var(--accent)!important;transform:scale(1.03)}
    .chat .chat-bubble{opacity:0;transform:translateY(16px)}
    .chat-wrap.in .chat:nth-child(1) .chat-bubble{animation:rise .6s .1s forwards}
    .chat-wrap.in .chat:nth-child(2) .chat-bubble{animation:rise .6s .9s forwards}

    /* Features */
    .feat-band{background:linear-gradient(135deg,var(--ink),#1a2560);color:#fff;border-radius:28px;padding:clamp(1.35rem,5vw,3rem);max-width:1140px;width:100%;margin:0 auto}
    .feat-grid{display:grid;gap:1.25rem;grid-template-columns:repeat(auto-fit,minmax(min(100%,260px),1fr))}
    .feat{border:1px solid var(--line);border-radius:18px;padding:clamp(1.15rem,3vw,1.5rem);background:rgba(255,255,255,.04);transition:transform .3s,border-color .3s,background .3s;min-width:0}
    .feat:hover{transform:translateY(-6px);border-color:var(--accent);background:rgba(255,255,255,.08)}
    .feat .ico{width:48px;height:48px;border-radius:14px;display:grid;place-items:center;background:rgba(53,224,194,.15);color:var(--accent);font-size:1.2rem;margin-bottom:1rem;transition:transform .35s}
    .feat:hover .ico{transform:rotate(-8deg) scale(1.1)}
    .feat h4{font-size:1.1rem;font-weight:700;color:#fff}
    .feat p{margin:0;color:var(--muted);font-size:.95rem;line-height:1.6}

    /* Stats */
    .stat-grid{display:grid;gap:1.5rem;grid-template-columns:repeat(auto-fit,minmax(min(100%,150px),1fr));text-align:center}
    .stat-grid b{display:block;font-family:'Sora';font-size:clamp(1.85rem,5vw,3rem);font-weight:800;color:var(--accent-2)}
    .stat-grid span{color:#5b6388;font-size:.95rem}

    /* Mission & Vision accordion */
    .acc{max-width:860px;width:100%;margin:0 auto;display:grid;gap:1rem}
    .acc details{background:#fff;border:1px solid #e3e7f3;border-radius:18px;overflow:hidden;transition:box-shadow .3s,border-color .3s;min-width:0}
    .acc details[open]{box-shadow:0 20px 40px rgba(27,33,64,.12);border-color:var(--accent-2)}
    .acc summary{list-style:none;cursor:pointer;display:flex;align-items:center;justify-content:space-between;gap:1rem;padding:1.05rem 1.3rem;font-family:'Sora';font-weight:700;font-size:clamp(1rem,2.3vw,1.1rem);background:var(--ink);color:#fff;transition:color .25s}
    .acc summary::-webkit-details-marker{display:none}
    .acc summary:hover{color:var(--accent)}
    .acc summary .chev{transition:transform .35s;flex-shrink:0}
    .acc details[open] summary .chev{transform:rotate(180deg)}
    .acc .pane{padding:1.2rem 1.3rem 1.45rem;animation:open .45s ease}
    @keyframes open{from{opacity:0;transform:translateY(-10px)}}
    .acc img{width:100%;height:clamp(170px,34vw,340px);object-fit:cover;border-radius:14px;margin-bottom:1rem}
    .acc p{margin:0;color:#4a5278;line-height:1.75;font-size:clamp(.92rem,2vw,1rem)}

    /* CTA */
    .cta{background:linear-gradient(120deg,var(--accent-2),#3a49c9 55%,#17b89d);background-size:200% 200%;animation:shift 10s ease infinite;color:#fff;border-radius:24px;padding:clamp(1.75rem,6vw,3.5rem) clamp(1.25rem,4vw,2rem);text-align:center}
    .cta h2{font-weight:800;font-size:clamp(1.45rem,4vw,2.4rem)}
    @keyframes shift{50%{background-position:100% 50%}}

    /* Footer */
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
      .m-hero .wrap{grid-template-columns:1fr;gap:2rem}
      .hero-img img{border-radius:22px 22px 22px 48px;max-height:360px}
      .m-foot .grid-f{grid-template-columns:1fr 1fr}
      .m-foot .grid-f>:first-child{grid-column:1/-1}
    }
    @media (max-width:767px){
      .m-nav .navbar-collapse{padding:.75rem 0 .25rem;border-top:1px solid var(--line);margin-top:.5rem}
      .m-nav .nav-link{border-radius:10px;padding:.6rem .9rem!important}
    }
    @media (max-width:520px){
      .hero-img img{border-radius:18px;max-height:280px}
      .chip{left:10px;bottom:12px;padding:.5rem .75px}
      .m-foot .grid-f{grid-template-columns:1fr;gap:1.5rem}
      .btn-m{width:100%}
      .cta{border-radius:18px}
      .feat-band{border-radius:20px}
    }
    @media (prefers-reduced-motion:reduce){
      *,*::before,*::after{animation:none!important;transition:none!important}
      .rise,.reveal,.chat .chat-bubble{opacity:1;transform:none}html{scroll-behavior:auto}
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-md m-nav" id="nav">
    <div class="container">
      <a class="navbar-brand m-brand" href="/"><i class="fa-solid fa-layer-group"></i> Mahin IT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse justify-content-end" id="menu">
        <div class="navbar-nav gap-1 pt-2 pt-md-0">
          <a class="nav-link active" aria-current="page" href="/"><i class="fa-solid fa-house-signal"></i> Home</a>
          <a class="nav-link" href="/services"><i class="fa-brands fa-servicestack"></i> Services</a>
          <a class="nav-link" href="/projects"><i class="fa-solid fa-bars-progress"></i> Projects</a>
          <a class="nav-link" href="/blog"><i class="fa-brands fa-schlix"></i> Blog</a>
          <a class="nav-link" href="/contact"><i class="fa-solid fa-circle-right"></i> Contact</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <header class="m-hero">
    <div class="blob b1"></div><div class="blob b2"></div>
    <div class="wrap">
      <div>
        <h1 class="rise d1">We are best for Software
          <span class="rot" id="rot" aria-live="polite">
            <span class="r1 on">Design</span><span class="r2">Create</span><span class="r3">Deploy</span>
          </span>
        </h1>
        <p class="lead rise d2">Mahin IT Firm delivers innovative digital solutions, including web development, custom software, and UI/UX design. We help businesses streamline operations, strengthen their online presence, and achieve sustainable growth through modern technology and creative thinking.</p>
        <div class="d-flex flex-wrap gap-3 mt-4 rise d3">
          <a href="/services" class="btn-m btn-primary-m"><i class="fa-brands fa-servicestack"></i> Services</a>
          <a href="/contact" class="btn-m btn-ghost-m"><i class="fa-solid fa-envelope"></i> Contact us</a>
        </div>
      </div>
      <div class="hero-img rise d3">
        <img src="{{ asset('Images/Home/Mahin-It.jpeg') }}" alt="Mahin IT team at work">
        <div class="chip"><i class="fa-solid fa-circle-check"></i> Reliable tech since 1992</div>
      </div>
    </div>
  </header>

  <!-- 3D cards -->
  <section class="m-sec">
    <div class="m-in">
      <div class="sec-head reveal">
        <h2>Design, create, deploy</h2>
        <p>Move your cursor over a card. One team takes your idea from sketch to live product.</p>
      </div>
      <div class="cards3d">
        <div class="card3d reveal">
          <div class="hover-3d">
            <figure class="rounded-2xl"><img src="{{ asset('Images/Home/Design.avif') }}" alt="Design" loading="lazy"></figure>
            <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
          </div>
          <h4>Design</h4><p>Interfaces people enjoy using.</p>
        </div>
        <div class="card3d reveal">
          <div class="hover-3d">
            <figure class="rounded-2xl"><img src="{{ asset('Images/Home/Create.avif') }}" alt="Create" loading="lazy"></figure>
            <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
          </div>
          <h4>Create</h4><p>Clean code that is built to last.</p>
        </div>
        <div class="card3d reveal">
          <div class="hover-3d">
            <figure class="rounded-2xl"><img src="{{ asset('Images/Home/Deploy.avif') }}" alt="Deploy" loading="lazy"></figure>
            <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
          </div>
          <h4>Deploy</h4><p>Fast, secure launch and support.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Chat -->
  <section class="m-sec" style="padding-top:0">
    <div class="chat-wrap reveal" id="chat">
      <div class="chat chat-start"><div class="chat-bubble">Are You Ready ?</div></div>
      <div class="chat chat-end"><div class="chat-bubble">Of course , We are ready .</div></div>
    </div>
  </section>

  <!-- Features -->
  <section class="m-sec" style="padding-top:0">
    <div class="feat-band reveal">
      <div class="feat-grid">
        <div class="feat"><div class="ico"><i class="fa-solid fa-lightbulb"></i></div><h4>Innovation & Creativity</h4><p>We embrace innovative ideas and creative thinking to deliver modern digital solutions that help businesses stay ahead in a competitive world.</p></div>
        <div class="feat"><div class="ico"><i class="fa-solid fa-square-check"></i></div><h4>Quality & Reliability</h4><p>We focus on quality, reliability, and attention to detail to build secure, efficient, and dependable digital experiences.</p></div>
        <div class="feat"><div class="ico"><i class="fa-solid fa-users-line"></i></div><h4>Client-Centered Approach</h4><p>We understand each client's unique goals and work closely with them to create tailored solutions that meet their business needs.</p></div>
        <div class="feat"><div class="ico"><i class="fa-solid fa-chart-line"></i></div><h4>Growth & Success</h4><p>We help businesses grow with scalable technology solutions that improve efficiency, strengthen their digital presence, and support long-term success.</p></div>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="m-sec" style="padding-top:0">
    <div class="m-in stat-grid">
      <div class="reveal"><b><span class="count" data-to="400">0</span>+</b><span>Happy clients this year</span></div>
      <div class="reveal"><b><span class="count" data-to="18">0</span></b><span>New clients this month</span></div>
      <div class="reveal"><b><span class="count" data-to="120">0</span>+</b><span>Projects delivered</span></div>
      <div class="reveal"><b><span class="count" data-to="34">0</span></b><span>Years of experience</span></div>
    </div>
  </section>

  <!-- Mission & Vision -->
  <section class="m-sec" style="padding-top:0">
    <div class="sec-head reveal"><h2>Where we are going</h2><p>Tap a title to read more.</p></div>
    <div class="acc reveal">
      <details open>
        <summary><span>Our Mission <i class="fa-solid fa-bullseye"></i></span><i class="fa-solid fa-chevron-down chev"></i></summary>
        <div class="pane">
          <img src="{{ asset('Images/Home/1.avif') }}" alt="Our mission" loading="lazy">
          <p>Our mission is to empower businesses with innovative, reliable, and scalable digital solutions that simplify complex challenges and drive meaningful growth. We strive to deliver high-quality web development, software solutions, mobile applications, and user-centered designs that help businesses improve efficiency, enhance customer experiences, and succeed in an ever-evolving digital world.</p>
        </div>
      </details>
      <details>
        <summary><span>Our Vision <i class="fa-solid fa-eye"></i></span><i class="fa-solid fa-chevron-down chev"></i></summary>
        <div class="pane">
          <img src="{{ asset('Images/Home/2.avif') }}" alt="Our vision" loading="lazy">
          <p>Our vision is to become a trusted technology partner for businesses worldwide by transforming ideas into impactful digital experiences. We aspire to create a future where modern technology, creativity, and innovation work together to unlock new opportunities, connect people, and help businesses achieve sustainable growth in an increasingly connected world.</p>
        </div>
      </details>
    </div>
  </section>

  <!-- CTA -->
  <section class="m-sec" style="padding-top:0">
    <div class="m-in">
      <div class="cta reveal">
        <h2>Have an idea? Let's build it.</h2>
        <p class="mb-4">Tell us what you need and we will reply within one business day.</p>
        <a href="/contact" class="btn-m" style="background:#fff;color:#1b2140"><i class="fa-solid fa-envelope"></i> Contact Mahin IT</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
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

    // Rotating hero word (Design / Create / Deploy)
    const words = [...document.querySelectorAll('#rot span')];
    const rot = document.getElementById('rot');
    rot.style.minWidth = Math.max(...words.map(w => w.offsetWidth)) + 'px';
    let i = 0;
    if (!reduce) setInterval(() => {
      words[i].classList.replace('on', 'out');
      const prev = words[i];
      i = (i + 1) % words.length;
      words[i].classList.remove('out'); words[i].style.transition = 'none';
      words[i].style.transform = 'translateY(100%)'; words[i].offsetHeight;
      words[i].style.transition = ''; words[i].style.transform = '';
      words[i].classList.add('on');
      setTimeout(() => prev.classList.remove('out'), 600);
    }, 2200);

    // Scroll reveal + counters + chat
    const io = new IntersectionObserver(es => es.forEach(e => {
      if (!e.isIntersecting) return;
      e.target.classList.add('in');
      e.target.querySelectorAll('.count').forEach(animateCount);
      io.unobserve(e.target);
    }), { threshold: .15 });
    document.querySelectorAll('.reveal').forEach((n, k) => { n.style.transitionDelay = (k % 3) * 90 + 'ms'; io.observe(n); });

    function animateCount(n) {
      const to = +n.dataset.to;
      if (reduce) { n.textContent = to; return; }
      const start = performance.now(), dur = 1600;
      (function step(t) {
        const p = Math.min((t - start) / dur, 1);
        n.textContent = Math.round(to * (1 - Math.pow(1 - p, 3)));
        if (p < 1) requestAnimationFrame(step);
      })(start);
    }

    // Nav shadow + back to top
    const nav = document.getElementById('nav'), topBtn = document.getElementById('top');
    addEventListener('scroll', () => {
      nav.classList.toggle('scrolled', scrollY > 20);
      topBtn.classList.toggle('show', scrollY > 500);
    }, { passive: true });
    topBtn.addEventListener('click', () => scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' }));
  </script>
</body>
</html>