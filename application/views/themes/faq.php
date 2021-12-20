<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Start -->
<section class="section noBanner">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
                <div class="sticky-bar bg-light rounded shadow border">
                    <div class="px-3 pt-3">
                        <b>FAQ</b>
                    </div>
                    <ul class="list-unstyled sidebar-nav mb-0 py-2" id="navmenu-nav">
                        <?php foreach ($core['content']['list'] as $row) { ?>
                            <li class="navbar-item"><a href="<?php echo $row['href'] ?>" class="navbar-link"><?php echo $row['name'] ?></a></li>
                        <?php } ?>
                    </ul>
                    <?php echo $core['content']['insert']; ?>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="row row-cols-1 ms-lg-2">
                    <div class="col" id="typography">
                        <div class="component-wrapper rounded shadow ">
                            <div class="p-3">
                                <small><b>Title for SEO</b></small>
                                <div class="fnText form-control"><?php echo $core['content']['name'] ?></div>
                                <small><b>Description for SEO</b></small>
                                <div class="fnText form-control" <?php echo $core['content']['data']['content'] ?>><?php echo $core['content']['content'] ?> </div>
                            </div>


                            <?php foreach ($core['content']['subcontent'] as $row) { ?>
                                <div class="p-3 mb-2 ">
                                   <div> <small>ID <?php echo $row['id'] ?></small></div>
                                    <small> Question:</small>
                                    <div class="fnText  form-control"  <?php echo $row['data']['h1'] ?>> <?php echo $row['h1'] ?> </div>
                                 
                                    <small> Answer:</small>
                                    <div class="fnRichtext  form-control" <?php echo $row['data']['content'] ?>>  <?php echo $row['content'] ?>  </div>

                                   <div>
                                    <?php echo $row['action'] ?>
                                   </div>
                                </div> 
                            <?php } ?>



                            <div class="px-3">
                                <?php echo $core['content']['subcontent_action']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>