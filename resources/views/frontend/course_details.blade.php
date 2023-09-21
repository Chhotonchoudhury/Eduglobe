@extends('frontend.layouts.base')

@section('content')


<main>

<div class="hero-area slider-area">
<div class="hero-height2 hero-bg2 d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="hero-cap">
<h2>@if(session()->get('locale') == 'en') Course details @else تفاصيل الدورة @endif</h2>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('messages.nav_home')}}</a></li>
<li class="breadcrumb-item"><a href="{{ route('about') }}">@if(session()->get('locale') == 'en') Course details @else تفاصيل الدورة @endif</a></li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>
</div>



<!--product details page section for course details view page ----->

<section class="blog_area section-padding">
<div class="container">

<div class="row">

<!--In row first half section -->
<div class="col-md-8" >

<div dir="ltr">

    <div class="slider-container" id="slider-container">
       <!-- <a href="https://www.jqueryscript.net/slider/">Slider</a>  -->
        <div class="slider" style="display:flex;flex-wrap: wrap;">

            @if($course->related_image != '')
              @php $nm=1;  $img=json_decode($course->related_image);  @endphp
               @foreach($img as $imgs)
                 <div class="slider__item" >
                  <img src="{{ asset('uploads/'.$imgs.'') }}" alt="" class="img-fluid" style="object-fit: cover;">
                  <!-- <span class="slider__caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<a href="">Далее >></a> </span> -->
                 </div>
               @php $nm++ @endphp
              @endforeach
            @endif 
            <!-- <div class="slider__item">
              <img src="{{ asset('website_assets/img/blog/single_blog_1.jpg') }}" alt="">
              <span class="slider__caption">2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, facilis.</span>
            </div>

            <div class="slider__item">
              <img src="{{ asset('website_assets/img/blog/single_blog_1.jpg') }}" alt="">
              <span class="slider__caption">3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, culpa!</span>
            </div> -->
        </div>

        <!-- Controls -->
        <!-- <div class="switch" id="prev"><span></span></div>
        <div class="switch" id="next"><span></span></div> -->

        <div class="slider__switch slider__switch--prev" data-ikslider-dir="prev">
         <span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.89 17.418c.27.272.27.71 0 .98s-.7.27-.968 0l-7.83-7.91c-.268-.27-.268-.706 0-.978l7.83-7.908c.268-.27.7-.27.97 0s.267.71 0 .98L6.75 10l7.14 7.418z"/></svg></span>
       </div>
       <div class="slider__switch slider__switch--next" data-ikslider-dir="next">
        <span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.25 10L6.11 2.58c-.27-.27-.27-.707 0-.98.267-.27.7-.27.968 0l7.83 7.91c.268.27.268.708 0 .978l-7.83 7.908c-.268.27-.7.27-.97 0s-.267-.707 0-.98L13.25 10z"/></svg></span>
       </div>
    </div><!--end of the slider-->

    <div class="blog_details">
        <a class="d-inline-block" href="blog_details.html">
        <h2 class="blog-head" style="color: #2d2d2d;">@if(session()->get('locale') == 'en') {{ $course->name }} @else {{ $course->ar_name  }} @endif</h2>
        </a>
        <p>@if(session()->get('locale') == 'en') {!! $course->detail !!} @else {!! $course->ar_detail  !!} @endif </p>
        <ul class="blog-info-link">
        <li><a href="#">@if(session()->get('locale') == 'en') {{ $course->course }} @else {{ $course->ar_course  }} @endif |</a></li>
  
        </ul>
    </div><!--End of the description section -->

</div>

</div>
<!--End of the half section --->
    <div class="col-md-4">
            <article class="blog_item">
                <div class="blog_item_img">
                <img class="card-img rounded-0" src="{{ asset('uploads/'.$course->photo.'') }}" alt="">
                <a href="#" class="blog_item_date">
                <h3>{{ $course->fess }}</h3>
                <p>10%  @if(session()->get('locale') == 'en') Discount @else تخفيض @endif </p>
                </a>
                </div><br>&nbsp;&nbsp;
                @if(!empty($pdf->process_status))   
                  @if($pdf->process_status == 1)
                     <a href="{{ route('course.pdf',$course->id) }}" class="btn header-btn2">@if(session()->get('locale') == 'en') Download PDF @else تحميل PDF @endif </a>
                  @else
                     <a href="{{ route('course_uploaded.pdf',$course->id) }}" class="btn header-btn2"> @if(session()->get('locale') == 'en') Download PDF @else   تحميل PDF @endif </a>
                  @endif
                @endif
                
                <div class="blog_details">
                
                <ul class="unordered-list" style="    background-color:aliceblue;border-radius: 10px;">
                   <div style="padding: 10px;">
                    <h3 style="color: darkblue;text-decoration: underline;">@if(session()->get('locale') == 'en') Course informations @else معلومات الدورة @endif </h3>
              
                    <li style="font-weight: bold;"> @if(session()->get('locale') == 'en') Fees @else مصاريف @endif  : - {{ $course->fess }}</li>
                    <li style="font-weight: bold;">@if(session()->get('locale') == 'en') Duration @else مدة @endif  : - @if(session()->get('locale') == 'en') {{ $course->course_period }} @else {{ $course->ar_course_period }} @endif </li>
                    <li style="font-weight: bold;"> @if(session()->get('locale') == 'en') Starting Dates @else تواريخ البدء @endif  : - {{ $course->starting_date }} & {{ $course->starting_date2 }}</li>
                    
                   </div>
                </ul>
              

                
                <p>
                <ul class="unordered-list">
                    <h3> @if(session()->get('locale') == 'en') Course requirements @else متطلبات الدورة @endif </h3>

                    @foreach ($course_req as $req)
                    <li>@if(session()->get('locale') == 'en') {{ $req->requirment }} @else {{ $req->ar_requirment  }} @endif </li>
                    @endforeach

                </ul>
                </p>
              
                </div>
            </article>
    </div>
<!--this --->

</div>	<!--row end-->
</div> <!--container End --->
</section>

<!--End of the product details section --->


</main>
@endsection

@section('script')
<script>
$(".slider-container").ikSlider({
  speed: 600
});
$(".slider-container").on('changeSlide.ikSlider', function (evt) { console.log(evt.currentSlide); });


$("#submit1").click(function(){
        let string = $('#string1').val(); 
        if(string != ''){
        let url = "{{ route('search.direct','') }}"+"/"+string;
        window.location.href = url;
        }
    })
</script>
@endsection







