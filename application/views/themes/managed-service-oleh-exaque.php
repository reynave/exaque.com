<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="bg-half-170 d-table w-100 bg-home d-flex align-items-center" style="background: url('<?php echo $custom['managedBanner'][0]['img']; ?>') center center; height: auto; background-size: cover;" id="home">
  
    <div class="container">
        <div class="row ">
        <div class="col-md-9 mt-0  pt-0  ">
                <div class="ms-lg-4">
                    <div class="title-heading margin-top-100">
                        <h1 class="penghitung-4 fw-bold mb-3 fnText" <?php echo $custom['managedBanner'][0]['data']['h1']; ?>> <?php echo $custom['managedBanner'][0]['h1']; ?></h1>
                        <h3 class="fnText" <?php echo $custom['managedBanner'][0]['data']['content']; ?>> <?php echo $custom['managedBanner'][0]['content']; ?></h3>
                        <?php echo $custom['managedBanner'][0]['modal']; ?>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>

<?php $a = $custom['mw0'][0];?>
<section class="section  mb-5">
    <div class="container  my-3 py-2 ">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="ms-lg-4 bg-light p-5" style="background: url('<?php echo $a['img'] ?>') top center no-repeat; background-size: cover;">
                    <div class="section-title">
                        <h1 class=" fnText" <?php echo $a['data']['h1'] ?>><?php echo $a['h1'] ?></h1> 
                        <h4 class="fnRichtext" <?php echo $a['data']['h2'] ?>><?php echo $a['h2'] ?></h4>
                        <div class="mt-4">
                            <a href="<?php echo $a['h4'] ?>" class="btn btn-outline-primary"> Pelajari lebih lanjut sekarang!</a>
                        </div>
                        <div> <?php echo $a['modal']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="section  mb-5">
    <div class="container my-3 py-2 ">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <h1 class="title mb-4 fnText" <?php echo $core['content']['data']['name'] ?>><?php echo $core['content']['name'] ?></h1> 
                        <div class="text-muted fnRichtext" <?php echo $core['content']['data']['content'] ?>><?php echo $core['content']['content'] ?></div>
                        <div> <?php echo $core['content']['id'] ?  $core['content']['edit'] : $core['content']['insert']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<?php $a = $custom['mw1'][0];?>
<section class="section bg-light mb-5">
    <div class="container my-3   ">
        <div class="row align-items-center">
            <div class="col-md-6 col-12">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <h1 class="title mb-4 fnText" <?php echo $a['data']['h1'] ?>><?php echo $a['h1'] ?></h1> 
                        <div class="text-muted fnRichtext" <?php echo $a['data']['content'] ?>><?php echo $a['content']; ?></div> 
                        <?php echo $a['modal']?>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <img src="<?php echo $a['img'] ?>" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container my-3  py-5 ">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <h1 class="title mb-4 fnText" <?php echo $custom['mT1']['attributes'] ?>><?php echo $custom['mT1']['content'] ?></h1> 
                        <div class="text-muted fnRichtext" <?php echo $custom['mT2']['attributes'] ?>><?php echo $custom['mT2']['content'] ?></div> 
                    </div>
                </div>
            </div>

        </div>


        <div class="row">

            <?php   foreach($custom['mw3'] as $row){ ?>
            <div class="col-6 my-3">
                <div class="ms-lg-4">
                    <div class="row">
                        <div class="col-12 col-md-3"><img src="<?php echo $row['img']?>" width="100%"></div>
                        <div class="col-12 col-md-9">
                            <h4 class="fnText" <?php echo $row['data']['h1']?>><?php echo $row['h1']?></h4>
                            <div class="fnRichtext" <?php echo $row['data']['content']?>><?php echo $row['content']?></div>
                        </div>
                        <div class="col-12">
                            <?php echo $row['modal']?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>  
        </div>
    </div>
</section>



<?php $a = $custom['mw4'][0];?>
<section class="section  mb-5">
    <div class="container my-3 py-5 bg-light ">
        <div class="row align-items-center">
            <div class="col-md-6 col-12">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <h1 class="mb-4 fnText" <?php echo $a['data']['h1'] ?>><?php echo $a['h1'] ?></h1> 
                        <h3 class="fnText" <?php echo $a['data']['h2'] ?>><?php echo $a['h2']; ?></h3> 
                        <div>
                        <?php echo $a['modal']?>
                        </div>
                        <a href="<?php echo $a['h2']?>" class="btn btn-outline-primary" ><?php echo $a['h2']?></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="ms-lg-4">
                    <div class="text-right">
                        <img src="<?php echo $a['img'] ?>" width="80%">
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
                            <a href="<?php echo $r['h4']; ?>" class="btn btn-sm btn-primary">Permohonan Demo</a>
                        </div>

                    </div>
                <?php } ?>
            </div>

        </div>
    </div>

</section>