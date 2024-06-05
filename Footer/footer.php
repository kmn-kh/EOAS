<?php
include ("Departmen/connect_database.php");
if(!$conn){
    die("Connection failed");
}else{
    $sql = "SELECT * FROM footer WHERE id =1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $youtube_name = $row['youtube_name'];
    $youtube_link = $row['youtube_link'];
    $facebook_name = $row['facebook_name'];
    $facebook_link = $row['facebook_link'];
    $home = $row['home'];
    $phone_number = $row['phone_number'];
    $image1 = $row['image1'];
    $image2 = $row['image2'];
    $image3 = $row['image3'];
}
?>
<div class="Foodter">
    <div class="Social_media">
        <span id="F">បណ្ដាញសង្គម</span>
        <!-- <img src="Footer/Img/YouTube1.png" alt="You tube" id="G"> -->
        <a href="<?php echo $youtube_link; ?>" id="H"><img src="Footer/Img/YouTube1.png" alt="You tube" id="G"> <?php echo $youtube_name; ?></a><br>
        <!-- <img src="Footer/Img/fb1.png" alt="Facebook" id="I"> -->
        <a href="<?php echo $facebook_link; ?>" id="J"><img src="Footer/Img/fb1.png" alt="Facebook" id="I"> <?php echo $facebook_name; ?></a>
    </div>
    <div class="Address">
        <span id="K">អាសយដ្ឋាន</span><br>
        <img src="Footer/Img/Home2.png" alt="Home" id="L">
        <span id="M">អាសយដ្ឋាន : <?php echo $home; ?></span><br>
        <img src="Footer/Img/telegram.png" alt="telegram" id="O">
        <span id="R"><?php echo $phone_number; ?></span>
    </div>
    <div class="Contact">
        <img src="them/footer/<?php echo $image1; ?>" alt="QR-CODE1">
        <img src="them/footer/<?php echo $image2; ?>" alt="QR-CODE2">
        <img src="them/footer/<?php echo $image3; ?>" alt="QR-CODE3">
    </div>

</div>
<div class="Copyright">
    <div class="control_footer">
        <img src="Footer/Img/copyright.png" alt="Copyright" id="U">
        <p id="V">Developing by Department of Computer Science 2024</p>
    </div>
</div>
<!-- <footer></footer> -->
<!-- slide show -->
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> -->
<script src="../EOAS/body/slideshow.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
<!-- /slide show -->

<!-- tab menu -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<!-- /tab menu -->
<!-- new-menu -->