<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="bg-half-170 d-table w-100 bg-home d-flex align-items-center" style="background: url('<?php echo $custom['penghitungBanner'][0]['img']; ?>') center center; height: auto;" id="home">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row ">
        <div class="col-md-9 mt-0  pt-0  ">
                <div class="ms-lg-4">
                    <div class="title-heading margin-top-100">
                        <h1 class="penghitung-4 fw-bold mb-3 fnText" <?php echo $custom['penghitungBanner'][0]['data']['h1']; ?>> <?php echo $custom['penghitungBanner'][0]['h1']; ?></h1>
                        <h3 class="fnText" <?php echo $custom['penghitungBanner'][0]['data']['content']; ?>> <?php echo $custom['penghitungBanner'][0]['content']; ?></h3>
                        <?php echo $custom['penghitungBanner'][0]['modal']; ?>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>


<section class="section  mb-5">
    <div class="container my-3 py-5 ">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <h4 class="title mb-4 fnText" <?php echo $core['content']['data']['name'] ?>><?php echo $core['content']['name'] ?></h4>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="ms-lg-4">
                    <div class="section-title">

                        <div class="text-muted fnRichtext" <?php echo $core['content']['data']['content'] ?>><?php echo $core['content']['content'] ?></div>
                        <div> <?php echo $core['content']['id'] ?  $core['content']['edit'] : $core['content']['insert']; ?></div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <img src="<?php echo $core['content']['img'] ?>" alt="Exaque <?php echo $core['content']['name'] ?>" width="100%">
            </div>
            
        </div>
    </div>
</section>



<section class="section ">
    <div class="container my-3 py-2">
        <div class="row ">
            <?php foreach ($custom['penghitungHeader'] as $row) { ?>
                <div class="col-12 col-md-4">
                    <div class="ms-lg-4">
                        <div class="section-title">
                            <img src="<?php echo $row['img'] ?>" width="100%" class="my-4">
                            <h5 class="text-center mb-4 fnText" <?php echo $row['data']['h1'] ?>><?php echo $row['h1'] ?></h5>
                           <div class="text-center">
                           <?php echo $row['modal'];?>
                           </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</section>


<?php
$row = $custom['penghitungDark'][0];
?>
<section class="section bg-dark text-white">
    <div class="container my-3 py-5">
        <div class="row align-items-center">
            <div class=" mt-4 pt-2 mt-sm-0 pt-sm-0 col-12">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <h4 class="title fnText" <?php echo $row['data']['h1'] ?>><?php echo $row['h1'] ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 col-12">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <div class="text-white fnRichtext " <?php echo $row['data']['h2'] ?>><?php echo $row['h2'] ?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 col-12">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <div class="text-white fnRichtext" <?php echo $row['data']['h3'] ?>><?php echo $row['h3'] ?></div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>






<section>
    <?php
    $i = 0;
    foreach ($custom['penghitungW1'] as $row) {
        $i++;
    ?>
        <div class="container my-5 py-3">
            <div class="row align-items-center" id="counter">
                <div class="col-md-5 col-12 order-1 order-lg-<?php echo $i % 2 == 1 ? "1" : "2" ?>">
                    <img src="<?php echo $row['img'] ?>" class="img-fluid" alt="exaque">
                </div>
                <div class="col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0 col-12 order-2 order-lg-<?php echo $i % 2 == 1 ? "2" : "1" ?>">
                    <div class="ms-lg-4"> 
                        <div class="section-title">
                            <h5 class="penghitungHeader mb-4 fnText" <?php echo $row['data']['h1'] ?>><?php echo $row['h1'] ?></h5>
                            <div class="text-muted fnText" <?php echo $row['data']['content'] ?>><?php echo $row['content'] ?></div> 
                            <div> <?php echo $row['modal'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</section>




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