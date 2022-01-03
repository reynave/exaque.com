<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Hero Start -->
<section class=" d-table w-100 text-white" style="background: url('<?php echo $custom['finansialBanner'][0]['img']; ?>');background-size: cover; padding:150px 0px 80px 0px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 col-12">
                <div class="title-heading mt-4">
                    <h1 class="heading mb-3 fnText" <?php echo $custom['finansialBanner'][0]['data']['h1']; ?>><?php echo $custom['finansialBanner'][0]['h1']; ?></h1>
                    <h3 class="para-desc fnText" <?php echo $custom['finansialBanner'][0]['data']['content']; ?>> <?php echo $custom['finansialBanner'][0]['content']; ?></h3>
                    <div class="mt-4 pt-2">
                        <a href="<?php echo $custom['finansialBanner'][0]['href']; ?>" class="btn btn-exa btn6 m-1">Permohonan Demo</a>
                        <?php echo $custom['finansialBanner'][0]['modal']; ?>
                        <?php echo $core['content']['id'] ? $core['content']['edit']:$core['content']['insert']; ?>
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

<!-- counter Start -->
<section class="section bg-light py-5">
    <div class="container">
        <?php
        foreach ($custom['finW1'] as $r) {
        ?>
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title me-lg-5">
                        <h4 class="title mb-4 fnText" <?php echo $r['data']['h1'] ?>><?php echo $r['h1'] ?></h4> 
                        <div>
                            <?php echo $r['modal'] ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 order-1 order-md-2 ">
                    <div class="style02">
                        <img src="<?php echo $r['img'] ?>" width="100%" class="img-fluid bgnhover" data-bs-toggle="modal" data-bs-target="#videopopup<?php echo $r['id'] ?>" class="rounded" width="100%" alt="exaque">

                        <div class="style02-01" data-bs-toggle="modal" data-bs-target="#videopopup<?php echo $r['id'] ?>">
                            <img src="<?php echo base_url() ?>assets/icon/icons8-youtube-240.png" width="60">
                        </div>
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
        <?php } ?>
    </div>
    <!--end container-->
</section>




<section class="section ">
    <div class="container my-3 ">
        <div class="row">
            <div class="col-12">
                <h4 class="fnText" <?php echo $core['content']['data']['name'] ?>><?php echo $core['content']['name']; ?></h4>
                <div class="fnRichtext" <?php echo $core['content']['data']['content'] ?>><?php echo $core['content']['content']; ?> </div>
                <?php echo !$core['content']['id'] ? $core['content']['insert'] : false; ?>
            </div>

        </div>
    </div>

    <?php
    $i = 0;
    foreach ($custom['finW2'] as $r) {
        $i++;
    ?>
        <div class="container my-4 ">
            <div class="row">
                <div class="col-12 col-md-6 text-justify order-2 order-md-<?php echo $i % 2 == 1 ? "1" : "2" ?>"> 
                    <div class="fnRichtext" <?php echo $r['data']['content']; ?>><?php echo $r['content']; ?> </div>
                    <?php echo $r['modal']; ?>
                </div>
                <div class="col-12 col-md-6 text-center order-1 order-md-<?php echo $i % 2 == 1 ? "2" : "1" ?>">
                    <img src="<?php echo $r['img']; ?>" width="80%">
                </div>
            </div>
        </div>
    <?php } ?>

</section>



<section class="section  bg-light ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="mb-3">
                   Baca Artikel Blog Kami 
                </h4>
            </div>
            <?php 
             $q = $this->db->query("SELECT * FROM cms_content WHERE id_pages = 1633 order by input_date DESC limit 3"); 
             foreach ($q->result_array() as $rec) {  
            ?>
            <div class="col-12 col-lg-4 col-md-6 mb-4 pb-2">
                <div class="card blog rounded border-0 shadow overflow-hidden">
                    <div class="position-relative">
                        <img src="<?php echo $rec['img'];?>" class="card-img-top" alt="<?php echo $rec['name'];?>">
                        <div class="overlay rounded-top"></div>
                    </div>
                    <div class="card-body content">
                        <h5><a href="<?php echo  base_url().$rec['url'];?>" class="card-title title text-dark"><?php echo $rec['name'];?></a></h5>
                        <div class="post-meta d-flex justify-content-between mt-3"> 
                            <a href="<?php echo  base_url().$rec['url'];?>" class="btn btn-sm btn-outline-primary">Baca selanjutnya... <i class="uil uil-angle-right-b align-middle"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>