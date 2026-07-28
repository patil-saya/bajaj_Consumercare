<!DOCTYPE html>
<html lang="en">
   <head>
      <?php require_once("head.php"); ?>
      <title>CONTACT US | Bajaj Consumer Care Ltd </title>
      <?php $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>
      <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
       <meta  name="description" content="To connect with us, fill up the form and we will get back to you shortly. ">
      <meta property="og:title" content="CONTACT US | Bajaj Consumer Care Ltd" />
      <meta property="og:description" content="To connect with us, fill up the form and we will get back to you shortly. " />
<meta property="og:url" content="contact-us.php" />
<meta property="og:image" content="assets/images/contact-live.jpg" />
   </head>
   <body>
 <?php require_once("header.php"); ?>
 <h2 class="f-black mobileview-text">CONTACT US</h2>
    <section class="breadcum">
         <img src="assets/images/contact-banner.png" class="img-fluid w-100 main-img" alt="about-breadcum">
         <div class="container breadcum_container">
            <div class="caption-breadcrum">
               <div class="caption-heading  bod-heading">
                  <h1 class="f-black">CONTACT US</h1>
               </div>
            </div>
         </div>
      </section>

    
<section class="map">
   <div class="container" >
      <div class="map-div" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.8596341933403!2d72.85859951532152!3d19.113812787066234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c830f1e9f761%3A0x669a346110607ec6!2sBajaj%20Consumer%20Care%20Ltd!5e0!3m2!1sen!2sin!4v1653385641594!5m2!1sen!2sin" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="address-box">
         <div class="address-single">
              <img src="assets/images/placeholder.png" class="img-fluid">
              <div class="text-box">
                 <h5 class="f-bold">Registered Office</h5>
                 <p class="f-regular">Station Road, Udaipur 313001 <br>Rajasthan, India</p> 
                 <p class="f-regular"><span class="f-book">CIN:</span> L01110RJ2006PLC047173</p>
              </div>
         </div>
         <div class="address-single">
              <img src="assets/images/placeholder.png" class="img-fluid">
              <div class="text-box">
                 <h5 class="f-bold">Corporate Office</h5>
                 <p class="f-regular">1231, Solitaire Corporate Park, 151 M. Vasanji <br>Road, Chakala, Andheri East, Mumbai 400093 <br>Maharashtra, India</p> 
              </div>
         </div>
        
      </div>
   </div>
      


   </div>
</section>

<div class="container new-address-main">
     <h2 class="f-bold address-new-mobile-heading yellow text-center">REGISTRARS AND SHARE <br>TRANSFER AGENTS</h2>
 <div class="vision-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
               <div class="vision-single">
                  <div class="img-wrapp">
                  <img src="assets/images/contact-new-img.png" class="img-fluid" alt="REGISTRARS AND SHARE TRANSFER AGENTS">
               </div>
               </div>
               <div class="vision-single address-single">
                  <h2 class="f-bold address-new-desktop-heading">REGISTRARS AND SHARE <br>TRANSFER AGENTS</h2>
                  <p><b>KFin Technologies Private Limited</b></p>
                <p class="f-regular">Selenium Tower B, Plot Nos. 31 & 32, Gachibowli, <br>Financial District, Nanakramguda Serilingampally <br>Mandal, Hyderabad – 500032.</p> 
                 <p class="f-regular"><span class="f-book">Call us:</span> +91 22 22049056/ 9058</p>
                    <p class="f-regular"><span class="f-book">Mail us:</span> <a href="mailto: einward.ris@kfintech.com" class="f-book"> einward.ris@kfintech.com</a></p>
               </div>
            </div>
</div>
<section class="get-in" id="contact">
   <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
      <h2 class="f-bold">GET IN TOUCH</h2>
      <div class="form-div" class="content" id="form"> 
        <form action="" id="contactForm" method="post">
            <div class="row">
               <div class="col-lg-4 col-md-12">
                  <div class="form-group">
                       <input type="text" name="name" required class="name form-control" placeholder="Name" pattern="[A-Za-z A-Za-z]{1,}" title="Please enter only letters" tabindex=1 />
                  </div>
               </div>
               <div class="col-lg-4 col-md-12">
                  <div class="form-group">
                  <input type="email" name="email" required class="email form-control" placeholder="Email ID" tabindex=2 />
                  </div>
               </div>
               <div class="col-lg-4 col-md-12">
                  <div class="form-group">
                     <input type="text" name="contactnumber" class="form-control phone" placeholder="Phone Number"  minlength="10" maxlength="10" pattern="[0-9]{10}" title="Please enter contact number" required="" >
                  </div>
               </div>
              <!--  <div class="col-lg-4 col-md-12">
                  <div class="form-group">
                     <select class="form-control" id="exampleFormControlSelect1" name="bajajconsumer">
                        <option hidden="true">Bajaj Consumer Care Limited</option>
                        <option>Bajaj Consumer Care Limited</option>
                     </select>
                  </div>
               </div> -->
              <!--  <div class="col-lg-4 col-md-12">
                  <div class="form-group">
                     <input type="text" class="form-control address" name="address" placeholder="Address" required >
                  </div>
               </div> -->
               <div class="col-lg-4 col-md-12">
                  <div class="form-group">
                     <select name="location" name="location_1[]" class="form-control shadow-sm" required="">
                           <option hidden="true" value="">Country</option>
                           <option value="Afganistan">Afghanistan</option>
                           <option value="Albania">Albania</option>
                           <option value="Algeria">Algeria</option>
                           <option value="American Samoa">American Samoa</option>
                           <option value="Andorra">Andorra</option>
                           <option value="Angola">Angola</option>
                           <option value="Anguilla">Anguilla</option>
                           <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                           <option value="Argentina">Argentina</option>
                           <option value="Armenia">Armenia</option>
                           <option value="Aruba">Aruba</option>
                           <option value="Australia">Australia</option>
                           <option value="Austria">Austria</option>
                           <option value="Azerbaijan">Azerbaijan</option>
                           <option value="Bahamas">Bahamas</option>
                           <option value="Bahrain">Bahrain</option>
                           <option value="Bangladesh">Bangladesh</option>
                           <option value="Barbados">Barbados</option>
                           <option value="Belarus">Belarus</option>
                           <option value="Belgium">Belgium</option>
                           <option value="Belize">Belize</option>
                           <option value="Benin">Benin</option>
                           <option value="Bermuda">Bermuda</option>
                           <option value="Bhutan">Bhutan</option>
                           <option value="Bolivia">Bolivia</option>
                           <option value="Bonaire">Bonaire</option>
                           <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                           <option value="Botswana">Botswana</option>
                           <option value="Brazil">Brazil</option>
                           <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                           <option value="Brunei">Brunei</option>
                           <option value="Bulgaria">Bulgaria</option>
                           <option value="Burkina Faso">Burkina Faso</option>
                           <option value="Burundi">Burundi</option>
                           <option value="Cambodia">Cambodia</option>
                           <option value="Cameroon">Cameroon</option>
                           <option value="Canada">Canada</option>
                           <option value="Canary Islands">Canary Islands</option>
                           <option value="Cape Verde">Cape Verde</option>
                           <option value="Cayman Islands">Cayman Islands</option>
                           <option value="Central African Republic">Central African Republic</option>
                           <option value="Chad">Chad</option>
                           <option value="Channel Islands">Channel Islands</option>
                           <option value="Chile">Chile</option>
                           <option value="China">China</option>
                           <option value="Christmas Island">Christmas Island</option>
                           <option value="Cocos Island">Cocos Island</option>
                           <option value="Colombia">Colombia</option>
                           <option value="Comoros">Comoros</option>
                           <option value="Congo">Congo</option>
                           <option value="Cook Islands">Cook Islands</option>
                           <option value="Costa Rica">Costa Rica</option>
                           <option value="Cote DIvoire">Cote DIvoire</option>
                           <option value="Croatia">Croatia</option>
                           <option value="Cuba">Cuba</option>
                           <option value="Curaco">Curacao</option>
                           <option value="Cyprus">Cyprus</option>
                           <option value="Czech Republic">Czech Republic</option>
                           <option value="Denmark">Denmark</option>
                           <option value="Djibouti">Djibouti</option>
                           <option value="Dominica">Dominica</option>
                           <option value="Dominican Republic">Dominican Republic</option>
                           <option value="East Timor">East Timor</option>
                           <option value="Ecuador">Ecuador</option>
                           <option value="Egypt">Egypt</option>
                           <option value="El Salvador">El Salvador</option>
                           <option value="Equatorial Guinea">Equatorial Guinea</option>
                           <option value="Eritrea">Eritrea</option>
                           <option value="Estonia">Estonia</option>
                           <option value="Ethiopia">Ethiopia</option>
                           <option value="Falkland Islands">Falkland Islands</option>
                           <option value="Faroe Islands">Faroe Islands</option>
                           <option value="Fiji">Fiji</option>
                           <option value="Finland">Finland</option>
                           <option value="France">France</option>
                           <option value="French Guiana">French Guiana</option>
                           <option value="French Polynesia">French Polynesia</option>
                           <option value="French Southern Ter">French Southern Ter</option>
                           <option value="Gabon">Gabon</option>
                           <option value="Gambia">Gambia</option>
                           <option value="Georgia">Georgia</option>
                           <option value="Germany">Germany</option>
                           <option value="Ghana">Ghana</option>
                           <option value="Gibraltar">Gibraltar</option>
                           <option value="Great Britain">Great Britain</option>
                           <option value="Greece">Greece</option>
                           <option value="Greenland">Greenland</option>
                           <option value="Grenada">Grenada</option>
                           <option value="Guadeloupe">Guadeloupe</option>
                           <option value="Guam">Guam</option>
                           <option value="Guatemala">Guatemala</option>
                           <option value="Guinea">Guinea</option>
                           <option value="Guyana">Guyana</option>
                           <option value="Haiti">Haiti</option>
                           <option value="Hawaii">Hawaii</option>
                           <option value="Honduras">Honduras</option>
                           <option value="Hong Kong">Hong Kong</option>
                           <option value="Hungary">Hungary</option>
                           <option value="Iceland">Iceland</option>
                           <option value="Indonesia">Indonesia</option>
                           <option value="India">India</option>
                           <option value="Iran">Iran</option>
                           <option value="Iraq">Iraq</option>
                           <option value="Ireland">Ireland</option>
                           <option value="Isle of Man">Isle of Man</option>
                           <option value="Israel">Israel</option>
                           <option value="Italy">Italy</option>
                           <option value="Jamaica">Jamaica</option>
                           <option value="Japan">Japan</option>
                           <option value="Jordan">Jordan</option>
                           <option value="Kazakhstan">Kazakhstan</option>
                           <option value="Kenya">Kenya</option>
                           <option value="Kiribati">Kiribati</option>
                           <option value="Korea North">Korea North</option>
                           <option value="Korea Sout">Korea South</option>
                           <option value="Kuwait">Kuwait</option>
                           <option value="Kyrgyzstan">Kyrgyzstan</option>
                           <option value="Laos">Laos</option>
                           <option value="Latvia">Latvia</option>
                           <option value="Lebanon">Lebanon</option>
                           <option value="Lesotho">Lesotho</option>
                           <option value="Liberia">Liberia</option>
                           <option value="Libya">Libya</option>
                           <option value="Liechtenstein">Liechtenstein</option>
                           <option value="Lithuania">Lithuania</option>
                           <option value="Luxembourg">Luxembourg</option>
                           <option value="Macau">Macau</option>
                           <option value="Macedonia">Macedonia</option>
                           <option value="Madagascar">Madagascar</option>
                           <option value="Malaysia">Malaysia</option>
                           <option value="Malawi">Malawi</option>
                           <option value="Maldives">Maldives</option>
                           <option value="Mali">Mali</option>
                           <option value="Malta">Malta</option>
                           <option value="Marshall Islands">Marshall Islands</option>
                           <option value="Martinique">Martinique</option>
                           <option value="Mauritania">Mauritania</option>
                           <option value="Mauritius">Mauritius</option>
                           <option value="Mayotte">Mayotte</option>
                           <option value="Mexico">Mexico</option>
                           <option value="Midway Islands">Midway Islands</option>
                           <option value="Moldova">Moldova</option>
                           <option value="Monaco">Monaco</option>
                           <option value="Mongolia">Mongolia</option>
                           <option value="Montserrat">Montserrat</option>
                           <option value="Morocco">Morocco</option>
                           <option value="Mozambique">Mozambique</option>
                           <option value="Myanmar">Myanmar</option>
                           <option value="Nambia">Nambia</option>
                           <option value="Nauru">Nauru</option>
                           <option value="Nepal">Nepal</option>
                           <option value="Netherland Antilles">Netherland Antilles</option>
                           <option value="Netherlands">Netherlands (Holland, Europe)</option>
                           <option value="Nevis">Nevis</option>
                           <option value="New Caledonia">New Caledonia</option>
                           <option value="New Zealand">New Zealand</option>
                           <option value="Nicaragua">Nicaragua</option>
                           <option value="Niger">Niger</option>
                           <option value="Nigeria">Nigeria</option>
                           <option value="Niue">Niue</option>
                           <option value="Norfolk Island">Norfolk Island</option>
                           <option value="Norway">Norway</option>
                           <option value="Oman">Oman</option>
                           <option value="Pakistan">Pakistan</option>
                           <option value="Palau Island">Palau Island</option>
                           <option value="Palestine">Palestine</option>
                           <option value="Panama">Panama</option>
                           <option value="Papua New Guinea">Papua New Guinea</option>
                           <option value="Paraguay">Paraguay</option>
                           <option value="Peru">Peru</option>
                           <option value="Phillipines">Philippines</option>
                           <option value="Pitcairn Island">Pitcairn Island</option>
                           <option value="Poland">Poland</option>
                           <option value="Portugal">Portugal</option>
                           <option value="Puerto Rico">Puerto Rico</option>
                           <option value="Qatar">Qatar</option>
                           <option value="Republic of Montenegro">Republic of Montenegro</option>
                           <option value="Republic of Serbia">Republic of Serbia</option>
                           <option value="Reunion">Reunion</option>
                           <option value="Romania">Romania</option>
                           <option value="Russia">Russia</option>
                           <option value="Rwanda">Rwanda</option>
                           <option value="St Barthelemy">St Barthelemy</option>
                           <option value="St Eustatius">St Eustatius</option>
                           <option value="St Helena">St Helena</option>
                           <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                           <option value="St Lucia">St Lucia</option>
                           <option value="St Maarten">St Maarten</option>
                           <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                           <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                           <option value="Saipan">Saipan</option>
                           <option value="Samoa">Samoa</option>
                           <option value="Samoa American">Samoa American</option>
                           <option value="San Marino">San Marino</option>
                           <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                           <option value="Saudi Arabia">Saudi Arabia</option>
                           <option value="Senegal">Senegal</option>
                           <option value="Seychelles">Seychelles</option>
                           <option value="Sierra Leone">Sierra Leone</option>
                           <option value="Singapore">Singapore</option>
                           <option value="Slovakia">Slovakia</option>
                           <option value="Slovenia">Slovenia</option>
                           <option value="Solomon Islands">Solomon Islands</option>
                           <option value="Somalia">Somalia</option>
                           <option value="South Africa">South Africa</option>
                           <option value="Spain">Spain</option>
                           <option value="Sri Lanka">Sri Lanka</option>
                           <option value="Sudan">Sudan</option>
                           <option value="Suriname">Suriname</option>
                           <option value="Swaziland">Swaziland</option>
                           <option value="Sweden">Sweden</option>
                           <option value="Switzerland">Switzerland</option>
                           <option value="Syria">Syria</option>
                           <option value="Tahiti">Tahiti</option>
                           <option value="Taiwan">Taiwan</option>
                           <option value="Tajikistan">Tajikistan</option>
                           <option value="Tanzania">Tanzania</option>
                           <option value="Thailand">Thailand</option>
                           <option value="Togo">Togo</option>
                           <option value="Tokelau">Tokelau</option>
                           <option value="Tonga">Tonga</option>
                           <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                           <option value="Tunisia">Tunisia</option>
                           <option value="Turkey">Turkey</option>
                           <option value="Turkmenistan">Turkmenistan</option>
                           <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                           <option value="Tuvalu">Tuvalu</option>
                           <option value="Uganda">Uganda</option>
                           <option value="United Kingdom">United Kingdom</option>
                           <option value="Ukraine">Ukraine</option>
                           <option value="United Arab Erimates">United Arab Emirates</option>
                           <option value="United States of America">United States of America</option>
                           <option value="Uraguay">Uruguay</option>
                           <option value="Uzbekistan">Uzbekistan</option>
                           <option value="Vanuatu">Vanuatu</option>
                           <option value="Vatican City State">Vatican City State</option>
                           <option value="Venezuela">Venezuela</option>
                           <option value="Vietnam">Vietnam</option>
                           <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                           <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                           <option value="Wake Island">Wake Island</option>
                           <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                           <option value="Yemen">Yemen</option>
                           <option value="Zaire">Zaire</option>
                           <option value="Zambia">Zambia</option>
                           <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                  </div>
               </div>
               <div class="col-lg-8 col-md-12">
                  <div class="form-group">
                     <input type="text" name="message" class="message form-control" maxlength="140" required=""  placeholder="Your Message" tabindex=4 > <!-- pattern="[A-Za-z0-9]{1,}" -->
                  </div>
               </div>
               <div class="col-lg-4 col-md-12">
              
                     <div class="form-group">
                         <span id="captcha"></span>
                <input type="text" name="captcha" class="captcha form-control"  placeholder="Please enter the code" tabindex=3 / required="">
                    
                  </div>
               </div>
            </div>
       

  <input type="submit" name="submit" value="Submit now" class="submit common-btn" tabindex=5>

         </form>
      </div>
   </div>
</section>
 


 <!-- <section id="contact">
          <div class="content">
            <div id="form">
              <form action="" id="contactForm" method="post">
                <span>Name</span>
                <input type="text" name="name" class="name" placeholder="Enter your name" tabindex=1 />
                <span>Email</span>
                <input type="text" name="email" class="email" placeholder="Enter your email" tabindex=2 />
                <span id="captcha"></span>
                <input type="text" name="captcha" class="captcha" maxlength="4" size="4" placeholder="Enter captcha code" tabindex=3 />
                <span>Message</span>
                <textarea class="message" placeholder="Enter your message" tabindex=4></textarea>
                <input type="submit" name="submit" value="Send e-mail" class="submit" tabindex=5>
              </form>
            </div>
      </section> -->

      <?php require_once("footer.php"); ?>
      
      <script type="text/javascript">
            AOS.init();

                $(document).ready(function(){
$("#msg-error").hide();
  var allowed = 0; // how many times url can be allowed
  var urlregex = /(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})/g; //match urls
  var emailregex = /\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}\b/ig; //match emails
  var specialregex = /[\'^Â£$%&*(){}@#~><>|=_+Â¬]/g; //match special characters

  $('#contactmsg').on('input', function() {
    var textUrl = $(this).val().match(urlregex); // search url
    var textArea = $(this).val().match(emailregex); // search email
    var textChar = $(this).val().match(specialregex); // search special character
    if((textUrl && textUrl.length > allowed)||(textArea && textArea.length > allowed)||(textChar && textChar.length > allowed)){
      $('#form-submit').prop("disabled", true);
      $("#msg-error").show();
    }else{
      $('#form-submit').prop("disabled", false);
      $("#msg-error").hide();
    }
  });
   });



// $(document).ready(function(){
//   $("input").focus(function(){
//     $(".navbar-nav").hide();
//   });
// });


if ($(window).width() < 767) {
    $(document).ready(function() {
  $("input").focus(function() { 
              $('.navbar-nav').hide();
      //return false;
    });
    
  
 $('input').blur(function(){
    if( !$(this).val() ) {
            $('.navbar-nav').show('slow'); 
    }
});

  
  
});//end
};




function captchaCode() {
  var Numb1, Numb2, Numb3, Numb4, Code;     
  Numb1 = (Math.ceil(Math.random() * 10)-1).toString();
  Numb2 = (Math.ceil(Math.random() * 10)-1).toString();
  Numb3 = (Math.ceil(Math.random() * 10)-1).toString();
  Numb4 = (Math.ceil(Math.random() * 10)-1).toString();
  
  Code = Numb1 + Numb2 + Numb3 + Numb4;
  $("#captcha span").remove();
  $("#captcha input").remove();
  $("#captcha").append("<span id='code'>" + Code + "</span><input type='button' onclick='captchaCode();'>");
}

$(function() {
  captchaCode();
  
  $('#contactForm').submit(function(){
    var captchaVal = $("#code").text();
    var captchaCode = $(".captcha").val();
    if (captchaVal == captchaCode) {
      $(".captcha").css({
        "color" : "#609D29"
      });
    }
    else {
      $(".captcha").css({
        "color" : "#CE3B46"
      });
    }
    
    var emailFilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,10})+$/;   
    var emailText = $(".email").val();
    if (emailFilter.test(emailText)) {
      $(".email").css({
        "color" : "#609D29"
      });
    }
    else {
      $(".email").css({
        "color" : "#CE3B46"
      });
    }
    
    var nameFilter = /^([a-zA-Z \t]{3,15})+$/;
    var nameText = $(".name").val();
    if (nameFilter.test(nameText)) {
      $(".name").css({
        "color" : "#609D29"
      });
    }
    else {
      $(".name").css({
        "color" : "#CE3B46"
      });
    }


    // var addressFilter = /^([A-Za-z0-9]{3,15})+$/;
    // var addressText = $(".address").val();
    // if (addressFilter.test(addressText)) {
    //   $(".address").css({
    //     "color" : "#609D29"
    //   });
    // }
    // else {
    //   $(".address").css({
    //     "color" : "#CE3B46"
    //   });
    // }


    var phoneFilter = /^([0-9]{10,15})+$/;
    var phoneText = $(".phone").val();
    if (phoneFilter.test(phoneText)) {
      $(".phone").css({
        "color" : "#609D29"
      });
    }
    else {
      $(".phone").css({
        "color" : "#CE3B46"
      });
    }
    
    var messageText = $(".message").val().length;
    if (messageText > 1) {
      $(".message").css({
        "color" : "#609D29"
      });
    }
    else {
      $(".message").css({
        "color" : "#CE3B46"
      });
    }
    
    if ((captchaVal !== captchaCode) || (!emailFilter.test(emailText)) || (!phoneFilter.test(phoneText)) || (!nameFilter.test(nameText)) || (!addressFilter.test(addressText)) || (messageText < 10)) {
      return false;
    }
   if ((captchaVal !== captchaCode) || (!emailFilter.test(emailText)) || (!phoneFilter.test(phoneText)) || (!nameFilter.test(nameText)) || (!addressFilter.test(addressText)) || (messageText < 10)) {
      $("#contactForm").css("display", "none");
      $("#form").append("<h2>Message sent!</h2>");
      return false;
    }
  });       
});

              </script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>     
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link> 
         
   </body>
</html>



<?php
if(isset($_POST['submit']))
   {  
 $name = $_POST['name'];
 $email = $_POST['email'];
 $contactnumber = $_POST['contactnumber'];
 $bajaj = $_POST['bajajconsumer'];
 $address = $_POST['address'];
 $country = $_POST['location'];
 $message = $_POST['message'];
 $captcha = $_POST['captcha'];
     
    
    if ((empty($_POST['name'])) || (empty($_POST['email'])) || (empty($_POST['contactnumber'])) || (empty($_POST['location'])) || (empty($_POST['message'])) || (empty($_POST['captcha'])))
    {
      echo "<script>sweetAlert('All Fields are required...!');</script>";
    }
    
    else{
        // $to = "consumer@bajajconsumer.com";
           $to = "nikki@z-aksys.com";
        $subject = "Bajaj Consumer Care - Contact Form";
        
        $message = '<table border="0"><tr><td><b>Name  :</b></td><td>' .$_POST['name'] ."</td></tr>";
      
       
        $message .= '<tr><td><b>Email Id :</b></td><td>' .$_POST['email'] ."</td></tr>";
          $message .= '<tr><td><b>Contact Number :</b></td><td>' .$_POST['contactnumber'] ."</td></tr>";
        $message .= '<tr><td><b>Bajaj Consumer Care :</b></td><td>' .$_POST['bajajconsumer'] ."</td></tr>";
        $message .= '<tr><td><b>Address :</b></td><td>' .$_POST['address'] ."</td></tr>";
           $message .= '<tr><td><b>Location :</b></td><td>' .$_POST['location'] ."</td></tr>";
             
        $message .= '<tr><td><b>Message :</b></td><td>' .$_POST['message'] ."</td></tr></table>";
        
        $header = "From: contact<noreply@boostol.in> \r\n";
        $header .= "CC:diksha@gordinateur.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        
        if(mail ($to,$subject,$message,$header)) {
    echo 
    "<script>
   sweetAlert('Thank you ! <br> We will get back to you soon.');
    </script>";
    
   
        } else {
    echo "<script>sweetAlert('Message could not be sent...');</script>";
    //header("location:contact-us.php");
        }
      
      } 
}
?>
