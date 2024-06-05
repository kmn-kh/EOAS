<?php
include ("../Departmen/connect_database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../Departmen/staff.css">
    <link rel="stylesheet" href="../Departmen/insert.css">
    <link rel="stylesheet" href="../Header/style1.css">
    <link rel="stylesheet" href="../Footer/footer.css">
    <link rel="stylesheet" href="Menu/Style9.css">
    <link rel="stylesheet" href="../Departmen/bootstrapstaff.css">
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
</head>

<body>
    <?php
    include ("header.php");
    ?>
    <?php
    include ("Menu/sizebare.php");
    ?>
    <div class="detil">
        <!-- Staff -->
        <button id="myButton_content" class="adddata_btn">Add Staff</button>
        <div id="myModal_content" class="conmodal">
            <div class="conmodal_staff">
                <span class="close_content">&nbsp;&times;&nbsp;</span>
                <br><br><br>
                <!-- Read more show -->
                <div class="more">
                    <div class="video_top">
                        <form action="Process/process_al_staff_info.php" method="post" enctype="multipart/form-data"
                            class="formstaff">
                            <h1 class="head">Staff Form</h1>
                            <h5>Picture</h5>
                            <input type="file" name="image"></input><br>
                            <h5>Name</h5>
                            <input type="text" name="name" placeholder="enter name" class="namein"></input><br>
                            <h5>Skill</h5>
                            <input type="text" name="skill" placeholder="enter skill"></input><br>
                            <h5>Email</h5>
                            <input type="text" name="email" placeholder="enter email"></input><br>
                            <h5>Phone Number</h5>
                            <input type="text" name="phone_number" placeholder="enter phone number"></input><br>
                            <!-- SUMARY -->
                            <h5>SUMARY</h5>
                            <textarea type="text" name="sumary" id="" placeholder="SUMARY"></textarea><br>
                            <!-- /SUMARY -->
                            <!-- Education Background -->
                            <h5>Education Background</h5>
                            <textarea type="text" name="education_background" values="education_background" id=""
                                placeholder="Education Background"></textarea><br>
                            <!-- /Education Background -->
                            <!-- Spacial skill -->
                            <h5>Spacial skill</h5>
                            <textarea type="text" name="spacial_skill" values="spacial_skill" id=""
                                placeholder="Spacial skill"></textarea><br>
                            <!-- /Spacial skill -->
                            <!-- Award -->
                            <h5>Award</h5>
                            <textarea name="award" values="award" id="" placeholder="Award"></textarea><br>
                            <!-- /Award -->
                            <!-- Work Experiences -->
                            <h5>Work Experiences</h5>
                            <textarea type="text" name="work_experiences" values="work_experiences" id=""
                                placeholder="Work Experiences"></textarea><br><br>
                            <!-- Work Experiences -->
                            <br><br>
                            <button type="reset" class="Reset">Reset</button>
                            <button type="submit" name="submit" class="submit">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.getElementById("myButton_content").addEventListener("click", function () {
                document.getElementById("myModal_content").style.display = "block";
            });

            document.querySelector(".close_content").addEventListener("click", function () {
                document.getElementById("myModal_content").style.display = "none";
            });

            window.addEventListener("click", function (event) {
                if (event.target == document.getElementById("myModal_top")) {
                    document.getElementById("myModal_content").style.display = "none";
                }
            });
        </script><br>
        <!-- Staff -->
        <!-- 1 -->
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Retrieve the file name from the database
            $sql = "SELECT img FROM al_staff_info WHERE id ='" . $id . "'";
            $result = $staff_conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $file_name = $row['img'];
                $file_path = 'img/al/' . $file_name; // Update the path to your file directory
        
                // Delete the file from the server
                if (file_exists($file_path)) {
                    unlink($file_path);
                }

                // Delete the record from the database
                $sql = "DELETE FROM al_staff_info WHERE id ='" . $id . "'";
                $staff_conn->query($sql);
            }

            // Redirect to the index page after deletion
            // header('Location: ./index.php');
            // exit;
        }
        ?>
        <table class="stafftab" cellspacing="0">
            <tr>
                <th class="th1">No.</th>
                <th class="th2">Name</th>
                <th class="th3">Skill</th>
                <th class="th4">Email</th>
                <th class="th5">Phone Number</th>
                <th class="th6">Action</th>
                <th class="th6">Delete</th>
            </tr>
            <?php
            $staff_data = "SELECT * FROM al_staff_info";
            $staff_result = mysqli_query($staff_conn, $staff_data);
            if (mysqli_num_rows($staff_result) > 0) {
                $count_staff = 0;
                while ($info_result = mysqli_fetch_assoc($staff_result)) {
                    $count_staff++;
                    ?>
                    <tr>
                        <td><?= $count_staff ?></td>
                        <td><?= $info_result['name']; ?></td>
                        <td><?= $info_result['skill'] ?></td>
                        <td><?= $info_result['email'] ?></td>
                        <td><?= $info_result['phone_number'] ?></td>
                        <td><button id="myButton<?= $info_result['id']; ?>" class="view">View</button></td>
                        <td><button class="delete"><a href="?id=<?= $info_result['id']; ?>"
                                    onclick="return confirm('Are you sure you want to delete this staff?')">Delete</a></button>
                        </td>
                    </tr>

                    <div id="myModal<?= $info_result['id']; ?>" class="modal" style="display: none;
                       position: fixed;
                       z-index: 1;
                       left: 0;
                       top: 0;
                       width: 100%;
                       height: 100%;
                       overflow: auto;
                       background-color: rgba(0,0,0,0.4);">
                        <div class="modal-content" style="background-color: #fefefe;
                                                  margin: 6% auto 0px auto;
                                                  padding: 0px 20px 20px 20px;
                                                  border: 1px solid #888;
                                                  width: 80%;
                                                  border-radius: 10px;
                                                  box-shadow: 0 5px 10px rgba(0,0,0,0.2);">
                            <span class="close close<?= $info_result['id']; ?>" style="cursor: pointer;color: rgb(102, 102, 102);
                               float: right;
                               margin-left: 97%;
                               font-size: 40px;
                               font-weight: bold;
                               ">&times;</span>
                            <!-- Read more show -->
                            <div class="more">
                                <section class="team section">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6 mt-4 center">
                                                <div class="member d-flex align-items-start">
                                                    <div class="teampic">
                                                        <img src="img/al/<?= $info_result['img']; ?>" class="img-fluid"
                                                            alt="staff1">
                                                    </div>
                                                    <div class="member-info">
                                                        <h4>
                                                            <?= $info_result['name']; ?>
                                                        </h4>
                                                        <span>
                                                            <?= $info_result['skill']; ?>
                                                        </span>
                                                        <p style="display: inline-block; height: fit-content;"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                                fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                                                            </svg> <a href="mailto:<?= $info_result['email']; ?>"
                                                                target="_blank" rel="noopener noreferrer">
                                                                <?= $info_result['email']; ?>
                                                            </a></p>

                                                        <p style="display: inline-block; height: fit-content;"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                                fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                            </svg>
                                                            <?= $info_result['phone_number']; ?>
                                                        </p>
                                                        <!-- Read more -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h5 style="color: rgb(7, 97, 166); font-size: 20px; border-bottom: 3px solid; width: 98%;">
                                    SUMARY
                                </h5>
                                <p>
                                    <?= $info_result['sumary']; ?>
                                </p>
                                <h5 style="color: rgb(7, 97, 166); font-size: 20px; border-bottom: 3px solid; width: 98%;">
                                    Education
                                    Background</h5>
                                <p>
                                    <?= $info_result['education_background']; ?>
                                </p>
                                <h5 style="color: rgb(7, 97, 166); font-size: 20px; border-bottom: 3px solid; width: 98%;">
                                    Spacial
                                    skill
                                </h5>
                                <p><?= $info_result['spacial_skill']; ?></p>
                                <h5 style="color: rgb(7, 97, 166); font-size: 20px; border-bottom: 3px solid; width: 98%;">Award
                                </h5>
                                <p>
                                    <?= $info_result['award']; ?>
                                </p>
                                <h5 style="color: rgb(7, 97, 166); font-size: 20px; border-bottom: 3px solid; width: 98%;">Work
                                    Experiences</h5>
                                <p>
                                    <?= $info_result['work_experiences']; ?>
                                </p>
                            </div>
                        </div>
                        <script>
                            document.getElementById("myButton<?= $info_result['id']; ?>").addEventListener("click", function () {
                                document.getElementById("myModal<?= $info_result['id']; ?>").style.display = "block";
                            });

                            document.querySelector(".close<?= $info_result['id']; ?>").addEventListener("click", function () {
                                document.getElementById("myModal<?= $info_result['id']; ?>").style.display = "none";
                            });

                            window.addEventListener("click", function (event) {
                                if (event.target == document.getElementById("myModal<?= $info_result['id']; ?>")) {
                                    document.getElementById("myModal<?= $info_result['id']; ?>").style.display = "none";
                                }
                            });
                        </script>
                    <?php }
            } ?>
        </table>
    </div>
    </div>
    <?php
    include ("footer.php");
    ?>
    <!-- /Staff -->
    <!-- /Staff -->
    <!-- <script src="Admin/Menu/bootstrap.bundle.min.js"></script>

    <script src="Admin/Menu/sidebars.js"></script> -->
</body>

</html>