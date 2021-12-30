<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<section class="d-table w-100 bg-home d-flex align-items-center" style="background: url('<?php echo $custom['virtualBanner'][0]['img']; ?>') center center; height: auto;background-size: cover; padding: 100px 0px;">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 mt-0  pt-0  ">
                <div class="ms-lg-4">
                    <div class="title-heading margin-top-100">
                        <h1 class="display-4 fw-bold mb-3 fnText" <?php echo $custom['virtualBanner'][0]['data']['h1']; ?>> <?php echo $custom['virtualBanner'][0]['h1']; ?></h1>
                        <h3 class="fnText " <?php echo $custom['virtualBanner'][0]['data']['content']; ?>> <?php echo $custom['virtualBanner'][0]['content']; ?></h3>
                        <?php echo $custom['virtualBanner'][0]['modal']; ?>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>

<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>





<section class="section">
    <div class="container my-3 ">

        <div class="row">
            <div class="col-12 ">
                <h1 class="fnText" <?php echo $core['content']['data']['name']; ?>><?php echo $core['content']['name']; ?></h1>
            </div>
            <div class="col-12 ">
                <h5 class="fnRichtext" <?php echo $core['content']['data']['content']; ?>><?php echo $core['content']['content']; ?></h5>
                <?php echo !$core['content']['id'] ? $core['content']['insert'] : $core['content']['edit']; ?>
            </div>
        </div>
    </div>

</section>




<section class="section">
    <?php
    $i = 0;
    foreach ($custom['virtualW1'] as $row) { ?>
        <div class="container my-5 ">

            <div class="row">
                <div class="col-12 col-md-6 order-2 order-md-<?php echo $i % 2 == 1 ? "1" : "2" ?>">
                    <h5 class="fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h5>

                    <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>
                    <?php echo $row['modal']; ?>
                </div>

                <div class="col-12 col-md-6 order-1 order-md-1 text-center <?php echo $i % 2 == 1 ? "2" : "1" ?>">



                    <?php if ($row['href'] != "") { ?>
                        <div class="style02">
                            <img src="<?php echo $row['img'] ?>" width="100%" class="img-fluid bgnhover" data-bs-toggle="modal" data-bs-target="#videopopup<?php echo $row['id'] ?>" class="rounded" width="100%" alt="exaque">

                            <div class="style02-01" data-bs-toggle="modal" data-bs-target="#videopopup<?php echo $row['id'] ?>">
                                <img src="<?php echo base_url() ?>assets/icon/icons8-youtube-240.png" width="60">
                            </div>
                        </div>

                        <div class="modal fade modalVideo iframeYoutube" data-id="<?php echo $row['id'] ?>" id="videopopup<?php echo $row['id'] ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <iframe class="iframeYoutube" id="youbt_<?php echo $row['id'] ?>" src="<?php echo $row['href'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    <?php } else {
                    ?>
                        <img src="<?php echo $row['img']; ?>" width="90%">
                    <?php

                    } ?>
                </div>
            </div>
        </div>
    <?php $i++;
    } ?>

</section>