<!DOCTYPE html>
<html lang="en">
   <head>
     <?php require_once("head.php"); ?>
       <title>Anuj Awasthi | Bajaj Consumer Care Ltd</title>
       <?php $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>
      <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
      <link rel="canonical" href="<?php echo $actual_link; ?>"/>
       <meta  name="description" content="Check out the leaders at Bajaj Consumer Care Limited, one of the fastest-growing companies that provides the best hair care and skin care products.">
        <meta property="og:title" content="LEADERSHIP | Bajaj Consumer Care Ltd" />
<meta property="og:url" content="<?php echo $actual_link ?>/Dilip-Kumar-Maloo.php" />
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
                  <img src="assets/images/Anuj-Awasthi_080723.jpg" class="img-fluid" alt="MR. Anuj Awasthi">
               </div>
               </div>
               <div class="vision-single ">
                  <h2 class="f-bold">Mr. Anuj Awasthi</h2>
                      <h3 class="f-semibold">National Sales Head</h3>
                  <p class="f-regular">Anuj has joined us in June 21 & heads the Domestic Sales portfolio. He brings with himself around 21 years of rich experience in the Consumer Goods industry. In Bajaj Consumer care, he was previously heading the Organised Trade & International Business portfolio where he had successfully led multiple strategic assignments leading to growth & expansion of the company.  His last assignment was with Godrej Consumer Products Ltd., where he held multiple senior portfolios in Organised Trade, General Trade, Trade & Shopper Marketing & Brand Marketing.<br><br>Anuj has done his MBA (Marketing) from Jamnalal Bajaj Institute of Management Studies & also holds a B.E. in Production Engineering from Shivaji University.</p>
                 
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