<?php
include __DIR__ . "/../includes/db.php";
include __DIR__ . "/../includes/config.php";
// Initialize error message variable

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $selectedRole = $_POST["role"];

      // Debug: Check the selected role
      echo "Selected Role: " . $selectedRole . "<br>";

    // Validate input
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        $error_message = "All fields are required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format!";
    } elseif ($password !== $confirm_password) {
        $error_message = "Passwords do not match!";
    } else {
        // Check if the email already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error_message = "Email already exists!";
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert the new user into the database
            $stmt = $conn->prepare("INSERT INTO users (username, email, hashed_password, role ) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $email, $hashed_password, $selectedRole);

            if ($stmt->execute()) {
                // Redirect to the dashboard
                header("Location:".BASE_URL."public/admin/adminUserBoard.php");
                exit();
            } else {
                $error_message = "Error: " . $stmt->error;
            }
        }

        $stmt->close();
    }
}
?>