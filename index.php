<?php include('./components/makedatabase.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/homepage.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Proton</title>
</head>

<body>
  <nav>
    <style>
      nav {
        height: 12vh;
        font-size: 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        top: 0;
        z-index: 100;
        padding: 1rem 2rem;
      }

      nav h1 {
        font-weight: 600;
        font-size: 2rem;
        color: rgb(49, 49, 162);
      }

      nav a {
        color: #fff;
      }

      ul,
      li {
        font-weight: lighter;
        font-size: 1rem;
        display: inline;
        margin: 1.5rem;
      }

    </style>
    <span>
      <h1>Pro<span style="color:orange" ;>ton</span></h1>
    </span>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="./pages/register.php">Register</a></li>
      <li><a href="./pages/signin.php">Login</a></li>
    </ul>

  </nav>

  <section id="main">
    <div class="alpha ab">
      <h1>You are warmly Welcome !! </h1>
      <p>
        Affiliated to the National Examination Board (NEB) of Nepal, Moonlight
        Secondary School (MOLISS), Kumaripati, Lalitpur, is the result of the
        joint effort of principals of various renowned schools and highly
        motivated professors, lecturers and educationists, who are qualified,
        dedicated and experienced.
      </p>

      <div class="specialbtn">
        <a href="./pages/register.php">Register</a>
        <a href="./pages/signin.php">Signin</a>
      </div>
      <span class="socialmedia">
        <!-- icons and hover effect -->
        <a href="https://www.facebook.com/moonlight123moliss/" class="fb fa fa-facebook"></a>
        <a href="#" class="li fa fa-linkedin"></a>
        <a href="#" class="yt fa fa-youtube"></a>

      </span>
    </div>
   

  </section>
</body>
<style>
  .footer {
    font-size: 1.5rem;
    font-weight: 600;
    position: fixed;
    bottom: 0;
    right: 3;
    margin: 10px;
    color: chartreuse;
    font-size: 14px;
  }
</style>

<div class="footer">Designed by Rashi and Sabnam and Developed by <a href="http://ritikyadav.com.np">Ritik</a> </div>
</html>