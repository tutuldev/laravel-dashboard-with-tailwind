<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel + React</title>
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css') <!-- Tailwind CSS যোগ করুন -->
    <!-- React app.js ফাইল -->
    @vite('resources/js/app.jsx') <!-- React ফাইল যোগ করুন -->
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

    <!-- React কম্পোনেন্ট সেকশন -->
    <section class="text-center py-20 bg-blue-500 text-white">
        <h2 class="text-4xl font-bold mb-4">Welcome to Our Website</h2>
        <p class="text-lg mb-6">We offer amazing services to boost your business.</p>
        <a href="{{ route('services') }}" class="bg-white text-blue-500 px-6 py-2 rounded-full font-bold hover:bg-gray-200">Get Started</a>
    </section>

    <!-- React দ্বারা ফিচার সেকশন রেন্ডার হবে -->
    <div id="react-root"></div> <!-- React এখানে রেন্ডার হবে -->

    <!-- স্ট্যাটিক ফুটার -->
    <footer class="bg-gray-800 text-white text-center py-6">
        <p>&copy; 2025 BrandName. All rights reserved.</p>
    </footer>
</body>
</html>
