<?php
include __DIR__ . '/../includes/config.php'; 
?>

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

    <!-- google font link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Home | ideaBolt</title>
  </head>
  <body class="roboto">
    <!-- navber  -->
    <?php include 'components/navbar.php' ?>


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
    <?php include 'components/footer.php' ?>
    
  </body>
</html>
