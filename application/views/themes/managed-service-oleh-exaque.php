<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style>
    .title-heading h1, h3{
        text-shadow: 1px 1px 3px #fff;
    }
</style>
<section class="d-table w-100 bg-home d-flex align-items-center" style="background: url('<?php echo $custom['managedBanner'][0]['img']; ?>') center center; height: auto; background-size: cover; padding:150px 0px 100px 0px" >

    <div class="container">
        <div class="row ">
        <div class="col-md-9 mt-0  pt-0  ">
                <div class="ms-lg-4">
                    <div class="title-heading mt-5">
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

<!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>

 
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
                            <a href="<?php echo $a['href'] ?>" class="btn btn-outline-primary"> Pelajari lebih lanjut sekarang!</a>
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
    <div class="container  ">
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
            <div class="col-6 my-1">
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
<section class="section bg-light">
    <div class="container  py-3">
        <div class="row align-items-center">
            <div class="col-md-6 col-12">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <h1 class="mb-4 fnText" <?php echo $a['data']['h1'] ?>><?php echo $a['h1'] ?></h1> 
                        <h3 class="fnText" <?php echo $a['data']['h2'] ?>><?php echo $a['h2']; ?></h3> 
                        <div>
                        <?php echo $a['modal']?>
                        </div>
                        <a href="<?php echo $a['href']?>" class="btn btn-outline-primary" ><?php echo $a['h2']?></a>
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
 