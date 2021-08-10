<?php
include_once 'header.php';
?>
      
<div class="form">
    <h2>Log In</h2>
    <form method="POST" action="includes/login.inc.php">
    <input type="text" name="name" placeholder="Name"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="submit" name="submit">
    
</form>
<?php
if(isset($_GET['error'])){
    if($_GET["error"] == "emptyinput"){
        echo "<p>Fill in all Fields</p>";
    }
    else if($_GET["error"] == "wronglogin"){
        echo "<p>Incorrect login information</p>";
    }
}

?>
</div>    

    
</body>
</html>