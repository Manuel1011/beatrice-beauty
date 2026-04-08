<?php

namespace App\Http\Controllers;

use App\Models\ContactInquiry;
use Illuminate\Http\Request;

class ContactInquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:3000'],
        ], [
            'full_name.required' => 'Please fill in all required fields.',
            'email.required' => 'Please fill in all required fields.',
            'subject.required' => 'Please fill in all required fields.',
            'message.required' => 'Please fill in all required fields.',
        ]);

        ContactInquiry::create([
            'full_name' => $validated['full_name'],
            'phone' => $validated['phone'] ?? null,
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'status' => 'new',
        ]);

        return back()->with('success', 'Your message has been sent successfully. We’ll get back to you within an hour.');
    }
}