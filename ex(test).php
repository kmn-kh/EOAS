<?php
$db_name = "pdf_view";
$host = "localhost";
$user_name = "root";
$password = "";

// Establish connection
$conn = new mysqli($host, $user_name, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute query
$sql = "SELECT * FROM file_upload";
$result = $conn->query($sql);

// Check if query was successful
if (!$result) {
    die("Query failed: " . $conn->error);
}

// Fetch and print results
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<pre>';
        print_r($row);
        echo '</pre>';
        echo '<embed src="' . htmlspecialchars($row['folder_path'] . $row['filename']) . '" height="800" width="92%"></embed>';
    }
} else {
    echo "No records found";
}

// Close the connection
$conn->close();
?>
