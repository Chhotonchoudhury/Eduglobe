@extends('layouts.base')
@section('content')

    
            
<div class="card">
  <div class="card-body">
        
         <h6>Work Edite section</h6><hr>
            <!--form start of the input section -->
                      <form accept-charset="UTF-8"  method="POST" action="{{ route('website.work.update') }}" enctype="multipart/form-data">
                                     @csrf
                                     <input type="hidden" name="id" value="{{$data->id}}">
                                            

                                     <div class="col-md-12 row"> 
                                                <div class="from-control col-md-6">
                                                     <lable>Main description in English</lable>
                                                     <textarea class="form-control" placeholder="Main description in English" name="en_title">{{ old('en_title' , $data->en_description) }}</textarea>
                                                     @error('en_title')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-6">
                                                     <lable>الوصف الرئيسي باللغة الإنجليزية</lable>
                                                     <textarea class="form-control" placeholder="الوصف الرئيسي باللغة الإنجليزية" name="ar_title">{{ old('ar_title' , $data->ar_description) }}</textarea>
                                                     @error('ar_title')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>
                                                 
                                            </div><hr>

                                            <div class="col-md-12 row"> 
                                                <div class="from-control col-md-6">
                                                     <lable>First point in English</lable>
                                                     <textarea class="form-control" placeholder="First point in English" name="en_title1">{{ old('en_title1' , $data->en_title1) }}</textarea>
                                                     @error('en_title1')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-6">
                                                     <lable>النقطة الأولى باللغة العربية</lable>
                                                     <textarea class="form-control" placeholder="النقطة الأولى باللغة العربية" name="ar_title1">{{ old('ar_title1' , $data->ar_title1) }}</textarea>
                                                     @error('ar_title1')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>
                                                 
                                            </div>

                                            <div class="col-md-12 row"> 
                                                <div class="from-control col-md-6">
                                                     <lable>Bullet 2 in English (optional)</lable>
                                                     <textarea class="form-control" placeholder="Bullet 2 in English" name="en_title2">{{ old('en_title2' , $data->en_title2) }}</textarea>
                                                     @error('en_title2')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-6">
                                                     <lable>النقطة 2 باللغة العربية (اختياري)</lable>
                                                     <textarea class="form-control" placeholder="النقطة 2 باللغة العربية (اختياري)" name="ar_title2">{{ old('ar_title2' , $data->ar_title2) }}</textarea>
                                                     @error('ar_title2')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>
                                                 
                                            </div>


                                            <div class="col-md-12 row"> 
                                                <div class="from-control col-md-6">
                                                     <lable>Bullet 3 in English (optional)</lable>
                                                     <textarea class="form-control" placeholder="Bullet 2 in English" name="en_title3">{{ old('en_title3' , $data->en_title3) }}</textarea>
                                                     @error('en_title3')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-6">
                                                     <lable>النقطة 3 باللغة العربية (اختياري)</lable>
                                                     <textarea class="form-control" placeholder="النقطة 3 باللغة العربية (اختياري)" name="ar_title3">{{ old('ar_title3' , $data->ar_title3) }}</textarea>
                                                     @error('ar_title3')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>
                                                 
                                            </div>


                                            <div class="col-md-12 row"> 
                                                <div class="from-control col-md-6">
                                                     <lable>Bullet 4 in English (optional)</lable>
                                                     <textarea class="form-control" placeholder="Bullet 4 in English" name="en_title4">{{ old('en_title4' , $data->en_title4) }}</textarea>
                                                     @error('en_title4')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-6">
                                                     <lable>النقطة 4 باللغة العربية (اختياري)</lable>
                                                     <textarea class="form-control" placeholder="النقطة 4 باللغة العربية (اختياري)" name="ar_title4">{{ old('ar_title4' , $data->ar_title4) }}</textarea>
                                                     @error('ar_title4')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>
                                                 
                                            </div>


                                            <div class="col-md-12 row"> 
                                                <div class="from-control col-md-6">
                                                     <lable>Bullet 5 in English (optional)</lable>
                                                     <textarea class="form-control" placeholder="Bullet 5 in English " name="en_title5">{{ old('en_title5' , $data->en_title5) }}</textarea>
                                                     @error('en_title5')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-6">
                                                     <lable>النقطة 5 باللغة العربية (اختياري)</lable>
                                                     <textarea class="form-control" placeholder="النقطة 5 باللغة العربية (اختياري)" name="ar_title5">{{ old('ar_title5' , $data->ar_title5) }}</textarea>
                                                     @error('ar_title5')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>
                                                 
                                            </div><hr>


                                            <div class="col-md-12 row"> 
                                                   <div class="from-control col-md-6">
                                                    
                                                            <lable>Upload hero section banner</lable>  
                                                            <input type="file"  name="banner" id="banner"  class="form-control">
                                                            @error('banner')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="parsley-required text-danger">{{ $message }}</li></ul>@enderror
                                                            <img class="rounded " alt="100x100" width="450" height="250" src="{{ (!empty($data->banner)) ? asset('website_uploads/'.$data->banner): '' }}" data-holder-rendered="true" id="updatephoto"><br>
                                                    </div>

                                                    <div class="from-control col-md-6">
                                                    <br>
                                                    <button class="btn btn-info from-control">Update the records </button>
                                                    <a href="{{ route('website.work') }}"><button type="button" class="btn btn-dark from-control">Back</button></a>
                                                    <div>

                                                
                                            </div><br>
                        </form>
            <!-- end of the section --->

  </div>
</div>

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