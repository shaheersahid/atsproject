@extends('layouts.app')

@section('title', 'Deal4Less | ATS')
@section('meta_description', 'Deal4Less is a Saudi-first digital savings and experiences ecosystem with vouchers, membership benefits and events booking.')

@section('content')
<section class="page-hero">
    <div class="container-ats page-hero-grid">
        <div data-reveal>
            <p class="hero-kicker">ATS Product · Under Development</p>
            <h1 class="page-title">Deal4Less.<br><span class="glow">More value. More experiences.</span></h1>
            <p class="hero-copy">A Saudi-first digital savings and experiences ecosystem bringing together a voucher marketplace, 1+1 membership benefits and instant Events &amp; Gatherings booking in one platform.</p>
            <div class="hero-actions">
                <a class="btn-solid-pill" href="{{ route('contact') }}">Partner With Deal4Less →</a>
                <a class="btn-ghost-pill" href="{{ route('home') }}">Back to ATS</a>
            </div>
        </div>
        <div class="page-hero-media" data-reveal>
            <img src="{{ asset('images/deal4less.jpg') }}" alt="Deal4Less neon marketplace visual">
        </div>
    </div>
</section>

<section class="section">
    <div class="container-ats">
        <div class="section-head" data-reveal>
            <h2 class="section-title">Three Customer Engines</h2>
            <p class="section-sub">Discover · Save · Experience</p>
        </div>
        <div class="row g-3">
            <div class="col-md-4" data-reveal>
                <article class="info-card h-100">
                    <p class="eyebrow">01</p>
                    <h3>Voucher Marketplace</h3>
                    <p>Customers discover and purchase curated offers from merchants across lifestyle categories, with digital redemption and merchant settlement workflows.</p>
                </article>
            </div>
            <div class="col-md-4" data-reveal>
                <article class="info-card h-100">
                    <p class="eyebrow">02</p>
                    <h3>1+1 Membership</h3>
                    <p>A subscription-based benefit ecosystem designed around repeat usage, direct merchant payment and measurable customer savings.</p>
                </article>
            </div>
            <div class="col-md-4" data-reveal>
                <article class="info-card h-100">
                    <p class="eyebrow">03</p>
                    <h3>Events &amp; Gatherings</h3>
                    <p>Instant booking for venues and catering with availability, payment rules and merchant-managed policies built into the journey.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container-ats">
        <div class="row g-3">
            <div class="col-md-6" data-reveal>
                <article class="media-card">
                    <img src="{{ asset('images/deal4less-consumers.jpg') }}" alt="Consumers discovering local offers">
                    <div class="media-card-body">
                        <p class="eyebrow">Built for Consumers</p>
                        <h3>One destination for savings, memberships and experiences.</h3>
                        <p>Designed to make discovery simple while giving merchants new ways to reach and retain customers.</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6" data-reveal>
                <article class="info-card h-100">
                    <p class="eyebrow">Platform Capabilities</p>
                    <div class="feature-list">
                        <div class="feature-item"><strong>Merchant ecosystem</strong><span>Merchant onboarding, offers, branches, staff, statements and reporting.</span></div>
                        <div class="feature-item"><strong>Digital redemption</strong><span>Secure QR, barcode and PIN-based redemption flows.</span></div>
                        <div class="feature-item"><strong>Marketplace payments</strong><span>Platform commission and split-settlement architecture designed for scale.</span></div>
                        <div class="feature-item"><strong>Saudi-first foundation</strong><span>Built around local market behavior, local merchants and scalable expansion.</span></div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="cta-band-media">
        <img src="{{ asset('images/earth-cta.jpg') }}" alt="Glowing Earth horizon from space">
    </div>
    <div class="cta-band-inner" data-reveal>
        <h2>Deal4Less is being built for a new generation of local commerce.</h2>
        <a class="btn-gold" href="{{ route('contact') }}">Contact ATS →</a>
    </div>
</section>
@endsection
