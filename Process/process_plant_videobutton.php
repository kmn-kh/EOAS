<?php
session_start();
// Establish connection to your MySQL database
$servername = "localhost";  // Change this to your server name
$username = "root";     // Change this to your database username
$password = "";     // Change this to your database password
$dbname = "eoas";  // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
;
// video button
if (isset($_POST['submit'])) {
    // Retrieve form data using $_POST
    $video1 = $_POST['first'];
    $video2 = $_POST['second'];
    $video3 = $_POST['third'];
    // SQL query to insert data into the table
    $button_sql = "INSERT INTO plant_videobutton (first, second, third)
        VALUES ('$video1','$video2','$video3')";

    if ($conn->query($button_sql) === TRUE) {
         $_SESSION['insert_success'] = "data uploaded successfully";
        //echo "Success";
        header("location: ../insert_dep_plant.php");
        exit(0);
    } else {
        $_SESSION['insert_success'] = "data uploaded not successfuly";
        //echo "Error";
        header("location: ../insert_dep_plant.php");
        exit(0);
    }
}
?>
<p>
    <?php
    if (isset($_SESSION['insert_success'])) {
        echo $_SESSION['insert_success'];
        unset($_SESSION['insert_success']);
    }
    ?>
</p>