<!DOCTYPE html>
<html lang="en">
   <head>
      <?php require_once("head.php"); ?>
     <title>ESOPS | Investors | Bajaj Consumer Care Ltd</title>
      <?php $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>
      <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
      <meta  name="description" content="Learn details about our employee ownership plan.">
        <meta property="og:title" content="ESOPS | Investors | Bajaj Consumer Care Ltd" />
<meta property="og:url" content="investors-esops.php" />
<meta property="og:description" content="Learn details about our employee ownership plan." />
<meta property="og:image" content="assets/images/Anouncement-live.jpg" />
   </head>
   <body>
      <?php require_once("header.php"); ?>
      <h2 class="f-black mobileview-text">ANNOUNCEMENTS</h2>
      <section class="breadcum">
         <img src="assets/Webp/investors-inside-banner.webp" class="img-fluid w-100 main-img" alt="about-breadcum">
         <div class="container breadcum_container">
            <div class="caption-breadcrum">
               <div class="caption-heading  bod-heading">
                  <h1 class="f-black">ESOPS</h1>
               </div>
            </div>
         </div>
      </section>
      <section class="announcement esops">
         <div class="container">
            <div class="col-md-12 back-btn-wrap">
               <a href="investor.php" class="back-btn-anchor">
                  <img src="assets/images/Back-btn.png" class="back-img" alt="back-button"/>&nbsp; BACK TO INVESTORS
               </a>
            </div>
           <!--  <div class="heading">
               <h2 class="f-bold text-center">ESOPS</h2>
            </div> -->
            <div class="announcement-wrapper">
               <div class="announcement-single">
                  <img src="assets/images/pdf.png" class="img-fluid" alt="pdf">
                  <h5 class="f-bold">Intimation of Options Granted</h5>
                  <a href="pdf/esops/Intimation_of_Options_Granted.pdf" download class="common-btn">DOWNLOAD PDF</a>
               </div>
               <div class="announcement-single">
                  <img src="assets/images/pdf.png" class="img-fluid" alt="pdf">
                  <h5 class="f-bold">Details of stock options</h5>
                  <a href="pdf/esops/details-of-stock-options.pdf" download class="common-btn">DOWNLOAD PDF</a>
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