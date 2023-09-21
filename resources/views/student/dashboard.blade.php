@extends('student.layouts.base')
@section('content') 

<style>
    .custom-file-upload {
  border: 1px solid #ccc;
  display: inline-block;
  padding: 6px 12px;
  cursor: pointer;
}
.modal-confirm {		
	color: #636363;
	width: 400px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
	text-align: center;
	font-size: 14px;
}
.modal-confirm .icon-box {
	width: 80px;
	height: 80px;
	margin: 0 auto;
	border-radius: 50%;
	z-index: 9;
	text-align: center;
	border: 3px solid #f15e5e;
}
.modal-confirm .icon-box i {
	color: #f15e5e;
	font-size: 46px;
	display: inline-block;
	margin-top: 13px;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -10px;
}

</style>

             <div class="row" >
                <div class="col-xl-6 col-lg-6 col-md-6 layout-spacing">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing" class="container ">
                            <div class="row d-flex justify-content-center align-items-center ">
                                <div class="col-xl-12 col-lg-12 col-md-12 col col-lg-12 mb-4 mb-lg-0">
                                    <div class="box   mb-3" style="border-radius: .5rem;">
                                    <div class="row g-0 ">
                                        <div class="widget col-md-12 gradient-custom text-center text-white"
                                        style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                        <img src="{{ (!empty(Auth::guard('student')->user()->photo)) ? asset('uploads/'.Auth::guard('student')->user()->photo): asset('assets/assets/img/NoProfile.png') }}"
                                            alt="Avatar" class="img-thumbnail rounded-circle mb-1" style="width: 120px;height:120px;" id="updatelogo" />
                                        <h5 style="color:white">{{ $student->name }}</h5>
                                        <p style="color:white">{{ $student->email }}</p>
                                        <i class="far fa-edit mb-5"></i>
                                        </div>
                                    
    

                                        <div class="card-body widget p-4">
                                          @if($student->age != '' && $student->passport_no != '' && $student->remarks != '' && $student->photo != '' )
                                          
                                            <h6>Personal Information</h6>
                                            <hr class="mt-0 mb-4">
                                            <div class="row pt-1">
                                            <div class="col-4 mb-3">
                                                <h6>Passport</h6>
                                                <p class="text-muted">{{ $student->passport_no }}</p>
                                            </div>
                                            <div class="col-4 mb-3">
                                                <h6>Phone</h6>
                                                <p class="text-muted">{{ $student->phone }}</p>
                                            </div>
                                            <div class="col-4 mb-3">
                                                <h6>Age</h6>
                                                <p class="text-muted">{{ $student->age }}</p>
                                            </div>
                                            </div><hr>
                                            @if($student->process_status == 1)
                                            <p class=" font-20 text-center"><i class="las la-award text-success font-35"></i>      Under Processing</p>
                                            @endif
                                        
                                            
                                            <!-- @if(!empty($require)) -->
                                            <!-- <form  method="POST" action="{{ route('doc.upload') }}" enctype="multipart/form-data">
                                            <div class="row pt-1">
                                            @if ($errors->any()) <div class="alert alert-danger"> <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li> @endforeach</ul></div>@endif
                                               <input type="hidden" name="id" value="{{ $student->id }}">
                                                    @csrf
                                                @if($student->doc == "") 
                                               @php $name = 1; @endphp
                                              @foreach($require as $rec)
                                                <div class="col-6 mb-3">
                                                    <lable>{{ $rec->input }}</lable>
                                                    <input type="file" name="document{{$name}}" class="form-control" required="">
                                                </div>
                                                @php $name++; @endphp
                                                    <!{{ $rec->requirment }} -->
                                              <!-- @endforeach
                                              <div class="col-6 mb-3">
                                                <br>
                                              <button class="btn btn-primary"><i class="las la-cloud-upload-alt font-20"></i>  Upload</button>
                                              </div>
                                                @endif
                              
                                            </div></form> --> 
                                            <!-- @endif -->
                                      

                                        

                                            <!-- <div class="d-flex justify-content-start">
                                            <a href="#!"><i class="las la-facebook-f la-lg me-3"></i></a>
                                            <a href="#!"><i class="las la-twitter la-lg me-3"></i></a>
                                            <a href="#!"><i class="las la-instagram la-lg"></i></a>
                                            </div> -->
                                          @else
                                            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="agent-req-form mt-2">
                                                            @csrf

                                                        <input type="hidden" name="id" value="{{ $student->id }}">
                                                            <h6>Personal Information</h6>
                                                                <hr class="mt-0 mb-4">
                                                                <div class="row pt-1">
                                                                
                                                            
                                                                <div class="col-6 mb-3">
                                                                    <input type="text" name="passport" Placeholder="Your passport No" class="form-control">
                                                                    @error('passport')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                                                </div>
                                                                <div class="col-6 mb-3">
                                                                    <input type="number" name="age" Placeholder="Your Age" class="form-control">
                                                                    @error('age')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                                                </div>

                                                              

                                                                <!-- <div class="col-6 mb-3">
                                                                <select class="form-control basic" name="country">
                                                                    <option value="">select country</option>
                                                                    <option value="Afghanistan">Afghanistan</option>
                                                                    <option value="Albania">Albania</option>
                                                                    <option value="Algeria">Algeria</option>
                                                                    <option value="American Samoa">American Samoa</option>
                                                                    <option value="Andorra">Andorra</option>
                                                                    <option value="Angola">Angola</option>
                                                                    <option value="Anguilla">Anguilla</option>
                                                                    <option value="Antartica">Antarctica</option>
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
                                                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
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
                                                                    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                                                    <option value="Colombia">Colombia</option>
                                                                    <option value="Comoros">Comoros</option>
                                                                    <option value="Congo">Congo</option>
                                                                    <option value="Congo">Congo, the Democratic Republic of the</option>
                                                                    <option value="Cook Islands">Cook Islands</option>
                                                                    <option value="Costa Rica">Costa Rica</option>
                                                                    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                                                    <option value="Croatia">Croatia (Hrvatska)</option>
                                                                    <option value="Cuba">Cuba</option>
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
                                                                    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                                    <option value="Fiji">Fiji</option>
                                                                    <option value="Finland">Finland</option>
                                                                    <option value="France">France</option>
                                                                    <option value="France Metropolitan">France, Metropolitan</option>
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
                                                                    <option value="Guinea">Guinea</option>
                                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                    <option value="Guyana">Guyana</option>
                                                                    <option value="Haiti">Haiti</option>
                                                                    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                                                    <option value="Holy See">Holy See (Vatican City State)</option>
                                                                    <option value="Honduras">Honduras</option>
                                                                    <option value="Hong Kong">Hong Kong</option>
                                                                    <option value="Hungary">Hungary</option>
                                                                    <option value="Iceland">Iceland</option>
                                                                    <option value="India">India</option>
                                                                    <option value="Indonesia">Indonesia</option>
                                                                    <option value="Iran">Iran (Islamic Republic of)</option>
                                                                    <option value="Iraq">Iraq</option>
                                                                    <option value="Ireland">Ireland</option>
                                                                    <option value="Israel">Israel</option>
                                                                    <option value="Italy">Italy</option>
                                                                    <option value="Jamaica">Jamaica</option>
                                                                    <option value="Japan">Japan</option>
                                                                    <option value="Jordan">Jordan</option>
                                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                                    <option value="Kenya">Kenya</option>
                                                                    <option value="Kiribati">Kiribati</option>
                                                                    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                                                    <option value="Korea">Korea, Republic of</option>
                                                                    <option value="Kuwait">Kuwait</option>
                                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                    <option value="Lao">Lao People's Democratic Republic</option>
                                                                    <option value="Latvia">Latvia</option>
                                                                    <option value="Lebanon">Lebanon</option>
                                                                    <option value="Lesotho">Lesotho</option>
                                                                    <option value="Liberia">Liberia</option>
                                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                                    <option value="Lithuania">Lithuania</option>
                                                                    <option value="Luxembourg">Luxembourg</option>
                                                                    <option value="Macau">Macau</option>
                                                                    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
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
                                                                    <option value="Micronesia">Micronesia, Federated States of</option>
                                                                    <option value="Moldova">Moldova, Republic of</option>
                                                                    <option value="Monaco">Monaco</option>
                                                                    <option value="Mongolia">Mongolia</option>
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
                                                                    <option value="Russia">Russian Federation</option>
                                                                    <option value="Rwanda">Rwanda</option>
                                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                                                    <option value="Saint LUCIA">Saint LUCIA</option>
                                                                    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                                                    <option value="Samoa">Samoa</option>
                                                                    <option value="San Marino">San Marino</option>
                                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                                    <option value="Senegal">Senegal</option>
                                                                    <option value="Seychelles">Seychelles</option>
                                                                    <option value="Sierra">Sierra Leone</option>
                                                                    <option value="Singapore">Singapore</option>
                                                                    <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                                                    <option value="Slovenia">Slovenia</option>
                                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                                    <option value="Somalia">Somalia</option>
                                                                    <option value="South Africa">South Africa</option>
                                                                    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                                                    <option value="Span">Spain</option>
                                                                    <option value="SriLanka">Sri Lanka</option>
                                                                    <option value="St. Helena">St. Helena</option>
                                                                    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                                                    <option value="Sudan">Sudan</option>
                                                                    <option value="Suriname">Suriname</option>
                                                                    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                                                    <option value="Swaziland">Swaziland</option>
                                                                    <option value="Sweden">Sweden</option>
                                                                    <option value="Switzerland">Switzerland</option>
                                                                    <option value="Syria">Syrian Arab Republic</option>
                                                                    <option value="Taiwan">Taiwan, Province of China</option>
                                                                    <option value="Tajikistan">Tajikistan</option>
                                                                    <option value="Tanzania">Tanzania, United Republic of</option>
                                                                    <option value="Thailand">Thailand</option>
                                                                    <option value="Togo">Togo</option>
                                                                    <option value="Tokelau">Tokelau</option>
                                                                    <option value="Tonga">Tonga</option>
                                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                    <option value="Tunisia">Tunisia</option>
                                                                    <option value="Turkey">Turkey</option>
                                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                                    <option value="Turks and Caicos">Turks and Caicos Islands</option>
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
                                                                    <option value="Vietnam">Viet Nam</option>
                                                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                                    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                                                    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                                                    <option value="Western Sahara">Western Sahara</option>
                                                                    <option value="Yemen">Yemen</option>
                                                                    <option value="Serbia">Serbia</option>
                                                                    <option value="Zambia">Zambia</option>
                                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                                
                                                                </select>
                                                                @error('country')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                                                </div> -->

                                                                <div class="col-6 mb-3">
                                                                    <input type="text" name="city" Placeholder="Select city" class="form-control">
                                                                    @error('city')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                                                </div>


                                                                <div class="col-6 mb-3">
                                                                    <input type="file" name="profile" Placeholder="Enter Your passport No" id="logo" class="form-control">
                                                                    @error('profile')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                                                </div>

                                                                <div class="col-12 mb-3">
                                                                <textarea rows="3" name="remarks" placeholder="What type of Courses Would you like, please Describe us *" class="form-control bg-white text-muted"></textarea>
                                                                @error('remarks')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                                                </div>
                                                                
                                                               

                                                                <div class="col-12 mb-3">
                                                                <button type="submit" class="form-control btn btn-sm btn-outline-primary">Update Details</button>
                                                                </div>

                                                                </div>

                                            </form>
                                          @endif


                                        </div>


                                        </div>
                                    </div>
                                    </div>
                                </div>
                               
                        </div>

                </div>

                <!---This is the notifications section-->
                <!-- <div class="row gutters-sm col-xl-6 col-lg-6 col-md-6">
                   
                </div> -->
                <!---End of the notification section -->

                <div class="row gutters-sm col-xl-6 col-lg-6 col-md-6">

                    @if($student->notify )
                   <div class="col-sm-12 mb-3">
                       <div class="box  h-100 responsive">
                            <div class="card-body widget">
                            <h6 class="d-flex align-items-center mb-6"><i class="material-icons text-info mr-2">Notification</i></h6><hr>
                            <span class="text-danger font-20 text-break" >&nbsp; {{ $student->notify }} &nbsp;</span>             
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    
                    <!--<div class="col-sm-12 mb-2">-->
                    <!--   <div class="box  h-100 responsive">-->
                    <!--        <div class="card-body widget">-->
                    <!--        <h6 class="d-flex align-items-center mb-6"><i class="material-icons text-info mr-1">Process status</i></h6>-->
                    <!--           @if($student->process_status == 0)-->
                    <!--            <span class="badge badge-danger bg-gradient-danger col-sm-12 mb-6" style="font-size:15px">Not Take any course</span>-->
                    <!--           @else-->
                    <!--            <span class="badge badge-success bg-gradient-success col-sm-12 mb-6" style="font-size:15px"> In process</span>-->
                    <!--           @endif-->
                            <!--<span class="badge badge-warning bg-gradient-warning col-sm-12 mb-6" >{{ $student->notify }}</span>             -->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    
                    <div class="col-sm-6 mb-3">
                       <div class="box  h-100 ">
                            <div class="card-body widget">
                            <h6 class="d-flex align-items-center mb-6"><i class="material-icons text-info mr-1">Company Status</i></h6>
                            
                            @if($student->status_id)
                            <span class="badge badge-primary bg-gradient-primary col-sm-12 mb-6" style="font-size:12px">{{ $student->status->status }}</span>
                            @else
                            <span class="badge badge-danger bg-gradient-danger col-sm-12 mb-6" style="font-size:12px">Not Take any course</span>
                            @endif
                            <!--<span class="badge badge-warning bg-gradient-warning col-sm-12 mb-6" >{{ $student->notify }}</span>             -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 mb-3">
                       <div class="box  h-100 responsive">
                            <div class="card-body widget">
                            <h6 class="d-flex align-items-center mb-6"><i class="material-icons text-info mr-1">EMGS Status</i></h6>
                            
                            @if($student->emg_status)
                            <span class="badge badge-warning bg-gradient-warning col-sm-12 mb-6" style="font-size:12px">{{ $student->emgs->status }}</span>
                            @else
                            <span class="badge badge-danger bg-gradient-danger col-sm-12 mb-6" style="font-size:12px">Not Started yet !</span>
                            @endif
                            <!--<span class="badge badge-warning bg-gradient-warning col-sm-12 mb-6" >{{ $student->notify }}</span>             -->
                            </div>
                        </div>
                    </div>
                    
                    
                 


                    <!--<div class="col-sm-6 mb-3">-->
                    <!--    <div class="box  h-100">-->
                    <!--        <div class="card-body widget">-->
                    <!--        <h6 class="d-flex align-items-center mb-3">course Status</h6>-->

                    <!--        @if($student->status)-->
                    <!--        <span class="badge badge-primary" style="font-size:15px">{{ $student->status }}</span>-->
                    <!--        @else-->
                    <!--        <span class="badge badge-danger font-14 d-flex align-items-center mb-3" >Not Take any course</span>-->
                    <!--        @endif-->
                            
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-sm-6 mb-3">-->
                    <!--    <div class="box h-100">-->
                    <!--        <div class="card-body widget">-->
                    <!--        <h6 class="d-flex align-items-center mb-3">Process status</h6>-->
                    <!--        @if($student->process_status == 0)-->
                    <!--            <span class="badge badge-danger font-14 d-flex align-items-center mb-3" >Not Take any course</span>-->
                    <!--            @else-->
                    <!--            <span class="badge badge-success" style="font-size:15px"> In process</span>-->
                    <!--            @endif-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="col-lg-6 mb-3  layout-spacing"> 
                            <div class="card-body widget"> 
                               <div class="col-lg-12 circlechart text-center"  data-percentage="{{ $due_state }}">completed</div>
                                <p class="font-17 text-center mb-0 text-muted">
                                    <a class="text-primary" href="javascript:void(0);">{{ $due_state }}%</a>Processing complete status
                                </p>  
                            </div>
                    </div>
                    
                     <div class="col-lg-6 mb-3  layout-spacing"> 
                            <div class="card-body widget"> 
                               <div class="col-lg-12 circlechart text-center"  data-percentage="{{ $emg_state }}">completed</div>
                                <p class="font-17 text-center mb-0 text-muted">
                                    <a class="text-primary" href="javascript:void(0);">{{ $emg_state }}%  </a>EMGS compeleting status
                                </p>  
                            </div>
                    </div>


                </div>

                

              </div>

                   


                <div class="row layout-top-spacing">
                    
                    <!-- @if($student->age == '' || $student->passport_no == '' || $student->remarks == '' || $student->photo == '' )
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-content">
                                <div class="agent-info text-center">
                                    <div class="agent-img pb-3">
                                        <img src="{{ (!empty(Auth::guard('student')->user()->photo)) ? asset('uploads/'.Auth::guard('student')->user()->photo):'https://bootdey.com/img/Content/avatar/avatar7.png' }}" class="img-thumbnail rounded-circle" alt="image">
                                    </div>
                                    
                                    <h5 class="text-dark">{{ $student->name }}</h5>
                                    <p>{{ $student->email }}</p>
                                    <h6 class="mb-3 mt-3"><span class="text-primary pr-2"><i class="fa fa-phone"></i></span>{{ $student->phone }}</h6>
                                </div>
                                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="agent-req-form mt-2">
                                @csrf
                                    <h6 class="text-muted text-center mb-4">Please fillup the form</h6>
                                    <input type="hidden" name="id" value="{{ $student->id }}">
                                    <div class="form-group">
                                    <input type="file" name="profile" data-preview-file-type="text" class="form-control">
                                    @error('profile')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                    </div>

                                      <div class="form-group">
                                        <input type="text" name="passport" placeholder="Enter Passport Number *" class="form-control bg-white text-muted">
                                        @error('passport')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                     </div>
                                    <div class="form-group">
                                            <select class="form-control basic" name="country">
                                                        <option value="">select country</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antartica">Antarctica</option>
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
                                                        <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
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
                                                        <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Congo">Congo, the Democratic Republic of the</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                                        <option value="Croatia">Croatia (Hrvatska)</option>
                                                        <option value="Cuba">Cuba</option>
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
                                                        <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="France Metropolitan">France, Metropolitan</option>
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
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                                        <option value="Holy See">Holy See (Vatican City State)</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran">Iran (Islamic Republic of)</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                                        <option value="Korea">Korea, Republic of</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Lao">Lao People's Democratic Republic</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macau">Macau</option>
                                                        <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
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
                                                        <option value="Micronesia">Micronesia, Federated States of</option>
                                                        <option value="Moldova">Moldova, Republic of</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
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
                                                        <option value="Russia">Russian Federation</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                                        <option value="Saint LUCIA">Saint LUCIA</option>
                                                        <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                                        <option value="Span">Spain</option>
                                                        <option value="SriLanka">Sri Lanka</option>
                                                        <option value="St. Helena">St. Helena</option>
                                                        <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syria">Syrian Arab Republic</option>
                                                        <option value="Taiwan">Taiwan, Province of China</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania, United Republic of</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks and Caicos">Turks and Caicos Islands</option>
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
                                                        <option value="Vietnam">Viet Nam</option>
                                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                        <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                                        <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                        
                                            </select>
                                            @error('country')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror        
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="age" placeholder="Enter Your Age *" class="form-control bg-white text-muted">
                                        @error('age')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                    </div>
                                    <div class="form-group">
                                        <textarea rows="3" name="remarks" placeholder="What type of Courses Would you like Describe us *" class="form-control bg-white text-muted"></textarea>
                                        @error('remarks')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                    </div>
                                    <div class="form-group text-right mb-0">
                                        <button type="submit" class="btn btn-sm btn-outline-primary">Update Details</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @else
                        
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing small-profile">
                        <div class="widget widget-chart-one">
                           <div class="d-flex justify-content-end mb-4">
                               <span class="badge bg-light-danger mr-2">Updated</span>
                            </div>
                            <div class="text-center mb-4">
                                <img src="{{ (!empty(Auth::guard('student')->user()->photo)) ? asset('uploads/'.Auth::guard('student')->user()->photo):'https://bootdey.com/img/Content/avatar/avatar7.png' }}" alt="Avatar" class="img-thumbnail rounded-circle mb-1">
                                <h5 class="mb-0 stronger">{{ $student->name }}</h5>
                                <a class="text-primary" href="#">{{ $student->email }}</a><br><a href="{{ route('student_profile') }}"><button class="btn btn-info" type="button">Profile</button></a><hr>

                                @if($student->status)
                                    <span class="badge badge-primary" style="font-size:15px">{{ $student->status }}</span>
                                    @else
                                    <span class="badge badge-default text-primary" style="font-size:15px">You Have to select one course..</span>
                                @endif


                                
                                <!-- <div class="d-flex justify-content-center align-items-center mt-4">
                                    <div class="dash-followers mr-4">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <button type="button" class="btn bg-light-secondary px-2">
                                                <i class="lar la-user"></i>
                                            </button>
                                            <div class="ml-2">
                                                <h5 class="mb-0">365k</h5>
                                                <span class="grey">Followers</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dash-ratings">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <button type="button" class="btn bg-light-secondary px-2">
                                                <i class="las la-star"></i>
                                            </button>
                                            <div class="ml-2">
                                                <h5 class="mb-0">4.7</h5>
                                                <span class="grey">Ratings</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <!-- <h6 class="mt-4">
                                <span>Today's Earnings</span>
                                <small class="ml-1">$25k</small>
                            </h6>
                            <div class="progress mb-0">
                                <div role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-light-primary text-primary font-11 strong" style="width: 30%;">30%</div>
                                <div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-light-success text-success-teal font-11 strong" style="width: 20%;">20%</div>
                                <div role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-light-info text-info font-11 strong" style="width: 35%;">35%</div>
                            </div> -->
                        </div>
                    <!-- </div>

                    @endif --> 
                <!-- This is the suggestion course section -->
                @if($student->course_id)
                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="widget widget-chart-two">
                                    <div class="widget-heading">
                                        <h5 class="">Accepted course</h5>
                                    </div>
                                    <div class="widget-content mt-4">
                                      
                                        <div class="col-md-12">                          
                                            <div class="single-result row">
                                                <div class="col-md-6 d-flex">
                                                    <div class="image-container mr-3">
                                                        <img src="{{ asset('uploads/'.$student->course->photo.'') }}" class="avatar-md " />
                                                    </div>
                                                    <div class="info-container">
                                                        <h6>
                                                            <a href="{{ route('s_course_view',$student->course->id) }}" class="text-primary strong">{{ $student->course->name }}</a>
                                                        </h6>
                                                        <p class="text-muted font-12">{{ $student->course->course }}</p>
                                                        <p class="font-13">Degree : {{ $student->course->course_degree }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <i class="lar la-clock font-20 mr-2 txet-muted"></i>
                                                        <a>{{ $student->course->starting_date }}</a>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <i class="lar la-file-alt font-20 mr-2 txet-muted"></i>
                                                        <a>{{ $student->course->category->name }}</a>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <i class="lar la-clock font-20 mr-2 txet-muted"></i>
                                                        <a>{{ $student->course->course_period }}</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 star-area">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <i class="las la-university font-20 mr-2 txet-muted"></i>
                                                        <a>{{ $student->course->university->name }}</a>
                                                    </div>

                                                    <div class="d-flex align-items-center mb-3">
                                                    
                                                        <i class="las la-graduation-cap font-20 mr-2 txet-muted"></i>
                                                        <a>{{ $student->course->course_degree}}</a>
                                                    </div>

                                                    
                                                    <div class="d-flex align-items-center">
                                                        <i class="las la-star text-warning font-20"></i>
                                                        <i class="las la-star text-warning font-20"></i>
                                                        <i class="las la-star text-warning font-20"></i>
                                                        <i class="las la-star text-warning font-20"></i>
                                                        <i class="lar la-star text-warning font-20"></i>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-2 buy-now-area">
                                                    <p>
                                                        <a class="text-success-teal strong font-20 ml-2">{{ $student->course->fess}}</a>
                                                    </p>
                                                    <i class="lar la-check-circle font-45 text-success"></i>&nbsp;&nbsp;<h6 class="text-success">Course Accepted</h6>      
                                                </div>
                                            </div><hr>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <!--end of the section --->
                  
                <div class="col-lg-12 layout-spacing">

                @if(!empty($require))
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 dashboard-table layout-spacing ">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="widget widget-chart-two file-upload-section">
                                    <div class="widget-heading">
                                      <div class="d-flex align-items-center mb-3">
                                        <h5 class="">Course Requirements</h5>
                                        @if ($errors->any()) <div class="text-danger font-20"> <ul>@foreach ($errors->all() as $error){{ $error }}@endforeach</ul></div>@endif
                                       </div>
                                    </div>
                                    <div class="widget-content mt-4">
                                @if(!empty($require))
                                <form  method="POST" action="{{ route('doc.upload') }}" id="upload-form" enctype="multipart/form-data">
                                  @csrf
                                  
                                    @php $id=1 @endphp
                                    @php $sl=0 @endphp
                                    @php $data = [] @endphp

                                    @foreach($require as $rec)    
                                    
                                        @foreach($stuDoc as $updoc)
                                            @php $data[]=  $updoc->requirement_id; @endphp
                                        @endforeach
                                               
                                    <!-- @if($rec->studentdoc != null)
                                    @if($rec->studentdoc->type == $rec->title)
                                    <p>Like it</p>
                                    @else
                                    <p>Not like it</p>
                                    @endif
                                    @endif
                                    
                                    @if(count($stuDoc)>0) 
                                    @foreach($stuDoc as $doc)
                                    @if($rec->input == $doc->type)
                                    <p>Done</p>
                                    @else
                                    <p>Not Done</p>
                                    @endif
                                    @php $sl++ @endphp
                                    @endforeach
                                    @else
                                    <p>ss</p>
                                    @endif -->
                                
                                    <input type="hidden" name="id" value="{{ $student->id }}">
                                        <div class="col-md-12">                          
                                            <div class="single-result row">
                                                <div class="col-md-6 d-flex">
                                                    <div class="image-container mr-3">
                                                       
                                                    </div>
                                                    <div class="info-container">
                                                        <h6>{{ $id}} -
                                                            <a href="#" class="text-primary strong">{{ $rec->input }}</a>
                                                        </h6>
                                                        <p class="text-muted font-12">{{ $rec->requirment }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    @if(in_array($rec->id,$data))
                                                    <div class="align-items-center mb-3">
                                                     <a  href="#" data-id="{{ route('student.doc.delete',$rec->id) }}" class="delete-confirm btn btn-danger"><i class="las la-trash font-20"></i>Delete</a>
                                                    </div>
                                                    @else
                                                    <div class="d-flex align-items-center mb-3">
                                                                <label for="file-upload{{ $id}}" class="custom-file-upload btn btn-primary">
                                                                <i class="las la-cloud-upload-alt font-20"></i>select
                                                                </label>
                                                                <input type="file" id="file-upload{{ $id}}"  name="document{{$id}}" style="display:none"/>
                                                    </div>
                                                    @endif                                      
                                                </div>

                                                <div class="col-md-2 star-area "> 
                                                   @if(in_array($rec->id,$data))
                                                   <div class="d-flex align-items-center mb-3">
                                                   <a  href="{{ route('student.doc.download',$rec->id) }}" class="btn btn-primary bg-gradient-primary"><i class="las la-cloud-download-alt font-20"></i>Download</a>
                                                   </div>
                                                   @else
                                                   <div class="d-flex align-items-center mb-3">
                                                        <button type="submit" class="btn btn-primary bg-gradient-success"><i class="las la-cloud-upload-alt font-20"></i>Upload</button>
                                                        </div>
                                                   @endif
                                                   
                                                </div>

                                                <div class="col-md-2 buy-now-area ">
                                                   <div class="align-items-center mb-3 p-0">
                                                     @if(in_array($rec->id,$data))
                                                     
                                                     <i class="lar la-check-circle font-45 text-success"></i>&nbsp;&nbsp;<h6 class="text-success font-12">Upload Done</h6>
                                                     @else
                                                     <i class="lar la-times-circle font-45 text-danger"></i>&nbsp;&nbsp;<h6 class="text-success font-12">Not upload</h6>
                                                     @endif  
                                                    </div>
                                                </div>

                                            </div><hr>
                                        </div>
                                        @php $sl++; @endphp
                                        @php $id++; @endphp
                                      @endforeach
                                      
                                </form>
                                @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                  
                @if(count($courses) > 0)
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="widget widget-chart-two">
                                    <div class="widget-heading">
                                        <h5 class="">Suggested Courses</h5>
                                    </div>
                                    <div class="widget-content mt-4">
                                      @foreach($courses as $row)
                                        <div class="col-md-12">                          
                                            <div class="single-result row">
                                                <div class="col-md-6 d-flex">
                                                    <div class="image-container mr-3">
                                                        <img src="{{ asset('uploads/'.$row->photo.'') }}" class="avatar-md " />
                                                    </div>
                                                    <div class="info-container">
                                                        <h6>
                                                            <a href="{{ route('s_course_view',$row->id) }}" class="text-primary strong">{{ $row->name }}</a>
                                                        </h6>
                                                        <p class="text-muted font-12">{{ $row->course }}</p>
                                                        <p class="font-13">Degree : {{ $row->course_degree }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <i class="lar la-clock font-20 mr-2 txet-muted"></i>
                                                        <a>{{ $row->starting_date }}</a>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <i class="lar la-file-alt font-20 mr-2 txet-muted"></i>
                                                        <a>{{ $row->category->name }}</a>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <i class="lar la-clock font-20 mr-2 txet-muted"></i>
                                                        <a>{{ $row->course_period }}</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 star-area">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <i class="las la-university font-20 mr-2 txet-muted"></i>
                                                        <a>{{ $row->university->name }}</a>
                                                    </div>

                                                    <div class="d-flex align-items-center mb-3">
                                                    
                                                        <i class="las la-graduation-cap font-20 mr-2 txet-muted"></i>
                                                        <a>{{ $row->course_degree}}</a>
                                                    </div>

                                                    
                                                    <div class="d-flex align-items-center">
                                                        <i class="las la-star text-warning font-20"></i>
                                                        <i class="las la-star text-warning font-20"></i>
                                                        <i class="las la-star text-warning font-20"></i>
                                                        <i class="las la-star text-warning font-20"></i>
                                                        <i class="lar la-star text-warning font-20"></i>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-2 buy-now-area">
                                                    <p>
                                                        
                                                        <a class="text-success-teal strong font-20 ml-2">{{ $row->fess}}</a>
                                                    </p>
                                                    @if($row->id == $student->course_id)
                                                    <i class="lar la-check-circle font-45 text-success"></i>&nbsp;&nbsp;<h6 class="text-success">Course Accepted</h6>
                                                    @else
                                                    <a href="{{ route('s_course_view',$row->id) }}" class="btn btn-primary bg-gradient-success">Accept It</a>
                                                    @endif
                                                     
                                                    
                                                </div>
                                            </div><hr>
                                        </div>
                                      @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if($student->course_id == "")
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="widget widget-chart-two">
                                    <div class="widget-heading">
                                        <h5 class="">Trending Courses</h5><hr>
                                    </div>
                                    
                                    @foreach($topcourse as $row)  
                                    <div class="col-md-12"> 
                                                                        
                                        <div class="single-result row">
                                            <div class="col-md-6 d-flex">
                                                <div class="image-container mr-3">
                                                    <img src="{{ asset('uploads/'.$row->course->photo.'') }}" class="avatar-md " />
                                                </div>
                                                <div class="info-container">
                                                    <h6>
                                                        <a href="{{ route('s_course_view',$row->course->id) }}" class="text-primary strong">{{ $row->course->name }}</a>
                                                    </h6>
                                                    <p class="text-muted font-12">{{ $row->course->course }}</p>
                                                    <p class="font-13">Degree : {{ $row->course->course_degree }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="d-flex align-items-center mb-3">
                                                    <i class="lar la-clock font-20 mr-2 txet-muted"></i>
                                                    <a>{{ $row->course->starting_date }}</a>
                                                </div>
                                                <div class="d-flex align-items-center mb-3">
                                                    <i class="lar la-file-alt font-20 mr-2 txet-muted"></i>
                                                    <a>{{ $row->course->category->name }}</a>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <i class="lar la-clock font-20 mr-2 txet-muted"></i>
                                                    <a>{{ $row->course->course_period }}</a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 star-area">
                                                <div class="d-flex align-items-center mb-3">
                                                    <i class="las la-university font-20 mr-2 txet-muted"></i>
                                                    <a>{{ $row->course->university->name }}</a>
                                                </div>

                                                <div class="d-flex align-items-center mb-3">
                                                
                                                    <i class="las la-graduation-cap font-20 mr-2 txet-muted"></i>
                                                    <a>{{ $row->course->course_degree}}</a>
                                                </div>

                                                
                                                <div class="d-flex align-items-center">
                                                    <i class="las la-star text-warning font-20"></i>
                                                    <i class="las la-star text-warning font-20"></i>
                                                    <i class="las la-star text-warning font-20"></i>
                                                    <i class="las la-star text-warning font-20"></i>
                                                    <i class="lar la-star text-warning font-20"></i>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-2 buy-now-area">
                                                <p>
                                                    
                                                    <a class="text-success-teal strong font-20 ml-2">{{ $row->course->fess}}</a>
                                                </p>
                                                <a href="{{ route('s_course_view',$row->course->id) }}" class="btn btn-primary bg-gradient-primary">View Now</a>
                                            </div>
                                        </div><hr>
                                    </div>
                                    @endforeach

                                        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                    <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="widget widget-chart-two">
                                    <div class="widget-heading">
                                        <h5 class="">Trending University</h5>
                                    </div>
                                    <div class="widget-content mt-4">
                                        <div class="table-responsive">
                                            <table class="table no-border mb-4">
                                                <thead>
                                                    <tr>
                                                        <th class="p-0" style="width: 50px"></th>
                                                        <th class="p-0" style="min-width: 150px"></th>
                                                        <th class="p-0" style="min-width: 160px"></th>
                                                        <th class="p-0" style="min-width: 100px"></th>
                                                        <th class="p-0" style="min-width: 40px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($topuniversity as $row)
                                                    <tr>
                                                        <td>
                                                            <div class="text-center">
                                                                  <img src="{{ asset('uploads/'.$row->university->logo.'') }}" class="avatar-md object-cover" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="text-dark strong">{{ $row->university->name }}</a>
                                                            <span class="text-muted d-block">{{ $row->university->Unumber }}</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="text-muted strong">
                                                                {{ $row->university->address }}
                                                              
                                                            </span>
                                                        </td>

                                                        <td class="text-right">
                                                            <span class="text-muted strong">
                                                                {{ $row->university->ex_email }}<br>
                                                                {{ $row->university->ex_number }}
                                                            </span>
                                                        </td>
                                                       
                                                        <td class="text-right">
                                                            <a href="#" class="text-primary font-30 arrow-right-hover">
                                                                <i class="las la-arrow-right"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                          <!-- Product Carousel -->
                        
                          <!-- @foreach($courses as $course)
                          <div class="col-lg-6 col-xl-3  widget">
                          <p class="badge badge-primary mt-1 font-10" >Recomended</p>
                                                        <div class="card-body bg-gradient-danger ">
                                                            <h5 class="card-title text-white">{{ $course->name }}</h5>&nbsp;
                                                            <h6 class="card-subtitle text-white font-13">{{ $course->course }}</h6>
                                                        </div>
                                                        <img class="img-fluid" src="{{ asset('uploads/'.$course->photo.'') }}" alt="Card image cap">
                                                        <div class="card-body">
                                                            <p class="card-text ">Period : {{ $course->course_period }}</p>
                                                            <p class="card-text ">
                                                            <span class="badge badge-success font-15 text-white">Fees : {{ $course->fess }}</span>
                                                            </p>
                                                            <a href="{{ route('s_course_view',$course->id) }}"><button type="button" class="btn bg-gradient-secondary text-white">Enrolle course</button></a>
                                                        </div>
                                                    
                                                    
                             </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         @endforeach -->
                        
                    <!-- Product Carousel Ends-->
                   
                </div>
                
                    <!-- Delete Modal HTML -->
                        <div id="DeleteModal" class="modal fade">
                            <div class="modal-dialog modal-confirm">
                              <div class="modal-content">
                                <div class="modal-header flex-column">
                                  <div class="icon-box">
                                  <i class="las la-exclamation-triangle">&#xE5CD;</i>
                                  </div>						
                                  <h4 class="modal-title w-100">Are you sure?</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Do you really want to delete this document? This process cannot be undone.</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <a  class="btn btn-danger del">Delete</a>
                                </div>
                              </div>
                            </div>
                        </div> 
                    <!--End of the modal---->
@endsection

@section('script')
<script type="text/javascript">
$('#upload-form').submit(function(e) {
    $( document ).ready(function() { 
    //this is https://gasparesganga.com/labs/jquery-loading-overlay/ libariry
    $(".file-upload-section").LoadingOverlay("show", {
    background  : "rgba(165, 190, 100, 0.5)"
    });
});

});
// var spinner = $('#loader');


$( document ).ready(function() { 
    $(".delete-confirm").click(function(e){
     e.preventDefault();
     let id = $(this).attr("data-id");
     $('#DeleteModal').modal('show');
     $(".del").attr("href", id)
    });
});


        // this is the toaster notification
toastr.options = {
  "closeButton": true,
//   "positionClass": "toast-top-center",
   }
@if(session('s_success'))
toastr["success"]("{{ session('s_success') }}");
@elseif(session('info'))
toastr["info"]("{{ session('info') }}");
@elseif (session('warning'))
toastr["error"]("{{ session('warning') }}");
@endif
//end of the tostar Notification


    $(function(){
       $('.circlechart').circlechart();
    });


    google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Pac Man', 'Percentage'],
          ['Processing complete',<?php echo $due_state; ?>],
          ['Paiding Prosess', 100],
        ]);

        var options = {
          title: 'Steps of course accept',
          pieHole: 0.5,
        };

        // var options = {
        //   pieStartAngle: 90,
        //   tooltip: { trigger: 'none' },
        //   slices: {
        //     0: { color: 'darkblue' },
        //     1: { color: 'red' }
        //   }
        // };

        var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
        chart.draw(data, options);
      }

     
    </script>
<script>
let req = @json($require);
let num = 0;
req.forEach(myFunction);
function myFunction(item) {
    num += 1;
    let field = '#file-upload';
    let field2 = num;
    let result = field.concat(field2);
    $(result).change(function() {
        var i = $(this).prev('label').clone();
        var file = $(result)[0].files[0].name;
        $(this).prev('label').text(file);
    });
    
}
      

// @if(session('info'))
//      Swal.fire('Info', '{{ session('info') }}', 'info'); 
// @elseif (session('s_success'))
//         Swal.fire('Done', '{{ session('s_success') }}', 'success');
// @elseif (session('warning'))
//         Swal.fire('Danger', '{{ session('warning') }}', 'Danger');
//  @endif
        //this is for instant image showing for ptofile
        $(document).ready(function(){
           //alert("Dsfdsf");
          //alert("This is the alert function");
            $('#logo').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#updatelogo').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
            // Swal.fire('Info', '{{ session('info') }}', 'info');
        });

</script>
@endsection