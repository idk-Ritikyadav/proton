<?php

include('../scripts/connection.php');
$sql = "SELECT * FROM userdetails";
$result = mysqli_query($conn, $sql);
$total_user = mysqli_num_rows($result);

$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);
$total_post = mysqli_num_rows($result);


include('../components/viewscounter.php');

?>


<div class="card">

    <div class="card1 cards">
        <h2>
            Total Users
        </h2>
        <p>
            <?php echo $total_user; ?>
        </p>
    </div>

    <div class="card3 cards">
        <h2>
            Total Requests
        </h2>
        <p>
            <?php echo $current_count; ?>
        </p>
    </div>
    <div class="card2 cards">
        <h2>
            Total Posts </h2>
        <p>
            <?php echo $total_post; ?>
        </p>
    </div>
    <div class="card4 cards">
        <h2>Server Status</h2>
        <p style="color:green;font-weight:600; ">
            Active
        </p>
    </div>
</div>

