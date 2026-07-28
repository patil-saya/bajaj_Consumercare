<!DOCTYPE html>
<html lang="en">
   <head>
      <?php require_once("head.php"); ?>
     <title>Products | Our Brands | Bajaj Consumer Care Ltd</title>
      <?php $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>
      <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
      <meta  name="description" content="Check out our comprehensive range of hair and skin care products as well as hygiene products.">
        <meta property="og:title" content="Products | Our Brands | Bajaj Consumer Care Ltd" />
<meta property="og:url" content="other-products.php" />
<meta property="og:description" content="Check out our comprehensive range of hair and skin care products as well as hygiene products." />
<meta property="og:image" content="assets/images/Almond-drops-live.jpg" />
   </head>
   <body>
 <?php require_once("header.php"); ?>
 <h2 class="f-black mobileview-text">Others</h2>
    <section class="breadcum">
         <img src="assets/images/bajaj-pure-banner.png" class="img-fluid w-100 main-img" alt="about-breadcum">
         <div class="container breadcum_container">
            <div class="caption-breadcrum">
               <div class="caption-heading  bod-heading">
                  <h1 class="f-black">Others</h1>
               </div>
            </div>
         </div>
      </section>

     <section class="bajaj-pure">
        <div class="container">
           <div class="bajaj-pure-wrapper">
            
             
           
              
              <a href="jasmine-oil.php" class="bajaj-pure-single">
                 <div class="img-wrapp">
                    <img src="assets/images/Bajaj Jasmine Hair Oil.jpg" class="img-fluid" alt="Bajaj Jasmine Hair Oil">
                 </div>
                 <h2 class="f-bold black">Bajaj Jasmine Hair Oil</h2>
              </a>
            
             <!--  <a href="Bajaj-Amla-Aloe-Vera-Hair-Oil.php" class="bajaj-pure-single">
                 <div class="img-wrapp">
                    <img src="assets/images/Bajaj-Amla-Aloe-Vera-Hair-Oil.jpg" class="img-fluid" alt="castoe oil">
                 </div>
                 <h4 class="f-bold black">Bajaj Amla Aloe Vera Hair Oil</h4>
              </a> -->
             <a href="zero-grey-hair-oil.php" class="bajaj-pure-single">
                 <div class="img-wrapp">
                    <img src="assets/images/Bajaj-Zero-Grey-Hair-Oil.jpg" class="img-fluid" alt="Bajaj Zero Grey Hair Oil">
                 </div>
                 <h2 class="f-bold black">Bajaj Zero Grey Hair Oil</h2>
              </a>
              <a href="multi-purpose-sanitizer.php" class="bajaj-pure-single">
                 <div class="img-wrapp">
                    <img src="assets/images/Bajaj-Multi-Purpose-Sanitizer-old.jpg" class="img-fluid" alt="Bajaj Multi Purpose Sanitizer">
                 </div>
                 <h2 class="f-bold black">Bajaj Multi Purpose Sanitizer</h2>
              </a>
             
              
           </div>
        </div>
     </section>
     <section class="lastSection">
   <p style="font-size: 12px; margin-left: 11px;"><sup style="top: -0.2em; font-size: 12px;">**</sup>Creative visualization</p>
</section>


 


 

      <?php require_once("footer.php"); ?>
      <script type="text/javascript">
          AOS.init();
      </script>
      
   </body>
</html>