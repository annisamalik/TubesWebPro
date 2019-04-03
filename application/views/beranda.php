<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Loket.com: Buat Event Gratis, Atur Acara & Jual Eventmu Sendiri</title>
	<link rel = "stylesheet" href = "<?php echo base_url('assets/css/main.css') ?>"> 
  <link rel = "stylesheet" href = "<?php echo base_url('assets/css/uikit.css') ?>"> 
  <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url('assets/css/style.css') ?>"> 
     

  <style>
    #modal-tour .uk-modal-dialog.uk-width-auto.uk-margin-auto-vertical[data-v-195c62bf]{background-color:transparent}
    .uk-notification-message-success{color:#595959!important;background-color:#b2e87ad9!important;border-radius:7px!important}.uk-notification-message-success .fa-check-circle{color:#53bea6;font-size:1.5em}.uk-notification-message-danger{color:#595959!important;background-color:#f6c0c2f0!important;border-radius:7px!important}.uk-notification-message-danger .fa-exclamation-circle{color:#f3575a;font-size:1.5em}.header-nav-top{position:absolute;top:0;left:0;right:0;z-index:10}
    .lss-navwhite[data-v-6ddc994f]{background:#fff}.lss-navtransparent>.lss-navbar .icon-loket-profile-header[data-v-6ddc994f]:before,.lss-navtransparent>.lss-navbar .uk-navbar-nav>li>a[data-v-6ddc994f]{color:#fff}.lss-navtransparent>.lss-navbar .navbar-blue-mobile .icon-loket-profile-header[data-v-6ddc994f]:before,.lss-navtransparent>.lss-navbar .navbar-blue-mobile .uk-navbar-nav>li>a[data-v-6ddc994f]{color:#113452}@media (max-width:640px){nav.uk-navbar-container[data-v-6ddc994f]{display:-webkit-box;display:-ms-flexbox;display:flex}nav.uk-navbar-container .to-right[data-v-6ddc994f]{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1;margin-left:0}nav.uk-navbar-container .to-left[data-v-6ddc994f]{margin-left:auto}}
    .main-text{font-size:2.8rem;font-weight:700;color:#fff}.txt-rotate>.wrap{border-right:1px solid hsla(0,0%,100%,.4);padding-right:.3rem;padding-left:10px;padding-right:10px}.sub-text{color:#fff;font-size:1.8rem;font-weight:100}#login-menu .uk-modal-dialog{background-color:#fcfcfc!important}#login-menu.uk-modal{top:80px}.info-tnc{font-size:10px;color:#eee;margin-bottom:30px!important;font-weight:300}@media (max-width:640px){.info-tnc{font-size:8px}}
    
  </style>

</head>
<body>


	<div class="header-nav-top main-nav lss-navtransparent">

		<div class="uk-container lss-navbar uk-animation-fade">
		<nav uk-navbar="" class="uk-navbar-container uk-navbar-transparent navbar-blue-mobile uk-navbar">
		<div class="uk-navbar-left">
			<ul class="uk-navbar-nav">
				<li><a href="/"><img src="<?php echo base_url('assets/img/logo-loket-blue.png') ?>" alt="LOKÉT - Buat Event Page dan Ramaikan Event-mu" class="logo-img"></a></li>
				
			</ul>
		</div>
		<div class="uk-navbar-right uk-visible@m">
			<ul class="uk-navbar-nav">
				
              	<li>
              		<a href="/event">Cari Event</a>
              	</li>
              	<li><a href="/login" class="">Masuk</a></li>
              	<li><a href="#">Menu</a></li>
              	<listyle="display: none;"><a href="#">Kembali</a></li>
              </ul>
          </div>
          <div class="uk-navbar-right uk-hidden@m">
          	<ul class="uk-navbar-nav">
	          	<li>
	          		<a href="#">Menu</a>
	          	</li> <!----> 
	          	<li class="uk-hidden@m" style="display: none;">
	          		<a href="#"><span class="icon-loket-close"></span></a>
	          	</li>
          `</ul>
      	  </div> <!---->
      	</nav>
        </div>
        <div class="uk-container uk-animation-slide-top uk-hidden">
        	<nav uk-navbar="" class="uk-width-1-1 uk-navbar">
        		<div class="uk-navbar-left uk-margin-small-bottom uk-margin-small-top uk-text-middle" style="padding: 0px 20px;"><a href="/" class="uk-link-reset"><!----> <img src="<?php echo base_url('assets/img/logo-loket-white.png') ?>" alt="logo LOKET" class="logo-img loket-logo full-icon"></a> <!----></div> 
        		<div class="uk-navbar-right">
        			<ul class="uk-navbar-nav">
        				<li class="uk-text-bold"><a href="/event">Cari Event</a></li> <li class="uk-text-bold"><a href="/login" class="">Masuk</a></li>
            			<li class="uk-text-bold"><a href="#">Menu</a></li> 
            			<li class="uk-text-bold actived" style="display: none;"><a href="#">Kembali</a></li>
        			</ul>
        		</div> <!---->
        	</nav>
        </div> 
        <div data-v-195c62bf="" id="modal-tour" uk-modal="" class="uk-flex-top uk-modal">
        	<div data-v-195c62bf="" class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
        		<button data-v-195c62bf="" type="button" uk-close="" class="uk-modal-close-outside uk-close uk-icon"><svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" ratio="1">
        			<line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line>
        			<line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line></svg>
        		</button> 
        		<img data-v-195c62bf="" src="<?php echo base_url('assets/img/buat-event.png') ?>" alt="">
        	</div>
        </div> <!---->
    </div>



<div id="landing-page">
  <div class="uk-cover-container uk-height-viewport"><!----> <!----> 
        <div class="uk-overlay uk-position-center uk-text-center" style="z-index: 1;"><!----> 
          <h1 class="uk-heading-hero adjust-heading-hero uk-margin-small-top">SEKARANG KAMU BISA<br>BUAT, ATUR, DAN JUAL<br class="uk-hidden@s">EVENTMU SENDIRI
      <br> <span data-period="500" data-rotate="[]" class="txt-rotate lss-text-white" style="background-color: transparent;"><span class="wrap">#RayakanD</span></span>
    </h1> 
    <a href="/buat-event" class="uk-button uk-button-primary lss-button-cta gradient-button uk-margin-xlarge-bottom">Buat Eventmu Sekarang</a>
      </div> <!----> <!---->
  </div>
</div>

</body>
</html>