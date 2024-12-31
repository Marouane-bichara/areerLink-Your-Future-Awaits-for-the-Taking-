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
          <h1 class="text-2xl font-bold text-blue-600">CareerLink</h1>
          <nav class="hidden md:flex gap-8">
              <a href="#home" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
              <a href="#categories" class="text-gray-700 hover:text-blue-600 font-medium">Categories</a>
              <a href="#about" class="text-gray-700 hover:text-blue-600 font-medium">About Us</a>
              <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>
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
              <a href="#home" class="text-gray-800 text-xl font-semibold hover:text-blue-600 transition-all duration-300">Home</a>
              <a href="#categories" class="text-gray-800 text-xl font-semibold hover:text-blue-600 transition-all duration-300">Categories</a>
              <a href="#about" class="text-gray-800 text-xl font-semibold hover:text-blue-600 transition-all duration-300">About Us</a>
              <a href="#contact" class="text-gray-800 text-xl font-semibold hover:text-blue-600 transition-all duration-300">Contact</a>
          </nav>
      </div>
  </div>

 
  <section class="bg-cover bg-center  py-20" style="background-image: url('./images/imagesHomePage/jobPictre.png');">
    <div class="container mx-auto px-4 text-center">
    <h2 class="text-5xl font-bold mb-4 text-white inline-block px-2"><span class="text-blue-600">Find</span> Your Dream Job</h2>
    <p class="text-lg mb-8 text-white">Connecting candidates with recruiters to achieve career goals.</p>
        <div>
            <a href="login.html" class="px-8 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium">Log In</a>
            <a href="register.html" class="px-8 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 font-medium ml-4">Register</a>
        </div>
    </div>
</section>


    <section id="categories" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold text-gray-800 mb-12">Why Choose CareerLink</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <div class="bg-gray-200 h-48 flex items-center justify-center rounded-lg mb-6">
                        <p class="text-gray-700">[Image: Recruiter Dashboard]</p>
                    </div>
                    <h4 class="font-bold text-gray-800">Manage Job Listings</h4>
                    <p class="text-gray-600 mt-2">Easily post and manage job opportunities.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <div class="bg-gray-200 h-48 flex items-center justify-center rounded-lg mb-6">
                        <p class="text-gray-700">[Image: Advanced Search Features]</p>
                    </div>
                    <h4 class="font-bold text-gray-800">Dynamic Job Search</h4>
                    <p class="text-gray-600 mt-2">Find your dream job with advanced filters.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <div class="bg-gray-200 h-48 flex items-center justify-center rounded-lg mb-6">
                        <p class="text-gray-700">[Image: Platform Statistics]</p>
                    </div>
                    <h4 class="font-bold text-gray-800">Track Your Progress</h4>
                    <p class="text-gray-600 mt-2">Analyze your performance and applications.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="py-16">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-gray-800 text-center mb-12">Latest Jobs</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h4 class="text-xl font-bold text-gray-800">Job Title</h4>
                    <p class="text-gray-600 mt-2">[Image: Placeholder for job logo or company image]</p>
                    <p class="text-gray-600 mt-4">Job description snippet...</p>
                    <a href="#" class="text-blue-500 mt-4 inline-block">View Details</a>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h4 class="text-xl font-bold text-gray-800">Job Title</h4>
                    <p class="text-gray-600 mt-2">[Image: Placeholder for job logo or company image]</p>
                    <p class="text-gray-600 mt-4">Job description snippet...</p>
                    <a href="#" class="text-blue-500 mt-4 inline-block">View Details</a>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h4 class="text-xl font-bold text-gray-800">Job Title</h4>
                    <p class="text-gray-600 mt-2">[Image: Placeholder for job logo or company image]</p>
                    <p class="text-gray-600 mt-4">Job description snippet...</p>
                    <a href="#" class="text-blue-500 mt-4 inline-block">View Details</a>
                </div>
            </div>
        </div>
    </section>


    <section id="testimonials" class="py-16 bg-blue-50">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold text-gray-800 mb-12">What Our Users Say</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <p class="text-lg text-gray-600">"CareerLink helped me find my dream job within weeks. The platform is easy to navigate and the job filters are fantastic!"</p>
                    <h5 class="font-bold text-gray-800 mt-4">John Doe</h5>
                    <p class="text-gray-500">Software Engineer</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <p class="text-lg text-gray-600">"As a recruiter, CareerLink made it easy to post jobs and find qualified candidates. The admin dashboard is great!"</p>
                    <h5 class="font-bold text-gray-800 mt-4">Jane Smith</h5>
                    <p class="text-gray-500">HR Manager</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <p class="text-lg text-gray-600">"The dynamic job search feature saved me so much time. Highly recommend this platform!"</p>
                    <h5 class="font-bold text-gray-800 mt-4">Michael Johnson</h5>
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

    <script>
      const hamburger = document.getElementById('hamburger');
      const mobileMenu = document.getElementById('mobile-menu');
      const closeMenu = document.getElementById('close-menu');

      hamburger.addEventListener('click', () => {
          mobileMenu.classList.remove('scale-0', 'opacity-0');
          mobileMenu.classList.add('open');
      });

      closeMenu.addEventListener('click', () => {
          mobileMenu.classList.remove('open');
          mobileMenu.classList.add('scale-0', 'opacity-0');
      });
    </script>

</body>
</html>
