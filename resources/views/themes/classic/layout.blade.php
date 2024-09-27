<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('themes/classic/style.css') }}">
    <title>Classic Theme</title>
</head>
<body>
<nav>
    <a class="classic-btn" href="{{ route('home') }}">Home</a> |
    <a class="classic-btn" href="{{ route('contact') }}">Contact</a>
</nav>

<div class="content">
    @yield('content')
</div>
</body>
</html>
