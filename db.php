<?php
$host = "localhost"; // Change if needed
$user = "root"; // Your database username
$password = ""; // Your database password
$dbname = "contact_db"; 

$conn = new mysqli($host, $user, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
