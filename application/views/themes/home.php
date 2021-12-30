<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<br><br><br><br>
<!-- Hero Start -->
<section class="home-slider position-relative ">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $i = 0;
            foreach ($custom['banner'] as $row) {
            ?>
                <div class="carousel-item <?php echo $i == 0 ? "active" : "" ?>" data-bs-interval="5000">
                    <div class="bg-home-75vh d-flex align-items-center" style="background: url('<?php echo $row['img']; ?>') center center;">
                    
                        <div class="container ">
                            <div class="row mt-5 justify-content-center">
                                <div class="col-12">
                                    <div class="title-heading text-left">
                                        <h2 class="<?php echo $row['h4'];?> mb-3 fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h2>

                                        <p class="para-desc <?php echo $row['h4'];?> mb-0 fnText" <?php echo $row['data']['h2']; ?>><?php echo $row['h2']; ?></p>

                                        <?php echo $row['modal']; ?>
                                        <div class="mt-4">
                                            <a href="<?php echo $row['href']; ?>" class="btn btn-exa">Baca Selengkapnya </a>
                                        </div>
                                        <?php echo $custom['banner_action']; ?>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <!--end slide-->
                </div>

            <?php
                $i++;
            } ?>

        </div>
        <?php if($i > 1) {?>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
        <?php } ?>
    </div>
</section>
<!--end section-->
<!-- Hero End -->


<!-- Blog STart -->
<section class="section">
    <div class="container">
        <div class="row">
            <?php
            foreach ($custom['home1'] as $row) {
            ?>
                <div class="col-lg-3 col-md-6 col-6 mb-4 pb-2">
                    <div class="homeGrid   border-0  ">
                        <div class="position-relative">
                            <img src="<?php echo $row['img']; ?>" class="card-img-top" alt="...">
                            <div class="overlay"></div>
                        </div>
                        <h1 class="fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h1>
                        <div class="fnRichtext" <?php echo $row['data']['h2']; ?>>
                            <?php echo $row['h2']; ?>
                        </div>
                        <p>
                            <a href="<?php echo $row['href']; ?>">Pelajari Selengkapnya </a>
                        </p>

                        <?php echo $row['modal']; ?>
                    </div>
                </div>
                <!--end col-->
            <?php } ?>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
 


<!-- Start -->
<section class="section pt-0">
    <div class="container homeValue">

        <div class="row mt-3 pt-5 position-relative" id="counter" style="z-index: 1;">
            <div class="col-12 text-center">
                <h3 class="text-center fnText" <?php echo $custom['title']["attributes"]; ?>><?php echo $custom['title']['content']; ?></h3>

                <?php echo $core['content']['edit']?>
            </div>
            <?php
            foreach ($custom['home2'] as $row) {
            ?>
                <div class="col-md-4 col-12 my-3 pt-2">
                    <div class="counter-box text-center px-4">
                        <img src="<?php echo $row['img']; ?>" class="avatar avatar-small mb-3" alt="exaque">
                        <div class="fnRichtext " <?php echo $row['data']['h1']; ?>>
                            <?php echo $row['h1']; ?>
                        </div>
                        <?php echo $row['modal']; ?>
                    </div> 
                </div>

            <?php } ?>
        </div>
        <!--end row-->
        <div class="feature-posts-placeholder bg-blue"></div>
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End -->


<!-- Blog STart -->
<section class="section">
    <div class="container">
        <div class="row">
            <?php
            foreach ($custom['home3'] as $row) {
            ?>
                <div class="col-lg-3 col-md-6 col-6 mb-4 pb-2">
                    <div class="homeGrid   border-0  ">
                        <div class="homeGridImg" >
                            <img src="<?php echo $row['img']; ?>" class="card-img-top" alt="...">
                            <div class="overlay"></div>
                        </div>
                        <h1 class="fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h1>
                        <div class="fnRichtext" <?php echo $row['data']['h2']; ?>>
                            <?php echo $row['h2']; ?>
                        </div>
                        <p>
                            <a href="<?php echo $row['href']; ?>">Pelajari Selengkapnya </a>
                        </p>

                        <?php echo $row['modal']; ?>
                    </div>
                </div>
                <!--end col-->
            <?php } ?>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->