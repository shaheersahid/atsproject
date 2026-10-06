@extends('layouts.app')

@section('title', 'About ATS | Artificial Technology Solutions')
@section('meta_description', 'ATS is a technology and venture company creating digital products, intelligence platforms and new businesses with long-term potential.')

@section('content')
<section class="page-hero">
    <div class="container-ats page-hero-grid">
        <div data-reveal>
            <p class="hero-kicker">About Artificial Technology Solutions</p>
            <h1 class="page-title">We build technology.<br><span class="glow">We build businesses.</span></h1>
            <p class="hero-copy">ATS is a technology and venture company focused on creating digital products, intelligence platforms and new businesses with long-term potential.</p>
            <div class="hero-actions">
                <a class="btn-solid-pill" href="{{ route('contact') }}">Talk to ATS →</a>
            </div>
        </div>
        <div class="page-hero-media" data-reveal>
            <img src="{{ asset('images/about-hero.jpg') }}" alt="ATS company vision visual">
        </div>
    </div>
</section>

<section class="section">
    <div class="container-ats">
        <div class="row g-3">
            <div class="col-md-6" data-reveal>
                <article class="info-card">
                    <p class="eyebrow">Our Purpose</p>
                    <h3>Turn technology into meaningful companies.</h3>
                    <p>ATS exists to identify real opportunities, apply technology intelligently, and build products and ventures capable of creating lasting value.</p>
                </article>
            </div>
            <div class="col-md-6" data-reveal>
                <article class="info-card">
                    <p class="eyebrow">Our Ambition</p>
                    <h3>Build from Saudi Arabia for global relevance.</h3>
                    <p>Our approach begins with regional insight but is designed around scalable platforms, strong operating models and international potential.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container-ats">
        <div class="section-head" data-reveal>
            <h2 class="section-title">The Principles Behind ATS</h2>
            <p class="section-sub">How We Think</p>
        </div>
        <div class="why-grid">
            <article class="why-card" data-reveal>
                <h3>Own the Outcome</h3>
                <p>We build with accountability and focus on measurable real-world value.</p>
            </article>
            <article class="why-card" data-reveal>
                <h3>Think in Platforms</h3>
                <p>We design foundations that can expand into broader ecosystems.</p>
            </article>
            <article class="why-card" data-reveal>
                <h3>Move With Purpose</h3>
                <p>Speed matters, but only when paired with clarity and disciplined execution.</p>
            </article>
            <article class="why-card" data-reveal>
                <h3>Build for Scale</h3>
                <p>Architecture, brand and operations are designed with tomorrow in mind.</p>
            </article>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="cta-band-media">
        <img src="{{ asset('images/earth-cta.jpg') }}" alt="Glowing Earth horizon from space">
    </div>
    <div class="cta-band-inner" data-reveal>
        <h2>Products. Intelligence. Ventures. <span class="gold">One technology vision.</span></h2>
        <a class="btn-gold" href="{{ route('contact') }}">Connect with ATS →</a>
    </div>
</section>
@endsection
