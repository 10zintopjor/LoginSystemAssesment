<?php
require_once "includes/dbh.inc.php";
require_once 'includes/functions.php';


$product = $_POST['product'];
addProduct($product,$conn);

?>