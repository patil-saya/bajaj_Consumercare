<!DOCTYPE html>
<html lang="en">
   <head>
      <?php require_once("head.php"); ?>
      <title>Archive | Investors | Bajaj Consumer Care Ltd</title>
      <?php //$host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>
      <?php //$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
      <meta  name="description" content="Check out all the company updates from 2010-2017.">
   </head>
   <body>
      <?php require_once("header.php"); ?>
      <h2 class="f-black mobileview-text">Announcements-Archive</h2>
      <section class="breadcum">
         <img src="assets/Webp/investors-inside-banner.webp" class="img-fluid w-100 main-img" alt="about-breadcum">
         <div class="container breadcum_container">
            <div class="caption-breadcrum">
               <div class="caption-heading  bod-heading">
                  <h1 class="f-black">Announcements-Archive</h1>
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
            <div class="heading">
               <h2 class="f-bold">2010</h2>
               <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1" onchange="(this.options[this.selectedIndex].value?  window.open(this.options[this.selectedIndex].value,'_self'):'')">
                     <option>Select Year</option>
                     <option  value='announcements2017.php'>2017</option>
                     <option value='announcements2016.php' >2016</option>
                     <option value='announcements2015.php' >2015</option>
                     <option value='announcements2014.php' >2014</option>
                     <option value='announcements2013.php' >2013</option>
                     <option value='announcements2012.php' >2012</option>
                     <option value='announcements2011.php' >2011</option>
                     <option value='announcements2010.php' selected>2010</option>
                  </select>
               </div>
            </div>
            <div class="announcement-wrapper">
               <div class="announcement-single">
                  <img src="assets/images/pdf.png" class="img-fluid" alt="pdf">
                  <!--    <h6 class="f-regular">Dec 31, 2018</h6> -->
                  <h5 class="f-bold">Newspaper publication of unaudited financial results</h5>
                  <a href="pdf/2010/6-News-Paper-Publication-of-Unaudited-Financial-Results-for-the-quarter-ended-30-09-2010-21-Oct-2010.pdf" download class="common-btn">DOWNLOAD PDF</a>
               </div>
               <div class="announcement-single">
                  <img src="assets/images/pdf.png" class="img-fluid" alt="pdf">
                  <!--  <h6 class="f-regular">Dec 03, 2018</h6> -->
                  <h5 class="f-bold">Outcome of Board Meeting<h5>
                  <a href="pdf/2010/5-Outcome-of-Board-Meeting-21-10-2010.pdf" class="common-btn" download>DOWNLOAD PDF</a>
               </div>
               <div class="announcement-single">
                  <img src="assets/images/pdf.png" class="img-fluid" alt="pdf">
                  <!--    <h6 class="f-regular">Nov 21, 2022</h6> -->
                  <h5 class="f-bold">Newspaper notice of Board Meeting</h5>
                  <a href="pdf/2010/4-News-Paper-Notice-of-Board-Meeting-12-10-2010.pdf  " class="common-btn" download>DOWNLOAD PDF</a>
               </div>
               <div class="announcement-single">
                  <img src="assets/images/pdf.png" class="img-fluid" alt="pdf">
                  <!--      <h6 class="f-regular">Nov 20, 2022</h6> -->
                  <h5 class="f-bold">Notice of Board Meeting<br> October 12, 2010</h5>
                  <a href="pdf/2010/3-Notice-of-Board-Meeting-12-10-2010.pdf  " class="common-btn" download>DOWNLOAD PDF</a>
               </div>
               <div class="announcement-single">
                  <img src="assets/images/pdf.png" class="img-fluid" alt="pdf">
                  <!--    <h6 class="f-regular">Nov 12, 2022</h6> -->
                  <h5 class="f-bold">Outcome of Board-Meeting <br>August 26, 2010</h5>
                  <a href="pdf/2010/2-Outcome-of-Board-Meeting-26-08-2010.pdf  " class="common-btn" download>DOWNLOAD PDF</a>
               </div>
               <div class="announcement-single">
                  <img src="assets/images/pdf.png" class="img-fluid" alt="pdf">
                  <!--      <h6 class="f-regular">Nov 12, 2022</h6> -->
                  <h5 class="f-bold">Notice of Board Meeting <br>August 18, 2010</h5>
                  <a href="pdf/2010/1-Notice-of-Board-Meeting-18-08-2010.pdf  " class="common-btn" download>DOWNLOAD PDF</a>
               </div>
            </div>
            <div id="demo" class="collapse">
               <div class="announcement-wrapper">
               </div>
            </div>
            <!--  <a href="" class="common-btn load-more" data-toggle="collapse" data-target="#demo">Load More</a>
               <a href="#" class="top-arrow"><i class="fa fa-angle-up" aria-hidden="true"></i></a> -->
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