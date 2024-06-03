<?php
if(isset($_POST["submit"])) {
    $email = $_POST["email"] ;
    $pwd = $_POST["pwd"];

    require_once 'config.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin(  $email ,$pwd) !== false){
        header('Location:../register.php?error=emptyinput');
        exit();
    }

    LoginUser($conn,$email, $pwd);
}
else{
    header('Location:../login.php');
    exit();
}
?>