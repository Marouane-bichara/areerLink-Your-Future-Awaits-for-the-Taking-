<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../../output.css" rel="stylesheet">
  <title>About Us - CareerLink</title>
  <style>
    
    .team-member {
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
    }
    .team-member:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
    .feature-icon {
      font-size: 3rem;
      color: #4A90E2;
    }

    #mobile-menu {
      transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
    }
    #mobile-menu.open {
      transform: scale(1);
      opacity: 1;
    }
    #mobile-menu.closed {
      transform: scale(0);
      opacity: 0;
    }

    img {
    margin-bottom: 16px;
  }
  a.btn {
    margin-top: 16px;
  }
  .feature-card {
    padding: 24px;
    margin-bottom: 24px; 
  }
  .team-member img {
    margin-bottom: 16px; 
  }
  .team-member {
    padding: 20px;
    margin-bottom: 24px;
  }
  </style>
</head>
<body class="bg-gray-100 font-sans antialiased">

<header class="bg-white shadow-lg sticky top-0 z-50">
  <div class="container mx-auto px-4 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-blue-600 cursor-pointer">CareerLink</h1>
    <nav class="hidden md:flex gap-8">
      <a href="../../index.php" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
      <a href="../../Views/about/about.php" class="text-gray-700 hover:text-blue-600 font-medium">About Us</a>
      <a href="../contact/contact.php" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>
    </nav>
    <button id="hamburger" class="block md:hidden text-gray-700 focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>
</header>

<div id="mobile-menu" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 z-50 transform scale-0 opacity-0">
  <div class="bg-white w-72 h-72 rounded-xl shadow-lg overflow-hidden transform transition-all ease-in-out duration-500 flex flex-col justify-center items-center">
    <div class="flex justify-end w-full p-4">
      <button id="close-menu" class="text-gray-700 hover:text-blue-600">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <nav class="flex flex-col items-center space-y-6">
      <a href="../../index.php" class="text-gray-800 text-xl font-semibold hover:text-blue-600 transition-all duration-300">Home</a>
      <a href="../../Views/about/about.php" class="text-gray-800 text-xl font-semibold hover:text-blue-600 transition-all duration-300">About Us</a>
      <a href="../contact/contact.php" class="text-gray-800 text-xl font-semibold hover:text-blue-600 transition-all duration-300">Contact</a>
    </nav>
  </div>
</div>

<section class="py-20 bg-gradient-to-r from-blue-100 to-blue-50 mt-16">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-4xl font-extrabold text-gray-800 mb-8">About CareerLink</h2>
    <p class="text-lg text-gray-600 mb-12 max-w-4xl mx-auto">
      At CareerLink, we’re on a mission to revolutionize the way individuals search for jobs and how companies find top talent. Our platform connects candidates and recruiters through a seamless, intuitive experience that empowers users to unlock opportunities, build relationships, and create careers.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
      <div class="text-left">
        <h3 class="text-3xl font-extrabold text-gray-800 mb-9">Our Mission</h3>
        <p class="text-lg text-gray-600 mb-8">
          At CareerLink, our mission is simple: to empower individuals by connecting them with the right career opportunities. We believe that every person deserves a job that aligns with their skills and passions, while every company should have access to qualified candidates.
        </p>
        <a href="#contact" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition-colors duration-300">Join Our Mission</a>
      </div>
      <div>
        <img src="../../images/imagesHomePage/ourmission.png" alt="Our Mission" class="w-full h-auto rounded-lg shadow-lg">
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mt-20">
      <div class="order-2 md:order-1">
        <img src="../../images/imagesHomePage/ourvision.png" alt="Our Vision" class="w-full h-auto rounded-lg shadow-lg">
      </div>
      <div class="text-left">
        <h3 class="text-3xl font-extrabold text-gray-800 mb-6">Our Vision</h3>
        <p class="text-lg text-gray-600 mb-8">
          We envision a world where every person can easily find a job that they love, and every company has access to the perfect candidate. CareerLink is committed to making this vision a reality through innovative features that streamline the recruitment process.
        </p>
        <a href="#contact" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition-colors duration-300">Be Part of the Change</a>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="container mx-auto px-6 text-center">
    <h3 class="text-3xl font-extrabold text-gray-800 mb-12">Why Choose CareerLink?</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
      <div class="feature-card bg-white shadow-lg rounded-lg text-center">
        <div class="feature-icon mb-6">
          <i class="fas fa-briefcase"></i>
        </div>
        <h4 class="text-xl font-bold text-gray-800 mb-4">Easy Job Posting</h4>
        <p class="text-gray-600">Post job listings effortlessly and reach a pool of qualified candidates quickly.</p>
      </div>
      <div class="feature-card bg-white shadow-lg rounded-lg text-center">
        <div class="feature-icon mb-6">
          <i class="fas fa-search"></i>
        </div>
        <h4 class="text-xl font-bold text-gray-800 mb-4">Advanced Search</h4>
        <p class="text-gray-600">Find the right candidates or jobs with powerful search filters and tools.</p>
      </div>
      <div class="feature-card bg-white shadow-lg rounded-lg text-center">
        <div class="feature-icon mb-6">
          <i class="fas fa-users"></i>
        </div>
        <h4 class="text-xl font-bold text-gray-800 mb-4">Built-in Networking</h4>
        <p class="text-gray-600">Create a professional network with recruiters and candidates for future opportunities.</p>
      </div>
    </div>
  </div>
</section>


<section class="py-16 bg-white">
  <div class="container mx-auto px-6 text-center">
    <h3 class="text-3xl font-extrabold text-gray-800 mb-12">Meet Our Team</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"> 
      <div class="bg-white shadow-lg rounded-lg p-6 text-center team-member">
        <img src="../../images/imagesHomePage/marouane.JPG" alt="Marouane Bichara" class="w-24 h-24 rounded-full mx-auto mb-4">
        <h4 class="text-xl font-bold text-gray-800">Marouane Bichara</h4>
        <p class="text-gray-600">CEO & Founder</p>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-6 text-center team-member">
        <img src="../../images/imagesHomePage/marouaneb.JPG" alt="Marouane Bichara" class="w-24 h-24 rounded-full mx-auto mb-4">
        <h4 class="text-xl font-bold text-gray-800">Marouane Bichara</h4>
        <p class="text-gray-600">Developer</p>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-6 text-center team-member">
        <img src="../../images/imagesHomePage/marouanea.JPG" alt="Marouane Bichara" class="w-24 h-24 rounded-full mx-auto mb-4">
        <h4 class="text-xl font-bold text-gray-800">Marouane Bichara</h4>
        <p class="text-gray-600">Designer</p>
      </div>
    </div>
  </div>
</section>

<footer class="bg-blue-600 text-white py-8">
  <div class="container mx-auto px-6 text-center">
    <p>&copy; 2024 CareerLink. All rights reserved.</p>
  </div>
</footer>

<script src="../../scripts/menu.js"></script>


</body>
</html>
