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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image1"]) && isset($_FILES["image2"]) && isset($_FILES["image3"])) {
    // Establish database connection (assuming you've already done this)
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get text input values
    $youtube_name = $_POST['youtube_name']; // Assuming the name of your first text input is 'text_input1'
    $youtube_link = $_POST['youtube_link']; // Assuming the name of your second text input is 'text_input2'
    $facebook_name = $_POST['facebook_name']; // Assuming the name of your third text input is 'text_input3'
    $facebook_link = $_POST['facebook_link']; // Assuming the name of your fourth text input is 'text_input4'
    $home = $_POST['home']; // Assuming the name of your third text input is 'text_input5'
    $phone_number = $_POST['phone_number']; // Assuming the name of your fourth text input is 'text_input6'

    // Extract uploaded images and move them to the desired directory
    $targetDirectory = "../them/footer/";
    $image1 = basename($_FILES["image1"]["name"]);
    $image2 = basename($_FILES["image2"]["name"]);
    $image3 = basename($_FILES["image3"]["name"]);

    move_uploaded_file($_FILES["image1"]["tmp_name"], $targetDirectory . $image1);
    move_uploaded_file($_FILES["image2"]["tmp_name"], $targetDirectory . $image2);
    move_uploaded_file($_FILES["image3"]["tmp_name"], $targetDirectory . $image3);

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("UPDATE footer SET youtube_name='$youtube_name',  youtube_link='$youtube_link', 
    facebook_name='$facebook_name', facebook_link='$facebook_link', home='$home', phone_number='$phone_number', image1='$image1', image2='$image2', 
    image3='$image3' WHERE id=1");

    // Bind parameters and execute statement
    //$stmt->bind_param("sssssssss", $youtube_name, $youtube_link, $facebook_name, $facebook_link, $home, $phone_number, $image1, $image2, $image3);


    // Execute the statement
    if ($stmt->execute()) {
        echo "Images and text updated successfully.";
        header("location: ../edit_footer.php");
    } else {
        echo "Error updating images and text: " . $conn->error;
        header("location: ../edit_footer.php");
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>