@extends('frontend.layouts.base')

@section('content')

<main>

<div class="hero-area slider-area">
<div class="hero-height2 hero-bg2 d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="hero-cap">
<h2>{{ __('messages.title_course') }} </h2>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{ route('home')  }}">{{ __('messages.nav_home')}}</a></li>
<li class="breadcrumb-item"><a href="{{ route('browse.course') }}"> {{ __('messages.title_course') }}</a></li>
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
            <div class="input-group">
            <span class="text-danger col-md-12 widget font-45"><h4>Results of  "{{ $result }}"</h4></span>
            </div>
            
        </div><hr>
    


<div class="row">

@if(count($courses) > 0)

@foreach($courses as $row)

<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img overlay1">
<a href="{{ route('preview',$row->id) }}"><img src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):('website_assets/img/gallery/courses1.jpg') }}" alt=""></a>
<div class="img-text">
<span>${{ $row->fess }}</span>
</div>
</div>
<div class="properties-caption">
<h3>
<a href="{{ route('preview',$row->id) }}">@if(session()->get('locale') == 'en') {{ $row->name }} @else {{ $row->ar_name }} @endif</a>
</h3>
<p>@if(session()->get('locale') == 'en') {{ $row->course }} @else {{ $row->ar_course }} @endif </p>
<div class="ratting">
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><span>4.9 ( @if(session()->get('locale') == 'en') {{ $row->course_period }} @else {{ $row->ar_course_period }} @endif )</span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
@endforeach

@else
<span class="text-danger col-md-12 widget font-45"><h3>Noting Found !</h3></span>
@endif

<div class="col-lg-12" >
            <!-- <div class="small fw-light">search input with icon</div> -->     
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="{{ route('browse.course') }}" class="btn header-btn2">see all courses</a>
</div>


</div>
</div>
</section>

</main>
@endsection



@section('script')
<script>

  $("#submit1").click(function(){
        let string = $('#string1').val(); 
        if(string != ''){
        let url = "{{ route('search.direct','') }}"+"/"+string;
        window.location.href = url;
        }
    })



</script>
@endsection