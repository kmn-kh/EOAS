<?php
include("../EOAS/Departmen/Dep_menu/tab_menu.php");
?>

<div class="tab-content" id="nav-tabContent">

    <!-- Departmen -->
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="data-content">
            <?php
            $vid_top = "SELECT * FROM al_vidtop";
            $top_result = $conn->query($vid_top);
            $count = 1;
            if ($top_result->num_rows > 0) {
                while ($row = $top_result->fetch_assoc()) {
                    echo '<iframe width="10%" height="300" src="' . $row['video_top'] . '"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>';
                    $count++;

                }
            } else {
                echo "No records found";
            } ?>
            <!-- <iframe width="10%" height="300" src="https://www.youtube.com/embed/arXQuineYz8?si=_u-NF9Yni68mQaI4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe> -->
            <div class="content">
                <!-- content -->
                <?php
                $sql = "SELECT * FROM al_data";
                $result = $conn->query($sql);
                $count = 1;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<h5>' . $row['title'] . '</h5>';
                        echo '<p>' . $row['content'] . '</p>';
                        $count++;

                    }
                } else {
                    echo "No records found";
                } ?>
            </div>
        </div>
        <!-- video button -->
        <div id="carouselExampleControlsNoTouching" class="carousel slide carousel-fade" data-bs-touch="false"
            data-bs-interval="false">
            <div class="carousel-inner">
                <!-- 1 -->
                <?php
                $i = 0;
                $database = "SELECT * FROM al_videobutton";
                $data_result = mysqli_query($conn, $database);
                $count = 1; ?>
                <?php
                if (mysqli_num_rows($data_result) > 0) {

                    while ($video_result = mysqli_fetch_assoc($data_result)) {
                        $i++ ?>

                        <div class="carousel-item <?php echo $i == 1 ? 'active' : ' ' ?>">
                            <div class="departmen-video">
                                <div class="video-transition1">
                                    <div class="video1">
                                        <iframe width="100%" height="200" src="<?= $video_result['first']; ?>"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="video-transition">
                                    <div class="video1">
                                        <iframe width="100%" height="200" src="<?= $video_result['second']; ?>"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="video-transition">
                                    <div class="video1">
                                        <iframe width="100%" height="200" src="<?= $video_result['third']; ?>"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon controll1" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="next">
                <span class="carousel-control-next-icon controll2" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- /video button -->
    </div>
    <!-- /Departmen -->

    <!-- Staff -->
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <section class="team">
            <div class="container">
                <div class="section-title">
                    <h2>Staff In The Departmen Computer Science</h2>
                    <div class="underline"></div>
                </div>
                <div class="row">

                    <!-- 1 -->
                    <?php
                    $staff_data = "SELECT * FROM al_staff_info";
                    //$staff_result = mysqli_query($staff_conn, $staff_data);
                    $staff_result = $staff_conn->query($staff_data);
                    // $row =['id'];
                    if (mysqli_num_rows($staff_result) > 0) {

                        while ($row = $staff_result->fetch_assoc()) {
                            $count_staff++ ?>

                            <div class="col-lg-6 mt-4">
                                <div class="member d-flex align-items-start">
                                    <div class="teampic">
                                        <img src="../EOAS/img/<?= $row['img']; ?>" class="img-fluid" alt="staff1">
                                    </div>
                                    <div class="member-info">
                                        <h4>
                                            <?= $row['name']; ?>
                                        </h4>
                                        <span>
                                            <?= $row['skill']; ?>
                                        </span>
                                        <p><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                                class="bi bi-envelope" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                                            </svg> <a href="mailto:<?= $row['email']; ?>" target="_blank"
                                                rel="noopener noreferrer"> <?= $row['email']; ?>
                                            </a></p>

                                        <p><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                                class="bi bi-telephone" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg> <?= $row['phone_number']; ?>
                                        </p>
                                        <br>
                                        <!-- Read more -->
                                        <button class="showmore"><a href="./al_staff_readmore.php?id=<?= $row['id']; ?>">Show more</a></button>
                                    </div>
                                </div>
                            </div>

                        <?php }
                    } ?>


                </div>

            </div>

        </section>
    </div>
    <!-- /Staff -->
</div>