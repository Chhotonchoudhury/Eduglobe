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
                                                        <p class="text-muted text-truncate mb-2">Courses</p>
                                                        <h5 class="mb-0" id="stu">{{ $degree_total }}</h5>
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
                                                        <th>Pic</th>
                                                        <th>Name</th>
                                                        <th>Details</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php $i=1  @endphp
                                                    @foreach ($degree_report as $row)
                                                        <tr>
                                                        <td>{{ $i }}</td>
                                                        <td><a href="{{ route('view.stu',$row->id) }}"><img class="rounded-circle" alt="200x200" width="300" src="{{ asset('uploads/'.$row->photo.'') }}" data-holder-rendered="true"  style="width:50px;height:50px"></a></td>
                                                        <td>{{$row->name}}</td>
                                                        <td>{{$row->details}}</td>
                                                        </tr>
                                                        @php $i++  @endphp
                                                    @endforeach
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