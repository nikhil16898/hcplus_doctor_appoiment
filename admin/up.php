<?php
$id = $_GET['id'];
$stat = $_GET['stat'];

include "conn.php";
if($stat =="pending")
{
    mysqli_query($con,"UPDATE `doctor-appointment` SET `status` = 'approve' WHERE `id` =$id");
    header("location:ad_doctor-appoiment.php");
}
else{
    mysqli_query($con,"UPDATE `doctor-appointment` SET `status` = 'pending' WHERE `id` =$id");
    header("location:ad_doctor-appoiment.php");
}
?>