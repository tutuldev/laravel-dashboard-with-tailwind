<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body class="bg-gray-100">
        <header class="bg-white shadow-md py-4">
            <div class="container mx-auto flex justify-between items-center px-6">
                <h1 class="text-xl font-bold text-blue-600">BrandName</h1>
                <nav>
                    <ul class="flex space-x-6">
                        <li><a href="#" class="text-gray-700 hover:text-blue-500">Home</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-blue-500">About</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-blue-500">Services</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-blue-500">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="text-center py-20 bg-blue-500 text-white">
            <h2 class="text-4xl font-bold mb-4">Welcome to Our Website</h2>
            <p class="text-lg mb-6">We offer amazing services to boost your business.</p>
            <a href="#" class="bg-white text-blue-500 px-6 py-2 rounded-full font-bold hover:bg-gray-200">Get Started</a>
        </section>

        <section class="container mx-auto py-16 px-6 grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold text-gray-800">Feature One</h3>
                <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold text-gray-800">Feature Two</h3>
                <p class="text-gray-600 mt-2">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold text-gray-800">Feature Three</h3>
                <p class="text-gray-600 mt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            </div>
        </section>

        <footer class="bg-gray-800 text-white text-center py-6">
            <p>&copy; 2025 BrandName. All rights reserved.</p>
        </footer>
    </body>
</html>
