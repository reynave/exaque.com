<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="bg-half-170 d-table w-100 text-white" style="background: url('<?php echo $custom['penghitungBanner'][0]['img']; ?>');background-size: cover;background-position-y: 44px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-7">
                <div class="title-heading mt-4">
                    <h1 class="heading mb-3 fnText" <?php echo $custom['penghitungBanner'][0]['data']['h1']; ?>><?php echo $custom['penghitungBanner'][0]['h1']; ?></h1>
                    <h3 class="para-desc fnText" <?php echo $custom['penghitungBanner'][0]['data']['content']; ?>> <?php echo $custom['penghitungBanner'][0]['content']; ?></h3>
                    <div class="mt-4 pt-2">
                        <a href="<?php echo $custom['penghitungBanner'][0]['href']; ?>" class="btn btn-exa m-1">Permohonan Demo</a>
                        <?php echo $custom['penghitungBanner'][0]['modal']; ?>
                    </div>
                </div>
            </div>

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
    <div class="container mt-3 pt-5 ">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <h4 class="title mb-4 fnText" <?php echo $core['content']['data']['name'] ?>><?php echo $core['content']['name'] ?></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-12">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <div class="text-muted fnRichtext" <?php echo $core['content']['data']['content'] ?>><?php echo $core['content']['content'] ?></div>
                        <div> <?php echo $core['content']['id'] ?  $core['content']['edit'] : $core['content']['insert']; ?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <img src="<?php echo $core['content']['img'] ?>" class="img-fluid my-3" alt="Exaque <?php echo $core['content']['name'] ?>" width="100%">
            </div>

        </div>
    </div>
</section>

<style>
    .haha {
        height: 171px;
    }

    .font-sm {
        font-size: 14px;
    }
</style>

<section class="section ">
    <div class="container  py-2">
        <div class="row ">
            <?php foreach ($custom['penghitungHeader'] as $row) { ?>
                <div class="col">
                    <div class="my-2 haha text-center">
                        <img src="<?php echo $row['img']; ?>" width="70%">
                    </div>
                    <h6 class="fnText text-center" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h6>
                    <div class="fnRichtext text-center font-sm" <?php echo $row['data']['h2']; ?>><?php echo $row['h2']; ?></div>
                    <div>
                        <?php echo $row['modal']; ?>
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
                            <a href="<?php echo $r['href']; ?>" class="btn  btn-outline-primary">Permohonan Demo</a>
                        </div>

                    </div>
                <?php } ?>
            </div>

        </div>
    </div>

</section>