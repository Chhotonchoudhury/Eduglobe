<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

    <head>
    <!--title-->
    <title>Edudeve - Educational Software-App-Website Live Demos</title>
    
    <!--meta-->
    <meta name="description" content="Educational Softwares , Student admission processing software, software technology, University & Student bridge Apps,Websites . It is best and famous software company who build Education software, custome education based software design.">
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
        
           <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('assets/img/page-header-bg.svg')no-repeat bottom left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h1 class="display-5 fw-bold">App Realtime Demo</h1>
                        <p class="lead">Discover EduDeve: Your Ultimate Solution to Education - See It in Action!.</p>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
        <!--page header section end-->
        
        <!-- portfolio start -->
        <section class="portfolio bg-light-subtle ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-heading text-center">
                            <h2>Take a Look </h2>
                            <p>
                               Here are some screenshots of the app in action.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="tab-button mb-5">
                            <ul class="nav nav-pills d-flex justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">
                                        All
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-branding-tab" data-bs-toggle="pill" data-bs-target="#pills-branding" type="button" role="tab" aria-controls="pills-branding" aria-selected="false">
                                        Admin Dashboard 
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-design-tab" data-bs-toggle="pill" data-bs-target="#pills-design" type="button" role="tab" aria-controls="pills-design" aria-selected="false">
                                        Wesite for student
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-logo-tab" data-bs-toggle="pill" data-bs-target="#pills-logo" type="button" role="tab" aria-controls="pills-logo" aria-selected="false">
                                        Student Dashboard
                                    </button>
                                </li>
                                <!--<li class="nav-item" role="presentation">-->
                                <!--    <button class="nav-link" id="pills-web-tab" data-bs-toggle="pill" data-bs-target="#pills-web" type="button" role="tab" aria-controls="pills-web" aria-selected="false">-->
                                <!--        Web-->
                                <!--    </button>-->
                                <!--</li>-->
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <!-- All -->
                        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/admin-1.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Website Design Project</a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Admin sections</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/admin-2.png') }}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Leafery Branding-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Admin sections</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/admin-3.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Information Architencure-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Admin sections</span>
                                                    <!--<span>Logo</span>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/website-1.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">User Interface Design-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Webiste sections</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/website-2.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Information Architencure-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Webiste sections</span>
                                                    <!--<span>Logo</span>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/website-3.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Branding & Corporate Identity-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Webiste sections</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                   <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/student-1.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Branding & Corporate Identity-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Student sections</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                   <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/student-2.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Branding & Corporate Identity-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Student sections</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                   <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/student-3.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Branding & Corporate Identity-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Student sections</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Admin Dashboard -->
                        <div class="tab-pane fade" id="pills-branding" role="tabpanel" aria-labelledby="pills-branding-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/admin-1.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Leafery Branding-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Admin sections</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/admin-2.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                 <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Leafery Branding-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Admin sections</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/admin-3.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Leafery Branding-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Admin sections</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/admin-4.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                  <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Leafery Branding-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Admin sections</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/admin-5.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                  <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Leafery Branding-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Admin sections</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/admin-6.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                 <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Leafery Branding-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Admin sections</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Website -->
                        <div class="tab-pane fade" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/website-1.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Leafery Branding-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Website sections</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/website-2.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                  <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Leafery Branding-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Website sections</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/website-3.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                  <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Leafery Branding-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Website sections</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/website-4.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                  <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Leafery Branding-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Website sections</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/website-5.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                  <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Leafery Branding-->
                                                <!--    </a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Website sections</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Student dashboard -->
                        <div class="tab-pane fade" id="pills-logo" role="tabpanel" aria-labelledby="pills-logo-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/student-1.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                                <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Website Design Project</a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Student sections</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/student-2.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                               <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Website Design Project</a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Student sections</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/student-3.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                             <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Website Design Project</a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Student sections</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('app_assets/img/student-4.png')}}" alt="portfolio photo" class="img-fluid" />
                                            <div class="portfolio-info">
                                             <!--<h5>-->
                                                <!--    <a href="portfolio-single.html" class="text-decoration-none text-white">Website Design Project</a>-->
                                                <!--</h5>-->
                                                <div class="categories">
                                                    <span>Student sections</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio end -->
        
        <!-- tech tabs start -->
        <section class="ptb-120 bg-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="text-center">
                            <h2>Features</h2>
                            <p>
                               EduDeve comes packed with a range of powerful features designed to enhance your Education sytem experience.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="service-tabs">
                            <ul class="nav nav-pills d-flex justify-content-center" id="pills-tab" role="tablist">
                               
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active me-4" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">
                                        <!--<i class="fas fa-tablet-alt me-3"></i>-->
                                        <i class="fas fa-desktop me-3"></i>
                                        <span>Admin section</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                                        <!--<i class="fas fa-vector-square me-2"></i>-->
                                        <i class="fas fa-desktop me-3"></i>
                                        <span>Student section</span>
                                    </button>
                                </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link  me-4" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="false">
                                        <!--<i class="fas fa-desktop me-3"></i>-->
                                        <i class="fas fa-tablet-alt me-3"></i>
                                        <span>Website</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="tab-content-wrapper pt-60">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="text-center mb-5 mb-lg-0">
                                            <img src="{{ asset('app_assets/img/website-1.png') }}" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="tab-right-content">
                                            <h2>
                                               Features of the website
                                            </h2>
                                            <!--<p>-->
                                            <!--    Continually network effective bandwidth whereas-->
                                            <!--    goal-oriented schemas. Intrinsicly incentivize corporate-->
                                            <!--    synergy with accurate task bricks-and-clicks leadership-->
                                            <!--    skills.-->
                                            <!--</p>-->
                                            <ul class="list-unstyled">
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Explore courses</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Search course</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Download course meterial</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Explore universities</span>
                                                </li>
                                            </ul>
                                            <!--<a href="#" class="text-white link-with-icon text-decoration-none">-->
                                            <!--    Know More About Us-->
                                            <!--    <i class="fas fa-arrow-right"></i>-->
                                            <!--</a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="tab-content-wrapper pt-60">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="pe-5 mb-5 mb-lg-0">
                                            <img src="{{ asset('app_assets/img/admin-1.png')}}" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="tab-right-content">
                                            <h2>Admin Power</h2>
                                            <!--<p>-->
                                            <!--    Continually network effective bandwidth whereas-->
                                            <!--    goal-oriented schemas. Intrinsicly incentivize corporate-->
                                            <!--    synergy with accurate task bricks-and-clicks leadership-->
                                            <!--    skills.-->
                                            <!--</p>-->
                                            <ul class="list-unstyled">
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Universities control</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Courses control</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Students control</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>University reports</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Control payments and commissions</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Add agents / stuffs for operating</span>
                                                </li>
                                            </ul>
                                            <!--<a href="#" class="text-white link-with-icon text-decoration-none">-->
                                            <!--    Know More About Us-->
                                            <!--    <i class="fas fa-arrow-right"></i>-->
                                            <!--</a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="tab-content-wrapper pt-60">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="mb-5 mb-lg-0">
                                            <img src="{{ asset('app_assets/img/student-2.png') }}" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="tab-right-content">
                                            <h2>Students power</h2>
                                            <!--<p>-->
                                            <!--    Continually network effective bandwidth whereas-->
                                            <!--    goal-oriented schemas. Intrinsicly incentivize corporate-->
                                            <!--    synergy with accurate task bricks-and-clicks leadership-->
                                            <!--    skills.-->
                                            <!--</p>-->
                                            <ul class="list-unstyled">
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Registration & login</span>
                                                </li>
                                                  <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Profile update</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>See realtime suggested courses</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Take course</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Course required douments upload/download/remove </span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Track realtime-time application process</span>
                                                </li>
                                            </ul>
                                            <!--<a href="#" class="text-white link-with-icon text-decoration-none">-->
                                            <!--    Know More About Us-->
                                            <!--    <i class="fas fa-arrow-right"></i>-->
                                            <!--</a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- taech tabs end -->
        
           <!--contact us form start-->
        <section class="contact-us-form pt-60 pb-120" style="background: url('app_assets/img/shape/contact-us-bg.svg')no-repeat center bottom">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="section-heading">
                            <h2>Request a live demos</h2>
                            <!--<p>Collaboratively promote client-focused convergence vis-a-vis customer directed alignments via-->
                            <!--    standardized infrastructures.</p>-->
                        </div>
                        <form  method="POST" action="{{ route('demo.request') }}" class="register-form">
                            @csrf 
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="firstName" class="mb-1">Company name <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="firstName" name="Company_Name" required  placeholder="Company Name or Personal Name" aria-label="First name"><br>
                                    </div>
                                    @error('Company_Name')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                <div class="col-sm-6 ">
                                    <label for="lastName" class="mb-1">Company size<span
                                            class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <select id="lastName" aria-label="Last name" name="Company_Size" required class="form-control" >
                                            <option value="">Select Employee</option>
                                            <option value="1-5 Employee">1-5 Employee</option>
                                            <option value="5-10 Employee">5-10 Employee</option>
                                            <option value="10-20 Employee">10-20 Employee</option>
                                            <option value="20-50 Employee">20-50 Employee</option>
                                            <option value="100 Avobe">100 Avobe</option>
                                        </select>
                                        <!--<input type="text" class="form-control" id="lastName" placeholder="Last name" aria-label="Last name">-->
                                    </div>
                                    @error('Company_Size')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                
                                <div class="col-sm-6">
                                    <label for="firstName" class="mb-1">Select Country <span
                                            class="text-danger">*</span></label>
                                   <div class="input-group mb-3">
                                            <select class="form-control form-select" name="Country" required id="country"  data-msg="Please select your country.">
                                                <option value="" selected="" disabled="">Country</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                        @error('Country')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                
                                <div class="col-sm-6">
                                    <label for="firstName" class="mb-1">Select Budget <span
                                            class="text-danger">*</span></label>
                                      <div class="input-group mb-3">
                                            <select class="form-control form-select" name="Budget" id="budget" required  data-msg="Please select your budget.">
                                                <option value="" selected="" disabled="">Budget</option>
                                                <option value="Just Start">None, just getting started</option>
                                                <option value="$2000">Less than $2,000</option>
                                                <option value="$2000-$5000">$2,000 to $5,000</option>
                                                <option value="$5000-$10000">$5,000 to $10,000</option>
                                                <option value="$10000-$50000">$10,000 to $50,000</option>
                                                <option value="$50000+">More than $50,000</option>
                                            </select>
                                        </div>
                                        @error('Budget')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                
                                <div class="col-sm-6">
                                    <label for="phone" class="mb-1">Phone <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="Company_Phone"  required id="phone"  placeholder="Phone" aria-label="Phone">
                                    </div>
                                    @error('Company_Phone')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="mb-1">Email<span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" name="Company_Email" id="email" required placeholder="Email" aria-label="Email">
                                    </div>
                                    @error('Company_Email')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                <!--<div class="col-12">-->
                                <!--    <label for="yourMessage" class="mb-1">Message <span class="text-danger">*</span></label>-->
                                <!--    <div class="input-group mb-3">-->
                                <!--        <textarea class="form-control" id="yourMessage" required placeholder="How can we help you?" style="height: 120px"></textarea>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Request a demo</button>
                        </form>
                    </div>
                    <div class="col-lg-5 col-md-10">
                        <div class="contact-us-img">&nbsp;
                            <img src="{{ asset('app_assets/img/CustomerCare1.png') }}" style=" border-radius: 25px;"  alt="contact us" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us form end-->
        
        
        
        <!--footer section start-->
        <!--footer section start-->
        @include('app_website.layouts.footer')
        <!--footer section end--> <!--footer section end-->

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


<!-- Mirrored from quiety.themetags.com/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 15:54:00 GMT -->
</html>