 <!-- doctor -->
<!-- doctor title -->
<?php 
  include "session_start.php";
  error_reporting(0);
?>
<div class="do">
   <div class="docter">
     
      <div class="docter-title">
        <h1>Meet <span>our</span> Doctor</h1>
      </div>
  </div>

<!-- docter slider -->
    <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="swiper-img">
          <img src="img/doctors/1.png">
          <div class="doctre-content">
            <h2>Dr.name sarname</h2>
            <p>deta</p>
            <a href="#">book appointment</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-img">
          <img src="img/doctors/2.jpg">
           <div class="doctre-content">
            <h2>Dr.name sarname</h2>
            <p>deta</p>
            <a href="#">book appointment</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-img">
          <img src="img/doctors/3.jpg">
           <div class="doctre-content">
            <h2>Dr.name sarname</h2>
            <p>deta</p>
            <a href="#">book appointment</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-img">
          <img src="img/doctors/4.jpg">
           <div class="doctre-content">
            <h2>Dr.name sarname</h2>
            <p>deta</p>
            <a href="#">book appointment</a>
          </div>
        </div></div>
      <div class="swiper-slide">
        <div class="swiper-img">
          <img src="img/doctors/1.png">
           <div class="doctre-content">
            <h2>Dr.name sarname</h2>
            <p>deta</p>
            <a href="#">book appointment</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-img">
          <img src="img/doctors/1.png">
           <div class="doctre-content">
            <h2>Dr.name sarname</h2>
            <p>deta</p>
            <a href="#">book appointment</a>
          </div>
        </div>
      </div>
    </div>
           <br><br>
        <div class="swiper-pagination"></div>
</div>
</div>

/*docter title*/

.docter{
  margin-bottom: 60px;
  width: 100%;
}
.docter-title{
  text-align: center;
}
.docter-title h1{
  font-size: 40px;
}
.docter-title h1 span{
  color: blue;
}


/*docter slider*/
.swiper {
      width: 80%;
      height: 100%;
}

.swiper-slide {
      /*background: #fff9df;*/
      display: flex;
      justify-content: center;
      align-items: center;
      /*border: 1px solid red;
      /*padding: 20px;*/
}


.swiper-slide img {
      display: block;
      width: 300px;
      height: 350px;
      object-fit: cover;
      border-radius: 8px;
      cursor: pointer;
}
.doctre-content h2{
   font-size: 30px;
   font-weight: 500;
   color: blue;
   margin-top: 15px;
   margin-bottom: 0;
   text-align: center;
}
.doctre-content p{
  margin: 0;
  padding: 0;
  font-size: 23px;
  font-weight: 500;
  text-align: center;
}
.doctre-content a{
  background: darkorange;
  cursor: pointer;
  padding: 8px 10px;
  font-size: 12px;
  display: inline-block;
  margin-left: 65px;
  border-radius: 5px;
  text-align: center;
  text-decoration: none;
  color: white;
  margin-top: 5px;
}

.doctre-content a:hover{
  background: blue;
  color: white; 
}
