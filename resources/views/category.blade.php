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


                      <div class="widget-content-area">
                                    <div class="w-100 animated-underline-content">
                                        <ul class="nav nav-tabs  mb-0" id="lineTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link @if(!$errors->any()) active @endif" id="underline-about-tab" data-toggle="tab" href="#underline-about" role="tab" aria-controls="underline-about" aria-selected="true">Category List </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link @if($errors->any()) active @endif" id="underline-project-tab" data-toggle="tab" href="#underline-project" role="tab" aria-controls="underline-project" aria-selected="false">Add New Category</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="lineTabContent-3">

                                            <div class="tab-pane fade @if(!$errors->any()) show active @endif" id="underline-about" role="tabpanel" aria-labelledby="underline-about-tab">

                                                <!--start content-->
                                                @if(Auth::user()->can('course-category-view'))
                                                    <!-- this is the search section --->    
                                                    <div class="row ml-3 mr-3 mb-1 mt-0 p-1 bg-light" style="border-left: 5px solid #f3a129">
                                                        <div class="col-md-6">
                                                        <p class="mb-0" style="font-size: 15px;margin-top: 8px;font-family: sans-serif;font-weight: bold;color:#2262c6">Courses Categories</p>
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
                                                        
                                                        <th>Category Name</th>
                                                        <th>Action</th>
                
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                  
                                                    @foreach ($category as $row)
                                                        <tr>
                                                       
                                                        <td><a href="{{ route('view.uni',$row->id) }}"><img class="rounded" alt="200x200" width="300" src="{{ asset('uploads/'.$row->photo.'') }}" data-holder-rendered="true" id="updatephoto" style="width:50px;height:50px"></a></td>
                                                        <td>{{$row->name }}</td>

                                                        <td class="d-flex">
                                                        @if(Auth::user()->can('course-category-update'))             
                                                        <a  href="{{ route('category.edite',$row->id) }}" role="button"><i class="las la-edit font-25 text-primary"></i></a>
                                                        @endif
                                                        @if(Auth::user()->can('course-category-delete'))
                                                        <a class="delete-confirm" data-id="{{ route('category.delete',$row->id) }}" href="#"><i class="las la-trash font-25 text-danger"></i></a>
                                                        <!-- <a   onclick="return confirm('Are you sure to delete the payment type record permanently ?')"  href="{{ route('category.delete',$row->id) }}" role="button"><i class="las la-trash font-25 text-danger"></i></a> -->
                                                        @endif
                                                        </td>
                                                        </tr>
                                                        
                                                    @endforeach
                                                    </tbody> 
                                                
                                                </table></div>
                                                @else
                                                <span class="badge badge-danger font-15">&#129488; &nbsp;&nbsp;You can't see the categories .....</span>
                                                @endif
                                                <!--end contetn-->
                      
                                            </div>

                                            <!-- Projects -->
                                            <div class="tab-pane fade @if($errors->any()) show active @endif" id="underline-project" role="tabpanel" aria-labelledby="underline-project-tab">

                                                                        <!--start content--->
                                                                        @if(Auth::user()->can('course-category-add'))
                                                <form accept-charset="UTF-8"   method="POST" action="{{ route('category.add') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="col-md-12 row">
                                                        
                                                        <div class="from-control col-md-4">
                                                            <lable>Upload a category picture</lable>
                                                            <input type="file" id="photo"  name="photo"  class="form-control">
                                                            @error('photo')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                                        </div><br>

                                                        <div class="from-control col-md-4">
                                                            <lable>Enter category Name</lable>
                                                            <input type="text"  name="name" placeholder="Enter Category Name" value="{{ old('name') }}" class="form-control">
                                                            @error('name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                                        </div><br>

                                                        <div class="from-control col-md-4">
                                                            <lable>Enter category Name in arabic</lable>
                                                            <input type="text"  name="name_arabic" placeholder="Enter Category Name in arabic" value="{{ old('name_arabic') }}" class="form-control">
                                                            @error('name_arabic')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                                        </div><br>
                                                    </div>

                                                    <div class="col-md-12">
                                                              <div class="from-control col-md-6">
                                                                    <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                                                    <div class="col-sm-10">
                                                                    <img class="rounded " alt="100x100" width="120" src="{{ asset('assets/assets/img/NoBg.jpeg') }}" data-holder-rendered="true" id="updatephoto">
                                                                    </div>
                                                                </div>
                                                    </div>

                                                    <div class="widget-footer text-right"><br><hr>
                                                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                                                        <button type="reset" class="btn btn-outline-dark">Cancel</button>
                                                    </div>
                                                </form>
                                                @else
                                                <span class="badge badge-danger font-15">&#129488; &nbsp;&nbsp;You can't Add any category .....</span>
                                                @endif
                                                <!--end content-->

                                                
                                                 
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
                                  <a  class="btn btn-danger del">Delete</a>
                                </div>
                              </div>
                            </div>
                          </div> 
                        <!--End of the modal---->
       <!-- start page title -->
    
@endsection

@section('script')
<script>

$( document ).ready(function() { 
  $(".delete-confirm").click(function(e){
     e.preventDefault();
     let id = $(this).attr("data-id");
     $('#DeleteModal').modal('show');
     $(".del").attr("href", id)
  });
});

// this is the toaster notification
toastr.options = {
  "closeButton": true,
//   "positionClass": "toast-top-center",
   }
@if(session('success'))
toastr["success"]("{{ session('success') }}");
@elseif(session('info'))
toastr["info"]("{{ session('info') }}");
@elseif (session('warning'))
toastr["error"]("{{ session('warning') }}");
@endif
//end of the tostar Notification

//this is the sweet alert notification
// @if(session('info'))
//      Swal.fire('Info', '{{ session('info') }}', 'info'); 
// @elseif (session('success'))
//         Swal.fire('Done', '{{ session('success') }}', 'success');
// @elseif (session('warning'))
//         Swal.fire('Danger', '{{ session('warning') }}', 'error');
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