<?php

$host = "localhost";
$username  = "root";
$password = "";
$db = "eoas";

$connect = new mysqli($host, $username, $password, $db);
if ($connect->connect_error) {
    die("Error Connect to DB" . $connect->connect_error);
}

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id=$id";
    $connect->query($sql);
}

header('location: staff.php');
exit;


?>