<h2>New Service Request</h2>

<p><strong>Name:</strong> {{ $contact->first_name }}</p>
<p><strong>Phone:</strong> {{ $contact->phone_number }}</p>
<p><strong>Service Type:</strong> {{ ucfirst($contact->service_type) }}</p>
<p><strong>Description:</strong></p>
<p>{{ $contact->description }}</p>
