<?php
if (isset($_POST['login'])) {
    // Validate and sanitize input
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $num_personal = isset($_POST['num_personal']) ? trim($_POST['num_personal']) : '';

    // Include your database connection file
    include_once "Connect_db/connect_db.php";

    // Use prepared statement to prevent SQL injection
    $sql = "SELECT * FROM table_form WHERE phone = ? AND num_personal = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ss", $phone, $num_personal);

    // Execute the statement
    $stmt->execute();

    // Get the result   	
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, add your authentication logic here
        $row = $result->fetch_assoc();
        
        // Redirect to the user's detail page
        header("Location:profile_user.php ?id=" . $row['id']);
        exit();
    } else {
        // User not found
        $loginError = "ការចូលមិនបានរកឃើញ សូមពិនិត្យមើលព័ត៌មានរបស់អ្នកម្តងទៀត";
    }

    // Close the statement
    $stmt->close();

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login6.css">
    
</head>

<body>

    <div class="wrapper">
        <h2 id="title">Login</h2>
        <?php if (isset($loginError)) : ?>
            <p style="color: red;"><?php echo htmlspecialchars($loginError); ?></p>
        <?php endif; ?>
        <div class="container">
            <form action="" method="post" id="container">
                <label for="phone" class="phone" >លេខទូរស័ព្ទសាមីខ្លួន:</label>
                <input type="tel" name="phone" id="phone1" required><br>
                <label for="num_personal" id="phone_personal" >លេខអត្តសញ្ញាណបណ្ណ:</label>
                <input type="text" name="num_personal" id="phone_personal1" required><br>
                <button type="submit" name="login" id="signin">Sign in</button>
            </form>
        </div>
    </div>
  
</body>

</html>
