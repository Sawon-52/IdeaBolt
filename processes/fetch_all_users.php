<?php 
include __DIR__ . "/../includes/db.php";
// Fetch the logged-in user's data
if (isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    
    // Fetch all users from the database
    $sql = "SELECT id, username, email, role, profile_picture FROM users";
    $result = $conn->query($sql);

    if (!$result) {
        die("Error fetching users: " . $conn->error);
    }


    $users = $result->fetch_all(MYSQLI_ASSOC); // Fetch all rows as an associative array
    $conn->close();
} 

?> 