<?php

include "../includes/db.php";

$error_message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Fetch user from the database using prepare and bind
    $stmt = $conn->prepare("SELECT id, name, hashed_password, role FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $name, $hashed_password, $role);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            // Login successful
            session_start();
            $_SESSION["user_id"] = $id;
            $_SESSION["user_name"] = $name;
            $_SESSION["user_role"] = $role;

            // Redirect based on role
            if ($role === "admin") {
                header("Location: ../public/admin/adminPanel.php");
            } else {
                header("Location: ../public/userPanel.php");
            }
            exit();
        } else {
            $error_message = "Invalid password!";
        }
    } else {
        $error_message = "User not found!";
    }

$stmt->close();
}
$conn->close();


?>