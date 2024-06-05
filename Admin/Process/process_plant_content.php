<?php
session_start();
// Establish connection to your MySQL database
$servername = "localhost";  // Change this to your server name
$username = "root";     // Change this to your database username
$password = "";     // Change this to your database password
$dbname = "eoas";  // Change this to your database name

// Create connection
$content_conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($content_conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
;
// content
if (isset($_POST['submit'])) {
    // Retrieve form data using $_POST
    $title = $_POST['title'];
    $content = $_POST['content'];
    // SQL query to insert data into the table
    $content_sql = "INSERT INTO plant_data (title, content)
        VALUES ('$title','$content')";

    if ($content_conn->query($content_sql) === TRUE) {
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