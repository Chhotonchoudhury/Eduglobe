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

    <!------------SECTION COURSE VIEW ----------------------->
    
            <div class="widget-content widget-content-area">
                <div class="row layout-spacing pt-0">
                    <!--university logo section-->
                    <div class="col-xl-3 col-lg-4 col-md-4 mb-4">
                        <div class="profile-left">
                            <div class="image-area">
                            <input type="hidden" id="stu_id" value="{{ $unv->id }}">
                                <img class="user-image" src="{{ (!empty($unv->logo )) ? asset('uploads/'.$unv->logo.'') : 'https://bootdey.com/img/Content/avatar/avatar7.png' }}">
                            </div>

                            <!--<div class="profile-tabs">
                                <div class="nav flex-column nav-pills mb-sm-0 mb-3 mx-auto" id="v-border-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-border-pills-course-tab" data-toggle="pill" href="#v-border-pills-course" role="tab" aria-controls="v-border-pills-course" aria-selected="true">General Information</a>
                                    <a class="nav-link " id="v-border-pills-about-tab" data-toggle="pill" href="#v-border-pills-about" role="tab" aria-controls="v-border-pills-about" aria-selected="true">About</a>
                                    <a class="nav-link" id="v-border-pills-settings-tab" data-toggle="pill" href="#v-border-pills-payment" role="tab" aria-controls="v-border-pills-settings" aria-selected="false">PHD Degree</a>
                                    <a class="nav-link" id="v-border-pills-payment-tab" data-toggle="pill" href="#v-border-pills-commission" role="tab" aria-controls="v-border-pills-payment" aria-selected="false">Master Degree</a>
                                    <a class="nav-link" id="v-border-pills-payment-tab" data-toggle="pill" href="#v-border-pills-pay" role="tab" aria-controls="v-border-pills-payment" aria-selected="false">Bachelor Degree</a>
                                    <a class="nav-link" id="v-border-pills-other-tab" data-toggle="pill" href="#v-border-pills-other" role="tab" aria-controls="v-border-pills-other" aria-selected="false">Others Degree</a>
                                    <a class="nav-link" id="v-border-pills-student-tab" data-toggle="pill" href="#v-border-pills-student" role="tab" aria-controls="v-border-pills-student" aria-selected="false">Students</a>
                                </div>
                            </div> 
                            <div class="highlight-info">
                                <img src="{{ asset('uploads/'.$unv->logo.'') }}" />
                            </div>-->
                        </div>
                    </div>
                    <!--university logo section end -->

                    <!---university side section information section on top -->
                    <div class="col-xl-9 col-lg-8 col-md-8">
                      <!--This is the student information section-->
                      <div class="cover-image-area widget  row">
                        <div class="col-md-6 col-xl-6 col-md-6 mb-3">
                        <p><i class="las la-university font-20 text-primary"></i>&nbsp; Name : {{$unv->name}}</p>
                        <p><i class="las la-envelope font-20 text-primary"></i>&nbsp; Email : &nbsp;{{$unv->email}}</p>
                        <p><i class="las la-phone-square font-20 text-primary"></i>&nbsp; Phone : &nbsp;{{$unv->email}}</p>
                        <p class="font-15"><i class="las la-clock font-20 text-primary"></i>&nbsp;Created on : {{$unv->created_at}}</p>
                        
                        </div>
                        <div class="col-md-6 col-xl-6 col-md-6 mb-3">
                        <p><i class="las la-envelope font-20 text-primary"></i>&nbsp; Executive Email : &nbsp;{{$unv->ex_email}}</p>
                        <p class="font-15"><i class="las la-phone-square font-20 text-primary"></i>&nbsp;Executive Phone : {{$unv->ex_number}}</p>
                        
                        <p><i class="las la-map-marker-alt font-20 text-primary"></i>&nbsp; Address : &nbsp;{{$unv->address}}</p>
                        </div>


                        <!------This is the header button sections with own models --------->
                        <div class="d-flex">
                                    <a class="btn btn-outline-primary mr-2" data-toggle="modal" data-target="#exampleModalFullscreenLabel">Add New Degree</a>
                                        <!-- Modal -->
                                        <div class="modal fade " id="exampleModalFullscreenLabel" tabindex="-1" role="dialog" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title" id="exampleModalFullscreenLabel">Add new Course</h6>
                                                </div>
                                                <div class="modal-body">
                                                <form action="{{ route('store.degree') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                        <!--Form body section-->
                                                        <input type="hidden" name="un_id" value="{{ $unv->id  }}">

                                                        <div class="col-md-12 row">
                                
                                                                <div class="from-control col-md-3">
                                                                    <lable>Name</lable>
                                                                    <input type="text"  name="name" value="{{ old('name') }}" class="form-control" >                                                                       
                                                                    @error('name')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                </div>

                                                                <div class="from-control col-md-3">

                                                                    <lable>Course</lable>
                                                                    <input type="text"  name="course" value="{{ old('course') }}"  class="form-control" >
                                                                    @error('course')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                </div>

                                                                <div class="from-control col-md-3">

                                                                    <lable>Period</lable>
                                                                    <input type="text"  name="period" value="{{ old('period') }}"  class="form-control" >
                                                                    @error('period')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                </div>

                                                                <div class="from-control col-md-3">
                                                                            <lable>Select Degree</lable>
                                                                            <select class="form-control" name="degree" required=""> 
                                                                                <option value="">Select Degree</option>
                                                                                <option value="BACHELOR">Bachelor</option>
                                                                                <option value="MASTER">Master</option>
                                                                                <option value="PHD">PHD</option>
                                                                                <option value="OTHER">Others</option>
                                                                                
                                                                            </select>
                                                                            @error('degree')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                    </div>

                                                            </div><hr>

                                                            <div class="col-md-12 row"> 
                                                                    <div class="from-control col-md-4">
                                                                        <lable>Arabic Name</lable>
                                                                        <input type="text"  name="arabic_name" value="{{ old('arabic_name') }}" placeholder="الرجاء إدخال اسم الدورة باللغة العربية" class="form-control">
                                                                        @error('arabic_name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                                    </div>

                                                                    <div class="from-control col-md-4">
                                                                        <lable>Arabic Course</lable>
                                                                        <input type="text"  name="arabic_course" value="{{ old('arabic_course') }}" placeholder="الرجاء إدخال الدورة باللغة العربية"  class="form-control">
                                                                        @error('arabic_course')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                                    </div>

                                                                    <div class="from-control col-md-4">
                                                                        <lable>Arabic Period</lable>
                                                                        <input type="text"  name="arabic_period" value="{{ old('arabic_period') }}" placeholder="الرجاء إدخال فترة الدورة باللغة العربية"  class="form-control">
                                                                        @error('arabic_period')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                                    </div>
                                                                </div><hr>


                                                                <div class="col-md-12 row">
                                                                    

                                                                    <div class="from-control col-md-3">
                                                                            <lable>Select category</lable>
                                                                            <select class="form-control" name="category" required=""> 
                                                                                <option value="">Select Category</option>
                                                                                @foreach($category as $un)
                                                                                <option value="{{ $un->id }}">{{ $un->name }}</option>
                                                                                @endforeach  
                                                                            </select>
                                                                    
                                                                            @error('category')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                    </div>

                                                                    

                                                                    <div class="from-control col-md-3">
                                                                        <lable>Fess</lable>
                                                                        <input type="text" placeholder="$ 500"  name="fees" value="{{ old('fees') }}"  class="form-control" >
                                                                        @error('fees')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                    </div>

                                                                    <div class="from-control col-md-3">
                                                                        <lable>1st Start Date</lable>
                                                                        <input type="date"  name="start_date" value="{{ old('start_date') }}"  class="form-control" >
                                                                        @error('start_date')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                    </div>

                                                                    <div class="from-control col-md-3">
                                                                        <lable>2nd Start Date</lable>
                                                                        <input type="date"  name="start_date2" value="{{ old('start_date2') }}"  class="form-control" >
                                                                        @error('start_date2')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                    </div>

                                                                </div><br>


                                                                <div class="col-md-12 row">
                                                                    <div class="col-lg-12 col-sm-12">
                                                                    <lable>Course Details in English</lable>
                                                                        <textarea id="editor" name="details">
                                                                        </textarea>
                                                                        @error('details')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                    </div>
                                                                </div><hr>

                                                                <div class="col-md-12 row">
                                                                        <div class="col-lg-12 col-sm-12">
                                                                        <lable>Course Details in arabic</lable>
                                                                            <textarea id="editor1" placeholder="" name="arabic_details">
                                                                            </textarea>
                                                                            @error('arabic_details')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                                        </div>
                                                                </div><hr>


                                                                <div class="col-md-12 row">
                                                                            <div class="from-control col-md-4">
                                                                                <lable>Upload Course Main photo</lable>  
                                                                                <input type="file"  name="photo" id="photo_c" class="form-control" >
                                                                                @error('photo')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                            </div>

                                                                            <div class="from-control col-md-8">
                                                                                <lable>Course related images</lable>  
                                                                                <input type="file"  name="multi_image[]" id="multiImg_c"  class="form-control" multiple="" >
                                                                                @error('multi_image')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                            </div>

                                                                </div><br>

                                                                <div class="col-md-12 row">
                                                                            
                                                                            <div class="from-control col-md-4">
                                                                                <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                                                                <div class="col-sm-10">
                                                                                <img class="rounded " alt="100x100" width="120" src="{{ asset('assets/assets/img/NoBg.jpeg') }}" data-holder-rendered="true" id="updatephoto">
                                                                                </div>
                                                                            </div>

                                                                            <div class="from-control col-md-8" >
                                                                                <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                                                                <div class="col-sm-10" id="preview_img">
                                                                            
                                                                                </div>
                                                                            </div>


                                                                </div>

                                                            
                                                        <!--End form section--->
                                                        
                                                </div>
                                                <div class="modal-footer">         
                                                    <div class="row col-md-12">
                                                                    <div class="col-md-4"></div>
                                                                    <div class="col-md-6">
                                                                            <div class="row">
                                                                            <div class="col-md-4">
                                                                            <button type="submit"  class="btn btn-outline-primary form-control waves-effect waves-light float-end">
                                                                            Add Course
                                                                            </button>
                                                                            </div>

                                                                        <div class="col-md-2">
                                                                            <button type="button" class="btn btn-md btn-outline-dark form-control float-end  waves-effect waves-light" data-dismiss="modal">X</button>
                                                                        </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-md-2"></div>
                                                                    
                                                            
                                                    </div>
                                                </div>
                                                </form>  
                                            </div><!-- /.modal-content -->
                                            </div>
                                        </div>
                                        <!--End Model --->
                                        @if(Auth::user()->can('university-student-payment-add'))
                                        <a class="btn btn-outline-success mr-2" data-toggle="modal" data-target="#paymentModalFullscreenLabel">Payment</a>
                                        @endif
                                        <!-- starting of the modal-->
                                            <!-- this modal for payment section ---->
                                        <!--  Modal content for the insert data table -->
                                            <div class="modal fade bs-example-modal-sm" id="paymentModalFullscreenLabel" tabindex="-1" role="dialog" aria-labelledby="#paymentModalFullscreenLabel" aria-hidden="true" style="display: none;">

                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title" id="paymentModalFullscreenLabel">Make a New Payments</h6>
                                                        
                                                    </div>
                                                    <div class="modal-body">
                                                    <form id="" method="POST" action="{{ route('payment.student') }}" enctype="multipart/form-data">
                                                    @csrf
                                                        <!--Form body section-->
                                                        <input type="hidden" name="un_id" value="{{ $unv->id  }}">
                                                                <div id="error"></div>
                                                            <div class="from-control row col-md-12">

                                                                        <div class="col-md-4">
                                                                        <lable>Select Payment Type</lable>
                                                                        <select class="form-control " name="type" id=""  > 
                                                                            <option value="">Select Type</option>
                                                                            @foreach($paytype as $row)
                                                                            <option value="{{$row->id}}">{{$row->type}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        @error('type')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                        <lable>Select Course</lable>
                                                                        <select class="form-control" name="course_name" id="uni_degree"  > 
                                                                            <option value="">Select Course</option>
                                                                            @foreach($course as $row)
                                                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        @error('course_name')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                        <lable>Select student</lable>
                                                                        <select class="form-control" name="student" id="student_id"  > 
                                                                            <option value="">Select student</option>
                                                                        </select>
                                                                        @error('student')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                        </div>

                                                            </div><br>

                                                            <div class="row col-md-12">

                                                                <div class="col-md-6">
                                                                        <lable>Amount</lable>
                                                                        <input type="text" required="" id="amount" name="amount" class="form-control">
                                                                        @error('amount')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                        <!-- <p id="amount_word" style="padding: 5px;background-color: black;color: gold;font-size: initial;">In Words</p> -->
                                                                </div> 
                                                                <div class="col-md-6">
                                                                        <lable>upload pay slip</lable>
                                                                        <input type="file" id="pay_slip" name="pay_slip" class="form-control">
                                                                        @error('pay_slip')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                        <!-- <p id="amount_word" style="padding: 5px;background-color: black;color: gold;font-size: initial;">In Words</p> -->
                                                                </div>    

                                                            </div>

                                                            <div class="col-md-12 row">
                                                                    <div class="from-control col-md-6">
                                                                    </div>
                                                                    <div class="from-control col-md-6">
                                                                        <br>
                                                                        <img class="rounded " width="120" id="pay_slip_upload">
                                                                    </div>
                                                            </div>

                                                            <div class="col-md-12 row" id="stu_info">

                                                                <div class="col-md-4 bg-dark">
                                                                    <lable>Student payment</lable>
                                                                    <div id="stu_di_payment"></div>
                                                                </div>

                                                                <div class="col-md-4 bg-dark">
                                                                <lable>company to university payment</lable>
                                                                    <div id="stu_payment"></div>   
                                                                </div>

                                                                <div class="col-md-4 bg-dark">
                                                                    <lable>university to company commission</lable>
                                                                    <div id="stu_commission"></div>
                                                                </div>

                                                            </div>

                                                        <!--End form section--->
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                            
                                                    <div class="row col-12">
                                                            <div class="col-sm-8">
                                                                    <button type="submit"  class="btn btn-success form-control waves-effect waves-light">
                                                                            Pay Now<i class="ri-login-circle-fill align-middle ms-2"></i>
                                                                    </button>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <button type="button" class="form-control btn btn-md btn-outline-dark waves-effect waves-light" data-dismiss="modal">close</button>
                                                            </div>
                                                    </div>
                                                    </form>  
                                                        
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                    <!------ end of the section ---------->
                                        <!-- END OF THE MODAL ---->
                                        @if(Auth::user()->can('university-student-commission-add'))
                                            <a class="btn btn-md btn-outline-danger mr-2" data-toggle="modal" data-target="#commissionModalFullscreenLabel">Commission</a>
                                        @endif
                                    <!--START OF THE COMMISSION PAYMENT MODAL -->
                                    <!-- this modal for payment section ---->
                                    <!--  Modal content for the insert data table -->
                                    <div class="modal fade bs-example-modal-sm" id="commissionModalFullscreenLabel" tabindex="-1" role="dialog" aria-labelledby="#commissionModalFullscreenLabel" aria-hidden="true" style="display: none;">

                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title" id="commissionModalFullscreenLabel">Make a New Commission Payment</h6>
                                                </div>
                                                <div class="modal-body">
                                                <form id="" method="POST" action="{{ route('commission.student') }}" enctype="multipart/form-data">
                                                @csrf
                                                    <!--Form body section-->
                                                    <input type="hidden" name="un_id" value="{{ $unv->id  }}">
                                                            <div id="error"></div>
                                                        <div class="from-control row col-md-12">

                                                                <div class="col-md-4">
                                                                        <lable>Select Payment Type</lable>
                                                                        <select class="form-control " name="com_type" id=""  required=""> 
                                                                            <option value="">Select Type</option>
                                                                            @foreach($paytype as $row)
                                                                            <option value="{{$row->id}}">{{$row->type}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        @error('com_type')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                    <lable>Select Course</lable>
                                                                    <select class="form-control" name="com_course" id="com_degree"  required=""> 
                                                                        <option value="">Select Course</option>
                                                                        @foreach($course as $row)
                                                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('com_course')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                    <lable>Select student</lable>
                                                                    <select class="form-control com_student" name="com_student"  id="com_student"  required=""> 
                                                                        <option value="">Select student</option>
                                                                    </select>
                                                                    @error('com_student')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                    </div>

                                                        </div><br>

                                                        <div class="row col-md-12">

                                                                    <div class="col-md-6">
                                                                    <lable>Commission Amount</lable>
                                                                    <input type="text" required="" id="amountc" name="com_amount" class="form-control">
                                                                    @error('com_amount')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                    </div>
                                                                    <!-- <p id="amountc_word" style="padding: 5px;background-color: black;color: gold;font-size: initial;">In Words</p> -->
                                                                    <div class="col-md-6">
                                                                        <lable>upload pay slip</lable>
                                                                        <input type="file" id="com_pay_slip" name="com_pay_slip" class="form-control">
                                                                        @error('com_pay_slip')<ul class="parsley-errors-list filled text-danger" id="parsley-id-13" aria-hidden="false"><li class="">{{ $message }}</li></ul>@enderror
                                                                        <!-- <p id="amount_word" style="padding: 5px;background-color: black;color: gold;font-size: initial;">In Words</p> -->
                                                                    </div>  
                                                        </div>
                                                        <div class="col-md-12 row">
                                                                    <div class="from-control col-md-6">
                                                                    </div>
                                                                    <div class="from-control col-md-6">
                                                                        <br>
                                                                        <img class="rounded " width="120" id="com_pay_slip_upload">
                                                                    </div>
                                                        </div>

                                                        <div class="col-md-12 row" id="com_info">

                                                            <div class="col-md-4 bg-dark">
                                                                <lable>Student payment</lable>
                                                                <div id="com_stu_di_payment"></div>
                                                            </div>

                                                            <div class="col-md-4 bg-dark">
                                                            <lable>company to university payment</lable>
                                                                <div id="com_stu_payment"></div>   
                                                            </div>

                                                            <div class="col-md-4 bg-dark">
                                                                <lable>university to company commission</lable>
                                                                <div id="com_stu_commission"></div>
                                                            </div>
                                                            
                                                        </div>
                                                    <!--End form section--->
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                        
                                                <div class="row col-12">
                                                        <div class="col-sm-8">
                                                                <button type="submit"  class="btn btn-danger form-control waves-effect waves-light">
                                                                        Pay Now<i class="ri-login-circle-fill align-middle ms-2"></i>
                                                                </button>
                                                        </div>
                                                        <div class="col-sm-4">
                                                        <button type="button" class="form-control btn btn-md btn-outline-dark waves-effect waves-light" data-dismiss="modal">close</button>
                                                        </div>
                                                </div>
                                                </form>  
                                                    
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                                <!--END OF THE COMMISSION PAYMENTS MODAL-->
                                <a href="{{ route('uni.add') }}" class="btn btn-md btn-outline-dark mr-2">Go to List</a>
                                <a href="{{ route('edite.uni',$unv->id) }}"><button class="btn btn-dark "   data-toggle="modal" data-target="#notify"><i class="las la-edit font-15"></i>&nbsp;Update</button></a>
                         </div>
                        <!-------End of the button sections with models ------------->

                        
                            
                      </div>
                      <!--end of the student information section -->

                       <!--this is the chart sections--->
                     
                        <!--end of the chart section-->
                        <!--tabs content sections-->
                       
                        <!--tabs content section end-->
                    </div>
                    <!--side section end--->
                    <!--this is the tabs section for university --->
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="w-100 animated-underline-content">
                            <ul class="nav nav-tabs  mb-3" id="lineTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="underline-home-tab" data-toggle="tab" href="#underline-home" role="tab" aria-controls="underline-home" aria-selected="true">General Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="underline-about-tab" data-toggle="tab" href="#underline-about" role="tab" aria-controls="underline-project" aria-selected="false">About</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " id="underline-phd-tab" data-toggle="tab" href="#underline-phd" role="tab" aria-controls="underline-project" aria-selected="false">PHD Degrees</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " id="underline-master-tab" data-toggle="tab" href="#underline-master" role="tab" aria-controls="underline-project" aria-selected="false">Master Degrees</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " id="underline-bachelor-tab" data-toggle="tab" href="#underline-bachelor" role="tab" aria-controls="underline-project" aria-selected="false">Bachelor Degrees</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " id="underline-other-tab" data-toggle="tab" href="#underline-other" role="tab" aria-controls="underline-project" aria-selected="false">Other Degrees</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " id="underline-students-tab" data-toggle="tab" href="#underline-students" role="tab" aria-controls="underline-project" aria-selected="false">Student List</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="lineTabContent-3">

                                <!--genral nformation-->
                               <div class="tab-pane fade show active " id="underline-home" role="tabpanel" aria-labelledby="underline-home-tab">
                                    <div class="d-flex flex-wrap">
                                        <div class="col-xl-12 col-lg-12 col-md-12 ">
                                            <div class="cover-image-area">
                                                <img src="{{ asset('uploads/'.$unv->photo.'') }}" class="cover-img"/>
                                            </div>
                                            <div class="contact-info mb-4">
                                                <p class="strong">About</p>
                                                <p class="font-15">{{ $unv->remarks }}</p>
                                            
                                            </div>
                                        </div>
                                    </div>  
                               </div>
                               <!--eneral information tab end-->
                              
                               <!--about tab-->
                               <div class="tab-pane fade " id="underline-about" role="tabpanel" aria-labelledby="underline-about-tab">
                                    <div class="company-info-right">
                                        <div class="row">
                                            <div class="col-md-4">
                                            <p>Total Degrees : <a class="badge badge-primary text-light">{{ $deeg_total }}</a></p>
                                            <p>Total Students : <a class="badge badge-primary text-light">{{ $stu_total }}</a></p>
                                            <p>Total Courses : <a class="badge badge-primary text-light">{{ $cou_total }}</a></p>
                                            <hr>
                                            <p>Total Payment : <a class="badge badge-info text-light">{{ $payment_total }}</a></p>
                                            <p>Total Commission Payment : <a class="badge badge-warning text-light">{{ $commission_total }}</a></p>
                                            <p>Total Student Payment : <a class="badge badge-primary text-light">{{ $stupaymet_total}}</a></p>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                               <!--About nformation tab end-->

                                <!--phd tab-->
                                <div class="tab-pane fade " id="underline-phd" role="tabpanel" aria-labelledby="underline-phd-tab">
                                    
                                    <table id="list1"  class="table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Corse</th>
                                                <th>Course details</th>
                                                <th>Action</th>
        
                                            </tr>
                                            </thead>
                                        <tbody id="phd_tbl">
                                            @php $i=1  @endphp
                                        @foreach ($phd_degrees as $row)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td><img class="rounded-circle" alt="200x200" width="300" src="{{ asset('uploads/'.$row->photo.'') }}" data-holder-rendered="true" id="updatephoto" style="width:60px;height:60px"></td>
                                                <td>
                                                    {{ $row->name }}<br>
                                                    {{ $row->course }}            
                                                </td>
                                                <td>
                                                Course Fess: {{ $row->fess }} <br>
                                                Course Period: {{ $row->course_period }} <br>
                                                Starting Date: {{ $row->starting_date }} 
                                                </td>
                                                
                                                <td>
                                                <button type="button" class="view_btn   btn btn-outline-warning btn-rounded waves-effect waves-light" value="{{ $row->id }}"  role="button"><i class=" las la-eye"></i></button>
                                                <a href="{{ route('coure.edite',$row->id) }}" type="button" class="btn btn-outline-primary btn-rounded waves-effect waves-light "   role="button"><i class="las la-edit"></i></a>
                                                <a data-id="{{ route('course.delete',$row->id) }}" href="#"  class="delete-confirm btn btn-outline-danger btn-rounded waves-effect waves-light"><i class=" las la-trash"></i></a>
                                                </td>
                                            </tr>
                                            @php $i++  @endphp
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                               <!--phd information tab end-->

                                <!--master tab-->
                                <div class="tab-pane fade " id="underline-master" role="tabpanel" aria-labelledby="underline-master-tab">
                                    
                                    <table id="list2"  class="table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Course</th>
                                                <th>Course details</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody id="master_tbl">
                                                @php $i=1  @endphp
                                                @foreach ($master_degrees as $row)
                                                    <tr>
                                                        <td>{{ $i }}</td>
                                                        <td><img class="rounded-circle" alt="200x200" width="300" src="{{ asset('uploads/'.$row->photo.'') }}" data-holder-rendered="true" id="updatephoto" style="width:60px;height:60px"></td>
                                                        <td>
                                                            {{ $row->name }}<br>
                                                            {{ $row->course }}            
                                                        </td>
                                                        <td>
                                                        Course Fess: {{ $row->fess }} <br>
                                                        Course Period: {{ $row->course_period }} <br>
                                                        Starting Date: {{ $row->starting_date }} 
                                                        </td>
                                                        
                                                        <td>
                                                        <button type="button" class="view_btn   btn btn-outline-warning btn-rounded waves-effect waves-light" value="{{ $row->id }}"  role="button"><i class=" las la-eye"></i></button>
                                                        <a href="{{ route('coure.edite',$row->id) }}" type="button" class="btn btn-outline-primary btn-rounded waves-effect waves-light"   role="button"><i class="las la-edit"></i></a>
                                                        <a data-id="{{ route('course.delete',$row->id) }}" href="#"  class="delete-confirm2 btn btn-outline-danger btn-rounded waves-effect waves-light"><i class=" las la-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    @php $i++  @endphp
                                                @endforeach
                                            </tbody>
                                    </table>
                               </div>
                               <!--master nformation tab end-->


                                <!--bacheloer tab-->
                                <div class="tab-pane fade " id="underline-bachelor" role="tabpanel" aria-labelledby="underline-bachelor-tab">
                                    
                                    <table id="list3"  class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Course</th>
                                            <th>Course details</th>
                                            
                                            <th>Action</th>
    
                                        </tr>
                                        </thead>
                                        <tbody id="bachelor_tbl">
                                        @php $i=1  @endphp
                                            @foreach ($bachelor_degrees as $row)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td><img class="rounded-circle" alt="200x200" width="300" src="{{ asset('uploads/'.$row->photo.'') }}" data-holder-rendered="true" id="updatephoto" style="width:60px;height:60px"></td>
                                                    <td>
                                                        {{ $row->name }}<br>
                                                        {{ $row->course }}            
                                                    </td>
                                                    <td>
                                                    Course Fess: {{ $row->fess }} <br>
                                                    Course Period: {{ $row->course_period }} <br>
                                                    Starting Date: {{ $row->starting_date }} 
                                                    </td>
                                                    
                                                    <td>
                                                    <button type="button" class="view_btn   btn btn-outline-warning btn-rounded waves-effect waves-light" value="{{ $row->id }}"  role="button"><i class=" las la-eye"></i></button>
                                                    <a href="{{ route('coure.edite',$row->id) }}" type="button" class="btn btn-outline-primary btn-rounded waves-effect waves-light"   role="button"><i class="las la-edit"></i></a>
                                                    <a  data-id="{{ route('course.delete',$row->id) }}" href="#"  class="delete-confirm3 btn btn-outline-danger btn-rounded waves-effect waves-light"><i class=" las la-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @php $i++  @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                               <!--bachelr nformation tab end-->

                               <!--other tab-->
                               <div class="tab-pane fade " id="underline-other" role="tabpanel" aria-labelledby="underline-other-tab">
                                    
                                    <table id="list4"  class="table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Course</th>
                                                <th>Course details</th>
                                                
                                                <th>Action</th>
        
                                            </tr>
                                            </thead>
                                        <tbody id="other_tbl">
                                        @php $i=1  @endphp
                                            @foreach ($other_degrees as $row)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td><img class="rounded-circle" alt="200x200" width="300" src="{{ asset('uploads/'.$row->photo.'') }}" data-holder-rendered="true" id="updatephoto" style="width:60px;height:60px"></td>
                                                    <td>
                                                        {{ $row->name }}<br>
                                                        {{ $row->course }}            
                                                    </td>
                                                    <td>
                                                    Course Fess: {{ $row->fess }} <br>
                                                    Course Period: {{ $row->course_period }} <br>
                                                    Starting Date: {{ $row->starting_date }} 
                                                    </td>
                                                    
                                                    <td>
                                                    <button type="button" class="view_btn   btn btn-outline-warning btn-rounded waves-effect waves-light" value="{{ $row->id }}"  role="button"><i class=" las la-eye"></i></button>
                                                    <a href="{{ route('coure.edite',$row->id) }}" type="button" class="btn btn-outline-primary btn-rounded waves-effect waves-light"   role="button"><i class="las la-edit"></i></a>
                                                    <a data-id="{{ route('course.delete',$row->id) }}" href="#"  class="delete-confirm4 btn btn-outline-danger btn-rounded waves-effect waves-light" ><i class=" las la-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @php $i++  @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                               </div>
                               <!--bachelr nformation tab end-->

                                <!--students tab-->
                                <div class="tab-pane fade " id="underline-students" role="tabpanel" aria-labelledby="underline-students-tab">
                                    <div class="table-responsive mb-4">
                                        <table id="list5"  class="table table-striped table-hover">
                                                <thead id="thead">
                                                    <tr>
                                                        <td>....</td>
                                                        <td>....</td>
                                                        <th id="search">Name</th>
                                                        <th id="search">Email</th>
                                                        <th id="search">Phone</th>
                                                        <th id="search">County</th>
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>country</th>
                                                    
                                            
                                                </tr>
                                                </thead>
                                                <tbody id="other_tbl">
                                                    @php $i=1  @endphp
                                                    @foreach ($stu as $row)
                                                        <tr>
                                                            <td>{{ $i }}</td>
                                                            <td><img class="rounded-circle" alt="200x200" width="300" src="{{ asset('uploads/'.$row->photo.'') }}" data-holder-rendered="true" id="updatephoto" style="width:60px;height:60px"></td>
                                                            <td>{{ $row->name }}</td>
                                                            <td>{{ $row->email }}</td>
                                                            <td>{{ $row->phone }}</td>
                                                            <td>{{ $row->country }}</td>
                                                            
                                                            
                                                        </tr>
                                                        @php $i++  @endphp
                                                    @endforeach
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                               <!--About nformation tab end-->
                        </div>
                    <div>


                    <!--tabs sectin end -->

                </div>
            </div>
    <!-----------END SECTION----------->
    
                               <!-- start page title -->
                               





     

       
                   
                    <!--  Modal content for the insert data table -->
                   
                    <!-- 1st Delete Modal HTML -->
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

                        <!-- 2st Delete Modal HTML -->
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
                                  <p>Do you really want to delete these records? This process cannot be undone.</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <a  class="btn btn-danger del2">Delete</a>
                                </div>
                              </div>
                            </div>
                         </div> 
                        <!--End of the modal---->

                        <!-- 3rd Delete Modal HTML -->
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
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <a  class="btn btn-danger del3">Delete</a>
                                </div>
                              </div>
                            </div>
                         </div> 
                        <!--End of the modal---->

                        <!-- 2st Delete Modal HTML -->
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
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <a  class="btn btn-danger del4">Delete</a>
                                </div>
                              </div>
                            </div>
                         </div> 
                        <!--End of the modal---->

                             
                      <!--  Modal content for the delete the records-->
               
                      <!-- Model for delete the content record -->




                            <!--  Modal content for showing the content information -->
                              <div class="modal fade" id="viewModalFullscreenLabel" tabindex="-1" role="dialog" aria-labelledby="#updateModalFullscreenLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                             
                                                <div class="row">
                                                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12">
                                                    <img class="rounded me-2" alt="200x200" width="100%" id="img"  data-holder-rendered="true">
                                                    </div> 

                                                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12">
                                                    <div class="mt-3 mt-xl-0">

                                                        <a class="strong" id="name">Name</a>(<a class="strong" id="ar_name"></a>)
                                                        <h4 class="mb-3 text-black strong" id="course"></h4>(<a class="strong" id="ar_course"></a>)

                                                        <p class="mb-3">
                                                            <a href="#" class="text-muted" id="period"></a>
                                                        </p>
                                                        <p class="mb-3">
                                                            <a href="#" class="text-muted" id="s_date"></a>
                                                        </p>

                                                        <h4>
                                                            <span class="badge badge-success" >Fees</span>
                                                        </h4>
                                                        <h4 class="mb-3">
                                                            <b id="fees"></b>
                                                        </h4>
                                                    <p class="text-muted" id="detail"></p> <hr>
                                                    
                                                    <p class="text-muted" id="ar_detail"></p>  


                                                    </div>
                                                    </div>
                                                </div>
                                        

                                         
                                            <div class="modal-footer">
                                            <div class="row col-12">
                                                <div class="col-sm-2"></div>
                                                    <div class="col-sm-8">
                                                    <button class="btn form-control" data-dismiss="modal"><i class="flaticon-cancel-12"></i>CLOSE</button>
                                                    </div>
                                                <div class="col-sm-2"></div>
                                            </div>
                                            
                                                
                                              </div>
                                        </div><!-- /.modal-content -->
                                 </div> <!--/.modal-dialog -->
                              </div>
                           <!--/.modal -->
                                                            
                        


                         


                        <!------ end of the section ---------->



@endsection

@section('script')
    <script>
CKEDITOR.replace( 'editor' );
CKEDITOR.replace( 'editor1' );

var table = $('#list1').DataTable();
var table = $('#list2').DataTable();
var table = $('#list3').DataTable();      
var table = $('#list4').DataTable(); 

@if($errors->has('name') || $errors->has('course') || $errors->has('period')||$errors->has('degree')||$errors->has('category')
    || $errors->has('fess')||$errors->has('start_date')||$errors->has('details')||$errors->has('photo')||$errors->has('multi_image'))
   $('#exampleModalFullscreenLabel').modal('show');
@endif

@if($errors->has('type') || $errors->has('course_name') || $errors->has('student') || $errors->has('amount') || $errors->has('pay_slip'))
   $('#paymentModalFullscreenLabel').modal('show');
@endif

@if($errors->has('com_type') || $errors->has('com_course') || $errors->has('com_student') || $errors->has('com_amount') || $errors->has('com_pay_slip'))
   $('#commissionModalFullscreenLabel').modal('show');
@endif

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

// 555

//delete model 
//delete sweet alert section
$( document ).ready(function() { 
  $(".delete-confirm").click(function(e){
     e.preventDefault();
     let id = $(this).attr("data-id");

     $('#DeleteModal').modal('show');
     $(".del").attr("href", id)
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
//End of the delte model section for use to 



 //this is for instant image showing for ptofile
 $(document).ready(function(){
            $('#photo_c').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#updatephoto').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    // end of the section

//this is for showing pay slip
 $(document).ready(function(){
            $('#pay_slip').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#pay_slip_upload').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
// end of the section of pay slip

//this is for commission pay slip
$(document).ready(function(){
            $('#com_pay_slip').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#com_pay_slip_upload').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
// end of the section of pay slip


    //this section is for visible for image in case of multiple
            $(document).ready(function(){
        $('#multiImg_c').on('change', function(){ //on file input change
            if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
            {
                var data = $(this)[0].files; //this file data
                
                $.each(data, function(index, file){ //loop though each file
                    if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                        var fRead = new FileReader(); //new filereader
                        fRead.onload = (function(file){ //trigger function on successful read
                        return function(e) {
                            var img = $('<img alt="100x100" width="300" />').addClass('rounded').attr('src', e.target.result) .width(80)
                        .height(80); //create image element 
                            $('#preview_img').append(img); //append image to output element
                        };
                        })(file);
                        fRead.readAsDataURL(file); //URL representing the file's data.
                    }
                });
                
            }else{
                alert("Your browser doesn't support File API!"); //if File API is absent
            }
        });
        });
    //end the section of multile 


$('#list5 #thead th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
            } );

            var table = $('#list5').DataTable({
                "language": {
                            "paginate": {
                                "previous": "<i class='las la-angle-left'></i>",
                                "next": "<i class='las la-angle-right'></i>"
                            }
                        },
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

var table = $('#list5').DataTable(); 

        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        
    $(document).ready(function(){
         
        
       
        //this section for show the data exactly in model
        
        $(document).on('click','.view_btn', function(e){
                e.preventDefault();
                let id= $(this).val();
                //alert(id);

                $.ajax({
                      type: "GET",
                      url: "degree-show/"+id,
                      dataType: "json",
                      success: function(response){
                        //alert(response.status);
                        if(response.status == 404){
                            alert(response.message);
                         }else{
                            //alert(response.status);
                            if(response.status == 200){
                                //alert("Something Special");
                                $('#name').html('Name :'+response.degree.name);
                                $('#ar_name').html(response.degree.ar_name);

                                $('#course').html(response.degree.course);
                                $('#ar_course').html(response.degree.ar_course);

                                $('#detail').html('Details in english :'+response.details);
                                $('#ar_detail').html('Details in arabic :'+response.ar_details);

                                $('#fees').html(response.degree.fess);
                                $('#period').html('Created preiod : '+response.degree.course_period);
                                $('#s_date').html('Starting dates : '+response.degree.starting_date+' / '+response.degree.starting_date2);
                                $('#img').attr('src' , response.img);
                                $('#viewModalFullscreenLabel').modal('show');

                            }
                         }
                      }
                 });

           });


    });

//this is for data tables section 

//this section is for dynamic dropdown section
$(document).ready(function() {
        $('#uni_degree').on('change', function() {
            var stateID = $(this).val();

            //alert(stateID);
           ///alert(stateID);
            if(stateID) {
                $.ajax({
                    url: "{{ url('/payment-student') }}",
                    type: "GET",
                    dataType: "json",
                    data: { id: stateID },
                    success:function(response) {

                        //alert(response);
                        //alert(response.data);
                        //alert(JSON.stringify(response.data));
                        $('#student_id').empty();
                        $('#student_id').append('<option value="" required="">Select Student</option>');
                        $.each(response.data, function($key , item){
                            $('#student_id').append('<option value="'+ item.id +'">'+ item.name +'</option>');
                        });
                    }
                });
            }else{
                $('#student_id').empty();
            }
       });
    });

//end of the daynimic drop down section 

//this section is for dynamic dropdown section
$(document).ready(function() {
        $('#com_degree').on('change', function() {
            var stateID = $(this).val();
           ///alert(stateID);
            if(stateID) {
                $.ajax({
                    url: "{{ url('/payment-student') }}",
                    type: "GET",
                    dataType: "json",
                    data: { id: stateID },
                    success:function(response) {
                        //alert(response.data);
                        //alert(JSON.stringify(response.data));
                        $('#com_student').empty();
                        $('#com_student').append('<option value="" required="">Select Student</option>');
                        $.each(response.data, function($key , item){
                            $('#com_student').append('<option value="'+ item.id +'">'+ item.name +'</option>');
                        });
                    }
                });
            }else{
                $('#com_student').empty();
            }
       });
    });
//end of the daynimic drop down section 

//this section is for dynamic record display
$(document).ready(function() {
    $('#stu_info').hide();
   

        $('#student_id').on('change', function() {
            var stateID = $(this).val();
        
            if(stateID) {
                $.ajax({
                    url: "{{ url('/payment-info') }}",
                    type: "GET",
                    dataType: "json",
                    data: { id: stateID },
                    success:function(response) {
                        $('#stu_info').show();

                        $('#stu_di_payment').empty();
                        $('#stu_payment').empty();
                        $('#stu_commission').empty();
            
                        
                        $('#stu_di_payment').append(response.stu_payment);
                        $('#stu_payment').append(response.payment);
                        $('#stu_commission').append(response.stu_com);

              
                    }
                });
            }
       });
    });
//dynamic record display end

//this section is for dynamic record display
$(document).ready(function() {
    $('#com_info').hide();
   

        $('#com_student').on('change', function() {
            var stateID = $(this).val();
        
            if(stateID) {
                $.ajax({
                    url: "{{ url('/payment-info') }}",
                    type: "GET",
                    dataType: "json",
                    data: { id: stateID },
                    success:function(response) {
                        $('#com_info').show();

                        $('#com_stu_di_payment').empty();
                        $('#com_stu_payment').empty();
                        $('#com_stu_commission').empty();
            
                        
                        $('#com_stu_di_payment').append(response.stu_payment);
                        $('#com_stu_payment').append(response.payment);
                        $('#com_stu_commission').append(response.stu_com);

              
                    }
                });
            }
       });
    });
//dynamic record display end

</script>
@endsection
