<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Net</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-center">
            <li class="p-3">
                <a href="">Home</a>
            </li>
            <li class="p-3">
                <a href="">Dashboard</a>
            </li>
            <li class="p-3">
                <a href="">Trailers</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>