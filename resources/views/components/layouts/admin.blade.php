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

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>

<body>
    <div id="app">
        <!-- Header --->
        <x-admin.navbar />
        <main>
            {{ $slot }}

            <!-- Session messages-->
            @if (session('status'))
                <x-success-msg />
            @endif
            @if (session('error'))
                <x-error-msg />
            @endif
        </main>
    </div>
    <script>
        document.getElementById('dismiss-button').addEventListener('click', function() {
            document.getElementById('flash-message').style.display = 'none';
        });
    </script>
</body>


</html>
