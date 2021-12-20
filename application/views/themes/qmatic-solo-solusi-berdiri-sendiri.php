<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="bg-half-170 d-table w-100 bg-home d-flex align-items-center" style="background: url('<?php echo $custom['qsoloBanner'][0]['img']; ?>') center center; height: auto;background-size: cover;" id="home"> 
    <div class="container">
        <div class="row ">
        <div class="col-md-9 mt-0  pt-0  ">
                <div class="ms-lg-4">
                    <div class="title-heading margin-top-100">
                        <h1 class="display-4 fw-bold mb-3 fnText" <?php echo $custom['qsoloBanner'][0]['data']['h1']; ?>> <?php echo $custom['qsoloBanner'][0]['h1']; ?></h1>
                        <h3 class="fnText" <?php echo $custom['qsoloBanner'][0]['data']['content']; ?>> <?php echo $custom['qsoloBanner'][0]['content']; ?></h3>
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




<section class="section ">

    <div class="container my-3 py-5">
        <div class="row align-items-center" >
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
        <div class="row " >
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

    <div class="container my-3">
        <div class="row ">
            <div class="col-12 mb-5">
                <div class="ms-lg-4 text-center">
                    <h3 class="fnText" <?php echo $custom['qsoloLabel1']['attributes'] ?>> <?php echo $custom['qsoloLabel1']['content'] ?> </h3>
                    <div class="fnText" <?php echo $custom['qsoloLabel2']['attributes'] ?>> <?php echo $custom['qsoloLabel2']['content'] ?> </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 ">
                <div class="ms-lg-4 text-center">
                    <h3 class="fnText" <?php echo $custom['qsoloLabel3']['attributes'] ?>> <?php echo $custom['qsoloLabel3']['content'] ?> </h3> 
                </div>
            </div>

            <?php foreach ($custom['qsoloW2'] as $r) { ?>
                <div class="col-3">
                    <div class="ms-lg-4 text-center">
                        <img src="<?php echo $r['img'] ?>" width="100%" alt="<?php echo $r['h1'] ?>">
                        <div class="fnText" <?php echo $r['data']['h1'] ?>> <?php echo $r['h1'] ?> </div>
                        <div>
                            <?php echo $r['modal'];?>
                        </div>
                    </div>
                </div>
            <?php } ?>

             
        </div>
    </div>

    

    <div class="container my-5">
        <div class="row " >
            <div class="col-12">
                <div class="ms-lg-4 text-center">
                    <h3 class="fnText" <?php echo $custom['qsoloLabel4']['attributes'] ?>> <?php echo $custom['qsoloLabel4']['content'] ?> </h3>
                </div>
            </div>

            <?php foreach ($custom['qsoloW3'] as $r) { ?>
                <div class="col-12 col-md-6">
                    <div class="ms-lg-4 text-center">
                        <img src="<?php echo $r['img'] ?>" width="100%" alt="<?php echo $r['h1'] ?>">
                        <div class="fnText" <?php echo $r['data']['h1'] ?>> <?php echo $r['h1'] ?> </div>
                        <div>
                            <?php echo $r['modal'];?>
                        </div>
                    </div>
                </div>
            <?php } ?>
 
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
                            <a href="<?php echo $r['h4']; ?>" class="btn btn-sm btn-primary">Permohonan Demo</a>
                        </div>

                    </div>
                <?php } ?>
            </div>

        </div>
    </div>

</section>