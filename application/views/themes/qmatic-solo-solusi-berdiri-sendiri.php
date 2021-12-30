<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="bg-half-170 d-table w-100 bg-home d-flex align-items-center" style="background: url('<?php echo $custom['qsoloBanner'][0]['img']; ?>') center center; height: auto;background-size: cover; background-position-y: 54px;">
    <div class="container">
        <div class="row ">
            <div class="col-md-7 mt-0  pt-0  ">
                <div class="ms-lg-4">
                    <div class="title-heading">
                        <h1 class="display-4 fw-bold mb-3 fnText " <?php echo $custom['qsoloBanner'][0]['data']['h1']; ?>> <?php echo $custom['qsoloBanner'][0]['h1']; ?></h1>
                        <h3 class="fnText  " <?php echo $custom['qsoloBanner'][0]['data']['content']; ?>> <?php echo $custom['qsoloBanner'][0]['content']; ?></h3>
                        <?php echo $custom['qsoloBanner'][0]['modal']; ?>
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



<section class="section ">

    <div class="container  ">
        <div class="row align-items-center">
            <div class="text-center col-md-6 col-12 order-1 order-md-2">
                <img src="<?php echo $core['content']['img'] ?>" class="img-fluid" alt="Exaque -  <?php echo  $core['content']['name'] ?>">
            </div>
            <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 col-12 order-2 order-md-1">
                <div class="ms-lg-4">

                    <div class="section-title">
                        <h4 class="title mb-4 fnText" <?php echo  $core['content']['data']['name'] ?>><?php echo  $core['content']['name'] ?></h4>
                        <div class="text-muted fnRichtext" <?php echo $core['content']['data']['content'] ?>><?php echo  $core['content']['content'] ?></div>
                        <div><?php echo  !$core['content']['id'] ? $core['content']['insert'] : $core['content']['edit']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="section bg-light">

    <div class="container my-3">
        <div class="row ">
            <div class="col-12">
                <div class="ms-lg-4">
                    <div class="fnRichtext" <?php echo $custom['qsoloWTitle']['attributes'] ?>> <?php echo $custom['qsoloWTitle']['content'] ?> </div>
                </div>
            </div>

            <?php foreach ($custom['qsoloW1'] as $a) { ?>
                <div class="col-md-6 col-12 ">
                    <div class="ms-lg-4">
                        <img src="<?php echo $a['img']; ?>" width="100%" class="img-fluid" alt="Exaque -  <?php echo $a['h1']; ?>">
                        <div>
                            <div class="text-muted fnRichtext" <?php echo $a['data']['content']; ?>><?php echo $a['content']; ?></div>
                            <div><?php echo $a['modal']; ?></div>
                        </div>
                    </div>
                </div>
            <?php  } ?>
        </div>
    </div>
</section>



<section class="section">

    <?php $row = $custom['qsoloW2'][0];?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="<?php echo $row['img']?>" width="100%" alt="Lisensi Dasar Sistem Manajemen Antrean">
                <div>
                    <?php echo $row['modal'];?>
                </div>
            </div>
        </div>
    </div>


</section>




<!-- footer -->

<section class="section bg-light">

    <div class="container my-3 ">
        <div class="row no-gutters">
            <div class="col-1">
                <img src="<?php echo base_url() ?>assets/gif/hug.gif" width="100%">

            </div>
            <div class="col-11">
                <?php foreach ($bodyFooterQmatic as $r) { ?>
                    <div class="row">


                        <div class="col-12 col-md-8">
                            <h1 class="fnText text-primary" <?php echo $r['data']['h1']; ?>><?php echo $r['h1']; ?></h1>
                        </div>
                        <div class="col-12 col-md-9">
                            <div class="fnRichtext" <?php echo $r['data']['content']; ?>><?php echo $r['content']; ?> </div>
                            <?php echo $r['modal']; ?>
                        </div>

                        <div class="col-12 col-md-3 text-center">
                            <a href="<?php echo $r['href']; ?>" class="btn btn-outline-primary">Permohonan Demo</a>
                        </div>

                    </div>
                <?php } ?>
            </div>

        </div>
    </div>

</section>