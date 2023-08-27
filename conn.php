<?php
    $s = "localhost";
    $u = "root";
    $p = "";
    $db = "hcplus";

    $con = mysqli_connect($s,$u,$p,$db);
    if(!$con == true){
        die ("sorry".mysqli_connect_error());
    }
    else{
        // echo "connection successfully";
    }
?>
