<?php
session_start();
// Establish connection to your MySQL database
$servername = "localhost";  // Change this to your server name
$username = "root";     // Change this to your database username
$password = "";     // Change this to your database password
$dbname = "eoas";  // Change this to your database name
// Create connection
?>
<!-- process AI -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image1"]) && isset($_FILES["image2"])) {
    // Establish database connection (assuming you've already done this)
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get text input values
    $k_name = $_POST['k_name']; // Assuming the name of your first text input is 'text_input1'
    $eng_name = $_POST['eng_name']; // Assuming the name of your second text input is 'text_input2'

    // Extract uploaded images and move them to the desired directory
    $targetDirectory = "../them/header/";
    $image1 = basename($_FILES["image1"]["name"]);
    $image2 = basename($_FILES["image2"]["name"]);

    move_uploaded_file($_FILES["image1"]["tmp_name"], $targetDirectory . $image1);
    move_uploaded_file($_FILES["image2"]["tmp_name"], $targetDirectory . $image2);

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("UPDATE header SET k_name='$k_name',  eng_name='$eng_name', image1='$image1', image2='$image2' WHERE id=1");

    // Bind parameters and execute statement
    //$stmt->bind_param("sssssssss", $youtube_name, $youtube_link, $facebook_name, $facebook_link, $home, $phone_number, $image1, $image2, $image3);


    // Execute the statement
    if ($stmt->execute()) {
        echo "Images and text updated successfully.";
        header("location: ../edit_header.php");
    } else {
        echo "Error updating images and text: " . $conn->error;
        header("location: ../edit_header.php");
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>