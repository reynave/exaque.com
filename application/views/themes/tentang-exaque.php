<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100 " style="background: url('<?php echo $custom['aboutBanner'][0]['img']; ?>');">

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 col-12">
                <div class="pages-heading title-heading">
                    <h1 class="text-white fnText" <?php echo $custom['aboutBanner'][0]['data']['h1']; ?>> <?php echo $custom['aboutBanner'][0]['h1']; ?> </h1>
                    <h3 class="text-white fnText" <?php echo $custom['aboutBanner'][0]['data']['h2']; ?>> <?php echo $custom['aboutBanner'][0]['h2']; ?> </h3>
                    <?php echo $custom['aboutBanner'][0]['modal']; ?>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

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

<section class="section bg-light">
    <div class="container">
        <div class="row align-items-center">


            <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="ms-lg-4">
                    <div class="d-flex ">
                        <span class="text-primary h1 mb-0"><span class="counter-value display-1 fw-bold" data-target="<?php echo date('Y') - 2000; ?>">0</span>+</span>
                        <span class="h6 align-self-end ms-2">Tahun <br> Pengalaman</span>
                    </div>
                    <div class="section-title">
                        <h1 class="mb-4 fnText" <?php echo $core['content']['data']['name'] ?>><?php echo $core['content']['name'] ?></h1>
                        <div class="text-muted fnRichtext" <?php echo $core['content']['data']['content'] ?>><?php echo $core['content']['content'] ?></div>
                        <div>
                            <?php echo !$core['content']['id']  ? $core['content']['insert'] : $core['content']['edit']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo $core['content']['img'] ?>" class="img-fluid" alt="">
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->

</section>


<section class="section bg-info text-white">
    <?php foreach ($custom['tentangW1'] as $r) { ?>
        <div class="container">

            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <h1 class="fnTett" <?php echo $r['data']['h1'] ?>> <?php echo $r['h1'] ?> </h1>
                    <h3 class="fnTett" <?php echo $r['data']['h2'] ?>> <?php echo $r['h2'] ?> </h3>
                </div>
                <div class="col-md-6 col-12">
                    <img src="<?php echo $r['img'] ?>" width="80%" class="img-fluid" alt="">
                    <?php echo $r['modal']; ?>
                </div>

            </div>

        </div>
    <?php } ?>

</section>



<div class="container mt-100 mt-60 mb-5">
    <div class="row align-items-end">
        <div class="col-md-12">
            <div class="section-title text-center text-md-start">
                <h1 class="  fnText" <?php echo $custom['tentangTitle']['attributes']; ?>><?php echo $custom['tentangTitle']['content']; ?></h1>
            </div>
        </div>
    </div>
    <!--end row-->

    <?php if ($core['login'] == true) { ?>
        <div class="row">
            <div class="col-12 mb-3">
                <small><b>Login Admin</b></small>
            </div>
            <?php foreach ($custom['tentangTabs'] as $r) { ?>
                <div class="col-12 mb-2">
                    <div class="fnText form-control mb-1" <?php echo $r['data']['h1'] ?>> <?php echo $r['h1'] ?></div>
                    <div class="fnRichtext form-control" <?php echo $r['data']['content'] ?>> <?php echo $r['content'] ?> </div>
                    <hr>
                </div>
            <?php } ?>

            <div class="col-12">
                <?php echo $custom['tentangTabsBtn'] ?>
            </div>
        </div>
    <?php } else { ?>
        <div class="row">

            <div class="col-md-4 mt-4 pt-2">
                <ul class="nav nav-pills nav-justified flex-column bg-white rounded shadow p-3 mb-0 sticky-bar" id="pills-tab" role="tablist">
                    <?php $i = 0;
                    foreach ($custom['tentangTabs'] as $r) { ?>
                        <li class="nav-item">
                            <a class="nav-link rounded  <?php echo $i == 0 ? "active" : ""; ?>" data-bs-toggle="pill" href="#tab<?php echo $r['id'] ?>">
                                <div class="text-center py-1">
                                    <h6 class="mb-0"><?php echo $r['h1'] ?></h6>
                                </div>
                            </a>
                        </li>
                    <?php
                        $i++;
                    } ?>
                </ul>
                <!--end nav pills-->
            </div>
            <!--end col-->

            <div class="col-md-8 col-12 mt-4 pt-2">
                <div class="tab-content" id="pills-tabContent">
                    <?php
                    $i = 0;
                    foreach ($custom['tentangTabs'] as $r) { ?>
                        <div class="tab-pane fade bg-white <?php echo $i == 0 ? "show active" : ""; ?> p-4 rounded shadow" id="tab<?php echo $r['id'] ?>">
                            <div class="text-muted"><?php echo $r['content'] ?> </div>
                        </div>
                        <!--end teb pane-->

                    <?php
                        $i++;
                    } ?>

                </div>
                <!--end tab content-->
            </div>
            <!--end col-->

        </div>

    <?php } ?>
</div>
<!--end container-->
</section>
<!--end section-->