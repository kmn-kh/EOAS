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
    $create_tb ="CREATE TABLE com_videobutton(
        id INT (11) NOT NULL AUTO_INCREMENT,
        first VARCHAR (255),
        second VARCHAR (255),
        third VARCHAR (255),
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