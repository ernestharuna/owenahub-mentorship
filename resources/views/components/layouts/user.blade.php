<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#F6A700">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard | OwenaHub: The Learner's Hub</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HSLS7K2448"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HSLS7K2448');
    </script>
</head>

<body>
    <div id="app">
        <div>
            <div class="container-fluid bg-f2">
                <div class="row">
                    <div class="col-lg-2 col-md-3 d-none d-lg-block sticky-top"
                        style="height: 100vh; overflow-y: auto;">
                        <x-user.side-nav /> <!-- Navigation for Desktops -->
                    </div>
                    <div class="col-lg-9 col-md-12">
                        {{ $slot }}
                    </div>
                </div>
            </div>
            <x-session-message /> <!-- Session messages-->
            <x-user.mobile-nav /> <!-- Navigation for mobile phones -->
        </div>
    </div>
</body>

</html>
