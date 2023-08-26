<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hcplus-gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
      body{
       background-color: #f7f5f2; 
      }
      /* abhi */
      #top-gallery{
        width: 100%;
        height: 100%;
        
      }
      .heading{
        color: blue;
        text-align: center;
        font-size: 40px;
        font-weight: bold;
      }
      #top-gallery .container{
        margin-top: 30px;
      }
      #top-gallery .gallery-photo{
        border-radius: 10px;
         transition: 0.5s;
         cursor: pointer;
      }
       #top-gallery .gallery-photo img{
        border-radius: 10px;
        width: 230px;
        height: 230px;
        margin-bottom: 15px;
       }
        #top-gallery .gallery-photo:hover{
          transform: translateY(-10px);
        }
    </style>
  </head>
  <body>
    <?php include "header.php"; ?>
    
     <section id="top-gallery">
       <div class="heading">
         Our Gallery
       </div>
       <div class="container">
          <div class="row">
              <div class="col-md-3">
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
              </div>
         </div>
       </div>
     </section>

    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>