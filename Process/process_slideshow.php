<?php
session_start();
$severname = "localhost";
$username = "root";
$password = "";
$db_name = "eoas";
//connect database
$conn = mysqli_connect($severname, $username, $password, $db_name);
$data_conn = new mysqli($severname, $username, $password, $db_name);

//check connection
if ($conn->connect_error) {
    die("connect error" . $conn->connect_error);
}
echo"hi";
//check if data info is uploaded
if (isset($_POST['submit'])) {
    //
    $file = $_FILES['image'];
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];
    $folder = "../them/slideshow/" . $fileName;
    $data_sql = "INSERT INTO  slideshow (img)
              VALUES( '$fileName') ";
    if ($data_conn->query($data_sql) === true) {
        move_uploaded_file($fileTmpName, $folder);
        $_SESSION['insert_success'] = "data uploaded successfully";
        header("location: ../slideshow.php");
        exit(0);

    } else {
        $_SESSION['insert_success'] = "data uploaded not successfuly";
        header("location: ../slideshow.php");
        exit(0);
    }
}
//Close database connection
$conn->close();
?>
<p>
    <?php
    if (isset($_SESSION['insert_success'])) {
        echo $_SESSION['insert_success'];
        unset($_SESSION['insert_success']);
    }
    ?>
</p>