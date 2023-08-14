<?php
    if(isset($_POST['submit'])){
        
        include 'conn.php';  
        $e = $_POST['email'];
        $p = $_POST['password'];
        
        $sql = mysqli_query($con,"SELECT * FROM `signup` WHERE `email` LIKE '$e' AND `pwd` LIKE '$p'");
        if($r = mysqli_fetch_array($sql)){
            // success
            header("location:index.php");
            
        }
        else{
            echo "<script>alert('plese enter correct email or password')</script>";
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="icon" href="img/title.png" type="image/x-icon">
    <link rel="stylesheet" href="css/ad_login.css">
    <script src="https://kit.fontawesome.com/f743aa5832.js" crossorigin="anonymous"></script>
    <title>HealthcarePlus-Admin login page</title>
</head>
<body>

    <form action="" method="post" class="box">
        <h1>Admin login</h1>

        <input type="text" name="email" placeholder="Enter email" required=""><br><br>
        <input type="text" name="password" placeholder="Enter password" required=""><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>