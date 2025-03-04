<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>
        @if (trim($__env->yieldContent('title')))
        @yield('title') | {{ config('app.name', 'Laravel') }}
        @else
        {{ config('app.name', 'Laravel') }}
        @endif
    </title>
    <meta name="theme-color" content="#ffffff">
    @stack('before-styles')
    @vite('resources/sass/app.scss')
    @stack('after-styles')
</head>

<body>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <!-- Header block -->
        @include('layouts.includes.header')
        <!-- / Header block -->

        <div class="body flex-grow-1">
            <div class="container-lg">
                <!-- Errors block -->
                @include('layouts.includes.errors')
                <!-- / Errors block -->
                <div class="mb-4">@yield('content')</div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    @stack('before-scripts')

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
    @vite('resources/js/app.js')

    @stack('after-scripts')
    <!-- / Scripts -->

</body>

</html>