<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
    @livewireStyles
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body>
<nav class="bg-gray-800 p-4 text-white">
    <div class="container mx-auto flex items-center justify-start">
        <!-- Navigation Links -->
        <a href="/" class="text-xl font-semibold px-3 py-2 rounded hover:bg-gray-700">Home</a>

        @guest
            <a href="{{ route('login') }}" class="px-3 py-2 rounded hover:bg-gray-700">Login</a>
            <a href="{{ route('register') }}" class="px-3 py-2 rounded hover:bg-gray-700">Register</a>
        @else
            <a href="{{ route('company.create') }}" class="px-3 py-2 rounded hover:bg-gray-700">Create Company</a>
        @endguest
    </div>
</nav>

{{ $slot }}
@livewireScripts
</body>
</html>
