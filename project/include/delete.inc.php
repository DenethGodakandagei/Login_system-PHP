<?php
session_start();

require "config.php";

if(isset($_SESSION["userID"])) {
    // Prepare a statement
    $stmt = $conn->prepare("DELETE FROM users WHERE userID = ?");
    // Bind parameters
    $stmt->bind_param("i", $_SESSION["userID"]); // Assuming userID is an integer
    // Execute the statement
    if ($stmt->execute()) {
        session_start();
        session_unset();
        session_destroy();
        header("location: ../register.php?success=1");
                exit();
    } else {
        echo "Error deleting";
    }
    // Close the statement
    $stmt->close();
}

?>
