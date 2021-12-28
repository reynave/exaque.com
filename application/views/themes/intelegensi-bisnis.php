<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="section noBanner ">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-5 fnText display-1" <?php echo $core['content']['data']['name']; ?>><?php echo $core['content']['name']; ?></h1> 
                <div class="cms_content fnRichtext" <?php echo $core['content']['data']['h1']; ?>><?php echo $core['content']['h1']; ?></div> 
            </div>

            <div class="col-md-10 col-12">
                <div class="cms_content fnRichtext" <?php echo $core['content']['data']['content']; ?>><?php echo $core['content']['content']; ?></div>
            </div>
            <div class="col-md-2 col-12">
                <img src="<?php echo $core['content']['img']; ?>" width="100%" alt="exaque - <?php echo $core['content']['name']; ?>">
            </div>

            <div class="col-12">
                <div class="cms_content fnRichtext" <?php echo $core['content']['data']['h2']; ?>><?php echo $core['content']['h2']; ?></div> 
            </div>

            <div class="col-12">
                <?php echo $core['content']['id'] ? $core['content']['edit'] : $core['content']['insert']; ?>
            </div>
        </div>
    </div>
</section>

<section class="section py-3 bg-dark text-white">
    <?php
    $row = $custom['BIWidget1'][0];
    ?>
    <div class="container my-5">
        <div class="row align-items-center text-center">

            <div class="  mt-4 pt-2 mt-sm-0 pt-sm-0 col-12 order-2 ">
                <div class="ms-lg-4">
                    <div class="section-title">
                        <h2 class=" mb-4 fnText" <?php echo $row['data']['h1'] ?>><?php echo $row['h1'] ?></h2>
                        <div class="text-muted fnRichtext" <?php echo $row['data']['content'] ?>><?php echo $row['content'] ?></div>
                        <a href="<?php echo $row['href'] ?>" class="btn btn-light mt-3"><?php echo $row['h4']; ?></a>
                        <div> <?php echo $row['modal'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>