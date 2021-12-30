<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100 text-dark" style="background: url('<?php echo $custom['bannerPaket'][0]['img']; ?>');background-size: cover; background-position: -150px 50px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 offset-md-4 col-12 offset-sm-0">
                <div class="title-heading mt-4 text">
                    <h1 class="display-1 my-3 fnText" <?php echo $custom['bannerPaket'][0]['data']['h1']; ?>><?php echo $custom['bannerPaket'][0]['h1']; ?></h1> 
                    
                    <div>
                        <?php echo $custom['bannerPaket'][0]['modal']; ?>
                    </div>
                </div>
            </div>

        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>

<section class="section mt-4">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="fnText" <?php echo $core['content']['data']['name'] ?>><?php echo  $core['content']['name'] ?></div>
                <div class="fnRichtext" <?php echo $core['content']['data']['content'] ?>><?php echo  $core['content']['content'] ?></div>
            </div>
        </div>
    </div>

</section>


<?php
$i = 0;
foreach ($custom['paketWidget1'] as $row) {
    $i++;
?>
    <section class="section <?php echo $i % 2 == 1 ? "bg-light" : "" ?> ">
        <div class="container my-5">
            <div class="row align-items-center">
                <div class="col-md-6 col-12 order-1 order-lg-<?php echo $i % 2 == 1 ? "1" : "2" ?> text-center">
                    <img src="<?php echo $row['img'] ?>" class="img-fluid" alt="exaque">
                </div>
                <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 col-12 order-2 order-lg-<?php echo $i % 2 == 1 ? "2" : "1" ?>">
                    <div class="ms-lg-4">
                        <div class="section-title">
                            <h4 class="title mb-4 fnText" <?php echo $row['data']['h1'] ?>><?php echo $row['h1'] ?></h4>
                            <div class="text-muted fnText" <?php echo $row['data']['content'] ?>><?php echo $row['content'] ?></div>
                            <div> <?php echo $row['modal'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }


$r = $custom['paketWidget2Title'][0];
?>

<section class="section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12  ">
                <h1 class="fnText mb-4" <?php echo $r['data']['h1'] ?>><?php echo $r['h1'] ?></h1>
            </div>

            <div class="col-12">

                <ul class="ulwidget">
                    <?php
                    foreach ($custom['paketWidget2'] as $r) {
                    ?>
                        <li>
                            <div class="fnText mr-3" <?php echo $r['data']['content'] ?>><?php echo $r['content'] ?> </div>
                        </li>
                    <?php } ?>
                </ul>


            </div>

           

            <div class="col-12  text-center mt-4">
                <a href="<?php echo $r['href']; ?>" class="btn  btn-outline-primary"><?php echo $r['h4']; ?></a>
            </div> 
            <div class="col-12 text-center">
                <?php echo $r['modal']; ?>
            </div>
        </div>
    </div>
</section>