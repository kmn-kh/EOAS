<?php
//connect database
$db_s_name = "eoas";
$host_s = "localhost";
$user_s_name = "root";
$password_s = "";

$staff_conn = new mysqli($host_s, $user_s_name, $password_s, $db_s_name);
if ($staff_conn->connect_error) {
    die("Connection failed" . $staff_conn->connect_error);
}
//   /connect database
//$i = 0;
$count_staff = 1; ?>
<?php
$db_name = "eoas";
$host = "localhost";
$user_name = "root";
$password = "";

$conn = new mysqli($host, $user_name, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}
// $database = "SELECT * FROM com_videobutton";
// $data_result = $conn->query($database);
// $conn->close();
?>