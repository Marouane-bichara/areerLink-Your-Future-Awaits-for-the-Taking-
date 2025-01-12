<?php
require_once "../../../../vendor/autoload.php";

session_start();

use App\Controllers\Logout\LogoutController;
use App\Controllers\Job\GetJobController;

if ((!isset($_SESSION["idAdmin"]) && !isset($_SESSION["nameAdmin"]) && $_SESSION["nameAdmin"] != "admin")) {
    header("Location: ../../auth/login.php");
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
  <title>Manage Jobs</title>
  <link href="../../../output.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById("mobileSidebar");
      sidebar.classList.toggle("hidden");
    }
  </script>
</head>
<body class="bg-gray-100 font-sans">

<div class="flex h-screen">

    <!-- Sidebar -->
    <div class="bg-gray-800 text-white w-64 hidden md:block">
      <div class="p-4 text-center">
        <h2 class="text-xl font-bold">CareerLink</h2>
      </div>
      <nav class="mt-6">
        <a href="../home.php" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
        <a href="../category/index.php" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-list-alt mr-2"></i>Categories</a>
        <a href="../tags/index.php" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-tags mr-2"></i>Tags</a>
        <a href="./index.php" class="block py-2.5 px-4 rounded bg-gray-700"><i class="fas fa-briefcase mr-2"></i>Jobs</a>
        <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-users mr-2"></i>Recruiters</a>

      </nav>
    </div>

    <div class="md:hidden bg-gray-800 text-white p-4">
      <button id="menuToggle" class="block focus:outline-none" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
      </button>
    </div>

    <div id="mobileSidebar" class="bg-gray-800 text-white w-64 p-4 hidden">
      <nav>
        <a href="../home.php" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
        <a href="../category/index.php" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-list-alt mr-2"></i>Categories</a>
        <a href="../tags/index.php" class="block py-2.5 px-4 rounded bg-gray-700"><i class="fas fa-tags mr-2"></i>Tags</a>
        <a href="./index.php" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-briefcase mr-2"></i>Jobs</a>
        <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700"><i class="fas fa-users mr-2"></i>Recruiters</a>
        <form method="POST" class="mt-6">
          <button type="submit" name="logout" class="block py-2.5 px-4 rounded bg-red-600 hover:bg-red-700 text-white w-full text-left">
            <i class="fas fa-sign-out-alt mr-2"></i>Logout
          </button>
        </form>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <!-- Page Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-gray-700"><i class="fas fa-briefcase mr-2"></i>Manage Jobs</h1>
        </div>

        <!-- Jobs List -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php if (!empty($jobs)): ?>
                <?php foreach ($jobs as $job): ?>
                    <div class="bg-white p-4 rounded shadow hover:shadow-lg transition">
                        <!-- Job Post Image -->
                        <img src="<?php echo htmlspecialchars($job['post_image']); ?>" alt="Job Post Image" class="w-full h-40 rounded-t object-cover">

                        <!-- Company Info -->
                        <div class="flex items-center mt-4">
                            <img src="<?php echo htmlspecialchars($job['company_logo']); ?>" alt="Company Logo" class="w-12 h-12 rounded-full">
                            <div class="ml-3">
                                <h3 class="text-gray-700 font-semibold"><?php echo htmlspecialchars($job['company_name']); ?></h3>
                                <p class="text-sm text-gray-500"><?php echo htmlspecialchars($job['category']); ?></p>
                            </div>
                        </div>

                        <!-- Job Details -->
                        <h2 class="mt-4 text-lg font-bold text-gray-800"><?php echo htmlspecialchars($job['position']); ?></h2>
                        <p class="text-gray-600 text-sm mt-2"><?php echo htmlspecialchars($job['description']); ?></p>
                        <div class="mt-4">
                            <p class="text-gray-700"><i class="fas fa-map-marker-alt mr-2"></i>Location: <?php echo htmlspecialchars($job['location']); ?></p>
                            <p class="text-gray-700"><i class="fas fa-dollar-sign mr-2"></i>Salary: <?php echo htmlspecialchars($job['salary']); ?></p>
                        </div>

                        <!-- Tags -->
                        <div class="mt-4 flex flex-wrap gap-2">
                            <?php foreach ($job['tags'] as $tag): ?>
                                <span class="bg-blue-100 text-blue-600 text-xs px-2 py-1 rounded"><?php echo htmlspecialchars($tag); ?></span>
                            <?php endforeach; ?>
                        </div>

                        <!-- Delete Button -->
                        <form method="POST" action="./delete.php" class="mt-4" onsubmit="return confirm('Are you sure you want to delete this job?');">
                            <input type="hidden" name="jobId" value="<?php echo htmlspecialchars($job['id']); ?>">
                            <button type="submit" class="text-red-500 hover:text-red-700 w-full flex justify-center py-2">
                                <i class="fas fa-trash mr-2"></i>Delete Job
                            </button>
                        </form>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-gray-600">No jobs found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

</body>
</html>
