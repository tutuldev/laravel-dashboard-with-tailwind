<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    @vite('resources/css/app.css')
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>
    <header class="bg-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-6">
            <h1 class="text-xl font-bold text-blue-600">BrandName</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-500">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-500">About</a></li>
                    <li><a href="{{ route('services') }}" class="text-gray-700 hover:text-blue-500">Services</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-500">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <h1>Welcome to the Service Page</h1>
</body>
</html>
