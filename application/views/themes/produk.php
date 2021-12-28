<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="bg-half-170 d-table w-100 bg-home d-flex align-items-center" style="background: url('<?php echo $custom['productBanner'][0]['img']; ?>') center center; height: auto;" id="home">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 text-center mt-0 mt-md-5 pt-0 pt-md-5">
                <div class="title-heading margin-top-100">
                    <h1 class="display-4 fw-bold mb-3 fnText" <?php echo $custom['productBanner'][0]['data']['h1']; ?> > <?php echo $custom['productBanner'][0]['h1']; ?></h1>
                    <h3 class="para-desc mx-auto text-muted fnText" <?php echo $custom['productBanner'][0]['data']['content']; ?>> <?php echo $custom['productBanner'][0]['content']; ?></h3>
                    <?php echo $custom['productBanner'][0]['modal']; ?> 
                </div> 
                <div class="home-dashboard">
                    <img src="images/single/1.png" alt="" class="img-fluid mover">
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>




<section class="section ">
    <?php
    $i = 0;
    foreach ($custom['productW1'] as $row) {
        $i++;
    ?>
        <div class="container my-3 py-5">
            <div class="row align-items-center" id="counter">
                <div class="text-center col-md-6 col-12 order-1 order-lg-<?php echo $i % 2 == 1 ? "1" : "2" ?>" >
                    <img src="<?php echo $row['img'] ?>" class="img-fluid" alt="exaque">
                </div>
                <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 col-12 order-2 order-lg-<?php echo $i % 2 == 1 ? "2" : "1" ?>">
                    <div class="ms-lg-4">

                        <div class="section-title">
                            <h4 class="title mb-4 fnText" <?php echo $row['data']['h1'] ?>><?php echo $row['h1'] ?></h4>
                            <p class="text-muted fnText" <?php echo $row['data']['content'] ?>><?php echo $row['content'] ?></p>
                            <a href="<?php echo $row['href'] ?>" class="btn btn-primary mt-3">Baca Selengkapnya</a>
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
                <?php foreach ($bodyFooter as $r) { ?>
                    <div class="row">  
                        <div class="col-12 col-md-8">
                            <h5 class="fnText" <?php echo $r['data']['h1']; ?>><?php echo $r['h1']; ?></h5>
                        </div>
                        <div class="col-12 col-md-9">
                            <div class="fnRichtext" <?php echo $r['data']['content']; ?>><?php echo $r['content']; ?> </div>
                            <?php echo $r['modal']; ?>
                        </div> 
                        <div class="col-12 col-md-3 text-center">
                            <a href="<?php echo $r['href']; ?>" class="btn btn-sm btn-primary">Permohonan Demo</a>
                        </div> 
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>

</section>