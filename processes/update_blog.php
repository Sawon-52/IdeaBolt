<?php
include __DIR__ . "/../includes/db.php";
include __DIR__ . "/../includes/config.php";


// get blog_id from query params 

   $blog_id = $_GET['blog_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Get form data
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $category_id = $_POST['category_id']; // Get category_id from the form
    $user_id = $_SESSION['user_id']; // Get user_id from the session

    // Handle featured image upload
    if (isset($_FILES['featured_image']) && $_FILES['featured_image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = '../../uploads/';
        $uploadFile = $uploadDir . basename($_FILES['featured_image']['name']);

        // Move uploaded file to the uploads directory
        if (move_uploaded_file($_FILES['featured_image']['tmp_name'], $uploadFile)) {
            $featured_image = $uploadFile;
        } else {
            $_SESSION['message'] = "Failed to upload featured image.";
            header("Location:". BASE_URL."public/admin/adminEditBlogPage.php?blog_id=$blog_id");
            exit();
        }
    } else {
        $_SESSION['message'] = "No featured image uploaded or there was an error.";
        header("Location:". BASE_URL."public/admin/adminCreateBlogPage.php?blog_id=$blog_id");
        exit();
    }

     // Insert the new blog into the database
     $sql = "UPDATE blogs SET title = ?, slug = ?, description= ?, content= ?, category_id= ?, featured_image= ? 
            WHERE id = ?";
     $stmt = $conn->prepare($sql);
     $stmt->bind_param("ssssssi", $title, $slug, $description, $content, $category_id, $featured_image, $blog_id);

     if ($stmt->execute()) {
        $_SESSION['message'] = "successfully Update blog";
        header("Location:". BASE_URL."public/admin/adminBlogsBoard.php");
        exit();
     } else {
        $_SESSION['message'] = "Fail to Update blog " . $stmt->error;
        header("Location:". BASE_URL."public/admin/adminEditBlogPage.php?blog_id=$blog_id");
        exit();
     }


}

?>