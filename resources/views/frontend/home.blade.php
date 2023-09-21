@extends('frontend.layouts.base')

@section('content')

<style>


</style>

<main>

<!--this section is hero section-->

<div class="slider-area slider-height">
<div class="slider-active">

<div class="single-slider">
<div class="slider-cap-wrapper">
<div class="hero-caption">
<h1 data-animation="fadeInUp" data-delay=".2s">{{ __('messages.hero_title1') }}</h1>
<p data-animation="fadeInUp" data-delay=".6s">{{ __('messages.hero_title2') }}</p>

<form    action="" class="search-box">
<div class="input-form">
<input type="text" id="string" name="search_string"  placeholder="{{__('messages.search_box2')}}">
<a class="search-form" id="submit"  type="submit" ><i class="ti-search"></i></a>
</div>
</form>
</div>
<div class="hero-img position-relative">

<img src="{{ (!empty($header->banner)) ? asset('website_uploads/'.$header->banner):asset('website_assets/img/hero/h1_hero1.jpg')  }}" alt="" data-animation="fadeInRight" data-transition-duration="5s">
</div>
</div>
</div>
</div>
</div>
<!--End of the hero section --->

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
<h4><a href="{{ route('search.category', $row->id) }}">@if(session()->get('locale') == 'en') {{ $row->name }} @else {{ $row->name_arabic }} @endif </a></h4>
<a href="{{ route('search.category', $row->id) }}" class="location-btn">{{__('messages.title_v_course')}}</a>
</div>
</div>
</div>
@endforeach


</div>
</div>
</section>
<!--End of the course cateory section --->


<!--this is the course slider section ---->
<div dir="ltr">
<section class="popular-directorya-area section-padding fix" >
<div class="container">
<div class="row">
<div class="col-lg-12">

<div class="section-tittle text-center mb-40">
<h2>{{ __('messages.title_updated_course') }}</h2>
</div>
</div>
</div>
<div class="directory-active" >


@foreach($newcourse as $row)
<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img overlay1">
<a href="{{ route('preview',$row->id) }}"><img src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):('website_assets/img/gallery/courses1.jpg') }}" alt=""></a>
<div class="img-text">
<span>${{ $row->fess }}</span>
</div>
</div>
<div class="properties-caption">
<h3>
<a href="{{ route('preview',$row->id) }}">{{ $row->name }}</a>
</h3>
<p>{{ $row->course }}</p>
<div class="ratting">
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><span>4.9 ({{$row->course_period}})</span></li>
</ul>
</div>
</div>
</div>
</div>
@endforeach

</div>
</div>
</section>
</div>
<!--end of the course slider section ---->


<!---About section --->
<section class="about-area1 about-area2 fix">
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

<!--popular courses section --->
<div dir="ltr">
<section class="popular-directorya-area section-padding fix">
<div class="container">
<div class="row">
<div class="col-lg-12">

<div class="section-tittle text-center mb-40">
<h2>{{ __('messages.title_popular_course') }}</h2>
</div>
</div>
</div>
<div class="directory-active">

<!--$row->course->course-->


@foreach($popcourse as $row)
<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img overlay1">
<a href="{{ route('preview',$row->course->id) }}"><img src="{{ (!empty($row->course->photo)) ? asset('uploads/'.$row->course->photo.''):('website_assets/img/gallery/courses1.jpg') }}" alt=""></a>
<div class="img-text">
<span>${{ $row->course->fess }}</span>
</div>
</div>
<div class="properties-caption">
<h3>
<a href="{{ route('preview',$row->course->id) }}">{{ $row->course->name }}</a>
</h3>
<p>{{ $row->course->course }}</p>
<div class="ratting">
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><span>4.9 ({{$row->course->course_period}})</span></li>
</ul>
</div>
</div>
</div>
</div>
@endforeach


</div>
</div>
</section>
</div>
<!----end of the popular courses section --->






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

    
    $("#submit").click(function(){
        let string = $('#string').val(); 
        if(string != ''){
        let url = "{{ route('search.direct','') }}"+"/"+string;
        window.location.href = url;
        }
    })
  
    $("#submit1").click(function(){
        let string = $('#string1').val(); 
        if(string != ''){
        let url = "{{ route('search.direct','') }}"+"/"+string;
        window.location.href = url;
        }
    })
 

//   $(".changeLang").change(function(){
//       window.location.href = url + "?string="+ $(this).val();
//   });



//course search functionalyty 
// $(document).on('keyup',function(e){
//         e.preventDefault();
//         let search_string = $('#search').val();
//         $.ajax({
//             url:"{{ route('searches.courses') }}",
//             method:'GET',
//             data:{search_string:search_string},
//             success:function(res){
//                 $('#data-search').html(res);
//                 if(res.status == 'Nothing_Found'){
//                     $('#data-search').html('<span class="text-danger col-md-12 widget font-45">'+'Noting Found !'+'</span>');
//                 }
//             }
//         });
//     });
    //end course search functionality



</script>

@endsection





