<?php
    session_start();

    // Establish connection to your MySQL database
    $servername = "localhost";  // Change this to your server name
    $username = "root";     // Change this to your database username
    $password = "";     // Change this to your database password
    $dbname = "form";  // Change this to your database name
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    };
   // connect for form
?>
