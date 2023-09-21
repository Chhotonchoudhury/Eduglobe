<footer>
<div class="footer-area footer-padding">
<div class="footer-wrapper ">
<div class="container">
<div class="row d-flex justify-content-between">
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="single-footer-caption mb-20">
<div class="single-footer-caption mb-10">

<div class="footer-logo mb-25">
<a href="{{ route('home')  }}"><img src="{{ (!empty($cp->logo)) ? asset('uploads/'.$cp->logo.''):('website_assets/img/logo/logo2_footer.png') }}" width="45px"  alt=""></a>
</div>
<div class="footer-tittle">
<div class="footer-pera">
<p>{{ $cp->description }}</p>
</div>
</div>

<div class="footer-social">
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
<a href="#"><i class="fab fa-pinterest-p"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4> {{__('messages.title_category')}}</h4>
<ul>
<li><a href="#">{{__('messages.title_course')}}</a></li>

</ul>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>{{__('messages.title_student')}}</h4>
<ul>
<li><a href="#"> {{__('messages.title_registration')}}</a></li>

</ul>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4> {{__('messages.title_company')}}</h4>
<ul>
<li><a href="#"> {{__('messages.title_adminp')}}</a></li>

</ul>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4> {{__('messages.title_subscribe')}}</h4>
<p>{{__('messages.title_subscribe_course')}}</p>
</div>

<div class="footer-form">
<div id="mc_embed_signup">
<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
<input type="email" name="EMAIL" id="newsletter-form-email" placeholder="  Enter your email">
<div class="form-icon">
<button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
{{__('messages.title_subscribe')}}
</button>
</div>
<div class="mt-10 info"></div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- <div class="footer-bottom-area">
<div class="container">
<div class="footer-border">
<div class="row d-flex align-items-center">
<div class="col-xl-12 ">
<div class="footer-copy-right text-center">
<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank" rel="nofollow noopener">Colorlib</a></p>
</div>
</div>
</div>
</div>
</div> -->

</div>
</div>
</div>
</footer>

<div id="back-top">
<a class="wrapper" title="Go to Top" href="#">
<div class="arrows-container">
<div class="arrow arrow-one">
</div>
<div class="arrow arrow-two">
</div>
</div>
</a>
</div>


<script src="{{ asset('website_assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('website_assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('website_assets/js/popper.min.js') }}"></script>
<script src="{{ asset('website_assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('website_assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('website_assets/js/slick.min.js') }}"></script>
<script src="{{ asset('website_assets/js/jquery.slicknav.min.js') }}"></script>

<script src="{{ asset('website_assets/js/wow.min.js') }}"></script>
<script src="{{ asset('website_assets/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('website_assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('website_assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('website_assets/js/waypoints.min.js') }}"></script>

<script src="{{ asset('website_assets/js/contact.js') }}"></script>
<script src="{{ asset('website_assets/js/jquery.form.js') }}"></script>
<script src="{{ asset('website_assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('website_assets/js/mail-script.js') }}"></script>
<script src="{{ asset('website_assets/js/jquery.ajaxchimp.min.js') }}"></script>

<script src="{{ asset('website_assets/js/plugins.js') }}"></script>
<script src="{{ asset('website_assets/js/main.js') }}"></script>
<script src="{{ asset('website_assets/js/slider.js') }}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"78ac5b3288e293c5","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
