<!DOCTYPE html>
<html lang="en">
   <head>
      <?php require_once("head.php"); ?>
      <title>Our Brands | Bajaj Consumer Care Ltd</title>
      
      <?php $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>
      <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
      <meta  name="description" content="Check out a few of India’s largest hair and skin category brands Bajaj Almond Drops, 100% Pure, Natyv soul and Nomarks, to name a few.">
      <meta property="og:title" content="Our Brands | Bajaj Consumer Care Ltd" />
      <meta property="og:url" content="our-brands.php" />
      <meta property="og:description" content="Check out a few of India’s largest hair and skin category brands Bajaj Almond Drops, 100% Pure, Natyv soul and Nomarks, to name a few." />
      <meta property="og:image" content="assets/images/Our-brands-live.jpg" />
         
      <style>
         @media (max-width: 767px){
            .our-brand-main .brand-wrapper .brand-single .logocls {
               width: unset !important;
            }
            .brahmi{
               height:100px !important;
            }
         }
         .brahmi{
            height: 140px;
         }
      </style>  
   </head>
   <body>

<?php require_once("header.php"); ?>
 <h2 class="f-black mobileview-text">OUR BRANDS</h2>
    <section class="breadcum">
         <img src="assets/Webp/our-brand-overview/Our_brand_banner.webp" class="img-fluid w-100 main-img" alt="about-breadcum">
         <div class="container breadcum_container">
            <div class="caption-breadcrum">
               <div class="caption-heading  bod-heading">
                  <h1 class="f-black">OUR BRANDS</h1>
               </div>
            </div>
         </div>
      </section>


     <section class="our-brand-main">
        <div class="container">
            <nav class="cus-nav aos-init aos-animate">
            <ul class="nav nav-tabs">
                <li class="active"><a class="nav-link active f-medium" data-toggle="tab" href="#all">All</a></li>
                <li><a class="nav-link f-medium" data-toggle="tab" href="#hair-care">Hair care</a></li>
                <li><a class="nav-link f-medium" data-toggle="tab" href="#skin-care">Skin care</a></li>
                <li><a class="nav-link f-medium" data-toggle="tab" href="#hygiene">Hygiene</a></li>
            </ul>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="all" role="tabpanel">
               <div class="brand-wrapper">
                  <a  href="almonds-drops-hair-oil.php" class="brand-single">
                    <img src="assets/images/barnd-logo1.svg" class="img-fluid h-100" alt="our-brand" loading="lazy">
                  </a>
                  <a href="coconut-oils.php" class="brand-single">
                     <img src="assets/images/barnd-logo4.svg" class="img-fluid h-100" alt="our-brand" loading="lazy">
                  </a>
                  <a href="bajaj-gulab-jal.php" class="brand-single" style="background:#0a3579;">
                     <img src="assets/images/Gulab_jal_logo_02.png" class="img-fluid logocls h-100" alt="our-brand" loading="lazy">
                  </a>
                  <a href="bajaj-pure-henna.php" class="brand-single" style="background:#1d3f72;">
                     <img src="assets/images/henna_logo_01.png" class="img-fluid logocls h-100" alt="our-brand" loading="lazy">
                  </a>
                  <a href="100-percent-pure.php" class="brand-single">
                     <img src="assets/images/barnd-logo5.svg" class="img-fluid h-100" alt="our-brand" loading="lazy">
                  </a>
                  <a href="natyv-soul.php" class="brand-single">
                     <img src="assets/images/brand-logo6.svg" class="img-fluid h-100" alt="our-brand" loading="lazy">
                  </a>
                  <a href="no-marks.php" class="brand-single bg-green">
                     <img src="assets/images/nomark-home.jpg" class="img-fluid h-100 logocls" alt="our-brand" loading="lazy">
                  </a>
                    <a href="sarson-amla-hair-oil.php" class="brand-single">
                     <img src="assets/images/sarso-aawala.svg" class="img-fluid h-100" alt="our-brand" loading="lazy">
                  </a>
                  <a href="brahmi-amla.php" class="brand-single">
                     <img src="assets/images/BRAHMI-AMLA-LOGO-5.png" class="img-fluid brahmi logocls h-100" alt="our-brand" loading="lazy">
                  </a>
                  <a href="amla-aloe-vera-hair-oil.php" class="brand-single" style="background:#fbf7d2;">
                     <img src="assets/images/Awla_alovera.png" class="img-fluid logocls h-100" alt="our-brand" loading="lazy">
                  </a>
               </div>
               <a href="other-products.php" class="common-btn our-brand-btn">other products</a>
            </div>    
            <div class="tab-pane" id="hair-care" role="tabpanel">
               <div class="brand-wrapper">
                  <a  href="almond-hair-product.php" class="brand-single">
                    <img src="assets/images/barnd-logo1.svg" class="img-fluid h-100" alt="our-brand" loading="lazy">
                  </a>
                   <a href="coconut-oils.php" class="brand-single">
                     <img src="assets/images/barnd-logo4.svg" class="img-fluid h-100" alt="our-brand" loading="lazy">
                  </a>
                    <a href="100-percent-pure.php" class="brand-single">
                     <img src="assets/images/barnd-logo5.svg" class="img-fluid h-100" alt="our-brand" loading="lazy">
                  </a>
                  <a href="natyv-soul.php" class="brand-single">
                     <img src="assets/images/brand-logo6.svg" class="img-fluid h-100" alt="our-brand" loading="lazy">
                  </a>
                   <a href="sarson-amla-hair-oil.php" class="brand-single">
                     <img src="assets/images/sarso-aawala.svg" class="img-fluid h-100" alt="our-brand" loading="lazy">
                  </a>
                  <a href="brahmi-amla.php" class="brand-single">
                     <img src="assets/images/BRAHMI-AMLA-LOGO-5.png" class="img-fluid h-100 brahmi logocls" alt="our-brand" loading="lazy">
                  </a>
                  <a href="bajaj-pure-henna.php" class="brand-single" style="background:#1d3f72;">
                     <img src="assets/images/henna_logo_01.png" class="img-fluid h-100 logocls" alt="our-brand" loading="lazy">
                  </a>
                  <a href="amla-aloe-vera-hair-oil.php" class="brand-single" style="background:#fbf7d2;">
                     <img src="assets/images/Awla_alovera.png" class="img-fluid h-100 logocls" alt="our-brand" loading="lazy">
                  </a>
               </div>
                 <a href="other-hair-care.php" class="common-btn our-brand-btn">other products</a>
            </div>
             <div class="tab-pane" id="skin-care" role="tabpanel">
               <div class="brand-wrapper">
                  <a  href="almond-skin-product.php" class="brand-single">
                  <img src="assets/images/barnd-logo1.svg" class="img-fluid h-100" alt="our-brand" loading="lazy">
                  </a>
                  <a href="nomarks-skin-product.php" class="brand-single bg-green">
                     <img src="assets/images/nomark-home.jpg" class="img-fluid h-100 logocls" alt="our-brand" loading="lazy">
                  </a>
                  <a href="bajaj-gulab-jal.php" class="brand-single" style="background:#0a3579;">
                     <img src="assets/images/Gulab_jal_logo_02.png" class="img-fluid h-100 logocls" alt="our-brand" loading="lazy">
                  </a>
               </div>
            </div>
             <div class="tab-pane" id="hygiene" role="tabpanel">
            <div class="brand-wrapper">
               <a href="nomarks-hygine-product.php" class="brand-single bg-green">
                  <img src="assets/images/nomark-home.jpg" class="img-fluid h-100 logocls" alt="our-brand" loading="lazy">
               </a>
            </div>
                 <a href="other-hygine.php" class="common-btn our-brand-btn">other products</a>
            </div>
         
        </div>
        </div>
     </section>
         <?php include("footer.php"); ?>
      
      <script type="text/javascript">
          AOS.init();
      </script>
     
   </body>
</html>