@php
    $current = $current ?? '';
@endphp
<header class="site-header">
    <div class="container-ats">
        <nav class="navbar-ats" aria-label="Primary">
            <a class="brand" href="{{ route('home') }}">
                <span class="brand-mark">ATS</span>
                <span class="brand-text">Artificial<br>Technology<br>Solutions</span>
            </a>

            <ul class="nav-links">
                <li><a href="{{ route('deal4less') }}" class="{{ $current === 'deal4less' ? 'is-active' : '' }}">Deal4Less</a></li>
                <li><a href="{{ route('fitnass') }}" class="{{ $current === 'fitnass' ? 'is-active' : '' }}">Fitnass</a></li>
                <li><a href="{{ route('atnic') }}" class="{{ $current === 'atnic' ? 'is-active' : '' }}">ATNIC</a></li>
                <li><a href="{{ route('ventures') }}" class="{{ $current === 'ventures' ? 'is-active' : '' }}">Ventures</a></li>
                <li><a href="{{ route('about') }}" class="{{ $current === 'about' ? 'is-active' : '' }}">Company</a></li>
                <li><a href="{{ route('contact') }}" class="{{ $current === 'contact' ? 'is-active' : '' }}">Contact</a></li>
                <li class="d-lg-none">
                    <a class="btn-outline-pill nav-cta" href="{{ route('contact') }}">Invest • Build • Scale →</a>
                </li>
            </ul>

            <a class="btn-outline-pill nav-cta d-none d-lg-inline-flex" href="{{ route('contact') }}">Invest • Build • Scale →</a>

            <button class="nav-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 7h16M4 12h16M4 17h16"/>
                </svg>
            </button>
        </nav>
    </div>
</header>
