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
                                <span class="ficons"><a href="https://www.youtube.com/channel/UCXXDuhPvK3JlgJ4kiIIFvLQ" target="_blank" class="rounded"><i data-feather="youtube" class="fea icon-md fea-social"></i></a></span>

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
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<?php if (!$core['login']) { ?>
    <script type="text/javascript" src="<?php echo base_url(); ?>admin/js/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<?php } ?>

<?php $this->load->view('admin/footer'); ?>
<script>
    $(document).ready(function() {

        $('#example').DataTable({
            lengthMenu: [4],
            lengthChange: false,
            searching: false,
            ordering: false,
            "language": {
                "paginate": {
                    "previous": "Sebelumnya",
                    "next": "Berikutnya"

                }
            }
        });
        $('#commentFormSuccess').hide();
        $('.iframeYoutube').on('hidden.bs.modal', function() {
            var id = $(this).data('id');

            var iframe = document.getElementById('youbt_' + id);
            iframe.src = iframe.src;
        });



        $(".fnSubmit").on('click', function() {
              error = false;
            const data = {
                first_name: $('#c1').val(),
                last_name: $('#c2').val(),
                email: $('#c12').val(),
                perusahaan: $('#c3').val(),
                jabatan: $('#jab').val(),
                telp: $('#telp').val(),
                apa_yang_paling_tepat_menggambarkan_anda : $('#who').val(),
                bagaimana_kami_dapat_membantu_anda : $('#how').val(),
                gchapta: $('#g-recaptcha-response').val(),
            }
            console.log(data);
            $('.invalid-feedback').hide();
            if (!data['first_name']) {
                $('#e1').show();
                error = true;
            }
            if (!data['last_name']) {
                $('#e2').show();
                error = true;
            }
            if (!data['email']) {
                $('#e12').show();
                error = true;
            }
            if (!data['perusahaan']) {
                $('#e3').show();
                error = true;
            }
            if (!data['jabatan']) {
                $('#ejab').show();
                error = true;
            }
            if (!data['telp']) {
                $('#etelp').show();
                error = true;
            }
            if (!data['apa_yang_paling_tepat_menggambarkan_anda']) {
                $('#ewho').show();
                error = true;
            }
            if (!data['bagaimana_kami_dapat_membantu_anda']) {
                $('#ehow').show();
                error = true;
            }

            if (error == false) {
                if (data['gchapta']) {
                    $('.invalid-feedback').hide();
                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url(); ?>site/form/sales',
                        data: data,
                        dataType: "json",
                        beforeSend: function(data) {

                        },
                        success: function(data) {
                            console.log(data)

                            $('.myForm').hide();
                            $('.exabox1').show();
                        },
                        error: function(data) {
                            console.log(data.responseText);
                            alert("Google Chapta berakhir, silakan ulangin lagi.");
                            location.reload();
                        }

                    });
                } else {
                    alert("Google Chapta berakhir, silakan ulangin lagi.");
                    location.reload();
                }

            } else {

                $('.textwarning').html("Semua kolom wajib dilengkapi");
            }


        });

        $(".fnSubmit2").on('click', function() {
              error = false;
            const data = {
                nama_depan: $('#c1').val(),
                nama_belakang: $('#c2').val(),
                email: $('#c12').val(),
                perusahaan: $('#c3').val(), 
                alamat: $('#alamat').val(),
                kota: $('#kota').val(),
                telp: $('#telp').val(),
                provinsi: $('#provinsi').val(),
                pesan: $('#how').val(),
                gchapta: $('#g-recaptcha-response').val(),
            }
            console.log(data);
            
            console.log(error);
            $('.invalid-feedback').hide();
            if (!data['nama_depan']) {
                $('#e1').show();
                error = true;
                console.log(error);
            }
            if (!data['nama_belakang']) {
                $('#e2').show();
                error = true;
                console.log(error);
            }
            if (!data['email']) {
                $('#e12').show();
                error = true;
                console.log(error);
            }
            if (!data['perusahaan']) {
                $('#e3').show();
                error = true;
                console.log(error);
            }
           
            if (!data['alamat']) {
                $('#ealamat').show();
                error = true;
                console.log(error);
            }  
            if (!data['provinsi']) {
                $('#eprovinsi').show();
                error = true;
                console.log(error);
            }
            if (!data['telp']) {
                $('#etelp').show();
                error = true;
                console.log(error);
            }
            if (!data['kota']) {
                $('#ekota').show();
                error = true;
                console.log(error);
            } 
            if (!data['pesan']) {
                $('#ehow').show();
                error = true; 
                console.log(error);
                
            }

           
            if (error == false) {
                if (data['gchapta']) { 
                   
                    $('.invalid-feedback').hide();
                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url(); ?>site/form/helpdesk',
                        data: data,
                        dataType: "json",
                        beforeSend: function(data) {

                        },
                        success: function(data) {
                            console.log(data)

                            $('.myForm').hide();
                            $('.exabox1').show();
                        },
                        error: function(data) {
                            console.log(data.responseText);
                            alert("Google Chapta berakhir, silakan ulangin lagi.");
                            location.reload();
                        }

                    });
                } else {
                    alert("Google Chapta berakhir, silakan ulangin lagi.");
                    location.reload();
                }

            } else {


                $('.textwarning').html("Semua kolom wajib dilengkapi");

            }


        });

        $('.anchor').on('click', function() {
            $('.blocklist').removeClass('active');

            $('.b' + $(this).data("id")).addClass('active');
        });

        if (window.location.hash) {
            console.log(window.location.hash);
        }

    });
</script>

</body>

</html>