<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Default Title' }}</title>
    <script src="https://kit.fontawesome.com/4c8442ec8f.js" crossorigin="anonymous"></script>
</head>

<body>
    <x-navbar />
    <div class="container mx-auto px-4 my-8">
        @yield('content')
    </div>
</body>

</html>
