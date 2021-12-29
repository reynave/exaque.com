<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="bg-light">
    
<section class="section noBanner wrapper-sm ">
    <?php $row = $core['content']; ?>
    <div class="container my-2">
        <div class="row ">
            <div class="col-12">
                <h1 class="fnText" <?php echo $row['data']['name'] ?>>
                    <?php echo $row['name'] ?>
                </h1>
            </div>
            <div class="col-12">
                <h4 class="fnText" <?php echo $row['data']['h1'] ?>><?php echo $row['h1'] ?></h4>
            </div>
            <div class="col-lg-8 col-12">
                <div class="text-muted fnRichtext" <?php echo $row['data']['content'] ?>><?php echo $row['content'] ?></div>
                <div> <?php echo !$row['id'] ? $row['insert'] : $row['edit']; ?></div>
            </div>
            <div class="col-lg-4 col-12">
                <img src="<?php echo $row['img'] ?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>

</div>
<section class="section  mt-3 ">
    <?php $row = $custom['tiketW1'][0]; ?>

    <div class="wrapper-sm">

        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <h4 class="display-5 fnText mb-3" <?php echo $row['data']['h1'] ?>><?php echo $row['h1']; ?></h4>
                    <h5 class="fnText" <?php echo $row['data']['h2'] ?>><?php echo $row['h2']; ?></h5>
                </div>

                <div class="col-12">
                    <img src="<?php echo $row['img']; ?>" width="100%">

                    <?php echo $row['modal'];?>
                </div>
            </div>
        </div>
    </div>
</section>