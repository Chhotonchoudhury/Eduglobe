@extends('layouts.base')
@section('content')
    
       <!-- start page title -->
    <div class="widget-content widget-content-area">
                   @if(Auth::user()->can('course-category-update')) 
                        <form accept-charset="UTF-8"  method="POST" action="{{ route('category.update') }}" enctype="multipart/form-data">
                          @csrf 

                             <input type="hidden" name="id" value="{{ $cat->id }}">
                            
                                             <div class="col-md-12 row">
                                                        
                                                        <div class="from-control col-md-4">
                                                            <lable>Upload a category picture</lable>
                                                            <input type="file" id="photo"  name="photo"  class="form-control">
                                                            @error('photo')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                                        </div><br>

                                                        <div class="from-control col-md-4">
                                                            <lable>Enter category Name</lable>
                                                            <input type="text"  name="name" placeholder="Enter Category Name" value="{{ old('name', $cat->name) }}" class="form-control">
                                                            @error('name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                                        </div><br>

                                                        <div class="from-control col-md-4">
                                                            <lable>Enter category Name in arabic</lable>
                                                            <input type="text"  name="name_arabic" placeholder="Enter Category Name in arabic" value="{{ old('name_arabic', $cat->name_arabic) }}" class="form-control">
                                                            @error('name_arabic')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                                        </div><br>
                                             </div>

                                              <div class="col-md-12">
                                                              <div class="from-control col-md-6">
                                                                    <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                                                    <div class="col-sm-10">
                                                                    <img class="rounded " alt="100x100" width="120" src="{{ asset('uploads/'.$cat->photo.'') }}" data-holder-rendered="true" id="updatephoto">
                                                                    </div>
                                                                </div>
                                              </div>

                                                    <div class="widget-footer text-right"><br><hr>
                                                        <button type="submit" class="btn btn-outline-primary">Update Now</button>
                                                        <a href="{{ route('category') }}"><button type="button" class="btn btn-outline-dark">Back</button></a>
                                                    </div>
                                      
                        
                        </form>
                    @else
                    <span class="badge badge-danger font-15">&#129488; &nbsp;&nbsp;You can't update the categories .....</span>
                    @endif
    </div>
@endsection

@section('script')

<script>

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