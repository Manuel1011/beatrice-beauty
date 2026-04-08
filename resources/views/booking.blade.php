@extends('layouts.app')

@section('content')

<style>
.bbs-booking {
    --cream:      #fdf9f5;
    --nude:       #f2e9e1;
    --blush:      #ede0d6;
    --gold:       #b8986a;
    --gold-pale:  #d9c4a4;
    --gold-dim:   #8a7050;
    --charcoal:   #28221e;
    --stone:      #8c7d74;
    --pebble:     #bfb0a6;
    --border:     #e8ddd5;
    --serif:      'Cormorant Garamond', Georgia, serif;
    --sans:       'Jost', system-ui, sans-serif;
}

.bbs-booking *, .bbs-booking *::before, .bbs-booking *::after {
    box-sizing: border-box;
}

.bbs-eye {
    display: block;
    font-family: var(--sans);
    font-size: 0.6rem;
    font-weight: 400;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    color: var(--gold);
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
    line-height: 1.95;
    color: var(--stone);
}

.bbs-rule {
    width: 48px;
    height: 1px;
    background: var(--gold-pale);
    border: none;
    margin: 0;
}

.bbs-label {
    display: block;
    font-family: var(--sans);
    font-size: 0.57rem;
    letter-spacing: 0.26em;
    text-transform: uppercase;
    color: var(--pebble);
    margin-bottom: 0.1rem;
    font-weight: 400;
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
    appearance: none;
    -webkit-appearance: none;
    transition: border-color 0.35s ease;
}
.bbs-field::placeholder { color: var(--pebble); }
.bbs-field:focus { border-bottom-color: var(--gold); }

.bbs-select-wrap { position: relative; }
.bbs-select-wrap::after {
    content: '';
    position: absolute;
    right: 0.25rem;
    top: 48%;
    width: 6px;
    height: 6px;
    border-right: 1px solid var(--pebble);
    border-bottom: 1px solid var(--pebble);
    transform: translateY(-65%) rotate(45deg);
    pointer-events: none;
}
select.bbs-field { cursor: pointer; padding-right: 1.5rem; }

.bbs-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.875rem;
    width: 100%;
    padding: 1.125rem 2rem;
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
}
.bbs-btn:hover { background: var(--gold); color: var(--charcoal); letter-spacing: 0.34em; }
.bbs-btn svg { flex-shrink: 0; transition: transform 0.35s ease; }
.bbs-btn:hover svg { transform: translateX(4px); }

.bbs-expect-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1.1rem 0;
    border-bottom: 1px solid var(--border);
}
.bbs-expect-item:first-child { padding-top: 0; }
.bbs-expect-item:last-child  { border-bottom: none; }

.bbs-expect-num {
    font-family: var(--serif);
    font-size: 0.95rem;
    font-weight: 300;
    font-style: italic;
    color: var(--gold);
    flex-shrink: 0;
    line-height: 1.7;
    min-width: 1.25rem;
}

.bbs-expect-text .title {
    display: block;
    font-family: var(--sans);
    font-size: 0.8rem;
    font-weight: 400;
    color: var(--charcoal);
    margin-bottom: 0.2rem;
    letter-spacing: 0.02em;
}
.bbs-expect-text .desc {
    font-family: var(--sans);
    font-size: 0.78rem;
    font-weight: 300;
    color: var(--stone);
    line-height: 1.7;
}

.bbs-help-link {
    font-family: var(--sans);
    font-size: 0.8rem;
    font-weight: 300;
    color: var(--stone);
    text-decoration: none;
    transition: color 0.3s;
    display: block;
}
.bbs-help-link:hover { color: var(--charcoal); }

.bbs-note {
    display: flex;
    align-items: center;
    gap: 0.65rem;
    font-family: var(--sans);
    font-size: 0.72rem;
    font-weight: 300;
    color: var(--pebble);
    letter-spacing: 0.03em;
    line-height: 1.6;
}
.bbs-note svg { flex-shrink: 0; color: var(--gold-pale); }

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
    .bbs-grid { grid-template-columns: 1fr 48px 1.55fr; gap: 0; }
    .bbs-vline { display: block; }
    .left-col  { padding-right: 4rem; }
    .right-col { padding-left:  4rem; }
}
</style>

<section class="bbs-booking" style="padding: 7rem 1.5rem 9rem; background: var(--cream);">
    <div style="max-width: 1160px; margin: 0 auto;">

                @if (session('success'))
                <div style="margin-bottom: 2rem; padding: 1rem 1.25rem; border: 1px solid #e8ddd5; background: #f8f3ee; color: #28221e; font-family: 'Jost', sans-serif; font-size: 0.82rem; line-height: 1.7;">
                    {{ session('success') }}
                </div>
            @endif
           @if ($errors->any())
            <div style="margin-bottom: 2rem; padding: 1rem; background: #fff4f4; border: 1px solid #e8ddd5;">
                <div style="font-size: 0.9rem;">
                    Please fill in all required fields.
                </div>
            </div>
        @endif
        <header style="margin-bottom: 7rem; max-width: 680px;">
            <span class="bbs-eye" style="margin-bottom: 1.75rem;">
                Beatrice Beauty Studio &nbsp;·&nbsp; East Legon, Accra
            </span>
            <h1 class="bbs-display" style="font-size: clamp(3.25rem, 6vw, 5rem); margin-bottom: 1.5rem;">
                Book Your<br>
                <em style="color: var(--gold);">Appointment.</em>
            </h1>
            <p class="bbs-body" style="max-width: 460px; margin-bottom: 2rem;">
                Reserve your time with our studio and let us take care of the rest.
            </p>
            <hr class="bbs-rule"/>
        </header>

        <div class="bbs-grid">

            <div class="left-col">

                <div style="margin-bottom: 3.5rem;">
                    <span class="bbs-eye" style="margin-bottom: 1.5rem;">The Experience</span>
                    <p class="bbs-body">
                        Every appointment at Beatrice Beauty Studio is tailored to you —
                        your hair, your lifestyle, and your vision. From the moment you arrive,
                        you'll feel the difference that intentional care makes.
                    </p>
                </div>

                <div style="margin-bottom: 3.5rem;">
                    <span class="bbs-eye" style="margin-bottom: 2rem;">What to Expect</span>

                    <div class="bbs-expect-item">
                        <span class="bbs-expect-num">01</span>
                        <div class="bbs-expect-text">
                            <span class="title">Personalised Consultation</span>
                            <span class="desc">We begin every session with a one-on-one consultation to understand your hair goals.</span>
                        </div>
                    </div>

                    <div class="bbs-expect-item">
                        <span class="bbs-expect-num">02</span>
                        <div class="bbs-expect-text">
                            <span class="title">Premium Products Only</span>
                            <span class="desc">We work exclusively with professional-grade products chosen for your hair type.</span>
                        </div>
                    </div>

                    <div class="bbs-expect-item">
                        <span class="bbs-expect-num">03</span>
                        <div class="bbs-expect-text">
                            <span class="title">A Calm Studio Environment</span>
                            <span class="desc">Our studio is designed to be a quiet retreat — no rush, no noise, just focused care.</span>
                        </div>
                    </div>
                </div>

                <div>
                    <span class="bbs-eye" style="margin-bottom: 1.5rem;">Need Help Booking?</span>
                    <div style="display: flex; flex-direction: column; gap: 0.625rem;">
                        <a href="tel:+233240001234" class="bbs-help-link">+233 24 000 1234</a>
                        <a href="mailto:hello@beatricebeauty.gh" class="bbs-help-link">hello@beatricebeauty.gh</a>
                    </div>
                </div>

            </div>

            <div class="bbs-vline"></div>

            <div class="right-col">

                <header style="margin-bottom: 3.5rem;">
                    <span class="bbs-eye" style="margin-bottom: 1.75rem;">Reserve Your Time</span>
                    <h2 class="bbs-display" style="font-size: clamp(2.25rem, 4vw, 3.25rem); margin-bottom: 1.25rem;">
                        Tell Us a Little<br>
                        <em style="color: var(--gold);">About Your Visit.</em>
                    </h2>
                    <p class="bbs-body">
                        Fill in the details below and we'll confirm your appointment within 24 hours.
                    </p>
                </header>

                <form action="{{ route('booking.store') }}" method="POST" novalidate>
                 @csrf

                    <div class="bbs-form-row">
                        <div>
                            <label class="bbs-label" for="full_name">Full Name</label>
                            <input class="bbs-field" type="text" id="full_name" name="full_name" placeholder="Your full name" value="{{ old('full_name') }}"/>
                        </div>
                        <div>
                            <label class="bbs-label" for="phone">Phone Number</label>
                            <input class="bbs-field" type="tel" id="phone" name="phone" placeholder="+233 24 000 0000" value="{{ old('phone') }}"/>
                        </div>
                    </div>

                    <div style="margin-top: 0.5rem;">
                        <label class="bbs-label" for="email">Email Address</label>
                        <input class="bbs-field" type="email" id="email" name="email" placeholder="you@example.com" value="{{ old('email') }}"/>
                    </div>

                    <div style="margin-top: 0.5rem;">
                        <label class="bbs-label" for="service">Service</label>
                        <div class="bbs-select-wrap">
                            <select class="bbs-field" id="service" name="service">
                                <option value="" disabled selected>Select a service…</option>
                                <option value="silk_press">Silk Press</option>
                                <option value="hair_treatment">Hair Treatment</option>
                                <option value="wig_install">Wig Install</option>
                                <option value="consultation">Consultation</option>
                            </select>
                        </div>
                    </div>

                    <div class="bbs-form-row" style="margin-top: 0.5rem;">
                        <div>
                            <label class="bbs-label" for="preferred_date">Preferred Date</label>
                            <input class="bbs-field" type="date" id="preferred_date" name="preferred_date"/>
                        </div>
                        <div>
                            <label class="bbs-label" for="preferred_time">Preferred Time</label>
                            <div class="bbs-select-wrap">
                                <select class="bbs-field" id="preferred_time" name="preferred_time">
                                    <option value="" disabled selected>Select a time…</option>
                                    <option>9:00 AM</option>
                                    <option>10:00 AM</option>
                                    <option>11:00 AM</option>
                                    <option>12:00 PM</option>
                                    <option>1:00 PM</option>
                                    <option>2:00 PM</option>
                                    <option>3:00 PM</option>
                                    <option>4:00 PM</option>
                                    <option>5:00 PM</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 0.5rem;">
                        <label class="bbs-label" for="message">
                            Message
                            <span style="letter-spacing: 0.08em; font-style: italic; text-transform: none; color: var(--blush);">&nbsp;Optional</span>
                        </label>
                        <textarea class="bbs-field" id="message" name="message">{{ old('message') }}</textarea>
                    </div>

                    <div style="margin-top: 3rem;">
                        <button type="submit" class="bbs-btn">
                            Confirm Booking
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true">
                                <path d="M1.75 7h10.5M8.75 3.5 12.25 7l-3.5 3.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>

                    <div style="margin-top: 1.5rem;">
                        <p class="bbs-note">
                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" aria-hidden="true">
                                <circle cx="6.5" cy="6.5" r="5.5" stroke="currentColor" stroke-width="1.1"/>
                                <path d="M6.5 5.5v4M6.5 4h.01" stroke="currentColor" stroke-width="1.1" stroke-linecap="round"/>
                            </svg>
                            Payment is made in person on the day of your appointment.
                        </p>
                    </div>

                </form>

            </div>
        </div>

    </div>
</section>

@endsection