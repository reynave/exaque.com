<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('<?php echo $custom['virtualBanner'][0]['img']; ?>');">
    
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading title-heading">
                    <h1 class="text-dark  fnText" <?php echo $custom['virtualBanner'][0]['data']['h1']; ?>> <?php echo $custom['virtualBanner'][0]['h1']; ?> </h1> 
                    <h3 class="fnText text-dark" <?php echo $custom['virtualBanner'][0]['data']['content']; ?>> <?php echo $custom['virtualBanner'][0]['content']; ?></h3> 
                    <?php echo $custom['virtualBanner'][0]['modal']; ?>
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
                <h4 class="fnRichtext" <?php echo $core['content']['data']['content']; ?>><?php echo $core['content']['content']; ?></h4>
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
                    <img src="<?php echo $row['img']; ?>" width="90%">
                </div>
            </div>
        </div>
    <?php $i++;
    } ?>

</section>