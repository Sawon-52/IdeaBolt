
<?php
// Database configuration
$server = "localhost";       
$username = "root";        
$password = "";            
$database = "ideabolt_db"; 

// Create a connection to the database
$conn = new mysqli($server, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>