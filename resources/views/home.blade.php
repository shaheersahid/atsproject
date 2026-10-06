<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATS — Artificial Technology Solutions</title>
    <meta name="description" content="ATS builds intelligent products, venture-backed businesses, and scalable technology for a brighter tomorrow.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <style>
        [data-reveal] {
            opacity: 0;
            transform: translateY(18px);
            transition: opacity 0.55s ease, transform 0.55s ease;
        }
        [data-reveal].is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="container-ats">
            <nav class="navbar-ats" aria-label="Primary">
                <a class="brand" href="{{ url('/') }}">
                    <span class="brand-mark">ATS</span>
                    <span class="brand-text">Artificial<br>Technology<br>Solutions</span>
                </a>

                <ul class="nav-links">
                    <li><a href="#products">Products</a></li>
                    <li><a href="#intelligence">Intelligence</a></li>
                    <li><a href="#ventures">Ventures</a></li>
                    <li><a href="#company">Company</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="d-lg-none"><a class="btn-outline-pill nav-cta" href="#contact">Invest • Build • Scale →</a></li>
                </ul>

                <a class="btn-outline-pill nav-cta d-none d-lg-inline-flex" href="#contact">Invest • Build • Scale →</a>

                <button class="nav-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 7h16M4 12h16M4 17h16"/>
                    </svg>
                </button>
            </nav>
        </div>
    </header>

    <main>
        {{-- HERO --}}
        <section class="hero" id="top">
            <div class="container-ats">
                <div class="hero-grid">
                    <div data-reveal>
                        <p class="hero-kicker">Ideas • Products • Technology • A Brighter Tomorrow</p>
                        <h1 class="hero-title">We build what comes next.</h1>
                        <p class="hero-copy">
                            ATS creates intelligent products, venture-backed businesses, and scalable technology
                            platforms that empower people and build a brighter tomorrow.
                        </p>
                        <div class="hero-actions">
                            <a class="btn-solid-pill" href="#products">Explore Products →</a>
                            <a class="btn-ghost-pill" href="#contact">Build With ATS</a>
                        </div>
                    </div>

                    <div class="hero-visual" data-reveal>
                        <img class="hero-visual-bg" src="{{ asset('images/hero-globe.jpg') }}" alt="Digital globe of connected intelligence with futuristic city skyline">
                        <div class="float-card c1">Intelligent Products<small>Live consumer platforms</small></div>
                        <div class="float-card c2">Venture-Backed Businesses<small>Build • Fund • Scale</small></div>
                        <div class="float-card c3">Empowering People<small>Real-world impact</small></div>
                        <div class="float-card c4">Scalable Technology<small>ATNIC intelligence layer</small></div>
                    </div>
                </div>

                <div class="stats-bar" data-reveal>
                    <div class="stat-item">
                        <span class="stat-value">2</span>
                        <span class="stat-label">Live Products</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">1</span>
                        <span class="stat-label">Intelligence Platform</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">1</span>
                        <span class="stat-label">Venture Arm</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">∞</span>
                        <span class="stat-label">A Bigger Tomorrow</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- TWO OPERATING ARMS --}}
        <section class="section" id="ventures">
            <div class="container-ats">
                <div class="section-head">
                    <h2 class="section-title">Two Operating Arms</h2>
                    <p class="section-sub">Complementary Strengths. A Larger Impact.</p>
                </div>

                <div class="row g-3">
                    <div class="col-md-6" data-reveal>
                        <article class="arm-card">
                            <div class="arm-card-media">
                                <img src="{{ asset('images/ats-products-city.jpg') }}" alt="Futuristic night city representing ATS Products">
                            </div>
                            <div class="arm-card-body">
                                <svg class="arm-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                                    <path d="M12 3 4 7.5v9L12 21l8-4.5v-9L12 3Z"/>
                                    <path d="M12 12 4 7.5M12 12l8-4.5M12 12v9"/>
                                </svg>
                                <h3>ATS Products</h3>
                                <p>Technology businesses designed to scale, operate, and create lasting real-world value.</p>
                                <div class="arm-footer">
                                    <p class="arm-tags">Build | Operate | Grow | Create Real Value</p>
                                    <a class="circle-btn" href="#products" aria-label="Explore ATS Products">→</a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-6" data-reveal>
                        <article class="arm-card">
                            <div class="arm-card-media">
                                <img src="{{ asset('images/ats-ventures-mountain.jpg') }}" alt="Sunrise mountain peak representing ATS Ventures">
                            </div>
                            <div class="arm-card-body">
                                <svg class="arm-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                                    <path d="m4 18 8-14 8 14H4Z"/>
                                    <path d="M9.5 18 12 12l2.5 6"/>
                                </svg>
                                <h3>ATS Ventures</h3>
                                <p>We invent, fund, and commercialize startups that create global impact.</p>
                                <div class="arm-footer">
                                    <p class="arm-tags">Ideas | People | Capital | Global Impact</p>
                                    <a class="circle-btn" href="#contact" aria-label="Explore ATS Ventures">→</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        {{-- OUR PRODUCTS --}}
        <section class="section" id="products">
            <div class="container-ats">
                <div class="section-head">
                    <h2 class="section-title">Our Products</h2>
                    <p class="section-sub">Real Businesses. Real People. Real Impact.</p>
                </div>

                <div class="row g-3">
                    <div class="col-md-6" data-reveal>
                        <article class="product-card">
                            <div class="product-card-media">
                                <img src="{{ asset('images/deal4less.jpg') }}" alt="Neon shopping street for Deal4Less">
                            </div>
                            <div class="product-card-body">
                                <div class="product-logo d4l">D4L</div>
                                <h3>Deal4Less</h3>
                                <p>Voucher marketplace connecting people to dining, travel, shopping, lifestyle, and events.</p>
                                <div class="product-meta">
                                    <div class="pill-tags">
                                        <span>Dining</span>
                                        <span>Travel</span>
                                        <span>Shopping</span>
                                        <span>Lifestyle</span>
                                        <span>Events</span>
                                    </div>
                                    <a class="circle-btn" href="#contact" aria-label="Learn more about Deal4Less">→</a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-6" data-reveal>
                        <article class="product-card">
                            <div class="product-card-media">
                                <img src="{{ asset('images/fitnass.jpg') }}" alt="Meditation wellness scene for Fitnass">
                            </div>
                            <div class="product-card-body">
                                <div class="product-logo fit">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 2c2.8 3.8 7 6.4 7 11a7 7 0 1 1-14 0c0-4.6 4.2-7.2 7-11Z"/>
                                    </svg>
                                </div>
                                <h3>Fitnass</h3>
                                <p>Digital fitness, wellness, and health tools for modern living.</p>
                                <div class="product-meta">
                                    <div class="pill-tags">
                                        <span>Fitness</span>
                                        <span>Wellness</span>
                                        <span>Nutrition</span>
                                        <span>Mindfulness</span>
                                        <span>Health</span>
                                    </div>
                                    <a class="circle-btn" href="#contact" aria-label="Learn more about Fitnass">→</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        {{-- ATNIC --}}
        <section class="section atnic" id="intelligence">
            <div class="container-ats">
                <div class="section-head">
                    <h2 class="section-title">ATNIC — Our Flagship Intelligence Platform</h2>
                    <p class="section-sub">From Diverse Data to Real-World Impact.</p>
                </div>

                <div class="atnic-layout">
                    <div data-reveal>
                        <p class="atnic-kicker">Intelligence Layer</p>
                        <h3 class="atnic-title">Transforming data into <span class="glow">reasoning, inference, and action.</span></h3>
                        <p class="atnic-copy">
                            ATNIC turns multi-modal data into context-aware reasoning and enterprise-ready automation —
                            so products and ventures can move from insight to real-world outcomes.
                        </p>
                        <div class="atnic-actions">
                            <a class="btn-solid-pill" href="#contact">Request Investor Deck →</a>
                            <a class="btn-ghost-pill" href="#contact">Book a Demo</a>
                        </div>
                    </div>

                    <div data-reveal>
                        <div class="pipeline" aria-label="ATNIC intelligence pipeline">
                            <div class="pipeline-step">
                                <div class="pipeline-icon">
                                    <svg viewBox="0 0 48 48" width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.6">
                                        <rect x="10" y="22" width="12" height="12" rx="1"/>
                                        <rect x="20" y="14" width="12" height="12" rx="1"/>
                                        <rect x="26" y="26" width="12" height="12" rx="1"/>
                                    </svg>
                                </div>
                                <strong>DATA</strong>
                                <span>Multi-source intake</span>
                            </div>
                            <div class="pipeline-step">
                                <div class="pipeline-icon">
                                    <svg viewBox="0 0 48 48" width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.6">
                                        <path d="M8 34V18l8-6 8 6v16"/>
                                        <path d="M24 34V20l8-6 8 6v14"/>
                                        <path d="M8 34h32"/>
                                    </svg>
                                </div>
                                <strong>CONTEXT</strong>
                                <span>Situational mapping</span>
                            </div>
                            <div class="pipeline-step">
                                <div class="pipeline-icon">
                                    <svg viewBox="0 0 48 48" width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.6">
                                        <circle cx="24" cy="24" r="8"/>
                                        <circle cx="24" cy="24" r="14" opacity="0.5"/>
                                        <path d="M24 6v4M24 38v4M6 24h4M38 24h4"/>
                                    </svg>
                                </div>
                                <strong>REASONING</strong>
                                <span>Context-aware logic</span>
                            </div>
                            <div class="pipeline-step">
                                <div class="pipeline-icon">
                                    <svg viewBox="0 0 48 48" width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.6">
                                        <path d="M10 30 24 16l14 14"/>
                                        <path d="M14 34h20"/>
                                        <path d="M18 38h12"/>
                                    </svg>
                                </div>
                                <strong>INFERENCE</strong>
                                <span>Predictive signals</span>
                            </div>
                            <div class="pipeline-step">
                                <div class="pipeline-icon">
                                    <svg viewBox="0 0 48 48" width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.6">
                                        <circle cx="24" cy="24" r="4"/>
                                        <circle cx="24" cy="24" r="10"/>
                                        <circle cx="24" cy="24" r="16" stroke-dasharray="3 3"/>
                                    </svg>
                                </div>
                                <strong>ACTION</strong>
                                <span>Real-world outcomes</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="atnic-features" data-reveal>
                    <div class="atnic-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="3"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3M5 5l2 2M17 17l2 2M5 19l2-2M17 7l2-2"/></svg>
                        Multi-Modal Intelligence
                    </div>
                    <div class="atnic-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 3a9 9 0 0 1 9 9c0 4-3 7-7 8v1H10v-1c-4-1-7-4-7-8a9 9 0 0 1 9-9Z"/><path d="M9 12h6"/></svg>
                        Context-Aware Reasoning
                    </div>
                    <div class="atnic-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M8 20h8M12 18v2"/></svg>
                        Enterprise Ready
                    </div>
                    <div class="atnic-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 16h4v4H4zM10 10h4v10h-4zM16 4h4v16h-4z"/></svg>
                        Automation at Scale
                    </div>
                    <div class="atnic-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/></svg>
                        Real-World Applications
                    </div>
                </div>
            </div>
        </section>

        {{-- WHY ATS --}}
        <section class="section" id="company">
            <div class="container-ats">
                <div class="section-head">
                    <h2 class="section-title">Why ATS</h2>
                    <p class="section-sub">A Unique Model for a Bigger Tomorrow.</p>
                </div>

                <div class="why-grid">
                    <article class="why-card" data-reveal>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                            <path d="M12 3 4 7.5v9L12 21l8-4.5v-9L12 3Z"/><path d="M12 12 4 7.5M12 12l8-4.5M12 12v9"/>
                        </svg>
                        <h3>Own Products</h3>
                        <p>We build and operate real businesses that deliver lasting value.</p>
                    </article>
                    <article class="why-card" data-reveal>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                            <path d="M12 3c3 3.5 6 5.5 6 10a6 6 0 1 1-12 0c0-4.5 3-6.5 6-10Z"/><path d="M9 14h6"/>
                        </svg>
                        <h3>AI Capability</h3>
                        <p>A deep intelligence layer across everything we create.</p>
                    </article>
                    <article class="why-card" data-reveal>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                            <path d="M5 19 19 5M13 5h6v6M9 19H5v-4"/>
                        </svg>
                        <h3>Venture Creation</h3>
                        <p>We invent, fund, and scale new companies with global ambition.</p>
                    </article>
                    <article class="why-card" data-reveal>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                            <path d="M4 16h16M6 12h12M8 8h8M10 4h4"/>
                        </svg>
                        <h3>Scalable Platforms</h3>
                        <p>Technology designed to grow with ambition and impact.</p>
                    </article>
                </div>
            </div>
        </section>

        {{-- CTA BAND --}}
        <section class="cta-band" id="contact">
            <div class="cta-band-media">
                <img src="{{ asset('images/earth-cta.jpg') }}" alt="Glowing Earth horizon from space">
            </div>
            <div class="cta-band-inner" data-reveal>
                <h2>The next great company may start with <span class="gold">one idea.</span></h2>
                <a class="btn-gold" href="mailto:hello@ats.global">Partner with ATS →</a>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container-ats">
            <div class="footer-top">
                <a class="brand" href="{{ url('/') }}">
                    <span class="brand-mark">ATS</span>
                    <span class="brand-text">Artificial<br>Technology<br>Solutions</span>
                </a>

                <ul class="footer-links">
                    <li><a href="#products">Products</a></li>
                    <li><a href="#intelligence">Intelligence</a></li>
                    <li><a href="#ventures">Ventures</a></li>
                    <li><a href="#company">Company</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

                <div class="socials">
                    <a href="#" aria-label="LinkedIn">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M6.5 8.5H3V21h3.5V8.5ZM4.75 3a2 2 0 1 0 0 4 2 2 0 0 0 0-4ZM21 21h-3.5v-6.3c0-1.5-.5-2.5-1.9-2.5-1 0-1.6.7-1.9 1.4-.1.2-.1.5-.1.8V21H10V8.5h3.4v1.7c.5-.8 1.4-1.9 3.4-1.9 2.5 0 4.2 1.6 4.2 5.1V21Z"/></svg>
                    </a>
                    <a href="#" aria-label="X">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18.2 3H21l-6.6 7.5L22 21h-6.2l-4.4-5.5L6 21H3.2l7-8L2 3h6.3l4 5.1L18.2 3Zm-1.1 16.2h1.7L7 4.7H5.2l11.9 14.5Z"/></svg>
                    </a>
                    <a href="#" aria-label="YouTube">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M23 12.2s0-3.2-.4-4.7a3 3 0 0 0-2.1-2.1C18.9 5 12 5 12 5s-6.9 0-8.5.4A3 3 0 0 0 1.4 7.5C1 9 1 12.2 1 12.2s0 3.2.4 4.7a3 3 0 0 0 2.1 2.1C5.1 19.4 12 19.4 12 19.4s6.9 0 8.5-.4a3 3 0 0 0 2.1-2.1c.4-1.5.4-4.7.4-4.7ZM9.8 15.5v-6.6l6.3 3.3-6.3 3.3Z"/></svg>
                    </a>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="mb-0">© {{ date('Y') }} Artificial Technology Solutions. All rights reserved.</p>
                <div class="footer-legal">
                    <a href="#">Privacy</a>
                    <a href="#">Terms</a>
                    <a href="#">Investors</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
