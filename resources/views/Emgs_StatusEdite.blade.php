@extends('layouts.base')
@section('content')
    
       <!-- start page title -->
       <div class="widget-content widget-content-area">

                          <form  method="POST" action="{{ route('emgs.update.status') }}" enctype="multipart/form-data">
                          @csrf 

                          <input type="hidden" name="id" value="{{ $status->id }}">
                          
                          <div class="col-md-12 row">
                                                
                                                <div class="from-control col-md-12">
                                                     <lable>Status Name Related to EMGS</lable>
                                                     <input type="text"  name="status" value="{{ old('status', $status->status) }}" class="form-control">
                                                     @error('status')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required">{{ $message }}</li></ul>@enderror
                                                 </div><br><hr>

                                                 <div class="widget-footer text-left"><br>
                                                <button type="submit" class="btn btn-primary mr-2">Update Now</button>
                                                <a href="{{ route('status') }}"> <button type="button" class="btn btn-outline-dark">Back</button></a>
                                                  </div>
                                            
 
                                      
                        
                        </form>
                                    




                    </div>
                </div>
        </div> 
@endsection

@section('script')

<script>

toastr.options = {
  "closeButton": true,
  "positionClass": "toast-top-center",
   }
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

</script>

@endsection