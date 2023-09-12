<?php 
  include "session_start.php";
  error_reporting(0);
?>
 <!-- gallery -->
 <!-- <div class="gallery">
    <div class="gallery_title">
      <center><h1>our gallery</h1></center>
    </div>
      <div class="container">
        <div class="row">
            <?php
                include "conn.php";
                $sql = mysqli_query($con,"SELECT * FROM gallery LIMIT 3");
                if(mysqli_num_rows($sql) > 0){
                  while($row = mysqli_fetch_array($sql)){
                    echo '<div class="col-md-4 py-3 py-md-0">
                    <div class="gallery-photo">
                            <img src="admin/'.$row["img"].'" alt="photo">
                    </div>
                  </div>';
                  }
                }
              ?>
          </div>
        </div>
      </div>
      <div class="gallery_button">
        <center><button><a href="gallery_1.php" style="color:white; text-decoration: none;">show More</a></button></center>
      </div>
  </div> -->