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
//check if data info is uploaded
if (isset($_POST['submit'])) {
    //
    $file = $_FILES['image'];
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];
    $folder = "../img/" . $fileName;
    //insert staff data
    $name = $_POST['name'];
    $skill = $_POST['skill'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    // new
    $sumary = $_POST['sumary'];
    $education_background = $_POST['education_background'];
    $spacial_skill = $_POST['spacial_skill'];
    $award = $_POST['award'];
    $work_experiences = $_POST['work_experiences'];
    $data_sql = "INSERT INTO  com_staff_info (name, skill, email, phone_number, img,
            sumary, education_background, spacial_skill, award, work_experiences)
              VALUES('$name', '$skill', '$email', '$phone_number', '$fileName','$sumary', 
              '$education_background', '$spacial_skill', '$award',  '$work_experiences') ";
    if ($data_conn->query($data_sql) === true) {
        move_uploaded_file($fileTmpName, $folder);
        $_SESSION['insert_success'] = "data uploaded successfully";
        header("location: ../insert_dep_com_staff.php");
        exit(0);

    } else {
        $_SESSION['insert_success'] = "data uploaded not successfuly";
        header("location: ../insert_dep_com_staff.php");
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