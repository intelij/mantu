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
            'email' => 'nullable|email|max:255',
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

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'first_name' => 'required|string|max:255',
    //         'phone_number' => 'nullable|string|max:50',
    //         'service_type' => 'required|string|max:255',
    //         'description' => 'nullable|string',
    //         'email' => 'nullable|email|max:255',
    //     ]);

    //     // Store in DB
    //     $contact = Contact::create($validated);

    //     // Define admin email
    //     $adminEmail = 'admin@example.com';

    //     // Send emails
    //     Mail::to($adminEmail)->send(new ContactSubmitted($contact));

    //     // If phone_number or name implies contactable user, send confirmation
    //     if (!empty($contact->phone_number)) {
    //         // Optional: if your form later collects an email, you can change this to Mail::to($contact->email)
    //         Mail::to('noreply@mantu.co.zw')->send(new ContactConfirmation($contact));
    //     }

    //     return back()->with('success', 'Your request has been submitted successfully! A confirmation email has been sent.');
    // }
}
