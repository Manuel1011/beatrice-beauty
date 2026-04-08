@extends('layouts.app')

@section('content')

    <style>
        :root {
            --bg: #f6efea;
            --card: #fcfbf9;
            --soft: #efe4dd;
            --gold: #d4b07a;
            --gold-dark: #bf9961;
            --charcoal: #2a211c;
            --muted: #8d7b70;
            --line: #e7ddd6;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: linear-gradient(180deg, #f7f1ec 0%, #f2eae4 100%);
            color: var(--charcoal);
        }

        .font-display {
            font-family: "Cormorant Garamond", serif;
        }

        .card-shadow {
            box-shadow: 0 20px 60px rgba(42, 33, 28, 0.08);
        }

        .btn-gold {
            background: var(--gold);
            color: #1f1712;
            transition: all 0.25s ease;
        }

        .btn-gold:hover {
            background: var(--gold-dark);
            transform: translateY(-1px);
        }

        .btn-outline {
            border: 1px solid var(--gold);
            color: var(--gold-dark);
            background: transparent;
            transition: all 0.25s ease;
        }

        .btn-outline:hover {
            background: rgba(212, 176, 122, 0.08);
        }
    </style>
</head>
<body class="min-h-screen antialiased">

    <div class="min-h-screen px-6 py-24 flex items-center justify-center">
    <div class="w-full max-w-lg text-center">

            {{-- Icon --}}
            <div class="flex justify-center mb-6">
                <div class="w-20 h-20 rounded-full flex items-center justify-center text-white text-3xl mx-auto"
                     style="background: linear-gradient(135deg, #d4b07a, #c19a63); box-shadow: 0 10px 30px rgba(212,176,122,0.25);">
                    ✓
                </div>
            </div>

            {{-- Label --}}
            <div class="flex justify-center mb-5">
                <span class="px-5 py-2 rounded-full text-xs tracking-[0.2em] uppercase font-medium"
                      style="background: #f4ede7; color: var(--gold-dark);">
                    Booking Confirmed
                </span>
            </div>

            {{-- Heading --}}
            <h1 class="font-display text-center text-4xl sm:text-5xl leading-none mb-4" style="color: var(--charcoal);">
                You’re all set!
            </h1>

            <p class="text-center text-lg leading-8 max-w-xl mx-auto mb-10" style="color: var(--muted);">
                Your appointment has been successfully booked. We look forward to seeing you at the studio.
            </p>
              {{-- Summary Card --}}
<div class="rounded-3xl p-5 sm:p-6 mb-10 text-left"
     style="background: rgba(212,176,122,0.08); border: 1px solid rgba(212,176,122,0.15);">

    <p class="text-[11px] font-medium uppercase tracking-[0.22em] mb-6"
       style="color: var(--gold-dark);">
        Appointment Summary
    </p>

    <div>

        {{-- Name --}}
        <div class="flex items-center justify-between py-3 border-b"
             style="border-color: rgba(42,33,28,0.06);">
            <span class="text-xs tracking-[0.14em] uppercase font-medium"
                  style="color: #9c8b80;">
                Name
            </span>
            <span class="text-xl font-semibold text-right"
                  style="font-family: 'Cormorant Garamond', serif;">
                {{ $booking->full_name }}
            </span>
        </div>

        {{-- Phone --}}
        <div class="flex items-center justify-between py-3 border-b"
             style="border-color: rgba(42,33,28,0.06);">
            <span class="text-xs tracking-[0.14em] uppercase font-medium"
                  style="color: #9c8b80;">
                Phone
            </span>
            <span class="text-base font-medium text-right">
                {{ $booking->phone }}
            </span>
        </div>

        {{-- Service --}}
        <div class="flex items-center justify-between py-3 border-b"
             style="border-color: rgba(42,33,28,0.06);">
            <span class="text-xs tracking-[0.14em] uppercase font-medium"
                  style="color: #9c8b80;">
                Service
            </span>
            <span class="text-xl font-semibold text-right"
                  style="font-family: 'Cormorant Garamond', serif;">
                {{ ucwords(str_replace('_', ' ', $booking->service)) }}
            </span>
        </div>

        {{-- Date --}}
        <div class="flex items-center justify-between py-3 border-b"
             style="border-color: rgba(42,33,28,0.06);">
            <span class="text-xs tracking-[0.14em] uppercase font-medium"
                  style="color: #9c8b80;">
                Date
            </span>
            <span class="text-base font-medium text-right">
                {{ \Carbon\Carbon::parse($booking->preferred_date)->format('l, j F Y') }}
            </span>
        </div>

        {{-- Time --}}
        <div class="flex items-center justify-between py-3">
            <span class="text-xs tracking-[0.14em] uppercase font-medium"
                  style="color: #9c8b80;">
                Time
            </span>
            <span class="text-base font-medium text-right">
                {{ $booking->preferred_time }}
            </span>
        </div>

    </div>
</div>

            {{-- Payment Note --}}
            <div class="rounded-2xl px-5 py-4 mb-10 flex items-center gap-3"
                 style="background: #f6f0e5; color: var(--gold-dark);">
                <span class="text-lg">ⓘ</span>
                <p class="text-base leading-7">
                    Payment will be made in person after your appointment.
                </p>
            </div>

            {{-- Buttons --}}
            <div class="grid sm:grid-cols-2 gap-4">
                <a href="{{ url('/') }}"
                   class="btn-outline w-full py-4 rounded-2xl text-base font-medium text-center block">
                    Return Home
                </a>

                <a href="{{ route('booking') }}"
                   class="btn-gold w-full py-4 rounded-2xl text-base font-medium text-center block">
                    Book Another
                </a>
            </div>

        </div>
    </div>

</body>
</html>

@endsection