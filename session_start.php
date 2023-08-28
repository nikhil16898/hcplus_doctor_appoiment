<?php 
  error_reporting(0);
  session_start();
  $email = $_SESSION['user_email'];
  if($email == false){
    echo "<script>
            let a = confirm('plese Login first');
            if(a == true){
              window.location = '/hcplus_doctor_appoiment/logout.php';
            }
            else{
              window.location = '/hcplus_doctor_appoiment/index.php';
            }
          </script>";
    
  }
?>