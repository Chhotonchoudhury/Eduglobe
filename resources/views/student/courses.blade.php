@extends('student.layouts.base')
@section('content')


                            <div class="widget-content searchable-container grid">
                                <!-- this is the search box-->
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 filtered-list-search align-self-center">
                                            <form class="form-inline my-2 my-lg-0">
                                                <div class="">
                                                    <i class="las la-search toggle-search"></i>
                                                    <input type="text" id="search" class="form-control search-form-control  ml-lg-auto" placeholder="Search any courses">
                                                </div>
                                            </form>
                                        </div>
                                        <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-5 text-sm-right text-center align-self-center">
                                            <div class="d-flex justify-content-sm-end justify-content-center contact-options">
                                                <a href="javascript:void(0);" title="List View" class="pointer font-25 view-list s-o mr-2 bs-tooltip">
                                                    <i class="las la-list"></i>
                                                </a>
                                                <a title="Grid View" class="pointer font-25 view-grid active-view s-o mr-2 bs-tooltip">
                                                    <i class="las la-th-large"></i>
                                                </a>
                                                <a title="Filter" class="pointer font-25 s-o bs-tooltip mr-2">
                                                    <i class="las la-filter"></i>
                                                </a>
                                                <select class="btn btn-outline-primary btn-sm h-auto p-2" id="exampleFormControlSelect1">
                                                    <option>Select Sort By</option>
                                                    <option>Name</option>
                                                    <option>Price Low to High</option>
                                                    <option>Price Hight to Low</option>
                                                    <option>Stock</option>
                                                </select>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <!--End of the search box -->

                                <div class="searchable-items grid card-box" id="data-search">
                                @include('student.pagination_course')
                                </div>
                            </div>
                 

                        

                @endsection
@section('script')

<script>

    //ajax pagination
        $(document).on('click','.pagination a', function(e){
            e.preventDefault();
            let page = $(this).attr('href').split('page=')[1];
            courese(page);
        });

        function courese(page){
            $.ajax({
                url:"course-pagination?page="+page,
                method:'GET',
                success:function(res){
                    $('#data-search').html(res);
                }
            })
        }
    //ajax pagination end

    //course search functionalyty 
    $(document).on('keyup',function(e){
        e.preventDefault();
        let search_string = $('#search').val();
        $.ajax({
            url:"{{ route('search.course') }}",
            method:'GET',
            data:{search_string:search_string},
            success:function(res){
                $('#data-search').html(res);
                if(res.status == 'Nothing_Found'){
                    $('#data-search').html('<span class="text-danger col-md-12 widget font-25">'+'Noting Found !'+'</span>');
                }
            }
        });
    });
    //end course search functionality

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