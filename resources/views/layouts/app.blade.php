<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>{{config('app.name')}}</title>
</head>
<body>
    @include('components.header')

    <main>
        {{$slot}}
    </main>

    @include('components.footer')

    <script src="{{asset('assets/js/sidebare.js')}}"></script>
    <script src="{{asset('assets/js/counter.js')}}"></script>
    <script src="{{asset('assets/js/actualities.js')}}"></script>
    <script src="{{asset('assets/js/videos.js')}}"></script>
</body>
</html>
