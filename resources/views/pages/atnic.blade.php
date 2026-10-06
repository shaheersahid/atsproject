@extends('layouts.app')

@section('title', 'ATNIC Inference Engine | ATS')
@section('meta_description', 'ATNIC is an intelligence layer designed to transform complex data into context-aware reasoning, decision intelligence and automation.')

@section('content')
<section class="page-hero">
    <div class="container-ats page-hero-grid">
        <div data-reveal>
            <p class="hero-kicker">ATS Intelligence · ATNIC Inference Engine</p>
            <h1 class="page-title">From data to<br><span class="glow">reasoning, inference, and action.</span></h1>
            <p class="hero-copy">ATNIC is an intelligence layer designed to transform complex data into context-aware reasoning, decision intelligence and automation.</p>
            <div class="hero-actions">
                <a class="btn-solid-pill" href="{{ route('contact') }}">Request Investor Deck →</a>
                <a class="btn-ghost-pill" href="{{ route('contact') }}">Book a Demo</a>
            </div>
        </div>
        <div class="page-hero-media" data-reveal>
            <img src="{{ asset('images/atnic-hero.jpg') }}" alt="ATNIC intelligence platform visual">
        </div>
    </div>
</section>

<section class="section">
    <div class="container-ats">
        <div class="section-head" data-reveal>
            <h2 class="section-title">An Intelligence Pipeline</h2>
            <p class="section-sub">From Diverse Data to Real-World Impact</p>
        </div>
        <div class="pipeline pipeline-page" data-reveal>
            <div class="pipeline-step"><strong>01 Data Input</strong><span>Ingests structured, unstructured and real-time data from multiple sources.</span></div>
            <div class="pipeline-step"><strong>02 Context</strong><span>Builds domain context, understands intent and models relationships.</span></div>
            <div class="pipeline-step"><strong>03 Reasoning</strong><span>Evaluates, simulates and derives insights using advanced reasoning models.</span></div>
            <div class="pipeline-step"><strong>04 Inference</strong><span>Generates predictions, conclusions and actionable recommendations.</span></div>
            <div class="pipeline-step"><strong>05 Action</strong><span>Connects to systems, agents and workflows to drive real-world outcomes.</span></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container-ats">
        <div class="section-head" data-reveal>
            <h2 class="section-title">Intelligence Beyond a Single Use Case</h2>
            <p class="section-sub">What Makes It Powerful</p>
        </div>
        <div class="why-grid">
            <article class="why-card" data-reveal><h3>Multi-Modal Intelligence</h3><p>Connects text, data, images and other signals into richer context.</p></article>
            <article class="why-card" data-reveal><h3>Decision Support</h3><p>Turns complex information into structured, explainable insight.</p></article>
            <article class="why-card" data-reveal><h3>Automation Ready</h3><p>Designed to power agents, workflows and autonomous systems.</p></article>
            <article class="why-card" data-reveal><h3>Enterprise Integration</h3><p>A scalable intelligence layer designed to connect with existing infrastructure.</p></article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container-ats">
        <div class="section-head" data-reveal>
            <h2 class="section-title">Real Problems. Real Intelligence.</h2>
            <p class="section-sub">Use Cases</p>
        </div>
        <div class="pipeline pipeline-page" data-reveal>
            <div class="pipeline-step"><strong>Operational Intelligence</strong><span>Real-time insight across complex operations.</span></div>
            <div class="pipeline-step"><strong>Decision Systems</strong><span>Augment human decisions with trusted reasoning.</span></div>
            <div class="pipeline-step"><strong>Intelligent Agents</strong><span>Domain-specific agents that reason, plan and execute.</span></div>
            <div class="pipeline-step"><strong>Predictive Insight</strong><span>Anticipate change and surface opportunities earlier.</span></div>
            <div class="pipeline-step"><strong>Workflow Automation</strong><span>Turn intelligence into action across business processes.</span></div>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="cta-band-media">
        <img src="{{ asset('images/earth-cta.jpg') }}" alt="Glowing Earth horizon from space">
    </div>
    <div class="cta-band-inner" data-reveal>
        <h2>Intelligence is becoming <span class="gold">infrastructure.</span></h2>
        <a class="btn-gold" href="{{ route('contact') }}">Partner on ATNIC →</a>
    </div>
</section>
@endsection
