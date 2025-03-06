

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

    <title>userPanel| ideaBolt</title>
  </head>
  <body class="roboto">

     <!-- navber  -->
     <?php include 'components/navbar.php' ?>

    <!-- main section -->
    <main class="relative flex flex-col justify-center bg-stone-100 ">
      <div class="isolate bg-stone-100">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
          <div class="relative left-1/2 -z-10 aspect-1155/678 w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>

        <div class="flex min-h-max max-w-screen-xl mx-auto">
          <!-- Sidebar -->
          <aside class="relative w-64 bg-gray-800 p-5 hidden md:block text-white">
            <h2 class="text-xl font-semibold mb-4">User Panel</h2>
            <ul>
              <li class="mb-2"><a href="#" class="block p-2 bg-orange-500 rounded-sm hover:bg-orange-500">Dashboard</a></li>
              <li class="mb-2"><a href="#" class="block p-2 hover:bg-orange-200 rounded-sm hover:text-gray-900">Profile</a></li>
              <li class="mb-2"><a href="#" class="block p-2 hover:bg-orange-200 rounded-sm hover:text-gray-900">Favorite Blogs</a></li>
              <li class="mb-2"><a href="#" class="block p-2 hover:bg-orange-200 rounded-sm hover:text-gray-900">Profile</a></li>
              <li class="mb-2"><a href="#" class="block p-2 hover:bg-orange-200 rounded-sm hover:text-gray-900">Profile</a></li>

              <?php if (isset($_SESSION["user_id"])): ?>
                <button type="button" class="absolute bottom-6 mb-2 w-[80%]"><a href="../processes/logout.php" class="block p-2 bg-red-500 hover:opacity-80 rounded-sm text-center ">Logout</a></button>
                <!-- <a href="processes/logout.php">Logout</a> -->
              <?php else: ?>
                  <!-- Display login button if not logged in -->
                  <button type="button" class="absolute bottom-6 mb-2 w-[80%]"><a href="./processes/logout.php" class="block p-2 bg-orange-500 hover:opacity-80 rounded-sm text-center">Login</a></button>
              <?php endif; ?>


              
            </ul>
          </aside>

          <!-- Main Content -->
          <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-gray-800 p-4 flex justify-between items-center shadow">
              <input type="text " placeholder="Search..." class="border p-2 w-1/3 rounded text-white" />
              <button class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
            </header>

            <!-- Content -->
            <main class="p-6 min-h-[500px]" >
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
    <?php include 'components/footer.php' ?>
    
  </body>
</html>
