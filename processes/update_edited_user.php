<?php
include __DIR__ . "/../includes/db.php";
include __DIR__ . "/../includes/config.php";
// Initialize error message variable

$error_message = "";
$succes_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $selectedRole = $_POST["role"];

    $edit_id = $_GET['edit_id'];

    // Update the user's data in the database
    $sql = "UPDATE users SET username = ?, email = ?, role = ?  WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $name, $email, $selectedRole, $edit_id);

    if ($stmt->execute()) {
        header("Location:". BASE_URL."public/admin/adminUserBoard.php");
        $succes_message = "Profile updated successfully!";
    } else {
        $error_message = "Error updating profile: " . $stmt->error;
    }

    $stmt->close();
}

?>