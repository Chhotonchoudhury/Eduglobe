@extends('layouts.base')
@section('content')
    
       <!-- start page title -->
       <div class="widget-content widget-content-area">
                                    <form  method="POST" action="{{ route('store.profile') }}" enctype="multipart/form-data">
                                            @csrf
                                        
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="name" type="text" value="{{ $adminData->name }}" placeholder="Enter Name" id="example-text-input">
                                                @error('name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-search-input" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input class="form-control " name="email" type="email" value="{{ $adminData->email }}" placeholder="How do I shoot web" id="example-search-input">
                                                @error('email')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-email-input" class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="number" name="phone" value="{{ $adminData->number }}" placeholder="bootstrap@example.com" id="example-email-input">
                                                @error('phone')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-email-input" class="col-sm-2 col-form-label">Profile Image</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="profile" type="file"  id="inputImage"> 
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                            <img class="rounded " alt="200x200" width="200" src="{{ (!empty($adminData->profile)) ? asset('uploads/'.$adminData->profile):('https://joeschmoe.io/api/v1/james') }}" data-holder-rendered="true" id="updateImage">
                                            </div>
                                        </div><br><hr>
                                        
                                        <div class="row mb-3">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-3">
                                                    <button type="submit" class="btn btn-primary form-control waves-effect waves-light">
                                                            Update Now<i class="ri-login-circle-fill align-middle ms-2"></i>
                                                    </button>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="{{ route('admin.profile') }}">
                                                    <button type="button" class="btn btn-dark form-control waves-effect waves-light">
                                                            <i class="ri-arrow-left-circle-line ms-2"></i> &nbsp;&nbsp;Back
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    <form>

        </div>
@endsection

@section('script')

    <script>
        $(document).ready(function(){
            $('#inputImage').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#updateImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>


@endsection