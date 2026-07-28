<!DOCTYPE html>
<html lang="en">
   <head>
     <?php require_once("head.php"); ?>
       <title>ANUPAM DUTTA | Bajaj Consumer Care Ltd</title>
       <?php $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>
      <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
      
       <meta  name="description" content="Check out the board of directors at Bajaj Consumer Care Limited, one of the fastest-growing companies that provides the best hair care and skin care products.">
        <meta property="og:title" content="Our Chairman | Bajaj Consumer Care Ltd" />
<meta property="og:url" content="<?php echo $actual_link ?>/anupam_dutta.php" />
<meta property="og:description" content="Check out the board of directors at Bajaj Consumer Care Limited, one of the fastest-growing companies that provides the best hair care and skin care products." />
<meta property="og:image" content="<?php echo $host ?>/assets/images/meta-images/Leadership.jpg" />
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
                  <img src="assets/images/Anupam_Dutta.jpg" class="img-fluid" alt="MR. ANUPAM DUTTA">
               </div>
               </div>
               <div class="vision-single" style="margin-top:75px;">
                  <h2 class="f-bold">MR. ANUPAM DUTTA</h2>
                  <h3 class="f-semibold">Independent, Non-Executive</h3>
                  <p class="f-regular">MMr. Anupam Dutta joined the Board as an Independent Director on 5th February, 2024. Mr. Dutta is a Computer Science and Engineering Graduate from Jadavpur University. He is also a Post- Graduate (Management) from IIM, Calcutta. </p>
                  <p class="f-regular">He, along with his wife, have founded an e-commerce venture, www.arteastic.in. Mr. Dutta has also been a strategic advisor to FMCG businesses like Naturell India, a large edible nut business and Foods MNC from France on marketing, sales and commercial areas. </p>
                  <p class="f-regular">He has over 30 years of experience in marketing, sales and general management.</p>
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