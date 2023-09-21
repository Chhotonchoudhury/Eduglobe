<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from xatoadmin-demo1.web.app/ltr/auth_login_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Sep 2022 05:05:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ $cp->name }}| Student Registraion</title>
    <link rel="icon" type="image/x-icon" href="{{ (!empty($cp->logo)) ? asset('uploads/'.$cp->logo):asset('assets/assets/img/favicon.ico')}}"/>
    <!-- Common Styles Starts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/assets/css/structure.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/highlight/styles/monokai-sublime.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/select2/select2.min.css')  }}">

    <!-- <link href="{{ asset('assets/plugins/phone-number-validation-master/build/css/demo.css') }}" rel="stylesheet" type="text/css" /> -->
    <link href="{{ asset('assets/plugins/phone-number-validation-master/build/css/intlTelInput.css') }}" rel="stylesheet" type="text/css" />
    <!-- Common Styles Ends -->
    <!-- Common Icon Starts -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/line-awesome.min.css') }}">
    <!-- Common Icon Ends -->
    <!-- Page Level Plugin/Style Starts -->
    <link href="{{ asset('assets/assets/css/authentication/auth_2_student_reg.css') }}" rel="stylesheet" type="text/css">
    <!-- Page Level Plugin/Style Ends -->
    <script src="{{ asset('assets/plugins/nanobar-master/nanobar.min.js') }}"></script>
    <style>
    .my-class .bar {
    background:	#6495ed;
    }



    

Here is a 5 mins quick solution for you, feel free to enhance ;)

.form-group {
  border: 1px solid #ced4da;
  padding: 5px;
  border-radius: 6px;
  width: auto;
}
.form-group:focus {
  color: #212529;
    background-color: #fff;
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
}
.form-group input {
  display: inline-block;
  width: auto;
  border: none;
}
.form-group input:focus {
  box-shadow: none;
}
    </style>
</head>

<body class="login-two">
    <!-- Loader Starts -->
    <div class="nanobar my-class" id="my-id" style="position: fixed;">
    <div class="bar"></div>
    </div>
    <!--  Loader Ends -->
    <!-- Main Body Starts -->
    <div class="container-fluid login-two-container">
        <div class="row main-login-two">
            <div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block p-0">
                <div class="login-bg">
                    <div class="left-content-area">
                        <!--<img src="{{ asset('assets/assets/img/logo_white_transparent.png') }}" class="logo"/>-->
                         <div>
                            <h2>A few clicks away from to create account</h2>
                            <p>Start your journey in minutes. Save your time and money.</p>
                            <a class="btn mt-4 btn-dark" href="javascript:void(0)" type="button">Learn More</a>
                        </div>
                        <!--<div class="d-flex align-items-center mt-4">-->
                        <!--    <a class="font-13 text-white mr-3">Find us: </a>-->
                        <!--    <a class="font-13 text-white mr-3" href="javascript:void(0)">Facebook</a>-->
                        <!--    <a class="font-13 text-white mr-3" href="javascript:void(0)">Twitter</a>-->
                        <!--    <a class="font-13 text-white mr-3" href="javascript:void(0)">Linked In</a>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                <div class="login-two-start">
                <h6 class="right-bar-heading px-3 mt-2 text-dark text-center font-30 text-uppercase">Sign Up</h6>
                    <p class="text-center text-muted mt-1 mb-3 font-14">Fill up and create an account</p>
                    <form class="form-horizontal mt-3" method="POST" action="{{ route('student_registration') }}">
                    @csrf

                    <div class="login-two-inputs mt-5">
                        <input type="text" name="name" placeholder="User Name" value="{{ old('name') }}" required="" />
                        <i class="las la-user-alt"></i> 
                    </div>
                    @error('name')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror

                    <div class="login-two-inputs mt-4">
                        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" required="" />
                        <i class="las la-envelope"></i> 
                    </div>
                    @error('email')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                    
                    
                    <div class="login-two-inputs mt-4">
                            <select type="text" name="country"  id="country" class="form-control  basic" >
                                   <option  value="">Select Country</option>
                                    <option data-countryCode="213" value="Algeria">Algeria (+213)</option>
                                    <option data-countryCode="376" value="Andorra">Andorra (+376)</option>
                                    <option data-countryCode="244" value="Angola">Angola (+244)</option>
                                    <option data-countryCode="1264" value="Anguilla">Anguilla (+1264)</option>
                                    <option data-countryCode="1268" value="Antigua &amp; Barbuda">Antigua &amp; Barbuda (+1268)</option>
                                    <option data-countryCode="54" value="Argentina">Argentina (+54)</option>
                                    <option data-countryCode="374" value="Armenia">Armenia (+374)</option>
                                    <option data-countryCode="297" value="Aruba">Aruba (+297)</option>
                                    <option data-countryCode="61" value="Australia">Australia (+61)</option>
                                    <option data-countryCode="43" value="Austria">Austria (+43)</option>
                                    <option data-countryCode="994" value="Azerbaijan">Azerbaijan (+994)</option>
                                    <option data-countryCode="1242" value="Bahamas">Bahamas (+1242)</option>
                                    <option data-countryCode="973" value="Bahrain">Bahrain (+973)</option>
                                    <option data-countryCode="880" value="Bangladesh">Bangladesh (+880)</option>
                                    <option data-countryCode="1246" value="Barbados">Barbados (+1246)</option>
                                    <option data-countryCode="375" value="Belarus">Belarus (+375)</option>
                                    <option data-countryCode="32" value="Belgium">Belgium (+32)</option>
                                    <option data-countryCode="501" value="Belize">Belize (+501)</option>
                                    <option data-countryCode="229" value="Benin">Benin (+229)</option>
                                    <option data-countryCode="1441" value="Bermuda">Bermuda (+1441)</option>
                                    <option data-countryCode="975" value="Bhutan">Bhutan (+975)</option>
                                    <option data-countryCode="591" value="Bolivia">Bolivia (+591)</option>
                                    <option data-countryCode="387" value="Bosnia Herzegovina">Bosnia Herzegovina (+387)</option>
                                    <option data-countryCode="267" value="Botswana">Botswana (+267)</option>
                                    <option data-countryCode="55" value="Brazil">Brazil (+55)</option>
                                    <option data-countryCode="673" value="Brunei">Brunei (+673)</option>
                                    <option data-countryCode="359" value="Bulgaria">Bulgaria (+359)</option>
                                    <option data-countryCode="226" value="Bulgaria">Bulgaria (+226)</option>
                                    <option data-countryCode="257" value="Burundi">Burundi (+257)</option>
                                    <option data-countryCode="855" value="Cambodia">Cambodia (+855)</option>
                                    <option data-countryCode="237" value="Cameroon">Cameroon (+237)</option>
                                    <option data-countryCode="1" value="Canada">Canada (+1)</option>
                                    <option data-countryCode="238" value="Cape Verde Islands">Cape Verde Islands (+238)</option>
                                    <option data-countryCode="1345" value="Cayman Islands">Cayman Islands (+1345)</option>
                                    <option data-countryCode="236" value="Central African Republic">Central African Republic (+236)</option>
                                    <option data-countryCode="56" value="Chile">Chile (+56)</option>
                                    <option data-countryCode="86" value="China">China (+86)</option>
                                    <option data-countryCode="57" value="Colombia">Colombia (+57)</option>
                                    <option data-countryCode="269" value="Comoros">Comoros (+269)</option>
                                    <option data-countryCode="242" value="Congo">Congo (+242)</option>
                                    <option data-countryCode="682" value="Cook Islands">Cook Islands (+682)</option>
                                    <option data-countryCode="506" value="Costa Rica">Costa Rica (+506)</option>
                                    <option data-countryCode="385" value="Croatia">Croatia (+385)</option>
                                    <option data-countryCode="53" value="Cuba">Cuba (+53)</option>
                                    <option data-countryCode="90392" value="Cyprus North">Cyprus North (+90392)</option>
                                    <option data-countryCode="357" value="Cyprus South">Cyprus South (+357)</option>
                                    <option data-countryCode="42" value="Czech Republic">Czech Republic (+42)</option>
                                    <option data-countryCode="45" value="Denmark">Denmark (+45)</option>
                                    <option data-countryCode="253" value="Djibouti">Djibouti (+253)</option>
                                    <option data-countryCode="1809" value="Dominica">Dominica (+1809)</option>
                                    <option data-countryCode="1809" value="Dominican Republic">Dominican Republic (+1809)</option>
                                    <option data-countryCode="593" value="Ecuador">Ecuador (+593)</option>
                                    <option data-countryCode="20" value="Egypt">Egypt (+20)</option>
                                    <option data-countryCode="503" value="El Salvador">El Salvador (+503)</option>
                                    <option data-countryCode="240" value="Equatorial Guinea">Equatorial Guinea (+240)</option>
                                    <option data-countryCode="291" value="Eritrea">Eritrea (+291)</option>
                                    <option data-countryCode="372" value="Estonia">Estonia (+372)</option>
                                    <option data-countryCode="251" value="Ethiopia">Ethiopia (+251)</option>
                                    <option data-countryCode="500" value="Falkland Islands">Falkland Islands (+500)</option>
                                    <option data-countryCode="298" value="Faroe Islands">Faroe Islands (+298)</option>
                                    <option data-countryCode="679" value="Fiji">Fiji (+679)</option>
                                    <option data-countryCode="358" value="Finland">Finland (+358)</option>
                                    <option data-countryCode="33" value="France">France (+33)</option>
                                    <option data-countryCode="594" value="French Guiana">French Guiana (+594)</option>
                                    <option data-countryCode="689" value="French Polynesia">French Polynesia (+689)</option>
                                    <option data-countryCode="241" value="Gabon">Gabon (+241)</option>
                                    <option data-countryCode="220" value="Gambia">Gambia (+220)</option>
                                    <option data-countryCode="7880" value="Georgia">Georgia (+7880)</option>
                                    <option data-countryCode="49" value="Germany">Germany (+49)</option>
                                    <option data-countryCode="233" value="Ghana">Ghana (+233)</option>
                                    <option data-countryCode="350" value="Gibraltar">Gibraltar (+350)</option>
                                    <option data-countryCode="30" value="Greece">Greece (+30)</option>
                                    <option data-countryCode="299" value="Greenland">Greenland (+299)</option>
                                    <option data-countryCode="1473" value="Grenada">Grenada (+1473)</option>
                                    <option data-countryCode="590" value="Guadeloupe">Guadeloupe (+590)</option>
                                    <option data-countryCode="671" value="Guam">Guam (+671)</option>
                                    <option data-countryCode="502" value="Guatemala">Guatemala (+502)</option>
                                    <option data-countryCode="224" value="Guinea">Guinea (+224)</option>
                                    <option data-countryCode="245" value="Guinea">Guinea - Bissau (+245)</option>
                                    <option data-countryCode="592" value="Guyana">Guyana (+592)</option>
                                    <option data-countryCode="509" value="Haiti">Haiti (+509)</option>
                                    <option data-countryCode="504" value="Honduras">Honduras (+504)</option>
                                    <option data-countryCode="852" value="Hong Kong">Hong Kong (+852)</option>
                                    <option data-countryCode="36" value="Hungary">Hungary (+36)</option>
                                    <option data-countryCode="354" value="Iceland">Iceland (+354)</option>
                                    <option data-countryCode="91" value="India">India (+91)</option>
                                    <option data-countryCode="62" value="Indonesia">Indonesia (+62)</option>
                                    <option data-countryCode="98" value="Iran">Iran (+98)</option>
                                    <option data-countryCode="964" value="Iraq">Iraq (+964)</option>
                                    <option data-countryCode="353" value="Ireland">Ireland (+353)</option>
                                    <option data-countryCode="972" value="Israel">Israel (+972)</option>
                                    <option data-countryCode="39" value="Italy">Italy (+39)</option>
                                    <option data-countryCode="1876" value="Jamaica">Jamaica (+1876)</option>
                                    <option data-countryCode="81" value="Japan">Japan (+81)</option>
                                    <option data-countryCode="962" value="Jordan">Jordan (+962)</option>
                                    <option data-countryCode="7" value="Kazakhstan">Kazakhstan (+7)</option>
                                    <option data-countryCode="254" value="Kenya">Kenya (+254)</option>
                                    <option data-countryCode="686" value="Kiribati">Kiribati (+686)</option>
                                    <option data-countryCode="850" value="Korea North">Korea North (+850)</option>
                                    <option data-countryCode="82" value="Korea South">Korea South (+82)</option>
                                    <option data-countryCode="965" value="Kuwait">Kuwait (+965)</option>
                                    <option data-countryCode="996" value="Kyrgyzstan">Kyrgyzstan (+996)</option>
                                    <option data-countryCode="856" value="Laos">Laos (+856)</option>
                                    <option data-countryCode="371" value="Latvia">Latvia (+371)</option>
                                    <option data-countryCode="961" value="Lebanon">Lebanon (+961)</option>
                                    <option data-countryCode="266" value="Lesotho">Lesotho (+266)</option>
                                    <option data-countryCode="231" value="Liberia">Liberia (+231)</option>
                                    <option data-countryCode="218" value="Libya">Libya (+218)</option>
                                    <option data-countryCode="417" value="Liechtenstein">Liechtenstein (+417)</option>
                                    <option data-countryCode="370" value="Lithuania">Lithuania (+370)</option>
                                    <option data-countryCode="352" value="Luxembourg">Luxembourg (+352)</option>
                                    <option data-countryCode="853" value="Macao">Macao (+853)</option>
                                    <option data-countryCode="389" value="Macedonia">Macedonia (+389)</option>
                                    <option data-countryCode="261" value="Madagascar">Madagascar (+261)</option>
                                    <option data-countryCode="265" value="Malawi">Malawi (+265)</option>
                                    <option data-countryCode="60" value="Malaysia">Malaysia (+60)</option>
                                    <option data-countryCode="960" value="Maldives">Maldives (+960)</option>
                                    <option data-countryCode="223" value="Mali">Mali (+223)</option>
                                    <option data-countryCode="356" value="Malta">Malta (+356)</option>
                                    <option data-countryCode="692" value="Marshall Islands">Marshall Islands (+692)</option>
                                    <option data-countryCode="596" value="Martinique">Martinique (+596)</option>
                                    <option data-countryCode="222" value="Mauritania">Mauritania (+222)</option>
                                    <option data-countryCode="263" value="Mayotte">Mayotte (+269)</option>
                                    <option data-countryCode="52" value="Mexico">Mexico (+52)</option>
                                    <option data-countryCode="691" value="Micronesia">Micronesia (+691)</option>
                                    <option data-countryCode="373" value="Moldova">Moldova (+373)</option>
                                    <option data-countryCode="377" value="Monaco">Monaco (+377)</option>
                                    <option data-countryCode="976" value="Mongolia">Mongolia (+976)</option>
                                    <option data-countryCode="1664" value="Montserrat">Montserrat (+1664)</option>
                                    <option data-countryCode="212" value="Morocco">Morocco (+212)</option>
                                    <option data-countryCode="258" value="Mozambique">Mozambique (+258)</option>
                                    <option data-countryCode="95" value="Myanmar">Myanmar (+95)</option>
                                    <option data-countryCode="264" value="Namibia">Namibia (+264)</option>
                                    <option data-countryCode="674" value="Nauru">Nauru (+674)</option>
                                    <option data-countryCode="977" value="Nepal">Nepal (+977)</option>
                                    <option data-countryCode="31" value="Netherlands">Netherlands (+31)</option>
                                    <option data-countryCode="687" value="New Caledonia">New Caledonia (+687)</option>
                                    <option data-countryCode="64" value="New Zealand">New Zealand (+64)</option>
                                    <option data-countryCode="505" value="Nicaragua">Nicaragua (+505)</option>
                                    <option data-countryCode="227" value="Niger">Niger (+227)</option>
                                    <option data-countryCode="234" value="Nigeria">Nigeria (+234)</option>
                                    <option data-countryCode="683" value="Niue">Niue (+683)</option>
                                    <option data-countryCode="672" value="Norfolk Islands">Norfolk Islands (+672)</option>
                                    <option data-countryCode="670" value="Northern Marianas">Northern Marianas (+670)</option>
                                    <option data-countryCode="47" value="Norway">Norway (+47)</option>
                                    <option data-countryCode="968" value="Oman">Oman (+968)</option>
                                    <option data-countryCode="680" value="Palau">Palau (+680)</option>
                                    <option data-countryCode="507" value="Panama">Panama (+507)</option>
                                    <option data-countryCode="675" value="Papua New Guinea">Papua New Guinea (+675)</option>
                                    <option data-countryCode="595" value="Paraguay">Paraguay (+595)</option>
                                    <option data-countryCode="51" value="Peru">Peru (+51)</option>
                                    <option data-countryCode="63" value="Philippines">Philippines (+63)</option>
                                    <option data-countryCode="48" value="Poland">Poland (+48)</option>
                                    <option data-countryCode="351" value="Portugal">Portugal (+351)</option>
                                    <option data-countryCode="1787" value="Puerto Rico">Puerto Rico (+1787)</option>
                                    <option data-countryCode="974" value="Qatar">Qatar (+974)</option>
                                    <option data-countryCode="262" value="Reunion">Reunion (+262)</option>
                                    <option data-countryCode="40" value="Romania">Romania (+40)</option>
                                    <option data-countryCode="7" value="Russia">Russia (+7)</option>
                                    <option data-countryCode="250" value="Rwanda">Rwanda (+250)</option>
                                    <option data-countryCode="378" value="San Marino">San Marino (+378)</option>
                                    <option data-countryCode="239" value="Sao Tome">Sao Tome &amp; Principe (+239)</option>
                                    <option data-countryCode="966" value="Saudi Arabia">Saudi Arabia (+966)</option>
                                    <option data-countryCode="221" value="Senegal">Senegal (+221)</option>
                                    <option data-countryCode="381" value="Serbia">Serbia (+381)</option>
                                    <option data-countryCode="248" value="Seychelles">Seychelles (+248)</option>
                                    <option data-countryCode="232" value="Sierra Leone">Sierra Leone (+232)</option>
                                    <option data-countryCode="65" value="Singapore">Singapore (+65)</option>
                                    <option data-countryCode="421" value="Slovak Republic">Slovak Republic (+421)</option>
                                    <option data-countryCode="386" value="Slovenia">Slovenia (+386)</option>
                                    <option data-countryCode="677" value="Solomon Islands">Solomon Islands (+677)</option>
                                    <option data-countryCode="252" value="Somalia">Somalia (+252)</option>
                                    <option data-countryCode="27" value="South Africa">South Africa (+27)</option>
                                    <option data-countryCode="34" value="Spain">Spain (+34)</option>
                                    <option data-countryCode="94" value="Sri Lanka">Sri Lanka (+94)</option>
                                    <option data-countryCode="290" value="St. Helena">St. Helena (+290)</option>
                                    <option data-countryCode="1869" value="St. Kitts">St. Kitts (+1869)</option>
                                    <option data-countryCode="1758" value="St. Lucia">St. Lucia (+1758)</option>
                                    <option data-countryCode="249" value="Sudan">Sudan (+249)</option>
                                    <option data-countryCode="597" value="Suriname">Suriname (+597)</option>
                                    <option data-countryCode="268" value="Swaziland">Swaziland (+268)</option>
                                    <option data-countryCode="46" value="Sweden">Sweden (+46)</option>
                                    <option data-countryCode="41" value="Switzerland">Switzerland (+41)</option>
                                    <option data-countryCode="963" value="Syria">Syria (+963)</option>
                                    <option data-countryCode="886" value="Taiwan">Taiwan (+886)</option>
                                    <option data-countryCode="7" value="Tajikstan">Tajikstan (+7)</option>
                                    <option data-countryCode="66" value="Thailand">Thailand (+66)</option>
                                    <option data-countryCode="228" value="Togo">Togo (+228)</option>
                                    <option data-countryCode="676" value="Tonga">Tonga (+676)</option>
                                    <option data-countryCode="1868" value="Trinidad &amp; Tobago">Trinidad &amp; Tobago (+1868)</option>
                                    <option data-countryCode="216" value="Tunisia">Tunisia (+216)</option>
                                    <option data-countryCode="90" value="Turkey">Turkey (+90)</option>
                                    <option data-countryCode="7" value="Turkmenistan">Turkmenistan (+7)</option>
                                    <option data-countryCode="993" value="Turkmenistan">Turkmenistan (+993)</option>
                                    <option data-countryCode="1649" value="Turks">Turks &amp; Caicos Islands (+1649)</option>
                                    <option data-countryCode="688" value="Tuvalu">Tuvalu (+688)</option>
                                    <option data-countryCode="256" value="Uganda ">Uganda (+256)</option>
                                    <option data-countryCode="44" value="UK">UK (+44)</option>
                                    <option data-countryCode="380" value="Ukraine">Ukraine (+380)</option>
                                    <option data-countryCode="971" value="United Arab Emirates">United Arab Emirates (+971)</option>
                                    <option data-countryCode="598" value="Uruguay">Uruguay (+598)</option>
                                    <option data-countryCode="1" value="USA">USA (+1)</option>
                                    <option data-countryCode="7" value="Uzbekistan">Uzbekistan (+7)</option>
                                    <option data-countryCode="678" value="Vanuatu">Vanuatu (+678)</option>
                                    <option data-countryCode="379" value="Vatican City">Vatican City (+379)</option>
                                    <option data-countryCode="58" value="Venezuela">Venezuela (+58)</option>
                                    <option data-countryCode="84" value="Vietnam">Vietnam (+84)</option>
                                    <option data-countryCode="1284" value="Virgin Islands">Virgin Islands - British (+1284)</option>
                                    <option data-countryCode="1340" value="Virgin Islands">Virgin Islands - US (+1340)</option>
                                    <option data-countryCode="681" value="Wallis &amp; Futuna">Wallis &amp; Futuna (+681)</option>
                                    <option data-countryCode="969" value="Yemen (North)">Yemen (North)(+969)</option>
                                    <option data-countryCode="967" value="Yemen (South)">Yemen (South)(+967)</option>
                                    <option data-countryCode="260" value="Zambia">Zambia (+260)</option>
                                    <option data-countryCode="263" value="Zimbabwe">Zimbabwe (+263)</option>
                            </select> 
                            <i class="las la-globe"></i>
                    </div>
                    @error('country')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror

                    
                    <div class="login-two-inputs mt-4">
                        
                      <div class="row">
                            <div class="col-3">
                            <input type="text" id="code" name="pre" readonly style="color:black"  /> 
                            </div>
                            <div class="col-9">
                            <input type="number" placeholder="Phone number" name="phone" required="" /> 
                            </div>
                      </div>
                        <i class="las la-phone"></i>  
                    </div>
                    @error('phone')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror

                    <div class="login-two-inputs mt-4">
                        <input type="password" name="password" placeholder="Password" required="" /> 
                        <i class="las la-lock"></i>
                    </div>
                    @error('password')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror

                    <div class="login-two-inputs mt-4">
                        <input type="password" name="confirm_password" placeholder="Confirm Password" required="" /> 
                        <i class="las la-lock"></i>
                    </div>
                    @error('confirm_password')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror

                    <!-- <div class="login-two-inputs  mt-4 check">
                        <div class="box">
                            <input id="one" type="checkbox">
                            <span class="check"></span>
                            <label for="one">I agree to the terms and policies</label>
                          </div>
                    </div> -->
                    <div class="login-two-inputs mt-5 text-center d-flex">
                        <button class="ripple-button ripple-button-primary w-100 btn-login ml-3 mr-3" type="submit">
                            <div class="ripple-ripple js-ripple">
                            <span class="ripple-ripple__circle"></span>
                            </div>
                            Signup
                        </button>
                        <a class="btn btn-sm btn-outline-primary btn-login w-100 ml-3 mr-3" href="{{ route('student_login_form') }}" type="button">
                            Login
                        </a>
                    </div>
                 </form>

                    <div class="login-two-inputs mt-4">
                        <div class="find-us-container">
                            <p class="find-us text-center">Continue With</p>
                        </div>
                    </div>
                    <!-- <div class="login-two-inputs social-logins mt-4">
                        <div class="social-btn"><a href="javascript:void(0)" class="fb-btn"><i class="lab la-facebook-f"></i></a></div>
                        <div class="social-btn"><a href="javascript:void(0)" class="twitter-btn"><i class="lab la-twitter"></i>
                        </a></div>
                        <div class="social-btn"><a href="javascript:void(0)" class="google-btn"><i class="lab la-google-plus"></i>
                        </a></div>
                    </div> -->
            </div>
            </div>
        </div>  
    </div>
    <!-- Main Body Ends -->
    <!-- Page Level Plugin/Script Starts -->
    <script src="{{ asset('assets/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/authentication/auth_2.js') }}"></script>
    
    <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/forms/custom-select2.js') }}"></script>

    <script src="{{ asset('assets/plugins/phone-number-validation-master/build/js/intlTelInput.js') }}"></script>
   
    <script>

            // $("#country").on("change", function() {
            //     alert("something happends");
            //     let aa = $('option:selected', this).data('data-countryCode');
            //     alert(aa);
            // $('#code').val($('option:selected', this).data('countryCode'));
            // });

            $("select[name=country]" ).change(function() {
               $('input#code').val('+'+$(this).find(':selected').attr('data-countryCode'));
            });

        var input = document.querySelector("#tel");
        window.intlTelInput(input,{});


        var options = {
            classname: 'my-class',
            id: 'my-id'
        };
        var nanobar = new Nanobar( options );
        nanobar.go( 30 );
        nanobar.go( 76 );
        nanobar.go(100);
    </script>
    <script>
    <!-- Page Level Plugin/Script Ends -->
</body>
</html>
