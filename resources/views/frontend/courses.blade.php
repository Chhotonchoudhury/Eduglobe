@extends('frontend.layouts.base')

@section('content')

<main>

<div class="hero-area slider-area">
<div class="hero-height2 hero-bg2 d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="hero-cap">
<h2>{{ __('messages.title_course') }}</h2>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{ route('home')  }}"> {{ __('messages.nav_home')}}</a></li>
<li class="breadcrumb-item"><a href="{{ route('browse.course') }}">{{ __('messages.title_course') }}</a></li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="popular-directorya-area section-padding fix">
<div class="container">

<!-- <div class="section-tittle text-center mb-40">
<h3>Courses Hunting</h3>
<p>choose your best and suitable courses </p>
</div> -->

       <div class="col-lg-12">
            <!-- <div class="small fw-light">search input with icon</div> -->
            <div class="input-group">
                <input class="form-control border-end-0 border rounded-pill" type="search" placeholder="{{__('messages.search_box3')}}" id="search">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="button">
                       <i class="ti-search"></i>
                    </button>
                </span>
            </div>
        </div><hr>
    


<div class="row" id="data-search">

   @include('frontend.pagination_course')


</div>
</div>
</section>

</main>
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
                url:"courses-pagination?page="+page,
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
            url:"{{ route('search.courses') }}",
            method:'GET',
            data:{search_string:search_string},
            success:function(res){
                $('#data-search').html(res);
                if(res.status == 'Nothing_Found'){
                    $('#data-search').html('<span class="text-danger col-md-12 widget font-45">'+'Noting Found !'+'</span>');
                }
            }
        });
    });
    //end course search functionality

 

  $("#submit1").click(function(){
        let string = $('#string1').val(); 
        if(string != ''){
        let url = "{{ route('search.direct','') }}"+"/"+string;
        window.location.href = url;
        }
    })


</script>
@endsection