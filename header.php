<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/header.css">

  </head>
  <body>
     <div class="header">
        <nav>
        <img src="img\logo.png" alt="logo">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="gallery_1.php">Gallery</a></li>
                    <li><a href="doctor-appointment.php">Doctor Appointment</a></li>
                    <li><a href="check-appointment.php">Check Appointment</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a onclick="return logout_click()">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   <script>

    // logout click button to show confirm massege 
       function logout_click(){
        let a = confirm("logout ?");
     
         if(a == true){
           window.location = "/hcplus_doctor_appoiment/logout.php";
          //  session_unset();

         }
         else{
          window.location = "/hcplus_doctor_appoiment/index.php";


         }
       }

       

   </script>
  </body>
</html>