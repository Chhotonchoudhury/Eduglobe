@extends('layouts.base')
@section('content')
<style>
    .modal-confirm {
        color: #636363;
        width: 400px;
    }

    .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
        text-align: center;
        font-size: 14px;
    }


    .modal-confirm .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        z-index: 9;
        text-align: center;
        border: 3px solid #f15e5e;
    }

    .modal-confirm .icon-box i {
        color: #f15e5e;
        font-size: 46px;
        display: inline-block;
        margin-top: 13px;
    }

    .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -10px;
    }
</style>

<!-- start page title -->




<div class="widget-content-area">
    <div class="w-100 animated-underline-content">
        <ul class="nav nav-tabs  p-0 m-0 " id="lineTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link @if(!$errors->any())active @endif " id="underline-about-tab" data-toggle="tab"
                    href="#underline-about" role="tab" aria-controls="underline-about" aria-selected="true">University
                    List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($errors->any())active @endif" id="underline-project-tab" data-toggle="tab"
                    href="#underline-project" role="tab" aria-controls="underline-project" aria-selected="false">Add new
                    university</a>
            </li>
        </ul>
        <div class="tab-content" id="lineTabContent-3">
            <div class="tab-pane fade @if(!$errors->any()) show active @endif" id="underline-about" role="tabpanel"
                aria-labelledby="underline-about-tab">


                <div class="row ml-3 mr-3 mb-1 mt-0 p-1 bg-light" style="border-left: 5px solid #f3a129">
                    <div class="col-md-6">
                        <p class="mb-0"
                            style="font-size: 15px;margin-top: 8px;font-family: sans-serif;font-weight: bold;color:#2262c6">
                            University List</p>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <input type="text" id="tblSearch" placeholder="Search data.."
                            class="form-control form-control-sm float-end mt-1" style="height: 35px;">
                    </div>
                </div>

                <!-- Your table or other content -->


                <div class="table-responsive mb-0 p-0">
                    @if(Auth::user()->can('university-view'))
                    <table id="list" class="table table-bordered table-hover" style="width: 100%;">
                        <thead class="" style="background-color: #f2f2f2;">
                            <tr>
                                <th>#</th>
                                <th>Logo</th>
                                <th>Number</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach ($unvs as $row)
                            <tr>
                                <td>{{ $i }}</td>
                                <td><a href="{{ route('view.uni',$row->id) }}"><img class="rounded-circle" alt="200x200"
                                            width="300" src="{{ asset('uploads/'.$row->logo.'') }}"
                                            data-holder-rendered="true" style="width:40px;height:40px"></a></td>
                                <td>{{ $row->Unumber }}</td>

                                <td>{{ $row->name }}</td>
                                <td>{{ $row->address }}</td>

                                <td class="d-flex">
                                    <a href="{{ route('view.uni',$row->id) }}" role="button"><i
                                            class="las la-eye font-25 text-success"></i></a>
                                    @if(Auth::user()->can('university-update'))
                                    <a href="{{ route('edite.uni',$row->id) }}" role="button"><i
                                            class="las la-edit font-25 text-primary"></i></a>
                                    @endif
                                    @if(Auth::user()->can('university-delete'))
                                    <a class="delete-confirm" data-id="{{ route('delete.uni',$row->id) }}" href="#"><i
                                            class="las la-trash font-25 text-danger"></i></a>
                                    <!-- <a id="delete" href="{{ route('delete.uni',$row->id) }}" role="button"><i class="las la-trash font-25 text-danger"></i></a> -->
                                    @endif
                                </td>

                            </tr>
                            @php $i++ @endphp
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <span class="badge badge-danger font-25">&#129488; &nbsp;&nbsp;You can't see the list of university,
                        Need admin confirmation .....</span>
                    @endif
                </div>

            </div>

            <div class="tab-pane fade @if($errors->any()) show active @endif" id="underline-project" role="tabpanel"
                aria-labelledby="underline-project-tab">
                @if(Auth::user()->can('university-add'))
                <form method="POST" action="{{ route('store.uni') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-12 row">
                        <div class="from-control col-md-4">
                            <lable>University Name</lable>
                            <input type="text" value="{{old('name')}}" name="name" class="form-control">
                            @error('name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                                <li class="text-danger">{{ $message }}</li>
                            </ul>@enderror
                        </div>

                        <div class="from-control col-md-4">
                            <lable>University Name in arabic</lable>
                            <input type="text" value="{{old('arabic_name')}}" placeholder="أدخل اسم الجامعة"
                                name="arabic_name" class="form-control">
                            @error('arabic_name')<ul class="parsley-errors-list filled" id="parsley-id-13"
                                aria-hidden="false">
                                <li class="text-danger">{{ $message }}</li>
                            </ul>@enderror
                        </div>

                        <div class="from-control col-md-4">
                            <lable>University Email</lable>
                            <input type="email" name="email" value="{{old('email')}}" class="form-control">
                            @error('email')<ul class="parsley-errors-list filled" id="parsley-id-13"
                                aria-hidden="false">
                                <li class="text-danger">{{ $message }}</li>
                            </ul>@enderror
                        </div>

                    </div><br>

                    <div class="col-md-12 row">

                        <div class="from-control col-md-4">
                            <lable>Executive Number</lable>
                            <input type="number" name="ex_number" value="{{old('ex_number')}}" class="form-control">
                            @error('ex_number')<ul class="parsley-errors-list filled" id="parsley-id-13"
                                aria-hidden="false">
                                <li class="text-danger">{{ $message }}</li>
                            </ul>@enderror
                        </div>
                        <div class="from-control col-md-4">
                            <lable>Executive Email</lable>
                            <input type="email" name="ex_email" value="{{old('ex_email')}}" class="form-control">
                            @error('ex_email')<ul class="parsley-errors-list filled" id="parsley-id-13"
                                aria-hidden="false">
                                <li class="text-danger">{{ $message }}</li>
                            </ul>@enderror
                        </div>

                        <div class="from-control col-md-4">
                            <lable>University Number</lable>
                            <input type="text" name="u_number" value="{{old('u_number')}}" class="form-control">
                            @error('u_number')<ul class="parsley-errors-list filled" id="parsley-id-13"
                                aria-hidden="false">
                                <li class="text-danger">{{ $message }}</li>
                            </ul>@enderror
                        </div>



                    </div><br>

                    <div class="col-md-12 row">
                        <div class="from-control col-md-6">
                            <lable>University Address</lable>
                            <textarea class="form-control" name="address">{{ old('address') }}</textarea>
                            @error('address')<ul class="parsley-errors-list filled" id="parsley-id-13"
                                aria-hidden="false">
                                <li class="text-danger">{{ $message }}</li>
                            </ul>@enderror
                        </div>

                        <div class="from-control col-md-6">
                            <lable>University Description</lable>
                            <textarea class="form-control" name="remarks">{{ old('remarks') }}</textarea>
                            @error('remarks')<ul class="parsley-errors-list filled" id="parsley-id-13"
                                aria-hidden="false">
                                <li class="text-danger">{{ $message }}</li>
                            </ul>@enderror
                        </div>
                    </div>
                    <hr>

                    <div class="col-md-12 row">

                        <div class="from-control col-md-6">
                            <lable>University Address in arabic</lable>
                            <textarea class="form-control" name="arabic_address">{{ old('arabic_address') }}</textarea>
                            @error('arabic_address')<ul class="parsley-errors-list filled" id="parsley-id-13"
                                aria-hidden="false">
                                <li class="text-danger">{{ $message }}</li>
                            </ul>@enderror
                        </div>

                        <div class="from-control col-md-6">
                            <lable>University Description in arabic</lable>
                            <textarea class="form-control" name="arabic_remarks">{{ old('arabic_remarks') }}</textarea>
                            @error('arabic_remarks')<ul class="parsley-errors-list filled" id="parsley-id-13"
                                aria-hidden="false">
                                <li class="text-danger">{{ $message }}</li>
                            </ul>@enderror
                        </div>

                    </div>
                    <hr>

                    <div class="col-md-12 row">
                        <div class="from-control col-md-4">
                            <lable>University Logo</lable>
                            <input type="file" id="logo" name="logo" class="form-control">
                            @error('logo')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                                <li class="text-danger">{{ $message }}</li>
                            </ul>@enderror
                        </div>

                        <div class="from-control col-md-8">
                            <lable>University Photo</lable>
                            <input type="file" id="photo" name="photo" class="form-control">
                            @error('photo')<ul class="parsley-errors-list filled" id="parsley-id-13"
                                aria-hidden="false">
                                <li class="text-danger">{{ $message }}</li>
                            </ul>@enderror
                        </div>

                    </div>
                    <div class="col-md-12 row">
                        <div class="from-control col-md-4">
                            <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <img class="rounded " alt="100x100" width="120"
                                    src="{{ asset('assets/assets/img/NoBg.jpeg') }}" data-holder-rendered="true"
                                    id="updatelogo">
                            </div>
                        </div>

                        <div class="from-control col-md-4">
                            <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <img class="rounded " alt="100x100" width="120"
                                    src="{{ asset('assets/assets/img/NoBg.jpeg') }}" data-holder-rendered="true"
                                    id="updatephoto">
                            </div>
                        </div>

                    </div><br>


                    <div class="widget-footer text-right">
                        <button type="submit" class="btn btn-outline-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-outline-dark">Cancel</button>
                    </div>

                </form>
                @else
                <span class="badge badge-danger font-25">&#129488; &nbsp;&nbsp;You can't access this section, Need admin
                    confirmation .....</span>
                @endif
            </div>
        </div>

    </div>
</div>


<!-- Delete Modal HTML -->
<div id="DeleteModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <div class="icon-box">
                    <i class="las la-exclamation-triangle">&#xE5CD;</i>
                </div>
                <h4 class="modal-title w-100">Are you sure?</h4>
            </div>
            <div class="modal-body">
                <p>Do you really want to delete these records? This process cannot be undone.</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger del">Delete</a>
            </div>
        </div>
    </div>
</div>
<!--End of the modal---->

@endsection

@section('script')

<script>
    //delete sweet alert section
$( document ).ready(function() { 
  $(".delete-confirm").click(function(e){
     e.preventDefault();
     let id = $(this).attr("data-id");
     $('#DeleteModal').modal('show');
     $(".del").attr("href", id)
  });
});

    //this is for instant image showing for ptofile
    $(document).ready(function(){
           //alert("Dsfdsf");
          //alert("This is the alert function");
            $('#logo').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#updatelogo').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
            // Swal.fire('Info', '{{ session('info') }}', 'info');
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
//end of the tostar Notification

//this is the sweet alert notification
// @if(session('info'))
//      Swal.fire('Info', '{{ session('info') }}', 'info'); 
// @elseif (session('s_success'))
//         Swal.fire('Done', '{{ session('s_success') }}', 'success');
// @elseif (session('warning'))
//         Swal.fire('Danger', '{{ session('warning') }}', 'Danger');
//  @endif

$(document).ready(function() {

let myDataTable = $('#list').DataTable({
    "dom": 'rt<"bottom"il><"clear">',
      paging: false,
      bFilter: false,
      ordering: false,
      searching: true,
     // Hide the length change option
});

$('#tblSearch').on('input', function() {
  // Get the search term entered by the user
  var searchTerm = $(this).val();
  // Call the DataTables search() method to perform the search
  myDataTable.search(searchTerm).draw();
});

//table.buttons().container().appendTo('#list_wrapper .col-md-6:eq(0)');

// var table1 = $('#trashed').DataTable({
//     buttons: ['copy', 'excel', 'pdf','colvis']
// });
// table1.buttons().container().appendTo('#trashed_wrapper .col-md-6:eq(0)');

});

</script>

@endsection