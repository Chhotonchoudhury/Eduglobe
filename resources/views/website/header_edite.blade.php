@extends('layouts.base')
@section('content')

    
            
<div class="card">
  <div class="card-body">
        
         <h6>Header Edite section</h6><hr>
            <!--form start of the input section -->
                      <form accept-charset="UTF-8"  method="POST" action="{{ route('website.header.update') }}" enctype="multipart/form-data">
                                     @csrf
                                     <input type="hidden" name="id" value="{{$data->id}}">
                                            <div class="col-md-12 row"> 
                                                <div class="from-control col-md-6">
                                                     <lable>The first title is in English</lable>
                                                     <textarea class="form-control" placeholder="The first title is in English" name="en_title1">{{ old('en_title1' , $data->en_f_title) }}</textarea>
                                                     @error('en_title1')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-6">
                                                     <lable>العنوان الأول باللغة العربية</lable>
                                                     <textarea class="form-control" placeholder="العنوان الأول باللغة العربية" name="ar_title1" >{{ old('ar_title1' , $data->ar_f_title) }}</textarea>
                                                     @error('ar_title1')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>
                                                 
                                            </div><br>

                                            <div class="col-md-12 row"> 
                                                <div class="from-control col-md-6">
                                                     <lable>The second title is in English</lable>
                                                     <textarea class="form-control" placeholder="The second title is in English" name="en_title2">{{ old('en_title2' , $data->en_l_title ) }}</textarea>
                                                     @error('en_title2')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
                                                 </div>

                                                 <div class="from-control col-md-6">
                                                     <lable>العنوان الثاني باللغة العربية</lable>
                                                     <textarea class="form-control" placeholder="العنوان الثاني باللغة العربية" name="ar_title2">{{ old('ar_title2' , $data->ar_l_title ) }}</textarea>
                                                     @error('ar_title2')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
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
                                                    <a href="{{ route('website.header') }}"><button type="button" class="btn btn-dark from-control">Back</button></a>
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