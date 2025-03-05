
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- tailwind cdn -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- daisy ui cdn -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

     <!-- google font link  -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">

    <title>Home | ideaBolt</title>
  </head>
  <body>
    <header class="sticky top-0 bg-slate-900 z-10">
      <!-- navber -->
      <nav class="max-w-screen-xl mx-auto">
        <div class="navbar text-white py-3">
          <div class="navbar-start">
            <div class="dropdown bg-slate-900">
              <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
              </div>
              <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow bg-slate-900 border text-xl">
                <li><a href="/index.html">Home</a></li>
                <li><a href="/about.html">About</a></li>
                <li><a href="/blog.html">Blog</a></li>
                <li><a href="/contact.html">Contact</a></li>
              </ul>
            </div>
            <a class="text-3xl font-bold">idea<span class="text-orange-500">Bolt</span></a>
          </div>
          <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 text-xl">
                <li><a href="/index.html">Home</a></li>
                <li><a href="/about.html">About</a></li>
                <li><a href="/blog.html">Blog</a></li>
                <li><a href="/contact.html">Contact</a></li>
            </ul>
          </div>
          <div class="navbar-end">
            <a class="btn bg-orange-500 text-white text-xl">login</a>
          </div>
        </div>
      </nav>
    </header>

    <!----hero section --->
    <section class="bg-gray-800 text-white">
      <div class="max-w-screen-xl mx-auto min-h-[400px] flex flex-col justify-center items-center">
        <div class="text-center max-w-4xl">
          <h1 class="text-4xl md:text-6xl font-semibold mb-5">Welcome To Our Blog</h1>
          <p class="text-lg text-gray-400 mb-8">Revision Welcomes to ultimate source for fresh perspectives!.</p>
          <a href="blog.html" class="btn bg-slate-900 text-white text-xl">Explore</a>
        </div>
      </div>
    </section>

    <!-- main section -->
    <main class="flex flex-col justify-center bg-stone-100">
      <section class="max-w-screen-xl mx-auto my-10">
        <!-- category -->
        <div class="flex flex-col items-center space-y-10">
          <h2 class="uppercase font-bold text-xl">Explore Trending Topics</h2>

          <div class="flex gap-5 items-center flex-wrap max-w-3xl justify-center cursor-pointer">
            <div class="text-xl border p-3 rounded-full px-4 font-bold hover:bg-slate-200"><i class="fa-solid fa-laptop mr-1"></i> Technology</div>
            <div class="text-xl border p-3 rounded-full px-4 font-bold hover:bg-slate-200"><i class="fa-solid fa-plane"></i> Travel</div>
            <div class="text-xl border p-3 rounded-full px-4 font-bold hover:bg-slate-200"><i class="fa-solid fa-futbol"></i> Sport</div>
            <div class="text-xl border p-3 rounded-full px-4 font-bold hover:bg-slate-200"><i class="fa-solid fa-newspaper"></i> News</div>
            <div class="text-xl border p-3 rounded-full px-4 font-bold hover:bg-slate-200"><i class="fa-solid fa-briefcase"></i> Business</div>
            <div class="text-xl border p-3 rounded-full px-4 font-bold hover:bg-slate-200"><i class="fa-solid fa-signal"></i> Startups</div>
            <div class="text-xl border p-3 rounded-full px-4 font-bold hover:bg-slate-200"><i class="fa-solid fa-bowl-food"></i> Food</div>
          </div>
        </div>

        <!-- blog card -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-5 py-10">
          <div class="relative bg-gray-800 rounded-2xl overflow-hidden shadow-lg flex flex-col md:flex-row">
            <img src="https://placehold.co/600x400/FF5733/FFFFFF?text=Radio" alt="Radio" class="w-full md:w-1/2 object-cover" />
            <div class="p-6 w-full md:w-1/2">
              <p class="text-gray-400 text-sm mb-2">Ethan Caldwell on October 16, 2024</p>
              <div class="absolute left-4 top-4 flex space-x-2 mb-4">
                <span class="bg-white text-gray-800 px-3 py-1 rounded-full text-xs font-semibold uppercase">Business</span>
                <span class="bg-white text-gray-800 px-3 py-1 rounded-full text-xs font-semibold uppercase">News</span>
              </div>
              <h2 class="text-white text-xl font-semibold mb-2">How Tech Shapes the Future of Work in 2024</h2>
              <p class="text-gray-300 mb-4">In today's ever-evolving world, storytelling has become a powerful tool for connection. Revision provides a unique platform for individuals to...</p>
              <a href="#" class="bg-gray-700 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-full inline-block">Discover More</a>
            </div>
          </div>

          <div class="relative bg-gray-800 rounded-2xl overflow-hidden shadow-lg flex flex-col md:flex-row">
            <img src="https://placehold.co/600x400/FF5733/FFFFFF?text=Radio" alt="Radio" class="w-full md:w-1/2 object-cover" />
            <div class="p-6 w-full md:w-1/2">
              <p class="text-gray-400 text-sm mb-2">Ethan Caldwell on October 16, 2024</p>
              <div class="absolute left-4 top-4 flex space-x-2 mb-4">
                <span class="bg-white text-gray-800 px-3 py-1 rounded-full text-xs font-semibold uppercase">Business</span>
                <span class="bg-white text-gray-800 px-3 py-1 rounded-full text-xs font-semibold uppercase">News</span>
              </div>
              <h2 class="text-white text-xl font-semibold mb-2">How Tech Shapes the Future of Work in 2024</h2>
              <p class="text-gray-300 mb-4">In today's ever-evolving world, storytelling has become a powerful tool for connection. Revision provides a unique platform for individuals to...</p>
              <a href="#" class="bg-gray-700 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-full inline-block">Discover More</a>
            </div>
          </div>

          <div class="relative bg-gray-800 rounded-2xl overflow-hidden shadow-lg flex flex-col md:flex-row">
            <img src="https://placehold.co/600x400/FF5733/FFFFFF?text=Radio" alt="Radio" class="w-full md:w-1/2 object-cover" />
            <div class="p-6 w-full md:w-1/2">
              <p class="text-gray-400 text-sm mb-2">Ethan Caldwell on October 16, 2024</p>
              <div class="absolute left-4 top-4 flex space-x-2 mb-4">
                <span class="bg-white text-gray-800 px-3 py-1 rounded-full text-xs font-semibold uppercase">Business</span>
                <span class="bg-white text-gray-800 px-3 py-1 rounded-full text-xs font-semibold uppercase">News</span>
              </div>
              <h2 class="text-white text-xl font-semibold mb-2">How Tech Shapes the Future of Work in 2024</h2>
              <p class="text-gray-300 mb-4">In today's ever-evolving world, storytelling has become a powerful tool for connection. Revision provides a unique platform for individuals to...</p>
              <a href="#" class="bg-gray-700 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-full inline-block">Discover More</a>
            </div>
          </div>
        </div>

          <div class="relative bg-gray-800 rounded-2xl overflow-hidden shadow-lg flex flex-col md:flex-row">
            <img src="https://placehold.co/600x400/FF5733/FFFFFF?text=Radio" alt="Radio" class="w-full md:w-1/2 object-cover" />
            <div class="p-6 w-full md:w-1/2">
              <p class="text-gray-400 text-sm mb-2">Ethan Caldwell on October 16, 2024</p>
              <div class="absolute left-4 top-4 flex space-x-2 mb-4">
                <span class="bg-white text-gray-800 px-3 py-1 rounded-full text-xs font-semibold uppercase">Business</span>
                <span class="bg-white text-gray-800 px-3 py-1 rounded-full text-xs font-semibold uppercase">News</span>
              </div>
              <h2 class="text-white text-xl font-semibold mb-2">How Tech Shapes the Future of Work in 2024</h2>
              <p class="text-gray-300 mb-4">In today's ever-evolving world, storytelling has become a powerful tool for connection. Revision provides a unique platform for individuals to...</p>
              <a href="#" class="bg-gray-700 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-full inline-block">Discover More</a>
            </div>
          </div>
        </section>
      </section>
    </main>

    <!-- footer  -->
    <footer class="bg-gray-800 py-12">
      <div class="max-w-screen-xl mx-auto container flex flex-col md:flex-row justify-between items-center md:items-start">
        <div class="mb-8 md:mb-0 text-center md:text-left max-w-md">
          <div class="flex justify-center md:justify-start items-center mb-4">
            <a class="text-3xl font-bold text-white">idea<span class="text-orange-500">Bolt</span></a>
          </div>
          <p class="text-gray-400 mb-4">Welcome to ultimate source for fresh perspectives! Explore curated content to enlighten, entertain and engage global readers.</p>
          <div class="flex justify-center md:justify-start space-x-4">
            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-gray-400 hover:text-white"><i class="fas fa-envelope"></i></a>
          </div>
        </div>

        <div class="grid grid-cols-2 gap-15 text-center md:text-left text-white">
          <div>
            <h3 class="font-semibold mb-4">CATEGORIES</h3>
            <ul class="space-y-2">
              <li><a href="#" class="text-gray-400 hover:text-white">Technology</a></li>
              <li><a href="#" class="text-gray-400 hover:text-white">Travel</a></li>
              <li><a href="#" class="text-gray-400 hover:text-white">Sport</a></li>
              <li><a href="#" class="text-gray-400 hover:text-white"> News</a></li>
              <li><a href="#" class="text-gray-400 hover:text-white"> Business</a></li>
              <li><a href="#" class="text-gray-400 hover:text-white"> Startups</a></li>
              <li><a href="#" class="text-gray-400 hover:text-white"> Food</a></li>
            </ul>
          </div>
          <div>
            <h3 class="font-semibold mb-4">PAGES</h3>
            <ul class="space-y-2">
              <li><a href="about.html" class="text-gray-400 hover:text-white">About</a></li>
              <li><a href="blog.html" class="text-gray-400 hover:text-white">Blog</a></li>
              <li><a href="contact.html" class="text-gray-400 hover:text-white">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="border-gray-700 my-8" />
      <p class="text-center text-sm text-gray-400">&copy; 2025 — Revision. All rights reserved.</p>
    </footer>
  </body>
</html>
