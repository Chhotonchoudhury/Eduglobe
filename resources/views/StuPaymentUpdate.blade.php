@extends('layouts.base')
@section('content')
    
       <!-- start page title -->
       <div class="widget-content widget-content-area">

                 @if(Auth::user()->can('student-payment-update'))

                        <form  method="POST" action="{{ route('update.student_payment') }}" enctype="multipart/form-data">
                          @csrf 

                          <input type="hidden" name="id" value="{{ $payment->id }}">
                         

                          
                                                              
                                    <div class="from-control col-md-12">
                                        <lable>Select Payment Type</lable>
                                        <select class="form-control " name="type" id=""  required=""> 
                                            <option value="">Select Type</option>
                                            @foreach($paytype as $row)
                                            <option value="{{$row->id}}"  @if($payment->type == $row->id) {{ "selected" }} @endif>{{$row->type}}</option>
                                            @endforeach
                                        </select>
                                        @error('type')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                    </div>&nbsp;

                                   <div class="col-md-12 row">
                                        <div class="from-control col-md-6">
                                        <lable>Amount</lable>
                                        <input class="form-control" name="amount" value="{{ $payment->amount }}" >
                                        @error('amount')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                        </div>

                                        <div class="from-control col-md-6">
                                        <lable>Update pay slip</lable>
                                        <input type="file" id="pay_slip" class="form-control" name="pay_slip">
                                        @error('pay_slip')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                        </div>
                                   </div>
                                    

                                    <div class="col-md-12 row"> 
                                         <div class="from-control col-md-6">
                                        </div>                                                   
                                        <div class="from-control col-md-6">
                                        <img class="rounded " width="150" src="{{ asset('uploads/'.$payment->pay_slip.'') }}" id="pay_slip_upload">      
                                        </div>
                                    </div><hr>


                                <div class="widget-footer text-left">
                                    <button type="submit" class="btn btn-warning mr-2">Update Now</button>
                                    <a href="{{ route('view.stu',$payment->student_id) }}"><button type="button" class="btn btn-outline-dark">Back</button></a>
                                </div>
                                      
                        
                        </form>
                  @else
                <span class="badge badge-danger font-20">&#129488; &nbsp;&nbsp;You can't update the  payments .....</span>
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

//this section for on change function

//this is the number to word converter
   
//end number to word converter 



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

</script>

@endsection