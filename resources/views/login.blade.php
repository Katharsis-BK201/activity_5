<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/assets/css/login.css')}}">
</head>
<body>
    <section class = "login-container">
        <img src="\assets\img\perc-hub-high-resolution-logo-transparent.png" alt="logo" class = "logo">
        <h1>Welcome! Please Login or Register</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label for="email">Email: </label>
            <div class= "email-container">
                <input type="email" name="email" placeholder="Email" class = "input" id = "email" required>
            </div >
            <label for="password">Password: </label>
            <div class = "password-container">
                <input type="password" name="password" placeholder="Password" id = "password" class = "input" autocomplete="new-password" required>
                <button type="button" id = "togglePassword">Show</button>
            </div>

            <button type="submit" class = "login-button">Login</button>
            
            <p>OR</p>

            <div class="social-login">
                <a href="{{route('auth.redirect','google')}}" class="login-btn"> Login with Google</a>
                <a href="{{route('auth.redirect','facebook')}}" class = "login-btn">Login with Facebook</a>

            </div>

        </form>
        <p>Don't have an account?</p><a href="{{route('register')}}">Register Here!</a>
    </section>
    <script src="/assets/js/index.js"></script>
</body>
</html>