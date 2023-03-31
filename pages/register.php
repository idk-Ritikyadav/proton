<?php
include('../scripts/register-script.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <title>Register</title>
    <style>
        .form-group {
            margin: 0.3rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.3rem;
        }

        .form-control {
            width: 100%;
            padding: 0.5rem;
            border-radius: 0.5rem;
            border: 2px solid #ccc;


        }

        .form-control:focus {
            outline: none;
            border: 2px solid #007bff;
        }

        .formimg {
            padding: 1rem;
        }
    </style>
</head>

<body>
    <?php include('../components/navbar.php') ?>
    <!-- main container and one box at its middle show 100 in mobile but 1/3 in desktop -->
    <main>
        <div class="container">

            <img class="formimg" src="../assets/signupimage.svg" alt="">
            <form action="" method="post">
                <h1>Register</h1>

                <div class="form-group row">
                    <label for="email" class="">Email</label>
                    <div class="">
                        <input type="email" class="form-control border" name="email" id="email" required>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="username" class="">Username</label>
                    <div class="">
                        <input type="text" class="form-control border" name="username" id="username" required>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="password" class="">Password</label>
                    <div class="">
                        <input type="password" class="form-control border" name="password" id="password" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="">
                        <p id="message" class="text-danger"></p>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="button">
                        <input type="submit" class="btn" value="Register">

                        <p class="already"> Already have an account? <a href="./signin.php">Login</a></p>

                    </div>
                </div>
            </form>
        </div>
    </main>
    <script src="../scripts/script.js"></script>
</body>

</html>