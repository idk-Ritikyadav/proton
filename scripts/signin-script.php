<?php 

include('connection.php');
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $hash = $user['password'];
        if (password_verify($password, $hash)) {
            session_start();
            $_SESSION['username'] = $username;



$sql ="SELECT `name`, `stream`, `shift`, `year`, `address`, `phone` FROM userdetails WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
      
            // Check if the query was successful and if the user's profile data exists
            if (mysqli_num_rows($result) == 1) {
              $row = mysqli_fetch_assoc($result);
              // Store the user's profile data in session variables
              $username = $_POST['username'];
              $_SESSION["name"] = $row["name"];
              $_SESSION["stream"] = $row["stream"];
              $_SESSION["shift"] = $row["shift"];
              $_SESSION["year"] = $row["year"];
              $_SESSION["address"] = $row["address"];
              $_SESSION["phone"] = $row["phone"];
              
              
            }
            
            // Close the database connection
            mysqli_close($conn);
           
            if($username == 'admin'){
                header("Location: ../pages/admin.php");
            } else {
                header("Location: ../home/mobile.php");
            }
        }

        else {
           
            $error = "Wrong password";

        }
    }elseif(mysqli_num_rows($result) == 0) {
                $error = "That Username does not exists";
                header('Refresh: 2; url=' . $_SERVER['PHP_SELF']);

            }
}
?>