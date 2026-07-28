<!DOCTYPE html>
<html lang="en">
   <head>
     <?php require_once("head.php"); ?>
       <title>ABHISHEK PRASAD | Bajaj Consumer Care Ltd</title>
       <?php $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>

      <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

       <meta  name="description" content="Check out the leaders at Bajaj Consumer Care Limited, one of the fastest-growing companies that provides the best hair care and skin care products.">
        <meta property="og:title" content="LEADERSHIP | Bajaj Consumer Care Ltd" />
<meta property="og:url" content="<?php echo $actual_link ?>/Abhishek-Prasad.php" />
<meta property="og:description" content="Check out the leaders at Bajaj Consumer Care Limited, one of the fastest-growing companies that provides the best hair care and skin care products." />
<meta property="og:image" content="<?php echo $host; ?>/assets/images/meta-images/Leadership.jpg" />
   </head>
   <body>
<?php require_once("header.php"); ?>
 <h2 class="f-black mobileview-text">LEADERSHIP</h2>
    <section class="breadcum">
         <img src="assets/images/bod-banner.png" class="img-fluid w-100 main-img" alt="about-breadcum">
         <div class="container breadcum_container">
            <div class="caption-breadcrum">
               <div class="caption-heading  bod-heading">
                  <h1 class="f-black">LEADERSHIP</h1>
               </div>
            </div>
         </div>
      </section>


      <section class="vision bod">
         <div class="container">
            <div class="vision-wrapper main-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
               <div class="vision-single single-vision-bod">
                  <div class="img-wrapp">
                  <img src="assets/images/Mr.-Abhishek-Prasad.jpg" class="img-fluid" alt="MR. DILIP KUMAR MALOO">
               </div>
               </div>
               <div class="vision-single ">
                  <h2 class="f-bold">MR. ABHISHEK PRASAD</h2>
                   <h3 class="f-semibold">Head - Marketing</h3>
                  <p class="f-regular">Abhishek Prasad is an BTech from IIT, BHU and MBA from FMS, Delhi. He has got around 21 years of Marketing and Brand Management experience in the FMCG Industry. Prior to joining BCCL, he was associated with Pidilite Industries. In his previous assignments, he was also associated with Kraft Heinz and Reckitt Benckiser. During his stints in various organizations, he conceptualized and executed creative marketing programs for established brands.</p>
                 
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