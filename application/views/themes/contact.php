<?php
defined('BASEPATH') OR exit('No direct script access allowed');

foreach ($custom['contact_banner'] as $row ) { ?>
<header class="header " style="background: url('<?php echo $row['img']?>');  background-size: cover; background-repeat: no-repeat;background-position: center top;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10" >
                <br> <br>
                <h1 class="fn_text" <?php echo $row['attributes']['h1']?> ><?php echo $row['h1']?></h1>
                <h2 class="fn_text" <?php echo $row['attributes']['h2']?> ><?php echo $row['h2']?></h2>
                <br> <br>
            </div>
            <?php if($core['login']){?>
            <div class="col-12">
                <div class="mirrel_btn_full fn_view widget_widget  fn_modal" <?php echo $row['attributes']['h1']?> data-show="h1,h2,h3,img,href" >Edit</div>
            </div>
            <?php } ?>
        </div>
        
    </div>
</header>
<?php }?>


<div class="warp-search">
    <div class="container">
        <div class="form">
            <form action="<?php echo base_url()?>search/" method="GET">
                <div class="row no-gutters">
                    <div class="col-8 col-lg-10">
                        <input type="text" class="input-search" name="q" placeholder="Produk, solusi, pertanyaan" >
                    </div>
                    <div class="col-4 col-lg-2">  
                        <button type="submit" class="btn-search">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="benchmark" style="margin-bottom: 0px;">
                    <i class="fas fa-home"></i> &nbsp; <i class="fas fa-caret-right"></i> &nbsp; <?php echo $core['path'];?>
            </div>
        </div>
    </div>
</div>


    <div class="container padding-40v">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="red"> <?php echo $core['content']['name'];?></h1>
                <h2 class="fn_text" <?php echo $core['content']['attributes']['h1']  ?> > <?php echo $core['content']['h1'];?> </h2>
                    <?php echo $core['content']['id'] ? false: $core['content']['insert'];?>
                <?php echo $core['content']['edit'];?>
            </div>
        </div>
        <div class="row">
          
            <div class="col-lg-6 col-xs-12">
              <form class="needs-validation" novalidate <?php echo $core['email']?>>
                  <?php echo $core['form']?>
                        
                          <div class="form-row">
                              <div class="form-group col-md-6">
                                  <label for="c12">Nama depan</label>
                                  <input type="text" class="form-control" id="c1" placeholder="Nama depan*" name="nama_depan" value="" required>
                                  <div class="invalid-feedback">
                                      Nama depan wajib diisi!
                                  </div>
                              </div>

                              <div class="form-group col-md-6">
                                  <label for="c12">Nama belakang</label>
                                  <input type="text" class="form-control" id="c2" placeholder="Nama belakang*" name="nama_belakang" value="" required>
                                  <div class="invalid-feedback">
                                      Nama belakakang wajib diisi!
                                  </div>
                              </div>
                          </div>
                          
                           <div class="form-group">
                              <label for="c12">Email</label>
                              <input type="email" class="form-control" id="c12" placeholder="Email*" name="email" value="" required email>
                              <div class="invalid-feedback">
                                  Email tidak valid !
                              </div>
                            </div>



                          <div class="form-group">
                            <label for="c3">Perusahaan</label>
                            <input type="text" class="form-control" id="c3" placeholder="Perusahaan*" name="perusahaan" value="" required>
                            <div class="invalid-feedback">
                                Perusahaan wajib diisi!
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="c4">Jabatan</label>
                            <input type="text" class="form-control" id="c4" placeholder="Jabatan*" name="jabatan" required>
                            <div class="invalid-feedback">
                                Jabatan wajib diisi!
                            </div>
                          </div>



                          <div class="form-group">
                            <label for="c5">Telepon</label>
                            <input type="text" class="form-control" id="c5" placeholder="Telepon*"  name="telp" value="" required>
                            <div class="invalid-feedback">
                                Telepon Kantor wajib diisi!
                            </div>
                          </div>

                          <div class="form-group">
                                <label for="c6">Apa yang paling tepat menggambarkan anda ?</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="apa_yang_paling_tepat_menggambarkan_anda">

                                    <option value="">Pilih salah satu dari menu yang tersedia</option>
                                    <option value="Saya bekerja di sektor Finansial"> Saya bekerja di sektor Finansial</option>
                                    <option value="Saya bekerja di sektor Kesehatan">Saya bekerja di sektor Kesehatan</option>
                                    <option value="Saya bekerja di sektor Publik">Saya bekerja di sektor Publik</option>
                                    <option value="Saya bekerja di sektor Ritel">Saya bekerja di sektor Ritel</option>
                                    <option value="Saya bekerja di sektor Lainnya">Saya bekerja di sektor Lainnya</option>
 
                                </select>

                            </div>


                            <div class="form-group">
                              <label for="c7">Bagaimana kami dapat membantu anda ?</label>
                              <textarea class="form-control" id="validationCustom04" rows="5" name="pesan" placeholder="Apa yang paling menarik untuk anda pelajari ?"></textarea>
                              <div class="invalid-feedback">
                                 Pesan wajib isi!
                              </div>
                            </div>
                            <div class="text-center" style="margin-bottom:25px;">
                              <button class="btn btn-danger" type="submit">Kirim Pesan</button>
                            </div>
           
              </form>

                  <script>
                  // Example starter JavaScript for disabling form submissions if there are invalid fields
                  (function() {
                  'use strict';
                  window.addEventListener('load', function() {
                      // Fetch all the forms we want to apply custom Bootstrap validation styles to
                      var forms = document.getElementsByClassName('needs-validation');
                      // Loop over them and prevent submission
                      var validation = Array.prototype.filter.call(forms, function(form) {
                      form.addEventListener('submit', function(event) {
                          if (form.checkValidity() === false) {
                          event.preventDefault();
                          event.stopPropagation();
                          }
                          form.classList.add('was-validated');
                      }, false);
                      });
                  }, false);
                  })();
                  </script>
            </div>
            <div class="col-lg-6 col-xs-12">
                <div class="cms_content fn_richtext" <?php echo $core['content']['attributes']['content'];?> >
                    <?php echo $core['content']['content'];?>
                </div>
            </div>

            <div class="col-6">
                <div class="fn_richtext"  <?php echo $custom['contact_gmap']['attributes'];?> ><?php echo $custom['contact_gmap']['content'];?></div>
            </div>
        </div>
    </div>
