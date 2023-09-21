@extends('layouts.base')
@section('content')
              <div class="card-box" >

              <div class="widget top-welcome">
                            <div class="f-100">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="media">
                                            <div id="logo" class="mr-1" >
                                            <img src="{{  asset('uploads/'.$university->logo)  }}" alt="" class="avatar-md rounded-circle img-thumbnail">
                                            </div>
                                            <div class="align-self-center media-body">
                                                <div class="text-muted">
                                                    <h4 class="mb-1" id="u_name">{{ $university->name }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="align-self-center col-lg-5">
                                        <div class="text-lg-center mt-4 mt-lg-0">
                                            <div class="row">
                                               <div class="col-4">
                                                    <div>
                                                        <p class="text-muted text-truncate mb-2">student Pay</p>
                                                        <h5 class="mb-0" id="stu">{{ $stupaymet_total }}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div>
                                                        <p class="text-muted text-truncate mb-2">Form Date</p>
                                                        <h5 class="mb-0" id="stu">{{ $s_date }}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div>
                                                        <p class="text-muted text-truncate mb-2">To Date</p>
                                                        <h5 class="mb-0" id="s_pay">{{ $e_date }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-lg-flex col-lg-3 align-items-end justify-content-center flex-column">
                                        <a href="{{ route('reports.result', ['id'=>$id,'s_date'=>$s_date , 'e_date'=> $e_date, ]) }}"><button class="btn btn-primary">
                                           Back to reports
                                        </button></a>
                                        <!-- <button class="btn btn-info mt-2">
                                            My Chat
                                        </button> -->
                                    </div>
                                </div>
                            </div>
                        </div><br>

                                <table id="list"  class="table table-bordered" style="width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Transaction id</th>
                                                        <th>Course Name</th>
                                                        <th>Student Name</th>
                                                        <th>Amount</th>
                                                        <th>Remarks</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php $i=1  @endphp
                                                    @foreach ($stupaymet_report as $row)
                                                        <tr>
                                                        <td>{{ $i }}</td>
                                                        <td>{{$row->txn_id}}</td>
                                                        <td>{{$row->course->name}}</td>
                                                        <td>{{$row->student->name}}</td>
                                                        <td><span class="badge bg-success" style="font-size: 12px;">{{$row->amount}}</span></td>
                                                        <td>{{ $row->remarks }}</td>
                                                        </tr>
                                                        @php $i++  @endphp
                                                    @endforeach
                                                    <tfoot>
                                                    <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th class="text-center"><span class="badge bg-primary font-15">Total :- {{$stupaymet_total}}</span></th>
                                                            <th></th>
                                                           
                                                        </tr>
                                                    </tfoot>
                                    </tbody> </table>
                </div>

@endsection

@section('script')

<script>

    
$(document).ready(function() {
    var table = $('#list').DataTable({
        buttons: ['copy', 'excel', 'pdf','colvis']
    });
    table.buttons().container().appendTo('#list_wrapper .col-md-6:eq(0)');

    var table1 = $('#trashed').DataTable({
        buttons: ['copy', 'excel', 'pdf','colvis']
    });
    table1.buttons().container().appendTo('#trashed_wrapper .col-md-6:eq(0)');
} );


//this is the sweet alert notification
@if(session('info'))
     Swal.fire('Info', '{{ session('info') }}', 'info'); 
@elseif (session('s_success'))
        Swal.fire('Done', '{{ session('s_success') }}', 'success');
@elseif (session('warning'))
        Swal.fire('Danger', '{{ session('warning') }}', 'Danger');
 @endif

</script>

@endsection