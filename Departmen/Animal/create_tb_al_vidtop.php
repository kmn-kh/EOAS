<?php
$host_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "departmen";

//connect database

$conn = new mysqli($host_name,$user_name,$password,$db_name);

//check

if(!$conn){
    die("Connect Failed");
}else{

    //create table
    $create_tb ="CREATE TABLE al_vidtop(
        id INT (11) NOT NULL AUTO_INCREMENT,
        video_top VARCHAR (255),
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