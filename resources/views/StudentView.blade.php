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

             <div class="widget-content widget-content-area ">
                <div class="layout-spacing col-lg-12 col-lg-12 col-md-12">
                  <div class="row ">
                    <!-- profile sidebar section ---->
                    <div class="col-xl-3 col-lg-4 col-md-4 mb-4 ">
                      <div class="profile-left p-1 m-0 " style="background-color: #fff; ">
                        <div class="image-area" style="background-color: #fff; padding: 5px; border-radius: 3px;">
                            <input type="hidden" id="stu_id" value="{{ $student->id }}">
                            <img class="user-image" src="{{ (!empty($student->photo)) ? asset('uploads/'.$student->photo.'') : 'https://bootdey.com/img/Content/avatar/avatar7.png' }}">
                        </div>
                       


                        <div class="profile-tabs p-0 m-0">
                            <div class="nav flex-column nav-pills mb-sm-0 mb-3 mx-auto" id="v-border-pills-tab" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" id="v-border-pills-status-tab" data-toggle="pill" href="#v-border-pills-status" role="tab" aria-controls="v-border-pills-status" aria-selected="true">Status</a>
                              <a class="nav-link " id="v-border-pills-course-tab" data-toggle="pill" href="#v-border-pills-course" role="tab" aria-controls="v-border-pills-course" aria-selected="false">Selected Course</a>
                              <a class="nav-link " id="v-border-pills-suggested-tab" data-toggle="pill" href="#v-border-pills-suggested" role="tab" aria-controls="v-border-pills-suggested" aria-selected="false">Suggested Courses</a>
                              <a class="nav-link" id="v-border-pills-payment-tab" data-toggle="pill" href="#v-border-pills-payment" role="tab" aria-controls="v-border-pills-payment" aria-selected="false">Payment & commission</a>
                              <a class="nav-link" id="v-border-pills-payment-tab" data-toggle="pill" href="#v-border-pills-pay" role="tab" aria-controls="v-border-pills-payment" aria-selected="false">Pay Now</a>

                              <a class="nav-link" id="v-border-pills-payment-report-tab" data-toggle="pill" href="#v-border-pills-pay-report" role="tab" aria-controls="v-border-pills-payment-report" aria-selected="false">Payment Reports</a>
                              <a class="nav-link" id="v-border-pills-doc-tab" data-toggle="pill" href="#v-border-pills-doc" role="tab" aria-controls="v-border-pills-doc" aria-selected="false">Documents</a>
                            </div>
                        </div>

                        <div class="highlight-info" style="margin: 0.5px;">
                              <img src="{{ (!empty($student->photo)) ? asset('uploads/'.$student->photo.'') : 'https://bootdey.com/img/Content/avatar/avatar7.png' }}" />
                            <div class="highlight-desc">
                                  @if($student->process_status == 0)
                                  <span class="badge badge-danger"> Panding..</span>
                                            @else
                                  <span class="badge badge-success" > Under Processing</span>
                                  @endif
                            </div>
                        </div>

                      </div>
                    </div>
                    <!-- end of the profile sidebar --->
                    
                    <!-- left side contetn section ---->
                    <div class="col-xl-9 col-lg-8 col-md-8 ">
                      <!--This is the student information section-->
                      <div class="cover-image-area widget row  layout-spacing">
                        <div class="col-md-4 col-xl-4 col-md-4">
                        <h6 class="font-15"><i class="las la-user-tie font-20 text-primary"></i>&nbsp;{{ $student->name  }}</h6>
                        <p><i class="las la-globe font-20 text-primary"></i>&nbsp;{{ $student->country  }}</p>
                        <p class="font-15"><i class="las la-book-open font-20 text-primary"></i>&nbsp; COURSE : @if($student->course_id){{ $student->course->name }}@else NONE @endif</p>
                        
                        </div>
                        <div class="col-md-4 col-xl-4 col-md-4">
                         <p><i class="las la-envelope font-20 text-primary"></i>&nbsp;{{ $student->email  }}</p>
                         <p><i class="las la-map-marker font-20 text-primary"></i>&nbsp;@if($student->city){{ $student->city  }}@else None @endif</p>
                        <!-- <p class="font-15"><i class="las la-university font-20 text-primary"></i>&nbsp;UNIVERSITY : @if($student->university_id){{ $student->university->name  }}@else NONE @endif </p>
                        <p class="font-15"><i class="las la-book-open font-20 text-primary"></i>&nbsp; COURSE : @if($student->course_id){{ $student->course->name }}@else NONE @endif</p> -->
                        <p class="font-15"><i class="las la-clock font-20 text-primary"></i>&nbsp; PERIOD : @if($student->course_id){{ $student->course->course_period  }}@else NONE @endif </p>
                        <!-- <p class="font-15"><i class="las la-calendar font-20 text-primary"></i>&nbsp; 1ST START : @if($student->course_id){{ $student->course->starting_date  }}@else NONE @endif </p>
                        <p class="font-15"><i class="las la-calendar font-20 text-primary"></i>&nbsp; 2ND START : @if($student->course_id){{ $student->course->starting_date2  }}@else NONE @endif </p> -->
                        </div>

                        <div class="col-md-4 col-xl-4 col-md-4">
                        <p><a href="https://api.whatsapp.com/send?phone={{$student->country_code.$student->phone}}" target="_blank"><i class="lab la-whatsapp font-20 text-primary"></a></i>&nbsp;+{{ $student->country_code }}{{ $student->phone  }}</p>
                        <p class="font-15"><i class="las la-university font-20 text-primary"></i>&nbsp;UNIVERSITY : @if($student->university_id){{ $student->university->name  }}@else NONE @endif </p>
                        
                       
                        <p class="font-15"><i class="las la-calendar font-20 text-primary"></i>&nbsp; 1ST START : @if($student->course_id){{ $student->course->starting_date  }}@else NONE @endif </p>
                        <!-- <p class="font-15"><i class="las la-calendar font-20 text-primary"></i>&nbsp; 2ND START : @if($student->course_id){{ $student->course->starting_date2  }}@else NONE @endif </p> -->
                        </div>

                          <div class="d-flex justify-content-between mt-3 ">
                                        <a href="{{route('stu')}}" class="team-right"><button class="btn btn-dark float-right" ><i class="las la-arrow-left"></i>&nbsp;Back</button></a>&nbsp;&nbsp; 
                                        <button class="btn btn-warning float-right"   data-toggle="modal" data-target="#notify"><i class="las la-bell "></i>&nbsp;Notify</button>&nbsp;&nbsp; 
                                        @if($student->archive_status == 0)
                                        <button data-id="{{ route('archive.student',$student->id) }}" href="" class="btn btn-md btn-danger delete-archive"><i class="las la-list "></i>&nbsp;Archive</button>&nbsp;&nbsp; 
                                        @endif
                                        <button class="btn btn-success float-right"><i class="las la-envelope"></i>&nbsp;Mail</button>&nbsp;&nbsp; 
                                        @if($student->process_status == 0)
                                            <button class="btn btn-md btn-primary" data-toggle="modal" data-target="#exampleModalFullscreenLabel"><i class="las la-book "></i>&nbsp;Add Course</button>
                                        @endif
                          </div>
                            
                      </div>
                      <!--end of the student information section -->

                       <!--this is the chart sections--->
                        
                        <!--end of the chart section-->
                        <!--tabs content sections-->
                        
                            <div class="col-xl-12 col-lg-12 col-md-12 tab-area-content p-0">
                              <div class="row">
                                 <div class="tab-content" id="v-border-pills-tabContent">

                                    <!--- status or home tab --->
                                    <div class="tab-pane fade show active cover-image-area " id="v-border-pills-status" role="tabpanel" aria-labelledby="v-border-pills-status-tab">
                                    
                                      <!-- this is the chart sections --->
                                      <div class="cover-image-area  col-lg-12 col-lg-12 col-md-12  mt-1 p-0">
                                      
                                        <div class="row ">

                                        <div class="col-lg-4 col-md-4  pr-1 "> 
                                          <div class="card-body widget "> 
                                            <div class="col-lg-12 circlechart text-center"  data-percentage="{{ $emg_state }}">completed</div>
                                              <p class="font-17 text-center mb-0 text-muted">
                                                  <a class="text-primary" href="javascript:void(0);">{{ $payment_state }}%  </a>Payment status
                                              </p>  
                                          </div>
                                        </div>

                                        <div class="col-lg-4 col-lg-4 col-md-4 "> 
                                          <div class="card-body widget"> 
                                            <div class="col-lg-12 circlechart text-center"  data-percentage="{{ $emg_state }}">completed</div>
                                              <p class="font-17 text-center mb-0 text-muted">
                                                  <a class="text-primary" href="javascript:void(0);">{{ $emg_state }}%  </a>EMGS status
                                              </p>  
                                          </div>
                                        </div>

                                        <div class="col-lg-4 col-lg-4 col-md-4  pl-1"> 
                                          <div class="card-body widget "> 
                                            <div class="col-lg-12 circlechart text-center"  data-percentage="{{ $due_state }}">completed</div>
                                              <p class="font-17 text-center mb-0 text-muted">
                                                  <a class="text-primary" href="javascript:void(0);">{{ $due_state }}%  </a>Processing status
                                              </p>  
                                          </div>
                                        </div></div>
                            
                                      </div>
                                      <!-- end of the chart section -->

                                      <!-- this is the status bar--->
                                      <div class="widget mt-4 p-2" style="border-left: 5px solid #f3a129 !important;">
                                                  
                                              <!-- <h6 class="font-15 mb-0 bg-light">All Status</h6> -->
                                              <div class="team-right d-flex">
                                                  <h6 class="text-primary mb-1"><i class="las la-chart-bar font-20 text-primary"></i>&nbsp; EMGS STATUS:    @if($student->emg_status)<span class="badge badge-warning">{{ $student->emgs->status }}</span>@else <span class="badge badge-dark">Not started Yet</span> @endif</h6>
                                                  <h6 class="text-primary mb-1"><i class="las la-chart-bar font-20 text-primary"></i>&nbsp; PAYMENT STATUS: @if($student->payment_status && $student->payment)<span class="badge badge-warning">{{ $student->payment->status }}</span>@else <span class="badge badge-dark">Not started Yet</span>  @endif</h6>
                                                  <h6 class="text-primary mb-1"><i class="las la-chart-area  font-20 text-primary"></i>&nbsp; PROCESSING STATUS:  @if($student->process_status != 0)<span class="badge badge-warning"> {{ $student->status->status }}</span>@else <span class="badge badge-dark">Not started Yet</span>  @endif</h6>
                                                  <h6>@if($student->process_status == 0) <a role="button" class="btn btn-dark waves-effect waves-light  delete-confirm2" href="#" data-id="{{ route('process.student', $student->id) }}"><i class="las la-external-link-alt"></i> Go For Process</a> @else <i class="las la-check-circle  font-20 text-primary"></i>&nbsp;&nbsp;<span class="text-success ml-2">Under Processing</span> @endif</h6>
                                              </div>
                                      </div>
                                      <!--status bar end --->

                                      <!-- notification section--->
                                      @if($student->remarks  != '')
                                          <div class="mt-2" >
                                            <div class="profile-info" style="border-left: 5px solid #f3a129 !important;">
                                            <div class="card-title bg-light" >
                                                  <h5 class="p-2">Student Own interest</h5>
                                              </div>
                                            <div class="">
                                            
                                                <p class="font-15 text-primary">{{ $student->remarks  }}</p>
                                            
                                            </div>
                                            </div>
                                          </div>
                                      @endif
                                      <!-- end of thenotification -->

                                      <!-- notification section--->
                                      @if($student->notify != '')
                                          <div class="mt-2" style="">
                                            <div class="profile-info p-1" style="border-left: 5px solid #f3a129 !important;">
                                            <div class="card-title bg-light d-flex " >
                                                  <h5 class="p-2" >Student Notifcation</h5>
                                                  <a href="{{ route('notify.delete',$student->id) }}"><i class="las la-trash font-25 mt-2"></i></a>
                                              </div>
                                            <div class="d-flex">
                                            <p class="text-break text-strong text-danger font-15 p-2">{{ $student->notify }} </p>
                                            
                                            </div>
                                            </div>
                                          </div>
                                      @endif
                                      <!-- end of thenotification -->
                                      
                                    </div>
                                    <!--- end of the status or home tab -->

                                    <!--- selected course tab --->
                                    <div class="tab-pane fade " id="v-border-pills-course" role="tabpanel" aria-labelledby="v-border-pills-course-tab">
                                        <div class="media" >         
                                            <div class="profile-shadow w-100 p-2 mb-0">
                                            <h6 class="font-15 p-2 bg-light"  style="border-left: 5px solid #f3a129 !important;">Selected course</h6>
                                                @if($student->course_id)
                                                    <div class="single-team">
                                                        <div class="d-flex">
                                                            <div class="team-left">
                                                                <img src="{{ asset('uploads/'.$student->course->photo.'') }}" />
                                                            </div>
                                                            <div class="team-right">
                                                              
                                                                <h6 class="text-primary mb-1"><i class="las la-book-open font-20 text-primary"></i>&nbsp; @if($student->course_id){{ $student->course->name }}@else NONE @endif :   @if($student->course_id){{ $student->course->course }}@else NONE @endif</h6>
                                                                <h6 class="text-primary mb-1"><i class="las la-clock font-20 text-primary"></i>&nbsp;   @if($student->course_id){{ $student->course->course_period }}@else NONE @endif</h6>
                                                                <h6 class="text-primary mb-1"><i class="las la-graduation-cap  font-20 text-primary"></i>&nbsp; @if($student->course_id){{ $student->course->course_degree }}@else NONE @endif </h6>
                                                                <h6 class="text-primary mb-1"><i class="las la-university  font-20 text-primary"></i>&nbsp; @if($student->university_id){{ $student->university->name }}@else NONE @endif </h6>
                                                                <h6><i class="las la-check-circle  font-20 text-primary"></i>&nbsp;&nbsp;<span class="text-success ml-2">Course Accepted</span></h6>
                                                                <ul class="d-flex">
                                                                  <li class="text-success-teal "><strong>1st Start Date : </strong>  {{ $student->course->starting_date }}</li>&nbsp;&nbsp;&nbsp;
                                                                  <li class="text-success-teal "><strong>2nd Start Date : </strong>  {{ $student->course->starting_date2 }}</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                   <p class="font-20 text-danger "> <strong>:( Student not chose any course yet !</strong></p>
                                                @endif
                                            </div>   
                                         </div>
                                    </div>
                                    <!--- end of the course tab --->
                                   
                                    <!-- suggested course --->
                                    <div class="tab-pane fade " id="v-border-pills-suggested" role="tabpanel" aria-labelledby="v-border-pills-suggested-tab">
                                        <div class="media" >         
                                                    <div class="profile-shadow w-100 " >
                                                      <h6 class="font-15 p-2 bg-light"  style="border-left: 5px solid #f3a129 !important;">All suggested courses</h6>
                                                      <div class="row" id="course_cards"></div>
                                                    </div>   
                                        </div>
                                    </div>
                                    <!--- end of the suggested course --->

                                    <!-- pyament tab --->
                                    <div class="tab-pane fade" id="v-border-pills-payment" role="tabpanel" aria-labelledby="v-border-pills-payment-tab">
                                       <div class="col-lg-12 col-lg-12 col-md-12 p-0 m-0" >
                                        <div class="row ">
                                            <div class="col-lg-6 col-lg-6 col-md-6 ">
                                              <div class="widget m-0">
                                              <h6 class="font-15 bg-light p-2" style="border-left: 5px solid #f3a129 !important;">Student Payment By Company to University</h6>
                                              @if(Auth::user()->can('university-student-payment-view'))
                                                  <div class="table-responsive ">
                                                    <table id="list"  class="table table-bordered table-hover" style="width: 100%;">
                                                      <thead style="background-color: #f2f2f2;">
                                                      <tr>
                                                  
                                                          <th>Types</th>
                                                          <th>Amount</th>
                                                          <th>Action</th>
                                                      </tr>
                                                      </thead>
                                                      <tbody>
                                                    
                                                          @foreach ($student_payments as $row)
                                                              <tr>
                                                                 
                                                                  <td>{{ $row->payType->type }}</td>
                                                                  <td><span class="badge bg-success" style="font-size: 12px;">{{ $row->amount}}</span></td>
                                                                  
                                                                  <td class="d-flex">
                                                                  @if(Auth::user()->can('university-student-payment-update'))
                                                                  <a  href="{{ route('edite.payment',$row->id) }}" role="button"><i class="las la-edit font-25"></i></a>
                                                                  @endif
                                                                  @if(Auth::user()->can('university-student-payment-delete'))
                                                                  <a  class="delete-confirm3 text-danger"  href="" data-id="{{ route('delete.payment',$row->id) }}" role="button"><i class="las la-trash font-25"></i></a>
                                                                  @endif

                                                                  @if($row->pay_slip != '')
                                                                  <a href="{{ route('stu.pay.slip.download',$row->id) }}" class="text-primary"  role="button"><i class="las la-file-download font-25"></i></a>
                                                                  @endif
                                                                  </td>
                                                                  
                                                              </tr>
                                                          
                                                          @endforeach
                                                          <tfooter>
                                                          <tr style="background-color: #f2f2f2;">
                                                              <td></td>
                                                              <td></td>
                                                              <th colspan="2"><span class="badge bg-danger" style="font-size: 15px;">Total {{ $payment_sum }}</span></th>
                                                              
                                                          </tr>
                                                      </tfooter>
                                                      </tbody>
                                                    
                                                    </table>                             
                                                  </div>
                                              @else
                                              <span class="badge badge-danger">&#129488; &nbsp;&nbsp;You can't see the list of payments .....</span>
                                              @endif</div>
                                            </div>

                                            <div class="col-lg-6 col-lg-6 col-md-6">
                                              <div class="widget">
                                                <h6 class="font-15 p-2 bg-light"  style="border-left: 5px solid #f3a129 !important;">Student commission payment By University to Company</h6>
                                                @if(Auth::user()->can('university-student-commission-view'))
                                                    <div class="table-responsive">
                                                          <table id="list"  class="table table-bordered table-hover" style="width: 100%;">
                                                            <thead style="background-color: #f2f2f2;">
                                                            <tr>
                                                              
                                                                <th>Types</th>
                                                                <th>Amount</th>
                                                                <th>Action</th>
                                                        
                        
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                           
                                                                @foreach ($student_commission as $row)
                                                                    <tr>
                                                                       
                                                                        <td>{{ $row->payType->type }}</td>
                                                                        <td><span class="badge bg-success" style="font-size: 12px;">{{ $row->amount}}</span></td>
                                                                        
                                                                        <td class="d-flex">
                                                                        @if(Auth::user()->can('university-student-commission-update'))
                                                                        <a  href="{{ route('edite.commission',$row->id) }}" role="button"><i class="las la-edit font-25"></i></a>
                                                                        @endif
                                                                        @if(Auth::user()->can('university-student-commission-delete'))
                                                                        <a class="delete-confirm4 text-danger" href="#" data-id="{{ route('delete.commission',$row->id) }}" role="button"><i class="las la-trash font-25"></i></a>
                                                                        @endif

                                                                        @if($row->pay_slip != '')
                                                                        <a href="{{ route('stu.com.pay.slip.download',$row->id) }}" class="text-primary"  role="button"><i class="las la-file-download font-25"></i></a>
                                                                        @endif
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                
                                                                @endforeach
                                                                <tfooter >
                                                                <tr style="background-color: #f2f2f2;">
                                                                    <td></td>
                                                                    <td></td>
                                                                    <th colspan="2"><span class="badge bg-success" style="font-size: 15px;">Total {{ $commission_sum }}</span></th>
                                                                    
                                                                </tr>
                                                                </tfooter>
                                                            </tbody>
                                                        
                                                        </table>                             
                                                    </div>
                                                @else
                                                <span class="badge badge-danger">&#129488; &nbsp;&nbsp;You can't see the commission list .....</span>
                                                @endif
                                              </div>
                                            </div>
                                        </div>
                                      </div>
                                        
                                    </div>
                                    <!--- end payment tab -->

                                    <!--- student payment tab---->
                                    <div class="tab-pane fade" id="v-border-pills-pay" role="tabpanel" aria-labelledby="v-border-pills-settings-tab">
                                      <div class="col-lg-12 col-lg-12 col-md-12 p-0 m-0" >
                                        <div class="row ">

                                            <div class="col-lg-6 col-lg-6 col-md-6 m-0">
                                              <div class="widget ">

                                                <h6 class="font-15 bg-light p-2" style="border-left: 5px solid #f3a129 !important;">Student payment</h6>
                                                @if(Auth::user()->can('student-payment-add'))
                                                 <form method="post" action="{{ route('student.pay') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="stu_id" value="{{ $student->id }}">
                                                    <div class="px-2">
                                                        <div class="switch-container mb-2 pl-2">
                                                          <input class="form-control" placeholder="Paid Amount" type="number" name="amount" >
                                                        </div>
                                                        @error('amount')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror

                                                        <div class="switch-container mb-3 pl-2">
                                                                <select class="form-control " name="type" id=""  required=""> 
                                                                      <option value="">Select Type</option>
                                                                      @foreach($paytype as $row)
                                                                      <option value="{{$row->id}}">{{$row->type}}</option>
                                                                      @endforeach
                                                                 </select>
                                                        </div>
                                                        @error('type')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror

                                                        <div class="switch-container mb-3 pl-2">
                                                          <input class="form-control" id="pay_slip" type="file" name="pay_slip" >
                                                        </div>
                                                        @error('pay_slip')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror

                                                        <div class="switch-container mb-3 pl-2">
                                                        <img class="rounded " width="150" id="pay_slip_upload">
                                                        </div>
                                                    </div><hr>
                                                    <div class="px-0 m-0 text-center pt-0">
                                                        <button class="ripple-button ripple-button-primary btn-sm" type="submit">
                                                            <div class="ripple-ripple js-ripple">
                                                            <span class="ripple-ripple__circle"></span>
                                                            </div>
                                                            Pay Now
                                                        </button> 
                                                    </div>
                                                 </form>
                                                 @else
                                                <span class="badge badge-danger ">&#129488; &nbsp;You can't pay .....</span> 
                                                @endif 
                                              </div>
                                            </div>


                                            <div class="col-lg-6 col-lg-6 col-md-6">
                                              <div class="widget">
                                                <h6 class="font-15 p-2 bg-light"  style="border-left: 5px solid #f3a129 !important;">Student Payments</h6>
                                                @if(Auth::user()->can('student-payment-view'))
                                                    <div class="table-responsive">
                                                          <table id="list"  class="table table-bordered table-hover" style="width: 100%;">
                                                            <thead style="background-color: #f2f2f2;">
                                                            <tr>
                                                              <th>Remarks</th>
                                                              <th>Amount</th>
                                                              <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            
                                                              @foreach ($stu_payment as $row)
                                                                  <tr>
                                                                    
                                                                      <td>@if($row->payType){{ $row->payType->type }}@endif</td>
                                                                      <td><span class="badge bg-success" style="font-size: 12px;">{{ $row->amount}}</span></td>
                                                                      
                                                                      <td class="d-flex">
                                                                      @if(Auth::user()->can('student-payment-update'))
                                                                      <a  href="{{ route('edite.student_payment',$row->id) }}" role="button"><i class="las la-edit font-25"></i></a>
                                                                      @endif
                                                                      @if(Auth::user()->can('student-payment-delete'))
                                                                      <a  class="delete-confirm3 text-danger" href="#"  data-id="{{ route('delete.student_payment',$row->id) }}" role="button"><i class="las la-trash font-25"></i></a>
                                                                      @endif
                                                                
                                                                      @if($row->pay_slip != '')
                                                                      <a href="{{ route('stu.payment.slip.download',$row->id) }}" class="text-primary"  role="button"><i class="las la-file-download font-25"></i></a>
                                                                      @endif
                                                                      </td>
                                                                      
                                                                  </tr>
                                                            
                                                              @endforeach
                                                                <tfooter >
                                                                <tr style="background-color: #f2f2f2;">
                                                                    <td></td>
                                                                    <td></td>
                                                                    <th colspan="2"><span class="badge bg-success" style="font-size: 15px;">Total {{ $student_pay_sum }}</span></th>
                                                                    
                                                                </tr>
                                                                </tfooter>
                                                            </tbody>
                                                        
                                                        </table>                             
                                                    </div>
                                                @else
                                                <span class="badge badge-danger">&#129488; &nbsp;&nbsp;You can't see the student payment list .....</span>
                                                @endif
                                              </div>
                                            </div>

                                        </div>
                                      </div>
                                    </div>
                                    <!---- end of the student payment tab--->


                                    <div class="tab-pane fade" id="v-border-pills-pay-report" role="tabpanel" aria-labelledby="v-border-pills-settings-tab">
                                        <div class="media">
                                            <div class="profile-shadow w-100">
                                        <h6 class="font-15 bg-light p-2 float-center"style="border-left: 5px solid #f3a129 !important;">Over all Payments reports</h6>
                                        <p class="font-15 "><i class="las la-user-tie font-20 text-primary"></i>&nbsp;Student TO Company&nbsp;<i class="las la-building font-20 text-primary"></i> : <span class="badge badge-success">{{ $student_pay_sum }}</span></p>
                                        <p class="font-15"><i class="las la-building font-20 text-primary"></i>&nbsp;Company TO University &nbsp;<i class="las la-university font-20 text-primary"></i> : <span class="badge badge-warning">{{ $payment_sum }}</span></p>
                                        <p class="font-15"><i class="las la-university  font-20 text-primary"></i>&nbsp;University To Company commission&nbsp;<i class="las la-building font-20 text-primary"></i> : <span class="badge badge-success">{{ $commission_sum }}</span></p><hr>
                                        <div class="d-flex">
                                        <p class="font-20"><i class="las la-wallet font-25 text-primary"></i>&nbsp;Payments Profit : <span class="badge badge-warning">{{ $student_pay_sum-$payment_sum }}<span></span></p>&nbsp;&nbsp;&nbsp;
                                        <p class="font-20"><i class="las la-money-bill-wave font-25 text-primary"></i>&nbsp;Gross Profit : <span class="badge badge-success">{{ $student_pay_sum-$payment_sum+$commission_sum }}</span> </p>
                                        </div>
                                            </div>
                                        </div>
                                    </div>

                                  

                                    <div class="tab-pane fade" id="v-border-pills-doc" role="tabpanel" aria-labelledby="v-border-pills-doc-tab">
                                        <div class="media">
                                           <div class="profile-shadow w-100">
                                                <h6 class="font-15 mb-3">Student uploaded Documents</h6><hr>
                                        <!--This section is use for document download --->
                                        
                                        @if(count($student_doc) > 0)
                                        @php $sl=1 @endphp
                                        @foreach($student_doc as $data)
                                        <div class="row">
                                        <h6 class="col-md-8 float-left">{{ $sl }}-{{ $data->type }}</h6>
                                        <a class="col-md-4 btn btn-dark float-right" style="border-radius:15px;"  href="{{ route('single.doc.download',$data->requirement_id) }}"><i class="las la-cloud-download-alt "></i>&nbsp;  Download</a>
                                        </div>
                                        <hr>
                                        @php $sl++ @endphp
                                        @endforeach
                                        @endif

                                        <!--End of the document Download section -------->

                                                @if(count($student_doc) > 0)
                                                  <a class="btn btn-dark "  href="{{ route('doc.download',$student->id) }}"><i class="las la-cloud-download-alt font-20"></i>&nbsp;  Download All</a>
                                                @else
                                                  <p class="text-danger font-25">Not Upload any documents</p>   
                                                @endif

                                                @if(count($student_doc) > 0)
                                                <a class="btn btn-danger delete-confirm1"  data-id="{{ route('doc.delete',$student->id) }}" href="#"><i class="las la-trash font-20"></i>Delete for reupload</a>
                                                @endif

                                                

                                            </div>
                                        </div>
                                    </div>


                                        

                                   </div>
                            </div>
                            
                            
                                       <!-- <div class="media">
                                           <div class="profile-shadow w-100">
                                                 <h6>PAYMENT INFORMATION</h6><hr>

                                                 <span style="font-size: 15px;">Payments  : <span class="badge badge-rounded bg-info" style="font-size: 15px;"> {{ $payment_sum }}</span> </span><hr>
                                                 <span style="font-size: 15px;">Commissions : <span class="badge badge-rounded bg-warning" style="font-size: 15px;"> {{ $commission_sum }}</span> </span><hr>
                                                 <span style="font-size: 15px;">Student Payments : <span class="badge badge-rounded bg-secondary" style="font-size: 15px;">{{ $student_pay_sum }}</span> </span><hr>
                                                 <span style="font-size: 15px;">Profit : <span class="badge badge-rounded bg-secondary" style="font-size: 15px;">{{ $student_pay_sum-$payment_sum }}</span> </span><hr>
                                                 <span style="font-size: 15px;">Gross Profit : <span class="badge badge-rounded bg-success" style="font-size: 15px;">{{ $student_pay_sum-$payment_sum+$commission_sum }}</span> </span> 
                                            </div>
                                        </div>&nbsp;  -->
                                 <!--                      
                                  <div class="profile-info">
                                    <h5>General Information</h5>
                                    <div class="single-profile-info">
                                        <h6>Name</h6>
                                        <p>{{ $student->name  }}</p>
                                    </div>
                                    <div class="single-profile-info">
                                        <h6>Email</h6>
                                        <p><a href="mailto:info@demowebsite.com">{{ $student->email  }}</a></p>
                                    </div>
                                    <div class="single-profile-info">
                                        <h6>Contact Number</h6>
                                        <p>{{ $student->phone  }}</p>
                                    </div>
                                    <div class="single-profile-info">
                                        <h6>Country</h6>
                                        <p>{{ $student->country  }}</p>
                                    </div> -->

                                    <!-- <div class="single-profile-info">
                                        <h6>Student Documents</h6>


                                        @if(!empty($student->doc))
                                        
                                        <a class="btn btn-primary "  href="{{ route('doc.download',$student->id) }}"><i class="las la-cloud-download-alt font-20"></i>&nbsp; Download All</a>
                                        @else
                                        <p class="text-danger font-25">Not Upload any documents</p>   
                                        @endif
                                        <div class="d-flex">
                                        <button class="btn btn-warning"  data-toggle="modal" data-target="#notify"><i class="las la-bell font-20"></i>&nbsp;Notify</button>&nbsp;&nbsp; 
                                        @if($student->archive_status == 0)
                                        <a href="{{ route('archive.student',$student->id) }}" class="btn btn-md btn-danger"><i class="las la-list font-20"></i>&nbsp;Archive</a>
                                        @endif</div>

                                    </div> -->
                                    <!-- <div class="single-profile-info">
                                        <h6>Skills</h6>
                                        <span class="badge badge-primary"> UI/UX </span>
                                        <span class="badge badge-info"> Photoshop </span>
                                        <span class="badge badge-secondary"> Angular </span>
                                        <span class="badge outline-badge-danger"> Java </span>
                                    </div>
                                    <div class="single-profile-info social">
                                        <h6>Social</h6>
                                        <a href="https://www.facebook.com/" target="_blank"><i class="lab la-facebook text-primary"></i></a>
                                        <a href="https://www.twitter.com/" target="_blank"><i class="lab la-twitter text-info"></i></a>
                                        <a href="https://www.linkedin.com/" target="_blank"><i class="lab la-linkedin text-primary"></i></a>
                                        <a href="https://www.instagram.com/" target="_blank"><i class="lab la-instagram text-danger"></i></a>
                                        <a href="https://www.github.com/" target="_blank"><i class="lab la-github text-black"></i></a>
                                    </div> -->
                                <!-- </div> -->
                                                                     
                        </div>
                        <!--tabs content section end-->
                    </div>
                    <!-- end of the left side content section -->

                  </div>
                </div>
             </div>




            <!-- this is modal for notification --->
            <div class="modal fade" id="notify" tabindex="-1" role="dialog" aria-labelledby="#updateModalFullscreenLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                              <div class="modal-body">
                  <form  method="POST" action="{{ route('notify.set') }}" >
                  @csrf
                      <input type="hidden" name="id" value="{{ $student->id }}">        
                      <h6 class="font-12 mb-3">Set Notification</h6>
                      <textarea class="form-control" name="msg" required=""></textarea><br>
                      <button class="btn btn-outline-primary" type="submit">Set Notification</button>
                  </form>

            </div></div></div></div>
            <!-- end of the section --->

              <!-- this modal for dailog box to provide student couse-->
              <!--  Modal content for updating the records data table -->
              <div class="modal fade bs-example-modal-xl" id="exampleModalFullscreenLabel" tabindex="-1" role="dialog" aria-labelledby="#exampleModalFullscreenLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                      <!--search bar section --->
                                    <div class="input-group">
	                                  <input id="searchC" type="search" class="form-control" placeholder="Search anything...">  
  	                                <button id="search-button" type="button" class="btn btn-primary">
                                      <i class="fa fa-search"></i>
  	                                </button>
                                    </div>
                                    <!-- send search bar section -->
                                </div>
                                <div class="modal-body">
                                <form id="addRequirment" action="{{ route('req_update.cor') }}" method="POST">
                                @csrf
                                  <!-- this is the table section for courses -->
                                  <table id="list"  class="table table-bordered table-striped dt-responsive nowrap" style="width: 100%;">
                                                    <thead >
                                                    <tr>
                                                        <th>Picture</th>
                                                        <th>Course</th>
                                                        <th>Course Name</th>
                                                        <th>Course Period</th>
                                                        <th>Actions </th>
                                                    </tr>
                                                    </thead>
                                               <tbody id="course_tbl">
                                               
                                               </tbody>
                                  </table>
                                  <!-- end of table section for courses section -->

                                </div>
                                <div class="modal-footer">
                                        
                                <div class="row col-12">
                                        <div class="col-sm-9"></div>
                                        <div class="col-sm-3">
                                            <button type="button" class="btn btn-dark form-control waves-effect waves-light" data-dismiss="modal">close</button>
                                        </div>
                                </div>
                                </form>  
                                    
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->

            <!-- Delete Modal HTML -->
              <div id="DeleteModal1" class="modal fade">
                            <div class="modal-dialog modal-confirm">
                              <div class="modal-content">
                                <div class="modal-header flex-column">
                                  <div class="icon-box">
                                  <i class="las la-exclamation-triangle">&#xE5CD;</i>
                                  </div>						
                                  <h4 class="modal-title w-100">Are you sure?</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Do you really want to delete all student documents ? After This student needs to reupload documents.</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <a  class="btn btn-danger del1">Delete</a>
                                </div>
                              </div>
                            </div>
              </div> 
            <!--End of the modal----> 
            <!-- Delete Modal HTML -->
                    <div id="DeleteModal2" class="modal fade">
                            <div class="modal-dialog modal-confirm">
                              <div class="modal-content">
                                <div class="modal-header flex-column">
                                  <div class="icon-box">
                                  <i class="las la-exclamation-triangle">&#xE5CD;</i>
                                  </div>						
                                  <h4 class="modal-title w-100">Are you sure?</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Do you really want to send this student into process ? And continue course accept process.</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                  <a  class="btn btn-secondary del2">Yes I do</a>
                                </div>
                              </div>
                            </div>
                    </div> 
          <!--End of the modal---->

          <!-- Delete Modal HTML -->
          <div id="DeleteModal3" class="modal fade">
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
                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                  <a  class="btn btn-danger del3">Delete</a>
                                </div>
                              </div>
                            </div>
                          </div> 
          <!--End of the modal---->

             <!-- Delete Modal HTML -->
             <div id="DeleteModal4" class="modal fade">
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
                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                  <a  class="btn btn-danger del4">Delete</a>
                                </div>
                              </div>
                            </div>
                          </div> 
          <!--End of the modal---->

            <!-- Delete Modal HTML -->
                <div id="DeleteModal5" class="modal fade">
                            <div class="modal-dialog modal-confirm">
                              <div class="modal-content">
                                <div class="modal-header flex-column">
                                  <div class="icon-box">
                                  <i class="las la-exclamation-triangle">&#xE5CD;</i>
                                  </div>						
                                  <h4 class="modal-title w-100">Are you sure?</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Do you really want to send this student in archive ? This process cannot be undone.</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                  <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                  <a  class="btn btn-danger del5">Archive</a>
                                </div>
                              </div>
                            </div>
                          </div> 
          <!--End of the modal---->



@endsection

@section('script')
<script>



 $(document).ready(function(){
            $('#pay_slip').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#pay_slip_upload').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });


$( document ).ready(function() { 
  $(".delete-confirm1").click(function(e){
     e.preventDefault();
     let id = $(this).attr("data-id");
     $('#DeleteModal1').modal('show');
     $(".del1").attr("href", id)
  });
});


$( document ).ready(function() { 
  $(".delete-confirm2").click(function(e){
     e.preventDefault();
     let id = $(this).attr("data-id");
     $('#DeleteModal2').modal('show');
     $(".del2").attr("href", id)
  });
});


$( document ).ready(function() { 
  $(".delete-confirm3").click(function(e){
     e.preventDefault();
     let id = $(this).attr("data-id");
     $('#DeleteModal3').modal('show');
     $(".del3").attr("href", id)
  });
});

$( document ).ready(function() { 
  $(".delete-confirm4").click(function(e){
     e.preventDefault();
     let id = $(this).attr("data-id");
     $('#DeleteModal4').modal('show');
     $(".del4").attr("href", id)
  });
});


$( document ).ready(function() { 
  $(".delete-archive").click(function(e){
     e.preventDefault();
     let id = $(this).attr("data-id");
     $('#DeleteModal5').modal('show');
     $(".del5").attr("href", id)
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

 $(document).ready(function(){
  fetchCourse();
 })

// form submit for inserting the data
            // $(document).on('submit', '#addRequirment', function(e){
            //     e.preventDefault();
            //     let formData = new FormData($('#addRequirment')[0]);
            //     $.ajax({
            //           type: "POST",
            //           url: "{{ route('store.degree') }}",
            //           data:formData,
            //           contentType: false,
            //           processData: false,
            //           success: function(response){
                            
            //             if(response.status == 400){
            //                 $('#error').html('');
            //                 $('#error').addClass('alert alert-danger');
            //                 $.each(response.errors, function(key,err_values){
            //                 $('#error').append('<li>'+err_values+'</li>');
            //                 });
            //              }else{
            //                 if(response.status == 200){
            //                     Swal.fire('Done', response.message, 'success');
            //                     fetchDegree();
            //                 }
            //                  $('#exampleModalFullscreenLabel').modal('hide');
            //                  $('.degree').val('');
            //                  $('.remarks').val('');
            //                  $('.photo').val('');
                            
            //                 // $('#exampleModalFullscreenLabel').find('input').val(''); 
            //              }

            //           }
            //       });
            //    });
//end of the section for search working 
    $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

$('#searchC').keyup(function() {
 
    let dInput = this.value;
             $.ajax({
                    type: "POST",
                    url: "{{ route('course.search') }}",
                    data:{input:dInput},
                    dataType: "json",
                    success: function (response) {

                      //console.log(response.filterData);
                      $('#course_tbl').html("");
                      $.each(response.filterData, function (key, item){
                                   // console.log(item.id);
                                   
                                 $('#course_tbl').append('<tr>\
                                                    <td><img class="rounded-circle" alt="200x200" width="300"  src="{{ asset('uploads') }}/'+item.photo+'"  data-holder-rendered="true" id="updatephoto" style="width:50px;height:50px"></td>\
                                                    <td>'+item.name+'</td>\
                                                    <td>'+item.course+'</td>\
                                                    <td>'+item.course_period+'</td>\
                                                    <td><button type="button" class="add_btn btn btn-success waves-effect waves-light" value="'+item.id+'"  href="" role="button"><i class="las la-plus-square"></i></button></td>\
                                               </tr>');
                          });
                          
                    }

                });
    
   });


   $(document).on('click','.add_btn', function(e){
                e.preventDefault();
                let id= $(this).val();
                let stu_id = $('#stu_id').val();
              
                // ajax request

                // $.ajax({
                //     type: "POST",
                //     url: "{{ route('add_course.stu') }}",
                //     data:{student:stu_id,course:id},
                //     dataType: "json",
                //     success: function (response) {
                //       if(response.status == 200){
                //         fetchCourse();
                //         Swal.fire('Done', response.message, 'success');
                                
                //       }
                //       //console.log(response.data);
                //     }
                // });
           });
          
    // this function is for fetching the recors
      function fetchCourse(){
                let id  = $('#stu_id').val();
                $.ajax({
                    type: "GET",
                    url: "stu-cor-view/"+id,
                    success: function (response) {
                         //console.log(response.degrees);
                      $('#course_cards').html('');
                      //console.log(response.data);
                      $.each(response.data, function (key, item){

                        var columnClass = response.data.length > 1 ? 'col-md-6' : 'col-md-12';

                      $('#course_cards').append('<div class="' + columnClass + ' single-team">\
                                                    <div class="d-flex">\
                                                        <div class="team-left">\
                                                            <img src="{{ asset('uploads') }}/'+item.photo+'" />\
                                                        </div>\
                                                        <div class="team-right">\
                                                            <h6 class="text-primary mb-1"><i class="las la-book-open font-20 text-primary"></i>&nbsp; '+item.name+' : '+item.course+'</h6>\
                                                            <h6 class="text-primary mb-1"><i class="las la-clock font-20 text-primary"></i>&nbsp; '+item.course_period+'</h6>\
                                                            <h6 class="text-primary mb-3"><i class="las la-graduation-cap  font-20 text-primary"></i>&nbsp; '+item.course_degree+' </h6>\
                                                            <button  type="button" value="'+item.id+'" class="remove_cor_btn primary mb-1">Remove</button><hr>\
                                                            <ul class="d-flex">\
                                                                <li class="text-success-teal"><strong>1st Start Date : </strong> '+item.starting_date+'</li>&nbsp;&nbsp;&nbsp;\
                                                                <li class="text-success-teal"><strong>2nd Start Date : </strong> '+item.starting_date2+'</li>\
                                                            </ul>\
                                                        </div>\
                                                    </div>\
                                                </div>');
                      });
                    }
                });
             }
// end section 

$(document).on('click','.remove_cor_btn', function(e){
                e.preventDefault();
                let id= $(this).val();
                let stu_id = $('#stu_id').val();
                //this is th section
                
                $.ajax({
                    type: "POST",
                    url: "{{ route('remove_course.stu') }}",
                    data:{student:stu_id,course:id},
                    dataType: "json",
                    success: function (response) {
                      if(response.status == 200){
                        fetchCourse();
                        Swal.fire('Done', response.message, 'success');        
                      }else{
                        Swal.fire('info', response.message, 'info'); 
                      }
                      //console.log(response.data);
                    }
                });
      });


      $(function(){
       $('.circlechart').circlechart();
    });



</script>      
@endsection