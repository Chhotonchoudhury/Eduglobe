@extends('layouts.base')
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


/* This section for something else  */
.img-thumbs {
  background: #eee;
  border: 1px solid #ccc;
  border-radius: 0.25rem;
  margin: 1.5rem 0;
  padding: 0.75rem;
}
.img-thumbs-hidden {
  display: none;
}

.wrapper-thumb {
  position: relative;
  display:inline-block;
  margin: 1rem 0;
  justify-content: space-around;
}

.img-preview-thumb {
  background: #fff;
  border: 1px solid none;
  border-radius: 0.25rem;
  box-shadow: 0.125rem 0.125rem 0.0625rem rgba(0, 0, 0, 0.12);
  margin-right: 1rem;
  max-width: 140px;
  padding: 0.25rem;
}

.remove-btn{
  position:absolute;
  display:flex;
  justify-content:center;
  align-items:center;
  font-size:.7rem;
  top:-5px;
  right:10px;
  width:20px;
  height:20px;
  background:white;
  border-radius:10px;
  font-weight:bold;
  cursor:pointer;
}

.remove-btn:hover{
  box-shadow: 0px 0px 3px grey;
  transition:all .3s ease-in-out;
}

/* custom button */

.custom_input{
  font-size: 10px; padding: 0.25rem 0.5rem;height: 25px;
}

.custom_btn{
  font-size: 18px; padding: 0.25rem 0.5rem;height: 30px;
}


/* Custom CSS for the border-on-hover class */
.border-on-hover {
    padding: 10px; /* Add padding or adjust as needed */
    border: 5px solid transparent !important; /* Initially, the border is transparent */
    transition: border-color 0.3s; /* Add a transition for smooth hover effect */
}

/* Apply the border color on hover */
.border-on-hover:hover {
    border-color: blue !important; /* Change the border color on hover to blue with !important */
}
</style>      


@section('subheader')
  <button class="btn btn-dark" data-toggle="modal" data-target="#myModal"  type="button">Add New</button>&nbsp;
    <div class="dropdown ">
    <button class="btn btn-default dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      Exports
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
  </div>&nbsp;
  <button class="btn btn-default" id="filter" type="button"><i class="las la-filter font-17"></i> Filter</button>&nbsp;&nbsp;

@endsection
@section('content')
      
         
       <!-- start page title -->
          <div class="widget-content widget-content-area p-0">
                        
                    <!---- this is the enquery filter --------->
                    

                    <!--- end of the enquery filter ---------------->
           
                        @if(Auth::user()->hasRole('Admin'))
                        <table id="list"  class="table table-bordered mb-0 p-0 mt-2" style="width: 100%;">
                           <thead>
                              <tr>
                                <th >
                                    <div id="filterform" class="p-0 m-0" style="display:none;" class="ml-3 mr-3 mb-1  p-1  mt-2 bg-light" style="border-left: 5px solid #f3a129">  
                                      <form class="row col-md-12 m-0 p-0  mt-2" action="{{ route('enq.filter') }}" method="GET" >
                                          <input type="date" name="start_date" class="form-control col-md-2 ml-1" style="font-size: 14px; padding: 0.25rem 0.5rem;height: 35px;">
                                          <input type="date" name="end_date" class="form-control custom_input col-md-2 ml-1" style="font-size: 14px; padding: 0.25rem 0.5rem;height: 35px;">
                                          <select class="form-control custom_input col-md-2 ml-1" name="date_filter" style="font-size: 14px; padding: 0.25rem 0.5rem;height: 35px;">
                                            <option value="today">Today</option>
                                            <option value="this_week">This Week</option>
                                            <option value="this_month">This Month</option>
                                            <option value="all">All</option>
                                          </select>
                                          
                                          <select class="form-control custom_input col-md-2 ml-1"  name="verified_filter" style="font-size: 14px; padding: 0.25rem 0.5rem;height: 35px;">
                                              <option value="verified">Verified</option>
                                              <option value="not_verified">Not Verified</option>
                                              <option value="all">All</option>
                                          </select>
                                          <button class="btn btn-dark form-control col-md-1 ml-1" type="submit" style="font-size: 14px; padding: 0.25rem 0.5rem;height: 35px;"><i class="las la-search font-20"></i></button>

                                          <input type="text" id="tblSearch" placeholder="Search by Id , Name etc" class="form-control custom_input col-md-2 ml-1" style="font-size: 14px; padding: 0.25rem 0.5rem;height: 35px;">
                                      </form>
                                    </div>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                                
                                 @php $i=1  @endphp
                                  @foreach ($students as $row)
                                    <tr>
                                    <td>
                                      <div class="widget widget-content  p-0 m-0 border-on-hover quick-category">
                                        <div class="single-result row m-0 p-2">
                                          <div class="col-md-6 d-flex">
                                              <div class="image-container mr-3">
                                                  <img src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):asset('assets/assets/img/NoProfile.png') }}" style="width:60px;height:60px" />
                                              </div>
                                              <div class="info-container">
                                                  <h6>
                                                      <a href="#" class="text-primary strong">{{ $row->name }}</a>
                                                  </h6>
                                                    <p class="text-muted font-12">Age {{ $row->age }}</p>
                                                    
                                                    <div class="d-flex align-items-center mb-1">
                                                      <i class="las la-envelope font-20 mr-2 txet-muted"></i>
                                                      <a>{{ $row->email }}</a>
                                                      
                                                  </div>
                                                  
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                                  <div class="d-flex align-items-center mb-1 mr-3" >
                                                      @if($row->verified_by)
                                                        <i class="las la-award font-20 mr-1 text-success"></i>
                                                        <a class="text-warning">Verified by @if(Auth::user()->id == $row->verified_by) You @else {{ $row->verify_user->name }} @endif</a>
                                                      @else
                                                        <i class="las la-times-circle font-20 mr-1 text-danger"></i>
                                                        <a class="text-danger">Not verified</a>
                                                      @endif
                                                      
                                                  </div>
                                                  
                                                  <div class="d-flex align-items-center mb-1">
                                                      <i class="las la-globe font-20 mr-2 txet-muted"></i>
                                                      <a>{{ $row->country }}</a>
                                                    </div>
                                              
                                                  <div class="d-flex align-items-center mb-1">
                                                          <i class="lab la-whatsapp font-20 mr-2 txet-muted"></i>
                                                          <a>+{{ $row->country_code}} {{ $row->phone }}</a>
                                                  </div>
                                                 
                                          </div>
                                          
                                          <div class="col-md-3 buy-now-area"> 
                                            
                                              <div class="d-flex align-items-center mt-4 mb-2 ml-3">
                                                  <button type="submit" class="btn btn-default  " style="font-size: 30px; padding: 0.25rem 0.5rem;height: 36px;"><i class="lab la-whatsapp font-16 text-success "></i></button>
                                                  <button class="btn btn-defalt"   style="font-size: 30px; padding: 0.25rem 0.5rem;height: 36px;"  id="emailsend" type="button" data-name="{{ $row->name }}" data-email="{{ $row->email }}"
                                                  data-image="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):asset('assets/assets/img/NoProfile.png') }}"><i class="las la-envelope font-16  text-primary "></i></button>
                                                  <a class="enq-del-con" data-id="{{ route('enq.delete', $row->id) }}" href="#"><button type="submit" class="btn btn-default " style="font-size: 30px; padding: 0.25rem 0.5rem;height: 36px;"><i class="las la-trash font-16 text-danger "></i></button></a>
                                              </div>
                                            
                                          </div>
                                          
                                        </div>
                                        <div class="col-md-12  bg-light p-0" style="border-radius: 6px;">
                                            <div class="row">
                                            <!--------- ---------->
                                              <div class="single-result p-0 ml-1">
                                               <div class="col-md-1 d-flex">
                                                 <div class="image-container ">
                                                    @if($row->verified_by)
                                                      <a ><i class="las la-check-circle font-35 text-success"></i></a>
                                                      @else
                                                      <a class="admin-vrify-confirm" data-id="{{ route('verify.stu.enq', [$row->id, Auth::user()->id ] ) }}" href="#"><i class="las la-check-circle font-35 text-danger"></i></a>
                                                      @endif
                                                 </div>
                                                </div>
                                              </div>
                                            <!----------- --------->

                                            <!--------- ----------->
                                             <div class="col-md-5 p-0">
                                                  <div class="d-flex align-items-center ">
                                                    <i class="las la-school font-25 text-secodary"></i></a> &nbsp;<p class="font-13 mt-2">Interest : {{ $row->remarks  }}...</p>
                                                  </div>
                                                  <div class="d-flex align-items-center ">
                                                      <i class="las la-map-marker font-20 mr-2 txet-muted"></i>
                                                      <a>@if($row->city){{ $row->city }} @else Not Enter @endif</a>
                                                  </div>
                                              </div>
                                            <!----------- --------->

                                             <!--------- ----------->
                                             <div class="col-md-3 p-0">
                                                  <div class="d-flex align-items-center ">
                                                    <i class="las la-clock font-20 text-secodary"></i></a> &nbsp;<p class="font-13 mt-2">{{ date('F j, Y', strtotime($row->created_at)) }}</p>
                                                  </div>
                                                  <div class="d-flex align-items-center ">
                                                      <i class="las la-headset font-20 text-secodary"></i></a> &nbsp;
                                                      <p class="font-13 mt-2">@if($row->entry_id == '')
                                                        <p class="text-muted font-12">by online</p>
                                                        @else
                                                        <p class="text-muted font-12">by {{ $row->user->name  }}</p>
                                                        @endif
                                                      </p>
                                                  </div>
                                              </div>
                                            <!----------- --------->

                                            <!--------- ----------->
                                            <div class="col-md-3 float-end p-0">
                                                  <form method="post" action="{{ route('verify.stu') }}">
                                                   @csrf
                                                    <input type="hidden" name="student_id" value="{{ $row->id }}">
                                                    <div class="d-flex">
                                                      <select class="form-control mt-4 ml-0" required="" name="users" style=" font-size: 14px; padding: 0.25rem 0.5rem;height: 35px;">
                                                          <option value="">Assign student</option>
                                                          @foreach ($users as $rows)
                                                              @foreach($rows->roles->pluck('name') as $role)
                                                                  <option value="{{ $rows->id }}">{{ $rows->name }} ({{ $role }} )@if(Auth::user()->id === $rows->id ) My self @endif</option>
                                                              @endforeach
                                                          @endforeach
                                                      </select>
                                                      <button type="submit" class="btn btn-default mt-4" style="font-size: 18px; padding: 0.25rem 0.5rem;height: 35px;"><i class="las la-caret-square-right font-18 text-warning"></i></button>
                                                    </div>
                                                  </form>
                                              </div>
                                            <!----------- ---------><div>
                                          </div>
                                      </div>
                                      @php $i++  @endphp
                                    </td></tr>
                                  @endforeach
                                     </tbody>
                                </table>
                        @endif
                        
                        @if(!Auth::user()->hasRole('Admin'))
                        <table id="list1"  class="table table-bordered" style="width: 100%;">
                            <thead id="thead" >
                              <tr>
                                  <td>Student List of enqueries...</td>
                              </tr>
                            </thead>
                            <tbody>
                               
                                 @php $i=1  @endphp
                            @foreach ($students as $row)
                                <tr>
                                    <td>
                                  <div class="widget widget-content p-2 m-1">
                                      <div class="single-result row m-0 p-0">
                                                    <div class="col-md-6 d-flex">
                                                        <div class="image-container mr-3">
                                                            <img src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):asset('assets/assets/img/NoProfile.png') }}" style="width:60px;height:60px" />
                                                        </div>
                                                        <div class="info-container">
                                                            <h6>
                                                                <a href="#" class="text-primary strong">{{ $row->name }}</a>
                                                            </h6>
                                                             <p class="text-muted font-12">Age {{ $row->age }}</p>
                                                               @if($row->entry_id == '')
                                                               <p class="text-muted font-12">by online</p>
                                                               @else
                                                               <p class="text-muted font-12">by {{ $row->user->name  }}</p>
                                                               @endif
                                                                
                                                            
                                                            <p class="font-13">Interest : {{ $row->remarks  }}...</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                            <div class="d-flex align-items-center mb-2">
                                                                <i class="las la-globe font-20 mr-2 txet-muted"></i>
                                                                <a>{{ $row->country }}</a>
                                                             </div>
                                                        
                                                            <div class="d-flex align-items-center mb-2">
                                                                
                                                                    <i class="lab la-whatsapp font-20 mr-2 txet-muted"></i>
                                                                    <a>+{{ $row->country_code}} {{ $row->phone }}</a>
                                                            </div>
                                                        
                                                            <div class="d-flex align-items-center mb-2">
                                                                <i class="las la-envelope font-20 mr-2 txet-muted"></i>
                                                                <a>{{ $row->email }}</a>
                                                            </div>
                                                            
                                                             <div class="d-flex align-items-center mb-2">
                                                                <i class="las la-map-marker font-20 mr-2 txet-muted"></i>
                                                                <a>@if($row->city){{ $row->city }} @else Not Enter @endif</a>
                                                            </div>
                                                    </div>
                                                    <!--<div class="col-md-2 star-area">-->
                                                    <!--    <div class="d-flex align-items-center">-->
                                                    <!--        <i class="las la-star text-warning font-20"></i>-->
                                                    <!--        <i class="las la-star text-warning font-20"></i>-->
                                                    <!--        <i class="las la-star text-warning font-20"></i>-->
                                                    <!--        <i class="las la-star text-warning font-20"></i>-->
                                                    <!--        <i class="lar la-star-half text-warning font-20"></i>-->
                                                    <!--    </div>-->
                                                    <!--    <p class="text-warning font-17 strong pl-1 mt-3 mb-0">4.7</p>-->
                                                    <!--    <p class="text-muted font-12 pl-1 mt-3">1,248 Users</p>-->
                                                    <!--</div>-->
                                                    <div class="col-md-2 buy-now-area">
                                                        
                                                        @if($row->verified_by)
                                                        <a ><i class="las la-certificate font-45 mt-2 text-success" ></i></a>
                                                            <p><a class="text-muted font-10">Verified</a></p>
                                                        @else
                                                        <a class="user-vrify-confirm" data-id="{{ route('verify.stu.enq', [$row->id, Auth::user()->id ] ) }}" href="#"><i class="las la-certificate font-45 mt-2" ></i></a>
                                                            <p><a class="text-muted font-10">Click on the icon to verify</a></p>
                                                        @endif
                                                        
                                                            
                                                            
                                                    </div>
                                                </div>
                                             </div>
                                       @php $i++  @endphp
                                       </td></tr>
                                     @endforeach
                                     
                                     </tbody>
                                </table>
                        @endif                        
           </div>
           
             <!-- verify update model -->
                          <div id="ADvModal" class="modal fade">
                            <div class="modal-dialog modal-confirm">
                              <div class="modal-content">
                                <div class="modal-header flex-column">
                                  <div class="icon-box">
                                      <i class="las la-graduation-cap"></i>
                                  <!--<i class="las la-exclamation-triangle">&#xE5CD;</i>-->
                                  </div>						
                                  <h4 class="modal-title w-100">Are you sure?</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Do you really verify this student ? This process cannot be undone.</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <a  class="btn btn-success Advid">verify</a>
                                </div>
                              </div>
                            </div>
                          </div> 
            <!--End of the modal---->
            
            <!-- verify update model -->
                     <div id="USvModal" class="modal fade">
                            <div class="modal-dialog modal-confirm">
                              <div class="modal-content">
                                <div class="modal-header flex-column">
                                  <div class="icon-box">
                                      <i class="las la-graduation-cap"></i>
                                  <!--<i class="las la-exclamation-triangle">&#xE5CD;</i>-->
                                  </div>						
                                  <h4 class="modal-title w-100">Are you sure?</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Do you really verify this student ? This process cannot be undone.</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <a  class="btn btn-success USvid">verify</a>
                                </div>
                              </div>
                            </div>
                          </div> 
            <!--End of the modal---->
            
                <!-- Enquiry delete model -->
                     <div id="EdModal" class="modal fade">
                            <div class="modal-dialog modal-confirm">
                              <div class="modal-content">
                                <div class="modal-header flex-column">
                                  <div class="icon-box">
                                      <i class="las la-exclamation-triangle"></i>
                                  <!--<i class="las la-exclamation-triangle">&#xE5CD;</i>-->
                                  </div>						
                                  <h4 class="modal-title w-100">Are you sure?</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Do you sure you want to delete the enquiry ? This process cannot be undone.</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <a  class="btn btn-danger Edvid">yes</a>
                                </div>
                              </div>
                            </div>
                          </div> 
            <!--End of the modal---->
            
            <!-- Enquiry add model -->
              <div class="modal right fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                          <form  method="POST" action="{{ route('store.stu') }}" enctype="multipart/form-data">
                            @csrf
                          <div class="modal-header">
                              <h6 class="modal-title" id="exampleModalFullscreenLabel">Add New Student Enquiry</h6>
                          </div>
                          <div class="modal-body">
                                    <div class="col-md-12 row">
                                      <div class="from-control col-md-6">
                                          <lable>Student Name</lable>
                                          <input type="text" placeholder="Enter student Name"  name="name" value="{{ old('name') }}" class="form-control" >                                                                       
                                          @error('name')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                      </div>

                                      <div class="from-control col-md-6">
                                          <lable>Student Email</lable>
                                          <input type="email"  name="email" value="{{ old('email') }}" placeholder="Enter student Email address" class="form-control" >
                                          @error('email')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                      </div>
                                    </div><br>
                                      
                                    <div class="col-md-12 row">
                                      <div class="from-control col-md-6">
                                              <lable>Student Country</lable>
                                              <select class="form-control basic" id="country"  name="country">
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
                                              @error('country')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                      </div>
                                      
                                      <div class="row col-md-6">
                                          
                                          <div class="row p-0 m-0">
                                          <div class="col-4 ">
                                              <lable>Code</lable>
                                              <input type="text" id="code" name="pre" readonly style="color:black" class="form-control" /> 
                                          </div>
                                          
                                          <div class="col-8">
                                              <lable >Student Phone</lable>
                                              <input type="number"  name="phone" value="{{ old('phone') }}" class="form-control" >
                                              @error('phone')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                          </div>
                                          </div>
                                          
                                      </div>
                                  </div><br>
                                  
                                  <div class="col-md-12 row">
                                      <div class="from-control col-md-6">
                                          <lable>Password</lable>
                                          <input type="password" placeholder="********"  name="password" value="{{ old('password') }}"  class="form-control"> 
                                          @error('password')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                      </div>

                                      <div class="from-control col-md-6">
                                          <lable>Confirm password</lable>
                                          <input type="password"  placeholder="********"  name="confirm_password" value="{{ old('confirm_password') }}"  class="form-control">                 
                                          @error('confirm_password')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                      </div>
                                  </div><br>
                                  
                                    <div class="col-md-12 row">
                                      <div class="from-control col-md-6">
                                          <lable>Upload Student photo</lable>  
                                          <input type="file"  name="photo" id="photo"  class="form-control">
                                          @error('photo')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                      </div>

                                      <div class="from-control col-md-3">
                                          <lable>Student Age</lable>
                                          <input type="number"  name="age" value="{{ old('age') }}"  class="form-control">
                                          @error('age')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                      </div>

                                      <div class="from-control col-md-3">
                                          <lable>Student Status</lable>
                                          <select class="form-control basic"  name="status">
                                              <option value="">Select Status</option>
                                              <option value="1">Active</option>
                                              <option value="0">Deactive</option>
                                          </select>
                                          @error('status')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                      </div>
                                    </div><br>
                                    
                                    
                                  <div class="col-md-12 row">
                                      <!-- <div class="from-control col-md-6"></div> -->
                                      <div class="from-control col-md-6">
                                          <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                          <div class="col-sm-10">
                                          <img class="rounded " alt="100x100" width="120" src="{{ asset('assets/assets/img/NoProfile.png') }}" data-holder-rendered="true" id="updatephoto">
                                          </div>
                                      </div>
                                  </div>
                              
                          </div><!--end body --->
                          
                          <div class="modal-footer">         
                              <div class="row col-md-12">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                  <button type="submit"  class="btn btn-outline-primary form-control waves-effect waves-light float-end">Add Enquiry</button>
                                </div>

                                <div class="col-md-4">
                                  <button type="button" class="btn btn-md btn-outline-dark form-control float-end  waves-effect waves-light" data-dismiss="modal">close</button>
                                </div>
                                <div class="col-md-2"></div>
                              </div>
                          </div>
                      </form>
                          <!-- /.modal-content -->
                      </div>
                  </div>
              </div>
            <!--End of the modal---->


            <!--- ---->
                <div class="modal fade " id="emailModel" tabindex="-1" role="dialog" aria-labelledby="emailModel" aria-hidden="true"> 
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                          <div class="modal-header m-0 p-2">
                              <h6 class="modal-title" id="composeEmailModalLabel">Compose Email</h6>
                              <button type="button" class="btn-dark custom-close-button" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>

                          </div>

                      <!-- Customer Details Section -->
                            <div class="customer-details p-2 bg-light text-white rounded">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Small rounded image -->
                                        <img src="" alt="Customer Image" id="studentImage" class="img-thumbnail" width="60">
                                    </div>
                                    <div class="col">
                                        <h6 class="mb-3">Student Information</h6>
                                        <p><strong>Name : </strong>  <span id="studentName"> </span></p>
                                        <p><strong>Email : </strong>  <span id="studentEmail"> </span></p>
                                        <input type="hidden" id="eMail" value="">
                                        <!-- Add more customer details here as needed -->
                                    </div>
                                </div>
                            </div>
            
          
                          <div class="modal-body">
                              <div class="mb-3">
                                  <label for="emailSubject" class="form-label">Subject</label>
                                  <input type="text" class="form-control" id="emailSubject" placeholder="Please enter email subject">
                              </div>
                              <div class="mb-3">
                                  <label for="emailMessage" class="form-label">Message</label>
                                  <textarea id="editor" class="form-control" ></textarea>
                                  <textarea id="ckeditor-content" style="display: block;"></textarea>
                              </div>
                          </div>
                          <div class="modal-footer m-0 p-2">
                              <button type="button" class="btn btn-dark"  data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-success" id="sendEmailButton">Send Email</button>
                          </div>
                      </div>
                    </div>
                </div>
            <!--- ---->
@endsection

@section('script')
<script>
$(document).ready(function() {
    $("#filter").click(function() {
        $("#filterform").toggle();
    });
});


CKEDITOR.replace( 'editor' );



// Email send code section in javascript
$(document).ready(function() {
    // Listen for click events on any email button
    $(document).on('click', '#emailsend', function() {
        // Get the name and email from data attributes of the clicked button
        var name = $(this).data('name');
        var email = $(this).data('email');
        var image = $(this).data('image');
        // Update the modal content with the name and email
        $('#studentName').text(name);
        $('#studentEmail').text(email);
        $('#studentImage').attr('src', image);
        $('#eMail').val(email);
        // Show the email composition modal
        $('#emailModel').modal('show');
    });


$('#sendEmailButton').click(function() {
  var editor = CKEDITOR.instances.editor;
  var ckeditorContent = editor.getData();
  $('#ckeditor-content').val(ckeditorContent);

    var emailSubject = $('#emailSubject').val();
    var emailMessage = $('#ckeditor-content').val();

    var recipientEmail = $('#eMail').val(); // Update with the correct input ID

       // Get the CSRF token
       var csrfToken = $('meta[name="csrf-token"]').attr('content');


    var data = {
        subject: emailSubject,
        message: emailMessage,
        recipientEmail: recipientEmail,
        _token: csrfToken 
    };

    $.ajax({
        type: 'POST',
        url: '{{ route("customsend.email") }}', // Use the Laravel named route
        data: data,
        dataType: 'json',
        success: function(response) {
            alert(response.message);
            $('#emailModel').modal('hide');
        },
        error: function(error) {
            alert('An error occurred while sending the email.', error);
        }
    });
});

});

// End of the email send code section


//country code change
  $("select[name=country]" ).change(function() {
               $('input#code').val('+'+$(this).find(':selected').attr('data-countryCode'));
            });
//end of the country code change

// real time photo showing 
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

//show the model error validation come 
@if($errors->has('name') || $errors->has('email') || $errors->has('country')||$errors->has('phone')||$errors->has('password')
    || $errors->has('confirm_password')||$errors->has('age')||$errors->has('status'))
   $('#myModal').modal('show');
@endif
//end of the show of error validation

$( document ).ready(function() { 
  $(".admin-vrify-confirm").click(function(e){
     e.preventDefault();
     let id = $(this).attr("data-id");
     $('#ADvModal').modal('show');
     $(".Advid").attr("href", id)
  });
});

$( document ).ready(function() { 
  $(".user-vrify-confirm").click(function(e){
     e.preventDefault();
     let id = $(this).attr("data-id");
     $('#USvModal').modal('show');
     $(".USvid").attr("href", id)
  });
});

$( document ).ready(function() { 
  $(".enq-del-con").click(function(e){
     e.preventDefault();
     let id = $(this).attr("data-id");
     $('#EdModal').modal('show');
     $(".Edvid").attr("href", id)
  });
});
    

//this is the sweet alert notification
// @if(session('info'))
//      Swal.fire('Info', '{{ session('info') }}', 'info'); 
// @elseif (session('s_success'))
//         Swal.fire('Done', '{{ session('s_success') }}', 'success');
// @elseif (session('warning'))
//         Swal.fire('Danger', '{{ session('warning') }}', 'Danger');
//  @endif


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

 //for data tables


 var myDataTable = $('#list').DataTable({
     "dom": 'rt<"bottom"il><"clear">',
      paging: false,
      bFilter: false,
      ordering: false,
      searching: true,
     // Hide the length change option
});
$('#tblSearch').on('input', function() {
  // Get the search term entered by the user
  var searchTerm = $(this).val();
  // Call the DataTables search() method to perform the search
  myDataTable.search(searchTerm).draw();
});

$('#list1').DataTable({
    /* Disable initial sort */
        "aaSorting": []
});


</script>

@endsection