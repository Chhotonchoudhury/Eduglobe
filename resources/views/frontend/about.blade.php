@extends('frontend.layouts.base')

@section('content')

<main>

<div class="hero-area slider-area">
<div class="hero-height2 hero-bg2 d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="hero-cap">
<h2> {{ __('messages.nav_about')}}</h2>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{ route('home') }}"> {{ __('messages.nav_home')}}</a></li>
<li class="breadcrumb-item"><a href="{{ route('about') }}"> {{ __('messages.nav_about')}}</a></li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>
</div>

      <!---About section --->
        <section class="about-area2 about-area2 fix">
            <div class="container">
            <div class="row align-items-center section-overlay">
            <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12">

            <div class="about-img about-img1  ">
            <img src="{{ (!empty($about->banner)) ? asset('website_uploads/'.$about->banner):asset('website_assets/img/gallery/about1.jpg')  }}" alt="">
            </div>
            </div>
            <div class="offset-xxl-1 col-xxl-5 col-xl-7 col-lg-6 col-md-12">
            <div class="about-caption about-caption1">

            <div class="section-tittle mb-25">
            <h2>{{ __('messages.about_title1') }}</h2>
            <p class="mb-20">{{ __('messages.about_title2') }}</p>
            </div>

            <div class="slider-btns">
            <a data-animation="fadeInLeft" data-delay="1.0s" href="about.html" class="btn hero-btn">{{ __('messages.title_b_course') }}</a>
            </div>
            </div>
            </div>
            </div>
            </div>
        </section>
       <!---End of the about section --->


        <!---course category section --->
            <section class="popular-location section-padding">
                    <div class="container">
                    <div class="row">
                    <div class="col-lg-12">

                    <div class="section-tittle text-center mb-40">
                    <h2>{{ __('messages.title_explore_category') }}</h2>
                    </div>
                    </div>
                    </div>
                    <div class="row">

                    @foreach($category as $row)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-location mb-20">
                    <div class="location-img">
                    <img src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):('website_assets/img/gallery/categories1.jpg') }}" alt="">
                    </div>
                    <div class="location-details">
                    <h4><a href="{{ route('search.category', $row->id) }}">@if(session()->get('locale') == 'en') {{ $row->name }} @else {{ $row->arabic_name }} @endif  </a></h4>
                    <a href="{{ route('search.category', $row->id) }}" class="location-btn">{{__('messages.title_v_course')}}</a>
                    </div>
                    </div>
                    </div>
                    @endforeach


                    </div>
                    </div>
            </section>
        <!--End of the course cateory section --->

           <!--How it works section --->
                <section class="about-area2 section-bg">
                    <div class="container">
                    <div class="row align-items-center">
                    <div class="offset-xxl-1 col-xxl-4 col-xl-5 col-lg-6 col-md-12">
                    <div class="about-caption about-caption2">

                    <div class="section-tittle mb-25">
                    <h2>{{ __('messages.title_how_it_work')}}</h2>
                    <p class="mb-20">{{ __('messages.work_title')}}</p>
                    </div>

                        @if(__('messages.work_title1') != 'messages.work_title1')
                        <div class="single-features">
                        <div class="features-icon">
                        <img src="{{ asset('website_assets/img/icon/tick.svg') }}" alt="">
                        </div>
                        <div class="features-caption">
                        <p>{{ __('messages.work_title1')}}</p>
                        </div>
                        </div>
                        @endif

                        @if(__('messages.work_title2') != 'messages.work_title2')
                        <div class="single-features">
                        <div class="features-icon">
                        <img src="{{ asset('website_assets/img/icon/tick.svg') }}" alt="">
                        </div>
                        <div class="features-caption">
                        <p>{{__('messages.work_title2')}}</p>
                        </div>
                        </div>
                        @endif

                        @if(__('messages.work_title3') != 'messages.work_title3')
                        <div class="single-features">
                        <div class="features-icon">
                        <img src="{{ asset('website_assets/img/icon/tick.svg') }}" alt="">
                        </div>
                        <div class="features-caption">
                        <p>{{__('messages.work_title3')}}</p>
                        </div>
                        </div>
                        @endif

                        @if(__('messages.work_title4') != 'messages.work_title4' )
                        <div class="single-features">
                        <div class="features-icon">
                        <img src="{{ asset('website_assets/img/icon/tick.svg') }}" alt="">
                        </div>
                        <div class="features-caption">
                        <p>{{__('messages.work_title4')}}</p>
                        </div>
                        </div>
                        @endif

                        @if(__('messages.work_title5') != 'messages.work_title5')
                        <div class="single-features">
                        <div class="features-icon">
                        <img src="{{ asset('website_assets/img/icon/tick.svg') }}" alt="">
                        </div>
                        <div class="features-caption">
                        <p>{{__('messages.work_title5')}}</p>
                        </div>
                        </div>
                        @endif





                    <div class="slider-btns">
                    <a data-animation="fadeInLeft" data-delay="1.0s" href="about.html" class="btn hero-btn mr-15">{{__('messages.title_register')}}</a>
                    <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn" href="https://www.youtube.com/watch?v=Wxdj970RM7M">
                    <img src="{{ asset('website_assets/img/icon/play-button.svg') }}" alt="">
                    {{__('messages.title_w_video')}}
                    </a>
                    </div>
                    </div>
                    </div>
                    <div class="offset-xl-1  col-xxl-5 col-xl-5 col-lg-6 col-md-12">

                    <div class="about-img about-img2  ">
                    <img src="{{ (!empty($work->banner)) ? asset('website_uploads/'.$work->banner):asset('website_assets/img/gallery/about2.jpg')  }}" alt="">
                    </div>
                    </div>
                    </div>
                    </div>
                </section>
            <!---End of the how it's work section--->


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







