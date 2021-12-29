<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('<?php echo $custom['apBanner'][0]['img']; ?>');">

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading title-heading">
                    <h1 class="text-white   fnText" <?php echo $custom['apBanner'][0]['data']['h1']; ?>> <?php echo $custom['apBanner'][0]['h1']; ?> </h1>
                    <p class="text-white para-desc mb-0 mx-auto fnRichtext" <?php echo $custom['apBanner'][0]['data']['content']; ?>> <?php echo $custom['apBanner'][0]['content']; ?></p>
                    <?php echo $custom['apBanner'][0]['modal']; ?>
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
    <?php
    $i = 0;
    foreach ($custom['apW1'] as $row) { ?>
        <div class="container my-5 ">

            <div class="row">
                <div class="col-12 col-md-6 order-2 order-md-<?php echo $i % 2 == 1 ? "1" : "2" ?>">
                    <h5 class="fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h5>

                    <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>
                    <?php echo $row['modal']; ?>
                </div>

                <div class="style02 col-12 col-md-6 order-1 order-md-1 text-center <?php echo $i % 2 == 1 ? "2" : "1" ?>">
                    <?php if ($row['href'] != "") { ?>

                        <img src="<?php echo $row['img'] ?>" width="100%" class="img-fluid bgnhover" data-bs-toggle="modal" data-bs-target="#videopopup<?php echo $row['id'] ?>" class="rounded" width="100%" alt="exaque">

                        <div class="style02-01" data-bs-toggle="modal" data-bs-target="#videopopup<?php echo $row['id'] ?>"><i class="fab fa-red fa-3x fa-youtube"></i> </div>
                    <?php } else { ?>
                        <img src="<?php echo $row['img']; ?>" width="90%">
                    <?php } ?>
                </div>

                <?php if ($row['href'] != "") { ?>
                    <div class="modal fade modalVideo iframeYoutube" data-id="<?php echo $row['id'] ?>" id="videopopup<?php echo $row['id'] ?>" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <iframe class="iframeYoutube" id="youbt_<?php echo $row['id'] ?>" src="<?php echo $row['href'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    <?php $i++;
    } ?>

</section>





<section class="section bg-light">
    <div class="container my-3 ">

        <div class="row">
            <div class="col-12 ">
                <h3 class="fnText" <?php echo $custom['apLabel1']['attributes']; ?>><?php echo $custom['apLabel1']['content']; ?></h3>
            </div>
            <div class="col-12 ">
                <div class="fnRichtext" <?php echo $custom['apLabel2']['attributes']; ?>><?php echo $custom['apLabel1']['content']; ?></div>

            </div>
        </div>

    </div>


    <div class="container my-3 ">
        <div class="row">
            <?php foreach ($custom['apBenefit'] as $row) { ?>
                <div class="col-12 col-md-6 mb-4 ">
                    <h4 class="fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h4>
                    <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>
                </div>
            <?php } ?>

            <div class="col-12">
                <?php echo $custom['apBenefitBtn'] ?>
            </div>
        </div>

    </div>

</section>





<?php $r = $custom['apW2'][0]; ?>
<section class="section">
    <div class="container my-3 text-center">

        <div class="row">
            <div class="col-12 ">
                <h3 class="fnText " <?php echo $r['data']['h1']; ?>> <?php echo $r['h1']; ?></h3>
            </div>
            <div class="col-12 ">
                <div class="fnRichtext" <?php echo $r['data']['content']; ?>><?php echo $r['h1']; ?></div>

            </div>
            <div class="col-12">
                <a href="<?php echo $r['href']; ?>" class="btn btn-lg btn-primary"><?php echo $r['h3']; ?></a>
            </div>
            <div class="col-12">
                <?php echo $r['modal']; ?>
            </div>
        </div>
    </div>

</section>






<section class="section ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="mb-3">
                   Baca Artikel Blog Kami 
                </h4>
            </div>
            <?php 
             $q = $this->db->query("SELECT * FROM cms_content WHERE id_pages = 1627 order by input_date DESC limit 3"); 
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
                            <a href="<?php echo $r['href']; ?>" class="btn btn-outline-primary">Permohonan Demo</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</section>