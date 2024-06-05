<?php

if (!$staff_conn) {
    die("Connection failed");
} else {
    $sql = "SELECT * FROM header WHERE id =1";
    $result = $staff_conn->query($sql);
    $row = $result->fetch_assoc();

    $k_name = $row['k_name'];
    $eng_name = $row['eng_name'];
    $image1 = $row['image1'];
    $image2 = $row['image2'];
}
?>
<div class="Head">
    <div class="left"></div>
    <div class="logo">
        <img src="../them/header/<?php echo $image1; ?>" alt="Ksit Logo" id="A">
    </div>
    <div class="name">
        <div class="txt">
            <p id="B"><?php echo $k_name; ?></p>
            <p id="C"><?php echo $eng_name; ?></p>
        </div>
    </div>
    <div class="picture">
        <img src="../them/header/<?php echo $image2; ?>" alt="picture" id="D">
    </div>
</div>