<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="shortcut icon" href="{{ asset('images/card_back.jpg') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-4.3.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Random Card</title>
</head>
<body>
    <header>
        <h1>Random Card Chance Calculator</h1>
    </header>
    
    <main class="container">
        @yield('content')
    </main>

    <footer>
        <span>Random Card &copy; {{ date('Y') }}</span>
    </footer>

    <!-- [Load JS] -->
    <script src="{{ asset('js/bootstrap-4.3.1/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>