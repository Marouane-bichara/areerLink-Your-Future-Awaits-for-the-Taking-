<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <title>CareerLink - Home</title>
  <style>

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
  </style>
</head>
<body class="bg-gray-50">


    <header class="bg-white shadow-lg sticky top-0 z-50">
      <div class="container mx-auto px-4 py-4 flex justify-between items-center">
          <h1 class="text-2xl font-bold text-blue-600 cursor-pointer">CareerLink</h1>
          <nav class="hidden md:flex gap-8">
              <a href="../src/index.php" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
              <a href="../src/Views/about/about.php" class="text-gray-700 hover:text-blue-600 font-medium">About Us</a>
              <a href="./Views/contact/contact.php" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>
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

          <nav class="flex flex-col items-center space-y-6 ">
              <a href="../src/index.php" class="text-gray-800 text-xl font-semibold hover:text-blue-600 transition-all duration-300">Home</a>
              <a href="../src/Views/about/about.php" class="text-gray-800 text-xl font-semibold hover:text-blue-600 transition-all duration-300">About Us</a>
              <a href="./Views/contact/contact.php" class="text-gray-800 text-xl font-semibold hover:text-blue-600 transition-all duration-300">Contact</a>
          </nav>
      </div>
  </div>

 
  <section class="bg-cover bg-center  py-20" style="background-image: url('./images/imagesHomePage/jobPictre.png');">
    <div class="container mx-auto px-4 text-center">
    <h2 class="text-5xl font-bold mb-4 text-white inline-block px-2"><span class="text-blue-600">Find</span> Your Dream Job</h2>
    <p class="text-lg mb-8 text-white">Connecting candidates with recruiters to achieve career goals.</p>
        <div>
            <a href="./Views/auth/login.php" class="px-8 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium">Log In</a>
            <a href="./Views/auth/login.php" class="px-8 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 font-medium ml-4">Register</a>
        </div>
    </div>
</section>


<section id="categories" class="py-16 bg-gray-100">
    <div class="container mx-auto px-4 text-center">
        <h3 class="text-3xl font-bold text-gray-800 mb-12">Why Choose CareerLink</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white shadow-lg rounded-lg p-6 text-center cursor-pointer">
                <div class="bg-gray-200 h-48 flex items-center justify-center rounded-lg mb-6">
                    <img src="./images/imagesHomePage/manageJob.png" alt="Recruiter Dashboard" class="h-full w-full object-cover rounded-lg">
                </div>
                <h4 class="font-bold text-gray-800">Manage Job Listings</h4>
                <p class="text-gray-600 mt-2">Easily post and manage job opportunities.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center cursor-pointer">
                <div class="bg-gray-200 h-48 flex items-center justify-center rounded-lg mb-6">
                    <img src="./images/imagesHomePage/jobSearch.png" alt="Advanced Search Features" class="h-full w-full object-cover rounded-lg">
                </div>
                <h4 class="font-bold text-gray-800">Dynamic Job Search</h4>
                <p class="text-gray-600 mt-2">Find your dream job with advanced filters.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center cursor-pointer">
                <div class="bg-gray-200 h-48 flex items-center justify-center rounded-lg mb-6">
                    <img src="./images/imagesHomePage/progress.png" alt="Platform Statistics" class="h-full w-full object-cover rounded-lg">
                </div>
                <h4 class="font-bold text-gray-800">Track Your Progress</h4>
                <p class="text-gray-600 mt-2">Analyze your performance and applications.</p>
            </div>
        </div>
    </div>
</section>



<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h3 class="text-4xl font-extrabold text-gray-800 text-center mb-12">Latest Jobs</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Job Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 cursor-pointer">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h4 class="text-2xl font-semibold text-gray-800">Software Engineer</h4>
                        <span class="bg-blue-100 text-blue-600 text-xs font-medium px-3 py-1 rounded-full">Remote</span>
                    </div>
                    <p class="text-gray-600 mt-4">Build scalable web and mobile applications, collaborate with cross-functional teams, and contribute to innovative features.</p>
                    <div class="flex items-center mt-4">
                        <img src="../src/images/imagesHomePage/Facebook_Logo_2023.png" alt="Facebook Logo" class="h-12 w-12 object-cover rounded-full border">
                        <div class="ml-4">
                            <p class="text-gray-800 font-medium">Facebook</p>
                            <p class="text-gray-500 text-sm">Menlo Park, CA</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 px-6 py-4 flex items-center justify-between">
                    <p class="text-gray-600 text-sm"><strong>Salary:</strong> $120,000 - $150,000/year</p>
                    <a href="#" class="text-blue-500 text-sm font-medium hover:underline">View Details</a>
                </div>
            </div>
            <!-- Job Card 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 cursor-pointer">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h4 class="text-2xl font-semibold text-gray-800">UI/UX Designer</h4>
                        <span class="bg-pink-100 text-pink-600 text-xs font-medium px-3 py-1 rounded-full">On-site</span>
                    </div>
                    <p class="text-gray-600 mt-4">Create stunning and user-friendly interfaces for mobile and web apps while enhancing user experiences.</p>
                    <div class="flex items-center mt-4">
                        <img src="../src/images/imagesHomePage/instagram.png" alt="Instagram Logo" class="h-12 w-12 object-cover rounded-full border">
                        <div class="ml-4">
                            <p class="text-gray-800 font-medium">Instagram</p>
                            <p class="text-gray-500 text-sm">New York, NY</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 px-6 py-4 flex items-center justify-between">
                    <p class="text-gray-600 text-sm"><strong>Salary:</strong> $90,000 - $120,000/year</p>
                    <a href="#" class="text-blue-500 text-sm font-medium hover:underline">View Details</a>
                </div>
            </div>
            <!-- Job Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 cursor-pointer">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h4 class="text-2xl font-semibold text-gray-800">Data Scientist</h4>
                        <span class="bg-gray-100 text-gray-600 text-xs font-medium px-3 py-1 rounded-full">Hybrid</span>
                    </div>
                    <p class="text-gray-600 mt-4">Analyze complex datasets to derive meaningful insights and support space exploration missions.</p>
                    <div class="flex items-center mt-4">
                        <img src="../src/images/imagesHomePage/nasa.png" alt="NASA Logo" class="h-12 w-12 object-cover rounded-full border">
                        <div class="ml-4">
                            <p class="text-gray-800 font-medium">NASA</p>
                            <p class="text-gray-500 text-sm">Houston, TX</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 px-6 py-4 flex items-center justify-between">
                    <p class="text-gray-600 text-sm"><strong>Salary:</strong> $110,000 - $140,000/year</p>
                    <a href="#" class="text-blue-500 text-sm font-medium hover:underline">View Details</a>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="testimonials" class="py-16 bg-blue-50">
    <div class="container mx-auto px-4 text-center">
        <h3 class="text-3xl font-bold text-gray-800 mb-12">What Our Users Say</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white shadow-lg rounded-lg p-6 text-center cursor-pointer">

            <img src="../src/images/imagesHomePage/Said-Aabilla.jpg" alt="said aabila" class="w-24 h-24 rounded-full mx-auto mb-4">
                <p class="text-lg text-gray-600">"CareerLink helped me find my dream job within weeks. The platform is easy to navigate and the job filters are fantastic!"</p>
                <h5 class="font-bold text-gray-800 mt-4">Said Aabilla</h5>
                <p class="text-gray-500">Software Engineer</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center cursor-pointer">

            <img src="../src/images/imagesHomePage/Tayeb-Souini.jpg" alt="Tayeb Souini" class="w-24 h-24 rounded-full mx-auto mb-4">
                <p class="text-lg text-gray-600">"As a recruiter, CareerLink made it easy to post jobs and find qualified candidates. The admin dashboard is great!"</p>
                <h5 class="font-bold text-gray-800 mt-4">Tayeb Souini</h5>
                <p class="text-gray-500">HR Manager</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center cursor-pointer">

            <img src="../src/images/imagesHomePage/Aymane-Benhima.jpg" alt="Aymane Benhima" class="w-24 h-24 rounded-full mx-auto mb-4">
                <p class="text-lg text-gray-600">"The dynamic job search feature saved me so much time. Highly recommend this platform!"</p>
                <h5 class="font-bold text-gray-800 mt-4">Aymane Benhima</h5>
                <p class="text-gray-500">UX Designer</p>
            </div>
        </div>
    </div>
</section>




    <section id="blog" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold text-gray-800 mb-12">Career Tips & Insights</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h4 class="text-xl font-bold text-gray-800">How to Ace Your Interview</h4>
                    <p class="text-gray-600 mt-4">Proven tips and strategies to impress your interviewer and land your dream job.</p>
                    <a href="#" class="text-blue-500 mt-4 inline-block">Read More</a>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h4 class="text-xl font-bold text-gray-800">Building a Winning Resume</h4>
                    <p class="text-gray-600 mt-4">The key elements of a resume that will make you stand out to recruiters.</p>
                    <a href="#" class="text-blue-500 mt-4 inline-block">Read More</a>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h4 class="text-xl font-bold text-gray-800">Networking Strategies</h4>
                    <p class="text-gray-600 mt-4">How to network effectively and increase your chances of finding great job opportunities.</p>
                    <a href="#" class="text-blue-500 mt-4 inline-block">Read More</a>
                </div>
            </div>
        </div>
    </section>


    <footer class="bg-gray-800 text-gray-200 py-8">
        <div class="container mx-auto text-center">
            <h5 class="text-lg font-bold mb-2">Stay Connected</h5>
            <div class="flex justify-center gap-8 mb-4">
                <a href="#" class="text-gray-200 hover:text-white">Facebook</a>
                <a href="#" class="text-gray-200 hover:text-white">Twitter</a>
                <a href="#" class="text-gray-200 hover:text-white">LinkedIn</a>
            </div>
            <p>&copy; 2024 CareerLink. All rights reserved.</p>
        </div>
    </footer>

<script src="./scripts/menu.js"></script>

</body>
</html>
