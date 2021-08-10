<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
<div class="topnav">
<?php
if(isset($_SESSION['userid'])){
   
    echo "<a href='includes/logout.inc.php'>LogOut</a>";
    echo "<a href='dashboard.php'>A.Dashboard</a>";
    echo "<a href='home.php'>Home</a>";
}
else{
    echo "<a href='login.php'>Log In</a>";
    echo "<a href='signup.php'>Sign Up</a>";

}      
?>          
</div>