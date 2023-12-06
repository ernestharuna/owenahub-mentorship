<!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#F6A700">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>OwenaHub - Admin Panel</title>

    <!-- include libraries(jQuery, bootstrap) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- include summernote css/js-->
    <link href="{{ asset('summernote/dist/summernote-lite.min.css') }}" rel="stylesheet">
    <script src="{{ asset('summernote/dist/summernote-lite.min.js') }}"></script>

    <!-- Vite Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <x-admin.navbar /> <!-- Header --->
        <main>
            {{ $slot }}
            <x-session-message /> <!-- Session messages-->
        </main>
    </div>
</body>

</html>
