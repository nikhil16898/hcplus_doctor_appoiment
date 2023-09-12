<?php
  session_start();
  include "supper_session.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
    table{
         width: 80%;
         margin: 50px auto;
         text-align: center;
    }
    table th{
        border: 2px solid red;
        border-radius: 8px;
        padding: 15px;
        font-size: 21px;
        color: blue;
        background-color: pink;

    }
    table td{
        border:2px solid blue;
    border-radius: 8px;
        padding: 10px;
        font-size: 20px;
        font-weight: 500;
    background-color: #dfd7ef;
    }
    </style>
  </head>
  <?php include "ad_header.php"; ?>
  <body>
<div class="title">
<h1>Appointments</h1>
</div>
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
  <?php include "ad_footer.php" ?>
</html>