<?php 
  error_reporting(0);
  session_start();
  $email = $_SESSION['email'];
  if($email == false){
    // echo "<script>
    //         let a = confirm('plese Login first');
    //         if(a == true){
    //           window.location = '/hcplus_doctor_appoiment/admin/ad_login.php';
    //         }
    //         else{
    //           window.location = '/hcplus_doctor_appoiment/admin/index.php';
    //         }
    //       </script>";
    
  }
?>