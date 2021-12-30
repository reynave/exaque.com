<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model extends CI_Model
{

  function __construct()
  {
    /* Call the Model constructor */
    parent::__construct();
  }

  function custom($theme = "index")
  {
    switch ($theme) {
      case "home":
        $data = array(
          "banner" => $this->core->cms_widget('banner'),
          "banner_action" => $this->core->cms_widget_action('banner'),

          "title"    => $this->core->cms_label('title'),

          "home1" => $this->core->cms_widget('home1'),
          "home1_action" => $this->core->cms_widget_action('home1'),


          "home2" => $this->core->cms_widget('home2'),
          "home2_action" => $this->core->cms_widget_action('home2'),

          "home3" => $this->core->cms_widget('home3'),
          "home3_action" => $this->core->cms_widget_action('home3'),
        );
        return $data;
        break;
      case "industry":
        $data = array(
          "industryBanner" => $this->core->cms_widget('industryBanner'),
          "industry1" => $this->core->cms_widget('industry1'),
        );
        return $data;
        break;

      case "tiket":
        $data = array(
          "tiketW1" => $this->core->cms_widget('tiketW1'),
        );
        return $data;
        break;

      case "solusi":
        $data = array(
          "solusiBanner" => $this->core->cms_widget('solusiBanner'),

          "solusiTitle" => $this->core->cms_widget('solusiTitle'),

          "solusi1Label" => $this->core->cms_label('solusi1Label'),
          "solusi1" => $this->core->cms_widget('solusi1'),
          "solusi1_action" => $this->core->cms_widget_action('solusi1'),
        );
        return $data;
        break;

      case "finansial":
        $data = array(
          "finansialBanner" => $this->core->cms_widget('finansialBanner'),
          "finW1" => $this->core->cms_widget('finW1'),
          "finW2" => $this->core->cms_widget('finW2'),

        );
        return $data;
        break;
      case "publik":
        $data = array(
          "publiklBanner" => $this->core->cms_widget('publiklBanner'),
          "pubW1" => $this->core->cms_widget('pubW1'),
          "pubWredTitle" => $this->core->cms_label('pubWredTitle'),
          "pubWred" => $this->core->cms_widget('pubWred'),
          "pubWredBtn" => $this->core->cms_widget_action('pubWred'),

          "pubW2" => $this->core->cms_widget('pubW2'),
        );
        return $data;
        break;

      case "kesehatan":
        $data = array(
          "kesehatanBanner" => $this->core->cms_widget('kesehatanBanner'),
          "kesW1" => $this->core->cms_widget('kesW1'),
          "kesWredTitle" => $this->core->cms_label('kesWredTitle'),
          "kesWred" => $this->core->cms_widget('kesWred'),
          "kesWredBtn" => $this->core->cms_widget_action('kesWred'),

          "kesW2" => $this->core->cms_widget('kesW2'),
        );
        return $data;
        break;

      case "ritel":
        $data = array(
          "ritelBanner" => $this->core->cms_widget('ritelBanner'),
          "ritelW1" => $this->core->cms_widget('ritelW1'),
          "ritelWredTitle" => $this->core->cms_label('ritelWredTitle'),
          "ritelW2" => $this->core->cms_widget('ritelW2'),
        );
        return $data;
        break;



      case "managemen-antrean":
        $data = array(
          "managemenAntreanBanner" => $this->core->cms_widget('managemenAntreanBanner'),

          "maText1" => $this->core->cms_label('maText1'),
          "maText2" => $this->core->cms_label('maText2'),
          "maText3" => $this->core->cms_label('maText3'),

          "maPerangkat" => $this->core->cms_widget('managemenAntreanPerangkat'),

          "maProduct" => $this->core->cms_widget('maProduct'),
          "maWidget" => $this->core->cms_widget('maWidget'),

          "maFull1" => $this->core->cms_widget('maFull1'),

        );
        return $data;
        break;
      case "managemen-perjalanan-pelanggan":
        $data = array(
          "mpBanner" => $this->core->cms_widget('mpBanner'),

          "mpText1" => $this->core->cms_label('mpText1'),
          "mpText2" => $this->core->cms_label('mpText2'),
          "mpText3" => $this->core->cms_label('mpText3'),

          "mpW1" => $this->core->cms_widget('mpW1'),
          "mpW1_action" => $this->core->cms_widget_action('mpW1'),

          "mpW2" => $this->core->cms_widget('mpW2'),
          "mpW3" => $this->core->cms_widget('mpW3'),
          "mpW4" => $this->core->cms_widget('mpW4'),
          "mpW5" => $this->core->cms_widget('mpW5'),

        );
        return $data;
        break;


      case "antrean-ponsel":
        $data = array(
          "apBanner" => $this->core->cms_widget('apBanner'),
          "apW1" => $this->core->cms_widget('apW1'),
          "apLabel1" => $this->core->cms_label('apLabel1'),
          "apLabel2" => $this->core->cms_label('apLabel2'),
          "apBenefit" => $this->core->cms_widget('apBenefit'),
          "apBenefitBtn" => $this->core->cms_widget_action('apBenefit'),

          "apW2" => $this->core->cms_widget('apW2'),
        );
        return $data;
        break;

      case "pemesanan-jadwal-janji-temu":
        $data = array(
          "jjjBanner" => $this->core->cms_widget('jjjBanner'),
          "jjjW1" => $this->core->cms_widget('jjjW1'),
          "jjjLabel1" => $this->core->cms_label('jjjLabel1'),
          "jjjLabel2" => $this->core->cms_label('jjjLabel2'),
          "jjjBenefit" => $this->core->cms_widget('jjjBenefit'),
          "jjjBenefitBtn" => $this->core->cms_widget_action('jjjBenefit'),

          "jjjW2" => $this->core->cms_widget('jjjW2'),
        );
        return $data;
        break;

      case "rapat-virtual":
        $data = array(
          "virtualBanner" => $this->core->cms_widget('virtualBanner'),
          "virtualW1" => $this->core->cms_widget('virtualW1'),

        );
        return $data;
        break;

      case "penghitungan-orang":
        $data = array(
          "poBanner" => $this->core->cms_widget('poBanner'),
          "poW1Title" => $this->core->cms_label('poW1Title'),
          "poDark1" => $this->core->cms_widget('poDark1'),

          "poW1" => $this->core->cms_widget('poW1'),
          "poW2" => $this->core->cms_widget('poW2'),


        );
        return $data;
        break;


      case "tentang-exaque":
        $data = array(
          "aboutBanner" => $this->core->cms_widget('aboutBanner'),
          "tentangW1" => $this->core->cms_widget('tentangW1'),
          "tentangTabs" => $this->core->cms_widget('tentangTabs'),
          "tentangTabsBtn" => $this->core->cms_widget_action('tentangTabs'),
          "tentangTitle" => $this->core->cms_label('tentangTitle'),
        );
        return $data;
        break;

      case "portofolio":
        $data = array(
          "portfolioBanner" => $this->core->cms_widget('portfolioBanner'),
          "portfW1" => $this->core->cms_widget('portfW1'),

        );
        return $data;
        break;

      case "produk":
        $data = array(
          "productBanner" => $this->core->cms_widget('productBanner'),
          "productW1" => $this->core->cms_widget('productW1'),
        );
        return $data;
        break;


      case "kios-layanan-mandiri":
        $data = array(
          "koisBanner" => $this->core->cms_widget('koisBanner'),
          "koisBannerW1" => $this->core->cms_widget('koisBannerW1'),
        );
        return $data;
        break;

      case "display-signage":
        $data = array(
          "displayBanner" => $this->core->cms_widget('displayBanner'),
          "displayW1" => $this->core->cms_widget('displayW1'),
          "displayHeader" => $this->core->cms_widget('displayHeader'),
          "displayFooter" => $this->core->cms_widget('displayFooter'),

        );
        return $data;
        break;

      case "mesin-penghitung-orang":
        $data = array(
          "penghitungBanner" => $this->core->cms_widget('penghitungBanner'),
          "penghitungW1" => $this->core->cms_widget('penghitungW1'),
          "penghitungHeader" => $this->core->cms_widget('penghitungHeader'),
          "penghitungFooter" => $this->core->cms_widget('penghitungFooter'),
          "penghitungDark" => $this->core->cms_widget('penghitungDark'),

        );
        return $data;
        break;

      case "managed-service-oleh-exaque":
        $data = array(
          "managedBanner" => $this->core->cms_widget('managedBanner'),
          "mw0" => $this->core->cms_widget('mw0'),

          "mw1" => $this->core->cms_widget('mw1'),

          "mT1" => $this->core->cms_label('mT1'),
          "mT2" => $this->core->cms_label('mT2'),
          "mw3" => $this->core->cms_widget('mw3'),
          "mw4" => $this->core->cms_widget('mw4'),

        );
        return $data;
        break;



      case "qmatic-orchestra-solusi-enterprise":
        $data = array(
          "qeBanner" => $this->core->cms_widget('qeBanner'),
          "qeW1" => $this->core->cms_widget('qeW1'),
          "qeW2" => $this->core->cms_widget('qeW2'),
          "qeW3" => $this->core->cms_widget('qeW3'),
          "qeW4Red" => $this->core->cms_widget('qeW4Red'),
          "qeW4Red2" => $this->core->cms_widget('qeW4Red2'),

          "jjtm" => $this->core->cms_widget('jjtm'),


          "ddat" => $this->core->cms_widget('ddat'),


          "ddat1" => $this->core->cms_widget('ddat1'),
          "ddat1w" => $this->core->cms_widget('ddat1w'),

          "ddat2" => $this->core->cms_widget('ddat2'),
          "ddat2w" => $this->core->cms_widget('ddat2w'),

          "ddat3" => $this->core->cms_widget('ddat3'),
          "ddat3w" => $this->core->cms_widget('ddat3w'),

          "ddat4" => $this->core->cms_widget('ddat4'),
          "ddat4w" => $this->core->cms_widget('ddat4w'),

          "ddat5" => $this->core->cms_widget('ddat5'),
          "ddat5w" => $this->core->cms_widget('ddat5w'),

          "ddat6" => $this->core->cms_widget('ddat6'),
          "ddat6w" => $this->core->cms_widget('ddat6w'),


          "qeFooter" => $this->core->cms_widget('qeFooter'),
        );
        return $data;
        break;

      case "qmatic-solo-solusi-berdiri-sendiri":
        $data = array(
          "qsoloBanner" => $this->core->cms_widget('qsoloBanner'),
          "qsoloWTitle" => $this->core->cms_label('qsoloWTitle'),
          "qsoloW1" => $this->core->cms_widget('qsoloW1'),

          "qsoloLabel1" => $this->core->cms_label('qsoloLabel1'),
          "qsoloLabel2" => $this->core->cms_label('qsoloLabel2'),
          "qsoloLabel3" => $this->core->cms_label('qsoloLabel3'),
          "qsoloLabel4" => $this->core->cms_label('qsoloLabel4'),

          "qsoloW2" => $this->core->cms_widget('qsoloW2'),
          "qsoloW3" => $this->core->cms_widget('qsoloW3'),

          "qsoloFooter" => $this->core->cms_widget('qsoloFooter'),
        );
        return $data;
        break;

      case "solusi-solusi-ponsel":
        $data = [
          "solusiPonselWidget1" => $this->core->cms_widget('solusiPonselWidget1'),
          "solusiPonselWidget1_action" => $this->core->cms_widget_action('solusiPonselWidget1'),
          "solusiPonselWidget2" => $this->core->cms_widget('solusiPonselWidget2'),
        ];
        return $data;
        break;

      case "video":
        $data = [
          "library_video" => $this->core->cms_widget('library_video'),
          "library_video_action" => $this->core->cms_widget_action('library_video'),
        ];
        return $data;
        break;


      case "berita":
        $data = [
          "beritaBanner" => $this->core->cms_widget('beritaBanner'),
        ];
        return $data;
        break;


      case "blog":
        $data = [
          "blogBanner" => $this->core->cms_widget('blogBanner'),
        ];
        return $data;
        break;


      case "hubungi-kami":
        $data = [
          "hubTitle" => $this->core->cms_label('hubTitle'),
          "hubTitleContent1" => $this->core->cms_label('hubTitleContent1'),
        ];
        return $data;
        break;

      case "paket-sistem-antrean-ponsel":
        $data = [
          "bannerPaket" => $this->core->cms_widget('bannerPaket'),
          "paketWidget1" => $this->core->cms_widget('paketWidget1'),
          "paketWidget2Title" => $this->core->cms_widget('paketWidget2Title'),
          "paketWidget2" => $this->core->cms_widget('paketWidget2'),
        ];
        return $data;
        break;


      case "umpan-balik-pelanggan":
        $data = [ 
          "umpanBpWidget1" => $this->core->cms_widget('umpanBpWidget1'),
        ];
        return $data;
        break;


      case "operasi-terdistribusi":
        $data = [
          "opDisWidget1" => $this->core->cms_widget('opDisWidget1'), 
        ];
        return $data;
        break;


        case "intelegensi-bisnis":
          $data = [
            "BIWidget1" => $this->core->cms_widget('BIWidget1'), 
          ];
          return $data;
          break;

      default:
        return false;
    }
  }
}
