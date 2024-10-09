<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap&_v=20241006215846"
          rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/logo.ico') }}">
    @routes
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
    @inertiaHead
</head>
<body>
@inertia
</body>
</html>
