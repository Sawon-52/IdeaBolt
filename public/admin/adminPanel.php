<?php
 include __DIR__ . "/../../includes/config.php";
 session_start();
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

    <!-- custom css  -->
     <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/css/styles.css">

    <title>Admin| ideaBolt</title>
  </head>
  <body class="roboto">

    <!-- main section -->
    <main class="relative flex flex-col justify-center bg-stone-100 ">
      <div class="isolate bg-stone-100">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
          <div class="relative left-1/2 -z-10 aspect-1155/678 w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>

        <div class="flex flex-col md:flex-row min-h-screen max-w-screen-xl mx-auto">

          <!-- Sidebar -->
          <aside class="relative w-full md:w-64 bg-gray-800 p-5 hidden lg:block  text-white" id="panel_sidebar"> 
            <div class="mb-2">
              <a href="<?php echo BASE_URL;?>public/index.php" class="text-3xl font-bold my-4">idea<span class="text-orange-500">Bolt</span></a>
            </div>
            <ul>
              <li class="mb-2"><a href="<?php echo BASE_URL; ?>public/admin/adminPanel.php" class="block p-2 bg-orange-500 rounded-sm hover:bg-orange-500">Dashboard</a></li>
              <li class="mb-2"><a href="<?php echo BASE_URL; ?>public/admin/adminProfileEdit.php" class="block p-2 hover:bg-orange-200 rounded-sm hover:text-gray-900">Profile</a></li>
              <li class="mb-2"><a href="<?php echo BASE_URL; ?>public/admin/adminUserBoard.php" class="block p-2 hover:bg-orange-200 rounded-sm hover:text-gray-900">Users</a></li>
              <li class="mb-2"><a href="<?php echo BASE_URL; ?>public/admin/adminBlogsEdit.php" class="block p-2 hover:bg-orange-200 rounded-sm hover:text-gray-900">Blogs</a></li>
              <li class="mb-2"><a href="<?php echo BASE_URL; ?>public/admin/adminCategoriesEdit.php" class="block p-2 hover:bg-orange-200 rounded-sm hover:text-gray-900">Categories</a></li>
              <li class="mb-2"><a href="<?php echo BASE_URL; ?>public/admin/adminContactShow.php" class="block p-2 hover:bg-orange-200 rounded-sm hover:text-gray-900">Contact Info</a></li>

              <?php if (isset($_SESSION["user_id"])): ?>
                <button type="button" class="absolute bottom-6 mb-2 w-[80%]"><a href="<?php echo BASE_URL; ?>processes/logout.php" class="block p-2 bg-red-500 hover:opacity-80 rounded-sm text-center ">Logout</a></button>
              <?php else: ?>
                  <!-- Display login button if not logged in -->
                  <button type="button" class="absolute bottom-6 mb-2 w-[80%]"><a href="<?php echo BASE_URL; ?>public/login.php" class="block p-2 bg-orange-500 hover:opacity-80 rounded-sm text-center">Login</a></button>
              <?php endif; ?>
            </ul>
          </aside>


          <!-- Main Content -->
          <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-gray-800 p-4 flex justify-between items-center shadow">
              <div class="text-white items-center block lg:hidden">
                <i class="fa-solid fa-bars text-2xl" id="panel_menu"></i>
              </div>
              <input type="text">
              <button class="bg-blue-500 text-white px-4 py-2 rounded"><a href="<?php echo BASE_URL;?>public/index.php">Back To Main Page</a></button>
            </header>

            <!-- Content -->
            <main class="p-6 min-h-[500px]" >
              <h2 class="text-2xl font-semibold mb-4">Admin Overview</h2>
                <div class="container mx-auto ">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                      <!-- for daily views  -->
                        <div class="bg-blue-500 rounded-lg p-6 shadow-md">
                          <div class="flex items-center">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                              </svg>
                              <span class="ml-2 text-white font-bold text-xl">Daily Views</span>
                          </div>
                          <div class="mt-4">
                              <span class="text-4xl font-bold text-white">8,652</span>
                              <span class="text-green-300 text-sm">+2.97% Since last month</span>
                          </div>
                        </div>

                        <!-- for comments  -->
                        <div class="bg-green-500 rounded-lg p-6 shadow-md">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                                <span class="ml-2 text-white font-bold text-xl">Comments</span>
                            </div>
                            <div class="mt-4">
                                <span class="text-4xl font-bold text-white">254</span>
                                <span class="text-red-300 text-sm">-5.12% Since last month</span>
                            </div>
                        </div>

                        <!-- for like  -->
                        <div class="bg-yellow-500 rounded-lg p-6 shadow-md">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                </svg>
                                <span class="ml-2 text-white font-bold text-xl">Like</span>
                            </div>
                            <div class="mt-4">
                                <span class="text-4xl font-bold text-white">1,288</span>
                                <span class="text-green-300 text-sm">+12.5% Since last month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
          </div>
        </div>
      </div>
    </main>

    <script src="<?php echo BASE_URL; ?>public/assets/js/script.js"></script>
  </body>
</html>