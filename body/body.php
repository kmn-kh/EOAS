
<div class="Slider_Show">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php
            $staff_data = "SELECT * FROM slideshow";
            $staff_result = mysqli_query($conn, $staff_data);
            if (mysqli_num_rows($staff_result) > 0) {

                while ($info_result = mysqli_fetch_assoc($staff_result)) {
                    $count_staff++ ?>
                    <div class="swiper-slide"><img src="them/slideshow/<?= $info_result['img']; ?>" class="img-fluid" alt="slide"></div>

                <?php }
            } ?>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>