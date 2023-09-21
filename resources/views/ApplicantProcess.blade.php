@extends('layouts.base')
@section('content')
    
       <!-- start page title -->
       <div class="widget-content widget-content-area">
                    @if(Auth::user()->can('applicants-view'))
                    <div class="row ml-3 mr-3 mb-1 mt-0 p-1 bg-light" style="border-left: 5px solid #f3a129">
                        <div class="col-md-6">
                        <p class="mb-0" style="font-size: 15px;margin-top: 8px;font-family: sans-serif;font-weight: bold;color:#2262c6">Application process</p>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <input type="text" id="tblSearch" placeholder="Search data.." class="form-control form-control-sm float-end mt-1" style="height: 35px;">
                        </div>
                    </div>

                    <div class="table-responsive mb-0 p-0">
                        <table id="list"  class="table table-bordered table-hover" style="width: 100%;">
                                                    <thead  style="background-color: #f2f2f2;">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Student</th>
                                                        <th>Student Name</th>
                                                        <th>Course Name</th>
                                                        <th>Course Period</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                
                
                                                    </tr>
                                                    </thead>
                                               <tbody>
                                               @php $i=1  @endphp
                                                @foreach ($student as $row)
                                                    <tr>
                                                        <td>{{ $i }}</td>
                                                        <td><a href=""><img class="rounded-circle" alt="200x200" width="300" src="{{ asset('uploads/'.$row->photo.'') }}" data-holder-rendered="true" id="updatephoto" style="width:40px;height:40px"></a></td>
                                                        <td>{{ $row->name }}</td>
                                                        <td>{{ $row->course->name  }}</td>
                                                        <td>{{ $row->course->course_period  }}</td>
                                                        <td>
                                                           @if($row->status == '')
                                                           <span class="badge bg-dark badge-outlined" style="font-size: 10px;">New Process</span>
                                                           @else
                                                           <span class="badge outline-badge-success" style="font-size: 10px;">{{ $row->status->status }}</span>
                                                           @endif   
                                                        </td>
                                                        <td class="d-flex">
                                                        <a class="btn btn-info waves-effect waves-light" style="border-radius: 50px;"  href="{{ route('applicant.status',$row->id) }}" role="button"><i class="las la-user-edit font-15"></i> Status</a>
                                                        </td>
                                                        
                                                    </tr>
                                                @php $i++  @endphp
                                                @endforeach
                                               </tbody>
                        </table>
                    </div>
                    @else
                    <span class="badge badge-danger font-25">&#129488; &nbsp;&nbsp;You can't see the list without permission..!</span>
                    @endif
                                    
    </div>
@endsection

@section('script')

<script>

    

//this is the sweet alert notification
// @if(session('info'))
//      Swal.fire('Info', '{{ session('info') }}', 'info'); 
// @elseif (session('s_success'))
//         Swal.fire('Done', '{{ session('s_success') }}', 'success');
// @elseif (session('warning'))
//         Swal.fire('Danger', '{{ session('warning') }}', 'Danger');
//  @endif


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

 //for data tables

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

 });

</script>

@endsection