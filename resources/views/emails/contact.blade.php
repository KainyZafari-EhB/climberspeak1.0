<!DOCTYPE html>
<html>

<head>
    <title>New Contact Message</title>
</head>

<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2>New Contact Message from ClimbConnect</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] ?? 'N/A' }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>

    <hr>

    <h3>Message:</h3>
    <p style="white-space: pre-wrap;">{{ $data['message'] }}</p>
</body>

</html>