@extends('layouts.base')
@section('content')
    
       <!-- start page title -->
       <div class="widget-content widget-content-area">
                              

                                <form  method="POST" action="{{ route('givePermission') }}">
                          @csrf
                       
                          <!-- <div class="row col-12">&nbsp;
                                <div class="col-md-5"></div>
                                <div class="col-md-6"><h4 class="badge bg-primary" style="font-size:30px">{{ $role->name  }}</h4></div>
                          </div><hr> -->
                          <input type="hidden" name="role" value="{{$role->id }}">
                          <div class="row">
                                <div class="table-responsive mb-4">
                                    <table id="list"  class="table table-bordered" style="width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>Role</th>
                                                        <th>University</th>
                                                        <th>student</th>
                                                        <th>Course</th>
                                                        <th>Settings</th>
                                                        <th>Applicants</th>
                                                        <th>Report</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><h6 class="badge bg-primary" style="font-size:15px">{{ $role->name  }}<h6></td>
                                                            <td>
                                                            
                                                            @foreach($uni_permission as $per)
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"  name="permissions[]" id="formCheck1"  value="{{ $per->name }}"   @foreach($role_permission as $pers)
                                                                    @if($per->name == $pers->name) {{ "checked" }} @endif @endforeach>
                                                                    <label class="form-check-label" for="formCheck1">
                                                                        {{ str_replace('university-','',$per->name)  }}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                                    
                                                            </td>
                                                        

                                                            <td>

                                                            @foreach($student_permission as $per)
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"  name="permissions[]" id="formCheck1"  value="{{ $per->name }}"   @foreach($role_permission as $pers)
                                                                    @if($per->name == $pers->name) {{ "checked" }} @endif @endforeach>
                                                                    <label class="form-check-label" for="formCheck1">
                                                                        {{ str_replace('student-','',$per->name)  }}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                            </td>

                                                            <td>
                                                            @foreach($course_permission as $per)
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"  name="permissions[]" id="formCheck1"  value="{{ $per->name }}"   @foreach($role_permission as $pers)
                                                                    @if($per->name == $pers->name) {{ "checked" }} @endif @endforeach>
                                                                    <label class="form-check-label" for="formCheck1">
                                                                        {{ str_replace('course-','',$per->name)  }}
                                                                    </label>
                                                                </div>
                                                            @endforeach

                                                            </td>

                                                            <td>
                                                             @foreach($company_permission as $per)
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"  name="permissions[]" id="formCheck1"  value="{{ $per->name }}"   @foreach($role_permission as $pers)
                                                                    @if($per->name == $pers->name) {{ "checked" }} @endif @endforeach>
                                                                    <label class="form-check-label" for="formCheck1">
                                                                        {{ $per->name  }}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                             </td>

                                                             <td>
                                                             @foreach($applicant_permission as $per)
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"  name="permissions[]" id="formCheck1"  value="{{ $per->name }}"   @foreach($role_permission as $pers)
                                                                    @if($per->name == $pers->name) {{ "checked" }} @endif @endforeach>
                                                                    <label class="form-check-label" for="formCheck1">
                                                                        {{ str_replace('applicants-','',$per->name)  }}
                                                                    </label>
                                                                </div>
                                                            @endforeach

                                                             </td>


                                                             <td>
                                                             @foreach($report_permission as $per)
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"  name="permissions[]" id="formCheck1"  value="{{ $per->name }}"   @foreach($role_permission as $pers)
                                                                    @if($per->name == $pers->name) {{ "checked" }} @endif @endforeach>
                                                                    <label class="form-check-label" for="formCheck1">
                                                                        {{ str_replace('reports-','',$per->name) }}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                             </td>

                                                        </tr>
                                                    </tbody> 
                                    </table>
                                </div>
                          </div> 
                          


                                   <div class="widget-footer text-right"><br>
                                   <button type="submit" class="btn btn-md btn-outline-primary waves-effect waves-light">
                                        Update the role Permissions<i class="ri-login-circle-fill align-middle ms-2"></i>
                                        </button>
                                        <a href="{{ route('userRoles') }}">
                                        <button type="button" class="btn btn btn-md btn-outline-dark waves-effect waves-light">
                                            <i class="las la-arrow-left-line align-middle ms-2"></i>Back</button>
                                        </a>
                                    </div>
                          
                           </form>            
                                    

    </div>
@endsection

@section('script')

<script>

    //this is for instant image showing for ptofile
    $(document).ready(function(){
            $('#logo').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#updatelogo').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    //this is for instant image showing for ptofile
       $(document).ready(function(){
            $('#photo').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#updatephoto').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    // end of the section

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