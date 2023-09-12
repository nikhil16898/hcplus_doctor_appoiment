<?php
    session_start();
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
        tr td img {
            width: 100px;
            height: 100px;
        }
        

       
    </style>
</head>
<?php
    include "ad_header.php";
?>
<body>
<form action="#" method="post">
    <table>
        <tr>
            <th>PHOTO</th>
            <th>PATH OF PHOTO</th>
            <th>DELETE</th>
        </tr>
        <?php
            include "conn.php";
            $sql = "SELECT * FROM `gallery`";
            $result = mysqli_query($con,$sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    echo '<tr>
                            <td><img src='.$row["img"].'></td>
                            <td>name</td>
                            <td>'
                            ?>
                             <a href="delete_photo.php?id=<?php echo $row['id']; ?>">
                             <?php
                                echo "Delete"
                             ?>
                            </a>
                            <?php
                            '</td>
                          </tr>';     
                }
            }
           
        ?>
    </table>
    </form>
    
</body>
<?php
    include "ad_footer.php";
?>
</html>

<!-- DELETE FROM `gallery` WHERE `gallery`.`id` = 12 -->