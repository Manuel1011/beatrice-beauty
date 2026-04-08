<style>
.bbs-footer {
    --charcoal:  #1e1916;
    --warm-dark: #251f1b;
    --gold:      #b8986a;
    --gold-dim:  #8a7050;
    --text-muted:#7a6d65;
    --text-soft: #c4b5ab;
    --border:    #2e2723;
    --serif:     'Cormorant Garamond', Georgia, serif;
    --sans:      'Jost', system-ui, sans-serif;
}

.bbs-footer a { text-decoration: none; transition: color 0.3s ease; }

.bbs-nav-link {
    font-family: var(--sans);
    font-size: 0.7rem;
    font-weight: 400;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--text-muted);
    transition: color 0.3s ease;
}
.bbs-nav-link:hover { color: var(--gold); }

.bbs-contact-link {
    font-family: var(--sans);
    font-size: 0.8rem;
    font-weight: 300;
    color: var(--text-muted);
    transition: color 0.3s ease;
}
.bbs-contact-link:hover { color: var(--text-soft); }

.footer-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 3.5rem;
    padding-bottom: 3.5rem;
    border-bottom: 1px solid var(--border);
}

.footer-right { display: flex; flex-direction: column; gap: 1rem; }
.footer-center { display: flex; flex-direction: column; gap: 1.75rem; }
.footer-bottom {
    padding-top: 2rem;
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    align-items: center;
    text-align: center;
}

@media (min-width: 768px) {
    .footer-grid { grid-template-columns: 1fr 1fr 1fr; align-items: start; }
    .footer-center { align-items: center; }
    .footer-right { align-items: flex-end; }
    .footer-bottom { flex-direction: row; justify-content: space-between; text-align: left; }
}
</style>
<!-- Footer -->
<footer class="bbs-footer" style="background: var(--charcoal); padding: 6rem 1.5rem 3rem;">
    <div style="max-width: 1160px; margin: 0 auto;">

        <!-- Main row -->
        <div class="footer-grid">

            <!-- LEFT: Brand -->
            <div>
                <a href="/" style="display: inline-flex; align-items: center; gap: 0.75rem; margin-bottom: 0.875rem; text-decoration: none;">
                    <div style="width: 32px; height: 32px; border-radius: 50%; background: linear-gradient(135deg, #e8bfb5, #c9a96e); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <svg width="13" height="13" viewBox="0 0 14 14" fill="none" aria-hidden="true">
                            <path d="M7 1C7 1 3 4 3 8C3 10.2091 4.79086 12 7 12C9.20914 12 11 10.2091 11 8C11 4 7 1 7 1Z" fill="white"/>
                        </svg>
                    </div>
                    <span style="font-family: var(--serif); font-weight: 400; font-size: 1.2rem; letter-spacing: 0.04em; color: #f0e5de;">
                        Beatrice Beauty Studio
                    </span>
                </a>

                <!-- softer tracking -->
                <p style="font-family: var(--sans); font-size: 0.68rem; letter-spacing: 0.18em; text-transform: uppercase; color: var(--gold); font-weight: 400; margin-top: 0.75rem;">
                    Luxury Hair Care · Accra
                </p>
            </div>

            <!-- CENTER: Nav -->
            <nav class="footer-center" aria-label="Footer navigation" style="gap: 1.75rem;">
                <a href="/"           class="bbs-nav-link">Home</a>
                <a href="/#services"  class="bbs-nav-link">Services</a>
                <a href="/#about"     class="bbs-nav-link">About</a>
                <a href="/contact"    class="bbs-nav-link">Contact</a>
                <a href="/booking"    class="bbs-nav-link" style="color: var(--gold);">Book</a>
            </nav>

            <!-- RIGHT: Contact + Social -->
            <div class="footer-right">
                <a href="tel:+233240001234"          class="bbs-contact-link">+233 24 000 1234</a>
                <a href="mailto:hello@beatricebeauty.gh" class="bbs-contact-link">hello@beatricebeauty.gh</a>

                <!-- cleaner icons (no boxes) -->
                <div style="display: flex; align-items: center; gap: 1rem; margin-top: 1rem;">

                    <!-- Instagram -->
                    <a href="#" aria-label="Instagram" style="color: var(--text-muted); transition: color 0.3s;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4">
                            <rect x="2" y="2" width="20" height="20" rx="5"/>
                            <circle cx="12" cy="12" r="4"/>
                            <circle cx="17.5" cy="6.5" r="0.5" fill="currentColor" stroke="none"/>
                        </svg>
                    </a>

                    <!-- TikTok -->
                    <a href="#" aria-label="TikTok" style="color: var(--text-muted); transition: color 0.3s;">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14 3v10.5a3.5 3.5 0 1 1-3-3.465V7.5a6.5 6.5 0 1 0 5 6.315V8.5c1.1.9 2.5 1.5 4 1.5V6a4.5 4.5 0 0 1-4-3z"/>
                        </svg>
                    </a>

                    <!-- WhatsApp -->
                    <a href="#" aria-label="WhatsApp" style="color: var(--text-muted); transition: color 0.3s;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                        </svg>
                    </a>

                </div>
            </div>

        </div>

        <!-- Bottom bar -->
        <div class="footer-bottom">
            <p style="font-family: var(--sans); font-size: 0.68rem; font-weight: 300; letter-spacing: 0.08em; color: var(--text-muted);">
                &copy; 2025 Beatrice Beauty Studio. All rights reserved.
            </p>
            <p style="font-family: var(--serif); font-style: italic; font-size: 0.85rem; font-weight: 300; color: var(--text-muted);">
                Crafted with care in Accra
            </p>
        </div>

    </div>
</footer>