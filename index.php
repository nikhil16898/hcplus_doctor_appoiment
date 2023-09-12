<?php
  session_start(); 
  error_reporting(0);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HealthcarePlus</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/f743aa5832.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php include "header.php"; ?>
    
    
    <!-- slider -->
    <div class="slider">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slider/s1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="text">
        <h5>HealthcarePlus</h5>
        <p>Some representative placeholder content for the second slide.</p>
        <a href="#">book appointment</a>
      </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slider/slider_1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="text">
        <h5>HealthcarePlus</h5>
        <p>Some representative placeholder content for the second slide.</p>
        <a href="#">book appointment</a>
      </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slider/slider_3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="text">
        <h5>HealthcarePlus</h5>
        <p>Some representative placeholder content for the second slide.</p>
        <a href="#">book appointment</a>
      </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<!-- about us -->

 <div class="about">
   <div class="about-img">
     <img src="img/about.jpg">
   </div>
   <div class="about-text">
     <h3><span>About</span> US</h3>
     <p>Our mission declares our purpose of existence as a company and our objectives.<br><br>To give every customer much more than what he/she asks for in terms of quality, selection, value for money and customer service, by understanding local tastes and preferences and innovating constantly to eventually provide an unmatched experience in jewellery shopping.</p>
   </div>
 </div>


<!-- doctor -->

<section id="doctors" class="doctors">
  <div class="container">
    <div class="docter-title">
      <center><h2>Doctor</h2></center>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="member d-flex alig-items-start">
          <div class="pic"><img src="img/doctors/1.png" class="img-fluid"></div>
          <div class="member-info"> 
            <h4>Abhi ratanpara</h4>
            <span>Chief Medical Officer</span>
            <p>sit sint consectetur velit.
            Quisquam quos quisquam cupiditate.</p>
            <div class="social">
              <a href=""><i class="fa-brands fa-instagram"></i></a>
              <a href=""><i class="fa-brands fa-facebook"></i></a>
              <a href=""><i class="fa-brands fa-twitter"></i></a>
              <a href=""><i class="fa-brands fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4 mt-lg-0">
        <div class="member d-flex alig-items-start">
          <div class="pic"><img src="img/doctors/4.jpg" class="img-fluid"></div>
          <div class="member-info"> 
            <h4>pritiksha</h4>
            <span>Anesthesiologist</span>
            <p>sit sint consectetur velit.
            Quisquam quos quisquam cupiditate.</p>
            <div class="social">
              <a href=""><i class="fa-brands fa-instagram"></i></a>
              <a href=""><i class="fa-brands fa-facebook"></i></a>
              <a href=""><i class="fa-brands fa-twitter"></i></i></a>
              <a href=""><i class="fa-brands fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4">
        <div class="member d-flex alig-items-start">
          <div class="pic"><img src="img/doctors/2.jpg" class="img-fluid"></div>
          <div class="member-info"> 
            <h4>Nikhil Solanki</h4>
            <span>Cardiology</span>
            <p>sit sint consectetur velit.
            Quisquam quos quisquam cupiditate.</p>
            <div class="social">
              <a href=""><i class="fa-brands fa-instagram"></i></a>
              <a href=""><i class="fa-brands fa-facebook"></i></a>
              <a href=""><i class="fa-brands fa-twitter"></i></a>
              <a href=""><i class="fa-brands fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4">
        <div class="member d-flex alig-items-start">
          <div class="pic"><img src="img/doctors/3.jpg" class="img-fluid"></div>
          <div class="member-info"> 
            <h4>Lauren Jones</h4>
            <span>Neurologist</span>
            <p>sit sint consectetur velit.
            Quisquam quos quisquam cupiditate.</p>
            <div class="social">
              <a href=""><i class="fa-brands fa-instagram"></i></a>
              <a href=""><i class="fa-brands fa-facebook"></i></a>
              <a href=""><i class="fa-brands fa-twitter"></i></a>
              <a href=""><i class="fa-brands fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- services -->
<section id="services" class="services">
  <div class="container">
    <div class="services-title">
      <h2>Services</h2>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex alig-items-stretch"> 
        <div class="icon-box">
          <div class="icon"><i class="fas fa-heartbeat"></i></div>
          <h4><a href="">Regular Checkup</a></h4>
          <p>Quisquam ques quisquam cupiditate Et nemo que imedite suscipit</p>
        </div>
      </div>
       <div class="col-lg-4 col-md-6 d-flex alig-items-stretch mt-4 mt-md-0">
        <div class="icon-box">
          <div class="icon"><i class="fa-solid fa-pills"></i></div>
          <h4><a href="">Medicine</a></h4>
          <p>Quisquam ques quisquam cupiditate Et nemo que imedite suscipit</p>
        </div>
      </div>
       <div class="col-lg-4 col-md-6 d-flex alig-items-stretch mt-4 mt-md-0">
        <div class="icon-box">
          <div class="icon"><i class="fa-solid fa-hospital-user"></i></div>
          <h4><a href="">Pharmeologist</a></h4>
          <p>Quisquam ques quisquam cupiditate Et nemo que imedite suscipit</p>
        </div>
      </div>
       <div class="col-lg-4 col-md-6 d-flex alig-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="fa-solid fa-dna"></i></div>
          <h4><a href="">blood Test</a></h4>
          <p>Quisquam ques quisquam cupiditate Et nemo que imedite suscipit</p>
        </div>  
      </div>
       <div class="col-lg-4 col-md-6 d-flex alig-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="fa-solid fa-wheelchair"></i></div>
          <h4><a href="">Disabled Person</a></h4>
          <p>Quisquam ques quisquam cupiditate Et nemo que imedite suscipit</p>
        </div>
      </div>
       <div class="col-lg-4 col-md-6 d-flex alig-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="fa-solid fa-notes-medical"></i></div>
          <h4><a href="">Health Post</a></h4>
          <p>Quisquam ques quisquam cupiditate Et nemo que imedite suscipit</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- cntact -->

<section id="contact" class="contact">
  <div class="container">
    <div class="contact-title">
      <h2>Contact</h2>
    </div>
    <!-- google map -->
    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=healthcare plus hospitel junagadh&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Game</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
     
     <div class="container">
       <div class="row mt-5">
         <div class="col-lg-4">
           <div class="info">
             <div class="address">
               <i class="fa-solid fa-location-dot"></i>
               <h4>Location:</h4>
               <p>Bus stand Road,362001</p>
             </div>
             <div class="email">
               <i class="fa-solid fa-envelope"></i>
               <h4>Email:</h4>
               <p>healthcareplus@gmail.com</p>
             </div>
             <div class="phone">
              <i class="fa-solid fa-phone"></i>
              <h4>Phone no:</h4>
               <p>+92 1234567890</p>
             </div>
           </div>
         </div>

         <div class="col-lg-8 mt-5 mt-lg-0">
           <form class="contact-form" method="POST">
             <div class="row">
               <div class="col-md-6 form-group">
                 <input type="" name="name" class="form-control" id="name" placeholder="your name" required="">
               </div>
             <div class="col-md-6 form-group mt-3 mt-md-0">
               <input type="email" name="email" class="form-control" id="email" placeholder="your email" required="">
             </div>
            <div class="form-group mt-3">
              <input type="" name="subject" class="form-control" id="subject" placeholder="subject" required="">
            </div>
            <div class="form-group mt-3">
              <textarea name="massage" rows="5" class="form-control" placeholder="Message(optional)"></textarea>
            </div>
            <div class="text-center">
              <button type="submit" name="submit">Send Message</button>
            </div>
           </form>
         </div>
       </div>
     </div>
  </div>
  
<?php
 
 include "conn.php";

 $name=$_POST['name'];
 $email=$_POST['email'];
 $subject=$_post['subject'];
 $massage=$_POST['massege'];

 if(isset($_POST['submit'])){
    
    // $sql="insert into `contact`(`name`,`email`,`subject`,`massage`)values('$name','$email','$subject','$massege')";
    $sql="INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES (NULL, '$name', '$email', '$subject', '$massage', current_timestamp());";
  
     mysqli_query($con,$sql);
    echo"<script>alert('deta insert')</script>";
 }
 else{
  echo"<script>alert('deta not insert')</script>";

 }

?>

</section>

<footer>
  <?php include "footer.php"; ?>
</footer>

     <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

 
  </body>
</html>

