@extends('layouts.base')
@section('content')
<style>
    body{
    background: #f7f7ff;
    margin-top:20px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}c
</style>
<div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="widget-content widget-content-area">
						<div class="widget-content-area">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="{{ (!empty($company->logo)) ? asset('uploads/'.$company->logo):asset('assets/assets/img/NoProfile.png')  }}"  alt="Admin" class="rounded-circle p-1 " width="110">
								<div class="mt-3">
									<h4>{{ $company->name }}</h4>
									<p class="text-secondary mb-1">{{ $company->email }}</p>
                                    <p class="text-muted font-size-sm">{{ $company->address }}</p>


									<p class="text-muted font-size-sm">{{ $company->description }}</p>

                                    
									<!--<button class="btn btn-primary">Follow</button>-->
									<!--<button class="btn btn-outline-primary">Message</button>-->
								</div>
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
									<a href="{{ $company->website }}"><span class="text-secondary">{{ $company->website }}</span></a>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
									<a href="{{ $company->twi }}"><span class="text-secondary">@bootdey</span></a>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
									<a href="{{ $company->ins }}"><span class="text-secondary">bootdey</span></a>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
									<a href="{{ $company->fac }}"><span class="text-secondary">bootdey</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="widget-content widget-content-area">
                    <form  method="POST" action="{{ route('company.profile') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $company->id }}">
						<div class="widget-content widget-content-area">
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Logo</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="file" class="form-control" name="logo">
                                    @error('logo')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false"><li class="text-danger">{{ $message }}</li></ul>@enderror
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="{{ $company->name }}" name="name">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="email" class="form-control" value="{{ $company->email }}" name="email">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Mobile</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="{{ $company->phone }}" name="phone">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Address</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="{{ $company->address }}" name="address">
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Description</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<textarea class="form-control" name="description">{{ $company->description }}</textarea>
								</div>
							</div><hr>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Website Link</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="www.google.com" name="web">
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Twitter Link</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="www.twitter.com" name="twi">
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Instagram Link</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="www.instagram.com" name="ins">
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Facebook Link</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="www.facebook.com" name="fac">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
								 	<input type="submit" class="btn btn-primary px-4" value="Save Changes">
								</div>
							</div>
						</div>
                    </form>
					</div>
				
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
<script>

CKEDITOR.replace( 'editor' );

// this is the toaster notification
toastr.options = {
  "closeButton": true,
//   "positionClass": "toast-top-center",
   }
@if(session('success'))
toastr["success"]("{{ session('success') }}");
@elseif(session('info'))
toastr["info"]("{{ session('info') }}");
@elseif (session('warning'))
toastr["error"]("{{ session('warning') }}");
@endif
//end of the tostar Notification


// @if(session('info'))
//          Swal.fire('Information', '{{ session('info') }}', 'info'); 
//         @elseif (session('success'))
//         Swal.fire('Done', '{{ session('success') }}', 'success');
//         @elseif (session('warning'))
//         Swal.fire('Danger', '{{ session('warning') }}', 'error');
//  @endif


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

    //this section is for visible for image in case of multiple
            $(document).ready(function(){
        $('#multiImg').on('change', function(){ //on file input change
            if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
            {
                var data = $(this)[0].files; //this file data
                
                $.each(data, function(index, file){ //loop though each file
                    if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                        var fRead = new FileReader(); //new filereader
                        fRead.onload = (function(file){ //trigger function on successful read
                        return function(e) {
                            var img = $('<img alt="100x100" width="300" />').addClass('rounded').attr('src', e.target.result) .width(80)
                        .height(80); //create image element 
                            $('#preview_img').append(img); //append image to output element
                        };
                        })(file);
                        fRead.readAsDataURL(file); //URL representing the file's data.
                    }
                });
                
            }else{
                alert("Your browser doesn't support File API!"); //if File API is absent
            }
        });
        });
    //end the section of multile 

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


 $(document).ready(function(){
   
    $('.update-history').click(function(){
        const id = $(this).attr('data-id');
       
          $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url:"{{ url('/expense-upData')  }}",
            type: 'GET',
            dataType: 'json',
            data: { id: id },
            success:function(response){
                $('#diplay_info').html('');
                let inc = 1;
                $.each(response.data, function($key , item){
                    //$('#diplay_info').html(response);
                    $('#diplay_info').append(
                        '<tr>\
                        <td>'+inc+'</td>\
                        <td>'+item.pre_type+'</td>\
                        <td>'+item.updated_type+'</td>\
                        <td>'+item.pre_payment_date+'</td>\
                        <td>'+item.updated_payment_date+'</td>\
                        <td>'+item.pre_amount+'</td>\
                        <td>'+item.updated_amount+'</td>\
                        <td>'+item.pre_description+'</td>\
                        <td>'+item.updated_description+'</td>\
                        <td>'+item.created_at+'</td>\
                        </tr>'
                    )
                    inc++;
                });
                //console.log(response.data);
                //$('#diplay_info').html(response);
            }
          });
       
    })
 })

document.getElementById('amount').onkeyup = function () {
    document.getElementById('amount_word').innerHTML = toWords(document.getElementById('amount').value);
};

</script>
@endsection 