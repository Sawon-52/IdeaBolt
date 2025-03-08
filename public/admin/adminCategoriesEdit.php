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

    <title>Categories | Admin </title>
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
              <li class="mb-2"><a href="<?php echo BASE_URL; ?>public/admin/adminPanel.php" class="block p-2 hover:bg-orange-200 rounded-sm hover:text-gray-900">Dashboard</a></li>
              <li class="mb-2"><a href="<?php echo BASE_URL; ?>public/admin/adminProfileEdit.php" class="block p-2 hover:bg-orange-200 rounded-sm hover:text-gray-900">Profile</a></li>
              <li class="mb-2"><a href="<?php echo BASE_URL; ?>public/admin/adminUserBoard.php" class="block p-2 hover:bg-orange-200 rounded-sm hover:text-gray-900">Users</a></li>
              <li class="mb-2"><a href="<?php echo BASE_URL; ?>public/admin/adminBlogsEdit.php" class="block p-2 hover:bg-orange-200 rounded-sm hover:text-gray-900">Blogs</a></li>
              <li class="mb-2"><a href="<?php echo BASE_URL; ?>public/admin/adminCategoriesEdit.php" class="block p-2  bg-orange-500 rounded-sm hover:bg-orange-500">Categories</a></li>
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
              <button class="bg-blue-500 text-white px-4 py-2 rounded">Add Category</button>
            </header>

            <!-- Content -->
            <main class="p-6 min-h-[500px]" >
              <h2 class="text-2xl font-semibold mb-4">Category Management </h2>
              <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
                <table class="table">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th></th>
                      <th>Name</th>
                      <th>Job</th>
                      <th>Favorite Color</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- row 1 -->
                    <tr>
                      <th>1</th>
                      <td>Cy Ganderton</td>
                      <td>Quality Control Specialist</td>
                      <td>Blue</td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                      <th>2</th>
                      <td>Hart Hagerty</td>
                      <td>Desktop Support Technician</td>
                      <td>Purple</td>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                      <th>3</th>
                      <td>Brice Swyre</td>
                      <td>Tax Accountant</td>
                      <td>Red</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </main>
          </div>
        </div>
      </div>
    </main>

    <script src="<?php echo BASE_URL; ?>public/assets/js/script.js"></script>
  </body>
</html>
