<?php
include ("Departmen/connect_database.php");
if (!$conn) {
    die("Connection failed");
} else {
    $sql = "SELECT * FROM header WHERE id =1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $k_name = $row['k_name'];
    $eng_name = $row['eng_name'];
    $image1 = $row['image1'];
    $image2 = $row['image2'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="Departmen/insert.css">

    <link rel="stylesheet" href="Header/style1.css">
    <link rel="stylesheet" href="body/body1.css">
    <link rel="stylesheet" href="Footer/footer.css">
    <link rel="stylesheet" href="Admin/Menu/Style9.css">

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
</head>

<body>
    <?php
    include ("Header/header.php");
    ?>
    <?php
    include ("Admin/Menu/sizebare.php");
    ?>
    <div class="detil">
        <div class="edit_header">
            <form action="Process/process_header.php" method="POST" enctype="multipart/form-data">
                <p>ឈ្មោះ វិទ្យាស្ថានជាភាសាខ្មែរ</p>
                <input type="text" name="k_name" value="<?php echo $k_name; ?>" class="text">
                <p>ឈ្មោះ វិទ្យាស្ថានជាភាសាអង់គ្លេស</p>
                <input type="text" name="eng_name" value="<?php echo $eng_name; ?>" class="text">
                <div class="text_qr">
                    <p class="logo">Logo វិទ្យាស្ថាន</p>
                    <p class="pi">រូបភាព វិទ្យាស្ថាន</p>
                </div>
                <div class="qr_code">
                    <input type="file" name="image1" value="<?php echo $image1; ?>">
                    <input type="file" name="image2" value="<?php echo $image2; ?>">
                </div>
                <div class="chose">
                    <input type="reset" value="Reset" class="Reset">
                    <input name="submit" type="submit" value="Submit" class="submit">
                </div>
            </form>
        </div>
    </div>
    </div>
    <?php
    include ("Footer/footer.php");
    ?>
    <!-- <script src="Admin/Menu/bootstrap.bundle.min.js"></script>

    <script src="Admin/Menu/sidebars.js"></script> -->
</body>

</html>