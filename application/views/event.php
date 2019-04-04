  <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Loket.com: Buat Event Gratis, Atur Acara & Jual Eventmu Sendiri</title>
  <link rel = "stylesheet" href = "<?php echo base_url('assets/css/boot.css') ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<style>
html{
  font-family: Roboto,sans-serif;
  font-size:16px;
}
body{
  background-color: black
}
.carousel-inner .item{
height:500px;
width: 100%;
background-size:cover;
background-position:center center;
overflow:hidden;
}

.banner-title {
    margin: 100px 0 0 75px;
}
.custom{
  margin-bottom:50px;
}
.ratakiri{
  padding: 15px 40px;
  background-size:cover;
}
.blue-color{
  background-color: #113452;
}
.text-white{
  color:white;
}
.gray-color{
  background-color: #ededed;
}

.uk-button{margin:0;border:none;border-radius:0;overflow:visible;font:inherit;color:inherit;text-transform:none;display:inline-block;box-sizing:border-box;padding:0 30px;vertical-align:middle;font-size:.875rem;line-height:38px;text-align:center;text-decoration:none;font-weight:500;border-radius:5px;text-transform:uppercase;transition:.1s ease-in-out;transition-property:color,background-color,border-color}
.uk-button:not(:disabled){cursor:pointer}
.uk-button::-moz-focus-inner{border:0;padding:0}
.uk-button:hover{text-decoration:none}
.uk-button:focus{outline:0}
.uk-button-default{background-color:transparent;color:#4d4d4d;border:1px solid #d8d8d8}
.uk-button-default:focus,.uk-button-default:hover{background-color:transparent;color:#4d4d4d;border-color:#a5a5a5}
.uk-button-default.uk-active,.uk-button-default:active{background-color:transparent;color:#4d4d4d;border-color:#8c8c8c}
.uk-button-primary{background-color:#e86b32;color:#fff;border:1px solid transparent}
.uk-button-primary:focus,.uk-button-primary:hover{background-color:#e55a1b;color:#fff}
.uk-button-primary.uk-active,.uk-button-primary:active{background-color:#d05117;color:#fff}
.uk-button-secondary{background-color:#222;color:#fff;border:1px solid transparent}
.uk-button-secondary:focus,.uk-button-secondary:hover{background-color:#151515;color:#fff}
.uk-button-secondary.uk-active,.uk-button-secondary:active{background-color:#080808;color:#fff}
.uk-button-danger{background-color:#f0506e;color:#fff;border:1px solid transparent}
.uk-button-danger:focus,.uk-button-danger:hover{background-color:#ee395b;color:#fff}
.uk-button-danger.uk-active,.uk-button-danger:active{background-color:#ec2147;color:#fff}
.uk-button-danger:disabled,.uk-button-default:disabled,.uk-button-primary:disabled,.uk-button-secondary:disabled{
  background-color:transparent;color:#9f9f9f;border-color:#d8d8d8}
.uk-button-small{padding:0 15px;line-height:28px;font-size:.875rem}
.uk-button-large{padding:0 40px;line-height:53px;font-size:.875rem}
.uk-button-text{padding:0;line-height:1.5;background:0 0;color:#4d4d4d;position:relative}
.uk-button-text::before{content:"";position:absolute;bottom:0;left:0;right:100%;border-bottom:1px solid #4d4d4d;transition:right .3s ease-out}
.uk-button-text:focus,.uk-button-text:hover{color:#4d4d4d}
.uk-button-text:focus::before,.uk-button-text:hover::before{right:0}
.uk-button-text:disabled{color:#9f9f9f}.uk-button-text:disabled::before{display:none}
.uk-button-link{padding:0;line-height:1.5;background:0 0;color:#e86b32}
.uk-button-link:focus,.uk-button-link:hover{color:#e86b32;text-decoration:underline}
.uk-button-link:disabled{color:#9f9f9f;text-decoration:none}
.uk-button-group{display:inline-flex;vertical-align:middle;position:relative}
.uk-button-group>.uk-button:nth-child(n+2),.uk-button-group>div:nth-child(n+2) .uk-button{margin-left:-1px}
.uk-button-group .uk-button.uk-active,.uk-button-group .uk-button:active,.uk-button-group .uk-button:focus,.uk-button-group .uk-button:hover{
  position:relative;z-index:1}

.uk-form-icon{position:absolute;top:0;bottom:0;left:0;width:40px;display:inline-flex;justify-content:center;align-items:center;color:#9f9f9f}
.uk-form-icon:hover{color:#595959}
.uk-form-icon:not(a):not(button):not(input){pointer-events:none}
.uk-form-icon:not(.uk-form-icon-flip)+.uk-input{padding-left:40px!important}
.uk-form-icon-flip{right:0;left:auto}
.uk-form-icon-flip+.uk-input{padding-right:40px!important}


</style>
</head>
<body>
  
 
<div class="container-fluid">
   <div class="row">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class='item active center' style='background-image: url(<?php echo base_url('assets/img/ss5.jpg') ?>)'>
      <div class="banner-title">
        <div class="row">
          <div class="col-md-4 h1 "><strong>LOKET ROADSHOW PALEMBANG</strong></div>
        </div>
        <div class="row">
          <div class="col-md-4 custom">Siap-siap Event Creator Palembang! #LOKETROADSHOW2019 bakal hadir di kotamu. Yuk, daftar di sini dan belajar bikin event langsung dari ahlinya</div>
        </div>
        <div class="row">
          <div class="col-md-4 "><a href="/buat-event" class="uk-button uk-button-primary text-uppercase"><strong>Ikutan Dong</strong></a></div>
        </div>

      </div>
    </div>
      <div class='item' style='background-image: url(<?php echo base_url('assets/img/ss4.jpg') ?>)'>
      <div class="banner-title">
        <div class="row">
          <div class="col-md-4 h1 "><strong>LOKET ROADSHOW LAMPUNG</strong></div>
        </div>
        <div class="row">
          <div class="col-md-4 custom">Event Creator Lampung wajib daftar acara yang satu ini! Belajar bareng bikin event di #LOKETROADSHOW2019 langsung dari para ahlinya. Yuk, daftar!</div>
        </div>
        <div class="row">
          <div class="col-md-4 "><a href="/buat-event" class="uk-button uk-button-primary text-uppercase"><strong>Ikutan Dong</strong></a></div>
        </div>

      </div>
    </div>
      <div class='item' style='background-image: url(<?php echo base_url('assets/img/ss7.png') ?>)'>
      <div class="banner-title">
        <div class="row">
          <div class="col-md-4 h1 text-white"><strong>LOKETALKS WITH PRAMBORS</strong></div>
        </div>
        <div class="row">
          <div class="col-md-4 custom text-white">Kali ini, LOKETALKS gandeng PRAMBORS buat ngebahas tips dan trik pedekate engan artis, alias gimana cara berkomunikasi dan bernegosiasi dengan artis untuk meramaikan pensi lo. Pembicaranya keren-keren loh!</div>
        </div>
        <div class="row">
          <div class="col-md-4 "><a href="/buat-event" class="uk-button uk-button-primary text-uppercase"><strong>Kuy Daftar</strong></a></div>
        </div>

      </div>
    </div>

    <div class='item' style='background-image: url(<?php echo base_url('assets/img/ss1.jpg') ?>)'>
      <div class="banner-title">
        <div class="row">
          <div class="col-md-4 h1"><strong>Temukan berbagai event seru di sekitarmu</strong></div>
        </div>
        <div class="row">
          <div class="col-md-4 custom">Sedang mencari event seru untuk diramaikan? Kamu berada di tempat yang tepat! Temukan berbagai jenis event menarik di sini.</div>
        </div>
        <div class="row">
          <div class="col-md-4 "><a href="/buat-event" class="uk-button uk-button-primary text-uppercase"><strong>Cari Event Sekarang</strong></a></div>
        </div>

      </div>
    </div>

    <div class='item' style='background-image: url(<?php echo base_url('assets/img/ss3.jpg') ?>)'>
      <div class="banner-title">
        <div class="row">
          <div class="col-md-4 h1"><strong>Rayakan Pensi dengan LOKET</strong></div>
        </div>
        <div class="row">
          <div class="col-md-4 custom">Gak usah bingung atur waktu persiapan Pensi & kerepotan sendiri atur pendistribusian tiketnya. LOKET siap bantu persiapannya!</div>
        </div>
        <div class="row">
          <div class="col-md-4 "><a href="/buat-event" class="uk-button uk-button-primary text-uppercase"><strong>Yuk, Buat Pensi Sekarang!</strong></a></div>
        </div>

      </div>
    </div>

    <div class='item' style='background-image: url(<?php echo base_url('assets/img/ss2.jpg') ?>)'>
      <div class="banner-title">
        <div class="row">
          <div class="col-md-4 h1 text-white"><strong>Jungleland</strong></div>
        </div>
        <div class="row">
          <div class="col-md-4 custom">Bosan dengan liburan yang itu-itu aja? Butuh sesuatu untuk memacu adrenalin atau menambah wawasan? Mending ke JungleLand Adventure Theme Park aja!</div>
        </div>
        <div class="row">
          <div class="col-md-4 "><a href="/buat-event" class="uk-button uk-button-primary text-uppercase"><strong>Info Selengkapnya</strong></a></div>
        </div>

      </div>
    </div>

    <div class='item' style='background-image: url(<?php echo base_url('assets/img/ss6.jpg') ?>)'>
      <div class="banner-title">
        <div class="row">
          <div class="col-md-4 h1"><strong>Nussa Ukhuwah Show</strong></div>
        </div>
        <div class="row">
          <div class="col-md-4 custom ">Event edukatif dan ramah anak seperti ini bisa jadi inspirasi tema event kamu selanjutnya!</div>
        </div>
        <div class="row">
          <div class="col-md-4 "><a href="/buat-event" class="uk-button uk-button-primary text-uppercase"><strong>Info Selengkapnya</strong></a></div>
        </div>

      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" style="background:none">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" style="background:none">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="row ratakiri blue-color">
  <div class="h3 text-white col-md-6"><strong>Temukan</strong> Event Menarik Lainnya</div>
  <div class="h3 text-white col-md-6">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Cari event di sini...">
      <span class="input-group-btn ">
        <button class="btn uk-button-primary" type="button">  <i class="fas fa-search"></i>  </button>
      </span>
    </div>
  </div>
</div>
<div class="row ratakiri gray-color">
  <div class="col-md-12 h2"><strong>Kategori</strong> Event</div></div>
<div class="row ratakiri gray-color">
  <div class="col-md-4 d-flex-inline">
    <ul>
      <li>Semua Kategori</li>
      <li>Festival Elektronic Dance Music</li>
      <li>Festival General</li>
      <li>Concert</li>
      <li>Sports</li>
      <li>Exhibition</li>
      <li>Conference</li>
      <li>Workshop</li>
      <li>Theater & Drama Musical</li>
      <li>Attraction</li>
      <li>Accomodation</li>
      <li>Transportation</li>
    </ul>
    Pilih kategori event yang sesuai dengan preferensi kamu dan temukan event seru untuk mendapatkan pengalaman baru.
  </div>
  <div class="col-md-8"></div>
</div>

</div>

</body>
</html>