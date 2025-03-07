<?php 
include __DIR__ . "/../includes/db.php";
include __DIR__ . "/../includes/config.php";


// Fetch the logged-in user's data
if (isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {

    // Get the user ID from the URL
    $user_id = $_GET['id'];
    
    // Delete the user from the database
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {
        echo "User deleted successfully!";
    } else {
        echo "Error deleting user: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
    // Redirect back to the main page
    header("Location:".BASE_URL."public/admin/adminUserEdit.php"); // Replace with your main page URL
    exit();
} 

?> 