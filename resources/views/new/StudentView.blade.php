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
  @else
  @php $activeTab = 1; @endphp
  @endif



  <!--main-->
  <div class="wrapper" style="margin-top: 56px;padding-left: 20px;">
    <div class="container-fluid" style="max-width: 100%;">
      <div class="main-content">

        <div class="page-content">
          <div class="newboxheading">
            <div class="newhead">Student : {{ $student->name }}
              <div class="newoptionmenu">
                <div>
                  <a id="StudentEditeBtn"><button type="button"
                      class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray"
                      style="margin-bottom:10px;">

                      <i class="fa fa-pencil" aria-hidden="true"></i> &nbsp;Edit</button></a>
                </div>


                <div>
                  <a><button type="button" class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray"
                      style="margin-bottom:10px;">

                      <i class="fa fa-calendar-check-o" aria-hidden="true"></i> &nbsp;Activity</button></a>
                </div>

                <div>
                  <a popaction="action=composemail&queryId=100004"><button type="button"
                      class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray"
                      style="margin-bottom:10px;">

                      <i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp;Email</button></a>
                </div>

                <div>
                  <a target="_blank"
                    href="https://api.whatsapp.com/send?text=Hi&phone=+{{ $student->country_code}}{{ $student->phone}}"><button
                      type="button" class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray"
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
                    <td colspan="2" align="left" valign="top"
                      style="background-color:#f5f7f9; border-bottom: 1px solid #cfd7df; padding:10px;">
                      <div style="font-size:11px; margin-bottom:10px;"><strong>Created:</strong> {{
                        $student->created_at->format('Y-m-d h:i A') }} |
                        &nbsp; <strong>Last Updated: {{ $student->updated_at->format('Y-m-d h:i A') }}</strong><strong
                          style="color:#CC0000;"><a
                            href="display.html?ga=query&amp;view=1&amp;id=100006&amp;c=3"></a></strong></div>

                      <style>
                        .breadcrumb {
                          overflow-x: auto;
                        }
                      </style>

                      <div class="querystatustabmain">

                        <ul class="breadcrumb">

                          {{-- <li class="stclass2">
                            <a href="display.html?ga=query&amp;view=1&amp;id=100006&amp;sts=2">Contacted</a>
                          </li> --}}

                          {{-- @if($student->status_id != null)
                          <li class="">
                            <a href="display.html?ga=query&amp;view=1&amp;id=100006&amp;sts=1">New</a>
                          </li>
                          @endif --}}



                          @foreach($status as $row)
                          <li class="@if($student->status_id == $row->id)
                                @if($loop->index === 0 ) stclass1
                                @elseif($loop->last) stclass5
                                @else stclass2
                                @endif
                              @endif">
                            <a href="display.html?ga=query&amp;view=1&amp;id=100006&amp;sts=1"
                              style=" display:inline-block; ">
                              @if($student->process_status === 0)<i class="fa fa-lock" aria-hidden="true"></i>
                              &nbsp;@endif
                              {{ $row->status }}</a>
                          </li>
                          @endforeach



                        </ul>

                      </div>
                    </td>
                  </tr>

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
                                class="nav-tab nav-link {{ $activeTab === 1 ? 'active show' : '' }}" data-toggle="tab"
                                href="#lead-details-tab"><span class="d-none d-md-block"><i class="fa fa-id-card-o"
                                    aria-hidden="true"></i>
                                  &nbsp;Student Details</span><span class="d-block d-md-none"><i
                                    class="mdi mdi-home-variant h5"></i></span></a></li>

                            <li class="nav-item" style="padding: 2px;"><a
                                class="nav-link {{ $activeTab === 2 ? 'active show' : '' }}" data-toggle="tab"
                                href="#status-tab"><span class="d-none d-md-block"><i class="fa fa-bar-chart"
                                    aria-hidden="true"></i>
                                  &nbsp;Student Status</span><span class="d-block d-md-none"><i
                                    class="mdi mdi-settings h5"></i></span></a></li>

                            <li class="nav-item" style="padding: 2px;"><a
                                class="nav-link {{ $activeTab === 3 ? 'active show' : '' }}" data-toggle="tab"
                                href="#payment-tab"><span class="d-none d-md-block"><i class="fa fa-file-text"
                                    aria-hidden="true"></i>
                                  &nbsp;Payment Details</span><span class="d-block d-md-none"><i
                                    class="mdi mdi-settings h5"></i></span></a></li>

                            <li class="nav-item" style="padding: 2px;"><a
                                class="nav-link {{ $activeTab === 4 ? 'active show' : '' }}" data-toggle="tab"
                                href="#document-tab"><span class="d-none d-md-block"><i class="fa fa-user"
                                    aria-hidden="true"></i>
                                  &nbsp;Student Documents</span><span class="d-block d-md-none"><i
                                    class="mdi mdi-settings h5"></i></span></a></li>


                            <li class="nav-item" style="padding: 2px;"><a
                                class="nav-link {{ $activeTab === 5 ? 'active show' : '' }}" data-toggle="tab"
                                href="#activity-tab"><span class="d-none d-md-block"><i class="fa fa-calendar-check-o"
                                    aria-hidden="true"></i>
                                  &nbsp;Activity</span><span class="d-block d-md-none"><i
                                    class="mdi mdi-settings h5"></i></span></a></li>


                            <li class="nav-item" style="padding: 2px;"><a
                                class="nav-link {{ $activeTab === 6 ? 'active show' : '' }}" data-toggle="tab"
                                href="#mails-tab"><span class="d-none d-md-block"><i class="fa fa-envelope-o"
                                    aria-hidden="true"></i>
                                  &nbsp;Mails</span><span class="d-block d-md-none"><i
                                    class="mdi mdi-settings h5"></i></span></a></li>

                          </ul>


                          {{-- <ul class="nav nav-tabs " style="border-bottom:0px solid #dee2e6;">

                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab"
                                href="#lead-details-tab"><span class="d-none d-md-block"><i class="fa fa-id-card-o"
                                    aria-hidden="true"></i> &nbsp;Student Details</span><span
                                  class="d-block d-md-none"><i class="mdi mdi-home-variant h5"></i></span></a></li>




                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#mails-tab"><span
                                  class="d-none d-md-block"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                  &nbsp;Mails</span><span class="d-block d-md-none"><i
                                    class="mdi mdi-settings h5"></i></span></a></li>



                          </ul> --}}
                        </div>

                      </div>
                    </td>
                    <td align="left" valign="top">


                      <div class="card-body" style="padding:10px;">

                        <div class="tab-content m-0">

                          <!---student infromation home tab--->
                          <div class="tab-pane fade {{ $activeTab === 1 ? 'active show' : '' }}" id="lead-details-tab">
                            <!-- Content for Lead Details tab goes here -->
                            <div class="col-lg-12" style="padding-left:5px;">

                              <h4 class="mt-0 header-title">Student Information</h4>
                              <a class="dropdown-item neweditpan"
                                style="cursor: pointer; position: absolute; right: 11px; top: 1px; z-index: 1; background-color: #4bb8c8; border-radius: 0px; color: #fff !important; border-radius: 2px;"
                                id="StudentEditeBtn"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </div>
                            <div class="row mb-2">
                              <div class="row col-md-10" style="padding-left:35px;">
                                <div class="col-lg-4">
                                  <div class="form-group input-group" style="position:relative;">
                                    <label for="validationCustom02">Name</label>
                                    {{ $student->name }}
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group input-group" style="position:relative;">
                                    <label for="validationCustom02">Mobile </label>
                                    +{{ $student->country_code }}&nbsp; {{ $student->phone }}
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group input-group" style="position:relative;">
                                    <label for="validationCustom02">Email</label>
                                    {{ $student->email }}
                                  </div>
                                </div>

                                <div class="col-lg-4">
                                  <div class="form-group input-group" style="position:relative;">
                                    <label for="validationCustom02">Passport No</label>
                                    {{ $student->passport_no }}
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <div class="form-group input-group" style="position:relative;">
                                    <label for="validationCustom02">Age</label>
                                    {{ $student->age }}
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <div class="form-group input-group" style="position:relative;">
                                    <label for="validationCustom02">Contact Address</label>
                                    {{ $student->country }} , {{ $student->city }}
                                  </div>
                                </div>


                              </div>
                              <div class="row col-md-2" style="padding-right:0px;">
                                <img class="user-image"
                                  src="{{ (!empty($student->photo)) ? asset('uploads/'.$student->photo.'') : 'https://bootdey.com/img/Content/avatar/avatar7.png' }}"
                                  width="130" height="130"
                                  style="border-radius: 3px;border: 2px solid bisque;padding:2px">
                              </div>

                              <!--this is student interest section-->
                              @if($student->remarks)
                              <div class="col-lg-12" id="queryNotes"
                                style="max-height:372px; overflow:auto;margin-left: 5px;">

                                <div
                                  style="background-color: #ffffe1; font-size: 15px; color: #000;margin-top: 15px; margin-bottom: 10px; padding:10px; border-radius: 4px;">
                                  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                      <tr>
                                        <td colspan="2%" align="left" valign="top"><i class="fa fa-thumb-tack"
                                            aria-hidden="true" style="font-size: 20px; color:#ff8d00;"></i></td>
                                        <td width="98%" align="left" valign="top" style="padding-left:10px;">
                                          <div
                                            style=" margin-bottom:5px;word-wrap: break-word; width:100%; max-width:300px;">
                                            {{ $student->remarks }}</div>

                                        </td>

                                      </tr>
                                    </tbody>
                                  </table>
                                </div>

                              </div>
                              @endif
                              <!---end of the student interest section--->
                            </div>
                            <h4 class="mt-2 header-title">Qualification Information</h4>
                            <div class="row" style="padding-left:10px;  ">


                              @foreach($student_qua as $row)
                              <div class="col-lg-4">
                                <div class="form-group input-group"
                                  style="position: relative; cursor:pointer; padding: 10px; background-color: #e1f5ff; border: 1px solid #93d5f2; border-left: 5px solid #93d5f2; border-radius: 4px;"
                                  data-target=".bs-example-modal-center"
                                  popaction="action=addqualification&qid=100004&sid=3&editId=100003">

                                  <!-- Add the trash icon here -->
                                  <a href="{{ route('qualification.delete',$row->id) }}"><i class="fa fa-trash "
                                      style="position: absolute; top: 5px; right: 5px; color: red; cursor: pointer;"></i></a>

                                  <table border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td colspan="2" style="font-weight:400 !important; color:#666666;">Qualification
                                      </td>
                                      <td>&nbsp;:&nbsp;</td>
                                      <td>{{ $row->qualification }}</td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" style="font-weight:400 !important; color:#666666;">Passing Year
                                      </td>
                                      <td>&nbsp;:&nbsp;</td>
                                      <td>{{ $row->year }}</td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" style="font-weight:400 !important; color:#666666;">Percentage /
                                        CGPA </td>
                                      <td>&nbsp;:&nbsp;</td>
                                      <td>{{ $row->cgpa }}</td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" style="font-weight:400 !important; color:#666666;"> University
                                        or Board</td>
                                      <td>&nbsp;:&nbsp;</td>
                                      <td>{{ $row->board }}</td>
                                    </tr>

                                  </table>


                                </div>
                              </div>
                              @endforeach

                              <div class="col-lg-3">
                                <div class="form-group input-group"
                                  style="position: relative; padding: 10px; background-color: #f2fcff; border: 2px dashed #eaeaea; border-radius: 4px;"
                                  data-toggle="modal" data-target="#myModal"
                                  popaction="action=addqualification&qid=100004&sid=3">
                                  <div
                                    style="text-align: center; width: 100%; padding: 27px; font-size: 16px; cursor: pointer;">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add Qualification
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!---accepted course section --->
                            <h4 class="mt-0 header-title">Accepted Course</h4>

                            <div class="row" style="padding-left:10px;  ">
                              @if($student->course_id)
                              <div class="col-lg-6">
                                <div class="form-group input-group"
                                  style="position: relative; padding: 10px; background-color: #e1f5ff; border: 1px solid #93d5f2; border-left: 5px solid #93d5f2; border-radius: 4px;">
                                  <a popaction="action=sendbrochuremail&queryId=100004&courseid=3"
                                    onclick="loadpop('Send Brochure Mail',this,'900px')" data-toggle="modal"
                                    data-target=".bs-example-modal-center"
                                    style="position: absolute; font-size: 12px; font-weight: 600; right: 5px; bottom: 5px; background-color: #005ee2; color: #fff; padding: 1px 10px; border-radius: 3px; cursor:pointer;"><i
                                      class="fa fa-envelope-o" aria-hidden="true"></i> Send Brochure</a>


                                  <table border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td style="font-weight:400 !important; color:#666666;">Name</td>
                                      <td><strong>&nbsp;:&nbsp;</strong></td>
                                      <td>@if($student->course_id){{ $student->course->name }}@endif</td>
                                    </tr>
                                    <tr>
                                      <td style="font-weight:400 !important; color:#666666;">Degree</td>
                                      <td><strong>&nbsp;:&nbsp;</strong></td>
                                      <td>@if($student->course_id){{ $student->course->course_degree }}@endif</td>
                                    </tr>
                                    <tr>
                                      <td style="font-weight:400 !important; color:#666666;">Duration</td>
                                      <td><strong>&nbsp;:&nbsp;</strong></td>
                                      <td>@if($student->course_id){{ $student->course->course_period }}@endif</td>
                                    </tr>
                                    <tr>
                                      <td style="font-weight:400 !important; color:#666666;">Total Fees </td>
                                      <td><strong>&nbsp;:&nbsp;</strong></td>
                                      <td>@if($student->course_id){{ $student->course->fess }}@endif</td>
                                    </tr>

                                    <tr>
                                      <td style="font-weight:400 !important; color:#666666;">Starting dates </td>
                                      <td><strong>&nbsp;:&nbsp;</strong></td>
                                      <td class="d-flex">@if($student->course_id){{
                                        \Carbon\Carbon::parse($student->course->starting_date)->format('F j, Y') }} / {{
                                        \Carbon\Carbon::parse($student->course->starting_date2)->format('F j, Y')
                                        }}@endif
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="font-weight:400 !important; color:#666666;  ">Brochure</td>
                                      <td style="font-weight:400 !important; color:#666666;  ">
                                        <div align="center"><strong>:</strong></div>
                                      </td>
                                      <td style="font-weight:400 !important; color:#666666; "><a
                                          href="coursefiles/169242310211088754281691213502.pdf" target="_blank"
                                          style="font-size:12px; font-weight:600; color:#0066FF !important;">Download</a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td colspan="3"
                                        style="font-weight:400 !important; color:#666666; padding-top:5px;"><a
                                          style="color:#FF0000;" onclick="return confirm('Are you sure?')"
                                          href="display.html?ga=query&view=1&id=100004&coursedelid=100014"><strong>Delete
                                            Course</strong></a></td>
                                    </tr>
                                  </table>


                                </div>
                              </div>
                              @else
                              <div class="alert alert-danger" style="margin-left:15px;  ">
                                <strong>Not avilable!</strong> This student can't take any course.
                              </div>
                              @endif
                              <div class="col-lg-3">

                              </div>
                            </div>
                            <!---end of the suggested course --->

                            <h4 class="mt-0 header-title">Suggested course</h4>
                            <div class="row" style="padding-left:10px;  ">

                              @foreach($courses_suggested as $row)
                              <div class="col-lg-4">
                                <div class="form-group input-group"
                                  style="position: relative; padding: 10px; background-color: #e1f5ff; border: 1px solid #93d5f2; border-left: 5px solid #93d5f2; border-radius: 4px;">

                                  <!-- Add the trash icon here -->
                                  <form action="{{ route('remove_course.stu') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="student" value="{{ $student->id }}">
                                    <input type="hidden" name="course" value="{{ $row->id }}">
                                    <button type="submit"
                                      style="position: absolute; top: 5px; right: 5px; background: none; border: none; color: red; cursor: pointer;">
                                      <i class="fa fa-times"></i>
                                    </button>

                                  </form>

                                  <table border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td style="font-weight:400 !important; color:#666666;">Name</td>
                                      <td><strong>&nbsp;:&nbsp;</strong></td>
                                      <td>{{ $row->name }} </td>
                                    </tr>
                                    <tr>
                                      <td style="font-weight:400 !important; color:#666666;">Degree</td>
                                      <td><strong>&nbsp;:&nbsp;</strong></td>
                                      <td>{{ $row->course_degree }}</td>
                                    </tr>
                                    <tr>
                                      <td style="font-weight:400 !important; color:#666666;">Duration</td>
                                      <td><strong>&nbsp;:&nbsp;</strong></td>
                                      <td>{{ $row->course_period }}</td>
                                    </tr>
                                    <tr>
                                      <td style="font-weight:400 !important; color:#666666;">Total Fees </td>
                                      <td><strong>&nbsp;:&nbsp;</strong></td>
                                      <td>{{ $row->fess }}</td>
                                    </tr>

                                    <tr>
                                      <td style="font-weight:400 !important; color:#666666;">Starting dates </td>
                                      <td><strong>&nbsp;:&nbsp;</strong></td>
                                      <td class="d-flex">{{ \Carbon\Carbon::parse($row->starting_date)->format('F j, Y')
                                        }} / {{ \Carbon\Carbon::parse($row->starting_date2)->format('F j, Y') }}</td>
                                    </tr>

                                    <tr>
                                      <td style="font-weight:400 !important; color:#666666;  ">PDF</td>
                                      <td style="font-weight:400 !important; color:#666666;  ">
                                        <div align="center"><strong>:</strong></div>
                                      </td>
                                      <td style="font-weight:400 !important; color:#666666; "><a
                                          href="coursefiles/169242310211088754281691213502.pdf" target="_blank"
                                          style="font-size:12px; font-weight:600; color:#0066FF !important;">Download</a>
                                      </td>
                                    </tr>

                                  </table>


                                </div>
                              </div>
                              @endforeach

                              <div class="col-lg-3">
                                <div class="form-group input-group"
                                  style="position: relative; padding: 10px; background-color: #f2fcff; border: 2px dashed #eaeaea; border-radius: 4px;"
                                  data-toggle="modal" data-target="#exampleModalFullscreenLabel"
                                  popaction="action=addqualification&qid=100004&sid=3">
                                  <div
                                    style="text-align: center; width: 100%; padding: 27px; font-size: 16px; cursor: pointer;">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add Course
                                  </div>
                                </div>
                              </div>
                            </div>



                            <h4 class="mt-3 header-title" style="position:relative;">Student Notification
                              @if($student->notify == null)<a
                                onclick="$('#notefiledmaintop').show();$('#notedetails').focus();"
                                style="position: absolute; font-size: 12px; font-weight: 600; right: 5px; top: 5px; background-color: #005ee2; color: #fff; padding: 1px 10px; border-radius: 3px; cursor:pointer;">+
                                Add Notification</a>@endif</h4>

                            <div class="card" style="margin-bottom:5px;">
                              <div class="col-lg-12" style="padding-left:15px;">

                                <div class="row" style="padding: 10px 5px 0px 0px;">
                                  @if($student->notify == null)
                                  <div class="col-lg-12" id="notefiledmaintop" style="display:none;">
                                    <form method="POST" action="{{ route('notify.set') }}">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $student->id }}">
                                      <div class="form-group" style="overflow:hidden;">
                                        <textarea id="notedetails" onkeyup="$('#noteaddbutton').show();"
                                          class="form-control" style="height:80px; border: 5px solid #ddd;"
                                          placeholder="Type Note Here" name="msg" required></textarea>

                                        <div style="margin-top:5px; display:none;" id="noteaddbutton"><button
                                            type="submit" id="savingbutton" class="btn btn-secondary"
                                            onclick="$('#noteaddbutton').hide();" style="float:right;"><i
                                              class="fa fa-plus" aria-hidden="true"></i> Save
                                            Note</button></div>
                                      </div>
                                      <input name="action" type="hidden" value="addnotes">
                                      <input name="queryid" type="hidden" value="100008">
                                    </form>
                                  </div>
                                  @endif
                                  <div class="col-lg-12" id="queryNotes" style="max-height:372px; overflow:auto;">


                                    @if($student->notify)
                                    <div
                                      style="background-color: #ffffe1; border: 2px solid #ffdeae91; font-size: 14px; color: #000; margin-bottom: 10px; padding:10px; border-radius: 4px;">
                                      <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                        <tbody>
                                          <tr>
                                            <td colspan="2%" align="left" valign="top"><i class="fa fa-thumb-tack"
                                                aria-hidden="true" style="font-size: 20px; color:#ff8d00;"></i></td>
                                            <td width="98%" align="left" valign="top" style="padding-left:10px;">
                                              <div
                                                style=" margin-bottom:5px;word-wrap: break-word; width:100%; max-width:300px;">
                                                {{ $student->notify }}</div>

                                            </td>

                                            <td colspan="2%" align="right" valign="top"><a
                                                href="{{ route('notify.delete',$student->id) }}"><i class="fa fa-trash "
                                                  aria-hidden="true" style="font-size: 30px; color:#fd0a0a;"></i></a>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    @endif

                                  </div>

                                </div>

                              </div>
                            </div>

                            <!--end of the content-->
                          </div>
                          <!---end of the student home tab--->


                          <!--this is the status tabs--->
                          <div class="tab-pane fade {{ $activeTab === 2 ? 'active show' : '' }}" id="status-tab">
                            <!-- Content for Mails tab goes here -->
                            <h4 class="mt-3 header-title" style="position:relative;">
                              Application status

                              @if($student->process_status === 0)
                              <a onclick="if (confirm('Are you sure to make this student under processing..?')) { location.href = '{{ route('process.student', $student->id) }}'; }"
                                style="position: absolute; font-size: 15px; font-weight: 600; right: 5px; top: 5px; background-color: #005ee2; color: #fff; padding: 1px 10px; border-radius: 3px; cursor:pointer;">
                                Under Processing &nbsp;+
                              </a>
                              @endif
                            </h4>



                            <div class="querystatustabmain " style="">

                              <!---submit form--->
                              <form method="POST" action="{{ route('applicant.status.change') }}" id="statusChangeForm">
                                @csrf
                                <input type="hidden" value="{{ $student->id }}" name="student_id">
                                <input type="hidden" name="status" id="selectedStatus">
                              </form>
                              <!---end of the submit form-->


                              <ul class="breadcrumb">

                                @foreach($status as $row)

                                <li class="@if($student->status_id == $row->id)
                                      @if($loop->index === 0) stclass1
                                      @elseif($loop->last) stclass5
                                      @else stclass2
                                      @endif
                                    @endif">
                                  <a href="#" @if($student->process_status !== 0) onclick="updateStatus('{{ $row->id
                                    }}')" @endif>
                                    @if($student->process_status === 0)<i class="fa fa-lock" aria-hidden="true"></i>
                                    &nbsp;@endif
                                    {{ $row->status }}

                                  </a>
                                </li>

                                @endforeach



                              </ul>

                              <!---submit form through js-->
                              <script>
                                function updateStatus(selectedStatus) {
                                  document.getElementById('selectedStatus').value = selectedStatus;
                                  document.getElementById('statusChangeForm').submit();
                                }
                              </script>

                              <!---end of the submit form in js--->



                            </div>


                            <br>

                            <h4 class="mt-0 header-title">Payment status</h4>


                            <div class="" style="">

                              <!---submit form--->
                              <form method="POST" action="{{ route('payment.status.change') }}"
                                id="paymentstatusChangeForm">
                                @csrf
                                <input type="hidden" value="{{ $student->id }}" name="student_id">
                                <input type="hidden" name="status" id="selectedPaymentStatus">
                              </form>
                              <!---end of the submit form-->


                              <ul class="breadcrumb">


                                @foreach($paymentstatus as $row)
                                <li class="
                                      @if($student->payment_status == $row->id)
                                        @if($loop->index === 0) stclass1
                                        @elseif($loop->last) stclass5
                                        @else stclass2
                                        @endif
                                      @endif">
                                  <a href="#" @if($student->process_status !== 0) onclick="updatePaymentStatus('{{
                                    $row->id }}')" @endif>
                                    @if($student->process_status === 0)<i class="fa fa-lock" aria-hidden="true"></i>
                                    &nbsp;@endif{{ $row->status }}
                                  </a>
                                </li>
                                @endforeach



                              </ul>

                              <!---submit form through js-->
                              <script>
                                function updatePaymentStatus(selectedStatus) {
                                  document.getElementById('selectedPaymentStatus').value = selectedStatus;
                                  document.getElementById('paymentstatusChangeForm').submit();
                                }
                              </script>

                              <!---end of the submit form in js--->



                            </div>


                            <br>

                            <h4 class="mt-0 header-title">EMGS status</h4>

                            <div class="" style="">

                              <!---submit form--->
                              <form method="POST" action="{{ route('emgs.status.change') }}" id="emgsstatusChangeForm">
                                @csrf
                                <input type="hidden" value="{{ $student->id }}" name="student_id">
                                <input type="hidden" name="status" id="selectedEmgsStatus">
                              </form>
                              <!---end of the submit form-->


                              <ul class="breadcrumb">


                                @foreach($emgsstatus as $row)
                                <li class="
                                    @if($student->emg_status == $row->id)
                                      @if($loop->index === 0) stclass1
                                      @elseif($loop->last) stclass5
                                      @else stclass2
                                      @endif
                                    @endif">
                                  <a href="#" @if($student->process_status !== 0) onclick="updateEmgsStatus('{{ $row->id
                                    }}')" @endif>
                                    @if($student->process_status === 0)<i class="fa fa-lock" aria-hidden="true"></i>
                                    &nbsp;@endif{{ $row->status }}
                                  </a>
                                </li>
                                @endforeach



                              </ul>

                              <!---submit form through js-->
                              <script>
                                function updateEmgsStatus(selectedStatus) {
                                    document.getElementById('selectedEmgsStatus').value = selectedStatus;
                                    document.getElementById('emgsstatusChangeForm').submit();
                                  }
                              </script>

                              <!---end of the submit form in js--->



                            </div>


                            <br>
                          </div>

                          <!--end of the status tab--->

                          <div class="tab-pane fade {{ $activeTab === 3 ? 'active show' : '' }}" id="payment-tab">
                            <!-- Content for Mails tab goes here -->
                            <div class=" ">
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

                                <div style="margin-bottom:10px;">
                                  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                      <tr>
                                        <td width="14%" align="left" valign="top">
                                          <div class="statusbox" style="background-color:#655be6;">
                                            <div style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                                              ${{ $student_pay_sum ?? 0 }}

                                            </div>
                                            Student payment Received
                                          </div>
                                        </td>
                                        <td width="14%" align="left" valign="top">
                                          <div class="statusbox" style="background-color:#0cb5b5;">
                                            <div style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                                              ${{ $commission_sum ?? 0 }}
                                            </div>
                                            Commission Received
                                          </div>
                                        </td>

                                        <td width="14%" align="left" valign="top">
                                          <div class="statusbox" style="background-color:#e45555;">
                                            <div style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                                              ${{ $payment_sum ?? 0 }}
                                            </div>Payment to Uni
                                          </div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>

                                </div>



                                {{-- <div class="col-lg-12" style=" padding: 0px; ">
                                  <h4 class="mt-0 header-title" style="border-bottom:0px; position:relative;">Payments
                                    (1)

                                    <a onclick="loadpop('Send Payment Plan To Mail',this,'400px')" data-toggle="modal"
                                      data-target=".bs-example-modal-center"
                                      popaction="action=sendSelectedPaymentPlanToMail&amp;queryId=100007&amp;packageId=100017"
                                      style="position: absolute; font-size: 12px; font-weight: 600; right: 5px; top:2px; background-color: #005ee2; color: #fff; padding: 2px 10px; border-radius: 3px; cursor: pointer;">Send
                                      Payment Plan To Mail</a>

                                  </h4>
                                  <form class="custom-validation" action="frmaction.html" target="actoinfrm"
                                    novalidate="" method="post" enctype="multipart/form-data">
                                    <div class="card">
                                      <div class="card-body" style="padding:10px !important;">
                                        <table width="100%" border="1" cellpadding="5" cellspacing="0"
                                          bordercolor="#CCCCCC" style=" font-size:12px;">

                                          <thead>
                                            <tr>
                                              <th>Payment&nbsp;ID</th>
                                              <th>Trans.&nbsp;ID</th>
                                              <th>Type</th>
                                              <th>Amount</th>
                                              <th>Payment&nbsp;Date</th>
                                              <th>Status</th>
                                              <th align="center">&nbsp;</th>
                                              <th align="center" style="display:none;">&nbsp;</th>
                                              <th align="center">Convenience Fee</th>
                                              <th>Receipt</th>
                                              <th>
                                                <div align="right">Action</div>
                                              </th>
                                            </tr>
                                          </thead>
                                          <tbody>

                                            <tr style=" ">
                                              <td align="left" valign="top">-</td>
                                              <td align="left" valign="top" style="text-transform:uppercase;">-</td>
                                              <td align="left" valign="top"></td>
                                              <td align="left" valign="top">₹5000</td>
                                              <td align="left" valign="top">23/08/2023 </td>
                                              <td align="left" valign="top">
                                                <span class="badge badge-danger">Overdue</span>
                                              </td>
                                              <td align="center" valign="top">

                                                <button type="button"
                                                  class="btn btn-info btn-sm waves-effect waves-light"
                                                  onclick="loadpop('Send Payment Link',this,'400px')"
                                                  data-toggle="modal" data-target=".bs-example-modal-center"
                                                  popaction="action=sendpaymentlink&amp;pid=100017&amp;qid=100007&amp;id=100013&amp;amt=5000&amp;sendlink=1"
                                                  style="margin-bottom:0px; float:right; width: 100%;">Send
                                                  Link</button>
                                                <br>
                                              </td>
                                              <td align="center" valign="top" style="display:none;">
                                                <button type="button"
                                                  class="btn btn-info btn-sm waves-effect waves-light"
                                                  onclick="loadpop('Send Without Link',this,'400px')"
                                                  data-toggle="modal" data-target=".bs-example-modal-center"
                                                  popaction="action=sendpaymentWithoutLink&amp;pid=100017&amp;qid=100007&amp;id=100013&amp;amt=5000"
                                                  style="margin-bottom:0px; float:right;">Send Payment Details</button>

                                                <br>
                                              </td>
                                              <td align="center" valign="top"><input type="number" min="0" name="conFee"
                                                  id="conFee100013" class="conf" placeholder="Convenience Fee" value="0"
                                                  onkeyup="confeefun('100013');"></td>
                                              <td align="left" valign="top"></td>
                                              <td align="left" valign="top">
                                                <div style=" width: 100px; float:right;">
                                                  <div align="right">



                                                    <button type="button"
                                                      class="btn btn-info btn-sm waves-effect waves-light"
                                                      onclick="loadpop('Schedule Payment',this,'400px')"
                                                      data-toggle="modal" data-target=".bs-example-modal-center"
                                                      popaction="action=schedulepayment&amp;payment=50000&amp;queryId=100007&amp;packageId=100017&amp;id=100013"
                                                      style="margin-bottom:0px; float:right;">Edit</button>


                                                  </div>&nbsp;<button type="button"
                                                    class="btn btn-danger btn-sm waves-effect waves-light"
                                                    onclick="deletebill('100013');"
                                                    style="margin-bottom:0px; float:right; margin-right: 3px;">Delete</button>
                                                </div>
                                              </td>
                                            </tr>




                                            <tr style=" ">
                                              <td colspan="3" align="right" valign="top"><strong>Not Scheduled Amount:
                                                </strong></td>
                                              <td align="left" valign="top"><strong>₹45000</strong></td>
                                              <td colspan="7" align="right" valign="top"><button type="button"
                                                  class="btn btn-pink btn-sm waves-effect waves-light"
                                                  onclick="loadpop('Create Payment Plan',this,'400px')"
                                                  data-toggle="modal" data-target=".bs-example-modal-center"
                                                  popaction="action=schedulepayment&amp;payment=45000&amp;queryId=100007&amp;packageId=100017&amp;addpay=1"
                                                  style="margin-bottom:0px; float:right;">Schedule Payment</button></td>
                                            </tr>

                                          </tbody>
                                        </table>
                                      </div>
                                    </div>

                                    <input name="action" type="hidden" id="action"
                                      value="sendSelectedPaymentPlanToMail">
                                    <input name="queryId" type="hidden" value="100007">
                                    <input name="packageId" type="hidden" value="100017">
                                    <div style="overflow: hidden; width: 100%; margin-top: 10px; display:none;">
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
                                </div> --}}




                                <div>
                                  <h4 class="mt-0 header-title" style="border-bottom:0px; overflow:hidden;">
                                    &nbsp;Student Payments information</h4>
                                  {{-- <div style="text-align:center; padding:10px;">
                                    <div style="margin-bottom:10px;">No Invoice Found</div>
                                    <a target="actoinfrm"
                                      href="actionpage.php?action=genrateinvoice&amp;queryId=100007&amp;packageId=100017&amp;amount=">
                                      <button type="button" class="btn btn-primary waves-effect waves-light">Genrate
                                        Invoice</button>
                                    </a>
                                  </div> --}}



                                </div>
                              </div>
                              <div id="saveconfee" style="display:none;"></div>
                              <script>
                                function confeefun(id){
                                                var conFee = $('#conFee'+id).val();
                                               
                                                $('#saveconfee').load('actionpage.php?action=saveconfee&id='+id+'&conFee='+conFee+'&queryId=100007');
                                              }
                                              
                                              function deletebill(id){
                                              
                                                if(confirm('Are you sure want to delete?')){
                                                $('#saveconfee').load('actionpage.php?action=deletebill&parentId=100007&id='+id);
                                              }
                                              
                                              }
                              </script>
                            </div>
                            <!---end of the contetnt of this tab--->
                          </div>


                          <div class="tab-pane fade {{ $activeTab === 4 ? 'active show' : '' }}" id="document-tab">
                            <!-- this is the document tab -->
                            <div>
                              <h4 class="mt-0 header-title"
                                style="border-bottom:0px; overflow:hidden; position:relative;">Documents

                                <a href="{{ route('doc.download',$student->id) }}"><button type="button"
                                    style="position: absolute; font-size: 12px; font-weight: 600; right: 5px; top:2px; background-color: #005ee2; color: #fff; padding: 2px 10px; border-radius: 3px; border:0px; cursor: pointer;">
                                    All Document download zip</button></a>



                              </h4>

                              <div class="card" style="padding:10px;">
                                <table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#CCCCCC"
                                  style="font-size:14px;" class="table table-hover mb-0">

                                  <thead>
                                    <tr>
                                      <th width="70%" bgcolor="#f5f7f9">Document Name </th>
                                      <th width="30%" bgcolor="#f5f7f9">
                                        <div align="center">File</div>
                                      </th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    @foreach($student_doc as $row)

                                    <tr>
                                      <td width="70%" align="left" valign="middle">{{ $row->type }}</td>
                                      <td width="30%" align="left" valign="middle">
                                        <div align="center">
                                          <a href="{{ route('single.doc.download', $row->requirement_id) }}"
                                            target="_blank"><button type="button"
                                              class="btn btn-info btn-sm waves-effect waves-light"
                                              style="margin-bottom:0px; margin-bottom: 0px; margin: 0px 5px;">Download</button></a>
                                          &nbsp;

                                          <a class="doc-delete-confirm" href="#"
                                            data-id="{{ route('single.doc.delete',$row->requirement_id) }}"><button
                                              type="button" class="btn btn-danger btn-sm waves-effect waves-light"
                                              style="margin-bottom:0px; margin-bottom: 0px; margin: 0px 5px;">Delete</button></a>

                                        </div>
                                      </td>
                                    </tr>

                                    @endforeach

                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <!---end of the document tab --->
                          </div>

                          <div class="tab-pane fade {{ $activeTab === 5 ? 'active show' : '' }}" id="activity-tab">
                            <!-- Content for Activity tab goes here -->
                            <div class="card-body">

                              <div style="padding:10px;">

                                <style>
                                  .tasklist {
                                    border: 0px solid #ddd;
                                    border-left: 0px solid #ff8a12;
                                    background-color: #fff;
                                    border-radius: 4px;
                                    margin-bottom: 0px;
                                    margin-top: 0px;
                                  }

                                  .tasklist .iconbox {
                                    width: 42px;
                                    height: 42px;
                                    margin-right: 10px;
                                    background-color: #ebeff3;
                                    color: #595959;
                                    text-align: center;
                                    line-height: 40px;
                                    font-size: 18px;
                                    border-radius: 100%;
                                    border: 1px solid #cfd7df;
                                  }

                                  .tasklist .card-body {
                                    padding: 10px !important;
                                  }

                                  .makedone {
                                    border-left: 5px solid #009900;
                                  }

                                  .makedone .iconbox {
                                    background-color: #009900;
                                  }

                                  .makenotedone {
                                    border: 1px solid #CC3300;
                                    border-left: 5px solid #CC3300;
                                  }

                                  .makenotedone .iconbox {
                                    background-color: #CC3300;
                                  }
                                </style>

                                <div class="row" style=" margin-right:1px;">
                                  <div class="col-lg-12" style="padding-left:15px;">
                                    <h4 class="mt-0 header-title" style="margin-bottom:10px;">Activity <a
                                        data-toggle="modal" data-target=".activityModel"
                                        popaction="action=addtask&amp;queryid=100006"
                                        style="position: absolute; font-size: 12px; font-weight: 600; right: 5px; top: 5px; background-color: #005ee2; color: #fff; padding: 1px 10px; border-radius: 3px; cursor:pointer;">+
                                        Add Activity</a></h4>

                                    <div class=" ">

                                      @foreach($activitiies as $row)
                                      <div class="">
                                        <div class="tasklist">
                                          <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                              <tr>
                                                <td colspan="2" align="left" valign="top">
                                                  <div class="iconbox">

                                                    @if($row->type === 'Call')
                                                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                                                    @elseif($row->type === 'Task')
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    @else
                                                    <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                                    @endif


                                                  </div>
                                                </td>
                                                <td width="98%" align="left" valign="top" style="position:relative;">
                                                  <div class="card">
                                                    <div class="card-body">
                                                      {{-- <i class="fa fa-square-o" aria-hidden="true"
                                                        style="font-size:24px; color:#009900; cursor:pointer; position:absolute; right:10px; top:22px;"
                                                        data-placement="top" data-original-title="Click to complete"
                                                        popaction="action=confirmtask&amp;id=100012&amp;qid=100006"></i>
                                                      --}}


                                                      <i class="fa fa-check-square" aria-hidden="true"
                                                        style="font-size:24px; color:#009900; cursor:pointer; position:absolute; right:10px; top:22px;"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Completed"></i>
                                                      <div
                                                        style="margin-bottom: 5px; font-size: 14px; font-weight: 600;">
                                                        {{-- <span style="font-size:11px; color:#333;">Education
                                                          CRM</span> --}}
                                                        <span style="font-size:11px; color:#333; ">

                                                          @if($row->reminder === 1)
                                                          <i class="fa fa-circle" aria-hidden="true"
                                                            style="color: #b2bad066; margin: 0px 10px; font-size:8px;"></i>
                                                          Due on: {{ $row->reminder_date }} -
                                                          @if ($row->reminder_time)
                                                          {{ \Carbon\Carbon::createFromFormat('H:i:s',
                                                          $row->reminder_time)->format('h:i A') }}
                                                          @endif

                                                          @endif
                                                          <i class="fa fa-circle" aria-hidden="true"
                                                            style="color: #b2bad066; margin: 0px 10px; font-size:8px;"></i>Added:
                                                          {{ $row->created_at->format('Y-m-d h:i A') }}
                                                        </span>
                                                      </div>
                                                      <div
                                                        style="padding: 5px 10px; background-color: #196b9e; color: #FFFFFF; font-size: 13px; font-weight: 500; display: inline-block; border-radius: 5px;">
                                                        {{ $row->status }}</div>

                                                      <div
                                                        style="margin-bottom: 0px; font-size: 13px; font-weight: 600;">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>

                                        </div>
                                      </div>
                                      @endforeach
                                      {{-- <div class="">
                                        <div class="tasklist">
                                          <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                              <tr>
                                                <td colspan="2" align="left" valign="top">
                                                  <div class="iconbox">
                                                    <i class="fa fa-handshake-o" aria-hidden="true"></i>

                                                  </div>
                                                </td>
                                                <td width="98%" align="left" valign="top" style="position:relative;">
                                                  <div class="card">
                                                    <div class="card-body">



                                                      <div
                                                        style="margin-bottom: 5px; font-size: 14px; font-weight: 600;">
                                                        <span style="font-size:11px; color:#333;">Education
                                                          CRM</span><span style="font-size:11px; color:#333; "> <i
                                                            class="fa fa-circle" aria-hidden="true"
                                                            style="color: #b2bad066; margin: 0px 10px; font-size:8px;"></i>Added:
                                                          2023-11-04 06:29 AM</span>
                                                      </div>
                                                      <div
                                                        style="padding: 5px 10px; background-color: #196b9e; color: #FFFFFF; font-size: 13px; font-weight: 500; display: inline-block; border-radius: 5px;">
                                                        Interested</div>

                                                      <div
                                                        style="margin-bottom: 0px; font-size: 13px; font-weight: 600;">
                                                        cxzc</div>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>

                                        </div>
                                      </div>

                                      <div class="">
                                        <div class="tasklist">
                                          <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                              <tr>
                                                <td colspan="2" align="left" valign="top">
                                                  <div class="iconbox">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>

                                                  </div>
                                                </td>
                                                <td width="98%" align="left" valign="top" style="position:relative;">
                                                  <div class="card">
                                                    <div class="card-body">



                                                      <div
                                                        style="margin-bottom: 5px; font-size: 14px; font-weight: 600;">
                                                        <span style="font-size:11px; color:#333;">Education
                                                          CRM</span><span style="font-size:11px; color:#333; "> <i
                                                            class="fa fa-circle" aria-hidden="true"
                                                            style="color: #b2bad066; margin: 0px 10px; font-size:8px;"></i>Added:
                                                          2023-11-04 06:24 AM</span>
                                                      </div>
                                                      <div
                                                        style="padding: 5px 10px; background-color: #196b9e; color: #FFFFFF; font-size: 13px; font-weight: 500; display: inline-block; border-radius: 5px;">
                                                        Call Not Picked</div>

                                                      <div
                                                        style="margin-bottom: 0px; font-size: 13px; font-weight: 600;">
                                                        This is something special </div>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>

                                        </div>
                                      </div> --}}

                                      {{-- <div class="">
                                        <div class="tasklist">
                                          <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                              <tr>
                                                <td colspan="2" align="left" valign="top">
                                                  <div class="iconbox">
                                                    <i class="fa fa-handshake-o" aria-hidden="true"></i>

                                                  </div>
                                                </td>
                                                <td width="98%" align="left" valign="top" style="position:relative;">
                                                  <div class="card" style="background-color: #ebfff7;">
                                                    <div class="card-body">
                                                      <i class="fa fa-check-square" aria-hidden="true"
                                                        style="font-size:24px; color:#009900; cursor:pointer; position:absolute; right:10px; top:22px;"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Completed"></i>



                                                      <div
                                                        style="margin-bottom: 5px; font-size: 14px; font-weight: 600;">
                                                        <span style="font-size:11px; color:#333;">Education
                                                          CRM</span><span style="font-size:11px; color:#333; "> <i
                                                            class="fa fa-circle" aria-hidden="true"
                                                            style="color: #b2bad066; margin: 0px 10px; font-size:8px;"></i>
                                                          Due on: 04/11/2023 - 05:00 PM<i class="fa fa-circle"
                                                            aria-hidden="true"
                                                            style="color: #b2bad066; margin: 0px 10px; font-size:8px;"></i>Added:
                                                          2023-11-04 05:51 AM</span>
                                                      </div>
                                                      <div
                                                        style="padding: 5px 10px; background-color: #196b9e; color: #FFFFFF; font-size: 13px; font-weight: 500; display: inline-block; border-radius: 5px;">
                                                        Interested</div>

                                                      <div
                                                        style="margin-bottom: 0px; font-size: 13px; font-weight: 600;text-decoration: line-through;">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>

                                        </div>
                                      </div> --}}

                                    </div>






                                  </div>

                                </div>
                              </div>


                            </div>
                            <!---end of the activity tab area ---->
                          </div>


                          <div class="tab-pane fade" id="mails-tab">
                            <!-- Content for Activity tab goes here -->
                            <h4 class="mt-0 header-title">Mails</h4>
                            <p>This is the content for Mail tab.</p>
                          </div>
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
      <div class="modal fade doc-delete-model">
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
                    <h4>You are confirming the document deletion</h4>

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


      <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h6 class="modal-title">Qualification</h6>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <form action="{{ route('qualification.stu') }}" method="post" enctype="multipart/form-data"
                id="qualification">
                @csrf
                <input type="hidden" name="id" value="{{ $student->id }}">

                <div class="form-group mb-3">

                  <div style="margin-bottom:2px; font-size:12px;">Qualification</div>

                  <select name="qualification" class="form-control" autocomplete="off" style="margin-bottom:10px;"
                    required>

                    <option value="">Select</option>
                    <option value="High School">High School</option>

                    <option value="Intermediate">Intermediate</option>

                    <option value="B.A">B.A</option>

                    <option value="BSc">BSc</option>

                    <option value="BCA">BCA</option>

                    <option value="Btec">Btec</option>

                  </select>

                  <div style="margin-bottom:2px; font-size:12px;">Passing Year</div>
                  <select name="year" class="form-control" autocomplete="off" style="margin-bottom:10px;" required>
                    <option value="" selected="selected"></option>

                    <option value="2023">2023</option>

                    <option value="2022">2022</option>

                    <option value="2021">2021</option>

                    <option value="2020">2020</option>

                    <option value="2019">2019</option>

                    <option value="2018">2018</option>

                    <option value="2017">2017</option>

                    <option value="2016">2016</option>

                    <option value="2015">2015</option>

                    <option value="2014">2014</option>

                    <option value="2013">2013</option>

                    <option value="2012">2012</option>

                    <option value="2011">2011</option>

                    <option value="2010">2010</option>

                    <option value="2009">2009</option>

                    <option value="2008">2008</option>

                    <option value="2007">2007</option>

                    <option value="2006">2006</option>

                    <option value="2005">2005</option>

                    <option value="2004">2004</option>

                    <option value="2003">2003</option>

                    <option value="2002">2002</option>

                    <option value="2001">2001</option>

                    <option value="2000">2000</option>

                    <option value="1999">1999</option>

                    <option value="1998">1998</option>

                    <option value="1997">1997</option>

                    <option value="1996">1996</option>

                    <option value="1995">1995</option>

                    <option value="1994">1994</option>

                    <option value="1993">1993</option>

                    <option value="1992">1992</option>

                    <option value="1991">1991</option>

                    <option value="1990">1990</option>

                    <option value="1989">1989</option>

                    <option value="1988">1988</option>

                    <option value="1987">1987</option>

                    <option value="1986">1986</option>

                    <option value="1985">1985</option>

                    <option value="1984">1984</option>

                    <option value="1983">1983</option>

                    <option value="1982">1982</option>

                    <option value="1981">1981</option>

                    <option value="1980">1980</option>

                    <option value="1979">1979</option>

                    <option value="1978">1978</option>

                    <option value="1977">1977</option>

                    <option value="1976">1976</option>

                    <option value="1975">1975</option>

                    <option value="1974">1974</option>

                    <option value="1973">1973</option>

                    <option value="1972">1972</option>

                    <option value="1971">1971</option>

                    <option value="1970">1970</option>

                    <option value="1969">1969</option>

                    <option value="1968">1968</option>

                    <option value="1967">1967</option>

                    <option value="1966">1966</option>

                    <option value="1965">1965</option>

                    <option value="1964">1964</option>

                    <option value="1963">1963</option>

                    <option value="1962">1962</option>

                    <option value="1961">1961</option>

                    <option value="1960">1960</option>

                    <option value="1959">1959</option>

                    <option value="1958">1958</option>

                    <option value="1957">1957</option>

                    <option value="1956">1956</option>

                    <option value="1955">1955</option>

                  </select>
                </div>



                <div style="margin-bottom:2px; font-size:12px;">Percentage / CGPA</div>
                <input name="cgpa" type="text" class="form-control" style="margin-bottom:10px;" required>


                <div style="margin-bottom:2px; font-size:12px;">University or Board</div>
                <input name="board" type="text" class="form-control" style="margin-bottom:10px;" required>

                <div class="form-group" style="overflow:hidden;">
                  <div style="margin-top:5px;">
                    <button type="submit" id="submit" class="btn btn-primary" style="float:right;"><i class="fa fa-plus"
                        aria-hidden="true"></i> Save</button>
                  </div>
                </div>


              </form>
            </div>

            <!-- Modal footer -->
          </div>
        </div>
      </div>
      <!--end of the moal --->

      <!--model for course suggested--->
      <div class="modal fade " id="exampleModalFullscreenLabel">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h6 class="modal-title">Search & add course</h6>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-header">
              <!--search bar section --->
              <div class="input-group">
                <input id="searchC" type="search" class="form-control" placeholder="Search anything...">
                <button id="search-button" type="button" class="btn btn-primary">
                  <i class="fa fa-search"></i>
                </button>
              </div>
              <!-- send search bar section -->
            </div>
            <div class="modal-body">
              <form id="addRequirment" action="{{ route('req_update.cor') }}" method="POST">
                @csrf
                <!-- this is the table section for courses -->
                <table id="list" class="table table-bordered table-striped dt-responsive nowrap" style="width: 100%;">
                  <thead>
                    <tr>
                      <th>Picture</th>
                      <th>Course</th>
                      <th>Course Name</th>
                      <th>Course Period</th>
                      <th>Actions </th>
                    </tr>
                  </thead>
                  <tbody id="course_tbl">

                  </tbody>
                </table>
                <!-- end of table section for courses section -->

            </div>

            </form>

          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->


      <!---this is the student information edite model -->

      <div class="modelnew modal right fade StudentEditeModel" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document" style="width: 500px; max-width: 500px;">
          <div class="modal-content">

            <div class="modal-header">

              <h4 class="modal-title" id="poptitle2">Edite student information</h4>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>

            <div class="modal-body" id="popcontent2">

              <form method="POST" action="{{ route('update.stu') }}" enctype="multipart/form-data">
                @csrf

                <div class="row" style="padding: 15px;">



                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="validationCustom02">Student Name</label>
                      <input type="text" id="stuName" class="form-control reqfield" name="name"
                        value="{{ old('name', $student->name) }}">
                      @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="validationCustom02">Student Email</label>
                      <input type="email" id="stuEmail" class="form-control reqfield" name="email"
                        value="{{ old('email', $student->email) }}">
                      @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="validationCustom02">Date of Birth</label>
                      <input type="date" id="stuBrith" class="form-control reqfield" name="dob"
                        value="{{ old('dob', $student->dob) }}">
                      @error('dob')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                  </div>



                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="validationCustom02">Student country </label>
                      <select class="form-control basic reqfield" id="country" name="country">
                        <option value="">Select Country</option>
                        <option data-countryCode="213" value="Algeria" @if($student->country == 'Algeria') selected
                          @endif>Algeria (+213)</option>
                        <option data-countryCode="376" value="Andorra" @if($student->country == 'Andorra') selected
                          @endif >Andorra (+376)</option>
                        <option data-countryCode="244" value="Angola" @if($student->country == 'Angola') selected @endif
                          >Angola (+244)</option>
                        <option data-countryCode="1264" value="Anguilla" @if($student->country == 'Anguilla') selected
                          @endif >Anguilla (+1264)</option>
                        <option data-countryCode="1268" value="Antigua &amp; Barbuda" @if($student->country == 'Antigua
                          Barbuda') selected @endif >Antigua &amp; Barbuda (+1268)</option>
                        <option data-countryCode="54" value="Argentina" @if($student->country == 'Argentina') selected
                          @endif >Argentina (+54)</option>
                        <option data-countryCode="374" value="Armenia" @if($student->country == 'Armenia') selected
                          @endif >Armenia (+374)</option>
                        <option data-countryCode="297" value="Aruba" @if($student->country == 'Aruba') selected @endif
                          >Aruba (+297)</option>
                        <option data-countryCode="61" value="Australia" @if($student->country == 'Australia') selected
                          @endif >Australia (+61)</option>
                        <option data-countryCode="43" value="Austria" @if($student->country == 'Austria') selected
                          @endif >Austria (+43)</option>
                        <option data-countryCode="994" value="Azerbaijan" @if($student->country == 'Azerbaijan')
                          selected @endif >Azerbaijan (+994)</option>
                        <option data-countryCode="1242" value="Bahamas" @if($student->country == 'Bahamas') selected
                          @endif >Bahamas (+1242)</option>
                        <option data-countryCode="973" value="Bahrain" @if($student->country == 'Bahrain') selected
                          @endif >Bahrain (+973)</option>
                        <option data-countryCode="880" value="Bangladesh" @if($student->country == 'Bangladesh')
                          selected @endif >Bangladesh (+880)</option>
                        <option data-countryCode="1246" value="Barbados" @if($student->country == 'Barbados') selected
                          @endif >Barbados (+1246)</option>
                        <option data-countryCode="375" value="Belarus" @if($student->country == 'Belarus') selected
                          @endif >Belarus (+375)</option>
                        <option data-countryCode="32" value="Belgium" @if($student->country == 'Belgium') selected
                          @endif >Belgium (+32)</option>
                        <option data-countryCode="501" value="Belize" @if($student->country == 'Belize') selected @endif
                          >Belize (+501)</option>
                        <option data-countryCode="229" value="Benin" @if($student->country == 'Benin') selected @endif
                          >Benin (+229)</option>
                        <option data-countryCode="1441" value="Bermuda" @if($student->country == 'Bermuda') selected
                          @endif >Bermuda (+1441)</option>
                        <option data-countryCode="975" value="Bhutan" @if($student->country == 'Bhutan') selected @endif
                          >Bhutan (+975)</option>
                        <option data-countryCode="591" value="Bolivia" @if($student->country == 'Bolivia') selected
                          @endif >Bolivia (+591)</option>
                        <option data-countryCode="387" value="Bosnia Herzegovina" @if($student->country == 'Bosnia
                          Herzegovina') selected @endif>Bosnia Herzegovina (+387)</option>
                        <option data-countryCode="267" value="Botswana" @if($student->country == 'Botswana') selected
                          @endif >Botswana (+267)</option>
                        <option data-countryCode="55" value="Brazil" @if($student->country == 'Brazil') selected @endif
                          >Brazil (+55)</option>
                        <option data-countryCode="673" value="Brunei" @if($student->country == 'Brunei') selected @endif
                          >Brunei (+673)</option>
                        <option data-countryCode="359" value="Bulgaria" @if($student->country == 'Bulgaria') selected
                          @endif >Bulgaria (+359)</option>
                        <option data-countryCode="226" value="Bulgaria" @if($student->country == 'Bulgaria') selected
                          @endif >Bulgaria (+226)</option>
                        <option data-countryCode="257" value="Burundi" @if($student->country == 'Burundi') selected
                          @endif >Burundi (+257)</option>
                        <option data-countryCode="855" value="Cambodia" @if($student->country == 'Cambodia') selected
                          @endif >Cambodia (+855)</option>
                        <option data-countryCode="237" value="Cameroon" @if($student->country == 'Cameroon') selected
                          @endif >Cameroon (+237)</option>
                        <option data-countryCode="1" value="Canada" @if($student->country == 'Canada') selected @endif
                          >Canada (+1)</option>
                        <option data-countryCode="238" value="Cape Verde Islands" @if($student->country == 'Cape Verde
                          Islands') selected @endif >Cape Verde Islands (+238)</option>
                        <option data-countryCode="1345" value="Cayman Islands" @if($student->country == 'Cayman
                          Islands') selected @endif >Cayman Islands (+1345)</option>
                        <option data-countryCode="236" value="Central African Republic" @if($student->country ==
                          'Central African Republic') selected @endif >Central African Republic (+236)</option>
                        <option data-countryCode="56" value="Chile" @if($student->country == 'Chile') selected @endif
                          >Chile (+56)</option>
                        <option data-countryCode="86" value="China" @if($student->country == 'China') selected @endif
                          >China (+86)</option>
                        <option data-countryCode="57" value="Colombia" @if($student->country == 'Colombia') selected
                          @endif >Colombia (+57)</option>
                        <option data-countryCode="269" value="Comoros" @if($student->country == 'Comoros') selected
                          @endif >Comoros (+269)</option>
                        <option data-countryCode="242" value="Congo" @if($student->country == 'Congo') selected @endif
                          >Congo (+242)</option>
                        <option data-countryCode="682" value="Cook Islands" @if($student->country == 'Cook Islands')
                          selected @endif >Cook Islands (+682)</option>
                        <option data-countryCode="506" value="Costa Rica" @if($student->country == 'Costa Rica')
                          selected @endif >Costa Rica (+506)</option>
                        <option data-countryCode="385" value="Croatia" @if($student->country == 'Croatia') selected
                          @endif >Croatia (+385)</option>
                        <option data-countryCode="53" value="Cuba" @if($student->country == 'Cuba') selected @endif
                          >Cuba (+53)</option>
                        <option data-countryCode="90392" value="Cyprus North" @if($student->country == 'Cyprus North')
                          selected @endif>Cyprus North (+90392)</option>
                        <option data-countryCode="357" value="Cyprus South" @if($student->country == 'Cyprus South')
                          selected @endif >Cyprus South (+357)</option>
                        <option data-countryCode="42" value="Czech Republic" @if($student->country == 'Czech Republic')
                          selected @endif >Czech Republic (+42)</option>
                        <option data-countryCode="45" value="Denmark" @if($student->country == 'Denmark') selected
                          @endif >Denmark (+45)</option>
                        <option data-countryCode="253" value="Djibouti" @if($student->country == 'Djibouti') selected
                          @endif >Djibouti (+253)</option>
                        <option data-countryCode="1809" value="Dominica" @if($student->country == 'Dominica') selected
                          @endif >Dominica (+1809)</option>
                        <option data-countryCode="1809" value="Dominican Republic" @if($student->country == 'Dominican
                          Republic') selected @endif >Dominican Republic (+1809)</option>
                        <option data-countryCode="593" value="Ecuador" @if($student->country == 'Ecuador') selected
                          @endif >Ecuador (+593)</option>
                        <option data-countryCode="20" value="Egypt" @if($student->country == 'Egypt') selected @endif
                          >Egypt (+20)</option>
                        <option data-countryCode="503" value="El Salvador" @if($student->country == 'El Salvador')
                          selected @endif >El Salvador (+503)</option>
                        <option data-countryCode="240" value="Equatorial Guinea" @if($student->country == 'Equatorial
                          Guinea') selected @endif >Equatorial Guinea (+240)</option>
                        <option data-countryCode="291" value="Eritrea" @if($student->country == 'Eritrea') selected
                          @endif >Eritrea (+291)</option>
                        <option data-countryCode="372" value="Estonia" @if($student->country == 'Estonia') selected
                          @endif >Estonia (+372)</option>
                        <option data-countryCode="251" value="Ethiopia" @if($student->country == 'Ethiopia') selected
                          @endif >Ethiopia (+251)</option>
                        <option data-countryCode="500" value="Falkland Islands" @if($student->country == 'Falkland
                          Islands') selected @endif >Falkland Islands (+500)</option>
                        <option data-countryCode="298" value="Faroe Islands" @if($student->country == 'Faroe Islands')
                          selected @endif >Faroe Islands (+298)</option>
                        <option data-countryCode="679" value="Fiji" @if($student->country == 'Fiji') selected @endif
                          >Fiji (+679)</option>
                        <option data-countryCode="358" value="Finland" @if($student->country == 'Finland') selected
                          @endif >Finland (+358)</option>
                        <option data-countryCode="33" value="France" @if($student->country == 'France') selected @endif
                          >France (+33)</option>
                        <option data-countryCode="594" value="French Guiana" @if($student->country == 'French Guiana')
                          selected @endif >French Guiana (+594)</option>
                        <option data-countryCode="689" value="French Polynesia" @if($student->country == 'French
                          Polynesia') selected @endif >French Polynesia (+689)</option>
                        <option data-countryCode="241" value="Gabon" @if($student->country == 'Gabon') selected @endif
                          >Gabon (+241)</option>
                        <option data-countryCode="220" value="Gambia" @if($student->country == 'Gambia') selected @endif
                          >Gambia (+220)</option>
                        <option data-countryCode="7880" value="Georgia" @if($student->country == 'Georgia') selected
                          @endif >Georgia (+7880)</option>
                        <option data-countryCode="49" value="Germany" @if($student->country == 'Germany') selected
                          @endif >Germany (+49)</option>
                        <option data-countryCode="233" value="Ghana" @if($student->country == 'Ghana') selected @endif
                          >Ghana (+233)</option>
                        <option data-countryCode="350" value="Gibraltar" @if($student->country == 'Gibraltar') selected
                          @endif >Gibraltar (+350)</option>
                        <option data-countryCode="30" value="Greece" @if($student->country == 'Greece') selected @endif
                          >Greece (+30)</option>
                        <option data-countryCode="299" value="Greenland" @if($student->country == 'Greenland') selected
                          @endif >Greenland (+299)</option>
                        <option data-countryCode="1473" value="Grenada" @if($student->country == 'Grenada') selected
                          @endif >Grenada (+1473)</option>
                        <option data-countryCode="590" value="Guadeloupe" @if($student->country == 'Guadeloupe')
                          selected @endif >Guadeloupe (+590)</option>
                        <option data-countryCode="671" value="Guam" @if($student->country == 'Guam') selected @endif
                          >Guam (+671)</option>
                        <option data-countryCode="502" value="Guatemala" @if($student->country == 'Guatemala') selected
                          @endif >Guatemala (+502)</option>
                        <option data-countryCode="224" value="Guinea" @if($student->country == 'Guinea') selected @endif
                          >Guinea (+224)</option>
                        <option data-countryCode="245" value="Guinea" @if($student->country == 'Guinea') selected @endif
                          >Guinea - Bissau (+245)</option>
                        <option data-countryCode="592" value="Guyana" @if($student->country == 'Guyana') selected @endif
                          >Guyana (+592)</option>
                        <option data-countryCode="509" value="Haiti" @if($student->country == 'Haiti') selected @endif
                          >Haiti (+509)</option>
                        <option data-countryCode="504" value="Honduras" @if($student->country == 'Honduras') selected
                          @endif >Honduras (+504)</option>
                        <option data-countryCode="852" value="Hong Kong" @if($student->country == 'Hong Kong') selected
                          @endif >Hong Kong (+852)</option>
                        <option data-countryCode="36" value="Hungary" @if($student->country == 'Hungary') selected
                          @endif >Hungary (+36)</option>
                        <option data-countryCode="354" value="Iceland" @if($student->country == 'Iceland') selected
                          @endif >Iceland (+354)</option>
                        <option data-countryCode="91" value="India" @if($student->country == 'India') selected
                          @endif>India (+91)</option>
                        <option data-countryCode="62" value="Indonesia" @if($student->country == 'Indonesia') selected
                          @endif >Indonesia (+62)</option>
                        <option data-countryCode="98" value="Iran" @if($student->country == 'Iran') selected @endif
                          >Iran (+98)</option>
                        <option data-countryCode="964" value="Iraq" @if($student->country == 'Iraq') selected @endif
                          >Iraq (+964)</option>
                        <option data-countryCode="353" value="Ireland" @if($student->country == 'Ireland') selected
                          @endif >Ireland (+353)</option>
                        <option data-countryCode="972" value="Israel" @if($student->country == 'Israel') selected @endif
                          >Israel (+972)</option>
                        <option data-countryCode="39" value="Italy" @if($student->country == 'Italy') selected @endif
                          >Italy (+39)</option>
                        <option data-countryCode="1876" value="Jamaica" @if($student->country == 'Jamaica') selected
                          @endif >Jamaica (+1876)</option>
                        <option data-countryCode="81" value="Japan" @if($student->country == 'Japan') selected @endif
                          >Japan (+81)</option>
                        <option data-countryCode="962" value="Jordan" @if($student->country == 'Jordan') selected @endif
                          >Jordan (+962)</option>
                        <option data-countryCode="7" value="Kazakhstan" @if($student->country == 'Kazakhstan') selected
                          @endif >Kazakhstan (+7)</option>
                        <option data-countryCode="254" value="Kenya" @if($student->country == 'Kenya') selected @endif
                          >Kenya (+254)</option>
                        <option data-countryCode="686" value="Kiribati" @if($student->country == 'Kiribati') selected
                          @endif >Kiribati (+686)</option>
                        <option data-countryCode="850" value="Korea North" @if($student->country == 'Korea North')
                          selected @endif >Korea North (+850)</option>
                        <option data-countryCode="82" value="Korea South" @if($student->country == 'Korea South')
                          selected @endif >Korea South (+82)</option>
                        <option data-countryCode="965" value="Kuwait" @if($student->country == 'Kuwait') selected @endif
                          >Kuwait (+965)</option>
                        <option data-countryCode="996" value="Kyrgyzstan" @if($student->country == 'Kyrgyzstan')
                          selected @endif >Kyrgyzstan (+996)</option>
                        <option data-countryCode="856" value="Laos" @if($student->country == 'Laos') selected @endif
                          >Laos (+856)</option>
                        <option data-countryCode="371" value="Latvia" @if($student->country == 'Latvia') selected @endif
                          >Latvia (+371)</option>
                        <option data-countryCode="961" value="Lebanon" @if($student->country == 'Lebanon') selected
                          @endif >Lebanon (+961)</option>
                        <option data-countryCode="266" value="Lesotho" @if($student->country == 'Lesotho') selected
                          @endif >Lesotho (+266)</option>
                        <option data-countryCode="231" value="Liberia" @if($student->country == 'Liberia') selected
                          @endif >Liberia (+231)</option>
                        <option data-countryCode="218" value="Libya" @if($student->country == 'Libya') selected @endif
                          >Libya (+218)</option>
                        <option data-countryCode="417" value="Liechtenstein" @if($student->country == 'Liechtenstein')
                          selected @endif >Liechtenstein (+417)</option>
                        <option data-countryCode="370" value="Lithuania" @if($student->country == 'Lithuania') selected
                          @endif >Lithuania (+370)</option>
                        <option data-countryCode="352" value="Luxembourg" @if($student->country == 'Luxembourg')
                          selected @endif >Luxembourg (+352)</option>
                        <option data-countryCode="853" value="Macao" @if($student->country == 'Macao') selected @endif
                          >Macao (+853)</option>
                        <option data-countryCode="389" value="Macedonia" @if($student->country == 'Macedonia') selected
                          @endif >Macedonia (+389)</option>
                        <option data-countryCode="261" value="Madagascar" @if($student->country == 'Madagascar')
                          selected @endif >Madagascar (+261)</option>
                        <option data-countryCode="265" value="Malawi" @if($student->country == 'Malawi') selected @endif
                          >Malawi (+265)</option>
                        <option data-countryCode="60" value="Malaysia" @if($student->country == 'Malaysia') selected
                          @endif >Malaysia (+60)</option>
                        <option data-countryCode="960" value="Maldives" @if($student->country == 'Maldives') selected
                          @endif >Maldives (+960)</option>
                        <option data-countryCode="223" value="Mali" @if($student->country == 'Mali') selected @endif
                          >Mali (+223)</option>
                        <option data-countryCode="356" value="Malta" @if($student->country == 'Malta') selected @endif
                          >Malta (+356)</option>
                        <option data-countryCode="692" value="Marshall Islands" @if($student->country == 'Marshall
                          Islands') selected @endif >Marshall Islands (+692)</option>
                        <option data-countryCode="596" value="Martinique" @if($student->country == 'Martinique')
                          selected @endif >Martinique (+596)</option>
                        <option data-countryCode="222" value="Mauritania" @if($student->country == 'Mauritania')
                          selected @endif >Mauritania (+222)</option>
                        <option data-countryCode="263" value="Mayotte" @if($student->country == 'Mayotte') selected
                          @endif >Mayotte (+269)</option>
                        <option data-countryCode="52" value="Mexico" @if($student->country == 'Mexico') selected @endif
                          >Mexico (+52)</option>
                        <option data-countryCode="691" value="Micronesia" @if($student->country == 'Micronesia')
                          selected @endif >Micronesia (+691)</option>
                        <option data-countryCode="373" value="Moldova" @if($student->country == 'Moldova') selected
                          @endif >Moldova (+373)</option>
                        <option data-countryCode="377" value="Monaco" @if($student->country == 'Monaco') selected @endif
                          >Monaco (+377)</option>
                        <option data-countryCode="976" value="Mongolia" @if($student->country == 'Mongolia') selected
                          @endif >Mongolia (+976)</option>
                        <option data-countryCode="1664" value="Montserrat" @if($student->country == 'Montserrat')
                          selected @endif >Montserrat (+1664)</option>
                        <option data-countryCode="212" value="Morocco" @if($student->country == 'Morocco') selected
                          @endif >Morocco (+212)</option>
                        <option data-countryCode="258" value="Mozambique" @if($student->country == 'Mozambique')
                          selected @endif >Mozambique (+258)</option>
                        <option data-countryCode="95" value="Myanmar" @if($student->country == 'Myanmar') selected
                          @endif >Myanmar (+95)</option>
                        <option data-countryCode="264" value="Namibia" @if($student->country == 'Namibia') selected
                          @endif >Namibia (+264)</option>
                        <option data-countryCode="674" value="Nauru" @if($student->country == 'Nauru') selected @endif
                          >Nauru (+674)</option>
                        <option data-countryCode="977" value="Nepal" @if($student->country == 'Nepal') selected @endif
                          >Nepal (+977)</option>
                        <option data-countryCode="31" value="Netherlands" @if($student->country == 'Netherlands')
                          selected @endif >Netherlands (+31)</option>
                        <option data-countryCode="687" value="New Caledonia" @if($student->country == 'New Caledonia')
                          selected @endif >New Caledonia (+687)</option>
                        <option data-countryCode="64" value="New Zealand" @if($student->country == 'New Zealand')
                          selected @endif >New Zealand (+64)</option>
                        <option data-countryCode="505" value="Nicaragua" @if($student->country == 'Nicaragua') selected
                          @endif >Nicaragua (+505)</option>
                        <option data-countryCode="227" value="Niger" @if($student->country == 'Niger') selected @endif
                          >Niger (+227)</option>
                        <option data-countryCode="234" value="Nigeria" @if($student->country == 'Nigeria') selected
                          @endif >Nigeria (+234)</option>
                        <option data-countryCode="683" value="Niue" @if($student->country == 'Niue') selected @endif
                          >Niue (+683)</option>
                        <option data-countryCode="672" value="Norfolk Islands" @if($student->country == 'Norfolk
                          Islands') selected @endif >Norfolk Islands (+672)</option>
                        <option data-countryCode="670" value="Northern Marianas" @if($student->country == 'Northern
                          Marianas') selected @endif >Northern Marianas (+670)</option>
                        <option data-countryCode="47" value="Norway" @if($student->country == 'Norway') selected @endif
                          >Norway (+47)</option>
                        <option data-countryCode="968" value="Oman" @if($student->country == 'Oman') selected @endif
                          >Oman (+968)</option>
                        <option data-countryCode="680" value="Palau" @if($student->country == 'Palau') selected @endif
                          >Palau (+680)</option>
                        <option data-countryCode="507" value="Panama" @if($student->country == 'Panama') selected @endif
                          >Panama (+507)</option>
                        <option data-countryCode="675" value="Papua New Guinea" @if($student->country == 'Papua New
                          Guinea') selected @endif >Papua New Guinea (+675)</option>
                        <option data-countryCode="595" value="Paraguay" @if($student->country == 'Paraguay') selected
                          @endif >Paraguay (+595)</option>
                        <option data-countryCode="51" value="Peru" @if($student->country == 'Peru') selected @endif
                          >Peru (+51)</option>
                        <option data-countryCode="63" value="Philippines" @if($student->country == 'Philippines')
                          selected @endif >Philippines (+63)</option>
                        <option data-countryCode="48" value="Poland" @if($student->country == 'Poland') selected @endif
                          >Poland (+48)</option>
                        <option data-countryCode="351" value="Portugal" @if($student->country == 'Portugal') selected
                          @endif >Portugal (+351)</option>
                        <option data-countryCode="1787" value="Puerto Rico" @if($student->country == 'Puerto Rico')
                          selected @endif >Puerto Rico (+1787)</option>
                        <option data-countryCode="974" value="Qatar" @if($student->country == 'Qatar') selected @endif
                          >Qatar (+974)</option>
                        <option data-countryCode="262" value="Reunion" @if($student->country == 'Reunion') selected
                          @endif >Reunion (+262)</option>
                        <option data-countryCode="40" value="Romania" @if($student->country == 'Romania') selected
                          @endif >Romania (+40)</option>
                        <option data-countryCode="7" value="Russia" @if($student->country == 'Russia') selected @endif
                          >Russia (+7)</option>
                        <option data-countryCode="250" value="Rwanda" @if($student->country == 'Rwanda') selected @endif
                          >Rwanda (+250)</option>
                        <option data-countryCode="378" value="San Marino" @if($student->country == 'San Marino')
                          selected @endif >San Marino (+378)</option>
                        <option data-countryCode="239" value="Sao Tome" @if($student->country == 'Sao Tome') selected
                          @endif >Sao Tome &amp; Principe (+239)</option>
                        <option data-countryCode="966" value="Saudi Arabia" @if($student->country == 'Saudi Arabia')
                          selected @endif >Saudi Arabia (+966)</option>
                        <option data-countryCode="221" value="Senegal" @if($student->country == 'Senegal') selected
                          @endif >Senegal (+221)</option>
                        <option data-countryCode="381" value="Serbia" @if($student->country == 'Serbia') selected @endif
                          >Serbia (+381)</option>
                        <option data-countryCode="248" value="Seychelles" @if($student->country == 'Seychelles')
                          selected @endif >Seychelles (+248)</option>
                        <option data-countryCode="232" value="Sierra Leone" @if($student->country == 'Sierra Leone')
                          selected @endif >Sierra Leone (+232)</option>
                        <option data-countryCode="65" value="Singapore" @if($student->country == 'Singapore') selected
                          @endif >Singapore (+65)</option>
                        <option data-countryCode="421" value="Slovak Republic" @if($student->country == 'Slovak
                          Republic') selected @endif >Slovak Republic (+421)</option>
                        <option data-countryCode="386" value="Slovenia" @if($student->country == 'Slovenia') selected
                          @endif >Slovenia (+386)</option>
                        <option data-countryCode="677" value="Solomon Islands" @if($student->country == 'Solomon
                          Islands') selected @endif >Solomon Islands (+677)</option>
                        <option data-countryCode="252" value="Somalia" @if($student->country == 'Somalia') selected
                          @endif >Somalia (+252)</option>
                        <option data-countryCode="27" value="South Africa" @if($student->country == 'South Africa')
                          selected @endif >South Africa (+27)</option>
                        <option data-countryCode="34" value="Spain" @if($student->country == 'Spain') selected @endif
                          >Spain (+34)</option>
                        <option data-countryCode="94" value="Sri Lanka" @if($student->country == 'Sri Lanka') selected
                          @endif >Sri Lanka (+94)</option>
                        <option data-countryCode="290" value="St. Helena" @if($student->country == 'St. Helena')
                          selected @endif >St. Helena (+290)</option>
                        <option data-countryCode="1869" value="St. Kitts" @if($student->country == 'St. Kitts') selected
                          @endif >St. Kitts (+1869)</option>
                        <option data-countryCode="1758" value="St. Lucia" @if($student->country == 'St. Lucia') selected
                          @endif >St. Lucia (+1758)</option>
                        <option data-countryCode="249" value="Sudan" @if($student->country == 'Sudan') selected @endif
                          >Sudan (+249)</option>
                        <option data-countryCode="597" value="Suriname" @if($student->country == 'Suriname') selected
                          @endif >Suriname (+597)</option>
                        <option data-countryCode="268" value="Swaziland" @if($student->country == 'Swaziland') selected
                          @endif >Swaziland (+268)</option>
                        <option data-countryCode="46" value="Sweden" @if($student->country == 'Sweden') selected @endif
                          >Sweden (+46)</option>
                        <option data-countryCode="41" value="Switzerland" @if($student->country == 'Switzerland')
                          selected @endif >Switzerland (+41)</option>
                        <option data-countryCode="963" value="Syria" @if($student->country == 'Syria') selected @endif
                          >Syria (+963)</option>
                        <option data-countryCode="886" value="Taiwan" @if($student->country == 'Taiwan') selected @endif
                          >Taiwan (+886)</option>
                        <option data-countryCode="7" value="Tajikstan" @if($student->country == 'Tajikstan') selected
                          @endif >Tajikstan (+7)</option>
                        <option data-countryCode="66" value="Thailand" @if($student->country == 'Thailand') selected
                          @endif >Thailand (+66)</option>
                        <option data-countryCode="228" value="Togo" @if($student->country == 'Togo') selected @endif
                          >Togo (+228)</option>
                        <option data-countryCode="676" value="Tonga" @if($student->country == 'Tonga') selected @endif
                          >Tonga (+676)</option>
                        <option data-countryCode="1868" value="Trinidad &amp; Tobago" @if($student->country == 'Trinidad
                          &amp; Tobago') selected @endif >Trinidad &amp; Tobago (+1868)</option>
                        <option data-countryCode="216" value="Tunisia" @if($student->country == 'Tunisia') selected
                          @endif >Tunisia (+216)</option>
                        <option data-countryCode="90" value="Turkey" @if($student->country == 'Turkey') selected @endif
                          >Turkey (+90)</option>
                        <option data-countryCode="7" value="Turkmenistan" @if($student->country == 'Turkmenistan')
                          selected @endif >Turkmenistan (+7)</option>
                        <option data-countryCode="993" value="Turkmenistan" @if($student->country == 'Turkmenistan')
                          selected @endif >Turkmenistan (+993)</option>
                        <option data-countryCode="1649" value="Turks" @if($student->country == 'Turks') selected @endif
                          >Turks &amp; Caicos Islands (+1649)</option>
                        <option data-countryCode="688" value="Tuvalu" @if($student->country == 'Tuvalu') selected @endif
                          >Tuvalu (+688)</option>
                        <option data-countryCode="256" value="Uganda " @if($student->country == 'Uganda') selected
                          @endif >Uganda (+256)</option>
                        <option data-countryCode="44" value="UK" @if($student->country == 'UK') selected @endif >UK
                          (+44)</option>
                        <option data-countryCode="380" value="Ukraine" @if($student->country == 'Ukraine') selected
                          @endif >Ukraine (+380)</option>
                        <option data-countryCode="971" value="United Arab Emirates" @if($student->country == 'United
                          Arab Emirates') selected @endif >United Arab Emirates (+971)</option>
                        <option data-countryCode="598" value="Uruguay" @if($student->country == 'Uruguay') selected
                          @endif >Uruguay (+598)</option>
                        <option data-countryCode="1" value="USA" @if($student->country == 'USA') selected @endif >USA
                          (+1)</option>
                        <option data-countryCode="7" value="Uzbekistan" @if($student->country == 'Uzbekistan') selected
                          @endif >Uzbekistan (+7)</option>
                        <option data-countryCode="678" value="Vanuatu" @if($student->country == 'Vanuatu') selected
                          @endif >Vanuatu (+678)</option>
                        <option data-countryCode="379" value="Vatican City" @if($student->country == 'Vatican City')
                          selected @endif >Vatican City (+379)</option>
                        <option data-countryCode="58" value="Venezuela" @if($student->country == 'Venezuela') selected
                          @endif >Venezuela (+58)</option>
                        <option data-countryCode="84" value="Vietnam" @if($student->country == 'Vietnam') selected
                          @endif >Vietnam (+84)</option>
                        <option data-countryCode="1284" value="Virgin Islands" @if($student->country == 'Virgin
                          Islands') selected @endif >Virgin Islands - British (+1284)</option>
                        <option data-countryCode="1340" value="Virgin Islands" @if($student->country == 'Virgin
                          Islands') selected @endif >Virgin Islands - US (+1340)</option>
                        <option data-countryCode="681" value="Wallis &amp; Futuna" @if($student->country == 'Wallis
                          &amp; Futuna') selected @endif >Wallis &amp; Futuna (+681)</option>
                        <option data-countryCode="969" value="Yemen (North)" @if($student->country == 'Yemen (North)')
                          selected @endif >Yemen (North)(+969)</option>
                        <option data-countryCode="967" value="Yemen (South)" @if($student->country == 'Yemen (South)')
                          selected @endif >Yemen (South)(+967)</option>
                        <option data-countryCode="260" value="Zambia" @if($student->country == 'Zambia') selected @endif
                          >Zambia (+260)</option>
                        <option data-countryCode="263" value="Zimbabwe" @if($student->country == 'Zimbabwe') selected
                          @endif >Zimbabwe (+263)</option>

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
                              <input type="text" class="form-control" id="code" placeholder="+91" required="" name="pre"
                                value="" readonly="">
                            </td>
                            <td>
                              <input type="text" class="form-control reqfield" id="stuMobile" name="mobile"
                                style="width: 350px !important;" value="{{ old('mobile', $student->phone) }}">
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
                        value="{{ old('passport', $student->passport_no) }}">
                      @error('passport')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="validationCustom02">City <span class="redmtext">*</span></label>
                      <input type="text" class="form-control reqfield" id="stuCity" name="city"
                        value="{{ old('city', $student->city) }}">
                      @error('city')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for "validationCustom02">Contact Address</label>
                      <input type="text" class="form-control" id="stuAddress" name="address"
                        value="{{ old('address', $student->address) }}">
                      @error('address')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="validationCustom02">Active status</label>
                      <select class="form-control basic reqfield" id="stuStatus" name="status">
                        <option value="">Select Status</option>
                        <option value="1" @if(old('status', $student->active_status) == 1) selected @endif>Active
                        </option>
                        <option value="0" @if(old('status', $student->active_status) == 0) selected @endif>Deactive
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
                      <input type="password" class="form-control reqfield" name="confirm_password">
                      @error('confirm_password')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                  </div>


                  <hr>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="validationCustom02">Change student Photo</label>
                      <input type="file" id="photo" name="photo" class="form-control">
                      @error('photo')<span class="text-danger" style="margin-left: 31%;">{{ $message
                        }}</span>@enderror
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

                <input name="editId" type="hidden" id="" value="{{ $student->id }}">





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

      <!--this is the student activity model-->
      <div class="modal fade bs-example-modal-center activityModel" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" id="">
        <div class="modal-dialog" role="document" style="max-width: 600px; width: 600px;">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title mt-0" id="poptitle">Add Activity</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body" id="popcontent">


              <form action="{{ route('stu.activity.add') }}" method="post">
                @csrf
                <input type="hidden" value="{{ $student->id }}" name="student_id">
                <div class="form-group mb-3">
                  <div class="row" style="padding:10px;">
                    <div class="col-md-6">
                      <div style="margin-bottom:2px; font-size:12px;">Type</div>

                      <select name="type" class="form-control" autocomplete="off"
                        style="width:100%; margin-bottom:20px;" required>
                        <option value="">select</option>
                        <option value="Call">Call</option>
                        <option value="Task">Task</option>
                        <option value="Meeting">Meeting</option>
                      </select>

                    </div>


                    <div class="col-md-6">
                      <div style="margin-bottom:2px; font-size:12px;">Status</div>

                      <select name="status" class="form-control" autocomplete="off" style="margin-bottom:10px;"
                        required>
                        <option value="">select stauts</option>

                        <option value="No Action">No Action</option>

                        <option value="Call Not Picked">Call Not Picked</option>

                        <option value="Interested">Interested</option>

                        <option value="Call Back Tomorrow">Call Back Tomorrow</option>

                        <option value="Asking For Fee and Demo">Asking For Fee and Demo</option>

                        <option value="Not Yet Decided">Not Yet Decided</option>

                        <option value="Not Interested In Any Course">Not Interested In Any Course</option>

                        <option value="Test Link Sent">Test Link Sent</option>

                      </select>

                    </div>

                    <div class="col-md-12">
                      <div style="margin-bottom:2px; font-size:12px;">Description</div>
                      <textarea name="description" rows="4" class="form-control"></textarea>
                      <input name="queryid" type="hidden" value="100006">
                      <input name="action" type="hidden" value="addtask">
                    </div>

                  </div>




                </div>



                <div class="form-group mb-3">
                  <div style="margin-bottom:10px;"><strong><a href="#" onclick="$('.remindertables').toggle();">+ Set
                        Reminder</a></strong></div>

                  <table border="0" cellpadding="0" cellspacing="0" class="remindertables" style="display:none;">

                    <tbody>
                      <tr>

                        <td colspan="2" style=" font-size:12px;">Reminder Date </td>

                        <td style=" font-size:12px;">&nbsp;&nbsp;&nbsp;Time</td>

                        <td style=" font-size:12px;">&nbsp;&nbsp;&nbsp;Set Reminder </td>

                      </tr>

                      <tr>

                        <td colspan="2"><input type="date" class="form-control hasDatepicker" id="reminderDate"
                            name="reminder_date"></td>
                        <script>
                          $( function() {
                                $( "#reminderDate" ).datepicker({
                                  dateFormat: 'dd-mm-yy',minDate: 0
                            });
                              } );
                        </script>
                        <td style="padding-left:10px;"><select id="reminderTime" name="reminder_time"
                            class="form-control" autocomplete="off" style="width:130px;">
                            <option value="">Select time</option>
                            <option value="00:00:00">12:00 AM</option>
                            <option value="00:30:00">12:30 AM</option>
                            <option value="01:00:00">1:00 AM</option>
                            <option value="01:30:00">1:30 AM</option>
                            <option value="02:00:00">2:00 AM</option>
                            <option value="02:30:00">2:30 AM</option>
                            <option value="03:00:00">3:00 AM</option>
                            <option value="03:30:00">3:30 AM</option>
                            <option value="04:00:00">4:00 AM</option>
                            <option value="04:30:00">4:30 AM</option>
                            <option value="05:00:00">5:00 AM</option>
                            <option value="05:30:00">5:30 AM</option>
                            <option value="06:00:00">6:00 AM</option>
                            <option value="06:30:00">6:30 AM</option>
                            <option value="07:00:00">7:00 AM</option>
                            <option value="07:30:00">7:30 AM</option>
                            <option value="08:00:00">8:00 AM</option>
                            <option value="08:30:00">8:30 AM</option>
                            <option value="09:00:00">9:00 AM</option>
                            <option value="09:30:00">9:30 AM</option>
                            <option value="10:00:00">10:00 AM</option>
                            <option value="10:30:00">10:30 AM</option>
                            <option value="11:00:00">11:00 AM</option>
                            <option value="11:30:00">11:30 AM</option>
                            <option value="12:00:00">12:00 PM</option>
                            <option value="12:30:00">12:30 PM</option>
                            <option value="13:00:00">1:00 PM</option>
                            <option value="13:30:00">1:30 PM</option>
                            <option value="14:00:00">2:00 PM</option>
                            <option value="14:30:00">2:30 PM</option>
                            <option value="15:00:00">3:00 PM</option>
                            <option value="15:30:00">3:30 PM</option>
                            <option value="16:00:00">4:00 PM</option>
                            <option value="16:30:00">4:30 PM</option>
                            <option value="17:00:00">5:00 PM</option>
                            <option value="17:30:00">5:30 PM</option>
                            <option value="18:00:00">6:00 PM</option>
                            <option value="18:30:00">6:30 PM</option>
                            <option value="19:00:00">7:00 PM</option>
                            <option value="19:30:00">7:30 PM</option>
                            <option value="20:00:00">8:00 PM</option>
                            <option value="20:30:00">8:30 PM</option>
                            <option value="21:00:00">9:00 PM</option>
                            <option value="21:30:00">9:30 PM</option>
                            <option value="22:00:00">10:00 PM</option>
                            <option value="22:30:00">10:30 PM</option>
                            <option value="23:00:00">11:00 PM</option>
                            <option value="23:30:00">11:30 PM</option>

                          </select></td>

                        <td style="padding-left:10px;"><select name="reminder" class="form-control" autocomplete="off"
                            style="width:100px;">

                            <option value="0">No</option>
                            <option value="1">Yes</option>


                          </select></td>

                      </tr>

                    </tbody>
                  </table>



                </div>
                {{-- <div class="form-group mb-2">
                  <select id="assignTo" name="assignTo" class="form-control" autocomplete="off"
                    onchange="changeAssignTo('');">
                    <option value="0">Assign To</option>
                    <option value="1" selected="selected">Education CRM</option>
                    <option value="4012">sdas dsfs</option>
                  </select>
                </div> --}}

                <div class="form-group" style="overflow:hidden;">


                  <div style="margin-top:5px;"><button type="submit" id="savingbutton" class="btn btn-primary"
                      onclick="this.value='Saving...';" style="float:right;"><i class="fa fa-plus"
                        aria-hidden="true"></i> Save</button></div>
                </div>

              </form>





















            </div>
          </div>
        </div>
      </div>
      <!--end of the student activity model--->

    </div>
    <!--end of the course suggetion-->

    <script>
      $('#searchC').on('keyup', function () {
              let dInput = this.value;
              
              // Check if the input is not empty or just whitespace
              if (dInput.trim() !== '') {
                  sendSearchRequest(dInput);
              }
        });

        // Add a blur event handler to check when the input loses focus
        $('#searchC').on('blur', function () {
            let dInput = this.value;
            
            // Check if the input is empty and cancel the AJAX request if it is
            if (dInput.trim() === '') {
                // Clear or hide the search results here
            }
        });

          
        function sendSearchRequest(dInput) {
                      $.ajax({
                              type: "POST",
                              url: "{{ route('course.search') }}",
                              data: {
                                  input: dInput,
                                  _token: "{{ csrf_token() }}" // Include the CSRF token here
                              },
                              dataType: "json",
                              success: function (response) {

                                //console.log(response.filterData);
                                $('#course_tbl').html("");
                                $.each(response.filterData, function (key, item){
                                            // console.log(item.id);
                                            
                                      $('#course_tbl').append('<tr>\
                                                          <td><img class="rounded-circle" alt="200x200" width="300"  src="{{ asset('uploads') }}/'+item.photo+'"  data-holder-rendered="true" id="updatephoto" style="width:35px;height:35px"></td>\
                                                          <td>'+item.name+'</td>\
                                                          <td>'+item.course+'</td>\
                                                          <td>'+item.course_period+'</td>\
                                                          <td>\
                                                              <form id="addCourseForm" action="{{ route('add_course.stu') }}" method="POST">\
                                                                  @csrf\
                                                                  <input type="hidden" name="student" value="{{ $student->id }}">\
                                                                  <input type="hidden" name="course" value="'+item.id+'">\
                                                                  <input type="text" name="display_id" value="'+item.id+'" readonly style="display:none;">\
                                                                  <button type="submit" class="btn btn-dark waves-effect waves-light">\
                                                                      <i class="fa fa-plus" aria-hidden="true"></i> Save\
                                                                  </button>\
                                                              </form>\
                                                          </td>\
                                                        </tr>');
                                    });
                                    
                              }

                      });

        } 


    </script>


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
      
    @if($errors->has('name') || $errors->has('email') || $errors->has('dob') || $errors->has('country') || $errors->has('mobile')||$errors->has('city')||$errors->has('address')
          || $errors->has('password')||$errors->has('confirm_password')||$errors->has('status')||$errors->has('photo'))
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
        $('#StudentEditeBtn').on('click', function(e) {
          $('.StudentEditeModel').modal('show');
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
        $(".doc-delete-confirm").on('click', function() {
          
          let id = $(this).attr("data-id");

          $('.doc-delete-model').modal('show');
          $(".del").attr("href", id)
        });
      });
  </script>

</body>

</html>