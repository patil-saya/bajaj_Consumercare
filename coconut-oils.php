<!DOCTYPE html>
<html lang="en">
   <head>
      <?php require_once("head.php"); ?>
      <title>Bajaj 100% Pure Coconut Oil | Bajaj Consumer Care Ltd </title>
      <?php $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>
      <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
      <meta property="og:title" content="Bajaj 100% Pure Coconut Oil | Bajaj Consumer Care Ltd" />
      <meta  name="description" content="Explore Bajaj Consumer Care's coconut oil range including 100% Pure Coconut Oil and Coconut Oil Gold for everyday hair care and nourishment. ">
      <meta property="og:url" content="<?php echo $actual_link ?>/coconut-oils.php" />
      <meta property="og:image" content="<?php echo $host ?>/assets/images/Almond-drops-live.jpg" />
   </head>
   <body>
 <?php require_once("header.php"); ?>
 <h2 class="f-black mobileview-text">Coconut Oils</h2>
    <section class="breadcum">
         <img src="assets/images/bajaj-pure-banner.png" class="img-fluid w-100 main-img" alt="about-breadcum">
         <div class="container breadcum_container">
            <div class="caption-breadcrum">
               <div class="caption-heading  bod-heading">
                  <h1 class="f-black">Coconut Oils</h1>
               </div>
            </div>
         </div>
      </section>

     <section class="bajaj-pure">
        <div class="container">
           <div class="bajaj-pure-wrapper">
              <!-- <a href="Bajaj-Pure-Virgin-Coconut-Oil.php" class="bajaj-pure-single">
                 <div class="img-wrapp">
                    <img src="assets/images/Bajaj-hundread-Pure-Virgin-Coconut-Oil.jpg" class="img-fluid" alt="castoe oil">
                 </div>
                 <h4 class="f-bold black">Bajaj 100% Pure Virgin Coconut Oil</h4>
              </a> -->
              <a href="pure-coconut-oil.php" class="bajaj-pure-single">
                 <div class="img-wrapp">
                    <img src="assets/images/Bajaj-hundread-Pure-Coconut-Oil.jpg" class="img-fluid" alt="Bajaj 100% Pure Coconut Oil">
                 </div>
                 <h2 class="f-bold black">Bajaj 100% Pure Coconut Oil</h2>
              </a>
              <a href="coconut-oil-gold.php" class="bajaj-pure-single">
                 <div class="img-wrapp">
                    <img src="assets/images/Bajaj-hundread-Pure-Coconut-Oil-Gold.jpg" class="img-fluid" alt="Bajaj 100% Pure Coconut Oil Gold">
                 </div>
                 <h2 class="f-bold black">Bajaj 100% Pure Coconut Oil Gold</h2>
              </a>
              <!-- <a href="bajaj-coco-onion-hair-oil.php" class="bajaj-pure-single">
                 <div class="img-wrapp">
                    <img src="assets/images/Bajaj Coco Onion Hair Oil.jpg" class="img-fluid" alt="castoe oil">
                 </div>
                 <h4 class="f-bold black">Bajaj Coco Onion Non Sticky Coconut Hair Oil</h4>
              </a> 
              <a href="Bajaj-Pure-Virgin-Coconut-Oil.php" class="bajaj-pure-single">
                 <div class="img-wrapp">
                    <img src="assets/images/Bajaj-hundread-Pure-Virgin-Coconut-Oil.jpg" class="img-fluid" alt="castoe oil">
                 </div>
                 <h4 class="f-bold black">Bajaj 100% Pure Virgin Coconut Oil</h4>
              </a> --> 
           </div>
        </div>
     </section>
    <?php require_once("footer.php"); ?>
      <script type="text/javascript">
          AOS.init();
      </script>
      
   </body>
</html>