<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subjectText }}</title>
</head>
<body>
    <h3>{{ $subjectText }}</h3>
    <p>{!! nl2br(e($messageBody)) !!}</p>
</body>
</html>
