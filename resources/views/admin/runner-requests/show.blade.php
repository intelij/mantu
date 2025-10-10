@extends('layouts.app')

@section('title', 'Runner Request Details')

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-md rounded-2xl p-6 mt-6">
    <h2 class="text-2xl font-bold mb-4 text-center">🏠 Runner Request Details</h2>

    <a href="{{ route('admin.runner-requests.index') }}" class="text-indigo-600 hover:underline mb-4 inline-block">← Back to all requests</a>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <p><strong>Name:</strong> {{ $request->name }}</p>
            <p><strong>Phone:</strong> {{ $request->phone }}</p>
            <p><strong>Email:</strong> {{ $request->email ?? '—' }}</p>
            <p><strong>Service Type:</strong> {{ ucfirst(str_replace('_', ' ', $request->service_type)) }}</p>
            @if($request->other_service)
                <p><strong>Other Service:</strong> {{ $request->other_service }}</p>
            @endif
            <p><strong>Location:</strong> {{ $request->location }}</p>
        </div>

        <div>
            <p><strong>Ownership:</strong> {{ ucfirst($request->ownership) }}</p>
            @if($request->other_person)
                <p><strong>Other Person:</strong> {{ $request->other_person }}</p>
            @endif
            <p><strong>Job Date:</strong>
                {{ $request->job_date === 'later' && $request->specific_date ? $request->specific_date->format('d M Y') : ucfirst($request->job_date) }}
            </p>
            <p><strong>Budget:</strong>
                @if($request->has_budget)
                    ${{ number_format($request->budget, 2) }}
                @else
                    Not specified
                @endif
            </p>
        </div>
    </div>

    <div class="mt-4">
        <p><strong>Description:</strong></p>
        <p class="text-gray-700 mt-1">{{ $request->description ?? 'No description provided.' }}</p>
    </div>

    <div class="mt-4">
        <p><strong>Preferred Contact Method:</strong></p>
        <p class="text-gray-700 mt-1">
            {{ $request->contact_method ? implode(', ', $request->contact_method) : '—' }}
        </p>
    </div>

    @if($request->attachment_path)
        <div class="mt-4">
            <p><strong>Attachment:</strong></p>
            <a href="{{ asset('storage/' . $request->attachment_path) }}" target="_blank" class="text-indigo-600 hover:underline">
                View / Download File
            </a>
        </div>
    @endif

    <div class="mt-6 text-right">
        <span class="text-sm text-gray-500">Submitted: {{ $request->created_at->format('d M Y, H:i') }}</span>
    </div>
</div>
@endsection
