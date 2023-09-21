@extends('layouts.base')
@section('content')
    
       <!-- start page title -->
       <div class="widget-content widget-content-area">

                @if(Auth::user()->can('university-student-commission-update'))

                        <form  method="POST" action="{{ route('update.commission') }}" enctype="multipart/form-data">
                          @csrf 

                          <input type="hidden" name="id" value="{{ $payment->id }}">
                          <input type="hidden" name="stud_id" id="stud_id" value="{{ $payment->student_id }}">
                         

                          <div class="from-control row col-md-12">

                                    <div class="col-md-4">
                                    <lable>Select Payment Type</lable>
                                    <select class="form-control " name="type" id=""  required=""> 
                                        <option value="">Select Type</option>
                                        @foreach($paytype as $row)
                                        <option value="{{$row->id}}"  @if($payment->type == $row->id) {{ "selected" }} @endif>{{$row->type}}</option>
                                        @endforeach
                                    </select>
                                   
                                    </div>

                                    <div class="col-md-4">
                                    <lable>Select Course</lable>
                                    <select class="form-control" name="course" id="uni_degree"  required=""> 
                                        <option value="" >Select Course</option>
                                        @foreach($course as $row)
                                        <option value="{{$row->id}}" @if($payment->course_id == $row->id) {{ "selected" }} @endif>{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                
                                    </div>

                                    <div class="col-md-4">
                                    <lable>Select student</lable>
                                    <select class="form-control student" name="student" id="student_up"  required=""> 
                                        <option value="">Select student</option>
                                    </select>
                                    
                                    </div>

                                    </div><br>

                                     <div class="from-control row col-md-12">
                                    <div class="from-control col-md-6">
                                    <lable>update Pay slip</lable>
                                    <input type="file" id="pay_slip" name="pay_slip" class="form-control">
                                    @error('pay_slip')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                    </div>

                                    <div class="from-control col-md-6">
                                    <lable>Commission Amount</lable>
                                    <input type="text" required="" value="{{ $payment->amount }}" id="amount" name="amount" class="form-control">
                                    @error('amount')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                    </div>
                                </div><br>
                                
                                <div class="col-md-12 row">                                                    
                                    <div class="from-control col-md-6">
                                      <img class="rounded " width="250" src="{{ asset('uploads/'.$payment->pay_slip.'') }}" id="pay_slip_upload">      
                                    </div>
                                    <div class="from-control col-md-6">
                                    </div>
                                </div>


                                <div class="widget-footer text-right">
                                    <button type="submit" class="btn btn-warning mr-2">Update Now</button>
                                    <a href="{{ route('view.stu',$payment->student_id) }}"><button type="button" class="btn btn-outline-dark">Back</button></a>
                                </div>
                                      
                        
                        </form>
                @else
                <span class="badge badge-danger font-15">&#129488; &nbsp;&nbsp;You can't update commission payment .....</span>
                @endif                    

    </div>
@endsection

@section('script')

<script>

        //this is for showing pay slip
 $(document).ready(function(){
            $('#pay_slip').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#pay_slip_upload').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
// end of the section of pay slip
    //this is for not not change function

    $(document).ready(function() {
        
            var stateID = $('#uni_degree').val();
            var student = $('#stud_id').val();
           ///alert(stateID);
            if(stateID) {
                $.ajax({
                    url: "{{ url('/payment-student') }}",
                    type: "GET",
                    dataType: "json",
                    data: { id: stateID },
                    success:function(response) {
                        //alert(response.data);
                        //alert(JSON.stringify(response.data));
                        $('#student_up').empty();
                        $('#student_up').append('<option value="" required="">Select Student</option>');
                        $.each(response.data, function($key , item){
                            $('#student_up').append('<option value="'+item.i+'" '+( item.id == student ? 'selected' : '' )+'>'+ item.name +'</option>');
                        });
                    }
                });
            }else{
                $('#student_up').empty();
            }
    });

///this section for on change function
// $(document).ready(function() {
//         $('#uni_degree').on('change', function() {
//             var stateID = $(this).val();
//            ///alert(stateID);
//             if(stateID) {
//                 $.ajax({
//                     url: "{{ url('/payment-student') }}",
//                     type: "GET",
//                     dataType: "json",
//                     data: { id: stateID },
//                     success:function(response) {
//                         //alert(response.data);
//                         //alert(JSON.stringify(response.data));
//                         $('#student').empty();
//                         $('#student').append('<option value="" required="">Select Student</option>');
//                         $.each(response.data, function($key , item){
//                             $('#student').append('<option value="'+ item.id +'">'+ item.name +'</option>');
//                         });
//                     }
//                 });
//             }else{
//                 $('#student').empty();
//             }
//        });
//     });
//this is the number to word converter

$(document).ready(function() {
        $('#uni_degree').on('change', function() {
            var stateID = $(this).val();

            //alert(stateID);
           ///alert(stateID);
            if(stateID) {
                $.ajax({
                    url: "{{ url('/payment-student') }}",
                    type: "GET",
                    dataType: "json",
                    data: { id: stateID },
                    success:function(response) {

                        //alert(response);
                        //alert(response.data);
                        //alert(JSON.stringify(response.data));
                        $('#student_up').empty();
                        $('#student_up').append('<option value="" required="">Select Student</option>');
                        $.each(response.data, function($key , item){
                            $('#student_up').append('<option value="'+ item.id +'">'+ item.name +'</option>');
                        });
                    }
                });
            }else{
                $('#student_up').empty();
            }
       });
    });
 
//end number to word converter 

//this is the sweet alert notification
// @if(session('info'))
//      Swal.fire('Info', '{{ session('info') }}', 'info'); 
// @elseif (session('s_success'))
//         Swal.fire('Done', '{{ session('s_success') }}', 'success');
// @elseif (session('warning'))
//         Swal.fire('Danger', '{{ session('warning') }}', 'Danger');
//  @endif

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

</script>

@endsection