<?php
// update.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection logic
    require_once("../Connect_db/connect_db.php");

    // Retrieve form data
    $id = isset($_POST['id']) ? $_POST['id'] : '';

    // Check if 'id' is present in the form data
    if (empty($id)) {
        die("Error: Missing 'id' in form data.");
    }

    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $sex = isset($_POST['sex']) ? $_POST['sex'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $parent_number = isset($_POST['parent_number']) ? $_POST['parent_number'] : '';
    $end_of_highschool = isset($_POST['end_of_highschool']) ? $_POST['end_of_highschool'] : '';
    $level_study = isset($_POST['level_study']) ? $_POST['level_study'] : '';
    $place_exambacll = isset($_POST['place_exambacll']) ? $_POST['place_exambacll'] : '';
    $number_room = isset($_POST['number_room']) ? $_POST['number_room'] : '';
    $number_table = isset($_POST['number_table']) ? $_POST['number_table'] : '';
    $latang = isset($_POST['latang']) ? $_POST['latang'] : '';
    $department = isset($_POST['department']) ? $_POST['department'] : '';
    $date_bacll = isset($_POST['date_bacll']) ? $_POST['date_bacll'] : '';
    $num_certificate = isset($_POST['num_certificate']) ? $_POST['num_certificate'] : '';
    $skill_one = isset($_POST['skill_one']) ? $_POST['skill_one'] : '';
    $skill_two = isset($_POST['skill_two']) ? $_POST['skill_two'] : '';



    // Update query
    $updateQuery = "UPDATE table_form SET 
        first_name = '$first_name', 
        last_name = '$last_name',
        sex = '$sex',
        dob = '$dob',
        address = '$address',
        phone = '$phone',
        parent_number = '$parent_number',
        end_of_highschool = '$end_of_highschool',
        level_study = '$level_study',
        place_exambacll = '$place_exambacll',
        number_room = '$number_room',
        number_table = '$number_table',
        latang = '$latang',
        department = '$department',
        date_bacll = '$date_bacll',
        num_certificate = '$num_certificate',
        skill_one ='$skill_one',
        skill_two ='$skill_two'

        WHERE id = $id";

    // Perform the update
    $updateResult = mysqli_query($conn, $updateQuery);

    if ($updateResult) {
        // echo "Record updated successfully!";
        echo "<script>alert('Record updated successfully!');</script>";
        
        // Fetch the updated data from the database
        $updatedDataQuery = "SELECT * FROM table_form WHERE id = $id";
        $updatedDataResult = mysqli_query($conn, $updatedDataQuery);
        $row = mysqli_fetch_assoc($updatedDataResult);

        // Redirect to the edit page with the corresponding ID
        header("location: ../user_edit.php?id=" . $row['id']);
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    echo "Invalid request!";
}




// update.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection logic
    require_once("../Connect_db/connect_db.php");

    // Retrieve form data
    $id = isset($_POST['id']) ? $_POST['id'] : '';

    // Check if 'id' is present in the form data
    if (empty($id)) {
        die("Error: Missing 'id' in form data.");
    }

    // Retrieve file data
    $image = $_FILES['image'];

    // Check if a file is uploaded
    if (!empty($image['name'])) {
        // Specify the target directory where images will be saved
        $targetDir = "../uploads/";

        // Generate a unique name for the uploaded image
        $targetFile = $targetDir . uniqid() . '_' . basename($image["name"]);

        // Check file type
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        if (!in_array($imageFileType, $allowedExtensions)) {
            die("Error: Only JPG, JPEG, PNG, and GIF files are allowed.");
        }

        // Move the uploaded file to the target directory
        if (move_uploaded_file($image["tmp_name"], $targetFile)) {
            // Update query with image path
            $updateQuery = "UPDATE table_form SET image_path = '$targetFile' WHERE id = $id";

            // Perform the update
            $updateResult = mysqli_query($conn, $updateQuery);

            if ($updateResult) {
                echo "<script>alert('Record updated successfully!');</script>";

                // Fetch the updated data from the database
                $updatedDataQuery = "SELECT * FROM table_form WHERE id = $id";
                $updatedDataResult = mysqli_query($conn, $updatedDataQuery);
                $row = mysqli_fetch_assoc($updatedDataResult);

                // Redirect to the edit page with the corresponding ID
                header("location: ../user_edit.php?id=" . $row['id']);
                exit();
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Error: No file uploaded.";
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    echo "Invalid request!";
}
?>
?>
