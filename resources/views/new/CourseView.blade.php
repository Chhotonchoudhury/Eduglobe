<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Student profile | Edudeve</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon"
        href="{{ (!empty($cp->logo)) ? asset('uploads/'.$cp->logo):asset('assets/assets/img/favicon.ico')}}" />
    @include('new_layouts.partials.header')

    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

</head>

<body>

    <style>
        .welcomename {
            background: rgb(233, 45, 24);
            background: linear-gradient(180deg, rgba(233, 45, 24, 1) 0%, rgba(246, 173, 1, 1) 32%, rgba(49, 116, 241, 1) 66%, rgba(36, 154, 65, 1) 100%);
            border: 0px;
        }

        #tograypanelmenu .welcomename {
            height: 27px;
            width: 27px;
            padding: 2px;
            border: 0px;
        }

        #tograypanelmenu .welcomename .inside {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            text-align: center;
            background-color: #fff;
            font-size: 15px;
        }


        .prifilemenuouter {
            background-color: #2d2f31;
            position: fixed;
            right: 10px;
            top: 40px;
            color: #fff;
            z-index: 999;
            width: 376px;
            border-radius: 28px;
            padding: 10px;
            display: none;
        }

        .prifilemenuouter .inside {
            background-color: #1f1f1f;
            border-radius: 24px;
        }

        .prifilemenuouter .content {
            padding: 10px;
        }

        .buddyouter {
            background: rgb(233, 45, 24);
            background: linear-gradient(180deg, rgba(233, 45, 24, 1) 0%, rgba(246, 173, 1, 1) 32%, rgba(49, 116, 241, 1) 66%, rgba(36, 154, 65, 1) 100%);
            padding: 4px;
            border-radius: 100px;
            width: 64px;
            height: 64px;
            margin-right: 5px;
            position: relative;
        }

        .buddyouter .buddyimg {
            background-color: #fff;
            width: 100%;
            height: 100%;
            border-radius: 100px;
            font-size: 35px;
            text-align: center;
            color: #000;
        }

        .buttonprofile {
            border: 1px solid #adadad70;
            padding: 5px 10px;
            color: #FFFFFF;
            font-size: 14px;
            font-weight: 600;
            margin-top: 10px;
            text-align: left;
            border-radius: 10px;
            cursor: pointer;
        }

        .buttonprofile:hover {
            background-color: #cccccc12;
        }
    </style>

    <!--top gray panel menu-->
    @include('new_layouts.topnavbar')
    <!--end of the top gray panel menue-->

    <!--sidebnavbar section-->
    @include('new_layouts.sidenavbar')
    <!--end of the section-->

    <!---alert message --->
    @if(session('s_success'))
    <div class="alert alert-success bg-success text-white headersavealert" role="alert">
        {{ session('s_success') }}
    </div>
    @endif
    <!---end message --->

    <!---alert message --->
    @if(session('info'))
    <div class="alert alert-danger bg-danger text-white headersavealert" role="alert">
        {{ session('info') }}
    </div>
    @endif
    <!---end message --->

    <!---main content section --->

    <script src="tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
        selector: ".editorclass",
        themes: "modern",
        plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
    </script>

    <style>
        .table td,
        .table th {
            vertical-align: top;
        }

        .container-fluid label {
            width: 100% !important;
            margin-bottom: 2px !important;
            font-size: 12px;
            text-transform: uppercase;
        }

        .nav-link {
            display: block;
            padding: 8px 30px;
        }

        .header-title {
            padding: 6px 10px;
            background-color: #f5f7f9;
            border-radius: 4px;
            border: 0px;
            text-transform: capitalize;
            margin-top: 0px !important;
        }

        label {
            color: #9a9a9a;
        }


        .nav-link {
            padding: 8px 13px !important;
        }

        .input-group {
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 15px;
        }
    </style>

    @if(session('active_tab'))
    @php $activeTab = session('active_tab'); @endphp
    @else
    @php $activeTab = 1; @endphp
    @endif



    <!--main-->
    <div class="wrapper" style="margin-top: 56px;padding-left: 20px;">
        <div class="container-fluid" style="max-width: 100%;">
            <div class="main-content">

                <div class="page-content">
                    <div class="newboxheading">
                        <div class="newhead">Course : {{ $course->name }} , {{ $course->course }}
                            <div class="newoptionmenu">
                                <div>
                                    <a id="CourseEditeBtn"><button type="button"
                                            class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray"
                                            style="margin-bottom:10px;">

                                            <i class="fa fa-pencil" aria-hidden="true"></i> &nbsp;Course
                                            Edit</button></a>
                                </div>


                                {{-- <div>
                                    <a><button type="button"
                                            class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray"
                                            style="margin-bottom:10px;">

                                            <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                            &nbsp;Activity</button></a>
                                </div>

                                <div>
                                    <a popaction="action=composemail&queryId=100004"><button type="button"
                                            class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray"
                                            style="margin-bottom:10px;">

                                            <i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp;Email</button></a>
                                </div>

                                <div>
                                    <a target="_blank" href="https://api.whatsapp.com/send?text=Hi&phone=+"><button
                                            type="button"
                                            class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray"
                                            style="margin-bottom:10px;">

                                            <i class="fa fa-whatsapp" aria-hidden="true" style="color:#009900;"></i>
                                            &nbsp;Whatsapp</button></a>
                                </div> --}}

                            </div>
                        </div>
                    </div>


                    <style>
                        .breadcrumb {
                            list-style: none;
                            overflow: hidden;
                            font: 18px Helvetica, Arial, Sans-Serif;
                            margin: 0px;
                            padding: 0;
                            margin-bottom: 0px;
                            margin-left: 0px;
                        }

                        .breadcrumb li {
                            float: left;
                        }

                        .breadcrumb li a {
                            color: white;
                            text-decoration: none;
                            padding: 10px 0 10px 55px;
                            background: brown;
                            background: hsla(34, 85%, 35%, 1);
                            position: relative;
                            display: block;
                            float: left;
                            background-color: #cfd7df;
                            color: #000;
                            font-size: 13px;
                        }

                        .breadcrumb li a:after {
                            content: " ";
                            display: block;
                            width: 0;
                            height: 0;
                            border-top: 50px solid transparent;
                            border-bottom: 50px solid transparent;
                            border-left: 30px solid #cfd7df;
                            position: absolute;
                            top: 50%;
                            margin-top: -50px;
                            left: 100%;
                            z-index: 2;
                        }

                        .breadcrumb li a:before {
                            content: " ";
                            display: block;
                            width: 0;
                            height: 0;
                            border-top: 50px solid transparent;
                            /* Go big on the size, and let overflow hide */
                            border-bottom: 50px solid transparent;
                            border-left: 30px solid white;
                            position: absolute;
                            top: 50%;
                            margin-top: -50px;
                            margin-left: 1px;
                            left: 100%;
                            z-index: 1;
                        }

                        .breadcrumb li:first-child a {
                            padding-left: 10px;
                        }


                        .breadcrumb li a:hover {
                            background: #cecece !important;
                        }

                        .breadcrumb li a:hover:after {
                            border-left-color: #cecece !important;
                        }


                        .steps {
                            margin: 40px;
                            padding: 0;
                            overflow: hidden;
                        }

                        .steps a {
                            color: white;
                            text-decoration: none;
                        }

                        .steps em {
                            display: block;
                            font-size: 1.1em;
                            font-weight: bold;
                        }

                        .steps li {
                            float: left;
                            margin-left: 0;
                            width: 150px;
                            /* 100 / number of steps */
                            height: 70px;
                            /* total height */
                            list-style-type: none;
                            padding: 5px 5px 5px 30px;
                            /* padding around text, last should include arrow width */
                            border-right: 3px solid white;
                            /* width: gap between arrows, color: background of document */
                            position: relative;
                        }

                        /* remove extra padding on the first object since it doesn't have an arrow to the left */
                        .steps li:first-child {
                            padding-left: 5px;
                        }

                        /* white arrow to the left to "erase" background (starting from the 2nd object) */
                        .steps li:nth-child(n+2)::before {
                            position: absolute;
                            top: 0;
                            left: 0;
                            display: block;
                            border-left: 25px solid white;
                            /* width: arrow width, color: background of document */
                            border-top: 40px solid transparent;
                            /* width: half height */
                            border-bottom: 40px solid transparent;
                            /* width: half height */
                            width: 0;
                            height: 0;
                            content: " ";
                        }

                        /* colored arrow to the right */
                        .steps li::after {
                            z-index: 1;
                            /* need to bring this above the next item */
                            position: absolute;
                            top: 0;
                            right: -25px;
                            /* arrow width (negated) */
                            display: block;
                            border-left: 25px solid #7c8437;
                            /* width: arrow width */
                            border-top: 40px solid transparent;
                            /* width: half height */
                            border-bottom: 40px solid transparent;
                            /* width: half height */
                            width: 0;
                            height: 0;
                            content: " ";
                        }

                        /* Setup colors (both the background and the arrow) */

                        /* Completed */
                        .steps li {
                            background-color: #7C8437;
                        }

                        .steps li::after {
                            border-left-color: #7c8437;
                        }

                        /* Current */
                        .steps li.current {
                            background-color: #C36615;
                        }

                        .steps li.current::after {
                            border-left-color: #C36615;
                        }

                        /* Following */
                        .steps li.current~li {
                            background-color: #EBEBEB;
                        }

                        .steps li.current~li::after {
                            border-left-color: #EBEBEB;
                        }

                        /* Hover for completed and current */
                        .steps li:hover {
                            background: #cecece !important;
                        }

                        .steps li:hover::after {
                            border-left-color: #696
                        }



                        .arrows {
                            white-space: nowrap;
                        }

                        .arrows li {
                            display: inline-block;
                            line-height: 26px;
                            margin: 0 9px 0 -10px;
                            padding: 0 20px;
                            position: relative;
                        }

                        .arrows li::before,
                        .arrows li::after {
                            border-right: 1px solid #666666;
                            content: '';
                            display: block;
                            height: 50%;
                            position: absolute;
                            left: 0;
                            right: 0;
                            top: 0;
                            z-index: -1;
                            transform: skewX(45deg);
                        }

                        .arrows li::after {
                            bottom: 0;
                            top: auto;
                            transform: skewX(-45deg);
                        }

                        .arrows li:last-of-type::before,
                        .arrows li:last-of-type::after {
                            display: none;
                        }

                        .arrows li a {
                            font: bold 24px Sans-Serif;
                            letter-spacing: -1px;
                            text-decoration: none;
                        }

                        .arrows li:nth-of-type(1) a {
                            color: hsl(0, 0%, 70%);
                        }

                        .arrows li:nth-of-type(2) a {
                            color: hsl(0, 0%, 65%);
                        }

                        .arrows li:nth-of-type(3) a {
                            color: hsl(0, 0%, 50%);
                        }

                        .arrows li:nth-of-type(4) a {
                            color: hsl(0, 0%, 45%);
                        }


                        .stclass1 a {
                            background-color: #655be6 !important;
                            color: #fff !important;
                        }

                        .stclass1 a::after {
                            border-left: 30px solid #655be6 !important;
                        }

                        .stclass2 a {
                            background-color: #0cb5b5 !important;
                            color: #fff !important;
                        }

                        .stclass2 a::after {
                            border-left: 30px solid #0cb5b5 !important;
                        }

                        .stclass3 a {
                            background-color: #0f1f3e !important;
                            color: #fff !important;
                        }

                        .stclass3 a::after {
                            border-left: 30px solid #0f1f3e !important;
                        }

                        .stclass4 a {
                            background-color: #e45555 !important;
                            color: #fff !important;
                        }

                        .stclass4 a::after {
                            border-left: 30px solid #e45555 !important;
                        }

                        .stclass5 a {
                            background-color: #46cd93 !important;
                            color: #fff !important;
                        }

                        .stclass5 a::after {
                            border-left: 30px solid #46cd93 !important;
                        }

                        .stclass6 a {
                            background-color: #6c757d !important;
                            color: #fff !important;
                        }

                        .stclass6 a::after {
                            border-left: 30px solid #6c757d !important;
                        }

                        .stclass7 a {
                            background-color: #f9392f !important;
                            color: #fff !important;
                        }

                        .stclass7 a::after {
                            border-left: 30px solid #f9392f !important;
                        }

                        .stclass8 a {
                            background-color: #cc00a9 !important;
                            color: #fff !important;
                        }

                        .stclass8 a::after {
                            border-left: 30px solid #cc00a9 !important;
                        }

                        .stclass9 a {
                            background-color: #FF6600 !important;
                            color: #fff !important;
                        }

                        .stclass9 a::after {
                            border-left: 30px solid #FF6600 !important;
                        }

                        .header-title {
                            padding: 6px 10px;
                            background-color: #f7f7f7;
                            border-radius: 4px;
                        }

                        .querydetailinsideheading {
                            font-size: 18px;
                            margin-bottom: 10px;
                            font-weight: 600;
                            color: #000;
                            position: relative;
                        }

                        .querydetailinsideheading div {
                            position: absolute;
                            right: 0px;
                            top: 0px;
                        }

                        .querydetailinsideheading div a {
                            font-size: 12px;
                            background-color: #e6ebf2;
                            color: #030303;
                            padding: 4px 10px !important;
                            border-radius: 6px;
                            float: left;
                            margin-left: 5px;
                        }

                        .querydetailinsideheading div .active {
                            background-color: #303834;
                            color: #fff;
                        }

                        .nav-tabs .nav-item {
                            margin-bottom: 0px;
                            width: 100%;
                        }

                        .proposalboxouterbox .itibox {
                            float: left;
                            width: 31.5%;
                            float: left;
                            margin-right: 10px;
                        }

                        .proposalboxouterbox .itibox .imgbox {
                            height: 200px;
                            overflow: hidden;
                            border-radius: 5px;
                            position: relative;
                        }

                        .proposalboxouterbox .itibox .card {
                            padding: 5px !important;
                        }

                        .proposalboxouterbox .itibox .imgbox img {
                            width: 100% !important;
                            min-height: 100% !important;
                            height: auto !important;
                        }

                        .proposalboxouterbox .itibox .imgbox .packname {
                            background-color: #000000b8;
                            font-size: 15px;
                            color: #fff;
                            font-weight: 600;
                            position: absolute;
                            left: 0px;
                            bottom: 0px;
                            width: 100%;
                            padding: 10px;
                        }

                        .proposalboxouterbox .itibox .smtext {
                            font-size: 12px;
                            color: #333;
                        }

                        .proposalboxouterbox .itibox .card-body {
                            padding: 10px !important;
                        }

                        .proposalboxouterbox .itibox .optionmenu {
                            position: absolute;
                            top: 5px;
                            right: 5px;
                            background-color: #fff;
                            width: 30px;
                            text-align: center;
                            padding-right: 0px;
                            border-radius: 2px;
                        }

                        .proposalboxouterbox .itibox .addnewcard {
                            height: 481px;
                            background-color: #cfd7df42;
                            border: 3px dashed #cfd7df;
                            box-shadow: 0px 0px 0px #fff !important;
                            text-align: center;
                            padding-top: 50% !important;
                            padding-left: 20px !important;
                            padding-right: 20px !important;
                        }

                        .proposalboxouterbox .itibox .btn-warning {
                            margin: 0px !important;
                            width: 100% !important;
                        }
                    </style>


                    <!-- start page title -->

                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="card"
                                style="min-height: 500px; margin-left: 17px; margin-right: 17px; margin-top: 47px; overflow:hidden;">

                                <!--inside main contetn-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">


                                    <tr>
                                        <td align="left" valign="top" width="18%"
                                            style="background-color:#f5f7f9; border-right: 1px solid #cfd7df;">
                                            <div class="inquerytabsmain">
                                                <style>
                                                    /* Hide the unordered list and its children */
                                                    /* ul.nav-tabs {
                                                        display: none;
                                                    } */
                                                </style>

                                                <div class="row" style="margin-right: 0px; margin-left: 0px;">


                                                    <ul class="nav nav-tabs nav-tabs-custom"
                                                        style="border-bottom:0px solid #dee2e6;list-style-type:none;">

                                                        <li class="nav-item" style="padding: 2px;"><a
                                                                class="nav-tab nav-link {{ $activeTab === 1 ? 'active show' : '' }}"
                                                                data-toggle="tab" href="#info-tab"><span
                                                                    class="d-none d-md-block"><i class="fa fa-book"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp;Course Details</span><span
                                                                    class="d-block d-md-none"><i
                                                                        class="mdi mdi-home-variant h5"></i></span></a>
                                                        </li>

                                                        <li class="nav-item" style="padding: 2px;"><a
                                                                class="nav-tab nav-link {{ $activeTab === 2 ? 'active show' : '' }}"
                                                                data-toggle="tab" href="#attachment-tab"><span
                                                                    class="d-none d-md-block"><i class="fa fa-paperclip"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp;Course Attachments</span><span
                                                                    class="d-block d-md-none"><i
                                                                        class="mdi mdi-home-variant h5"></i></span></a>
                                                        </li>

                                                        <li class="nav-item" style="padding: 2px;"><a
                                                                class="nav-tab nav-link {{ $activeTab === 3 ? 'active show' : '' }}"
                                                                data-toggle="tab" href="#requirment-tab"><span
                                                                    class="d-none d-md-block"><i class="fa fa-indent"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp;Course requirements</span><span
                                                                    class="d-block d-md-none"><i
                                                                        class="mdi mdi-home-variant h5"></i></span></a>
                                                        </li>



                                                    </ul>



                                                </div>

                                            </div>
                                        </td>
                                        <td align="left" valign="top">


                                            <div class="card-body" style="padding:10px;">

                                                <div class="tab-content m-0">


                                                    <!---course infromation home tab--->
                                                    <div class="tab-pane fade {{ $activeTab === 1 ? 'active show' : '' }}"
                                                        id="info-tab">
                                                        <!-- Content for Lead Details tab goes here -->
                                                        <div class="col-lg-12" style="padding-left:5px;margin-top:5px;">

                                                            <h4 class="mt-0 header-title">Course Information</h4>
                                                            {{-- <a class="dropdown-item neweditpan"
                                                                style="cursor: pointer; position: absolute; right: 11px; top: 1px; z-index: 1; background-color: #4bb8c8; border-radius: 0px; color: #fff !important; border-radius: 2px;"
                                                                id="StudentEditeBtn"><i class="fa fa-pencil"
                                                                    aria-hidden="true"></i></a> --}}
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="row col-md-10" style="padding-left:35px;">
                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">Name</label>
                                                                        {{ $course->name }} {{ $course->course }}
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">Degree</label>
                                                                        {{ $course->course_degree }}
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">Category</label>
                                                                        {{ $course->category->name }}
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">fess</label>
                                                                        {{ $course->fess }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">Course
                                                                            period</label>
                                                                        {{ $course->course_period }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">Starting
                                                                            dates</label>
                                                                        {{ $course->starting_date }} / {{
                                                                        $course->starting_date2 }}
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <div class="row col-md-2" style="padding-right:0px;">
                                                                <img class="user-image"
                                                                    src="{{ (!empty($course->photo)) ? asset('uploads/'.$course->photo) : 'https://bootdey.com/img/Content/avatar/avatar7.png' }}"
                                                                    width="130" height="130"
                                                                    style="border-radius: 3px;border: 2px solid bisque;padding:2px">

                                                            </div>

                                                            <!--this is student interest section-->

                                                            <!---end of the student interest section--->
                                                        </div>


                                                        <!---university information--->

                                                        <div class="col-lg-12" style="padding-left:5px;margin-top:5px;">

                                                            <h4 class="mt-0 header-title">University Information</h4>

                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="row col-md-10" style="padding-left:35px;">
                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">Name</label>
                                                                        {{$course->university->name}}
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">Email</label>
                                                                        {{ $course->university->email }}
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">Phone</label>
                                                                        {{ $course->university->Unumber }}
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">Executive
                                                                            email</label>
                                                                        {{ $course->university->ex_email }}
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">Executive
                                                                            number</label>
                                                                        {{ $course->university->ex_number }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">University
                                                                            Address</label>
                                                                        {{ $course->university->address }}
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <div class="row col-md-2" style="padding-right:0px;">
                                                                <img class="user-image"
                                                                    src="{{ (!empty($course->university->logo)) ? asset('uploads/'.$course->university->logo) : 'https://bootdey.com/img/Content/avatar/avatar7.png' }}"
                                                                    width="130" height="130"
                                                                    style="border-radius: 50%; border: 2px solid bisque; padding: 10px;">

                                                            </div>

                                                            <!--this is student interest section-->

                                                            <!---end of the student interest section--->
                                                        </div>


                                                        <!--end of the content-->
                                                    </div>
                                                    <!---end of the student home tab--->

                                                    <!---course attachments tabs---->

                                                    <div class="tab-pane fade {{ $activeTab === 2 ? 'active show' : '' }}"
                                                        id="attachment-tab">
                                                        <!-- Content for Lead Details tab goes here -->
                                                        <div class="col-lg-12" style="padding-left:5px;margin-top:5px;">
                                                            <h4 class="mt-0 header-title">Design course PDF Attachment
                                                            </h4>
                                                        </div>
                                                        <form method="POST" action="{{ route('course.pdf.design') }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <!---course pdf design--->
                                                            <div class="col-lg-12">

                                                                <div class="form-group">

                                                                    <input type="hidden" name="course_id"
                                                                        value="{{ $course->id  }}">

                                                                    {{-- <textarea name="details" class="editorclass"
                                                                        id="editor" style="height:4000px;"></textarea>
                                                                    --}}


                                                                    <textarea name="details" id="editor1" rows="10"
                                                                        cols="80" required>
                                                                        @if($pdf){!! $pdf->details !!}@endif
                                                                    </textarea>
                                                                    <script>
                                                                        // Replace the <textarea id="editor1"> with a CKEditor 4
                                                                        // instance, using default configuration.
                                                                        CKEDITOR.replace( 'editor1' );
                                                                    </script>

                                                                </div>

                                                            </div>


                                                            <div class="form-group mb-0"
                                                                style="padding: 10px 10px;  border-top: 1px solid #e6e6e6; overflow:hidden; margin-top:10px;">



                                                                <button type="submit" id="savingbutton"
                                                                    class="btn btn-secondary"
                                                                    onclick="this.value='Saving design...';"
                                                                    style="float:right;">
                                                                    Save design
                                                                </button>
                                                            </div>
                                                        </form>
                                                        <!--course pdf designs-->

                                                        <div class="col-lg-12" style="padding-left:5px;margin-top:5px;">
                                                            <h4 class="mt-0 header-title">or Upload course pdf
                                                            </h4>
                                                        </div>
                                                        <input type="hidden" name="course_id"
                                                            value="{{ $course->id  }}">
                                                        <form method="POST" action="{{ route('course.pdf.upload') }}"
                                                            enctype="multipart/form-data">
                                                            @csrf

                                                            <input type="hidden" name="course_id"
                                                                value="{{ $course->id }}">
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <input type="file" name="pdf" class="form-control"
                                                                        style="margin: 10px;" required>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <button type="submit" id="savingbutton"
                                                                        class="btn btn-secondary"
                                                                        onclick="this.value='Uploading...';"
                                                                        style="margin: 10px;">
                                                                        Upload
                                                                    </button>
                                                                </div>

                                                            </div>
                                                        </form>
                                                        <div class="col-lg-12" style="padding-left:5px;margin-top:5px;">
                                                            <h4 class="mt-0 header-title">Attachment activation
                                                            </h4>
                                                        </div>
                                                        <form method="POST" action="{{ route('course.pdf.active') }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="course_id"
                                                                value="{{ $course->id }}">
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <select class="form-control" style="margin: 10px;"
                                                                        name="option" required>
                                                                        <option value="">Select type</option>
                                                                        <option value="1">Uploaded</option>
                                                                        <option value="2">Edited</option>
                                                                    </select>

                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <button type="submit" id="savingbutton"
                                                                        class="btn btn-secondary"
                                                                        onclick="this.value='Activating...';"
                                                                        style="margin: 10px;">
                                                                        Active it
                                                                    </button>
                                                                </div>

                                                            </div>
                                                        </form>



                                                    </div>
                                                    <!----end of the tab---->

                                                    <!---this is the tab of course requerments --->
                                                    <div class="tab-pane fade {{ $activeTab === 3 ? 'active show' : '' }}"
                                                        id="requirment-tab">

                                                        <!---content--->

                                                        <div class="col-lg-12" style="padding-left:5px;margin-top:5px;">
                                                            <h4 class="mt-0 header-title">Course requirements

                                                                <a data-toggle="modal" data-target="#reqEntry"
                                                                    style="position: absolute; font-size: 12px; font-weight: 600; right: 5px; top: 5px; background-color: #005ee2; color: #fff; padding: 1px 10px; border-radius: 3px; cursor:pointer;">+
                                                                    Add Requiremtns</a>
                                                            </h4>
                                                        </div>


                                                        <div class="col-md-12 col-xl-12">
                                                            <div>
                                                                <div class="card-body">


                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                style="border:1px solid #ddd; margin:0px;">
                                                                                <table class="table table-hover mb-0">

                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th width="1%"></th>
                                                                                            <th width="0%">Requirements
                                                                                            </th>
                                                                                            <th width="0%">Requirement
                                                                                                fields</th>
                                                                                            <th width="1%">&nbsp;</th>
                                                                                            <th width="1%">&nbsp;</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        @foreach ($course_req as $req)
                                                                                        <tr>
                                                                                            <td width="1%">
                                                                                                <div class="bulbblue"
                                                                                                    style="margin-right:0px; margin:auto;">
                                                                                                    {{
                                                                                                    substr($req->requirment,0,
                                                                                                    1) }}
                                                                                                </div>
                                                                                            </td>
                                                                                            <td width="0%">{{
                                                                                                $req->requirment }}</td>
                                                                                            <td width="0%">{{
                                                                                                $req->input }}
                                                                                            </td>

                                                                                            <td width="1%">
                                                                                                <a class="dropdown-item neweditpan reqedite"
                                                                                                    href="#"
                                                                                                    data-id="{{ $req->id }}"><i
                                                                                                        class="fa fa-pencil"
                                                                                                        aria-hidden="true"></i></a>
                                                                                            </td>

                                                                                            <td width="1%">
                                                                                                <a class="dropdown-item neweditpan req-delete-confirm"
                                                                                                    href="#"
                                                                                                    data-id="{{  route('req_delete.cor', $req->id)  }}"><i
                                                                                                        class="fa fa-trash"
                                                                                                        aria-hidden="true"></i></a>
                                                                                            </td>


                                                                                        </tr>

                                                                                        @endforeach
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>


                                                                    </div>



                                                                </div>


                                                            </div>


                                                        </div>


                                                        <!---end of the content--->

                                                    </div>

                                                    <!---end fotthe tab----->



                                                    <!-- Content for other tabs goes here with similar structure -->
                                                </div>

                                            </div>



                                        </td>
                                    </tr>
                                </table>
                                <!--ens inside main content-->
                            </div>
                        </div>
                    </div>



                </div>
                <!--end col-->

                <!-- end row -->

            </div>



            <!---this is the alert model for confirmation alert--->
            <div class="modal fade req-delete-model">
                <div class="modal-dialog modal-dialog-centered " style="max-width: 600px; width: 600px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="poptitle">Alert</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body" id="popcontent">


                            <div class="modal-body">
                                <div class="row">

                                    <div class="col-md-12" style="text-align:center;">
                                        <h4>You are confirming the requirement deletion</h4>

                                        This action cannot be undone.
                                    </div>


                                </div>
                            </div>

                            <div class="modal-footer">
                                <a class="del"><button type="submit"
                                        class="btn btn-success waves-effect waves-light">Confirm</button></a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!---end of the model--->





            <!---this is the model for course requirements entry-->
            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
                aria-labelledby="mySmallModalLabel" id="reqEntry">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="poptitle">Add Requirementns</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body" id="popcontent">


                            <form action="{{ route('req_store.cor') }}" method="post">
                                @csrf
                                <input type="hidden" value="{{ $course->id  }}" name="course_id">
                                <div class="form-group ">
                                    <div class="row" style="padding:2px;">
                                        <div class="col-md-12">


                                            <input type="text" class="form-control"
                                                placeholder="* Enter requirement input field "
                                                style="margin-bottom:15px;" name="input" required>

                                        </div><br>


                                        <div class="col-md-12">


                                            <input type="text" class="form-control"
                                                placeholder="* Enter requirement in english" style="margin-bottom:15px;"
                                                name="remarks" required>

                                        </div>

                                        <div class="col-md-12">


                                            <input type="text" class="form-control"
                                                placeholder="* Enter requirement in arabic" style="margin-bottom:2px;"
                                                name="arabic_remarks" required>

                                        </div>



                                    </div>

                                </div>

                                <div class="form-group" style="overflow:hidden;">
                                    <div style="margin-top:5px;"><button type="submit" id="savingbutton"
                                            class="btn btn-primary" onclick="this.value='Saving...';"
                                            style="float:right;"><i class="fa fa-plus" aria-hidden="true"></i>
                                            Save</button></div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!---end of the model --->


            <!---this is the model for course requirements update-->
            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
                aria-labelledby="mySmallModalLabel" id="reqUpdate">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="poptitle">Update Requirementns</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body" id="popcontent">


                            <form action="{{ route('req_update.cor') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" id="id">
                                <div class="form-group ">
                                    <div class="row" style="padding:2px;">
                                        <div class="col-md-12">


                                            <input type="text" class="form-control"
                                                placeholder="* Enter requirement input field "
                                                style="margin-bottom:15px;" id="input" name="input" required>

                                        </div><br>


                                        <div class="col-md-12">


                                            <input type="text" class="form-control"
                                                placeholder="* Enter requirement in english" style="margin-bottom:15px;"
                                                name="remarks" id="remarks" required>

                                        </div>

                                        <div class="col-md-12">


                                            <input type="text" class="form-control"
                                                placeholder="* Enter requirement in arabic" style="margin-bottom:2px;"
                                                name="arabic_remarks" id="arabic_remarks" required>

                                        </div>



                                    </div>

                                </div>

                                <div class="form-group" style="overflow:hidden;">
                                    <div style="margin-top:5px;"><button type="submit" id="savingbutton"
                                            class="btn btn-primary" onclick="this.value='Saving...';"
                                            style="float:right;"><i class="fa fa-plus" aria-hidden="true"></i>
                                            Update</button></div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!---end of the model --->


            <!---this is the course information edite model section-->

            <div class="modelnew modal right fade CourseEditeModel" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel2">
                <div class="modal-dialog" role="document" style="width: 450px; max-width: 450px;">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h4 class="modal-title" id="poptitle2">Edite Course information</h4>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                        <div class="modal-body" id="popcontent2">

                            <form method="POST" action="{{ route('update.cor') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row" style="padding: 5px;">



                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Course Name</label>
                                            <input type="text" id="name" class="form-control reqfield" name="name"
                                                value="{{ old('name', $course->name ) }}">
                                            @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Course</label>
                                            <input type="text" id="course" class="form-control reqfield" name="course"
                                                value="{{ old('course', $course->course) }}">
                                            @error('course')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Course Period</label>
                                            <input type="text" id="period" class="form-control reqfield" name="period"
                                                value="{{ old('period', $course->course_period) }}">
                                            @error('period')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Course arabic Name</label>
                                            <input type="text" id="arabic_name" class="form-control reqfield"
                                                name="arabic_name" value="{{ old('arabic_name', $course->ar_name) }}">
                                            @error('arabic_name')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Course arabic</label>
                                            <input type="text" id="arabic_course" class="form-control reqfield"
                                                name="arabic_course"
                                                value="{{ old('arabic_course', $course->ar_course) }}">
                                            @error('arabic_course')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Arabic Course Period</label>
                                            <input type="text" id="arabic_period" class="form-control reqfield"
                                                name="arabic_period"
                                                value="{{ old('arabic_period', $course->ar_course_period) }}">
                                            @error('arabic_period')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Course Degree</label>
                                            <select class="form-control basic reqfield" id="degree" name="degree">
                                                <option value="">Select degree</option>
                                                <option value="BACHELOR" @if(old('status', $course->course_degree) ==
                                                    'BACHELOR')
                                                    selected @endif>Bachelor
                                                </option>
                                                <option value="MASTER" @if(old('status', $course->course_degree) ==
                                                    'MASTER')
                                                    selected @endif>Master
                                                </option>
                                                <option value="PHD" @if(old('status', $course->course_degree) ==
                                                    'PHD')
                                                    selected @endif>PHD
                                                </option>
                                                <option value="OTHER" @if(old('status', $course->course_degree) ==
                                                    'OTHER')
                                                    selected @endif>Others
                                                </option>
                                            </select>
                                            @error('degree')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>



                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">University</label>
                                            <select class="form-control basic reqfield" id="university"
                                                name="university">
                                                <option value="">Select university</option>
                                                @foreach($university as $row)
                                                <option value="{{ $row->id }}" @if(old('university', $course->
                                                    university_id) == $row->id)
                                                    selected @endif>{{ $row->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('university')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">category</label>
                                            <select class="form-control basic reqfield" id="category" name="category">
                                                <option value="">Select category</option>
                                                @foreach($category as $row)
                                                <option value="{{ $row->id }}" @if(old('category', $course->
                                                    category_id) == $row->id)
                                                    selected @endif>{{ $row->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('category')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">1st start date</label>
                                            <input type="date" id="arabic_period" class="form-control reqfield"
                                                name="start_date"
                                                value="{{ old('start_date', $course->starting_date) }}">
                                            @error('start_date')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">2nd start date</label>
                                            <input type="date" id="arabic_period2" class="form-control reqfield"
                                                name="start_date2"
                                                value="{{ old('start_date2', $course->starting_date2) }}">
                                            @error('start_date2')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">course fess</label>
                                            <input type="text" id="fees" class="form-control reqfield" name="fees"
                                                value="{{ old('fees', $course->fess) }}">
                                            @error('fees')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Course description</label>
                                            <textarea id="details" class="form-control reqfield"
                                                name="details">{{ old('details', $course->detail) }}</textarea>
                                            @error('details')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Course description(in arabic)</label>
                                            <textarea id="arabic_details" class="form-control reqfield"
                                                name="arabic_details">{{ old('arabic_details', $course->ar_detail) }}</textarea>
                                            @error('arabic_details')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Change student Photo</label>
                                            <input type="file" id="photo" name="photo" class="form-control">
                                            @error('photo')<span class="text-danger" style="margin-left: 31%;">{{
                                                $message
                                                }}</span>@enderror

                                            <img id="updatephoto" src="{{ asset('uploads/'.$course->photo.'') }}"
                                                alt="Preview" style="max-width: 250px; max-height: 100px; ">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Change Course related images</label>
                                            <input type="file" name="multi_image[]" id="multiImg" class="form-control"
                                                multiple="">
                                            @error('multi_image')<span class="text-danger" style="margin-left: 31%;">{{
                                                $message
                                                }}</span>@enderror
                                            <div id="preview_img">
                                                @if($course->related_image != '')
                                                @php $img=json_decode($course->related_image); @endphp
                                                @foreach($img as $imgs)
                                                <img class="rounded " alt="100x100" width="80"
                                                    src="{{ asset('uploads/'.$imgs.'') }}" data-holder-rendered="true"
                                                    id="updatephoto">
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <script>
                                    $( function() {
                                        $( "#dob" ).datepicker({ 
                                        dateFormat: 'dd-mm-yy',maxDate: new Date(), changeMonth: true, 
                                        changeYear: true, yearRange: "-90:+00"
                                            });
                                        
                                        $( "#marriageAnniversary" ).datepicker({ 
                                        dateFormat: 'dd-mm-yy',
                                            maxDate: new Date(), changeMonth: true, 
                                        changeYear: true, yearRange: "-90:+00"
                                            });
                                        } );
                

                                </script>

                                <input name="id" type="hidden" id="" value="{{ $course->id }}">





                        </div>

                        <div class="modal-footer"> <button type="button" data-dismiss="modal" aria-label="Close"
                                class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray">Cancel</button>
                            <input name="Save" type="submit" value="Save" id="savingbutton" class="btn btn-primary"
                                onclick="this.value='Saving...'; ">
                        </div>
                        </form>
                    </div><!-- modal-content -->
                </div><!-- modal-dialog -->
            </div>

            <!---end of the sections-->

            <style>
                .modelnew.show .modal-dialog {
                    right: 0px !important;
                    transform: translate(-100%, 0);
                }


                .modal.left .modal-dialog,
                .modal.right .modal-dialog {
                    position: fixed;
                    margin: auto;
                    width: 320px;
                    height: 100%;
                    -webkit-transform: translate3d(0%, 0, 0);
                    -ms-transform: translate3d(0%, 0, 0);
                    -o-transform: translate3d(0%, 0, 0);
                    transform: translate3d(0%, 0, 0);
                }



                .modal.left .modal-content,
                .modal.right .modal-content {
                    height: 100%;
                    overflow-y: auto;
                }

                .modal.left .modal-body,
                .modal.right .modal-body {
                    padding: 15px 15px 80px;
                }

                /*Left*/
                .modal.left.fade .modal-dialog {
                    left: -320px;
                    -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
                    -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
                    -o-transition: opacity 0.3s linear, left 0.3s ease-out;
                    transition: opacity 0.3s linear, left 0.3s ease-out;
                }

                .modal.left.fade.in .modal-dialog {
                    left: 0;
                }

                /*Right*/
                .modal.right.fade .modal-dialog {
                    right: -320px;
                    -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
                    -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
                    -o-transition: opacity 0.3s linear, right 0.3s ease-out;
                    transition: opacity 0.3s linear, right 0.3s ease-out;
                }

                .modal.right.fade.in .modal-dialog {
                    right: 0;
                }

                .container-fluid {
                    max-width: 100%;
                    padding-left: 92px;
                    padding-right: 22px;
                    padding-top: 8px;
                }

                .wrapper {
                    margin-top: 56px;
                    padding-left: 20px;
                }

                .table>tbody>tr>td,
                .table>tfoot>tr>td,
                .table>thead>tr>td {
                    padding: 10px 12px;
                }

                .container-fluid .col-md-12 .card-body {
                    padding: 0px;
                }

                body,
                html {
                    background-color: #fff;
                }

                .card {
                    -webkit-box-shadow: 0 0 1.25rem rgb(108 118 134 / 0%);
                    box-shadow: 0 0 1.25rem rgb(108 118 134 / 0%);
                }

                .topnavigation {
                    padding-top: 0px !important;
                }

                #ui-datepicker-div {
                    z-index: 99999999 !important;
                }
            </style>
            <!---end of the part --->

            <!---end of the student edite model--->



        </div>
        <!--end of the course suggetion-->



        <!-- End Page-content -->
    </div>
    </div>
    </div>

    <style>
        .querystatustabmainstikey {
            position: fixed;
            z-index: 99;
            background-color: #f5f7f9;
            width: 100%;
            top: 90px;
            left: 0px;
            padding: 6px;
            padding-left: 83px;
            box-shadow: 0px 3px 4px #0000001c;
            border-top: 1px solid #e2e2e2;
        }
    </style>



    <script>
        $(function() {
            $(window).scroll(function(){
                if($(this).scrollTop() > 43) {
                    $('.querystatustabmain').addClass('querystatustabmainstikey');
                } else {
            $('.querystatustabmain').removeClass('querystatustabmainstikey');
            }
            });
        }); 

          function queryNotes(){
            $('#queryNotes').load('loadQueryNotes.php?id=100004');
          }
          queryNotes();
    </script>


    <!--- end fot the main contetn section --->

    <div style="height:50px;"></div>
    <iframe id="actoinfrm" name="actoinfrm" src="" style="display:none;"></iframe>
    @include('new_layouts.partials.footer')

    </div>

    <script>
        //this is for instant image showing for ptofile
    $(document).ready(function(){
            $('#photo').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#updatephoto').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    // end of the section


     //this section is for visible for image in case of multiple
     $(document).ready(function(){
        $('#multiImg').on('change', function(){ //on file input change
            if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
            {
                var data = $(this)[0].files; //this file data
                
                $.each(data, function(index, file){ //loop though each file
                    if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                        var fRead = new FileReader(); //new filereader
                        fRead.onload = (function(file){ //trigger function on successful read
                            $('#preview_img').empty();
                        return function(e) {
                            var img = $('<img alt="100x100" width="300" />').addClass('rounded').attr('src', e.target.result) .width(80)
                        .height(80); //create image element 
                            $('#preview_img').append(img); //append image to output element
                        };
                        })(file);
                        fRead.readAsDataURL(file); //URL representing the file's data.
                    }
                });
                
            }else{
                alert("Your browser doesn't support File API!"); //if File API is absent
            }
        });
        });
    //end the section of multile 

    
        $(document).ready(function() {
          // Check if the success alert exists
          if ($('.headersavealert').length) {
              setTimeout(function() {
                  $('.headersavealert').slideUp(500, function() {
                      $(this).remove(); // Remove the alert from the DOM
                  });
              }, 3000); // Hide the alert after 3 seconds (adjust as needed)
          }
      });

      $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

      
      $(document).ready(function() {
          $('.reqedite').on('click', function(e) {
              e.preventDefault();
                
              // Get the record ID from the data-id attribute
              var recordId = $(this).data('id');

           
              // AJAX request to fetch the record data based on the ID
              $.ajax({
                  url: "{{ route('req.fetch', ['id' => 'RECORDID']) }}".replace('RECORDID', recordId), // Replace with your actual URL
                  type: 'GET',
                   // Use the appropriate HTTP method
                  dataType: 'json', // Expect JSON response
                  success:function(response) {
                      if (response.success) {
                        $('#id').val(response.data.id);
                        $('#input').val(response.data.input);
                        $('#remarks').val(response.data.requirment);
                        $('#arabic_remarks').val(response.data.ar_requirment);
                        // $('#name').val(response.name);
                        $('#reqUpdate').modal('show');

                        
                          // Populate the form fields or display the fetched data as needed
                          console.log('Fetched data:', response.data);
                          // Add your code to display or manipulate the data
                      }
                  },
                  error: function(xhr, status, error) {
                      // Handle AJAX errors
                      console.error('AJAX request failed:', error);
                  }
              });
          });
        });


        //open model of edite

        $(document).ready(function() {
        $('#CourseEditeBtn').on('click', function(e) {
          $('.CourseEditeModel').modal('show');
        });
      });

        //end of the open of edite model

        //open a model when get validation error 

        @if($errors->has('name') || $errors->has('arabic_name') || $errors->has('course') || $errors->has('arabic_course') || $errors->has('period')||$errors->has('arabic_period')||$errors->has('start_date')
          || $errors->has('start_date2')||$errors->has('fees')||$errors->has('category')||$errors->has('details')||$errors->has('arabic_details')||$errors->has('university')||$errors->has('photo')||$errors->has('multi_image'))
        $('.CourseEditeModel').modal('show');
      @endif

        //end of the model close 
    


       //delete part model
       $(document).ready(function() { 
        $(".req-delete-confirm").on('click', function() {
          
          let id = $(this).attr("data-id");

          $('.req-delete-model').modal('show');
          $(".del").attr("href", id)
        });
      });
    </script>

</body>

</html>