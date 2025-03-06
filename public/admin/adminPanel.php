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

    <!-- custom css  -->
     <link rel="stylesheet" href="//styles.css">

    <title>UserDashboard | ideaBolt</title>
  </head>
  <body class="roboto">
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
                <li><a href="../index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <a class="text-3xl font-bold">idea<span class="text-orange-500">Bolt</span></a>
          </div>
          <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 text-xl">
              <li><a href="../index.php">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="navbar-end">
            <a class="btn bg-orange-500 text-white text-xl">login</a>
          </div>
        </div>
      </nav>
    </header>

    <!-- main section -->
    <main class="relative flex flex-col justify-center bg-stone-100">
      <div class="isolate bg-stone-100">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
          <div class="relative left-1/2 -z-10 aspect-1155/678 w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>

        <div class="flex min-h-max max-w-screen-xl mx-auto">
          <!-- Sidebar -->
          <aside class="w-64 bg-gray-800 p-5 hidden md:block text-white">
            <h2 class="text-xl font-semibold mb-4">Admin Panel</h2>
            <ul>
              <li class="mb-2"><a href="#" class="block p-2 bg-orange-500 rounded-sm hover:bg-orange-500">Dashboard</a></li>
              <li class="mb-2"><a href="#" class="block p-2 hover:bg-orange-500 rounded-sm">Users</a></li>
              <li class="mb-2"><a href="#" class="block p-2 hover:bg-orange-500 rounded-sm">All Blogs</a></li>
              <li class="mb-2"><a href="#" class="block p-2 hover:bg-orange-500 rounded-sm">Contact Info</a></li>
              <li class="mb-2"><a href="#" class="block p-2 hover:bg-orange-500 rounded-sm">Usage</a></li>
              <li class="mb-2"><a href="#" class="block p-2 hover:bg-orange-500 rounded-sm">Settings</a></li>
              <li class="mb-2 mt-80"><a href="#" class="block p-2 hover:bg-orange-500 rounded-sm">logout</a></li>
            </ul>
          </aside>

          <!-- Main Content -->
          <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-gray-800 p-4 flex justify-between items-center shadow">
              <input type="text " placeholder="Search..." class="border p-2 w-1/3 rounded text-white" />
              <button class="bg-blue-500 text-white px-4 py-2 rounded">Create Blog</button>
            </header>

            <!-- Content -->
            <main class="p-6">
              <h2 class="text-2xl font-semibold mb-4">Deployments</h2>
              <div class="bg-white p-4 rounded shadow">
                <ul>
                  <li class="border-b p-3 flex justify-between">
                    <span>Planetaria / ios-app</span>
                    <button class="text-blue-500">Preview</button>
                  </li>
                  <li class="border-b p-3 flex justify-between">
                    <span>Planetaria / mobile-api</span>
                    <button class="text-green-500">Production</button>
                  </li>
                  <li class="border-b p-3 flex justify-between">
                    <span>Tailwind Labs / tailwindcss.com</span>
                    <button class="text-blue-500">Preview</button>
                  </li>
                </ul>
              </div>
            </main>
          </div>
        </div>
      </div>
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
              <li><a href="index.html" class="text-gray-400 hover:text-white">Home</a></li>
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
