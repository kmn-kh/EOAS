<?php
session_start();
// Establish connection to your MySQL database
$servername = "localhost";  // Change this to your server name
$username = "root";     // Change this to your database username
$password = "";     // Change this to your database password
$dbname = "departmen";  // Change this to your database name
// Create connection
$top_conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($top_conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
;
// video top
if (isset($_POST['submit'])) {
    // Retrieve form data using $_POST
    $video_top = $_POST['video_top'];
    // SQL query to insert data into the table
    $sql = "INSERT INTO el_vidtop (video_top)
        VALUES ('$video_top')";

    if ($top_conn->query($sql) === TRUE) {
        $_SESSION['insert_success'] = "data uploaded successfully";
        //echo "Success";
        header("location: ../eoas/insert_dep_el.php");
        exit(0);
    } else {
        $_SESSION['insert_success'] = "data uploaded not successfuly";
        //echo "Error";
        header("location: ../eoas/insert_dep_el.php");
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