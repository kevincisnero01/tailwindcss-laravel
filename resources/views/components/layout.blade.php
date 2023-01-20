<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel' }}</title>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('partials.navigation')

    <div class="container">
        {{ $slot }}
    </div>
    
    <script src="/js/app.js"></script>
</body>
</html>
