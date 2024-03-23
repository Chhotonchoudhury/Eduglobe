<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
  <title>Enquries| Edudeve</title>
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

  <style>
    .table td,
    .table th {

      vertical-align: top;

    }

    .statusbox {
      margin-right: 5px;
      padding: 10px;
      text-align: center;
      background-color: #000000;
      font-size: 13px;
      color: #fff;
      border-radius: 4px;
      text-transform: uppercase;
    }

    .notes {
      font-size: 12px;
      background-color: #FFFFCC;
      border: 1px solid #FFCC33;
      padding: 0px 5px;
      color: #ff6a00;
      font-weight: 600;
      float: left;
      margin-top: 2px;
      border-radius: 2px;
    }





    .container-fluid {

      max-width: 100%;

      padding-left: 92px;

      padding-right: 22px;

      padding-top: 8px;

    }


    .statusbox .badge {
      padding: 0px;
      background-color: transparent;
    }

    .wrapper {

      margin-top: 56px;

      padding-left: 20px;

    }







    .card {
      -webkit-box-shadow: 0 0 1.25rem rgb(255 255 255 / 10%);
      box-shadow: 0 0 1.25rem rgb(255 255 255 / 10%);
    }





    .table>tbody>tr>td,
    .table>tfoot>tr>td,
    .table>thead>tr>td {

      padding: 10px 12px;

    }
  </style>

  <div class="wrapper">

    <div class="container-fluid">

      <div class="main-content">
        <div class="page-content">
          <!---top lare-->

          <!-- Success Alert -->
          @if (session('s_success'))
          <div class="alert alert-success bg-success text-white headersavealert" role="alert">
            {{ session('s_success') }}
          </div>
          {{ Session::forget('s_success') }}
          @endif

          <!-- Warning Alert -->


          <div class="newboxheading">
            <div class="newhead">Enquires
              <div class="newoptionmenu">


                <div>
                  <a onclick="$('.searchquerymain').toggle();"><button type="button"
                      class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray"
                      style="margin-bottom:10px;">

                      <i class="fa fa-filter" aria-hidden="true"></i> Filter</button></a>
                </div>


                <div>
                  <button type="button"
                    class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray hideinmobile"
                    data-toggle="dropdown" aria-expanded="false" style="margin-bottom:10px;">

                    Options <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                  <div class="dropdown-menu"
                    style="position: absolute; transform: translate3d(1222px, 224px, 0px); top: 0px; left: 0px; will-change: transform;"
                    x-placement="bottom-start">

                    <a class="dropdown-item" style="cursor:pointer;" href="client-Import.xls" target="_blank">Download
                      Excel Format</a><a class="dropdown-item" style="cursor:pointer;"
                      onclick="loadpop('Import',this,'400px')" data-toggle="modal"
                      data-target=".bs-example-modal-center" popaction="action=importFBleads">Import Excel</a><a
                      class="dropdown-item" style="cursor:pointer;"
                      href="https://tripcrm.in/educrm/crm/exportQuery.php?startDate=&endDate=&statusid=&searchcity=&searchsource=&searchconfirmproposal=&searchusers=&keyword=&keyword="
                      target="_blank">Export Data</a>
                  </div>
                </div>

                <div>

                  <button type="button" class="btn btn-secondary btn-lg waves-effect waves-light "
                    style="margin-bottom:10px;" data-toggle="modal" data-target="#myModal2">Add Enquiry </button>

                </div>


              </div>
            </div>


          </div>
          <!---end top --->


          <!-- start page title -->

          <div class="row">

            <div class="col-md-12 col-xl-12" style="margin-left: 5px; margin-top: 35px;">

              <div class="card"
                style="min-height:500px;    border-radius: 0px; margin-bottom:0px; background-color:transparent;">

                <div class="card-body" style="padding:0px;">



                  <div class="hideinmobile searchquerymain"
                    style="  margin-bottom: 10px; float: left; width: 100%; border-top: 1px solid #dee2e6; border-bottom: 2px solid #dee2e6; background-color: #f3f3f3; padding: 8px;">



                    <div class="row" style="margin-right: 0px; margin-left: 0px;">





                      <div class="col-md-3 col-xl-3 ">

                        <form action="" method="get" enctype="multipart/form-data" class="querytabsleadsearch ">

                          <table border="0" cellpadding="0" cellspacing="0">

                            <tr>

                              <td><input type="text" class="form-control" id="startDate" name="startDate" readonly=""
                                  placeholder="From" value="" style="width:130px;"></td>

                              <td style="padding-left:5px;"><input type="text" class="form-control" id="endDate"
                                  name="endDate" readonly="" placeholder="From" value="" style="width:130px;"></td>

                              <td style="padding-left:5px;"><input type="text" name="keyword" class="form-control"
                                  placeholder="Search by ID, name, email, mobile" value="" style=" width:250px;">

                                <input name="page" type="hidden" value="" /><input name="ga" type="hidden"
                                  value="query" />
                              </td>

                              <td style="padding-left:5px;"><select name="searchcity" class="form-control"
                                  style="width:160px;">

                                  <option value="">All City</option>


                                  <option value="706">Delhi</option>


                                </select></td>

                              <td style="padding-left:5px;"><select name="searchusers" class="form-control"
                                  style="width:130px;">

                                  <option value="">All Users</option>


                                  <option value="1">Education CRM</option>


                                </select></td>
                              <td style="padding-left:5px;"><select name="searchsource" class="form-control"
                                  id="searchsource" style="width:140px;">

                                  <option value="">All Source</option>


                                  <option value="16">Advertisment</option>


                                  <option value="11">Chat</option>


                                  <option value="13">Facebook</option>


                                  <option value="14">Instagram</option>


                                  <option value="6">Justdial</option>


                                  <option value="15">Online</option>


                                  <option value="10">Others</option>


                                  <option value="19">PPC</option>


                                  <option value="17">Referral</option>


                                  <option value="3">Telephone</option>


                                  <option value="1">Walk-In</option>


                                  <option value="2">Website</option>


                                  <option value="18">WhatsApp</option>


                                </select></td>



                              <td style="padding-left:5px;"><button type="submit"
                                  class="btn btn-secondary btn-lg waves-effect waves-light"
                                  style="padding: 6px 10px;"><i class="fa fa-search" aria-hidden="true"></i>
                                  Search</button></td>



                              <td style="padding-left:5px;"><a href="display.html?ga=query"><button type="button"
                                    class="btn btn-secondary btn-lg waves-effect waves-light"
                                    style="padding: 6px 10px;">All</button></a></td>



                            </tr>

                          </table>

                        </form>

                      </div>

                    </div>



                  </div>



                  <div style="margin-bottom: 0px; padding: 10px; padding-right: 20px;" class="querytabslead">

                    <table width="100%" border="0" cellpadding="0" cellspacing="0">

                      <tr>

                        <td width="10%" align="left" valign="top">

                          <a href="{{ route('enq.stu') }}">

                            <div class="statusbox" style="background-color:#000;">
                              <div style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                                <div @if($idFromUrl==0)class="ripple" @endif></div> {{ count($penstudent) }}

                              </div>All Enquires
                            </div>
                          </a>
                        </td>

                        @foreach($EnquiryStatus as $key => $row)

                        @php
                        // Define an array of predefined colors
                        $statusColors = [
                        '#655be6',
                        '#0cb5b5',
                        '#e45555',
                        '#FF6600',
                        '#cc00a9',
                        '#46cd93',
                        '#6c757d',
                        '#f9392f',
                        // Add more colors as needed
                        ];

                        // Shuffle the array of colors
                        $colorIndex = $key % count($statusColors);

                        // Take the first color from the shuffled array
                        $statusColor = $statusColors[$colorIndex];
                        @endphp

                        <td width="10%" align="left" valign="top"><a href="{{ route('enq.stu', $row->id) }}">

                            <div class="statusbox" style="background-color:{{ $statusColor }};">
                              <div style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                                <div @if($idFromUrl==$row->id)class="ripple" @endif></div> {{
                                $studentsWithStatusCount->where('enq_status', $row->id)->first()->student_count ?? 0
                                }}


                              </div><span class="badge badge-primary">{{ $row->status }}</span>
                            </div>
                          </a>
                        </td>

                        @endforeach



                      </tr>

                    </table>


                  </div>

                  <form action="frmaction.html" method="post" enctype="multipart/form-data" name="addeditfrm"
                    target="actoinfrm" id="addeditfrm" style="padding:0px 10px 20px;">

                    <div id="bulkassign"
                      style="display:none;padding: 5px 2px; background-color: #f0f0f0; border-bottom: 2px solid #ddd; border-radius: 3px; margin-bottom: 10px;">
                      <table border="0" cellspacing="0" cellpadding="5">

                        <tr>

                          <td style="font-size:13px;"><input type="checkbox" id="ckbCheckAll"
                              style="width: 16px; height: 16px;" /></td>

                          <td style="font-size:13px;">Select All&nbsp;</td>

                          <td><select id="assignToPerson" name="assignToPerson" class="form-control"
                              style="padding: 5px; font-size: 12px; height: 30px; line-height: 20px; color: #000; font-weight: 600;"
                              autocomplete="off">

                              <option value="0">Assign To</option>


                              <option value="1">

                                Not Assign</option>


                            </select></td>

                          <td><button type="submit" id="savingbutton" class="btn btn-primary"
                              onclick="this.form.submit(); this.value='Saving...';"
                              style="float:right;padding: 3px 10px;">

                              Save

                            </button></td>

                          <td><input autocomplete="false" name="action" type="hidden" id="action"
                              value="bulkassignquery" /></td>

                        </tr>

                      </table>

                    </div>


                    @foreach ($students as $row)
                    <div class="querylistbox">


                      <div class="qtp">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">

                          <tbody>
                            <tr>

                              <td width="3%" align="center" valign="top" style="padding-right:10px;">
                                <img
                                  src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):asset('assets/assets/img/NoProfile.png') }}"
                                  width="55" height="55" style="border-radius: 10px;" />
                              </td>



                              <td width="20%" align="left" valign="top" style="padding-right:20px;">
                                <div
                                  style="font-size:13px; line-height: 16px; margin-bottom:3px;white-space: nowrap; max-width:200px; overflow: hidden; text-overflow: ellipsis;font-weight:600;">
                                  {{ $row->name }}</div>
                                <div style="font-size:13px; color:#686868;">{{ $row->email }}</div>
                                Verify : @if($row->verified_by != '')<i class="fa fa-check-circle"
                                  style="font-size:15px;color:#46cd93"></i>@else <i class="fa fa-times-circle"
                                  style="font-size:15px;color:#e45555;"></i> @endif
                              </td>



                              <td align="left" width="15%" valign="top" style="font-size:13px; line-height: 16px;">
                                Student Interested</span>



                                <div
                                  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-size:12px;color:#686868;white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width:200px;">
                                  <i class="fa fa-sticky-note" aria-hidden="true" style=" color:#ffa500;"></i> &nbsp;{{
                                  $row->remarks }}No
                                  Notes
                                </div>

                              </td>

                              <td width="13%" align="right" valign="middle">



                                <div class="btn-group" role="group" aria-label="Option">


                                  <a class="studentInfo btn btn-secondary waves-effect waves-light"
                                    data-id="{{ $row->id }}" href="#">

                                    <i class="fa fa-eye" aria-hidden="true"></i>

                                  </a>



                                  <a target="_blank"
                                    href="https://api.whatsapp.com/send?text=Hi&phone=+916294998402"><button
                                      type="button" class="btn btn-secondary"><i class="fa fa-whatsapp"
                                        aria-hidden="true"></i></button></a>



                                  <a popaction="action=composemail&queryId=100008"
                                    onclick="loadpop('Compose Mail',this,'900px')" data-toggle="modal"
                                    data-target=".bs-example-modal-center"><button type="button"
                                      class="btn btn-secondary"><i class="fa fa-envelope-o"
                                        aria-hidden="true"></i></button></a>



                                  <a class="EditeBtn" data-id="{{ $row->id }}"><button type="button"
                                      class="btn btn-secondary"><i class="fa fa-pencil"
                                        aria-hidden="true"></i></button></a>

                                  <a class="enq-delete-confirm" data-id="{{ route('delete.stu', $row->id) }}"><button
                                      type="button" class="btn btn-secondary"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button></a>


                                </div>



                              </td>

                            </tr>

                          </tbody>
                        </table>
                      </div>

                      <div class="qbt">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">

                          <tbody>
                            <tr>



                              <td width="17%" valign="top" style="padding-left:20px;">
                                <div
                                  style="font-size:13px; line-height: 16px; margin-bottom:3px;white-space: nowrap; max-width:200px; overflow: hidden; text-overflow: ellipsis;font-weight:600;">
                                  Contacts</div>



                                <div style="font-size:13px; color:#686868;">+{{ $row->country_code }} {{ $row->phone }}
                                </div>
                              </td>



                              <td width="20%" align="left" valign="top" style="padding-right:20px;">
                                <div
                                  style="font-size:13px; line-height: 16px; margin-bottom:3px;white-space: nowrap; max-width:200px; overflow: hidden; text-overflow: ellipsis;font-weight:600;">
                                  Address</div>

                                <div style="font-size:13px; line-height: 16px;">
                                  {{ $row->country }} , {{ $row->city }}
                                </div>
                              </td>

                              <td width="12%" align="left" valign="top"
                                style="padding-right: 20px;padding-bottom:10px;">
                                <div style="color: #303030; font-size: 12px; ">Assigned to</div>
                                <form method="post" action="{{ route('verify.stu') }}">
                                  @csrf
                                  <div style="font-size: 12px; display: flex; align-items: center;">
                                    @if($row->refer_to == null)
                                    <input type="hidden" name="student_id" value="{{ $row->id }}">

                                    <select class="form-control"
                                      style="padding: 3px; font-size: 12px; height: 25px; line-height: 15px; color: #000; font-weight: 600;margin-right: 3px;"
                                      autocomplete="off" required="" name="users">

                                      <option value="1">Assign to me</option>
                                      @foreach ($users as $rows)
                                      @foreach($rows->roles->pluck('name') as $role)
                                      <option value="{{ $rows->id }}">{{ $rows->name }} ({{ $role }}
                                        )@if(Auth::user()->id === $rows->id ) My self @endif</option>
                                      @endforeach
                                      @endforeach

                                    </select>
                                    <button type="submit" class="btn btn-dark text-white"
                                      style="padding: 3px; font-size: 12px; height: 25px; line-height: 15px; color: #000; font-weight: 600;"><i
                                        class="fa fa-arrow-circle-o-right" style="font-size:18px;"
                                        aria-hidden="true"></i></button>

                                    @else
                                    <div style="font-size:13px; line-height: 16px;">

                                      {{ optional($row->refer_user)->name }}

                                      @if($row->refer_user && $row->refer_user->roles->isNotEmpty())
                                      (Roles:
                                      @foreach ($row->refer_user->roles as $role)
                                      {{ $role->name }}
                                      @if (!$loop->last)
                                      ,
                                      @endif
                                      @endforeach)
                                      @endif


                                    </div>
                                    @endif
                                  </div>
                                </form>
                              </td>


                              <!-- <td width="13%" align="left" valign="top">
                              <div style="font-size:12px; line-height: 16px; margin-bottom:3px;"><span
                                  style="color:#686868;"><i class="fa fa-clock-o" aria-hidden="true"></i> Created</span>
                              </div>

                              <div style="font-size:11px; line-height: 16px; margin-bottom:3px;">23-08-2023</div>
                            </td> -->

                              <td width="13%" align="right" valign="middle" style="padding-right: 20px;">
                                <div style="font-size:12px; line-height: 16px; margin-bottom:3px;"><span
                                    style="color:#686868;"><i class="fa fa-clock-o"
                                      aria-hidden="true"></i>&nbsp;&nbsp;Created at</span></div>

                                <div style="font-size:11px; line-height: 16px; margin-bottom:3px;">{{ date('F j, Y g:i
                                  A', strtotime($row->created_at)) }}
                                </div>
                              </td>

                            </tr>

                          </tbody>
                        </table>
                      </div>


                      {{-- <div class="viewpackageheader" onclick="$('#pro8').toggle();"><i class="fa fa-dot-circle-o"
                          aria-hidden="true"></i> &nbsp;View Proposal (1)</div>

                      <div class="proposallistouter" style="display:none;" id="pro8">
                        <a href="display.html?ga=itineraries&view=1&id=100018"><i class="fa fa-list-alt"
                            aria-hidden="true"></i> &nbsp;Regular Classroom Program: VR and AR (&#8377;50,000 ) &nbsp;
                        </a>
                      </div> --}}


                    </div>
                    @endforeach


                  </form>




                  <div class="mt-3 pageingouter">

                    <div
                      style="float: left; font-size: 13px; padding: 7px 11px; border: 1px solid #ededed; background-color: #fff; color: #000;">
                      Total Records: <strong>{{ count($students) }}</strong></div>

                    <div class="pagingnumbers"></div>

                  </div>


                </div>





              </div>





            </div>


          </div>
          <!--end col-->


          <!-- end row -->
        </div>



        <!-- End Page-content -->


      </div>

    </div>
  </div>






  <div id="reminderouterrightbottom">
    <div style="padding:20px;">

      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="2"><img src="images/remonder-bell_192.gif" style="width:70px;" /></td>
          <td width="90%" id="loadremindertask" style="padding-left:10px;">&nbsp;</td>
        </tr>
      </table>

    </div>
  </div>





  <!--- end fot the main contetn section --->

  <div style="height:50px;"></div>
  <iframe id="actoinfrm" name="actoinfrm" src="" style="display:none;"></iframe>
  @include('new_layouts.partials.footer')

  <!--delete enquiry confirmation --->
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
                <h4>You are confirming the enquiry deletion</h4>

                This action cannot be undone.
              </div>


            </div>
          </div>

          <div class="modal-footer">
            <a class="del"><button type="submit" class="btn btn-danger waves-effect waves-light">Confirm</button></a>
          </div>


        </div>
      </div>
    </div>
  </div>
  <!---nd of the enquiry delete confirmation--->


  <!---this is the model of showing student info---->

  <!---this is the model section --->
  <div class="modal fade bs-example-modal-center myModal3" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h6 class="modal-title" id="poptitle2">Student Informations</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <div class="modal-body" id="popcontent2">


          <div class="media" style="margin-left: 2%;">
            <div class="mr-3 align-self-center">
              <img id="stu_photo" src="http://localhost/eduglobe/public/uploads/202212281610student1.jpg" alt=""
                class="avatar-sm rounded-circle" style="width: 120px;border-radius:0% !important;">
            </div>
            <div class="media-body " style="margin-top: 1%;">
              <div class="d-flex align-items-center">
                <h5 class="font-size-16" id="stu_name" style="margin-right: 10px;">MOHAMMED YOUSIF</h5>
                <a id="trans_btn">
                  <button type="button" class="btn btn-primary">Enquiry to Student &nbsp;<i
                      class="fa fa-arrow-circle-o-right" style="font-size: 20px;"></i></button>
                </a>
              </div>


              <p class="text-truncate mb-0"><span class="lightbox">Email:
                  <strong id="stu_email">callslink@gmail.com</strong> &nbsp;|&nbsp;
                  Mobile:
                  <strong id="stu_mobile">183290270</strong>&nbsp;&nbsp;|&nbsp;&nbsp;City:</span>
                <strong id="stu_city">Kuala Lumpur</strong>&nbsp;&nbsp;
              </p>

              <p><span class="lightbox">Country: <strong id="stu_country">Malaysia</strong>
                  &nbsp;|&nbsp;
                  Passport No: <strong id="stu_passport">A1234321</strong></span>
                &nbsp;|&nbsp;
                Qualification: <strong id="stu_qualification"></strong></span>
              </p>

              <p>
                <span class="lightbox">Student Interested in : <strong id="stu_interest"></strong>
              </p>

              <p>
                <span class="lightbox">Verification : <strong id="stu_verification"> </strong>&nbsp;|&nbsp;
                  <a id="verify_btn"><button type="button" class="btn btn-primary" id="verifyBtn">verify &nbsp;<i
                        class="fa fa-check-circle"></i></button></a>
              </p>


              <h6 class="font-size-16 mb-0" id="stu_name">Change Enquiry Status Below ↓</h6>


            </div>

          </div>




          <div class="table-responsive mt-3">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">

              <tr>

                @foreach($EnquiryStatus as $key => $row)

                @php
                // Define an array of predefined colors
                $statusColors = [
                '#655be6',
                '#0cb5b5',
                '#e45555',
                '#FF6600',
                '#cc00a9',
                '#46cd93',
                '#6c757d',
                '#f9392f',
                // Add more colors as needed
                ];

                // Shuffle the array of colors
                $colorIndex = $key % count($statusColors);

                // Take the first color from the shuffled array
                $statusColor = $statusColors[$colorIndex];
                @endphp

                <td width="10%" align="left" valign="top">


                  <div class="statusbox modalstatus" data-status-id="{{ $row->id }}"
                    style="background-color:{{ $statusColor }};">
                    <a href class="enq-change-status">
                      <div style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">

                      </div><span class="badge badge-primary">{{ $row->status }}</span>
                    </a>
                  </div>


                </td>

                @endforeach


              </tr>

            </table>
          </div>


        </div>

        <div class="modal-footer">
          <input name="Save" type="submit" value="Save" id="savingbutton" class="btn btn-primary"
            onclick="this.value='Saving...';">
        </div>



      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div>
  <!---end of the section ---->
  <!----end of the info ---->



  <!---model section ------>
  <div class="modelnew modal right fade " id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document" style="width: 500px; max-width: 500px;">
      <div class="modal-content">

        <div class="modal-header">

          <h4 class="modal-title" id="poptitle2">Enquiery</h4>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <div class="modal-body" id="popcontent2">

          <form method="POST" id="EnqForm" action="{{ route('store.stu') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
              <div class="row">

                <input type="hidden" id="StuID" name="Editid" value="{{ old('Editid') }}">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="validationCustom02">Student Name </label>
                    <input type="text" class="form-control reqfield" id="name" name="name" value="{{ old('name') }}">
                    @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="validationCustom02">Student Email </label>
                    <input type="email" class="form-control reqfield" id="email" name="email"
                      value="{{ old('email') }}">
                    @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="validationCustom02">Date of birth </label>
                    <input type="date" class="form-control reqfield" id="dob" name="dob" value="{{ old('dob') }}">
                    @error('dob')<span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                </div>


                <div class="col-md-2">
                  <div class="form-group">
                    <label for="validationCustom02">Student country </label>
                    <select class="form-control basic reqfield" id="country" name="country" require>
                      <option value="">Select Country</option>
                      <option data-countryCode="213" value="Algeria" @if(old('country')=='Algeria' ) selected @endif>
                        Algeria (+213)</option>
                      <option data-countryCode="376" value="Andorra" @if(old('country')=='Andorra' ) selected @endif>
                        Andorra (+376)</option>
                      <option data-countryCode="244" value="Angola" @if(old('country')=='Angola' ) selected @endif>
                        Angola (+244)</option>
                      <option data-countryCode="1264" value="Anguilla" @if(old('country')=='Anguilla' ) selected @endif>
                        Anguilla (+1264)</option>
                      <option data-countryCode="1268" value="Antigua & Barbuda" @if(old('country')=='Antigua & Barbuda'
                        ) selected @endif>Antigua & Barbuda (+1268)</option>
                      <option data-countryCode="54" value="Argentina" @if(old('country')=='Argentina' ) selected @endif>
                        Argentina (+54)</option>
                      <option data-countryCode="374" value="Armenia" @if(old('country')=='Armenia' ) selected @endif>
                        Armenia (+374)</option>
                      <option data-countryCode="297" value="Aruba" @if(old('country')=='Aruba' ) selected @endif>Aruba
                        (+297)</option>
                      <option data-countryCode="61" value="Australia" @if(old('country')=='Australia' ) selected @endif>
                        Australia (+61)</option>
                      <option data-countryCode="43" value="Austria" @if(old('country')=='Austria' ) selected @endif>
                        Austria (+43)</option>
                      <option data-countryCode="994" value="Azerbaijan" @if(old('country')=='Azerbaijan' ) selected
                        @endif>Azerbaijan (+994)</option>
                      <option data-countryCode="1242" value="Bahamas" @if(old('country')=='Bahamas' ) selected @endif>
                        Bahamas (+1242)</option>
                      <option data-countryCode="973" value="Bahrain" @if(old('country')=='Bahrain' ) selected @endif>
                        Bahrain (+973)</option>
                      <option data-countryCode="880" value="Bangladesh" @if(old('country')=='Bangladesh' ) selected
                        @endif>Bangladesh (+880)</option>
                      <option data-countryCode="1246" value="Barbados" @if(old('country')=='Barbados' ) selected @endif>
                        Barbados (+1246)</option>
                      <option data-countryCode="375" value="Belarus" @if(old('country')=='Belarus' ) selected @endif>
                        Belarus (+375)</option>
                      <option data-countryCode="32" value="Belgium" @if(old('country')=='Belgium' ) selected @endif>
                        Belgium (+32)</option>
                      <option data-countryCode="501" value="Belize" @if(old('country')=='Belize' ) selected @endif>
                        Belize (+501)</option>
                      <option data-countryCode="229" value="Benin" @if(old('country')=='Benin' ) selected @endif>Benin
                        (+229)</option>
                      <option data-countryCode="1441" value="Bermuda" @if(old('country')=='Bermuda' ) selected @endif>
                        Bermuda (+1441)</option>
                      <option data-countryCode="975" value="Bhutan" @if(old('country')=='Bhutan' ) selected @endif>
                        Bhutan (+975)</option>
                      <option data-countryCode="591" value="Bolivia" @if(old('country')=='Bolivia' ) selected @endif>
                        Bolivia (+591)</option>
                      <option data-countryCode="387" value="Bosnia Herzegovina" @if(old('country')=='Bosnia Herzegovina'
                        ) selected @endif>Bosnia Herzegovina (+387)</option>
                      <option data-countryCode="267" value="Botswana" @if(old('country')=='Botswana' ) selected @endif>
                        Botswana (+267)</option>
                      <option data-countryCode="55" value="Brazil" @if(old('country')=='Brazil' ) selected @endif>Brazil
                        (+55)</option>
                      <option data-countryCode="673" value="Brunei" @if(old('country')=='Brunei' ) selected @endif>
                        Brunei (+673)</option>
                      <option data-countryCode="359" value="Bulgaria" @if(old('country')=='Bulgaria' ) selected @endif>
                        Bulgaria (+359)</option>
                      <option data-countryCode="226" value="Burkina Faso" @if(old('country')=='Burkina Faso' ) selected
                        @endif>Burkina Faso (+226)</option>
                      <option data-countryCode="257" value="Burundi" @if(old('country')=='Burundi' ) selected @endif>
                        Burundi (+257)</option>
                      <option data-countryCode="855" value="Cambodia" @if(old('country')=='Cambodia' ) selected @endif>
                        Cambodia (+855)</option>
                      <option data-countryCode="237" value="Cameroon" @if(old('country')=='Cameroon' ) selected @endif>
                        Cameroon (+237)</option>
                      <option data-countryCode="1" value="Canada" @if(old('country')=='Canada' ) selected @endif>Canada
                        (+1)</option>
                      <option data-countryCode="238" value="Cape Verde Islands" @if(old('country')=='Cape Verde Islands'
                        ) selected @endif>Cape Verde Islands (+238)</option>
                      <option data-countryCode="1345" value="Cayman Islands" @if(old('country')=='Cayman Islands' )
                        selected @endif>Cayman Islands (+1345)</option>
                      <option data-countryCode="236" value="Central African Republic"
                        @if(old('country')=='Central African Republic' ) selected @endif>Central African Republic (+236)
                      </option>
                      <option data-countryCode="56" value="Chile" @if(old('country')=='Chile' ) selected @endif>Chile
                        (+56)</option>
                      <option data-countryCode="86" value="China" @if(old('country')=='China' ) selected @endif>China
                        (+86)</option>
                      <option data-countryCode="57" value="Colombia" @if(old('country')=='Colombia' ) selected @endif>
                        Colombia (+57)</option>
                      <option data-countryCode="269" value="Comoros" @if(old('country')=='Comoros' ) selected @endif>
                        Comoros (+269)</option>
                      <option data-countryCode="242" value="Congo" @if(old('country')=='Congo' ) selected @endif>Congo
                        (+242)</option>
                      <option data-countryCode="682" value="Cook Islands" @if(old('country')=='Cook Islands' ) selected
                        @endif>Cook Islands (+682)</option>
                      <option data-countryCode="506" value="Costa Rica" @if(old('country')=='Costa Rica' ) selected
                        @endif>Costa Rica (+506)</option>
                      <option data-countryCode="385" value="Croatia" @if(old('country')=='Croatia' ) selected @endif>
                        Croatia (+385)</option>
                      <option data-countryCode="53" value="Cuba" @if(old('country')=='Cuba' ) selected @endif>Cuba (+53)
                      </option>
                      <option data-countryCode="90392" value="Cyprus North" @if(old('country')=='Cyprus North' )
                        selected @endif>Cyprus North (+90392)</option>
                      <option data-countryCode="357" value="Cyprus South" @if(old('country')=='Cyprus South' ) selected
                        @endif>Cyprus South (+357)</option>
                      <option data-countryCode="42" value="Czech Republic" @if(old('country')=='Czech Republic' )
                        selected @endif>Czech Republic (+42)</option>
                      <option data-countryCode="45" value="Denmark" @if(old('country')=='Denmark' ) selected @endif>
                        Denmark (+45)</option>
                      <option data-countryCode="253" value="Djibouti" @if(old('country')=='Djibouti' ) selected @endif>
                        Djibouti (+253)</option>
                      <option data-countryCode="1809" value="Dominica" @if(old('country')=='Dominica' ) selected @endif>
                        Dominica (+1809)</option>
                      <option data-countryCode="1809" value="Dominican Republic"
                        @if(old('country')=='Dominican Republic' ) selected @endif>Dominican Republic (+1809)</option>
                      <option data-countryCode="593" value="Ecuador" @if(old('country')=='Ecuador' ) selected @endif>
                        Ecuador (+593)</option>
                      <option data-countryCode="20" value="Egypt" @if(old('country')=='Egypt' ) selected @endif>Egypt
                        (+20)</option>
                      <option data-countryCode="503" value="El Salvador" @if(old('country')=='El Salvador' ) selected
                        @endif>El Salvador (+503)</option>
                      <option data-countryCode="240" value="Equatorial Guinea" @if(old('country')=='Equatorial Guinea' )
                        selected @endif>Equatorial Guinea (+240)</option>
                      <option data-countryCode="291" value="Eritrea" @if(old('country')=='Eritrea' ) selected @endif>
                        Eritrea (+291)</option>
                      <option data-countryCode="372" value="Estonia" @if(old('country')=='Estonia' ) selected @endif>
                        Estonia (+372)</option>
                      <option data-countryCode="251" value="Ethiopia" @if(old('country')=='Ethiopia' ) selected @endif>
                        Ethiopia (+251)</option>
                      <option data-countryCode="500" value="Falkland Islands" @if(old('country')=='Falkland Islands' )
                        selected @endif>Falkland Islands (+500)</option>
                      <option data-countryCode="298" value="Faroe Islands" @if(old('country')=='Faroe Islands' )
                        selected @endif>Faroe Islands (+298)</option>
                      <option data-countryCode="679" value="Fiji" @if(old('country')=='Fiji' ) selected @endif>Fiji
                        (+679)</option>
                      <option data-countryCode="358" value="Finland" @if(old('country')=='Finland' ) selected @endif>
                        Finland (+358)</option>
                      <option data-countryCode="33" value="France" @if(old('country')=='France' ) selected @endif>France
                        (+33)</option>
                      <option data-countryCode="594" value="French Guiana" @if(old('country')=='French Guiana' )
                        selected @endif>French Guiana (+594)</option>
                      <option data-countryCode="689" value="French Polynesia" @if(old('country')=='French Polynesia' )
                        selected @endif>French Polynesia (+689)</option>
                      <option data-countryCode="241" value="Gabon" @if(old('country')=='Gabon' ) selected @endif>Gabon
                        (+241)</option>
                      <option data-countryCode="220" value="Gambia" @if(old('country')=='Gambia' ) selected @endif>
                        Gambia (+220)</option>
                      <option data-countryCode="7880" value="Georgia" @if(old('country')=='Georgia' ) selected @endif>
                        Georgia (+7880)</option>
                      <option data-countryCode="49" value="Germany" @if(old('country')=='Germany' ) selected @endif>
                        Germany (+49)</option>
                      <option data-countryCode="233" value="Ghana" @if(old('country')=='Ghana' ) selected @endif>Ghana
                        (+233)</option>
                      <option data-countryCode="350" value="Gibraltar" @if(old('country')=='Gibraltar' ) selected
                        @endif>Gibraltar (+350)</option>
                      <option data-countryCode="30" value="Greece" @if(old('country')=='Greece' ) selected @endif>Greece
                        (+30)</option>
                      <option data-countryCode="299" value="Greenland" @if(old('country')=='Greenland' ) selected
                        @endif>Greenland (+299)</option>
                      <option data-countryCode="1473" value="Grenada" @if(old('country')=='Grenada' ) selected @endif>
                        Grenada (+1473)</option>
                      <option data-countryCode="590" value="Guadeloupe" @if(old('country')=='Guadeloupe' ) selected
                        @endif>Guadeloupe (+590)</option>
                      <option data-countryCode="671" value="Guam" @if(old('country')=='Guam' ) selected @endif>Guam
                        (+671)</option>
                      <option data-countryCode="502" value="Guatemala" @if(old('country')=='Guatemala' ) selected
                        @endif>Guatemala (+502)</option>
                      <option data-countryCode="224" value="Guinea" @if(old('country')=='Guinea' ) selected @endif>
                        Guinea (+224)</option>
                      <option data-countryCode="245" value="Guinea" @if(old('country')=='Guinea - Bissau' ) selected
                        @endif>Guinea - Bissau (+245)</option>
                      <option data-countryCode="592" value="Guyana" @if(old('country')=='Guyana' ) selected @endif>
                        Guyana (+592)</option>
                      <option data-countryCode="509" value="Haiti" @if(old('country')=='Haiti' ) selected @endif>Haiti
                        (+509)</option>
                      <option data-countryCode="504" value="Honduras" @if(old('country')=='Honduras' ) selected @endif>
                        Honduras (+504)</option>
                      <option data-countryCode="852" value="Hong Kong" @if(old('country')=='Hong Kong' ) selected
                        @endif>Hong Kong (+852)</option>
                      <option data-countryCode="36" value="Hungary" @if(old('country')=='Hungary' ) selected @endif>
                        Hungary (+36)</option>
                      <option data-countryCode="354" value="Iceland" @if(old('country')=='Iceland' ) selected @endif>
                        Iceland (+354)</option>
                      <option data-countryCode="91" value="India" @if(old('country')=='India' ) selected @endif>India
                        (+91)</option>
                      <option data-countryCode="62" value="Indonesia" @if(old('country')=='Indonesia' ) selected @endif>
                        Indonesia (+62)</option>
                      <option data-countryCode="98" value="Iran" @if(old('country')=='Iran' ) selected @endif>Iran (+98)
                      </option>
                      <option data-countryCode="964" value="Iraq" @if(old('country')=='Iraq' ) selected @endif>Iraq
                        (+964)</option>
                      <option data-countryCode="353" value="Ireland" @if(old('country')=='Ireland' ) selected @endif>
                        Ireland (+353)</option>
                      <option data-countryCode="972" value="Israel" @if(old('country')=='Israel' ) selected @endif>
                        Israel (+972)</option>
                      <option data-countryCode="39" value="Italy" @if(old('country')=='Italy' ) selected @endif>Italy
                        (+39)</option>
                      <option data-countryCode="1876" value="Jamaica" @if(old('country')=='Jamaica' ) selected @endif>
                        Jamaica (+1876)</option>
                      <option data-countryCode="81" value="Japan" @if(old('country')=='Japan' ) selected @endif>Japan
                        (+81)</option>
                      <option data-countryCode="962" value="Jordan" @if(old('country')=='Jordan' ) selected @endif>
                        Jordan (+962)</option>
                      <option data-countryCode="7" value="Kazakhstan" @if(old('country')=='Kazakhstan' ) selected
                        @endif>Kazakhstan (+7)</option>
                      <option data-countryCode="254" value="Kenya" @if(old('country')=='Kenya' ) selected @endif>Kenya
                        (+254)</option>
                      <option data-countryCode="686" value="Kiribati" @if(old('country')=='Kiribati' ) selected @endif>
                        Kiribati (+686)</option>
                      <option data-countryCode="850" value="Korea North" @if(old('country')=='Korea North' ) selected
                        @endif>Korea North (+850)</option>
                      <option data-countryCode="82" value="Korea South" @if(old('country')=='Korea South' ) selected
                        @endif>Korea South (+82)</option>
                      <option data-countryCode="965" value="Kuwait" @if(old('country')=='Kuwait' ) selected @endif>
                        Kuwait (+965)</option>
                      <option data-countryCode="996" value="Kyrgyzstan" @if(old('country')=='Kyrgyzstan' ) selected
                        @endif>Kyrgyzstan (+996)</option>
                      <option data-countryCode="856" value="Laos" @if(old('country')=='Laos' ) selected @endif>Laos
                        (+856)</option>
                      <option data-countryCode="371" value="Latvia" @if(old('country')=='Latvia' ) selected @endif>
                        Latvia (+371)</option>
                      <option data-countryCode="961" value="Lebanon" @if(old('country')=='Lebanon' ) selected @endif>
                        Lebanon (+961)</option>
                      <option data-countryCode="266" value="Lesotho" @if(old('country')=='Lesotho' ) selected @endif>
                        Lesotho (+266)</option>
                      <option data-countryCode="231" value="Liberia" @if(old('country')=='Liberia' ) selected @endif>
                        Liberia (+231)</option>
                      <option data-countryCode="218" value="Libya" @if(old('country')=='Libya' ) selected @endif>Libya
                        (+218)</option>
                      <option data-countryCode="417" value="Liechtenstein" @if(old('country')=='Liechtenstein' )
                        selected @endif>Liechtenstein (+417)</option>
                      <option data-countryCode="370" value="Lithuania" @if(old('country')=='Lithuania' ) selected
                        @endif>Lithuania (+370)</option>
                      <option data-countryCode="352" value="Luxembourg" @if(old('country')=='Luxembourg' ) selected
                        @endif>Luxembourg (+352)</option>
                      <option data-countryCode="853" value="Macao" @if(old('country')=='Macao' ) selected @endif>Macao
                        (+853)</option>
                      <option data-countryCode="389" value="Macedonia" @if(old('country')=='Macedonia' ) selected
                        @endif>Macedonia (+389)</option>
                      <option data-countryCode="261" value="Madagascar" @if(old('country')=='Madagascar' ) selected
                        @endif>Madagascar (+261)</option>
                      <option data-countryCode="265" value="Malawi" @if(old('country')=='Malawi' ) selected @endif>
                        Malawi (+265)</option>
                      <option data-countryCode="60" value="Malaysia" @if(old('country')=='Malaysia' ) selected @endif>
                        Malaysia (+60)</option>
                      <option data-countryCode="960" value="Maldives" @if(old('country')=='Maldives' ) selected @endif>
                        Maldives (+960)</option>
                      <option data-countryCode="223" value="Mali" @if(old('country')=='Mali' ) selected @endif>Mali
                        (+223)</option>
                      <option data-countryCode="356" value="Malta" @if(old('country')=='Malta' ) selected @endif>Malta
                        (+356)</option>
                      <option data-countryCode="692" value="Marshall Islands" @if(old('country')=='Marshall Islands' )
                        selected @endif>Marshall Islands (+692)</option>
                      <option data-countryCode="596" value="Martinique" @if(old('country')=='Martinique' ) selected
                        @endif>Martinique (+596)</option>
                      <option data-countryCode="222" value="Mauritania" @if(old('country')=='Mauritania' ) selected
                        @endif>Mauritania (+222)</option>
                      <option data-countryCode="263" value="Mayotte" @if(old('country')=='Mayotte' ) selected @endif>
                        Mayotte (+269)</option>
                      <option data-countryCode="52" value="Mexico" @if(old('country')=='Mexico' ) selected @endif>Mexico
                        (+52)</option>
                      <option data-countryCode="691" value="Micronesia" @if(old('country')=='Micronesia' ) selected
                        @endif>Micronesia (+691)</option>
                      <option data-countryCode="373" value="Moldova" @if(old('country')=='Moldova' ) selected @endif>
                        Moldova (+373)</option>
                      <option data-countryCode="377" value="Monaco" @if(old('country')=='Monaco' ) selected @endif>
                        Monaco (+377)</option>
                      <option data-countryCode="976" value="Mongolia" @if(old('country')=='Mongolia' ) selected @endif>
                        Mongolia (+976)</option>
                      <option data-countryCode="1664" value="Montserrat" @if(old('country')=='Montserrat' ) selected
                        @endif>Montserrat (+1664)</option>
                      <option data-countryCode="212" value="Morocco" @if(old('country')=='Morocco' ) selected @endif>
                        Morocco (+212)</option>
                      <option data-countryCode="258" value="Mozambique" @if(old('country')=='Mozambique' ) selected
                        @endif>Mozambique (+258)</option>
                      <option data-countryCode="95" value="Myanmar" @if(old('country')=='Myanmar' ) selected @endif>
                        Myanmar (+95)</option>
                      <option data-countryCode="264" value="Namibia" @if(old('country')=='Namibia' ) selected @endif>
                        Namibia (+264)</option>
                      <option data-countryCode="674" value="Nauru" @if(old('country')=='Nauru' ) selected @endif>Nauru
                        (+674)</option>
                      <option data-countryCode="977" value="Nepal" @if(old('country')=='Nepal' ) selected @endif>Nepal
                        (+977)</option>
                      <option data-countryCode="31" value="Netherlands" @if(old('country')=='Netherlands' ) selected
                        @endif>Netherlands (+31)</option>
                      <option data-countryCode="687" value="New Caledonia" @if(old('country')=='New Caledonia' )
                        selected @endif>New Caledonia (+687)</option>
                      <option data-countryCode="64" value="New Zealand" @if(old('country')=='New Zealand' ) selected
                        @endif>New Zealand (+64)</option>
                      <option data-countryCode="505" value="Nicaragua" @if(old('country')=='Nicaragua' ) selected
                        @endif>Nicaragua (+505)</option>
                      <option data-countryCode="227" value="Niger" @if(old('country')=='Niger' ) selected @endif>Niger
                        (+227)</option>
                      <option data-countryCode="234" value="Nigeria" @if(old('country')=='Nigeria' ) selected @endif>
                        Nigeria (+234)</option>
                      <option data-countryCode="683" value="Niue" @if(old('country')=='Niue' ) selected @endif>Niue
                        (+683)</option>
                      <option data-countryCode="672" value="Norfolk Islands" @if(old('country')=='Norfolk Islands' )
                        selected @endif>Norfolk Islands (+672)</option>
                      <option data-countryCode="670" value="Northern Marianas" @if(old('country')=='Northern Marianas' )
                        selected @endif>Northern Marianas (+670)</option>
                      <option data-countryCode="47" value="Norway" @if(old('country')=='Norway' ) selected @endif>Norway
                        (+47)</option>
                      <option data-countryCode="968" value="Oman" @if(old('country')=='Oman' ) selected @endif>Oman
                        (+968)</option>
                      <option data-countryCode="680" value="Palau" @if(old('country')=='Palau' ) selected @endif>Palau
                        (+680)</option>
                      <option data-countryCode="507" value="Panama" @if(old('country')=='Panama' ) selected @endif>
                        Panama (+507)</option>
                      <option data-countryCode="675" value="Papua New Guinea" @if(old('country')=='Papua New Guinea' )
                        selected @endif>Papua New Guinea (+675)</option>
                      <option data-countryCode="595" value="Paraguay" @if(old('country')=='Paraguay' ) selected @endif>
                        Paraguay (+595)</option>
                      <option data-countryCode="51" value="Peru" @if(old('country')=='Peru' ) selected @endif>Peru (+51)
                      </option>
                      <option data-countryCode="63" value="Philippines" @if(old('country')=='Philippines' ) selected
                        @endif>Philippines (+63)</option>
                      <option data-countryCode="48" value="Poland" @if(old('country')=='Poland' ) selected @endif>Poland
                        (+48)</option>
                      <option data-countryCode="351" value="Portugal" @if(old('country')=='Portugal' ) selected @endif>
                        Portugal (+351)</option>
                      <option data-countryCode="1787" value="Puerto Rico" @if(old('country')=='Puerto Rico' ) selected
                        @endif>Puerto Rico (+1787)</option>
                      <option data-countryCode="974" value="Qatar" @if(old('country')=='Qatar' ) selected @endif>Qatar
                        (+974)</option>
                      <option data-countryCode="262" value="Reunion" @if(old('country')=='Reunion' ) selected @endif>
                        Reunion (+262)</option>
                      <option data-countryCode="40" value="Romania" @if(old('country')=='Romania' ) selected @endif>
                        Romania (+40)</option>
                      <option data-countryCode="7" value="Russia" @if(old('country')=='Russia' ) selected @endif>Russia
                        (+7)</option>
                      <option data-countryCode="250" value="Rwanda" @if(old('country')=='Rwanda' ) selected @endif>
                        Rwanda (+250)</option>

                      <option data-countryCode="378" value="San Marino" @if(old('country')=='San Marino' ) selected
                        @endif>San Marino (+378)</option>
                      <option data-countryCode="239" value="Sao Tome" @if(old('country')=='Sao Tome & Principe' )
                        selected @endif>Sao Tome &amp; Principe (+239)</option>
                      <option data-countryCode="966" value="Saudi Arabia" @if(old('country')=='Saudi Arabia' ) selected
                        @endif>Saudi Arabia (+966)</option>
                      <option data-countryCode="221" value="Senegal" @if(old('country')=='Senegal' ) selected @endif>
                        Senegal (+221)</option>
                      <option data-countryCode="381" value="Serbia" @if(old('country')=='Serbia' ) selected @endif>
                        Serbia (+381)</option>
                      <option data-countryCode="248" value="Seychelles" @if(old('country')=='Seychelles' ) selected
                        @endif>Seychelles (+248)</option>
                      <option data-countryCode="232" value="Sierra Leone" @if(old('country')=='Sierra Leone' ) selected
                        @endif>Sierra Leone (+232)</option>
                      <option data-countryCode="65" value="Singapore" @if(old('country')=='Singapore' ) selected @endif>
                        Singapore (+65)</option>
                      <option data-countryCode="421" value="Slovak Republic" @if(old('country')=='Slovak Republic' )
                        selected @endif>Slovak Republic (+421)</option>
                      <option data-countryCode="386" value="Slovenia" @if(old('country')=='Slovenia' ) selected @endif>
                        Slovenia (+386)</option>
                      <option data-countryCode="677" value="Solomon Islands" @if(old('country')=='Solomon Islands' )
                        selected @endif>Solomon Islands (+677)</option>
                      <option data-countryCode="252" value="Somalia" @if(old('country')=='Somalia' ) selected @endif>
                        Somalia (+252)</option>
                      <option data-countryCode="27" value="South Africa" @if(old('country')=='South Africa' ) selected
                        @endif>South Africa (+27)</option>
                      <option data-countryCode="34" value="Spain" @if(old('country')=='Spain' ) selected @endif>Spain
                        (+34)</option>
                      <option data-countryCode="94" value="Sri Lanka" @if(old('country')=='Sri Lanka' ) selected @endif>
                        Sri Lanka (+94)</option>
                      <option data-countryCode="290" value="St. Helena" @if(old('country')=='St. Helena' ) selected
                        @endif>St. Helena (+290)</option>
                      <option data-countryCode="1869" value="St. Kitts" @if(old('country')=='St. Kitts' ) selected
                        @endif>St. Kitts (+1869)</option>
                      <option data-countryCode="1758" value="St. Lucia" @if(old('country')=='St. Lucia' ) selected
                        @endif>St. Lucia (+1758)</option>
                      <option data-countryCode="249" value="Sudan" @if(old('country')=='Sudan' ) selected @endif>Sudan
                        (+249)</option>
                      <option data-countryCode="597" value="Suriname" @if(old('country')=='Suriname' ) selected @endif>
                        Suriname (+597)</option>
                      <option data-countryCode="268" value="Swaziland" @if(old('country')=='Swaziland' ) selected
                        @endif>Swaziland (+268)</option>
                      <option data-countryCode="46" value="Sweden" @if(old('country')=='Sweden' ) selected @endif>Sweden
                        (+46)</option>
                      <option data-countryCode="41" value="Switzerland" @if(old('country')=='Switzerland' ) selected
                        @endif>Switzerland (+41)</option>
                      <option data-countryCode="963" value="Syria" @if(old('country')=='Syria' ) selected @endif>Syria
                        (+963)</option>
                      <option data-countryCode="886" value="Taiwan" @if(old('country')=='Taiwan' ) selected @endif>
                        Taiwan (+886)</option>
                      <option data-countryCode="7" value="Tajikstan" @if(old('country')=='Tajikstan' ) selected @endif>
                        Tajikstan (+7)</option>
                      <option data-countryCode="66" value="Thailand" @if(old('country')=='Thailand' ) selected @endif>
                        Thailand (+66)</option>
                      <option data-countryCode="228" value="Togo" @if(old('country')=='Togo' ) selected @endif>Togo
                        (+228)</option>
                      <option data-countryCode="676" value="Tonga" @if(old('country')=='Tonga' ) selected @endif>Tonga
                        (+676)</option>
                      <option data-countryCode="1868" value="Trinidad & Tobago" @if(old('country')=='Trinidad & Tobago'
                        ) selected @endif>Trinidad & Tobago (+1868)</option>
                      <option data-countryCode="216" value="Tunisia" @if(old('country')=='Tunisia' ) selected @endif>
                        Tunisia (+216)</option>
                      <option data-countryCode="90" value="Turkey" @if(old('country')=='Turkey' ) selected @endif>Turkey
                        (+90)</option>
                      <option data-countryCode="7" value="Turkmenistan" @if(old('country')=='Turkmenistan' ) selected
                        @endif>Turkmenistan (+7)</option>
                      <option data-countryCode="993" value="Turkmenistan" @if(old('country')=='Turkmenistan' ) selected
                        @endif>Turkmenistan (+993)</option>
                      <option data-countryCode="1649" value="Turks" @if(old('country')=='Turks & Caicos Islands' )
                        selected @endif>Turks &amp; Caicos Islands (+1649)</option>
                      <option data-countryCode="688" value="Tuvalu" @if(old('country')=='Tuvalu' ) selected @endif>
                        Tuvalu (+688)</option>
                      <option data-countryCode="256" value="Uganda" @if(old('country')=='Uganda' ) selected @endif>
                        Uganda (+256)</option>
                      <option data-countryCode="44" value="UK" @if(old('country')=='UK' ) selected @endif>UK (+44)
                      </option>
                      <option data-countryCode="380" value="Ukraine" @if(old('country')=='Ukraine' ) selected @endif>
                        Ukraine (+380)</option>
                      <option data-countryCode="971" value="United Arab Emirates"
                        @if(old('country')=='United Arab Emirates' ) selected @endif>United Arab Emirates (+971)
                      </option>
                      <option data-countryCode="598" value="Uruguay" @if(old('country')=='Uruguay' ) selected @endif>
                        Uruguay (+598)</option>
                      <option data-countryCode="1" value="USA" @if(old('country')=='USA' ) selected @endif>USA (+1)
                      </option>
                      <option data-countryCode="7" value="Uzbekistan" @if(old('country')=='Uzbekistan' ) selected
                        @endif>Uzbekistan (+7)</option>
                      <option data-countryCode="678" value="Vanuatu" @if(old('country')=='Vanuatu' ) selected @endif>
                        Vanuatu (+678)</option>
                      <option data-countryCode="379" value="Vatican City" @if(old('country')=='Vatican City' ) selected
                        @endif>Vatican City (+379)</option>
                      <option data-countryCode="58" value="Venezuela" @if(old('country')=='Venezuela' ) selected @endif>
                        Venezuela (+58)</option>
                      <option data-countryCode="84" value="Vietnam" @if(old('country')=='Vietnam' ) selected @endif>
                        Vietnam (+84)</option>
                      <option data-countryCode="1284" value="Virgin Islands"
                        @if(old('country')=='Virgin Islands - British' ) selected @endif>Virgin Islands - British
                        (+1284)</option>
                      <option data-countryCode="1340" value="Virgin Islands" @if(old('country')=='Virgin Islands - US' )
                        selected @endif>Virgin Islands - US (+1340)</option>
                      <option data-countryCode="681" value="Wallis & Futuna" @if(old('country')=='Wallis & Futuna' )
                        selected @endif>Wallis &amp; Futuna (+681)</option>
                      <option data-countryCode="969" value="Yemen (North)" @if(old('country')=='Yemen (North)' )
                        selected @endif>Yemen (North)(+969)</option>
                      <option data-countryCode="967" value="Yemen (South)" @if(old('country')=='Yemen (South)' )
                        selected @endif>Yemen (South)(+967)</option>
                      <option data-countryCode="260" value="Zambia" @if(old('country')=='Zambia' ) selected @endif>
                        Zambia (+260)</option>
                      <option data-countryCode="263" value="Zimbabwe" @if(old('country')=='Zimbabwe' ) selected @endif>
                        Zimbabwe (+263)</option>
                    </select>
                    @error('country')<span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                </div>



                <div class="col-md-4">
                  <div class="form-group">
                    <label for="validationCustom02">Mobile Number</label>
                    <div class="d-flex">
                      <input type="text" class="form-control" id="code" placeholder="+91" required="" name="pre"
                        value="" style="width: 75px !important;margin-right: 5px;" readonly>
                      <input type="text" id="mobile" class="form-control reqfield flex-grow-1" name="mobile"
                        value="{{ old('mobile') }}">
                    </div>
                    @error('mobile')<span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group">
                    <label for="validationCustom02">Passport No</label>
                    <input type="text" id="passport" class="form-control" name="passport" value="{{ old('passport') }}">
                    @error('passport')<span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group">
                    <label for="validationCustom02">City <span class="redmtext">*</span></label>
                    <input type="text" id="city" class="form-control reqfield" name="city" value="{{ old('city') }}">
                    @error('city')<span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group">
                    <label for="validationCustom02">Contact Address </label>
                    <input type="text" id="address" class="form-control reqfield" name="address"
                      value="{{ old('address') }}">
                    @error('address')<span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="validationCustom02">Last qualification</label>
                    <select class="form-control basic reqfield" id="qualification" name="qualification" required>
                      <option value="">Select</option>
                      <option value="High School" @if(old('qualification')=='High School' ) selected @endif>High School
                      </option>
                      <option value="Intermediate" @if(old('qualification')=='Intermediate' ) selected @endif>
                        Intermediate</option>
                      <option value="B.A" @if(old('qualification')=='B.A' ) selected @endif>B.A</option>
                      <option value="BSc" @if(old('qualification')=='BSc' ) selected @endif>BSc</option>
                      <option value="BCA" @if(old('qualification')=='BCA' ) selected @endif>BCA</option>
                      <option value="Btech" @if(old('qualification')=='Btech' ) selected @endif>Btech</option>
                      <option value="Others" @if(old('qualification')=='Others' ) selected @endif>Others</option>
                    </select>
                    @error('qualification')<span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="validationCustom02">Interested Course</label>
                    <input type="text" id="interest" class="form-control reqfield" name="interested"
                      value="{{ old('interested') }}">
                    @error('interested')<span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                </div>

                <hr>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="validationCustom02">Password </label>
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

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="validationCustom02">Active status </label>
                    <select class="form-control basic reqfield" id="ActiveStatus" name="status">
                      <option value="">Select Status</option>
                      <option value="1" @if(old('status')==1) selected @endif>Active</option>
                      <option value="0" @if(old('status')==0) selected @endif>Deactive</option>
                    </select>
                    @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="validationCustom02">Student Photo</label>
                    <input type="file" id="photo" name="photo" class="form-control">
                    @error('photo')<span class="text-danger" style="margin-left: 31%;">{{ $message }}</span>@enderror
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

                <div class="modal-footer"> <button type="button" data-dismiss="modal" aria-label="Close"
                    class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray">Cancel</button>
                  <input name="Save" type="submit" value="Save" id="savingbutton" class="btn btn-primary"
                    onclick="this.value='Saving...'; ">
                </div>

                <input name="action" type="hidden" id="action" value="addclient">
                <input name="editId" type="hidden" id="" value="">
                <input name="qid" type="hidden" id="" value="">
          </form>

        </div>

      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div>
  <!---end of the model---->
  <!--model style --->
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
  <!--model style end-->

  <div class="modelnew EditeModel modal right fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">


    <!--End of the modal---->





    <!----verify the enquiry ------>

    <!---this is the alert model for confirmation alert--->
    {{-- <div class="modal fade verify-mail">
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
              <a class="del"><button type="submit" class="btn btn-success waves-effect waves-light">Confirm</button></a>
            </div>


          </div>
        </div>
      </div>
    </div> --}}
    <!---end of the model--->


    <!----end of the enquiry versify ---->

    <script>
      $("select[name=country]" ).change(function() {
               $('input#code').val('+'+$(this).find(':selected').attr('data-countryCode'));
            });


      @if($errors->has('name') || $errors->has('email') || $errors->has('dob') || $errors->has('country') || $errors->has('mobile')||$errors->has('city')||$errors->has('address')
          || $errors->has('password')||$errors->has('confirm_password')||$errors->has('status')||$errors->has('photo'))
        $('#myModal2').modal('show');
      @endif

      
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

      $(document).ready(function() { 
        $(".enq-delete-confirm").on('click', function() {
          
          let id = $(this).attr("data-id");

          $('.req-delete-model').modal('show');
          $(".del").attr("href", id)
        });
      });
      

      $( document ).ready(function() { 
        $(".admin-vrify-confirm").click(function(e){
          e.preventDefault();
          let id = $(this).attr("data-id");
          $('#ADvModal').modal('show');
          $(".Advid").attr("href", id)
        });
      });


      $(document).ready(function() {
          $('.studentInfo').on('click', function(e) {
              e.preventDefault();

              // Get the record ID from the data-id attribute
              var recordId = $(this).data('id');
             
              // AJAX request to fetch the record data based on the ID
              $.ajax({
                 url: "{{ route('fetch.enq.record', ':id') }}".replace(':id', recordId),
                 // Replace with your actual URL
                  type: 'GET',
                   // Use the appropriate HTTP method
                  dataType: 'json', // Expect JSON response
                  success: function(response) {
                      if (response.success) {

                            $('#stu_name').empty();
                            $('#stu_email').empty();
                            $('#stu_mobile').empty();
                            $('#stu_city').empty();
                            $('#stu_country').empty();
                            $('#stu_passport').empty();
                            $('#stu_qualification').empty();
                            $('#stu_interest').empty();
                            $('#stu_verification').empty();
                            $('#stu_photo').attr('src', '');
                            $('#verify_btn').attr('href','');
                            $('#trans_btn').attr('href','');  

                            //student info section 
                            $('#studentId').val(response.student.id);
                            $('#stu_name').append(response.student.name);
                            $('#stu_email').append(response.student.email);
                            $('#stu_mobile').append(response.student.phone);
                            $('#stu_city').append(response.student.city);
                            $('#stu_country').append(response.student.country);
                            $('#stu_passport').append(response.student.passport_no);
                            $('#stu_qualification').append(response.student.last_degree);
                            $('#stu_interest').append(response.student.remarks);
                            
                            if(response.student.verified_by != null && response.student.enq_status === response.status.id){
                              var Transfer = "{{ route('enq.to.student', ['id' => ':studentId']) }}"
                                            .replace(':studentId', response.student.id);
                              $('#trans_btn').attr('href',Transfer);
                              $('#trans_btn').show();
                            }else{
                              $('#trans_btn').hide();
                            }

                            if(response.student.verified_by == null){
                               $('#stu_verification').append('Not Verified');
                               $('#verifyBtn').show();
                               var Verifyurl = "{{ route('enq.verify', ['id' => ':studentId']) }}"
                                            .replace(':studentId', response.student.id);
                               $('#verify_btn').attr('href',Verifyurl);
                            }else{
                              $('#stu_verification').append('Verified');
                              $('#verifyBtn').hide();
                            }
                            
                

                            if(response.student.photo !== ''){
                              var imageUrl = "{{ asset('uploads') }}/" + response.student.photo;
                              $('#stu_photo').attr('src', imageUrl);
                            }


                            // Loop through each statusbox
                            // Remove all previous ripple effects
                             $('.modalstatus .ripple').remove();
                              $('.modalstatus').each(function() {
                                  var statusId = $(this).data('status-id');

                                  var url = "{{ route('change.enq.status', ['id' => ':studentId', 'status' => ':statusId']) }}"
                                            .replace(':studentId', response.student.id)
                                            .replace(':statusId', statusId);
                                  console.log('URL:', url);
                                  // Check if the status ID matches the student's status ID
                                  if (statusId === response.student.enq_status) {
                                      // Add the ripple effect to the matched statusbox
                                      $(this).append('<div class="ripple"></div>');
                                  }

                                  // Find the anchor tag within the current modalstatus element
                                  var anchorTag = $('.enq-change-status', this).first();
                                  
                                      anchorTag.attr('href', url);

                              });
                   
                            // $('#name').val(response.name);
                            $('.myModal3').modal('show');
                            
                        
                            // Populate the form fields or display the fetched data as needed
                            // console.log('Fetched data:', response.payment_status);
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


      $('button[data-target="#myModal2"]').on('click', function() {
        // Get the form element by its ID
          var form = document.getElementById('EnqForm');
          
          // Reset the form
          form.reset();
          $('.text-danger').html(''); 
      });

      //add model show
     


      //this is the edite model showng here 
      $(document).ready(function() {
          $('.EditeBtn').on('click', function(e) {
              e.preventDefault();
              var recordId = $(this).data('id');

              $.ajax({
                 url: "{{ route('fetch.enq.record', ':id') }}".replace(':id', recordId),
                 // Replace with your actual URL
                  type: 'GET',
                   // Use the appropriate HTTP method
                  dataType: 'json', // Expect JSON response
                  success: function(response) {
                      if(response.success) {

                            $('#StuID').val(response.student.id);
                            $('#name').val(response.student.name);
                            $('#email').val(response.student.email);
                            $('#dob').val(response.student.dob);
                            $('#code').val(response.student.country_code);
                            $('#country').val(response.student.country);
                            $('#mobile').val(response.student.phone);
                            $('#city').val(response.student.city);
                            $('#passport').val(response.student.passport_no);
                            $('#address').val(response.student.address);
                            $('#qualification').val(response.student.last_degree);
                            $('#interest').val(response.student.remarks);
                            $('#ActiveStatus').val(response.student.active_status);
                            //student info section 
                   
                            // $('#name').val(response.name);
                            $('#myModal2').modal('show');

                      }
                  },
                  error: function(xhr, status, error) {
                      // Handle AJAX errors
                      console.error('AJAX request failed:', error);
                  }
              });
              
          });
      });



    </script>

</body>

</html>