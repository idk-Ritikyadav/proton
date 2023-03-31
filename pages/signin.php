<?php 
    include('../scripts/connection.php');
    include('../scripts/signin-script.php');
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
<title>Signin</title>
</head>

<body>
<?php include('../components/navbar.php') ?>

  <main>
    <div class="container">

        <img class="formimg" src="../assets/signinimage.svg" alt="">

        <form action="" method="post">
            <h1>Signin</h1>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control border" name="username" id="username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control border" name="password" id="password">
            </div>
            <div class="form-group row">
                    <div class="">
                        <p id="message" class="text-danger" style="color:white;" >
                        
                        <?php if(isset($error)){echo $error;} ?>
                      
                      </p>
                    </div>
        
            <!-- forget button -->
            <div class="form-group">
                <a class="already" title="Banaune time ma yad garnu partheo, aba reset hudaina! :( 🏗️">Forget password?</a>
            </div>
            <div class="form-group">
              <input type="submit" class="btn" value="Signin">
              <p class="already">Don't have an account? <a href="register.php">Register</a></p>

            </div>
          </form>
    </div>
  </main>
</body>

</html>