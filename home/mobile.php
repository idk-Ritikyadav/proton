<?php
include('../scripts/connection.php');
include('../scripts/signin-script.php');
include('../scripts/info-script.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  if (isset($_POST['message'])) {
    $message = $_POST['message'];
    $post_time = date("Y-m-d H:i:s");
    $user_name = $_SESSION['name'];
    $sql = "INSERT INTO posts (`message`, `post_time`, `user_name`)
       VALUES ('$message', '$post_time', '$user_name')";
    $result = mysqli_query($conn, $sql);


    if ($result) {
      echo '<script>alert("The record was inserted successfully")</script>';
    } else {
      echo "Error inserting record: " . mysqli_error($conn);
    }
  }
  mysqli_close($conn);
  header('Location: ./mobile.php#home', true, 303);
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/mobile.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Proton</title>
</head>
<body>
  <div class="navbar">
    <a href="#home"><i class="fa fa-fw fa-home"></i> </a>
    <a href="#feature"><i class="fa fa-fw fa-cube"></i> </a>
    <a href="#add" id="navadd"><i class="fa fa-fw fa-plus"></i> </a>
    <a href="#profile"><i class="fa fa-fw fa-user"></i> </a>
    <a href="../scripts/logout.php"><i class="fa fa-fw fa-sign-out"></i> </a>
  </div>
  <section>
    <div id="home">
      <?php include('../components/posts.php'); ?>
    </div>
    <div id="profile">
    <div class="tprofile ">
<div class="profile-info ">
    <div class="imgnstaus ">
        <div class="profilepic ">
            <img class="propic" src="../assets/ritik.png">
        </div>
        <h3 class="name"><?php echo $_SESSION['name']; ?> </h3>
        <p class="status">People are not lazy. They simply have impotent goals - that is, goals that do not inspire them.
        </p>
    </div>
    <div class="profiletable">
        <?php
        $_SESSION['username'] = $username;
        include('../components/cprofile.php');
        ?>
    </div>
</div>
</div>
    </div>
    <div id="notification">
      <img src="https://i0.wp.com/www.adva.ie/wp-content/uploads/2020/07/CONSTRUCTION-SITE-KEEP-OUT.jpg" alt="" srcset="">
      </p>
    </div>
    <div id="add">
    <form action="" method="post">
        <div class="post">
          <div class="postnav">
            <div class="profileimg">
              <img src="../assets/ritik.png">
            </div>
            <div class="postinfo">

              <h2><?php echo $_SESSION['name']; ?></h2>
              <p class="date">
                <?php echo date("F j, l");
                ?>
              </p>
            </div>
          </div>
          <hr>
          <textarea draggable="false" name="message" class="fg" id="message" required cols="50" rows="5" placeholder="What is in your mind?" style="border: none;"></textarea>
          <div class="pbtn">
            <input id="submit" type="submit" value="Post" class="fg">
          </div>
          <br>
          <div class="postfooter" style="margin-top: auto;">
            <span class="time foot">
              <?php
              echo date("h:i A");
              ?>
            </span>
          </div>
        </div>
      </form>    </div>
    <div id="feature">
<?php include('../components/feature.php')  ; ?> </div>
  </section>
</body>
</html>