<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Kemerdekaan RI 80' }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/icon-august.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased text-gray-800 bg-white selection:bg-red-600/20">
    <div id="app"></div>
</body>

</html>
