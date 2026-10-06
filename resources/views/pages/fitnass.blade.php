@extends('layouts.app')

@section('title', 'Fitnass | ATS')
@section('meta_description', 'Fitnass is an AI fitness and nutrition app for iOS and Android. It tracks and teaches exercises, builds training and diet plans, and logs meals from a photo. Launching Q1 2027.')

@push('styles')
<link href="{{ asset('css/fitnass.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="fitnass-page">
<section class="page-hero fitnass-hero">
    <div class="page-hero-media fitnass-hero-media" data-reveal>
        <img src="{{ asset('images/fitnass-hero-v2.jpg') }}" alt="Fitnass AI fitness and nutrition experience overlooking an alpine lake" width="1536" height="1024" fetchpriority="high">
        <div class="fitnass-app-badge">
            <img src="{{ asset('images/fitnass/app-icon-1024.png') }}" alt="Fitnass app icon">
        </div>
    </div>
    <div class="container-ats page-hero-grid">
        <div data-reveal>
            <div class="brand-lockup">
                <img class="brand-logo" src="{{ asset('images/fitnass/logo-transparent.png') }}" alt="Fitnass logo">
                <p class="hero-kicker mb-0">ATS Product · Launching Q1 2027</p>
            </div>
            <h1 class="page-title">Fitnass.<br><span class="glow">Your health, powered by AI.</span></h1>
            <p class="hero-copy">
                Fitnass is an AI-powered fitness and nutrition app for iOS and Android, built to bring artificial intelligence into everyday fitness.
                It tracks your exercises, teaches you how to perform them, and builds training schedules that fit each user’s goals and needs.
                It does the same for nutrition: users can log meals from a photo or a barcode scan, track their calories and macros, and turn any diet plan into a personalised daily schedule.
            </p>
            <div class="hero-actions">
                <a class="btn-solid-pill" href="https://fitnass.ai" target="_blank" rel="noopener">Visit fitnass.ai →</a>
                <a class="btn-ghost-pill" href="{{ route('contact') }}">Discuss Fitnass</a>
            </div>
        </div>
    </div>
</section>

<section class="section fitnass-feature-section">
    <div class="container-ats">
        <div class="section-head" data-reveal>
            <h2 class="section-title">What Fitnass Does</h2>
            <p class="section-sub">Fitness · Nutrition · AI Guidance</p>
        </div>
        <div class="why-grid">
            <article class="why-card fitnass-feature-card" data-reveal>
                <h3>Exercise Tracking</h3>
                <p>Track workouts and learn how to perform exercises correctly with guided support.</p>
            </article>
            <article class="why-card fitnass-feature-card" data-reveal>
                <h3>Personal Training Plans</h3>
                <p>AI builds training schedules around each user’s goals, level, and needs.</p>
            </article>
            <article class="why-card fitnass-feature-card" data-reveal>
                <h3>Smart Nutrition Logging</h3>
                <p>Log meals from a photo or barcode scan, then track calories and macros with ease.</p>
            </article>
            <article class="why-card fitnass-feature-card" data-reveal>
                <h3>Diet Scheduling</h3>
                <p>Turn any diet plan into a personalised daily schedule that stays practical.</p>
            </article>
        </div>
    </div>
</section>

<section class="section fitnass-coming-section">
    <div class="container-ats">
        <div class="section-head" data-reveal>
            <h2 class="section-title">Coming Next</h2>
            <p class="section-sub">In Development</p>
        </div>
        <div class="row g-3">
            <div class="col-md-6" data-reveal>
                <article class="info-card fitnass-next-card h-100">
                    <p class="eyebrow">AI Coach</p>
                    <h3>A 3D virtual trainer.</h3>
                    <p>A guided workout experience with a 3D virtual trainer that helps users move through their sessions with clearer direction and form support.</p>
                </article>
            </div>
            <div class="col-md-6" data-reveal>
                <article class="info-card fitnass-next-card h-100">
                    <p class="eyebrow">Supplements</p>
                    <h3>Track nutritional supplements.</h3>
                    <p>A new category for logging and managing nutritional supplements alongside training and meal plans.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="section fitnass-story-section">
    <div class="container-ats">
        <div class="row g-3">
            <div class="col-md-6" data-reveal>
                <article class="media-card fitnass-story-card">
                    <img src="{{ asset('images/fitnass-people.jpg') }}" alt="People-centered Fitnass experience">
                    <div class="media-card-body">
                        <p class="eyebrow">Short Description</p>
                        <h3>AI fitness and nutrition, built around you.</h3>
                        <p>Fitnass is an AI fitness and nutrition app for iOS and Android. It tracks and teaches your exercises, builds training and diet plans around you, and logs meals from a photo.</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6" data-reveal>
                <article class="info-card fitnass-timeline-card h-100">
                    <p class="eyebrow">Launch Timeline</p>
                    <div class="feature-list">
                        <div class="feature-item">
                            <strong>Planned launch</strong>
                            <span>First quarter of 2027 (Q1 2027).</span>
                        </div>
                        <div class="feature-item">
                            <strong>Platforms</strong>
                            <span>iOS and Android.</span>
                        </div>
                        <div class="feature-item">
                            <strong>Official site</strong>
                            <span><a href="https://fitnass.ai" target="_blank" rel="noopener">fitnass.ai</a></span>
                        </div>
                        <div class="feature-item">
                            <strong>ATS portfolio</strong>
                            <span>Fitnass is part of the ATS product portfolio.</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="cta-band fitnass-cta">
    <div class="cta-band-media">
        <img src="{{ asset('images/earth-cta.jpg') }}" alt="Glowing Earth horizon from space">
    </div>
    <div class="cta-band-inner" data-reveal>
        <h2>Fitnass brings AI into everyday fitness and nutrition.</h2>
        <a class="btn-gold" href="https://fitnass.ai" target="_blank" rel="noopener">Explore Fitnass →</a>
    </div>
</section>
</div>
@endsection
