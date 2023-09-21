@extends('layouts.base')
@section('content')

             <div class="widget-content-area">
                                    <div class="w-100 animated-underline-content">
                                        <ul class="nav nav-tabs  mb-0" id="lineTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link @if(!$errors->any()) active @endif" id="underline-about-tab" data-toggle="tab" href="#underline-about" role="tab" aria-controls="underline-about" aria-selected="true">Active User List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link @if($errors->any()) active @endif" id="underline-project-tab" data-toggle="tab" href="#underline-project" role="tab" aria-controls="underline-project" aria-selected="false">Add New User</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="lineTabContent-3">
                                            <div class="tab-pane fade @if(!$errors->any()) show active @endif" id="underline-about" role="tabpanel" aria-labelledby="underline-about-tab">
                                                    <!--start content--->

                                                       <!-- this is the search section --->    
                                                    <div class="row ml-3 mr-3 mb-1 mt-0 p-1 bg-light" style="border-left: 5px solid #f3a129">
                                                        <div class="col-md-6">
                                                        <p class="mb-0" style="font-size: 15px;margin-top: 8px;font-family: sans-serif;font-weight: bold;color:#2262c6">All Users</p>
                                                        </div>
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-3">
                                                            <input type="text" id="tblSearch" placeholder="Search data.." class="form-control form-control-sm float-end mt-1" style="height: 35px;">
                                                        </div>
                                                    </div>
                                                    <!-- end of the search section --->

                                                    <div class="table-responsive mb-0 p-0">
                                                    <table id="list"  class="table table-bordered table-hover" style="width: 100%;">
                                                        <thead style="background-color: #f2f2f2;">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Pic</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Roles</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php $i=1  @endphp
                                                    @foreach ($users as $row)
                                                        <tr>
                                                        <td>{{ $i }}</td>
                                                        <td><img src="{{ (!empty($row->profile)) ? asset('uploads/'.$row->profile): asset('assets/assets/img/NoProfile.png') }}" alt="Admin" class="rounded-circle"  style="width:45px;height:45px"></td>
                                                        <td>{{$row->name}}</td>
                                                        <td>{{$row->email}}</td>
                                                        <td>{{$row->number}}</td>
                                                        <td>
                                                        @foreach($row->roles->pluck('name') as $role)
                                                           @if($role == "Admin")
                                                            <span class="badge bg-primary" style="font-size: 12px;"><b>{{ $role }}</b></span>
                                                            @elseif($role == "Stuff")
                                                            <span class="badge bg-warning" style="font-size: 12px;">{{ $role }}</span>
                                                           @endif
                                                            
                                                        @endforeach
                                                        </td>
                                                        <td class="d-flex">
                                                        <!-- <a class="btn btn-warning waves-effect waves-light"  href="{{ route('view.cor', $row->id) }}" role="button"><i class=" las la-eye"></i></a> -->
                                                        <a class=""  href="{{ route('userEdite',$row->id) }}" role="button"><i class="las la-edit font-25 text-primary"></i></a>
                                                         <a class=""  href="{{ route('loginAsUser',$row->id) }}" role="button" title="GO TO THE USER DASHBOARD"><i class="las la-arrow-circle-right font-25 text-success"></i></a>
                                                        <!-- <a class="btn btn-danger waves-effect waves-light" onclick="return confirm('Are you sure to delete the record permanently ?')"  href="{{ route('delete.cor',$row->id) }}" role="button"><i class=" las la-trash"></i></a> -->
                                                        </td>
                                                        </tr>
                                                        @php $i++  @endphp
                                                    @endforeach
                                                    </tbody> </table></div>
                                                    <!--end content-->
                                            </div>
                                            <!-- Projects -->
                                            <div class="tab-pane fade @if($errors->any()) show active @endif" id="underline-project" role="tabpanel" aria-labelledby="underline-project-tab">
                                                <!--start content-->
                                                <form  method="POST" action="{{ route('userStore') }}" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-8">
                                                <input class='form-control @error("name") parsley-error  @enderror' type="text" name="name" placeholder="Enter User Name" id="example-text-input" value="{{ old('name') }}">
                                                @error('name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                            </div>
                                     </div>
                                    
                                    <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-4">
                                                <input class='form-control @error("email") parsley-error  @enderror' type="text" name="email" placeholder="Enter Email Address" id="example-text-input" value="{{ old('email') }}">
                                                @error('email')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                            </div>
                                            <div class="col-sm-4"> 
                                                <select class="form-control" name="type">
                                                    <option value="">User Type</option>
                                                    <option value="0">Normal</option>
                                                    <option value="1">Agent</option>
                                                </select>
                                            @error('type')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                            </div>
                                    </div>

                                    <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-8">
                                                <input class='form-control @error("phone") parsley-error  @enderror' type="text" name="phone" placeholder="Enter Phone Number" id="example-text-input" value="{{ old('phone') }}">
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
                                                    <option value="Admin">Admin</option>
                                                    <option value="Stuff">Stuff</option>
                                                </select>
                                            @error('role')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                            </div>

                                        </div>

                                        <div class="row mb-3">
                                        <!-- <div class="from-control col-md-6"></div> -->
                                        <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-4">
                                        <img class="rounded " alt="100x100" width="120" <img src="{{ asset('assets/assets/img/NoProfile.png') }}" data-holder-rendered="true" id="updatephoto">
                                        </div>
                                        </div><br><hr>
                                            
                                                    <div class="row mb-3">
                                                            <div class="col-sm-2"></div>
                                                            <div class="col-sm-3">
                                                                    <button type="submit" class="btn btn-outline-primary form-control waves-effect waves-light">
                                                                            Add User<i class="ri-login-circle-fill align-middle ms-2"></i>
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
                                                <!--end contetn-->
                                            </div>
                                                                                

                                        </div>
                                    </div>
                </div>
    
       <!-- start page title -->
@endsection

@section('script')
<script>

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
//end of the tostar Notification

// @if(session('info'))
//      Swal.fire('Info', '{{ session('info') }}', 'info'); 
// @elseif (session('s_success'))
//         Swal.fire('Done', '{{ session('s_success') }}', 'success');
// @elseif (session('warning'))
//         Swal.fire('Danger', '{{ session('warning') }}', 'Danger');
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


 


</script>
@endsection 