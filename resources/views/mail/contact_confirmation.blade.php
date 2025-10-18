<h2>Thank you, {{ $contact->first_name }}!</h2>

<p>We’ve received your request for <strong>{{ ucfirst($contact->service_type) }}</strong>.</p>

@if($contact->description)
<p><strong>Your message:</strong></p>
<p>{{ $contact->description }}</p>
@endif

<p>One of our team members will reach out to you shortly.</p>

<br>
<p>Warm regards,<br><strong>The Mantu Team</strong></p>
<p><a href="https://mantu.co.zw">https://mantu.co.zw</a></p>
