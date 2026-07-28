 <!DOCTYPE html>
<html lang="en">
   <head>
      <?php require_once("head.php"); ?>
     <title>Nomination and other related Forms | Investors | Bajaj Consumer Care Ltd</title>
      <?php $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>
      <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
      <meta  name="description" content="Check out all the latest company updates here.">
       <meta property="og:title" content="Announcements | Investors | Bajaj Consumer Care Ltd" />
<meta property="og:url" content="annoucnmnet2022.php" />
<meta property="og:description" content="Check out all the latest company updates here." />
<meta property="og:image" content="assets/images/Anouncement-live.jpg" />
<style type="text/css">
.announcement-wrapper .announcement-single {
    height: 250px;
}
.announcement-wrapper:last-child {
    margin-top: 45px;
}
</style>
   </head>
   <body>
 <?php require_once("header.php"); ?>
 <h2 class="f-black mobileview-text">Nomination and other related Forms</h2>
    <section class="breadcum">
         <img src="assets/Webp/investors-inside-banner.webp" class="img-fluid w-100 main-img" alt="about-breadcum">
         <div class="container breadcum_container">
            <div class="caption-breadcrum">
               <div class="caption-heading  bod-heading">
                  <h1 class="f-black">Nomination and other related Forms</h1>
               </div>
            </div>
         </div>
      </section>

<section class="announcement">
   <div class="container">
      <div class="col-md-12 back-btn-wrap">
         <a href="investor.php" class="back-btn-anchor">
            <img src="assets/images/Back-btn.png" class="back-img" alt="back-button"/>&nbsp; BACK TO INVESTORS
         </a>
      </div>
      <!--<div class="heading">
         <h2 class="f-bold">Title</h2>
      </div>-->
      <div class="announcement-wrapper">
      
             <div class="announcement-single">
                <img src="assets/images/word.jpg" class="img-fluid" alt="word">
                 <h5 class="f-bold">Form No. SH-14</h5>
                <a href="word_doc/nomination/Form_No._SH-14.docx" download class="common-btn">DOWNLOAD</a>
             </div>
             <div class="announcement-single">
                <img src="assets/images/word.jpg" class="img-fluid" alt="word">
                 <h5 class="f-bold">Form No. SH-13</h5>
                <a href="word_doc/nomination/Form_No._SH-13.docx" download class="common-btn">DOWNLOAD</a>
             </div>
             <div class="announcement-single">
                <img src="assets/images/word.jpg" class="img-fluid" alt="word">
                 <h5 class="f-bold">Form ISR 3</h5>
                <a href="word_doc/nomination/Form_ISR-3.docx" download class="common-btn">DOWNLOAD</a>
             </div>
             <div class="announcement-single">
                <img src="assets/images/word.jpg" class="img-fluid" alt="word">
                 <h5 class="f-bold">Form ISR 2</h5>
                <a href="word_doc/nomination/Form_ISR-2.docx" download class="common-btn">DOWNLOAD</a>
             </div>
             <div class="announcement-single">
                <img src="assets/images/word.jpg" class="img-fluid" alt="word">
                 <h5 class="f-bold">Form ISR 1</h5>
                <a href="word_doc/nomination/Form_ISR-1.docx" download class="common-btn">DOWNLOAD</a>
             </div>
             
      </div>
   </div>
</section>
 <?php require_once("footer.php"); ?>
     <script type="text/javascript">
         AOS.init();
      </script>
      <script type="text/javascript">
         $(document).ready(function () {
            $('.load-more').click(function () {
               $(this).toggleClass("active");
                  if ($(this).hasClass("active")) {
                     $(this).css("display", "none");
                     $('.top-arrow').css("display", "block");
                        } else {
                  $('.top-arrow').css("display", "none");
                }
            });
         $(".top-arrow").click(function () {
         $(".top-arrow").css("display", "none");
         });

      });
   </script>
   </body>
</html>
