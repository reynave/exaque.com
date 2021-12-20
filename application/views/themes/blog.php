<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<style>
.card-title{
    font-size: 16px;
 
}


</style>
<!--Blog Lists Start-->
<section class="section noBanner ">
    <div class="container">
        <div class="row">
            <!-- Blog Post Start -->
            <div class="col-lg-8 col-12">

                <?php if ($core['table'] != 'cms_content') { ?>
                    <div class="row">
                        <?php
                        

                        $pages = "  ";
                        $q =   $this->db->query("SELECT id FROM cms_pages WHERE id_pages = ".$core['pages']['id']." order by sorting ASC");
                        $i=1;
                        foreach ($q->result_array() as $rec) {
                            $pages .= $i>1 ? " or id_pages = ".$rec['id']: " id_pages = ".$rec['id'];
                            $i++;
                        }
                        
                        
                        $list =  $core['pages']['id'] == "11627" ? $this->db->query("SELECT * FROM cms_content WHERE presence = 1 and  (".$pages.") order by  input_date DESC limit 20 ") : $this->db->query("SELECT * FROM cms_content WHERE presence = 1 and  id_pages = ".$core['pages']['id']." order by  input_date DESC   ");
                        foreach ($list->result_array() as $row) { 
                            $status = $row['status'];
                            if( $core['login'] == true ) $status=1;

                                if($status == 1){
                                ?>
                                <div class="col-lg-6 col-md-12 mb-4 pb-2">
                                    <div class="card blog rounded border-0 shadow">
                                        <div class="position-relative">
                                            <img src="<?php echo $row['img'];?>" class="card-img-top rounded-top" alt="exaque - <?php echo $row['name'];?>">
                                            <div class="overlay rounded-top"></div>
                                        </div>
                                        <div class="card-body content">
                                            <?php echo  $core['login'] ?  " Status : ".$row['status']:"";?>
                                            <h5><a href="<?php echo base_url().$row['url'];?>" class="card-title title text-dark"><?php echo $row['name'];?></a></h5>
                                            <div class="post-meta d-flex justify-content-between mt-3"> 
                                                <a href="<?php echo base_url().$row['url'];?>" class="text-muted readmore">Baca selengkapnya <i class="uil uil-angle-right-b align-middle"></i></a>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div> 
                              
                        <?php }
                        } ?>



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
                                <li class="list-inline-item user me-2"><a href="javascript:void(0)" class="text-muted"><i class="uil uil-user text-dark"></i> Exaque</a></li>
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
                <div class="card border-0 sidebar sticky-bar rounded shadow">
                    <div class="card-body">


                        <div class="widget">

                            <h5 class="widget-title">Categories</h5>
                            <ul class="list-unstyled mt-4 mb-0 blog-categories">

                                <?php
                                $pages = "  ";
                                $q =   $this->db->query("SELECT * FROM cms_pages WHERE id_pages = 11627 order by sorting ASC");
                                $i=1;
                                foreach ($q->result_array() as $rec) {
                                    $pages .= $i>1 ? " or id_pages = ".$rec['id']: " id_pages = ".$rec['id'];
                                ?>
                                    <li>
                                        <a href="<?php echo base_url() . $rec['url']; ?>" ><?php echo $rec['name']; ?></a>
                                        <span class="float-end"><?php echo $this->core->select("count(id)","cms_content","presence = 1 and status = 1 and id_pages = ".$rec['id']) ?></span>
                                    </li>
                                <?php
                            $i++;
                            } ?>


                            </ul>
                        </div>
                        <div class="mt-3">
                            <?php //echo $core['content']['insert'];   ?>
                        </div>

                        <div class="widget mt-4">
                            <span class="bg-light d-block py-2 rounded shadow text-center h6 mb-0">
                                Artikel Terbaru
                            </span>
                            <div class="mt-4">
                                <?php
                                $q =   $this->db->query("SELECT * FROM cms_content WHERE presence = 1 and  (".$pages.") order by  input_date DESC limit 3 ");

                                foreach ($q->result_array() as $rec) {
                                ?>
                                     <div class="d-flex align-items-center">
                                        <!-- <img src="<?php echo $rec['img']; ?>" class="avatar avatar-small rounded" style="width: auto;" alt=""> -->
                                        <div class="flex-1 ms-3 mb-3 small-news">
                                            <a href="<?php echo base_url() . $rec['url']; ?>" class="d-block title text-dark"><?php echo $rec['name']; ?></a>
                                            <div><small class="text-muted">15th April 2021</small></div>
                                        </div>
                                    </div> 
                                    
                                <?php } ?> 
                            </div>
                        </div>
                    </div>
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