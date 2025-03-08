<?php 
include __DIR__ . "/../includes/db.php";
// Fetch the edited user's data

// Initialize $editUser variable
    $editUser = null;

    // Check if the Edit button was clicked
    if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];

    // Fetch the user's data from the database
    $sql = "SELECT id, username, email, role FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $edit_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $editUser = $result->fetch_assoc(); // Fetch the user's data
    }

    $stmt->close();
    }

    $conn->close();

?> 