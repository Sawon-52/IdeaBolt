<?php

include __DIR__ . "/../includes/db.php";

// Check if the user is logged in and is an admin
if (isset($_SESSION['user_id']) && $_SESSION['user_role'] === 'admin') {
    if (isset($_GET['blog_id'])) {
        $blog_id = $_GET['blog_id'];

        // Fetch the specific blog post with its category name
        $sql = "SELECT blogs.title, blogs.slug, blogs.description, blogs.content, blogs.featured_image, categories.name as category_name 
                FROM blogs 
                INNER JOIN categories ON blogs.category_id = categories.id 
                WHERE blogs.id = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("i", $blog_id); // Bind the blog_id parameter
            $stmt->execute();
            $result = $stmt->get_result();

            // Check if the blog post exists
            if ($result->num_rows > 0) {
                $blog = $result->fetch_assoc(); // Fetch the blog post data
            } else {
                die("Blog post not found.");
            }

            $stmt->close(); // Close the statement
        } else {
            die("Error preparing statement: " . $conn->error);
        }
    } else {
        die("Blog ID not provided.");
    }
} else {
    die("Access denied. You must be an admin to view this page.");
}

$conn->close(); // Close the connection
?>