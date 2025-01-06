<?php
require_once "../../../vendor/autoload.php";

session_start();

use App\Controllers\Logout\LogoutController;

if ((!isset($_SESSION["id"]) && !isset($_SESSION["role"]) && $_SESSION["role"] != "recruiter")) {
    header("Location: ../auth/login.php");
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    $logoutController = new LogoutController();
    $logoutController->logoutController();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recruiter Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <header class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-xl font-bold text-blue-600">CareerLink</h1>
      <nav class="hidden md:flex space-x-6 items-center">
        <a href="./home.php" class="text-gray-700 hover:text-blue-600">Home</a>
        <a href="./profileRecruiter.php" class="text-gray-700 hover:text-blue-600">Profile</a>
        <form method="POST" class="inline">
          <button type="submit" name="logout" class="py-2 px-4 rounded bg-red-600 hover:bg-red-700 text-white">
            Logout
          </button>
        </form>
      </nav>
      <button id="menu-toggle" class="md:hidden flex items-center text-gray-700 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
      </button>
    </div>

    <!-- Responsive Menu -->
    <nav id="mobile-menu" class="hidden bg-white shadow-md">
      <ul class="space-y-4 p-4">
        <li><a href="./home.php" class="block text-gray-700 hover:text-blue-600">Dashboard</a></li>
        <li><a href="./profileRecruiter.php" class="block text-gray-700 hover:text-blue-600">Profile</a></li>
        <li>
          <form method="POST" class="mt-2">
            <button type="submit" name="logout" class="block py-2.5 px-4 rounded bg-red-600 hover:bg-red-700 text-white w-full text-left">
              Logout
            </button>
          </form>
        </li>
      </ul>
    </nav>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto px-4 py-8 space-y-8">

    <!-- Profile Information -->
    <section class="bg-white shadow-md rounded-lg p-6">
      <div class="flex flex-col md:flex-row items-center md:items-start space-y-6 md:space-y-0 md:space-x-8">
        <!-- Profile Picture -->
        <div class="flex-shrink-0">
          <img src="https://via.placeholder.com/150" alt="Profile Picture" class="w-32 h-32 rounded-full shadow-md">
        </div>
        <!-- Profile Details -->
        <div class="flex-grow">
          <h2 class="text-2xl font-bold text-gray-800">John Recruiter</h2>
          <p class="text-gray-600 mt-2">Email: john.recruiter@example.com</p>
          <p class="text-gray-600 mt-1">Phone: +123 456 7890</p>
          <p class="text-gray-600 mt-1">Location: New York, USA</p>
          <a href="edit-profile.php" class="inline-block mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-blue-500">
            Edit Profile
          </a>
        </div>
      </div>
    </section>

    <!-- Company Information -->
    <section class="bg-white shadow-md rounded-lg p-6">
      <h3 class="text-xl font-semibold text-gray-800">Company Information</h3>
      <div class="mt-4">
        <p class="text-gray-600"><span class="font-semibold text-gray-800">Company Name:</span> Tech Solutions Inc.</p>
        <p class="text-gray-600 mt-2"><span class="font-semibold text-gray-800">Website:</span> <a href="#" class="text-blue-600 hover:underline">www.techsolutions.com</a></p>
        <p class="text-gray-600 mt-2"><span class="font-semibold text-gray-800">Industry:</span> Software Development</p>
        <p class="text-gray-600 mt-2"><span class="font-semibold text-gray-800">Description:</span> Tech Solutions is a leading provider of innovative technology solutions, helping businesses succeed in the digital era.</p>
      </div>
    </section>

    <!-- Recent Jobs Posted -->
    <section class="bg-white shadow-md rounded-lg p-6">
      <h3 class="text-xl font-semibold text-gray-800">Recent Jobs Posted</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        <!-- Job Card 1 -->
        <div class="bg-gray-100 rounded-lg shadow-md p-4">
          <h4 class="text-lg font-bold text-gray-800">Software Engineer</h4>
          <p class="text-gray-600 mt-2">Location: Remote</p>
          <p class="text-gray-600 mt-1">Posted: Jan 5, 2025</p>
          <a href="#" class="text-blue-600 hover:underline mt-3 block">View Details</a>
        </div>
        <!-- Job Card 2 -->
        <div class="bg-gray-100 rounded-lg shadow-md p-4">
          <h4 class="text-lg font-bold text-gray-800">Product Manager</h4>
          <p class="text-gray-600 mt-2">Location: New York, USA</p>
          <p class="text-gray-600 mt-1">Posted: Jan 3, 2025</p>
          <a href="#" class="text-blue-600 hover:underline mt-3 block">View Details</a>
        </div>
        <!-- Job Card 3 -->
        <div class="bg-gray-100 rounded-lg shadow-md p-4">
          <h4 class="text-lg font-bold text-gray-800">UX Designer</h4>
          <p class="text-gray-600 mt-2">Location: San Francisco, USA</p>
          <p class="text-gray-600 mt-1">Posted: Jan 1, 2025</p>
          <a href="#" class="text-blue-600 hover:underline mt-3 block">View Details</a>
        </div>
      </div>
    </section>

  </main>

  <!-- Script for Mobile Menu -->
  <script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
