<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Mail</title>
</head>
<body>
    <p>Message sent by {{$details['email']}}.</p>
    <p>{{$details['name']}} wrote:</p>
    <p>{{$details['body']}}</p>
</body>
</html>
