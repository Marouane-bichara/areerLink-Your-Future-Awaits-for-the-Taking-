<?php
  require_once "../../../vendor/autoload.php";


session_start();

use App\Controllers\Category\GetCategoryController;
use App\Controllers\Logout\LogoutController;
use App\Controllers\ProfileRecruiter\GetUserInfoControllers;

if ((!isset($_SESSION["idRecruiter"]) && !isset($_SESSION["nameRecruiter"]) && $_SESSION["nameRecruiter"] != "recruiter")) {
    header("Location: ../auth/login.php");
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
  $logoutController = new LogoutController();
  $logoutController->logoutController();
}

$userInformations = new GetUserInfoControllers();
$resaultOfUser = $userInformations->getinformationsController();

$categories = new GetCategoryController();
$resaultCateg = $categories->getCategoriesController();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recruiter Panel</title>
  <link href="../../output.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Navbar -->
  <header class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-xl font-bold text-blue-600">CareerLink</h1>
      <nav class="hidden md:flex space-x-6 items-center">
        <a href="#" class="text-gray-700 hover:text-blue-600">My Jobs</a>
        <a href="#" class="text-gray-700 hover:text-blue-600">Post a Job</a>
        <a href="./profile/profileRecruiter.php" class="text-gray-700 hover:text-blue-600">Profile</a>
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
        <li><a href="#" class="block text-gray-700 hover:text-blue-600">My Jobs</a></li>
        <li><a href="#" class="block text-gray-700 hover:text-blue-600">Post a Job</a></li>
        <li><a href="./profile/profileRecruiter.php" class="block text-gray-700 hover:text-blue-600">Profile</a></li>
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

    <!-- Welcome & Stats Section -->
    <section class="bg-white shadow-md rounded-lg p-6">
      <div class="flex justify-between items-center">
        <div>
          <h2 class="text-2xl font-bold text-gray-800">Welcome, Recruiter!</h2>
          <p class="text-gray-600 mt-2">Manage your recruitment process efficiently and track performance at a glance.</p>
        </div>
        <button id="open-modal" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-blue-500">
                + Add New Offer
            </button>
      </div>
    </section>

    <!-- Quick Stats -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="bg-blue-600 text-white rounded-lg shadow-md p-4">
        <h3 class="text-lg font-bold">Total Jobs</h3>
        <p class="text-4xl font-extrabold mt-2">12</p>
      </div>
      <div class="bg-green-600 text-white rounded-lg shadow-md p-4">
        <h3 class="text-lg font-bold">Applications Received</h3>
        <p class="text-4xl font-extrabold mt-2">234</p>
      </div>
      <div class="bg-yellow-500 text-white rounded-lg shadow-md p-4">
        <h3 class="text-lg font-bold">Active Jobs</h3>
        <p class="text-4xl font-extrabold mt-2">8</p>
      </div>
    </section>

    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-6 w-11/12 max-w-md relative">
        <!-- Close Button -->
        <button id="close-icon" class="absolute top-4 right-4 text-gray-700 hover:text-gray-900 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <h3 class="text-xl font-bold mb-4 text-center">Add New Offer</h3>
        <form action="process_offer.php" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="position" class="block text-gray-700 font-semibold">Position</label>
                <input type="text" id="position" name="position" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-500" required>
            </div>
            <input type="hidden" id="position" name="nameCompany" value="<?php $resaultOfUser["user_name"]?>" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-500" required>

            <div class="mb-4">
                <label for="category" class="block text-gray-700 font-semibold">Category</label>
                <select id="category" name="category" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-500" required>
                    <option value="">Select a Category</option>
                    <?php foreach ($resaultCateg as $category): ?>
                        <option value="<?= htmlspecialchars($category["name"]) ?>"><?= htmlspecialchars($category["name"]) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-4">
                <label for="tags" class="block text-gray-700 font-semibold">Tags</label>
                <select id="tags" name="tags[]" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-500" multiple required>
                    <?php foreach ($tags as $tag): ?>
                        <option value="<?= htmlspecialchars($tag) ?>"><?= htmlspecialchars($tag) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-semibold">Description</label>
                <textarea id="description" name="description" rows="4" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-500" required></textarea>
            </div>
            <div class="mb-4">
                <label for="salary" class="block text-gray-700 font-semibold">Salary</label>
                <input type="number" id="salary" name="salary" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="location" class="block text-gray-700 font-semibold">Location</label>
                <input type="text" id="location" name="location" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-semibold">Image</label>
                <input type="file" id="image" name="image" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-500" accept="image/*" required>
            </div>
            <div class="flex justify-end space-x-4">
                <button type="button" id="close-modal" class="px-4 py-2 bg-gray-400 rounded-md text-white hover:bg-gray-500">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-blue-600 rounded-md text-white hover:bg-blue-700">Add Offer</button>
            </div>
        </form>
    </div>
</div>

    <!-- Recent Applications -->
    <section class="bg-white shadow-md rounded-lg p-6">
      <h3 class="text-xl font-semibold text-gray-800">Recent Applications</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        <!-- Card 1 -->
        <div class="bg-gray-100 rounded-lg shadow-md p-4">
          <h4 class="text-lg font-bold text-gray-800">John Doe</h4>
          <p class="text-gray-600 mt-2">Position: Software Engineer</p>
          <p class="text-gray-600 mt-1">Applied: Jan 5, 2025</p>
          <span class="inline-block bg-green-100 text-green-600 px-3 py-1 rounded-lg text-xs font-semibold mt-3">Pending Review</span>
        </div>
        <!-- Card 2 -->
        <div class="bg-gray-100 rounded-lg shadow-md p-4">
          <h4 class="text-lg font-bold text-gray-800">Jane Smith</h4>
          <p class="text-gray-600 mt-2">Position: Product Manager</p>
          <p class="text-gray-600 mt-1">Applied: Jan 4, 2025</p>
          <span class="inline-block bg-yellow-100 text-yellow-600 px-3 py-1 rounded-lg text-xs font-semibold mt-3">Shortlisted</span>
        </div>
        <!-- Card 3 -->
        <div class="bg-gray-100 rounded-lg shadow-md p-4">
          <h4 class="text-lg font-bold text-gray-800">Alice Johnson</h4>
          <p class="text-gray-600 mt-2">Position: UX Designer</p>
          <p class="text-gray-600 mt-1">Applied: Jan 3, 2025</p>
          <span class="inline-block bg-red-100 text-red-600 px-3 py-1 rounded-lg text-xs font-semibold mt-3">Rejected</span>
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


    const modal = document.getElementById('modal');
    const openModal = document.getElementById('open-modal');
    const closeModal = document.getElementById('close-modal');
    const closeIcon = document.getElementById('close-icon');

    openModal.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    closeModal.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    closeIcon.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
  </script>
</body>
</html>
