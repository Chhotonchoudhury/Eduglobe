<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

    <head>
    <!--title-->
    <title>Edudeve - Student Admission simplify Software , App & Website</title>
    
    <!--meta-->
    <meta name="description" content="Online Course Admission Website ,University Admission software ,Educational Softwares , Student admission processing software, software technology, University & Student bridge Apps,Websites . It is best and famous software company who build Education software, custome education based software design.">
    @include('app_website.layouts.header')
    </head>

<body>

   <!--preloader start-->
   <div id="preloader" class="bg-light-subtle">
    <div class="preloader-wrap">
        <img src="{{ asset('app_assets/img/logo2.png') }}" alt="logo" class="img-fluid preloader-icon">
        <div class="loading-bar"></div>
    </div>
</div>
<!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

    

        @include('app_website.layouts.navbar')

        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('assets/img/page-header-bg.svg')no-repeat bottom left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h1 class="display-5 fw-bold">About us</h1>
                        <p class="lead">Discover EduDeve: Learn more about our company's mission, values, and services!.</p>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
        <!--page header section end-->
        
        <!--feature tab section start-->
        <section class="why-choose-us pt-60 pb-120">
            <div class="container">
                <div class="row justify-content-lg-between justify-content-center align-items-center">
                    <div class="col-lg-5 col-md-7 order-1 order-lg-0">
                        <div class="why-choose-img position-relative">
                            <img src="{{ asset('app_assets/img/feature-hero-img-2.svg')}}" class="img-fluid" alt="duel-phone">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                        <div class="why-choose-content">
                            <div class="mb-32">
                                <h2>Streamline Your University Admissions Process with Our Education System</h2>
                                <p>Our education system simplifies the university admissions process by providing a user-friendly platform that allows students to easily register and enroll in courses across a variety of universities. </p>
                            </div>
                            <ul class="list-unstyled d-flex flex-wrap list-two-col">
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Increase enrollment</li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Simplify administration</li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Enhance student experience</li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Reduce costs</li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Expand university reach</li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Ensure compliance</li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Manage smartly</li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Communicate fast</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!--feature tab section end-->
        
        <!--our work process start-->
        <section class="work-process ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center">
                            <h4 class="h5 text-primary">Process</h4>
                            <h2>We Follow Our Work Process</h2>
                            <p>Conveniently mesh cooperative services via magnetic outsourcing. Dynamically grow functionalized value whereas accurate e-commerce. </p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0">
                            <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                                <span class="h2 mb-0 text-primary fw-bold">1</span>
                            </div>
                            <h3 class="h5">Research</h3>
                            <p class="mb-0">Uniquely pursue restore efficient for initiatives expanded.</p>
                        </div>
                    </div>
                    <div class="dots-line first"></div>
                    <div class="col-md-6 col-lg-3">
                        <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0">
                            <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                                <span class="h2 mb-0 text-primary fw-bold">2</span>
                            </div>
                            <h3 class="h5">Designing</h3>
                            <p class="mb-0">Restore efficient human pursue for compelling initiatives.</p>
                        </div>
                    </div>
                    <div class="dots-line first"></div>
                    <div class="col-md-6 col-lg-3">
                        <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0 mb-md-0">
                            <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                                <span class="h2 mb-0 text-primary fw-bold">3</span>
                            </div>
                            <h3 class="h5">Building</h3>
                            <p class="mb-0">Continually enhance pursue compelling initiatives enhance.</p>
                        </div>
                    </div>
                    <div class="dots-line first"></div>
                    <div class="col-md-6 col-lg-3">
                        <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-0">
                            <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                                <span class="h2 mb-0 text-primary fw-bold">4</span>
                            </div>
                            <h3 class="h5">Deliver</h3>
                            <p class="mb-0">Uniquely for compelling initiatives expanded interactive.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!--our work process end-->
        
         <!--register section start-->
        <section class="sign-up-in-section bg-dark ptb-120" style="background: url('app_assets/img/page-header-bg.svg')no-repeat bottom right">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-12 order-1 order-lg-0">
                        <div class="testimonial-tab-slider-wrap mt-5">
                            <h1 class="fw-bold text-white display-5">Start Your Project with Us</h1>
                            <p>Whatever your goal or project size we will handel it utilize standards compliant. We hope you
                                will be 100% satisfied.</p>
                            <hr>
                            <p>1. First, businesses can choose to purchase our current education system as is.</p><hr>
                            <p>2. Second, businesses can choose to customize our education system to meet their specific needs.</p><hr>
                            <p>3. Finally, businesses can choose to build a completely new app from scratch. Our team of developers has extensive experience building custom education systems tailored to the unique needs of our clients.</p><hr>
                            <p>4. Regardless of which option businesses choose, our team is committed to providing excellent customer service and support throughout the process.</p><hr>
                            <!--<div class="tab-content testimonial-tab-content text-white-80" id="pills-tabContent">-->
                            <!--    <div class="tab-pane fade show active" id="testimonial-tab-1" role="tabpanel">-->
                            <!--        <blockquote class="blockquote">-->
                            <!--            <em>"Globally actualize economically sound alignments before tactical systems.-->
                            <!--                Rapidiously actualize processes technically sound infomediaries. Holisticly-->
                            <!--                pursue team building catalysts for change before team driven products. "</em>-->
                            <!--        </blockquote>-->
                            <!--        <div class="author-info mt-3">-->
                            <!--            <span class="h6">Veronica P. Byrd</span>-->
                            <!--            <span class="d-block small">Veterinary technician</span>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="tab-pane fade" id="testimonial-tab-2" role="tabpanel">-->
                            <!--        <blockquote class="blockquote">-->
                            <!--            <em>"Synergistically evisculate market positioning technology vis-a-vis team driven-->
                            <!--                innovation. Phosfluorescently morph tactical communities for superior-->
                            <!--                applications. Distinctively pontificate resource-leveling infomediaries and-->
                            <!--                parallel models. "</em>-->
                            <!--        </blockquote>-->
                            <!--        <div class="author-info mt-3">-->
                            <!--            <span class="h6">Raymond H. Gilbert</span>-->
                            <!--            <span class="d-block small">Forest fire inspector</span>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="tab-pane fade" id="testimonial-tab-3" role="tabpanel">-->
                            <!--        <blockquote class="blockquote">-->
                            <!--            <em>"Professionally myocardinate corporate e-commerce through alternative-->
                            <!--                functionalities. Compellingly matrix distributed convergence with goal-oriented-->
                            <!--                synergy. Professionally embrace interactive opportunities through parallel-->
                            <!--                innovation. "</em>-->
                            <!--        </blockquote>-->
                            <!--        <div class="author-info mt-3">-->
                            <!--            <span class="h6">Donna R. Book</span>-->
                            <!--            <span class="d-block small">Extractive engineer</span>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<ul class="nav nav-pills mb-0 testimonial-tab-indicator mt-5" id="pills-tab" role="tablist">-->
                            <!--    <li class="nav-item" role="presentation">-->
                            <!--        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#testimonial-tab-1" type="button" role="tab" aria-selected="true">-->
                            <!--            <img src="assets/img/testimonial/1.jpg" alt="testimonial" width="55" class="img-fluid rounded-circle">-->
                            <!--        </button>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item" role="presentation">-->
                            <!--        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#testimonial-tab-2" type="button" role="tab" aria-selected="false">-->
                            <!--            <img src="assets/img/testimonial/4.jpg" alt="testimonial" width="55" class="img-fluid rounded-circle">-->
                            <!--        </button>-->
                            <!--    </li>-->
                            <!--    <li class="nav-item" role="presentation">-->
                            <!--        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#testimonial-tab-3" type="button" role="tab" aria-selected="false">-->
                            <!--            <img src="assets/img/testimonial/6.jpg" alt="testimonial" width="55" class="img-fluid rounded-circle">-->
                            <!--        </button>-->
                            <!--    </li>-->
                            <!--</ul>-->
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-7 col-md-12 order-0 order-lg-1">
                        <div class="register-wrap p-5 bg-white shadow rounded-custom mt-5 mt-lg-0 mt-xl-0">
                            <h3 class="fw-medium h4">Fill out the form and we'll be in touch as soon as possible.</h3>

                            <form method="POST" action="{{ route('Newapp.request') }}" class="mt-4 register-form">
                             @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="Name" required placeholder="Name" aria-label="name">
                                        </div>
                                        @error('Name')<p class="text-danger">{{ $message }}</p>@enderror
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" name="Email" required placeholder="Email" aria-label="email">
                                        </div>
                                        @error('Email')<p class="text-danger">{{ $message }}</p>@enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="Website" placeholder="Company website" aria-label="company-website">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                           <input type="email" class="form-control" name="WorkEmail" required  placeholder="Work email" aria-label="work-Email">
                                        </div>
                                          @error('WorkEmail')<p class="text-danger">{{ $message }}</p>@enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <select class="form-control form-select" name="Budget" id="budget" required  data-msg="Please select your budget.">
                                                <option value="" selected="" disabled="">Budget</option>
                                                <option value="Just Start">None, just getting started</option>
                                                <option value="$2000">Less than $2,000</option>
                                                <option value="$2000-$5000">$2,000 to $5,000</option>
                                                <option value="$5000-$10000">$5,000 to $10,000</option>
                                                <option value="$10000-$50000">$10,000 to $50,000</option>
                                                <option value="$50000+">More than $50,000</option>
                                            </select>
                                        </div>
                                        @error('Budget')<p class="text-danger">{{ $message }}</p>@enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <select class="form-control form-select" name="Country" required id="country"  data-msg="Please select your country.">
                                                <option value="" selected="" disabled="">Country</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                        @error('Country')<p class="text-danger">{{ $message }}</p>@enderror                                        
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <textarea class="form-control" name="Description" required placeholder="Tell us more about your project, needs and budget" style="height: 120px"></textarea>
                                        </div>
                                       @error('Description')<p class="text-danger">{{ $message }}</p>@enderror                                        
                                    </div>
                                    <!--<div class="col-12">-->
                                    <!--    <div class="form-check">-->
                                    <!--        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">-->
                                    <!--        <label class="form-check-label small" for="flexCheckChecked">-->
                                    <!--            Yes, I'd like to receive occasional marketing emails from us. I have the-->
                                    <!--            right to opt out at any time.-->
                                    <!--            <a href="#"> View privacy policy</a>.-->
                                    <!--        </label>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-4 d-block w-100">Get Started
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--register section end-->


        <!--footer section start-->
        <!--footer section start-->
        @include('app_website.layouts.footer')
        <!--footer section end--> <!--footer section end-->

    </div>
   
     <!--build:js-->
    <script src="{{ asset('app_assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('app_assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('app_assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('app_assets/js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('app_assets/js/vendors/parallax.min.js') }}"></script>
    <script src="{{ asset('app_assets/js/vendors/aos.js') }}"></script>
    <script src="{{ asset('app_assets/js/vendors/massonry.min.js') }}"></script>
    <script src="{{ asset('app_assets/js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!--endbuild-->
      <script>
        // this is the toaster notification
        toastr.options = {
          "closeButton": true,
           //"positionClass": "toast-bottom-left",
           }
        @if(session('success'))
        toastr["success"]("{{ session('success') }}");
        @elseif(session('info'))
        toastr["info"]("{{ session('info') }}");
        @elseif (session('warning'))
        toastr["error"]("{{ session('warning') }}");
        @endif
        //end of the tostar Notification
    </script>
</body>


<!-- Mirrored from quiety.themetags.com/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 15:54:00 GMT -->
</html>