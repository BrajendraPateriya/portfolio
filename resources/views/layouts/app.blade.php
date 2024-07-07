<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/portfolio.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.theme.head')
    <div class="d-flex">
        <div class="col-md-3 vh-100 position-fixed">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-9 offset-md-3">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
    <footer class="text-center p-5">
        <span>&copy; 2024 Brajendra Pateriya. All rights reserved.</span>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-S2nfI9i3KPnPzKZCD84D5lm/DkaZ4CuCFFSXgNTKpTWv4zWS80zQ2GL/8r9pVSL8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-DBjhmceV4vnYBfGErqlqnvTBlnKA6tB9CENlklYO7c4rI4Gg8GnhB9v1WTRF5jWv" crossorigin="anonymous"></script>
</body>
</html>
