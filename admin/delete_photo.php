<?php
    $id = $_GET['id'];
    include "conn.php";

    if($id == true){
        $sql = "DELETE FROM `gallery` WHERE `gallery`.`id` = $id";
        mysqli_query($con,$sql);
        header("location:view_img.php");

    }
    else{
        header("location:view_img.php");
    }
?>