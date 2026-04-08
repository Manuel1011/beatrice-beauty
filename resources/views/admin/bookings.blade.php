@extends('layouts.admin')

@section('content')

<style>
    .admin-shell {
        --sidebar-bg: #171311;
        --panel-bg: #211b18;
        --panel-bg-2: #261f1c;
        --border-dark: #332a26;
        --gold: #c9a96e;
        --gold-soft: #e7d3ac;
        --text-main: #f5e8e2;
        --text-soft: #c8b8b2;
        --text-muted: #7a6a64;
    }

    .admin-card {
        background: linear-gradient(180deg, var(--panel-bg-2) 0%, var(--panel-bg) 100%);
        border: 1px solid var(--border-dark);
        box-shadow: 0 10px 30px rgba(0,0,0,0.18);
    }

    .admin-input {
        width: 100%;
        border-radius: 0.9rem;
        border: 1px solid var(--border-dark);
        background: rgba(255,255,255,0.02);
        color: var(--text-main);
        padding: 0.7rem 0.9rem;
        outline: none;
    }

    .admin-input:focus {
        border-color: var(--gold);
    }

    .admin-input option {
        background: #1b1614;
        color: var(--text-main);
    }

    .admin-row {
        transition: background-color 0.2s ease;
    }

    .admin-row:hover {
        background: rgba(255,255,255,0.02);
    }

    .badge-confirmed {
        background: rgba(187, 247, 208, 0.14);
        color: #b7efc6;
    }

    .badge-pending {
        background: rgba(254, 240, 138, 0.14);
        color: #f5e7a1;
    }

    .badge-cancelled {
        background: rgba(254, 202, 202, 0.14);
        color: #f3b3b3;
    }
</style>

<section class="admin-shell" style="background:#151210; min-height:100vh; display:flex;">

    <!-- Sidebar -->
   <!-- Sidebar -->
    <aside class="hidden lg:flex flex-col w-60 flex-shrink-0" style="background:var(--sidebar-bg); border-right:1px solid var(--border-dark);">
        <a href="{{ route('home') }}" class="block px-6 py-6 border-b hover:bg-white/5 transition-colors" style="border-color:var(--border-dark); text-decoration:none;">
            <div class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-full flex items-center justify-center" style="background:linear-gradient(135deg,#e8bfb5,#c9a96e);">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path d="M7 1C7 1 3 4 3 8C3 10.2091 4.79086 12 7 12C9.20914 12 11 10.2091 11 8C11 4 7 1 7 1Z" fill="white"/>
                    </svg>
                </div>
                <div>
                    <p class="font-display font-semibold text-sm leading-tight" style="color:#f5e8e2;">Beatrice Beauty</p>
                    <p class="text-xs" style="color:#5a4e4a;">Admin Portal</p>
                </div>
            </div>
        </a>

        <nav class="flex-1 px-4 py-6 space-y-1">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium" style="background:rgba(201,169,110,0.12); color:var(--gold);">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <rect x="1" y="1" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.3"/>
                    <rect x="9" y="1" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.3"/>
                    <rect x="1" y="9" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.3"/>
                    <rect x="9" y="9" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.3"/>
                </svg>
                Dashboard
            </a>

            <a href="{{ route('admin.bookings') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm hover:bg-white/5 transition-colors" style="color:#7a6a64;">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <rect x="2" y="3" width="12" height="11" rx="1.5" stroke="currentColor" stroke-width="1.3"/>
                    <path d="M5 1v4M11 1v4M2 7h12" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
                </svg>
                Bookings
            </a>

            <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm hover:bg-white/5 transition-colors" style="color:#7a6a64;">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <circle cx="8" cy="5" r="3" stroke="currentColor" stroke-width="1.3"/>
                    <path d="M2 13c0-3.314 2.686-5 6-5s6 1.686 6 5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
                </svg>
                Clients
            </a>

            <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm hover:bg-white/5 transition-colors" style="color:#7a6a64;">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M13 8A5 5 0 1 1 3 8a5 5 0 0 1 10 0z" stroke="currentColor" stroke-width="1.3"/>
                    <path d="M13.5 13.5 11 11" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
                </svg>
                Services
            </a>

            <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm hover:bg-white/5 transition-colors" style="color:#7a6a64;">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <circle cx="8" cy="8" r="2.5" stroke="currentColor" stroke-width="1.3"/>
                    <path d="M8 1v2M8 13v2M1 8h2M13 8h2" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
                </svg>
                Settings
            </a>
        </nav>

        <div class="px-4 py-5 border-t" style="border-color:var(--border-dark);">
            <div class="flex items-center gap-3 px-3 py-2.5">
                <div class="w-8 h-8 rounded-full flex-shrink-0 flex items-center justify-center font-medium text-xs" style="background:linear-gradient(135deg,#e8bfb5,#c9a96e); color:#1e1a18;">BB</div>
                <div class="min-w-0">
                    <p class="text-xs font-medium truncate" style="color:#e8ddd8;">Beatrice Studio Admin</p>
                    <p class="text-xs truncate" style="color:#5a4e4a;">admin@beatricebeauty.gh</p>
                </div>
            </div>
            <form method="POST" action="{{ route('admin.logout') }}" class="mt-2">
            @csrf
            <button type="submit" class="w-full flex items-center gap-2 px-3 py-2 rounded-lg text-xs hover:bg-white/5 transition-colors" style="color:#7a6a64;">
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none">
                    <path d="M5 2H2a1 1 0 00-1 1v7a1 1 0 001 1h3M9 9.5l3-3-3-3M5.5 6.5h7" stroke="currentColor" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Logout
            </button>
        </form>
        </div>
    </aside>

    <!-- Main -->
    <main class="flex-1 overflow-auto">

        <!-- Top Bar -->
        <header class="px-6 lg:px-8 py-4 border-b flex items-center justify-between" style="background:var(--sidebar-bg); border-color:var(--border-dark);">
            <div>
                <h1 class="font-display font-medium text-xl" style="color:#f5e8e2;">Bookings</h1>
                <p class="text-xs mt-0.5" style="color:#5a4e4a;">{{ now()->format('l, j F Y') }}</p>
            </div>
            <div class="flex items-center gap-3">
                <div class="relative hidden sm:block">
                    <input type="search" placeholder="Search bookings…" class="admin-input pl-8 text-xs" style="width:200px;"/>
                    <svg class="absolute left-2.5 top-1/2 -translate-y-1/2" width="12" height="12" viewBox="0 0 12 12" fill="none">
                        <circle cx="5" cy="5" r="4" stroke="#6a5e58" stroke-width="1.2"/>
                        <path d="M9 9l2 2" stroke="#6a5e58" stroke-width="1.2" stroke-linecap="round"/>
                    </svg>
                </div>
                <a href="{{ route('booking') }}" class="btn-gold px-4 py-2 rounded-lg text-xs inline-flex items-center gap-1.5 flex-shrink-0">
                    + New Booking
                </a>
            </div>
        </header>

        <div class="px-6 lg:px-8 py-8">

            <!-- Stats -->
            <div class="grid sm:grid-cols-3 gap-5 mb-8">
                <div class="admin-card rounded-2xl p-5">
                    <p class="text-xs tracking-widest uppercase mb-4" style="color:#5a4e4a;">Total Bookings</p>
                    <p class="font-display text-4xl font-light mb-1" style="color:#f5e8e2;">{{ $bookings->count() }}</p>
                    <p class="text-xs" style="color:#7a6a64;">All recorded appointments</p>
                </div>

                <div class="admin-card rounded-2xl p-5">
                    <p class="text-xs tracking-widest uppercase mb-4" style="color:#5a4e4a;">Today's Bookings</p>
                    <p class="font-display text-4xl font-light mb-1" style="color:#f5e8e2;">{{ $bookings->where('preferred_date', now()->toDateString())->count() }}</p>
                    <p class="text-xs" style="color:#7a6a64;">Scheduled for today</p>
                </div>

                <div class="admin-card rounded-2xl p-5">
                    <p class="text-xs tracking-widest uppercase mb-4" style="color:#5a4e4a;">Pending</p>
                    <p class="font-display text-4xl font-light mb-1" style="color:#f5e8e2;">{{ $bookings->where('status', 'pending')->count() }}</p>
                    <p class="text-xs" style="color:#7a6a64;">Awaiting action</p>
                </div>
            </div>

            <!-- Table -->
            <div class="admin-card rounded-2xl overflow-hidden">

                <div class="px-6 py-4 border-b flex flex-col sm:flex-row sm:items-center justify-between gap-3" style="border-color:var(--border-dark);">
                    <div>
                        <h3 class="text-sm font-medium" style="color:#e8ddd8;">All Bookings</h3>
                        <p class="text-xs mt-0.5" style="color:#5a4e4a;">{{ $bookings->count() }} total appointments</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <select class="admin-input text-xs py-2" style="width:auto; padding-left:0.75rem; padding-right:2rem;">
                            <option>All Services</option>
                        </select>
                        <select class="admin-input text-xs py-2" style="width:auto; padding-left:0.75rem; padding-right:2rem;">
                            <option>All Dates</option>
                        </select>
                    </div>
                </div>

                @if($bookings->isEmpty())
                    <div class="py-20 text-center">
                        <div class="w-16 h-16 rounded-full mx-auto mb-5 flex items-center justify-center" style="background:rgba(201,169,110,0.1);">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none">
                                <rect x="4" y="6" width="20" height="18" rx="2.5" stroke="var(--gold)" stroke-width="1.5"/>
                                <path d="M9 2v8M19 2v8M4 12h20" stroke="var(--gold)" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <h4 class="text-sm font-medium mb-1" style="color:#e8ddd8;">No bookings yet</h4>
                        <p class="text-xs" style="color:#5a4e4a;">Bookings will appear here once clients start booking appointments.</p>
                    </div>
                @else
                    <!-- Desktop -->
                    <div class="overflow-x-auto hidden md:block">
                        <table class="w-full text-sm">
                            <thead>
                                <tr style="border-bottom:1px solid var(--border-dark);">
                                    <th class="text-left px-6 py-3 text-xs font-medium tracking-widest uppercase" style="color:#5a4e4a;">Customer</th>
                                    <th class="text-left px-4 py-3 text-xs font-medium tracking-widest uppercase" style="color:#5a4e4a;">Phone</th>
                                    <th class="text-left px-4 py-3 text-xs font-medium tracking-widest uppercase" style="color:#5a4e4a;">Service</th>
                                    <th class="text-left px-4 py-3 text-xs font-medium tracking-widest uppercase" style="color:#5a4e4a;">Date</th>
                                    <th class="text-left px-4 py-3 text-xs font-medium tracking-widest uppercase" style="color:#5a4e4a;">Time</th>
                                    <th class="text-left px-4 py-3 text-xs font-medium tracking-widest uppercase" style="color:#5a4e4a;">Status</th>
                                    <th class="text-left px-4 py-3 text-xs font-medium tracking-widest uppercase" style="color:#5a4e4a;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bookings as $booking)
                                    @php
                                        $initials = collect(explode(' ', trim($booking->full_name)))
                                            ->filter()
                                            ->map(fn($part) => strtoupper(substr($part, 0, 1)))
                                            ->take(2)
                                            ->implode('');
                                        $status = strtolower($booking->status ?? 'pending');
                                        $badgeClass = match($status) {
                                            'confirmed' => 'badge-confirmed',
                                            'cancelled' => 'badge-cancelled',
                                            default => 'badge-pending',
                                        };
                                    @endphp

                                    <tr class="admin-row" style="border-bottom:1px solid var(--border-dark);">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-medium flex-shrink-0" style="background:rgba(201,169,110,0.15); color:var(--gold);">
                                                    {{ $initials ?: 'BB' }}
                                                </div>
                                                <span class="text-xs font-medium" style="color:#e8ddd8;">{{ $booking->full_name }}</span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-xs" style="color:#7a6a64;">{{ $booking->phone }}</td>
                                        <td class="px-4 py-4 text-xs" style="color:#c8b8b2;">{{ ucwords(str_replace('_', ' ', $booking->service)) }}</td>
                                        <td class="px-4 py-4 text-xs" style="color:#7a6a64;">{{ \Carbon\Carbon::parse($booking->preferred_date)->format('d M Y') }}</td>
                                        <td class="px-4 py-4 text-xs" style="color:#7a6a64;">{{ $booking->preferred_time }}</td>
                                        <td class="px-4 py-4">
                                            <span class="{{ $badgeClass }} text-xs font-medium px-2.5 py-1 rounded-full">
                                                {{ ucfirst($status) }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-4">
                                            <div class="flex items-center gap-2">
                                                <button type="button" class="text-xs px-3 py-1.5 rounded-lg hover:opacity-80 transition-opacity" style="background:rgba(201,169,110,0.12); color:var(--gold);">
                                                    View
                                                </button>

                                                <form action="{{ route('admin.bookings.delete', $booking->id) }}" method="POST" onsubmit="return confirm('Delete this booking?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-xs px-3 py-1.5 rounded-lg hover:opacity-80 transition-opacity" style="background:rgba(239,68,68,0.1); color:#f87171;">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Mobile -->
                    <div class="md:hidden divide-y" style="border-color:var(--border-dark);">
                        @foreach($bookings as $booking)
                            @php
                                $status = strtolower($booking->status ?? 'pending');
                                $badgeClass = match($status) {
                                    'confirmed' => 'badge-confirmed',
                                    'cancelled' => 'badge-cancelled',
                                    default => 'badge-pending',
                                };
                            @endphp

                            <div class="p-4 space-y-2">
                                <div class="flex justify-between items-start gap-3">
                                    <div>
                                        <p class="text-xs font-medium" style="color:#e8ddd8;">{{ $booking->full_name }}</p>
                                        <p class="text-xs mt-0.5" style="color:#7a6a64;">
                                            {{ ucwords(str_replace('_', ' ', $booking->service)) }}
                                            · {{ \Carbon\Carbon::parse($booking->preferred_date)->format('d M') }}
                                            · {{ $booking->preferred_time }}
                                        </p>
                                    </div>
                                    <span class="{{ $badgeClass }} text-xs font-medium px-2 py-0.5 rounded-full">{{ ucfirst($status) }}</span>
                                </div>

                                <div class="flex gap-2 pt-1">
                                    <button type="button" class="text-xs px-3 py-1.5 rounded-lg" style="background:rgba(201,169,110,0.12); color:var(--gold);">
                                        View
                                    </button>

                                    <form action="{{ route('admin.bookings.delete', $booking->id) }}" method="POST" onsubmit="return confirm('Delete this booking?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-xs px-3 py-1.5 rounded-lg" style="background:rgba(239,68,68,0.1); color:#f87171;">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="px-6 py-4 border-t flex flex-col sm:flex-row sm:items-center justify-between gap-3" style="border-color:var(--border-dark);">
                        <p class="text-xs" style="color:#5a4e4a;">Showing {{ $bookings->count() }} booking{{ $bookings->count() === 1 ? '' : 's' }}</p>
                        <div class="flex items-center gap-1">
                            <button class="w-8 h-8 rounded-lg text-xs font-medium flex items-center justify-center" style="background:rgba(201,169,110,0.12); color:var(--gold);">1</button>
                        </div>
                    </div>
                @endif

            </div>
        </div>

    </main>
</section>

@endsection