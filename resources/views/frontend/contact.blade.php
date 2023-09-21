@extends('frontend.layouts.base')

@section('content')

<main>

<div class="hero-area slider-area">
<div class="hero-height2 hero-bg2 d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="hero-cap">
<h2> {{ __('messages.nav_contact')}}</h2>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{ route('home') }}"> {{ __('messages.nav_home')}}</a></li>
<li class="breadcrumb-item"><a href="{{ route('about') }}"> {{ __('messages.nav_contact')}}</a></li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="about-area2 section-padding">
<div class="container">
<div class="row align-items-center ">
<div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12">
<h2 class="contact-title">Get in Touch</h2>
</div>
<div class="col-lg-8">
<form class="form-contact contact_form" action="https://preview.colorlib.com/theme/onedu/contact_process.php" method="post" id="contactForm" novalidate="novalidate">
<div class="row">
<div class="col-12">
<div class="form-group">
<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
</div>
</div>
<div class="col-12">
<div class="form-group">
<input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
</div>
</div>
</div>
<div class="form-group mt-3">
<button type="submit" class="button button-contactForm boxed-btn">Send</button>
</div>
</form>
</div>
<div class="col-lg-3 offset-lg-1">
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-home"></i></span>
<div class="media-body">
<h3>Buttonwood, California.</h3>
<p>Rosemead, CA 91770</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-tablet"></i></span>
<div class="media-body">
<h3>+1 253 565 2365</h3>
<p>Mon to Fri 9am to 6pm</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-email"></i></span>
<div class="media-body">
<h3><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="91e2e4e1e1fee3e5d1f2fefdfee3fdf8f3bff2fefc">[email&#160;protected]</a></h3>
<p>Send us your query anytime!</p>
</div>
</div>
</div></div>

</section>

<section class="contact-section">
<div class="container">
<div class="row align-items-center ">
<div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12 col-sm-12">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7967.521131161193!2d101.74692663191634!3d3.1577073539816896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37a9c8cb3dff%3A0xc94b9612619e3e7!2sPejabat%20Pos%20Ampang%20Point!5e0!3m2!1sen!2sin!4v1676341050580!5m2!1sen!2sin" width="1000" height="450" style="border:0;" allowfullscreen=""  referrerpolicy="no-referrer-when-downgrade">
</iframe>
</div></div></div>

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







