<?php
include('connection.php'); 

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_GET['id']) or isset($_GET['username'])) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM userdetails WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }
  }
  ?>