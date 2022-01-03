<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Hero Start -->
<section class="d-table w-100 text-white" style="background: url('<?php echo $custom['faqBanner'][0]['img']; ?>');background-size: cover; padding:150px 0px 140px 0px">
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <div class="title-heading my-4 text-center">
                    <h1 class="heading my-3 fnText" <?php echo $custom['faqBanner'][0]['data']['h1']; ?>><?php echo $custom['faqBanner'][0]['h1']; ?></h1> 
                    <div class="mt-4 pt-2">
                        <?php echo $custom['faqBanner'][0]['modal']; ?>
                        <?php echo $core['content']['id'] ? $core['content']['edit'] : $core['content']['insert']; ?>
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
<!-- Start -->
<section class="section  ">
    <div class="container">
        <div class="row">


            <div class="col-lg-8 col-md-8 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0 mb-3">
                <!-- <div class="fnRichtext cms_content" <?php echo $core['content']['data']['content'] ?>><?php echo $core['content']['content'] ?> </div>

                <br><br>
               
                <div class="row">
                    <?php $i = 0;
                    foreach ($custom['fabContent'] as $row) {
                        $i++; ?>
                        <div class="col-4 mb-3">
                            <a href="<?php echo base_url() . strtolower(url_title($core['pages']['name'])); ?>#faq<?php echo url_title($row['id']) ?>" class="block-btn">
                                <div class="border rounded-sm shadow-sm">
                                    <div class="my-2">
                                    <div class="nozero">
                                        <span class="no "> <?php echo $i; ?></span>
                                    </div>
                                    </div>
                                    <div class="block-btn-text ">
                                        <?php echo $row['h1'] ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php   } ?>
                </div> -->


                <?php $i = 0;
                foreach ($custom['fabContent'] as $row) {
                    $i++; ?>

                    <div class="py-2" id="faq<?php echo $row['id']?>">
                    <br> &nbsp; &nbsp; <br> <br>
                    </div>

                    <div class="faqContent py-4" >
                        <div class="faqContentTitle "> 
                             <h3 class="py-3 " > <?php echo $i;?>  <span class="fnText" <?php echo $row['data']['h1'];?>> <?php echo $row['h1'];?> </span>  </h3>
                        </div>

                        <div class="py-4">
                            <div class="fnRichtext"  <?php echo $row['data']['content'];?>><?php echo $row['content']?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="sticky-bar bg-light    ">
                    <div class="px-3 pt-3">
                        <h4 class="fnText text-primary pb-2" <?php echo $custom['faqSub']['attributes']; ?>>  <?php echo $custom['faqSub']['content']; ?> </h4>
                    </div>


                    <?php $i = 0;
                    foreach ($custom['fabContent'] as $row) {
                        $i++; ?>
                        <div class="blocklist b<?php echo url_title($row['id']) ?>" >
                            <a class="anchor" data-id="<?php echo url_title($row['id']) ?>" href="<?php echo base_url() . strtolower(url_title($core['pages']['name'])); ?>#faq<?php echo url_title($row['id']) ?>"><?php echo $i.'. '.$row['h1'] ?></a>
                            <div class="arrow1">
                            </div>
                            <?php echo $row['modal']; ?>   
                        </div>
                    <?php } ?>


                </div>

               
            </div>
        </div>

    </div>

</section>