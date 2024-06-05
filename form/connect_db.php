<!-- Table body will be populated dynamically using PHP -->
<?php
     // Establish database connection
     $servername = "localhost";
     $username = "root";
     $password = "";
    $dbname = "form";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
                                                }

     // Fetch data from the database table
    $sql = "SELECT * FROM table_form"; // Replace 'your_table_name' with your actual table name
    $result = $conn->query($sql);

    // Display data in the HTML table
    if ($result->num_rows > 0) 
        while ($row = $result->fetch_assoc()) 
?>
