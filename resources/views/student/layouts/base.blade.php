<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from xatoadmin-demo1.web.app/ltr/starter_kit_breadcrumbs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Sep 2022 05:07:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ $cp->name }}| {{ $page }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('student.layouts.partials.header')

    <!-- Common Icon Ends -->
    <style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #0074D9;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right bottom, rgba(65, 105,225, 1), rgba(253, 160, 133, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right bottom, rgba(65, 105,225, 1), rgba(135,206,250))
        }
    </style>



</head>
<body>
    <!-- Loader Starts -->
    <div class="nanobar my-class" id="my-id" style="position: fixed;">
    <div class="bar"></div>
    </div>
    <!--  Loader Ends -->
    <!--  Navbar Starts  -->
    @include('student.layouts.partials.topnavbar')
    <!--  Navbar Ends  -->
    <!--  Main Container Starts  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div class="rightbar-overlay"></div>
        <!--  Sidebar Starts  -->
    @include('student.layouts.partials.sidebar')
        <!--  Sidebar Ends  -->
        <!--  Content Area Starts  -->
        <div id="content" class="main-content">
            <!--  Navbar Starts / Breadcrumb Area  -->
            <div class="sub-header-container">
                <header class="header navbar navbar-expand-sm">
                    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                        <i class="las la-bars"></i>
                    </a>                          

                                               <nav class="arrowed-breadcrumbs" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="javascript:void(0);">@if(!empty($page_main)){{ $page_main }}@else {{ "Not Avilabel" }} @endif</a></li>
                                                        <li class="breadcrumb-item active"><a href="javascript:void(0);">@if(!empty($page)){{ $page }}@else {{ "Not Avilabel" }} @endif</a></li>
                                                        
                                                    </ol>
                                                </nav>

                                                <!-- <div class="custom-breadcrumb-one">
                                                    <ul class="steps">
                                                      <li class="step">
                                                        <a href="#">
                                                            <i class="las la-home"></i>
                                                        </a>
                                                      </li>
                                                      <li class="step">
                                                        <a>
                                                            <i class="far fa-newspaper" aria-hidden="true"></i>@if(!empty($page_main)){{ $page_main }}@else {{ "Not Avilabel" }} @endif
                                                        </a>
                                                      </li>
                                                      <li class="step">
                                                        <a>
                                                            <i class="fas fa-utensils" aria-hidden="true"></i>@if(!empty($page)){{ $page }}@else {{ "Not Avilabel" }} @endif
                                                        </a>
                                                      </li>
                                                    
                                                    </ul>
                                                </div> -->

                                           <!-- <div class="widget-content widget-content-area">
                                                <nav class="arrowed-breadcrumbs" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="javascript:void(0);">@if(!empty($page_main)){{ $page_main }}@else {{ "Not Avilabel" }} @endif</a></li>
                                                        <li class="breadcrumb-item active"><a href="javascript:void(0);">@if(!empty($page)){{ $page }}@else {{ "Not Avilabel" }} @endif</a></li>
                                                    </ol>
                                                </nav>
                                            </div> -->
                </header>
            </div>
            <!--  Navbar Ends / Breadcrumb Area  -->
            <!-- Main Body Starts -->
            <div class="layout-px-spacing">
                <div class="layout-top-spacing mb-2"> 
                    <div class="col-md-12">
                        <div class="row">
                            <div class="container p-0">
                                <div class="row layout-top-spacing">
                                    <div class="col-lg-12 layout-spacing">
                                       <!-- Your Content Here -->
                                       @yield('content')
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
            <!-- Main Body Ends -->
            @include('student.layouts.partials.footer')

            @yield('script')
</body>

<!-- Mirrored from xatoadmin-demo1.web.app/ltr/starter_kit_breadcrumbs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Sep 2022 05:07:04 GMT -->
</html>