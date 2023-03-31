<?php 


// Connect to database
include('connection.php'); 


// Execute SELECT query
$sql = "SELECT user_name, message, post_time FROM posts ORDER BY post_time DESC";
$result = $conn->query($sql);

// Store data in array
$posts = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $posts[] = $row;
  }
}

// Close connection
$conn->close();

?>