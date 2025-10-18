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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mantu | Contact Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: #333333;
        }
        .email-wrapper {
            width: 100%;
            background-color: #f5f5f5;
            padding: 40px 0;
        }
        .email-container {
            max-width: 600px;
            background-color: #ffffff;
            margin: 0 auto;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        .email-header {
            background-color: #813fd6;
            text-align: center;
            padding: 20px;
        }
        .email-header img {
            width: 140px;
            height: auto;
        }
        .email-body {
            padding: 30px;
            text-align: left;
        }
        .email-body h2 {
            color: #004d40;
            font-size: 22px;
        }
        .email-body p {
            font-size: 15px;
            line-height: 1.6;
            color: #555555;
        }
        .signature {
            margin-top: 30px;
            color: #813fd6;
        }
        .email-footer {
            background-color: #eeeeee;
            text-align: center;
            font-size: 12px;
            color: #777777;
            padding: 20px;
        }
        .email-footer a {
            color: #813fd6;
            text-decoration: none;
        }
        .btn {
            display: inline-block;
            background-color: #009688;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            margin-top: 20px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-container">
            <div class="email-header">
                <img src="https://mantu.co.zw/images/mantu-logo.png" alt="Mantu Logo">
            </div>

            <div class="email-body">
                <h2>Dear {{ $contact->first_name }},</h2>

                <p>Thank you for contacting <strong>Mantu</strong>. We've received your enquiry and appreciate you reaching out to us.</p>

                <p>One of our dedicated service consultants will be in touch within 1–2 business days to assist you with your request and provide the right professional solution.</p>

                <p>At <strong>Mantu</strong>, we're committed to connecting you with qualified tradespeople and reliable home service experts who deliver trusted results every time.</p>

                <p>If you have any urgent questions, please reply to this email or contact our support team at <a href="mailto:support@mantu.co.zw">support@mantu.co.zw</a>.</p>

                <p class="signature">
                    Sincerely,<br>
                    <strong>The Mantu Team</strong><br>
                    <a href="https://mantu.co.zw" target="_blank">www.mantu.co.zw</a>
                </p>
            </div>

            <div class="email-footer">
                <p>© {{ date('Y') }} Mantu. All Rights Reserved.<br>
                Matabeleland, Zimbabwe</p>
                <p><a href="https://mantu.co.zw/contact">Contact Us</a> | <a href="https://mantu.co.zw">Visit Website</a></p>
            </div>
        </div>
    </div>
</body>
</html>
