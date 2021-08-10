<?php
require_once "dbh.inc.php";
$id=$_GET['id'];
$name=$_POST['name'];
$sql="UPDATE products SET p_name=$name WHERE p_id = $id;";
mysqli_query($conn,$sql);
header("location:../home.php");

?>