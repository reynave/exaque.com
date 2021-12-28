<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Footer Start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-py-60">
                    <div class="row">


                        <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">Yang Baru</h5>
                            <ul class="list-unstyled footer-list mt-4">
                                <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i>Perusahaan Kami</a></li>
                        </div>
                        <!--end col-->

                        <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">Kios Layanan Mandiri</h5>
                            <ul class="list-unstyled footer-list mt-4">
                                <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Hubungi Kami</a></li>
                                <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Dukungan Helpdesk</a></li>
                            </ul>
                        </div>
                        <!--end col-->

                        <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">Blog</h5>
                            <ul class="list-unstyled footer-list mt-4">
                                <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i>COVID-19</a></li>
                                <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i>COVID-19</a></li>
                                <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i>COVID-19</a></li>
                                <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i>COVID-19</a></li>

                             
                            </ul>
                        </div>
                        <!--end col-->

                        <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                            <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                             
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                            </ul>
                            <a href="#" class="logo-footer">
                                <img src="https://www.qmatic.com/hubfs/a-identity/logos/logo-red.svg" height="24" alt="Exaque"> 
                            </a>
                            <div><small>  SOLUTION <br>PARTNER</small></div> 
                          
                            <!--end icon-->

                            <p class="mb-0"><small> ©<?php echo date('Y'); ?>PT Exaque Mandiri Makmur.</small></p>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

</footer>
<!--end footer-->
<!-- Footer End -->



<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
<!-- Back to top -->



<!-- javascript -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
<!-- SLIDER -->
<script src="<?php echo base_url(); ?>assets/js/tiny-slider.js "></script>
<!-- tobii js -->
<script src="<?php echo base_url(); ?>assets/js/tobii.min.js "></script>
<!-- Icons -->
<script src="<?php echo base_url(); ?>assets/js/feather.min.js"></script>
<!-- Switcher -->
<script src="<?php echo base_url(); ?>assets/js/switcher.js"></script>
<!-- Main Js -->
<script src="<?php echo base_url(); ?>assets/js/plugins.init.js"></script>
<!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
<!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
<?php $this->load->view('admin/footer'); ?>

</body>

</html>