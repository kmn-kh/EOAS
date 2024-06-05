<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    //connectdatabase
    $conn = new mysqli($host, $user, $password);
    //check database
    if ($conn->connect_error){
        die("connect error". $conn->connect_error);
    }else{
        //create database
        $create_db = "CREATE DATABASE form";
        if($conn->query($create_db)===true){
            echo "Create database success";
        }else{
            die("error");
        }
    }

?>