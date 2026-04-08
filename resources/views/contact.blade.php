@extends('layouts.app')

@section('content')

<style>
.bbs-contact {
    --cream:     #fdf9f5;
    --nude:      #f2e9e1;
    --blush:     #ede0d6;
    --gold:      #b8986a;
    --gold-pale: #d9c4a4;
    --charcoal:  #28221e;
    --stone:     #8c7d74;
    --pebble:    #bfb0a6;
    --border:    #e8ddd5;
    --serif:     'Cormorant Garamond', Georgia, serif;
    --sans:      'Jost', system-ui, sans-serif;
    background:  var(--cream);
    color:       var(--charcoal);
    font-family: var(--sans);
    -webkit-font-smoothing: antialiased;
}

.bbs-contact *, .bbs-contact *::before, .bbs-contact *::after {
    box-sizing: border-box;
}

.bbs-eye {
    font-family: var(--sans);
    font-size: 0.6rem;
    font-weight: 400;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    color: var(--gold);
    display: block;
}

.bbs-display {
    font-family: var(--serif);
    font-weight: 300;
    line-height: 1.08;
    color: var(--charcoal);
}

.bbs-body {
    font-family: var(--sans);
    font-weight: 300;
    font-size: 0.9rem;
    line-height: 1.9;
    color: var(--stone);
}

.bbs-field {
    width: 100%;
    background: transparent;
    border: none;
    border-bottom: 1px solid var(--border);
    padding: 0.9rem 0;
    font-family: var(--sans);
    font-size: 0.875rem;
    font-weight: 300;
    color: var(--charcoal);
    outline: none;
    border-radius: 0;
    transition: border-color 0.35s ease;
    appearance: none;
    -webkit-appearance: none;
}
.bbs-field::placeholder { color: var(--pebble); }
.bbs-field:focus { border-bottom-color: var(--gold); }

.bbs-label {
    display: block;
    font-size: 0.58rem;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    color: var(--pebble);
    margin-bottom: 0.1rem;
    font-weight: 400;
}

.bbs-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.875rem;
    width: 100%;
    padding: 1.1rem 2rem;
    background: var(--charcoal);
    color: #f5ede5;
    font-family: var(--sans);
    font-size: 0.68rem;
    font-weight: 400;
    letter-spacing: 0.28em;
    text-transform: uppercase;
    border: none;
    cursor: pointer;
    transition: background 0.35s ease, color 0.35s ease, letter-spacing 0.35s ease;
    text-decoration: none;
}
.bbs-btn:hover { background: var(--gold); color: var(--charcoal); letter-spacing: 0.34em; }
.bbs-btn svg { flex-shrink: 0; transition: transform 0.35s ease; }
.bbs-btn:hover svg { transform: translateX(4px); }

.bbs-pill {
    display: inline-block;
    padding: 0.55rem 1.35rem;
    border: 1px solid var(--border);
    font-family: var(--sans);
    font-size: 0.65rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--stone);
    text-decoration: none;
    transition: border-color 0.3s, color 0.3s;
}
.bbs-pill:hover { border-color: var(--gold); color: var(--gold); }

.bbs-hour {
    display: flex;
    justify-content: space-between;
    align-items: baseline;
    padding: 0.85rem 0;
    border-bottom: 1px solid var(--border);
    font-family: var(--sans);
    font-size: 0.85rem;
    font-weight: 300;
}
.bbs-hour:last-child { border-bottom: none; }
.bbs-hour .day { color: var(--charcoal); font-weight: 400; }
.bbs-hour .time { color: var(--stone); }
.bbs-hour .closed { color: var(--pebble); font-style: italic; }

.bbs-rule { width: 40px; height: 1px; background: var(--gold-pale); border: none; margin: 0; }

.bbs-info-row { padding: 1.35rem 0; border-bottom: 1px solid var(--border); }
.bbs-info-row:first-child { padding-top: 0; }
.bbs-info-row .info-meta {
    font-size: 0.58rem;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    color: var(--pebble);
    display: block;
    margin-bottom: 0.4rem;
    font-weight: 400;
}
.bbs-info-row .info-val {
    font-size: 0.9rem;
    font-weight: 300;
    color: var(--charcoal);
    line-height: 1.65;
}

.bbs-vline {
    width: 1px;
    background: var(--border);
    align-self: stretch;
    flex-shrink: 0;
    display: none;
}

.bbs-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 4rem;
}

.bbs-form-row {
    display: grid;
    grid-template-columns: 1fr;
    gap: 0;
}

@media (min-width: 640px) {
    .bbs-form-row { grid-template-columns: 1fr 1fr; gap: 3rem; }
}

@media (min-width: 1024px) {
    .bbs-grid { grid-template-columns: 1fr 40px 1.5fr; gap: 0; }
    .bbs-vline { display: block; }
    .left-pad { padding-right: 4rem; }
    .right-pad { padding-left: 4rem; }
}
</style>

<section class="bbs-contact" style="padding: 7rem 1.5rem 9rem;">
    <div style="max-width: 1160px; margin: 0 auto;">

        <header style="margin-bottom: 7rem; max-width: 640px;">
            <span class="bbs-eye" style="margin-bottom: 1.75rem;">Beatrice Beauty Studio &nbsp;·&nbsp; East Legon, Accra</span>
            <h1 class="bbs-display" style="font-size: clamp(3.25rem, 6vw, 5rem); margin-bottom: 1.75rem;">
                Come Say Hello.<br>
                <em style="color: var(--gold);">We'd Love to Meet You.</em>
            </h1>
            <hr class="bbs-rule" style="margin-bottom: 1.75rem;"/>
            <p class="bbs-body" style="max-width: 480px;">
                Whether you're planning your first visit or returning for your next appointment —
                our studio in East Legon is ready to welcome you. Reach out and we'll be in touch.
            </p>
        </header>

        <div class="bbs-grid">

            <div class="left-pad">
                <div style="margin-bottom: 3.5rem;">
                    <span class="bbs-eye" style="margin-bottom: 2rem;">Studio Details</span>
                    <div class="bbs-info-row">
                        <span class="info-meta">Address</span>
                        <p class="info-val">24 Garden Road<br>East Legon, Accra, Ghana</p>
                    </div>
                    <div class="bbs-info-row">
                        <span class="info-meta">Phone</span>
                        <p class="info-val">+233 24 000 1234</p>
                    </div>
                    <div class="bbs-info-row" style="border-bottom: none;">
                        <span class="info-meta">Email</span>
                        <p class="info-val">hello@beatricebeauty.gh</p>
                    </div>
                </div>

                <div style="margin-bottom: 3.5rem;">
                    <span class="bbs-eye" style="margin-bottom: 2rem;">Opening Hours</span>
                    <div class="bbs-hour">
                        <span class="day">Monday – Friday</span>
                        <span class="time">9:00 AM – 7:00 PM</span>
                    </div>
                    <div class="bbs-hour">
                        <span class="day">Saturday</span>
                        <span class="time">8:00 AM – 6:00 PM</span>
                    </div>
                    <div class="bbs-hour">
                        <span class="day">Sunday</span>
                        <span class="closed">Closed</span>
                    </div>
                </div>

                <div>
                    <span class="bbs-eye" style="margin-bottom: 1.75rem;">Follow Along</span>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.625rem;">
                        <a href="#" class="bbs-pill">Instagram</a>
                        <a href="#" class="bbs-pill">TikTok</a>
                        <a href="#" class="bbs-pill">WhatsApp</a>
                    </div>
                </div>
            </div>

            <div class="bbs-vline"></div>

            <div class="right-pad">
                <header style="margin-bottom: 3.5rem;">
                    <span class="bbs-eye" style="margin-bottom: 1.75rem;">Send a Message</span>
                    <h2 class="bbs-display" style="font-size: clamp(2.25rem, 4vw, 3.5rem); margin-bottom: 1.25rem;">
                        We'll Get Back<br>
                        to You, Promptly.
                    </h2>
                    <p class="bbs-body">
                        Share your details below and a member of our team
                        will reach out within 24 hours.
                    </p>
                </header>
                    @if (session('success'))
                    <div class="mb-6 rounded-2xl px-4 py-3 text-sm"
                        style="background: rgba(212,176,122,0.10); border: 1px solid rgba(212,176,122,0.18); color: #9c7a4d;">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-6 rounded-2xl px-4 py-3 text-sm"
                        style="background: rgba(180,80,80,0.08); border: 1px solid rgba(180,80,80,0.15); color: #9b5c5c;">
                        Please fill in all required fields.
                    </div>
                @endif
                <form action="{{ route('contact.store') }}" method="POST">
                     @csrf
                    <div class="bbs-form-row" style="margin-bottom: 0.25rem;">
                        <div>
                            <label class="bbs-label" for="name">Full Name</label>
                            <input class="bbs-field" type="text" id="name" name="full_name" value="{{ old('full_name') }}" placeholder="Your full name"/>
                        </div>
                        <div>
                            <label class="bbs-label" for="phone">Phone Number</label>
                            <input class="bbs-field" type="tel" id="phone" name="phone"  value="{{ old('phone') }}" placeholder="+233 24 000 1234"/>
                        </div>
                    </div>

                    <div style="margin-top: 0.5rem;">
                        <label class="bbs-label" for="email">Email Address</label>
                        <input class="bbs-field" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="you@example.com"/>
                    </div>

                    <div style="margin-top: 0.5rem;">
                        <label class="bbs-label" for="subject">Subject</label>
                        <input class="bbs-field" type="text" id="subject" name="subject" value="{{ old('subject') }}" placeholder="How can we help?"/>
                    </div>

                    <div style="margin-top: 0.5rem;">
                        <label class="bbs-label" for="message">Message</label>
                        <textarea class="bbs-field" id="message" name="message" rows="5" placeholder="Tell us a little about what you have in mind…" style="resize: none; line-height: 1.8;">{{ old('message') }}</textarea>
                    </div> 

                    <div style="margin-top: 3rem;">
                        <button type="submit" class="bbs-btn">
                            Send Message
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true">
                                <path d="M1.75 7h10.5M8.75 3.5 12.25 7l-3.5 3.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </form>

                <div style="margin-top: 2.75rem; padding-top: 2rem; border-top: 1px solid var(--border);">
                    <p class="bbs-body" style="font-size: 0.82rem;">
                        Ready to reserve your seat?
                        <a href="{{ url('/booking') }}" style="color: var(--gold); font-weight: 400; text-decoration: none; letter-spacing: 0.02em; padding-left: 0.25rem;">
                            Book an appointment &rarr;
                        </a>
                    </p>
                </div>
            </div>
        </div>

    
    </div>
</section>

@endsection