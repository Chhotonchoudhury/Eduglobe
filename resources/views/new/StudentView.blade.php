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

  <!--main-->
  <div class="wrapper" style="margin-top: 56px;padding-left: 20px;">
    <div class="container-fluid" style="max-width: 100%;">
      <div class="main-content">

        <div class="page-content">
          <div class="newboxheading">
            <div class="newhead">Query ID: 100004
              <div class="newoptionmenu">
                <div>
                  <a onclick="createquery('100004');"><button type="button"
                      class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray"
                      style="margin-bottom:10px;">

                      <i class="fa fa-pencil" aria-hidden="true"></i> &nbsp;Edit</button></a>
                </div>


                <div>
                  <a href="display.html?ga=query&view=1&id=100004&c=3"><button type="button"
                      class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray"
                      style="margin-bottom:10px;">

                      <i class="fa fa-calendar-check-o" aria-hidden="true"></i> &nbsp;Activity</button></a>
                </div>

                <div>
                  <a popaction="action=composemail&queryId=100004" onclick="loadpop('Compose Mail',this,'900px')"
                    data-toggle="modal" data-target=".bs-example-modal-center"><button type="button"
                      class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray"
                      style="margin-bottom:10px;">

                      <i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp;Email</button></a>
                </div>

                <div>
                  <a target="_blank" href="https://api.whatsapp.com/send?text=Hi&phone=+919654907178"><button
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
                      <div style="font-size:11px; margin-bottom:10px;"><strong>Created:</strong> 16-08-2023 &nbsp; |
                        &nbsp; <strong>Last Updated: 16/08/2023 - 12:07 AM</strong><strong style="color:#CC0000;"><a
                            href="display.html?ga=query&view=1&id=100004&c=3"></a></strong></div>
                      <div class="querystatustabmain" style="overflow:hidden;">



                        <ul class="breadcrumb">


                          <li class="">

                            <a href="display.html?ga=query&view=1&id=100004&sts=1">New</a>
                          </li>

                          <li class="">

                            <a href="display.html?ga=query&view=1&id=100004&sts=2">Contacted</a>
                          </li>

                          <li class="stclass3">

                            <a href="display.html?ga=query&view=1&id=100004&sts=3">Prospect</a>
                          </li>

                          <li class="">

                            <a href="display.html?ga=query&view=1&id=100004&sts=4">Test Link Sent</a>
                          </li>

                          <li class="">

                            <a href="display.html?ga=query&view=1&id=100004&sts=8">Brochure Sent</a>
                          </li>

                          <li class="">

                            <a href="display.html?ga=query&view=1&id=100004&sts=9">Follow Up</a>
                          </li>

                          <li class="">

                            <a href="#" onclick="alert('You can not mark as confirmed manually.');">Confirmed</a>
                          </li>

                          <li class="">

                            <a href="display.html?ga=query&view=1&id=100004&sts=6">Not Interested</a>
                          </li>

                          <li class="">

                            <a href="display.html?ga=query&view=1&id=100004&sts=7">Invalid</a>
                          </li>






                        </ul>



                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td align="left" valign="top" width="18%"
                      style="background-color:#f5f7f9; border-right: 1px solid #cfd7df;">
                      <div class="inquerytabsmain">

                        <div class="row" style="margin-right: 0px; margin-left: 0px;">


                          <ul class="nav nav-tabs nav-tabs-custom" style="border-bottom:0px solid #dee2e6;">

                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab"
                                href="#lead-details-tab"><span class="d-none d-md-block"><i class="fa fa-id-card-o"
                                    aria-hidden="true"></i> &nbsp;Student Details</span><span
                                  class="d-block d-md-none"><i class="mdi mdi-home-variant h5"></i></span></a></li>




                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#mails-tab"><span
                                  class="d-none d-md-block"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                  &nbsp;Mails</span><span class="d-block d-md-none"><i
                                    class="mdi mdi-settings h5"></i></span></a></li>


                            <li href="#activity-tab"><a class="nav-link" data-toggle="tab"
                                href="display.html?ga=query&view=1&id=100004&c=3"><span class="d-none d-md-block"><i
                                    class="fa fa-calendar-check-o" aria-hidden="true"></i> &nbsp;Activity</span><span
                                  class="d-block d-md-none"><i class="mdi mdi-email h5"></i></span></a></li>




                            <li class="nav-item"><a class="nav-link"
                                href="display.html?ga=query&view=1&id=100004&c=5"><span class="d-none d-md-block"><i
                                    class="fa fa-file-text" aria-hidden="true"></i> &nbsp;Billing</span><span
                                  class="d-block d-md-none"><i class="mdi mdi-settings h5"></i></span></a></li>


                            <li class="nav-item"><a class="nav-link"
                                href="display.html?ga=query&view=1&id=100004&c=10"><span class="d-none d-md-block"><i
                                    class="fa fa-user" aria-hidden="true"></i> &nbsp;Student Documents</span><span
                                  class="d-block d-md-none"><i class="mdi mdi-settings h5"></i></span></a></li>

                            <li class="nav-item"><a class="nav-link"
                                href="display.html?ga=query&view=1&id=100004&c=6"><span class="d-none d-md-block"><i
                                    class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;History</span><span
                                  class="d-block d-md-none"><i class="mdi mdi-settings h5"></i></span></a></li>
                          </ul>
                        </div>

                      </div>
                    </td>
                    <td align="left" valign="top">


                      <div class="card-body" style="padding:10px;">

                        <div class="tab-content m-0">


                          <div class="tab-pane fade show active" id="lead-details-tab">
                            <!-- Content for Lead Details tab goes here -->
                            <div class="col-lg-12" style="padding-left:5px;">

                              <h4 class="mt-0 header-title">Student Information</h4>
                              <a class="dropdown-item neweditpan"
                                style="cursor: pointer; position: absolute; right: 11px; top: 1px; z-index: 1; background-color: #4bb8c8; border-radius: 0px; color: #fff !important; border-radius: 2px;"
                                onclick="loadpop2('Edit Student',this,'600px')" data-toggle="modal"
                                data-target="#myModal2" data-backdrop="static"
                                popaction="action=addclient&amp;id=100003&qid=100004"><i class="fa fa-pencil"
                                  aria-hidden="true"></i></a>
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
                                  width="120" height="110"
                                  style="border-radius: 3px;border: 2px solid bisque;padding:2px">
                              </div>
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
                                      <td>@if($student->course_id){{ $row->course->name }}@endif</td>
                                    </tr>
                                    <tr>
                                      <td style="font-weight:400 !important; color:#666666;">Degree</td>
                                      <td><strong>&nbsp;:&nbsp;</strong></td>
                                      <td>@if($student->course_id){{ $row->course->course_degree }}@endif</td>
                                    </tr>
                                    <tr>
                                      <td style="font-weight:400 !important; color:#666666;">Duration</td>
                                      <td><strong>&nbsp;:&nbsp;</strong></td>
                                      <td>@if($student->course_id){{ $row->course->course_period }}@endif</td>
                                    </tr>
                                    <tr>
                                      <td style="font-weight:400 !important; color:#666666;">Total Fees </td>
                                      <td><strong>&nbsp;:&nbsp;</strong></td>
                                      <td>@if($student->course_id){{ $row->course->fess }}@endif</td>
                                    </tr>

                                    <tr>
                                      <td style="font-weight:400 !important; color:#666666;">Starting dates </td>
                                      <td><strong>&nbsp;:&nbsp;</strong></td>
                                      <td class="d-flex">@if($student->course_id){{
                                        \Carbon\Carbon::parse($row->course->starting_date)->format('F j, Y') }} / {{
                                        \Carbon\Carbon::parse($row->course->starting_date2)->format('F j, Y') }}@endif
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
                          </div>


                          <div class="tab-pane fade" id="mails-tab">
                            <!-- Content for Mails tab goes here -->
                            <h4 class="mt-0 header-title">Mails</h4>
                            <p>This is the content for Mails tab.</p>
                          </div>
                          <div class="tab-pane fade" id="activity-tab">
                            <!-- Content for Activity tab goes here -->
                            <h4 class="mt-0 header-title">Activity</h4>
                            <p>This is the content for Activity tab.</p>
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

</body>

</html>