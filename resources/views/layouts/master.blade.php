<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/pages_style.css') }}">
    @yield('page-css')
</head>
<body>
    <img src="images/logo.png" alt="could not load image" class="logo" width="155px" height="145px">
    <div class="links">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('page','idea') }}" target="_self">Idea</a>
        <a href="{{ route('page','how-it-works') }}" target="_self">How it works</a>
        <a href="{{ route('page','contact-us') }}" target="_self">Contact</a>
    </div>
    @yield('content')
</body>
</html>