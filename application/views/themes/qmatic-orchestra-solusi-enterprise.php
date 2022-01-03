<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="d-table w-100 bg-home d-flex align-items-center" style="background: url('<?php echo $custom['qeBanner'][0]['img']; ?>') center center; height: auto;background-size: cover;  padding:150px 0px 100px 0px">
    <div class="container">
        <div class="row ">
            <div class="col-md-9 mt-0  pt-0  ">
                <div class="ms-lg-4">
                    <div class="title-heading mt-5">
                        <h1 class="display-4 fw-bold mb-3 fnText text-white" <?php echo $custom['qeBanner'][0]['data']['h1']; ?>> <?php echo $custom['qeBanner'][0]['h1']; ?></h1>
                        <h3 class="fnText text-white" <?php echo $custom['qeBanner'][0]['data']['content']; ?>> <?php echo $custom['qeBanner'][0]['content']; ?></h3>
                        <?php echo $custom['qeBanner'][0]['modal']; ?>
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

    <div class="container mt-3 py-5">
        <div class="row align-items-center" id="">
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




<section class=" ">
    <?php $a = $custom['qeW1'][0]; ?>
    <div class="container ">
        <div class="row align-items-center" id="">
            <div class="text-center col-md-6 col-12  ">
                <img src="<?php echo $a['img']; ?>" class="img-fluid" alt="Exaque -  <?php echo $a['h1']; ?>">
            </div>
            <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 col-12  ">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <h4 class="title mb-4 fnText" <?php echo $a['data']['h1']; ?>><?php echo $a['h1']; ?></h4>
                        <div class="text-muted fnRichtext" <?php echo $a['data']['h2']; ?>><?php echo $a['h2']; ?></div>
                        <div><?php echo $a['modal']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="section " style="background-image: url(https://www.exaque.com/assets/img/bgn/triangle-background-grey-only-min.png);    background-size: cover;">
    <?php $a = $custom['qeW2'][0]; ?>
    <div class="container my-3 py-2">
        <div class="row " id="">
            <div class="col-12 ">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <h1 class="title mb-4 fnText" <?php echo $a['data']['h1']; ?>><?php echo $a['h1']; ?></h1>
                    </div>

                </div>
            </div>
            <div class="text-center col-md-6 col-12 order-1 order-md-2">
                <img src="<?php echo $a['img']; ?>" class="img-fluid" alt="Exaque -  <?php echo $a['h1']; ?>">

                <div class="text-center mt-3">
                    <a href="<?php echo $a['href']; ?>" class="btn  btn-block btn-outline-primary"><?php echo $a['h3']; ?></a>
                </div>
            </div>
            <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 col-12 order-2 order-md-1">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <h4 class="text-muted fnRichtext" <?php echo $a['data']['h2']; ?>><?php echo $a['h2']; ?></h4>
                        <div><?php echo $a['modal']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section  bg-light">
    <?php $a = $custom['qeW3'][0]; ?>
    <div class="container my-3 py-5">
        <div class="row " id="">
            <div class="col-12 ">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <h4 class="title mb-4 fnText" <?php echo $a['data']['h1']; ?>><?php echo $a['h1']; ?></h4>
                        <div class="fnRichtext" <?php echo $a['data']['content']; ?>>
                            <?php echo $a['content']; ?>
                        </div>
                       
                    </div>


                </div>
            </div>

        </div>
    </div>
</section>



<section class="section bg-primary text-white">
    <?php $a = $custom['qeW4Red'][0]; ?>
    <div class="container my-3 py-3">
        <div class="row " id="">
            <div class="col-12 ">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <h4 class="title mb-4 fnText" <?php echo $a['data']['h1']; ?>><?php echo $a['h1']; ?></h4>
                        <div class="fnRichtext" <?php echo $a['data']['content']; ?>>
                            <?php echo $a['content']; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section text-white" style="background: #7C1428;">
    <?php $a = $custom['qeW4Red2'][0]; ?>
    <div class="container my-3 py-3">
        <div class="row " id="">
            <div class="col-12">
                <div class="ms-lg-4">
                    <h4 class="title mb-4 fnText" <?php echo $a['data']['h1']; ?>><?php echo $a['h1']; ?></h4>
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="ms-lg-4">
                    <div class="section-title">

                        <div class="fnRichtext" <?php echo $a['data']['content']; ?>>
                            <?php echo $a['content']; ?>
                        </div>
                        <div>
                            <?php echo $a['modal']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <img src=" <?php echo $a['img']; ?>" width="90%" class="text-center">
            </div>

        </div>
    </div>
</section>





<?php $row = $custom['jjtm'][0]; ?>
<section class="section bg-light py-5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12">
                <h1 class="fnText " <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h1>
                <?php echo $row['modal']; ?>
            </div>
            <div class="col-md-3 col-12">
                <img src="<?php echo $row['img']; ?>" width="100%" class="img-fluid">
            </div>
            <div class="col-md-9 col-12">
                <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>
            </div>
        </div>
    </div>
</section>


<style>
    .container h5.display-6 {
        border-top: 3px solid #000;
        border-bottom: 3px solid #000; 
        margin-bottom: 10px;
    }
    .container:nth-child(1) h5.display-6{  border-color: #CD5674;  }
    .container:nth-child(2) h5.display-6{  border-color: #A0BF03;  }
    .container:nth-child(3) h5.display-6{  border-color: #4EBAF9;  }
    .container:nth-child(4) h5.display-6{  border-color: #D5791F;  }
    .container:nth-child(5) h5.display-6{  border-color: #a9023a;  }
    .container:nth-child(6) h5.display-6{  border-color: #198754;  }
    

</style>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <?php $row = $custom['ddat'][0]; ?>
                <h1 class="fnText " <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h1>
                <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>
            </div>
        </div>
    </div>

    <?php $row = $custom['ddat1'][0]; ?>
    <div class="container mb-5" id="<?php echo url_title($row['h1']); ?>">
        <div class="row">
            <div class="col-12">

                <h5 class="display-6 fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h5>
                <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>
            </div>

            <div class="col-12">
                <ul class="ulwidget ulwidget-hl-1">
                    <?php foreach ($custom['ddat1w'] as $row) { ?>
                        <li>
                            <h5 class="fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h5>
                            <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>
                            <?php echo $row['modal']; ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>


    <?php $row = $custom['ddat2'][0]; ?>
    <div class="container mb-5" id="<?php echo url_title($row['h1']); ?>">
        <div class="row">
            <div class="col-12">

                <h5 class="display-6 fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h5>
                <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>
            </div>

            <div class="col-12">
                <ul class="ulwidget ulwidget-hl-1">
                    <?php foreach ($custom['ddat2w'] as $row) { ?>
                        <li>
                            <h5 class="fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h5>
                            <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>
                            <?php echo $row['modal']; ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>


    <?php $row = $custom['ddat3'][0]; ?>
    <div class="container mb-5" id="<?php echo url_title($row['h1']); ?>">
        <div class="row">
            <div class="col-12">

                <h5 class="display-6 fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h5>
                <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>
            </div>

            <div class="col-12">
                <ul class="ulwidget ulwidget-hl-1">
                    <?php foreach ($custom['ddat3w'] as $row) { ?>
                        <li>
                            <h5 class="fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h5>
                            <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>
                            <?php echo $row['modal']; ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <?php $row = $custom['ddat4'][0]; ?>
    <div class="container mb-5" id="<?php echo url_title($row['h1']); ?>">
        <div class="row">
            <div class="col-12">

                <h5 class="display-6 fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h5>
                <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>
            </div>

            <div class="col-12">
                <ul class="ulwidget ulwidget-hl-1">
                    <?php foreach ($custom['ddat4w'] as $row) { ?>
                        <li>
                            <h5 class="fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h5>
                            <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>
                            <?php echo $row['modal']; ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>



    <?php $row = $custom['ddat5'][0]; ?>
    <div class="container mb-5" id="<?php echo url_title($row['h1']); ?>">
        <div class="row">
            <div class="col-12">

                <h5 class="display-6 fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h5>
                <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>
            </div>

            <div class="col-12">
                <ul class="ulwidget ulwidget-hl-1">
                    <?php foreach ($custom['ddat5w'] as $row) { ?>
                        <li>
                            <h5 class="fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h5>
                            <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>
                            <?php echo $row['modal']; ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>


    <?php $row = $custom['ddat6'][0]; ?>
    <div class="container mb-5" id="<?php echo url_title($row['h1']); ?>">
        <div class="row">
            <div class="col-12">

                <h5 class="display-6 fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h5>
                <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>
            </div>

            <div class="col-12">
                <ul class="ulwidget ulwidget-hl-1">
                    <?php foreach ($custom['ddat6w'] as $row) { ?>
                        <li>
                            <h5 class="fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h5>
                            <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>
                            <?php echo $row['modal']; ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

</section>




<!-- footer -->

<section class="section bg-light">

    <div class="container my-3 ">
        <div class="row no-gutters">
            <div class="col-md-1 col-3 mb-3">
                <img src="<?php echo base_url() ?>assets/gif/hug.gif" width="100%">

            </div>
            <div class="col-md-11 col-12">
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