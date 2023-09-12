<?php
    session_start();
    error_reporting(0);
    include "supper_session.php";
    include "ad_header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
<style type="text/css">
    *{
        margin: 0;
        padding: 0;
    }

    .title{
          background-color: #3fbbc0;
    }
    .title h1{
      color: white;
      font-size: 50px;
      padding: 25px 100px;
    }
    form h2{
        color: white;
        background-color: #fb418e;
        padding: 15px;
        margin: 0;
        margin-bottom: 15px;
    }
    .main{
        border: 2px solid red;
        width: 400px;
        height: 250px;
        margin: 68px auto;
        border-radius: 8px;
        box-shadow: 0px 0px 10px 1px blue;


    }
    .main input[type="submit"]{
        background-color: black;
        color: white;
        padding: 10px;
        font-size: 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: 100ms;
        border:none;
    }
    .main input[type="submit"]:hover{
        background-color: #247cff;
        
    }
    form .view_photo{
        display: flex;
        text-decoration: none;
        border: 1px solid black;
        border-radius: 5px;
        background: black;
        color:white;
        margin-top: 50px;
        padding: 5px 5px;
        width: 98px;

    }
</style>
</head>
<body> 
<div class="title">
<h1>Upload Image</h1>
</div>
    <form action="#" method="POST" enctype="multipart/form-data" class="main">
        <center><h2>Upload Photo</h2></center>
        <input type="file" name="uploadphoto" class="file">
        <input type="submit" name="submit" value="Upload Photo">
        <center>
        <!-- <input type="submit" name="" value="View Photo" class="view_photo"> -->
        <a href="view_img.php" class="view_photo">view photos</a>
        </center>
    </form>
</body>
</html>

<?php
    
    if(isset($_POST['submit'])){
    include 'conn.php';

    // fatch name in php temp name
    $photoname = $_FILES["uploadphoto"]["name"];
    $tempname = $_FILES["uploadphoto"]["tmp_name"];
    
    // store photo in folder
    $folder = "gallery/".$photoname;
    move_uploaded_file($tempname, $folder);

    // echo "<img src='$folder' hight='100px' width='100px'>";


    $sql =  "INSERT INTO `gallery` (`img`) VALUES ('$folder')";
    mysqli_query($con,$sql);
    $con.close();
    }

    include "ad_footer.php";
?>