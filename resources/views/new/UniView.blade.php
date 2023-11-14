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
    @elseif($dataFromUrl != 0)
    @php $activeTab = 2; @endphp
    @elseif($paymentDataFromUrl != 0)
    @php $activeTab = 4; @endphp
    @else
    @php $activeTab = 1; @endphp
    @endif





    <!--main-->
    <div class="wrapper" style="margin-top: 56px;padding-left: 20px;">
        <div class="container-fluid" style="max-width: 100%;">
            <div class="main-content">

                <div class="page-content">
                    <div class="newboxheading">
                        <div class="newhead">University : {{ $unv->name }}
                            <div class="newoptionmenu">
                                <div>
                                    <a id="UniEditeBtn"><button type="button"
                                            class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray"
                                            style="margin-bottom:10px;">

                                            <i class="fa fa-pencil" aria-hidden="true"></i> &nbsp;Edit</button></a>
                                </div>


                                <div>
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
                                    <a><button type="button"
                                            class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray"
                                            style="margin-bottom:10px;">

                                            <i class="fa fa-whatsapp" aria-hidden="true" style="color:#009900;"></i>
                                            &nbsp;Whatsapp</button></a>
                                </div>

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
                                                                    class="d-none d-md-block"><i
                                                                        class="fa fa-university" aria-hidden="true"></i>
                                                                    &nbsp;University Details</span><span
                                                                    class="d-block d-md-none"><i
                                                                        class="mdi mdi-home-variant h5"></i></span></a>
                                                        </li>

                                                        <li class="nav-item" style="padding: 2px;"><a
                                                                class="nav-tab nav-link {{ $activeTab === 2 ? 'active show' : '' }}"
                                                                data-toggle="tab" href="#course-tab"><span
                                                                    class="d-none d-md-block"><i class="fa fa-book"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Courses</span><span
                                                                    class="d-block d-md-none"><i
                                                                        class="mdi mdi-home-variant h5"></i></span></a>
                                                        </li>



                                                        <li class="nav-item" style="padding: 2px;"><a
                                                                class="nav-tab nav-link {{ $activeTab === 3 ? 'active show' : '' }}"
                                                                data-toggle="tab" href="#student-tab"><span
                                                                    class="d-none d-md-block"><i class="fa fa-user"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp;Students</span><span
                                                                    class="d-block d-md-none"><i
                                                                        class="mdi mdi-home-variant h5"></i></span></a>
                                                        </li>


                                                        <li class="nav-item" style="padding: 2px;"><a
                                                                class="nav-tab nav-link {{ $activeTab === 4 ? 'active show' : '' }}"
                                                                data-toggle="tab" href="#payment-tab"><span
                                                                    class="d-none d-md-block"><i class="fa fa-pie-chart"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp;Payments</span><span
                                                                    class="d-block d-md-none"><i
                                                                        class="mdi mdi-home-variant h5"></i></span></a>
                                                        </li>


                                                        <li class="nav-item" style="padding: 2px;"><a
                                                                class="nav-tab nav-link {{ $activeTab === 5 ? 'active show' : '' }}"
                                                                data-toggle="tab" href="#mails-tab"><span
                                                                    class="d-none d-md-block"><i class="fa fa-envelope"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp;Mails</span><span class="d-block d-md-none"><i
                                                                        class="mdi mdi-home-variant h5"></i></span></a>
                                                        </li>





                                                    </ul>



                                                </div>

                                            </div>
                                        </td>
                                        <td align="left" valign="top">


                                            <div class="card-body" style="padding:10px;">

                                                <div class="tab-content m-0">

                                                    <!---student infromation home tab--->
                                                    <div class="tab-pane fade {{ $activeTab === 1 ? 'active show' : '' }}"
                                                        id="info-tab">
                                                        <!-- Content for Lead Details tab goes here -->
                                                        <div class="col-lg-12" style="padding-left:5px;">
                                                            <img src="{{ (!empty($unv->photo)) ? asset('uploads/'.$unv->photo.'') : 'https://bootdey.com/img/Content/avatar/avatar7.png' }}"
                                                                style="width: 100%; max-height: 250px; object-fit: cover;"
                                                                alt="Your Image Description">

                                                        </div>


                                                        <!-- Content for Lead Details tab goes here -->
                                                        <div class="col-lg-12"
                                                            style="padding-left:5px;margin-top:10px;">

                                                            <h4 class="mt-0 header-title">University Information</h4>

                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="row col-md-10" style="padding-left:35px;">
                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">Name</label>
                                                                        {{ $unv->name }}
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">Mobile </label>
                                                                        {{ $unv->Unumber }}
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">Email</label>
                                                                        {{ $unv->email }}
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">Executive
                                                                            Number</label>
                                                                        {{ $unv->ex_number }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">Executive
                                                                            Email</label>
                                                                        {{ $unv->ex_email }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group input-group"
                                                                        style="position:relative;">
                                                                        <label for="validationCustom02">University
                                                                            Address</label>
                                                                        {{ $unv->address }}
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <div class="row col-md-2" style="padding-right:0px;">
                                                                <img class="user-image"
                                                                    src="{{ (!empty($unv->logo)) ? asset('uploads/'.$unv->logo) : 'https://bootdey.com/img/Content/avatar/avatar7.png' }}"
                                                                    width="100" height="100"
                                                                    style="border-radius: 50%; border: 2px solid bisque; padding: 10px;">

                                                            </div>

                                                            <!--this is student interest section-->

                                                            <!---end of the student interest section--->
                                                        </div>


                                                        <!--end of the content-->
                                                    </div>
                                                    <!---end of the student home tab--->


                                                    <!---this is for courses tab --->
                                                    <div class="tab-pane fade {{ $activeTab === 2 ? 'active show' : '' }}"
                                                        id="course-tab">

                                                        <div class=" ">
                                                            <style>
                                                                .statusbox {
                                                                    margin-right: 5px;
                                                                    text-align: center;
                                                                    color: #fff;
                                                                    border-radius: 4px;
                                                                    text-transform: uppercase;
                                                                }
                                                            </style>


                                                            <div>
                                                                <h4 class="mt-0 header-title"
                                                                    style="border-bottom:0px; overflow:hidden;">
                                                                    &nbsp;Courses List
                                                                    <a id="courseAddBtn"
                                                                        style="position: absolute; font-size: 12px; font-weight: 600; right: 5px;  background-color: #005ee2; color: #fff; padding: 1px 10px; border-radius: 3px; cursor:pointer;">+
                                                                        Add New Course</a>
                                                                </h4>

                                                            </div>

                                                            <div style="margin-bottom:10px;">
                                                                <table width="100%" border="0" cellpadding="0"
                                                                    cellspacing="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="14%" align="left" valign="top">
                                                                                <a
                                                                                    href="{{  route('view.uni', ['id' => $unv->id, 'course' => 1])  }}">
                                                                                    <div class="statusbox"
                                                                                        style="background-color:#000;">
                                                                                        <div
                                                                                            style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                                                                                            @if($dataFromUrl == 0 ||
                                                                                            $dataFromUrl == 1 ) <div
                                                                                                class="ripple"></div>
                                                                                            @endif
                                                                                            {{ $cor_total }}

                                                                                        </div>
                                                                                        All course
                                                                                    </div>
                                                                                </a>
                                                                            </td>
                                                                            <td width="14%" align="left" valign="top">
                                                                                <a
                                                                                    href="{{  route('view.uni', ['id' => $unv->id, 'course' => 2])  }}">
                                                                                    <div class="statusbox"
                                                                                        style="background-color:#655be6;">
                                                                                        <div
                                                                                            style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                                                                                            @if($dataFromUrl == 2 )
                                                                                            <div class="ripple"></div>
                                                                                            @endif

                                                                                            {{
                                                                                            $bachelor_degrees->count()
                                                                                            }}

                                                                                        </div>
                                                                                        Bachelor Degree
                                                                                    </div>
                                                                                </a>
                                                                            </td>
                                                                            <td width="14%" align="left" valign="top">
                                                                                <a
                                                                                    href="{{  route('view.uni', ['id' => $unv->id, 'course' => 3])  }}">
                                                                                    <div class="statusbox"
                                                                                        style="background-color:#46cd93;">
                                                                                        <div
                                                                                            style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                                                                                            @if($dataFromUrl == 3 )
                                                                                            <div class="ripple"></div>
                                                                                            @endif
                                                                                            {{
                                                                                            $master_degrees->count()
                                                                                            }}

                                                                                        </div>
                                                                                        Master Degree
                                                                                    </div>
                                                                                </a>
                                                                            </td>
                                                                            <td width="14%" align="left" valign="top">
                                                                                <a
                                                                                    href="{{  route('view.uni', ['id' => $unv->id, 'course' => 4])  }}">
                                                                                    <div class="statusbox"
                                                                                        style="background-color:#cc00a9;">
                                                                                        <div
                                                                                            style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                                                                                            @if($dataFromUrl == 4 )
                                                                                            <div class="ripple"></div>
                                                                                            @endif
                                                                                            {{
                                                                                            $phd_degrees->count()
                                                                                            }}

                                                                                        </div>
                                                                                        PHD Degree
                                                                                    </div>
                                                                                </a>
                                                                            </td>
                                                                            <td width="14%" align="left" valign="top">
                                                                                <a
                                                                                    href="{{  route('view.uni', ['id' => $unv->id, 'course' => 5])  }}">
                                                                                    <div class="statusbox"
                                                                                        style="background-color:#6c757d;">
                                                                                        <div
                                                                                            style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                                                                                            @if($dataFromUrl == 5 )
                                                                                            <div class="ripple"></div>
                                                                                            @endif
                                                                                            {{
                                                                                            $other_degrees->count()
                                                                                            }}
                                                                                        </div>
                                                                                        Others Degree
                                                                                    </div>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>


                                                            <div class=" ">
                                                                <div class="col-md-12 col-xl-12">
                                                                    <div class=" ">
                                                                        <div class="card-body">


                                                                            <form class="custom-validation"
                                                                                action="frmaction.html"
                                                                                target="actoinfrm" novalidate=""
                                                                                method="post"
                                                                                enctype="multipart/form-data">
                                                                                <table class="table table-hover mb-0">

                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th width="0%">&nbsp;</th>
                                                                                            <th width="0%">Name</th>
                                                                                            <th width="0%">Course</th>
                                                                                            <th width="0%">fees</th>
                                                                                            <th width="0%">Students
                                                                                                Enrolled</th>
                                                                                            <th width="1%">&nbsp;</th>
                                                                                            <th width="1%">&nbsp;</th>
                                                                                            <th width="1%">&nbsp;</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        @foreach($cou as $row)
                                                                                        <tr>
                                                                                            <td width="2%">
                                                                                                <a><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADGElEQVR4nO1aXWsTQRRdREX/gv4hfdGf4JtCd/xI9UEhuj7YNmlmbLHpQ2uZ2TXJLlTa1FQEqUQLtUJr8Qu0WFxEGl98aN+EpTByk+5mTZOaxp1VknvgwmZ2N/eeM3dmZ2evpiEQCAQCsQcT5yeOUJ1TRsQPRoSM2LapLhZYnzjl+8sQ8zQj/BmcU+APOGQMwzistQuq82EFgew1Xdxiurgdjy+ebknYMKaPwgVU59/DN1XWv0j5czswb8v9a9v69km+evRCjl42Az+jl0y5aM/JytqC3FovVy0KX2Bf375pFKNCiUgB53qPE5FqplqYfFQC+LZcWgz8LBaKAfGoBQBrkRFDgQCgCjSWxwtyzXJiEQAyIci0UM+rFAC4lbOFIBO0kADBBXEJEA6skbxKAcL8tIMI4GRK0snM/vbHdnqm47b9BMjdsSP1FYkAbLet2R930rafAFH7QgFIFEOANhkCwzMdt+07BAbsSH1FIoDs9UlQogDbmAEeDgEX5wAPJ0EXnwIePgZdXAd4uBBycSXo4VLYxXcBD1+GXHwb9PB12MX9AA83RFzcEfJwS8zFPUHvACLADm5+0O7dTVEPvhE2IY8CrPdIBthpGAJO72YAww8jAr8MMfw0Jnp3DrBxHeD+n+uAbKJWwrb5MfoyubgF8Mvksv1m+wI8HMg1Ly2LwLLXcnJ6ZE5urLwOBPjw9Il00o4cu2op8wuc2hZg1ayJ4GeCKluafS7LD4pKfUDPAxfg1LYAawptecqWxVROjlysBwnHxVS+ei6OGJoJUIEGKCKMIwAwEMEPBI7j8usXSlLCN+sC6HxIZRpCLbCVtOTSZL2Hobf98+GefzlpSzNpVe9RGRMlYrCxWHrIzwRVNt5vylVRJ3v/uiWnbljB7xXhVK9RS5xvAnkjXCytGuyCeZIS8R4CmM/kW6bnfMYfFvxdWp86oXUT7vbxs0BuLLE714RmZTiGtntXar1PdfOM1m0wDOMQ0/njP6aoLkpwrdaNYInp45SIm5SIDUr4Tmhc7jBdfGaEJ41z4ti/jhOBQCAQWg/gF1k3a6sledguAAAAAElFTkSuQmCC"
                                                                                                        style="width: 30px;"></a>
                                                                                            </td>
                                                                                            <td width="0%">{{ $row->name
                                                                                                }}</td>
                                                                                            <td width="0%">
                                                                                                {{ $row->course }}
                                                                                            </td>
                                                                                            <td width="0%">
                                                                                                <span
                                                                                                    class="badge bg-primary text-white"
                                                                                                    style="padding: 2 !important; font-size: 12px !important;">{{
                                                                                                    $row->fess}}</span>
                                                                                            </td>
                                                                                            <td width="0%">
                                                                                                <span
                                                                                                    class="badge @if($row->student_count == 0) bg-danger @else bg-success @endif text-white"
                                                                                                    style="padding: 2 !important; font-size: 14px !important;">
                                                                                                    {{
                                                                                                    $row->student_count
                                                                                                    }}</span>

                                                                                            </td>
                                                                                            <td width="1%">
                                                                                                <a href="{{ route('view.cor', $row->id) }}"
                                                                                                    class="dropdown-item neweditpan"
                                                                                                    data-id="7"><i
                                                                                                        class="fa fa-eye"
                                                                                                        aria-hidden="true"></i></a>
                                                                                            </td>
                                                                                            <td width="1%">
                                                                                                <a class="dropdown-item neweditpan courseEdite"
                                                                                                    data-id="{{ $row->id }}"><i
                                                                                                        class="fa fa-pencil"
                                                                                                        aria-hidden="true"></i></a>
                                                                                            </td>
                                                                                            <td width="1%">
                                                                                                <a class="dropdown-item neweditpan course-delete-confirm"
                                                                                                    data-id="{{ route('uni.delete.cor' , $row->id) }}"><i
                                                                                                        class="fa fa-trash"
                                                                                                        aria-hidden="true"></i></a>
                                                                                            </td>

                                                                                        </tr>
                                                                                        @endforeach
                                                                                    </tbody>
                                                                                </table>
                                                                                <input name="action" type="hidden"
                                                                                    id="action"
                                                                                    value="stepverificationaction">
                                                                                <div class="modal-footer d-none"
                                                                                    style="padding-right:10px;">
                                                                                    <input name="Save" type="submit"
                                                                                        value="Save Changes"
                                                                                        id="savingbutton"
                                                                                        class="btn btn-primary"
                                                                                        onclick="this.form.submit(); this.disabled=true; this.value='Saving...';">
                                                                                </div>
                                                                            </form>
                                                                        </div>


                                                                    </div>


                                                                </div>




                                                                <style>
                                                                    .upmsg {
                                                                        color: #CC3300;
                                                                        font-weight: 400;
                                                                        font-size: 14px;
                                                                        padding: 5px 10px;
                                                                        border: 1px solid #ffe18f;
                                                                        background-color: #fffdd4;
                                                                    }
                                                                </style>


                                                            </div>




                                                        </div>

                                                    </div>
                                                    <!----end of the courses tab----->

                                                    <!---this is for the student list tab--->
                                                    <div class="tab-pane fade {{ $activeTab === 3 ? 'active show' : '' }}"
                                                        id="student-tab">

                                                        <div>
                                                            <h4 class="mt-0 header-title"
                                                                style="border-bottom:0px; overflow:hidden;">
                                                                &nbsp;Student List



                                                                <input type="text" name="search"
                                                                    placeholder="Search students" value="" require=""
                                                                    style="position: absolute; font-size: 12px; font-weight: 600; right: 80px;   padding: 1px 15px; cursor:pointer;border: 1px solid #ccc;">

                                                                <a id="courseAddBtn"
                                                                    style="position: absolute; font-size: 13px; font-weight: 600; right: 15px;  background-color: #005ee2; color: #fff; padding: 1px 10px; border-radius: 3px; cursor:pointer;">
                                                                    Search</a>


                                                            </h4>

                                                        </div>


                                                        <div class=" ">
                                                            <div class="col-md-12 col-xl-12">
                                                                <div class=" ">
                                                                    <div class="card-body">


                                                                        <form class="custom-validation"
                                                                            action="frmaction.html" target="actoinfrm"
                                                                            novalidate="" method="post"
                                                                            enctype="multipart/form-data">
                                                                            <table class="table table-hover mb-0">

                                                                                <thead>
                                                                                    <tr>
                                                                                        <th width="0%">&nbsp;</th>
                                                                                        <th width="0%">Name</th>
                                                                                        <th width="0%">Email</th>
                                                                                        <th width="0%">Phone</th>
                                                                                        <th width="0%">Address
                                                                                        </th>
                                                                                        <th width="0%">status
                                                                                        </th>
                                                                                        <th width="1%">&nbsp;</th>
                                                                                        <th width="1%">&nbsp;</th>

                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @foreach($stu as $row)
                                                                                    <tr>
                                                                                        <td width="2%">
                                                                                            <a><img src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):('https://bootdey.com/img/Content/avatar/avatar7.png') }}"
                                                                                                    style="width: 30px;"></a>
                                                                                        </td>
                                                                                        <td width="0%">{{ $row->name
                                                                                            }}</td>
                                                                                        <td width="0%">
                                                                                            {{ $row->email }}
                                                                                        </td>
                                                                                        <td width="0%">
                                                                                            +{{ $row->country_code }}{{
                                                                                            $row->phone }}
                                                                                        </td>

                                                                                        <td width="0%">
                                                                                            {{ $row->city }} , {{
                                                                                            $row->country }}
                                                                                        </td>
                                                                                        <td width="0%">
                                                                                            <span
                                                                                                class="badge @if($row->process_status == 0) bg-danger @else bg-success @endif text-white"
                                                                                                style="padding: 2 !important; font-size: 12px !important;">
                                                                                                @if($row->process_status
                                                                                                == 0) Not process @else
                                                                                                Processing @endif
                                                                                            </span>

                                                                                        </td>
                                                                                        <td width="1%">
                                                                                            <a href="{{ route('view.stu', $row->id) }}"
                                                                                                class="dropdown-item neweditpan"
                                                                                                data-id="7"><i
                                                                                                    class="fa fa-eye"
                                                                                                    aria-hidden="true"></i></a>
                                                                                        </td>
                                                                                        <td width="1%">
                                                                                            <a class="dropdown-item neweditpan studentEdite"
                                                                                                data-id="{{ $row->id }}"><i
                                                                                                    class="fa fa-pencil"
                                                                                                    aria-hidden="true"></i></a>
                                                                                        </td>


                                                                                    </tr>
                                                                                    @endforeach
                                                                                </tbody>
                                                                            </table>
                                                                            <input name="action" type="hidden"
                                                                                id="action"
                                                                                value="stepverificationaction">
                                                                            <div class="modal-footer d-none"
                                                                                style="padding-right:10px;">
                                                                                <input name="Save" type="submit"
                                                                                    value="Save Changes"
                                                                                    id="savingbutton"
                                                                                    class="btn btn-primary"
                                                                                    onclick="this.form.submit(); this.disabled=true; this.value='Saving...';">
                                                                            </div>
                                                                        </form>
                                                                    </div>


                                                                </div>


                                                            </div>




                                                            <style>
                                                                .upmsg {
                                                                    color: #CC3300;
                                                                    font-weight: 400;
                                                                    font-size: 14px;
                                                                    padding: 5px 10px;
                                                                    border: 1px solid #ffe18f;
                                                                    background-color: #fffdd4;
                                                                }
                                                            </style>


                                                        </div>







                                                    </div>
                                                    <!---end of the student tab--->

                                                    <!---this is the tab for university payment--->
                                                    <div class="tab-pane fade {{ $activeTab === 4 ? 'active show' : '' }}"
                                                        id="payment-tab">


                                                        <div style="margin-bottom:10px;">
                                                            <table width="100%" border="0" cellpadding="0"
                                                                cellspacing="0">
                                                                <tbody>
                                                                    <tr>

                                                                        <td width="14%" align="left" valign="top">
                                                                            <a
                                                                                href="{{  route('view.uni', ['id' => $unv->id, 'payment' => 1])  }}">
                                                                                <div class="statusbox"
                                                                                    style="background-color:#e45555;">
                                                                                    <div
                                                                                        style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                                                                                        @if($paymentDataFromUrl == 0 ||
                                                                                        $paymentDataFromUrl == 1 ) <div
                                                                                            class="ripple"></div>
                                                                                        @endif


                                                                                        {{ $sumPay }}

                                                                                    </div>
                                                                                    Total University Payments
                                                                                </div>
                                                                            </a>
                                                                        </td>


                                                                        <td width="14%" align="left" valign="top">
                                                                            <a
                                                                                href="{{  route('view.uni', ['id' => $unv->id, 'payment' => 2])  }}">
                                                                                <div class="statusbox"
                                                                                    style="background-color:#46cd93;">
                                                                                    <div
                                                                                        style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">

                                                                                        @if($paymentDataFromUrl == 2 )
                                                                                        <div class="ripple"></div>
                                                                                        @endif

                                                                                        {{ $sumCom }}

                                                                                    </div>
                                                                                    Total University Commission
                                                                                </div>
                                                                            </a>
                                                                        </td>


                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>

                                                        <div class="col-lg-12" style=" padding: 0px; ">
                                                            <h4 class="mt-0 header-title"
                                                                style="border-bottom:0px; position:relative;">
                                                                @if($paymentDataFromUrl == 2 ) University Commissions

                                                                <a data-toggle="modal"
                                                                    data-target=".university-payment-model"
                                                                    popaction="action=sendSelectedPaymentPlanToMail&amp;queryId=100007&amp;packageId=100017"
                                                                    style="position: absolute; font-size: 12px; font-weight: 600; right: 5px; top:2px; background-color: #cc00a9; color: #fff; padding: 2px 10px; border-radius: 3px; cursor: pointer;">
                                                                    Make a new Commission</a>

                                                                @else University Payments

                                                                <a data-toggle="modal"
                                                                    data-target=".university-payment-model"
                                                                    popaction="action=sendSelectedPaymentPlanToMail&amp;queryId=100007&amp;packageId=100017"
                                                                    style="position: absolute; font-size: 12px; font-weight: 600; right: 5px; top:2px; background-color: #FF6600; color: #fff; padding: 2px 10px; border-radius: 3px; cursor: pointer;">
                                                                    Make a new Payment</a>

                                                                @endif


                                                            </h4>
                                                            <form class="custom-validation" action="frmaction.html"
                                                                target="actoinfrm" novalidate="" method="post"
                                                                enctype="multipart/form-data">
                                                                <div class="card">
                                                                    <div class="card-body"
                                                                        style="padding:10px !important;">
                                                                        <table width="100%" border="1" cellpadding="5"
                                                                            cellspacing="0" bordercolor="#CCCCCC"
                                                                            style=" font-size:12px;">
                                                                            <style>
                                                                                .hover-effect:hover {
                                                                                    background-color: #f5f5f5;
                                                                                }
                                                                            </style>


                                                                            <thead>
                                                                                <tr
                                                                                    style="hover: background-color: #f5f5f5;">
                                                                                    <th>Payment&nbsp;ID</th>
                                                                                    <th>Trans.&nbsp;ID</th>
                                                                                    <th>Type</th>
                                                                                    <th>Amount</th>
                                                                                    <th>Payment&nbsp;Date</th>
                                                                                    {{-- <th>Status</th> --}}

                                                                                    <th>
                                                                                        -&nbsp;&nbsp;
                                                                                    </th>
                                                                                    <th>
                                                                                        -&nbsp;&nbsp;
                                                                                    </th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @php
                                                                                $totalAmount = 0; // Initialize the

                                                                                @endphp

                                                                                @foreach($unipayment as $row)

                                                                                <tr class="hover-effect">
                                                                                    <td align="left" valign="top"><a>
                                                                                            <div class="media">

                                                                                                <div
                                                                                                    class="media-body overflow-hidden">

                                                                                                    <p
                                                                                                        class="text-truncate mb-0">
                                                                                                        <span
                                                                                                            class="lightbox">
                                                                                                            Name :
                                                                                                            <strong>{{
                                                                                                                $row->student->name
                                                                                                                }}</strong>
                                                                                                            &nbsp;|&nbsp;

                                                                                                            Email :
                                                                                                            <strong>{{
                                                                                                                $row->student->email
                                                                                                                }}</strong>
                                                                                                            &nbsp;|&nbsp;


                                                                                                            Mobile :
                                                                                                            <strong>+{{
                                                                                                                $row->student->country_code
                                                                                                                }} {{
                                                                                                                $row->student->phone
                                                                                                                }}</strong>
                                                                                                    </p>




                                                                                                </div>
                                                                                            </div>
                                                                                        </a></td>
                                                                                    <td align="left" valign="top"
                                                                                        style="text-transform:uppercase;">
                                                                                        {{ $row->txn_id }}</td>
                                                                                    <td align="left" valign="top">{{
                                                                                        $row->payType->type }}</td>
                                                                                    <td align="left" valign="top">{{
                                                                                        $row->amount }}
                                                                                    </td>
                                                                                    <td align="left" valign="top">
                                                                                        {{ $row->created_at->format('F
                                                                                        j, Y') }}</td>
                                                                                    {{-- <td align="left" valign="top">
                                                                                        <span
                                                                                            class="badge badge-danger">Overdue</span>
                                                                                    </td> --}}


                                                                                    <td align="left" valign="top">

                                                                                        <div align="right">


                                                                                            <div class="row"
                                                                                                style="margin: 1px;">
                                                                                                <span><a class="dropdown-item neweditpan update-payments"
                                                                                                        data-id="{{ $row->id }}"
                                                                                                        data-type={{
                                                                                                        $paymentDataFromUrl
                                                                                                        }}><i
                                                                                                            class="fa fa-pencil"
                                                                                                            aria-hidden="true"></i></a></span>&nbsp;&nbsp;

                                                                                            </div>

                                                                                        </div>

                                                                                    </td>


                                                                                    <td align="left" valign="top">

                                                                                        <div align="right">


                                                                                            <div class="row"
                                                                                                style="margin: 1px;">
                                                                                                <span><a class="dropdown-item neweditpan payment-delete-confirm"
                                                                                                        data-id="@if($paymentDataFromUrl != 2 ) {{ route('delete.payment', $row->id) }} @else {{ route('delete.commission', $row->id) }} @endif"><i
                                                                                                            class="fa fa-trash"
                                                                                                            aria-hidden="true"></i></a></span>&nbsp;&nbsp;

                                                                                            </div>

                                                                                        </div>

                                                                                    </td>


                                                                                </tr>

                                                                                @php
                                                                                $totalAmount += $row->amount;
                                                                                @endphp
                                                                                @endforeach

                                                                                <tr class="hover-effect">
                                                                                    <td colspan="3" align="right"
                                                                                        valign="top"><strong>Not
                                                                                            Scheduled Amount: </strong>
                                                                                    </td>
                                                                                    <td align="left" valign="top">
                                                                                        <strong>{{ $totalAmount
                                                                                            }}</strong>
                                                                                    </td>
                                                                                    <td colspan="7" align="right"
                                                                                        valign="top"><button
                                                                                            type="button"
                                                                                            class="btn btn-pink btn-sm waves-effect waves-light"
                                                                                            onclick="loadpop('Create Payment Plan',this,'400px')"
                                                                                            data-toggle="modal"
                                                                                            data-target=".bs-example-modal-center"
                                                                                            popaction="action=schedulepayment&amp;payment=45000&amp;queryId=100007&amp;packageId=100017&amp;addpay=1"
                                                                                            style="margin-bottom:0px; float:right;">Schedule
                                                                                            Payment</button></td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>

                                                                <input name="action" type="hidden" id="action"
                                                                    value="sendSelectedPaymentPlanToMail">
                                                                <input name="queryId" type="hidden" value="100007">
                                                                <input name="packageId" type="hidden" value="100017">
                                                                <div
                                                                    style="overflow: hidden; width: 100%; margin-top: 10px; display:none;">
                                                                    <table border="0" cellspacing="0" cellpadding="5">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <!--<input name="Save" type="submit" value="Send Payment Plan To Mail"   id="savingbutton" class="btn btn-primary" onclick="this.form.submit(); this.disabled=true; this.value='Saving...';" style="float:left;"  />-->
                                                                                </td>
                                                                                <td>&nbsp;&nbsp;
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                            </form>
                                                        </div>


                                                    </div>
                                                    <!---end of the tab -------->

                                                    <!---this is the tab for university payment--->
                                                    <div class="tab-pane fade {{ $activeTab === 5 ? 'active show' : '' }}"
                                                        id="mails-tab">

                                                        <div>
                                                            <h4 class="mt-0 header-title"
                                                                style="border-bottom:0px; overflow:hidden;">
                                                                &nbsp;Malis


                                                            </h4>

                                                        </div>


                                                    </div>
                                                    <!---end of the tab -------->

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
            <div class="modal fade course-delete-model">
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
                                        <h4>You are confirming the course deletion</h4>

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

            <!---this is the alert model for confirmation alert--->
            <div class="modal fade payment-delete-model">
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
                                        <h4>You are confirming the pyament deletion</h4>

                                        This action cannot be undone.
                                    </div>


                                </div>
                            </div>

                            <div class="modal-footer">
                                <a class="del2"><button type="submit"
                                        class="btn btn-success waves-effect waves-light">Confirm</button></a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!---end of the model--->

            <!----model for make payment--->
            <div class="modal fade show university-payment-model" style="padding-right: 17px;">
                <div class="modal-dialog  modal-lg">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h6 class="modal-title">@if($paymentDataFromUrl != 2 ) student payment to university @else
                                commission payment from university @endif </h6>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <form id="addRequirment" action="{{ route('payment.student') }}" method="POST">
                            @csrf
                            <input type="hidden" name="paymentRole" value="{{ $paymentDataFromUrl }} ">
                            <div class="modal-header">
                                <!--search bar section --->
                                <div class="row col-lg-12">
                                    <div class="col-lg-6">
                                        <select class="form-control" id="uni_degree" name="course">
                                            <option value="">Select Course</option>
                                            @foreach($course as $row)
                                            <option value="{{ $row->id }}">{{ $row->name }}({{ $row->course }})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="student_id" name="student">
                                            <option>Select Student</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- send search bar section -->
                            </div>
                            <div class="modal-body" id="stu_info">
                                <div style="margin-bottom:10px;">
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>

                                                <td width="14%" align="left" valign="top">
                                                    <a href="http://localhost/eduglobe/university-view/1?payment=1">
                                                        <div class="statusbox" style="background-color:#655be6;">
                                                            <div style="margin-bottom: 0px; font-size: 30px; line-height: 38px;"
                                                                id="stu_di_payment">

                                                                0

                                                            </div>
                                                            Total Student payment
                                                        </div>
                                                    </a>
                                                </td>


                                                <td width="14%" align="left" valign="top">
                                                    <a href="http://localhost/eduglobe/university-view/1?payment=2">
                                                        <div class="statusbox" style="background-color:#e45555;">
                                                            <div style="margin-bottom: 0px; font-size: 30px; line-height: 38px;"
                                                                id="stu_payment">

                                                                0

                                                            </div>
                                                            Total University Payment
                                                        </div>
                                                    </a>
                                                </td>

                                                <td width="14%" align="left" valign="top">
                                                    <a href="http://localhost/eduglobe/university-view/1?payment=2">
                                                        <div class="statusbox" style="background-color:#46cd93;">
                                                            <div style="margin-bottom: 0px; font-size: 30px; line-height: 38px;"
                                                                id="stu_commission">

                                                                0

                                                            </div>
                                                            Total University Commission
                                                        </div>
                                                    </a>
                                                </td>


                                            </tr>
                                        </tbody>
                                    </table>

                                </div>


                                <!-- this is the table section for courses -->
                                <a>
                                    <div class="media" style="margin-left: 2%;">
                                        <div class="mr-3 align-self-center">
                                            <img id="stu_photo"
                                                src="{{ ('https://bootdey.com/img/Content/avatar/avatar7.png') }}"
                                                alt="" class="avatar-sm rounded-circle"
                                                style="width: 100px;border-radius:0% !important;">
                                        </div>
                                        <div class="media-body " style="margin-top: 1%;">
                                            <h6 class="font-size-16 mb-1" id="stu_name">Mr. Ravi</h6>
                                            <p class="text-truncate mb-0"><span class="lightbox">Email:
                                                    <strong id="stu_email">ravi@travbizz.com</strong> &nbsp;|&nbsp;
                                                    Mobile:
                                                    <strong
                                                        id="stu_mobile">08097495090</strong>&nbsp;&nbsp;|&nbsp;&nbsp;City:</span>
                                                <strong id="stu_city">Delhi</strong>
                                            </p>

                                            <p><span class="lightbox">Country: <strong id="stu_country">Not
                                                        Provided</strong>
                                                    &nbsp;|&nbsp;
                                                    Passport No: <strong id="stu_passport">Not Provided</strong></span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- end of table section for courses section -->

                                <!---this is the input form part-->
                                <hr>
                                <div class="row col-lg-12">
                                    <div class="col-lg-4">
                                        <select class="form-control" name="type" required>
                                            <option value="">Select Payment type</option>
                                            @foreach($paytype as $row)
                                            <option value="{{$row->id}}">{{ $row->type }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" name="amount" class="form-control"
                                            placeholder="Please enter amount" required>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="submit"
                                            class="btn @if($paymentDataFromUrl != 2) btn-danger @else btn-success @endif waves-effect waves-light">Pay
                                            seriously</button>
                                    </div>
                                </div>

                                <!---end of the part-->


                            </div>

                        </form>

                    </div>
                </div><!-- /.modal-content -->
            </div>
            <!----end of the model ---->


            <!---payment model update part--->
            <div class="modal fade show university-payment-Updatemodel" style="padding-right: 17px;">
                <div class="modal-dialog  modal-lg">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h6 class="modal-title">@if($paymentDataFromUrl != 2 ) update student payment to university
                                @else
                                update commission payment from university @endif </h6>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <form id="addRequirment" action="{{ route('update.payment') }}" method="POST">
                            @csrf
                            <input type="hidden" name="paymentRole" value="{{ $paymentDataFromUrl }} ">
                            <input type="hidden" id="payid" name="id" value="">

                            <div class="modal-body" id="">
                                <div style="margin-bottom:10px;">
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>

                                                <td width="14%" align="left" valign="top">
                                                    <a>
                                                        <div class="statusbox" style="background-color:#655be6;">
                                                            <div style="margin-bottom: 0px; font-size: 30px; line-height: 38px;"
                                                                id="update_stu_di_payment">

                                                                0

                                                            </div>
                                                            Total Student payment
                                                        </div>
                                                    </a>
                                                </td>


                                                <td width="14%" align="left" valign="top">
                                                    <a>
                                                        <div class="statusbox" style="background-color:#e45555;">
                                                            <div style="margin-bottom: 0px; font-size: 30px; line-height: 38px;"
                                                                id="update_stu_payment">

                                                                0

                                                            </div>
                                                            Total University Payment
                                                        </div>
                                                    </a>
                                                </td>

                                                <td width="14%" align="left" valign="top">
                                                    <a>
                                                        <div class="statusbox" style="background-color:#46cd93;">
                                                            <div style="margin-bottom: 0px; font-size: 30px; line-height: 38px;"
                                                                id="update_stu_commission">

                                                                0

                                                            </div>
                                                            Total University Commission
                                                        </div>
                                                    </a>
                                                </td>


                                            </tr>
                                        </tbody>
                                    </table>

                                </div>


                                <!-- this is the table section for courses -->
                                <a>
                                    <div class="media" style="margin-left: 2%;">
                                        <div class="mr-3 align-self-center">
                                            <img id="update_stu_photo"
                                                src="{{ ('https://bootdey.com/img/Content/avatar/avatar7.png') }}"
                                                alt="" class="avatar-sm rounded-circle"
                                                style="width: 100px;border-radius:0% !important;">
                                        </div>
                                        <div class="media-body " style="margin-top: 1%;">
                                            <h6 class="font-size-16 mb-1" id="update_stu_name">Mr. Ravi</h6>
                                            <p class="text-truncate mb-0"><span class="lightbox">Email:
                                                    <strong id="update_stu_email">ravi@travbizz.com</strong>
                                                    &nbsp;|&nbsp;
                                                    Mobile:
                                                    <strong
                                                        id="update_stu_mobile">08097495090</strong>&nbsp;&nbsp;|&nbsp;&nbsp;City:</span>
                                                <strong id="update_stu_city">Delhi</strong>
                                            </p>

                                            <p><span class="lightbox">Country: <strong id="update_stu_country">Not
                                                        Provided</strong>
                                                    &nbsp;|&nbsp;
                                                    Passport No: <strong id="update_stu_passport">Not
                                                        Provided</strong></span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- end of table section for courses section -->

                                <!---this is the input form part-->
                                <hr>
                                <div class="row col-lg-12">
                                    <div class="col-lg-4">
                                        <select class="form-control" id="update_type" name="type" required>
                                            <option value="">Select Payment type</option>
                                            @foreach($paytype as $row)
                                            <option value="{{$row->id}}">{{ $row->type }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" id="update_amount" name="amount" class="form-control"
                                            placeholder="Please enter amount" required>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="submit"
                                            class="btn @if($paymentDataFromUrl != 2) btn-danger @else btn-success @endif waves-effect waves-light">Pay
                                            update</button>
                                    </div>
                                </div>

                                <!---end of the part-->


                            </div>

                        </form>

                    </div>
                </div><!-- /.modal-content -->
            </div>
            <!---end of the model of updte --->




            <!---this is the student information edite model -->
            <div class="modelnew modal right fade UniEditeModel" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel2">
                <div class="modal-dialog" role="document" style="width: 450px; max-width: 450px;">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h4 class="modal-title" id="poptitle2">Edite university information</h4>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                        <div class="modal-body" id="popcontent2">

                            <form method="POST" action="{{ route('update.uni') }}" enctype="multipart/form-data"
                                name="universityForm">
                                @csrf

                                <div class="row" style="padding: 5px;">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">University Name</label>
                                            <input type="text" id="name" class="form-control reqfield" name="name"
                                                value="{{ old('name', $unv->name ) }}">
                                            @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">University Name (in arabic)</label>
                                            <input type="text" id="arabic_name" class="form-control reqfield"
                                                name="arabic_name" value="{{ old('arabic_name', $unv->ar_name) }}">
                                            @error('arabic_name')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Enter campus name</label>
                                            <input type="text" id="campus_name" class="form-control reqfield"
                                                name="campus_name" value="{{ old('campus_name', $unv->campus_name) }}">
                                            @error('campus_name')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">University Email</label>
                                            <input type="text" id="email" class="form-control reqfield" name="email"
                                                value="{{ old('email', $unv->email) }}">
                                            @error('email')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">University Number</label>
                                            <input type="text" id="u_number" class="form-control reqfield"
                                                name="u_number" value="{{ old('u_number', $unv->Unumber) }}">
                                            @error('u_number')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Executive Email</label>
                                            <input type="text" id="ex_email" class="form-control reqfield"
                                                name="ex_email" value="{{ old('ex_email', $unv->ex_email) }}">
                                            @error('ex_email')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Executive Number</label>
                                            <input type="text" id="ex_number" class="form-control reqfield"
                                                name="ex_number" value="{{ old('ex_number', $unv->ex_number) }}">
                                            @error('ex_number')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">University Address(in english)</label>
                                            <input type="text" id="address" class="form-control reqfield" name="address"
                                                value="{{ old('address', $unv->address) }}">
                                            @error('address')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">University Address(in arabic)</label>
                                            <input type="text" id="arabic_address" class="form-control reqfield"
                                                name="arabic_address"
                                                value="{{ old('arabic_address', $unv->ar_address) }}">
                                            @error('arabic_address')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">University description</label>
                                            <textarea id="remarks" class="form-control reqfield"
                                                name="remarks">{{ old('remarks', $unv->remarks) }}</textarea>
                                            @error('remarks')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">University description(in arabic)</label>
                                            <textarea id="arabic_remarks" class="form-control reqfield"
                                                name="arabic_remarks">{{ old('arabic_remarks', $unv->ar_remarks) }}</textarea>
                                            @error('arabic_remarks')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Change the logo</label>
                                            <input type="file" id="logo" name="logo" class="form-control">
                                            @error('logo')<span class="text-danger" style="margin-left: 31%;">{{
                                                $message
                                                }}</span>@enderror

                                            <img id="updatelogo" src="{{ asset('uploads/'.$unv->logo.'') }}"
                                                alt="Preview" style="max-width: 250px; max-height: 100px; ">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Change the pic</label>
                                            <input type="file" id="photo" name="photo" class="form-control">
                                            @error('photo')<span class="text-danger" style="margin-left: 31%;">{{
                                                $message
                                                }}</span>@enderror

                                            <img id="updatephoto" src="{{ asset('uploads/'.$unv->photo.'') }}"
                                                alt="Preview" style="min-width: 400px; max-height: 180px; ">
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

                                <input name="id" type="hidden" id="" value="{{ $unv->id }}">





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
            <!--this is the this model style part--->

            <!----this is model for course edite part--->
            <div class="modelnew modal right fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
                id="CourseEditeModel">
                <div class="modal-dialog" role="document" style="width: 450px; max-width: 450px;">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h4 class="modal-title" id="poptitle2">Course information</h4>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                        <div class="modal-body" id="popcontent2">

                            <form method="POST" action="{{ route('cor.update.uni') }}" id="courseForm"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row" style="padding: 5px;">
                                    <input type="hidden" value="{{ $unv->id }}" name="university">


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Course Name</label>
                                            <input type="text" id="Cname" class="form-control reqfield"
                                                name="Course_name" value="{{ old('Course_name') }}">
                                            @error('Course_name')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Course</label>
                                            <input type="text" id="Ccourse" class="form-control reqfield" name="course"
                                                value="{{ old('course') }}">
                                            @error('course')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Course Period</label>
                                            <input type="text" id="Cperiod" class="form-control reqfield" name="period"
                                                value="{{ old('period') }}">
                                            @error('period')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Course arabic Name</label>
                                            <input type="text" id="Carabic_name" class="form-control reqfield"
                                                name="arabic_name" value="{{ old('arabic_name') }}">
                                            @error('arabic_name')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Course arabic</label>
                                            <input type="text" id="Carabic_course" class="form-control reqfield"
                                                name="arabic_course" value="{{ old('arabic_course') }}">
                                            @error('arabic_course')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Arabic Course Period</label>
                                            <input type="text" id="Carabic_period" class="form-control reqfield"
                                                name="arabic_period" value="{{ old('arabic_period') }}">
                                            @error('arabic_period')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Course Degree</label>
                                            <select class="form-control basic reqfield" id="Cdegree" name="degree">
                                                <option value="">Select degree</option>
                                                <option value="BACHELOR" @if(old('degree')=='BACHELOR' ) selected
                                                    @endif>Bachelor
                                                </option>
                                                <option value="MASTER" @if(old('degree')=='MASTER' ) selected @endif>
                                                    Master
                                                </option>
                                                <option value="PHD" @if(old('degree')=='PHD' ) selected @endif>PHD
                                                </option>
                                                <option value="OTHER" @if(old('degree')=='OTHER' ) selected @endif>
                                                    Others
                                                </option>
                                            </select>
                                            @error('degree')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">category</label>
                                            <select class="form-control basic reqfield" id="Ccategory" name="category">
                                                <option value="">Select category</option>
                                                @foreach($category as $row)
                                                <option value="{{ $row->id }}" @if(old('category')==$row->id)
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
                                            <input type="date" id="Cstart_date" class="form-control reqfield"
                                                name="start_date" value="{{ old('start_date') }}">
                                            @error('start_date')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">2nd start date</label>
                                            <input type="date" id="Cstart_date2" class="form-control reqfield"
                                                name="start_date2" value="{{ old('start_date2') }}">
                                            @error('start_date2')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">course fess</label>
                                            <input type="text" id="Cfees" class="form-control reqfield" name="fees"
                                                value="{{ old('fees') }}">
                                            @error('fees')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Course description</label>
                                            <textarea id="Cdetails" class="form-control reqfield"
                                                name="details">{{ old('details') }}</textarea>
                                            @error('details')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Course description(in arabic)</label>
                                            <textarea id="Carabic_details" class="form-control reqfield"
                                                name="arabic_details">{{ old('arabic_details') }}</textarea>
                                            @error('arabic_details')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Change student Photo</label>
                                            <input type="file" id="Cphoto" name="Course_photo" class="form-control">
                                            @error('Course_photo')<span class="text-danger" style="margin-left: 31%;">{{
                                                $message
                                                }}</span>@enderror

                                            <img id="Cupdatephoto" alt="Preview"
                                                style="max-width: 250px; max-height: 100px; ">
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

                                                <img class="rounded " alt="100x100" width="80" src=""
                                                    data-holder-rendered="true" id="updatephoto">

                                            </div>
                                        </div>
                                    </div>



                                </div>



                                <input name="EditeId" type="hidden" id="EditeId" value="{{ old('EditeId') }}">





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
            <!---end of the model---->

            <!---this is the model for student edite--->
            <div class="modelnew modal right fade StudentEditeModel" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel2">
                <div class="modal-dialog" role="document" style="width: 450px; max-width: 450px;">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h4 class="modal-title" id="poptitle2">Edite student information</h4>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                        <div class="modal-body" id="popcontent2">

                            <form method="POST" action="{{ route('stu.update.uni') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row" style="padding: 5px;">


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Student Name</label>
                                            <input type="text" id="stuName" class="form-control reqfield"
                                                name="student_name" value="{{ old('student_name') }}">
                                            @error('student_name')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Student Email</label>
                                            <input type="email" id="stuEmail" class="form-control reqfield"
                                                name="student_email" value="{{ old('student_email') }}">
                                            @error('student_email')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Date of Birth</label>
                                            <input type="date" id="stuBrith" class="form-control reqfield" name="dob"
                                                value="{{ old('dob') }}">
                                            @error('dob')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Student country </label>
                                            <select class="form-control basic reqfield" id="country" name="country">
                                                <option value="">Select Country</option>
                                                <option data-countryCode="213" value="Algeria"
                                                    @if(old('country')=='Algeria' ) selected @endif>Algeria (+213)
                                                </option>
                                                <option data-countryCode="376" value="Andorra"
                                                    @if(old('country')=='Andorra' ) selected @endif>Andorra (+376)
                                                </option>
                                                <option data-countryCode="244" value="Angola"
                                                    @if(old('country')=='Angola' ) selected @endif>Angola (+244)
                                                </option>
                                                <option data-countryCode="1264" value="Anguilla"
                                                    @if(old('country')=='Anguilla' ) selected @endif>Anguilla (+1264)
                                                </option>
                                                <option data-countryCode="1268" value="Antigua & Barbuda"
                                                    @if(old('country')=='Antigua Barbuda' ) selected @endif>Antigua &
                                                    Barbuda (+1268)</option>
                                                <option data-countryCode="54" value="Argentina"
                                                    @if(old('country')=='Argentina' ) selected @endif>Argentina (+54)
                                                </option>
                                                <option data-countryCode="374" value="Armenia"
                                                    @if(old('country')=='Armenia' ) selected @endif>Armenia (+374)
                                                </option>
                                                <option data-countryCode="297" value="Aruba" @if(old('country')=='Aruba'
                                                    ) selected @endif>Aruba (+297)</option>
                                                <option data-countryCode="61" value="Australia"
                                                    @if(old('country')=='Australia' ) selected @endif>Australia (+61)
                                                </option>
                                                <option data-countryCode="43" value="Austria"
                                                    @if(old('country')=='Austria' ) selected @endif>Austria (+43)
                                                </option>
                                                <option data-countryCode="994" value="Azerbaijan"
                                                    @if(old('country')=='Azerbaijan' ) selected @endif>Azerbaijan (+994)
                                                </option>
                                                <option data-countryCode="1242" value="Bahamas"
                                                    @if(old('country')=='Bahamas' ) selected @endif>Bahamas (+1242)
                                                </option>
                                                <option data-countryCode="973" value="Bahrain"
                                                    @if(old('country')=='Bahrain' ) selected @endif>Bahrain (+973)
                                                </option>
                                                <option data-countryCode="880" value="Bangladesh"
                                                    @if(old('country')=='Bangladesh' ) selected @endif>Bangladesh (+880)
                                                </option>
                                                <option data-countryCode="1246" value="Barbados"
                                                    @if(old('country')=='Barbados' ) selected @endif>Barbados (+1246)
                                                </option>
                                                <option data-countryCode="375" value="Belarus"
                                                    @if(old('country')=='Belarus' ) selected @endif>Belarus (+375)
                                                </option>
                                                <option data-countryCode="32" value="Belgium"
                                                    @if(old('country')=='Belgium' ) selected @endif>Belgium (+32)
                                                </option>
                                                <option data-countryCode="501" value="Belize"
                                                    @if(old('country')=='Belize' ) selected @endif>Belize (+501)
                                                </option>
                                                <option data-countryCode="229" value="Benin" @if(old('country')=='Benin'
                                                    ) selected @endif>Benin (+229)</option>
                                                <option data-countryCode="1441" value="Bermuda"
                                                    @if(old('country')=='Bermuda' ) selected @endif>Bermuda (+1441)
                                                </option>
                                                <option data-countryCode="975" value="Bhutan"
                                                    @if(old('country')=='Bhutan' ) selected @endif>Bhutan (+975)
                                                </option>
                                                <option data-countryCode="591" value="Bolivia"
                                                    @if(old('country')=='Bolivia' ) selected @endif>Bolivia (+591)
                                                </option>
                                                <option data-countryCode="387" value="Bosnia Herzegovina"
                                                    @if(old('country')=='Bosnia Herzegovina' ) selected @endif>Bosnia
                                                    Herzegovina (+387)</option>
                                                <option data-countryCode="267" value="Botswana"
                                                    @if(old('country')=='Botswana' ) selected @endif>Botswana (+267)
                                                </option>
                                                <option data-countryCode="55" value="Brazil"
                                                    @if(old('country')=='Brazil' ) selected @endif>Brazil (+55)</option>
                                                <option data-countryCode="673" value="Brunei"
                                                    @if(old('country')=='Brunei' ) selected @endif>Brunei (+673)
                                                </option>
                                                <option data-countryCode="359" value="Bulgaria"
                                                    @if(old('country')=='Bulgaria' ) selected @endif>Bulgaria (+359)
                                                </option>
                                                <option data-countryCode="226" value="Bulgaria"
                                                    @if(old('country')=='Bulgaria' ) selected @endif>Bulgaria (+226)
                                                </option>
                                                <option data-countryCode="257" value="Burundi"
                                                    @if(old('country')=='Burundi' ) selected @endif>Burundi (+257)
                                                </option>

                                                <option data-countryCode="855" value="Cambodia"
                                                    @if(old('country')=='Cambodia' ) selected @endif>Cambodia (+855)
                                                </option>
                                                <option data-countryCode="237" value="Cameroon"
                                                    @if(old('country')=='Cameroon' ) selected @endif>Cameroon (+237)
                                                </option>
                                                <option data-countryCode="1" value="Canada" @if(old('country')=='Canada'
                                                    ) selected @endif>Canada (+1)</option>
                                                <option data-countryCode="238" value="Cape Verde Islands"
                                                    @if(old('country')=='Cape Verde Islands' ) selected @endif>Cape
                                                    Verde Islands (+238)</option>
                                                <option data-countryCode="1345" value="Cayman Islands"
                                                    @if(old('country')=='Cayman Islands' ) selected @endif>Cayman
                                                    Islands (+1345)</option>
                                                <option data-countryCode="236" value="Central African Republic"
                                                    @if(old('country')=='Central African Republic' ) selected @endif>
                                                    Central African Republic (+236)</option>
                                                <option data-countryCode="56" value="Chile" @if(old('country')=='Chile'
                                                    ) selected @endif>Chile (+56)</option>
                                                <option data-countryCode="86" value="China" @if(old('country')=='China'
                                                    ) selected @endif>China (+86)</option>
                                                <option data-countryCode="57" value="Colombia"
                                                    @if(old('country')=='Colombia' ) selected @endif>Colombia (+57)
                                                </option>
                                                <option data-countryCode="269" value="Comoros"
                                                    @if(old('country')=='Comoros' ) selected @endif>Comoros (+269)
                                                </option>
                                                <option data-countryCode="242" value="Congo" @if(old('country')=='Congo'
                                                    ) selected @endif>Congo (+242)</option>
                                                <option data-countryCode="682" value="Cook Islands"
                                                    @if(old('country')=='Cook Islands' ) selected @endif>Cook Islands
                                                    (+682)</option>
                                                <option data-countryCode="506" value="Costa Rica"
                                                    @if(old('country')=='Costa Rica' ) selected @endif>Costa Rica (+506)
                                                </option>
                                                <option data-countryCode="385" value="Croatia"
                                                    @if(old('country')=='Croatia' ) selected @endif>Croatia (+385)
                                                </option>
                                                <option data-countryCode="53" value="Cuba" @if(old('country')=='Cuba' )
                                                    selected @endif>Cuba (+53)</option>
                                                <option data-countryCode="90392" value="Cyprus North"
                                                    @if(old('country')=='Cyprus North' ) selected @endif>Cyprus North
                                                    (+90392)</option>
                                                <option data-countryCode="357" value="Cyprus South"
                                                    @if(old('country')=='Cyprus South' ) selected @endif>Cyprus South
                                                    (+357)</option>
                                                <option data-countryCode="42" value="Czech Republic"
                                                    @if(old('country')=='Czech Republic' ) selected @endif>Czech
                                                    Republic (+42)</option>
                                                <option data-countryCode="45" value="Denmark"
                                                    @if(old('country')=='Denmark' ) selected @endif>Denmark (+45)
                                                </option>
                                                <option data-countryCode="253" value="Djibouti"
                                                    @if(old('country')=='Djibouti' ) selected @endif>Djibouti (+253)
                                                </option>
                                                <option data-countryCode="1809" value="Dominica"
                                                    @if(old('country')=='Dominica' ) selected @endif>Dominica (+1809)
                                                </option>
                                                <option data-countryCode="1809" value="Dominican Republic"
                                                    @if(old('country')=='Dominican Republic' ) selected @endif>Dominican
                                                    Republic (+1809)</option>
                                                <option data-countryCode="593" value="Ecuador"
                                                    @if(old('country')=='Ecuador' ) selected @endif>Ecuador (+593)
                                                </option>
                                                <option data-countryCode="20" value="Egypt" @if(old('country')=='Egypt'
                                                    ) selected @endif>Egypt (+20)</option>
                                                <option data-countryCode="503" value="El Salvador"
                                                    @if(old('country')=='El Salvador' ) selected @endif>El Salvador
                                                    (+503)</option>
                                                <option data-countryCode="240" value="Equatorial Guinea"
                                                    @if(old('country')=='Equatorial Guinea' ) selected @endif>Equatorial
                                                    Guinea (+240)</option>
                                                <option data-countryCode="291" value="Eritrea"
                                                    @if(old('country')=='Eritrea' ) selected @endif>Eritrea (+291)
                                                </option>
                                                <option data-countryCode="372" value="Estonia"
                                                    @if(old('country')=='Estonia' ) selected @endif>Estonia (+372)
                                                </option>
                                                <option data-countryCode="251" value="Ethiopia"
                                                    @if(old('country')=='Ethiopia' ) selected @endif>Ethiopia (+251)
                                                </option>
                                                <option data-countryCode="500" value="Falkland Islands"
                                                    @if(old('country')=='Falkland Islands' ) selected @endif>Falkland
                                                    Islands (+500)</option>
                                                <option data-countryCode="298" value="Faroe Islands"
                                                    @if(old('country')=='Faroe Islands' ) selected @endif>Faroe Islands
                                                    (+298)</option>
                                                <option data-countryCode="679" value="Fiji" @if(old('country')=='Fiji' )
                                                    selected @endif>Fiji (+679)</option>
                                                <option data-countryCode="358" value="Finland"
                                                    @if(old('country')=='Finland' ) selected @endif>Finland (+358)
                                                </option>
                                                <option data-countryCode="33" value="France"
                                                    @if(old('country')=='France' ) selected @endif>France (+33)</option>
                                                <option data-countryCode="594" value="French Guiana"
                                                    @if(old('country')=='French Guiana' ) selected @endif>French Guiana
                                                    (+594)</option>
                                                <option data-countryCode="689" value="French Polynesia"
                                                    @if(old('country')=='French Polynesia' ) selected @endif>French
                                                    Polynesia (+689)</option>
                                                <option data-countryCode="241" value="Gabon" @if(old('country')=='Gabon'
                                                    ) selected @endif>Gabon (+241)</option>
                                                <option data-countryCode="220" value="Gambia"
                                                    @if(old('country')=='Gambia' ) selected @endif>Gambia (+220)
                                                </option>
                                                <option data-countryCode="7880" value="Georgia"
                                                    @if(old('country')=='Georgia' ) selected @endif>Georgia (+7880)
                                                </option>
                                                <option data-countryCode="49" value="Germany"
                                                    @if(old('country')=='Germany' ) selected @endif>Germany (+49)
                                                </option>
                                                <option data-countryCode="233" value="Ghana" @if(old('country')=='Ghana'
                                                    ) selected @endif>Ghana (+233)</option>
                                                <option data-countryCode="350" value="Gibraltar"
                                                    @if(old('country')=='Gibraltar' ) selected @endif>Gibraltar (+350)
                                                </option>
                                                <option data-countryCode="30" value="Greece"
                                                    @if(old('country')=='Greece' ) selected @endif>Greece (+30)</option>
                                                <option data-countryCode="299" value="Greenland"
                                                    @if(old('country')=='Greenland' ) selected @endif>Greenland (+299)
                                                </option>
                                                <option data-countryCode="1473" value="Grenada"
                                                    @if(old('country')=='Grenada' ) selected @endif>Grenada (+1473)
                                                </option>
                                                <option data-countryCode="590" value="Guadeloupe"
                                                    @if(old('country')=='Guadeloupe' ) selected @endif>Guadeloupe (+590)
                                                </option>
                                                <option data-countryCode="671" value="Guam" @if(old('country')=='Guam' )
                                                    selected @endif>Guam (+671)</option>
                                                <option data-countryCode="502" value="Guatemala"
                                                    @if(old('country')=='Guatemala' ) selected @endif>Guatemala (+502)
                                                </option>
                                                <option data-countryCode="224" value="Guinea"
                                                    @if(old('country')=='Guinea' ) selected @endif>Guinea (+224)
                                                </option>
                                                <option data-countryCode="245" value="Guinea"
                                                    @if(old('country')=='Guinea' ) selected @endif>Guinea - Bissau
                                                    (+245)</option>
                                                <option data-countryCode="592" value="Guyana"
                                                    @if(old('country')=='Guyana' ) selected @endif>Guyana (+592)
                                                </option>
                                                <option data-countryCode="509" value="Haiti" @if(old('country')=='Haiti'
                                                    ) selected @endif>Haiti (+509)</option>
                                                <option data-countryCode="504" value="Honduras"
                                                    @if(old('country')=='Honduras' ) selected @endif>Honduras (+504)
                                                </option>
                                                <option data-countryCode="852" value="Hong Kong"
                                                    @if(old('country')=='Hong Kong' ) selected @endif>Hong Kong (+852)
                                                </option>
                                                <option data-countryCode="36" value="Hungary"
                                                    @if(old('country')=='Hungary' ) selected @endif>Hungary (+36)
                                                </option>
                                                <option data-countryCode="354" value="Iceland"
                                                    @if(old('country')=='Iceland' ) selected @endif>Iceland (+354)
                                                </option>
                                                <option data-countryCode="91" value="India" @if(old('country')=='India'
                                                    ) selected @endif>India (+91)</option>
                                                <option data-countryCode="62" value="Indonesia"
                                                    @if(old('country')=='Indonesia' ) selected @endif>Indonesia (+62)
                                                </option>
                                                <option data-countryCode="98" value="Iran" @if(old('country')=='Iran' )
                                                    selected @endif>Iran (+98)</option>
                                                <option data-countryCode="964" value="Iraq" @if(old('country')=='Iraq' )
                                                    selected @endif>Iraq (+964)</option>
                                                <option data-countryCode="353" value="Ireland"
                                                    @if(old('country')=='Ireland' ) selected @endif>Ireland (+353)
                                                </option>
                                                <option data-countryCode="972" value="Israel"
                                                    @if(old('country')=='Israel' ) selected @endif>Israel (+972)
                                                </option>
                                                <option data-countryCode="39" value="Italy" @if(old('country')=='Italy'
                                                    ) selected @endif>Italy (+39)</option>
                                                <option data-countryCode="1876" value="Jamaica"
                                                    @if(old('country')=='Jamaica' ) selected @endif>Jamaica (+1876)
                                                </option>
                                                <option data-countryCode="81" value="Japan" @if(old('country')=='Japan'
                                                    ) selected @endif>Japan (+81)</option>
                                                <option data-countryCode="962" value="Jordan"
                                                    @if(old('country')=='Jordan' ) selected @endif>Jordan (+962)
                                                </option>
                                                <option data-countryCode="7" value="Kazakhstan"
                                                    @if(old('country')=='Kazakhstan' ) selected @endif>Kazakhstan (+7)
                                                </option>
                                                <option data-countryCode="254" value="Kenya" @if(old('country')=='Kenya'
                                                    ) selected @endif>Kenya (+254)</option>
                                                <option data-countryCode="686" value="Kiribati"
                                                    @if(old('country')=='Kiribati' ) selected @endif>Kiribati (+686)
                                                </option>
                                                <option data-countryCode="850" value="Korea North"
                                                    @if(old('country')=='Korea North' ) selected @endif>Korea North
                                                    (+850)</option>
                                                <option data-countryCode="82" value="Korea South"
                                                    @if(old('country')=='Korea South' ) selected @endif>Korea South
                                                    (+82)</option>
                                                <option data-countryCode="965" value="Kuwait"
                                                    @if(old('country')=='Kuwait' ) selected @endif>Kuwait (+965)
                                                </option>
                                                <option data-countryCode="996" value="Kyrgyzstan"
                                                    @if(old('country')=='Kyrgyzstan' ) selected @endif>Kyrgyzstan (+996)
                                                </option>
                                                <option data-countryCode="856" value="Laos" @if(old('country')=='Laos' )
                                                    selected @endif>Laos (+856)</option>
                                                <option data-countryCode="371" value="Latvia"
                                                    @if(old('country')=='Latvia' ) selected @endif>Latvia (+371)
                                                </option>
                                                <option data-countryCode="961" value="Lebanon"
                                                    @if(old('country')=='Lebanon' ) selected @endif>Lebanon (+961)
                                                </option>
                                                <option data-countryCode="266" value="Lesotho"
                                                    @if(old('country')=='Lesotho' ) selected @endif>Lesotho (+266)
                                                </option>
                                                <option data-countryCode="231" value="Liberia"
                                                    @if(old('country')=='Liberia' ) selected @endif>Liberia (+231)
                                                </option>
                                                <option data-countryCode="218" value="Libya" @if(old('country')=='Libya'
                                                    ) selected @endif>Libya (+218)</option>
                                                <option data-countryCode="417" value="Liechtenstein"
                                                    @if(old('country')=='Liechtenstein' ) selected @endif>Liechtenstein
                                                    (+417)</option>
                                                <option data-countryCode="370" value="Lithuania"
                                                    @if(old('country')=='Lithuania' ) selected @endif>Lithuania (+370)
                                                </option>
                                                <option data-countryCode="352" value="Luxembourg"
                                                    @if(old('country')=='Luxembourg' ) selected @endif>Luxembourg (+352)
                                                </option>
                                                <option data-countryCode="853" value="Macao" @if(old('country')=='Macao'
                                                    ) selected @endif>Macao (+853)</option>
                                                <option data-countryCode="389" value="Macedonia"
                                                    @if(old('country')=='Macedonia' ) selected @endif>Macedonia (+389)
                                                </option>
                                                <option data-countryCode="261" value="Madagascar"
                                                    @if(old('country')=='Madagascar' ) selected @endif>Madagascar (+261)
                                                </option>
                                                <option data-countryCode="265" value="Malawi"
                                                    @if(old('country')=='Malawi' ) selected @endif>Malawi (+265)
                                                </option>
                                                <option data-countryCode="60" value="Malaysia"
                                                    @if(old('country')=='Malaysia' ) selected @endif>Malaysia (+60)
                                                </option>
                                                <option data-countryCode="960" value="Maldives"
                                                    @if(old('country')=='Maldives' ) selected @endif>Maldives (+960)
                                                </option>
                                                <option data-countryCode="223" value="Mali" @if(old('country')=='Mali' )
                                                    selected @endif>Mali (+223)</option>
                                                <option data-countryCode="356" value="Malta" @if(old('country')=='Malta'
                                                    ) selected @endif>Malta (+356)</option>
                                                <option data-countryCode="692" value="Marshall Islands"
                                                    @if(old('country')=='Marshall Islands' ) selected @endif>Marshall
                                                    Islands (+692)</option>
                                                <option data-countryCode="596" value="Martinique"
                                                    @if(old('country')=='Martinique' ) selected @endif>Martinique (+596)
                                                </option>
                                                <option data-countryCode="222" value="Mauritania"
                                                    @if(old('country')=='Mauritania' ) selected @endif>Mauritania (+222)
                                                </option>
                                                <option data-countryCode="263" value="Mayotte"
                                                    @if(old('country')=='Mayotte' ) selected @endif>Mayotte (+269)
                                                </option>
                                                <option data-countryCode="52" value="Mexico"
                                                    @if(old('country')=='Mexico' ) selected @endif>Mexico (+52)</option>
                                                <option data-countryCode="691" value="Micronesia"
                                                    @if(old('country')=='Micronesia' ) selected @endif>Micronesia (+691)
                                                </option>
                                                <option data-countryCode="373" value="Moldova"
                                                    @if(old('country')=='Moldova' ) selected @endif>Moldova (+373)
                                                </option>
                                                <option data-countryCode="377" value="Monaco"
                                                    @if(old('country')=='Monaco' ) selected @endif>Monaco (+377)
                                                </option>
                                                <option data-countryCode="976" value="Mongolia"
                                                    @if(old('country')=='Mongolia' ) selected @endif>Mongolia (+976)
                                                </option>
                                                <option data-countryCode="1664" value="Montserrat"
                                                    @if(old('country')=='Montserrat' ) selected @endif>Montserrat
                                                    (+1664)</option>
                                                <option data-countryCode="212" value="Morocco"
                                                    @if(old('country')=='Morocco' ) selected @endif>Morocco (+212)
                                                </option>
                                                <option data-countryCode="258" value="Mozambique"
                                                    @if(old('country')=='Mozambique' ) selected @endif>Mozambique (+258)
                                                </option>
                                                <option data-countryCode="95" value="Myanmar"
                                                    @if(old('country')=='Myanmar' ) selected @endif>Myanmar (+95)
                                                </option>
                                                <option data-countryCode="264" value="Namibia"
                                                    @if(old('country')=='Namibia' ) selected @endif>Namibia (+264)
                                                </option>
                                                <option data-countryCode="674" value="Nauru" @if(old('country')=='Nauru'
                                                    ) selected @endif>Nauru (+674)</option>
                                                <option data-countryCode="977" value="Nepal" @if(old('country')=='Nepal'
                                                    ) selected @endif>Nepal (+977)</option>
                                                <option data-countryCode="31" value="Netherlands"
                                                    @if(old('country')=='Netherlands' ) selected @endif>Netherlands
                                                    (+31)</option>
                                                <option data-countryCode="687" value="New Caledonia"
                                                    @if(old('country')=='New Caledonia' ) selected @endif>New Caledonia
                                                    (+687)</option>
                                                <option data-countryCode="64" value="New Zealand"
                                                    @if(old('country')=='New Zealand' ) selected @endif>New Zealand
                                                    (+64)</option>
                                                <option data-countryCode="505" value="Nicaragua"
                                                    @if(old('country')=='Nicaragua' ) selected @endif>Nicaragua (+505)
                                                </option>
                                                <option data-countryCode="227" value="Niger" @if(old('country')=='Niger'
                                                    ) selected @endif>Niger (+227)</option>
                                                <option data-countryCode="234" value="Nigeria"
                                                    @if(old('country')=='Nigeria' ) selected @endif>Nigeria (+234)
                                                </option>
                                                <option data-countryCode="683" value="Niue" @if(old('country')=='Niue' )
                                                    selected @endif>Niue (+683)</option>
                                                <option data-countryCode="672" value="Norfolk Islands"
                                                    @if(old('country')=='Norfolk Islands' ) selected @endif>Norfolk
                                                    Islands (+672)</option>
                                                <option data-countryCode="670" value="Northern Marianas"
                                                    @if(old('country')=='Northern Marianas' ) selected @endif>Northern
                                                    Marianas (+670)</option>
                                                <option data-countryCode="47" value="Norway"
                                                    @if(old('country')=='Norway' ) selected @endif>Norway (+47)</option>
                                                <option data-countryCode="968" value="Oman" @if(old('country')=='Oman' )
                                                    selected @endif>Oman (+968)</option>
                                                <option data-countryCode="680" value="Palau" @if(old('country')=='Palau'
                                                    ) selected @endif>Palau (+680)</option>
                                                <option data-countryCode="507" value="Panama"
                                                    @if(old('country')=='Panama' ) selected @endif>Panama (+507)
                                                </option>
                                                <option data-countryCode="675" value="Papua New Guinea"
                                                    @if(old('country')=='Papua New Guinea' ) selected @endif>Papua New
                                                    Guinea (+675)</option>
                                                <option data-countryCode="595" value="Paraguay"
                                                    @if(old('country')=='Paraguay' ) selected @endif>Paraguay (+595)
                                                </option>
                                                <option data-countryCode="51" value="Peru" @if(old('country')=='Peru' )
                                                    selected @endif>Peru (+51)</option>
                                                <option data-countryCode="63" value="Philippines"
                                                    @if(old('country')=='Philippines' ) selected @endif>Philippines
                                                    (+63)</option>
                                                <option data-countryCode="48" value="Poland"
                                                    @if(old('country')=='Poland' ) selected @endif>Poland (+48)</option>
                                                <option data-countryCode="351" value="Portugal"
                                                    @if(old('country')=='Portugal' ) selected @endif>Portugal (+351)
                                                </option>
                                                <option data-countryCode="1787" value="Puerto Rico"
                                                    @if(old('country')=='Puerto Rico' ) selected @endif>Puerto Rico
                                                    (+1787)</option>
                                                <option data-countryCode="974" value="Qatar" @if(old('country')=='Qatar'
                                                    ) selected @endif>Qatar (+974)</option>
                                                <option data-countryCode="262" value="Reunion"
                                                    @if(old('country')=='Reunion' ) selected @endif>Reunion (+262)
                                                </option>
                                                <option data-countryCode="40" value="Romania"
                                                    @if(old('country')=='Romania' ) selected @endif>Romania (+40)
                                                </option>
                                                <option data-countryCode="7" value="Russia" @if(old('country')=='Russia'
                                                    ) selected @endif>Russia (+7)</option>
                                                <option data-countryCode="250" value="Rwanda"
                                                    @if(old('country')=='Rwanda' ) selected @endif>Rwanda (+250)
                                                </option>
                                                <option data-countryCode="378" value="San Marino"
                                                    @if(old('country')=='San Marino' ) selected @endif>San Marino (+378)
                                                </option>
                                                <option data-countryCode="239" value="Sao Tome"
                                                    @if(old('country')=='Sao Tome' ) selected @endif>Sao Tome &amp;
                                                    Principe (+239)</option>
                                                <option data-countryCode="966" value="Saudi Arabia"
                                                    @if(old('country')=='Saudi Arabia' ) selected @endif>Saudi Arabia
                                                    (+966)</option>
                                                <option data-countryCode="221" value="Senegal"
                                                    @if(old('country')=='Senegal' ) selected @endif>Senegal (+221)
                                                </option>
                                                <option data-countryCode="381" value="Serbia"
                                                    @if(old('country')=='Serbia' ) selected @endif>Serbia (+381)
                                                </option>
                                                <option data-countryCode="248" value="Seychelles"
                                                    @if(old('country')=='Seychelles' ) selected @endif>Seychelles (+248)
                                                </option>
                                                <option data-countryCode="232" value="Sierra Leone"
                                                    @if(old('country')=='Sierra Leone' ) selected @endif>Sierra Leone
                                                    (+232)</option>
                                                <option data-countryCode="65" value="Singapore"
                                                    @if(old('country')=='Singapore' ) selected @endif>Singapore (+65)
                                                </option>
                                                <option data-countryCode="421" value="Slovak Republic"
                                                    @if(old('country')=='Slovak Republic' ) selected @endif>Slovak
                                                    Republic (+421)</option>
                                                <option data-countryCode="386" value="Slovenia"
                                                    @if(old('country')=='Slovenia' ) selected @endif>Slovenia (+386)
                                                </option>

                                                <option data-countryCode="677" value="Solomon Islands"
                                                    @if(old('country')=='Solomon Islands' ) selected @endif>Solomon
                                                    Islands (+677)</option>
                                                <option data-countryCode="252" value="Somalia"
                                                    @if(old('country')=='Somalia' ) selected @endif>Somalia (+252)
                                                </option>
                                                <option data-countryCode="27" value="South Africa"
                                                    @if(old('country')=='South Africa' ) selected @endif>South Africa
                                                    (+27)</option>
                                                <option data-countryCode="34" value="Spain" @if(old('country')=='Spain'
                                                    ) selected @endif>Spain (+34)</option>
                                                <option data-countryCode="94" value="Sri Lanka"
                                                    @if(old('country')=='Sri Lanka' ) selected @endif>Sri Lanka (+94)
                                                </option>
                                                <option data-countryCode="290" value="St. Helena"
                                                    @if(old('country')=='St. Helena' ) selected @endif>St. Helena (+290)
                                                </option>
                                                <option data-countryCode="1869" value="St. Kitts"
                                                    @if(old('country')=='St. Kitts' ) selected @endif>St. Kitts (+1869)
                                                </option>
                                                <option data-countryCode="1758" value="St. Lucia"
                                                    @if(old('country')=='St. Lucia' ) selected @endif>St. Lucia (+1758)
                                                </option>
                                                <option data-countryCode="249" value="Sudan" @if(old('country')=='Sudan'
                                                    ) selected @endif>Sudan (+249)</option>
                                                <option data-countryCode="597" value="Suriname"
                                                    @if(old('country')=='Suriname' ) selected @endif>Suriname (+597)
                                                </option>
                                                <option data-countryCode="268" value="Swaziland"
                                                    @if(old('country')=='Swaziland' ) selected @endif>Swaziland (+268)
                                                </option>
                                                <option data-countryCode="46" value="Sweden"
                                                    @if(old('country')=='Sweden' ) selected @endif>Sweden (+46)</option>
                                                <option data-countryCode="41" value="Switzerland"
                                                    @if(old('country')=='Switzerland' ) selected @endif>Switzerland
                                                    (+41)</option>
                                                <option data-countryCode="963" value="Syria" @if(old('country')=='Syria'
                                                    ) selected @endif>Syria (+963)</option>
                                                <option data-countryCode="886" value="Taiwan"
                                                    @if(old('country')=='Taiwan' ) selected @endif>Taiwan (+886)
                                                </option>
                                                <option data-countryCode="7" value="Tajikstan"
                                                    @if(old('country')=='Tajikstan' ) selected @endif>Tajikstan (+7)
                                                </option>
                                                <option data-countryCode="66" value="Thailand"
                                                    @if(old('country')=='Thailand' ) selected @endif>Thailand (+66)
                                                </option>
                                                <option data-countryCode="228" value="Togo" @if(old('country')=='Togo' )
                                                    selected @endif>Togo (+228)</option>
                                                <option data-countryCode="676" value="Tonga" @if(old('country')=='Tonga'
                                                    ) selected @endif>Tonga (+676)</option>
                                                <option data-countryCode="1868" value="Trinidad & Tobago"
                                                    @if(old('country')=='Trinidad & Tobago' ) selected @endif>Trinidad &
                                                    Tobago (+1868)</option>
                                                <option data-countryCode="216" value="Tunisia"
                                                    @if(old('country')=='Tunisia' ) selected @endif>Tunisia (+216)
                                                </option>
                                                <option data-countryCode="90" value="Turkey"
                                                    @if(old('country')=='Turkey' ) selected @endif>Turkey (+90)</option>
                                                <option data-countryCode="7" value="Turkmenistan"
                                                    @if(old('country')=='Turkmenistan' ) selected @endif>Turkmenistan
                                                    (+7)</option>
                                                <option data-countryCode="993" value="Turkmenistan"
                                                    @if(old('country')=='Turkmenistan' ) selected @endif>Turkmenistan
                                                    (+993)</option>
                                                <option data-countryCode="1649" value="Turks"
                                                    @if(old('country')=='Turks' ) selected @endif>Turks & Caicos Islands
                                                    (+1649)</option>
                                                <option data-countryCode="688" value="Tuvalu"
                                                    @if(old('country')=='Tuvalu' ) selected @endif>Tuvalu (+688)
                                                </option>
                                                <option data-countryCode="256" value="Uganda "
                                                    @if(old('country')=='Uganda' ) selected @endif>Uganda (+256)
                                                </option>
                                                <option data-countryCode="44" value="UK" @if(old('country')=='UK' )
                                                    selected @endif>UK (+44)</option>
                                                <option data-countryCode="380" value="Ukraine"
                                                    @if(old('country')=='Ukraine' ) selected @endif>Ukraine (+380)
                                                </option>
                                                <option data-countryCode="971" value="United Arab Emirates"
                                                    @if(old('country')=='United Arab Emirates' ) selected @endif>United
                                                    Arab Emirates (+971)</option>
                                                <option data-countryCode="598" value="Uruguay"
                                                    @if(old('country')=='Uruguay' ) selected @endif>Uruguay (+598)
                                                </option>
                                                <option data-countryCode="1" value="USA" @if(old('country')=='USA' )
                                                    selected @endif>USA (+1)</option>
                                                <option data-countryCode="7" value="Uzbekistan"
                                                    @if(old('country')=='Uzbekistan' ) selected @endif>Uzbekistan (+7)
                                                </option>
                                                <option data-countryCode="678" value="Vanuatu"
                                                    @if(old('country')=='Vanuatu' ) selected @endif>Vanuatu (+678)
                                                </option>
                                                <option data-countryCode="379" value="Vatican City"
                                                    @if(old('country')=='Vatican City' ) selected @endif>Vatican City
                                                    (+379)</option>
                                                <option data-countryCode="58" value="Venezuela"
                                                    @if(old('country')=='Venezuela' ) selected @endif>Venezuela (+58)
                                                </option>
                                                <option data-countryCode="84" value="Vietnam"
                                                    @if(old('country')=='Vietnam' ) selected @endif>Vietnam (+84)
                                                </option>
                                                <option data-countryCode="1284" value="Virgin Islands"
                                                    @if(old('country')=='Virgin Islands' ) selected @endif>Virgin
                                                    Islands - British (+1284)</option>
                                                <option data-countryCode="1340" value="Virgin Islands"
                                                    @if(old('country')=='Virgin Islands' ) selected @endif>Virgin
                                                    Islands - US (+1340)</option>
                                                <option data-countryCode="681" value="Wallis & Futuna"
                                                    @if(old('country')=='Wallis & Futuna' ) selected @endif>Wallis &
                                                    Futuna (+681)</option>
                                                <option data-countryCode="969" value="Yemen (North)"
                                                    @if(old('country')=='Yemen (North)' ) selected @endif>Yemen (North)
                                                    (+969)</option>


                                                <option data-countryCode="967" value="Yemen (South)"
                                                    @if(old('country')=='Yemen (South)' ) selected @endif>Yemen
                                                    (South)(+967)</option>


                                                <option data-countryCode="260" value="Zambia"
                                                    @if(old('country')=='Zambia' ) selected @endif>Zambia (+260)
                                                </option>
                                                <option data-countryCode="263" value="Zimbabwe"
                                                    @if(old('country')=='Zimbabwe' ) selected @endif>Zimbabwe (+263)
                                                </option>

                                            </select>
                                            @error('country')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Mobile Number</label>
                                            <table border="0" cellpadding="0" cellspacing="0" class="groupfields">
                                                <tbody>
                                                    <tr>
                                                        <td style="padding-right:5px;">
                                                            <input type="text" class="form-control" id="code"
                                                                placeholder="+91" required="" name="pre" value=""
                                                                readonly="">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control reqfield"
                                                                id="stuMobile" name="mobile"
                                                                style="width: 320px !important;"
                                                                value="{{ old('mobile') }}">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            @error('mobile')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Passport No</label>
                                            <input type="text" class="form-control" id="stuPassport" name="passport"
                                                value="{{ old('passport') }}">
                                            @error('passport')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">City </label>
                                            <input type="text" class="form-control reqfield" id="stuCity" name="city"
                                                value="{{ old('city') }}">
                                            @error('city')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for "validationCustom02">Contact Address</label>
                                            <input type="text" class="form-control" id="stuAddress"
                                                name="student_address" value="{{ old('student_address') }}">
                                            @error('student_address')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>

                                    {{--

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Active status</label>
                                            <select class="form-control basic reqfield" id="stuStatus" name="status">
                                                <option value="">Select Status</option>
                                                <option value="1" @if(old('status', $student->active_status) == 1)
                                                    selected @endif>Active
                                                </option>
                                                <option value="0" @if(old('status', $student->active_status) == 0)
                                                    selected @endif>Deactive
                                                </option>
                                            </select>
                                            @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>



                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Change Password </label>
                                            <input type="password" class="form-control reqfield" name="password">
                                            @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Confirm password </label>
                                            <input type="password" class="form-control reqfield"
                                                name="confirm_password">
                                            @error('confirm_password')<span class="text-danger">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>
                                    --}}

                                    <hr>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">Change student Photo</label>
                                            <input type="file" id="stuPhoto" name="student_photo" class="form-control">
                                            @error('student_photo')<span class="text-danger"
                                                style="margin-left: 31%;">{{
                                                $message
                                                }}</span>@enderror

                                            <img id="Supdatephoto" alt="Preview"
                                                style="max-width: 300px; max-height: 100px; ">
                                        </div>
                                    </div>

                                </div>

                                <input name="id" type="hidden" id="id" value="{{ old('id') }}">


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
            <!---end of the student info model--->

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
            $('#Stuphoto').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#Supdatephoto').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
      // end of the section

    
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

        //this is for instant image showing for ptofile
            $(document).ready(function(){
                $('#Cphoto').change(function(e){
                    let reader = new FileReader();
                    reader.onload = function(e){
                        $('#Cupdatephoto').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });
        // end of the section

     //this is for instant image showing for ptofile
     $(document).ready(function(){
            $('#logo').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#updatelogo').attr('src',e.target.result);
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
      
    

      @if($errors->has('Course_name') || $errors->has('course') || $errors->has('period') || $errors->has('arabic_name') || $errors->has('arabic_course')||$errors->has('arabic_period')||$errors->has('start_date')
          || $errors->has('start_date2')||$errors->has('category')||$errors->has('details')||$errors->has('arabic_details')||$errors->has('fees')||$errors->has('degree')||$errors->has('Course_photo')||$errors->has('multi_image'))
        $('#CourseEditeModel').modal('show');
      @endif
      
      @if($errors->has('name') || $errors->has('email') || $errors->has('u_number') || $errors->has('ex_number') || $errors->has('ex_email')||$errors->has('address')||$errors->has('remarks')
          || $errors->has('campus_name')||$errors->has('arabic_name')||$errors->has('arabic_address')||$errors->has('arabic_remarks')||$errors->has('logo')||$errors->has('photo'))
        $('.UniEditeModel').modal('show');
      @endif

      @if($errors->has('student_name') || $errors->has('student_email') || $errors->has('dob') || $errors->has('country') || $errors->has('city')||$errors->has('student_address')||$errors->has('mobile')
          || $errors->has('student_photo'))
        $('.StudentEditeModel').modal('show');
      @endif

    
    //this is for for edite section of country 
    $(document).ready(function(){
        var selectedOption = $("select[name=country] option:selected");
        $('input#code').val('+' + selectedOption.attr('data-countryCode'));
    });

    $("select[name=country]" ).change(function() {
                  $('input#code').val('+'+$(this).find(':selected').attr('data-countryCode'));
    });
    //this is for student edite model section 
    $(document).ready(function() {
    $('#UniEditeBtn').on('click', function(e) {
        $('.UniEditeModel').modal('show');
    });
    });


      $(function() {
          $(window).scroll(function(){
              if($(this).scrollTop() > 43) {
                  $('.querystatustabmain').addClass('querystatustabmainstikey');
              } else {
          $('.querystatustabmain').removeClass('querystatustabmainstikey');
          }
          });
      }); 


       //delete part model
       $(document).ready(function() { 
        $(".course-delete-confirm").on('click', function() {
          
          let id = $(this).attr("data-id");

          $('.course-delete-model').modal('show');
          $(".del").attr("href", id)
        });
      });

      //delete part for payment

      $(document).ready(function() { 
        $(".payment-delete-confirm").on('click', function() {
          
          let id = $(this).attr("data-id");

          $('.payment-delete-model').modal('show');
          $(".del2").attr("href", id)
        });
      });


      


      ///this is model open for course edite 

      $('#courseAddBtn').on('click', function() {
        // Get the form element by its ID
          var form = document.getElementById('courseForm');
          
          // Reset the form
          form.reset();
          $('.text-danger').html(''); 
          $('#preview_img').empty();
          var imageUrl = "{{ asset('assets/assets/img/NoBg.jpeg') }}";
          $('#Cupdatephoto').attr('src', imageUrl);

          $('#CourseEditeModel').modal('show');
      });

      //end of the model for course edite



      ///this is the edite information entry part for course

      $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

      //ajax request for get the data 
      $(document).ready(function() {
          $('.courseEdite').on('click', function(e) {
              e.preventDefault();

              // Get the record ID from the data-id attribute
              var recordId = $(this).data('id');

            //   alert(recordId);

            //   $('#CourseEditeModel').modal('show');
             
              $.ajax({
                  url: "{{ route('uni.course.record', ['id' => 'RECORDID']) }}".replace('RECORDID', recordId), // Replace with your actual URL
                  type: 'GET',
                   // Use the appropriate HTTP method
                  dataType: 'json', // Expect JSON response
                  success: function(response) {
                      if (response.success) {
                        $('.text-danger').html(''); 
                        $('#Cname').val(response.data.name);
                        $('#Ccourse').val(response.data.course);
                        $('#Cperiod').val(response.data.course_period);

                        $('#Carabic_name').val(response.data.ar_name);
                        $('#Carabic_course').val(response.data.ar_course);
                        $('#Carabic_period').val(response.data.ar_course_period);
                        $('#Cdegree').val(response.data.course_degree);

                        $('#Ccategory').val(response.data.category_id);

                        $('#Cstart_date').val(response.data.starting_date);
                        $('#Cstart_date2').val(response.data.starting_date2);
                        $('#Cfees').val(response.data.fess);
                        $('#Cdetails').val(response.data.detail);
                        $('#Carabic_details').val(response.data.ar_detail);
                        $('#EditeId').val(response.data.id);

                        var imageUrl = "{{ asset('uploads') }}/" + response.data.photo;
                        $('#Cupdatephoto').attr('src', imageUrl);


                        if(response && response.related_images && Array.isArray(response.related_images)) {
                                $('#preview_img').empty(); // Clear existing images

                                response.related_images.forEach(function(imageName) {
                                    var imageUrl = "{{ asset('uploads') }}/" + imageName;
                                    console.log(imageUrl); // Check if the constructed URL is correct
                                    $('#preview_img').append('<img class="rounded" alt="100x100" width="80" src="' + imageUrl + '">');
                                });
                        }



                        // if(response && response.data.related_image && Array.isArray(response.data.related_image)) {
                        //     $('#preview_img').empty(); // Clear existing images

                        //     response.data.related_image.forEach(function(imageName) {
                        //         var imageUrl = "{{ asset('uploads') }}/" + imageName;
                        //         $('#preview_img').append('<img class="rounded" alt="100x100" width="80" src="' + imageUrl + '">');
                        //     });
                        // }


                        $('#CourseEditeModel').modal('show');
                        
                          // Populate the form fields or display the fetched data as needed
                        //   console.log('Fetched data:', response.data);
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
      //end the ajax request


      //open the student edite model and ajax part
      $(document).ready(function() { 
        $(".studentEdite").on('click', function(e) {
            e.preventDefault();
            var recordId = $(this).data('id');


            //the ajax request for the get data
            $.ajax({
                  url: "{{ route('uni.student.record', ['id' => 'RECORDID']) }}".replace('RECORDID', recordId), // Replace with your actual URL
                  type: 'GET',
                   // Use the appropriate HTTP method
                  dataType: 'json', // Expect JSON response
                  success: function(response) {
                      if (response.success) {
                        
                        
                        $('#stuName').val(response.data.name);
                        $('#stuEmail').val(response.data.email);
                        $('#stuBrith').val(response.data.dob);
                        $('#country').val(response.data.country);
                        $('#code').val('+' + response.data.country_code);
                        $('#stuMobile').val(response.data.phone);
                        $('#stuPassport').val(response.data.passport_no);
                        $('#stuCity').val(response.data.city);
                        $('#stuAddress').val(response.data.address);
                        $('#id').val(response.data.id);

                        var imageUrl = "{{ asset('uploads') }}/" + response.data.photo;
                        $('#Supdatephoto').attr('src', imageUrl);


                        $('.StudentEditeModel').modal('show');
                        
                          // Populate the form fields or display the fetched data as needed
                        //   console.log('Fetched data:', response.data);
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
      //end of the edite model



      //this is for information set student on change of course

        $(document).ready(function() {
            $('#uni_degree').on('change', function() {
                var stateID = $(this).val();

                //alert(stateID);
                    ///alert(stateID);
                if(stateID) {
                    $.ajax({
                        url: "{{ url('/payment-student') }}",
                        type: "GET",
                        dataType: "json",
                        data: { id: stateID },
                        success:function(response) {

                            //alert(response);
                            //alert(response.data);
                            //alert(JSON.stringify(response.data));
                            $('#student_id').empty();
                            $('#student_id').append('<option value="" required="">Select Student</option>');
                            $.each(response.data, function($key , item){
                                $('#student_id').append('<option value="'+ item.id +'">'+ item.name +'</option>');
                            });
                        }
                    });
                }else{
                    $('#student_id').empty();
                }
            });
        });
        //this is for student information show 

        $(document).ready(function() {
            $('#stu_info').hide();
            $('#student_id').on('change', function() {
                var stateID = $(this).val();
            
                if(stateID) {
                    $.ajax({
                        url: "{{ url('/payment-info') }}",
                        type: "GET",
                        dataType: "json",
                        data: { id: stateID },
                        success:function(response) {
                            $('#stu_info').show();

                            $('#stu_di_payment').empty();
                            $('#stu_payment').empty();
                            $('#stu_commission').empty();
                            
                            $('#stu_name').empty();
                            $('#stu_email').empty();
                            $('#stu_mobile').empty();
                            $('#stu_city').empty();
                            $('#stu_country').empty();
                            $('#stu_passport').empty();
                            
                            $('#stu_di_payment').append(response.stu_payment);
                            $('#stu_payment').append(response.payment);
                            $('#stu_commission').append(response.stu_com);

                            //student info section 
                            $('#stu_name').append(response.student.name);
                            $('#stu_email').append(response.student.email);
                            $('#stu_mobile').append(response.student.phone);
                            $('#stu_city').append(response.student.city);
                            $('#stu_country').append(response.student.country);
                            $('#stu_passport').append(response.student.passport_no);

                            if( response.student.photo !== ''){

                            var imageUrl = "{{ asset('uploads') }}/" + response.student.photo;
                            $('#stu_photo').attr('src', imageUrl);
                            }
                        }
                    });
                }
            });
        });




       //this is for student information show update case 
        $(document).ready(function() { 
            $(".update-payments").on('click', function() {
            
            let stateID = $(this).attr("data-id");
            let type = $(this).attr("data-type");    
            if(stateID) {
                    $.ajax({
                        url: "{{ url('/update-payment-info') }}",
                        type: "GET",
                        dataType: "json",
                        data: { id: stateID, type:type },
                        success:function(response) {
                            $('#update_stu_info').show();

                            $('#update_stu_di_payment').empty();
                            $('#update_stu_payment').empty();
                            $('#update_stu_commission').empty();
                            
                            $('#update_stu_name').empty();
                            $('#update_stu_email').empty();
                            $('#update_stu_mobile').empty();
                            $('#update_stu_city').empty();
                            $('#update_stu_country').empty();
                            $('#update_stu_passport').empty();
                            
                            $('#update_stu_di_payment').append(response.stu_payment);
                            $('#update_stu_payment').append(response.payment);
                            $('#update_stu_commission').append(response.stu_com);

                            //student info section 
                            $('#update_stu_name').append(response.student.name);
                            $('#update_stu_email').append(response.student.email);
                            $('#update_stu_mobile').append(response.student.phone);
                            $('#update_stu_city').append(response.student.city);
                            $('#update_stu_country').append(response.student.country);
                            $('#update_stu_passport').append(response.student.passport_no);

                            $('#update_type').val(response.data.type);
                            $('#update_amount').val(response.data.amount);
                            $('#payid').val(response.data.id);

                            if( response.student.photo !== ''){

                            var imageUrl = "{{ asset('uploads') }}/" + response.student.photo;
                            $('#update_stu_photo').attr('src', imageUrl);
                            }

                            $('.university-payment-Updatemodel').modal('show');
                        }
                    });
                }
 
            });
        });
        
       //end of the section 

        
        //this is for student information show for update 

        //this is information showing for udpate case
        
      
        //end of the update case


       

    </script>

</body>

</html>