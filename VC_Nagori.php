<!DOCTYPE html>
<html lang="en">
   <head>
     <?php require_once("head.php"); ?>
       <title>VC NAGORI | Bajaj Consumer Care Ltd</title>
       <?php $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>
      <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
       <meta  name="description" content="Check out the board of directors at Bajaj Consumer Care Limited, one of the fastest-growing companies that provides the best hair care and skin care products.">
        <meta property="og:title" content="MR. VC NAGORI | Bajaj Consumer Care Ltd" />
<meta property="og:url" content="VC_Nagori.php" />
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
                  <img src="assets/images/V_C_Nagori.jpg" class="img-fluid" alt="MR. VC NAGORI">
               </div>
               </div>
               <div class="vision-single" style="margin-top:75px;">
                  <h2 class="f-bold">MR. VC NAGORI</h2>
                  <h3 class="f-semibold">Non-Independent, Non-Executive</h3>
                  <p class="f-regular">Mr. Nagori joined the Board on 5th February, 2024. He is a member of the Institute of Chartered Accountants of India and He has been associated with the Bajaj Group since 1991 and has worked with the FMCG business of the Bajaj Group and Bajaj Consumer Care Limited as CFO & President Finance from 1991 till 2017. He has 35+ years of experience in finance and accounts. </p>
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