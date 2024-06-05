<?php

// Database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'staff';

// Create a new database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['phone_number']) && isset($_POST['id_card'])) {
    // Get the user's login credentials from the form
    $username = $_POST['phone_number'];
    $password = $_POST['id_card'];

    // Prepare a SQL query to select the user's account based on their username
    $sql = "SELECT * FROM users WHERE phone_number = ?";

    // Prepare the query for execution
    $stmt = $conn->prepare($sql);

    // Bind the parameters to the query
    $stmt->bind_param("s", $username);

    // Execute the query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if a user was found
    if ($result->num_rows > 0) {
        // Fetch the user's account details
        $user = $result->fetch_assoc();

        // Verify the password
        if (($password == $user['id_card'])) {
            // Password is correct, log the user in

            // Start a new session
            session_start();

            // Set the user's session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['phone_number'] = $user['phone_number'];

            // Redirect the user to the welcome page
            header("location: total.php");
        } else {
            // Password is incorrect, show an error message
            $errmsg_arr[] = 'Username and Password are not found';
        }
    } else {
        // User not found, show an error message
        $errmsg_arr[] = 'Username and Password are not found';
    }

    // Close the database connection
    $conn->close();

    // Show any error messages
    foreach ($errmsg_arr as $msg) {
        echo $msg . '<br>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="Admin/stafflogin.css">
</head>

<body>
    <!-- <div class="container">
        <h1 class="my-5 text-center">Login</h1>
        <form method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="phone_number" id="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="id_card" id="password" class="form-control" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
        </form>
    </div> -->
    <div class="wrapper">
        <div class="container">
            <h2 id="title">Login Admin</h2>
            <form method="post" id="container">
                <label for="phone" class="phone">លេខទូរស័ព្ទសាមីខ្លួន:</label>
                <input type="tel" name="phone_number" id="phone1" required><br>
                <label for="num_personal" id="phone_personal">លេខអត្តសញ្ញាណបណ្ណ:</label>
                <input type="text" name="id_card" id="phone_personal1" required><br>
                <button type="submit" name="login" id="signin">Sign in</button>
            </form>
        </div>
    </div>
</body>

</html>