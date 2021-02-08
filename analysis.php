<!doctype html>
<html>



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head><link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,900&display=swap" rel="stylesheet">
  <meta http-equiv="content-language" content="en-us" />
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title> </title>


<style>
    @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,700");

/* RESET RULES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
:root {
  --white: #afafaf;
  --red: #e31b23;
  --bodyColor: #292a2b;
  --borderFormEls: hsl(0, 0%, 10%);
  --bgFormEls: hsl(0, 0%, 14%);
  --bgFormElsFocus: hsl(0, 7%, 20%);
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  outline: none;
}

a {
  color: inherit;
}

input,
select,
textarea,
button {
  font-family: inherit;
  font-size: 100%;
}

button,
label {
  cursor: pointer;
}

select {
  appearance: none;
}

/* Remove native arrow on IE */
select::-ms-expand {
  display: none;
}

/*Remove dotted outline from selected option on Firefox*/
/*https://stackoverflow.com/questions/3773430/remove-outline-from-select-box-in-ff/18853002#18853002*/
/*We use !important to override the color set for the select on line 99*/
select:-moz-focusring {
  color: transparent !important;
  text-shadow: 0 0 0 var(--white);
}

textarea {
  resize: none;
}

ul {
  list-style: none;
}

body {
  font: 18px/1.5 "Open Sans", sans-serif;
  background: var(--bodyColor);
  color: var(--white);
  margin: 1.5rem 0;
}

/* .container {
  max-width: 800px;
  margin: 0 auto;
  padding: 0 1.5rem;
} */


/* FORM ELEMENTS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.my-form h1 {
  margin-bottom: 1.5rem;
}

.my-form li,
.my-form .grid > *:not(:last-child) {
  margin-bottom: 1.5rem;
}

.my-form select,
.my-form input,
.my-form textarea,
.my-form button {
  width: 100%;
  line-height: 1.5;
  padding: 15px 10px;
  border: 1px solid var(--borderFormEls);
  color: var(--white);
  background: var(--bgFormEls);
  transition: background-color 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25),
    transform 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
}

.my-form textarea {
  height: 170px;
  width: 93%;
}

.my-form ::placeholder {
  color: inherit;
  /*Fix opacity issue on Firefox*/
  opacity: 1;
}

.my-form select:focus,
.my-form input:focus,
.my-form textarea:focus,
.my-form button:enabled:hover,
.my-form button:focus,
.my-form input[type="checkbox"]:focus + label {
  background: var(--bgFormElsFocus);
}

.my-form select:focus,
.my-form input:focus,
.my-form textarea:focus {
  transform: scale(1.02);
}

.my-form *:required,
.my-form select {
  background-repeat: no-repeat;
  background-position: center right 12px;
  background-size: 15px 15px;
}

.my-form *:required {
  background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg);  
}

.my-form select {
  background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/down.svg);
}

.my-form *:disabled {
  cursor: default;
  filter: blur(2px);
}


/* FORM BTNS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.my-form .required-msg {
  display: none;
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg)
    no-repeat center left / 15px 15px;
  padding-left: 20px;
}

.my-form .btn-grid {
  position: relative;
  overflow: hidden;
  transition: filter 0.2s;
}

.my-form button {
  font-weight: bold;
}

.my-form button > * {
  display: inline-block;
  width: 100%;
  transition: transform 0.4s ease-in-out;
}

.my-form button .back {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-110%, -50%);
}

.my-form button:enabled:hover .back,
.my-form button:focus .back {
  transform: translate(-50%, -50%);
}

.my-form button:enabled:hover .front,
.my-form button:focus .front {
  transform: translateX(110%);
}


/* CUSTOM CHECKBOX
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.my-form input[type="checkbox"] {
  position: absolute;
  left: -9999px;
}

.my-form input[type="checkbox"] + label {
  position: relative;
  display: inline-block;
  padding-left: 2rem;
  transition: background 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
}

.my-form input[type="checkbox"] + label::before,
.my-form input[type="checkbox"] + label::after {
  content: '';
  position: absolute;
}

.my-form input[type="checkbox"] + label::before {
  left: 0;
  top: 6px;
  width: 18px;
  height: 18px;
  border: 2px solid var(--white);
}

.my-form input[type="checkbox"]:checked + label::before {
  background: var(--red);
}

.my-form input[type="checkbox"]:checked + label::after {
  left: 7px;
  top: 7px;
  width: 6px;
  height: 14px;
  border-bottom: 2px solid var(--white);
  border-right: 2px solid var(--white);
  transform: rotate(45deg);
}


/* FOOTER
–––––––––––––––––––––––––––––––––––––––––––––––––– */
footer {
  font-size: 1rem;
  text-align: right;
  backface-visibility: hidden;
}

footer a {
  text-decoration: none;
}

footer span {
  color: var(--red);
}


/* MQ
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@media screen and (min-width: 600px) {
  .my-form .grid {
    display: grid;
    grid-gap: 1.5rem;
  }

  .my-form .grid-2 {
    grid-template-columns: 1fr 1fr;
  }

  .my-form .grid-3 {
    grid-template-columns: auto auto auto;
    align-items: center;
  }

  .my-form .grid > *:not(:last-child) {
    margin-bottom: 0;
  }

  .my-form .required-msg {
    display: block;
  }
}

@media screen and (min-width: 541px) {
  .my-form input[type="checkbox"] + label::before {
    top: 50%;
    transform: translateY(-50%);
  }

  .my-form input[type="checkbox"]:checked + label::after {
    top: 3px;
  }
}
</style>
  <link rel="stylesheet" href="/pcl-site/assets/fontawesome/4.6.3/font-awesome.min.css">

  <link href="/pcl-site/assets/css/global2.css" rel="stylesheet" type="text/css">
  <link href="/pcl-site/assets/css/inner-css.css" rel="stylesheet" type="text/css">
  <link href="/pcl-site/assets/css/animate.css" rel="stylesheet" type="text/css">
  <link href="/pcl-site/assets/css/responsive.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="/pcl-site/assets/js/js/jquery.js"></script>
  <script src="/pcl-site/assets/js/js/jquery.hashchange.min.js" type="text/javascript"></script>
  <script src="/pcl-site/assets/js/js/jquery.easytabs.min.js" type="text/javascript"></script>
  <script type="text/javascript"> $(document).ready(function () { $(".tab-container").easytabs(); }); </script>
  <script type="text/javascript" src="/pcl-site/assets/js/js/global.js"></script>
  <script type="text/javascript" src="/pcl-site/assets/js/js/slider.js"></script>
  <script type="text/javascript" src="/pcl-site/assets/js/js/wow.min.js"></script>
  <script>new WOW().init();</script>
  
  <script src="/pcl-site/assets/js/owl.carousel.js"></script>


  
  <script src="/pcl-site/assets/js/js/embed/continually-embed.latest.min.js"></script>


  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>

</head>

<body>

 
   <div class="header">

        <div class="blueback" id="blueback" style="display: none;">&nbsp;</div>

        <div class="fixed">

            <div class="headerinner">

                <div class="topbar">

                  

                </div>

                <div class="logo">

                    <div itemtype="http://schema.org/Organization" itemscope=""> <a href="#"> </a> </div>

              

                </div>



                <div class="menu" name="menu">


                    <div class="nav" id="mobile-menu">

                        <ul>

                            <li class="animate1 mobilehide"><a href="index.html">Home </a></li>

                            <li class="animate1"><a class="droplink" href="">Services <span
                                        class="icon"></span></a><span id="dropmenu2">+</span>



                                <ol>

                                    <ul>

                                        <li><a href="seo-services.html">SEO Services</a> </li>

                                        <li><a href="social-media-optimization.html">SOCIAL MEDIA OPTIMIZATION</a></li>

                                    </ul>

                                    <ul>

                                        <li><a href="seo-video-marketing.html">Seo Video Marketing</a></li>
                                      
                                        <li><a href="  local-listing.html">  Local Listing.html</a></li>
                                        

                                    </ul>

                                    <ul>

                                        <li><a href="ppc-services.html">Pay Per Click</a></li>
                                        <li><a href="reputation-management.html">Reputation Management</a></li>

                                       

                                    </ul>

                                    <ul>
                                       <li><a href="web-design.html">Website Design</a></li>
                                        <li><a href="web-development.html">Web Development</a></li>
                                        <li><a href="web-maintainance.html">Web Maintainance</a></li>
                                        <li><a href="web-hosting.html">Web Hosting</a></li>

                                        
                                

                                    </ul>

                                </ol>



                            </li>




                            <li class="animate1"><a class="droplink" href="about-us.html">Packages <span
                                        class="icon"></span></a><span id="dropmenu3">+</span>



                                <ol class="submenu about bold">


                                    <ul class="packeg_mar">

                                        <li><a href="enterprise-packages.html">Enterprise Packages</a></li>

                                        <li><a href="corporate-packages.html">Corporate Packages</a></li>

                                    </ul>




                                </ol>



                            </li>













                            <li class="animate1 mobilehide"><a href="about-us.html">About Us </a></li>


                            <li class="animate1 mobilehide"><a href="contact.html">Contact Us </a></li>

                             <!-- <li class="hideblock"><a class="requestbt quote" href="analysis.php">Free Website

                                    Analysis</a>

                            </li> -->

                        </ul>

                    </div>

                </div>

                <div onClick="mobilelink('')" class="mobile-icon">

                    <ul>

                        <li></li>

                        <li></li>

                        <li></li>

                    </ul>

                </div>

            </div>

            <div class="award"> <strong>#1</strong><br />

                Award<br />

                Winning<br />

                Agency <br />

                2020</div>

        </div>

        <div class="clear"></div>

    </div>


</div> 
  <div class="contactus-bgn allbg">
    <div class="container banner-text">
      <h1> <span>Get a Free Analysis Report</span> </h1>
    
    </div>
  </div>
  <!--header close-->
  <div class="container">
    <div class="bread-crumb-new">
<!-- 
      <ul>
        <li><a href="index.html">Home</a></li>
        <li>Contact Us</li>
      </ul> -->
      <div class="clear"></div>
    </div>
  </div>





 
  <div class="container banner-text">
    <h1 style="    font-size: 4rem;
    padding: 2rem;
    color: #fff;">
    Get touch with us
   
     </h1>  
      <div class="row-contact">
        <form class="my-form" method="POST" action="data.php">
            <div class="container">
             
              <ul>
                <!-- <li>
                  <select>
                    <option selected disabled>Salutation</option>
                    <option>Mr.</option>
                    <option>Ms.</option>
                         
                  </select>
                </li> -->
                <li>
                  <div class="grid grid-2">
                    <input type="text" placeholder="First Name" name="first_name" required>  
                    <input type="text" placeholder="Last Name" name="last_name" required>
                  </div>
                </li>
                <li>
                  <div class="grid grid-2">
                    <input type="email" placeholder="Email Address"  name="email" required>  
                    <input type="tel" placeholder="Contact Number"  name="mobile" required>
                  </div>
                </li>    
                <li>
                    <div class="grid grid-1">
                      <input type="text" placeholder="Website" name="Website" required>  
                      <li>
                        <select id="country" name="Country" required >
                            <option selected disabled>Select Country</option>
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
                    </li>
                    
                    </div>
                  </li>
                <li>
                  <p style="margin-left: 2.5rem; color:#fff; margin-bottom:20px;">Please insert your enquiry or comment here</p>
                  <textarea placeholder="Message" name="message" required></textarea>
                </li>   
                <li>
                  <input type="checkbox" id="terms" required>
                  <label for="terms">I have read and agreed with <a href="">the terms and conditions.</a></label>
                </li>  
                
                    
                    
              
                  <div style="
    display: flex;
    justify-content: center;
    padding-bottom:20px;
">
                  <div class="g-recaptcha" data-sitekey="6Leh1kcaAAAAAHVnxw_YihDxef5g9OM-Px57OGue"></div>
                    <input class="submit-btn" type="submit" name="submit" style="
  padding: 5px;
  width: 32%;
  margin: 1%;
">
                  
                    
                  </div>
                 
              </ul>
            </div>
          </form>
      
    
  </div>
  </div>
  <div class="need-an-ans new-family-all white-bg">
    <div class="container-small">
      <div class="title">Need High-Quality Link Building or SEO Solutions?</div>
      <span class="get-in-touch">Get in touch to start faster and better</span>
      <div>
        <div class="need-three-boxes">
          <div class="need-box need-box-one"> <img alt="Call us" src="/pcl-site/assets/images/call-us.png" />
            <p class="need-top">Call us</p>
            <p class="need-bottom"><a href="tel:+65-3158 0551" class="change">+65-3158 0551</a></p>
          </div>
          <div class="need-box need-box-two"> <img alt="Mail us" src="/pcl-site/assets/images/email.png" />
            <p class="need-top">Mail us</p>
            <p class="need-bottom"><a href="mailto:info@pcltechnologies.com.sg">info@pcltechnologies.com.sg</a></p>
          </div>
          <div class="need-box need-box-three"> <img alt="Chat  with us" src="/pcl-site/assets/images/chat.png" />
            <p class="need-top"><a id="chat-with-us" href="javascript:void(0)" onClick="jivo_api.open();">Chat with
                us</a></p>
            <p class="need-bottom-two">Have a question for our staff? We’re
              here available to help via Live Chat</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="tools" style="background-color:#fff">
    <div class="fixed">
      <div class="title1 font30" >Our Work Featured On</div>
      <div class="titletext1">
        <ul class="middle">
                  

          <li><img src="/pcl-site/assets/images/site/clients/1.png" alt="Forbes Logo"></li>

              <li><img src="/pcl-site/assets/images/site/clients/2.png" alt="The Huffington Post"></li>

              <li><img src="/pcl-site/assets/images/site/clients/4.png" alt="Inc. Logo"></li>
              <li><img src="/pcl-site/assets/images/site/clients/7.png" alt="Raymond"> </li>

              <li><img src="/pcl-site/assets/images/site/clients/8.png" alt="HCL Logo"> </li>

              <li><img src="/pcl-site/assets/images/site/clients/9.png" alt="Holiday IQ"> </li>
      </ul>
      </div>
    </div>
    <!--slider2 close-->
  </div>

 
  <div class="footer">

    <div class="fixed">

        <div class="animatedParent">

            <div class="container animated fadeInUp">

                <div class="footert-top">

                    <div class="ftcolumn companylogo"><a href="#"><img src="/pcl-site/assets/images/site/logo_footer.png"

                                alt="Pagetraffic Logo" loading="lazy" class="lazyload" /></a></div>

                    <div class="ftcolumn socials-links">

                        <ul>

                   <li class="sl1"><a target="_blank" href="https://www.facebook.com/pcltechnologie/"></a></li>

                      <li class="sl3"><a target="_blank" href="https://twitter.com/PclTechnologie"></a></li>

                      <li class="sl4"><a target="_blank" href="https://www.linkedin.com/company/pcltechnologies/"></a>

                      </li>

                      <li class="sl5"><a target="_blank" href="https://in.pinterest.com/pcltechnologies/"></a></li>

                      <li class="sl6"><a target="_blank" href="https://www.youtube.com/channel/UChTV6nNCnBxtRElb762u2Hw?sub_confirmation=1"></a></li>

             

                        </ul>

                    </div>

                    <div class="ftcolumn business-rating"><a target="_blank" href="#"><img

                                src="/pcl-site/assets/images/business-rating.png" alt="Business Rating" loading="lazy"

                                class="lazyload" /></a></div>

                </div>

                <div class="footert-mid">

                    <div class="contactus">

                        <div class="toptitle">Contact</div>

                        <div class="col">

                            <div class="title">India Address :</div>

                            <div class="vcard"> <span class="fn" style="display:none">PCL Technologies </span>

                                <span class="adr"> <span class="street-address">Plot Number - 270, First Floor, </span><br />

                                    <span class="locality">Udyog Vihar II Rd, Sector 20,</span><br /><span

                                        class="region">Gurugram, Haryana </span> - <span class="postal-code"> 122016</span>

                                </span><br />

                                <span class="tel">Ph: +91 97110 70386</span><br />

                            </div>

                        </div>

                        <div class="col">

                            <div class="title">Singapore Address :</div>

                            <div class="vcard" id="hcard-PageTraffic-Web-Tech">

                                <div class="fn" style="display:none">PCL Technologies </div>

                                <div class="adr"> <span class="street-address"> 5 Toa Payoh </span> <span class="locality">Industrial Park</span><br/> <span

                                        class="region">01-1260, 319057</span> <span class="postal-code">Singapore</span>

                                </div>
                                <span class="tel">Ph: +65-31580551</span><br />
                                <span class="tel">Ph: +65-31581672</span><br />

                            </div>

                        </div>

                        <div class="col collast">

                            <div class="title">Australia Address : </div>

                            <div class="vcard">

                                <div class="fn" style="display:none">PCL Technologies </div>

                                <div class="adr">

                                    <div class="street-address">1024 N Western Ave <br />

                                        <span class="locality">Australia,</span> <span class="region">IL</span> <span

                                            class="postal-code">60622</span>

                                    </div>

                                </div>

                                <div class="tel">Ph: +61 291602217</div>

                                <!--<div class="tel">Outside US: 1-704-380-0113</div>-->

                                <!--<div class="fax">Fax: 413-382-5798</div>-->

                            </div>

                        </div>

                        <div class="col collast">

                            <div class="title">London Address : </div>

                            <div class="vcard">

                                <div class="fn" style="display:none">PCL Technologies </div>

                                <div class="adr">

                                    <div class="street-address">61 Wellfield Road Roath Cardiff CF24 3DG <br />

                                        <!-- <span class="locality">Australia,</span> <span class="region">IL</span> <span 

                                            class="postal-code">60622</span>-->

                                    </div>

                                </div>

                                <div class="tel">Ph:+44 2035146905</div>

                                <!--<div class="tel">Outside US: 1-704-380-0113</div>-->

                                <!--<div class="fax">Fax: 413-382-5798</div>-->

                            </div>

                        </div>

                    </div>

                    <div class="our-services our-services2">

                        <div class="toptitle">VERIFIED BY</div>

                        <ul>

                            <li><img src="/pcl-site/assets/images/business-rating.png" alt="Accredited Business"

                                    loading="lazy" class="lazyload" /></li>

                            <li  ><img src="/pcl-site/assets/images/google-partner.png" alt="Google Partner" /></li>


                            <li style="padding:3px 0px 0px 0px;"><img src="/pcl-site/assets/images/bing-ads.png" alt="Bing Ads" /></li>
                            <li style="padding:3px 0px 0px 0px;"><img src="/pcl-site/assets/images/site/Hubspot-partners.png"
                              alt="Bing Ads" /></li>

                        </ul>

                    </div>

                </div>

                <!--<div class="copyrights-links">-->

                <!--    <ul>-->

                <!--        <li><a href="#">SEO Services</a></li>-->

                <!--        <li><a href="#">Privacy Policy</a></li>-->

                <!--        <li><a href="#">Legal</a></li>-->

                <!--        <li><a href="#">Sitemap</a></li>-->

                <!--        <li><a href="#" target="_blank">PageTraffic Digital Buzz</a></li>-->

                <!--        <li><a href="#">Cancellation &amp; Refund Policy</a></li>-->

                <!--        <li><a href="#">PageTraffic Review</a></li>-->

                <!--        <li><a href="#">Free Website Analysis</a></li>-->

                <!--        <li class="last"> <img src="/pcl-site/assets/images/india-flag.png" alt="India" align="absmiddle" />-->

                <!--            <a href="#"><img src="/pcl-site/assets/images/usa-flag.png" alt="USA" align="absmiddle"></a>-->

                <!--        </li>-->

                <!--    </ul>-->

                <!--    <div class="copyrights">PageTraffic Web Tech Pvt. Ltd. &copy; Copyright 2002 - 2020. All rights-->

                <!--        reserved. <a href="#" class="text4" target="_blank"><img src="assets/images/img-feed.png"-->

                <!--                alt="feed" align="absmiddle">&nbsp;<span class="text4">RSS Feeds</span></a><br>-->

                <!--        <div xmlns:v="http://rdf.data-vocabulary.org/#" style="display:inline"> <span-->

                <!--                typeof="v:Breadcrumb"> <a href="#" property="v:title" rel="v:url">SEO Agency</a>-->

                <!--                &rsaquo; </span> <span typeof="v:Breadcrumb"> <a href="#" property="v:title"-->

                <!--                    rel="v:url">Free Report</a>-->

                <!--                &rsaquo; </span> <span typeof="v:Breadcrumb"> <a href="#" property="v:title"-->

                <!--                    rel="v:url">Social Media Packages</a> </span> </div>-->

                <!--        | <a href="#">SEO Company India</a> | <a href="#" target="_blank">Web-->

                <!--            Hosting in India</a> | <a href="#" target="_blank">BBB PageTraffic Review</a> | <a-->

                <!--            href="#" target="_blank">Ecommerce-->

                <!--            SEO</a> | <a href="#" target="_blank">Local SEO</a>-->

                <!--    </div>-->

                <!--    <div class="toptitle text-transformnone">Get New Customers Everyday!</div>-->

                <!--    <p>Page Traffic is a multi-talented SEO Agency with offices in New Delhi, Mumbai, Noida, Chicago-->

                <!--        and London.-->

                <!--        We have expertise in the field of search engine optimization, social media marketing, web-->

                <!--        designing, web-->

                <!--        development and Link Building.</p>-->

                <!--</div>-->

            </div>

        </div>

    </div>

</div> 
  <script type="text/javascript" src="/pcl-site/assets/js/front/front.js"></script>



  <script>
  const checkbox = document.querySelector('.my-form input[type="checkbox"]');
    const btns = document.querySelectorAll(".my-form button");
    
    checkbox.addEventListener("change", function() {
      const checked = this.checked;
      for (const btn of btns) {
        checked ? (btn.disabled = false) : (btn.disabled = true);
      }
    });</script>


</body>



</html>