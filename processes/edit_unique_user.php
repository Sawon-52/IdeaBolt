<?php 
include __DIR__ . "/../includes/db.php";
// Fetch the logged-in user's data
if (isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    
    // Fetch the user's data based on the ID
    $user_id = $_GET['id']; // Get the user ID from the URL
    $sql = "SELECT id, username, email, role, profile_picture FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
} 

?> 