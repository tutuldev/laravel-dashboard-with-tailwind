
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard with Fixed Top Navbar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/github-dark.min.css">

  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="flex h-screen">
    <!-- Sidebar -->

    @include('backend.layouts.sidebar')


    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
      <!-- Fixed Top Navbar -->

      @include('backend.layouts.topbar')

      <!-- Content -->
      <main class="flex-1 p-6 pt-20 overflow-y-auto">
        @yield('content')
      </main>
    </div>
  </div>

  {{-- highliter js  --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>

  @stack('scripts')
  {{-- highliter js  --}}
  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
        hljs.highlightAll(); // Initialize syntax highlighting
    });
</script>
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
