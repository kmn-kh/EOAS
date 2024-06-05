
<?php
    require_once('db_connection.php');

if(isset($_POST['submit'])){
// Retrieve form data using $_POST
$first_name = $_POST['first_name'];
$last_name =$_POST['last_name'];
$sex = $_POST['sex'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$parent_number= $_POST['parent_number'];
$end_of_highschool= $_POST['end_of_highschool'];
$level_study = $_POST['level_study'];
$place_exambacll= $_POST['place_exambacll'];
$number_room= $_POST['number_room'];
$number_table= $_POST['number_table'];
$img_student =$_POST['img_student'];
$birth_certificate = $_POST['birth_certificate'];
$img_score= $_POST['img_score'];
$certificate= $_POST['certificate'];
$latang= $_POST['latang'];

// SQL query to insert data into the table
$sql = "INSERT INTO table_form (first_name, last_name, sex, dob, address,
 phone,parent_number,end_of_highschool,level_study,place_exambacll,number_room,
 number_table,img_student,birth_certificate,img_score,certificate,	latang)
VALUES ('$first_name', '$last_name', '$sex', '$dob', '$address', 
'$phone','$parent_number','$end_of_highschool','$level_study','$place_exambacll',
'$number_room','$number_table','$img_student','$birth_certificate','$img_score',
'$certificate','$latang')";

if ($conn->query($sql) == TRUE) {
    // echo "Success";
    $_SESSION['INSERT_DONE'] = TRUE;
    header('location: index_user.php');
    exit(0);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

}