<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gray-300">
    <main class="container p-12 shadow bg-white rounded max-w-3xl mt-32 mx-auto">
        {{ $slot }}
    </main>

</body>
</html>
