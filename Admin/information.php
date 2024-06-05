<?php
include("../Departmen/connect_database.php");
?>
<!DOCTYPE html>
<html lang="kh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam information</title>
    <link rel="stylesheet" href="../Header/style1.css">
    <link rel="stylesheet" href="../Footer/footer.css">
    <link rel="stylesheet" href="Menu/Style9.css">
    <!-- Sizebare Bootstrap core CSS -->
    <link href="Menu/bootstrap.min.css" rel="stylesheet">
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
        .cen{
            text-align: center;
        }
        .edit {
            background-color: blue;
        }

        .delete {
            background-color: red;
            padding: .5rem 1rem;
            cursor: pointer;
            border: none;
            color: white;
            border-radius: .2rem;
        }
        .btre{
            margin-left: 69%;
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

    <link rel="stylesheet" href="../Departmen/insert.css">
</head>

<body>
    <?php
    include("header.php");
    ?>
    <?php
    include("Menu/sizebare.php");
    ?>
    <div class="detil">
        <button id="myButton_content" class="adddata_btn">Add Result</button>
        <div id="myModal_content" class="conmodal">
            <div class="conmodal-content">
                <span class="close_content">&nbsp;&times;&nbsp;</span>
                <br><br><br>
                <div class="more">
                    <!-- upload pdfFile -->
                    <div class="upload-pdf">
                        <?php
                        //check if file is uploaded
                        if (isset($_POST['submit'])) {
                            $targetDir = "uploads/";
                            $targetFile = $targetDir . basename($_FILES["pdfFile"]["name"]);
                            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

                            //check if file is a PDF and less than 2MB
                            if ($fileType != "pdf" || $_FILES["pdfFile"]["size"] > 10000000) {
                                echo "Error: Only PDF files less than 10MB are allowed to upload.";
                            } else {
                                //Move uploaded file to uploads folder
                                if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
                                    //Insert file information into database
                                    $filename = $_FILES["pdfFile"]["name"];
                                    $folder_path = $targetDir;
                                    $time_stamp = date('Y-m-d H:i:s');
                                    $sql = "INSERT INTO  pdf_file_upload (filename, folder_path, time_stamp)
                        VALUES('$filename', '$folder_path', '$time_stamp')";

                                    if ($conn->query($sql) === true) {
                                        echo "File uploaded successfully.";
                                        // exit(0);
                                    } else {
                                        echo "Error: " . $sql . "<br>" . $conn->error;
                                        exit(0);
                                    }
                                } else {
                                    echo "Error uploading file.";
                                    exit(0);
                                }
                            }
                        }
                        ?>
                        <form method="post" enctype="multipart/form-data">
                            <h2 class="cen">ប្រកាសលទ្ធផលការប្រឡង</h2><br><br>
                            <input type="file" name="pdfFile" class="form-control-file" id="pdfFile"><br><br>
                            <button type="submit" name="submit" class="edit">upload</button>
                            <button type="reset" class="delete btre">reset</button>
                        </form>
                    </div>
                    <!-- /upload pdfFile -->
                </div>
            </div>
        </div>
        <!-- view pdfFile -->
        <div class="staff-view-pdf">
            <!-- show database -->
            <table border="1" cellspacing="0">
                <tr>
                    <th class="head">No.</th>
                    <th class="head">File Name</th>
                    <th class="head">Date</th> 
                    <th class="head">Action</th>
                    <th class="head">Delete</th>
                </tr>
                <?php
                $sql = "SELECT * FROM pdf_file_upload";
                $result = $conn->query($sql);
                $count = 1;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $count . "</td>";
                        echo "<td>" . $row['filename'] . "</td>";
                        echo "<td>" . $row['time_stamp'] . "</td>";
                        echo ' <td><a href="uploads/' . $row['filename'] . '" height="920" width="92%" class="btn btn-info edit" target="_blank">View</a></td>';
                        echo ' <td><a href="informationdel.php?id=' . $row['id'] . '" class="delete">Delete</a></td>';
                        echo "</tr>";
                        $count++;
                    }
                } else {
                    echo "No records found";
                } ?>
            </table>
            <!-- show database -->
        </div>
        <!-- /view pdfFile -->


    </div>
    </div>
    <?php
    include("footer.php");
    //Close database connection
    $conn->close();
    ?>
    <!-- js for from upload-pdf(POP UP) -->
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
    <!-- /js for form upload-pdf(POP UP) -->
    <!-- <script src="Admin/Menu/bootstrap.bundle.min.js"></script>
    <script src="Admin/Menu/sidebars.js"></script> -->
</body>

</html>