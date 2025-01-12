<?php
require_once "../../../../vendor/autoload.php";

session_start();

use App\Controllers\Logout\LogoutController;
use App\Controllers\ProfileRecruiter\GetUserInfoControllers;

if ((!isset($_SESSION["idRecruiter"]) && !isset($_SESSION["nameRecruiter"]) && $_SESSION["nameRecruiter"] != "recruiter")) {
    header("Location: ../../auth/login.php");
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    $logoutController = new LogoutController();
    $logoutController->logoutController();
}

$userInformations = new GetUserInfoControllers();
$resaultOfUser = $userInformations->getinformationsController();
$resaultMoreInfo = $userInformations->getDeatilsInofrmations();






?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recruiter Profile</title>
  <link href="../../../output.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

  <header class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-xl font-bold text-blue-600">CareerLink</h1>
      <nav class="hidden md:flex space-x-6 items-center">
        <a href="../home.php" class="text-gray-700 hover:text-blue-600">Home</a>
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

    <nav id="mobile-menu" class="hidden bg-white shadow-md">
      <ul class="space-y-4 p-4">
        <li><a href="../home.php" class="block text-gray-700 hover:text-blue-600">Home</a></li>
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

  <main class="container mx-auto px-4 py-8 space-y-8">

    <section class="bg-white shadow-md rounded-lg p-6">
      <div class="flex flex-col md:flex-row items-center md:items-start space-y-6 md:space-y-0 md:space-x-8">
        <div class="flex-shrink-0">
          <img id="profile-pic" src="https://secure.gravatar.com/avatar/72837b294fcfdf58ec10724655a7561c67c273507312adf5673226094315f3a0?s=100&d=retro&r=g" alt="Profile Picture" class="w-32 h-32 rounded-full shadow-md">
        </div>
        <div class="flex-grow">
          <h2 class="text-2xl font-bold text-gray-800"><?php echo $resaultOfUser["user_name"]?></h2>
          <p class="text-gray-600 mt-2">Email: <?php echo $resaultOfUser["email"]?></p>
          <p class="text-gray-600 mt-1">Phone: <?php echo $resaultOfUser["Phone_Number"]?></p>
          <p class="text-gray-600 mt-1">Location: <?php echo $resaultOfUser["location"]?></p>
          <button id="edit-profile" class="inline-block mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-blue-500">
            Edit Profile
          </button>
        </div>
      </div>
    </section>

    <div id="edit-modal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
      <div class="bg-white rounded-lg overflow-hidden shadow-xl w-11/12 md:w-1/2">
        <div class="px-4 py-3 text-right border-b">
          <button id="close-modal" class="text-gray-500 hover:text-gray-700">&times;</button>
        </div>
        <div class="p-4">
          <h3 class="text-lg font-semibold">Edit Profile</h3>
          <form id="edit-form" action="./edit.php" method="POST" class="space-y-4 mt-4">
            <div>
              <label for="edit-name" class="block text-sm font-medium text-gray-700">Name</label>
              <input type="text" id="edit-name" name="userName" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" value="<?php echo $resaultOfUser["user_name"]?>">
            </div>
            <div>
              <label for="edit-email" class="block text-sm font-medium text-gray-700">Email</label>
              <input type="email" id="edit-email" name="userEmail" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" value="<?php echo $resaultOfUser["email"]?>">
            </div>
            <div>
              <label for="edit-phone" class="block text-sm font-medium text-gray-700">Phone</label>
              <input type="tel" id="edit-phone" name="userPhone" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" value="<?php echo $resaultOfUser["Phone_Number"]?>">
            </div>
            <div>
              <label for="edit-location" class="block text-sm font-medium text-gray-700">Location</label>
              <input type="text" id="edit-location" name="userLocation" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" value="<?php echo $resaultOfUser["location"]?>">
            </div>
            <!-- <div>
              <label for="edit-picture" class="block text-sm font-medium text-gray-700">Profile Picture</label>
              <input type="file" id="edit-picture" class="mt-1 block w-full text-gray-700">
            </div> -->
            <div class="text-right">
              <button type="submit" name="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>




    <div id="edit-modal-moreinfos" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
      <div class="bg-white rounded-lg overflow-hidden shadow-xl w-11/12 md:w-1/2">
        <div class="px-4 py-3 text-right border-b">
          <button id="close-modal-moreinfos" class="text-gray-500 hover:text-gray-700">&times;</button>
        </div>
        <div class="p-4">
          <h3 class="text-lg font-semibold">Add More Informations</h3>
          <form id="edit-form" action="./add.php" method="POST" class="space-y-4 mt-4">
            <div>
              <label for="edit-Website" class="block text-sm font-medium text-gray-700">Website</label>
              <input type="text" id="edit-name" name="edit-Website" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" >
            </div>
            <div>
              <label for="edit-industry" class="block text-sm font-medium text-gray-700">Industry</label>
              <input type="text" id="edit-email" name="edit-industry" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
            </div>
            <div>
              <label for="edit-Description" class="block text-sm font-medium text-gray-700">Description</label>
              <input type="tel" id="edit-phone" name="edit-Description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
            </div>

            <!-- <div>
              <label for="edit-picture" class="block text-sm font-medium text-gray-700">Profile Picture</label>
              <input type="file" id="edit-picture" class="mt-1 block w-full text-gray-700">
            </div> -->
            <div class="text-right">
              <button type="submit" name="submitEdit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <section class="bg-white shadow-md rounded-lg p-6">
      <h3 class="text-xl font-semibold text-gray-800">Company Information</h3>
      <div class="mt-4">
        <p class="text-gray-600"><span class="font-semibold text-gray-800">Company Name:</span> <?php echo $resaultOfUser["user_name"]?></p>
        <p class="text-gray-600 mt-2"><span class="font-semibold text-gray-800">Website:</span> <a href="#" class="text-blue-600 hover:underline"><?php if(!$resaultMoreInfo){echo "Add New Informations";} else{echo $resaultMoreInfo["website"];}?></a></p>
        <p class="text-gray-600 mt-2"><span class="font-semibold text-gray-800">Industry: </span><?php if(!$resaultMoreInfo){echo "Add New Informations";} else{echo $resaultMoreInfo["industry"];}?></p>
        <p class="text-gray-600 mt-2"><span class="font-semibold text-gray-800">Description: </span><?php if(!$resaultMoreInfo){echo "Add New Informations";} else{echo $resaultMoreInfo["description	"];}?></p>
      </div>
      <button id="edit-profile-moreinfos" class="inline-block mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-blue-500">
            Add to Profile
          </button>
    </section>

    <section class="bg-white shadow-md rounded-lg p-6">
      <h3 class="text-xl font-semibold text-gray-800">Recent Jobs Posted</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">

        <div class="bg-gray-100 rounded-lg shadow-md p-4">
          <h4 class="text-lg font-bold text-gray-800">Software Engineer</h4>
          <p class="text-gray-600 mt-2">Location: Remote</p>
          <p class="text-gray-600 mt-1">Posted: Jan 5, 2025</p>
          <a href="#" class="text-blue-600 hover:underline mt-3 block">View Details</a>
        </div>

        <div class="bg-gray-100 rounded-lg shadow-md p-4">
          <h4 class="text-lg font-bold text-gray-800">Product Manager</h4>
          <p class="text-gray-600 mt-2">Location: New York, USA</p>
          <p class="text-gray-600 mt-1">Posted: Jan 3, 2025</p>
          <a href="#" class="text-blue-600 hover:underline mt-3 block">View Details</a>
        </div>

        <div class="bg-gray-100 rounded-lg shadow-md p-4">
          <h4 class="text-lg font-bold text-gray-800">UX Designer</h4>
          <p class="text-gray-600 mt-2">Location: San Francisco, USA</p>
          <p class="text-gray-600 mt-1">Posted: Jan 1, 2025</p>
          <a href="#" class="text-blue-600 hover:underline mt-3 block">View Details</a>
        </div>
      </div>
    </section>

  </main>


  <script>
  const menuToggle = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  

  const editProfileButton = document.getElementById('edit-profile');
  const editProfileMoreinfosButton = document.getElementById('edit-profile-moreinfos');


  const editModal = document.getElementById('edit-modal');
  const editModalMoreinfos = document.getElementById('edit-modal-moreinfos');
  

  const closeModalButton = document.getElementById('close-modal');
  const closeModalMoreinfosButton = document.getElementById('close-modal-moreinfos');

  menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });


  editProfileButton.addEventListener('click', () => {
    editModal.classList.remove('hidden');
  });


  editProfileMoreinfosButton.addEventListener('click', () => {
    editModalMoreinfos.classList.remove('hidden');
  });


  closeModalButton.addEventListener('click', () => {
    editModal.classList.add('hidden');
  });


  closeModalMoreinfosButton.addEventListener('click', () => {
    editModalMoreinfos.classList.add('hidden');
  });
</script>

</body>
</html>
