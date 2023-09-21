@extends('layouts.base')
@section('content')

                 <div class="widget-content-area">
                                    <div class="w-100 animated-underline-content">
                                        <ul class="nav nav-tabs  mb-0" id="lineTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link @if(!$errors->any()) active @endif" id="underline-about-tab" data-toggle="tab" href="#underline-about" role="tab" aria-controls="underline-about" aria-selected="true">Roles List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link @if($errors->any()) active @endif" id="underline-project-tab" data-toggle="tab" href="#underline-project" role="tab" aria-controls="underline-project" aria-selected="false">Add New Role</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="lineTabContent-3">

                                            <div class="tab-pane fade @if(!$errors->any()) show active @endif" id="underline-about" role="tabpanel" aria-labelledby="underline-about-tab">
                                                <!--start content--->
                                                <!-- this is the search section --->    
                                                <div class="row ml-3 mr-3 mb-1 mt-0 p-1 bg-light" style="border-left: 5px solid #f3a129">
                                                    <div class="col-md-6">
                                                    <p class="mb-0" style="font-size: 15px;margin-top: 8px;font-family: sans-serif;font-weight: bold;color:#2262c6">Roles & permissions</p>
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
                                                        
                                                        <th>Role</th>
                                                        <th>Permissions</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    
                                                    @foreach ($role_permissions as $role)
                                                    <tr>
                                                        
                                                        <td><span class="badge bg-primary" style="font-size: 13px;">{{ $role->name }}</span></td>

                                                        <td>
                                                            @foreach($permission as $permiss)
                                                            <p class="badge badge-outline @if($role->hasPermissionTo($permiss->name )) badge-success @else badge-danger @endif font-10">{{ $permiss->name  }}</p>&nbsp;
                                                            @endforeach                
                                                        <!-- @foreach($role->permissions->pluck('name') as $per )
                                                        <p class="badge bg-primary">{{ $per  }}</p>&nbsp;
                                                        @endforeach -->
                                                        
                                                        </td>

                                                    <!-- <td>
                                                        @foreach($role->permissions->pluck('name') as $per )
                                                        <p class="badge bg-primary">{{ $per  }}</p>&nbsp;
                                                        @endforeach
                                                    </td> -->
                                                        <td ><a href="{{ route('userPermission',$role->id) }}" ><i class="las la-edit font-25 text-primary"></i></a></td>
                                                    </tr>
                                                        
                                                    @endforeach
                                                    </tbody> 
                                                </table></div>
                                                <!--end content-->
                                            </div>

                                            <!-- Projects -->
                                            <div class="tab-pane fade @if($errors->any()) show active @endif" id="underline-project" role="tabpanel" aria-labelledby="underline-project-tab">
                                                <!--start content-->
                                                <form  method="POST" action="{{ route('role.entry') }}" enctype="multipart/form-data">
                                            @csrf

                                            <div class="col-md-12 row">

                                                 <div class="from-control col-md-12">
                                                     <lable>Enter Role name</lable>  
                                                     <input type="text"  name="role" placeholder="Enter roles Name" name="role"  class="form-control">
                                                     @error('role')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                            </div><hr>
                                            
                                            
                                            <div class="row mb-3">
                                                            <div class="col-sm-2"></div>
                                                            <div class="col-sm-3">
                                                                    <button type="submit" class="btn btn-outline-primary form-control waves-effect waves-light">
                                                                            Add Role<i class="ri-login-circle-fill align-middle ms-2"></i>
                                                                    </button>
                                                            </div>
                                                           
                                                    </div>
                                                </form>
                                                <!--end contetn-->
                                            </div>
                                                                                

                                        </div>
                                    </div>
                 </div>

                <!-- <div class="card-box" >
                                <table id="list"  class="table table-bordered" style="width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Role</th>
                                                        <th>Permissions</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php $i=1  @endphp
                                                    @foreach ($role_permissions as $role)
                                                    <tr>
                                                        <td>{{ $i }}</td>
                                                        <td>{{ $role->name }}</td>

                                                    <td>
                                                        @foreach($role->permissions->pluck('name') as $per )
                                                        <p class="badge bg-primary">{{ $per  }}</p>&nbsp;
                                                        @endforeach
                                                    </td>
                                                        <td><a href="{{ route('userPermission',$role->id) }}" ><i class="las la-edit font-25"></i></a></td>
                                                    </tr>
                                                        @php $i++  @endphp
                                                    @endforeach
                                    </tbody> 
                                </table>
                </div> -->

@endsection

@section('script')

<script>

    
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