<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Hero End -->
<?php if ($core['table'] == 'cms_content') { ?>

    <style>
        .bg-half-170 {
            padding: 48px 0;
        }
    </style>
    <!-- Hero Start -->
    <section class="bg-half-170 bg-light d-table w-100">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading">

                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb bg-white rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() . url_title($core['pages']['name']); ?>"><?php echo $core['pages']['name']; ?></a></li>
                        <li class="breadcrumb-item"><a href="#"><?php echo $core['content']['h1']; ?></a></li>
                        <li class="breadcrumb-item"><a href="#"><?php echo $core['content']['name']; ?></a></li>
                    </ul>
                </nav>
            </div>
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

    <section class="section  wrapper-sm mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">


                </div>
                <div class="col-md-8 col-12 order-2 order-md-1">

                    <h1 class="fnText h1Title"> <?php echo $core['content']['name']; ?> </h1>
                    <div>
                        <?php echo $core['content']['edit']; ?>
                    </div>
                    <div><small>Description this project</small></div>
                    <div class="fnRichtext cms_content" <?php echo $core['content']['data']['content']; ?>> <?php echo $core['content']['content']; ?> </div>

                </div>
                <div class="col-md-4 col-12 order-1 order-md-2">
                    <div class="border shadow rounded p-3">
                        <div>
                            Porject Info
                        </div>
                        <hr>
                        <div class="mb-3">
                            <img src="<?php echo $core['content']['img'] ?>" alt="<?php echo $core['content']['name']; ?>" width="100%">
                        </div>
                        <div class="mb-3">
                            <b>Client</b> <span class="fnText px-1 <?php echo $core['login'] == true ? "form-control" : ""; ?>" <?php echo $core['content']['data']['h2'] ?>> <?php echo $core['content']['h2'] ?></span>
                        </div>
                        <div class="mb-3">
                            <b>Category</b><span class="fnText px-1 <?php echo $core['login'] == true ? "form-control" : ""; ?>" <?php echo $core['content']['data']['h1'] ?>> <?php echo $core['content']['h1'] ?></span>
                        </div>
                        <div class="mb-3">
                            <b>Date</b> <span class="fnText px-1 <?php echo $core['login'] == true ? "form-control" : ""; ?>" <?php echo $core['content']['data']['h5'] ?>> <?php echo $core['content']['h5'] ?></span>
                        </div>
                        <div class="mb-3">
                            <b>Website</b> <span class="fnText px-1 <?php echo $core['login'] == true ? "form-control" : ""; ?>" <?php echo $core['content']['data']['h3'] ?>> <?php echo $core['content']['h3'] ?></span>
                        </div>
                        <div class="mb-3">
                            <b>Location</b> <span class="fnText px-1 <?php echo $core['login'] == true ? "form-control" : ""; ?>" <?php echo $core['content']['data']['h4'] ?>> <?php echo $core['content']['h4'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } else {  ?>

    <section class="section noBanner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 filters-group-wrap">
                    <div class="filters-group">
                        <ul class="container-filter list-inline mb-0 filter-options text-center">
                            <li class="list-inline-item categories-name border text-dark rounded active" data-group="all">All</li>

                            <?php
                            $q =   $this->db->query("SELECT h1, COUNT(h1) AS 'total' 
                            FROM cms_content 
                            WHERE id_pages = ".$core['pages']['id']." AND  h1 != ''  and presence = 1 and status = 1
                            GROUP BY h1
                            ORDER BY h1 ASC
                            ");
                            $i = 1;
                            foreach ($q->result_array() as $rec) {
                            ?>
                                <li class="list-inline-item categories-name border text-dark rounded" data-group="<?php echo url_title($rec['h1'])?>"><?php echo $rec['h1']?></li>
                            <?php
                            }

                            ?>
                        </ul>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php echo $core['content']['insert']; ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="grid" class="row mt-4">

                <?php foreach ($core['content']['list'] as $r) { ?>
                    <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["<?php echo $r['h1'] ?>"]'>
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <a href="<?php echo $r['href']; ?>">
                                    <img src="<?php echo $r['img'] == "" ? "https://dummyimage.com/600x600/000/fff" : $r['img']; ?>" class="img-fluid" alt="<?php echo $r['img'] == "" ? "https://dummyimage.com/600x600/000/fff" : $r['img']; ?>">
                                </a>
                                <div class="content bg-white p-3">
                                    <h5 class="mb-0"><a href="<?php echo $r['href']; ?>" class="text-dark title"><?php echo $r['name'] ?></a></h5>
                                    <h6 class="text-muted tag mb-0"><?php echo $r['h1'] ?></h6>
                                    <?php echo $r['action'];?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                <?php } ?>

            </div>
            <!--end row-->
        </div>
        <!--end container-->


    </section>

<?php } ?>