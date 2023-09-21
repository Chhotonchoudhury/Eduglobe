@extends('layouts.base')
@section('content')
    
       <!-- start page title -->
       <div class="widget-content widget-content-area">

                          <form  method="POST" action="{{ route('pass.reset') }}">
                          @csrf
                                    
                                     <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                                            <div class="col-sm-8">
                                                <input class='form-control @error("old_password") parsley-error  @enderror' type="password" name="old_password" placeholder="Enter Password" id="example-text-input">
                                                @error('old_password')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                            </div>
                                    </div>

                                     
                                    <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                            <div class="col-sm-8">
                                                <input class='form-control @error("new_password") parsley-error  @enderror' type="password" name="new_password" placeholder="Enter Password" id="example-text-input">
                                                @error('new_password')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
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
                                                <a href="{{ route('dashboard') }}"><button type="button" class="btn btn-outline-dark">Back</button></a>
                                    </div>


                          </form>
                                    
 
    </div>
@endsection

@section('script')

<script>
toastr.options = {
  "closeButton": true,
  "positionClass": "toast-top-center",
   }
@if(session('success'))
toastr["success"]("{{ session('success') }}");
@elseif (session('error'))
toastr["error"]("{{ session('error') }}");
@endif
</script>

@endsection