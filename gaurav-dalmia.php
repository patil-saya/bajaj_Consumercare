<!DOCTYPE html>
<html lang="en">
   <head>
     <?php require_once("head.php"); ?>
       <title>GAURAV DALMIA | Bajaj Consumer Care Ltd</title>
      <?php $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>
      <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
       <meta  name="description" content="Check out the board of directors at Bajaj Consumer Care Limited, one of the fastest-growing companies that provides the best hair care and skin care products.">
        <meta property="og:title" content="Our Chairman | Bajaj Consumer Care Ltd" />
<meta property="og:url" content="Gaurav-Dalmia.php" />
<meta property="og:description" content="Check out the board of directors at Bajaj Consumer Care Limited, one of the fastest-growing companies that provides the best hair care and skin care products." />
<meta property="og:image" content="assets/images/meta-images/Leadership.jpg" />
   </head>
   <body>
<?php require_once("header.php"); ?>
 <h2 class="f-black mobileview-text">BOARD OF DIRECTORS</h2>
    <section class="breadcum">
         <img src="assets/images/bod-banner.png" class="img-fluid w-100 main-img" alt="about-breadcum">
         <div class="container breadcum_container">
            <div class="caption-breadcrum">
               <div class="caption-heading  bod-heading">
                  <h1 class="f-black">BOARD OF DIRECTORS</h1>
               </div>
            </div>
         </div>
      </section>


      <section class="vision bod">
         <div class="container">
            <div class="vision-wrapper main-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
               <div class="vision-single single-vision-bod">
                  <div class="img-wrapp">
                  <img src="assets/images/gaurav.png" class="img-fluid" alt="MR. GAURAV DALMIA">
               </div>
               </div>
               <div class="vision-single ">
                  <h2 class="f-bold">MR. GAURAV DALMIA</h2>
                  <h3 class="f-semibold">Independent & Non-Executive Director</h3>
                  <p class="f-regular">Mr. Gaurav Dalmia holds a Bachelor’s Degree in Computer Science from Salford University, UK, and an MBA with Beta Gamma Sigma honours from Colombia University, USA. He has cofounded ‘Infinity’ and was selected as the Global Leader for Tomorrow for the year 2000 by the World Economic Forum.</p>
                 
               </div>
            </div>
         </div>
      </section>
          
     <?php require_once("footer.php"); ?>
      <script type="text/javascript">
          AOS.init();
      </script>
     
   </body>
</html>