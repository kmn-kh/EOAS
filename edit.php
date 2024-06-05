<?php
include("Departmen/connect_database.php");
$name = "";
$sex = "";
$phone_number = "";
$id_card = "";
$id = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (!isset($_GET['id'])) {
        header("location: ./staff.php");
        exit;
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = $id";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $name2 = $row['name'];
    if (!$row) {
        die("Error Get Data ");
    } elseif (!$row)

    $name = $row['name'];
    $sex = $row['sex'];
    $phone_number = $row['phone_number'];
    $id_card = $row['id_card'];

} else {

    $id = $_POST['id'];
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
        die();
    }

    $sql = "UPDATE users SET name='$name', sex='$sex', phone_number='$phone_number', id_card='$id_card' WHERE id=$id";
    $result = $conn->query($sql);
    if (!$result) {
        echo " <script>
                alert('Edit Not Success !');
            </script> ";
        die();
    }

    header("location: ./staff.php");
    exit;

}



?>


<!DOCTYPE html>
<html lang="kh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Header/style1.css">
    <link rel="stylesheet" href="body/body1.css">
    <link rel="stylesheet" href="Footer/footer.css">
    <link rel="stylesheet" href="Admin/Menu/Style9.css">
    <style>
        .container {
            width: 70%;
            margin: 5rem auto;

        }

        .container h1 {
            text-align: center;
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

        input {
            padding: .5rem 2rem;
            margin-bottom: .5rem;
        }
    </style>

    <!-- new -->
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
    include ("Header/header.php");
    ?>
    <?php
    include ("Admin/Menu/sizebare.php");
    ?>
    <div class="detil">
        <div class="container">
            <h1>Edit User</h1>

            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <input placeholder="Name..." name="name" value="<?php echo $name2; ?>" />
                <div class="addin">
                    <p id="title">Sex</p>
                    <label for="Male">Male</label>
                    <input type="radio" name="sex" value="Male" <?php echo ($sex == "Male") ? "checked" : " " ?>>
                    <label for="Male">Female</label>
                    <input type="radio" name="sex" value="Female" <?php echo ($sex == "Female") ? "checked" : " " ?>><br>
                    <!-- <label for="Male">Male</label>
                <input type="radio" name="sex" value="Male">
                <label for="Male">Female</label>
                <input type="radio" name="sex" value="Female"><br> -->
                </div>
                <input type="number" placeholder="Tel..." name="phone_number" value="<?php echo $phone_number; ?>" />
                <input type="number" placeholder="Id card..." name="id_card" value="<?php echo $id_card; ?>" />
                <button class="add" type="submit">Update</button>

            </form>

        </div>
    </div>
    </div>
    <?php
    include ("Footer/footer.php");
    ?>
    <script src="Admin/Menu/bootstrap.bundle.min.js"></script>
</body>

</html>