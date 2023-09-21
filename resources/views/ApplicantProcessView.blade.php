@extends('layouts.base')
@section('content')

    
                              <div class="widget-content-area">
                                    <div class="row w-100"> 
                                        <div class="col-xl-8 col-lg-8 col-md-8 company-detail-container mt-5">
                                            <div class="d-flex align-items-start">
                                                <img width="300" class="rounded-circle avatar-xl img-thumbnail" src="{{ asset('uploads/'.$student->photo.'') }}" alt="avatar">
                                                <div class="company-info">
                                                    <input type="hidden" id="stu_id" value="{{ $student->id }}">
                                                    <p class="name mb-1">&nbsp;&nbsp;&nbsp;&nbsp;{{ $student->name  }}</p>
                                                    <p class="text-muted font-12 mb-1">&nbsp;&nbsp;&nbsp;&nbsp;<i class="las la-map-marker font-20"></i>&nbsp;{{ $student->country  }}</p>&nbsp;
                                                   
                                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="las la-envelope font-20"></i>&nbsp;{{ $student->email  }}</p>
                                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="las la-phone-square font-20"></i>&nbsp;{{ $student->phone  }}</p>
                                                        <div class="d-flex">                                                   
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="las la-tasks font-20"></i>&nbsp;Current company Status </p> :&nbsp;&nbsp;<p class="badge outline-badge-success">@if($student->status){{ $student->status->status  }}@else New student not be updated status @endif</p>
                                                        </div>
                                                        <div class="d-flex">                                                   
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="las la-tasks font-20"></i>&nbsp;Current EMGS Status </p> :&nbsp;&nbsp;<p class="badge outline-badge-success">@if(!empty($student->emgs->status)){{ $student->emgs->status  }}@else No Stauts update @endif</p>
                                                        </div>


                                                   
                                                    <button  class="btn btn-dark" onclick="history.back()" style="border-radius:15px;">Go to List </button>

                                                    <a href="{{ route('view.stu', $student->id) }}" class="btn btn-md btn-info" style="border-radius:15px;">Profile</a>
                                                    @if($student->archive_status == 0)
                                                    <a href="{{ route('archive.student',$student->id) }}" class="btn btn-md btn-danger" style="border-radius:15px;">Archive this student</a>
                                                    @endif
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 company-detail-container mt-5">
                                            <div class="company-info-right">

                                                    @if(Auth::user()->can('applicants-process-change'))
                                            <form  method="POST" action="{{ route('payment.status.change') }}" >
                                              @csrf
                                            
                                                <input type="hidden" value="{{ $student->id }}" name="student_id">
                                                <label>Payment Status :</label>
                                                <div class="row">
                                                    <select class="form-control col-8" name="status" required="">
                                                    <option value="" >Update payment Status</option>
                                                    @foreach($payment_status as $row)
                                                    <option value="{{ $row->id }}" @if($row->id == $student->payment_status ) selected @endif>{{ $row->status }}</option>
                                                    @endforeach
                                                    </select>
                                                    <button class="btn btn-warning col-4" type="submit">Change</button>
                                                </div>
                                              
                                            </form>
                                            @else
                                            <span class="badge badge-danger font-15">&#129488; &nbsp;&nbsp;You can't change the status.</span>
                                            @endif
                                            <!--This is the border section --->


                                            @if(Auth::user()->can('applicants-process-change'))
                                            <form  method="POST" action="{{ route('emgs.status.change') }}" >
                                              @csrf

                                                <input type="hidden" value="{{ $student->id }}" name="student_id">
                                                <label class="mt-3">EMGS Status :</label>
                                             <div class="row ">
                                                    <select id="emg" class="form-control col-8" name="status" required="">
                                                        <option value="">Update EMGS Status</option>
                                                        @foreach($emg_status as $row)
                                                        <option value="{{ $row->id }}" @if($row->id == $student->emg_status ) selected @endif>{{ $row->status }}</option>
                                                        @endforeach
                                                    </select>
                                                    <button class="btn btn-info col-4" type="submit">Change</button>
                                             </div>
                                              
                                            </form>
                                            @else
                                            <span class="badge badge-danger font-15">&#129488; &nbsp;&nbsp;You can't change the status.</span>
                                            @endif
                                        <!--This is the end of the border section --->

                                        
                                           @if(Auth::user()->can('applicants-process-change'))
                                            <form  method="POST" action="{{ route('applicant.status.change') }}" >
                                              @csrf
                                            
                                                <input type="hidden" value="{{ $student->id }}" name="student_id">
                                                <label class="mt-3">Company Status :</label>
                                                <div class="row">
                                                    <select class="form-control col-8" name="status" required="">
                                                    <option value="" >Update company Status</option>
                                                    @foreach($status as $row)
                                                    <option value="{{ $row->id }}" @if($row->id == $student->status_id ) selected @endif>{{ $row->status }}</option>
                                                    @endforeach
                                                    </select>
                                                    <button class="btn btn-success col-4" type="submit">Change</button>
                                                </div>
                                              
                                            </form>
                                            @else
                                            <span class="badge badge-danger font-15">&#129488; &nbsp;&nbsp;You can't change the status.</span>
                                            @endif
                                            <!--This is the border section --->


                                            </div>
                                        </div>
                                    </div>
                              </div>
    
       <!-- start page title -->

      <!-- end of the start content --->
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="widget widget-chart-two">
                                    <div class="widget-heading">
                                        <h5 class="">Selected course</h5><hr>
                                    </div>
                                    
                                    
                                    <div class="col-md-12"> 
                                                                        
                                        <div class="single-result row">
                                            <div class="col-md-6 d-flex">
                                                <div class="image-container mr-3">
                                                    <img src="{{ asset('uploads/'.$student->course->photo.'') }}" class="avatar-md " />
                                                </div>
                                                <div class="info-container">
                                                    <h6>
                                                        <a href="#" class="text-primary strong">{{ $student->course->course  }}</a>
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
                                                <!-- <a href="{{ route('s_course_view',$student->course->id) }}" class="btn btn-primary bg-gradient-primary">View Now</a> -->
                                            </div>
                                        </div><hr>
                                    </div>
                                   

                                        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
      <!-- this section for sowing the cards part--->
            <!-- <div class="col-md-4">
                  <div class="card">
                      <h5 class="card-header bg-gradient-danger text-white">Course</h5>
                      <div class="card-body">
                      <img src="{{ asset('uploads/'.$student->course->photo.'') }}" class="card-img-top" alt="...">
                          <h5 class="card-title">{{ $student->course->name  }}</h5>
                          <h5 class="card-title">{{ $student->course->course  }}</h5>
                        <p class="card-text">{{ $student->course->course_period  }}</p>
                          
                      </div>
                  </div> 
              </div>  -->
     
      <!-- end of the section --->


@endsection

@section('script')
<script>



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



// this function is for fetching the recors

// end section 


</script>      
@endsection