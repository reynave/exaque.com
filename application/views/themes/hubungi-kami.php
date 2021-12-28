<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style>
    iframe {

        width: 100% !important;
    }
</style>
<!-- Start -->
<section class="section noBanner ">
    <div class="container">
        <div class="row">


            <div class="col-lg-8 col-md-8 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0 mb-3">
                <h2 class="mb-3 text-primary"><?php echo $core['pages']['name']; ?></h2>

                <h4 class="fnText " <?php echo $core['content']['data']['name'] ?>><?php echo $core['content']['name'] ?></h4>
                <hr>
                <div class="fnRichtext cms_content" <?php echo $core['content']['data']['content'] ?>><?php echo $core['content']['content'] ?> </div>

                <?php if ($core['content']['id'] == '311') { ?>
                    <div class="card shadow rounded border-0 mt-5 " id="commentForm2">
                        <div class="card-body py-5">
                          
                            <div class="custom-form mt-3">

                                <form <?php echo $core['contact_us']['action'] ?> name="myForm">
                                    <?php echo $core['contact_us']['return'] ?>
                                    <?php echo $core['contact_us']['recaptcha3'] ?>


                                    <div id="simple-msg"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="c1">Nama depan</label>
                                                <input type="text" class="form-control" id="c1" placeholder="Nama depan*" name="nama_depan" value="" required>
                                                <div class="invalid-feedback" id="e1">
                                                    Nama depan wajib diisi!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="c2">Nama belakang</label>
                                                <input type="text" class="form-control" id="c2" placeholder="Nama belakang*" name="nama_belakang" value="" required>
                                                <div class="invalid-feedback" id="e2">
                                                    Nama belakakang wajib diisi!
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="c12">Email</label>
                                                <input type="email" class="form-control" id="c12" placeholder="Email*" name="email" value="" required email>
                                                <div class="invalid-feedback" id="e12">
                                                    Email tidak valid !
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="c3">Perusahaan</label>
                                                <input type="text" class="form-control" id="c3" placeholder="Perusahaan*" name="perusahaan" value="" required>
                                                <div class="invalid-feedback" id="e3">
                                                    Perusahaan wajib diisi!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="jab">Jabatan</label>
                                                <input type="text" class="form-control" id="jab" placeholder="Jabatan*" name="jabatan" value="" required>
                                                <div class="invalid-feedback" id="ejab">
                                                    Jabatan wajib diisi!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="telp">Telepon</label>
                                                <input type="text" class="form-control" id="telp" placeholder="Telepon*" name="telp" value="" required>
                                                <div class="invalid-feedback" id="etelp">
                                                    Telepon Kantor wajib diisi!
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="who">Apa yang paling tepat menggambarkan anda ?</label>
                                                <select class="form-control" id="who" name="apa_yang_paling_tepat_menggambarkan_anda" required>
                                                    <option value="">Pilih salah satu dari menu yang tersedia</option>
                                                    <option value="Saya bekerja di sektor Finansial"> Saya bekerja di sektor Finansial</option>
                                                    <option value="Saya bekerja di sektor Kesehatan">Saya bekerja di sektor Kesehatan</option>
                                                    <option value="Saya bekerja di sektor Publik">Saya bekerja di sektor Publik</option>
                                                    <option value="Saya bekerja di sektor Ritel">Saya bekerja di sektor Ritel</option>
                                                    <option value="Saya bekerja di sektor Lainnya">Saya bekerja di sektor Lainnya</option>
                                                </select>
                                                <div class="invalid-feedback" id="ewho">
                                                    Pesan wajib isi!
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="how">Bagaimana kami dapat membantu anda ?</label>
                                                <textarea class="form-control" id="how" rows="5" name="pesan" placeholder="Apa yang paling menarik untuk anda pelajari ?" required></textarea>
                                                <div class="invalid-feedback" id="ehow">
                                                    Pesan wajib isi!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="text-center">
                                                <button class="btn btn-exa2  fnSubmit" id="submit" name="send" type="button">Kirim Pesan</button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->

                                </form>
                            </div>
                        </div>
                    </div>
                <?php }

                if ($core['content']['id'] == '310') { ?>
                    <div class="card shadow rounded border-0 mt-5 " id="commentForm3">
                        <div class="card-body py-5">
                           
                            <div class="custom-form mt-3">

                                <form <?php echo $core['contact_us']['action'] ?> name="myForm">
                                    <?php echo $core['contact_us']['return'] ?>
                                    <?php echo $core['contact_us']['recaptcha3'] ?>


                                    <div id="simple-msg"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="c1">Nama depan</label>
                                                <input type="text" class="form-control" id="c1" placeholder="Nama depan*" name="nama_depan" value="" required>
                                                <div class="invalid-feedback" id="e1">
                                                    Nama depan wajib diisi!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="c2">Nama belakang</label>
                                                <input type="text" class="form-control" id="c2" placeholder="Nama belakang*" name="nama_belakang" value="" required>
                                                <div class="invalid-feedback" id="e2">
                                                    Nama belakakang wajib diisi!
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="c12">Email</label>
                                                <input type="email" class="form-control" id="c12" placeholder="Email*" name="email" value="" required email>
                                                <div class="invalid-feedback" id="e12">
                                                    Email tidak valid !
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="c3">Perusahaan</label>
                                                <input type="text" class="form-control" id="c3" placeholder="Perusahaan*" name="perusahaan" value="" required>
                                                <div class="invalid-feedback" id="e3">
                                                    Perusahaan wajib diisi!
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="telp">Telepon</label>
                                                <input type="text" class="form-control" id="telp" placeholder="Telepon*" name="telp" value="" required>
                                                <div class="invalid-feedback" id="etelp">
                                                    Telepon Kantor wajib diisi!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" placeholder="Alamat*" name="alamat" value="" required>
                                                <div class="invalid-feedback" id="ealamat">
                                                    Alamat Kantor wajib diisi!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="ekota">Kota</label>
                                                <input type="text" class="form-control" id="kota" placeholder="Kota*" name="kota" value="" required>
                                                <div class="invalid-feedback" id="ekota">
                                                    Kota Kantor wajib diisi!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="provinsi">Provinsi</label> 
                                                <select class="form-control" id="provinsi" placeholder="provinsi*" name="provinsi" required>
                                                    <option value="ACEH"> ACEH </option>
                                                    <option value="SUMATERA UTAR"> SUMATERA UTARA </option>
                                                    <option value="SUMATERA BARAT"> SUMATERA BARAT </option>
                                                    <option value="RIAU"> R I A U </option>
                                                    <option value="JAMBI"> J A M B I </option>
                                                    <option value="SUMATERA SELATAN"> SUMATERA SELATAN </option>
                                                    <option value="BENGKULU"> BENGKULU </option>
                                                    <option value="LAMPUNG"> LAMPUNG </option>
                                                    <option value="KEPULAUAN BANGKA BELITUNG"> KEPULAUAN BANGKA BELITUNG </option>
                                                    <option value=" KEPULAUAN RIAU"> KEPULAUAN RIAU </option>
                                                    <option value="DKI JAKARTA" selected> DKI JAKARTA </option>
                                                    <option value="JAWA BARAT"> JAWA BARAT </option>
                                                    <option value="JAWA TENGAH"> JAWA TENGAH </option>
                                                    <option value="DI YOGYAKARTA"> DI YOGYAKARTA </option>
                                                    <option value="JAWA TIMUR"> JAWA TIMUR </option>
                                                    <option value="BANTEN"> B A N T E N </option>
                                                    <option value="BALI"> BALI </option>
                                                    <option value="NUSA TENGGARA BARAT"> NUSA TENGGARA BARAT </option>
                                                    <option value="NUSA TENGGARA TIMUR"> NUSA TENGGARA TIMUR </option>
                                                    <option value="KALIMANTAN BARAT"> KALIMANTAN BARAT </option>
                                                    <option value="KALIMANTAN TENGAH"> KALIMANTAN TENGAH </option>
                                                    <option value="KALIMANTAN SELATAN"> KALIMANTAN SELATAN </option>
                                                    <option value="KALIMANTAN TIMUR"> KALIMANTAN TIMUR </option>
                                                    <option value="SULAWESI UTARA"> SULAWESI UTARA </option>
                                                    <option value="SULAWESI SELATAN"> SULAWESI SELATAN </option>
                                                    <option value="SULAWESI TENGGARA"> SULAWESI TENGGARA </option>
                                                    <option value="GORONTALO"> GORONTALO </option>
                                                    <option value="SULAWESI BARAT"> SULAWESI BARAT </option>
                                                    <option value="MALUKU"> MALUKU </option>
                                                    <option value="MALUKU UTARA"> MALUKU UTARA </option>
                                                    <option value="PAPUA"> PAPUA </option>
                                                    <option value="PAPUA BARAT"> PAPUA BARAT </option>
                                                    <option value="SULAWESI TENGAH"> SULAWESI TENGAH </option>
                                                    <option value="KALIMANTAN UTARA"> KALIMANTAN UTARA </option>
                                                </select>
                                                <div class="invalid-feedback" id="eprovinsi">
                                                    Provinsi Kantor wajib diisi!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="how">Pesan</label>
                                                <textarea class="form-control" id="how" rows="5" name="pesan" placeholder="Apa yang paling menarik untuk anda pelajari ?" required></textarea>
                                                <div class="invalid-feedback" id="ehow">
                                                    Jelaskan masalah Anda dan time teknis kami akan segera menghubungi Anda kembali
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="text-center">
                                                <button class="btn btn-exa2 fnSubmit2" id="submit" name="send" type="button">Kirim Pesan</button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->

                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>


                <div class="card shadow rounded border-0 mt-5 " id="commentFormSuccess">
                    <div class="card-body py-5">
                        <p><b> Terima kasih sudah menghubungi kami</b> </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="sticky-bar bg-light  ">
                    <div class="px-3 pt-3">
                        <div class="fnText text-primary pb-2" <?php echo $custom['hubTitle']['attributes']; ?>> <?php echo $custom['hubTitle']['content']; ?> </div>
                    </div>
                   

                    <?php foreach ($core['content']['list'] as $row) { ?>
                    <div class="blocklist <?php echo $row['id'] == $core['content']['id'] ? "active":""?>">
                        <a href="<?php echo $row['href'] ?>"><?php echo $row['name'] ?></a>
                        <div class="arrow1"> 
                        </div>
                        <?php echo $row['action']; ?>
                    </div>
                    <?php } ?>

                  
                </div>

                <div>
                <?php echo $core['content']['insert']; ?>
                </div>
            </div>
        </div>

    </div>

</section>