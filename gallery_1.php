<?php 

include "session_start.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hcplus-gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css\gallery.css">
  </head>
  <body>
    <?php include "header.php"; ?>
    
     <section id="top-gallery">
       <div class="heading">
         Our Gallery
       </div>
       <div class="container">
          <div class="row">
            <?php

            include "conn.php";
            $sql = "SELECT * FROM `gallery`";
            $result = mysqli_query($con,$sql);
            if(mysqli_num_rows($result) > 0){
              while($img = mysqli_fetch_array($result)){
                echo '<div class="col-md-3">
                      <div class="gallery-photo">
                          <img src="admin/'.$img["img"].'">
                      </div>
                </div>';
                // echo "admi/".$img["img"];
              }
            }

            ?>  
         </div>
       </div>
     </section>

    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>










<!-- <div class="col-md-3">
                    <div class="gallery-photo">
                        <img src="admin\gallery\Acer_Wallpaper_01_3840x2400.jpg">
                    </div>
              </div>
              <div class="col-md-3 ">
                    <div class="gallery-photo">
                        <img src="img\gallery\docter2.jpg">
                    </div>
              </div>
              <div class="col-md-3 ">
                    <div class="gallery-photo">
                        <img src="img\gallery\docter2.jpg">
                    </div>
              </div>
              <div class="col-md-3 ">
                    <div class="gallery-photo">
                        <img src="img\gallery\docter2.jpg">
                    </div>
              </div>
              <div class="col-md-3">
                    <div class="gallery-photo">
                        <img src="img\gallery\docter2.jpg">
                    </div>
              </div>
               <div class="col-md-3">
                    <div class="gallery-photo">
                        <img src="img\gallery\docter2.jpg">
                    </div>
              </div>
               <div class="col-md-3">
                    <div class="gallery-photo">
                        <img src="img\gallery\docter2.jpg">
                    </div>
              </div> -->