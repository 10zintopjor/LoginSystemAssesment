
<?php
require_once "includes/dbh.inc.php";
$id=$_GET['id'];

$sql = "DELETE FROM products WHERE p_id=$id";
$query = mysqli_query($conn,$sql);
header('location:home.php');
?>  



