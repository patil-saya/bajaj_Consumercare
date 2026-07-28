<!DOCTYPE html>
<?php
$year = (isset($_GET['year']) && $_GET['year']!='Year') ? $_GET['year'] : '';
$month = (isset($_GET['month']) && $_GET['month']!='Month') ? strtolower($_GET['month']) : '';
$umonth = (isset($_GET['month']) && $_GET['month']!='Month') ? $_GET['month'] : '';
$no_results = 1;
?>
<html lang="en">
   <head>
      <?php require_once("head.php"); ?>
     <title>Media | Bajaj Consumer Care Ltd</title>
      <meta  name="description" content="Stay abreast of the latest happenings in Bajaj Consumer Care Limited by reading our latest news and press releases.">
       <meta property="og:title" content="Media | Bajaj Consumer Care Ltd" />
<meta property="og:url" content="media-coverage-listing.php" />
<meta property="og:description" content="Stay abreast of the latest happenings in Bajaj Consumer Care Limited by reading our latest news and press releases." />
<meta property="og:image" content="assets/images/Media-live.jpg" />
<style>
   @media (max-width: 767px){
      #coverage .common-btn{
         width:50px !important;
         margin-bottom: 0px !important;
         height: 40px;
         border-radius: 10px;
      }
      #coverage #csort {
         width: 50px !important;
         margin-bottom: 14px !important;
         position: relative !important;
         top: 7px !important;
         height: 40px !important;
         border-radius: 10px !important;
      }
      #coverage #mc-wrapper{
         margin-top:120px;
      }
}
   
</style>
   </head>
   <body>
      <?php require_once("header.php"); ?>
      <h2 class="f-black mobileview-text">MEDIA COVERAGE</h2>
      <section class="breadcum">
         <img src="assets/images/media-banner-2.png" class="img-fluid w-100 main-img" alt="about-breadcum">
         <div class="container breadcum_container">
            <div class="caption-breadcrum">
               <div class="caption-heading  bod-heading">
                  <h1 class="f-black">MEDIA COVERAGE</h1>
               </div>
            </div>
         </div>
      </section>
      <section class="our-brand-main media-main">
         <div class="container">
            <nav class="cus-nav aos-init aos-animate">
               <ul class="nav nav-tabs">
                  <li class="active"><a class="nav-link active f-medium" data-toggle="tab" href="#coverage">Media Coverage</a></li>
                  <li><a class="nav-link f-medium" href="press-release-listing.php">Press Releases</a></li>
               </ul>
            </nav>
            <div class="tab-content" id="nav-tabContent">
               <div class="tab-pane fade show active" id="coverage" role="tabpanel">
                  <div class="media-header">
                     <h2 class="f-bold" style="visibility: hidden;">SEARCH</h2>
                     <div class="form-wrapper">
                        <div class="form-group tt-select year-select">
                           <select class="form-control " id="exampleFormControlSelect1">
                              <option hidden="true">Year</option>
                              <option value="" <?php echo ($year == '') ? 'selected' : ''; ?>>All</option>
                              <option value="2023" <?php echo ($year == '2023') ? 'selected' : ''; ?>>2023</option>
                              <option value="2022" <?php echo ($year == '2022') ? 'selected' : ''; ?>>2022</option>
                              <option value="2021" <?php echo ($year == '2021') ? 'selected' : ''; ?>>2021</option>
                              <option value="2020" <?php echo ($year == '2020') ? 'selected' : ''; ?>>2020</option>
                           </select>
                        </div>
                        <div class="form-group tt-select">
                           <select class="form-control" id="exampleFormControlSelect2">
                              <option hidden="true">Month</option>
                              <option value=" " <?php echo ($umonth == '') ? 'selected' : ''; ?>>All</option>
                              <option value="Jan" <?php echo ($umonth == 'Jan') ? 'selected' : ''; ?>>January</option>
                              <option value="Feb" <?php echo ($umonth == 'Feb') ? 'selected' : ''; ?>>February</option>
                              <option value="Mar" <?php echo ($umonth == 'Mar') ? 'selected' : ''; ?>>March</option>
                              <option value="Apr" <?php echo ($umonth == 'Apr') ? 'selected' : ''; ?>>April</option>
                              <option value="May" <?php echo ($umonth == 'May') ? 'selected' : ''; ?>>May</option>
                              <option value="Jun" <?php echo ($umonth == 'Jun') ? 'selected' : ''; ?>>June</option>
                              <option value="Jul" <?php echo ($umonth == 'Jul') ? 'selected' : ''; ?>>July</option>
                              <option value="Aug" <?php echo ($umonth == 'Aug') ? 'selected' : ''; ?>>August</option>
                              <option value="Sep" <?php echo ($umonth == 'Sep') ? 'selected' : ''; ?>>September</option>
                              <option value="Oct" <?php echo ($umonth == 'Oct') ? 'selected' : ''; ?>>October</option>
                              <option value="Nov" <?php echo ($umonth == 'Nov') ? 'selected' : ''; ?>>November</option>
                              <option value="Dec" <?php echo ($umonth == 'Dec') ? 'selected' : ''; ?>>December</option>
                           </select>
                        </div>
                        <a href="javascript:void(0)" id="csorts" class="common-btn" onclick="filterPage()">
                           <img src="assets/images/opport-search.png" class="img-fluid">
                        </a>
                     </div>
                  </div>
                  <div class="container text-center my-5" id="cnomedia">
                     <h3 class="sorry-text">We’re sorry!
                        We can’t seem to find results that match your search. <br>Kindly, try choosing another month or check out our latest news below.
                     </h3>
                  </div>
                  <!-- <php if(($year == '' || $year == '2023')){?> -->
                  <!-- <div class="vision-wrapper media-tab-content jul 2023">
                  
                     <div class="vision-single">
                        <div class="img-wrapp">
                           <img src="assets/images/bajaj-almond-drops-steers-the-hair-care_02.jpg" alt="Bajaj Almond Drops Hair Oil" class="img-fluid">
                        </div>
                     </div>
                     
                     <div class="vision-single">
                        <h6 class="f-regular" style="color:#4b061f; font-weight:700;">FEATURED</h6>
                        <h6 class="f-regular">Aug 2023</h6>
                        <h3 class="f-bold" style="text-transform: uppercase; font-size: 38px;">Bajaj Almond Drops steers the hair care industry into the AI era</h3>
                        <p class="f-regular">Adding an innovative twist to the narrative of almond nourishment, Bajaj Almond Drops has emerged as the pioneer in the hair care category, fusing the power of AI with creativity and mesmerising creatives. In an artistic blend of tech and tradition, Bajaj Almond Drops presents three vibrant AI-created visuals depicting the nourishing power of Bajaj Almond Drops. </p>
                        <a href="https://indiantelevision.com/mam/media-and-advertising/ad-campaigns/bajaj-almond-drops-steers-the-hair-care-industry-into-the-ai-era" target="_blank">READ MORE</a>
                     </div>
                     
                  </div> -->
                  
                  <?php if(($year == '' || $year == '2023')){?>
                  <div class="vision-wrapper media-tab-content jul 2023">

                     <div class="vision-single">
                        <div class="img-wrapp">
                           <img src="assets/images/bajaj-almond-drops-steers-the-hair-care_02.jpg" alt="Bajaj Almond Drops Hair Oil" class="img-fluid">
                        </div>
                     </div>

                     <div class="vision-single">
                        <h6 class="f-regular" style="color:#4b061f; font-weight:700;">FEATURED</h6>
                        <h6 class="f-regular">Jul 2023</h6>
                        <h3 class="f-bold" style="text-transform: uppercase; font-size: 38px;">Bajaj Almond Drops uses AI to create visuals promoting brand features</h3>
                        <p class="f-regular">In an artistic blend of tech and tradition, Bajaj Almond Drops made three AI-created visuals depicting the nourishing power of Bajaj Almond Drops. Each image is aimed at breathing life into the brand's mantra of Bajaj Almond Drops being a #SuperFoodForSuperYou.</p>
                        <a href="https://bestmediainfo.com/2023/07/bajaj-almond-drops-uses-ai-to-create-visuals-promoting-brand-features" target="_blank">READ MORE</a>
                     </div>

                  </div>
                  
                  <?php $no_results = 0; } if($year == '2021'){?>
                  <div class="vision-wrapper media-tab-content jul 2023">

                     <div class="vision-single">
                        <div class="img-wrapp">
                           <img src="assets/images/media-main-news.png" alt="Bajaj Almond Drops Hair Oil" class="img-fluid">
                        </div>
                     </div>

                     <div class="vision-single">
                        <h6 class="f-regular" style="color:#E4B027; font-weight:700;">FEATURED</h6>
                        <h6 class="f-regular">Feb 2021</h6>
                        <h3 class="f-bold" style="text-transform: uppercase; font-size: 38px;">Mr. Jaideep Nandi, MD of Bajaj Consumer Care speaks to ET Now on Q3 Results</h3>
                        <p class="f-regular">Mr. Jaideep Nandi, Managing Director, Bajaj Consumer Care speaks to ET Now on the outlook for the year ahead. He says the hair oil segment saw strong recovery and the rural growth demand remained robust, while the urban growth is gradually recovering.</p>
                        <a href="mr-jaideep-nandi-md-bajaj-consumer-care-speaks-et-now-q3-results.php" target="_blank">READ MORE</a>
                     </div>

                  </div>
                  
                  <?php $no_results = 0; } if($year == '2020'){?>
                  <div class="vision-wrapper media-tab-content jul 2023">

                     <div class="vision-single">
                        <div class="img-wrapp">
                           <img src="assets/images/media-main-img.png" alt="Bajaj Almond Drops Hair Oil" class="img-fluid">
                        </div>
                     </div>

                     <div class="vision-single">
                        <h6 class="f-regular" style="color:#E4B027; font-weight:700;">FEATURED</h6>
                        <h6 class="f-regular">Sep 2020</h6>
                        <h3 class="f-bold" style="text-transform: uppercase; font-size: 38px;">WITH 6X VITAMIN E*, BAJAJ ALMOND DROPS HAIR OIL IS THE PERFECT SOLUTION FOR YOUR HAIR FALL WORRIES</h3>
                        <p class="f-regular">Bajaj Almond Drops non-sticky hair oil has the goodness of almond
                        oil and vitamin E. It is enriched with 6X Vitamin E** and sweet
                        almond oil, it makes your hair stronger and gives your hair the
                        power to fight hair fall#. So avoid that ‘Chipku look’, try Bajaj
                        Almond Drops non-sticky hair oil.</p>
                        <a href="6x-vitamin-e-bajaj-almond-drops-hair-oil-perfect-solution-your-hair-fall-worries.php" target="_blank">READ MORE</a>
                     </div>

                  </div>
                  
                  <?php $no_results = 0; } if($year == '2022'){?>
                  <!-- <div class="vision-wrapper media-tab-content jul 2023">

                     <div class="vision-single">
                        <div class="img-wrapp">
                           <img src="assets/images/bajaj-almond-drops-steers-the-hair-care_02.jpg" alt="Bajaj Almond Drops Hair Oil" class="img-fluid">
                        </div>
                     </div>

                     <div class="vision-single">
                        <h6 class="f-regular" style="color:#E4B027; font-weight:700;">FEATURED</h6>
                        <h6 class="f-regular">Dec 2022</h6>
                        <h3 class="f-bold" style="text-transform: uppercase; font-size: 38px;">Bajaj Almond Drops Hair Oil unveils Kiara Advani as brand ambassador for new campaign</h3>
                        <p class="f-regular">Bajaj Almond Drops Hair Oil has unveiled actor Kiara Advani as the new brand ambassador.As per the company, Advani will be featured in its latest ‘Boring Nahi, Ban Ja Toofani’ campaign which aims to connect the brand with young women to further.. </p>
                        <a href="https://www.msn.com/en-in/news/other/bajaj-almond-drops-hair-oil-unveils-kiara-advani-as-brand-ambassador-for-new-campaign/ar-AA15r4AQ" target="_blank">READ MORE</a>
                     </div>

                  </div> -->
                  
                  <?php $no_results = 0; } ?>

                  <div class="owl-carousel owl-theme media-slider-inner" data-aos="fade-up" data-aos-delay="200" id="mc-wrapper">
                     <?php if(($year == '' || $year == '2023') && ($month == '' || $month == 'jul')){?>
                     <!-- <div class="item jul 2023">
                        <h6 class="f-regular">Jul 2023</h6> 
                        <h5 class="f-book">Bajaj Almond Drops uses AI to create visuals promoting brand features</h5>
                        <p class="f-regular">In an artistic blend of tech and tradition, Bajaj Almond Drops made three AI-created visuals depicting the nourishing power of Bajaj Almond Drops. Each image is aimed at breathing life into the brand's mantra of Bajaj Almond Drops being a #SuperFoodForSuperYou.</p>
                        <a href="https://bestmediainfo.com/2023/07/bajaj-almond-drops-uses-ai-to-create-visuals-promoting-brand-features" target="_blank" class="f-medium">READ MORE</a>
                     </div> -->
                     <?php $no_results = 0; } if(($year == '' || $year == '2023') && ($month == '' || $month == 'apr')){?>
                     <div class="item apr 2023">
                        <h6 class="f-regular">Apr 2023</h6> 
                        <h5 class="f-book">Bajaj Consumer Care & PHD Media’s collaborate with Vserv AudiencePro</h5>
                        <p class="f-regular">Consumer care brands often find it difficult to break through the noise and sell their products to the desired...</p>
                        <a href="https://www.exchange4media.com/marketing-initiative-news/bajaj-consumer-care-phd-medias-collaboration-with-vserv-audiencepro-126912.html" target="_blank" class="f-medium">READ MORE</a>
                     </div>
                     
                     <?php $no_results = 0; } if(($year == '') && ($month == '' || $month == 'dec')){?>
                     <!-- <div class="item dec 2022">
                        <h6 class="f-regular">Dec 2022</h6> 
                        <h5 class="f-book">Bajaj Almond Drops Hair Oil unveils Kiara Advani as brand ambassador for new campaign... </h5>
                        <p class="f-regular">Bajaj Almond Drops Hair Oil has unveiled actor Kiara Advani as the new brand ambassador...</p>
                        <a href="https://www.msn.com/en-in/news/other/bajaj-almond-drops-hair-oil-unveils-kiara-advani-as-brand-ambassador-for-new-campaign/ar-AA15r4AQ" target="_blank" class="f-medium">READ MORE</a>
                     </div> -->
                     <?php $no_results = 0; } if(($year == '' || $year == '2022') && ($month == '' || $month == 'dec')){?> 
                     <div class="item dec 2022">
                        <h6 class="f-regular">Dec 2022</h6>
                        <h5 class="f-book">Bajaj Consumer Care appoints Kiara Advani as brand ambassador for its almond hair oil brand... </h5>
                        <p class="f-regular">NEW DELHI: Bajaj Consumer Care Ltd-owned Bajaj Almond Drops Hair Oil has roped in actor Kiara Advani as its new brand ambassador...</p>
                        <a href="https://www.livemint.com/companies/news/bajaj-consumer-care-appoints-kiara-advani-as-brand-ambassador-for-its-almond-hair-oil-brand/amp-11671278385994.html" target="_blank" class="f-medium">READ MORE</a>
                     </div>
                     <?php $no_results = 0; } if(($year == '') && ($month == '' || $month == 'feb')){?>
                     <div class="item feb 2021">
                        <h6 class="f-regular">Feb 2021</h6>
                        <h5 class="f-book">Mr. Jaideep Nandi, MD of Bajaj <br>Consumer Care speaks to ET Now... </h5>
                        <p class="f-regular">Mr. Jaideep Nandi, Managing Director, <br>Bajaj Consumer Care speaks to ET Now<br> on the outlook for the year ahead..</p>
                        <a href="mr-jaideep-nandi-md-bajaj-consumer-care-speaks-et-now-q3-results.php" class="f-medium">READ MORE</a>
                     </div>
                     <?php $no_results = 0; } if(($year == '') && ($month == '' || $month == 'sep')){?>
                     <div class="item sep 2020">
                        <h6 class="f-regular">Sep 2020</h6>
                        <h5 class="f-book">With 6X Vitamin E*, Bajaj Almond Drops Hair Oil is the perfect solution for your hair fall worries... </h5>
                        <p class="f-regular">Bajaj Almond Drops non-sticky hair oil has the goodness of almond oil and vitamin E. It is enriched with 6X Vitamin E* and sweet almond oil, it makes your hair stronger and gives your hair the power to fight hair fall...</p>
                        <a href="6x-vitamin-e-bajaj-almond-drops-hair-oil-perfect-solution-your-hair-fall-worries.php" class="f-medium">READ MORE</a>
                     </div>
                     <?php $no_results = 0; } if(($year == '' || $year == '2020') && ($month == '' || $month == 'sep')){?>
                     <div class="item sep 2020">
                        <h6 class="f-regular">Sep 2020</h6>
                        <h5 class="f-book">Bajaj consumer care enters the hand <br>sanitizers market... </h5>
                        <p class="f-regular">Bajaj Consumer Care the reputed Indian <br>FMCG company, has entered the hand<br> sanitiser market with a brand...</p>
                        <a href="bajaj-consumer-care-enters-hand-sanitizers-market.php" class="f-medium">READ MORE</a>
                     </div>
                     <div class="item sep 2020">
                        <h6 class="f-regular">Sep 2020</h6>
                        <h5 class="f-book">Bajaj Consumer Care partners with <br>Indiamart to strengthen digital... </h5>
                        <p class="f-regular">FMCG major Bajaj Consumer Care has <br>partnered with Indiamart to strengthen<br> its digital... </p>
                        <a href="bajaj-consumer-care-partners-indiamart-strengthen-digital-presence.php" class="f-medium">READ MORE</a>
                     </div>
                     <?php $no_results = 0; } if(($year == '' || $year == '2020') && ($month == '' || $month == 'jul')){?>
                     <div class="item jul 2020">
                        <h6 class="f-regular">Jul 2020</h6>
                        <h5 class="f-book">Bajaj Consumer Care appoints Jaideep Nandi as Managing Director</h5>
                        <p class="f-regular">Bajaj Consumer Care Ltd on Thursday announced the appointment of Jaideep Nandi as its new Managing Director by elevating him from the post of Chief Executive Officer, effective from July 1.</p>
                        <a href="bajaj-consumer-care-appoints-jaideep-nandi-managing-director.php" class="f-medium">READ MORE</a>
                     </div>
                     <?php $no_results = 0; } if(($year == '' || $year == '2020') && ($month == '' || $month == 'apr')){?>
                     <div class="item apr 2020">
                        <h6 class="f-regular">Apr 2020</h6>
                        <h5 class="f-book">GPTW Certification 2020</h5>
                        <p class="f-regular">BCCL has been certified as a “Great Place to Work” by the Great Place to Work (GPTW) Institute for the second consecutive year with an upward movement in the Trust Index Scores.</p>
                        <a href="gptw-certification-2020.php" class="f-medium">READ MORE</a>
                     </div>
                     <?php $no_results = 0; } if(($year == '' || $year == '2020') && ($month == '' || $month == 'jan')){?>
                     <div class="item jan 2020">
                        <h6 class="f-regular">Jan 2020</h6>
                        <h5 class="f-book">BCCL promotes fitness and encourages employees to give back to the community</h5>
                        <p class="f-regular">In the spirit of giving back to the community and promoting fitness among our employees, the BCCL team launched the “Walk/Run for a Cause” campaign recently.</p>
                        <a href="bccl-promotes-fitness-and-encourages-employees-give-back-community-0.php" class="f-medium">READ MORE</a>
                     </div>
                     <?php $no_results = 0; } if(($year == '' || $year == '2023') && ($month == '' || $month == 'aug')){?>
                        <!--<div class="apr 2023" style="display:none;"></div>-->
                     <?php $no_results = 0; }?>
                  </div>
                  
               </div>
               <div class="tab-pane fade" id="releases" role="tabpanel">
             
                  <div class="vision-wrapper press-relesed">
                   
                        <div class="vision-single">
                           <h6 class="f-regular">Published Jun 28, 2022</h6>
                           <h3 class="f-bold yellownew">Bajaj Consumer Care launches premium moisturising soap to leverage Almond Drops Hair Oil brand equity to tap skincare market</h3>
                           <p class="f-regular">Bajaj Almond Drops non-sticky hair oil has the goodness of almond oil and vitamin E. It is enriched with 6X Vitamin E** and sweet almond oil, it makes your hair stronger and gives your hair the power to fight hair fall#. So avoid that ‘Chipku look’, try Bajaj Almond Drops non-sticky hair oil. Boond Boond mein poshan!</p>
                        </div>
                        <img src="assets/images/press-relaed-banner.jpg" class="img-fluid" alt="press-relesed">
                        <p class="mt-3"><b>New Delhi, June 28, 2022:</b> Bajaj Consumer Care Ltd. announced the launch of Bajaj Almond Drops Moisturising Soap, its latest offering in the skincare segment at a launch event today. Enriched with almond oil and vitamin E, the soap offers premium moisturisation for the skin, leaving it soft, smooth, and glowing.</p>
                        <p>A result of meticulous scientific research and innovation, Bajaj Almond Drops Moisturising Soap offers enhanced moisturisation for the skin. Combined with added advantages of pleasant fragrance, ease of rinsing, and competitive pricing, the soap offers an unbeatable value proposition to customers.</p>
                        <p>The product leverages the Company’s Bajaj Almond Drops Hair Oil offering which has enjoyed a strong positioning and distinctly superior brand equity in the Rs.13,500 crore hair oil space for decades.</p>
                        <p>Launching the soap, Mr. Jaideep Nandi, Managing Director, Bajaj Consumer Care said, “We are extremely delighted to bring to the market a moisturising soap that customers had long sought from us. Bajaj Almond Drops have been loved by generations of Indians due to the equity of almond oil & vitamin E, which are known to have benefits not only for hair but for the skin too. With Bajaj Almond Drops Moisturising Soap, we are now extending the same benefits in a premium soap form.”</p>
                        <p>“We are confident that the Bajaj Almond Drops branding of the soap will speak to customers’ sense of loyalty and trust and evoke the same response as our hair oil offering. The product has been developed keeping in mind the skincare needs and its pricing makes it accessible for all consumer segment types,” Mr. Nandi added.</p>
                        <img src="assets/images/video_img.jpg" class="img-fluid" alt="video_img" data-toggle="modal" data-target="#video">
                        <p class="mt-3">The Grade 1 quality soap has a TFM value of 76% and comes in an aesthetically designed shape featuring Almond Drops engraving. Available immediately, the soap will be sold across the Indian market in different sizes at attractive price points.</p>
                        <p>The Rs 20,000+ crore Indian soap market has also seen consumer needs evolving. Customers have been showing a preference for soaps that do not leave the skin dry after bathing. Plus, they also prefer products that contain natural ingredients. Bajaj Almond Drops Moisturising soap has natural ingredients like Almond Oil and Vitamin E. Currently, premium moisturising soaps pricing in the market makes them less attractive for users to upgrade, the gap being addressed by attractively priced Bajaj Almond Drops Moisturising Soap.</p>
                        <h4 class="yellownew">About Bajaj Consumer Care Ltd.</h4>
                        <p>Bajaj Consumer Care Limited (BCCL) is one of India’s leading FMCG companies with a sizable presence in the hair oil & skincare market.(https://www.bajajconsumercare.com/).</p>
                        <h4 class="yellownew">About Bajaj Group (Kushagra)</h4>
                        <p>The Bajaj Group (Kushagra) is a leading Indian conglomerate with presence across Sugar, Energy, and FMCG sectors.The Group’s flagshipcompany Bajaj Hindustan Sugar Ltd. (BHSL) is India’s oldest and largest producer of sugar. Ranked as the world’s 4th largest integrated sugar company, BHSL is also a leading manufacturer of ethanol, the green fuel which stands to revolutionise India’s fast evolving energy market. Of the Group’s other two businesses viz., Bajaj Energy and Bajaj Consumer Care Ltd., one runs India’s most modern integrated coal-based power plant at Lalitpur (UP) while the other leads the hair oil & skincare market in the FMCG space. The aforementioned companies have robust and growing businesses and market leadership built on a century-old legacy of Trust, Transparency, Leadership and Loyalty.</p>
                        <p>Through its philanthropic arm, Bajaj Foundationthe Group has been building India’s social fabric and uplifting the marginalised via interventions in natural farming, watershed management, education, and integrated community development.</p>
                        <p>Suruchi Kore - Bajaj Group Corporate Communications<br>No. +9198333 47375</p>
                        <p>Sanjay Ojha - Bajaj Group Corporate Communications<br>No.+91 98353 14249</p>
                  </div>
               </div>
            </div>
         </div>
      </section>



<div class="modal fade video-modal" id="video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
    
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    
      <div class="modal-body">
     <video width="320" height="240" controls autoplay muted class="video-1">
  <source src="bajajconsumercare_assets/s3fs-public/2022-06/Launch-Clip.mp4" type="video/mp4">
  
</video>
      </div>
  
    </div>
  </div>
</div>


<?php require_once("footer.php"); ?>

<?php
echo '<script>';
echo 'var noResults = ' . json_encode($no_results) . ';'; // Embed $no_results into JavaScript variable
echo '</script>';
?>


<script type="text/javascript">

   $(document).ready(function() {
      // Gets the video src from the data-src on each button
      var $videoSrc;  
      $('.video-btn').click(function() {
         $videoSrc = $(this).data( "src" );
      });
      console.log($videoSrc);]
      // when the modal is opened autoplay it  
      $('#myModal').on('shown.bs.modal', function (e) {
         
      // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
      $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
      })

      // stop playing the youtube video when I close the modal
      $('#myModal').on('hide.bs.modal', function (e) {
         // a poor man's stop video
         $("#video").attr('src',$videoSrc); 
      }) 
      // document ready  
   });
</script>
<script type="text/javascript">
   $(document).ready(function() {
      $(".media-slider-inner").owlCarousel({
         items:3,
         loop:false,
         margin:20,
         nav:true,
         navText: ['<img src="assets/images/media-slider-arrow-left.svg">','<img src="assets/images/media-slider-arrow-right.svg">'],
         dots:true,
         autoplay:true,
         smartSpeed:1000,
         autoplayTimeout:3000,
         mouseDrag:false,
         dotEach:2,
         responsive:{
            0:{
            items:1,
            },
            600:{
            items:2,
            },
            1000:{
            items:3
            }
         }
      });

      if (noResults === 1) {
         setTimeout(function () {    
            $("#cnomedia").fadeIn();
         }, 500); 
      }
      
   });
   function filterPage() {
      var cyear = $("#exampleFormControlSelect1").val();
      let cmon = $("#exampleFormControlSelect2").val();
      window.location.href = window.location.origin + window.location.pathname + "?year="+ cyear + "&month="+ cmon;
   }
</script>
<script type="text/javascript">
   AOS.init();
</script>

<script type="text/javascript">
   $("#cnomedia").hide();
   $("#rnomedia").hide();
   $('#csort').click( function() {
      var cyear = $("#exampleFormControlSelect1").val();
      let cmon = $("#exampleFormControlSelect2").val();
      var clmon = cmon.toLowerCase();
      
      var cmonths = $("#mc-wrapper .item").hasClass(clmon);
      var cwmonth = $("#mc-wrapper .item."+clmon).hasClass(cyear);
      var cyears = $("#mc-wrapper .item").hasClass(cyear);

      alert(cyear+' == '+clmon);
      
      // Filter items based on the selected year and month
      // var $itemsToShow = $("#mc-wrapper .item." + clmon + "." + cyear);
      var $itemsToShow = $("#mc-wrapper ." + cyear);
      var $itemsToHide = $("#mc-wrapper .item").not($itemsToShow);

      // Remove hidden items from the Owl Carousel
      $itemsToHide.each(function () {
         var indexToRemove = $(this).parent().index();
         $('#mc-wrapper').trigger('remove.owl.carousel', indexToRemove);
      });

      // Refresh Owl Carousel to reflect changes
      $('#mc-wrapper').trigger('refresh.owl.carousel');

      // Show and hide items
      $("#mc-wrapper .item").parent().hide();
      $itemsToShow.parent().show();

      // Add and remove 'active' class
      $("#mc-wrapper .item").parent().removeClass('active');
      $itemsToShow.parent().addClass('active');
      
      // if ((cmonths == true) && (cyear == "Year")) {
      //    $("#mc-wrapper .item").parent().hide();
      //    $("#mc-wrapper .item").parent().removeClass('active');
      //    $("#mc-wrapper .owl-stage").css('transform', 'translate3d(0px, 0px, 0px)');
      //    $("#mc-wrapper .item." + clmon +"").parent().addClass('active');
      //    $("#mc-wrapper .item." + clmon +"").parent().fadeIn();
      //    // $("#mc-wrapper .owl-nav").hide();
      //    // $("#mc-wrapper .owl-dots").hide();
      //    $("#cnomedia").fadeOut();
      //    // $('#mc-wrapper').trigger('stop.owl.autoplay');
      //    $('#mc-wrapper').trigger('refresh.owl.carousel');
      // } else if ((cmon == "Month") && (cyears == true)) {
      //    $("#mc-wrapper .item").parent().hide();
      //    $("#mc-wrapper .item").parent().removeClass('active');
      //    $("#mc-wrapper .owl-stage").css('transform', 'translate3d(0px, 0px, 0px)');
      //    $("#mc-wrapper .item." + cyear +"").parent().addClass('active');
      //    $("#mc-wrapper .item." + cyear +"").parent().fadeIn();
      //    // $("#mc-wrapper .owl-nav").hide();
      //    // $("#mc-wrapper .owl-dots").hide();
      //    $("#cnomedia").fadeOut();
      //    // $('#mc-wrapper').trigger('stop.owl.autoplay');
      //    $('#mc-wrapper').trigger('refresh.owl.carousel');
      // }  else if ((cmonths == true) && (cwmonth == true)) {
      //    $("#mc-wrapper .item").parent().hide();
      //    $("#mc-wrapper .item").parent().removeClass('active');
      //    $("#mc-wrapper .owl-stage").css('transform', 'translate3d(0px, 0px, 0px)');
      //    $("#mc-wrapper .item."+ clmon +"."+ cyear +"").parent().addClass('active');
      //    $("#mc-wrapper .item."+ clmon +"."+ cyear +"").parent().fadeIn();
      //    // $("#mc-wrapper .owl-nav").hide();
      //    // $("#mc-wrapper .owl-dots").hide();
      //    $("#cnomedia").fadeOut();
      //    // $('#mc-wrapper').trigger('stop.owl.autoplay');
      //    $('#mc-wrapper').trigger('refresh.owl.carousel');               
      // }  else if ((cmonths == true) && (cwmonth !== true)) {
      //    $("#mc-wrapper .item").parent().hide();
      //    setTimeout(function () {    
      //       $("#cnomedia").fadeIn();
      //       $("#mc-wrapper .owl-nav").hide();
      //       $("#mc-wrapper .owl-dots").hide();
      //    }, 500);
      // } else if ((cmonths !== true && cyears == true) || (cmonths == true && cyears !== true) || (cmonths !== true && cyears !== true)){
      //    $("#mc-wrapper .item").parent().hide();
      //    setTimeout(function () {    
      //       $("#cnomedia").fadeIn(); 
      //       $("#mc-wrapper .owl-nav").hide();
      //       $("#mc-wrapper .owl-dots").hide();
      //    }, 500);  
      // }

      $(".vision-wrapper").fadeOut();
      setTimeout(function () {    
         $(".vision-wrapper").fadeIn();      
      }, 500);
      // else if ((cmonths == true) && (cyears == true)) {
      //    $("#mc-wrapper .item").parent().hide();
      //    $("#mc-wrapper .item").parent().removeClass('active');
      //    $("#mc-wrapper .owl-stage").css('transform', 'translate3d(0px, 0px, 0px)');
      //    $("#mc-wrapper .item."+ clmon +"."+ cyear +"").parent().addClass('active');
      //    $("#mc-wrapper .item."+ clmon +"."+ cyear +"").parent().fadeIn();
      //    $("#cnomedia").fadeOut();
      //    $('#mc-wrapper').trigger('stop.owl.autoplay');
      //    alert(cyears +" "+ cmonths);
      // } 
   });

   $('#rsort').click( function() {
      var ryear = $("#exampleFormControlSelect3").val();
      let rmon = $("#exampleFormControlSelect4").val();
      var rlmon = rmon.toLowerCase();

      var rmonths = $("#pr-wrapper .item").hasClass(rlmon);
      var rwmonth = $("#pr-wrapper .item."+rlmon).hasClass(ryear);
      var ryears = $("#pr-wrapper .item").hasClass(ryear);
      // alert("#mc-wrapper .item."+rlmon+"."+ryear);
      if ((rmonths == true) && (ryear == "Year")) {
         $("#pr-wrapper .item").parent().hide();
         $("#pr-wrapper .item").parent().removeClass('active');
         $("#pr-wrapper .owl-stage").css('transform', 'translate3d(0px, 0px, 0px)');
         $("#pr-wrapper .item." + rlmon +"").parent().addClass('active');
         $("#pr-wrapper .item." + rlmon +"").parent().fadeIn();
            $("#pr-wrapper .owl-nav").show();
         $("#pr-wrapper .owl-dots").show();
         $('#pr-wrapper').trigger('stop.owl.autoplay');
      } else if ((rmon == "Month") && (ryears == true)) {
         $("#pr-wrapper .item").parent().hide();
         $("#pr-wrapper .item").parent().removeClass('active');
         $("#pr-wrapper .owl-stage").css('transform', 'translate3d(0px, 0px, 0px)');
         $("#pr-wrapper .item." + ryear +"").parent().addClass('active');
         $("#pr-wrapper .item." + ryear +"").parent().fadeIn();
            $("#pr-wrapper .owl-nav").show();
         $("#pr-wrapper .owl-dots").show();
         $('#pr-wrapper').trigger('stop.owl.autoplay');
      }  else if ((rmonths == true) && (rwmonth == true)) {
         $("#pr-wrapper .item").parent().hide();
         $("#pr-wrapper .item").parent().removeClass('active');
         $("#pr-wrapper .owl-stage").css('transform', 'translate3d(0px, 0px, 0px)');
         $("#pr-wrapper .item."+ rlmon +"."+ ryear +"").parent().addClass('active');
         $("#pr-wrapper .item."+ rlmon +"."+ ryear +"").parent().fadeIn();
            $("#pr-wrapper .owl-nav").show();
         $("#pr-wrapper .owl-dots").show();
         $("#rnomedia").fadeOut();
         $('#pr-wrapper').trigger('stop.owl.autoplay');               
      }  else if ((rmonths == true) && (rwmonth !== true)) {
         $("#pr-wrapper .item").parent().hide();
         setTimeout(function () {    
            $("#rnomedia").fadeIn();
               $("#pr-wrapper .owl-nav").hide();
         $("#pr-wrapper .owl-dots").hide();
         }, 500);
      }  else if ((rmonths !== true && ryears == true) || (rmonths == true && ryears !== true) || (rmonths !== true && ryears !== true)){
         $("#pr-wrapper .item").parent().hide();
         setTimeout(function () {    
            $("#rnomedia").fadeIn();
               $("#pr-wrapper .owl-nav").hide();
         $("#pr-wrapper .owl-dots").hide();
         }, 500);  
      }
         $(".vision-wrapper").fadeOut();
      setTimeout(function () {    
         $(".vision-wrapper").fadeIn();      
      }, 500);
   }); 
   /*
   $(document).ready(function(){
      var carousel = $("#carousel").owlCarousel({
         items: 3,
         loop: true,
         nav: true,
         dots: false,
         responsive: {
         0: {
            items: 1
         },
         600: {
            items: 2
         },
         1000: {
            items: 3
         }
         }
      });

      var items = [
         { year: "2023", month: "01", content: "<div>Data 1</div><p>Additional content</p>", data: "Data 1" },
         { year: "2023", month: "02", content: "Item 2 - February", data: "Data 2" },
         { year: "2023", month: "01", content: "Item 3 - January", data: "Data 3" },
         { year: "2023", month: "02", content: "Item 4 - February", data: "Data 4" },
         { year: "2023", month: "01", content: "Item 5 - January", data: "Data 5" },
         { year: "2023", month: "02", content: "Item 6 - February", data: "Data 6" },
         { year: "2023", month: "01", content: "Item 7 - January", data: "Data 7" },
         { year: "2023", month: "02", content: "Item 8 - February", data: "Data 8" },
         { year: "2023", month: "01", content: "Item 9 - January", data: "Data 9" },
         { year: "2023", month: "02", content: "Item 10 - February", data: "Data 10" }
      ];

      // Initial items
      updateCarousel(items);

      $("#year, #month").change(function(){
         var selectedYear = $("#year").val();
         var selectedMonth = $("#month").val();

         // Filter items based on the selected year and month
         var filteredItems = items.filter(function(item){
         return (item.year === selectedYear && item.month === selectedMonth);
         });

         // Update the carousel with the filtered items
         updateCarousel(filteredItems);
      });

      function updateCarousel(data) {
         // Clear existing items
         carousel.trigger('destroy.owl.carousel');
         carousel.empty();

         // Add new items
         for (var i = 0; i < data.length; i++) {
         var item = data[i];
         carousel.append('<div class="item">' + item.content + '<br>' + item.data + '</div>');
         }

         // Reinitialize the carousel
         carousel.owlCarousel({
         items: 3,
         loop: true,
         nav: true,
         dots: false,
         responsive: {
            0: {
               items: 1
            },
            600: {
               items: 2
            },
            1000: {
               items: 3
            }
         }
         });
      }
   });
   */
</script>

<script type="text/javascript">
   $('.modal').on('hidden.bs.modal', function () {
      $('.video-1')[0].pause();
   });
</script>

<script type="text/javascript">
   var x, i, j, selElmnt, a, b, c;
   x = document.getElementsByClassName("tt-select");

   for (i = 0; i < x.length; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 0; j < selElmnt.length; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            var y, i, k, s, h;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            h = this.parentNode.previousSibling;
            for (i = 0; i < s.length; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    for (k = 0; k < y.length; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
    });
   }
   function closeAllSelect(elmnt) {
      var x, y, i, arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      for (i = 0; i < y.length; i++) {
         if (elmnt == y[i]) {
               arrNo.push(i)
         } else {
               y[i].classList.remove("select-arrow-active");
         }
      }
      for (i = 0; i < x.length; i++) {
         if (arrNo.indexOf(i)) {
               x[i].classList.add("select-hide");
         }
      }
   }
   document.addEventListener("click", closeAllSelect);




</script>
   </body>
</html>
