<?php
    if(isset($_POST['s'])){
        include 'conn.php';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile_number'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];
    
        if($password != $confirm){
            echo "<script>alert('Both Password are not matched')</script>";
        }
        else{
            $sql = "INSERT INTO `signup` (`id`, `name`, `email`, `mobile_number`, `pwd`, `confirm`, `date`) VALUES (NULL, '$name', '$email', '$mobile', '$password', '$confirm', current_timestamp());";
            mysqli_query($con,$sql);
            echo "<script>alert('Registration SuccessFully')</script>";
            header("location:login.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <script src="https://kit.fontawesome.com/f743aa5832.js" crossorigin="anonymous"></script>
    <title>HealthcarePlus-Sign Up pag</title>
</head>
<body>
    <div class="icon">
    <a href="index.php"><i class="fa-solid fa-house"></i></a>
    </div>

    
    <form action="signup.php" method="post" class="box">
        <h1>Sign Up in with your Account</h1>

        <input type="text" name="name" placeholder="Full name" required=""><br><br>
        <input type="email" name="email" placeholder="Email" required=""><br><br>
        <input type="text" name="mobile_number" placeholder="Mobile number" required=""><br><br>
        <input type="password" name="password" placeholder="Password" required=""><br><br>
        <input type="password" name="confirm" placeholder="Confirm password" required=""><br><br>



        <input type="submit" name="s" value="Sign Up">

        <p>you have alleady Sine Up <a href="login.php">Login</a></p>
    </form>
</body>