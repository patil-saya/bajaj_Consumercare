<!DOCTYPE html>
<html lang="en">
   <head>
      <?php require_once("head.php"); ?>
      <title>Investor | Bajaj Consumer Care Ltd </title>
      <?php $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>
      <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
      <meta  name="description" content="Investor | Bajaj Consumer Care Ltd">
      <meta property="og:title" content="Investor | Bajaj Consumer Care Ltd" />
      <meta property="og:description" content="Investor | Bajaj Consumer Care Ltd" />
      <meta property="og:url" content="investor.php" />
      <meta property="og:image" content="assets/images/Investor-live.jpg" />
      <style>
        .relation-single:nth-child(2n) .relation-main, .relation-single:nth-child(odd) .relation-main {
            z-index: 1;
            width: 100%;
            /* background: linear-gradient(333deg, #430441 0, #c31432 100%); */
            height: 231px;
        }
        .relation-single:nth-child(odd) .relation-main:hover{
          background: linear-gradient(180deg, #ffeaf061 0, #f9ccb470 100%);
          
        }
        .relation-single:nth-child(2n) .relation-main:hover{
          background: linear-gradient(180deg,#ffeaf02b 0,#f9ccb426 100%);
        }
        
        .relation-main:hover h3{
          color:#000;
        }
        .relation-single {
            height: 235px;
        }
        .relation-main .caption-box {
            display: block;
        }
        .relation-main .common-btn {
            margin: 0 auto;
            opacity: 1;
        }
        .white {
              color: #999;
          }
          .relation-main:hover{
            transform: scale(1.08);
            background: #ff800a;
            z-index: 2;
            box-shadow: 0px 0px 13px 0px #bfbfbf;
            
          }
          /* .relation-main .main-text{
            margin-top: 50px;
          } */
          @media(max-width:600px){
            .relation-single, .relation-single:nth-child(2n) .relation-main, .relation-single:nth-child(odd) .relation-main {
                height: 65px;
            }
          }
          .short-txt .main-text{
            height: 60px;
            margin-top: 20px;
          }

          .relation-main .caption-box p {
            line-height: 22.7px;
          }
      </style>
   </head>
   <body>
      <?php require_once("header.php"); ?>
      <h2 class="f-black mobileview-text">INVESTORS</h2>
      <section class="breadcum">
         <img src="assets/images/investor-banner.png" class="img-fluid w-100 main-img" alt="about-breadcum">
         <div class="container breadcum_container">
            <div class="caption-breadcrum">
               <div class="caption-heading  bod-heading">
                  <h1 class="f-black">INVESTORS</h1>-
               </div>
            </div>
         </div>
      </section>

      <section class="annual-report">
        <div class="container">

        <!--   <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <br> -->
           <h2 class="f-bold yellownew mobile-text1">BAJAJ CONSUMER <br>CARE ANNUAL <br>REPORT 2022-23</h2>
              <h3 class="f-semibold mobile-text2">Charting a new growth story</h3>
              <div class="annual-report-wrapper-up main-up">
                <div class="annual-report-single">
                  <div class="img-wrapp">
                    <img src="assets/images/AR_2025-26.png" class="img-fluid" alt="BAJAJ CONSUMER CARE ANNUAL REPORT 2021-22">
                  </div>
                </div>
                <div class="text-box">
                    <h2 class="f-bold yellow desktop-text1">BAJAJ CONSUMER CARE ANNUAL REPORT 2025-26</h2>
                    <h3 class="f-semibold desktop-text2">Shaping the Next Era of Growth</h3>
                    <p class="f-regular">For more than seven decades, we have earned the trust of generations of consumers by delivering products that stand for quality, consistency and care. Our brands, led by our legacy product, Bajaj Almond Drops Hair Oil, have carved a distinctive position in the market and in the hearts of consumers.</p>


                    <a href="pdf/annual-report/Annual_Report_2025_26.pdf" class="common-btn" download="" aria-label="btn-download">DOWNLOAD PDF</a>
                    <p style="margin-bottom: initial; margin-top: 10px;">To download the annual report of 2024-25, click <a href="pdf/annual-report/Annual_Report_2024_25.pdf" aria-label="btn-2024-25">here.</a></p>
                    <p style="margin-bottom: initial; margin-top: 10px;">To download the annual report of 2023-24, click <a href="pdf/annual-report/BCCL_AR 2023-24.pdf" aria-label="btn-2023-24">here.</a></p>
                    <!-- <p style="margin-bottom: initial; margin-top: 10px;">To download the annual report of 2022-23, click <a href="pdf/annual-report/BCCL-Annual-Report-2022-23.pdf" aria-label="btn-2022-23">here.</a></p> -->
                    <!-- <p style="margin-bottom: initial; margin-top: 10px;">To download the annual report of 2021-22, click <a href="pdf/annual-report/BCCL-Annual-Report-2021-22.pdf" aria-label="btn-2021-22">here.</a></p> -->
                  </div>
                 
                </div>
              </div>
            
          </div>
      </section>

      <?php 
	//NSE DATA
	try {
            $curl = curl_init();
            $url = 'http://cmotswebapi.cmots.com/BajajConsumerCare/SharePriceB/NSE';
            //dd($url);
            curl_setopt_array($curl, array(
                        CURLOPT_URL => $url,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => "",
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "GET", 
                    ));
  
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
  
            if ($err) {
                $nse_data = null; //echo "cURL Error #:" . $err;
            } else {
                if (!empty($response)) {
                    $body = json_decode($response);
                    $nse_data = $body->data;
                }
            }
        } catch (\Exception $e) {
            $nse_data = null; // dd($e);
        }
        
	// BSE DATA
	try {
            $curl_bse = curl_init();
            $url_bse = 'http://cmotswebapi.cmots.com/BajajConsumerCare/SharePriceB/BSE';
            //dd($url_bse);
            curl_setopt_array($curl_bse, array(
                        CURLOPT_URL => $url_bse,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => "",
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "GET", 
                    ));
  
            $response_bse = curl_exec($curl_bse);
            $err_bse = curl_error($curl_bse);
            curl_close($curl_bse);
  
            if ($err_bse) {
                $bse_data = null; //echo "cURL Error #:" . $err;
            } else {
                if (!empty($response_bse)) {
                    $body_bse = json_decode($response_bse);
                    $bse_data = $body_bse->data;
                }
            }
        } catch (\Exception $e_bse) {
            $bse_data = null; // dd($e);
        }
        //print_r($nse_data); echo date('d M Y, h.i A', strtotime($nse_data[0]->Tradedate));
        //print_r($bse_data); echo round($bse_data[0]->PerChange, 2); die;

        if($nse_data){
            $nse_tradedate = date('d M Y, h.i A', strtotime($nse_data[0]->Tradedate));
            $nse_currprice = round($nse_data[0]->Currprice, 2);
            $nse_change = round($nse_data[0]->PerChange, 2);
	    if($nse_change>=0){ $nse_arrow = 'fa fa-long-arrow-up'; $nse_color = '#01cb79'; }
	    else{ $nse_arrow = 'fa fa-long-arrow-down'; $nse_color = '#ff0000'; }
        }else{
            $nse_tradedate = date('d M Y, h.i A');
            $nse_currprice = 0;
            $nse_change = 0;
	    $nse_arrow = 'fa fa-long-arrow-down';
      	    $nse_color = '#ff0000';
        }

        if($bse_data){
            $bse_tradedate = date('d M Y, h.i A', strtotime($bse_data[0]->Tradedate));
            $bse_currprice = round($bse_data[0]->Currprice, 2);
            $bse_change = round($bse_data[0]->PerChange, 2);
            if($bse_change>=0){ $bse_arrow = 'fa fa-long-arrow-up'; $bse_color = '#01cb79'; }
            else{ $bse_arrow = 'fa fa-long-arrow-down'; $bse_color = '#ff0000'; }
        }else{
            $bse_tradedate = date('d M Y, h.i A');
            $bse_currprice = 0;
            $bse_change = 0;
            $bse_arrow = 'fa fa-long-arrow-down';
	    $bse_color = '#ff0000';
        }
      ?>
      <!-- <section class="bajaj-care desktop-bajaj-care">
          <h2 class="white f-bold text-center">BAJAJ CONSUMER CARE LTD</h2>
          <p class="white f-regular text-center"><?php echo $bse_tradedate;?></p>
          <img src="assets/images/bajaj-care-main.svg" class="img-fluid" alt="bajaj-care">
          <div class="bse-wrapper">
              <div class="bse-single">
                  <p class="white f-regular text-center">BSE:</p>
                  <h5 class="f-regular white">₹<?php echo $bse_currprice;?> <i class="<?php echo $bse_arrow;?>" aria-hidden="true" style="color: <?php echo $bse_color?>;"></i> <?php echo $bse_change;?>%</h5>
              </div>
              <div class="bse-single">
                  <p class="white f-regular text-center">NSE:</p>
                  <h5 class="f-regular white">₹<?php echo $nse_currprice;?> <i class="<?php echo $nse_arrow;?>" aria-hidden="true" style="color: <?php echo $nse_color?>;"></i> <?php echo $nse_change;?>%</h5>
              </div>
          </div>
      </section> 


      <section class="bajaj-care mobile-bajaj-care">
          <h2 class="white f-bold text-center">BAJAJ CONSUMER CARE <br>LTD</h2>
          <p class="white f-regular text-center"><?php echo $bse_tradedate;?></p>
           <div class="bse-single">
                  <p class="white f-regular text-center">BSE:</p>
               
          <h5 class="f-regular white">₹<?php echo $bse_currprice;?> <i class="<?php echo $bse_arrow;?>" aria-hidden="true" style="color: <?php echo $bse_color?>;"></i> <?php echo $bse_change;?>%</h5>
              </div>
          <img src="assets/images/bajaj-care-main.svg" class="img-fluid" alt="bajaj-care">
         
             
              <div class="bse-single">
                  <p class="white f-regular text-center">NSE:</p>
                  <h5 class="f-regular white" id="stock1">₹<?php echo $nse_currprice;?> <i class="<?php echo $nse_arrow;?>" aria-hidden="true" style="color: <?php echo $nse_color?>;"></i> <?php echo $nse_change;?>%</h5>
              </div>
          
      </section>-->
  

      <section class="relation">
          <div class="container">
              <h2 class="f-bold yellownew text-center">INVESTOR RELATIONS</h2>
              <p class="f-regular text-center">Access our financial reports, shareholder centre, forms, updates and announcements here</p>



  <div class="relation-wrapper">
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Announcements</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Check out all the latest company <br>updates here.</p>
          <a href="announcements2026.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div> 
    <div class="relation-single long-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Disclosures under Regulation 46<br> of the LODR</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Here are the Disclosures under<br> Regulation 46 of the LODR.</p>
          <a href="disclosures-under-regulation-46-lodr.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>  
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Buyback</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Here are the details related to<br> the Buyback.</p>
          <a href="buyback.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>      
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Board of Directors</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Meet the leadership behind our <br>growth.</p>
          <a href="board-of-directors.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Committees of the Board</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Learn more about our specialized <br>committees.</p>
          <a href="committees-board.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Policies</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Read about our comprehensive <br>company policies.</p>
          <a href="policies.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Nomination and other related Forms</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Click here to download nomination<br> and other related documents.</p>
          <a href="nomination.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div> 
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">General Meetings & Postal Ballots</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Get access to our internal <br>discussions and minutes.</p>
          <a href="general-meetings-postal-ballots-agm.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Annual Reports</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Access our detailed performance <br>trajectory here.</p>
          <a href="annual-report.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Financial Results</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Read about our revenue potential <br>and financial standing.</p>
          <a href="financial-result.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>
    
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Shareholding Pattern</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Understand our division and <br>ownership of shares here.</p>
          <a href="shareholder-pattern.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Corporate Governance</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Learn our protocols and parameters of appointing directors.</p>
          <a href="corporate-governance.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Conference Calls Transcripts</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Read more about our business <br>thoughts and discussions.</p>
          <a href="conference-calls-transcripts.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Investors Presentation</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Explore our insightful pitches that <br>invite investments.</p>
          <a href="investors-presentation.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Unpaid Dividend</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Learn more about our dividend <br>distribution status.</p>
          <a href="investors-unpaid-dividend.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Investors Queries & Complaints</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Get help on queries regarding <br>company shares here.</p>
          <a href="investor-queries.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>
    <div class="relation-single long-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Listing on Stock Exchange and <br>Stock Codes</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Know our share listing and trading <br>details here.</p>
          <a href="stock-exchnage-&-stock-code.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div> 
     <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Familiarization Programme</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Read about how our Directors are <br>acquainted about the company.</p>
          <a href="investors-familiarization-programme.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div> 
     <div class="relation-single long-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Disclosure of Reasons for <br>Encumbrance by Promoter</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Learn more about our funding <br>allocation details here..</p>
          <a href="disclosure-reasons-encumbrance-promoter.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div> 
     <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Announcements-Archive</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Check out all the company <br>updates from 2010-2017 here.</p>
          <a href="announcements2017.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div> 
     <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Nodal Officer</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Contact details of Nodal Officer</p>
          <a href="nodal-officer.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div> 
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Independent Directors</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Terms and Conditions for appointment <br>of Independent Director</p>
          <a href="independent-directors.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>
    
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">ESOPS</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Learn details about our employee <br>ownership plan.</p>
          <a href="investors-esops.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>  
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Investors FAQs</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Understand every aspect of our <br>investor relationship.</p>
          <a href="investor-faq.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Contact Details of KMP</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Check out the contact details of KMP for<br>determining materiality of events</p>
          <a href="contact-details-of-KMP-for-determining-materiality-of-events.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div> 
    <div class="relation-single short-txt">
      <div class="relation-main">
        <div class="main-text">
          <h3 class="f-medium">Demerger</h3>
        </div>
        <div class="caption-box">
          <p class="f-regular white text-center">Get key updates and documents <br>pertaining to the demerger.</p>
          <a href="demerger.php" class="common-btn" aria-label="read-more-link">READ MORE</a>
        </div>
      </div> 
    </div>
  </div>



<!-- investor mobile slider -->

   <div class="owl-carousel owl-theme investor-slider" data-aos="fade-up" data-aos-delay="100">

      <div class="item">
        <div class="relation-single">
          <a href="announcements2023.php" class="relation-main" aria-label="Announcements">
           <h3 class="f-medium">Announcements</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="disclosures-under-regulation-46-lodr.php" class="relation-main" aria-label="DUR46">
           <h3 class="f-medium">Disclosures under Regulation 46<br> of the LODR</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="buyback.php" class="relation-main" aria-label="Buyback">
           <h3 class="f-medium">Buyback</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="board-of-directors.php" class="relation-main" aria-label="Board of Directors">
           <h3 class="f-medium">Board of Directors</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="committees-board.php" class="relation-main" aria-label="Committees of the Board">
           <h3 class="f-medium">Committees of the Board</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="policies.php" class="relation-main" aria-label="Policies">
           <h3 class="f-medium">Policies</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="nomination.php" class="relation-main" aria-label="Nomination and other Forms">
           <h3 class="f-medium">Nomination and other <br>related Forms</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="general-meetings-postal-ballots-agm.php" class="relation-main" aria-label="General Meetings & Postal Ballots">
           <h3 class="f-medium">General Meetings & Postal <br>Ballots</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="annual-report.php" class="relation-main" aria-label="Annual Reports">
           <h3 class="f-medium">Annual Reports</h3>
         </a>
        </div>
        
      </div>

       <div class="item">
        <div class="relation-single">
          <a href="financial-result.php" class="relation-main" aria-label="Financial Results">
           <h3 class="f-medium">Financial Results</h3>
         </a>
        </div>
        
        <div class="relation-single">
          <a href="shareholder-pattern.php" class="relation-main" aria-label="Shareholding Pattern">
           <h3 class="f-medium">Shareholding Pattern</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="corporate-governance.php" class="relation-main" aria-label="Corporate Governance">
           <h3 class="f-medium">Corporate Governance</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="conference-calls-transcripts.php" class="relation-main" aria-label="Conference Calls Transcripts">
           <h3 class="f-medium">Conference Calls Transcripts</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="investors-presentation.php" class="relation-main" aria-label="Investors Presentation">
           <h3 class="f-medium">Investors Presentation</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="investors-unpaid-dividend.php" class="relation-main" aria-label="Unpaid Dividend">
           <h3 class="f-medium">Unpaid Dividend</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="investor-queries.php" class="relation-main" aria-label="Investors Queries & Complaints">
           <h3 class="f-medium">Investors Queries & Complaints</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="stock-exchnage-&-stock-code.php" class="relation-main" aria-label="Listing on Stock Exchange and Stock Codes">
           <h3 class="f-medium">Listing on Stock Exchange and Stock Codes</h3>
         </a>
        </div>
        
      </div>

 <div class="item">
        
        <div class="relation-single">
          <a href="investors-familiarization-programme.php" class="relation-main" aria-label="Familiarization Programme">
           <h3 class="f-medium">Familiarization Programme</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="disclosure-reasons-encumbrance-promoter.php" class="relation-main" aria-label="DORFEBP">
           <h3 class="f-medium">Disclosure of Reasons for Encumbrance by Promoter</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="announcements2017.php" class="relation-main" aria-label="Announcements-Archive">
           <h3 class="f-medium">Announcements-Archive</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="nodal-officer.php" class="relation-main" aria-label="Nodal Officer">
           <h3 class="f-medium">Nodal Officer</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="independent-directors.php" class="relation-main" aria-label="Independent Directors">
           <h3 class="f-medium">Independent Directors</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="investors-esops.php" class="relation-main" aria-label="ESOPS">
           <h3 class="f-medium">ESOPS</h3>
         </a>
        </div>
        <div class="relation-single">
          <a href="investor-faq.php" class="relation-main" aria-label="Investors FAQs">
           <h3 class="f-medium">Investors FAQs</h3>
         </a>
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
                          <h6 class="f-bold">Bajaj Consumer Care Limited</h6>
                          <p style="display: block!important;">1231, Solitaire Corporate Park,<br> 167, Guru Hargovind Marg,<br> Opp Apple Heritage Chakala,<br> Andheri (East) Mumbai - 400 093</p>
                          <div class="address-single">
                            <img src="assets/images/call-icon.png" class="img-fluid" alt="call-icon">
                            <h5><span class="f-bold">Call us:</span> <a href="tel:98989 98989" class="f-regular" aria-label="">+91 - 22 - 66919477/78</a></h5>
                         </div>
                         <div class="address-single">
                            <img src="assets/images/fax.png" class="img-fluid" alt="fax-icon">
                            <h5><span class="f-bold">Fax:</span> <a href="" class="f-regular" aria-label="">+91 - 22 - 66919476</a></h5>
                         </div>
                  </div>
                   </div>
                     <div class="hello-investor-single">
                  <div class="img-wrapp">
                      <img src="assets/images/hello-investor.png" class="img-fluid" alt="Contact Investors">
                  </div>
              </div>
             
          </div>
      </section>
     
      <?php require_once("footer.php"); ?>
      <script type="text/javascript">
         AOS.init();

//$(".caption-box").show(2500);
        </script>
      <!--   <script>
$(document).ready(function(){
  $(".relation-single1").hover(function(){
    $('.relation-single2').css("position", "absolute");
    }, function(){
    $('.relation-single2').css("position", "relative");
  });
});
</script> -->

<script type="text/javascript">
         $(document).ready(function() {
     $(".investor-slider").owlCarousel({
      items:3,
      loop:true,
      margin:40,
      dots:true,
      autoplay:false,
      smartSpeed:700,
      nav:false,
         responsive:{
         0:{
            items:1,
            stagePadding:0,
            margin:20,
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





document.getElementById("stock1").addEventListener("toggle", waterMap);
function stock(){
var stock = {data:[{DayLow:"142.8",PrevPrice:"142.25",Lname:"Bajaj Consumer Care Ltd",Volume:"539424",Currprice:"144.8",PerChange:"1.7926186291739976",DayHigh:"145.4",PriceDiff:"2.5500000000000114",DayOpen:"145.0",Tradedate:"2022-07-07T00:00:00",ISIN:"INE933K01021"}],success:"true",message:"Successful"};
}
     </script>
   </body>
</html>
