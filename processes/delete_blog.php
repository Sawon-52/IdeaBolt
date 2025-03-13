<?php
// Include necessary files
include __DIR__ . "/../includes/db.php";
include __DIR__ . "/../includes/config.php";

// Start the session
session_start();

// Check if the user is logged in and is an admin
if (isset($_SESSION['user_id']) && $_SESSION['user_role'] === 'admin') {
    // Get the blog ID from the URL
    if (isset($_GET['blog_id'])) {
        $blog_id = $_GET['blog_id'];

        // Prepare the SQL query to delete the blog
        $sql = "DELETE FROM blogs WHERE id = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind the blog ID parameter
            $stmt->bind_param("i", $blog_id);

            // Execute the query
            if ($stmt->execute()) {
                $_SESSION['message'] = "Blog successfully deleted.";
            } else {
                $_SESSION['message'] = "Failed to delete blog: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            $_SESSION['message'] = "Failed to prepare the SQL statement.";
        }
    } else {
        $_SESSION['message'] = "Blog ID not provided.";
    }
} else {
    // If the user is not an admin, set an error message
    $_SESSION['message'] = "You do not have permission to delete this blog.";
}

// Close the database connection
$conn->close();

// Redirect back to the admin blogs page
header("Location: " . BASE_URL . "public/admin/adminBlogsBoard.php");
exit();
?>