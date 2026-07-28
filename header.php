
<style>
   @media (max-width: 5559px){
      header .container {
         max-width: 1460px;
      }
   }

   @media(max-width: 767px) {
   .navbar-nav .nav-item a {
      padding-right: 0px !important;
      color:#000 !important;
   }
    .wheelContainer{
        margin-top:20px !important;
    }
     .desktop-banner {
      display: block;
      }
      .mobile-banner {
         display: none;
      }
      .media .owl-carousel .owl-item img {
         object-fit: cover;
      }
   }
   @media (max-width: 712px){
      header {
         padding-top: 0;
         height: 100px !important;
      }
   }
   @media(max-width: 700px) {
      
      .desktop-banner {
      display: none !important;
      }
      .mobile-banner {
         display: block !important;
      }
      .home-banner img {
         object-fit: cover;
         height: 100vh !important;
      }
   }
   @media(max-width: 550px) {
      header {
         padding-top: 0;
         height: 60px !important;
      }
      header.shrink .navbar-nav .nav-link, header .navbar-nav .nav-link {
         font-size: 17px !important;
      }
      .media .featured-single .text-box {
         height: auto !important;
      }
      .media .owl-carousel .owl-item img {
            width: 100% !important;
            height: 366px;
            /* object-fit: cover; */
        }
   }
   @media(max-width: 240px) {
      .home-banner img {
         object-fit: cover;
         height: auto !important;
      }
      .media .owl-carousel .owl-item img {
         object-fit: unset;
      }
   }
   
</style>
<header>
   <div class="container">
      <nav class="navbar navbar-expand-md">  
         <a class="navbar-brand active" href="index.php" aria-label="navbar-brand">
            <img src="./assets/images/logo-white.png" alt="Bajaj Consumer Care" class="img-fluid white-logo" loading="">
             <img src="./assets/images/logo-col.png" alt="Bajaj Consumer Care" class="img-fluid shirnk-logo" loading="">
         </a>
         <button class="navbar-toggler" type="button" id="mobile-menu-action" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar one"></span>
            <span class="icon-bar two"></span>
            <span class="icon-bar three"></span>
         </button>
         <!-- <div class="top-contact-details mobile-contact">
            <a href="tel:98989 98989" title="98989 98989"><img src="assets/images/contact-bajaj.png" class="img-fluid "><img src="assets/images/contact-bajaj-black.png" class="img-fluid black-icon"><span>98989 98989</span> </a>
         </div> -->
         <div class="navbar-mob">
            <!-- <div class="top-contact-details desktop-contact">
               <a href="tel:98989 98989" title="98989 98989"><img src="assets/images/contact-bajaj.png" class="img-fluid white-icon"><img src="assets/images/contact-bajaj-black.png" class="img-fluid black-icon"><span>98989 98989</span> </a>
            </div> -->
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="index.php" aria-label="nav-link">Home</a>
               </li>
               <li class="dropdown nav-item">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="about-us">about us <i class="fa fa-angle-right nav-right-angle" aria-hidden="true"></i><i class="fa fa-angle-up nav-up-angle" aria-hidden="true"></i></a>
                     <ul class="dropdown-menu">
                        <li class="dropdown-submenu about">
                           <a href="who-we-are.php" class="nav-link dropdown-link inner-link" aria-label="WWA">Who we are</a>
                        </li>
                         <li class="dropdown-submenu investor">
                           <a href="board-of-directors.php" class="nav-link dropdown-link inner-link" aria-label="BOD">Board of Directors</a>
                        </li>
                        <li class="dropdown-submenu investor">
                           <a href="leadership.php" class="nav-link dropdown-link inner-link" aria-label="leadership">Leadership</a>
                        </li>
                        <li class="dropdown-submenu investor">
                           <a href="https://www.bajajgroup.org/bajaj-story" aria-label="Bgroup" target="_blank" class="nav-link dropdown-link inner-link">Bajaj group</a>
                        </li>
                     </ul>
               </li>
               <li class="dropdown nav-item">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="our-brand">Our brands <i class="fa fa-angle-right nav-right-angle" aria-hidden="true"></i> <i class="fa fa-angle-up nav-up-angle" aria-hidden="true"></i></a>
                     <ul class="dropdown-menu">
                         <li class="dropdown-submenu our-brand">
                           <a href="our-brands.php" aria-label="Overview" class="nav-link dropdown-link inner-link f-overview">Overview</a>                     
                        </li>
                        <li class="dropdown-submenu our-brand">
                           <a class="nav-link dropdown-link inner-link" id="bajaj1">Almond Drops<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                              <ul class="dropdown-menu-inner list-unstyled almond-ul">
                                 <li class=""><a class="dropdown-item f-book f-overview" aria-label="ADOverview" href="almonds-drops-hair-oil.php">Overview</a></li>
                                 <li><a class="f-book dropdown-item" aria-label="BADHO" href="almond-hair-oil.php">Bajaj almond drops hair oil</a></li>
                                 <li><a class="f-book dropdown-item" aria-label="AHShampoo" href="bajaj-almond-drops-anti-hairfall-shampoo.php">Bajaj Almond Drops Anti-hairfall Shampoo</a></li>
                                 <li><a class="f-book dropdown-item" aria-label="bodylotion1" href="bajaj-almond-drops-ultralight-body-lotion.php">Bajaj Almond Drops Ultralight Body Lotion</a></li>
                                 <li><a class="f-book dropdown-item" aria-label="bodylotion2" href="bajaj-almond-drops-nourishing-body-lotion.php">Bajaj Almond Drops Nourishing Body Lotion</a></li>
                                 <li><a class="f-book dropdown-item" aria-label="Soap" href="moisturizing-soap.php">Bajaj Almond Drops Moisturising Soap</a></li>
                                 <li><a class="f-book dropdown-item l-overview" aria-label="Serum" href="serum-oil.php">Bajaj Almond Drops Hair Serum</a></li>
                                 <li><a class="f-book dropdown-item l-overview" aria-label="NSHair-Oil" href="argan-oil.php">Bajaj Almond Drops Argan Non Sticky Hair Oil</a></li>
                                 <li><a class="f-book dropdown-item" aria-label="cool_oil" href="cool-almond-hair-oil.php">Bajaj cool almond drops hair oil</a></li>
                              </ul>
                        </li>
                          <li class="dropdown-submenu our-brand">
                           <a  class="nav-link dropdown-link inner-link" id="bajaj1">Coconut Oil<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                              <ul class="dropdown-menu-inner list-unstyled coconut-ul">
                                  <li><a class="dropdown-item f-book" aria-label="oiloverview" href="coconut-oils.php">Overview</a></li>
                                 
                                  <li><a class="f-book dropdown-item" aria-label="Coconut" href="pure-coconut-oil.php">Bajaj 100% Pure Coconut Oil</a></li>
                                   <li><a class="f-book dropdown-item" aria-label="Gold" href="coconut-oil-gold.php">Bajaj 100% Pure Coconut Oil Gold</a></li>
                    
                              </ul>
                        </li>
                        <li class="dropdown-submenu our-brand">
                           <a href="bajaj-gulab-jal.php" aria-label="GulabJal" class="nav-link dropdown-link inner-link">Bajaj Gulab Jal</a>
                            
                        </li>
                        <li class="dropdown-submenu our-brand">
                           <a href="bajaj-pure-henna.php" aria-label="henna" class="nav-link dropdown-link inner-link">Bajaj 100% pure henna</a>
                            
                        </li>
                        <!--<li class="dropdown-submenu our-brand">
                           <a href="coco-onion-oil.php" class="nav-link dropdown-link inner-link">Coco Onion</a>
                            
                        </li>-->
                         <li class="dropdown-submenu our-brand">
                           <a  class="nav-link dropdown-link inner-link" id="bajaj1">100% Pure<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                              <ul class="dropdown-menu-inner list-unstyled pure">
                                  <li><a class="dropdown-item f-book" aria-label="pureOverview" href="100-percent-pure.php">Overview</a></li>
                                
                                 <li><a class="f-book dropdown-item" aria-label="Castoroil" href="castor-oil.php">Bajaj 100% Pure Castor Oil</a></li>
                                 
                                 <li><a class="f-book dropdown-item" aria-label="VirginCoconut" href="pure-virgin-coconut-oil.php">Bajaj 100% Pure Virgin Coconut Oil</a></li>
                                 <li><a class="f-book dropdown-item" aria-label="Oliveoil" href="pure-olive-oil.php">Bajaj 100% Pure Olive Oil</a></li>
                                   <li><a class="f-book dropdown-item" aria-label="Kalonjioil" href="pure-kalonji-oil.php">Bajaj 100% Pure Kalonji Oil</a></li>
                                   <li><a class="f-book dropdown-item" aria-label="Jojoba" href="jojoba-oil.php">Bajaj 100% Pure Jojoba Oil</a></li>
                                   
                              </ul>
                        </li>
                         <li class="dropdown-submenu our-brand">
                           <a  class="nav-link dropdown-link inner-link" aria-label="Natyv" id="bajaj1">Natyv soul<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        

                              <ul class="dropdown-menu-inner list-unstyled natvy ul-tow">
<li><a class="dropdown-item f-book" aria-label="NatyvOverview" href="natyv-soul.php">Overview</a></li>
<li><a class="f-book dropdown-item" aria-label="WestAfrica" href="hair-masque-with-shea-butter.php">Natyv Soul Hair Masque with <br>Shea Butter From West Africa</a></li>
<li><a class="f-book dropdown-item" aria-label="Chile" href="rosehip-oil.php">Natyv Soul Enriched Hair Oil <br>with Rosehip Oil from Chile</a></li>
<li><a class="f-book dropdown-item" aria-label="France" href="apple-hair-oil.php">Natyv Soul Enriched Hair Oil <br>with Apple Seed Oil from France</a></li>
<li><a class="f-book dropdown-item" aria-label="Africa" href="marula-oil.php">Natyv Soul Enriched Hair Oil with<br> Marula Oil from Africa</a></li>
<li><a class="f-book dropdown-item" aria-label="Brazil" href="natyv-soul-hair-masque-with-buriti-oil.php">Natyv Soul Hair Masque <br>with Buriti Oil From Brazil</a></li>
<li><a class="f-book dropdown-item" aria-label="Morocco" href="argan-oil-from-morocco.php">Natyv Soul Pure Argan Oil from<br> Morocco</a></li>
<li><a class="f-book dropdown-item" aria-label="Peru" href="natyv-soul-hair-serum-with-sacha-inchi-oil.php">Natyv Soul Hair Serum <br>with Sacha Inchi Oil From Peru</a></li>
<li><a class="f-book dropdown-item" aria-label="SeaBeetFrance" href="natyv-soul-hair-serum-with-sea-beet.php">Natyv Soul Hair Serum <br>with Sea Beet From France</a></li>
<li><a class="f-book dropdown-item" aria-label="California" href="natyv-soul-pure-almond-oil-from-california.php">Natyv Soul Pure Almond <br>Oil from California</a></li>


                              </ul>
                         
                             
                        </li>
                         <li class="dropdown-submenu our-brand">
                           <a  class="nav-link dropdown-link inner-link" id="bajaj1">Nomarks<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                              <ul class="dropdown-menu-inner list-unstyled nomarks">
                                  <li><a class="dropdown-item f-book" aria-label="NomarksOverview" href="no-marks.php">Overview</a></li>
                                 <li><a class="f-book dropdown-item" aria-label="FaceScrub" href="nomarksface-scrub.php">Bajaj Nomarks Ayurvedic Antimarks Exfoliating Face Scrub</a></li>
                                  <li><a class="f-book dropdown-item" aria-label="FaceWash" href="facewash.php">Bajaj Nomarks Ayurvedic Antimarks Face Wash</a></li>
                                   <li><a class="f-book dropdown-item" aria-label="Sanitizer" href="nomarks-hand-sanitizer.php">Bajaj Nomarks Hand Sanitizer</a></li>
                                   <li><a class="f-book dropdown-item" aria-label="AntimarksSoap" href="antimarks-soap.php">Bajaj Nomarks Antimarks Soap</a></li>
                                   <li><a class="f-book dropdown-item" aria-label="AntimarksCream" href="antimarks-cream.php">Bajaj Nomarks Ayurvedic Antimarks Cream</a></li>
                                   <li><a class="f-book dropdown-item" aria-label="PoreClearing" href="bajaj-nomarks-pore-clearing-face-serum.php">Bajaj Nomarks Pore Clearing Face Serum</a></li>
                                   <li><a class="f-book dropdown-item" aria-label="ClearingSerum" href="bajaj-nomarks-skin-clearing-face-serum.php">Bajaj Nomarks Skin Clearing Face Serum</a></li>
                              </ul>
                        </li>
                        <li class="dropdown-submenu our-brand">
                           <a href="sarson-amla-hair-oil.php" aria-label="Sarsonamla" class="nav-link dropdown-link inner-link">Sarson amla</a>
                            
                        </li>
                        <li class="dropdown-submenu our-brand">
                           <a href="brahmi-amla.php" aria-label="Brahmiamla" class="nav-link dropdown-link inner-link">Brahmi amla</a>
                            
                        </li>
                        <li class="dropdown-submenu our-brand">
                           <a href="amla-aloe-vera-hair-oil.php" aria-label="AmlaAloeVera" class="nav-link dropdown-link inner-link">Amla Aloe Vera</a>
                            
                        </li>
                       <!--  <li class="dropdown-submenu our-brand">
                           <a href="others.php" class="nav-link dropdown-link inner-link l-overview">Others</a>
                        </li> -->
                         <li class="dropdown-submenu our-brand">
                           <a  class="nav-link dropdown-link inner-link" aria-label="otherPjt" id="bajaj1">Other Products<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                              <ul class="dropdown-menu-inner list-unstyled other">
                                  <li><a class="dropdown-item f-book" aria-label="otherOverview" href="other-products.php">Overview</a></li>
                                 <li><a class="f-book dropdown-item" aria-label="Jasmine" href="jasmine-oil.php">Bajaj Jasmine Hair Oil</a></li>
                                   
                                   <li><a class="f-book dropdown-item" aria-label="zero-grey" href="zero-grey-hair-oil.php">Bajaj Zero Grey Hair Oil</a></li>
                                   <li><a class="f-book dropdown-item" aria-label="sanitizer" href="multi-purpose-sanitizer.php">Bajaj Multi Purpose Sanitizer</a></li>
                              </ul>
                        </li>
                        
                      
                      
                     </ul>

               </li>
             <!--   <li class="dropdown nav-item">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="media">media <i class="fa fa-angle-right nav-right-angle" aria-hidden="true"></i><i class="fa fa-angle-up nav-up-angle" aria-hidden="true"></i></a>
                     <ul class="dropdown-menu">
                        <li class="dropdown-submenu investor">
                           <a href="media-coverage-listing.php" class="nav-link dropdown-link inner-link">Media Coverage</a>
                        </li>
                         <li class="dropdown-submenu investor">
                           <a href="media-coverage-listing.php#releases" class="nav-link dropdown-link inner-link">Press Release</a>
                        </li>
                     </ul>
               </li> -->
              <li class="nav-item">
                  <a class="nav-link" aria-label="Investors" href="investor.php">Investors</a>
               </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="media-coverage-listing.php">Media</a>
               </li> -->
               <li class="nav-item">
                  <a class="nav-link" aria-label="Sustainability" href="sustainability.php">Sustainability</a>
               </li>
                <li class="nav-item">
                  <a class="nav-link" aria-label="IB" href="international-business.php">International Business</a>
               </li>
              <!--  <li class="dropdown nav-item">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="career">Careers<i class="fa fa-angle-right nav-right-angle" aria-hidden="true"></i> <i class="fa fa-angle-up nav-up-angle" aria-hidden="true"></i></a>
                     <ul class="dropdown-menu">
                      
                           <li class="dropdown-submenu investor">
                              <a href="career.php" class="nav-link dropdown-link inner-link">Overview</a>
                           </li>
                            <li class="dropdown-submenu investor">
                              <a href="oppourtunities.php" class="nav-link dropdown-link inner-link">Opportunities</a>
                           </li>
                            
                        
                  </ul>
               </li> -->
                <li class="nav-item">
                  <a class="nav-link" aria-label="careers" href="careers.php">Careers</a>
               </li>
               <!-- <li class="dropdown nav-item">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="about-us">Blogs <i class="fa fa-angle-right nav-right-angle" aria-hidden="true"></i><i class="fa fa-angle-up nav-up-angle" aria-hidden="true"></i></a>
                     <ul class="dropdown-menu small-dropdown">
                        <li class="dropdown-submenu about">
                           <a href="hair-care.php" class="nav-link dropdown-link inner-link">Hair care</a>
                        </li>
                        <li class="dropdown-submenu about">
                           <a href="skin-care.php" class="nav-link dropdown-link inner-link">Skin care</a>
                        </li>
                         <li class="dropdown-submenu about">
                           <a href="faqs.php" class="nav-link dropdown-link inner-link">FAQs</a>
                        </li>
                     </ul>
               </li> -->
               <li class="nav-item">
                  <a class="nav-link" aria-label="contactus" href="contact-us.php">Contact Us</a>
               </li>
               <li class="nav-item nav-butt">
                  <a class="nav-link common-btn" aria-label="Shopnow" href="shop-now.php" style="color: #fff;">Shop Now</a>
               </li>

            </ul>
         </div>
      </nav>
   </div>
</header>

