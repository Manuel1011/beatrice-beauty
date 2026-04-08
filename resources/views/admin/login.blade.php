<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — Beatrice Beauty Studio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root{
            --sidebar-bg:#120d0b;
            --panel-bg:#1b1411;
            --panel-border:rgba(212,176,122,0.10);
            --gold:#c9a96e;
            --text:#f5e8e2;
            --muted:#7a6a64;
            --input-bg:#16110f;
        }

        html, body{
            margin:0;
            min-height:100%;
            background:var(--sidebar-bg);
            font-family:Jost, sans-serif;
        }

        .font-display{
            font-family:"Cormorant Garamond", serif;
        }

        .admin-card{
            background:linear-gradient(180deg, rgba(36,27,23,0.98), rgba(25,18,15,0.98));
            border:1px solid var(--panel-border);
            box-shadow:0 30px 80px rgba(0,0,0,0.35);
        }

        .admin-input{
            width:100%;
            border-radius:0.9rem;
            background:var(--input-bg);
            border:1px solid rgba(212,176,122,0.10);
            color:var(--text);
            padding:0.95rem 1rem;
            outline:none;
            transition:all .2s ease;
        }

        .admin-input::placeholder{
            color:#6f625d;
        }

        .admin-input:focus{
            border-color:rgba(201,169,110,0.45);
            box-shadow:0 0 0 3px rgba(201,169,110,0.10);
        }

        .btn-gold{
            background:linear-gradient(135deg,#d8b57a,#bf9658);
            color:#1a130f;
            transition:all .2s ease;
        }

        .btn-gold:hover{
            filter:brightness(1.03);
            transform:translateY(-1px);
        }
    </style>
</head>
<body>

<section id="admin-login" style="background:var(--sidebar-bg); min-height:100vh; display:flex; align-items:center; padding:3rem 1.5rem;">

  <div class="max-w-5xl mx-auto w-full grid lg:grid-cols-2 gap-10 items-center">

    <div class="hidden lg:block text-center lg:text-left">
      <div class="flex items-center gap-3 mb-8">
        <div class="w-10 h-10 rounded-full flex items-center justify-center" style="background:linear-gradient(135deg,#e8bfb5,#c9a96e);">
          <svg width="18" height="18" viewBox="0 0 14 14" fill="none"><path d="M7 1C7 1 3 4 3 8C3 10.2091 4.79086 12 7 12C9.20914 12 11 10.2091 11 8C11 4 7 1 7 1Z" fill="white"/></svg>
        </div>
        <span class="font-display font-semibold text-2xl tracking-wide" style="color:#f5e8e2;">Beatrice Beauty Studio</span>
      </div>

      <h2 class="font-display font-light text-4xl mb-4 leading-tight" style="color:#f5e8e2;">
        Welcome back,<br><em style="color:var(--gold);">Admin</em>
      </h2>

      <p class="text-sm leading-relaxed mb-8 max-w-md" style="color:#7a6a64;">
        Manage your bookings, track appointments, and keep your studio running smoothly.
      </p>

      <div class="space-y-4">
        <div class="flex items-center gap-3 text-sm" style="color:#7a6a64;">
          <div class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0" style="background:#231e1b;">
            <span class="text-xs" style="color:var(--gold);">📅</span>
          </div>
          View and manage all client bookings
        </div>

        <div class="flex items-center gap-3 text-sm" style="color:#7a6a64;">
          <div class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0" style="background:#231e1b;">
            <span class="text-xs" style="color:var(--gold);">📊</span>
          </div>
          Track daily and weekly appointment stats
        </div>

        <div class="flex items-center gap-3 text-sm" style="color:#7a6a64;">
          <div class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0" style="background:#231e1b;">
            <span class="text-xs" style="color:var(--gold);">✓</span>
          </div>
          Confirm or cancel appointments instantly
        </div>
      </div>
    </div>

    <div class="admin-card rounded-3xl p-8 lg:p-10 w-full max-w-md mx-auto">
      <div class="lg:hidden flex items-center gap-2.5 mb-8">
        <div class="w-8 h-8 rounded-full flex items-center justify-center" style="background:linear-gradient(135deg,#e8bfb5,#c9a96e);">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M7 1C7 1 3 4 3 8C3 10.2091 4.79086 12 7 12C9.20914 12 11 10.2091 11 8C11 4 7 1 7 1Z" fill="white"/></svg>
        </div>
        <span class="font-display font-semibold text-xl" style="color:#f5e8e2;">Beatrice Beauty</span>
      </div>

      <h3 class="font-display font-medium text-2xl mb-1" style="color:#f5e8e2;">Admin Sign In</h3>
      <p class="text-xs mb-8" style="color:#7a6a64;">Enter your credentials to access the dashboard.</p>

      <form action="/admin/login" method="POST" class="space-y-5">
        @csrf

        <div>
          <label class="block text-xs font-medium tracking-widest uppercase mb-2" style="color:#7a6a64;">Email Address</label>
          <input type="email" name="email" placeholder="admin@beatricebeauty.gh" class="admin-input" required>
        </div>

        <div>
          <label class="block text-xs font-medium tracking-widest uppercase mb-2" style="color:#7a6a64;">Password</label>
          <input type="password" name="password" placeholder="••••••••" class="admin-input" required>
        </div>

        <div class="flex items-center justify-between">
          <label class="flex items-center gap-2 cursor-pointer">
            <input type="checkbox" class="w-3.5 h-3.5 rounded accent-amber-600">
            <span class="text-xs" style="color:#7a6a64;">Remember me</span>
          </label>
          <a href="#" class="text-xs hover:opacity-80 transition-opacity" style="color:var(--gold);">Forgot password?</a>
        </div>

        <button type="submit" class="btn-gold w-full py-3.5 rounded-xl text-sm font-medium mt-2 flex items-center justify-center gap-2">
          Sign In to Dashboard
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
      </form>

      <p class="text-center text-xs mt-6" style="color:#5a4e4a;">
        Admin access only.
        <a href="/" class="hover:opacity-80 transition-opacity" style="color:var(--gold);">Go to customer site →</a>
      </p>
    </div>

  </div>
</section>

</body>
</html>