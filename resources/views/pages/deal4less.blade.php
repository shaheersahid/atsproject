@extends('layouts.app')

@section('title', 'Deal4Less | More Value. More Moments.')
@section('meta_description', 'Deal4Less brings memberships, local deals and memorable experiences together in one Saudi-first platform.')

@push('styles')
<link href="{{ asset('css/deal4less.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="deal4less-page">
    <section class="d4l-hero" id="top">
        <div class="d4l-orb d4l-orb-one" aria-hidden="true"></div>
        <div class="d4l-orb d4l-orb-two" aria-hidden="true"></div>

        <div class="container-ats d4l-hero-grid">
            <div class="d4l-hero-copy" data-reveal>
                <p class="d4l-eyebrow"><span></span> A Saudi-first lifestyle platform</p>
                <img class="d4l-brand-logo" src="{{ asset('images/deal4less/logo-transparent-v2.png') }}" alt="Deal4Less — Membership, Deals and Experiences" width="1536" height="1024">
                <h1>Live more.<br><span>Spend less.</span></h1>
                <p class="d4l-lead">Memberships, exclusive 1+1 offers and unforgettable experiences—designed around the way Saudi Arabia lives, connects and celebrates.</p>
                <div class="d4l-actions">
                    <a class="d4l-button d4l-button-primary" href="#experience">Explore the experience <span aria-hidden="true">→</span></a>
                    <a class="d4l-button d4l-button-secondary" href="{{ route('contact') }}">Partner with us</a>
                </div>
                <div class="d4l-trust-row" aria-label="Platform benefits">
                    <span><i>✓</i> Curated local offers</span><span><i>✓</i> Secure redemption</span><span><i>✓</i> Built for Saudi Arabia</span>
                </div>
            </div>

            <div class="d4l-hero-visual" aria-hidden="true"></div>
        </div>

        <div class="container-ats d4l-metrics" data-reveal>
            <div><strong>01</strong><span>Memberships</span></div><div><strong>02</strong><span>Deals</span></div><div><strong>03</strong><span>Experiences</span></div><p>One app. More ways to enjoy every day.</p>
        </div>
    </section>

    <section class="d4l-section d4l-pillars" id="experience">
        <div class="container-ats">
            <div class="d4l-section-heading" data-reveal>
                <div><p class="d4l-eyebrow"><span></span> The Deal4Less ecosystem</p><h2>Everything good,<br><em>made more rewarding.</em></h2></div>
                <p>From an everyday meal to the biggest moments in life, Deal4Less turns discovery into real value with a seamless mobile experience.</p>
            </div>

            <div class="d4l-pillar-grid">
                <article class="d4l-pillar d4l-pillar-featured" data-reveal>
                    <div class="d4l-pillar-number">01</div><div class="d4l-pillar-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M5 10h14v10H5zM8 10V7a4 4 0 0 1 8 0v3M8 15h8"/></svg></div>
                    <h3>1+1 Membership</h3><p>One membership unlocks exclusive offers across food, wellness, beauty, training, automobiles and entertainment.</p>
                    <ul><li>Flexible annual access</li><li>Simple monthly payments</li><li>Transparent savings</li></ul>
                </article>
                <article class="d4l-pillar" data-reveal>
                    <div class="d4l-pillar-number">02</div><div class="d4l-pillar-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 7h18v10H3zM8 7c0-2 1-3 2.5-3S13 5 12 7M16 7c0-2-1-3-2.5-3S11 5 12 7M12 7v10"/></svg></div>
                    <h3>Curated Deals</h3><p>Discover nearby 1+1 offers by list or map, choose a branch and book in a few effortless taps.</p>
                    <ul><li>Location-aware discovery</li><li>Powerful filters</li><li>Secure in-store redemption</li></ul>
                </article>
                <article class="d4l-pillar" data-reveal>
                    <div class="d4l-pillar-number">03</div><div class="d4l-pillar-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 5h16v15H4zM8 3v4M16 3v4M4 10h16"/><path d="m9 15 2 2 4-5"/></svg></div>
                    <h3>Events &amp; Gatherings</h3><p>Find venues and catering for weddings, birthdays, business events and family gatherings—all in one flow.</p>
                    <ul><li>Live availability</li><li>Budget-first matching</li><li>Instant booking options</li></ul>
                </article>
            </div>
        </div>
    </section>

    <section class="d4l-section d4l-journey">
        <div class="container-ats">
            <div class="d4l-section-heading" data-reveal>
                <div><p class="d4l-eyebrow"><span></span> One seamless journey</p><h2>Discover. Book.<br><em>Redeem. Save.</em></h2></div>
                <p>Every touchpoint is designed to feel clear, trusted and rewarding—from the first search to the moment the saving is confirmed.</p>
            </div>
            <div class="d4l-journey-stage" data-reveal>
                <div class="d4l-journey-tabs" aria-label="Deal4Less customer journey"><span class="is-active">Membership</span><span>Discover</span><span>Book</span><span>Redeem</span></div>
                <img src="{{ asset('images/deal4less/journey-membership.jpeg') }}" alt="Deal4Less membership selection and checkout experience" loading="lazy" width="1304" height="734">
            </div>
            <div class="d4l-journey-gallery">
                <figure data-reveal><img src="{{ asset('images/deal4less/journey-welcome.jpeg') }}" alt="Deal4Less welcome, sign in and home mobile app journey" loading="lazy" width="1304" height="734"><figcaption><span>Welcome home</span><strong>Start with more value</strong></figcaption></figure>
                <figure data-reveal><img src="{{ asset('images/deal4less/journey-discover.jpeg') }}" alt="Discover nearby Deal4Less offers on a list and map" loading="lazy" width="1304" height="734"><figcaption><span>Explore nearby</span><strong>Find the right deal</strong></figcaption></figure>
                <figure data-reveal><img src="{{ asset('images/deal4less/journey-redeem.jpeg') }}" alt="Secure Deal4Less QR redemption and savings confirmation" loading="lazy" width="1304" height="734"><figcaption><span>Redeem securely</span><strong>See the saving instantly</strong></figcaption></figure>
            </div>
        </div>
    </section>

    <section class="d4l-section d4l-events">
        <div class="container-ats d4l-events-grid">
            <div class="d4l-events-content" data-reveal>
                <p class="d4l-eyebrow"><span></span> Built for life's moments</p><h2>Planning something<br><em>worth remembering?</em></h2>
                <p>Choose the occasion, share your requirements and compare venues or catering options matched to your date, guest count and budget.</p>
                <div class="d4l-occasion-list"><span>Weddings</span><span>Birthdays</span><span>Family gatherings</span><span>Corporate events</span><span>Ramadan</span><span>National Day</span></div>
            </div>
            <figure class="d4l-events-visual" data-reveal><img src="{{ asset('images/deal4less/events-venue-v2.png') }}" alt="Premium Riyadh event venue at blue hour" loading="lazy" width="1536" height="864"></figure>
        </div>
    </section>

    <section class="d4l-section d4l-audience">
        <div class="container-ats d4l-audience-grid">
            <article class="d4l-audience-card" data-reveal><img src="{{ asset('images/deal4less/dining-membership-v2.png') }}" alt="Saudi friends enjoying a Deal4Less dining experience in Riyadh" loading="lazy"><div><p class="d4l-eyebrow"><span></span> For members</p><h3>A brighter everyday.</h3><p>More places to go, more moments to share and more value from every experience.</p></div></article>
            <article class="d4l-audience-card d4l-audience-partner" data-reveal><div class="d4l-partner-pattern" aria-hidden="true"></div><div><p class="d4l-eyebrow"><span></span> For partners</p><h3>Turn discovery into loyalty.</h3><p>Reach high-intent local customers through memberships, offers and booking journeys built to encourage repeat visits.</p><a href="{{ route('contact') }}">Become a Deal4Less partner <span aria-hidden="true">→</span></a></div></article>
        </div>
    </section>

    <section class="d4l-cta">
        <div class="d4l-cta-backdrop" aria-hidden="true"></div>
        <div class="container-ats d4l-cta-inner" data-reveal><p class="d4l-eyebrow"><span></span> More people. More moments.</p><h2>Let’s make everyday<br><em>more rewarding.</em></h2><p>Join the Deal4Less ecosystem as a merchant, venue, caterer or strategic partner.</p><a class="d4l-button d4l-button-primary" href="{{ route('contact') }}">Start a conversation <span aria-hidden="true">→</span></a></div>
    </section>
</div>
@endsection
