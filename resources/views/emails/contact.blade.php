<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Message</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <h2 style="color: #111111; border-bottom: 2px solid #E5E5E5; padding-bottom: 10px;">
        New Contact Form Message
    </h2>
    
    <div style="margin-top: 20px;">
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
    </div>
    
    <div style="margin-top: 20px; padding: 15px; background-color: #FAFAFA; border-left: 3px solid #111111;">
        <p><strong>Message:</strong></p>
        <p style="white-space: pre-wrap;">{{ $messageText }}</p>
    </div>
    
    <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #E5E5E5; font-size: 12px; color: #737373;">
        <p>This message was sent from the Xinji website contact form.</p>
    </div>
</body>
</html>

