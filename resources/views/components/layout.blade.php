<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel' }}</title>

    <!-- Styles CSS -->
    <link rel="stylesheet" href="/css/app.css">

    <style> @stack('css') </style>

</head>
<body>

    @include('partials.navigation')

    <div class="min-h-screen bg-gray-100">
    
        {{ $slot }}

    </div>

    <!-- Script JS -->
    <script src="/js/app.js"></script>
    @stack('js')
</body>
</html>
