<?php 
include __DIR__ . "/../includes/db.php";
// Fetch the logged-in user's data
if (isset($_SESSION['user_id'])) {
  
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT username, email , hashed_password, role, profile_picture, bio  FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc(); // Fetch the user's data
    } else {
        die("User not found.");
    }

} else {
    die("User not logged in.");
}

?>