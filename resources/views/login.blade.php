<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
</head>
<body>
<div class="loginbox">
    <img src="{{ asset('images/logo.png') }}" alt="could not load image" class="logo" width="155px" height="145px">
</div>

<div class="login">
    <h1 >Login</h1>
    <form  action="{{ route('login') }}" method="post">
        @csrf
        <input type="text" name="email" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
</div>

</body>
</html>


