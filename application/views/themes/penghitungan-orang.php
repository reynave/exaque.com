<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('<?php echo $custom['poBanner'][0]['img']; ?>');">
  
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading title-heading">
                    <h1 class="text-white title-dark fnText" <?php echo $custom['poBanner'][0]['data']['h1']; ?>> <?php echo $custom['poBanner'][0]['h1']; ?> </h1>
                    <h3 class="fnText text-white" <?php echo $custom['poBanner'][0]['data']['content']; ?>> <?php echo $custom['poBanner'][0]['content']; ?></h3>
                    <?php echo $custom['poBanner'][0]['modal']; ?>
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
    <div class="container my-3 ">

        <div class="row">
            <div class="col-md-7 col-12">
                <h1 class="fnText" <?php echo $core['content']['data']['name']; ?>><?php echo $core['content']['name']; ?></h1>
                <h4 class="fnRichtext" <?php echo $core['content']['data']['content']; ?>><?php echo $core['content']['content']; ?></h4>
                <?php echo !$core['content']['id'] ? $core['content']['insert'] : $core['content']['edit']; ?>
            </div>

            <div class="col-md-5 col-12">
                <img src="<?php echo $core['content']['img']; ?>" width="100%" alt="Exaque <?php echo $core['content']['name']; ?>">
            </div>
        </div>
    </div>

</section>




<section class="section">

    <div class="container my-3 ">

        <div class="row">
            <div class="col-12 text-center">
                <h3 class="fnText" <?php echo $custom['poW1Title']['attributes'] ?>><?php echo $custom['poW1Title']['content'] ?></h3>
            </div>


            <?php foreach ($custom['poW1'] as $row) { ?>
                <div class="col-md-4 col-12">
                    <div class="my-2">
                        <img src="<?php echo $row['img']; ?>" width="100%">
                    </div>
                    <h5 class="fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h5>
                    <div class="fnRichtext" <?php echo $row['data']['h2']; ?>><?php echo $row['h2']; ?></div>
                    <div>
                        <?php echo $row['modal']; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</section>

<?php $row = $custom['poDark1'][0];?>
<section class="section bg-dark text-white">

    <div class="container my-3 "> 
        <div class="row">  
            <h5 class="fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h5>
            <div class="fnRichtext" <?php echo $row['data']['h2']; ?>><?php echo $row['h2']; ?></div> 
        </div>
    </div>

</section>



<section class="section">
    <?php
    $i = 0;
    foreach ($custom['poW2'] as $row) { ?>
        <div class="container my-5 ">

            <div class="row">
                <div class="col-12 col-md-6 text-center ">
                    <img src="<?php echo $row['img']; ?>" width="100%">
                </div>
                <div class="col-12 col-md-6 ">
                    <h5 class="fnText" <?php echo $row['data']['h1']; ?>><?php echo $row['h1']; ?></h5>

                    <div class="fnRichtext" <?php echo $row['data']['content']; ?>><?php echo $row['content']; ?></div>


                    <div class="my-3">
                        <a href="<?php echo $row['href']; ?>" class="btn btn-sm btn-primary"><?php echo $row['h3']; ?></a>
                    </div>

                    <div>
                        <?php echo $row['modal']; ?>
                    </div>
                </div>


            </div>
        </div>
    <?php $i++;
    } ?>

</section>