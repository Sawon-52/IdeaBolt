<?php
include  "../includes/db.php" ;

// Initialize error message and form data variables
$error_message = "";
$name = "";
$email = "";
$password = "";
$confirm_password = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the registration processing logic
    include "../processes/register_process.php";

    // Repopulate form data if an error occurs
    if (!empty($error_message)) {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["password"]);
        $confirm_password = htmlspecialchars($_POST["confirm_password"]);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- tailwind cdn -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <!-- fontawosome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- daisy ui cdn -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- google font link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />

    <!-- custom style  -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>login | ideaBolt</title>
  </head>
  <body class="roboto">
    <!-- navber  -->
    <?php include 'components/navbar.php' ?>

    <!----hero section --->
    <section class="bg-gray-800 text-white">
      <div class="relative max-w-screen-xl mx-auto min-h-[200px] flex flex-col justify-center items-center">
        <p class="absolute top-2 left-0 py-3 text-gray-300">Home <i class="fa-solid fa-angle-right mx-2"></i> Register</p>

        <div class="text-center max-w-4xl">
          <h1 class="text-4xl md:text-6xl font-semibold mb-5">Register</h1>
        </div>
      </div>
    </section>

    <!-- main section -->
    <main class="bg-stone-100">
      <div class="relative max-w-screen-xl mx-auto">
        <div class="isolate bg-stone-100">
          <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
            <div class="relative left-1/2 -z-10 aspect-1155/678 w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>

          <div class="flex justify-center py-10">
            <div class="w-sm md:w-md shadow-2xl p-10">
              <!-- Display error message here -->
              <?php if (!empty($error_message)): ?>
                  <div id="error-message" class="relative text-red-600   text-center ">
                      <p><?php echo $error_message; ?></p>
                  </div>
              <?php endif; ?>

              <form method="POST">
                <div class="mb-4">
                  <p class="font-semibold mb-1 text-gray-800">Name</p>
                  <input type="text" placeholder="Full name" name="name" id="name" value="<?php echo "$name" ?>" class="w-full px-4 py-3 rounded-lg  border border-gray-700 text-gray-900 focus:outline-1 focus:border-indigo-500" />
                </div>

                <div class="mb-4">
                  <p class="font-semibold mb-1 text-gray-800">Email</p>
                  <input type="email" placeholder="Email" name="email" id="email" value="<?php echo "$email" ?>" class="w-full px-4 py-3 rounded-lg  border border-gray-700 text-gray-900 focus:outline-1 focus:border-indigo-500" required />
                </div>

                <div class="mb-6 relative">
                  <p class="font-semibold mb-1 text-gray-800">Password</p>
                  <input type="password" placeholder="Enter your password" name="password" id="password" value="<?php echo "$password" ?>" class="w-full px-4 py-3 rounded-lg  border border-gray-700 text-gray-900 focus:outline-1 focus:border-indigo-500" />
                  <button id="showButton" type="button" class="absolute right-3 top-10 " >
                    <i class="fa-solid fa-eye" ></i>
                  </button>
                  <button id="hideButton" class="absolute right-3 top-10  hidden " type="button">
                    <i class="fa-solid fa-eye-slash" ></i>
                  </button>
                </div>

                <div class="mb-6 relative">
                  <p class="font-semibold mb-1 text-gray-800">Confirm Password</p>
                  <input type="password" placeholder="Enter your password" name="confirm_password" id="confirm_password" value="<?php echo "$confirm_password" ?>"  class="w-full px-4 py-3 rounded-lg  border border-gray-700 text-gray-900 focus:outline-1 focus:border-indigo-500"  required/>

                  <button id="showButton" type="button" class="absolute right-3 top-10 " >
                    <i class="fa-solid fa-eye" ></i>
                  </button>
                  <button id="hideButton" class="absolute right-3 top-10  hidden " type="button">
                    <i class="fa-solid fa-eye-slash" ></i>
                  </button>
                </div>

                <button type="submit" class="w-full py-3 rounded-lg bg-orange-600 text-white font-semibold hover:bg-orange-500 focus:outline-none">Register</button>
              </form>
              <p class="text-sm text-gray-400 my-6 text-center">Already have an account? <a href="login.php" class="text-orange-500 hover:text-orange-300">Log in</a></p>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- footer  -->
    <?php include 'components/footer.php' ?>

    <script src="assets/js/script.js"></script>
  </body>
</html>
