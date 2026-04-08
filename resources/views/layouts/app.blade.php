<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beatrice Beauty Studio</title>

    <!-- Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Premium Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
  :root {
    --blush: #f3d9d2;
    --blush-deep: #e8bfb5;
    --nude: #f7ede8;
    --gold: #c9a96e;
    --gold-light: #e8d5b7;
    --cream: #fdf8f5;
    --warm-white: #fffaf8;
    --charcoal: #2c2420;
    --muted: #8a7570;
    --text-dark: #1e1a18;
    --sidebar-bg: #1a1612;
    --card-bg: #231e1b;
    --border-dark: #2e2824;
  }

  body { font-family: 'DM Sans', sans-serif; background: var(--cream); color: var(--text-dark); }

  .font-display { font-family: 'Cormorant Garamond', serif; }

  /* Page separator */
  .page-separator {
    background: #e2d9d5;
    text-align: center;
    padding: 1rem;
    font-family: 'DM Sans', sans-serif;
    font-size: 0.75rem;
    font-weight: 500;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: #9a8a84;
    border-top: 1px solid #d4c9c4;
    border-bottom: 1px solid #d4c9c4;
  }

  /* Gold shimmer button */
  .btn-gold {
    background: linear-gradient(135deg, #c9a96e 0%, #e8d5b7 50%, #c9a96e 100%);
    background-size: 200% 200%;
    color: #1e1a18;
    font-weight: 500;
    letter-spacing: 0.04em;
    transition: background-position 0.5s ease, transform 0.2s ease, box-shadow 0.2s ease;
  }
  .btn-gold:hover {
    background-position: right center;
    transform: translateY(-1px);
    box-shadow: 0 8px 30px rgba(201,169,110,0.35);
  }

  .btn-outline-gold {
    border: 1.5px solid var(--gold);
    color: var(--gold);
    font-weight: 500;
    letter-spacing: 0.04em;
    transition: all 0.25s ease;
  }
  .btn-outline-gold:hover {
    background: var(--gold);
    color: #1e1a18;
  }

  /* Soft card shadow */
  .card-shadow { box-shadow: 0 4px 30px rgba(180,140,120,0.1); }
  .card-shadow-lg { box-shadow: 0 10px 50px rgba(180,140,120,0.14); }

  /* Admin card */
  .admin-card { background: var(--card-bg); border: 1px solid var(--border-dark); }

  /* Table row hover */
  .admin-row:hover td { background: rgba(201,169,110,0.05); }

  /* Input style */
  .input-field {
    width: 100%;
    padding: 0.875rem 1.125rem;
    border: 1.5px solid #e8dcd8;
    border-radius: 0.875rem;
    background: #fffaf8;
    font-family: 'DM Sans', sans-serif;
    font-size: 0.9rem;
    color: var(--text-dark);
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
    outline: none;
  }
  .input-field:focus {
    border-color: var(--gold);
    box-shadow: 0 0 0 3px rgba(201,169,110,0.12);
  }
  .input-field::placeholder { color: #bfb0aa; }

  /* Admin input */
  .admin-input {
    width: 100%;
    padding: 0.75rem 1rem;
    background: #1e1a17;
    border: 1px solid #3a3330;
    border-radius: 0.625rem;
    color: #e8ddd8;
    font-size: 0.875rem;
    font-family: 'DM Sans', sans-serif;
    outline: none;
    transition: border-color 0.2s ease;
  }
  .admin-input:focus { border-color: var(--gold); }
  .admin-input::placeholder { color: #6a5e58; }

  /* Navbar link */
  .nav-link {
    position: relative;
    color: var(--muted);
    font-size: 0.875rem;
    font-weight: 400;
    letter-spacing: 0.04em;
    transition: color 0.2s;
  }
  .nav-link::after {
    content: '';
    position: absolute;
    bottom: -2px; left: 0;
    width: 0; height: 1px;
    background: var(--gold);
    transition: width 0.3s ease;
  }
  .nav-link:hover { color: var(--charcoal); }
  .nav-link:hover::after { width: 100%; }

  /* Star rating */
  .star { color: var(--gold); }

  /* Status badge */
  .badge-confirmed { background: #d4edda; color: #2e7d32; }
  .badge-pending   { background: #fff3cd; color: #856404; }
  .badge-cancelled { background: #f8d7da; color: #842029; }

  /* Scrollbar for demo page navigation */
  .page-nav { position: fixed; right: 1rem; top: 50%; transform: translateY(-50%); z-index: 999; display: flex; flex-direction: column; gap: 0.5rem; }
  .page-nav a { display: block; width: 10px; height: 10px; border-radius: 50%; background: #d4c9c4; transition: background 0.2s; }
  .page-nav a:hover { background: var(--gold); }

  @keyframes fadeUp { from { opacity:0; transform: translateY(20px); } to { opacity:1; transform: translateY(0); } }
  .fade-up { animation: fadeUp 0.7s ease both; }
  .delay-1 { animation-delay: 0.15s; }
  .delay-2 { animation-delay: 0.3s; }
  .delay-3 { animation-delay: 0.45s; }

  /* Grain overlay on hero */
  .hero-grain::before {
    content: '';
    position: absolute; inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
    background-size: 150px 150px;
    pointer-events: none;
    border-radius: inherit;
    z-index: 1;
  }

  .label {
    display: block;
    font-size: 0.78rem;
    font-weight: 500;
    letter-spacing: 0.05em;
    color: #8a7570;
    margin-bottom: 0.45rem;
  }

  select.input-field { appearance: none; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23bfb0aa' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 1rem center; padding-right: 2.5rem; }
  select.admin-input { appearance: none; }
</style>
</head>
 
<body class="bg-[#fdf8f5] text-[#2d2a26] antialiased">

    <!-- NAVBAR -->
    @include('partials.navbar')

    <!-- PAGE CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    @include('partials.footer')

</body>
</html>