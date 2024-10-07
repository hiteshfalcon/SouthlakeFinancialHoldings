<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header') <!-- Include header here -->
    <!-- Other head elements like meta tags, title, etc. -->
</head>
<body>
    @yield('content') <!-- Page-specific content goes here -->

    @include('partials.footer') <!-- Include footer here -->

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/purecounter.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
