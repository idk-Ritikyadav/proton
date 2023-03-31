<?php
include('../scripts/feed.php');
?>

<style>
    .post {
        padding: 10px;
        margin-bottom: 4px;
        background: #F9F9F9;
        margin: 11px;
        border-radius: 5px;
        height: auto;
    }

    .post h2 {
        font-size: 0.8rem;
        font-weight: 600;
    }

    .post .date {
        font-size: 10px;
        margin-top: 0.2rem;
    }

    .content {
        margin: 11px 13px;
        font-size: 16px;
        padding: 0.5rem 0.2rem;
        word-wrap: break-word;
    }

    .profileimg {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        overflow: hidden;
        margin-right: 1rem;
        margin-left: 18px;
        margin-top: 11px;
    }

    .profileimg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .postinfo {
        margin-top: 11px;
        display: inline;
        align-items: center;
        margin-bottom: 0.5rem;
    }

    .postnav {
        display: flex;
        align-items: center;
    }

    hr {
        border: 1px solid #FFFFFF;
        box-shadow: 1px 4px 10px grey;
    }

    .foot {
        font-size: 10px;
        font-weight: 600;
        margin-left: 11px;
        margin: 0rem 1rem;

    }

    .postfooter {
        margin-bottom: 11px;
    }

    .postfooter::after {
        content: "";
        display: table;
        clear: both;
    }

    .love {
        float: left;
    }

    .time {
        float: right;
    }
</style>

<?php foreach ($posts as $post) : ?>
    <div class="post">
        <div class="postnav">
            <div class="profileimg">
                <img src="../assets/ritik.png">
            </div>
            <div class="postinfo">

                <h2><?php echo $post['user_name']; ?></h2>
                <p class="date"><?php echo date('F j, Y', strtotime($post['post_time'])); ?></p>
            </div>


        </div>
        <hr>
        <div class="postcontent">

            <div class="content"><?php echo $post['message']; ?></div>
        </div>
        <div class="postfooter">
            <span class="love foot">🏗️ people Loved</span>
            <!-- get time with am and pm -->
            <span class="time foot">
                <?php
                $time = date('h:i A', strtotime($post['post_time']));
                echo $time;
                ?>
            </span>
        </div>
    </div>
<?php endforeach; ?>