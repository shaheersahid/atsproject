@extends('layouts.app')

@section('title', 'Fitnass | ATS')
@section('meta_description', 'Fitnass is a digital fitness and wellness platform designed to bring practical tools, guided services and everyday health management together.')

@section('content')
<section class="page-hero">
    <div class="container-ats page-hero-grid">
        <div data-reveal>
            <p class="hero-kicker">ATS Product · Under Development</p>
            <h1 class="page-title">Fitnass.<br><span class="glow">Your health, connected.</span></h1>
            <p class="hero-copy">A digital fitness and wellness platform designed to bring practical tools, guided services and everyday health management into one connected experience.</p>
            <div class="hero-actions">
                <a class="btn-solid-pill" href="{{ route('contact') }}">Discuss Fitnass →</a>
                <a class="btn-ghost-pill" href="{{ route('home') }}">Back to ATS</a>
            </div>
        </div>
        <div class="page-hero-media" data-reveal>
            <img src="{{ asset('images/fitnass.jpg') }}" alt="Fitnass wellness visual">
        </div>
    </div>
</section>

<section class="section">
    <div class="container-ats">
        <div class="section-head" data-reveal>
            <h2 class="section-title">A Digital Wellness Ecosystem</h2>
            <p class="section-sub">Fitness · Wellness · Health</p>
        </div>
        <div class="why-grid">
            <article class="why-card" data-reveal><h3>Fitness</h3><p>Training tools, programs, progress tracking and structured support for users at different fitness levels.</p></article>
            <article class="why-card" data-reveal><h3>Wellness</h3><p>Everyday tools designed around recovery, sustainable routines and better wellbeing.</p></article>
            <article class="why-card" data-reveal><h3>Nutrition</h3><p>Practical guidance and digital support to help users make better daily choices.</p></article>
            <article class="why-card" data-reveal><h3>Health Tools</h3><p>Connected services that help users understand, organize and maintain their personal health journey.</p></article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container-ats">
        <div class="row g-3">
            <div class="col-md-6" data-reveal>
                <article class="media-card">
                    <img src="{{ asset('images/fitnass-people.jpg') }}" alt="People-centered Fitnass experience">
                    <div class="media-card-body">
                        <p class="eyebrow">Designed Around People</p>
                        <h3>A calmer, more intelligent way to manage everyday health.</h3>
                        <p>Fitnass is being designed as an approachable platform that can connect digital tools, professional services and personal progress.</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6" data-reveal>
                <article class="info-card h-100">
                    <p class="eyebrow">Product Principles</p>
                    <div class="feature-list">
                        <div class="feature-item"><strong>Simple by design</strong><span>Clear journeys that avoid overwhelming users.</span></div>
                        <div class="feature-item"><strong>Personal progress</strong><span>Tools designed to make improvement visible and motivating.</span></div>
                        <div class="feature-item"><strong>Connected services</strong><span>A foundation for combining tools, programs and wellness services.</span></div>
                        <div class="feature-item"><strong>Built to expand</strong><span>A modular platform designed for new services and partnerships over time.</span></div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection
