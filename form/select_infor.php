<?php
    require_once("data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/infor1.css">
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@900&family=Koulen&display=swap" rel="stylesheet">
</head>
<body>

<table >
    <tr>
        <th class="tb">id</th>
        <th class="tb">first_name</th>
        <th class="tb">last_name</th>
        <th class="tb">sex</th>
        <th>dob</th>
        <th>address</th>
        <th>phone</th>
        <th>parent_number</th>
        <th>end_of_highschool</th>
        <th>level_study</th>
        <th>place_exambacll</th>
        <th>number_room</th>
        <th>number_table</th>
        <th>img_student</th>
        <th>birth_certificate</th>
        <th>img_score</th>
        <th>certificate</th>
    </tr>
    <?php
    $sql = "SELECT * FROM table_form";
    // $result = $con->query($sql);
    $result = mysqli_query($conn, $sql);
    echo mysqli_error($conn);
    
    if (mysqli_num_rows($result) > 0) {
        // echo "<table><tr><th>id</th><th>username</th><th>password</th><th>email</th><th>place</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            // echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"]. " " . $row["password"]. "</td></tr>";
    ?>
    <tr>
                    <td  class="btn" ><?=$row['id'];?></td>
                    <td  class="btn"><?=$row['first_name'];?></td>
                    <td  class="btn"><?=$row['last_name'];?></td>
                    <td  class="btn"><?=$row['sex'];?></td>
                    <td  class="btn"><?=$row['dob'];?></td>
                    <td  class="btn"><?=$row['address'];?></td>
                    <td  class="btn"><?=$row['phone'];?></td>
                    <td  class="btn"><?=$row['parent_number'];?></td>
                    <td  class="btn"><?=$row['end_of_highschool'];?></td>
                    <td  class="btn"><?=$row['level_study'];?></td>
                    <td  class="btn"><?=$row['place_exambacll'];?></td>
                    <td  class="btn"><?=$row['number_room'];?></td>
                    <td  class="btn"><?=$row['number_table'];?></td>
                    <td  class="btn"><?=$row['img_student'];?></td>
                    <td  class="btn"><?=$row['birth_certificate'];?></td>
                    <td  class="btn"><?=$row['img_score'];?></td>
                    <td  class="btn"><?=$row['certificate'];?></td>
                </tr>
                <?php
        }
    } else {
        echo "0 results";
    }
   
    $conn->close();
    ?>

</table>
</body>
</html>