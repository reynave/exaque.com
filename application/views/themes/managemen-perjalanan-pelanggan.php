<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="bg-half-170 d-table w-100" style="background: url('<?php echo $custom['mpBanner'][0]['img']; ?>');">

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading title-heading">
                    <h1 class="text-dark  fnText" <?php echo $custom['mpBanner'][0]['data']['h1']; ?>> <?php echo $custom['mpBanner'][0]['h1']; ?> </h1>
                    <h5 class="text-dark para-desc mb-0 mx-auto fnRichtext" <?php echo $custom['mpBanner'][0]['data']['content']; ?>> <?php echo $custom['mpBanner'][0]['content']; ?></h5>
                    <?php echo $custom['mpBanner'][0]['modal']; ?>
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
    <div class="">

        <div class="container my-3 ">
            <div class="row">
                <div class="col-12">
                    <h4 class="fnText" <?php echo $core['content']['data']['name'] ?>><?php echo $core['content']['name']; ?></h4>
                </div>

            </div>
        </div>


        <div class="container my-3 ">
            <div class="row">
                <div class="col-6">
                    <img src="<?php echo $core['content']['img'] ?>" width="100%" alt="exaque images">
                </div>

                <div class="col-6">
                    <div class="fnRichtext" <?php echo $core['content']['data']['content'] ?>><?php echo $core['content']['content']; ?></div>
                </div>
                <?php echo $core['content']['id'] ?  $core['content']['edit'] :  $core['content']['insert']; ?>
            </div>
        </div>




        <div class="container my-3 ">
            <div class="row">
                <div class="col-12 text-left">
                    <h3 class="fnText text-primary" <?php echo $custom['mpText1']['attributes']; ?>><?php echo $custom['mpText1']['content']; ?></h3>
                    <div>
                        <small class="fnText text-primary" <?php echo $custom['mpText2']['attributes']; ?>><?php echo $custom['mpText2']['content']; ?> </small>
                    </div>
                </div>

            </div>
        </div>




        <div class="container my-4 ">
            <div class="row">
                <?php foreach ($custom['mpW1'] as $r) { ?>
                    <div class="col-6 text-justify">
                        <h5 class="fnText" <?php echo $r['data']['h1']; ?>><?php echo $r['h1']; ?></h5>

                        <div class="fnRichtext" <?php echo $r['data']['content']; ?>><?php echo $r['content']; ?> </div>

                    </div>
                <?php } ?>

                <div class="col-12">
                    <?php echo $custom['mpW1_action']; ?>
                </div>
            </div>
        </div>


        <div class="container my-3 ">
            <div class="row">
                <div class="col-12 text-left">
                    <h3 class="fnText" <?php echo $custom['mpText3']['attributes']; ?>><?php echo $custom['mpText3']['content']; ?></h3>
                </div>
            </div>
        </div>
        <div class="container my-4 ">
            <div class="row">
                <?php foreach ($custom['mpW2'] as $r) { ?>
                    <div class="col-6">
                        <div class="fnRichtext" <?php echo $r['data']['content']; ?>><?php echo $r['content']; ?> </div>
                        <div><?php echo $r['modal']; ?></div>
                    </div>

                    <div class="col-6 text-center">
                        <img src="<?php echo $r['img'] ?>" width="80%">
                    </div>

                <?php } ?>
            </div>
        </div>


        <div class="container my-4 ">
            <div class="row">
                <?php foreach ($custom['mpW3'] as $r) { ?>
                    <div class="col-12">
                        <h1 class="fnText" <?php echo $r['data']['h1']; ?>><?php echo $r['h1']; ?></h1>
                        <div class="fnRichtext" <?php echo $r['data']['content']; ?>><?php echo $r['content']; ?> </div>
                    </div>

                    <div class="col-12 text-center">

                        <div class="style02">
                            <img src="<?php echo $r['img'] ?>" width="100%" class="img-fluid bgnhover" data-bs-toggle="modal" data-bs-target="#videopopup<?php echo $r['id'] ?>" class="rounded" width="100%" alt="exaque">

                            <div class="style02-01" data-bs-toggle="modal" data-bs-target="#videopopup<?php echo $r['id'] ?>">
                                <img src="<?php echo base_url() ?>assets/icon/icons8-youtube-240.png" width="60">
                            </div>
                        </div>

                        <div class="modal fade modalVideo iframeYoutube" data-id="<?php echo $r['id'] ?>" id="videopopup<?php echo $r['id'] ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <iframe class="iframeYoutube" id="youbt_<?php echo $r['id'] ?>" src="<?php echo $r['href'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <?php echo $r['modal']; ?>
                    </div>
                <?php } ?>
            </div>
        </div>



        <div class="container my-4 ">
            <div class="row">
                <?php foreach ($custom['mpW4'] as $r) { ?>
                    <div class="col-12">
                        <h1 class="fnText" <?php echo $r['data']['h1']; ?>><?php echo $r['h1']; ?></h1>
                    </div>
                    <div class="col-6">
                        <div class="fnRichtext" <?php echo $r['data']['content']; ?>><?php echo $r['content']; ?> </div>

                        <?php echo $r['modal']; ?>
                    </div>

                    <div class="col-6 text-center">
                        <img src="<?php echo $r['img'] ?>" width="80%">
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
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
                            <a href="<?php echo $r['href']; ?>" class="btn btn-sm btn-primary">Permohonan Demo</a>
                        </div>

                    </div>
                <?php } ?>
            </div>

        </div>
    </div>

</section>