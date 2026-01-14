<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        // Validate visitor input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Save to database
        ContactMessage::create($validated);

        try {
            // Send email immediately
            Mail::to('reigns4games99@gmail.com')
                ->send(new ContactMessageMail($validated));

            return redirect()->back()->with('success', 'Your message has been sent!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Message could not be sent. Mail error: ' . $e->getMessage());
        }
    }
}
