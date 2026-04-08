<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'service' => ['required', 'string', 'max:255'],
            'preferred_date' => ['required', 'date'],
            'preferred_time' => ['required', 'string', 'max:50'],
            'message' => ['nullable', 'string', 'max:2000'],
        ], [
            'full_name.required' => 'Please fill in all required fields.',
            'phone.required' => 'Please fill in all required fields.',
            'service.required' => 'Please fill in all required fields.',
            'preferred_date.required' => 'Please fill in all required fields.',
            'preferred_time.required' => 'Please fill in all required fields.',
        ]);

        $booking = Booking::create([
            'full_name' => $validated['full_name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'] ?? null,
            'service' => $validated['service'],
            'preferred_date' => $validated['preferred_date'],
            'preferred_time' => $validated['preferred_time'],
            'message' => $validated['message'] ?? null,
            'status' => 'pending',
        ]);

        return redirect()->route('booking.success', $booking);
    }
}