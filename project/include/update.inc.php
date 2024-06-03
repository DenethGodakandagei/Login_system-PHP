<?php

require 'config.php';

session_start();

if(isset(  $_SESSION["userID"])){
    $userName = $_POST["username"];
    $email = $_POST["email"];
    $PhoneNumber = $_POST["PhoneNumber"];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare('UPDATE users SET userName = ?, userEmail = ?, phoneNumber = ? WHERE userID = ?');
    
    if($stmt === false) {
        die('Error preparing statement: ' . $conn->error);
    }
    
    $bindResult = $stmt->bind_param('ssss', $userName, $email, $PhoneNumber ,$_SESSION["userID"]);
    
    if($bindResult === false) {
        die('Error binding parameters: ' . $stmt->error);
    }

    // Execute the statement
    if($stmt->execute()){
        session_start();
        session_unset();
        session_destroy();
        header("location: ../login.php?success=1");

        exit();
    } else{
        echo "Error updating record: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

?>