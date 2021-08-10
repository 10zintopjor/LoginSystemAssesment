<?php
include_once 'header.php';
?>
      
<div class="form">
    <h2>Sign Up</h2>
    <form method="POST" action="includes/signup.inc.php">
    <input type="text" name="name" placeholder="Name"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <input type="password" name="pwdRepeat" placeholder="Re-password"><br>
    <input type="submit" name="submit">
    
</form>
<?php
if(isset($_GET['error'])){
    if($_GET["error"] == "emptyinput"){
        echo "<p>Fill in all Fields</p>";
    }
    else if ($_GET["error"] == "invaliduid"){
        echo '<p>Please choose a proper username</p>';
    }
    else if ($_GET["error"] == "unmacthedpwd"){
        echo '<p>Passwords Not matching</p>';
    }
    else if ($_GET["error"] == "usernametaken"){
        echo '<p>Name Already exist</p>';
    }
    else if ($_GET["error"] == "stmtfailed"){
        echo '<p>Something wrong occured</p>';
    }
    else if ($_GET["error"] == "none"){
        echo '<p>You have Signed Up</p>';
    }

}

?>
</div>  



    
</body>
</html>