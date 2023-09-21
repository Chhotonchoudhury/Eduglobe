@extends('student.layouts.base')
@section('content')
    
       <!-- start page title -->
       <div class="widget-content widget-content-area">

                          <form  method="POST" action="{{ route('student_pass.reset') }}">
                          @csrf
                                    
                                     <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                                            <div class="col-sm-8">
                                                <input class='form-control @error("old_password") parsley-error  @enderror' type="password" name="old_password" placeholder="Enter Password" id="example-text-input">
                                                @error('old_password')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger parsley-required ">{{ $message }}</li></ul>@enderror
                                            </div>
                                    </div>

                                     
                                    <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                            <div class="col-sm-8">
                                                <input class='form-control @error("new_password") parsley-error  @enderror' type="password" name="new_password" placeholder="Enter Password" id="example-text-input">
                                                @error('new_password')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger parsley-required ">{{ $message }}</li></ul>@enderror
                                            </div>
                                    </div>

                                     
                                    <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                            <div class="col-sm-8">
                                                <input class='form-control' type="password" name="new_password_confirmation" placeholder="Enter Confirm password" id="example-text-input">
                                            </div>
                                    </div>

                                  <hr>

                                  <div class="widget-footer text-left">
                                                <button type="submit" class="btn btn-warning mr-2">Update Now</button>
                                                <a href="{{ route('student_dashboard') }}"><button type="button" class="btn btn-outline-dark">Back</button></a>
                                    </div>


                          </form>
                                    
 
    </div>
@endsection

@section('script')

<script>

@if(session('info'))
     Swal.fire('Info', '{{ session('info') }}', 'info'); 
@elseif (session('success'))
        Swal.fire('Done', '{{ session('success') }}', 'success');
@elseif (session('error'))
        Swal.fire('Danger', '{{ session('error') }}', 'error');
 @endif

</script>

@endsection