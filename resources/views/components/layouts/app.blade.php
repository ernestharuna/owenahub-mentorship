<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#F6A700">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <title>
        {{ $title ?? 'Empowering learners to thrive through mentorship - OwenaHub' }}
    </title>

    <!-- SEO SHIT -->
    <meta name="description"
        content="We offer a vibrant platform for learners to gain career insights from experienced mentors.">
    <meta name="keywords" content="mentorship, career, guidance, learning, newbie, tech, learn">
    <meta name="author" content="Ernest Haruna">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="The Learners Hub - Empowering learners to thrive through mentorship.">
    <meta property="og:description"
        content="We offer a vibrant platform for learners to gain career insights from experienced mentors.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://owenahub.com">
    <meta property="og:image" content="https://owenahub.com/images/logo.png">
    <meta property="og:image:alt" content="The Learners Hub">
    <meta name="twitter:card" content="https://owenahub.com/images/logo.png">
    <meta name="twitter:title" content="The Learners Hub - Empowering learners to thrive through mentorship">
    <meta name="twitter:description"
        content="We offer a vibrant platform for learners to gain career insights from experienced mentors.">
    <meta name="twitter:image" content="https://www.owenahub.com/images/logo.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts --> <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HSLS7K2448"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HSLS7K2448');
    </script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <x-guest.navbar /> <!-- Header --->
        <main>
            {{ $slot }}
            <x-session-message /> <!-- Session messages-->
        </main>
        <x-footer /> <!-- Footer --->
    </div>
</body>

</html>
