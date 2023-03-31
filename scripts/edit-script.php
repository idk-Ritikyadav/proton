<?php
include('connection.php');


if (isset($_GET['username'])) {
    $username = $_GET['username'];

    $sql = "SELECT id FROM userdetails WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
    } else {
        echo "Username not found.";
        exit();
    }
}

$sql = "SELECT * FROM userdetails WHERE id=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}

?>