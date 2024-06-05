<?php
require_once("db_connection.php"); // Include your database connection file

$limit = 10; // Number of records per page
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

// Sanitize input (consider using prepared statements for security)
$department = isset($_GET['department']) ? mysqli_real_escape_string($conn, $_GET['department']) : '';

// Initialize an empty array to store all student records
$all_students = [];

$sql = "SELECT id, first_name, last_name, sex, latang, department, address FROM table_form WHERE department = '$department' LIMIT $start, $limit";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Error: ' . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($result)) {
    $all_students[] = $row;
}

// Total records for the specified department (consider updating this dynamically)
$total_records = count($all_students);
$total_pages = ceil($total_records / $limit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>បញ្ចីឈ្មោះក្នុងជំនាញ</title>
    <!-- Include your CSS files -->
    <link rel="stylesheet" href="css/select12.css">
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@900&family=Koulen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous"
     referrerpolicy="no-referrer" />
    <style>
   
        /* Your CSS styles */
        .pagination {
            margin-top: 20px;
            text-align: center;
        }

        .pagination a {
            display: inline-block;
            padding: 5px 10px;
            margin-right: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-decoration: none;
            color: #333;
        }

        .pagination a.active {
            background-color: rgba(14, 167, 88, 0.998);
            color: #fff;
            border-color: #007bff;
        }
   
    </style>
</head>
<body>
    <div class="title">
        <h2>បញ្ចីឈ្មោះក្នុងជំនាញ</h2>
    </div>
    <div class="table">
        <div class="export">
            <!-- Link to export.php for exporting data -->
        
            <button><a class="fa-solid fa-file-export" href="export.php?department=<?php echo urlencode($department); ?>">Export</a></button>
        </div>
        <table>
        <tr id="table">
                <th class="tb">ល.រ</th>
                <th class="tb">នាមត្រកូល</th>
                <th class="tb">នាមខ្លួន</th>
                <th class="tb">ភេទ</th>
                <th class="tb">អក្សរឡាតាំង</th>
                <th class="tb">ដេប៉ាតឺម៉ង់</th>
                <th class="tb">ទីលំនៅបច្ចុប្បន្ន</th>
                <!-- <th id="detial">Detail</th> -->
            </tr>
            <?php
            foreach ($all_students as $student){
                echo "<tr>";
                echo "<td>{$student['id']}</td>";
                echo "<td>{$student['first_name']}</td>";
                echo "<td>{$student['last_name']}</td>";
                echo "<td>{$student['sex']}</td>";
                echo "<td>{$student['latang']}</td>";
                echo "<td>{$student['department']}</td>";
                echo "<td>{$student['address']}</td>";
                echo "</tr>";
            }
            
            ?>
        </table>
        

        <!-- Pagination Links -->
        <div class="pagination">
            <?php
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a href='?department=$department&page=$i' class='".($page == $i ? 'active' : '')."'>$i</a>";
            }

            ?>
        </div>
    </div>
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
        <h2>បញ្ជីរាយនាមសិស្សដាក់ពាក្យសរុប</h2>
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
        foreach ($dataLabels as $label) {
            echo "<p>$label</p>";
        }
        ?>
    </div>

    <!-- Display total numbers -->
    <div>
        <p>Total Male: <?php echo $totalMale; ?></p>
        <p>Total Female: <?php echo $totalFemale; ?></p>
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

</html>

