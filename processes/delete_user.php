<?php 
include __DIR__ . "/../includes/db.php";
include __DIR__ . "/../includes/config.php";

session_start();
// Check if the user is logged in and is an admin
if (isset($_SESSION['user_id']) && $_SESSION['user_role'] == 'admin') {
    // Get the blog ID from the URL
    if (isset($_GET['id'])) {
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
    
    // Redirect back to the main page
    header("Location:".BASE_URL."public/admin/adminUserBoard.php"); // Replace with your main page URL
    exit();
    
    $stmt->close();
    $conn->close();

}
   
} else {
    // If the user is not an admin, set an error message
    echo "You do not have permission to delete this user."; 

}

?> 
