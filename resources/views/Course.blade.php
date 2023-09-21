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
</style>

             <div class="widget-content-area">
                                    <div class="w-100 animated-underline-content">
                                        <ul class="nav nav-tabs  mb-0" id="lineTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link @if(!$errors->any()) active @endif" id="underline-about-tab" data-toggle="tab" href="#underline-about" role="tab" aria-controls="underline-about" aria-selected="true">Courses List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link @if($errors->any()) active @endif" id="underline-project-tab" data-toggle="tab" href="#underline-project" role="tab" aria-controls="underline-project" aria-selected="false">Course Add</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="lineTabContent-3">
                                            
                                            <div class="tab-pane fade @if(!$errors->any()) show active @endif" id="underline-about" role="tabpanel" aria-labelledby="underline-about-tab">
                                                    <!--start content--->
                                            @if(Auth::user()->can('course-view')) 
                                                <!-- this is the search section --->    
                                                <div class="row ml-3 mr-3 mb-1 mt-0 p-1 bg-light" style="border-left: 5px solid #f3a129">
                                                    <div class="col-md-6">
                                                    <p class="mb-0" style="font-size: 15px;margin-top: 8px;font-family: sans-serif;font-weight: bold;color:#2262c6">Courses List</p>
                                                    </div>
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="tblSearch" placeholder="Search data.." class="form-control form-control-sm float-end mt-1" style="height: 35px;">
                                                    </div>
                                                </div>
                                                <!-- end of the search section --->
                                                <div class="table-responsive mb-0 p-0">
                                                <table id="list"  class="table table-bordered table-hover" style="width: 100%;">
                                                    <thead  style="background-color: #f2f2f2;">
                                                    <tr>
                                                     
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Period</th>
                                                        <th>Start date</th>
                                                        <th>Action</th>
                
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                  
                                                    @foreach ($courses as $row)
                                                        <tr>
                                                        <td><a href="{{ route('view.cor',$row->id) }}"><img class="rounded-circle" alt="200x200" width="300" src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):('https://bootdey.com/img/Content/avatar/avatar7.png') }}" data-holder-rendered="true"  style="width:40px;height:40px"></a></td>
                                                        <td>{{$row->name}}</td>
                                                        <td>{{$row->category->name}}</td>
                                                        <td>{{$row->course_period}}</td>
                                                        <td>
                                                        {{ date('F j, Y', strtotime($row->starting_date)) }} / 
                                                        {{ date('F j, Y', strtotime($row->starting_date2)) }}
                                                        </td>
                                                        <td class="d-flex">
                                                        <a   href="{{ route('view.cor', $row->id) }}" role="button"><i class="las la-eye font-25 text-info"></i></a>
                                                        @if(Auth::user()->can('course-update'))
                                                        <a   href="{{ route('edite.cor',$row->id) }}" role="button"><i class="las la-edit font-25 text-primary"></i></a>
                                                        @endif
                                                        @if(Auth::user()->can('course-delete'))
                                                        <a class="delete-confirm" data-id="{{ route('delete.cor',$row->id) }}" href="#"><i class="las la-trash font-25 text-danger"></i></a>
                                                        <!-- <a  onclick="return confirm('Are you sure to delete the record permanently ?')"  href="{{ route('delete.cor',$row->id) }}" role="button"><i class="las la-trash font-25 text-danger"></i></a> -->
                                                        @endif
                                                        </td>
                                                        </tr>
                                                       
                                                    @endforeach
                                                    
                                                     </tbody> 
                                                </table></div>
                                            @else
                                            <span class="badge badge-danger font-15">&#129488; &nbsp;&nbsp;You can't access courses .....</span>
                                            @endif
                                                    <!--end content-->
                                            </div>
                                            <!-- Projects -->
                                            <div class="tab-pane fade @if($errors->any()) show active @endif" id="underline-project" role="tabpanel" aria-labelledby="underline-project-tab">
                                                <!--start content-->
                                   
                                @if(Auth::user()->can('course-add')) 
                                <form  method="POST" action="{{ route('store.cor') }}" enctype="multipart/form-data">
                                     @csrf
                                            <div class="col-md-12 row"> 
                                                <div class="from-control col-md-4">
                                                     <lable>Name</lable>
                                                     <input type="text"  name="name" value="{{ old('name') }}" class="form-control">
                                                     @error('name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-4">
                                                     <lable>Course</lable>
                                                     <input type="text"  name="course" value="{{ old('course') }}"  class="form-control">
                                                     @error('course')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-4">
                                                     <lable>Period</lable>
                                                     <input type="text"  name="period" value="{{ old('period') }}"  class="form-control">
                                                     @error('period')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
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
                                                <div class="from-control col-md-4">
                                                     <lable>1st Start Date</lable>
                                                     <input type="date"  name="start_date" value="{{ old('start_date') }}"  class="form-control">
                                                     @error('start_date')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                </div>

                                                <div class="from-control col-md-4">
                                                     <lable>2nd Start Date</lable>
                                                     <input type="date"  name="start_date2" value="{{ old('start_date2') }}"  class="form-control">
                                                     @error('start_date2')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                </div>

                                                <div class="from-control col-md-4">
                                                     <lable>Fess</lable>
                                                     <input type="text" placeholder="$ 500"  name="fees" value="{{ old('fees') }}"  class="form-control">
                                                     @error('fees')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                            </div><br>


                                            <div class="col-md-12 row"> 
                                                <div class="from-control col-md-4">
                                                         <lable>Select Degree</lable>
                                                          <select class="form-control" name="degree" required=""> 
                                                            <option value="">Select Degree</option>
                                                            <option value="BACHELOR">Bachelor</option>
                                                            <option value="MASTER">Master</option>
                                                            <option value="PHD">PHD</option>
                                                            <option value="OTHER">Others</option>
                                                            
                                                          </select>
                                                  
                                                     @error('degree')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                <div class="from-control col-md-4">
                                                         <lable>Select category</lable>
                                                          <select class="form-control" name="category" required=""> 
                                                            <option value="">Select Category</option>
                                                            @foreach($category as $un)
                                                            <option value="{{ $un->id }}">{{ $un->name }}</option>
                                                            @endforeach  
                                                          </select>
                                                  
                                                     @error('category')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-4">
                                                         <lable>Select University</lable>
                                                          <select class="form-control" name="university" required=""> 
                                                            <option value="">Select University</option>
                                                            @foreach($university as $un)
                                                            <option value="{{ $un->id }}">{{ $un->name }}</option>
                                                            @endforeach  
                                                          </select>
                                                  
                                                     @error('university')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>
                                            </div><br>
                                            
                                            <div class="col-md-12 row">
                                                    <div class="col-lg-12 col-sm-12">
                                                    <lable>Course Details in English</lable>
                                                        <textarea id="editor" name="details">
                                                        </textarea>
                                                        @error('details')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
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
                                            
                                            

                                            <!-- <div class="col-md-12 row">
                                                <div class="from-control col-md-12">
                                                <lable>Course Details</lable>
                                                <textarea class="form-control" name="details">{{ old('details') }}</textarea>
                                                @error('details')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                </div>
                                            </div><br> -->


                                            <div class="col-md-12 row">
                                                 <div class="from-control col-md-4">
                                                     <lable>Upload Course Main photo</lable>  
                                                     <input type="file"  name="photo" id="photo"  class="form-control">
                                                     @error('photo')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-8">
                                                     <lable>Course related images</lable>  
                                                     <input type="file"  name="multi_image[]" id="upload-img"  class="form-control" multiple="">
                                                     @error('multi_image')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
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
                                                <div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>
                                                    <!-- <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                                    <div class="col-sm-10" id="preview_img">
                                                    <img alt="100x100" class="rounded" src="{{ asset('assets/assets/img/NoBg.jpeg') }}" width="120"   />
                                                    <img alt="100x100" class="rounded" src="{{ asset('assets/assets/img/NoBg.jpeg') }}" width="120"   />
                                                    <img alt="100x100" class="rounded" src="{{ asset('assets/assets/img/NoBg.jpeg') }}" width="120"   />
                                                    </div> -->
                                                </div>


                                            </div><br><hr>
                                            
                                                    <div class="row mb-3">
                                                            <div class="col-sm-2"></div>
                                                            <div class="col-sm-3">
                                                                    <button type="submit" class="btn btn-outline-primary form-control waves-effect waves-light">
                                                                            Add Couse<i class="ri-login-circle-fill align-middle ms-2"></i>
                                                                    </button>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <a href="{{ route('dashboard') }}">
                                                                    <button type="reset" class="btn btn-outline-dark form-control waves-effect waves-light">
                                                                            <i class="fas fa-undo ms-2"></i> &nbsp;&nbsp;Reset
                                                                    </button>
                                                                </a>
                                                            </div>
                                                    </div>
                                </form>
                                @else
                                <span class="badge badge-danger font-15">&#129488; &nbsp;&nbsp;You can't access this section, Need admin confirmation .....</span>
                                @endif
                                                <!--end contetn-->
                                            </div>
                                                                                

                                        </div>
                                    </div>
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
       <!-- start page title -->
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


CKEDITOR.replace( 'editor' );
CKEDITOR.replace( 'editor1' );
// this is the toaster notification
toastr.options = {
  "closeButton": true,
//   "positionClass": "toast-top-center",
   }
@if(session('success'))
toastr["success"]("{{ session('success') }}");
@elseif(session('info'))
toastr["info"]("{{ session('info') }}");
@elseif (session('warning'))
toastr["error"]("{{ session('warning') }}");
@endif
//end of the tostar Notification

// @if(session('info'))
//          Swal.fire('Information', '{{ session('info') }}', 'info'); 
//         @elseif (session('success'))
//         Swal.fire('Done', '{{ session('success') }}', 'success');
//         @elseif (session('warning'))
//         Swal.fire('Danger', '{{ session('warning') }}', 'error');
//  @endif


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

       //this section is for visible for image in case of multiple

                        var imgUpload = document.getElementById('upload-img')
                    , imgPreview = document.getElementById('img-preview')
                    , imgUploadForm = document.getElementById('form-upload')
                    , totalFiles
                    , previewTitle
                    , previewTitleText
                    , img;

                    imgUpload.addEventListener('change', previewImgs, true);

                    function previewImgs(event) {
                    totalFiles = imgUpload.files.length;
                    
                        if(!!totalFiles) {
                        imgPreview.classList.remove('img-thumbs-hidden');
                    }
                    
                    for(var i = 0; i < totalFiles; i++) {
                        wrapper = document.createElement('div');
                        wrapper.classList.add('wrapper-thumb');
                        removeBtn = document.createElement("span");
                        nodeRemove= document.createTextNode('x');
                        removeBtn.classList.add('remove-btn');
                        removeBtn.appendChild(nodeRemove);
                        img = document.createElement('img');
                        img.src = URL.createObjectURL(event.target.files[i]);
                        img.classList.add('img-preview-thumb');
                        wrapper.appendChild(img);
                        wrapper.appendChild(removeBtn);
                        imgPreview.appendChild(wrapper);
                    
                        $('.remove-btn').click(function(){
                        $(this).parent('.wrapper-thumb').remove();
                        });    

                    }
                    
                    
                    }
        //     $(document).ready(function(){
        // $('#multiImg').on('change', function(){ //on file input change
        //     if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        //     {
        //         var data = $(this)[0].files; //this file data
        //         $('#preview_img').html("");
        //         $.each(data, function(index, file){ //loop though each file
        //             if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
        //                 var fRead = new FileReader(); //new filereader
        //                 fRead.onload = (function(file){ //trigger function on successful read
        //                 return function(e) {
                            
        //                     var img = $('<img alt="100x100" width="300" />').addClass('rounded').attr('src', e.target.result) .width(80)
        //                 .height(80); //create image element 
        //                     $('#preview_img').append(img); //append image to output element
        //                 };
        //                 })(file);
        //                 fRead.readAsDataURL(file); //URL representing the file's data.
        //             }
        //         });
                
        //     }else{
        //         alert("Your browser doesn't support File API!"); //if File API is absent
        //     }
        // });
        // });
    //end the section of multile 

$(document).ready(function() {
    let myDataTable = $('#list').DataTable({
        "dom": 'rt<"bottom"il><"clear">',
        paging: false,
        bFilter: false,
        ordering: false,
        searching: true,
        fixedHeader: true,
        // Hide the length change option
    });

    $('#tblSearch').on('input', function() {
    // Get the search term entered by the user
    var searchTerm = $(this).val();
    // Call the DataTables search() method to perform the search
    myDataTable.search(searchTerm).draw();
    });

  
} );


 $(document).ready(function(){
   
    $('.update-history').click(function(){
        const id = $(this).attr('data-id');
       
          $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url:"{{ url('/expense-upData')  }}",
            type: 'GET',
            dataType: 'json',
            data: { id: id },
            success:function(response){
                $('#diplay_info').html('');
                let inc = 1;
                $.each(response.data, function($key , item){
                    //$('#diplay_info').html(response);
                    $('#diplay_info').append(
                        '<tr>\
                        <td>'+inc+'</td>\
                        <td>'+item.pre_type+'</td>\
                        <td>'+item.updated_type+'</td>\
                        <td>'+item.pre_payment_date+'</td>\
                        <td>'+item.updated_payment_date+'</td>\
                        <td>'+item.pre_amount+'</td>\
                        <td>'+item.updated_amount+'</td>\
                        <td>'+item.pre_description+'</td>\
                        <td>'+item.updated_description+'</td>\
                        <td>'+item.created_at+'</td>\
                        </tr>'
                    )
                    inc++;
                });
                //console.log(response.data);
                //$('#diplay_info').html(response);
            }
          });
       
    })
 })



 

</script>
@endsection 