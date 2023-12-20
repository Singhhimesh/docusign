<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    <div id="app" class="main-wrapper">
        @include('partials.nav')
        
        <div class="page-wrapper">
            @include('partials.top-bar')

            @yield('content')

            <!-- partial:partials/ -->
            @include('partials.footer')
            <!-- partial -->
        </div>
    </div>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('progressbar.min.js') }}"></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
</body>

</html>
