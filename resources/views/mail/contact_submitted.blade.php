<h2>New Service Request Received</h2>

<p><strong>Name:</strong> {{ $contact->first_name }}</p>
<p><strong>Phone:</strong> {{ $contact->phone_number }}</p>
<p><strong>Service Type:</strong> {{ ucfirst($contact->service_type) }}</p>

@if($contact->description)
<p><strong>Description:</strong></p>
<p>{{ $contact->description }}</p>
@endif

<hr>
<p>Submitted on {{ $contact->created_at->format('d M Y, H:i') }}</p>
