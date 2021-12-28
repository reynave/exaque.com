<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="section noBanner ">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-5 fnText display-1" <?php echo $core['content']['data']['name']; ?>><?php echo $core['content']['name']; ?></h1>
                <div class="cms_content fnRichtext" <?php echo $core['content']['data']['content']; ?>><?php echo $core['content']['content']; ?></div>
                <?php echo $core['content']['id'] ? $core['content']['edit'] : $core['content']['insert']; ?>
            </div>
        </div>
    </div>
</section>


<?php
$i = 0;
foreach ($custom['solusiPonselWidget1'] as $row) {
    $i++;
?>
    <section class="section <?php echo $i % 2 == 1 ? "bg-light" : "" ?> "> 
        <div class="container ">
            <div class="row align-items-center">
                <?php
                $col6 = '';
                if ($row['img'] != "https://dummyimage.com/300x200/eee/000&text=add_images") {
                    $col6 = 'col-md-6'; ?>
                    <div class="col-md-6 col-12 order-1 order-lg-<?php echo $i % 2 == 1 ? "1" : "2" ?> text-center">
                        <img src="<?php echo $row['img'] ?>" class="img-fluid" alt="exaque">
                    </div>
                <?php } ?>
                <div class=" <?php echo  $col6; ?> mt-4 pt-2 mt-sm-0 pt-sm-0 col-12 order-2 order-lg-<?php echo $i % 2 == 1 ? "2" : "1" ?>">
                    <div class="ms-lg-4">
                        <div class="section-title">
                            <h4 class="title mb-4 fnText" <?php echo $row['data']['h1'] ?>><?php echo $row['h1'] ?></h4>
                            <div class="text-muted fnRichtext" <?php echo $row['data']['content'] ?>><?php echo $row['content'] ?></div>
                            <div> <?php echo $row['modal'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
<?php } ?>

<section class="section py-3 bg-dark text-white">
    <?php
    $row = $custom['solusiPonselWidget2'][0];
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