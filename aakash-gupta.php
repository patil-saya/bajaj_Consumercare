<!DOCTYPE html>
<html lang="en">
   <head>
     <?php require_once("head.php"); ?>
       <title>AAKASH U GUPTA | Bajaj Consumer Care Ltd</title>
       <?php $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>
      <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

       <meta  name="description" content="Check out the leaders at Bajaj Consumer Care Limited, one of the fastest-growing companies that provides the best hair care and skin care products.">
        <meta property="og:title" content="LEADERSHIP | Bajaj Consumer Care Ltd" />
<meta property="og:url" content="<?php echo $actual_link ?>/aakash-gupta.php" />
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
                  <img src="assets/Webp/Leadership/aakashgupta_leader.webp" class="img-fluid" alt="Mr. AAKASH U GUPTA">
               </div>
               </div>
               <div class="vision-single ">
                  <h2 class="f-bold">Mr. AAKASH U GUPTA</h2>
                    <h3 class="f-semibold">Head - Financedfljef</h3>
                  <p class="f-regular">Joined BCCL in 2025, Aakash is a Chartered Accountant & holds a Master’s degree in Management from IIM Indore. He has a professional experience of 17 years and was associated with Sesa Care Pvt. Ltd. as Chief Financial Officer. He has also worked with Fullife Healthcare Pvt. Ltd. and Sleep Management Pvt. Ltd.</p>
                 
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