<?php
include("../Departmen/connect_database.php");
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

        .img {
            width: 100%;
        }

        .th6 {
            width: 10%;
            text-align: center;
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
            <button id="myButton_content" class="adddata_btn">Add Image</button><br><br>
            <div id="myModal_content" class="conmodal">
                <div class="conmodal-content">
                    <span class="close_content">&nbsp;&times;&nbsp;</span>
                    <br><br><br>
                    <!-- Read more show -->
                    <div class="more">
                        <div class="video_top">
                            <form action="Process/process_slideshow.php" method="post" enctype="multipart/form-data"
                                class="formstaff">
                                <input type="file" name="image"></input><br><br>
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
            </script>
            <!--  -->
            <!-- /video top -->
            <div class="staff-view-depvidtop">
                <!-- select database -->
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $delet = "DELETE FROM slideshow WHERE id ='" . $id . "'";
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

                $sql = "SELECT * FROM slideshow";
                $result = $conn->query($sql);
                // $conn->close();
                
                ?>
                <!-- select database -->

                </p>
                <table border="0" cellspacing="0">
                    <tr>
                        <th class="th1">No.</th>
                        <th class="th6">File Name</th>
                        <th class="b" colspan="2">View</th>
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
                            echo "<td>" . $row['img'] . "</td>";
                            echo "<td><img src='../them/slideshow/" . $row['img'] . "' class='img' alt='slide'></td>";
                            echo ' <td><a href="../them/slideshow/' . $row['img'] . '" class="btn btn-info" target="_blank">View</a></td>';
                            echo ' <td><a href="../them/slideshow/' . $row['img'] . '" class="btn btn-info" target="_blank">View</a></td>';
                            echo ' <td><a href="slideshow.php?id=' . $row['id'] . '">Delete</a></td>';
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