


<form action="" method="post">
        <div class="post">
          <div class="postnav">
            <div class="profileimg">
              <img src="../assets/ritik.png">
            </div>
            <div class="postinfo">

              <h2><?php echo $post['user_name']; ?></h2>
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

      </form>