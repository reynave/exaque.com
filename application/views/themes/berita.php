<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!--Blog Lists Start-->
<section class="section  noBanner">
    <div class="container">
        <div class="row">
            <!-- Blog Post Start -->
            <div class="col-lg-8 col-12">

                <?php if ($core['table'] != 'cms_content') { ?>
                    <div class="row">
                        <?php

                        if ($this->input->get('year')) {

                            $tt  = $this->db->query(" select * 
    FROM cms_content  
    WHERE id_pages = 11648 and YEAR(input_date) = " . $this->input->get('year') . " 
    and status = 1 and presence =1
    order by  input_date   DESC
    ");
                            $total = count($tt->result_array());
                        } else {

                            $tt  = $this->db->query(" select * 
    FROM cms_content  
    WHERE id_pages = 11648
    and status = 1 and presence =1
    order by  input_date   DESC
    ");
                            $total = count($tt->result_array());
                        }
                        $max = 6;
                        $i = 1;
                        $getPages = $this->input->get("p");
                        if (!$getPages || $getPages == 0) {
                            $getPages = 1;
                        }
                        if ($getPages > ceil($total / $max)) {
                            $getPages = ceil($total / $max);
                        }

                        $curr = $this->input->get('p');
                        if ($this->input->get('p') == "") {
                            $curr = 1;
                        }
                        if ($this->input->get('year')) {
                            $list  = $this->db->query("SELECT *,  CONCAT('" . base_url() . "',url) AS 'href',  DATE_FORMAT(input_date, '%d %b  %Y')  as 'date'
                            FROM cms_content  
                            WHERE id_pages = 11648 and YEAR(input_date) = " . $this->input->get('year') . " 
                            and status = 1 and presence =1
                            order by  input_date   DESC
                            ");
                            $list = $list->result_array();
                        } else {
                            $list =  $this->db->query("SELECT *,  CONCAT('" . base_url() . "',url) AS 'href',  DATE_FORMAT(input_date, '%d %b  %Y')  as 'date'
                            FROM cms_content  
                            WHERE id_pages = 11648
                            and status = 1 and presence =1
                            order by  input_date DESC limit  " . ($getPages - 1) * $max . ", $max
                            ");
                            $list = $list->result_array();
                        }


                        foreach ($list as $row) {
                            $status = $row['status'];
                            if ($core['login'] == true) $status = 1;
                            if ($status == 1) {
                        ?>
                                <div class="col-12 mb-4 pb-2">
                                    <div class="card blog rounded border-0 shadow overflow-hidden">
                                        <div class="row align-items-center g-0">
                                            <div class="col-md-5">
                                                <img src="<?php echo $row['img'] ?>" width="100%" class="img-fluid" alt="Exaque <?php echo $row['img'] ?>">
                                            </div>

                                            <div class="col-md-7">
                                                <div class=" px-3 content">
                                                   
                                                    <ul class="list-unstyled d-flex justify-content-between mt-4"> 
                                                        <li class="list-inline-item date text-muted"><i class="uil uil-calendar-alt text-dark"></i> <?php echo $row['date'] ?></li>
                                                    </ul>
                                                    <h5><a href="<?php echo $row['href'] ?>" class="card-title title text-dark"><?php echo $row['name'] ?></a></h5>
                                                    <p class="text-muted mb-0"><?php echo $this->core->substrwords(strip_tags($row['content']), 155); ?></p>
                                                    <div class="post-meta d-flex justify-content-between mt-3">
                                                        <a href="<?php echo $row['href'] ?>" class="text-muted readmore">Baca selengkapnya <i class="uil uil-angle-right-b align-middle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>



                        <!-- PAGINATION START -->
                        <div class="col-12">
                            
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item"><a class="page-link" href="<?php echo  $curr < 2 ? "javascript:void(0)" : base_url(); ?>berita?p=<?php echo  $curr - 1; ?>" aria-label="Previous">Sebelumnya</a></li>

                                <?php for ($i = 1; $i <= ceil($total / $max); $i++) { ?>
                                    <li class="page-item <?php echo $curr == $i ? "active" : "" ?>"><a class="page-link" href="<?php echo base_url(); ?>berita?p=<?php echo $i; ?>"> <?php echo $i; ?> </a></li>
                                <?php } ?>

                                <li class="page-item"><a class="page-link" href="<?php echo  $curr >= ceil($total / $max) ? "javascript:void(0)" : base_url(); ?>berita?p=<?php echo  $curr + 1; ?>" aria-label="Next">Berikutnya</a></li>
                            </ul>
                        </div>
                        <!--end col-->
                        <!-- PAGINATION END -->
                    </div>


                <?php } else { ?>


                    <div class="card blog blog-detail border-0 shadow rounded">
                        <img src="<?php echo $core['content']['img'] ?>" class="img-fluid rounded-top" width="100%" alt="">

                        <div class="row">
                            <div class="col-12">
                                <div class="p-2">
                                    <small>Admin Only</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <select class="form-control fnUpdate" data-id='<?php echo $core['content']['id']; ?>' data-table='cms_content' data-column='status' id="status-<?php echo $core['content']['id']; ?>">
                                    <option value="0" <?php echo $core['content']['status'] == 0 ? "selected" : "" ?>>Disable</option>
                                    <option value="1" <?php echo $core['content']['status'] == 1 ? "selected" : "" ?>>Enable</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <input type="date" class="form-control fnUpdate" data-id='<?php echo $core['content']['id']; ?>' data-table='cms_content' data-column='input_date' value="<?php echo $core['content']['input_date'] ?>" id="date-<?php echo $core['content']['id']; ?>">
                            </div>

                        </div>

                        <div class="card-body content">
                            <ul class="list-unstyled d-flex justify-content-between mt-4">

                                <li class="list-inline-item date text-muted"><i class="uil uil-calendar-alt text-dark"></i> <?php echo date("d M Y", strtotime($core['content']['input_date'])) ?></li>
                            </ul>
                            <h1 class="h1Title"> <a href="javscript:void(0)" class="text-primary"><?php echo $core['content']['name'] ?></a></h1>
                            <div class="cms text-muted mt-3 fnRichtext" <?php echo $core['content']['data']['content'] ?>>
                                <?php echo $core['content']['content'] ?>
                            </div>
                            <?php echo $core['content']['edit']; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!--end col-->
            <!-- Blog Post End -->

            <!-- START SIDEBAR -->
            <div class="col-lg-4 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                <div class=" sticky-bar bg-light ">
                    <div class="px-3 pt-3"> Berita </div>

                    <div class="mt-4">
                        <?php
                        $q =   $this->db->query("SELECT 
                            YEAR(input_date) AS 'year', COUNT(id) AS 'total'
                            FROM cms_content  
                            WHERE id_pages = 11648 and YEAR(input_date) > 2015
                            GROUP BY YEAR(input_date)
                            ORDER BY  YEAR(input_date) DESC 
                        ");

                        foreach ($q->result_array() as $rec) {
                        ?>
                            <div class="blocklist <?php echo $this->input->get('year') == $rec['year'] ? "active" : "" ?>">
                                <a href="<?php echo base_url() . 'berita?year=' . $rec['year']; ?>" class="d-block title text-dark"><?php echo $rec['year']; ?></a>
                                <div class="arrow1">
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
                <div class="mt-3">
                    <?php echo $core['content']['insert']; ?>
                </div>
            </div>


            <!--end col-->
            <!-- END SIDEBAR -->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section -->
<!--Blog Lists End-->