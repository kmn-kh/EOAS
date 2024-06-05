<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="Header/style1.css">
    <link rel="stylesheet" href="body/body1.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/> -->
    <link rel="stylesheet" href="body/css.css">
    <link rel="stylesheet" href="Footer/footer.css">
    <link rel="stylesheet" href="menu/menu.css">
    <!-- style menu -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- /style menu -->
</head>

<body>
    <?php
    include ("Departmen/connect_database.php");
    ?>
    <?php
    include ("Header/header.php");
    ?>
    <?php
    include ("menu/menu.php");
    ?>
    <?php
    include ("body/body.php");
    ?>

    <?php
    include ("Footer/footer.php");
    ?>
</body>

</html>