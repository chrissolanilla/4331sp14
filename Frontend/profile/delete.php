<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Get the username, password, and additional user information from the form
    

// Connect to the database
    $conn = new mysqli("localhost", "newuser", "StrongerPassword123!", "chesscont");

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare a SQL statement to insert the new user
    $delete=mysqli($conn,"DELETE FROM contacts WHERE $_GET['id']");
    

    // Execute the statement
   

    // Close the connection
    $stmt->close();
    $conn->close();
    }
?>
