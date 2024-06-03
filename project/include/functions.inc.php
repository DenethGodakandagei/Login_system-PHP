<?php
/* Register functions */
function  emptyInputsSignup( $name, $email ,$pwd, $pwdrepeat,$phoneNumber){
    $result;
    if(empty($name)||empty($email)||empty($pwd)||empty($pwdrepeat)|| empty($phoneNumber)){
        $result = true ; 
    }else{
        $result= false;
    }
    return $result ;

}

function  invalidEmail($email){
    $result;
    if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true ; 
    }else{
        $result= false;
    }
    return $result ;
}
function   pwdMatch($pwd ,$pwdrepeat ){
    $result;
    if( $pwd !==$pwdrepeat){
        $result = true ; 
    }else{
        $result= false;  
    }
    return $result ;
}
function emailexists($conn, $email){
    $sql = "SELECT * FROM users WHERE userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../login.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
        return $row;
    } else {
        return false;
    }
}

function   createuser($conn, $name, $email ,$pwd, $phoneNumber){
    $sql = "INSERT INTO users (userName,userEmail,userPwd,phoneNumber) VALUES(?,?,?,?)";
    $stmt = mysqli_stmt_init ($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../register.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $hashedPwd, $phoneNumber);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../login.php?error=none");
    echo "<script>alert('registration successfully');</script>";
    exit();
    
}
/* login functions */

function  emptyInputLogin(  $email ,$pwd){
    $result;
    if(empty($email)||empty($pwd)){
        $result = true ; 
    }else{
        $result= false;
    }
    return $result ;
}


function   LoginUser($conn,$email, $pwd){
    if($email==='root@fit.com' && $pwd==='root@fit.com' ){
        header("Location:/project/Admin&Profile_Accounts/adminAccount.php");
        exit();
    }else{
        $emailexists = emailexists($conn, $email, $email);
        if($emailexists === false){
            header("Location:../login.php?error=wronglogin2");
            exit();
        }
        $pwdHashed = $emailexists["userPwd"];
        $checkPwd = password_verify($pwd,$pwdHashed);
    
        if($checkPwd === false){
            echo $pwd. ''.$pwdHashed;
           header("Location:../login.php?error=wronglogin1");
            exit();
        }else if ($checkPwd === true){
            session_start();
            $_SESSION["username"] = $emailexists["userName"];
            $_SESSION["userEmail"] = $emailexists["userEmail"];
            $_SESSION["userID"] = $emailexists["userID"];
            $_SESSION["phoneNumber"] = $emailexists["phoneNumber"];
            echo "<script>alert('Login successfully');</script>";
            echo "<script>window.location='index.php?error=none';</script>";
            header("Location:../index.php?error=none");
            exit();
    
        }
    }
}
?>