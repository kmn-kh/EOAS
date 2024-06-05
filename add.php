<?php
include("Departmen/connect_database.php");
$name = "";
$sex = "";
$phone_number = "";
$id_card = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $phone_number = $_POST['phone_number'];
    $id_card = $_POST['id_card'];
    if ($name == "" || $sex == "" || $phone_number == "" || $id_card == "") {

        echo "
            <script>
                alert('All Field Can Not Empty');
            </script>
        ";
    }


    $sql = "INSERT INTO users (name, sex, phone_number, id_card) VALUES ('$name', '$sex', '$phone_number', '$id_card')";

    $result = $conn->query($sql);
    if (!$result) {
        die("Error Add Data");
    }

    header('location: staff.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container {
            width: 70%;
            margin: 5rem auto;
        }

        .head {
            background-color: gray;
            color: white;
        }

        button {
            padding: .5rem 1rem;
            cursor: pointer;
            border: none;
            color: white;
            border-radius: .2rem;
        }

        .edit {
            background-color: blue;
        }

        .delete {
            background-color: red;
        }

        .add {
            background-color: green;
            margin-bottom: 1rem;

        }

        a {
            color: white;
            text-decoration: none;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 30rem;
            margin: auto;
        }

        .addin {
            /* display: flex;
            flex-direction: column;
            margin: auto; */
            /* border: 1px solid gray; */
            width: 30rem;
            /* margin-bottom: .5rem; */
            padding: .5rem 0;
        }

        .container {
            h1 {
                text-align: center;
            }

        }

        .addin #title {
            padding: 0;
            margin: 0 0 0.5rem 0;
        }

        input {
            padding: .5rem 2rem;
            margin-bottom: .5rem;
        }
    </style>
    <!-- new -->
    <link rel="stylesheet" href="Header/style1.css">
    <link rel="stylesheet" href="body/body1.css">
    <link rel="stylesheet" href="Footer/footer.css">
    <link rel="stylesheet" href="Admin/Menu/Style9.css">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .container {
            width: 70%;
            margin: 5rem auto;
        }

        .head {
            background-color: gray;
            color: white;
        }

        button {
            padding: .5rem 1rem;
            cursor: pointer;
            border: none;
            color: white;
            border-radius: .2rem;
        }

        .edit {
            background-color: blue;
        }

        .delete {
            background-color: red;
        }

        .add {
            background-color: green;
            margin-bottom: 1rem;

        }

        a {
            color: white;
            text-decoration: none;
        }
    </style>
    <!-- Sizebare Bootstrap core CSS -->
    <link href="Admin/Menu/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="Admin/Menu/sidebars.css" rel="stylesheet">
    <link rel="stylesheet" href="Admin/Menu/Style9.css">
</head>

<body>
    <?php
    include("Header/header.php");
    ?>
    <?php
    include("Admin/Menu/sizebare.php");
    ?>
    <div class="detil">
        <div class="container">
            <h1>Add User</h1>

            <form method="POST">

                <input placeholder="Name..." name="name" value="" />
                <div class="addin">
                    <p id="title">Sex</p>
                    <label for="Male">Male</label>
                    <input type="radio" name="sex" value="Male">
                    <label for="Male">Female</label>
                    <input type="radio" name="sex" value="Female"><br>
                </div>
                <input type="number" placeholder="Tel..." name="phone_number" value="" />
                <input type="number" placeholder="Id card..." name="id_card" value="" />
                <button class="add" type="submit">Add</button>

            </form>

        </div>
    </div>
    </div>
    <?php
    include("Footer/footer.php");
    ?>
    <script src="Admin/Menu/bootstrap.bundle.min.js"></script>
</body>

</html>