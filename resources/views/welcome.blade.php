<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite('resources/css/app.css')
</head>

<body class="antialiased">

    <div class="text-center bg-blue-500 text-white p-4">
        Hello, Tailwind CSS!
    </div>
    <div class="bg-blue-500 text-white p-4">
        Tailwind CSS is working!
    </div>



    @vite('resources/js/app.js')
</body>

</html>
