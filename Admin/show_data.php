<?php
include("../Departmen/connect_database.php");
require_once ("../db_connection.php");

// Initialize the $search variable
$search = "";
$address = "";
$limit = 10; // Number of records per page

// Determine current page number
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

// Check if the search form is submitted
if (isset($_POST['submit'])) {
    // Get the search query from the form
    $search = $_POST['search'];

    // Assuming 'table_form' is the name of your table and 'skill' is the column you want to select
    $sql = "SELECT id, first_name, last_name, sex, latang, department, address FROM table_form WHERE department LIKE '%$search%' OR address LIKE '%$search%' LIMIT $start, $limit";
    $result = mysqli_query($conn, $sql);
    echo mysqli_error($conn);
} else {
    // If search form is not submitted, fetch all records
    $sql = "SELECT * FROM table_form LIMIT $start, $limit";
    $result = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Button_search</title>
        

    </head>
    
</head>

<body>

</body>


<!-- kj -->

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../Header/style1.css">
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

        /* h2 {
            text-align: center;
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

    <!-- nak -->
    <link rel="stylesheet" href="css/select12.css">
        <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@900&family=Koulen&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .pagination {
            list-style-type: none;
            margin: 20px 0;
            padding: 0;
            text-align: center;
        }

        .pagination li {
            display: inline-block;
            margin-right: 5px;
        }

        .pagination li a {
            display: block;
            padding: 8px 12px;
            background-color: #f2f2f2;
            color: #333;
            text-decoration: none;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .pagination li a.active {
            background-color: rgba(14, 167, 88, 0.998);
            color: #fff;
        }
    </style>
    <!-- nak -->
</head>

<body>

    <?php
    include ("header.php");
    ?>
    <?php
    include ("Menu/sizebare.php");
    ?>
    <div class="detil">
        <div class="del">
            <p>បញ្ជីរាយនាមសិស្សដាក់ពាក្យសរុប</p>
        </div>
        <div class="search">
            <form method="POST" action="">
                <input id="search" type="text" placeholder="Type..." name="search" value="<?php echo $search; ?>">
                <!-- <i class="fa-brands fa-searchengin"></i> -->
                <!-- <button id="bts" type="submit" name="submit">Search<i class="fa-solid fa-magnifying-glass"></i></button> -->
                <button type="submit" name="submit" id="bts">Search</button>
            </form>
        </div>
        <div class="table">
            <!-- <div class="export">

            <button><a href="export_pdf.php?department=<?php echo urlencode($department); ?>">Export to Excel</a></button>
        </div> -->
            <table>
                <tr id="table">
                    <th class="tb">ល.រ</th>
                    <th class="tb">នាមត្រកូល</th>
                    <th class="tb">នាមខ្លួន</th>
                    <th class="tb">អក្សរឡាតាំង</th>
                    <th class="tb">ភេទ</th>
                    <th class="tb">ដេប៉ាតឺម៉ង់</th>
                    <th class="tb">ទីលំនៅបច្ចុប្បន្ន</th>
                    <th id="detial">Detail</th>
                </tr>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td > <?= $row['id']; ?></td>
                            <td ><?= $row['first_name']; ?></td>
                            <td ><?= $row['last_name']; ?></td>
                            <td ><?= $row['latang']; ?></td>
                            <td ><?= $row['sex']; ?></td>
                            <td ><?= $row['department']; ?></td>
                            <td ><?= $row['address']; ?></td>
                            <td><a href="detail.php?id=<?php echo $row['id'] ?> " class="detail">Detail</a></td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='7'>គ្មានលទ្ធផល</td></tr>";
                }
                ?>
            </table>

            <!-- Pagination Links -->
            <?php
            $sql = "SELECT COUNT(id) AS total FROM table_form";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $total_pages = ceil($row["total"] / $limit);

            echo "<ul class='pagination'>";
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<li><a href='?page=" . $i . "' class='" . ($page == $i ? 'active' : '') . "'>" . $i . "</a></li>";
            }
            echo "</ul>";
            ?>
        </div>
    </div>
    </div>
    <?php
    include ("footer.php");
    ?>
    <!-- <script src="Admin/Menu/bootstrap.bundle.min.js"></script> -->
</body>

</html>