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
                        <div class="widget-content widget-content-area">

                            <div class="table-responsive mb-4">
                            @if(Auth::user()->can('university-view'))
                             <table id="list"  class="table table-bordered" style="width: 100%;">
                                                    <thead >
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Logo</th>
                                                        <th>Number</th>
                                                        <th>Name</th>
                                                        <th>Address</th>
                                                        <th>created Time</th>
                                                        <th>Action</th>
                                            
                                                    </tr>
                                                    </thead>
                                               <tbody>
                                               @php $i=1  @endphp
                                                @foreach ($unvs as $row)
                                                    <tr>
                                                        <td>{{ $i }}</td>
                                                        <td><a href="{{ route('view.uni',$row->id) }}"><img class="rounded-circle" alt="200x200" width="300" src="{{ asset('uploads/'.$row->logo.'') }}" data-holder-rendered="true" id="updatephoto" style="width:50px;height:50px"></a></td>
                                                        <td>{{ $row->Unumber }}</td>
                                                        
                                                        <td>{{ $row->name  }}</td>
                                                        <td>{{ $row->address  }}</td>
                                                        <td>{{ $row->created_at  }}</td>
                                                        <td>
                                                        <a   href="{{ route('view.uni',$row->id) }}" role="button"><i class="las la-eye font-20 text-info"></i></a>
                                                        @if(Auth::user()->can('university-update'))
                                                        <a   href="{{ route('edite.uni',$row->id) }}" role="button"><i class="las la-edit font-20 text-primary"></i></a>
                                                        @endif
                                                        @if(Auth::user()->can('university-delete'))
                                                        <a class="delete-confirm" data-id="{{ route('delete.uni',$row->id) }}" href="#"><i class="las la-trash font-20 text-danger"></i></a>
                                                        <!-- <a id="delete" href="{{ route('delete.uni',$row->id) }}" role="button"><i class="las la-trash font-25 text-danger"></i></a> -->
                                                        @endif
                                                        </td>
                                                        
                                                    </tr>
                                                @php $i++  @endphp
                                                @endforeach
                                               </tbody>
                              </table>
                          @else
                           <span class="badge badge-danger font-25">&#129488; &nbsp;&nbsp;You can't see the list of university, Need admin confirmation .....</span>
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
//delete sweet alert section
$( document ).ready(function() { 
  $(".delete-confirm").click(function(e){
     e.preventDefault();
     let id = $(this).attr("data-id");
     $('#DeleteModal').modal('show');
     $(".del").attr("href", id)
  });
});
 

// $('.delete-confirm').on('click', function (event) {
//       event.preventDefault();
//       let url = $(this).attr('id');
//       alert(url);
//       swal({
//           title: 'Are you sure?',
//           text: 'This record and it`s details will be permanantly deleted!',
//           type: "warning",
//           showCancelButton: true
//           }).then(function(value) {
//           if (value) {
//           window.location.href = url;
//         }
//       });
//      });
  
// function Confirmdelete(originLink){swal({
//   event.preventDefault();
//   var originLink = $(this).attr("href");
//   alert(originLink);
//   title: 'Are you sure?',
//   text: "You won't be able to revert this!",
//   type: 'warning',
//   showCancelButton: true,
//   confirmButtonColor: '#3085d6',
//   cancelButtonColor: '#d33',
//   confirmButtonText: 'Yes, delete it!'
//   }).then(function(isConfirm){
//     if (isConfirm) {
//     window.location.href = originLink;
//     }
//   })
// }


////
// function confirmation(ev) {
// ev.preventDefault();
// let urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
// //console.log(urlToRedirect); // verify if this is the right URL
// swal({
//   title: 'Are you sure?',
//   text: "You won't be able to revert this!",
//   type: 'warning',
//   showCancelButton: true,
//   confirmButtonColor: '#3085d6',
//   cancelButtonColor: '#d33',
//   confirmButtonText: 'Yes, delete it!'
// }).then(function() {
//   swal(
//     'Deleted!',
//     'Your file has been deleted.',
//     'success'
//   );
//   },
//   function(dismiss) {
//   // dismiss can be 'cancel', 'overlay', 'close', 'timer'
//   if (dismiss === 'cancel') {
//     swal(
//       'Cancelled',
//       'Your imaginary file is safe :)',
//       'error'
//     );
//   }


// })
// }
//delete sweet alert end section


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
//         Swal.fire('Danger', '{{ session('warning') }}', 'error');
//  @endif

 //for data tables

 $(document).ready(function() {

    $('#list').DataTable({
        "language": {
                    "paginate": {
                        "previous": "<i class='las la-angle-left'></i>",
                        "next": "<i class='las la-angle-right'></i>"
                    }
                },
                "lengthMenu": [5,10,15,20],
                "pageLength": 5 
    });
    //table.buttons().container().appendTo('#list_wrapper .col-md-6:eq(0)');

    // var table1 = $('#trashed').DataTable({
    //     buttons: ['copy', 'excel', 'pdf','colvis']
    // });
    // table1.buttons().container().appendTo('#trashed_wrapper .col-md-6:eq(0)');
} );

</script>

@endsection