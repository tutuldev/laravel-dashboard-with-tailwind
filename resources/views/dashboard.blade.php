{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard with Fixed Top Navbar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="flex h-screen">
    <!-- Sidebar -->
    <div id="sidebar" class="bg-white w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out shadow-md">
      <a href="#" class="text-black flex items-center space-x-2 px-4">
        <span class="text-2xl font-extrabold">Dashboard</span>
      </a>

      <nav class="mt-10 space-y-1">
        <a href="/" class="block py-2.5 px-4 rounded hover:bg-blue-500 hover:text-white">Home</a>

        <!-- Dropdown Item -->
        <div>
          <button class="flex justify-between items-center w-full py-2.5 px-4 rounded hover:bg-blue-500 hover:text-white" onclick="toggleDropdown('dropdown1')">
            <span>Categories</span>
            <svg class="w-4 h-4 transform transition-transform" id="dropdown1-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div id="dropdown1" class="ml-6 mt-1 hidden space-y-1">
            <a href="#" class="block py-2 px-4 text-sm rounded hover:bg-gray-200">Web Applications</a>
            <a href="#" class="block py-2 px-4 text-sm rounded hover:bg-gray-200">Mobile Applications</a>
            <a href="#" class="block py-2 px-4 text-sm rounded hover:bg-gray-200">Robotics</a>
            <a href="#" class="block py-2 px-4 text-sm rounded hover:bg-gray-200">Securities</a>
          </div>
        </div>
        <div>
          <button class="flex justify-between items-center w-full py-2.5 px-4 rounded hover:bg-blue-500 hover:text-white" onclick="toggleDropdown('dropdown2')">
            <span>Language</span>
            <svg class="w-4 h-4 transform transition-transform" id="dropdown2-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div id="dropdown2" class="ml-6 mt-1 hidden space-y-1">
            <a href="#" class="block py-2 px-4 text-sm rounded hover:bg-gray-200">PHP</a>
            <a href="#" class="block py-2 px-4 text-sm rounded hover:bg-gray-200">Python</a>
          </div>
        </div>
        <div>
          <button class="flex justify-between items-center w-full py-2.5 px-4 rounded hover:bg-blue-500 hover:text-white" onclick="toggleDropdown('dropdown3')">
            <span>Framework</span>
            <svg class="w-4 h-4 transform transition-transform" id="dropdown3-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div id="dropdown3" class="ml-6 mt-1 hidden space-y-1">

            <a href="#" class="block py-2 px-4 text-sm rounded hover:bg-gray-200">ASP.NET Core</a>
            <a href="#" class="block py-2 px-4 text-sm rounded hover:bg-gray-200">Spring Boot</a>
            <a href="#" class="block py-2 px-4 text-sm rounded hover:bg-gray-200">Express.js</a>
            <a href="#" class="block py-2 px-4 text-sm rounded hover:bg-gray-200">Django</a>
            <a href="#" class="block py-2 px-4 text-sm rounded hover:bg-gray-200">Ruby on Rails</a>
            <a href="#" class="block py-2 px-4 text-sm rounded hover:bg-gray-200">Lavarel</a>
            <a href="#" class="block py-2 px-4 text-sm rounded hover:bg-gray-200">FastAPI</a>
          </div>
        </div>

        <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-500 hover:text-white">Settings</a>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
      <!-- Fixed Top Navbar -->
      <header class="flex justify-between items-center bg-white p-4 shadow-md fixed top-0 left-0 right-0 z-10">
        <button id="menu-btn" class="text-gray-600 md:hidden focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
        <h1 class="text-xl font-semibold">Dashboard</h1>

        <!-- Profile Section -->
        <div class="relative">
          <button id="profile-btn" class="flex items-center space-x-2 focus:outline-none">
            <img class="w-8 h-8 rounded-full" src="https://fastly.picsum.photos/id/866/200/300.jpg?hmac=rcadCENKh4rD6MAp6V_ma-AyWv641M4iiOpe1RyFHeI" alt="Profile Picture" />
            <span>{{ Auth::user()->name }}</span>
            <svg class="w-4 h-4 transform transition-transform" id="profile-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div id="profile-dropdown" class="absolute right-0 mt-2 w-48 bg-white shadow-md rounded-md hidden">

              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
              </form>
          </div>
        </div>
      </header>

      <!-- Content -->
      <main class="flex-1 p-6 pt-20 overflow-y-auto">
        <h2 class="text-2xl font-semibold mb-6">Welcome Back!</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-white rounded-lg p-6 shadow">Card 1</div>
          <div class="bg-white rounded-lg p-6 shadow">Card 2</div>
          <div class="bg-white rounded-lg p-6 shadow">Card 3</div>
        </div>
      </main>
    </div>
  </div>

  <!-- Scripts -->
  <script>
    const btn = document.getElementById('menu-btn');
    const sidebar = document.getElementById('sidebar');

    btn.addEventListener('click', () => {
      sidebar.classList.toggle('-translate-x-full');
    });

    function toggleDropdown(id) {
      const dropdown = document.getElementById(id);
      const icon = document.getElementById(`${id}-icon`);
      dropdown.classList.toggle('hidden');
      icon.classList.toggle('rotate-180');
    }

    // Profile dropdown toggle
    const profileBtn = document.getElementById('profile-btn');
    const profileDropdown = document.getElementById('profile-dropdown');
    const profileIcon = document.getElementById('profile-icon');

    profileBtn.addEventListener('click', () => {
      profileDropdown.classList.toggle('hidden');
      profileIcon.classList.toggle('rotate-180');
    });
  </script>
</body>
</html>
