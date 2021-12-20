<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php echo $core['opengraph']; ?>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap');
  </style>
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Icons -->
  <link href="<?php echo base_url(); ?>assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
  <!-- Slider -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tiny-slider.css" />
  <!-- Tobii -->
  <link href="<?php echo base_url(); ?>assets/css/tobii.min.css" rel="stylesheet" type="text/css" />
  <!-- Main Css -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
  <link href="<?php echo base_url(); ?>assets/css/colors/red.css" rel="stylesheet" id="color-opt">
  <link href="<?php echo base_url(); ?>assets/css/customExa.css" rel="stylesheet">
  <?php $this->load->view('admin/header'); ?>
</head>

<body>


  <!-- Navbar STart -->
  <header id="topnav" class="defaultscroll sticky bg-white btn-header-exa">
    <div class="container">
      <form action="<?php echo base_url() ?>search/" method="GET">
        <div class="row border-bottom no-gutters">

          <div class="col-md-11 col-9">
            <input type="text" class="border-0 search-bar-header" name="q" style="text-align: right;" placeholder="Product, Solusi, Pertanyaan">
          </div>
          <div class="col-md-1 col-3">
            <button type="submit" class="border-0 p-0 px-3 m-0 btn-sm btn-block"> Cari</button>
          </div>

        </div>
      </form>
      <!-- Logo container-->
      <a class="logo" href="<?php echo base_url(); ?>">
        <img src="<?php echo base_url(); ?>assets/images/EXAQUE_2.png" height="34" class="logo-light-mode" alt="">
        <img src="<?php echo base_url(); ?>assets/images/EXAQUE_2.png" height="34" class="logo-dark-mode" alt="">
      </a>
      <!-- Logo End -->

      <!-- End Logo container-->
      <div class="menu-extras">
        <div class="menu-item">
          <!-- Mobile menu toggle-->
          <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
            <div class="lines">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </a>
          <!-- End mobile menu toggle-->
        </div>
      </div>

      <!--Login button Start-->
      <ul class="buy-button list-inline mb-0">

        <li class="list-inline-item ps-1 mb-0">
          <a href="<?php echo base_url(); ?>hubungi-kami" class="btn btn-outline-primary btn-sm"><i class="uil uil-phone"></i> HUBUNGI KAMI</a>
        </li>
      </ul>
      <!--Login button End-->

      <div id="navigation">
        <!-- Navigation Menu-->
        <ul class="navigation-menu">
          <?php foreach ($core['navigation'] as $row) { 
            if ($row['idefault'] != "1") {
          ?>

              <?php if ($row['level2']) { ?>
                <li class="has-submenu parent-menu-item">
                  <a href="<?php echo $row['href'] ?>"><?php echo $row['name'] ?></a><span class="menu-arrow"></span>
                  <ul class="submenu">
                    <?php foreach ($row['level2'] as $row2) { ?>
                      <li class="<?php if ($row2['level3']) { ?>has-submenu parent-menu-item <?php } ?>"><a target="<?php echo $row2['blank'] ?>" href="<?php echo $row2['href'] ?>" class="sub-menu-item"><?php echo $row2['name'] ?> <?php if ($row2['level3']) { ?><span class="submenu-arrow"></span><?php } ?></a>

                        <?php if ($row2['level3']) { ?>
                          <ul class="submenu">
                            <?php foreach ($row2['level3'] as $row3) { ?>
                              <li><a target="<?php echo $row3['blank'] ?>" href="<?php echo $row3['href'] ?>" class="sub-menu-item"><?php echo $row3['name'] ?></a></li>
                            <?php } ?>
                          </ul>
                        <?php } ?>

                      </li>
                    <?php } ?>
                  </ul>
                </li>

              <?php } else { ?>
                <li><a target="<?php echo $row['blank'] ?>" href="<?php echo $row['href'] ?>" class="sub-menu-item"><?php echo $row['name'] ?></a></li>
              <?php  } ?>
          <?php  }
          } ?>

        </ul>
        <!--end navigation menu-->
      </div>
      <!--end navigation-->
    </div>
    <!--end container-->
  </header>
  <!--end header-->
  <!-- Navbar End -->