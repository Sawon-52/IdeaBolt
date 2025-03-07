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
      <div class="relative max-w-screen-xl mx-auto min-h-[200px] flex flex-col justify-center items-center">
        <p class="absolute top-2 left-0 py-3 text-gray-300">Home <i class="fa-solid fa-angle-right mx-2"></i> Blog</p>

        <div class="text-center max-w-4xl">
          <h1 class="text-4xl md:text-6xl font-semibold mb-5">Blog</h1>
        </div>
      </div>
    </section>

    <!-- main section -->
    <main class="flex flex-col justify-center bg-stone-100">
      <div class="h-40"></div>
    </main>

    <!-- footer  -->
    <?php include 'components/footer.php' ?>
    
  </body>
</html>
