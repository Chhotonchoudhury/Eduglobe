@extends('layouts.base')
@section('content')

<!-- start page title -->
<div class="widget-content widget-content-area">
    @if(Auth::user()->can('student-update'))
    <form method="POST" action="{{ route('update.stu') }}" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="id" value="{{ $student->id }}">
        <div class="col-md-12 row">

            <div class="from-control col-md-6">
                <lable>Student Name</lable>
                <input type="text" name="name" value="{{ old('name' , $student->name) }}" class="form-control">
                @error('name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                </ul>@enderror
            </div>

            <div class="from-control col-md-6">
                <lable>Student Country</lable>

                <select class="form-control basic" id="country" name="country">
                    <option value="">Select Country</option>
                    <option data-countryCode="213" value="Algeria" @if($student->country == 'Algeria') selected
                        @endif>Algeria (+213)</option>
                    <option data-countryCode="376" value="Andorra" @if($student->country == 'Andorra') selected @endif
                        >Andorra (+376)</option>
                    <option data-countryCode="244" value="Angola" @if($student->country == 'Angola') selected @endif
                        >Angola (+244)</option>
                    <option data-countryCode="1264" value="Anguilla" @if($student->country == 'Anguilla') selected
                        @endif >Anguilla (+1264)</option>
                    <option data-countryCode="1268" value="Antigua &amp; Barbuda" @if($student->country == 'Antigua
                        Barbuda') selected @endif >Antigua &amp; Barbuda (+1268)</option>
                    <option data-countryCode="54" value="Argentina" @if($student->country == 'Argentina') selected
                        @endif >Argentina (+54)</option>
                    <option data-countryCode="374" value="Armenia" @if($student->country == 'Armenia') selected @endif
                        >Armenia (+374)</option>
                    <option data-countryCode="297" value="Aruba" @if($student->country == 'Aruba') selected @endif
                        >Aruba (+297)</option>
                    <option data-countryCode="61" value="Australia" @if($student->country == 'Australia') selected
                        @endif >Australia (+61)</option>
                    <option data-countryCode="43" value="Austria" @if($student->country == 'Austria') selected @endif
                        >Austria (+43)</option>
                    <option data-countryCode="994" value="Azerbaijan" @if($student->country == 'Azerbaijan') selected
                        @endif >Azerbaijan (+994)</option>
                    <option data-countryCode="1242" value="Bahamas" @if($student->country == 'Bahamas') selected @endif
                        >Bahamas (+1242)</option>
                    <option data-countryCode="973" value="Bahrain" @if($student->country == 'Bahrain') selected @endif
                        >Bahrain (+973)</option>
                    <option data-countryCode="880" value="Bangladesh" @if($student->country == 'Bangladesh') selected
                        @endif >Bangladesh (+880)</option>
                    <option data-countryCode="1246" value="Barbados" @if($student->country == 'Barbados') selected
                        @endif >Barbados (+1246)</option>
                    <option data-countryCode="375" value="Belarus" @if($student->country == 'Belarus') selected @endif
                        >Belarus (+375)</option>
                    <option data-countryCode="32" value="Belgium" @if($student->country == 'Belgium') selected @endif
                        >Belgium (+32)</option>
                    <option data-countryCode="501" value="Belize" @if($student->country == 'Belize') selected @endif
                        >Belize (+501)</option>
                    <option data-countryCode="229" value="Benin" @if($student->country == 'Benin') selected @endif
                        >Benin (+229)</option>
                    <option data-countryCode="1441" value="Bermuda" @if($student->country == 'Bermuda') selected @endif
                        >Bermuda (+1441)</option>
                    <option data-countryCode="975" value="Bhutan" @if($student->country == 'Bhutan') selected @endif
                        >Bhutan (+975)</option>
                    <option data-countryCode="591" value="Bolivia" @if($student->country == 'Bolivia') selected @endif
                        >Bolivia (+591)</option>
                    <option data-countryCode="387" value="Bosnia Herzegovina" @if($student->country == 'Bosnia
                        Herzegovina') selected @endif>Bosnia Herzegovina (+387)</option>
                    <option data-countryCode="267" value="Botswana" @if($student->country == 'Botswana') selected @endif
                        >Botswana (+267)</option>
                    <option data-countryCode="55" value="Brazil" @if($student->country == 'Brazil') selected @endif
                        >Brazil (+55)</option>
                    <option data-countryCode="673" value="Brunei" @if($student->country == 'Brunei') selected @endif
                        >Brunei (+673)</option>
                    <option data-countryCode="359" value="Bulgaria" @if($student->country == 'Bulgaria') selected @endif
                        >Bulgaria (+359)</option>
                    <option data-countryCode="226" value="Bulgaria" @if($student->country == 'Bulgaria') selected @endif
                        >Bulgaria (+226)</option>
                    <option data-countryCode="257" value="Burundi" @if($student->country == 'Burundi') selected @endif
                        >Burundi (+257)</option>
                    <option data-countryCode="855" value="Cambodia" @if($student->country == 'Cambodia') selected @endif
                        >Cambodia (+855)</option>
                    <option data-countryCode="237" value="Cameroon" @if($student->country == 'Cameroon') selected @endif
                        >Cameroon (+237)</option>
                    <option data-countryCode="1" value="Canada" @if($student->country == 'Canada') selected @endif
                        >Canada (+1)</option>
                    <option data-countryCode="238" value="Cape Verde Islands" @if($student->country == 'Cape Verde
                        Islands') selected @endif >Cape Verde Islands (+238)</option>
                    <option data-countryCode="1345" value="Cayman Islands" @if($student->country == 'Cayman Islands')
                        selected @endif >Cayman Islands (+1345)</option>
                    <option data-countryCode="236" value="Central African Republic" @if($student->country == 'Central
                        African Republic') selected @endif >Central African Republic (+236)</option>
                    <option data-countryCode="56" value="Chile" @if($student->country == 'Chile') selected @endif >Chile
                        (+56)</option>
                    <option data-countryCode="86" value="China" @if($student->country == 'China') selected @endif >China
                        (+86)</option>
                    <option data-countryCode="57" value="Colombia" @if($student->country == 'Colombia') selected @endif
                        >Colombia (+57)</option>
                    <option data-countryCode="269" value="Comoros" @if($student->country == 'Comoros') selected @endif
                        >Comoros (+269)</option>
                    <option data-countryCode="242" value="Congo" @if($student->country == 'Congo') selected @endif
                        >Congo (+242)</option>
                    <option data-countryCode="682" value="Cook Islands" @if($student->country == 'Cook Islands')
                        selected @endif >Cook Islands (+682)</option>
                    <option data-countryCode="506" value="Costa Rica" @if($student->country == 'Costa Rica') selected
                        @endif >Costa Rica (+506)</option>
                    <option data-countryCode="385" value="Croatia" @if($student->country == 'Croatia') selected @endif
                        >Croatia (+385)</option>
                    <option data-countryCode="53" value="Cuba" @if($student->country == 'Cuba') selected @endif >Cuba
                        (+53)</option>
                    <option data-countryCode="90392" value="Cyprus North" @if($student->country == 'Cyprus North')
                        selected @endif>Cyprus North (+90392)</option>
                    <option data-countryCode="357" value="Cyprus South" @if($student->country == 'Cyprus South')
                        selected @endif >Cyprus South (+357)</option>
                    <option data-countryCode="42" value="Czech Republic" @if($student->country == 'Czech Republic')
                        selected @endif >Czech Republic (+42)</option>
                    <option data-countryCode="45" value="Denmark" @if($student->country == 'Denmark') selected @endif
                        >Denmark (+45)</option>
                    <option data-countryCode="253" value="Djibouti" @if($student->country == 'Djibouti') selected @endif
                        >Djibouti (+253)</option>
                    <option data-countryCode="1809" value="Dominica" @if($student->country == 'Dominica') selected
                        @endif >Dominica (+1809)</option>
                    <option data-countryCode="1809" value="Dominican Republic" @if($student->country == 'Dominican
                        Republic') selected @endif >Dominican Republic (+1809)</option>
                    <option data-countryCode="593" value="Ecuador" @if($student->country == 'Ecuador') selected @endif
                        >Ecuador (+593)</option>
                    <option data-countryCode="20" value="Egypt" @if($student->country == 'Egypt') selected @endif >Egypt
                        (+20)</option>
                    <option data-countryCode="503" value="El Salvador" @if($student->country == 'El Salvador') selected
                        @endif >El Salvador (+503)</option>
                    <option data-countryCode="240" value="Equatorial Guinea" @if($student->country == 'Equatorial
                        Guinea') selected @endif >Equatorial Guinea (+240)</option>
                    <option data-countryCode="291" value="Eritrea" @if($student->country == 'Eritrea') selected @endif
                        >Eritrea (+291)</option>
                    <option data-countryCode="372" value="Estonia" @if($student->country == 'Estonia') selected @endif
                        >Estonia (+372)</option>
                    <option data-countryCode="251" value="Ethiopia" @if($student->country == 'Ethiopia') selected @endif
                        >Ethiopia (+251)</option>
                    <option data-countryCode="500" value="Falkland Islands" @if($student->country == 'Falkland Islands')
                        selected @endif >Falkland Islands (+500)</option>
                    <option data-countryCode="298" value="Faroe Islands" @if($student->country == 'Faroe Islands')
                        selected @endif >Faroe Islands (+298)</option>
                    <option data-countryCode="679" value="Fiji" @if($student->country == 'Fiji') selected @endif >Fiji
                        (+679)</option>
                    <option data-countryCode="358" value="Finland" @if($student->country == 'Finland') selected @endif
                        >Finland (+358)</option>
                    <option data-countryCode="33" value="France" @if($student->country == 'France') selected @endif
                        >France (+33)</option>
                    <option data-countryCode="594" value="French Guiana" @if($student->country == 'French Guiana')
                        selected @endif >French Guiana (+594)</option>
                    <option data-countryCode="689" value="French Polynesia" @if($student->country == 'French Polynesia')
                        selected @endif >French Polynesia (+689)</option>
                    <option data-countryCode="241" value="Gabon" @if($student->country == 'Gabon') selected @endif
                        >Gabon (+241)</option>
                    <option data-countryCode="220" value="Gambia" @if($student->country == 'Gambia') selected @endif
                        >Gambia (+220)</option>
                    <option data-countryCode="7880" value="Georgia" @if($student->country == 'Georgia') selected @endif
                        >Georgia (+7880)</option>
                    <option data-countryCode="49" value="Germany" @if($student->country == 'Germany') selected @endif
                        >Germany (+49)</option>
                    <option data-countryCode="233" value="Ghana" @if($student->country == 'Ghana') selected @endif
                        >Ghana (+233)</option>
                    <option data-countryCode="350" value="Gibraltar" @if($student->country == 'Gibraltar') selected
                        @endif >Gibraltar (+350)</option>
                    <option data-countryCode="30" value="Greece" @if($student->country == 'Greece') selected @endif
                        >Greece (+30)</option>
                    <option data-countryCode="299" value="Greenland" @if($student->country == 'Greenland') selected
                        @endif >Greenland (+299)</option>
                    <option data-countryCode="1473" value="Grenada" @if($student->country == 'Grenada') selected @endif
                        >Grenada (+1473)</option>
                    <option data-countryCode="590" value="Guadeloupe" @if($student->country == 'Guadeloupe') selected
                        @endif >Guadeloupe (+590)</option>
                    <option data-countryCode="671" value="Guam" @if($student->country == 'Guam') selected @endif >Guam
                        (+671)</option>
                    <option data-countryCode="502" value="Guatemala" @if($student->country == 'Guatemala') selected
                        @endif >Guatemala (+502)</option>
                    <option data-countryCode="224" value="Guinea" @if($student->country == 'Guinea') selected @endif
                        >Guinea (+224)</option>
                    <option data-countryCode="245" value="Guinea" @if($student->country == 'Guinea') selected @endif
                        >Guinea - Bissau (+245)</option>
                    <option data-countryCode="592" value="Guyana" @if($student->country == 'Guyana') selected @endif
                        >Guyana (+592)</option>
                    <option data-countryCode="509" value="Haiti" @if($student->country == 'Haiti') selected @endif
                        >Haiti (+509)</option>
                    <option data-countryCode="504" value="Honduras" @if($student->country == 'Honduras') selected @endif
                        >Honduras (+504)</option>
                    <option data-countryCode="852" value="Hong Kong" @if($student->country == 'Hong Kong') selected
                        @endif >Hong Kong (+852)</option>
                    <option data-countryCode="36" value="Hungary" @if($student->country == 'Hungary') selected @endif
                        >Hungary (+36)</option>
                    <option data-countryCode="354" value="Iceland" @if($student->country == 'Iceland') selected @endif
                        >Iceland (+354)</option>
                    <option data-countryCode="91" value="India" @if($student->country == 'India') selected @endif>India
                        (+91)</option>
                    <option data-countryCode="62" value="Indonesia" @if($student->country == 'Indonesia') selected
                        @endif >Indonesia (+62)</option>
                    <option data-countryCode="98" value="Iran" @if($student->country == 'Iran') selected @endif >Iran
                        (+98)</option>
                    <option data-countryCode="964" value="Iraq" @if($student->country == 'Iraq') selected @endif >Iraq
                        (+964)</option>
                    <option data-countryCode="353" value="Ireland" @if($student->country == 'Ireland') selected @endif
                        >Ireland (+353)</option>
                    <option data-countryCode="972" value="Israel" @if($student->country == 'Israel') selected @endif
                        >Israel (+972)</option>
                    <option data-countryCode="39" value="Italy" @if($student->country == 'Italy') selected @endif >Italy
                        (+39)</option>
                    <option data-countryCode="1876" value="Jamaica" @if($student->country == 'Jamaica') selected @endif
                        >Jamaica (+1876)</option>
                    <option data-countryCode="81" value="Japan" @if($student->country == 'Japan') selected @endif >Japan
                        (+81)</option>
                    <option data-countryCode="962" value="Jordan" @if($student->country == 'Jordan') selected @endif
                        >Jordan (+962)</option>
                    <option data-countryCode="7" value="Kazakhstan" @if($student->country == 'Kazakhstan') selected
                        @endif >Kazakhstan (+7)</option>
                    <option data-countryCode="254" value="Kenya" @if($student->country == 'Kenya') selected @endif
                        >Kenya (+254)</option>
                    <option data-countryCode="686" value="Kiribati" @if($student->country == 'Kiribati') selected @endif
                        >Kiribati (+686)</option>
                    <option data-countryCode="850" value="Korea North" @if($student->country == 'Korea North') selected
                        @endif >Korea North (+850)</option>
                    <option data-countryCode="82" value="Korea South" @if($student->country == 'Korea South') selected
                        @endif >Korea South (+82)</option>
                    <option data-countryCode="965" value="Kuwait" @if($student->country == 'Kuwait') selected @endif
                        >Kuwait (+965)</option>
                    <option data-countryCode="996" value="Kyrgyzstan" @if($student->country == 'Kyrgyzstan') selected
                        @endif >Kyrgyzstan (+996)</option>
                    <option data-countryCode="856" value="Laos" @if($student->country == 'Laos') selected @endif >Laos
                        (+856)</option>
                    <option data-countryCode="371" value="Latvia" @if($student->country == 'Latvia') selected @endif
                        >Latvia (+371)</option>
                    <option data-countryCode="961" value="Lebanon" @if($student->country == 'Lebanon') selected @endif
                        >Lebanon (+961)</option>
                    <option data-countryCode="266" value="Lesotho" @if($student->country == 'Lesotho') selected @endif
                        >Lesotho (+266)</option>
                    <option data-countryCode="231" value="Liberia" @if($student->country == 'Liberia') selected @endif
                        >Liberia (+231)</option>
                    <option data-countryCode="218" value="Libya" @if($student->country == 'Libya') selected @endif
                        >Libya (+218)</option>
                    <option data-countryCode="417" value="Liechtenstein" @if($student->country == 'Liechtenstein')
                        selected @endif >Liechtenstein (+417)</option>
                    <option data-countryCode="370" value="Lithuania" @if($student->country == 'Lithuania') selected
                        @endif >Lithuania (+370)</option>
                    <option data-countryCode="352" value="Luxembourg" @if($student->country == 'Luxembourg') selected
                        @endif >Luxembourg (+352)</option>
                    <option data-countryCode="853" value="Macao" @if($student->country == 'Macao') selected @endif
                        >Macao (+853)</option>
                    <option data-countryCode="389" value="Macedonia" @if($student->country == 'Macedonia') selected
                        @endif >Macedonia (+389)</option>
                    <option data-countryCode="261" value="Madagascar" @if($student->country == 'Madagascar') selected
                        @endif >Madagascar (+261)</option>
                    <option data-countryCode="265" value="Malawi" @if($student->country == 'Malawi') selected @endif
                        >Malawi (+265)</option>
                    <option data-countryCode="60" value="Malaysia" @if($student->country == 'Malaysia') selected @endif
                        >Malaysia (+60)</option>
                    <option data-countryCode="960" value="Maldives" @if($student->country == 'Maldives') selected @endif
                        >Maldives (+960)</option>
                    <option data-countryCode="223" value="Mali" @if($student->country == 'Mali') selected @endif >Mali
                        (+223)</option>
                    <option data-countryCode="356" value="Malta" @if($student->country == 'Malta') selected @endif
                        >Malta (+356)</option>
                    <option data-countryCode="692" value="Marshall Islands" @if($student->country == 'Marshall Islands')
                        selected @endif >Marshall Islands (+692)</option>
                    <option data-countryCode="596" value="Martinique" @if($student->country == 'Martinique') selected
                        @endif >Martinique (+596)</option>
                    <option data-countryCode="222" value="Mauritania" @if($student->country == 'Mauritania') selected
                        @endif >Mauritania (+222)</option>
                    <option data-countryCode="263" value="Mayotte" @if($student->country == 'Mayotte') selected @endif
                        >Mayotte (+269)</option>
                    <option data-countryCode="52" value="Mexico" @if($student->country == 'Mexico') selected @endif
                        >Mexico (+52)</option>
                    <option data-countryCode="691" value="Micronesia" @if($student->country == 'Micronesia') selected
                        @endif >Micronesia (+691)</option>
                    <option data-countryCode="373" value="Moldova" @if($student->country == 'Moldova') selected @endif
                        >Moldova (+373)</option>
                    <option data-countryCode="377" value="Monaco" @if($student->country == 'Monaco') selected @endif
                        >Monaco (+377)</option>
                    <option data-countryCode="976" value="Mongolia" @if($student->country == 'Mongolia') selected @endif
                        >Mongolia (+976)</option>
                    <option data-countryCode="1664" value="Montserrat" @if($student->country == 'Montserrat') selected
                        @endif >Montserrat (+1664)</option>
                    <option data-countryCode="212" value="Morocco" @if($student->country == 'Morocco') selected @endif
                        >Morocco (+212)</option>
                    <option data-countryCode="258" value="Mozambique" @if($student->country == 'Mozambique') selected
                        @endif >Mozambique (+258)</option>
                    <option data-countryCode="95" value="Myanmar" @if($student->country == 'Myanmar') selected @endif
                        >Myanmar (+95)</option>
                    <option data-countryCode="264" value="Namibia" @if($student->country == 'Namibia') selected @endif
                        >Namibia (+264)</option>
                    <option data-countryCode="674" value="Nauru" @if($student->country == 'Nauru') selected @endif
                        >Nauru (+674)</option>
                    <option data-countryCode="977" value="Nepal" @if($student->country == 'Nepal') selected @endif
                        >Nepal (+977)</option>
                    <option data-countryCode="31" value="Netherlands" @if($student->country == 'Netherlands') selected
                        @endif >Netherlands (+31)</option>
                    <option data-countryCode="687" value="New Caledonia" @if($student->country == 'New Caledonia')
                        selected @endif >New Caledonia (+687)</option>
                    <option data-countryCode="64" value="New Zealand" @if($student->country == 'New Zealand') selected
                        @endif >New Zealand (+64)</option>
                    <option data-countryCode="505" value="Nicaragua" @if($student->country == 'Nicaragua') selected
                        @endif >Nicaragua (+505)</option>
                    <option data-countryCode="227" value="Niger" @if($student->country == 'Niger') selected @endif
                        >Niger (+227)</option>
                    <option data-countryCode="234" value="Nigeria" @if($student->country == 'Nigeria') selected @endif
                        >Nigeria (+234)</option>
                    <option data-countryCode="683" value="Niue" @if($student->country == 'Niue') selected @endif >Niue
                        (+683)</option>
                    <option data-countryCode="672" value="Norfolk Islands" @if($student->country == 'Norfolk Islands')
                        selected @endif >Norfolk Islands (+672)</option>
                    <option data-countryCode="670" value="Northern Marianas" @if($student->country == 'Northern
                        Marianas') selected @endif >Northern Marianas (+670)</option>
                    <option data-countryCode="47" value="Norway" @if($student->country == 'Norway') selected @endif
                        >Norway (+47)</option>
                    <option data-countryCode="968" value="Oman" @if($student->country == 'Oman') selected @endif >Oman
                        (+968)</option>
                    <option data-countryCode="680" value="Palau" @if($student->country == 'Palau') selected @endif
                        >Palau (+680)</option>
                    <option data-countryCode="507" value="Panama" @if($student->country == 'Panama') selected @endif
                        >Panama (+507)</option>
                    <option data-countryCode="675" value="Papua New Guinea" @if($student->country == 'Papua New Guinea')
                        selected @endif >Papua New Guinea (+675)</option>
                    <option data-countryCode="595" value="Paraguay" @if($student->country == 'Paraguay') selected @endif
                        >Paraguay (+595)</option>
                    <option data-countryCode="51" value="Peru" @if($student->country == 'Peru') selected @endif >Peru
                        (+51)</option>
                    <option data-countryCode="63" value="Philippines" @if($student->country == 'Philippines') selected
                        @endif >Philippines (+63)</option>
                    <option data-countryCode="48" value="Poland" @if($student->country == 'Poland') selected @endif
                        >Poland (+48)</option>
                    <option data-countryCode="351" value="Portugal" @if($student->country == 'Portugal') selected @endif
                        >Portugal (+351)</option>
                    <option data-countryCode="1787" value="Puerto Rico" @if($student->country == 'Puerto Rico') selected
                        @endif >Puerto Rico (+1787)</option>
                    <option data-countryCode="974" value="Qatar" @if($student->country == 'Qatar') selected @endif
                        >Qatar (+974)</option>
                    <option data-countryCode="262" value="Reunion" @if($student->country == 'Reunion') selected @endif
                        >Reunion (+262)</option>
                    <option data-countryCode="40" value="Romania" @if($student->country == 'Romania') selected @endif
                        >Romania (+40)</option>
                    <option data-countryCode="7" value="Russia" @if($student->country == 'Russia') selected @endif
                        >Russia (+7)</option>
                    <option data-countryCode="250" value="Rwanda" @if($student->country == 'Rwanda') selected @endif
                        >Rwanda (+250)</option>
                    <option data-countryCode="378" value="San Marino" @if($student->country == 'San Marino') selected
                        @endif >San Marino (+378)</option>
                    <option data-countryCode="239" value="Sao Tome" @if($student->country == 'Sao Tome') selected @endif
                        >Sao Tome &amp; Principe (+239)</option>
                    <option data-countryCode="966" value="Saudi Arabia" @if($student->country == 'Saudi Arabia')
                        selected @endif >Saudi Arabia (+966)</option>
                    <option data-countryCode="221" value="Senegal" @if($student->country == 'Senegal') selected @endif
                        >Senegal (+221)</option>
                    <option data-countryCode="381" value="Serbia" @if($student->country == 'Serbia') selected @endif
                        >Serbia (+381)</option>
                    <option data-countryCode="248" value="Seychelles" @if($student->country == 'Seychelles') selected
                        @endif >Seychelles (+248)</option>
                    <option data-countryCode="232" value="Sierra Leone" @if($student->country == 'Sierra Leone')
                        selected @endif >Sierra Leone (+232)</option>
                    <option data-countryCode="65" value="Singapore" @if($student->country == 'Singapore') selected
                        @endif >Singapore (+65)</option>
                    <option data-countryCode="421" value="Slovak Republic" @if($student->country == 'Slovak Republic')
                        selected @endif >Slovak Republic (+421)</option>
                    <option data-countryCode="386" value="Slovenia" @if($student->country == 'Slovenia') selected @endif
                        >Slovenia (+386)</option>
                    <option data-countryCode="677" value="Solomon Islands" @if($student->country == 'Solomon Islands')
                        selected @endif >Solomon Islands (+677)</option>
                    <option data-countryCode="252" value="Somalia" @if($student->country == 'Somalia') selected @endif
                        >Somalia (+252)</option>
                    <option data-countryCode="27" value="South Africa" @if($student->country == 'South Africa') selected
                        @endif >South Africa (+27)</option>
                    <option data-countryCode="34" value="Spain" @if($student->country == 'Spain') selected @endif >Spain
                        (+34)</option>
                    <option data-countryCode="94" value="Sri Lanka" @if($student->country == 'Sri Lanka') selected
                        @endif >Sri Lanka (+94)</option>
                    <option data-countryCode="290" value="St. Helena" @if($student->country == 'St. Helena') selected
                        @endif >St. Helena (+290)</option>
                    <option data-countryCode="1869" value="St. Kitts" @if($student->country == 'St. Kitts') selected
                        @endif >St. Kitts (+1869)</option>
                    <option data-countryCode="1758" value="St. Lucia" @if($student->country == 'St. Lucia') selected
                        @endif >St. Lucia (+1758)</option>
                    <option data-countryCode="249" value="Sudan" @if($student->country == 'Sudan') selected @endif
                        >Sudan (+249)</option>
                    <option data-countryCode="597" value="Suriname" @if($student->country == 'Suriname') selected @endif
                        >Suriname (+597)</option>
                    <option data-countryCode="268" value="Swaziland" @if($student->country == 'Swaziland') selected
                        @endif >Swaziland (+268)</option>
                    <option data-countryCode="46" value="Sweden" @if($student->country == 'Sweden') selected @endif
                        >Sweden (+46)</option>
                    <option data-countryCode="41" value="Switzerland" @if($student->country == 'Switzerland') selected
                        @endif >Switzerland (+41)</option>
                    <option data-countryCode="963" value="Syria" @if($student->country == 'Syria') selected @endif
                        >Syria (+963)</option>
                    <option data-countryCode="886" value="Taiwan" @if($student->country == 'Taiwan') selected @endif
                        >Taiwan (+886)</option>
                    <option data-countryCode="7" value="Tajikstan" @if($student->country == 'Tajikstan') selected @endif
                        >Tajikstan (+7)</option>
                    <option data-countryCode="66" value="Thailand" @if($student->country == 'Thailand') selected @endif
                        >Thailand (+66)</option>
                    <option data-countryCode="228" value="Togo" @if($student->country == 'Togo') selected @endif >Togo
                        (+228)</option>
                    <option data-countryCode="676" value="Tonga" @if($student->country == 'Tonga') selected @endif
                        >Tonga (+676)</option>
                    <option data-countryCode="1868" value="Trinidad &amp; Tobago" @if($student->country == 'Trinidad
                        &amp; Tobago') selected @endif >Trinidad &amp; Tobago (+1868)</option>
                    <option data-countryCode="216" value="Tunisia" @if($student->country == 'Tunisia') selected @endif
                        >Tunisia (+216)</option>
                    <option data-countryCode="90" value="Turkey" @if($student->country == 'Turkey') selected @endif
                        >Turkey (+90)</option>
                    <option data-countryCode="7" value="Turkmenistan" @if($student->country == 'Turkmenistan') selected
                        @endif >Turkmenistan (+7)</option>
                    <option data-countryCode="993" value="Turkmenistan" @if($student->country == 'Turkmenistan')
                        selected @endif >Turkmenistan (+993)</option>
                    <option data-countryCode="1649" value="Turks" @if($student->country == 'Turks') selected @endif
                        >Turks &amp; Caicos Islands (+1649)</option>
                    <option data-countryCode="688" value="Tuvalu" @if($student->country == 'Tuvalu') selected @endif
                        >Tuvalu (+688)</option>
                    <option data-countryCode="256" value="Uganda " @if($student->country == 'Uganda') selected @endif
                        >Uganda (+256)</option>
                    <option data-countryCode="44" value="UK" @if($student->country == 'UK') selected @endif >UK (+44)
                    </option>
                    <option data-countryCode="380" value="Ukraine" @if($student->country == 'Ukraine') selected @endif
                        >Ukraine (+380)</option>
                    <option data-countryCode="971" value="United Arab Emirates" @if($student->country == 'United Arab
                        Emirates') selected @endif >United Arab Emirates (+971)</option>
                    <option data-countryCode="598" value="Uruguay" @if($student->country == 'Uruguay') selected @endif
                        >Uruguay (+598)</option>
                    <option data-countryCode="1" value="USA" @if($student->country == 'USA') selected @endif >USA (+1)
                    </option>
                    <option data-countryCode="7" value="Uzbekistan" @if($student->country == 'Uzbekistan') selected
                        @endif >Uzbekistan (+7)</option>
                    <option data-countryCode="678" value="Vanuatu" @if($student->country == 'Vanuatu') selected @endif
                        >Vanuatu (+678)</option>
                    <option data-countryCode="379" value="Vatican City" @if($student->country == 'Vatican City')
                        selected @endif >Vatican City (+379)</option>
                    <option data-countryCode="58" value="Venezuela" @if($student->country == 'Venezuela') selected
                        @endif >Venezuela (+58)</option>
                    <option data-countryCode="84" value="Vietnam" @if($student->country == 'Vietnam') selected @endif
                        >Vietnam (+84)</option>
                    <option data-countryCode="1284" value="Virgin Islands" @if($student->country == 'Virgin Islands')
                        selected @endif >Virgin Islands - British (+1284)</option>
                    <option data-countryCode="1340" value="Virgin Islands" @if($student->country == 'Virgin Islands')
                        selected @endif >Virgin Islands - US (+1340)</option>
                    <option data-countryCode="681" value="Wallis &amp; Futuna" @if($student->country == 'Wallis &amp;
                        Futuna') selected @endif >Wallis &amp; Futuna (+681)</option>
                    <option data-countryCode="969" value="Yemen (North)" @if($student->country == 'Yemen (North)')
                        selected @endif >Yemen (North)(+969)</option>
                    <option data-countryCode="967" value="Yemen (South)" @if($student->country == 'Yemen (South)')
                        selected @endif >Yemen (South)(+967)</option>
                    <option data-countryCode="260" value="Zambia" @if($student->country == 'Zambia') selected @endif
                        >Zambia (+260)</option>
                    <option data-countryCode="263" value="Zimbabwe" @if($student->country == 'Zimbabwe') selected @endif
                        >Zimbabwe (+263)</option>

                </select>
                <!-- <input type="text"  name="country" value="{{ old('country' , $student->country) }}"  class="form-control"> -->
                @error('country')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                </ul>@enderror
            </div>


        </div><br>


        <div class="col-md-12 row">

            <div class="from-control col-md-6">
                <lable>Student Phone</lable>
                <div class="row">
                    <div class="col-3">
                        <input type="text" id="code" name="pre" readonly style="color:black" class="form-control" />
                    </div>
                    <div class="col-9">
                        <input type="number" name="phone" value="{{ old('phone' , $student->phone) }}"
                            class="form-control">
                    </div>
                </div>

                @error('phone')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                </ul>@enderror
            </div>
            <!-- <div class="from-control col-md-6">
                                                     <lable>Student Phone</lable>
                                                     <input type="number"  name="phone" value="{{ old('phone' , $student->phone) }}"  class="form-control"> 
                                                     @error('phone')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                                 </div> -->

            <div class="from-control col-md-6">
                <lable>Student Email</lable>
                <input type="email" name="email" value="{{ old('email' , $student->email) }}" class="form-control"
                    readonly="">
                @error('email')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                </ul>@enderror
            </div>

        </div><br>

        <!--<div class="col-md-12 row">-->

        <!--    <div class="from-control col-md-6">-->
        <!--         <lable>Student current Password</lable>-->
        <!--         <input type="password"  name="password" value="{{ old('password') }}"  class="form-control"> -->
        <!--         @error('password')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror-->
        <!--     </div>-->

        <!--     <div class="from-control col-md-6">-->
        <!--         <lable>Confirm password</lable>-->
        <!--         <input type="password"  name="confirm_password" value="{{ old('confirm_password') }}"  class="form-control">                 -->
        <!--         @error('confirm_password')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror-->
        <!--     </div>-->

        <!--</div><br>-->


        <div class="col-md-12 row">

            <div class="from-control col-md-6">
                <lable>Upload Student photo</lable>
                <input type="file" name="photo" id="photo" class="form-control">
                @error('photo')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                </ul>@enderror
            </div>

            <div class="from-control col-md-3">
                <lable>Student Age</lable>
                <input type="number" name="age" value="{{ old('age', $student->age ) }}" class="form-control">
                @error('age')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                </ul>@enderror
            </div>

            <div class="from-control col-md-3">
                <lable>Student Status</lable>
                <select class="form-control basic" name="status">
                    <option value="">Select Status</option>
                    <option value="1" @if($student->active_status == 1) selected @endif>Active</option>
                    <option value="0" @if($student->active_status == 0) selected @endif>Deactive</option>
                </select>
                @error('status')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                </ul>@enderror
            </div>

        </div><br>

        <div class="col-md-12 row">
            <!-- <div class="from-control col-md-6"></div> -->
            <div class="from-control col-md-12">
                <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <img class="rounded " alt="100x100" width="150"
                        src="{{ (!empty($student->photo)) ? asset('uploads/'.$student->photo.''): asset('assets/assets/img/NoProfile.png')  }}"
                        data-holder-rendered="true" id="updatephoto">
                </div>
            </div>


        </div><br>
        <hr>


        <div class="row mb-3">
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-warning form-control waves-effect waves-light">
                    Update Student<i class="ri-login-circle-fill align-middle ms-2"></i>
                </button>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('stu') }}">
                    <button type="button" class="btn btn-dark form-control waves-effect waves-light">
                        Back
                    </button>
                </a>
            </div>
        </div>

    </form>
    @else
    <span class="badge badge-danger font-15">&#129488; &nbsp;&nbsp;You can't access this section, Need admin
        confirmation .....</span>
    @endif

</div>
@endsection

@section('script')

<script>
    $(document).ready(function(){
    $('input#code').val('+'+$(this).find(':selected').attr('data-countryCode'));
});

$("select[name=country]" ).change(function() {
               $('input#code').val('+'+$(this).find(':selected').attr('data-countryCode'));
});
            
    //this is for instant image showing for ptofile
    $(document).ready(function(){
            $('#logo').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#updatelogo').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    //this is for instant image showing for ptofile
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
toastr.options = {
  "closeButton": true,
   }
// this is the toaster notification
@if(session('s_success'))
toastr["success"]("{{ session('s_success') }}");
@elseif(session('info'))
toastr["info"]("{{ session('info') }}");
@elseif (session('warning'))
toastr["error"]("{{ session('warning') }}");
@endif

//this is the sweet alert notification
// @if(session('info'))
//      Swal.fire('Info', '{{ session('info') }}', 'info'); 
// @elseif (session('s_success'))
//         Swal.fire('Done', '{{ session('s_success') }}', 'success');
// @elseif (session('warning'))
//         Swal.fire('Danger', '{{ session('warning') }}', 'Danger');
//  @endif

</script>

@endsection