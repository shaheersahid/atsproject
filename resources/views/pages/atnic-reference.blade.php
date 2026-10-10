@extends('layouts.app')

@section('title', 'ATS — Artificial Technology Solutions')
@section('meta_description', 'ATS builds intelligent products, venture-backed businesses, and scalable technology platforms.')

@push('styles')
<link href="{{ asset('css/atnic-reference.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="atnic-ref">
    <section class="ar-hero">
        <img class="ar-hero-image" src="{{ asset('images/atnic-reference/hero.png') }}" alt="Connected digital Earth above a futuristic city">
        <div class="ar-hero-shade"></div>
        <div class="ar-hero-copy"><p class="ar-kicker">Artificial Technology Solutions</p><h1>We build what<br><span>comes next.</span></h1><p>ATS creates intelligent products, venture-backed<br>digital businesses, and scalable technology platforms.</p><div class="ar-actions"><a class="ar-button ar-button-light" href="#products">Explore Products <span>→</span></a><a class="ar-button ar-button-dark" href="{{ route('contact') }}">Build With ATS</a></div></div>
        <div class="ar-hero-metrics"><div><small>Products</small><strong>3+</strong></div><div><small>Ventures</small><strong>In Creation</strong></div><div><small>Technology</small><strong>AETNIC</strong></div><div><small>Mission</small><strong>A Smarter Tomorrow.</strong></div></div>
    </section>

    <main class="ar-content">
        <section id="ventures" class="ar-section">
            <div class="ar-section-heading"><h2>Two Operating Arms</h2><span></span><p>Products today. A brighter tomorrow.</p></div>
            <div class="ar-arms">
                <article class="ar-arm"><img src="{{ asset('images/home-city.jpg') }}" alt="Futuristic blue city"><div class="ar-arm-overlay"></div><div class="ar-arm-copy"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 4 7.5v9L12 21l8-4.5v-9L12 3Zm0 9L4 7.5M12 12l8-4.5M12 12v9"/></svg><h3>ATS Products</h3><p>Technology businesses built<br>and owned by ATS.</p><a href="#products" aria-label="Explore ATS Products">→</a></div><strong class="ar-strip">Build &nbsp; | &nbsp; Scale &nbsp; | &nbsp; Create Real Value</strong></article>
                <article class="ar-arm ar-arm-warm"><img src="{{ asset('images/home-mountain.jpg') }}" alt="Mountain peak in warm sunrise light"><div class="ar-arm-overlay"></div><div class="ar-arm-copy"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m4 18 8-14 8 14H4Zm5.5 0L12 12l2.5 6"/></svg><h3>ATS Ventures</h3><p>Ideas, startup creation, venture<br>building, and commercialization.</p><a href="{{ route('ventures') }}" aria-label="Explore ATS Ventures">→</a></div><strong class="ar-strip ar-strip-right">Ideas &nbsp; | &nbsp; People &nbsp; | &nbsp; Capital &nbsp; | &nbsp; Global Impact</strong></article>
            </div>
        </section>

        <section id="products" class="ar-section ar-products-section">
            <div class="ar-section-heading"><h2>Flagship Products</h2><span></span><p>Real businesses. Real people. Real impact.</p></div>
            <div class="ar-products">
                <article class="ar-product ar-product-small"><img src="{{ asset('images/atnic-reference/deal4less.png') }}" alt="Concert crowd holding a glowing phone"><div class="ar-card-fade"></div><div class="ar-product-copy"><div class="ar-product-title"><b class="ar-badge ar-badge-d4">D4</b><h3>Deal4Less</h3><a href="{{ route('deal4less') }}">→</a></div><p>Voucher Marketplace • 1+1 Membership •<br>Events & Gatherings</p></div></article>
                <article class="ar-product ar-product-small"><img src="{{ asset('images/home-wellness.jpg') }}" alt="Fitness woman facing a peaceful mountain landscape"><div class="ar-card-fade"></div><div class="ar-product-copy"><div class="ar-product-title"><b class="ar-badge ar-badge-fit">◆</b><h3>Fintass</h3><a href="{{ route('fitnass') }}">→</a></div><p>Digital fitness, wellness, and health tools</p></div></article>
                <article class="ar-product ar-product-atnic"><img src="{{ asset('images/atnic-reference/atnic-humanoid.png') }}" alt="Futuristic AI humanoid with an illuminated digital brain"><div class="ar-product-copy ar-atnic-card-copy"><div class="ar-product-title"><b class="ar-atnic-mark">A</b><h3>AETNIC<small>Inference Engine</small></h3><a href="#technology">→</a></div><p>Reasoning • Inference • Automation •<br>Decision Intelligence</p></div></article>
            </div>
        </section>

        <section id="technology" class="ar-intelligence">
            <div class="ar-intelligence-head"><h2><b>AETNIC</b> <span>Inference Engine</span></h2><p>Our flagship intelligence platform</p></div>
            <div class="ar-intelligence-body">
                <div class="ar-intro"><h3>An intelligence engine designed<br>to transform data into <span>reasoning,<br>inference, and action.</span></h3><p>AETNIC combines advanced AI, multi-modal reasoning, and<br>real-world context to turn complex data into actionable<br>intelligence — empowering better decisions, faster.</p><div class="ar-actions"><a class="ar-button ar-button-light" href="#technology">Explore AETNIC <span>→</span></a><a class="ar-button ar-button-dark" href="{{ route('contact') }}">Request a Demo</a></div></div>
                <div class="ar-workflow">
                    @foreach ([['Data', 'Multi-source<br>real-world data'], ['Reasoning', 'Contextual<br>understanding'], ['Inference', 'Insights<br>& predictions'], ['Action', 'Automation<br>& real-world impact']] as $index => $step)
                        <article><h4>{{ $step[0] }}</h4><span class="ar-workflow-art ar-workflow-art-{{ $index }}"></span><p>{!! $step[1] !!}</p></article>@if (! $loop->last)<b>→</b>@endif
                    @endforeach
                </div>
            </div>
            <div class="ar-data-wave"></div>
            <div class="ar-capabilities"><span>◉ &nbsp; Enterprise Analytics</span><span>◌ &nbsp; Autonomous Systems</span><span>◉ &nbsp; Intelligent Agents</span><span>▣ &nbsp; Decision Support</span><span>◇ &nbsp; Real-world Applications</span></div>
        </section>

        <section id="company" class="ar-section ar-why-section">
            <div class="ar-section-heading"><h2>Why ATS</h2><span></span><p>A unique model for a bigger tomorrow.</p></div>
            <div class="ar-why-grid"><article><i>⬡</i><div><h3>Own Products</h3><p>We build and own technology businesses for long-term value.</p></div></article><article><i>◉</i><div><h3>AI Capability</h3><p>Deep AI expertise across models, data, and real-world applications.</p></div></article><article><i>♢</i><div><h3>Venture Creation</h3><p>We turn bold ideas into scalable companies.</p></div></article><article><i>◇</i><div><h3>Scalable Platforms</h3><p>Shared technology, talent and infrastructure for compounding growth.</p></div></article></div>
        </section>
    </main>

    <section class="ar-cta"><img src="{{ asset('images/home-earth.jpg') }}" alt="Earth from space at golden sunrise"><div class="ar-cta-shade"></div><h2>The next great company<br>may start with <span>one idea.</span></h2><div><p>People &nbsp;•&nbsp; Ideas &nbsp;•&nbsp; Technology<br>A brighter tomorrow.</p><a class="ar-button ar-button-gold" href="{{ route('contact') }}">Partner with ATS <span>→</span></a></div></section>

    <footer class="ar-footer"><div class="ar-footer-main"><a class="ar-logo" href="{{ route('home') }}" aria-label="ATS home"><b>ATS</b><span></span><small>Artificial<br>Technology<br>Solutions</small></a><span></span><p>Ideas. Products. Ventures. A Smarter Tomorrow.</p><nav><a href="#products">Products</a><a href="#ventures">Ventures</a><a href="#technology">Technology</a><a href="#company">Company</a><a href="{{ route('contact') }}">Contact</a></nav><div class="ar-social">in &nbsp; 𝕏 &nbsp; ▶ &nbsp; ●</div></div><div class="ar-footer-bottom"><p>© {{ date('Y') }} Artificial Technology Solutions (ATS). All rights reserved.</p><p>Privacy &nbsp;&nbsp; Terms &nbsp;&nbsp; Investors</p></div></footer>
</div>
@endsection
