<?php
    session_unset();
    error_reporting(0);
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/f743aa5832.js" crossorigin="anonymous"></script>
    <title>HealthcarePlus-login page</title>
</head>
<body>
<div class="icon">
    <a href="index.php"><i class="fa-solid fa-house"></i></a>
    </div>
    <form action="" method="post" class="box">
        <h1>login in with your Account</h1>

        <input type="text" name="email" placeholder="Enter email" required=""><br><br>
        <input type="text" name="password" placeholder="Enter password" required=""><br><br>
        <input type="submit" name="submit" value="Login">

        <p>you have no login <a href="signup.php">signup</a></p>
    </form>
</body>
</html>
<?php
    
    if(isset($_POST['submit'])){
        
        include 'conn.php';  
        $e = $_POST['email'];
        $p = $_POST['password'];

        $sanitized_email = mysqli_real_escape_string($con,$e);
        $sanitized_password = mysqli_real_escape_string($con,$p);
        
        $sql = mysqli_query($con,"SELECT * FROM `signup` WHERE `email` LIKE '".$sanitized_email."' AND `pwd` LIKE '".$sanitized_password."'") or die(mysqli_error);
    
            if($r = mysqli_num_rows($sql)){
            // success
                // session created
                $_SESSION['user_email'] = $e;
                header("location:index.php");
                $con.close();
            
        }
        else{
            echo "<script>alert('plese enter correct email or password')</script>";
            $con.close();
        }
    }


?>