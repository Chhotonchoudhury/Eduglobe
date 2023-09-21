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
        

            
            <!--this section is for the table of the data -->
            <table id=""  class="table   table-bordered" style="width: 100%;">
                                         
                                                    <thead>
                                                    <tr>
                                                        <th>Links in English</th>
                                                        <th>Links in Arabic</th>
                                                      
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <form accept-charset="UTF-8"  method="POST" action="{{ route('website.nav.store') }}" >
                                                        @csrf

                                                        <input type="hidden" name="id" value="{{ $data->id }}">

                                                        <tr>
                                                            <td>
                                                              <h6>{{ $data->en_link1 }}</h6>
                                                            </td>
                                                            <td>
                                                            <input type="text" class="form-control" placeholder="Please enter arabic link text" value="{{ $data->ar_link1 }}" name="title1">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                              <h6>{{ $data->en_link2 }}</h6>
                                                            </td>
                                                            <td>
                                                            <input type="text" class="form-control" placeholder="Please enter arabic link text" value="{{ $data->ar_link2 }}" name="title2">
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td>
                                                              <h6>{{ $data->en_link3 }}</h6>
                                                            </td>
                                                            <td>
                                                            <input type="text" class="form-control" placeholder="Please enter arabic link text" value="{{ $data->ar_link3 }}" name="title3">
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td>
                                                              <h6>{{ $data->en_link4 }}</h6>
                                                            </td>
                                                            <td>
                                                            <input type="text" class="form-control" placeholder="Please enter arabic link text" value="{{ $data->ar_link4 }}" name="title4">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                              <h6>{{ $data->en_link5 }}</h6>
                                                            </td>
                                                            <td>
                                                            <input type="text" class="form-control" placeholder="Please enter arabic link text" value="{{ $data->ar_link5 }}" name="title5">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                              <h6>{{ $data->en_link6 }}</h6>
                                                            </td>
                                                            <td>
                                                            <input type="text" class="form-control" placeholder="Please enter arabic link text" value="{{ $data->ar_link6 }}" name="title6">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                          <td></td>                  
                                                          <td><button class="btn btn-success">Save menu</button></td>              
                                                        </tr>
                                                      
                                                        <!-- <tr>
                                                            <td>
                                                            <h6>{{ $data->en_link1 }}</h6><hr>
                                                            <h6>{{ $data->en_link2 }}</h6><hr>
                                                            <h6>{{ $data->en_link3 }}</h6><hr>
                                                            <h6>{{ $data->en_link4 }}</h6><hr>
                                                            <h6>{{ $data->en_link5 }}</h6><hr>
                                                            <h6>{{ $data->en_link6 }}</h6>
                                                            </td>

                                                            <td>
                                                            <input type="text" class="form-control" placeholder="Please enter arabic link text"><hr>
                                                            <input type="text" class="form-control" placeholder="Please enter arabic link text"><hr>
                                                            <input type="text" class="form-control" placeholder="Please enter arabic link text"><hr>
                                                            <input type="text" class="form-control" placeholder="Please enter arabic link text"><hr>
                                                            <input type="text" class="form-control" placeholder="Please enter arabic link text"><hr>
                                                            <input type="text" class="form-control" placeholder="Please enter arabic link text"><hr>
                                                            </td>

                                                          
                                                        </tr> -->
                                                      </form>
                                                    </tbody>
                                                  
               </table> 
            <!--end of the section of the table data -->
            
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