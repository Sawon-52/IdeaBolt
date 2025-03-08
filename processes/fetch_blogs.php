<?php 
include __DIR__ . "/../includes/db.php";
// Fetch the logged-in user's data
if (isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    
    // Fetch all blogs from the database

    $sql = "SELECT blogs.id, blogs.title, blogs.featured_image, categories.name as category_name FROM blogs INNER JOIN categories ON blogs.category_id = categories.id  ";
    $result = $conn->query($sql);

    if (!$result) {
        die("Error fetching users: " . $conn->error);
    }
    


    $blogs = $result->fetch_all(MYSQLI_ASSOC); // Fetch all rows as an associative array
    $conn->close();
} 

?> 