<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('<?php echo $custom['managemenAntreanBanner'][0]['img']; ?>') center center; height: auto; background-size: cover;">

    <div class="container">
        <div class="row mt-5 ">
            <div class="col-lg-7 col-12">
                <div class="pages-heading title-heading">
                    <h1 class="fnText" <?php echo $custom['managemenAntreanBanner'][0]['data']['h1']; ?>> <?php echo $custom['managemenAntreanBanner'][0]['h1']; ?> </h1>
                    <h5 class="fnRichtext" <?php echo $custom['managemenAntreanBanner'][0]['data']['content']; ?>> <?php echo $custom['managemenAntreanBanner'][0]['content']; ?></h5>
                    <?php echo $custom['managemenAntreanBanner'][0]['modal']; ?>
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






<section class="section ">
    <div class="wrapper-sm">

        <div class="container my-3 ">
            <div class="row align-items-center">
                <div class="col-md-5 col-12 order-1 order-lg-2">
                    <img src=" <?php echo $core['content']['img']; ?>" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0 col-12 order-2 order-lg-1">
                    <div class="ms-lg-4">
                        <div class="section-title">
                            <h4 class="title mb-4 fnText" <?php echo $core['content']['data']['name']; ?>> <?php echo $core['content']['name']; ?></h4>
                            <div class="fnRichtext" <?php echo $core['content']['data']['content']; ?>>
                                <?php echo $core['content']['content']; ?>
                            </div>
                            <?php echo  !$core['content']['id'] ? $core['content']['insert'] : $core['content']['edit']; ?>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>






        <div class="container my-3">
            <div class="row">
                <?php $r = $custom['maPerangkat'][0]; ?>
                <div class="col-12  ">
                    <img src="<?php echo $r['img'] ?>" width="100%">
                    <?php echo $r['modal']; ?>
                </div>
            </div>
        </div>

        <style>
            .min-hg {
                min-height: 356px;
            }
        </style>

        <div class="container my-3">
            <div class="row">
                <?php
                $i = 1;
                foreach ($custom['maWidget'] as $r) {
                    $i++;
                ?>
                    <div class="col-12 col-md-6">
                        <div class="border min-hg <?php echo $i % 2 == 0 ? "bg-primary text-white" : ""; ?> p-3 " style="background: url(<?php echo $r['img'] ?>);    background-position: bottom right;    background-repeat: no-repeat;    background-size: cover;">
                            <h4 class="fnText display-6" <?php echo $r['data']['h1'] ?>> <?php echo $r['h1'] ?></h4>
                            <div class="fnRichtext" <?php echo $r['data']['content'] ?>>
                                <?php echo $r['content'] ?>
                            </div>
                            <a href="<?php echo $r['href'] ?>" class="btn  <?php echo $i % 2 == 0 ? "btn-light" : "btn-outline-primary"; ?>"> <?php echo $r['h3'] ?></a>
                            <?php echo $r['modal']; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="section bg-light">
    <div class="wrapper-sm">
    <div class="container ">
        <div class="row">
            <?php foreach ($custom['maFull1'] as $r) { ?>
                <div class="col-12 ">
                    <div class="bg-light  my-5 py-5" style="background: url(<?php echo $r['img'] ?>);    background-position: bottom left;    background-repeat: no-repeat;  background-size: contain;">
                        <div class="row">
                            <div class="col offset-md-5">
                                <h3 class="fnText" <?php echo $r['data']['h1'] ?>> <?php echo $r['h1'] ?> </h3>
                                <h5 class="fnText py-1 mb-4" <?php echo $r['data']['h1'] ?>> <?php echo $r['h1'] ?> </h5>
                              
                                <a href="<?php echo $r['href'] ?>" class="btn btn-outline-primary">Baca Selengkapnya</a>
                                <div> <?php echo $r['modal'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>