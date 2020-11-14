<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Writer Request</title>
</head>
<body>
    <h3>User with ID: {{ Auth::id() }} requests to become a writer.</h3>
    <p>You can go to this user's profile using <a href="{{ url('/profile/'.Auth::id()) }}">this link</a>.</p>
</body>
</html>
