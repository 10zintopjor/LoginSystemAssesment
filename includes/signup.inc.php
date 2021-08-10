<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdRepeat'];

    require_once 'dbh.inc.php';
    require_once 'functions.php';


    if(emptyInputSignUp($name,$pwd,$pwdRepeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if(invalidUid($name) !== false){
        header("location: ../signup.php?error=invalidUid");
        exit();
    }
    if(matchedPwd($pwd,$pwdRepeat) !== false){
        header("location: ../signup.php?error=unmatchedpwd");
        exit();
    }
    if(uidExist($conn,$name) !== false){
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

   createUser($conn,$name,$pwd);


}
else{
    header("location: ../signup.php");
    exit();

}
