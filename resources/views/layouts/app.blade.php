<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Japan Travel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="background-color: #f4f1ea;">
    <header class="sticky-top mt-4">
        @include('partials.header')
    </header>
    <div>
        @yield('content')
    </div>
    @include('partials.footer')

</body>

</html>
