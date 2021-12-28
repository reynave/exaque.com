<?php
defined('BASEPATH') or exit('No direct script access allowed');
?> 
 
<section class="home-slider position-relative ">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php for ($i = 0; $i < 4; $i++) { ?>
            <div class="carousel-item <?php echo $i==0 ? "active":""?>" data-bs-interval="3000">
                <div class="bg-home-75vh d-flex align-items-center" style="background: url('<?php echo base_url(); ?>assets/images/blog/bg1.jpg') center center;">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="row mt-5 justify-content-center">
                            <div class="col-12">
                                <div class="title-heading text-center">
                                    <h2 class="text-white title-dark mb-3">Weekend Travel</h2>
                                    <ul class="list-unstyled">
                                        <li class="list-inline-item small user text-light me-2"><i class="uil uil-user text-white title-dark"></i> Calvin Carlo</li>
                                        <li class="list-inline-item small date text-light"><i class="uil uil-calendar-alt text-white title-dark"></i> 25th June 2021</li>
                                    </ul>
                                    <p class="para-desc mx-auto text-white-50 mb-0">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                    <div class="mt-4">
                                        <a href="javascript:void(0)" class="btn btn-primary">Read More </a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <!--end slide-->
            </div>

            <?php } ?>
  
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</section>
<!--end section-->
<!-- Hero End -->


<!-- Blog STart -->
<section class="section">
    <div class="container">
        <div class="row">
            <?php for ($i = 0; $i < 4; $i++) { ?>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="homeGrid   border-0  ">
                        <div class="position-relative">
                            <img src="<?php echo base_url(); ?>assets/images/blog/01.jpg" class="card-img-top" alt="...">
                            <div class="overlay"></div>
                        </div>
                        <h1>Qmatic Orchestra 7</h1>
                        <p>Orketra 7 menawarkan flesibiltas untuk beradatpasi</p>
                        <p>
                            <a href="">Pejalarin Selengkapnya </a>
                        </p>
                    </div>
                </div>
                <!--end col-->
            <?php } ?>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Blog End -->


<!-- Start -->
<section class="section pt-0">
    <div class="container homeValue">

        <div class="row mt-3 pt-5 position-relative" id="counter" style="z-index: 1;">
            <div class="col-12">
                <h3 class="text-center">Bantuan Perjalanan Pelanggan Menjadi Lebih Baik</h3>
            </div>
            <div class="col-md-4 col-6 mt-4 pt-2">
                <div class="counter-box text-center">
                    <img src="<?php echo base_url(); ?>assets/images/illustrator/Asset190.svg" class="avatar avatar-small" alt="">
                    <!-- <h2 class="mb-0 mt-4"><span class="counter-value" data-target="97">3</span>%</h2>
                    <h6 class="counter-head text-muted">Happy Client</h6> -->
                    <div>
                        <p> Bantuan Perjalanan Pelanggan Menjadi Lebih Baik Bantuan Perjalanan Pelanggan Menjadi Lebih Baik Bantuan Perjalanan Pelanggan Menjadi Lebih Baik Bantuan Perjalanan Pelanggan Menjadi Lebih Baik Bantuan Perjalanan Pelanggan Menjadi Lebih Baik Bantuan Perjalanan Pelanggan Menjadi Lebih Baik</p>
                    </div>



                </div>
                <!--end counter box-->
            </div>

            <div class="col-md-4 col-6 mt-4 pt-2">
                <div class="counter-box text-center">
                    <img src="<?php echo base_url(); ?>assets/images/illustrator/Asset189.svg" class="avatar avatar-small" alt="">
                    <h2 class="mb-0 mt-4"><span class="counter-value" data-target="15">1</span>+</h2>
                    <h6 class="counter-head text-muted">Awards</h6>
                </div>
                <!--end counter box-->
            </div>

            <div class="col-md-4 col-6 mt-4 pt-2">
                <div class="counter-box text-center">
                    <img src="<?php echo base_url(); ?>assets/images/illustrator/Asset192.svg" class="avatar avatar-small" alt="">
                    <h2 class="mb-0 mt-4"><span class="counter-value" data-target="2">0</span>K</h2>
                    <h6 class="counter-head text-muted">Job Placement</h6>
                </div>
                <!--end counter box-->
            </div>


        </div>
        <!--end row-->
        <div class="feature-posts-placeholder bg-blue"></div>
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End -->



<!-- Blog STart -->
<section class="section">
    <div class="container">
        <div class="row">
            <?php for ($i = 0; $i < 4; $i++) { ?>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="homeGrid   border-0  ">
                        <div class="position-relative">
                            <img src="<?php echo base_url(); ?>assets/images/blog/01.jpg" class="card-img-top" alt="...">
                            <div class="overlay"></div>
                        </div>
                        <h1>Qmatic Orchestra 7</h1>
                        <p>Orketra 7 menawarkan flesibiltas untuk beradatpasi</p>
                        <p>
                            <a href="">Pejalarin Selengkapnya </a>
                        </p>
                    </div>
                </div>
                <!--end col-->
            <?php } ?>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Blog End -->