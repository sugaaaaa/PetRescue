<!DOCTYPE html>
<html>
<head>
    <title>Adoption Status Changed</title>
</head>
<body>
    <h1>Adoption Status Update</h1>
    <p>Dear {{ $adoption->name }},</p>
    <p>Your adoption request for {{ $adoption->pet->name }} has been {{ $status }}.</p>
    <p>Thank you for your interest in adopting a pet from us.</p>
</body>
</html>