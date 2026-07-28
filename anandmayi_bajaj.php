<!DOCTYPE html>
<html lang="en">
   <head>
     <?php require_once("head.php"); ?>
       <title>ANANDAMAYI BAJAJ | Bajaj Consumer Care Ltd</title>
       <?php $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>
      <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
       <meta  name="description" content="Check out the leaders at Bajaj Consumer Care Limited, one of the fastest-growing companies that provides the best hair care and skin care products.">
        <meta property="og:title" content="LEADERSHIP | Bajaj Consumer Care Ltd" />
<meta property="og:url" content="<?php echo $actual_link ?>anandmayi_bajaj.php" />
<meta property="og:description" content="Check out the leaders at Bajaj Consumer Care Limited, one of the fastest-growing companies that provides the best hair care and skin care products." />
<meta property="og:image" content="<?php echo $host ?>assets/images/meta-images/Leadership.jpg" />
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
                  <img src="assets/images/anandmayiBajaj_BCCL.jpg" class="img-fluid" alt="MS. ANANDAMAYI BAJAJ">
               </div>
               </div>
               <div class="vision-single ">
                  <h2 class="f-bold">MS. ANANDAMAYI BAJAJ</h2>
                  <h3 class="f-semibold">General Manager - Group Strategy</h3>
                    <p class="f-regular">Ms. Anandamayi Bajaj represents the fifth generation of leadership at the Bajaj Group, a legacy that traces back to its visionary founder, Shri Jamnalal Bajaj. She works closely with Mr. Kushagra Nayan Bajaj, Chairman of Bajaj Group, and collaborates with senior leadership across Bajaj Hindusthan Sugar, Bajaj Consumer Care, Bajaj Energy, and the Bajaj Foundation. Her role focuses on cross-functional analysis, strategic financial planning, and growth initiatives for the group businesses, bridging the Group’s rich heritage with modern energy and innovation.</p>
                    <p>Anandamayi graduated in Financial Economics and Mathematics from Columbia University, New York, equipping her with strong analytical capabilities and a global business perspective. Inspired by the Group’s core values of trust, nation-building, and inclusive growth, she is passionate about sustainability, animal welfare, rural development, and women-led initiatives, and aims to champion projects that create lasting national, social and environmental impact.</p> 
                    <p>As she embarks on her leadership journey, Anandamayi Bajaj envisions transforming legacy enterprises into future-ready businesses while upholding the ethos of responsibility and purpose that has defined the Bajaj Group for over 100 years.</p>
                 
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