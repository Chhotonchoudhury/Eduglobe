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
    
            
<div class="card">
  <div class="card-body">
        
         @if(!$data->count() > 0)
         <h6>Insert data in about section</h6><hr>
            <!--form start of the input section -->
                      <form accept-charset="UTF-8"  method="POST" action="{{ route('website.about.store') }}" enctype="multipart/form-data">
                                     @csrf
                                          
                                           <div class="col-md-12 row"> 
                                                <div class="from-control col-md-6">
                                                     <lable>Main Title in english</lable>
                                                     <textarea class="form-control" placeholder="Main Title in english" name="en_title">{{ old('en_title') }}</textarea>
                                                     @error('en_title')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-6">
                                                     <lable>العنوان الرئيسي باللغة العربية</lable>
                                                     <textarea class="form-control" placeholder="العنوان الرئيسي باللغة العربية" name="ar_title">{{ old('ar_title') }}</textarea>
                                                     @error('ar_title')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>
                                                 
                                            </div><br>


                                            <div class="col-md-12 row"> 
                                                <div class="from-control col-md-6">
                                                     <lable>Short description</lable>
                                                     <textarea class="form-control" placeholder="Enter short description about your company" name="en_about">{{ old('en_about') }}</textarea>
                                                     @error('en_about')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-6">
                                                     <lable>وصف قصير باللغة العربية</lable>
                                                     <textarea class="form-control" placeholder="أدخل وصفًا موجزًا ​​لشركتك" name="ar_about">{{ old('ar_about') }}</textarea>
                                                     @error('ar_about')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>
                                                 
                                            </div><br>

                                            <div class="col-md-12 row"> 
                                                   <div class="from-control col-md-6">
                                                    
                                                            <lable>Upload about section banner</lable>  
                                                            <input type="file"  name="banner" id="banner"  class="form-control">
                                                            @error('banner')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                                            <img class="rounded " alt="100x100" width="450" height="250" src="{{ asset('assets/assets/img/NoBg.jpeg') }}" data-holder-rendered="true" id="updatephoto"><br>
                                                    </div>

                                                    <div class="from-control col-md-6">
                                                    <br>
                                                    <button class="btn btn-success from-control">Save the records </button>
                                                    <div>

                                                
                                            </div><br>
                        </form>
            <!-- end of the section --->
            @else
            <h6>About section</h6><hr>
            <!--this section is for the table of the data -->
            <table id=""  class="table  table-hover table-bordered" style="width: 100%;">
                                         

                                                    <thead >
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>About</th>
                                                        <th>Banner</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                      @foreach ($data as $row)
                                                        <tr>

                                                            <td>
                                                            {{$row->en_title}}<hr>
                                                            {{$row->ar_title}}
                                                            </td>

                                                            <td>
                                                            {{$row->en_about}}<hr>
                                                            {{$row->ar_about}}
                                                            </td>

                                                            
                                                            <td><img src="{{ (!empty($row->banner)) ? asset('website_uploads/'.$row->banner): '' }}" alt="Banner Image" class="rounded-circle" width="150"></td>
                                                            <td>
                                                            <a  href="{{ route('website.about.edite',$row->id) }}" role="button"><i class="las la-edit font-25 text-primary"></i></a>
                                                            <a class="delete-confirm" data-id="{{ route('website.about.delete',$row->id) }}" href="#"><i class="las la-trash font-25 text-danger"></i></a>
                                                            </td>
                                                        </tr>
                                                      @endforeach
                                                    </tbody>
                                                  
               </table> 
            <!--end of the section of the table data -->
            @endif
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
    $("select[name=country]" ).change(function() {
               $('input#code').val('+'+$(this).find(':selected').attr('data-countryCode'));
            });

$(document).ready(function(){
            $('#banner').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#updatephoto').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    // end of the section
$(document).ready(function() {

            $('#list #thead th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" class="form-control" placeholder="'+title+'" />' );
            } );

            var table = $('#list').DataTable({
                "language": {
                            "paginate": {
                                "previous": "<i class='las la-angle-left'></i>",
                                "next": "<i class='las la-angle-right'></i>"
                            }
                        },
              });

                  // Search
            table.columns().every( function () {
                var that = this;
                $( 'input', this.header() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
            //table.buttons().container().appendTo('#list_wrapper .col-md-6:eq(0)');

            // var table1 = $('#trashed').DataTable({
            //     buttons: ['copy', 'excel', 'pdf','colvis']
            // });
            // table1.buttons().container().appendTo('#trashed_wrapper .col-md-6:eq(0)');
    } );







</script>
@endsection 