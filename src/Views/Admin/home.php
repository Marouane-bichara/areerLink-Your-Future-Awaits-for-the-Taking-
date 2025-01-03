<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById("mobileSidebar");
      sidebar.classList.toggle("hidden");
    }
  </script>
</head>
<body class="bg-gray-100 font-sans">

  <!-- Main Container -->
  <div class="flex h-screen">

    <!-- Sidebar -->
    <div class="bg-gray-800 text-white w-64 hidden md:block">
      <div class="p-4 text-center">
        <h2 class="text-xl font-bold">CareerLink</h2>
      </div>
      <nav class="mt-6">
        <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
        <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-list-alt mr-2"></i>Categories</a>
        <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-tags mr-2"></i>Tags</a>
        <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-briefcase mr-2"></i>Jobs</a>
        <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-users mr-2"></i>Recruiters</a>
      </nav>
    </div>

    <!-- Mobile Sidebar -->
    <div class="md:hidden bg-gray-800 text-white p-4">
      <button id="menuToggle" class="block focus:outline-none" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
      </button>
    </div>

    <!-- Mobile Sidebar Menu -->
    <div id="mobileSidebar" class="bg-gray-800 text-white w-64 p-4 hidden">
      <nav>
        <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
        <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-list-alt mr-2"></i>Categories</a>
        <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-tags mr-2"></i>Tags</a>
        <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-briefcase mr-2"></i>Jobs</a>
        <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-users mr-2"></i>Recruiters</a>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">
      <div class="flex justify-between items-center">
        <h1 class="text-2xl font-semibold text-gray-700"><i class="fas fa-chart-line mr-2"></i>Admin Dashboard</h1>
      </div>

      <!-- Dashboard Stats -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        <div class="bg-white p-4 rounded shadow">
          <h2 class="text-lg font-semibold text-gray-700"><i class="fas fa-briefcase mr-2"></i>Jobs</h2>
          <p class="text-3xl font-bold text-gray-900">120</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
          <h2 class="text-lg font-semibold text-gray-700"><i class="fas fa-list-alt mr-2"></i>Categories</h2>
          <p class="text-3xl font-bold text-gray-900">12</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
          <h2 class="text-lg font-semibold text-gray-700"><i class="fas fa-users mr-2"></i>Recruiters</h2>
          <p class="text-3xl font-bold text-gray-900">45</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
