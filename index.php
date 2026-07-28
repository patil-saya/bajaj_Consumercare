<!DOCTYPE html>
<html lang="en">
   <head>
      <?php require_once("head.php"); ?>

      <title>Bajaj Consumer Care Ltd | India’s leading FMCG Brand</title>
      <?php $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>
      <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

      <meta  name="description" content="Bajaj Consumer Care is one of the leading FMCG brands in India that brings high-quality hair care and skin care products to consumers across the world.">
      <meta property="og:title" content="Home | Bajaj Consumer Care Ltd | India’s leading FMCG Brand" />
<meta property="og:url" content="https://bajajconsumercare.com"/>
<meta property="og:description" content="Bajaj Consumer Care is one of the leading FMCG brands in India that brings high-quality hair care and skin care products to consumers across the world." />
<meta property="og:image" content="assets/images/home-banner-280323.jpg" />
<style>
    
   /* .home-slider .item img {
      width: 100% !important;
   } */
   @media (max-width: 599px){
      .owl-carousel .owl-item .featured-product-usp-img img {
         width: 70% !important;
      }
      .featured-product-usp p{
         font-size: 14px;
      }
      .home-featured-product .featured-product-usp-img {
         margin-right: 4px;
      }
   }
   section.RTA {
      padding: 5% 0 7% 0;
   }
   .investor-center .counter-single h2 {
      margin-bottom: 4px;
      text-align: center;
   }
   .modal-content{
            background:url("./assets/images/Popup-background.svg");
         }
         .onpageload-modal-content p{
            font-size: 21px;
            margin: 20px 0 30px;
            line-height: 32px;
            padding: 0 30px;
            font-weight: 400;
            color: #000;
         }
         .onpageload-modal-content{
            padding: 50px 40px;
            border: 1px solid #16461e;
            border-radius: 15px;
         }
         .onload-modal-lg{
            max-width:950px;
         }
         .onloadmodal-close-btn{
            display:flex;
            justify-content:end;
            margin-top: -35px;
            margin-right: -20px;
            cursor:pointer;
         }
         .onloadmodal-knowmore-btn{
            display:flex;
            justify-content:center;
         }
         @media (max-width: 600px) {
            .modal-body img{
               height:80px
            }
            .modal-content{
               background: url(./assets/images/Popup-background.svg);
               background-repeat: no-repeat;
               background-size: cover;
               background-position: 35% 75%;
            }
            .onpageload-modal-content {
               padding: 50px 15px;
            }
            .onpageload-modal-content p{
               padding: 0px;
            }
            .onloadmodal-close-btn{
               margin-right:0px;
            }
         }
         .media .featured-single-2 .linkedin-logo {
            position: absolute !important;
            width: 35% !important;
            top: 20% !important;
            left: 52% !important;
         }
         .media .featured-single-2 .insta-logo {
            position: absolute;
            width: 38%;
            top: 20%;
            left: 52%;
         }
         @media (min-width: 1200px) and (max-width: 1600px) {
            .media .featured-single-2 .linkedin-logo {
               position: absolute !important;
               width: 35% !important;
               top: 20% !important;
               left: 52% !important;
            }
            .media .featured-single-2 .insta-logo {
               position: absolute;
               width: 38%;
               top: 20%;
               left: 52%;
            }
         }
         /* Live changes on 20.08.2025 from UAT by Ruchika */

         @media screen and (max-width: 2500px) {
         .media .featured-single .text-box p {
            margin-bottom: 25px;
         }
         .media .featured-single-2 h6 {
            color: #fff;
            font-size: 20px;
            margin-bottom: 25px;
         }
         }
         .featured-single-2 h5 {
            margin-bottom: 20px;
         }
         .media .featured-single .text-box {
            padding-left: 35px;
            padding-top: 34px;
            width: 60%;
         }
         .media-nm-wrap {
            position: absolute;
            top: 35px;
         }
</style>
   </head>
   <body class="main-page">

<?php require_once("header.php"); ?>
 <section class="home-banner">
   <div class="home-banner-bg"></div>
         <div class="owl-carousel owl-theme home-slider" >
            <div class="item">
               <a href="almond-hair-oil.php" aria-label="Link">
                  <img src="assets/images/ADHO_Bajaj-Almond-Oil_banner_20250912.jpg" alt="hair" class="desktop-banner" loading="lazy">
                  <img src="assets/images/ADHO_Bajaj-Almond-Oil_-Mobile-banner_20250912.jpg" alt="hair" class="mobile-banner" loading="lazy">
               </a>
            </div>
            <div class="item">
               <a href="serum-oil.php" aria-label="Link">
                  <img src="assets/images/ADHO_Bajaj-Serum-banner_20250912.jpg" alt="shampoo" class="desktop-banner" loading="lazy">
                  <img src="assets/images/ADHO_Bajaj-Serum-Mobile-banner_20250912.jpg" alt="shampoo" class="mobile-banner" loading="lazy">
               </a>
            </div>
            <div class="item">
               <a href="bajaj-almond-drops-anti-hairfall-shampoo.php" aria-label="Link">
                  <img src="assets/images/ADHO_Bajaj-Shamoo+Conditioner-banner_20250912.jpg" alt="lotion" class="desktop-banner" loading="lazy">
                  <img src="assets/images/ADHO_Bajaj-Shamoo+Conditioner-Mobile-banner_20250912.jpg" alt="lotion" class="mobile-banner" loading="lazy">
               </a>
            </div>
            <div class="item">
               <a href="bajaj-almond-drops-nourishing-body-lotion.php" aria-label="Link">
                  <img src="assets/images/ADHO_Bajaj-Winter-Lotion-banner_20250912.jpg" alt="lotion" class="desktop-banner" loading="lazy">
               <img src="assets/images/ADHO_Bajaj-Winter-Lotion-Mobile-banner_20250912.jpg" alt="lotion" class="mobile-banner" loading="lazy">
               </a>
            </div>
         </div>
         <!-- <div class="white-text">
            <h1 class="f-black">HAPPINESS</h1>
         </div> -->
         <!-- <img src="assets/images/logo-banner-20221003.png" alt="bajaj" class="img-fluid banner-logo" > -->   
      </section>
      <section class="our-story">
         <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
            <div class="row">
               <!-- <div class="col-lg-3 col-sm-12">
                  <h2 class="text-center"><span class="span1">Our</span><br><span class="span2">STORY</span></h2>
               </div> -->
               <!-- <div class="col-lg-9 col-sm-12"> -->
               <div class="col-12">
                  <div class="text-box">
                     <h4 class="f-regular">6+ CRORE Satisfied Customers and Counting...</h4>
                     <p class="f-regular">One of India’s oldest and most trusted FMCG companies, Bajaj Consumer Care has been an integral part of the Indian experience for over 70 years. With our wide range of hair, beauty, and personal care products, we’re the secret behind countless smiles and untold happiness for generations of Indians spread across the world. Part of the storied Bajaj Group, Bajaj Consumer Care owns the iconic Bajaj Almond Drops Hair Oil and Nomarks – brands that not only lead their categories but also reflect our unwavering commitment to quality, trust, and constant innovation.</p>
                     <div class="btn-div">
                        <a href="who-we-are.php" class="common-btn f-medium" aria-label="Link"><span>KNOW MORE ABOUT BAJAJ CONSUMER CARE</span></a>
                        <a href="https://www.bajajgroup.org/" target="_blank" class="common-btn f-medium" aria-label="Link"><span>KNOW MORE ABOUT BAJAJ GROUP</span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="home-featured-product">
         <div class="container">
            <div class="row" >

               <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
                  <div class="featured-product-content">
                     <h2 class="f-regular">Cherish the goodness of Almonds <br>with Bajaj Almond Drops Hair Oil</h2>

                        <div class="row">
                           <img src="assets/Webp/Home/bajaj-almod.webp" alt="bajaj-almod" class="oil-bottle" loading="lazy">
                           <div class="col-md-4"></div>
                           <div class="col-md-8">
                              <ul class="featured-product-usp">
                              <li>
                                 <div class="featured-product-usp-img">
                                    <img src="assets/images/feature1.png" alt="6X Vitamin E" loading="lazy">
                                 </div>
                                 <p class="f-regular">2X hair fall* reduction</p>
                              </li>
                              <li>
                                 <div class="featured-product-usp-img">
                                    <img src="assets/images/feature2.png" alt="Reduces 80% hair fall" loading="lazy">
                                 </div>
                                 <p class="f-regular">Enriches hair with 6X Vitamin E<sup>#</sup></p>
                              </li>
                              <li>
                                 <div class="featured-product-usp-img">
                                    <img src="assets/images/feature3.png" alt="Increases upto 50% shine" loading="lazy">
                                 </div>
                                 <p class="f-regular">Increases hair shine by up to 50%<sup>^</sup></p>
                              </li>
                              <li><a href="almond-hair-oil.php" class="common-btn f-medium" aria-label="Link"><span>view more</span></a></li>
                           </div>
                           
                        </div>
                     </ul>
                  </div>
               </div>
               <div class="col-md-5"></div>
               <img src="assets/Webp/Home/homepage-bajaj-20221217.webp" alt="featured-main" class="girl-img" loading="lazy">
            </div>
         </div>
      </section>
      <section class="home-logo">
         <div class="container">
            <div class="owl-carousel owl-theme home-logo-slider" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
               <a  href="almond-hair-oil.php" class="brand-single" aria-label="Link">
                  <img src="assets/images/home-almod-drop.png" alt="home-almod-drop" loading="lazy">
               </a>
               <a href="natyv-soul.php" class="brand-single" aria-label="Link">
               <img src="assets/images/logo3.png" alt="logo3" loading="lazy">
               </a>
               <a href="pure-coconut-oil.php" class="brand-single" aria-label="Link">
               <img src="assets/images/logo5-coconut_oil.png" alt="logo5" loading="lazy">
               </a>
               <a href="100-percent-pure.php" class="brand-single" aria-label="Link">
               <img src="assets/images/logo1.png" alt="logo1" loading="lazy">
               </a>
                <a href="sarson-amla-hair-oil.php" class="brand-single" aria-label="Link">
                  <img src="assets/images/home-sarso-aawla.png" alt="home-sarso-aawlad" loading="lazy">
               </a>
               <a href="brahmi-amla.php" class="brand-single" aria-label="Link">
                  <img src="assets/images/BRAHMI-AMLA-LOGO-6.png" alt="logo6" loading="lazy">
               </a>
               <a href="no-marks.php" class="brand-single" aria-label="Link">
                  <img src="assets/images/nomark-home.jpg" alt="nomark-home" loading="lazy">
               </a>
            </div>
         </div>
      </section>
      <section class="vision innovation">
         <div class="container">
            <div class="vision-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
               <div class="vision-single">
                  <div class="img-wrapp">
                     <img src="assets/Webp/Home/earth.webp" alt="earth" loading="lazy">
                  </div>
               </div>
               <div class="vision-single" >
                  <h2 class="f-bold">INNOVATION</h2>
                  <p class="f-regular">Innovation backed by science and research defines our approach. Our single-minded pursuit of excellence helps us deliver products that satisfy <br>customers around the world.
                  </p>
                  <a href="who-we-are.php" class="common-btn f-medium" aria-label="Link"><span>KNOW MORE</span></a>
               </div>
            </div>
            <div class="vision-wrapper">
               <div class="vision-single" >
                  <h2 class="f-bold">SUSTAINABILITY</h2>
                  <p class="f-regular">At Bajaj Consumer Care, we strive to transform the lives of ordinary Indians living on the margins of society. Our interventions empower them with tools and opportunities for a better tomorrow.
                  </p>
                  <a href="sustainability.php" class="common-btn f-medium" aria-label="Link"><span>KNOW MORE</span></a>
               </div>
               <div class="vision-single">
                  <div class="img-wrapp">
                     <img src="assets/Webp/Home/farmer.webp" alt="farmer" loading="lazy">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="investor-center">
         <div class="container">
            <div class="counter" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
               <div class="counter-single">
                  <h4 class="f-bold"><span class="counter-value" data-count="70">00</span><span class="plus-new f-book">+</span></h4>
                  <p class="f-regular">Years of Business</p>
               </div>
               <div class="counter-single">
                  <h4 class="f-bold"><span class="counter-value" data-count="6">00</span><span class="counter-value"> Cr</span><span class="plus-new f-book">+</span></h4>
                  <p class="f-regular">Happy Customers </p>
               </div>
               <div class="counter-single">
                  <h4 class="f-bold"><span class="counter-value" data-count="30">00</span><span class="plus-new f-book">+</span></h4>
                  <p class="f-regular">Countries</p>
               </div>
            </div>
            <a href="investor.php" class="common-btn f-medium" aria-label="Link"><span>Investor Centre</span></a>
         </div>
      </section>
      <section class="our-emp">
         <img src="assets/Webp/Home/featured-main.webp" alt="people" loading="lazy">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="text-box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                     <p class="f-regular">Our employees are our strength and prime movers of growth. Come, discover a world of opportunities, and learn how you can be a part of the Bajaj story. </p>
                     <a href="careers.php" class="common-btn f-medium" aria-label="Link"><span>VIEW MORE</span></a>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="hello-investor">
          <div class="container">
              <h3 class="f-bold yellow mobile-text">HELLO INVESTORS!</h3>
                      <p class="f-regular mobile-text">For queries and complaints, reach out to us</p>
              <div class="hello-investor-wrapper">
                  <div class="hello-investor-single">
                      <h3 class="f-bold yellow desktop-text">HELLO INVESTORS!</h3>
                      <p class="f-regular desktop-text">For queries and complaints, reach out to us</p>
                      <div class="address-wrapper">
                          <h4 class="f-bold">Bajaj Consumer Care Limited</h4>
                          <p style="display: block!important;">1231, Solitaire Corporate Park,<br> 167, Guru Hargovind Marg,<br> Opp Apple Heritage Chakala,<br> Andheri (East) Mumbai - 400 093</p>
                          <div class="address-single">
                            <img src="assets/images/call-icon.png" alt="call-icon" loading="lazy">
                            <h5><span class="f-bold">Call us:</span> <a href="tel:98989 98989" class="f-regular" aria-label="Link">+91 - 22 - 66919477/78</a></h5>
                         </div>
                         <div class="address-single">
                            <img src="assets/images/fax.png" alt="fax-icon" loading="lazy">
                            <h5><span class="f-bold">Fax:</span> <a href="" class="f-regular" aria-label="Link">+91 - 22 - 66919476</a></h5>
                         </div>
                  </div>
                   </div>
                     <div class="hello-investor-single">
                  <div class="img-wrapp">
                      <img src="assets/Webp/Home/hello-investor.webp" alt="Contact Investors" loading="lazy">
                  </div>
              </div>
             
          </div>
      </section>

      <section class="media desktop-media">
         <div class="">
            <div class="featured-row owl-carousel owl-theme media-slider">
               <div class="featured-single featured-single-2">
                  <img src="assets/images/instagram20082025.jpg" alt="media-image" class="smp-img" loading="lazy">
                  <img src="assets/images/instagram-logo-300.png" class="insta-logo" alt="logo-media-image" loading="lazy">
                  <div class="text-box">
                     <h6 class="f-regular media-nm-wrap">Instagram</h6>
                     <h5 class="f-regular">Aug 2025</h5>
                     <p class="f-regular">Cancel culture but it's just me cancelling every plan for a head massage.</p>
                     <a href="https://www.instagram.com/bajajalmonddrops/p/DNiat2eo4YF/" target="_blank" class="read-more f-medium" aria-label="Link">READ MORE</a>
                  </div>
               </div>
               <div class="featured-single featured-single-2">
                  <img src="assets/images/facebook20082025.jpg" alt="media-image" class="smp-img" loading="lazy">
                  <img src="assets/images/fb-logo.png" class="fb-logo" alt="logo-media-image" loading="lazy">
                  <div class="text-box">
                     <h6 class="f-regular media-nm-wrap">Facebook</h6>
                     <h5 class="f-regular">Aug 2025</h5>
                     <p class="f-regular">This squad's got your back (and your strands)</p>
                     <a href="https://www.facebook.com/reel/1478807156351672" target="_blank" class="read-more f-medium" aria-label="Link">READ MORE</a>
                  </div>
               </div>
               <div class="featured-single featured-single-2 home-media-3">
                  <img src="assets/images/Linkdin-medi20082025.jpg" alt="media-img" class="smp-img" loading="lazy">
                  <img src="assets/images/link-logo.png" class="linkedin-logo" alt="logo-media-img" alt="media image" loading="lazy">
                  <div class="text-box">
                     <h6 class="f-regular media-nm-wrap">LinkedIn</h6>
                     <h5 class="f-regular">Aug 2025</h5>
                     <p class="f-regular">United in Freedom, Driven by Integrity. This Independence Day, Team BCCL celebrated across all locations - standing in solidarity while embracing the diversity that makes us stronger. </p>
                     <a href="https://www.linkedin.com/posts/bajaj-consumer-care_independenceday-oneteambigdreams-bccl-activity-7362064713997856768-Ep1Q?utm_source=share&utm_medium=member_desktop&rcm=ACoAAEj5qj8BO-dxQtqpgFb0Z5XblOiscTaQ1Qg" target="_blank" class="read-more f-medium" aria-label="Link">READ MORE</a> 
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="media mobile-media">
         <div class="">
            <div class="featured-row owl-carousel owl-theme media-slider-mobile">
               <div class="featured-single">
                  <img src="assets/images/instagram20082025.jpg" alt="Instagram_media_coverage" loading="lazy">
                  <div class="text-box">
                     <h6 class="f-regular">Instagram</h6>
                     <h2 class="f-medium">Aug 2024</h2>
                     <p class="f-regular">Cancel culture but it's just me cancelling every plan for a head massage.</p>
                     <a href="https://www.instagram.com/reel/DCnwFkXSnfe/?igsh=QkJIaFIxbGtfQw%3D%3D" target="_blank" class="read-more f-medium" aria-label="Link">READ MORE</a>
                    
                  </div>
               </div>
               <div class="featured-single">
                  <img src="assets/images/facebook20082025.jpg" alt="facebook_media_coverage" loading="lazy">
                  <div class="text-box">
                     <h6 class="f-regular">Facebook</h6>
                     <h2 class="f-medium">Aug 2024</h2>
                     <p class="f-regular">This squad's got your back (and your strands)</p>
                     <a href="https://www.facebook.com/share/r/1ATNPnhJHU/" target="_blank" class="read-more f-medium" aria-label="Link">READ MORE</a>
                    
                  </div>
               </div>
               <div class="featured-single">
                  <img src="assets/images/Linkdin-medi20082025.jpg" alt="Linkedin_media_coverage" loading="lazy">
                  <div class="text-box">
                     <h6 class="f-regular">LinkedIn</h6>
                     <h2 class="f-medium">Aug 2024</h2>
                     <p class="f-regular">United in Freedom, Driven by Integrity. This Independence Day, Team BCCL celebrated across all locations - standing in solidarity while embracing the diversity that makes us stronger. </p>
                     <a href="https://www.linkedin.com/posts/bajaj-consumer-care_diwali-2024-celebrations-at-bajaj-consumer-activity-7259124524514754561-iIYS/?utm_source=share&utm_medium=member_android" target="_blank" class="read-more f-medium" aria-label="Link">READ MORE</a>
                    <!--  <a href="https://www.linkedin.com/feed/update/urn:li:activity:6951077342634991616/" target="_blank" class="share"><img src="assets/images/share-icon.png" class="img-fluid"></a> -->
                  </div>
               </div>
            </div>
         </div>
         </div>
      </section>

      <section class="RTA">
         <div class="container new-address-main">
            <h2 class="f-bold address-new-mobile-heading yellow text-center">REGISTRARS AND SHARE <br>TRANSFER AGENTS</h2>
            <div class="vision-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
               <div class="vision-single">
                  <div class="img-wrapp">
                     <img src="assets/Webp/Home/contact-new-img.webp" alt="REGISTRARS AND SHARE TRANSFER AGENTS" loading="lazy">
                  </div>
               </div>
               <div class="vision-single address-single">
                  <h2 class="f-bold address-new-desktop-heading">REGISTRARS AND SHARE <br>TRANSFER AGENTS</h2>
                  <p><b>KFin Technologies Limited</b></p>
                <p class="f-regular">Selenium Tower B, Plot Nos. 31 & 32, Gachibowli, <br>Financial District, Nanakramguda Serilingampally <br>Mandal, Hyderabad – 500032.</p> 
                 <p class="f-regular"><span class="f-book">Call us:</span> 040 6716 2222</p>
                    <p class="f-regular"><span class="f-book">Mail us:</span> <a href="mailto: einward.ris@kfintech.com" class="f-book"> einward.ris@kfintech.com</a></p>
               </div>
            </div>
         </div>
      </section>

     <section class="global">
         <div class="container">
           <h2 class="f-regular text-center">With an ever-expanding global footprint, today we are spread over 30 countries with a special focus on SAARC, <br>Middle  East, ASEAN and African regions.</h2>
            <div class="map-wrapper">
               <img src="assets/Webp/Home/BCCL-Map-new-option_01.webp" alt="Map" class="w-100" loading="lazy">
               <div class="location thailand">
                 <!--  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top"   title="Bangladesh"> -->
                   <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary"  title="Bangladesh" loading="lazy">
               </div>
               <div class="location bahrain">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top"   data-type="primary" title="Bahrain" loading="lazy">
               </div>
               <div class="location jordan">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top"  data-type="primary"  title="Jordan" loading="lazy">
               </div>
               <div class="location botswana">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Botswana" loading="lazy">
               </div>
               <div class="location burundi">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Burundi" loading="lazy">
               </div>
               <div class="location kenya">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Kenya" loading="lazy">
               </div>
               <div class="location zambia">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Zambia" loading="lazy">
               </div>
               <div class="location saudi">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Saudi Arabia" loading="lazy">
               </div>
               <div class="location kuwait">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Kuwait" loading="lazy">
               </div>
               <div class="location oman">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Oman" loading="lazy">
               </div>
               <div class="location qatar">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Qatar" loading="lazy">
               </div>
               <div class="location suriname">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary"  title="Suriname" loading="lazy">
               </div>
               <div class="location uae">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="UAE" loading="lazy">
               </div>
               <div class="location yemen">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Yemen" loading="lazy">
               </div>
               <div class="location nepal">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Nepal" loading="lazy">
               </div>
               <div class="location afga">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Afghanistan" loading="lazy">
               </div>
               <div class="location aus">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Australia" loading="lazy">
               </div>
               <!-- <div class="location nz">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="New Zealand">
               </div> -->
               <div class="location canada">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Canada" loading="lazy">
               </div>
               <div class="location hongkong">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Hong Kong" loading="lazy">
               </div>
               <div class="location indo">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Indonesia" loading="lazy">
               </div>
               <div class="location uk">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="UK" loading="lazy">
               </div>
               <div class="location joha">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Johannesburg" loading="lazy">
               </div>
               <div class="location malesia">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Malaysia" loading="lazy">
               </div>
               <div class="location mauritius">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Mauritius" loading="lazy">
               </div>
               <div class="location myanmar">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Myanmar" loading="lazy">
               </div>
               <div class="location pak">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Pakistan" loading="lazy">
               </div>
               <div class="location shri-lanka">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Sri Lanka" loading="lazy">
               </div>
               <div class="location singapore">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Singapore" loading="lazy">
               </div>
               <div class="location bangala">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Thailand" loading="lazy">
               </div>
               <div class="location trinidad">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Trinidad" loading="lazy">
               </div>
               <div class="location tibet">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="Tibet" loading="lazy">
               </div>
               <div class="location usa">
                  <img src="assets/images/location.png" alt="" class="img-responsive location-img" data-toggle="tooltip" data-placement="top" data-type="primary" title="USA" loading="lazy">
               </div>
            </div>
              <a href="international-business.php" class="common-btn f-medium" aria-label="Link"><span>Global Presence</span> </a>
         </div>
      </section>

      <div class="modal fade leadership-modal" id="spinwheel_winners" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document"> <!--  style="max-width: 40% !important;" -->
            <div class="modal-content" style="border-radius: 5px;height: 80% !important;">
               <div class="modal-body" style="background-image: url('wheel/media/winners-background-img.png');border-radius: 5px;background-size: cover;">
                  <button type="button" onclick="spinClosed()" class="close" data-dismiss="modal" aria-label="Close">
                  <img src="assets/images/modal-wheel-close.png" class="" alt="close" style="width: 45%;" loading="lazy">
                  </button>
                  <div class="" style="padding: 10% 0px;text-align: center;color: #ffffff;">
                     <p class="speenwheel-regular">'Spin the Wheel'</p>
                     <h4 class="f-bold">Winners Announced</h4>
                     <a id="modal_dismiss" target="_blank" href="Congratulations%20to%20the%20winners.pdf" aria-label="Link"><button class="speenwheel-success-btn">CHECK HERE</button></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
<!-- Modal ON LOAD -->
<!-- <div class="modal fade" id="main-page-onload-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg onload-modal-lg modal-dialog-centered" role="document">
      <div class="modal-content onpageload-modal-content">
            <a class="close onloadmodal-close-btn" data-dismiss="modal" aria-label="Close">
               <img src="assets/images/POPUP-Close.svg"/>
            </a>
            <div class="modal-body text-center pb-0 pt-2">
               <img src="assets/images/Banjara-logo.png"/>
               <p>Bajaj Consumer Care Ltd is set to acquire Vishal Personal Care Private Limited, which owns Banjara's hair and skin care brand. This move aligns with our vision to expand our footprint across Indian markets, leveraging the growing demand for natural and Ayurvedic personal care products.</p>
               <div class="onloadmodal-knowmore-btn">
                  <a href="https://www.bajajconsumercare.com/pdf/disclouser/Outcome_of_Board_Meeting_Acquisition_of_Vishal_Personal_Care_Private_Limited.pdf" target="_blank" class="common-btn f-medium">KNOW MORE</a>
               </div>
            </div>
            
      </div>
   </div>
</div> -->
         <?php include("footer.php"); ?>

      <script type="text/javascript">
          AOS.init();
      </script>
       <script>
         //ONLOAD PAGE MODAL
         $(document).ready(function() {
               $('#main-page-onload-Modal').modal('show');
         });
      </script>
      <script>
         $("#modal_dismiss").click(function(){
            $('#spinwheel_winners').modal('hide')
         });
         // counter js animation script start

         function formatter (value) {
                      return value.toFixed(0).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                    }

                    var a = 0;
                    $(window).scroll(function() {
                      if($('.counter').length > 0) {
                        var oTop = $('.counter').offset().top - window.innerHeight;
                        if (a == 0 && $(window).scrollTop() > oTop) {
                          $('.counter-value').each(function() {
                            var $this = $(this),
                            countTo = $this.attr('data-count');
                            $({
                              countNum: $this.text()
                            }).animate({
                              countNum: countTo
                            },
                            {
                              duration: 2000,
                              easing: 'swing',
                              step: function() {
                                $this.text(formatter(Math.floor(this.countNum)));
                              },
                              complete: function() {
                                $this.text(formatter(this.countNum));
                              }
                            });
                          });
                          a = 1;
                        }
                      }



                    });


                    AOS.init();
                   $('[data-toggle="tooltip"]').each(function(){
         var options = {
         html: true
         };

         if ($(this)[0].hasAttribute('data-type')) {
         options['template'] =
         '<div class="tooltip ' + $(this).attr('data-type') + '" role="tooltip">' +
         '  <div class="tooltip-arrow"></div>' +
         '  <div class="tooltip-inner"></div>' +
         '</div>';
         }

         $(this).tooltip(options);
         });
         $(document).ready(function(){
            $(".media-slider").owlCarousel({
         items:1,
         loop:true,
         margin:50,
         dots:true,
         autoplay:false,
         nav:true,
          navText: ['<img src="assets/images/left-arrow.png" alt="left-arrow">','<img src="assets/images/right-arrow.png" alt="right-arrow">'],
         smartSpeed:700,
         center:true,
          stagePadding:230,
         responsive:{
         0:{
         items:1,
         stagePadding:0,

         },
         600:{
         items:1,
         },
        1920:{
         items:1
         }
         }
         });


         $(".media-slider-mobile").owlCarousel({
         items:1,
         loop:true,
         dots:true,
         autoplay:false,
         smartSpeed:700,
         responsive:{
            800:{
         items:1,
         stagePadding:0,
         margin:0,
         },



      }
         });


        $(".home-logo-slider").owlCarousel({
         items:4,
         loop:false,
         margin:20,
         nav:true,
         mouseDrag:false,
         navText: ['<img src="assets/images/left-arrow.png" alt="left-arrow">','<img src="assets/images/right-arrow.png" alt="right-arrow">'],
         dots:true,
         autoplay:true,
         smartSpeed:1000,
          autoplayTimeout:3000,
         responsive:{
         0:{
         items:1,
         nav:false,
         stagePadding:50,
         dotsEach:2,
         },
         600:{
         items:3,
         },
         1000:{
         items:4
         }
         }
         });

         $(".home-slider").owlCarousel({
         items:1,
         loop:true,
         margin:0,
         nav:true,
         mouseDrag:true,
         navText: ['<img src="assets/images/left-arrow.png" alt="left-arrow">','<img src="assets/images/right-arrow.png" alt="right-arrow">'],
         dots:false,
         autoplay:true,
         smartSpeed:1000,
          autoplayTimeout:4000,
         responsive:{
         0:{
         items:1,
         nav:false,
         },
         600:{
         items:1,
         },
         1000:{
         items:1
         }
         }
         });


      });



// $(document).ready(function () {
//   $('.navbar .dropdown').hover(function () {
//           $(this).find('.dropdown-submenu').first().stop(true, true).slideDown(350);
//       }, function () {
//           $(this).find('.dropdown-submenu').first().stop(true, true).slideUp(350)
//       });
//   });


// $(document).ready(function () {
//   $('.inner-link').hover(function () {
//           $(this).find('.dropdown-menu-inner').first().stop(true, true).slideDown(350);
//       }, function () {
//           $(this).find('.dropdown-menu-inner').first().stop(true, true).slideUp(350)
//       });
//   });


      </script>
   </body>
</html>
