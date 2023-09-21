@extends('layouts.base')
@section('content')
    
       <!-- start page title -->
       <div class="widget-content widget-content-area">
               @if(Auth::user()->can('university-update'))
                        <form  method="POST" action="{{ route('update.uni') }}" enctype="multipart/form-data">
                          @csrf 

                          <input type="hidden" name="id" value="{{ $unv->id }}">
                                      <div class="col-md-12 row">
                                                       <div class="from-control col-md-4">
                                                            <lable>University Name</lable>
                                                            <input type="text" value="{{old('name', $unv->name)}}" name="name" class="form-control">
                                                            @error('name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                                        </div>

                                                        <div class="from-control col-md-4">
                                                            <lable>University Name in arabic</lable>
                                                            <input type="text" value="{{old('arabic_name',$unv->ar_name)}}" placeholder="أدخل اسم الجامعة" name="arabic_name" class="form-control">
                                                            @error('arabic_name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                        </div>

                                                        <div class="from-control col-md-4">
                                                            <lable>University Email</lable>
                                                            <input type="email" name="email" value="{{old('email', $unv->email)}}" class="form-control">
                                                            @error('email')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                                        </div>
                                                      
                                       </div><br>

                                       <div class="col-md-12 row">
                                                    
                                                        <div class="from-control col-md-4">
                                                            <lable>Executive Number</lable>
                                                            <input type="number" name="ex_number" value="{{old('ex_number', $unv->ex_number)}}" class="form-control">
                                                            @error('ex_number')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                                        </div>
                                                        <div class="from-control col-md-4">
                                                            <lable>Executive Email</lable>
                                                            <input type="email" name="ex_email" value="{{old('ex_email', $unv->ex_email)}}" class="form-control">
                                                            @error('ex_email')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                                        </div>

                                                        <div class="from-control col-md-4">
                                                            <lable>University Number</lable>
                                                            <input type="text" name="u_number" value="{{old('u_number', $unv->Unumber)}}" class="form-control">
                                                            @error('u_number')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                                        </div>

                                       </div><br>

                                

                                   <div class="col-md-12 row">

                                        <div class="from-control col-md-6">
                                                         <lable>University Address</lable>
                                                         <textarea class="form-control" name="address">{{old('address', $unv->address)}}</textarea>
                                                         @error('address')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                         </div>

                                        <div class="from-control col-md-6">
                                            <lable>University Description</lable>
                                        <textarea class="form-control" name="remarks">{{old('remarks', $unv->remarks)}}</textarea>
                                        @error('remarks')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                     </div>

                                  </div><hr>

                                    <div class="col-md-12 row">
                                        <div class="from-control col-md-6">
                                            <lable>University Address in arabic</lable>
                                            <textarea class="form-control" name="arabic_address">{{ old('arabic_address',$unv->ar_address) }}</textarea>
                                            @error('arabic_address')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                        </div>

                                        <div class="from-control col-md-6">
                                            <lable>University Description in arabic</lable>
                                        <textarea class="form-control" name="arabic_remarks">{{ old('arabic_remarks',$unv->ar_remarks) }}</textarea>
                                        @error('arabic_remarks')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                        </div>

                                    </div><hr>


                                       <div class="col-md-12 row">
                                                    <div class="from-control col-md-4">
                                                            <lable>University Logo</lable>
                                                            <input type="file" id="logo"  name="logo" class="form-control">
                                                            @error('logo')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                        </div>

                                                        <div class="from-control col-md-8">
                                                            <lable>University Photo</lable>
                                                            <input type="file" id="photo" name="photo" class="form-control">
                                                            @error('photo')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                        </div>
                                                   
                                       </div>

                                       <div class="col-md-12 row">
                                         <div class="from-control col-md-4">
                                            <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                            <img class="rounded " alt="100x100" width="120" src="{{ asset('uploads/'.$unv->logo.'') }}" data-holder-rendered="true" id="updatelogo">
                                            </div>
                                          </div>

                                          <div class="from-control col-md-4">
                                            <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                            @if(!empty($unv->photo))
                                            <img class="rounded img-thumbnail" alt="200x200" width="300" src="{{ asset('uploads/'.$unv->photo.'') }}" data-holder-rendered="true" id="updatephoto">
                                            @else
                                            <img class="rounded img-thumbnail" alt="200x200" width="300" src="{{ asset('assets/images/imageNo/no_photo.jpg') }}" data-holder-rendered="true" id="updatephoto">
                                            @endif
                                            </div>
                                          </div>

                                      </div><br>

                                    
                                      
                                      <div class="widget-footer text-right">
                                                <button type="submit" class="btn btn-outline-primary mr-2">Update Now</button>
                                                <a href="{{ route('uni.add') }}"><button type="button" class="btn btn-outline-dark">Back</button></a>
                                        </div>

               

                        </form>
               @else
               <span class="badge badge-danger font-15">&#129488; &nbsp;&nbsp;You can't access this section, Need admin confirmation .....</span> 
               @endif
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