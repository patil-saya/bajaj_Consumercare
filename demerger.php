<!DOCTYPE html>
<html lang="en">
   <head>
      <?php require_once("head.php"); ?>
     <title>Demerger | Investors | Bajaj Consumer Care Ltd</title>
      <meta  name="description" content="Get access to our internal discussions and minutes.">
   </head>
   <body>
      <?php require_once("header.php"); ?>
      <h2 class="f-black mobileview-text">Demerger</h2>
      <section class="breadcum">
         <img src="assets/Webp/investors-inside-banner.webp" class="img-fluid w-100 main-img" alt="about-breadcum">
         <div class="container breadcum_container">
            <div class="caption-breadcrum">
               <div class="caption-heading  bod-heading">
                  <h1 class="f-black">Demerger</h1>
               </div>
            </div>
         </div>
      </section>
      <section class="announcement general-meeting">
         <div class="container">
            <div class="col-md-12 back-btn-wrap">
               <a href="investor.php" class="back-btn-anchor">
                  <img src="assets/images/Back-btn.png" class="back-img" alt="back-button"/>&nbsp; BACK TO INVESTORS
               </a>
            </div>

            <div class="announcement-wrapper">
               <div class="announcement-single">
                  <img src="assets/images/pdf.png" class="img-fluid" alt="pdf">
                   <h5 class="f-bold">Scheme</h5>
                  <a href="pdf/demerger/Scheme.pdf" download class="common-btn">DOWNLOAD PDF</a>
               </div>
               <div class="announcement-single">
                  <img src="assets/images/pdf.png" class="img-fluid" alt="pdf">
                   <h5 class="f-bold">Effectiveness of Demerger Scheme</h5>
                  <a href="pdf/demerger/Effectiveness_of_Demerger_Scheme.pdf" download class="common-btn">DOWNLOAD PDF</a>
               </div>
               <div class="announcement-single">
                  <img src="assets/images/pdf.png" class="img-fluid" alt="pdf">
                   <h5 class="f-bold">Order - NCLT</h5>
                  <a href="pdf/demerger/Order_NCLT.pdf" download class="common-btn">DOWNLOAD PDF</a>
               </div>
            </div>
            <a href="#" class="top-arrow"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        </div>
      </section>
      <?php require_once("footer.php"); ?>
      <script type="text/javascript">
         AOS.init();
      </script>
      
      <script type="text/javascript">
         // Back to top
         var amountScrolled = 200;
         var amountScrolledNav = 25;

         $(window).scroll(function() {
         if ( $(window).scrollTop() > amountScrolled ) {
            $('.top-arrow').css("display", "block");
         } else {
            $('.top-arrow').css("display", "none");
         }
        
         });

         $('.top-arrow').click(function() {
            $('html, body').animate({
               scrollTop: 0
            }, 200);
            return false;
         });
      </script>
   </body>
</html>