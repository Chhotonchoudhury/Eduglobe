@extends('layouts.base')
@section('content')
                        <div class="widget-content-area" >
                            <form  method="POST" action="{{ route('userUpdate') }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-8">
                                                <input class='form-control @error("name") parsley-error  @enderror' type="text" name="name" placeholder="Enter User Name" id="example-text-input" value="{{old('name', $user->name)}}">
                                                @error('name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                            </div>
                                     </div>
                                    
                                    <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-4">
                                                <input class='form-control @error("email") parsley-error  @enderror' type="text" name="email" placeholder="Enter Email Address" id="example-text-input" value="{{ old('email', $user->email) }}">
                                                @error('email')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                            </div>
                                            <div class="col-sm-4"> 
                                                <select class="form-control" name="type">
                                                    <option value="">User Type</option>
                                                    <option value="0" @if($user->type == 0) selected @endif>Normal</option>
                                                    <option value="1" @if($user->type == 1) selected @endif>Agent</option>
                                                </select>
                                            @error('type')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                            </div>
                                    </div>

                                    <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-8">
                                                <input class='form-control @error("phone") parsley-error  @enderror' type="text" name="phone" placeholder="Enter Phone Number" id="example-text-input" value="{{ old('phone', $user->number) }}">
                                                @error('phone')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                            </div>
                                    </div>

                                     
                                    <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Passwords section</label>
                                            <div class="col-sm-4">
                                                <input class='form-control @error("password") parsley-error  @enderror' type="password" name="password" placeholder="Enter Password" id="example-text-input">
                                                @error('password')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                            </div>
                                            <div class="col-sm-4">
                                                <input class='form-control' type="password" name="password_confirmation" placeholder="Enter Confirm password" id="example-text-input">
                                            </div>
                                    </div>

                                    

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Upload Your profile photo</label> 
                                            <div class="col-sm-4"> 
                                            <input type="file"  name="photo" id="photo"  class="form-control">
                                            @error('photo')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                            </div>

                                            <div class="col-sm-4"> 
                                                <select class="form-control" name="role">
                                                    <option value="">Assign Role</option>
                                                    @foreach($roles as $role)
                                                    <option value="{{ $role->id }}" @if($user->roles->first()->name == $role->name ){{ "selected" }} @endif>{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                                <!-- @foreach($roles as $role)
                                        <div class="form-check mb-3 col-md-2 col-sm-3">
                                                        <input class="form-check-input" type="radio" style="font-size: 20px;" name="role_id" value="{{ $role->id }}" id="formRadios1" @if($user->roles->first()->name == $role->name ){{ "checked" }} @endif>
                                                        <label class='form-check-label badge bg-dark' style="font-size: 13px;" for="formRadios1"> {{ $role->name }}</label>
                                           </div>
                                        @endforeach -->
                                            @error('role')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                            </div>

                                        </div>

                                        <div class="row mb-3">
                                        <!-- <div class="from-control col-md-6"></div> -->
                                        <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-4">
                                        <img class="rounded " alt="100x100" width="200" <img src="{{ (!empty($user->profile)) ? asset('uploads/'.$user->profile): asset('assets/assets/img/NoProfile.png') }}" data-holder-rendered="true" id="updatephoto">
                                        </div>
                                        </div><br><hr>
                                            
                                                    <div class="row mb-3">
                                                            <div class="col-sm-2"></div>
                                                            <div class="col-sm-3">
                                                                    <button type="submit" class="btn btn-outline-primary form-control waves-effect waves-light">
                                                                            Update user<i class="ri-login-circle-fill align-middle ms-2"></i>
                                                                    </button>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <a href="{{ route('userList') }}">
                                                                    <button type="button" class="btn btn-outline-dark form-control waves-effect waves-light">
                                                                            <i class="fas fa-undo ms-2"></i> &nbsp;&nbsp;Back
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