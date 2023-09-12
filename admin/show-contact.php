<!DOCTYPE html>
<html>
<head>
	<title>Show-Contact</title>
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
<body>
  <?php
  include "ad_header.php";
?>
<div class="title">
<h1>Contacts</h1>
</div>
<table>
   <th>Id</th>
   <th>Name</th>
   <th>Email</th>
   <th>Subject</th>
   <th>message</th>
   <th>Date</th>
   <th>Delete</th>
<?php
  error_reporting(0);
  include "conn.php";
  $sql= "SELECT * FROM `contact`";
  $result=mysqli_query($con,$sql);

  if(mysqli_num_rows($result) > 0){
  	while($row=mysqli_fetch_array($result)){
  		echo "<tr>
  		     <td>".$row["id"]."</td>
  		     <td>".$row["name"]."</td>
  		     <td>".$row["email"]."</td>
  		     <td>".$row["subject"]."</td>
  		     <td>".$row["message"]."</td>
  		     <td>".$row["date"]."</td>
           <td></td>
  		     </tr>";
  	}
  }
  else{
    echo "deta not found";
  }

?>
</table>
<?php 
 include "ad_footer.php";
?>
</body>
</html>
