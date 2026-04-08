<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactInquiryController;
use App\Models\Booking;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactInquiryController::class, 'store'])->name('contact.store');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

Route::get('/booking/success/{booking}', function (Booking $booking) {
    return view('booking-success', compact('booking'));
})->name('booking.success');

Route::get('/confirmation', function () {
    return view('confirmation');
})->name('confirmation');


/*
|--------------------------------------------------------------------------
| ADMIN AUTH ROUTES
|--------------------------------------------------------------------------
*/

// Show login page
Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

// Handle login
Route::post('/admin/login', function (Request $request) {

    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {

        // 🔒 Prevent non-admin users
        if (!Auth::user()->is_admin) {
            Auth::logout();
            return back()->withErrors([
                'email' => 'Unauthorized access.',
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('admin.dashboard');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
});

// Logout
Route::post('/admin/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('admin.login');
})->name('admin.logout');


/*
|--------------------------------------------------------------------------
| ADMIN PROTECTED ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/admin/dashboard', function () {
        $bookings = Booking::latest()->get();
        return view('admin.dashboard', compact('bookings'));
    })->name('admin.dashboard');

    Route::get('/admin/bookings', function () {
        $bookings = Booking::latest()->get();
        return view('admin.bookings', compact('bookings'));
    })->name('admin.bookings');

    Route::delete('/admin/bookings/{booking}', function (Booking $booking) {
        $booking->delete();
        return back();
    })->name('admin.bookings.delete');

});