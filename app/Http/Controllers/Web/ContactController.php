<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\ContactSubmitted;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:50',
            'service_type' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Store in DB
        $contact = Contact::create($validated);

        // Send email to admin (update this to your address)
        Mail::to('ks.mkhonza@gmail.com')->send(new ContactSubmitted($contact));

        Mail::to('karenthebe@gmail.com')->send(new ContactSubmitted($contact));

        return back()->with('success', 'Your request has been submitted successfully!');
    }
}
