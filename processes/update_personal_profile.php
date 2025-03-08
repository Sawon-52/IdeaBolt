
<?php
include __DIR__ . "/../includes/db.php";
include __DIR__ . "/../includes/config.php";

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    die("User not logged in.");
}

$user_id = $_SESSION['user_id'];

// Handle Form Submission

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $username = $_POST['name'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];
    $existing_profile_picture = $_POST['existing_profile_picture'];

    // Handle file upload
    if (isset($_FILES['profile_picture']) &&  $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
        echo $_FILES['profile_picture']['name'];
        $upload_dir = '../../uploads/';

        // Create the upload directory if it doesn't exist
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true); 
        }

        // Validate the file (e.g., check file type and size)
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        $file_type = $_FILES['profile_picture']['type'];
        $file_size = $_FILES['profile_picture']['size'];

        if (!in_array($file_type, $allowed_types)) {
            die("Invalid file type. Only JPEG, PNG, and GIF are allowed.");
        }

        if ($file_size > 2 * 1024 * 1024) { // 2MB limit
            die("File size exceeds the maximum limit of 2MB.");
        }

        // Generate a unique file name to avoid conflicts
        $file_name = uniqid() . '_' . basename($_FILES['profile_picture']['name']);
        $file_path = $upload_dir . $file_name;

        // Move the uploaded file to the central upload directory
        if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $file_path)) {
            // File uploaded successfully
        } else {
            die("Error uploading file.");
        }
    } else {
        // No file uploaded or an error occurred
        $file_path = $existing_profile_picture;
    }

    // Update the user's data in the database
    $sql = "UPDATE users SET username = ?, email = ?, bio = ?, profile_picture = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $username, $email, $bio, $file_path, $user_id);

    if ($stmt->execute()) {
        header("Location:". BASE_URL."public/admin/adminProfileBoard.php");
        echo "Profile updated successfully!";
    } else {
        echo "Error updating profile: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>