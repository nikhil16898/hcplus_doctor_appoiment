<?php
    session_unset();
    session_start();
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

    <form action="#" method="post" class="box">
        <h1>Admin login</h1>
        <input type="text" name="email" placeholder="Enter email" required=""><br><br>
        <input type="text" name="password" placeholder="Enter password" required=""><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        include "conn.php";
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $sanitized_email = mysqli_real_escape_string($con,$email);
        $sanitized_password = mysqli_real_escape_string($con,$pwd); 
        $sql = mysqli_query($con,"SELECT * FROM `supper_login` WHERE `name` LIKE '$sanitized_email' AND `email` LIKE '$sanitized_password'");
        if (mysqli_num_rows($sql)){
            $_SESSION['email'] = $email;
            header("location:index.php");
        }
    }
?>
<!-- SELECT * FROM `supper_login` WHERE `name` LIKE 'nikhil@gmail.com' AND `email` LIKE 'nikhil' -->