<?php 
  error_reporting(0);
  session_start();
  $email = $_SESSION['email'];
  echo $email;
  if($email == false){
<<<<<<< HEAD
    // echo "<script>
    //         let a = confirm('plese Login first');
    //         if(a == true){
    //           window.location = '/hcplus_doctor_appoiment/admin/ad_login.php';
    //         }
    //         else{
    //           window.location = '/hcplus_doctor_appoiment/admin/index.php';
    //         }
    //       </script>";
=======
    echo "<script>
            let a = confirm('plese Login first');
            if(a == true){
              window.location = '/hcplus_doctor_appoiment/admin/ad_login.php';
            }
            else{
              window.location = '/hcplus_doctor_appoiment/admin/ad_index.php';
            }
          </script>";
>>>>>>> 36cf239c28715becbd2db089c3e1943cac7bca9d
    
  }
?>