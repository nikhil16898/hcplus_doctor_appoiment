    <?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Appointment</title>
    <style>
        table{
            border: 3px solid #aab2c9;
            border-collapse: collapse;
            width: 100%;
            font-family: Arial Rounded MT Bold;
            text-align:left;
        }
        table th{
            border: 3px solid #c9aef3;
            padding: 10px 10px;
            font-size:20px;
            text-align:center;
        }
        table td{
            border: 1px solid #aab2c9;
            padding: 1px 1px;
            text-align:center;
        }
        h3{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <h3>
        <?php
            include "conn.php";
            $sql = mysqli_query($con,"SELECT * from signup WHERE name='abc'");
            // if($r = mysqli_fetch_arry($sql)){
                
            // }
        ?>
    </h3>
    <table>
        <tr>
            <th>Name</th>
            <!-- <th>Email</th> -->
            <th>Number</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Doctor</th>
            <th>Address</th>
            <th>Massage</th>
        </tr>
        <?php
            include "conn.php";
            $email = $_SESSION['user_email'];
            echo $email;
            if($email == false){
                header("location:login.php");
            }
            $sql = "SELECT * FROM `doctor-appointment` where  email='$email'";
            $result = mysqli_query($con,$sql);

            // fetch data and print 
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                        echo "<tr>
                                <td>".$row["name"]."</td>
                                <!-- <td>".$row["email"]."</td> -->
                                <td>".$row["number"]."</td>
                                <td>".$row["gender"]."</td>
                                <td>".$row["age"]."</td>
                                <td>".$row["doctor"]."</td>
                                <td>".$row["address"]."</td>
                                <td>".$row["massage"]."</td>
                            <tr>";
                }
                echo "</table>";
            }
            else{
                echo "0 records found";
            }
        ?>
    </table>
    <?php
        include "footer.php";
    ?>
</body>
</html>