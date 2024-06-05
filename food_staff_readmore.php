<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "staff";

$connect = new mysqli($host, $username, $password, $db);
if ($connect->connect_error) {
    die("Error Connect to DB" . $connect->connect_error);
}

// $name = "";
// $sex = "";
// $phone_number = "";
// $id_card = "";
// $id = "";
$img = "";
$name = "";
$skill = "";
$email = "";
$phone_number = "";
$sumary = "";
$education_background = "";
$spacial_skill = "";
$award = "";
$work_experiences = "";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (!isset($_GET['id'])) {
        header("location: ./depfood.php");
        exit;
    }

    $id = $_GET['id'];

    $staff_data = "SELECT * FROM food_staff_info WHERE id = $id";

    $staff_result = $connect->query($staff_data);
    $row = $staff_result->fetch_assoc();
    if (!$row) {
        die("Error Get Data ");
    } elseif (!$row)
        echo "hi";
    $img = $row['img'];
    $name = $row['name'];
    $skill = $row['skill'];
    $email = $row['email'];
    $phone_number = $row['phone_number'];
    $sumary = $row['sumary'];
    $education_background = $row['education_background'];
    $spacial_skill = $row['spacial_skill'];
    $award = $row['award'];
    $work_experiences = $row['work_experiences'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="Header/style1.css">
    <link rel="stylesheet" href="body/body1.css">
    <link rel="stylesheet" href="Footer/footer.css">
    <link rel="stylesheet" href="menu/menu.css">
    <link rel="stylesheet" href="Departmen/departmen.css">
    <!-- <link rel="stylesheet" href="Departmen/readmore.css"> -->

    <!-- tab menu -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- /tab menu -->

    <!-- Staff link -->
    <link rel="stylesheet" href="Departmen/Dep_menu/tab_menu1.css">
    <!-- external css file -->
    <link rel="stylesheet" href="Departmen/staff.css">
    <!-- /Staff link -->

    <!-- Departmen -->
    <style>
        .cen{
            width: 46%;
            margin: 0 auto;
        }
        .cen .teampic{
            margin-right: 20px;
        }
        .close{
            position: absolute;
            width: 6%;
            border: none;
            background-color: aqua;
            font-size: 20px;
            text-align: center;
            text-decoration: none;
            padding-bottom: 4px;
            border-radius: 10px;
            margin-left: 80%;
        }
        .row{
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <?php
    include ("Header/header.php");
    ?>
    <?php
    include ("menu/menu.php");
    ?>
    <div class="more">
        <section class="team section">
            <div class="container">
                <div class="row">
                    <a href="depfood.php" class="close"><spanp>Close</spanp></a>
                    <div class="col-lg-6 mt-4 cen">
                        <div class="member d-flex align-items-center">
                            <div class="teampic">
                                <img src="../EOAS/img/<?= $img; ?>" class="img-fluid" alt="staff1">
                            </div>
                            <div class="member-info">
                                <h4>
                                    <?= $name; ?>
                                </h4>
                                <span>
                                    <?= $skill; ?>
                                </span>
                                <p><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                                    </svg> <a href="mailto:<?= $email; ?>" target="_blank" rel="noopener noreferrer">
                                        <?= $email; ?>
                                    </a></p>

                                <p><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        class="bi bi-telephone" viewBox="0 0 16 16">
                                        <path
                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg> <?= $phone_number; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Read more show -->
                    <div class="more">
                        <h5 style="color: rgb(7, 97, 166); font-size: 20px; border-bottom: 3px solid; width: 98%;">
                            SUMARY</h5>
                        <p><?= $sumary; ?></p>


                        <h5 style="color: rgb(7, 97, 166); font-size: 20px; border-bottom: 3px solid; width: 98%;">
                            Education Background</h5>
                        <p><?= $education_background; ?></p>

                        <h5 style="color: rgb(7, 97, 166); font-size: 20px; border-bottom: 3px solid; width: 98%;">
                            Spacial skill</h5>
                        <p><?= $spacial_skill; ?></p>

                        <h5 style="color: rgb(7, 97, 166); font-size: 20px; border-bottom: 3px solid; width: 98%;">
                            Award</h5>
                        <p><?= $award; ?></p>

                        <h5 style="color: rgb(7, 97, 166); font-size: 20px; border-bottom: 3px solid; width: 98%;">
                            Work Experiences</h5>
                        <p><?= $work_experiences; ?></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    include ("Footer/footer.php");
    ?>
</body>

</html>