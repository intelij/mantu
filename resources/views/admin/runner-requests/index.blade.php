@extends('layouts.app')

@section('title', 'Runner Requests Dashboard')

@section('content')
<div class="max-w-6xl mx-auto bg-white shadow-md rounded-2xl p-6 mt-6">
    <h2 class="text-2xl font-bold mb-4 text-center">🏃 Runner Requests Dashboard</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-4 text-center">
            {{ session('success') }}
        </div>
    @endif

    @if($requests->count())
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 text-sm text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3 border">#</th>
                        <th class="p-3 border">Name</th>
                        <th class="p-3 border">Phone</th>
                        <th class="p-3 border">Service</th>
                        <th class="p-3 border">Location</th>
                        <th class="p-3 border">Requested</th>
                        <th class="p-3 border text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requests as $req)
                        <tr class="hover:bg-gray-50">
                            <td class="p-3 border">{{ $req->id }}</td>
                            <td class="p-3 border font-medium">{{ $req->name }}</td>
                            <td class="p-3 border">{{ $req->phone }}</td>
                            <td class="p-3 border">
                                {{ ucfirst(str_replace('_', ' ', $req->service_type)) }}
                            </td>
                            <td class="p-3 border">{{ $req->location }}</td>
                            <td class="p-3 border">{{ $req->created_at->diffForHumans() }}</td>
                            <td class="p-3 border text-center">
                                <a href="{{ route('admin.runner-requests.show', $req->id) }}"
                                   class="text-indigo-600 hover:underline">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $requests->links() }}
        </div>
    @else
        <p class="text-center text-gray-600">No requests have been submitted yet.</p>
    @endif
</div>
@endsection
