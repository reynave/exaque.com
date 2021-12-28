<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="bg-half-170 d-table w-100 bg-home d-flex align-items-center" style="background: url('<?php echo $custom['koisBanner'][0]['img']; ?>') center center; height: auto; background-size: cover;" id="home">

    <div class="container text-white">
        <div class="row ">
            <div class="col-md-9 mt-0  pt-0  ">
                <div class="ms-lg-4">
                    <div class="title-heading margin-top-100">
                        <h1 class="display-4 fw-bold mb-3 fnText" <?php echo $custom['koisBanner'][0]['data']['h1']; ?>> <?php echo $custom['koisBanner'][0]['h1']; ?></h1>
                        <h3 class="fnText" <?php echo $custom['koisBanner'][0]['data']['content']; ?>> <?php echo $custom['koisBanner'][0]['content']; ?></h3>
                        <?php echo $custom['koisBanner'][0]['modal']; ?>
                    </div>
                </div>
            </div>
            <!--end col-->
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




<?php
$i = 0;
foreach ($custom['koisBannerW1'] as $row) {
    $i++;
?>
    <div id="kion<?php echo $row['id'] ?>"></div>
    <section class="section <?php echo $i % 2 == 0 ? "bg-light" : "" ?> ">

        <div class="wrapper-sm">

            <div class="container   py-3">
                <div class="row align-items-center">
                    <div class="text-center col-md-6 col-12 order-1 order-lg-<?php echo $i % 2 == 1 ? "1" : "2" ?>">
                        <img src="<?php echo $row['img'] ?>" style="max-width: 100%;" alt="exaque">
                    </div>
                    <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 col-12 order-2 order-lg-<?php echo $i % 2 == 1 ? "2" : "1" ?>">
                        <div class="ms-lg-4">

                            <div class="section-title">
                                <h4 class="title mb-4 fnText" <?php echo $row['data']['h1'] ?>><?php echo $row['h1'] ?></h4>
                                <div class="text-muted fnRichtext" <?php echo $row['data']['content'] ?>><?php echo $row['content'] ?></div>
                                <div> <?php echo $row['modal'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php } ?>