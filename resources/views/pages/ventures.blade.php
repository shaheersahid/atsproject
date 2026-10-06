@extends('layouts.app')

@section('title', 'ATS Ventures | Artificial Technology Solutions')
@section('meta_description', 'ATS Ventures combines technology, product design, commercial thinking and venture creation to transform ideas into scalable companies.')

@section('content')
<section class="page-hero">
    <div class="container-ats page-hero-grid">
        <div data-reveal>
            <p class="hero-kicker">ATS Ventures</p>
            <h1 class="page-title">Ideas deserve more than capital.<br><span class="glow">They need execution.</span></h1>
            <p class="hero-copy">ATS Ventures combines technology, product design, commercial thinking and venture creation to transform ambitious ideas into scalable companies.</p>
            <div class="hero-actions">
                <a class="btn-gold" href="{{ route('contact') }}">Build With ATS →</a>
                <a class="btn-ghost-pill" href="{{ route('home') }}">Explore ATS</a>
            </div>
        </div>
        <div class="page-hero-media" data-reveal>
            <img src="{{ asset('images/ats-ventures-mountain.jpg') }}" alt="ATS Ventures mountain visual">
        </div>
    </div>
</section>

<section class="section">
    <div class="container-ats">
        <div class="section-head" data-reveal>
            <h2 class="section-title">From Idea to Company</h2>
            <p class="section-sub">Validate · Build · Launch · Scale</p>
        </div>
        <div class="pipeline pipeline-page" data-reveal>
            <div class="pipeline-step"><strong>01 Discover</strong><span>Define the problem, opportunity and market logic.</span></div>
            <div class="pipeline-step"><strong>02 Validate</strong><span>Test the proposition before expensive execution.</span></div>
            <div class="pipeline-step"><strong>03 Build</strong><span>Create the product, technology and operating model.</span></div>
            <div class="pipeline-step"><strong>04 Launch</strong><span>Bring the venture to market with focused commercial execution.</span></div>
            <div class="pipeline-step"><strong>05 Scale</strong><span>Strengthen the platform, partnerships and growth engine.</span></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container-ats">
        <div class="row g-3">
            <div class="col-md-6" data-reveal>
                <article class="info-card h-100">
                    <p class="eyebrow">What ATS Brings</p>
                    <h3>More than funding.</h3>
                    <p>We combine product strategy, technology capability, brand thinking, commercial design and hands-on execution under one roof.</p>
                    <div class="pill-tags mt-3">
                        <span>Product</span><span>Technology</span><span>AI</span><span>Commercial</span><span>Growth</span>
                    </div>
                </article>
            </div>
            <div class="col-md-6" data-reveal>
                <article class="media-card">
                    <img src="{{ asset('images/ventures-founders.jpg') }}" alt="Founders and ideas for ATS Ventures">
                    <div class="media-card-body">
                        <p class="eyebrow">Who We Want to Work With</p>
                        <h3>Founders and ideas with the potential to become enduring businesses.</h3>
                        <p>We are interested in clear problems, scalable markets, differentiated technology and teams that think long term.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection
