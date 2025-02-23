<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/build/assets/css/register.css')}}">
</head>
<body>
    <div class = "register-container">
        <h1>Register</h1>
        <form action="{{route('register')}}" method="POST">
            @csrf
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email: </label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password: </label>
            <div class="password-container">
                <input type="password" name="password" placeholder="Password" id = "password" class = "input" autocomplete="new-password" required>
                <button type="button" id = "togglePassword">Show</button>
            </div>

            <label for="password_confirmation">Confirm Password: </label>
            <div class="password-container">
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-type Password" autocomplete="new-password" required>
                <button type="button" id="togglePassword_confirm">Show</button>
            </div>
            
            <button type="submit" class="register-btn">Register</button>

        </form>
    </div>
    <script src="/build/assets/js/index.js"></script>
</body>
</html>