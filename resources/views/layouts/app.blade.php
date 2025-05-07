<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="veiewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="home">MyApp</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"> Home </a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}"> Profile </a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about')}}"> About </a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact')}}"> Contact </a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
