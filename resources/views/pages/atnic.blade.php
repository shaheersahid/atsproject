@extends('layouts.app')

@section('title', 'AETNIC Inference Engine | ATS')
@section('meta_description', 'AETNIC converts complex data into context-aware reasoning, decision intelligence, and automation.')

@push('styles')
<link href="{{ asset('css/atnic.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="atnic-page">
    <svg class="atnic-symbols" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <defs>
            <symbol id="atnic-chart" viewBox="0 0 32 32">
                <path d="M4 28V20h5v8m4 0V14h5v14m4 0V7h5v21M4 14 13 7l6 3L28 2m-7 0h7v7"/>
            </symbol>
            <symbol id="atnic-target" viewBox="0 0 32 32">
                <circle cx="16" cy="16" r="11"/><circle cx="16" cy="16" r="6"/><circle cx="16" cy="16" r="1.5"/><path d="M16 1v4m0 22v4M1 16h4m22 0h4"/>
            </symbol>
            <symbol id="atnic-users" viewBox="0 0 32 32">
                <circle cx="12" cy="10" r="5"/><path d="M3 28v-5a9 9 0 0 1 18 0v5M22 6a5 5 0 0 1 0 10m2 3a7 7 0 0 1 5 7v2M8 28v-6m9 6v-6"/>
            </symbol>
            <symbol id="atnic-trend" viewBox="0 0 32 32">
                <path d="m3 25 8-10 6 5L29 5m-8 0h8v8"/><circle cx="4" cy="26" r="2"/><circle cx="11" cy="15" r="2"/><circle cx="17" cy="20" r="2"/>
            </symbol>
            <symbol id="atnic-network" viewBox="0 0 32 32">
                <circle cx="7" cy="6" r="3"/><circle cx="7" cy="26" r="3"/><circle cx="25" cy="16" r="3"/><circle cx="12" cy="16" r="3"/><path d="m8 9 3 4m-3 10 3-4m4-3h7"/>
            </symbol>
            <symbol id="atnic-rocket" viewBox="0 0 32 32">
                <path d="M11 21C13 10 21 4 29 3c-1 8-7 16-18 18Zm0-9-7 2-2 7 8-1m11 1-2 8-7 2 2-9M8 24l-5 5m4-8-5 4m9 2-4 4"/><circle cx="22" cy="10" r="3"/>
            </symbol>
            <symbol id="atnic-layers" viewBox="0 0 32 32">
                <path d="m2 9 14-7 14 7-14 7L2 9Zm0 7 14 7 14-7M2 23l14 7 14-7"/>
            </symbol>
            <symbol id="atnic-globe" viewBox="0 0 32 32">
                <circle cx="16" cy="16" r="13"/><ellipse cx="16" cy="16" rx="6" ry="13"/><path d="M3 16h26M5 8c6 4 16 4 22 0M5 24c6-4 16-4 22 0"/>
            </symbol>
        </defs>
    </svg>

    <section class="atnic-hero" aria-labelledby="atnic-title">
        <div class="atnic-hero-art">
            <img src="{{ asset('images/atnic-reference/engine-hero.png') }}" alt="AETNIC inference sphere inside a luminous reactor surrounded by holographic data panels" width="1536" height="1024" fetchpriority="high">
            <span class="atnic-hero-label atnic-label-data">Multi-modal<br>data</span>
            <span class="atnic-hero-label atnic-label-models">Reasoning<br>models</span>
            <span class="atnic-hero-label atnic-label-context">Context<br>understanding</span>
            <span class="atnic-hero-label atnic-label-action">Action<br>automation</span>
        </div>
        <div class="atnic-wrap atnic-hero-inner">
            <div class="atnic-hero-copy">
                <p class="atnic-eyebrow">AETNIC <span>Inference Engine</span></p>
                <h1 id="atnic-title">From data to<br>reasoning,<br>inference, and <span>action.</span></h1>
                <p class="atnic-hero-description">AETNIC is an intelligence layer designed to convert<br class="atnic-desktop-break"> complex data into context-aware reasoning,<br class="atnic-desktop-break"> decision intelligence, and automation.</p>
                <div class="atnic-actions">
                    <a class="atnic-button atnic-button-white" href="{{ route('contact') }}">Request Investor Deck <span aria-hidden="true">→</span></a>
                    <a class="atnic-button atnic-button-outline" href="{{ route('contact') }}">Book a Demo</a>
                </div>
                <ul class="atnic-highlights" aria-label="AETNIC capabilities">
                    <li>Real-time<br>multi-modal</li>
                    <li>Context-aware<br>reasoning</li>
                    <li>Enterprise<br>ready</li>
                    <li>Built for<br>real-world impact</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="atnic-section atnic-how" aria-labelledby="atnic-how-title">
        <div class="atnic-wrap">
            <div class="atnic-section-heading">
                <h2 id="atnic-how-title">How AETNIC Works</h2><span></span>
                <p>From diverse data to real-world impact</p>
            </div>
            <ol class="atnic-workflow">
                @foreach ([
                    ['Data Input', 'Ingests structured, unstructured, and real-time data from multiple sources.'],
                    ['Context Modeling', 'Builds domain context, understands intent, and models relationships across data.'],
                    ['Reasoning', 'Applies advanced reasoning models to evaluate, simulate, and derive insights.'],
                    ['Inference', 'Generates reliable inferences, predictions, and actionable recommendations.'],
                    ['Action Layer', 'Connects to systems, agents, and workflows to drive automation and real-world impact.'],
                ] as $step)
                    <li class="atnic-step">
                        <span class="atnic-step-number">0{{ $loop->iteration }}</span>
                        <h3>{{ $step[0] }}</h3>
                        <span class="atnic-pipeline-art atnic-pipeline-art-{{ $loop->index }}" aria-hidden="true"></span>
                        <p>{{ $step[1] }}</p>
                        @if (! $loop->last)
                            <span class="atnic-step-arrow" aria-hidden="true">⟶</span>
                        @endif
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <section class="atnic-section atnic-power" aria-labelledby="atnic-power-title">
        <div class="atnic-wrap">
            <div class="atnic-section-heading">
                <h2 id="atnic-power-title">What Makes It Powerful</h2><span></span>
                <p>Intelligence beyond today</p>
            </div>
            <div class="atnic-power-grid">
                @foreach ([
                    ['Multi-Modal Intelligence', 'Understands and connects text, data, images, video, and real-world signals.'],
                    ['Decision Support', 'Delivers trusted, explainable insights for complex business decisions.'],
                    ['Automation Ready', 'Designed to power autonomous workflows, agents, and enterprise systems.'],
                    ['Enterprise Integration', 'Built for secure, scalable deployment across existing infrastructure.'],
                ] as $feature)
                    <article class="atnic-feature">
                        <span class="atnic-feature-art atnic-feature-art-{{ $loop->index }}" aria-hidden="true"></span>
                        <h3>{{ $feature[0] }}</h3>
                        <p>{{ $feature[1] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="atnic-section atnic-use-cases" aria-labelledby="atnic-use-cases-title">
        <div class="atnic-wrap">
            <div class="atnic-section-heading">
                <h2 id="atnic-use-cases-title">Use Cases</h2><span></span>
                <p>Real problems. Real intelligence. Real impact.</p>
            </div>
            <div class="atnic-case-grid">
                @foreach ([
                    ['Operational Intelligence', 'Real-time insight across complex operations.', 'case-operations.png', 'Illuminated futuristic city and connected waterfront', 'chart'],
                    ['Decision Systems', 'Augment human decision-making with trusted AI reasoning.', 'case-decisions.png', 'Analyst working with holographic decision dashboards', 'target'],
                    ['Intelligent Agents', 'Domain-specific agents that reason, plan, and execute.', 'case-agents.png', 'AI humanoid with a luminous neural network', 'users'],
                    ['Predictive Insight', 'Anticipate change and uncover opportunities earlier.', 'case-predictive.png', 'Connected Earth seen from orbit', 'trend'],
                    ['Workflow Automation', 'Turn intelligence into action across business processes.', 'case-automation.png', 'Robotic arms operating in an automated factory', 'network'],
                ] as $useCase)
                    <article class="atnic-case">
                        <img src="{{ asset('images/atnic-reference/'.$useCase[2]) }}" alt="{{ $useCase[3] }}" width="1448" height="1086" loading="lazy" decoding="async">
                        <div class="atnic-case-copy">
                            <svg class="atnic-line-icon" aria-hidden="true"><use href="#atnic-{{ $useCase[4] }}"></use></svg>
                            <h3>{{ $useCase[0] }}</h3>
                            <p>{{ $useCase[1] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="atnic-section atnic-why" aria-labelledby="atnic-why-title">
        <div class="atnic-wrap">
            <div class="atnic-section-heading">
                <h2 id="atnic-why-title">Why AETNIC Matters</h2><span></span>
                <p>A foundational layer for a brighter tomorrow</p>
            </div>
            <div class="atnic-why-grid">
                @foreach ([
                    ['Massive Platform Potential', 'A core intelligence layer across multiple markets and industries.', 'rocket'],
                    ['Reusable Intelligence Infrastructure', 'Built once. Applied everywhere. Compounding value over time.', 'layers'],
                    ['Scalable and Defensible', 'Designed for global scale with increasing value as data and usage grow.', 'chart'],
                    ['Cross-Industry Impact', 'From enterprise to government to vertical AI solutions — AETNIC enables a smarter world.', 'globe'],
                ] as $reason)
                    <article class="atnic-reason">
                        <svg class="atnic-line-icon" aria-hidden="true"><use href="#atnic-{{ $reason[2] }}"></use></svg>
                        <div><h3>{{ $reason[0] }}</h3><p>{{ $reason[1] }}</p></div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="atnic-cta" aria-labelledby="atnic-cta-title">
        <img class="atnic-cta-image" src="{{ asset('images/atnic-reference/earth-cta-v2.png') }}" alt="Golden sunrise over a connected Earth" width="2048" height="683" loading="lazy" decoding="async">
        <div class="atnic-wrap atnic-cta-inner">
            <div>
                <h2 id="atnic-cta-title">Intelligence is<br>becoming <span>infrastructure.</span></h2>
                <p>Partner with ATS to bring AETNIC to global markets<br class="atnic-desktop-break"> and shape a smarter tomorrow.</p>
            </div>
            <div class="atnic-cta-aside">
                <a class="atnic-button atnic-button-gold" href="{{ route('contact') }}">Partner on AETNIC <span aria-hidden="true">→</span></a>
                <p>Invest · Deploy · Scale · Together</p>
            </div>
        </div>
    </section>
</div>
@endsection
