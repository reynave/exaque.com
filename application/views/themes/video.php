<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Start -->
<section class="section noBanner">
    <div class="container">
        <div class="row">
            <?php foreach ($custom['library_video'] as $r) { ?>
                <div class="col-lg-3 col-md-4 col-6 mb-4 pb-2 ">
                    <div class="style01"> 
                        <img src="<?php echo $r['img'] ?>" data-bs-toggle="modal" data-bs-target="#videopopup<?php echo $r['id'] ?>" class="rounded" width="100%" alt="exaque">
                        <div class="lh-sm">
                            <a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#videopopup<?php echo $r['id'] ?>"><?php echo $r['h1'] ?></a>
                            <div class="style01-01" data-bs-toggle="modal" data-bs-target="#videopopup<?php echo $r['id'] ?>">
                                <img src="<?php echo base_url() ?>assets/icon/icons8-youtube-240.png" width="60">
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>



            <?php foreach ($custom['library_video'] as $r) { ?>
                <div class="modal fade modalVideo iframeYoutube" data-id="<?php echo $r['id'] ?>" id="videopopup<?php echo $r['id'] ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <iframe class="iframeYoutube" id="youbt_<?php echo $r['id'] ?>" src="<?php echo $r['href'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="col-12 text-center">
                <?php echo $custom['library_video_action']; ?>
            </div>


        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Blog End -->