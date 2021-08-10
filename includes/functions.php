<?php

function emptyInputSignUp($name,$pwd,$pwdRepeat){
    $result;
    if(empty($name) || empty($pwd) || empty($pwdRepeat)){
        $result=true;
    }else{
        $result= false;
    }
    return $result;
}
function invalidUid($name){
    $result;

    if(!preg_match("/^[a-zA-Z0-9]*$/",$name)){
        $result = true;
    }else{
        return false;
    }
  
    return $result;
}
function matchedPwd($pwd,$pwdRepeat){
    $result;
    if($pwd !== $pwdRepeat){
        $result =true;
    }else{
        $result =false;
    }
    
    return $result;
}

function uidExist($conn,$name){
   
    $sql = "SELECT * FROM users WHERE userName =?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"s",$name);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;

    }else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn,$name,$pwd){

    $sql = "INSERT INTO users (userName,usersPwd) VALUES (?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ss",$name,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
    exit();

}


function emptyInputLogin($name,$pwd){
    $result;
    if(empty($name) || empty($pwd)){
        $result=true;
    }else{
        $result= false;
    }
    return $result;
}

function loginUser($conn,$name,$pwd){
    $uidExists = uidExist($conn,$name);

    if($uidExists === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd,$pwdHashed);

    if($checkPwd === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION['userid'] = $uidExists['usersId'];
        $_SESSION['username'] = $uidExists['userName'];
        header("location: ../Home.php");
        exit();
    }
}
function addProduct($product,$conn){
    $sql = "INSERT INTO products (p_name) VALUES (?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../dashboard.php?error=stmtfailed");
        exit();
    }
    

    mysqli_stmt_bind_param($stmt,"s",$product);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: dashboard.php?error=none");



}



