<?php
include __DIR__ . '/../../includes/config.php';
session_start();
?>
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
                    <li><a href="<?php echo BASE_URL; ?>public/index.php">Home</a></li>
                    <li><a href="<?php echo BASE_URL; ?>public/about.php">About</a></li>
                    <li><a href="<?php echo BASE_URL; ?>public/blog.php">Blog</a></li>
                    <li><a href="<?php echo BASE_URL; ?>public/contact.php">Contact</a></li>
                </ul>
                </div>
                <a href="<?php echo BASE_URL;?>public/index.php" class="text-3xl font-bold">idea<span class="text-orange-500">Bolt</span></a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1 text-xl">
                    <li><a href="<?php echo BASE_URL; ?>public/index.php">Home</a></li>
                    <li><a href="<?php echo BASE_URL; ?>public/about.php">About</a></li>
                    <li><a href="<?php echo BASE_URL; ?>public/blog.php">Blog</a></li>
                    <li><a href="<?php echo BASE_URL; ?>public/contact.php">Contact</a></li>
                </ul>
            </div>
            

            <?php if (isset($_SESSION["user_id"])): ?>
                <?php if ($_SESSION["user_role"] === "admin"): ?>
                    <div class="navbar-end">
                    <a href="<?php echo BASE_URL; ?>public/admin/adminPanel.php" class="btn bg-orange-500 text-white text-xl"><?php echo htmlspecialchars($_SESSION["user_name"]); ?></a>
                </div>
                <?php else: ?>
                    <div class="navbar-end">
                    <a href="<?php echo BASE_URL; ?>public/userPanel.php" class="btn bg-orange-500 text-white text-xl"><?php echo htmlspecialchars($_SESSION["user_name"]); ?></a>
                </div>
                <?php endif; ?>

            <?php else: ?>
                <!-- Display login button if not logged in -->
                <div class="navbar-end">
                    <a href="<?php echo BASE_URL; ?>public/login.php" class="btn bg-orange-500 text-white text-xl">login</a>
                </div>
            <?php endif; ?>

            
        </div>
    </nav>
    
</header>