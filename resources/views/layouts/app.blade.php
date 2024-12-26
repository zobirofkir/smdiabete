<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta Tags -->
    <meta name="description" content="{{ config('app.description') }}">
    <meta name="keywords" content="{{ config('app.keywords') }}">
    <meta name="author" content="{{ config('app.author') }}">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:description" content="{{ config('app.description') }}">
    <meta property="og:image" content="{{ asset(config('app.image')) }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name') }}">
    <meta name="twitter:description" content="{{ config('app.description') }}">
    <meta name="twitter:image" content="{{ asset(config('app.image')) }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Link to your favicon -->
    <link rel="icon" href="{{ asset(config('app.favicon')) }}" type="image/x-icon">

    <!-- Stylesheets -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" rel="stylesheet">

    <title>{{ config('app.name') }}</title>
</head>

<body class="min-h-screen flex flex-col fade-in">
    @include('components.header')

    <main>
        {{$slot}}
    </main>

    @include('components.footer')

    <script src="{{asset('assets/js/sidebare.js')}}"></script>
    <script src="{{asset('assets/js/counter.js')}}"></script>
    <script src="{{asset('assets/js/abouts.js')}}"></script>
    <script src="{{asset('assets/js/galleries.js')}}"></script>
    <script src="{{asset('assets/js/inscriptions.js')}}"></script>
    <script src="{{asset('assets/js/masterclass.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>
</html>
