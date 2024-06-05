
<?php
//process_form.php
    require_once('../Final/Connect_db/db_connection.php');

if(isset($_POST['submit'])){
// Retrieve form data using $_POST
$id=$_POST['id'];
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
$img_student = $_FILES['img_student']['name'];
    $birth_certificate = $_FILES['birth_certificate']['name'];
    $img_score = $_FILES['img_score']['name'];
    $certificate = $_FILES['certificate']['name'];
$latang= $_POST['latang'];
$department= $_POST['department'];
$date_bacll=$_POST['date_bacll'];
$num_certificate=$_POST['num_certificate'];
$skill_one=$_POST['skill_one'];
$skill_two=$_POST['skill_two'];
$num_personal =$_POST['num_personal'];




$upload_dir = "uploads/";

// Upload images
move_uploaded_file($_FILES['img_student']['tmp_name'], $upload_dir . $img_student);
move_uploaded_file($_FILES['birth_certificate']['tmp_name'], $upload_dir . $birth_certificate);
move_uploaded_file($_FILES['img_score']['tmp_name'], $upload_dir . $img_score);
move_uploaded_file($_FILES['certificate']['tmp_name'], $upload_dir . $certificate);
// SQL query to insert data into the table


$sql = "INSERT INTO table_form (id,first_name, last_name, sex, dob, address,
 phone,parent_number,end_of_highschool,level_study,place_exambacll,number_room,
 number_table,img_student,birth_certificate,img_score,certificate,	latang,department,date_bacll,num_certificate,skill_one,skill_two,num_personal)
VALUES ('id','$first_name', '$last_name', '$sex', '$dob', '$address', 
'$phone','$parent_number','$end_of_highschool','$level_study','$place_exambacll',
'$number_room','$number_table','$img_student','$birth_certificate','$img_score',
'$certificate','$latang','$department','$date_bacll','$num_certificate','$skill_one','$skill_two','$num_personal')";

if ($conn->query($sql) == TRUE) {
    // echo "Success";
    $_SESSION['INSERT_DONE'] = TRUE;
    // header('location: form.php');
    exit(0);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

}






?>
