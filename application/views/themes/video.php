<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="section noBanner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php echo $core['content']['id'] ? $core['content']['edit'] : $core['content']['insert']; ?>
            </div>


            <?php
            $total = count($custom['library_video']);
            $max = 9;
            $i = 1;
            $getPages = $this->input->get("p");
            if (!$getPages || $getPages == 0) {
                $getPages = 1;
            }
            if ($getPages > ceil($total / $max)) {
                $getPages = ceil($total / $max);
            }



            $q = "SELECT * FROM cms_widget WHERE   section = 'library_video' order by sorting ASC limit   " . ($getPages - 1) * $max . ",9  ";


            $list = $this->db->query($q);
            foreach ($list->result_array() as $r) {
            ?>
                <div class="col-lg-4 col-12 mb-4 pb-2 ">
                    <div class="style01">
                        <img src="<?php echo $r['img'] ?>" data-bs-toggle="modal" data-bs-target="#videopopup<?php echo $r['id'] ?>" class="rounded" width="100%" alt="exaque">
                        <div class="lh-sm">
                            <a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#videopopup<?php echo $r['id'] ?>"><?php echo $r['h1'] ?></a>
                            <div class="style01-01" data-bs-toggle="modal" data-bs-target="#videopopup<?php echo $r['id'] ?>">
                                <img src="<?php echo base_url() ?>assets/icon/icons8-youtube-240.png" width="60">
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            } ?>

            <div class="col-12">
                <div>
                    <?php
                    //  echo ceil($total / $max);
                    //  echo 'max : ' . $max . ', total :  ' . $total;
                    $curr = $this->input->get('p');
                    if ($this->input->get('p') == "") {
                        $curr = 1;
                    }
                    ?>
                </div>
            </div>

            <!-- PAGINATION START -->
            <div class="col-12">
                <ul class="pagination justify-content-center mb-0">
                    <?php if ($curr > 1) { ?>
                        <li class="page-item"><a class="page-link" href="<?php echo  $curr < 2 ? "javascript:void(0)" : base_url(); ?>video?p=<?php echo  $curr - 1; ?>" aria-label="Previous">Sebelumnya</a></li>
                    <?php } else {
                    ?>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Sebelumnya</a></li>
                    <?php

                    } ?>
                    <?php for ($i = 1; $i <= ceil($total / $max); $i++) { ?>
                        <li class="page-item <?php echo $curr == $i ? "active" : "" ?>"><a class="page-link" href="<?php echo base_url(); ?>video?p=<?php echo $i; ?>"> <?php echo $i; ?> </a></li>
                    <?php } ?>

                    <?php if ($this->input->get('p') < ceil($total / $max)) { ?>
                        <li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>video?p=<?php echo  $curr + 1; ?>" aria-label="Next">Berikutnya</a></li>
                    <?php } else {
                    ?>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Berikutnya</a></li>

                    <?php
                    } ?>
                </ul>
            </div>
            <!--end col-->
            <!-- PAGINATION END -->

            <?php foreach ($custom['library_video'] as $r) { ?>
                <div class="modal fade modalVideo iframeYoutube" data-id="<?php echo $r['id'] ?>" id="videopopup<?php echo $r['id'] ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <iframe class="iframeYoutube" id="youbt_<?php echo $r['id'] ?>" src="<?php echo $r['href'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="col-12 text-center">
                <?php echo $custom['library_video_action']; ?>
            </div>

        </div>
    </div>
</section>