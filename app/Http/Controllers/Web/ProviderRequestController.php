<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\RunnerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProviderRequestController extends Controller
{
    public function index()
    {
        // Get latest requests first
        $requests = \App\Models\RunnerRequest::latest()->paginate(15);
        return view('admin.runner-requests.index', compact('requests'));
    }

    public function show($id)
    {
        $request = \App\Models\RunnerRequest::findOrFail($id);
        return view('admin.runner-requests.show', compact('request'));
    }

    public function create()
    {
        return view('runner-request');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'nullable|email',
            'service_type' => 'required|string',
            'location' => 'required|string|max:255',
            'ownership' => 'nullable|string',
            'terms' => 'accepted',
        ]);

        // Handle optional fields
        $validated['other_service'] = $request->other_service;
        $validated['other_person'] = $request->other_person;
        $validated['job_date'] = $request->job_date;
        $validated['specific_date'] = $request->specific_date;
        $validated['description'] = $request->description;
        $validated['has_budget'] = $request->budget_option === 'yes';
        $validated['budget'] = $request->budget;
        $validated['contact_method'] = $request->contact_method ?? [];

        // Handle file upload (if any)
        if ($request->hasFile('attachment')) {
            $path = $request->file('attachment')->store('runner_attachments', 'public');
            $validated['attachment_path'] = $path;
        }

        RunnerRequest::create($validated);

        // inside store()
        // Mail::to(config('mail.from.address'))->send(new RunnerRequestReceived($validated));

        return redirect()->back()->with('success', '✅ Thank you! A runner will contact you soon.');
    }

}
