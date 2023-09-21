<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
    
    <head>
    <!--title-->
    <title>Edudeve - Student Admission Processing Software solution</title>
    
    <!--meta-->
    <meta name="description" content="Online Course Admission Website ,University Admission software ,Educational Softwares , Student admission processing software, software technology, University & Student bridge Apps,Websites . It is best and famous software company who build Education software, custome education based software design.">
    @include('app_website.layouts.header')
    
    </head>

<body>

    <!--preloader start-->
    <div id="preloader" class="bg-light-subtle">
        <div class="preloader-wrap">
            <img src="{{ asset('app_assets/img/logo2.png') }}" alt="logo" class="img-fluid preloader-icon">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        @include('app_website.layouts.navbar')

        <!--hero section start-->
        <section class="hero-section ptb-120" style="background: url('app_assets/img/shape/dot-dot-wave-shape.svg')no-repeat bottom center">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-xl-5 col-lg-5">
                        <div class="hero-content-wrap text-center text-xl-start text-lg-start" data-aos="fade-right">
                            <h1 class="fw-bold display-5">Revolutionary educational management system</h1>
                            <p class="lead">Simplify Your Academic Journey , Connecting Universities and Students by Simplify admission processing </p>
                            <div class="hero-subscribe-form-wrap pt-4 position-relative m-auto m-xl-0 d-none d-md-block d-lg-block d-xl-block">
                                <form id="subscribe-form" method="post" action="{{ route('sub.request') }}" name="email-form" class="hero-subscribe-form d-block d-lg-flex d-md-flex">
                                    @csrf
                                    <input type="email" class="form-control me-2" name="Email" data-name="Email" placeholder="Enter Your Email Address" id="email-address" required="">
                                    <input type="submit" value="Subscribe" data-wait="Please wait..." class="btn btn-default mt-3 mt-lg-0 mt-md-0" style="font-size:15px;padding:10px; background-image: linear-gradient(to right, #FF3CA9   , #FF0D5D   );color:white">
                                </form>
                                @error('Email')<p class="text-danger">{{ $message }}</p>@enderror
                                <ul class="nav subscribe-feature-list mt-3">
                                    <!-- <li class="nav-item">
                                        <span class="ms-0"><i class="far fa-check-circle text-primary me-2"></i>Free 14-day trial</span>
                                    </li> -->
                                    <li class="nav-item">
                                        <span>Subscribe to our newsletter</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mt-4 mt-xl-0">
                        <div class="hero-img-wrap position-relative" data-aos="fade-left">
                            <!--animated shape start-->
                            <ul class="position-absolute animate-element parallax-element shape-service hide-medium">
                                <li class="layer" data-depth="0.03">
                                    <img src="{{ asset('app_assets/img/color-shape/image-1.svg') }}" alt="shape" class="img-fluid position-absolute color-shape-1">
                                </li>
                                <li class="layer" data-depth="0.02">
                                    <img src="{{ asset('app_assets/img/color-shape/feature-2.svg') }}" alt="shape" class="img-fluid position-absolute color-shape-2 z-5">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="{{ asset('app_assets/img/color-shape/feature-3.svg') }}" alt="shape" class="img-fluid position-absolute color-shape-3">
                                </li>
                            </ul>
                            <!--animated shape end-->
                            <div class="hero-img-wrap position-relative">
                                <div class="hero-screen-wrap">
                                    <div class="phone-screen">
                                        <img src="{{ asset('app_assets/img/screen/phone-screen.png') }}" alt="hero image" class="position-relative img-fluid">
                                    </div>
                                    <div class="mac-screen">
                                        <img src="{{ asset('app_assets/img/screen/mac-screen.png') }}" alt="hero image" class="position-relative img-fluid rounded-custom">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--hero section end-->

        <!--promo section start-->
        <!--<div class="customer-section pb-120">-->
        <!--    <div class="container">-->
        <!--        <div class="row justify-content-center">-->
        <!--            <div class="col-lg-8 col-12">-->
        <!--                <ul class="customer-logos-grid text-center list-unstyled mb-0">-->
                          
        <!--                    <li>-->
        <!--                        <a href="{{ route('home') }}" class="btn btn-warning">Website</a>-->
        <!--                    </li>-->
                            
        <!--                    <li>-->
        <!--                        <a href="{{ route('login') }}" class="btn btn-primary">Admin</a>-->
        <!--                    </li>-->
                            
        <!--                    <li>-->
        <!--                        <a href="{{ route('student_login_form') }}" class="btn btn-success">Student</a>-->
        <!--                    </li>-->
                            
                          
        <!--                </ul>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!--promo section end-->
        

        <!--customers section start-->
        <!-- <section class="promo-section ptb-120 bg-light-subtle ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h2>Our Customers Get Results</h2>
                            <p>Progressively deploy market positioning catalysts for change and technically sound.
                                Authoritatively with backward-compatible
                                e-services. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0 mt-md-0">
                        <div class="bg-dark p-5 text-center d-flex flex-column h-100 rounded-custom" data-aos="fade-up" data-aos-delay="100">
                            <div class="promo-card-info mb-4">
                                <h3 class="display-5 fw-bold mb-4"><i class="fas fa-fingerprint text-warning me-2"></i> 10x
                                </h3>
                                <p>Embrace distinctive best practices after B2B syndicate backend internal or whereas edge
                                    process improvements. </p>
                            </div>
                            <div class="mt-auto">
                                <img src="assets/img/clients/client-logo-4.svg" width="120" alt="clients" class="img-fluid me-auto customer-logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0 mt-md-0">
                        <div class="bg-dark p-5 text-center d-flex flex-column h-100 rounded-custom" data-aos="fade-up" data-aos-delay="150">
                            <div class="promo-card-info mb-4">
                                <h3 class="display-5 fw-bold mb-4"><i class="fas fa-paper-plane text-warning me-2"></i> 5k
                                </h3>
                                <p>Rapidiously embrace distinctive best practices B2B syndicate backend internal or whereas
                                    process improvements. </p>
                            </div>
                            <div class="mt-auto">
                                <img src="assets/img/clients/client-logo-2.svg" width="120" alt="clients" class="img-fluid me-auto customer-logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
                        <div class="bg-dark p-5 text-center d-flex flex-column h-100 rounded-custom" data-aos="fade-up" data-aos-delay="200">
                            <div class="promo-card-info mb-4">
                                <h3 class="display-5 fw-bold mb-4"><i class="fas fa-chart-pie text-warning me-2"></i>
                                    95%</h3>
                                <p>Distinctive best practices after B2B syndicate internal or whereas bleeding-edge process
                                    improvements. </p>
                            </div>
                            <div class="mt-auto">
                                <img src="assets/img/clients/client-logo-3.svg" width="120" alt="clients" class="img-fluid me-auto customer-logo">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>  -->
        <!--customers section end-->

        <!--feature section start-->
        <section class="feature-section-two ptb-120">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5 col-md-12">
                        <div class="section-heading" data-aos="fade-up">
                            <h4 class="h5 text-primary">Features</h4>
                            <h2>Revolutionize University Experience with Our App for Your Business Needs</h2>
                            <p> Our app connects students with top universities from around the world, streamlining the admission process and providing real-time updates. Explore courses, get personalized recommendations, and track your application status all in one place.</p>
                            <ul class="list-unstyled mt-5">
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-primary rounded me-4">
                                        <i class="fas fa-bezier-curve text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Simplified Admission Process</h3>
                                        <p>Apply for admission to universities seamlessly through our app, without having to navigate complex application systems.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-danger rounded me-4">
                                        <i class="fas fa-fingerprint text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Real-Time Application Tracking:</h3>
                                        <p>Keep track of your application status in real-time and receive notifications when there are updates.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="feature-img-wrap position-relative d-flex flex-column align-items-end">
                            <ul class="img-overlay-list list-unstyled position-absolute">
                                <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up" data-aos-delay="50">
                                    <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                    <h6 class="mb-0">Global University Marketplace</h6>
                                </li>
                                <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up" data-aos-delay="100">
                                    <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                    <h6 class="mb-0">Simplified Admission Process</h6>
                                </li>
                                <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up" data-aos-delay="150">
                                    <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                    <h6 class="mb-0">Personalized Course Recommendations</h6>
                                </li>
                                <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up" data-aos-delay="150">
                                    <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                    <h6 class="mb-0">Real-Time Application Tracking</h6>
                                </li>
                            </ul>
                            <img src="{{ asset('app_assets/img/future.png') }}" alt="feature image" class="img-fluid rounded-custom">
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--feature section end-->

        <!--feature section start-->
        <section class="feature-section two-bg-dark-light ptb-120">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6">
                        <div class="image-wrap mb-5 mb-md-0 mb-lg-0 mb-xl-0" data-aos="fade-up">
                            <img src="{{ asset('app_assets/img/dashboard-img.png') }}" alt="feature img" class="img-fluid shadow rounded-custom">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="feature-content-wrap" data-aos="fade-up" data-aos-delay="50">
                            <h4 class="h5 text-primary">Advanced Features</h4>
                            <h2>Unlock the Power of Advanced Features for a Smarter University Admission Experience</h2>
                            <p>Our app provides advanced features to help students stay organized, save time, and make informed decisions. Explore our advanced features to optimize your university experience.</p>
                            <ul class="list-unstyled mt-5">
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-danger rounded me-4">
                                        <i class="fas fa-fingerprint text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Real-Time University Reports</h3>
                                        <p>Stay updated with real-time university reports to help you make informed decisions about courses, programs, and admission processes.
                                        </p>
                                    </div>
                                </li>

                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-primary rounded me-4">
                                        <i class="fas fa-bezier-curve text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Automated Commission Calculation</h3>
                                        <p>Our app provides automated commission calculation, so you know exactly how much you're paying for admission processes, without any hidden fees or charges.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-danger rounded me-4">
                                        <i class="fas fa-fingerprint text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5">Document Upload and Verification</h3>
                                        <p>Upload and verify documents required for the admission process seamlessly through our app, and get notified of any missing documents.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--feature section end-->

        <!--our work process start-->
        <section class="work-process ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h4 class="h5 text-primary">Process</h4>
                            <h2> Get Started in Just a Few Simple Steps</h2>
                            <p>Our university-based education system application streamlines the admission process, making it easier than ever for students to enroll in their dream courses. Here's how it works.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5 col-md-12 order-1 order-lg-0">
                        <div class="img-wrap" data-aos="fade-up" data-aos-delay="50">
                            <img src="{{ asset('app_assets/img/about2.jpg') }}" alt="work process" class="img-fluid rounded-custom">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                        <ul class="work-process-list list-unstyled">
                            <li class="d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="50">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="fas fa-folder-tree fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6">Step 1</span>
                                    <h3 class="h5 mb-2">Registration and Course Recommendation</h3>
                                    <p>Students create an account on the app, providing their personal details, academic history, and career goals. Our app suggests courses based on the student's academic background, interests, and career goals.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="fas fa-bezier-curve fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6">Step 2</span>
                                    <h3 class="h5 mb-2">Course Enrollment and Application Processing</h3>
                                    <p>Students can enroll in courses by selecting their preferred course and university and submitting the required documents. Our app streamlines the admission process by submitting the student's application and documents to the university on their behalf.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="150">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="fas fa-layer-group fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6">Step 3</span>
                                    <h3 class="h5 mb-2">Course Registration and Document Verification</h3>
                                    <p>Our app automatically registers the student for their selected course, providing access to course resources and materials. Our app also verifies the authenticity of the student's documents and notifies them of any missing documents required for the admission process.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="fas fa-truck fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6">Step 4</span>
                                    <h3 class="h5 mb-2">Real-Time Application Tracking and Payment</h3>
                                    <p>Students can track the status of their application in real-time, receiving notifications when there are updates. Our app provides a seamless payment gateway for students to pay for their admission processes and other services provided by the company.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> <!--our work process end-->

        <!--customer review slider section start-->
        <!-- <section class="testimonial-section bg-dark text-white  ptb-120">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h4 class="h5 text-warning text-primary">Testimonial</h4>
                            <h2>What They Say About Us</h2>
                            <p>Uniquely promote adaptive quality vectors rather than stand-alone e-markets. pontificate alternative architectures whereas iterate.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative w-100" data-aos="fade-up" data-aos-delay="50">
                            <div class="swiper testimonialSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="bg-custom-light text-white  p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/1.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Mr.Rupan Oberoi</h6>
                                                    <small>Founder and CEO at Amaara Herbs</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>The Best Template You Got to Have it!</h6>
                                                Globally network long term high impact schemas
                                                cross-media infrastructures rather than ethical core competencies.
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-custom-light text-white  p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/3.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Oberoi R.</h6>
                                                    <small>CEO at Herbs</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Embarrassed by the First Version.</h6>
                                                Dynamically create innovative core competencies with effective best
                                                practices promote innovative infrastructures.
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-custom-light text-white  p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/2.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Mr.Rupan Oberoi</h6>
                                                    <small>Founder and CEO</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Amazing Quiety template!</h6>
                                                Appropriately negotiate interactive niches rather than parallel strategic theme premium total linkage areas.
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-custom-light text-white  p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/4.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Joan Dho</h6>
                                                    <small>Founder and CTO</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Best Template for SAAS Company!</h6>
                                                Dynamically create innovative core competencies with effective best
                                                practices promote innovative infrastructures.
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-custom-light text-white  p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/5.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Ranu Mondal</h6>
                                                    <small>Lead Developer</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>It is undeniably good!</h6>
                                                Rapidiously supply client-centric e-markets and maintainable processes progressively extend process-centric portals engineer
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-nav-control">
                                <span class="swiper-button-next"></span>
                                <span class="swiper-button-prev"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  -->
        <!--customer review slider section end-->

        <!--integration section start-->
        <section class="integration-section  ptb-120">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading">
                            <!--<h4 class="h5 text-primary">Integration</h4>-->
                            <h2>Cutting-Edge Technologies for Modern Solutions</h2>
                            <p>Our Engineers use the latest and constantly upgraded technologies to provide you with innovative and efficient solutions.</p>
                        </div>
                    </div>
                    <!--<div class="col-lg-4 col-md-12">-->
                    <!--    <div class="text-lg-end mb-5 mb-lg-0">-->
                    <!--        <a href="integrations.html" class="btn btn-primary">Overview of technologies</a>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="integration-wrapper position-relative w-100">
                            <ul class="integration-list list-unstyled mb-0">
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="{{ asset('app_assets/img/integations/js.png') }}" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">JavaScript</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="{{ asset('app_assets/img/integations/laravel2.png') }}" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">Laravel</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="{{ asset('app_assets/img/integations/nodejs.png') }}" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">Node js</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="{{ asset('app_assets/img/integations/vuejs.png') }}" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">Vue Js</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="{{ asset('app_assets/img/integations/php.png') }}" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">PHP</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="{{ asset('app_assets/img/integations/react.png') }}" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">React</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="{{ asset('app_assets/img/integations/express.png') }}" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">Express</h6>
                                    </div>
                                </li>
                                  <li>
                                    <div class="single-integration bg-white">
                                        <img src="{{ asset('app_assets/img/integations/mysql1.png') }}" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">Mysql</h6>
                                    </div>
                                </li>
                                 <li>
                                    <div class="single-integration bg-white">
                                        <img src="{{ asset('app_assets/img/integations/mongodb.png') }}" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">Mongo Db</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="{{ asset('app_assets/img/integations/next.png') }}" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">Next Js</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-integration bg-white">
                                        <img src="{{ asset('app_assets/img/integations/angular.png') }}" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">Angular</h6>
                                    </div>
                                </li>
                               
                                  <li>
                                    <div class="single-integration bg-white">
                                        <img src="{{ asset('app_assets/img/integations/reactnative1.png') }}" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">React Native</h6>
                                    </div>
                                </li>
                                
                              
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!--integration section end-->

        <!--cat subscribe start-->
        <!-- <section class="cta-subscribe bg-dark text-white ptb-120 position-relative overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="subscribe-info-wrap text-center position-relative z-2">
                            <div class="section-heading" data-aos="fade-up">
                                <h4 class="h5 text-warning">Let's Try! Get Free Support</h4>
                                <h2>Start Your 14-Day Free Trial</h2>
                                <p>We can help you to create your dream website for better business revenue.</p>
                            </div>
                            <div class="form-block-banner mw-60 m-auto mt-5" data-aos="fade-up" data-aos-delay="50">
                                <a href="contact-us.html" class="btn btn-primary">Contact with Us</a>
                                <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn ms-lg-3 ms-md-3 mt-3 mt-lg-0"> <i
                                        class="fas fa-play"></i> Watch Demo </a>
                            </div>
                            <ul class="nav justify-content-center subscribe-feature-list mt-4" data-aos="fade-up" data-aos-delay="100">
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Free 14-day trial</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>No credit card required</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Support 24/7</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Cancel anytime</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
                <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
            </div>
        </section>  -->
        <!--cat subscribe end-->

      @include('app_website.layouts.footer')

    </div>



    <!--build:js-->
    <script src="{{ asset('app_assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('app_assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('app_assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('app_assets/js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('app_assets/js/vendors/parallax.min.js') }}"></script>
    <script src="{{ asset('app_assets/js/vendors/aos.js') }}"></script>
    <script src="{{ asset('app_assets/js/vendors/massonry.min.js') }}"></script>
    <script src="{{ asset('app_assets/js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!--endbuild-->
    <script>
        // this is the toaster notification
        toastr.options = {
          "closeButton": true,
           //"positionClass": "toast-bottom-left",
           }
        @if(session('success'))
        toastr["success"]("{{ session('success') }}");
        @elseif(session('info'))
        toastr["info"]("{{ session('info') }}");
        @elseif (session('warning'))
        toastr["error"]("{{ session('warning') }}");
        @endif
        //end of the tostar Notification
    </script>
</body>


<!-- Mirrored from quiety.themetags.com/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 15:45:59 GMT -->
</html>