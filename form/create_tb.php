<?php
$host_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "form";

//connect database

$conn = new mysqli($host_name,$user_name,$password,$db_name);

//check

if(!$conn){
    die("Connect Failed");
}else{

    //create table
    $create_tb ="CREATE TABLE table_form(
        id INT (11) NOT NULL AUTO_INCREMENT,
        first_name VARCHAR (255),
        last_name VARCHAR (255),
        latang VARCHAR (255),
        sex VARCHAR (255),
        dob DATE,
        address VARCHAR (255),
        phone VARCHAR (255),
        parent_number VARCHAR (255),
        end_of_highschool VARCHAR (255),
        level_study VARCHAR (255),
        place_exambacll VARCHAR (255),
        number_room INT (10),
        number_table INT (10),
        img_student VARCHAR (255),
        birth_certificate VARCHAR (255),
        img_score VARCHAR (255),
        certificate VARCHAR (255),
        PRIMARY KEY(id)

    )";

    //check create table
    if($conn->query($create_tb)===true){
        echo"create table success";
    }else{
        die("create not success");
    }
}
?>