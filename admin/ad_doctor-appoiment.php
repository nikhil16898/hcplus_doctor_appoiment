<?php
    session_start();
    include "supper_session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
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
       
    </style>
</head>
<?php include "ad_header.php"; ?>
<body>
    <form action="#" method="post">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Doctor</th>
            <th>Address</th>
            <th>Massage</th>
            <th>Approved / Not</th>
        </tr>
        <?php
            include "conn.php";
            $sql = "SELECT * FROM `doctor-appointment`";
            $result = mysqli_query($con,$sql);
            
            // fetch data and print 
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                        echo "<tr>
                                <td style='text-transform:capitalize;' >".$row["id"]."</td>
                                <td style='text-transform:capitalize;'>".$row["name"]."</td>
                                <td>".$row["email"]."</td>
                                <td>".$row["number"]."</td>
                                <td>".$row["gender"]."</td>
                                <td>".$row["age"]."</td>
                                <td style='text-transform:capitalize;' >".$row["doctor"]."</td>
                                <td style='text-transform:capitalize;' >".$row["address"]."</td>
                                <td>".$row["massage"]."</td>
                                <td>"; ?>
                                <a href="up.php?id=<?php echo $row['id']; ?>&stat=<?php echo $row['status']; ?>">
                                <?php
                                    echo $row['status']; 
                                 ?>
                                 </a>


                               <?php
                                echo "</td>
                            <tr>"; 
                }
            }
            else{
                echo "0 records found";
            }
        ?>
    </table>
    </form>
    
    
</body>

    <?php include "ad_footer.php";?>
</html>