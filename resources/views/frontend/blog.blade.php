<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog | Mahin IT Software Technology</title>
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
    a:focus-visible,button:focus-visible,input:focus-visible{outline:3px solid var(--warm);outline-offset:2px}

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
    .m-hero{position:relative;background:radial-gradient(ellipse at 20% 0%,#1d2a6b 0%,var(--ink) 55%);color:var(--text);padding:clamp(3rem,8vw,6rem) 1rem clamp(4.5rem,9vw,6.5rem);overflow:hidden;isolation:isolate;text-align:center}
    .m-hero::before{content:"";position:absolute;inset:0;z-index:-1;background-image:linear-gradient(var(--line) 1px,transparent 1px),linear-gradient(90deg,var(--line) 1px,transparent 1px);background-size:48px 48px;mask-image:radial-gradient(ellipse at center,#000 20%,transparent 75%);animation:grid-drift 20s linear infinite}
    .blob{position:absolute;border-radius:50%;filter:blur(70px);opacity:.45;z-index:-1;animation:float 9s ease-in-out infinite;pointer-events:none}
    .blob.b1{width:clamp(180px,30vw,260px);height:clamp(180px,30vw,260px);background:var(--accent-2);top:-60px;right:10%}
    .blob.b2{width:clamp(150px,25vw,200px);height:clamp(150px,25vw,200px);background:var(--accent);bottom:-60px;left:8%;animation-delay:-4s}
    @keyframes float{0%,100%{transform:translateY(0) scale(1)}50%{transform:translateY(30px) scale(1.08)}}
    @keyframes grid-drift{to{background-position:48px 48px}}
    .m-hero h1{font-size:clamp(1.85rem,6vw,3.6rem);font-weight:800;margin:0 0 .75rem;line-height:1.15}
    .m-hero p{color:var(--muted);max-width:40rem;margin:0 auto 1.75rem;font-size:clamp(.95rem,2.2vw,1.15rem);padding:0 .5rem}
    .search{max-width:520px;width:100%;margin:0 auto;position:relative}
    .search i{position:absolute;left:1.1rem;top:50%;transform:translateY(-50%);color:var(--muted)}
    .search input{width:100%;padding:.85rem 1.2rem .85rem 2.8rem;border-radius:14px;border:1px solid var(--line);background:rgba(255,255,255,.07);color:#fff;font-size:1rem;transition:.25s}
    .search input::placeholder{color:var(--muted)}
    .search input:focus{background:rgba(255,255,255,.12);border-color:var(--accent)}
    .rise{opacity:0;transform:translateY(24px);animation:rise .8s cubic-bezier(.2,.7,.2,1) forwards}
    .rise.d1{animation-delay:.1s}.rise.d2{animation-delay:.25s}.rise.d3{animation-delay:.4s}
    @keyframes rise{to{opacity:1;transform:none}}

    .m-sec{padding:clamp(2.5rem,6vw,4.5rem) 1rem}
    .m-in{max-width:1140px;width:100%;margin:0 auto}
    .btn-m{display:inline-flex;align-items:center;justify-content:center;gap:.5rem;padding:.75rem 1.4rem;border-radius:12px;font-weight:700;text-decoration:none;border:0;transition:transform .25s,box-shadow .25s}
    .btn-m:hover{transform:translateY(-3px)}
    .btn-primary-m{background:var(--accent);color:#04201b;box-shadow:0 10px 30px rgba(53,224,194,.3)}
    .btn-primary-m:hover{color:#04201b;box-shadow:0 14px 36px rgba(53,224,194,.45)}

    /* Featured post */
    .feature{display:grid;grid-template-columns:1.1fr 1fr;background:#fff;border:1px solid #e3e7f3;border-radius:22px;overflow:hidden;margin-top:-3.5rem;position:relative;z-index:2;box-shadow:0 24px 50px rgba(27,33,64,.15)}
    .feature .thumb{min-height:260px}
    .feature .body{padding:clamp(1.35rem,4vw,2.5rem);display:flex;flex-direction:column;justify-content:center;gap:.75rem}
    .feature h2{font-size:clamp(1.3rem,3.2vw,2rem);font-weight:800;margin:0;line-height:1.25}
    .feature p{color:#5b6388;margin:0;font-size:clamp(.92rem,2vw,1rem)}

    .thumb{display:grid;place-items:center;color:#fff;font-size:clamp(2.2rem,5vw,3rem);background:linear-gradient(135deg,var(--accent-2),#3a49c9);position:relative;overflow:hidden}
    .thumb::after{content:"";position:absolute;inset:-40%;background:radial-gradient(circle,rgba(255,255,255,.25),transparent 55%);transform:translateX(-60%);transition:transform .8s}
    .post:hover .thumb::after,.feature:hover .thumb::after{transform:translateX(30%)}
    .thumb i{transition:transform .4s}
    .post:hover .thumb i,.feature:hover .thumb i{transform:scale(1.15) rotate(-6deg)}
    .t-web{background:linear-gradient(135deg,var(--accent-2),#3a49c9)}
    .t-design{background:linear-gradient(135deg,#ff6b9a,#c2306b)}
    .t-seo{background:linear-gradient(135deg,#ff9f43,#e0612a)}
    .t-ai{background:linear-gradient(135deg,#17b89d,#0e7f78)}

    .meta{display:flex;flex-wrap:wrap;gap:.75rem;align-items:center;font-size:.85rem;color:#6a7298}
    .tag{background:#e7eafc;color:#2b3593;border-radius:999px;padding:.2rem .75rem;font-weight:600;font-size:.8rem}

    /* Filters */
    .filters{display:flex;flex-wrap:wrap;gap:.5rem;justify-content:center;margin:clamp(2rem,5vw,3rem) 0 2rem}
    .filters button{border:1px solid #d7dcee;background:#fff;color:var(--paper-text);border-radius:999px;padding:.45rem 1rem;font-size:.9rem;font-weight:500;transition:.25s;cursor:pointer}
    .filters button:hover{border-color:var(--accent-2);color:var(--accent-2)}
    .filters button.on{background:var(--ink);color:#fff;border-color:var(--ink)}

    /* Post grid */
    .grid-p{display:grid;gap:1.5rem;grid-template-columns:repeat(auto-fill,minmax(min(100%,290px),1fr))}
    .post{background:#fff;border:1px solid #e3e7f3;border-radius:18px;overflow:hidden;display:flex;flex-direction:column;transition:transform .3s,box-shadow .3s;animation:pop .45s ease both}
    .post:hover{transform:translateY(-6px);box-shadow:0 20px 40px rgba(27,33,64,.12)}
    .post .thumb{height:150px}
    .post .body{padding:1.25rem 1.4rem 1.5rem;display:flex;flex-direction:column;gap:.6rem;flex:1}
    .post h3{font-size:1.1rem;font-weight:700;margin:0;line-height:1.35}
    .post p{color:#5b6388;font-size:.93rem;margin:0;line-height:1.55}
    .post a.more{margin-top:auto;padding-top:.4rem;font-weight:700;color:var(--accent-2);text-decoration:none;display:inline-flex;align-items:center;gap:.35rem}
    .post a.more i{transition:transform .25s}
    .post a.more:hover i{transform:translateX(5px)}
    @keyframes pop{from{opacity:0;transform:translateY(14px) scale(.98)}}
    .empty{text-align:center;color:#5b6388;padding:2rem 1rem;display:none}

    /* About blog text */
    .intro{max-width:760px;margin:0 auto;text-align:center;padding:0 .5rem}
    .intro h2{font-weight:800;font-size:clamp(1.5rem,4vw,2.2rem);margin-bottom:1rem}
    .intro p{color:#4a5278;line-height:1.75;font-size:clamp(.95rem,2vw,1.05rem)}

    /* Newsletter */
    .news{background:linear-gradient(120deg,var(--accent-2),#3a49c9 55%,#17b89d);background-size:200% 200%;animation:shift 10s ease infinite;color:#fff;border-radius:24px;padding:clamp(1.75rem,6vw,3.5rem) clamp(1.25rem,4vw,2rem);text-align:center}
    .news h2{font-weight:800;font-size:clamp(1.4rem,4vw,2.2rem)}
    @keyframes shift{50%{background-position:100% 50%}}
    .news form{display:flex;gap:.6rem;max-width:480px;width:100%;margin:1.5rem auto 0;flex-wrap:wrap}
    .news input{flex:1 1 200px;min-width:0;padding:.8rem 1rem;border-radius:12px;border:0;font-size:1rem;color:#1b2140;background:#fff}
    .news .ok{margin-top:1rem;font-weight:700;display:none}

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
    @media (max-width:991px){
      .feature{grid-template-columns:1fr 1fr}
    }
    @media (max-width:860px){
      .feature{grid-template-columns:1fr;margin-top:-2.75rem}
      .feature .thumb{min-height:180px}
      .m-foot .grid-f{grid-template-columns:1fr 1fr}
      .m-foot .grid-f>:first-child{grid-column:1/-1}
    }
    @media (max-width:767px){
      .m-nav .navbar-collapse{padding:.75rem 0 .25rem;border-top:1px solid var(--line);margin-top:.5rem}
      .m-nav .nav-link{border-radius:10px;padding:.6rem .9rem!important}
    }
    @media (max-width:520px){
      .feature{margin-top:-2.25rem;border-radius:18px}
      .feature .thumb{min-height:150px}
      .feature .btn-m{width:100%}
      .m-foot .grid-f{grid-template-columns:1fr;gap:1.5rem}
      .news{border-radius:18px}
      .news .btn-m{width:100%}
      .filters button{padding:.4rem .85rem;font-size:.85rem}
    }
    @media (prefers-reduced-motion:reduce){
      *,*::before,*::after{animation:none!important;transition:none!important}
      .rise,.reveal{opacity:1;transform:none}html{scroll-behavior:auto}
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
          <a class="nav-link" href="/"><i class="fa-solid fa-house-signal"></i> Home</a>
          <a class="nav-link" href="/services"><i class="fa-brands fa-servicestack"></i> Services</a>
          <a class="nav-link" href="/projects"><i class="fa-solid fa-bars-progress"></i> Projects</a>
          <a class="nav-link active" aria-current="page" href="/blog"><i class="fa-brands fa-schlix"></i> Blog</a>
          <a class="nav-link" href="/contact"><i class="fa-solid fa-circle-right"></i> Contact</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <header class="m-hero">
    <div class="blob b1"></div><div class="blob b2"></div>
    <h1 class="rise d1">Our Blog & Insights</h1>
    <p class="rise d2">Practical ideas on web development, design, SEO and AI from the Mahin IT team.</p>
    <div class="search rise d3">
      <i class="fa-solid fa-magnifying-glass"></i>
      <input id="q" type="search" placeholder="Search articles..." aria-label="Search articles">
    </div>
  </header>

  <!-- Featured -->
  <section class="px-3">
    <div class="m-in">
      <article class="feature reveal">
        <div class="thumb t-web"><i class="fa-solid fa-laptop-code"></i></div>
        <div class="body">
          <div class="meta"><span class="tag">Featured</span><span><i class="fa-regular fa-clock"></i> 6 min read</span></div>
          <h2>How to choose the right tech stack for your first product</h2>
          <p>Laravel, React or WordPress? We compare cost, speed and long-term maintenance so you can decide with confidence.</p>
          <div><a href="#" class="btn-m btn-primary-m">Read article <i class="fa-solid fa-arrow-right"></i></a></div>
        </div>
      </article>
    </div>
  </section>

  <!-- Posts -->
  <section class="m-sec" style="padding-top:0">
    <div class="m-in">
      <div class="filters" id="filters" role="group" aria-label="Filter by topic">
        <button class="on" data-cat="all">All</button>
        <button data-cat="web">Web Dev</button>
        <button data-cat="design">UI/UX</button>
        <button data-cat="seo">SEO</button>
        <button data-cat="ai">AI & Automation</button>
      </div>

      <div class="grid-p" id="posts">
        <article class="post" data-cat="web"><div class="thumb t-web"><i class="fa-brands fa-laravel"></i></div><div class="body"><div class="meta"><span class="tag">Web Dev</span><span>5 min read</span></div><h3>Laravel tips for faster page loads</h3><p>Caching, eager loading and asset bundling that cut load time without a rewrite.</p><a class="more" href="#">Read more <i class="fa-solid fa-arrow-right"></i></a></div></article>
        <article class="post" data-cat="design"><div class="thumb t-design"><i class="fa-solid fa-pen-ruler"></i></div><div class="body"><div class="meta"><span class="tag">UI/UX</span><span>4 min read</span></div><h3>5 UI mistakes that cost you customers</h3><p>Small layout and contrast problems that make visitors leave, and how to fix them.</p><a class="more" href="#">Read more <i class="fa-solid fa-arrow-right"></i></a></div></article>
        <article class="post" data-cat="seo"><div class="thumb t-seo"><i class="fa-solid fa-magnifying-glass-chart"></i></div><div class="body"><div class="meta"><span class="tag">SEO</span><span>7 min read</span></div><h3>SEO checklist for a new business website</h3><p>The basics to set up before launch so Google can find and understand your pages.</p><a class="more" href="#">Read more <i class="fa-solid fa-arrow-right"></i></a></div></article>
        <article class="post" data-cat="ai"><div class="thumb t-ai"><i class="fa-solid fa-robot"></i></div><div class="body"><div class="meta"><span class="tag">AI & Automation</span><span>6 min read</span></div><h3>Automate your daily reports with AI</h3><p>A simple workflow that collects data and writes your weekly summary for you.</p><a class="more" href="#">Read more <i class="fa-solid fa-arrow-right"></i></a></div></article>
        <article class="post" data-cat="web"><div class="thumb t-web"><i class="fa-solid fa-mobile-screen"></i></div><div class="body"><div class="meta"><span class="tag">Web Dev</span><span>4 min read</span></div><h3>Responsive design without the headaches</h3><p>Build once and make it look right on phones, tablets and desktops.</p><a class="more" href="#">Read more <i class="fa-solid fa-arrow-right"></i></a></div></article>
        <article class="post" data-cat="design"><div class="thumb t-design"><i class="fa-brands fa-figma"></i></div><div class="body"><div class="meta"><span class="tag">UI/UX</span><span>5 min read</span></div><h3>From Figma to live site in one week</h3><p>How we hand over designs to developers so nothing gets lost on the way.</p><a class="more" href="#">Read more <i class="fa-solid fa-arrow-right"></i></a></div></article>
      </div>
      <p class="empty" id="empty">No articles match your search. Try another word or choose All.</p>
    </div>
  </section>

  <!-- About the blog -->
  <section class="m-sec" style="padding-top:0">
    <div class="intro reveal">
      <h2>Why we write</h2>
      <p>Welcome to the Mahin IT Firm Blog, your trusted source for the latest insights, ideas and innovations in technology and digital business. Our goal is to share useful knowledge that helps businesses, entrepreneurs, developers and technology enthusiasts stay informed.</p>
      <p>We simplify complex concepts and give practical advice you can apply to your own projects, whether you are growing a brand, launching a startup or learning a new technique.</p>
    </div>
  </section>

  <!-- Newsletter -->
  <section class="m-sec" style="padding-top:0">
    <div class="m-in">
      <div class="news reveal">
        <h2>Get new articles in your inbox</h2>
        <p class="mb-0">One short email when we publish. No spam.</p>
        <form id="nl">
          <input type="email" required placeholder="you@example.com" aria-label="Email address">
          <button class="btn-m" style="background:#fff;color:#1b2140" type="submit"><i class="fa-solid fa-paper-plane"></i> Subscribe</button>
        </form>
        <div class="ok" id="ok"><i class="fa-solid fa-circle-check"></i> Subscribed. Thank you!</div>
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

    // Filter + search
    const posts = [...document.querySelectorAll('#posts .post')];
    const q = document.getElementById('q'), empty = document.getElementById('empty');
    let cat = 'all';
    function apply() {
      const term = q.value.trim().toLowerCase();
      let shown = 0;
      posts.forEach(p => {
        const ok = (cat === 'all' || p.dataset.cat === cat) && p.textContent.toLowerCase().includes(term);
        p.style.display = ok ? '' : 'none';
        if (ok) { shown++; p.style.animation = 'none'; p.offsetHeight; p.style.animation = ''; }
      });
      empty.style.display = shown ? 'none' : 'block';
    }
    document.getElementById('filters').addEventListener('click', e => {
      const b = e.target.closest('button'); if (!b) return;
      document.querySelectorAll('#filters button').forEach(x => x.classList.toggle('on', x === b));
      cat = b.dataset.cat; apply();
    });
    q.addEventListener('input', apply);

    // Newsletter (demo: connect to your Laravel route later)
    document.getElementById('nl').addEventListener('submit', e => {
      e.preventDefault(); e.target.style.display = 'none';
      document.getElementById('ok').style.display = 'block';
    });

    // Scroll reveal
    const io = new IntersectionObserver(es => es.forEach(e => {
      if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
    }), { threshold: .15 });
    document.querySelectorAll('.reveal').forEach(n => io.observe(n));

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