<?php
include __DIR__ . "/../includes/db.php";
include __DIR__ . "/../includes/config.php";

// Initialize error message variable
$error_message = "";
$success_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category_name = $_POST["category_name"];


    // Insert the new user into the database
    $stmt = $conn->prepare("INSERT INTO categories (name) VALUES (?)");
    $stmt->bind_param("s", $category_name);

    if ($stmt->execute()) {
        // Redirect to the dashboard
        header("Location:".BASE_URL."public/admin/adminCategoriesBoard.php");
        exit();
    } else {
        $error_message = "Error: " . $stmt->error;
    }


    $stmt->close();

}
?>