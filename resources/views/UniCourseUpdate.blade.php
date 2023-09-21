@extends('layouts.base')
@section('content')
    
       <!-- start page title -->
       <div class="widget-content widget-content-area">
                        @if(Auth::user()->can('course-update'))
                        <form  method="POST" action="{{ route('course.update') }}"  enctype="multipart/form-data">
                            @csrf
                                  <input type="hidden" name="id" value="{{ $course->id }}">
                                  <input type="hidden" name="uni_id" value="{{ $course->university_id }}">   
                                            <div class="col-md-12 row">
                                                
                                                <div class="from-control col-md-3">
                                                     <lable>Name</lable>
                                                     
                                                     <input type="text"  name="name" value="{{ old('name', $course->name) }}"  class="form-control">
                                                  
                                                     @error('name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-3">
                                                     <lable>Course</lable>
                                                     
                                                     <input type="text"  name="course" value="{{ old('course', $course->course) }}"  class="form-control">
                                                  
                                                     @error('course')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-3">
                                                     <lable>Period</lable>
                                                     
                                                     <input type="text"  name="period"  value="{{ old('period', $course->course_period) }}" class="form-control">
                                                  
                                                     @error('period')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-3">
                                                     <lable>Fess</lable>
                                                     <input type="text" placeholder="$ 500"  name="fees" value="{{ old('fees', $course->fess) }}"  class="form-control">
                                                     @error('fees')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                               

                                            </div><hr>

                                            <div class="col-md-12 row"> 
                                                <div class="from-control col-md-4">
                                                     <lable>Arabic Name</lable>
                                                     <input type="text"  name="arabic_name" value="{{ old('arabic_name',$course->ar_name) }}" placeholder="الرجاء إدخال اسم الدورة باللغة العربية" class="form-control">
                                                     @error('arabic_name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-4">
                                                     <lable>Arabic Course</lable>
                                                     <input type="text"  name="arabic_course" value="{{ old('arabic_course',$course->ar_course) }}" placeholder="الرجاء إدخال الدورة باللغة العربية"  class="form-control">
                                                     @error('arabic_course')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-4">
                                                     <lable>Arabic Period</lable>
                                                     <input type="text"  name="arabic_period" value="{{ old('arabic_period',$course->ar_course_period) }}" placeholder="الرجاء إدخال فترة الدورة باللغة العربية"  class="form-control">
                                                     @error('arabic_period')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 
                                            </div><hr>

                                            <div class="col-md-12 row">

                                                  <div class="from-control col-md-3">
                                                         <lable>Select Degree</lable>
                                                          <select class="form-control" name="degree" required=""> 
                                                            <option value="">Select Degree</option>
                                                            <option value="BACHELOR" @if('BACHELOR' == $course->course_degree) selected @endif>Bachelor</option>
                                                            <option value="MASTER" @if('MASTER' == $course->course_degree) selected @endif>Master</option>
                                                            <option value="PHD" @if('PHD' == $course->course_degree) selected @endif>PHD</option>
                                                            <option value="OTHER" @if('OTHER' == $course->course_degree) selected @endif>Others</option>
                                                            
                                                          </select>
                                                  
                                                     @error('degree')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                  <div class="from-control col-md-3">
                                                         <lable>Select Category</lable>
                                                          <select class="form-control" name="category" required=""> 
                                                            <option value="">Select Category</option>
                                                            @foreach($category as $un)
                                                            <option value="{{ $un->id }}" @if($un->id == $course->category_id) selected @endif>{{ $un->name }}</option>
                                                            @endforeach  
                                                          </select>
                                                  
                                                     @error('category')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                                  </div>


                                                  <div class="from-control col-md-3">
                                                     <lable>start Date</lable>
                                                     <input type="date"  name="start_date" value="{{ old('start_date', $course->starting_date) }}"  class="form-control">
                                                     @error('start_date')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                                 </div>                       

                                                 <div class="from-control col-md-3">
                                                     <lable>2nd Start Date</lable>
                                                     <input type="date"  name="start_date2" value="{{ old('start_date2', $course->starting_date2) }}"  class="form-control">
                                                     @error('start_date2')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                                 </div>

                                            </div><br>

                                            <div class="col-md-12 row">
                                                <div class="from-control col-md-12">
                                                <lable>Course Details in English</lable>
                                                <textarea class="form-control" id="editor" name="details">{{ old('details', $course->detail) }}</textarea>
                                                @error('details')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                                </div>
                                            </div><hr>

                                            <div class="col-md-12 row">
                                                    <div class="col-lg-12 col-sm-12">
                                                    <lable>Course Details in arabic</lable>
                                                        <textarea id="editor1" placeholder="" name="arabic_details">{{ old('arabic_details', $course->ar_detail) }}
                                                        </textarea>
                                                        @error('arabic_details')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                    </div>
                                            </div><hr>

                                            <div class="col-md-12 row">

                                                 <div class="from-control col-md-4">
                                                     <lable>Upload Course photo</lable>
                                                     <input type="file"  name="photo" id="photo" class="form-control">
                                                     @error('photo')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-8">
                                                     <lable>Course related images</lable>  
                                                     <input type="file"  name="multi_image[]" id="multiImg"  class="form-control" multiple="">
                                                     @error('multi_image')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                            </div><br>
                                            
                                            
                                            <div class="col-md-12 row">
                                                
                                                <div class="from-control col-md-4">
                                                    <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                                    <div class="col-sm-10">
                                                    <img class="rounded " alt="100x100" width="200" src="{{ asset('uploads/'.$course->photo.'') }}" data-holder-rendered="true" id="updatephoto">
                                                    </div>
                                                </div>

                                                <div class="from-control col-md-8" >
                                                    <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                                    <div class="col-sm-10" id="preview_img">
                                                    @if($course->related_image != '')
                                                            @php  $img=json_decode($course->related_image);  @endphp                                                          
                                                            @foreach($img as $imgs)
                                                            <img class="rounded " alt="100x100" width="80" src="{{ asset('uploads/'.$imgs.'') }}" data-holder-rendered="true" id="updatephoto"> 
                                                            @endforeach                           
                                                            @endif   
                                                    
                                                    </div>
                                                </div>
                                            </div><br><hr>
                                                                                        
                                          



                                            
                                                    <div class="row mb-3">
                                                            <div class="col-sm-2"></div>
                                                            <div class="col-sm-3">
                                                                    <button type="submit" class="btn btn-outline-primary form-control waves-effect waves-light">
                                                                           Update Couse<i class="ri-login-circle-fill align-middle ms-2"></i>
                                                                    </button>
                                                            </div>
                                                            <div class="col-sm-3">
                                                            <a href="{{ route('view.uni',$course->university_id) }}">
                                                                    <button type="button" class="btn btn-outline-dark form-control waves-effect waves-light">
                                                                            <i class="ri-arrow-left-circle-line ms-2"></i> &nbsp;&nbsp;Back
                                                                    </button>
                                                                </a>
                                                            </div>
                                                    </div>
                        </form>
                        @else    
                        <span class="badge badge-danger font-15">&#129488; &nbsp;&nbsp;You can't access this section, Need admin confirmation .....</span>
                        @endif

        </div>
@endsection
@section('script')
<script>
    CKEDITOR.replace( 'editor' );
    CKEDITOR.replace( 'editor1' );

    @if(session('info'))
         Swal.fire('Information', '{{ session('info') }}', 'info'); 
        @elseif (session('success'))
        Swal.fire('Done', '{{ session('success') }}', 'success');
    @endif


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
            $(document).ready(function(){
        $('#multiImg').on('change', function(){ //on file input change
            if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
            {
                var data = $(this)[0].files; //this file data
                
                $.each(data, function(index, file){ //loop though each file
                    if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                        var fRead = new FileReader(); //new filereader
                        fRead.onload = (function(file){ //trigger function on successful read
                            $('#preview_img').empty();
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

</script>
@endsection