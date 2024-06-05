<?php
include("../Departmen/connect_database.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../Header/style1.css">
    <link rel="stylesheet" href="../body/body1.css">
    <link rel="stylesheet" href="../Footer/footer.css">
    <link rel="stylesheet" href="Menu/Style9.css">
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
            width: 100%;
            margin: 10px auto;
        }

        .head {
            background-color: gray;
            color: white;
            width: 20%;
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
            float: right;
        }

        a {
            color: white;
            text-decoration: none;
        }

        h2{
            text-align: center;
        }
        /* #action{
            width: 20%;
        } */
    </style>
    
    <!-- Sizebare Bootstrap core CSS -->
    <link href="Menu/bootstrap.min.css" rel="stylesheet">

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
    <link href="Menu/sidebars.css" rel="stylesheet">
    <link rel="stylesheet" href="Menu/Style9.css">
</head>

<body>

    <?php
    include("header.php");
    ?>
    <?php
    include("Menu/sizebare.php");
    ?>
    <div class="detil">
        <div class="container">
            <button class="add"><a href="./add.php">Add Staff</a></button>
            <h2>Staff</h2>
            <table>
                <tr>
                    <th class="head">Name</th>
                    <th class="head">Sex</th>
                    <th class="head">Tel</th>
                    <th class="head">Id card</th>
                    <th class="head" id="action">Action</th>
                </tr>

                <?php

                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Error Get Data");
                }

                while ($row = $result->fetch_assoc()) {
                    echo "

                <tr>
                    <td>$row[name]</td>
                    <td>$row[sex]</td>
                    <td>$row[phone_number]</td>
                    <td>$row[id_card]</td>
                    <td>
                        <button class='edit'><a href='./edit.php?id=$row[id]'>Edit</a></button>
                        <button class='delete'><a href='./delete.php?id=$row[id]'>Delete</a></button>
                    </td>
                </tr>

            ";
                }
                ?>

            </table>
        </div>
    </div>
    </div>
    <?php
    include("footer.php");
    ?>
    <!-- <script src="Admin/Menu/bootstrap.bundle.min.js"></script> -->
</body>

</html>