<?php
require_once ("db_connection.php");

// Query to get the total number of records (total information)
$sql_total_records = "SELECT COUNT(id) AS total_records FROM table_form";
$result_total_records = mysqli_query($conn, $sql_total_records);

// Check for errors
if (!$result_total_records) {
    die('Error: ' . mysqli_error($conn));
}

// Fetch the total number of records
$row_total_records = mysqli_fetch_assoc($result_total_records);
$total_records = $row_total_records['total_records'];

// Query to get all distinct departments
$sql_departments = "SELECT DISTINCT department FROM table_form";
$result_departments = mysqli_query($conn, $sql_departments);

// Check for errors
if (!$result_departments) {
    die('Error: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>


<body>



    
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="Header/style1.css">
    <link rel="stylesheet" href="body/body1.css">
    <link rel="stylesheet" href="Footer/footer.css">
    <link rel="stylesheet" href="Admin/Menu/Style9.css">
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

        h2 {
            text-align: center;
        }
    </style>
    <!-- nak -->
    <link rel="stylesheet" href="css/total3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .total {
            display: flex;
            justify-content: space-around;
            margin-left: 20px;
            align-items: center;
            margin-top: 20px;
            font-family: Khmer OS Content;
        }

        .all_inf,
        .department {
            text-align: center;
            background-color: rgb(0, 184, 213);
            margin-left: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: none;
            width: 13%;
            height: 30vh;
            box-shadow: 1px 0px 10px -5px;
        }

        .all_inf p,
        .department p {
            margin: 5px 0;
            /* margin-left:7px; */
            margin: auto;
            color: white;
        }

        .fa-solid {
            font-size: 24px;
            margin-bottom: 5px;
            margin-left: 5px;

        }

        .read-more {
            background-color: #ffff;
            border: none;
            width: 80%;
            height:5vh;
            color: white;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .read-more a {
            color: black;
            text-decoration: none;
            font-family: 'Times New Roman', Times, serif;
            font-size: 15px;
           
        }

        .read-more:hover {
            box-shadow: 1px 0px 10px -2px black;
        }
        
        .read-more1 {
            background-color: #ffff;
            border: none;
            width: 80%;
            height:5vh;
            color: white;
            padding: -20px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin-top: 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .read-more1 a {
            color: black;
            font-family: 'Times New Roman', Times, serif;
            padding: auto;
            font-size: 15px;
            text-decoration: none;
           
        }

        .read-more1:hover {
            box-shadow: 1px 0px 10px -2px black;
        }


        .fa-database {
            margin-left: 0px;
            margin-top: 20px;
        }
    </style>
    <!-- nak -->
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
    <link rel="stylesheet" href="Admin/Menu/Style9.css">
</head>

<body>

    <?php
    include ("Header/header.php");
    ?>
    <?php
    include ("Admin/Menu/sizebare.php");
    ?>
    <div class="detil">
    <p class="data_total">ទិន្ន័យសរុប</p>
    <div class="total">
       
        <div class="all_inf">
            <i class="fa-solid fa-database"></i>
            <p>ទិន្ន័យសរុប</p>
            <p>Total records: <?php echo $total_records; ?></p>
            <p class="read-more1"><a href="students.php?department=' . urlencode($department) . '">View list name</a></p>
        </div>
 <?php
            while ($row_department = mysqli_fetch_assoc($result_departments)) {
                $department = $row_department['department'];
                // Query to get the total number of records for each department
                $sql_total_per_department = "SELECT COUNT(id) AS total_records_per_dept FROM table_form WHERE department = '$department'";
                $result_total_per_department = mysqli_query($conn, $sql_total_per_department);
                $row_total_per_dept = mysqli_fetch_assoc($result_total_per_department);
                $total_records_per_dept = $row_total_per_dept['total_records_per_dept'];

                echo '<div class="department">';
                echo '<i class="fa-solid fa-users"></i>';
                echo '<p>' . $department . '</p>';
                echo '<p>Total records: ' . $total_records_per_dept . '</p>';
                echo '<p class="read-more"><a href="name_sd.php?department=' . urlencode($department) . '">View list name</a></p>';

                echo '</div>';
            }
        ?> 
       

    </div>
  

    <!-- JavaScript to handle the link click -->
    <script>
        function showStudents(department) {
            // Use AJAX or another method to fetch and display the students for the selected department
            // Example:
            // alert('Showing students for department: ' + department);
            // You can replace the alert with code to fetch and display the students.
        }
    </script>
    </div>
    </div>
  
    <!-- nak -->
    <!-- JavaScript to handle the link click -->
    <script>
        function showStudents(department) {
            // Use AJAX or another method to fetch and display the students for the selected department
            // Example:
            // alert('Showing students for department: ' + department);
            // You can replace the alert with code to fetch and display the students.
        }
    </script>
    <!-- nak -->
    <!-- <script src="Admin/Menu/bootstrap.bundle.min.js"></script> -->
</body>

</html>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="css/select16.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@900&family=Koulen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
</head>

<body>
    <div class="title">
        <h3>ទិន្ន័យតាមខេត្ត</h3>
    </div>

    <?php
    require_once("db_connection.php");

    // Initialize variables
    $totalData = 0;
    $provinceLabels = [];
    $provinceValues = [];
    $departmentLabels = [];
    $departmentValues = [];

    // Query to count total data
    $sqlCount = "SELECT COUNT(*) AS total FROM table_form";
    $resultCount = mysqli_query($conn, $sqlCount);

    if ($resultCount) {
        $row = mysqli_fetch_assoc($resultCount);
        $totalData = $row['total'];
    }

    // Query to get data labels and values for provinces
    $sqlProvince = "SELECT province, COUNT(*) AS count FROM table_form WHERE province IS NOT NULL AND province != '' GROUP BY province";
    $resultProvince = mysqli_query($conn, $sqlProvince);

    if ($resultProvince) {
        while ($row = mysqli_fetch_assoc($resultProvince)) {
            // Modify data labels to include province name and total count
            $provinceLabels[] = $row['province'] . ' (' . $row['count'] . ')';
            $provinceValues[] = $row['count'];
        }
    }

    // Query to get data labels and values for departments
    $sqlDepartment = "SELECT department, COUNT(*) AS count FROM table_form GROUP BY department";
    $resultDepartment = mysqli_query($conn, $sqlDepartment);

    if ($resultDepartment) {
        while ($row = mysqli_fetch_assoc($resultDepartment)) {
            // Modify data labels to include department name and total count
            $departmentLabels[] = $row['department'] . ' (' . $row['count'] . ')';
            $departmentValues[] = $row['count'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="select_dep.css">
    <title>Charts</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="title">
        <!-- <h2>ទិន្ន័យតាមខេត្ត</h2> -->
    </div>

    <!-- Display the total data -->
    <!-- <p>Total Data: <?php echo $totalData; ?></p> -->

    <!-- Chart container for provinces -->
    <div style="width: 50%; margin: 0px auto;">
        <canvas id="provinceChart"></canvas>
    </div>




    
    <div class="title">
    <h3>របាយការណ៍តាមជំនាញ</h3>
</div>

<!-- Display the total data for departments -->
<!-- <p>Total Data: <?php echo $totalData; ?></p> -->

<!-- Chart container for departments -->
<div style="width: 50%; margin: 0px auto;">
    <canvas id="departmentChart"></canvas>
</div>

<!-- JavaScript to create the charts -->
<script>
    var ctxProvince = document.getElementById('provinceChart').getContext('2d');
    var provinceChart = new Chart(ctxProvince, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($provinceLabels); ?>,
            datasets: [{
                label: 'Province Data Count',
                data: <?php echo json_encode($provinceValues); ?>,
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var ctxDepartment = document.getElementById('departmentChart').getContext('2d');
    var departmentChart = new Chart(ctxDepartment, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($departmentLabels); ?>,
            datasets: [{
                label: 'Department Data Count',
                data: <?php echo json_encode($departmentValues); ?>,
                backgroundColor: 'rgba(0, 184, 83, 0.6)', // Green color
                borderColor: 'rgba(0, 184, 83, 1)', // Green color
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>

</html>



</body>

</html>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sex</title>
    <link rel="stylesheet" href="css/select13.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@900&family=Koulen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
</head>

<body>
    <div class="title">
        <h3>ទិន្ន័យភេទសរុបតាមជំនាញ</h3>
    </div>

    <?php
    require_once("db_connection.php");

    // Initialize variables
    $dataLabels = [];
    $dataValuesMale = [];
    $dataValuesFemale = [];
    $totalMale = 0;
    $totalFemale = 0;

    // Query to get data labels and values for all departments
    $sqlData = "SELECT department,
                SUM(CASE WHEN sex = 'ប្រុស' THEN 1 ELSE 0 END) AS ប្រុស_count,
                SUM(CASE WHEN sex = 'ស្រី' THEN 1 ELSE 0 END) AS ស្រី_count
                FROM table_form GROUP BY department";
    $resultData = mysqli_query($conn, $sqlData);

    if ($resultData) {
        while ($row = mysqli_fetch_assoc($resultData)) {
            // Modify data labels to include department name and male/female counts
            $departmentLabel = $row['department'] . ' (ប្រុស: ' . $row['ប្រុស_count'] . ', ស្រី: ' . $row['ស្រី_count'] . ')';
            $dataLabels[] = $departmentLabel;

            // Store male and female counts separately
            $dataValuesMale[] = $row['ប្រុស_count'];
            $dataValuesFemale[] = $row['ស្រី_count'];

            // Calculate total males and females
            $totalMale += $row['ប្រុស_count'];
            $totalFemale += $row['ស្រី_count'];
        }
    }
    ?>

    <!-- Chart container -->
    <div style="width: 50%; margin: 0px auto;">
        <canvas id="dataChart"></canvas>
    </div>

    <!-- Display numbers for each department -->
    <div>
        <?php
        // foreach ($dataLabels as $label) {
        //     echo "<p>$label</p>";
        // }
        ?>
    </div>

    <!-- Display total numbers -->
    <div>
        <!-- <p>Total Male: <?php echo $totalMale; ?></p>
        <p>Total Female: <?php echo $totalFemale; ?></p> -->
    </div>

    <!-- JavaScript to create the chart -->
    <script>
        var ctx = document.getElementById('dataChart').getContext('2d');
        var dataChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($dataLabels); ?>,
                datasets: [{
                    label: 'Male Count',
                    data: <?php echo json_encode($dataValuesMale); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.6)', // Blue color for males
                    borderColor: 'rgba(54, 162, 235, 1)', // Border color
                    borderWidth: 1
                },
                {
                    label: 'Female Count',
                    data: <?php echo json_encode($dataValuesFemale); ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.6)', // Red color for females
                    borderColor: 'rgba(255, 99, 132, 1)', // Border color
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
<?php
    include ("Footer/footer.php");
    ?>
</html>

