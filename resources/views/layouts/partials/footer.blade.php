<footer class="site-footer">
    <div class="container-ats">
        <div class="footer-top">
            <a class="brand" href="{{ route('home') }}">
                <span class="brand-mark">ATS</span>
                <span class="brand-text">Artificial<br>Technology<br>Solutions</span>
            </a>

            <ul class="footer-links">
                <li><a href="{{ route('deal4less') }}">Deal4Less</a></li>
                <li><a href="{{ route('fitnass') }}">Fitnass</a></li>
                <li><a href="{{ route('atnic') }}">ATNIC</a></li>
                <li><a href="{{ route('ventures') }}">Ventures</a></li>
                <li><a href="{{ route('about') }}">Company</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>

            <div class="socials">
                <a href="#" aria-label="LinkedIn">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M6.5 8.5H3V21h3.5V8.5ZM4.75 3a2 2 0 1 0 0 4 2 2 0 0 0 0-4ZM21 21h-3.5v-6.3c0-1.5-.5-2.5-1.9-2.5-1 0-1.6.7-1.9 1.4-.1.2-.1.5-.1.8V21H10V8.5h3.4v1.7c.5-.8 1.4-1.9 3.4-1.9 2.5 0 4.2 1.6 4.2 5.1V21Z"/></svg>
                </a>
                <a href="#" aria-label="X">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18.2 3H21l-6.6 7.5L22 21h-6.2l-4.4-5.5L6 21H3.2l7-8L2 3h6.3l4 5.1L18.2 3Zm-1.1 16.2h1.7L7 4.7H5.2l11.9 14.5Z"/></svg>
                </a>
                <a href="#" aria-label="YouTube">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M23 12.2s0-3.2-.4-4.7a3 3 0 0 0-2.1-2.1C18.9 5 12 5 12 5s-6.9 0-8.5.4A3 3 0 0 0 1.4 7.5C1 9 1 12.2 1 12.2s0 3.2.4 4.7a3 3 0 0 0 2.1 2.1C5.1 19.4 12 19.4 12 19.4s6.9 0 8.5-.4a3 3 0 0 0 2.1-2.1c.4-1.5.4-4.7.4-4.7ZM9.8 15.5v-6.6l6.3 3.3-6.3 3.3Z"/></svg>
                </a>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="mb-0">© {{ date('Y') }} Artificial Technology Solutions. All rights reserved.</p>
            <div class="footer-legal">
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Investors</a>
            </div>
        </div>
    </div>
</footer>
