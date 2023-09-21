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
    @include('layouts.partials.header')

    <!-- Common Icon Ends -->
</head>
<body>
    <!-- Loader Starts -->
    <div class="nanobar my-class" id="my-id" style="position: fixed;">
    <div class="bar"></div>
    </div>
    <!--  Loader Ends -->
    <!--  Navbar Starts  -->
    @include('layouts.partials.topnavbar')
    <!--  Navbar Ends  -->
    <!--  Main Container Starts  -->
    <div class="main-container m-0 p-0 " id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div class="rightbar-overlay"></div>
        <!--  Sidebar Starts  -->
    @include('layouts.partials.sidebar')
        <!--  Sidebar Ends  -->
        <!--  Content Area Starts  -->
        <div id="content" class="main-content mb-0 p-0">
            <!--  Navbar Starts / Breadcrumb Area  -->
            <div class="sub-header-container m-0 ">
                <header class="header navbar" style="border-radius: 5px; display: flex; justify-content: space-between; align-items: center; padding: 0px 0;">
                  <div style="display: flex; align-items: center;">
                    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                        <i class="las la-bars"></i>
                    </a>

                    <nav class="arrowed-breadcrumbs" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">@if(!empty($page_main)){{ $page_main }}@else {{ "Not Available" }} @endif</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">@if(!empty($page)){{ $page }}@else {{ "Not Available" }} @endif</a></li>
                        </ol>
                    </nav>
                  </div>

                    <div class="d-flex">
                         @yield('subheader')
                    </div>
                </header>
            </div>

            <!--  Navbar Ends / Breadcrumb Area  -->
            <!-- Main Body Starts -->
            <div class="layout-px-spacing ">
                <div class="layout-top-spacing m-0 p-0"> 
                    <div class="col-md-12 m-0 p-0">
                        <div class="row">
                            <div class="container-fluid m-0 p-0">
                                <div class="row layout-top-spacing m-0 p-0">
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
            @include('layouts.partials.footer')

            @yield('script')
</body>

<!-- Mirrored from xatoadmin-demo1.web.app/ltr/starter_kit_breadcrumbs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Sep 2022 05:07:04 GMT -->
</html>