<!DOCTYPE html>
<html lang="en">
   <head>
     <?php require_once("head.php"); ?>
       <title>Apoorva Kapoor | Bajaj Consumer Care Ltd</title>
       <?php $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>
      <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
      
       <meta  name="description" content="Check out the leaders at Bajaj Consumer Care Limited, one of the fastest-growing companies that provides the best hair care and skin care products.">
        <meta property="og:title" content="LEADERSHIP | Bajaj Consumer Care Ltd" />
<meta property="og:url" content="<?php echo $actual_link ?>/Apoorva-kapoor.php" />
<meta property="og:description" content="Check out the leaders at Bajaj Consumer Care Limited, one of the fastest-growing companies that provides the best hair care and skin care products." />
<meta property="og:image" content="<?php echo $host ?>/assets/images/meta-images/Leadership.jpg" />
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
                  <img src="assets/images/Apoorva_Kapoor.jpg" class="img-fluid" alt="Apoorva Kapoor">
               </div>
               </div>
               <div class="vision-single ">
                  <h2 class="f-bold">Ms. Apoorva Kapoor</h2>
                      <h3 class="f-semibold">Head – Human Resources</h3>
                  <p class="f-regular">Apoorva has joined in July 23 heading the Human Resources function. She brings with herself 18 years of experience in Manufacturing & FMCG industries. She has worked in Tata Motors in varied assignments which involved setting up of Greenfield projects in domestic as well as international locations. She has also actively led the cultural transformation journey in Kraft Heinz. Her last assignment was with Zydus Wellness where she was heading Human Resources where she was actively involved in post integration organisation building.Apoorva has completed her MBA (HR) from SCMHRD, Pune & also holds a Gold Medal in M.Sc in Applied Economics from Lucknow University.</p>
                 
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