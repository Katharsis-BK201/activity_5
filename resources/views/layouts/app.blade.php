<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/build/assets/css/app.css')}}">
</head>
<body>
    <header>
        <div class="title">Welcome</div>
        <nav class = "navbar">
            <ul>
                <li><a href="{{route('dashboard')}}">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Services</a></li>
            </ul>
        </nav>
        <form action="{{route('logout')}}" method="POST" class="logout-form">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </header>
    @yield('content')
</body>
</html>