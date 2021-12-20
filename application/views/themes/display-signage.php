<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="bg-half-170 d-table w-100 bg-home d-flex align-items-center" style="background: url('<?php echo $custom['displayBanner'][0]['img']; ?>') center center; height: auto;background-size: cover;" id="home">
   
   <div class="container text-white">
       <div class="row ">
       <div class="col-md-9 mt-0  pt-0  ">
               <div class="ms-lg-4">
                   <div class="title-heading margin-top-100">
                       <h1 class="display-4 fw-bold mb-3 fnText" <?php echo $custom['displayBanner'][0]['data']['h1']; ?>> <?php echo $custom['displayBanner'][0]['h1']; ?></h1>
                       <h3 class="fnText" <?php echo $custom['displayBanner'][0]['data']['content']; ?>> <?php echo $custom['displayBanner'][0]['content']; ?></h3>
                       <?php echo $custom['displayBanner'][0]['modal']; ?> 
                   </div>
               </div>
           </div>
           <!--end col-->
       </div>
       <!--end row-->
   </div>
   <!--end container-->
</section>



<?php $row = $custom['displayHeader'][0];  ?>
<section class="section bg-light">
    <div class="container my-3 py-2">
        <div class="row " > 
            <div class="col-12">
                <div class="ms-lg-4"> 
                    <div class="section-title">
                        <h4 class="title mb-4 fnText" <?php echo $row['data']['h1'] ?> ><?php echo $row['h1'] ?></h4>
                        <p class="text-muted fnText" <?php echo $row['data']['content'] ?>><?php echo $row['content'] ?></p> 
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>



<?php
$i = 0;
foreach ($custom['displayW1'] as $row) {
    $i++;
?>
    <section class="section ">
        <div class="container my-3 py-5">
            <div class="row align-items-center" >
              
                <div class="col-md-<?php echo $row['img'] == "https://dummyimage.com/300x200/eee/000&text=add_images" ? "12":"6";?> mt-4 pt-2 mt-sm-0 pt-sm-0 col-12">
                    <div class="ms-lg-4">

                        <div class="section-title">
                            <h4 class="title mb-4 fnText" <?php echo $row['data']['h1'] ?>><?php echo $row['h1'] ?></h4> 
                            <div class="text-muted fnRichtext" <?php echo $row['data']['content'] ?>><?php echo $row['content'] ?></div> 
                            <div> <?php echo $row['modal'] ?></div>
                        </div>
                    </div>
                </div>
                <?php if( $row['img'] != "https://dummyimage.com/300x200/eee/000&text=add_images"){ ?>
                <div class="text-center col-md-6 col-12 order-1" >
                    <img src="<?php echo $row['img'] ?>" class="img-fluid" width="90%" alt="exaque">
                </div>
                <?php } ?>
            </div>
        </div>

    </section>

<?php } ?>

<section class="section bg-primary text-white ">
    <div class="container my-3 py-5 ">
        <div class="row align-items-center" > 
            <div class="col-12 text-center">
                <div class="ms-lg-4"> 
                    <div class="section-title">
                        <h4 class="title mb-4 fnText" <?php echo $core['content']['data']['name'] ?>><?php echo $core['content']['name'] ?></h4>
                        <div class="text-muted fnRichtext text-white" <?php echo $core['content']['data']['content'] ?>><?php echo $core['content']['content'] ?></div> 

                        <div class="mt-3">
                            <a href="<?php echo $row['h4'] ?>" class="btn btn-light text-right"> Ingin tahu lebih banyak? Hubungi kami!</a>
                        </div>
                        <div> <?php echo $core['content']['id'] ?  $core['content']['edit'] : $core['content']['insert']; ?></div>
                    </div>
                </div>
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
                <?php foreach ($custom['displayFooter'] as $r) { ?>
                    <div class="row"> 
                        <div class="col-12 col-md-8">
                            <h2 class="fnText text-primary" <?php echo $r['data']['h1']; ?>><?php echo $r['h1']; ?></h2>
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