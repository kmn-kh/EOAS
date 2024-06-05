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
    <link rel="stylesheet" href="../Departmen/insert.css">

    <link rel="stylesheet" href="../Header/style1.css">
    <link rel="stylesheet" href="../Footer/footer.css">
    <link rel="stylesheet" href="Menu/Style9.css">

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
        <div class="addvidtop">
            <button id="myButton_content" class="adddata_btn">Add Video Top</button><br><br>
            <div id="myModal_content" class="conmodal">
                <div class="conmodal-content">
                    <span class="close_content">&nbsp;&times;&nbsp;</span>
                    <br><br><br>
                    <!-- Read more show -->
                    <div class="more">
                        <div class="video_top">
                            <form action="Process/process_food_videotop.php" method="POST">
                                <h5>Link Top</h5>
                                <input name="video_top" class="link_top" placeholder="insert link" id="linktop"
                                    required>
                                <br><br>
                                <input type="reset" value="Reset" class="Reset">
                                <input name="submit" type="submit" value="Submit" class="submit">
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
            </script>
            <!--  -->
            <!-- /video top -->
            <div class="staff-view-depvidtop">
                <!-- select database -->
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $delet = "DELETE FROM food_vidtop WHERE id ='" . $id . "'";
                    $results = $conn->query($delet);
                    if ($results == true) {
                        //$_SESSION['delete'] = "Delete data is successfully";
                        //header('location: insert_dep_com.php');
                        //exit(0);
                        // echo "<script>
                        //     alert('Delete data is successfully');
                        //     </script>";
                    } else {
                        //$_SESSION['delete'] = "Delete data not successfully";
                        //header('location: insert_dep_com.php');
                        //exit(0);
                        // echo "<script>
                        //     alert('Delete data not successfully');
                        //     </script>";


                        // echo $message;
                    }

                    // $conn->close();
                }

                $sql = "SELECT * FROM food_vidtop";
                $result = $conn->query($sql);
                // $conn->close();
                
                ?>
                <!-- select database -->

                </p>
                <table border="0" cellspacing="0">
                    <tr>
                        <th class="th1">No.</th>
                        <th class="th2">link</th>
                        <th class="th3">Edit</th>
                        <th class="th4">Delete</th>
                    </tr>
                    <?php
                    $count = 1;
                    // if ($result-> num_rows > 0) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $count . "</td>";
                            echo "<td>" . $row['video_top'] . "</td>";
                            echo ' <td><a href="' . $row['video_top'] . '" class="btn btn-info" target="_blank">View</a></td>';
                            echo ' <td><a href="insert_dep_food.php?id=' . $row['id'] . '">Delete</a></td>';
                            echo "</tr>";
                            $count++;
                        }
                    } else {
                        echo "No records found";
                    } ?>
                </table>
                <!-- show database -->
                <!-- Insert Departmen -->
                <!-- Departmen -->

            </div>
        </div>
        <div class="addvidtop">
            <button id="myButton_contentcon" class="adddata_btn">Add Content</button>
            <div id="myModal_contentcon" class="conmodal">
                <div class="conmodal-contentcon">
                    <span class="close_contentcon">&nbsp;&times;&nbsp;</span>
                    <br><br><br>
                    <div class="more">
                        <div class="content cone">
                            <form action="Process/process_food_content.php" method="POST">
                                <h5>ចំណងជើង</h5>
                                <input type="text" name="title" values="title" placeholder="បំពេញ ចំណងជើង"
                                    class="title"></input><br><br>
                                <h5>ខ្លឹមសារ</h5>
                                <textarea name="content" values="content" id="content" style="width: 96%;"
                                    placeholder="បំពេញខ្លឹមសារ"></textarea>
                                <br>
                                <input type="reset" value="Reset" class="Reset">
                                <input name="submit" type="submit" value="Submit" class="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                document.getElementById("myButton_contentcon").addEventListener("click", function () {
                    document.getElementById("myModal_contentcon").style.display = "block";
                });

                document.querySelector(".close_contentcon").addEventListener("click", function () {
                    document.getElementById("myModal_contentcon").style.display = "none";
                });

                window.addEventListener("click", function (event) {
                    if (event.target == document.getElementById("myModal_top")) {
                        document.getElementById("myModal_contentcon").style.display = "none";
                    }
                });
            </script>
            <!--  -->
            <br><br>
            <!-- <?php
            // $db_name = "departmen";
            // $host = "localhost";
            // $user_name = "root";
            // $password = "";
            
            // $conn = new mysqli($host, $user_name, $password, $db_name);
            // if ($conn->connect_error) {
            //     die("Connection failed" . $conn->connect_error);
            // }  ?> -->
            <!-- /content -->
            <div class="staff-view-depcontent">
                <!-- select database -->
                <?php
                if (isset($_GET['id'])) {
                    $id_con = $_GET['id'];
                    $delet_con = "DELETE FROM food_data WHERE id ='" . $id_con . "'";
                    $results_con = $conn->query($delet_con);
                    if ($results_con == true) {
                        // echo "<script>
                        //     alert('Delete data is successfully');
                        //     </script>";
                        //header('location: insert_dep_com_con.php');
                        //exit(0);
                
                    } else {
                        // echo "<script>
                        //     alert('Delete data not successfully');
                        //     </script>";
                    }

                    // $conn->close();
                }

                $sql_con = "SELECT * FROM food_data";
                $result_con = $conn->query($sql_con);
                // $conn->close();
                
                ?>
                <!-- select database -->
                <!-- show database -->
                <table border="0" cellspacing="0">
                    <tr>
                        <th class="th1">No.</th>
                        <th class="th2">Title</th>
                        <th class="th3">Content</th>
                        <th class="th4">Delete</th>
                    </tr>
                    <?php
                    $count_con = 1;
                    // if ($result-> num_rows > 0) {
                    if (mysqli_num_rows($result_con) > 0) {
                        while ($row = $result_con->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $count_con . "</td>";
                            echo "<td>" . $row['title'] . "</td>";
                            echo "<td>" . $row['content'] . "</td>";
                            echo ' <td><a href="insert_dep_food.php?id=' . $row['id'] . '">Delete</a></td>';
                            echo "</tr>";
                            $count_con++;
                        }
                    } else {
                        echo "No records found";
                    } ?>
                </table>
                <!-- show database -->
            </div>
        </div>
        <div class="addvidtop">
            <!-- video button -->
            <button id="myButton_contentbut" class="adddata_btn">Add Video Button</button>
            <div id="myModal_contentbut" class="conmodal">
                <div class="conmodal-contentbut">
                    <span class="close_contentbut">&nbsp;&times;&nbsp;</span>
                    <br><br><br>
                    <!-- Read more show -->
                    <div class="more">
                        <div class="video_button">
                            <form action="Process/process_food_videobutton.php" method="POST">
                                <h5>Link1</h5>
                                <input type="text" name="first" values="first" class="linkbut"
                                    placeholder="insert link1" required><br><br>
                                <h5>Link2</h5>
                                <input type="text" name="second" values="second" class="linkbut"
                                    placeholder="insert link2"><br><br>
                                <h5>Link3</h5>
                                <input type="text" name="third" values="third" class="linkbut"
                                    placeholder="insert link3"><br><br>
                                <input type="reset" value="Reset" class="Reset">
                                <input name="submit" type="submit" value="Submit" class="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                document.getElementById("myButton_contentbut").addEventListener("click", function () {
                    document.getElementById("myModal_contentbut").style.display = "block";
                });

                document.querySelector(".close_contentbut").addEventListener("click", function () {
                    document.getElementById("myModal_contentbut").style.display = "none";
                });

                window.addEventListener("click", function (event) {
                    if (event.target == document.getElementById("myModal_top")) {
                        document.getElementById("myModal_contentbut").style.display = "none";
                    }
                });
            </script>
            <br><br>
            <!-- /video button -->
            <div class="staff-view-depvidbut">
                <!-- select database -->
                <?php
                if (isset($_GET['id'])) {
                    $id_but = $_GET['id'];
                    $delet_but = "DELETE FROM food_videobutton WHERE id ='" . $id_but . "'";
                    $results_but = $conn->query($delet_but);
                    if ($results_but == true) {
                        echo "<script>
                            alert('Delete data is successfully');
                            </script>";

                    } else {
                        echo "<script>
                            alert('Delete data is successfully');
                            </script>";
                    }

                    // $conn->close();
                }

                $sql_but = "SELECT * FROM food_videobutton";
                $result_but = $conn->query($sql_but);
                // $conn->close();
                
                ?>
                <!-- select database -->
                <!-- show database -->
                <table border="0" cellspacing="0" class="linkbut">
                    <tr>
                        <!-- <th class="thl1">No.</th>
                        <th colspan="2" class="thl2">Link1</th>
                        <th colspan="2" class="thl3">Link2</th>
                        <th colspan="2" class="thl4">Link3</th>
                        <th class="thl5">Delete</th> -->
                        <th class="thl1">No.</th>
                        <th class="thl2">Link1</th>
                        <th class="thl3">Link2</th>
                        <th class="thl4">Link3</th>
                        <th class="thl5">Delete</th>
                    </tr>
                    <?php
                    $count_but = 1;
                    // if ($result-> num_rows > 0) {
                    if (mysqli_num_rows($result_but) > 0) {
                        while ($row = $result_but->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $count_but . "</td>";
                            // echo "<td>" . $row['first'] . "</td>";
                            echo ' <td><a href="' . $row['first'] . '" class="btn btn-info" target="_blank">View</a></td>';
                            // echo "<td>" . $row['second'] . "</td>";
                            echo ' <td><a href="' . $row['second'] . '" class="btn btn-info" target="_blank">View</a></td>';
                            // echo "<td>" . $row['third'] . "</td>";
                            echo ' <td><a href="' . $row['third'] . '" class="btn btn-info" target="_blank">View</a></td>';
                            echo ' <td><a id="dele" href="insert_dep_food.php?id=' . $row['id'] . '">Delete</a></td>';
                            echo "</tr>";
                            $count_but++;
                        }
                    } else {
                        echo "No records found";
                    } ?>
                </table>
                <!-- show database -->
            </div>
        </div>
    </div>
    </div>
    <?php
    include ("footer.php");
    ?>
    <!-- <script src="Admin/Menu/bootstrap.bundle.min.js"></script>

    <script src="Admin/Menu/sidebars.js"></script> -->
</body>

</html>