<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <title>Admin</title>
</head>

<body>
    <div class="navbar">
        <a href="#dashboard"><i class="fa fa-fw fa-cube"></i> </a>
        <a href="#usertable"><i class="fa fa-fw fa-table"></i> </a>
        <a href="../pages/register.php" id="navadd"><i class="fa fa-user-plus"></i> </a>
        <a href="#home"><i class="fa fa-fw fa-home"></i> </a>
        <a href="../scripts/logout.php"><i class="fa fa-fw fa-sign-out"></i> </a>
    </div>


    <!-- main content -->
    <section>
        <div id="home">
            <h1>Users posts</h1>
            <?php include('../components/posts.php'); ?>
        </div>
        <div id="adduser">


        </div>
        <div id="usertable">
            <h1>Users</h1>
            <?php include('../components/userstable.php'); ?>

        </div>
        <div id="add">
            <h1>Admin Post</h1>
            <?php session_start();
            $_SESSION['username'] = "Admin";
            include('../components/addpost.php');


            ?>

        </div>
        <div id="dashboard">
            <h1>DashBoard</h1>
            <?php include('../components/dashboard.php'); ?>

        </div>
    </section>
</body>

</html>