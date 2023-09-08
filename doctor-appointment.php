<?php
  error_reporting(0);
  include "session_start.php";
  
  if(isset($_POST['submit'])){
    include 'conn.php';
    $name = $_POST['name'];
    $email = $_SESSION['user_email'];
    $blood_group = $_POST['blood_group'];
    $number = $_POST['mo_number'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $doctor = $_POST['doctor'];
    $address = $_POST['address'];
    $message = $_POST['message'];
    
    // query store in sql variable
    $sql = "INSERT INTO `doctor-appointment` (`id`, `name`, `email`, `number`, `blood_group`, `gender`, `age`, `doctor`, `address`, `massage`, `date`, `status`) VALUES (NULL, '$name', '$email','$number', '$blood_group', '$gender', '$age', '$doctor', '$address', '$message', current_timestamp(), 'pending');";
    //run query 
    mysqli_query($con,$sql);

    echo "<script>alert('your appointment is done')</script>";

    header("location:check-appointment.php");
    $con.close();

  }
  
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>doctor-appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/doctor-appointment.css">
  </head>
  <body>

  <?php include "header.php"; ?>

  <div class="mene">
    <div class="title">
      <h1>Book an appointment</h1>
    </div>
    <form class="from" method="post">
      <div class="deta">
       <div class="deta1">
        <input type="text" name="name" placeholder="Full Name" required=""><br>

          <!-- <input type="email" name="email" placeholder="Email" required=""><br> -->

          <input type="text" name="mo_number" placeholder="Number" required=""><br>
          
           <select class="sdocter" name="blood_group" required="">
         <option value="">blood group</option>
         <option value="A">A</option>
         <option value="B">B</option>
         <option value="A+">A+</option>
         <option value="B+">B+</option>
         <option value="O-">O-</option>
        </select><br>

          <input type="radio" name="gender" value="Male" id="Male" checked="checked">
          <label for="Male">Male</label>

          <input type="radio" name="gender" value="Femal" id="Female">
          <label for="Female">Female</label>

          <input type="radio" name="gender" value="Other" id="Other">
          <label for="Other">Other</label>
     </div>
     <div class="deta2">
       <input type="number" name="age" placeholder="Enter age" required=""><br>

       <select class="sdocter" name="doctor" required="">
         <option value="">Selsct Docter</option>
         <option value="Nikhil">Nikhil</option>
         <option value="Abhi">Abhi</option>
         <option value="Kartik">Kartik</option>
         <option value="Raj">Raj</option>
         <option value="Jenil">Jenil</option>
       </select><br>
       <textarea placeholder="Address" name="address" class="add" cols="26" rows="4" required=""></textarea>
     </div>
     </div>
     <div class="massage">
      <center>
     <textarea placeholder="Enter Massage" name="message" rows="5" cols="65"></textarea>
     </center>
   </div>
   <div class="button">
    <center>
     <input type="submit" name="submit" value="Appointment Now">
     </center>
   </div>
    </form>
  </div>

  <?php
        include "footer.php";
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>                                             

<!-- INSERT INTO `doctor-appointment` (`name`, `email`, `number`, `gender`, `age`, `doctor`, `address`, `massage`, `date`) VALUES ('nikhil', 'bh', '23', 'male', '20', 'abc', 'asd', 'hi', current_timestamp()); -->