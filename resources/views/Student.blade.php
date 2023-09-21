@extends('layouts.base')
@section('content')
<style>

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
    
                             <div class="widget-content-area">
                                    <div class="w-100 animated-underline-content">
                                        <ul class="nav nav-tabs  mb-0" id="lineTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link  @if(!$errors->any()) active @endif" id="underline-about-tab" data-toggle="tab" href="#underline-about" role="tab" aria-controls="underline-about" aria-selected="true">Student List</a>
                                            </li>
                                            <!--<li class="nav-item">-->
                                            <!--    <a class="nav-link  @if(!$errors->any() && $request->has('new-tab'))  active @endif " id="underline-project-tab" data-toggle="tab" href="#underline-project" role="tab" aria-controls="underline-project" aria-selected="false">Add new student</a>-->
                                            
                                            <!--</li>-->
                                            <li class="nav-item">
                                                <a class="nav-link   @if($errors->any()) active @endif" id="underline-student-tab" data-toggle="tab" href="#underline-student" role="tab" aria-controls="underline-about" aria-selected="true">Archive Student</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="lineTabContent-3">

                                            <div class="tab-pane fade @if(!$errors->any()) show active @endif" id="underline-about" role="tabpanel" aria-labelledby="underline-about-tab">
                                                <!--start content--->
                                                                                             
                                                @if(Auth::user()->can('student-view'))
                                                <div class="row ml-3 mr-3 mb-1 mt-0 p-1 bg-light" style="border-left: 5px solid #f3a129">
                                                    <div class="col-md-6">
                                                    <p class="mb-0" style="font-size: 15px;margin-top: 8px;font-family: sans-serif;font-weight: bold;color:#2262c6">Student List</p>
                                                    </div>
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="tblSearch" placeholder="Search data.." class="form-control form-control-sm float-end mt-1" style="height: 35px;">
                                                    </div>
                                                </div>

                                                <div class="table-responsive mb-0 p-0">   
                                                  <table id="list"  class="table table-bordered table-hover" style="width: 100%;">
                                                   <thead id="thead" style="background-color: #f2f2f2;">
                                                        <tr>
                                                            <th>#</th>
                                                            <th id="search">Name</th>
                                                            <th id="search">Email</th>
                                                            <th id="search">Phone</th>
                                                            <th id="search">Status</th>
                                                            <th id="search">Added by</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                            
                                                    <tbody>
                                                   
                                                    @foreach ($students as $row)
                                                        <tr >
                                                       
                                                        <td><a href="{{ route('view.cor',$row->id) }}"><img class="rounded-circle" alt="200x200" width="300" src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):('https://bootdey.com/img/Content/avatar/avatar7.png') }}" data-holder-rendered="true"  style="width:40px;height:40px"></a></td>
                                                        <td>{{$row->name}}</td>
                                                     
                                                        <td>{{$row->email}}</td>
                                                        <td class="d-flex"><a href="https://api.whatsapp.com/send?phone={{$row->country_code.$row->phone}}" target="_blank"><i class="lab la-whatsapp font-20 text-success"></i></a><div>+{{$row->country_code}}{{$row->phone}}</div></td>
                                                        <td>   
                                                            @if($row->active_status == 0)
                                                            <span class="text-danger font-8">Deactive</span>
                                                            @else
                                                            <span class="text-success font-8">Active</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($row->entry_id == '')
                                                            <span class="badge badge-success" style="font-size:10px;">Online</span>
                                                            @else
                                                        
                                                            <span class="badge badge-primary" style="font-size:10px;"> 
                                                                {{ $row->user->name  }}
                                                            </span>
                                                            @endif
                                                        </td>
                                                      
                                                        
                                                        <td class="d-flex">
                                                            <a  href="{{ route('view.stu', $row->id) }}" role="button" class="p-0 m-0"><i class="las la-eye font-25 text-success"></i></a>

                                                            @if(Auth::user()->can('student-update'))
                                                            <a  href="{{ route('edite.stu',$row->id) }}" role="button"  class="p-0 m-0"><i class="las la-edit font-25 text-primary"></i></a>
                                                            @endif

                                                            @if(Auth::user()->can('student-delete'))
                                                            <a class="delete-confirm" data-id="{{ route('delete.stu', $row->id) }}" href="#" class="p-0 m-0"><i class="las la-trash font-25 text-danger"></i></a>
                                                            <!-- <a  onclick="return confirm('Are you sure to delete the student record permanently ?')"  href="{{ route('delete.stu', $row->id) }}" role="button"><i class="las la-trash font-25 text-danger"></i></a> -->
                                                            @endif

                                                        </td>
                                                        </tr>
                                                    
                                                    @endforeach
                                                    </tbody>
                                                    </table>
                                               
                                                </div> 
                                                @else
                                                <span class="badge badge-danger font-15">&#129488; &nbsp;&nbsp;You can't see the students, Need admin confirmation .....</span> 
                                                @endif 
                                                <!--end content-->
                                               
                                            </div>

                                            <!-- Projects -->
                                            <!--<div class="tab-pane fade @if($errors->any()) show active @endif" id="underline-project" role="tabpanel" aria-labelledby="underline-project-tab">-->
                                                <!--start content-->
                                            <!--    @if(Auth::user()->can('student-add'))-->
                                            <!--        <form  method="POST" action="{{ route('store.stu') }}" enctype="multipart/form-data">-->
                                            <!--            @csrf-->
                                            <!--            <div class="col-md-12 row">-->
                                                            
                                            <!--                <div class="from-control col-md-6">-->
                                            <!--                    <lable>Student Name</lable>-->
                                            <!--                    <input type="text"   name="name" value="{{ old('name') }}" class="form-control">-->
                                            <!--                    @error('name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror-->
                                            <!--                </div>-->

                                            <!--                <div class="from-control col-md-6">-->
                                            <!--                    <lable>Student Email</lable>-->
                                            <!--                    <input type="email"  name="email" value="{{ old('email') }}"  class="form-control">                 -->
                                            <!--                    @error('email')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror-->
                                            <!--                </div>-->

                                                    

                                            <!--            </div><br>-->


                                            <!--            <div class="col-md-12 row">-->

                                            <!--               <div class="from-control col-md-6">-->
                                            <!--                    <lable>Student Country</lable>-->
                                            <!--                    <select class="form-control basic" id="country"  name="country">-->
                                            <!--                            <option  value="">Select Country</option>-->
                                            <!--                            <option data-countryCode="213" value="Algeria">Algeria (+213)</option>-->
                                            <!--                            <option data-countryCode="376" value="Andorra">Andorra (+376)</option>-->
                                            <!--                            <option data-countryCode="244" value="Angola">Angola (+244)</option>-->
                                            <!--                            <option data-countryCode="1264" value="Anguilla">Anguilla (+1264)</option>-->
                                            <!--                            <option data-countryCode="1268" value="Antigua &amp; Barbuda">Antigua &amp; Barbuda (+1268)</option>-->
                                            <!--                            <option data-countryCode="54" value="Argentina">Argentina (+54)</option>-->
                                            <!--                            <option data-countryCode="374" value="Armenia">Armenia (+374)</option>-->
                                            <!--                            <option data-countryCode="297" value="Aruba">Aruba (+297)</option>-->
                                            <!--                            <option data-countryCode="61" value="Australia">Australia (+61)</option>-->
                                            <!--                            <option data-countryCode="43" value="Austria">Austria (+43)</option>-->
                                            <!--                            <option data-countryCode="994" value="Azerbaijan">Azerbaijan (+994)</option>-->
                                            <!--                            <option data-countryCode="1242" value="Bahamas">Bahamas (+1242)</option>-->
                                            <!--                            <option data-countryCode="973" value="Bahrain">Bahrain (+973)</option>-->
                                            <!--                            <option data-countryCode="880" value="Bangladesh">Bangladesh (+880)</option>-->
                                            <!--                            <option data-countryCode="1246" value="Barbados">Barbados (+1246)</option>-->
                                            <!--                            <option data-countryCode="375" value="Belarus">Belarus (+375)</option>-->
                                            <!--                            <option data-countryCode="32" value="Belgium">Belgium (+32)</option>-->
                                            <!--                            <option data-countryCode="501" value="Belize">Belize (+501)</option>-->
                                            <!--                            <option data-countryCode="229" value="Benin">Benin (+229)</option>-->
                                            <!--                            <option data-countryCode="1441" value="Bermuda">Bermuda (+1441)</option>-->
                                            <!--                            <option data-countryCode="975" value="Bhutan">Bhutan (+975)</option>-->
                                            <!--                            <option data-countryCode="591" value="Bolivia">Bolivia (+591)</option>-->
                                            <!--                            <option data-countryCode="387" value="Bosnia Herzegovina">Bosnia Herzegovina (+387)</option>-->
                                            <!--                            <option data-countryCode="267" value="Botswana">Botswana (+267)</option>-->
                                            <!--                            <option data-countryCode="55" value="Brazil">Brazil (+55)</option>-->
                                            <!--                            <option data-countryCode="673" value="Brunei">Brunei (+673)</option>-->
                                            <!--                            <option data-countryCode="359" value="Bulgaria">Bulgaria (+359)</option>-->
                                            <!--                            <option data-countryCode="226" value="Bulgaria">Bulgaria (+226)</option>-->
                                            <!--                            <option data-countryCode="257" value="Burundi">Burundi (+257)</option>-->
                                            <!--                            <option data-countryCode="855" value="Cambodia">Cambodia (+855)</option>-->
                                            <!--                            <option data-countryCode="237" value="Cameroon">Cameroon (+237)</option>-->
                                            <!--                            <option data-countryCode="1" value="Canada">Canada (+1)</option>-->
                                            <!--                            <option data-countryCode="238" value="Cape Verde Islands">Cape Verde Islands (+238)</option>-->
                                            <!--                            <option data-countryCode="1345" value="Cayman Islands">Cayman Islands (+1345)</option>-->
                                            <!--                            <option data-countryCode="236" value="Central African Republic">Central African Republic (+236)</option>-->
                                            <!--                            <option data-countryCode="56" value="Chile">Chile (+56)</option>-->
                                            <!--                            <option data-countryCode="86" value="China">China (+86)</option>-->
                                            <!--                            <option data-countryCode="57" value="Colombia">Colombia (+57)</option>-->
                                            <!--                            <option data-countryCode="269" value="Comoros">Comoros (+269)</option>-->
                                            <!--                            <option data-countryCode="242" value="Congo">Congo (+242)</option>-->
                                            <!--                            <option data-countryCode="682" value="Cook Islands">Cook Islands (+682)</option>-->
                                            <!--                            <option data-countryCode="506" value="Costa Rica">Costa Rica (+506)</option>-->
                                            <!--                            <option data-countryCode="385" value="Croatia">Croatia (+385)</option>-->
                                            <!--                            <option data-countryCode="53" value="Cuba">Cuba (+53)</option>-->
                                            <!--                            <option data-countryCode="90392" value="Cyprus North">Cyprus North (+90392)</option>-->
                                            <!--                            <option data-countryCode="357" value="Cyprus South">Cyprus South (+357)</option>-->
                                            <!--                            <option data-countryCode="42" value="Czech Republic">Czech Republic (+42)</option>-->
                                            <!--                            <option data-countryCode="45" value="Denmark">Denmark (+45)</option>-->
                                            <!--                            <option data-countryCode="253" value="Djibouti">Djibouti (+253)</option>-->
                                            <!--                            <option data-countryCode="1809" value="Dominica">Dominica (+1809)</option>-->
                                            <!--                            <option data-countryCode="1809" value="Dominican Republic">Dominican Republic (+1809)</option>-->
                                            <!--                            <option data-countryCode="593" value="Ecuador">Ecuador (+593)</option>-->
                                            <!--                            <option data-countryCode="20" value="Egypt">Egypt (+20)</option>-->
                                            <!--                            <option data-countryCode="503" value="El Salvador">El Salvador (+503)</option>-->
                                            <!--                            <option data-countryCode="240" value="Equatorial Guinea">Equatorial Guinea (+240)</option>-->
                                            <!--                            <option data-countryCode="291" value="Eritrea">Eritrea (+291)</option>-->
                                            <!--                            <option data-countryCode="372" value="Estonia">Estonia (+372)</option>-->
                                            <!--                            <option data-countryCode="251" value="Ethiopia">Ethiopia (+251)</option>-->
                                            <!--                            <option data-countryCode="500" value="Falkland Islands">Falkland Islands (+500)</option>-->
                                            <!--                            <option data-countryCode="298" value="Faroe Islands">Faroe Islands (+298)</option>-->
                                            <!--                            <option data-countryCode="679" value="Fiji">Fiji (+679)</option>-->
                                            <!--                            <option data-countryCode="358" value="Finland">Finland (+358)</option>-->
                                            <!--                            <option data-countryCode="33" value="France">France (+33)</option>-->
                                            <!--                            <option data-countryCode="594" value="French Guiana">French Guiana (+594)</option>-->
                                            <!--                            <option data-countryCode="689" value="French Polynesia">French Polynesia (+689)</option>-->
                                            <!--                            <option data-countryCode="241" value="Gabon">Gabon (+241)</option>-->
                                            <!--                            <option data-countryCode="220" value="Gambia">Gambia (+220)</option>-->
                                            <!--                            <option data-countryCode="7880" value="Georgia">Georgia (+7880)</option>-->
                                            <!--                            <option data-countryCode="49" value="Germany">Germany (+49)</option>-->
                                            <!--                            <option data-countryCode="233" value="Ghana">Ghana (+233)</option>-->
                                            <!--                            <option data-countryCode="350" value="Gibraltar">Gibraltar (+350)</option>-->
                                            <!--                            <option data-countryCode="30" value="Greece">Greece (+30)</option>-->
                                            <!--                            <option data-countryCode="299" value="Greenland">Greenland (+299)</option>-->
                                            <!--                            <option data-countryCode="1473" value="Grenada">Grenada (+1473)</option>-->
                                            <!--                            <option data-countryCode="590" value="Guadeloupe">Guadeloupe (+590)</option>-->
                                            <!--                            <option data-countryCode="671" value="Guam">Guam (+671)</option>-->
                                            <!--                            <option data-countryCode="502" value="Guatemala">Guatemala (+502)</option>-->
                                            <!--                            <option data-countryCode="224" value="Guinea">Guinea (+224)</option>-->
                                            <!--                            <option data-countryCode="245" value="Guinea">Guinea - Bissau (+245)</option>-->
                                            <!--                            <option data-countryCode="592" value="Guyana">Guyana (+592)</option>-->
                                            <!--                            <option data-countryCode="509" value="Haiti">Haiti (+509)</option>-->
                                            <!--                            <option data-countryCode="504" value="Honduras">Honduras (+504)</option>-->
                                            <!--                            <option data-countryCode="852" value="Hong Kong">Hong Kong (+852)</option>-->
                                            <!--                            <option data-countryCode="36" value="Hungary">Hungary (+36)</option>-->
                                            <!--                            <option data-countryCode="354" value="Iceland">Iceland (+354)</option>-->
                                            <!--                            <option data-countryCode="91" value="India">India (+91)</option>-->
                                            <!--                            <option data-countryCode="62" value="Indonesia">Indonesia (+62)</option>-->
                                            <!--                            <option data-countryCode="98" value="Iran">Iran (+98)</option>-->
                                            <!--                            <option data-countryCode="964" value="Iraq">Iraq (+964)</option>-->
                                            <!--                            <option data-countryCode="353" value="Ireland">Ireland (+353)</option>-->
                                            <!--                            <option data-countryCode="972" value="Israel">Israel (+972)</option>-->
                                            <!--                            <option data-countryCode="39" value="Italy">Italy (+39)</option>-->
                                            <!--                            <option data-countryCode="1876" value="Jamaica">Jamaica (+1876)</option>-->
                                            <!--                            <option data-countryCode="81" value="Japan">Japan (+81)</option>-->
                                            <!--                            <option data-countryCode="962" value="Jordan">Jordan (+962)</option>-->
                                            <!--                            <option data-countryCode="7" value="Kazakhstan">Kazakhstan (+7)</option>-->
                                            <!--                            <option data-countryCode="254" value="Kenya">Kenya (+254)</option>-->
                                            <!--                            <option data-countryCode="686" value="Kiribati">Kiribati (+686)</option>-->
                                            <!--                            <option data-countryCode="850" value="Korea North">Korea North (+850)</option>-->
                                            <!--                            <option data-countryCode="82" value="Korea South">Korea South (+82)</option>-->
                                            <!--                            <option data-countryCode="965" value="Kuwait">Kuwait (+965)</option>-->
                                            <!--                            <option data-countryCode="996" value="Kyrgyzstan">Kyrgyzstan (+996)</option>-->
                                            <!--                            <option data-countryCode="856" value="Laos">Laos (+856)</option>-->
                                            <!--                            <option data-countryCode="371" value="Latvia">Latvia (+371)</option>-->
                                            <!--                            <option data-countryCode="961" value="Lebanon">Lebanon (+961)</option>-->
                                            <!--                            <option data-countryCode="266" value="Lesotho">Lesotho (+266)</option>-->
                                            <!--                            <option data-countryCode="231" value="Liberia">Liberia (+231)</option>-->
                                            <!--                            <option data-countryCode="218" value="Libya">Libya (+218)</option>-->
                                            <!--                            <option data-countryCode="417" value="Liechtenstein">Liechtenstein (+417)</option>-->
                                            <!--                            <option data-countryCode="370" value="Lithuania">Lithuania (+370)</option>-->
                                            <!--                            <option data-countryCode="352" value="Luxembourg">Luxembourg (+352)</option>-->
                                            <!--                            <option data-countryCode="853" value="Macao">Macao (+853)</option>-->
                                            <!--                            <option data-countryCode="389" value="Macedonia">Macedonia (+389)</option>-->
                                            <!--                            <option data-countryCode="261" value="Madagascar">Madagascar (+261)</option>-->
                                            <!--                            <option data-countryCode="265" value="Malawi">Malawi (+265)</option>-->
                                            <!--                            <option data-countryCode="60" value="Malaysia">Malaysia (+60)</option>-->
                                            <!--                            <option data-countryCode="960" value="Maldives">Maldives (+960)</option>-->
                                            <!--                            <option data-countryCode="223" value="Mali">Mali (+223)</option>-->
                                            <!--                            <option data-countryCode="356" value="Malta">Malta (+356)</option>-->
                                            <!--                            <option data-countryCode="692" value="Marshall Islands">Marshall Islands (+692)</option>-->
                                            <!--                            <option data-countryCode="596" value="Martinique">Martinique (+596)</option>-->
                                            <!--                            <option data-countryCode="222" value="Mauritania">Mauritania (+222)</option>-->
                                            <!--                            <option data-countryCode="263" value="Mayotte">Mayotte (+269)</option>-->
                                            <!--                            <option data-countryCode="52" value="Mexico">Mexico (+52)</option>-->
                                            <!--                            <option data-countryCode="691" value="Micronesia">Micronesia (+691)</option>-->
                                            <!--                            <option data-countryCode="373" value="Moldova">Moldova (+373)</option>-->
                                            <!--                            <option data-countryCode="377" value="Monaco">Monaco (+377)</option>-->
                                            <!--                            <option data-countryCode="976" value="Mongolia">Mongolia (+976)</option>-->
                                            <!--                            <option data-countryCode="1664" value="Montserrat">Montserrat (+1664)</option>-->
                                            <!--                            <option data-countryCode="212" value="Morocco">Morocco (+212)</option>-->
                                            <!--                            <option data-countryCode="258" value="Mozambique">Mozambique (+258)</option>-->
                                            <!--                            <option data-countryCode="95" value="Myanmar">Myanmar (+95)</option>-->
                                            <!--                            <option data-countryCode="264" value="Namibia">Namibia (+264)</option>-->
                                            <!--                            <option data-countryCode="674" value="Nauru">Nauru (+674)</option>-->
                                            <!--                            <option data-countryCode="977" value="Nepal">Nepal (+977)</option>-->
                                            <!--                            <option data-countryCode="31" value="Netherlands">Netherlands (+31)</option>-->
                                            <!--                            <option data-countryCode="687" value="New Caledonia">New Caledonia (+687)</option>-->
                                            <!--                            <option data-countryCode="64" value="New Zealand">New Zealand (+64)</option>-->
                                            <!--                            <option data-countryCode="505" value="Nicaragua">Nicaragua (+505)</option>-->
                                            <!--                            <option data-countryCode="227" value="Niger">Niger (+227)</option>-->
                                            <!--                            <option data-countryCode="234" value="Nigeria">Nigeria (+234)</option>-->
                                            <!--                            <option data-countryCode="683" value="Niue">Niue (+683)</option>-->
                                            <!--                            <option data-countryCode="672" value="Norfolk Islands">Norfolk Islands (+672)</option>-->
                                            <!--                            <option data-countryCode="670" value="Northern Marianas">Northern Marianas (+670)</option>-->
                                            <!--                            <option data-countryCode="47" value="Norway">Norway (+47)</option>-->
                                            <!--                            <option data-countryCode="968" value="Oman">Oman (+968)</option>-->
                                            <!--                            <option data-countryCode="680" value="Palau">Palau (+680)</option>-->
                                            <!--                            <option data-countryCode="507" value="Panama">Panama (+507)</option>-->
                                            <!--                            <option data-countryCode="675" value="Papua New Guinea">Papua New Guinea (+675)</option>-->
                                            <!--                            <option data-countryCode="595" value="Paraguay">Paraguay (+595)</option>-->
                                            <!--                            <option data-countryCode="51" value="Peru">Peru (+51)</option>-->
                                            <!--                            <option data-countryCode="63" value="Philippines">Philippines (+63)</option>-->
                                            <!--                            <option data-countryCode="48" value="Poland">Poland (+48)</option>-->
                                            <!--                            <option data-countryCode="351" value="Portugal">Portugal (+351)</option>-->
                                            <!--                            <option data-countryCode="1787" value="Puerto Rico">Puerto Rico (+1787)</option>-->
                                            <!--                            <option data-countryCode="974" value="Qatar">Qatar (+974)</option>-->
                                            <!--                            <option data-countryCode="262" value="Reunion">Reunion (+262)</option>-->
                                            <!--                            <option data-countryCode="40" value="Romania">Romania (+40)</option>-->
                                            <!--                            <option data-countryCode="7" value="Russia">Russia (+7)</option>-->
                                            <!--                            <option data-countryCode="250" value="Rwanda">Rwanda (+250)</option>-->
                                            <!--                            <option data-countryCode="378" value="San Marino">San Marino (+378)</option>-->
                                            <!--                            <option data-countryCode="239" value="Sao Tome">Sao Tome &amp; Principe (+239)</option>-->
                                            <!--                            <option data-countryCode="966" value="Saudi Arabia">Saudi Arabia (+966)</option>-->
                                            <!--                            <option data-countryCode="221" value="Senegal">Senegal (+221)</option>-->
                                            <!--                            <option data-countryCode="381" value="Serbia">Serbia (+381)</option>-->
                                            <!--                            <option data-countryCode="248" value="Seychelles">Seychelles (+248)</option>-->
                                            <!--                            <option data-countryCode="232" value="Sierra Leone">Sierra Leone (+232)</option>-->
                                            <!--                            <option data-countryCode="65" value="Singapore">Singapore (+65)</option>-->
                                            <!--                            <option data-countryCode="421" value="Slovak Republic">Slovak Republic (+421)</option>-->
                                            <!--                            <option data-countryCode="386" value="Slovenia">Slovenia (+386)</option>-->
                                            <!--                            <option data-countryCode="677" value="Solomon Islands">Solomon Islands (+677)</option>-->
                                            <!--                            <option data-countryCode="252" value="Somalia">Somalia (+252)</option>-->
                                            <!--                            <option data-countryCode="27" value="South Africa">South Africa (+27)</option>-->
                                            <!--                            <option data-countryCode="34" value="Spain">Spain (+34)</option>-->
                                            <!--                            <option data-countryCode="94" value="Sri Lanka">Sri Lanka (+94)</option>-->
                                            <!--                            <option data-countryCode="290" value="St. Helena">St. Helena (+290)</option>-->
                                            <!--                            <option data-countryCode="1869" value="St. Kitts">St. Kitts (+1869)</option>-->
                                            <!--                            <option data-countryCode="1758" value="St. Lucia">St. Lucia (+1758)</option>-->
                                            <!--                            <option data-countryCode="249" value="Sudan">Sudan (+249)</option>-->
                                            <!--                            <option data-countryCode="597" value="Suriname">Suriname (+597)</option>-->
                                            <!--                            <option data-countryCode="268" value="Swaziland">Swaziland (+268)</option>-->
                                            <!--                            <option data-countryCode="46" value="Sweden">Sweden (+46)</option>-->
                                            <!--                            <option data-countryCode="41" value="Switzerland">Switzerland (+41)</option>-->
                                            <!--                            <option data-countryCode="963" value="Syria">Syria (+963)</option>-->
                                            <!--                            <option data-countryCode="886" value="Taiwan">Taiwan (+886)</option>-->
                                            <!--                            <option data-countryCode="7" value="Tajikstan">Tajikstan (+7)</option>-->
                                            <!--                            <option data-countryCode="66" value="Thailand">Thailand (+66)</option>-->
                                            <!--                            <option data-countryCode="228" value="Togo">Togo (+228)</option>-->
                                            <!--                            <option data-countryCode="676" value="Tonga">Tonga (+676)</option>-->
                                            <!--                            <option data-countryCode="1868" value="Trinidad &amp; Tobago">Trinidad &amp; Tobago (+1868)</option>-->
                                            <!--                            <option data-countryCode="216" value="Tunisia">Tunisia (+216)</option>-->
                                            <!--                            <option data-countryCode="90" value="Turkey">Turkey (+90)</option>-->
                                            <!--                            <option data-countryCode="7" value="Turkmenistan">Turkmenistan (+7)</option>-->
                                            <!--                            <option data-countryCode="993" value="Turkmenistan">Turkmenistan (+993)</option>-->
                                            <!--                            <option data-countryCode="1649" value="Turks">Turks &amp; Caicos Islands (+1649)</option>-->
                                            <!--                            <option data-countryCode="688" value="Tuvalu">Tuvalu (+688)</option>-->
                                            <!--                            <option data-countryCode="256" value="Uganda ">Uganda (+256)</option>-->
                                            <!--                            <option data-countryCode="44" value="UK">UK (+44)</option>-->
                                            <!--                            <option data-countryCode="380" value="Ukraine">Ukraine (+380)</option>-->
                                            <!--                            <option data-countryCode="971" value="United Arab Emirates">United Arab Emirates (+971)</option>-->
                                            <!--                            <option data-countryCode="598" value="Uruguay">Uruguay (+598)</option>-->
                                            <!--                            <option data-countryCode="1" value="USA">USA (+1)</option>-->
                                            <!--                            <option data-countryCode="7" value="Uzbekistan">Uzbekistan (+7)</option>-->
                                            <!--                            <option data-countryCode="678" value="Vanuatu">Vanuatu (+678)</option>-->
                                            <!--                            <option data-countryCode="379" value="Vatican City">Vatican City (+379)</option>-->
                                            <!--                            <option data-countryCode="58" value="Venezuela">Venezuela (+58)</option>-->
                                            <!--                            <option data-countryCode="84" value="Vietnam">Vietnam (+84)</option>-->
                                            <!--                            <option data-countryCode="1284" value="Virgin Islands">Virgin Islands - British (+1284)</option>-->
                                            <!--                            <option data-countryCode="1340" value="Virgin Islands">Virgin Islands - US (+1340)</option>-->
                                            <!--                            <option data-countryCode="681" value="Wallis &amp; Futuna">Wallis &amp; Futuna (+681)</option>-->
                                            <!--                            <option data-countryCode="969" value="Yemen (North)">Yemen (North)(+969)</option>-->
                                            <!--                            <option data-countryCode="967" value="Yemen (South)">Yemen (South)(+967)</option>-->
                                            <!--                            <option data-countryCode="260" value="Zambia">Zambia (+260)</option>-->
                                            <!--                            <option data-countryCode="263" value="Zimbabwe">Zimbabwe (+263)</option>-->
                                                                    
                                            <!--                    </select>-->
                                            <!--                    @error('country')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror-->
                                            <!--                </div>-->
                                                            
                                            <!--                <div class="from-control col-md-6">-->
                                            <!--                    <lable class="float-right">Student Phone</lable>-->
                                            <!--                    <div class="row">-->
                                            <!--                    <div class="col-3">-->
                                            <!--                        <input type="text" id="code" name="pre" readonly style="color:black" class="form-control" /> -->
                                            <!--                    </div>-->
                                            <!--                    <div class="col-9">-->
                                            <!--                        <input type="number"  name="phone" value="{{ old('phone') }}"  class="form-control"> -->
                                            <!--                    </div></div>-->
                                                                
                                            <!--                    @error('phone')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror-->
                                            <!--                </div>-->

                                            <!--            </div><br>-->

                                                        
                                            <!--            <div class="col-md-12 row">-->
                                                            
                                            <!--                <div class="from-control col-md-6">-->
                                            <!--                    <lable>Password</lable>-->
                                            <!--                    <input type="password"  name="password" value="{{ old('password') }}"  class="form-control"> -->
                                            <!--                    @error('password')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror-->
                                            <!--                </div>-->

                                            <!--                <div class="from-control col-md-6">-->
                                            <!--                    <lable>Confirm password</lable>-->
                                            <!--                    <input type="password"  name="confirm_password" value="{{ old('confirm_password') }}"  class="form-control">                 -->
                                            <!--                    @error('confirm_password')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror-->
                                            <!--                </div>-->

                                            <!--            </div><br>-->


                                            <!--            <div class="col-md-12 row">-->

                                            <!--                <div class="from-control col-md-6">-->
                                            <!--                    <lable>Upload Student photo</lable>  -->
                                            <!--                    <input type="file"  name="photo" id="photo"  class="form-control">-->
                                            <!--                    @error('photo')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror-->
                                            <!--                </div>-->

                                            <!--                <div class="from-control col-md-3">-->
                                            <!--                    <lable>Student Age</lable>-->
                                            <!--                    <input type="number"  name="age" value="{{ old('age') }}"  class="form-control">-->
                                            <!--                    @error('age')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror-->
                                            <!--                </div>-->

                                            <!--                <div class="from-control col-md-3">-->
                                            <!--                    <lable>Student Status</lable>-->
                                            <!--                    <select class="form-control basic"  name="status">-->
                                            <!--                        <option value="">Select Status</option>-->
                                            <!--                        <option value="1">Active</option>-->
                                            <!--                        <option value="0">Deactive</option>-->
                                            <!--                    </select>-->
                                            <!--                    @error('status')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror-->
                                            <!--                </div>-->

                                            <!--            </div><br>-->

                                            <!--            <div class="col-md-12 row">-->
                                                            <!-- <div class="from-control col-md-6"></div> -->
                                            <!--                <div class="from-control col-md-6">-->
                                            <!--                    <label for="example-email-input" class="col-sm-2 col-form-label"></label>-->
                                            <!--                    <div class="col-sm-10">-->
                                            <!--                    <img class="rounded " alt="100x100" width="120" src="{{ asset('assets/assets/img/NoProfile.png') }}" data-holder-rendered="true" id="updatephoto">-->
                                            <!--                    </div>-->
                                            <!--                </div>-->
                                            <!--            </div><br><hr>-->
                                                        
                                                        
                                            <!--            <div class="row mb-3">-->
                                            <!--                            <div class="col-sm-2"></div>-->
                                            <!--                            <div class="col-sm-3">-->
                                            <!--                                    <button type="submit" class="btn btn-outline-warning form-control waves-effect waves-light">-->
                                            <!--                                            Add Student<i class="ri-login-circle-fill align-middle ms-2"></i>-->
                                            <!--                                    </button>-->
                                            <!--                            </div>-->
                                            <!--                            <div class="col-sm-3">-->
                                            <!--                                <a href="{{ route('dashboard') }}">-->
                                            <!--                                    <button type="reset" class="btn btn-outline-dark form-control waves-effect waves-light">-->
                                            <!--                                            <i class="fas fa-undo ms-2"></i> &nbsp;&nbsp;Reset-->
                                            <!--                                    </button>-->
                                            <!--                                </a>-->
                                            <!--                            </div>-->
                                            <!--                    </div>-->
                                            <!--        </form>-->
                                            <!--    @else-->
                                            <!--    <span class="badge badge-danger font-15">&#129488; &nbsp;&nbsp;You can't add students, Need admin confirmation .....</span> -->
                                            <!--    @endif -->
                                                <!--end contetn-->
                                            <!--</div>-->

                                            <div class="tab-pane fade @if($errors->any()) show active @endif " id="underline-student" role="tabpanel" aria-labelledby="underline-student-tab">
                                                <!--start content--->
                                                 
                                                @if(Auth::user()->can('student-view'))
                                                <div class="row ml-3 mr-3 mb-1 mt-0 p-1 bg-light" style="border-left: 5px solid #f3a129">
                                                    <div class="col-md-6">
                                                    <p class="mb-0" style="font-size: 15px;margin-top: 8px;font-family: sans-serif;font-weight: bold;color:#2262c6">Archive Student List</p>
                                                    </div>
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="tblSearch1" placeholder="Search data.." class="form-control form-control-sm float-end mt-1" style="height: 35px;">
                                                    </div>
                                                </div>

                                                <div class="table-responsive mb-0">  
                                                <table id="list1"  class="table table-bordered table-hover" style="width: 100%;">
                                                   <thead id="thead" style="background-color: #f2f2f2;">
                                                        <tr>
                                                            <th>#</th>
                                                            <th id="search">Name</th>
                                                            <th id="search">Email</th>
                                                            <th id="search">Phone</th>
                                                            <th id="search">Status</th>
                                                            <th id="search">Added by</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php $i=1  @endphp
                                                    @foreach ($archive_stu as $row)
                                                        <tr>
                                                        <td><a href="{{ route('view.cor',$row->id) }}"><img class="rounded-circle" alt="200x200" width="300" src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):('https://bootdey.com/img/Content/avatar/avatar7.png') }}" data-holder-rendered="true"  style="width:40px;height:40px"></a></td>
                                                        <td>{{$row->name}}</td>
                                                     
                                                        <td>{{$row->email}}</td>
                                                        <td class="d-flex"><a href="https://api.whatsapp.com/send?phone={{$row->country_code.$row->phone}}" target="_blank"><i class="lab la-whatsapp font-20 text-success"></i></a><div>+{{$row->country_code}}{{$row->phone}}</div></td>
                                                        <td>   
                                                            @if($row->active_status == 0)
                                                            <span class="text-danger font-8">Deactive</span>
                                                            @else
                                                            <span class="text-success font-8">Active</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($row->entry_id == '')
                                                            <span class="badge badge-success" style="font-size:10px;">Online</span>
                                                            @else
                                                        
                                                            <span class="badge badge-primary" style="font-size:10px;"> 
                                                                {{ $row->user->name  }}
                                                            </span>
                                                            @endif
                                                        </td>
                                                        
                                                        <td class="d-flex">
                                                          <a  href="{{ route('view.stu', $row->id) }}" role="button"><i class="las la-eye font-25 text-info"></i></a>&nbsp;&nbsp;
                                                          <a class="undo-confirm" href="#" data-id="{{ route('archive.remove', $row->id) }}" role="button"><i class="las la-undo-alt font-25 text-danger"></i></a>
                                                        </td>
                                                         
                                                        </tr>
                                                        @php $i++  @endphp
                                                    @endforeach
                                                    </tbody>
                                                  
                                                </table></div> 
                                                @else
                                                <span class="badge badge-danger font-15">&#129488; &nbsp;&nbsp;You can't see the students, Need admin confirmation .....</span> 
                                                @endif 
                                                <!--end content-->
                                            </div>
                                                                                

                                        </div>
                                    </div>
                             </div>
    
       <!-- start page title -->
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
                                  <p>Do you really want to delete these records? This process cannot be undone.</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <a  class="btn btn-danger del">Delete</a>
                                </div>
                              </div>
                            </div>
                          </div> 
        <!--End of the modal---->


         <!-- undo / remove from archive list Modal HTML -->
                <div id="UndoModal" class="modal fade">
                    <div class="modal-dialog modal-confirm">
                        <div class="modal-content">
                        <div class="modal-header flex-column">
                            <div class="icon-box">
                            <i class="las la-undo-alt">&#xE5CD;</i>
                            </div>						
                            <h4 class="modal-title w-100">Are you sure?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Do you really want to reomve this student from archive list & transfer to normal student list ? This process cannot be undone.</p>
                        </div>
                        <div class="modal-footer justify-content-center">
                            
                            <a  class="btn btn-danger del">Remove from Archive list</a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                        </div>
                    </div>
                </div> 
        <!--End of the modal---->



@endsection

@section('script')
<script>


$( document ).ready(function() { 
  $(".delete-confirm").click(function(e){
     e.preventDefault();
     let id = $(this).attr("data-id");
     $('#DeleteModal').modal('show');
     $(".del").attr("href", id)
  });
});

$( document ).ready(function() { 
  $(".undo-confirm").click(function(e){
     e.preventDefault();
     let id = $(this).attr("data-id");
     $('#UndoModal').modal('show');
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

//this is the sweet alert notification
// @if(session('info'))
//      Swal.fire('Info', '{{ session('info') }}', 'info'); 
// @elseif (session('s_success'))
//         Swal.fire('Done', '{{ session('s_success') }}', 'success');
// @elseif (session('warning'))
//         Swal.fire('Danger', '{{ session('warning') }}', 'Danger');
//  @endif


    //this is for instant image showing for ptofile
    $("select[name=country]" ).change(function() {
               $('input#code').val('+'+$(this).find(':selected').attr('data-countryCode'));
            });

$(document).ready(function(){
            $('#photo').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#updatephoto').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    // end of the section
$(document).ready(function() {

            $('#list #thead th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" class="form-control" placeholder="'+title+'" />' );
            } );

            var table = $('#list').DataTable({
                "dom": 'rt<"bottom"il><"clear">',
                paging: false,
                bFilter: false,
                ordering: false,
                searching: true,
                fixedHeader: true,         
              });

              $('#tblSearch').on('input', function() {
                // Get the search term entered by the user
                var searchTerm = $(this).val();
                // Call the DataTables search() method to perform the search
                table.search(searchTerm).draw();
                });


                  // Search
            table.columns().every( function () {
                var that = this;
                $( 'input', this.header() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
            //table.buttons().container().appendTo('#list_wrapper .col-md-6:eq(0)');

            // var table1 = $('#trashed').DataTable({
            //     buttons: ['copy', 'excel', 'pdf','colvis']
            // });
            // table1.buttons().container().appendTo('#trashed_wrapper .col-md-6:eq(0)');
    } );


$(document).ready(function() {
                $('#list1 #thead th').each( function () {
                    var title = $(this).text();
                    $(this).html( '<input type="text" class="form-control" placeholder="'+title+'" />' );
                } );

                var table = $('#list1').DataTable({
                    "dom": 'rt<"bottom"il><"clear">',
                    paging: false,
                    bFilter: false,
                    ordering: false,
                    searching: true,
                    fixedHeader: true, 
                });

                $('#tblSearch1').on('input', function() {
                // Get the search term entered by the user
                var searchTerm = $(this).val();
                // Call the DataTables search() method to perform the search
                table.search(searchTerm).draw();
                });

                    // Search
                table.columns().every( function () {
                    var that = this;
                    $( 'input', this.header() ).on( 'keyup change', function () {
                        if ( that.search() !== this.value ) {
                            that
                                .search( this.value )
                                .draw();
                        }
                    } );
                } );
                //table.buttons().container().appendTo('#list_wrapper .col-md-6:eq(0)');

                // var table1 = $('#trashed').DataTable({
                //     buttons: ['copy', 'excel', 'pdf','colvis']
                // });
                // table1.buttons().container().appendTo('#trashed_wrapper .col-md-6:eq(0)');
         });







</script>
@endsection 