<?php 
$conn = mysqli_connect("localhost", "root", "", "school");
// $conn = mysqli_connect("sql106.epizy.com", "epiz_33719294", "2357Prime@@@@", "epiz_33719294_school");


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

include('../components/viewscounter.php');

?>