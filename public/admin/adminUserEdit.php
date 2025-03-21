<?php
 session_start();
 include __DIR__ . "/../../includes/config.php";
 include  "../../processes/fetch_edited_user.php";
 include  "../../processes/update_edited_user.php";

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

    <title>Edit User || Admin</title>
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
              <li class="mb-2"><a href="<?php echo BASE_URL; ?>public/admin/adminPanel.php" class="block p-2 hover:bg-orange-200 rounded-sm hover:text-gray-900 ">Dashboard</a></li>
              <li class="mb-2"><a href="<?php echo BASE_URL; ?>public/admin/adminProfileBoard.php" class="block p-2 hover:bg-orange-200 rounded-sm hover:text-gray-900">Profile</a></li>
              <li class="mb-2"><a href="<?php echo BASE_URL; ?>public/admin/adminUserBoard.php" class="block p-2  bg-orange-500 rounded-sm hover:bg-orange-500">Users</a></li>
              <li class="mb-2"><a href="<?php echo BASE_URL; ?>public/admin/adminBlogsBoard.php" class="block p-2 hover:bg-orange-200 rounded-sm hover:text-gray-900">Blogs</a></li>
              <li class="mb-2"><a href="<?php echo BASE_URL; ?>public/admin/adminCategoriesBoard.php" class="block p-2 hover:bg-orange-200 rounded-sm hover:text-gray-900">Categories</a></li>
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
              <a href="<?php echo BASE_URL;?>public/admin/adminUserBoard.php">
                <button class="bg-blue-500 text-white px-4 py-2 rounded">Show All User</button>
              </a>
            </header>

            <!-- Content -->
            <main class="p-6 h-[550px] overflow-y-auto overflow-x-auto" >
              <h2 class="text-2xl font-semibold mb-4">Edit <span class="mx-3"><?php echo htmlspecialchars($editUser['username']); ?>'s</span> Information  </h2>
              <div class="flex justify-center py-10 px-4">
                <div class="w-full md:w-md">
                  <form method="POST">

                      <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

                      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="mb-4">
                          <p class="font-semibold mb-1 text-gray-800">User Name</p>
                          <input type="text" placeholder="Name" name="name" id="name" value="<?php echo htmlspecialchars($editUser['username']); ?>" class="w-full px-4 py-3 rounded-lg border border-gray-700 text-gray-900 focus:outline-1 focus:border-indigo-500" />
                        </div>
                        <div class="mb-4">
                          <p class="font-semibold mb-1 text-gray-800">User Email</p>
                          <input type="email" placeholder="Email" name="email" id="email" value="<?php echo htmlspecialchars($editUser['email']); ?>" class="w-full px-4 py-3 rounded-lg border border-gray-700 text-gray-900 focus:outline-1 focus:border-indigo-500" />
                        </div>
                      </div>
                      <div class="mb-4">
                        <p class="font-semibold mb-1 text-gray-800">Role</p>
                        <select name="role" id="role" class="w-full px-4 py-3 rounded-lg border border-gray-700 text-gray-900 focus:outline-1 focus:border-indigo-500">
                          <option value="user">User</option>
                          <option value="admin">Admin</option>
                          
                        </select>
                      </div>
                      <button type="submit" class="w-full py-3 rounded-lg bg-orange-500 text-white font-semibold hover:bg-orange-400 focus:outline-none">Save</button>
                    </form>
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
