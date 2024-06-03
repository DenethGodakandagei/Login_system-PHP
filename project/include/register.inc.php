<?php
if(isset($_POST["submit"])) {
    $name = $_POST["name"] ;
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $phoneNumber = $_POST["phoneNumber"];

    require_once 'config.php' ;
    require_once 'functions.inc.php';

    $emptyInputs = emptyInputsSignup( $name, $email ,$pwd,$pwdrepeat, $phoneNumber);
    $invalidEmail = invalidEmail($email);
    $pwdMatch  = pwdMatch($pwd ,$pwdrepeat );
    $emailexists = emailexists ($conn,$email);
    
    
    if(  $emptyInputs !== false){
        header('Location:../register.php?error=emptyinput');
        exit();
    }
    if(  $invalidEmail !== false){
        header('Location:../register.php?error=invalidemail');
        exit();
    }
    if(  $pwdMatch !== false){
        header('Location:../register.php?error=passwordsdontmatch');
        exit();
    }
    if(  $emailexists !== false){
        header('Location:../register.php?error=Emailtaken');
        exit();
    }
    createuser($conn, $name, $email ,$pwd, $phoneNumber);
}
else{
    header('Location:../login.php');
    exit();
}
?>