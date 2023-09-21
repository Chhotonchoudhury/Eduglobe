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
                                                <a class="nav-link @if(!$errors->any()) active @endif" id="underline-about-tab" data-toggle="tab" href="#underline-about" role="tab" aria-controls="underline-about" aria-selected="true">Payment type List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link @if($errors->any()) active @endif" id="underline-project-tab" data-toggle="tab" href="#underline-project" role="tab" aria-controls="underline-project" aria-selected="false">Payment Types Entry</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="lineTabContent-3">

                                            <div class="tab-pane fade @if(!$errors->any()) show active @endif" id="underline-about" role="tabpanel" aria-labelledby="underline-about-tab">
                                                <!--start content--->

                                                   <!-- this is the search section --->    
                                                   <div class="row ml-3 mr-3 mb-1 mt-0 p-1 bg-light" style="border-left: 5px solid #f3a129">
                                                        <div class="col-md-6">
                                                        <p class="mb-0" style="font-size: 15px;margin-top: 8px;font-family: sans-serif;font-weight: bold;color:#2262c6">Payments type</p>
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
                                                        <th>Payment Types</th>
                                                        <th>Entry by</th>
                                                        <th>Action</th>
                
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php $i=1  @endphp
                                                    @foreach ($types as $row)
                                                        <tr>
                                                        <td>{{ $i }}</td>
                                                        <td>{{$row->type}}</td>
                                                        <td>{{$row->user->name }}</td>
                                                        <td class="d-flex">
                                                       
                                                        <a  href="{{ route('edite.pay',$row->id) }}" role="button"><i class="las la-edit font-25 text-primary"></i></a>
                                                     
                                                        
                                                        <a class="delete-confirm" data-id="{{ route('delete.pay',$row->id) }}" href="#"><i class="las la-trash font-25 text-danger"></i></a>
                                                        <!-- <a   onclick="return confirm('Are you sure to delete the payment type record permanently ?')"  href="{{ route('delete.pay',$row->id) }}" role="button"><i class="las la-trash font-25 text-danger"></i></a> -->
                                                        
                                                        </td>
                                                        </tr>
                                                        @php $i++  @endphp
                                                    @endforeach
                                                    </tbody> 
                                                  </table>
                                                </div>
                                              
                                                <!--end content-->
                                            </div>

                                            <!-- Projects -->
                                            <div class="tab-pane fade @if($errors->any()) show active @endif" id="underline-project" role="tabpanel" aria-labelledby="underline-project-tab">
                                                <!--start content-->
                                        
                                                <form  method="POST" action="{{ route('store.pay') }}" enctype="multipart/form-data">
                                              @csrf
                                            <div class="col-md-12 row">
                                                
                                                <div class="from-control col-md-12">
                                                     <lable>Payment Type Name</lable>
                                                     <input type="text"  name="types" placeholder="Enter University Payment Type" value="{{ old('types') }}" class="form-control">
                                                     @error('types')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                                 </div><br><hr>


                                                 <div class="widget-footer text-left"><br>
                                                <button type="submit" class="btn btn-outline-primary mr-2">Submit</button>
                                                <button type="reset" class="btn btn-outline-dark">Cancel</button>
                                                </div>

                                        </form>
                                      
                                                <!--end contetn-->
                                            </div>
                                                                                

                                        </div>
                                    </div>
                        </div>


    
       <!-- start page title -->
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