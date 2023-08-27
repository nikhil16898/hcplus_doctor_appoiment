<?php
    error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body> 
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="uploadphoto" id=""><br><br>
        <input type="submit" name="submit" value="Upload File">
    </form>
</body>
</html>

<?php
    
    if(isset($_POST['submit'])){
    include 'conn.php';

    // fatch name in php temp name
    $filename = $_FILES["uploadphoto"]["name"];
    $tempname = $_FILES["uploadphoto"]["tmp_name"];
    
    // store photo in folder
    $folder = "gallery/".$filename;
    move_uploaded_file($tempname, $folder);

    echo "<img src='$folder' hight='100px' width='100px'>";


    $sql =  "INSERT INTO `gallery` (`img`) VALUES ('$folder')";
    mysqli_query($con,$sql);
    }

?>