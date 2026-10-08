@extends('layouts.app')

@section('title', 'ATNIC Inference Engine | ATS')
@section('meta_description', 'ATS builds intelligent products, venture-backed businesses, and scalable technology platforms. ATNIC is our flagship intelligence platform.')

@push('styles')
<link href="{{ asset('css/atnic.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="atnic-page">
    <section class="ar-hero">
        <div class="container-ats ar-hero-grid">
            <div class="ar-hero-copy" data-reveal>
                <p class="ar-kicker">Artificial Technology Solutions</p>
                <h1>We build what<br><span>comes next.</span></h1>
                <p class="ar-hero-lead">ATS creates intelligent products, venture-backed digital businesses, and scalable technology platforms.</p>
                <div class="ar-actions">
                    <a class="ar-button ar-button-light" href="#products">Explore Products <span>→</span></a>
                    <a class="ar-button ar-button-dark" href="{{ route('contact') }}">Build With ATS</a>
                </div>
                <div class="ar-hero-metrics">
                    <div><small>Products</small><strong>3+</strong></div>
                    <div><small>Ventures</small><strong>In Creation</strong></div>
                    <div><small>Technology</small><strong>ATNIC</strong></div>
                    <div><small>Mission</small><strong>A Smarter Tomorrow.</strong></div>
                </div>
            </div>
            <div class="ar-hero-visual" data-reveal>
                <img
                    src="{{ asset('images/atnic-reference/hero-v2.png') }}"
                    alt="ATS digital Earth with floating city holograms above a futuristic skyline"
                    width="1536"
                    height="1024"
                    fetchpriority="high"
                >
            </div>
        </div>
    </section>

    <main class="ar-content">
        <div class="container-ats">
            <section id="ventures" class="ar-section">
                <div class="ar-section-heading" data-reveal>
                    <h2>Two Operating Arms</h2>
                    <span></span>
                    <p>Products today. A brighter tomorrow.</p>
                </div>
                <div class="ar-arms">
                    <article class="ar-arm" data-reveal>
                        <img src="{{ asset('images/atnic-reference/products-city-v2.png') }}" alt="Silver-blue futuristic skyscrapers and illuminated waterfront" loading="lazy" decoding="async">
                        <div class="ar-arm-overlay"></div>
                        <div class="ar-arm-copy">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 4 7.5v9L12 21l8-4.5v-9L12 3Zm0 9L4 7.5M12 12l8-4.5M12 12v9"/></svg>
                            <h3>ATS Products</h3>
                            <p>Technology businesses built<br>and owned by ATS.</p>
                            <a href="#products" aria-label="Explore ATS Products">→</a>
                        </div>
                        <strong class="ar-strip">Build &nbsp; | &nbsp; Scale &nbsp; | &nbsp; Create Real Value</strong>
                    </article>
                    <article class="ar-arm ar-arm-warm" data-reveal>
                        <img src="{{ asset('images/atnic-reference/ventures-mountain-v2.png') }}" alt="Jagged alpine mountain peak in golden sunrise and mist" loading="lazy" decoding="async">
                        <div class="ar-arm-overlay"></div>
                        <div class="ar-arm-copy">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m4 18 8-14 8 14H4Zm5.5 0L12 12l2.5 6"/></svg>
                            <h3>ATS Ventures</h3>
                            <p>Ideas, startup creation, venture<br>building, and commercialization.</p>
                            <a href="{{ route('ventures') }}" aria-label="Explore ATS Ventures">→</a>
                        </div>
                        <strong class="ar-strip ar-strip-right">Ideas &nbsp; | &nbsp; People &nbsp; | &nbsp; Capital &nbsp; | &nbsp; Global Impact</strong>
                    </article>
                </div>
            </section>

            <section id="products" class="ar-section ar-products-section">
                <div class="ar-section-heading" data-reveal>
                    <h2>Flagship Products</h2>
                    <span></span>
                    <p>Real businesses. Real people. Real impact.</p>
                </div>
                <div class="ar-products">
                    <article class="ar-product ar-product-small" data-reveal>
                        <img src="{{ asset('images/atnic-reference/deal4less-v2.png') }}" alt="Concert crowd holding a phone with a glowing D4L screen" loading="lazy" decoding="async">
                        <div class="ar-card-fade"></div>
                        <div class="ar-product-copy">
                            <div class="ar-product-title">
                                <b class="ar-badge ar-badge-d4">D4</b>
                                <h3>Deal4Less</h3>
                                <a href="{{ route('deal4less') }}" aria-label="Learn more about Deal4Less">→</a>
                            </div>
                            <p>Voucher Marketplace • 1+1 Membership •<br>Events & Gatherings</p>
                        </div>
                    </article>
                    <article class="ar-product ar-product-small" data-reveal>
                        <img src="{{ asset('images/atnic-reference/fitnass-v2.png') }}" alt="Woman meditating beside a peaceful mountain lake" loading="lazy" decoding="async">
                        <div class="ar-card-fade"></div>
                        <div class="ar-product-copy">
                            <div class="ar-product-title">
                                <b class="ar-badge ar-badge-fit">◆</b>
                                <h3>Fitnass</h3>
                                <a href="{{ route('fitnass') }}" aria-label="Learn more about Fitnass">→</a>
                            </div>
                            <p>Digital fitness, wellness, and health tools</p>
                        </div>
                    </article>
                    <article class="ar-product ar-product-atnic" data-reveal>
                        <img src="{{ asset('images/atnic-reference/atnic-humanoid-v2.png') }}" alt="Left-facing AI humanoid with blue neural connections and a golden brain core" loading="lazy" decoding="async">
                        <div class="ar-product-copy ar-atnic-card-copy">
                            <div class="ar-product-title">
                                <b class="ar-atnic-mark">A</b>
                                <h3>ATNIC<small>Inference Engine</small></h3>
                                <a href="#technology" aria-label="Learn more about ATNIC">→</a>
                            </div>
                            <p>Reasoning • Inference • Automation •<br>Decision Intelligence</p>
                        </div>
                    </article>
                </div>
            </section>

            <section id="technology" class="ar-intelligence" data-reveal>
                <div class="ar-intelligence-head">
                    <h2><b>ATNIC</b> <span>Inference Engine</span></h2>
                    <p>Our flagship intelligence platform</p>
                </div>
                <div class="ar-intelligence-body">
                    <div class="ar-intro">
                        <h3>An intelligence engine designed<br>to transform data into <span>reasoning,<br>inference, and action.</span></h3>
                        <p>ATNIC combines advanced AI, multi-modal reasoning, and<br>real-world context to turn complex data into actionable<br>intelligence — empowering better decisions, faster.</p>
                        <div class="ar-actions">
                            <a class="ar-button ar-button-light" href="#technology">Explore ATNIC <span>→</span></a>
                            <a class="ar-button ar-button-dark" href="{{ route('contact') }}">Request a Demo</a>
                        </div>
                    </div>
                    <div class="ar-workflow">
                        @foreach ([
                            ['Data', 'Multi-source<br>real-world data'],
                            ['Reasoning', 'Contextual<br>understanding'],
                            ['Inference', 'Insights<br>& predictions'],
                            ['Action', 'Automation<br>& real-world impact'],
                        ] as $index => $step)
                            <article>
                                <h4>{{ $step[0] }}</h4>
                                <span class="ar-workflow-art ar-workflow-art-{{ $index }}"></span>
                                <p>{!! $step[1] !!}</p>
                            </article>
                            @if (! $loop->last)
                                <b>→</b>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="ar-data-wave"></div>
                <div class="ar-capabilities">
                    <span>◉ &nbsp; Enterprise Analytics</span>
                    <span>◌ &nbsp; Autonomous Systems</span>
                    <span>◉ &nbsp; Intelligent Agents</span>
                    <span>▣ &nbsp; Decision Support</span>
                    <span>◇ &nbsp; Real-world Applications</span>
                </div>
            </section>

            <section id="company" class="ar-section ar-why-section">
                <div class="ar-section-heading" data-reveal>
                    <h2>Why ATS</h2>
                    <span></span>
                    <p>A unique model for a bigger tomorrow.</p>
                </div>
                <div class="ar-why-grid">
                    <article data-reveal>
                        <i>⬡</i>
                        <div>
                            <h3>Own Products</h3>
                            <p>We build and own technology businesses for long-term value.</p>
                        </div>
                    </article>
                    <article data-reveal>
                        <i>◉</i>
                        <div>
                            <h3>AI Capability</h3>
                            <p>Deep AI expertise across models, data, and real-world applications.</p>
                        </div>
                    </article>
                    <article data-reveal>
                        <i>♢</i>
                        <div>
                            <h3>Venture Creation</h3>
                            <p>We turn bold ideas into scalable companies.</p>
                        </div>
                    </article>
                    <article data-reveal>
                        <i>◇</i>
                        <div>
                            <h3>Scalable Platforms</h3>
                            <p>Shared technology, talent and infrastructure for compounding growth.</p>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </main>

    <section class="ar-cta">
        <img src="{{ asset('images/atnic-reference/earth-cta-v2.png') }}" alt="Earth from space at golden sunrise" loading="lazy" decoding="async">
        <div class="ar-cta-shade"></div>
        <div class="container-ats ar-cta-inner" data-reveal>
            <h2>The next great company<br>may start with <span>one idea.</span></h2>
            <div class="ar-cta-aside">
                <p>People &nbsp;•&nbsp; Ideas &nbsp;•&nbsp; Technology<br>A brighter tomorrow.</p>
                <a class="ar-button ar-button-gold" href="{{ route('contact') }}">Partner with ATS <span>→</span></a>
            </div>
        </div>
    </section>
</div>
@endsection
