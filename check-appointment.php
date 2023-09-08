<?php 
    error_reporting(0);
    include "session_start.php";
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
            text-transform:uppercase;
        }
        tr .approve {
            color: #00d200;
       
        }
        tr .pending {
            color: #0000f3;
            
        }
    </style>
</head>
<body>
    <?php
        include "header.php";
    ?>

        <?php
            include "conn.php";
            $email = $_SESSION['user_email'];
            $sql = mysqli_query($con,"SELECT `name` FROM `signup` WHERE `email` LIKE '$email'");
            if(mysqli_num_rows($sql)>0){
                while($row = mysqli_fetch_array($sql)){
                    echo '<h3>'.$row['name'].'</h3>';
                }
            }   
        ?>

    <table>
        <tr>
            <th>Name</th>
            <!-- <th>Email</th> -->
            <th>Number</th>
            <th>Blood Group</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Doctor</th>
            <th>Address</th>
            <th>Massage</th>
            <th>Status</th>
        </tr>
        <?php
            include "conn.php";
            $sql = "SELECT * FROM `doctor-appointment` where  email='$email'";
            $result = mysqli_query($con,$sql);
            
            // fetch data and print 
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                        echo "<tr>
                                <td style='text-transform:capitalize;' >".$row["name"]."</td>
                                <!-- <td>".$row["email"]."</td> -->
                                <td>".$row["number"]."</td>
                                <td>".$row["blood_group"]."</td>
                                <td>".$row["gender"]."</td>
                                <td>".$row["age"]."</td>
                                <td style='text-transform:capitalize;' >".$row["doctor"]."</td>
                                <td style='text-transform:capitalize;' >".$row["address"]."</td>
                                <td>".$row["massage"]."</td>
                                <td class='".$row["status"]."'>".$row["status"]."</td>
                            <tr>";
                }
                echo "</table>";
            }
            else{
                echo "0 records found";
            }
            $con.close();
        ?>
    </table>
    <?php
        include "footer.php"
    ?>
</body>
</html>