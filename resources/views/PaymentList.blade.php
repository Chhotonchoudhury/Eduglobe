@extends('layouts.base')
@section('content')
    
       <!-- start page title -->
       <div class="widget-content widget-content-area">

                 <div class="table-responsive mb-4">
                             <table id="list"  class="table table-bordered" style="width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Type</th>
                                                        <th>Student Name</th>
                                                        <th>Course Name</th>
                                                        <th>Amount</th>
                                                        <th>Action</th>
                                                
                
                                                    </tr>
                                                    </thead>
                                               <tbody>
                                               @php $i=1  @endphp
                                                @foreach ($payments as $row)
                                                    <tr>
                                                        <td>{{ $i }}</td>
                                                        <td>{{ $row->type }}</td>
                                                        <td>{{ $row->student->name }}</td>
                                                        <td>{{ $row->course->name  }}</td>
                                                        <td><span class="badge bg-success" style="font-size: 12px;">{{ $row->amount  }}</span></td>
                                                        <td>
                                                        <a  href="{{ route('edite.payment',$row->id) }}" role="button"><i class="las la-edit font-25"></i></a>
                                                        <a  onclick="return confirm('Are you sure to delete the payment  record permanently ?')"  href="{{ route('delete.payment',$row->id) }}" role="button"><i class=" las la-trash font-25"></i></a>
                                                        </td>
                                                        
                                                    </tr>
                                                @php $i++  @endphp
                                                @endforeach
                                               </tbody>
                                </table></div>
                                    
    </div>
@endsection

@section('script')

<script>

// this is the toaster notification
@if(session('success'))
toastr["success"]("{{ session('success') }}");
@elseif (session('error'))
toastr["error"]("{{ session('error') }}");
@endif
//this is the sweet alert notification
@if(session('info'))
     Swal.fire('Info', '{{ session('info') }}', 'info'); 
@elseif (session('s_success'))
        Swal.fire('Done', '{{ session('s_success') }}', 'success');
@elseif (session('warning'))
        Swal.fire('Danger', '{{ session('warning') }}', 'Danger');
 @endif

 //for data tables

 $(document).ready(function() {
   
    //alert("Something special");

   $('#list').DataTable({
       "language": {
                   "paginate": {
                       "previous": "<i class='las la-angle-left'></i>",
                       "next": "<i class='las la-angle-right'></i>"
                   }
               },
   });
   //table.buttons().container().appendTo('#list_wrapper .col-md-6:eq(0)');

   // var table1 = $('#trashed').DataTable({
   //     buttons: ['copy', 'excel', 'pdf','colvis']
   // });
   // table1.buttons().container().appendTo('#trashed_wrapper .col-md-6:eq(0)');
} );


</script>

@endsection