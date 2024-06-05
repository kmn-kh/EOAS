
<?php
include("Departmen/connect_database.php");
?>
<!DOCTYPE html>
<html lang="kh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../EOAS/Header/style1.css">
    <link rel="stylesheet" href="../EOAS/menu/menu.css">
    <link rel="stylesheet" href="../EOAS/Information_exam/Style.css">
    <link rel="stylesheet" href="../EOAS/Footer/footer.css">
    <!-- style menu -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <!-- /style menu -->
</head>

<body>
    <?php
    include ("../EOAS/Header/header.php");
    ?>
    <?php
    include ("../EOAS/menu/menu.php");
    ?>
    <div class="result">
        <p>ដាក់រូបភាពប្រកាសលទ្ធផលការប្រឡង</p>
    </div>
    <div class="result-page">
        <?php
        $selcon_data = "SELECT * FROM pdf_file_upload";
        $result = mysqli_query($conn, $selcon_data);
        $count = 0;

        if (!$result) {
            die("Query Failed: " . mysqli_error($con));
        }

        if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<embed src="uploads/' . htmlspecialchars($row['filename'], ENT_QUOTES, 'UTF-8') . '" height="600px" width="92%" type="application/pdf"></embed>';
                $count++;
            }
        } else {
            echo "No files found.";
        }
        ?>
    </div>
    <?php
    include ("../EOAS/Footer/footer.php");
    ?>
</body>

</html>