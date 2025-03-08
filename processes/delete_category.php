<?php 
include __DIR__ . "/../includes/db.php";
include __DIR__ . "/../includes/config.php";
 session_start();

// Fetch the logged-in user's data
if (isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {

    // Get the user ID from the URL
    $category_id = $_GET['cat_id'];
    echo  $category_id;
    
    // Delete the user from the database
    $sql = "DELETE FROM categories WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $category_id);

    if ($stmt->execute()) {
        echo "Category deleted successfully!";

        // Redirect back to the main page
        header("Location:".BASE_URL."public/admin/adminCategoriesBoard.php");
    } else {
        echo "Error deleting category: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} 

?> 