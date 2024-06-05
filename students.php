<?php
    require_once("db_connection.php");
    
    // Initialize the $search variable
    $search = "";
    $address= "";
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
    <title>students</title>
    <link rel="stylesheet" href="css/select14.css">
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@900&family=Koulen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous"
     referrerpolicy="no-referrer" />
    
</head>
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
</head>
<body>
    <div class="title">
        <h2>បញ្ជីរាយនាមសិស្សដាក់ពាក្យសរុប</h2>
    </div>
  
    <div class="export">
    <!-- Link to export.php for exporting data -->
    <button><a class="fa-solid fa-file-export" href="export2.php">Export</a></button>
</div>
    <div class="table">
        <table>
            <tr id="table">
                <th class="tb">ល.រ</th>
                <th class="tb">នាមត្រកូល</th>
                <th class="tb">នាមខ្លួន</th>
                <th class="tb">អក្សរឡាតាំង</th>
                <th class="tb">ភេទ</th>
                <th class="tb">ដេប៉ាតឺម៉ង់</th>
                <th class="tb">ទីលំនៅបច្ចុប្បន្ន</th>
                
            </tr>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td  class="btn"><?=$row['id'];?></td>
                <td  class="btn"><?=$row['first_name'];?></td>
                <td  class="btn"><?=$row['last_name'];?></td>
                <td  class="btn"><?=$row['latang'];?></td>
                <td  class="btn"><?=$row['sex'];?></td>
                <td  class="btn"><?=$row['department'];?></td>
                <td  class="btn"><?=$row['address'];?></td>
                
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
                echo "<li><a href='?page=".$i."' class='".($page == $i ? 'active' : '')."'>".$i."</a></li>";
            }
            echo "</ul>";
        ?>
    </div>
</body>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sex</title>
    <link rel="stylesheet" href="css/select15.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@900&family=Koulen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
</head>

<body>
    <div class="title">
        <h2>របាយការណ៍តាមភេទ</h2>
    </div>

    <?php
    require_once("db_connection.php");

    // Initialize variables
    $totalData = 0;
    $dataLabels = [];
    $dataValues = [];

    // Query to count total data
    $sqlCount = "SELECT COUNT(*) AS total FROM table_form";
    $resultCount = mysqli_query($conn, $sqlCount);

    if ($resultCount) {
        $row = mysqli_fetch_assoc($resultCount);
        $totalData = $row['total'];
    }

    // Query to get data labels and values for all departments
    $sqlData = "SELECT 	sex, COUNT(*) AS count FROM table_form GROUP BY sex";
    $resultData = mysqli_query($conn, $sqlData);

    if ($resultData) {
        while ($row = mysqli_fetch_assoc($resultData)) {
            // Modify data labels to include department name and total count
            $dataLabels[] = $row['sex'] . ' (' . $row['count'] . ')';
            $dataValues[] = $row['count'];
        }
    }
    ?>

    <!-- Display the total data -->
    <p>Total Data: <?php echo $totalData; ?></p>

    <!-- Chart container -->
    <div style="width: 50%; margin: 0px auto;">
        <canvas id="dataChart"></canvas>
    </div>

    <!-- JavaScript to create the chart -->
    <script>
        var ctx = document.getElementById('dataChart').getContext('2d');
        var dataChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($dataLabels); ?>,
                datasets: [{
                    label: 'Data Count',
                    data: <?php echo json_encode($dataValues); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.6)', // Blue color
                    borderColor: 'rgba(54, 162, 235, 1)', // Border color
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true // Start from 0
                    }
                },
                plugins: {
                    datalabels: {
                        anchor: 'end',
                        color: '#333', // Color of data labels
                        formatter: function(value, context) {
                            return value; // Display the value as the data label
                        }
                    }
                }
            }
        });
    </script>

</body>

</html>
