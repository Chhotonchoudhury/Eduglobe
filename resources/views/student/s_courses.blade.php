@extends('student.layouts.base')
@section('content')



                            <div class="widget-content searchable-container grid">
                                <!-- this is the search box-->
                       
                                <!--End of the search box -->

                                <div class="searchable-items grid card-box">
                                    
                                    <!--iteams section --->
                                    @foreach($courses as $course)
                                    <div class="items">
                                        <div class="item-content">
                                            <div class="product-info">
                                            <a  href="{{ route('s_course_view',$course->id) }}"><img src="{{ asset('uploads/'.$course->photo.'') }}" alt="avatar"><a/>
                                                <div class="user-meta-info">
                                                <a  href="{{ route('s_course_view',$course->id) }}" role="button"><p class="product-name">{{ $course->name }}</p><a/>
                                                    <p class="product-category">{{ $course->course }}</p>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <p class="product-category-addr"><span>Price: </span>$1001</p>
                                            </div>
                                            <!-- <div class="product-rating">
                                                <p class="product-rating-inner"><span>Rating: </span>
                                                    <a class="d-flex align-center">
                                                        5  <img src="assets/img/star.png" class="avatar-xxs ml-2" alt="star">
                                                    </a>
                                                </p>
                                            </div> -->
                                            <div class="product-stock-status">
                                                <p class="product-stock-status-inner">
                                                    <small class="badge badge-success">In Stock</small>
                                                </p>
                                            </div>
                                            <div class="action-btn">
                                            <a  href="{{ route('s_course_view',$course->id) }}" role="button"><i class="las la-eye text-primary font-20 mr-2 btn-edit-contact"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!--end iteams section-->

                                    <!--end pagination section -->
                                </div>


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