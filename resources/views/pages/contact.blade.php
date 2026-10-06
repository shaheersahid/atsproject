@extends('layouts.app')

@section('title', 'Contact ATS | Artificial Technology Solutions')
@section('meta_description', 'Start a conversation with ATS for investment, partnerships, ventures, Deal4Less, Fitnass or ATNIC.')

@section('content')
<section class="page-hero">
    <div class="container-ats page-hero-grid">
        <div data-reveal>
            <p class="hero-kicker">Contact ATS</p>
            <h1 class="page-title">Build something<br><span class="glow">that matters.</span></h1>
            <p class="hero-copy">Whether you are an investor, founder, merchant, enterprise partner or technology collaborator, start the conversation with Artificial Technology Solutions.</p>
        </div>
        <div class="page-hero-media" data-reveal>
            <img src="{{ asset('images/contact-hero.jpg') }}" alt="ATS contact and partnership visual">
        </div>
    </div>
</section>

<section class="section">
    <div class="container-ats">
        <div class="row g-3">
            <div class="col-lg-5" data-reveal>
                <article class="info-card h-100">
                    <p class="eyebrow">Start a Conversation</p>
                    <h3>Choose the conversation that fits you.</h3>
                    <div class="feature-list">
                        <div class="feature-item">
                            <strong>Investment</strong>
                            <span>Discuss ATS, portfolio companies or ATNIC.</span>
                        </div>
                        <div class="feature-item">
                            <strong>Partnerships</strong>
                            <span>Explore strategic, enterprise or commercial opportunities.</span>
                        </div>
                        <div class="feature-item">
                            <strong>Ventures</strong>
                            <span>Bring an idea, startup opportunity or venture proposal.</span>
                        </div>
                        <div class="feature-item">
                            <strong>Products</strong>
                            <span>Connect regarding Deal4Less or Fitnass.</span>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-7" data-reveal>
                <article class="info-card">
                    <p class="eyebrow">Send a Message</p>
                    <form class="contact-form" id="contactForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label>First name
                                    <input type="text" name="first_name" required placeholder="Your first name">
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>Last name
                                    <input type="text" name="last_name" required placeholder="Your last name">
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>Email
                                    <input type="email" name="email" required placeholder="name@company.com">
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>Company
                                    <input type="text" name="company" placeholder="Company name">
                                </label>
                            </div>
                            <div class="col-12">
                                <label>I’m interested in
                                    <select name="interest">
                                        <option>Investment</option>
                                        <option>ATNIC</option>
                                        <option>Deal4Less</option>
                                        <option>Fitnass</option>
                                        <option>ATS Ventures</option>
                                        <option>Strategic Partnership</option>
                                        <option>Other</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-12">
                                <label>Message
                                    <textarea name="message" required placeholder="Tell us how you would like to work with ATS..."></textarea>
                                </label>
                            </div>
                            <div class="col-12">
                                <button class="btn-solid-pill" type="submit">Send Message →</button>
                            </div>
                        </div>
                    </form>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.getElementById('contactForm')?.addEventListener('submit', (event) => {
    event.preventDefault();
    alert('Thank you. Your message is ready to connect to production email or CRM.');
});
</script>
@endpush
