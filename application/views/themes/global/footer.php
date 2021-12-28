<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Footer Start -->
<footer class="footer pb-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mt-4">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <h5 class="footer-head fnText" <?php echo $footerLabelW1['attributes'] ?>><?php echo $footerLabelW1['content'] ?></h5>
                            <ul class="list-unstyled footer-list mt-2 mb-3">
                                <?php foreach ($footerW1 as $row) { ?>
                                    <li><a href="<?php echo $row['href']; ?>" class="text-foot"><i class="uil uil-angle-right-b me-1"></i><?php echo $row['h1']; ?></a>
                                        <div><?php echo $row['modal']; ?></div>
                                    </li>
                                <?php } ?>
                            </ul>

                        </div>
                        <!--end col-->

                        <div class="col-lg-3 col-md-4 col-12">
                            <h5 class="footer-head fnText" <?php echo $footerLabelW2['attributes'] ?>><?php echo $footerLabelW2['content'] ?></h5>
                            <ul class="list-unstyled footer-list mt-2 mb-3">
                                <?php foreach ($footerW2 as $row) { ?>
                                    <li><a href="<?php echo $row['href']; ?>" class="text-foot"><i class="uil uil-angle-right-b me-1"></i><?php echo $row['h1']; ?></a>
                                        <div><?php echo $row['modal']; ?></div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!--end col-->

                        <div class="col-lg-3 col-md-4 col-12">
                            <h5 class="footer-head fnText" <?php echo $footerLabelW3['attributes'] ?>><?php echo $footerLabelW3['content'] ?></h5>
                            <ul class="list-unstyled footer-list mt-2 mb-3">
                                <?php foreach ($footerW3 as $row) { ?>
                                    <li><a href="<?php echo $row['href']; ?>" class="text-foot"><i class="uil uil-angle-right-b me-1"></i><?php echo $row['h1']; ?></a>
                                        <div><?php echo $row['modal']; ?></div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!--end col-->

                        <div class="col-lg-3 col-12 ">
                            <div class="footerRight">
                                <span class="ficons"><a href="https://www.youtube.com/channel/ UCXXDuhPvK3JlgJ4kiIIFvLQ" target="_blank" class="rounded"><i data-feather="youtube" class="fea icon-md fea-social"></i></a></span>

                                <span class="ficons"><a href="https://www.linkedin.com/company/exaquemm/" target="_blank" class="rounded"><i data-feather="linkedin" class="fea icon-md  fea-social"></i></a> </span>
                            </div>

                            <div class="footerRight">
                                <img src="<?php echo base_url(); ?>public/Qmatic_-SolutionPartner_logo-(279x134).png" height="60" alt="Exaque">
                            </div>


                            <!--end icon-->

                            <div class="mt-2 footerRight"><small> ©<?php echo date('Y'); ?> PT Exaque Mandiri Makmur.</small></div>
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
<script src="<?php echo base_url(); ?>assets/js/shuffle.min.js"></script>
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>


<?php $this->load->view('admin/footer'); ?>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            lengthMenu: [4],
            lengthChange: false, 
            searching: false
        });
        $('#commentFormSuccess').hide();
        $('.iframeYoutube').on('hidden.bs.modal', function() {
            var id = $(this).data('id');

            var iframe = document.getElementById('youbt_' + id);
            iframe.src = iframe.src;
        });

        $(".fnSubmit").on('click', function() {

            const data = {
                first_name: $('#c1').val(),
                last_name: $('#c2').val(),
                email: $('#c12').val(),
                perusahaan: $('#c3').val(),
                jabatan: $('#jab').val(),
                telp: $('#telp').val(),
                who: $('#who').val(),
                how: $('#how').val(),
                gchapta: $('#g-recaptcha-response').val(),
            }
            console.log(data);
            $('.invalid-feedback').hide();
            if (!data['first_name']) {
                $('#e1').show();
            }
            if (!data['last_name']) {
                $('#e2').show();
            }
            if (!data['email']) {
                $('#e12').show();
            }
            if (!data['perusahaan']) {
                $('#e3').show();
            }
            if (!data['jabatan']) {
                $('#ejab').show();
            }
            if (!data['telp']) {
                $('#etelp').show();
            }
            if (!data['who']) {
                $('#ewho').show();
            }
            if (!data['who']) {
                $('#ewho').show();
            }
            if (!data['how']) {
                $('#ehow').show();
            } else {
                if (data['gchapta']) {

                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url(); ?>site/form/',
                        data: data,
                        dataType: "json",
                        beforeSend: function(data) {

                        },
                        success: function(data) {
                            console.log(data)
                            $('#commentForm').hide();
                            $('#commentFormSuccess').show();

                        },
                        error: function(data) {
                            console.log(data);
                            alert("Google Chapta berakhir, silakan ulangin lagi.");
                            location.reload();
                        }

                    });
                } else {

                    alert("Google Chapta berakhir, silakan ulangin lagi.");
                    location.reload();
                }

            }


        });

        $(".fnSubmit2").on('click', function() {

            const data = {
                first_name: $('#c1').val(),
                last_name: $('#c2').val(),
                email: $('#c12').val(),
                perusahaan: $('#c3').val(),
                jabatan: $('#jab').val(),
                alamat: $('#alamat').val(),
                kota: $('#kota').val(),
                telp: $('#telp').val(),
                provinsi: $('#provinsi').val(),
                how: $('#how').val(),
                gchapta: $('#g-recaptcha-response').val(),
            }
            console.log(data);
            $('.invalid-feedback').hide();
            if (!data['first_name']) {
                $('#e1').show();
            }
            if (!data['last_name']) {
                $('#e2').show();
            }
            if (!data['email']) {
                $('#e12').show();
            }
            if (!data['perusahaan']) {
                $('#e3').show();
            }
            if (!data['jabatan']) {
                $('#ejab').show();
            }
            if (!data['alamat']) {
                $('#ealamat').show();
            }
            if (!data['telp']) {
                $('#etelp').show();
            }
            if (!data['kota']) {
                $('#ekota').show();
            }
            if (!data['who']) {
                $('#ewho').show();
            }
            if (!data['how']) {
                $('#ehow').show();
            } else {
                if (data['gchapta']) {

                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url(); ?>site/form/',
                        data: data,
                        dataType: "json",
                        beforeSend: function(data) {

                        },
                        success: function(data) {
                            console.log(data)
                            $('#commentForm').hide();
                            $('#commentFormSuccess').show();

                        },
                        error: function(data) {
                            console.log(data);
                            alert("Google Chapta berakhir, silakan ulangin lagi.");
                            location.reload();
                        }

                    });
                } else {

                    alert("Google Chapta berakhir, silakan ulangin lagi.");
                    location.reload();
                }

            }


        });
    });
</script>

</body>

</html>