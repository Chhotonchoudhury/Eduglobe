@extends('student.layouts.base')
@section('content')
    
       <!-- start page title -->
       <div class="widget-content widget-content-area">

                          <form  method="POST" action="{{ route('student_store_profile') }}" enctype="multipart/form-data">
                          @csrf 

                          <input type="hidden" name="id" value="{{ $student->id }}">
                          <div class="col-md-12 row">
                                                
                                                <div class="from-control col-md-6">
                                                     <lable>Your Name</lable>
                                                     <input type="text"  name="name" value="{{ old('name' , $student->name) }}" class="form-control">
                                                     @error('name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger parsley-required">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-2">
                                                     <lable> Age</lable>
                                                     <input type="number"  name="age" value="{{ old('age', $student->age ) }}"  class="form-control">
                                                     @error('age')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger parsley-required">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-4">
                                                     <lable> Country</lable>
                                                     <input type="text"  name="country" value="{{ old('country' , $student->country) }}"  class="form-control">
                                                     @error('country')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger parsley-required">{{ $message }}</li></ul>@enderror
                                                 </div>


                                            </div><br>


                                            <div class="col-md-12 row">
                                                
                                                <div class="from-control col-md-6">
                                                     <lable>Your Phone</lable>
                                                     <input type="number"  name="phone" value="{{ old('phone' , $student->phone) }}"  class="form-control"> 
                                                     @error('phone')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger parsley-required">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-6">
                                                     <lable>Your Email</lable>
                                                     <input type="email"  name="email" value="{{ old('email' , $student->email) }}"  class="form-control" readonly="">                 
                                                     @error('email')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger parsley-required">{{ $message }}</li></ul>@enderror
                                                 </div>

                                            </div><br>


                                            <div class="col-md-12 row">

                                                 <div class="from-control col-md-12">
                                                     <lable>Upload Your profile photo</lable>  
                                                     <input type="file"  name="photo" id="photo"  class="form-control">
                                                     @error('photo')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger parsley-required">{{ $message }}</li></ul>@enderror
                                                 </div>

                                            </div><br>

                                            <div class="col-md-12 row">
                                                <!-- <div class="from-control col-md-6"></div> -->
                                                <div class="from-control col-md-12">
                                                    <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                                    <div class="col-sm-10">
                                                    <img class="rounded " alt="100x100" width="200" src="{{ asset('uploads/'.$student->photo.'') }}" data-holder-rendered="true" id="updatephoto">
                                                    </div>
                                                </div>
                                            </div><br><hr>
                                            
                                            
                                                    <div class="row mb-3">
                                                            <div class="col-sm-2"></div>
                                                            <div class="col-sm-3">
                                                                    <button type="submit" class="btn btn-warning form-control waves-effect waves-light">
                                                                            Update Profile<i class="ri-login-circle-fill align-middle ms-2"></i>
                                                                    </button>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <a href="{{ route('student_profile') }}">
                                                                    <button type="button" class="btn btn-dark form-control waves-effect waves-light">
                                                                    Back
                                                                    </button>
                                                                </a>
                                                            </div>
                                                    </div>

                                      </form>
                                    

    </div>
@endsection

@section('script')

<script>

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


//this is the sweet alert notification
@if(session('info'))
     Swal.fire('Info', '{{ session('info') }}', 'info'); 
@elseif (session('s_success'))
        Swal.fire('Done', '{{ session('s_success') }}', 'success');
@elseif (session('warning'))
        Swal.fire('Danger', '{{ session('warning') }}', 'Danger');
 @endif

</script>

@endsection