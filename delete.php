<?php include("database-connect.php");
 $id=$_GET['id'];
 $result="DELETE  FROM product where id = $id";
 mysqli_query($cn,$result);

 header("location:products.php");
 exit;















?>