<?php

// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'school';

// Create connection
$conn = mysqli_connect($host, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if database exists
$result = mysqli_query($conn, "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$database'");

if (mysqli_num_rows($result) == 0) {
    // Create database if it doesn't exist
    $sql = "CREATE DATABASE $database";
    if (mysqli_query($conn, $sql)) {
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);

// Create connection to school database
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$password = 'Admin@123';
$password_hash = password_hash($password, PASSWORD_BCRYPT);
// Read SQL file
$sql = "CREATE DATABASE IF NOT EXISTS school;

USE school;

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS userdetails (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255) NOT NULL,
  name VARCHAR(255) NOT NULL,
  phone VARCHAR(255) NOT NULL,
  address VARCHAR(255) NOT NULL,
  stream VARCHAR(255) NOT NULL,
  shift VARCHAR(255) NOT NULL,
  year VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS posts (
  post_id INT AUTO_INCREMENT PRIMARY KEY,
  message TEXT NOT NULL,
  post_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  user_name VARCHAR(255) NOT NULL
);

INSERT INTO `users` (`id`, `email`, `username`, `password`)
SELECT NULL, 'admin@gmail.com', 'admin', '$password_hash'
WHERE NOT EXISTS (SELECT * FROM `users` WHERE `username` = 'admin');
INSERT INTO `posts` (`post_id`, `message`, `post_time`, `user_name`) VALUES ('1', 'Welcome to the Portal, Your notices and discussion will appear here', CURRENT_DATE(), 'Admin');
";

// Execute SQL statements
if (mysqli_multi_query($conn, $sql)) {
    
} else {
    echo "Error executing SQL statements: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>


