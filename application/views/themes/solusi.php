<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('<?php echo $custom['solusiBanner'][0]['img']; ?>');"> 
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading title-heading">
                    <h1 class="text-white  fnText" <?php echo $custom['solusiBanner'][0]['data']['h1']; ?>> <?php echo $custom['solusiBanner'][0]['h1']; ?> </h1>
                    <div class="text-white para-desc mb-0 mx-auto fnRichtext" <?php echo $custom['solusiBanner'][0]['data']['content']; ?>> <?php echo $custom['solusiBanner'][0]['content']; ?></div>
                    <?php echo $custom['solusiBanner'][0]['modal']; ?>
                    <?php echo $core['content']['id'] ? $core['content']['edit']:$core['content']['insert']; ?>
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

<section class="section bg-light">
    <?php $row = $core['content']; ?>
    <div class="container my-2">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="ms-lg-4">
                    <div class="section-title text-center">
                        <div class="text-muted fnRichtext" <?php echo $row['data']['content'] ?>><?php echo $row['content'] ?></div>
                        <div> <?php echo !$row['id'] ? $row['insert'] : $row['edit']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="section"> 
    <?php
    $i = 0;
    foreach ($custom['solusi1'] as $row) {
        $i++;
    ?>
        <div class="container my-5">
            <div class="row align-items-center">
                <div class="col-md-6 col-12 order-1 order-lg-<?php echo $i % 2 == 1 ? "1" : "2" ?> text-center" >
                    <img src="<?php echo $row['img'] ?>" width="80%" class="img-fluid" alt="exaque">
                </div>
                <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 col-12 order-2 order-lg-<?php echo $i % 2 == 1 ? "2" : "1" ?>">
                    <div class="ms-lg-4"> 
                        <div class="section-title">
                            <h4 class="title mb-4 fnText" <?php echo $row['data']['h1'] ?>><?php echo $row['h1'] ?></h4>
                            <div class="text-muted fnText" <?php echo $row['data']['content'] ?>><?php echo $row['content'] ?></div>
                            <a href="<?php echo $row['href'] ?>" class="btn btn-outline-primary mt-3">Baca Selengkapnya</a>
                            <div> <?php echo $row['modal'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</section>