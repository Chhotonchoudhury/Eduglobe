@extends('layouts.base')
@section('content')

<!--this is the cutome course view design link css page -->
<!-- <link href="{{ asset('assets/assets/css/style.css') }}" rel="stylesheet" type="text/css" /> -->
<!--End of the section -->
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

.contact-info {
  background-color: #f5f5f5;
  padding: 10px;
  border-radius: 5px;
}


</style>

    <!------------SECTION COURSE VIEW ----------------------->
    
            <div class="widget-content widget-content-area">
                <div class="layout-spacing col-lg-12 col-lg-12 col-md-12">
                  <div class="row ">


                    <div class="col-xl-3 col-lg-4 col-md-4 mb-4">
                        <div class="profile-left p-1 m-0 " style="background-color: #fff;">
                            <div class="image-area" style="background-color: #fff; padding: 5px; border-radius: 3px;">
                                <input type="hidden" id="stu_id" value="{{ $course->id }}">
                                <img class="user-image" src="{{ (!empty($course->photo)) ? asset('uploads/'.$course->photo.'') : 'https://bootdey.com/img/Content/avatar/avatar7.png' }}">
                            </div>
                            <div class="profile-tabs">
                                <div class="nav flex-column nav-pills mb-sm-0 mb-3 mx-auto" id="v-border-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-border-pills-settings-tab" data-toggle="pill" href="#v-border-pills-payment" role="tab" aria-controls="v-border-pills-settings" aria-selected="false">University Details</a>
                                    <a class="nav-link" id="v-border-pills-course-tab" data-toggle="pill" href="#v-border-pills-course" role="tab" aria-controls="v-border-pills-course" aria-selected="true">General Information</a>
                                    <a class="nav-link" id="v-border-pills-payment-tab" data-toggle="pill" href="#v-border-pills-commission" role="tab" aria-controls="v-border-pills-payment" aria-selected="false">Course PDF Updates</a>
                                    <a class="nav-link" id="v-border-pills-payment-tab" data-toggle="pill" href="#v-border-pills-pay" role="tab" aria-controls="v-border-pills-payment" aria-selected="false">Requerments</a>
                                </div>
                            </div>
                            <div class="highlight-info" style="margin: 0.5px;">
                                <img src="{{ asset('uploads/'.$course->university->logo.'') }}" />
                                <div class="highlight-desc">
                                    @php
                                        $nameParts = explode(' ', $course->university->name);
                                        $shortForm = '';
                                        foreach ($nameParts as $part) {
                                            $shortForm .= strtoupper(substr($part, 0, 1));
                                        }
                                    @endphp
                                  <span class="badge badge-success font-12" > {{ $shortForm }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-8 col-md-8">
                      <!--This is the student information section-->
                      <div class="cover-image-area widget  row">
                        <div class="col-md-4 col-xl-4 col-md-4">
                            <p><i class="las la-book-reader font-20 text-primary"></i>&nbsp;{{ $course->name  }} :&nbsp;{{ $course->course  }}</p>
                            <p><i class="las la-book font-20 text-primary"></i>&nbsp; Category : &nbsp;{{ $course->category->name }}</p>
                            
                            
                        </div>
                        <div class="col-md-4 col-xl-4 col-md-4">
                            <p><i class="las la-tags font-20 text-primary"></i>&nbsp; Fees : &nbsp;{{ $course->fess }}</p>  
                            <p><i class="las la-hourglass-end font-20 text-primary"></i>&nbsp; Period : &nbsp;{{ $course->course_period }}</p>
                            <p class="font-15"><i class="las la-university font-20 text-primary"></i>&nbsp;University : {{ $course->university->name  }}</p>                  
                        </div>

                        <div class="col-md-4 col-xl-4 col-md-4">
                            <p><i class="las la-graduation-cap font-20 text-primary"></i>&nbsp; Degree : &nbsp;{{ $course->course_degree  }}</p>
                            <p class="font-15"><i class="las la-clock font-20 text-primary"></i>&nbsp;1st Start Date : {{ \Carbon\Carbon::parse($course->starting_date)->format('d-m-Y') }}</p>
                            <p class="font-15"><i class="las la-clock font-20 text-primary"></i>&nbsp;2nd Start Date : {{ \Carbon\Carbon::parse($course->starting_date2)->format('d-m-Y') }}</p>
                        </div>

                        <div class="d-flex mt-2">
                            <a href="{{route('cor')}}" class="team-right"><button class="btn btn-dark float-right" ><i class="las la-arrow-left"></i>&nbsp;Back</button></a>&nbsp;&nbsp; 
                                   @if(!empty($pdf->process_status))   
                                     @if($pdf->process_status == 2)
                                        <a href="{{ route('course.pdf',$course->id) }}" class="btn btn-info "><i class="las la-cloud-download-alt font-20"></i> Download pdf</a>
                                      @else
                                        <a href="{{ route('course_uploaded.pdf',$course->id) }}" class="btn btn-info "><i class="las la-cloud-download-alt font-20"></i> Download pdf</a>
                                     @endif
                                    @endif&nbsp;&nbsp;
       
                            <a href="{{ route('edite.cor',$course->id) }}"><button class="btn btn-warning"   data-toggle="modal" data-target="#notify"><i class="las la-edit font-15"></i>&nbsp;Update</button></a>                            
                        </div>
                            
                      </div>
                      <!--end of the student information section -->

                       <!--this is the chart sections--->
                     
                        <!--end of the chart section-->
                        <div class="col-xl-12 col-lg-12 col-md-12 tab-area-content p-0">
                            <div class="row">
                              <!--tabs content sections-->
                            <div class="tab-content" id="v-border-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-border-pills-payment" role="tabpanel" aria-labelledby="v-border-pills-payment-tab">
                                    <div class="media">
                                        <div class="profile-shadow w-100">

                                        <div class="d-flex flex-wrap">
                                            <div class="col-xl-8 col-lg-4 col-md-4 ">
                                                <div class="cover-image-area">
                                                    <img src="{{ asset('uploads/'.$course->university->photo.'') }}" class="cover-img"/>
                                                </div>
                                                <div class="contact-info mb-4">
                                                    <p class="strong">About</p>
                                                    <p class="font-12">{{ $course->university->remarks }}</p>
                                                
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-4 col-md-4">
                                                <div class="contact-info mb-4 ">
                                                    <div class="right-big-banner">
                                                        <img src="{{ asset('uploads/'.$course->university->logo.'') }}" style="border-radius:25px;" class="img-fluid" alt="logo"> 
                                                    </div>
                                                </div>
                                                <div class="contact-info mb-4 ">
                                                    <p class="project-name mt-1 text-truncate">{{$course->university->name}}</p>
                                                    <p class="project-date text-truncate">Created on {{ $course->university->created_at }}</p>
                                                    <p class="overflow-auto"><a href="#"><i class="las la-envelope"></i>&nbsp;&nbsp;{{  $course->university->email }}</a></p>
                                                    <p><a href="#"><i class="las la-envelope"></i>{{ $course->university->ex_email }}</a></p>
                                                    <p><a href="#"><i class="las la-phone"></i>{{ $course->university->ex_number }}</a></p>
                                                    <p><a href="#"><i class="las la-barcode"></i>{{ $course->university->Unumber }}</a></p>
                                                </div>
                                            </div>


                                        </div>   
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="v-border-pills-course" role="tabpanel" aria-labelledby="v-border-pills-course-tab">
                                    <div class="media w-100" >         
                                        <div class="profile-shadow">
                                          <h5 class="bg-light p-2" style="border-left: 5px solid #f3a129 !important;">Course Description</h5>
                                            <p class="mb-0" >{!! $course->detail !!}</p>
                                            <h5 class="mt-4 bg-light p-2" style="border-left: 5px solid #f3a129 !important;">Course Requirements</h5>
                                            <ul class=" ">
                                                @php $i=1  @endphp
                                                @foreach ($course_req as $req)
                                                <li>{{ $req->requirment }}</li>
                                                @endforeach
                                            </ul>  
                                        </div>   
                                    </div>
                                </div>

                                
                                <div class="tab-pane fade" id="v-border-pills-commission" role="tabpanel" aria-labelledby="v-border-pills-settings-tab">
                                    <div class="media">
                                        <div class="profile-shadow w-100 p-0">
                                        <p class="card-title font-15 bg-light p-2 m-1" style="border-left: 5px solid #f3a129 !important;"> Course PDF</p>
                                            @if(Auth::user()->can('course-pdf')) 
                                            <form  method="POST" action="{{ route('course.pdf.design') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="d-flex flex-wrap">
                                                        <input type="hidden"  name="course_id" value="{{ $course->id  }}">
                                                        <div class="col-md-12 row">
                                                                <div class="col-lg-12 col-sm-12 mb-4">
                                                                <lable>Design Your PDF page</lable>
                                                                    <textarea id="editor" name="details">
                                                                        @if($pdf){!! $pdf->details !!}@endif
                                                                    </textarea>
                                                                    @error('details')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                                </div>
                                                        </div>

                                                        <div class="col-md-12 row mb-4">
                                                            
                                                            <div class="col-md-4">
                                                                <lable>Upload Designed file</lable>
                                                                <input type="file" name="pdf" class="form-control">
                                                                @error('pdf')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                            </div>
                                                            <div class="col-md-4">
                                                                <lable>Active PDf</lable>
                                                                <select class="form-control" name="option">
                                                                    <option value="">Select</option>
                                                                    <option value="1" @if($pdf) @if($pdf->process_status == 1){{ "selected" }}@endif @endif>Uploaded</option>
                                                                    <option value="2" @if($pdf) @if($pdf->process_status == 2){{ "selected" }}@endif @endif>Edited</option>
                                                                </select>
                                                                @error('option')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                            </div>
                                                            <div class="col-md-4"><br>
                                                                    <button type="submit" class="btn btn-primary form-control waves-effect waves-light">
                                                                            Update All<i class="ri-login-circle-fill align-middle ms-2"></i>
                                                                    </button>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3">
                                                                    
                                                            </div>                          
                                                    </div> 
                                            </form>  
                                            @else
                                            <span class="badge badge-danger font-15">&#129488; &nbsp;&nbsp;You can't access this section, Need admin confirmation .....</span>
                                            @endif    
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-border-pills-pay" role="tabpanel" aria-labelledby="v-border-pills-settings-tab">
                                    <div class="media">
                                    <div class="profile-shadow w-100 p-0">
                                            <div class="d-flex justify-content-between align-items-center mb-2 bg-light m-1" style="border-left: 5px solid #f3a129 !important;">
                                                <p class="card-title font-15 pl-2 " >Course Requirements</p>
                                                <a class="btn btn-primary " data-toggle="modal" data-target="#exampleModalFullscreenLabel">Add Requirements</a>
                                            </div>
                                            <div class="table-responsive mb-0">
                                                <table id="list"  class="table table-bordered table-hover" style="width: 100%;">
                                                <thead style="background-color: #f2f2f2;">
                                                <tr>  
                                                    <th>Requirements</th>
                                                    <th>Requirement Field</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php $i=1  @endphp
                                                @foreach ($course_req as $req)
                                                    <tr>
                                                    <td>{{ $req->requirment }}</td>
                                                    <td>{{ $req->input }}</td>             
                                                    <td class="d-flex">
                                                            <button class="btn btn-info waves-effect waves-light view_btn" value="{{ $req->id }}" ><i class="las la-edit"></i></button>
                                                            <a data-id="{{ route('req_delete.cor',$req->id) }}" href="#"  class="delete-confirm btn btn-danger waves-effect waves-light" role="button"><i class=" las la-trash"></i></a>
                                                    </td>
                                                    </tr>
                                                    @php $i++  @endphp
                                                @endforeach
                                                    </tbody> 
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                    

                            </div>
                              <!--tabs content section end-->
                            </div>
                        </div>
                        <!--- end --->
                    </div>

                  </div>
                </div>
            </div>
    <!-----------END SECTION----------->


                <!--This is the main section -->
                <!--end of the section -->
      


            <!--  Modal content for the insert data table -->
            <div class="modal fade bs-example-modal-lg" id="exampleModalFullscreenLabel" tabindex="-1" role="dialog" aria-labelledby="#exampleModalFullscreenLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalFullscreenLabel">Requirments Entry</h6>
                        
                    </div>
                    <div class="modal-body">
                    <form id="addRequirment" action="{{ route('req_store.cor') }}" method="POST">
                    @csrf
                        <!--Form body section-->
                        
                        <input type="hidden" name="id" value="{{ $course->id  }}">
                            <div class="from-control col-md-12">
                                        <lable>Requirments field Name</lable>
                                        <input type="text" class="form-control" name="input" required>         
                            </div><br>

                            <div class="from-control col-md-12">
                                        <lable>Enter Requirment in English</lable>
                                        <textarea class="form-control remarks" name="remarks" required></textarea>
                                        
                            </div><br>

                            <div class="from-control col-md-12">
                                        <lable>Enter Requirment in Arabic</lable>
                                        <textarea class="form-control remarks" name="arabic_remarks" required></textarea>
                                        
                            </div>
                        <!--End form section--->
                        
                    </div>
                    <div class="modal-footer">
                            
                    <div class="row col-12">
                            <div class="col-sm-8">
                                    <button type="submit"  class="btn btn-primary form-control waves-effect waves-light">
                                            Add Now<i class="ri-login-circle-fill align-middle ms-2"></i>
                                    </button>
                            </div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-dark form-control waves-effect waves-light" data-dismiss="modal">close</button>
                            </div>
                    </div>
                    </form>  
                        
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->



            
            <!--  Modal content for updating the records data table -->
            <div class="modal fade bs-example-modal-lg" id="updateModalFullscreenLabel" tabindex="-1" role="dialog" aria-labelledby="#exampleModalFullscreenLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="updateModalFullscreenLabel">Update Requirments Entry</h6>
                    </div>
                    <div class="modal-body">
                    <form id="addRequirment" action="{{ route('req_update.cor') }}" method="POST">
                    @csrf
                        <!--Form body section-->
                        
                        <input type="hidden" name="id" id="id" >
                            <div class="from-control col-md-12">
                                        <lable>Requirments field Name</lable>
                                        <input type="text" class="form-control" name="input" id="input" required>         
                            </div><br>

                            <div class="from-control col-md-12">
                                        <lable>Enter Requirment in English</lable>
                                        <textarea class="form-control remarks" name="remarks" id="remarks" required=""></textarea>
                            </div><br>

                            <div class="from-control col-md-12">
                                        <lable>Enter Requirment in Arabic</lable>
                                        <textarea class="form-control remarks" name="arabic_remarks" id="arabic_remarks" required=""></textarea>
                            </div>

                        <!--End form section--->
                        
                    </div>
                    <div class="modal-footer">
                            
                    <div class="row col-12">
                            <div class="col-sm-8">
                                    <button type="submit"  class="btn btn-primary form-control waves-effect waves-light">
                                            Update Now<i class="ri-login-circle-fill align-middle ms-2"></i>
                                    </button>
                            </div>
                            <div class="col-sm-4">
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




@endsection

@section('script')
<script>

//this is the delete model show section
$( document ).ready(function() { 
  $(".delete-confirm").click(function(e){
     e.preventDefault();
     let id = $(this).attr("data-id");
     $('#DeleteModal').modal('show');
     $(".del").attr("href", id)
  });
});
//End of the delete model show section 


// CKEDITOR.replace( 'editor' );

ClassicEditor
        .create( document.querySelector( '#editor' ),{
            ckfinder:{
                uploadUrl: '{{ route('ckeditor.upload').'?_token='.csrf_token() }}'
            }
        } )
        .catch( error => {
            console.error( error );
        } );
//this is the sweet alert notification
// @if(session('info'))
//      Swal.fire('Info', '{{ session('info') }}', 'info'); 
// @elseif (session('s_success'))
//         Swal.fire('Done', '{{ session('s_success') }}', 'success');
// @elseif (session('warning'))
//         Swal.fire('Danger', '{{ session('warning') }}', 'error');
//  @endif

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


 $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        
    $(document).ready(function(){
        //this section for show the data exactly in model
        $(document).on('click','.view_btn', function(e){
            //$('#remarks').val('Something special for you!');
            
                e.preventDefault();
                let id= $(this).val();
                //alert(id);
                //alert(id);

                $.ajax({
                      type: "GET",
                      url: "course-requirement/"+id,
                      dataType: "json",
                      success: function(response){
                            if(response.status == 200){
                                $('#input').val(response.req.input);
                                $('#remarks').val(response.req.requirment);
                                $('#arabic_remarks').val(response.req.ar_requirment);
                                $('#id').val(response.req.id);
                                $("#updateModalFullscreenLabel").modal("show");
                                
                            }else{
                                alert("something error hap");
                            }
                         
                      }
                 });

           });


    });

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
//end of the section 
</script>      
@endsection