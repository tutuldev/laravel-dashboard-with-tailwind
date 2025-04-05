<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us - Laravel + React</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS যোগ করুন -->
</head>
<body class="bg-gray-100">
    <!-- স্ট্যাটিক হেডার -->
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

    <!-- About Us সেকশন -->
    <section class="container mx-auto py-16 px-6">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">About Us</h2>
        <p class="text-lg text-gray-600 mb-6">We are a passionate team committed to providing innovative solutions for your business. Our goal is to help you succeed and grow.</p>
        <p class="text-lg text-gray-600">We specialize in various services, from web development to digital marketing, and aim to provide the best quality services to our clients.</p>
    </section>

    <!-- স্ট্যাটিক ফুটার -->
    <footer class="bg-gray-800 text-white text-center py-6">
        <p>&copy; 2025 BrandName. All rights reserved.</p>
    </footer>
</body>
</html>
