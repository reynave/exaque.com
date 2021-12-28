<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Hero Start --> 
<section class="bg-half-170 d-table w-100 text-dark" style="background: url('<?php echo $custom['industryBanner'][0]['img']; ?>');background-size: cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8">
                <div class="title-heading mt-4">
                    <h1 class="heading mb-3 fnText" <?php echo $custom['industryBanner'][0]['data']['h1']; ?>><?php echo $custom['industryBanner'][0]['h1']; ?></h1>
                    <h3 class="para-desc fnText" <?php echo $custom['industryBanner'][0]['data']['content']; ?>> <?php echo $custom['industryBanner'][0]['content']; ?></h3>
                    <div class="mt-4 pt-2">
                        <a href="<?php echo $custom['industryBanner'][0]['href']; ?>" class="btn btn-outline-primary m-1">Permohonan Demo</a>
                        <?php echo $custom['industryBanner'][0]['modal']; ?>
                    </div>
                </div>
            </div>
          
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>


<!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>

 

<section class="section">
    <?php
    $i = 0;
    foreach ($custom['industry1'] as $row) {
        $i++;
    ?>
        <div class="container my-5">
            <div class="row align-items-center" id="counter">
                <div class="col-md-6 col-12 order-1 order-lg-<?php echo $i % 2 == 1 ? "1" : "2" ?>">
                    <img src="<?php echo $row['img'] ?>" class="img-fluid" alt="exaque">
                </div>
                <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 col-12 order-2 order-lg-<?php echo $i % 2 == 1 ? "2" : "1" ?>">
                    <div class="ms-lg-4">

                        <div class="section-title">
                            <h4 class="title mb-4 fnText" <?php echo $row['data']['h1'] ?>><?php echo $row['h1'] ?></h4>
                            <p class="text-muted fnText" <?php echo $row['data']['content'] ?>><?php echo $row['content'] ?></p>
                            <a href="<?php echo $row['href'] ?>" class="btn btn-outline-primary mt-3">Baca Selengkapnya</a>
                            <div> <?php echo $row['modal'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</section>