<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<!-- Mirrored from preview.colorlib.com/theme/onedu/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2023 04:30:39 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Education | Template</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/favicon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-5fZ/dzdUUZ+Hw2AvkPwGzMG+wxQ0GevfTTv0bRAdWz1lZb/HF0KnPq3lJwWx+FYhnMjj1Jc8I+oqP/tGQwjLJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@include('frontend.layouts.header')
<style>

.whatsapp-float {
  position: fixed;
  width: 40px;
  height: 40px;
  bottom: 65px;
  right: 30px;
  background-color: #25d366;
  color: #fff;
  border-radius: 50px;
  text-align: center;
  font-size: 20px;
  line-height: 40px;
  box-shadow: 2px 2px 3px #999;
  z-index: 100;
}

@media only screen and (max-width: 768px) {
  .whatsapp-float {
    width: 40px;
    height: 40px;
    bottom: 63px;
    right: 15px;
    font-size: 16px;
    line-height: 40px;
  }
}

.whatsapp-float:hover {
  background-color: #009688;
  color: #fff;
}
</style>
<header>
<div class="header-area">
<div class="main-header header-sticky">
<div class="container-fluid">
<div class="menu-wrapper d-flex align-items-center justify-content-between">
<div class="left-content d-flex align-items-center">
<div class="logo">
<a href="{{ route('home') }}"><img src="{{ (!empty($cp->logo)) ? asset('uploads/'.$cp->logo.''):('website_assets/img/logo/logo.png') }}" width="45px" alt=""></a>
</div>

<form action="#" class="form-box">
<input type="text" id="string1" name="Search" placeholder="        {{__('messages.search_box1')}}">
<div class="search-icon">
<i class="ti-search" id="submit1" ></i>
</div>
</form>
</div>

<div class="main-menu d-none d-lg-block">
@include('frontend.layouts.navbar')
</div>
</div>

<div class="col-12">
<div class="mobile_menu d-block d-lg-none"></div>
</div>
</div>
</div>
</div>
</header>

<a href="https://wa.me/60183290270" class="whatsapp-float" target="_blank">
  <i class="fa fa-whatsapp"></i>
</a>


@yield('content')


@include('frontend.layouts.footer')

@yield('script')

<script>

toastr.options = {
  "closeButton": true,
//   "positionClass": "toast-top-center",
   }
@if(session('success'))
toastr["success"]("{{ session('success') }}");
@endif
    
<script>

</body>
<!-- Mirrored from preview.colorlib.com/theme/onedu/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2023 04:31:48 GMT -->
</html>