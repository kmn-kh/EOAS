<?php
include ("../Departmen/connect_database.php");
if (!$conn) {
    die("Connection failed");
} else {
    $sql = "SELECT * FROM footer WHERE id =1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $youtube_name = $row['youtube_name'];
    $youtube_link = $row['youtube_link'];
    $facebook_name = $row['facebook_name'];
    $facebook_link = $row['facebook_link'];
    $home = $row['home'];
    $phone_number = $row['phone_number'];
    $image1 = $row['image1'];
    $image2 = $row['image2'];
    $image3 = $row['image3'];
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
        <div class="edit_footer">
            <form action="Process/process_footer.php" method="POST" enctype="multipart/form-data">
                <p>You Tube Name</p>
                <input type="text" name="youtube_name" value="<?php echo $youtube_name; ?>" class="text">
                <p>You Tube Link</p>
                <input type="url" name="youtube_link" value="<?php echo $youtube_link; ?>" class="text">
                <p>Facebook Name</p>
                <input type="text" name="facebook_name" value="<?php echo $facebook_name; ?>" class="text">
                <p>Facebook Link</p>
                <input type="url" name="facebook_link" value="<?php echo $facebook_link; ?>" class="text">
                <p>អាសយដ្ឋាន</p>
                <input type="text" name="home" value="<?php echo $home; ?>" class="text">
                <p>លេខទូរសព្ទ</p>
                <input type="text" name="phone_number" value="<?php echo $phone_number; ?>" class="text">
                <div class="text_qr">
                    <p>QR code1</p>
                    <p>QR code2</p>
                    <p>QR code3</p>
                </div>
                <div class="qr_code">
                    <input type="file" name="image1" value="<?php echo $image1; ?>">
                    <input type="file" name="image2" value="<?php echo $image2; ?>">
                    <input type="file" name="image3" value="<?php echo $image3; ?>">
                </div>
                <br>
                <div class="chose">
                    <input type="reset" value="Reset" class="Reset">
                    <input name="submit" type="submit" value="Submit" class="submit">
                </div>
            </form>
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