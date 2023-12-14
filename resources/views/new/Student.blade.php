<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
  <title>Students | Edudeve</title>
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

  <div class="wrapper" style="margin-top: 56px;padding-left: 20px;">
    <div class="newboxheading">
      <div class="newhead">Student
        <div class="newoptionmenu">


          <div> <button type="button" class="btn btn-secondary btn-lg waves-effect waves-light"
              onclick="loadpop2('Add Student',this,'600px')" data-toggle="modal" data-target="#myModal2"
              data-backdrop="static" popaction="action=addclient">Add Student</button>
          </div>
          <div>
            <form action="" method="get" enctype="multipart/form-data">
              <input type="text" name="keyword" class="form-control newsearchsec"
                placeholder="Search by name, email, phone" value="" style="margin-top: 3px; width:250px;">
              <input name="ga" type="hidden" value="clients" />
            </form>
          </div>



        </div>
      </div>


    </div>
    <div class="container-fluid newpadding30" style="max-width: none;">
      <div class="main-content">

        <div class="page-content">



          <div class="row">
            <div class="col-md-12 col-xl-12">
              <div class="card" style="min-height:500px;">
                <div class="card-body" style="padding:0px;">

                  <form action="frmaction.html" method="post" enctype="multipart/form-data" name="addeditfrm"
                    target="actoinfrm" id="addeditfrm">
                    <div id="bulkassign"
                      style="display:none;padding: 11px 2px 5px; background-color: #e4f3ff; border-bottom: 2px solid rgb(221, 221, 221); border-radius: 3px; width: 100%; float: left; display: none;">
                      <table border="0" cellspacing="0" cellpadding="5">
                        <tr>
                          <td style="font-size:13px;"><input type="checkbox" id="ckbCheckAll"
                              style="width: 16px; height: 16px;margin-left: 6px;" /></td>
                          <td style="font-size:13px;">Select All&nbsp;</td>
                          <td><select id="assignToPerson" name="assignToPerson" class="form-control"
                              style="padding: 5px; font-size: 12px; height: 30px; line-height: 20px; color: #000; font-weight: 600;"
                              autocomplete="off">
                              <option value="0">Select Student Group</option>
                              <option value="1">Advertisement</option>
                            </select></td>
                          <td><button type="submit" id="savingbutton" class="btn btn-primary"
                              onclick="this.form.submit(); this.value='Saving...';"
                              style="float:right;padding: 3px 10px;">
                              Save
                            </button></td>
                          <td><input autocomplete="false" name="action" type="hidden" id="action"
                              value="bulkclientaddtogroup" /></td>
                        </tr>
                      </table>
                    </div>


                    <table class="table table-hover mb-0">

                      <thead>
                        <tr>
                          <th width="1%"></th>
                          <th width="1%"></th>
                          <th>Name</th>
                          <th width="10%">Mobile</th>
                          <th width="1%">Email</th>
                          <th width="1%">Address</th>
                          <th width="1%">Processing</th>
                          <th width="12%" align="left">By</th>
                          <th width="1%">&nbsp;</th>
                          {{-- <th width="1%">&nbsp;</th>
                          <th width="1%">&nbsp;</th> --}}
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($students as $row)
                        <tr>
                          <td width="1%"> <input type="checkbox" name="assignall[]" class="checkBoxClass"
                              id="assignqury" value="100006" onclick="selectedfun();"
                              style="width: 16px; height: 16px;"></td>
                          <td width="1%"><a class="dropdown-item neweditpan"
                              onclick="loadpop('Edit Course',this,'600px')" data-toggle="modal"
                              data-target=".bs-example-modal-center" popaction="action=addcourse&amp;id=100001"><img
                                src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):('https://bootdey.com/img/Content/avatar/avatar7.png') }}"
                                width="35" height="35" style="border-radius: 25px;"></a></td>
                          <td><a href="display.html?ga=clients&id=100006&view=1"><strong>Mr. Ravi Singh</strong></a>
                          </td>
                          <td width="10%">+{{$row->country_code}}{{$row->phone}}</td>
                          <td width="1%">{{$row->email}}</td>
                          <td width="1%">{{$row->country}},{{$row->city}}</td>
                          <td width="1%">
                            @if($row->process_status == 0)
                            <span class="badge badge-danger">No active</span>
                            @else
                            <span class="badge badge-success">Processing</span>
                            @endif
                          </td>
                          <td width="12%" align="left">
                            <table border="0" cellpadding="0" cellspacing="0" class="addbynewbadges">
                              <tr>
                                @if($row->entry_id == '')

                                <td colspan="2">
                                  <div class="listnameicon">O</div>
                                </td>
                                <td>Online</td>

                                @else

                                <td colspan="2">
                                  <div class="listnameicon">{{ substr($row->user->name, 0, 1) }}</div>
                                </td>
                                <td>{{ $row->user->name }}</td>
                                @endif

                              </tr>

                            </table>
                          </td>
                          <td width="1%"><a href="{{ route('view.stu' , $row->id) }}" class="dropdown-item neweditpan"
                              href="#" style="float:left;"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                          <td width="1%">
                            <a class="dropdown-item neweditpan" onclick="loadpop2('Edit Student',this,'600px')"
                              data-toggle="modal" data-target="#myModal2" data-backdrop="static"
                              popaction="action=addclient&id=100006"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                          </td>
                          {{--<td width="1%">
                            <a class="dropdown-item neweditpan" onclick="loadpop2('Edit Student',this,'600px')"
                              data-toggle="modal" data-target="#myModal2" data-backdrop="static"
                              popaction="action=addclient&id=100006"><i class="fa fa-trash" aria-hidden="true"></i></a>
                          </td> --}}
                        </tr>
                        @endforeach




                      </tbody>
                    </table>


                  </form>



                  <div class="mt-3 pageingouter">
                    <div
                      style="float: left; font-size: 13px; padding: 7px 11px; border: 1px solid #ededed; background-color: #fff; color: #000;">
                      Total Records: <strong>4</strong></div>
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



  <script>
    $(document).ready(function () {
      $("#ckbCheckAll").click(function () {
        $(".checkBoxClass").prop('checked', $(this).prop('checked'));
        if ($(".checkBoxClass").prop('checked') == true) {
          $('#bulkassign').show();
        } else {
          $('#bulkassign').hide();
        }
      });
    });
    function selectedfun() {
      var mychecked = $('.checkBoxClass:checked').length
      if (mychecked == 0) {
        $('#bulkassign').hide();
      }
      if (mychecked > 0) {
        $('#bulkassign').show();
      }
    }

  </script>



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








  <script>
    var intervalId = window.setInterval(function () {
      showcurrentworkinghours();

    }, 60000);

    showcurrentworkinghours();
  </script>


  <!--- end fot the main contetn section --->

  <div style="height:50px;"></div>
  <iframe id="actoinfrm" name="actoinfrm" src="" style="display:none;"></iframe>
  @include('new_layouts.partials.footer')

  <script>
    // Get the current date
        const currentDate = new Date();

        // Get the day of the week (e.g., "Sat")
        const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
        const dayOfWeek = daysOfWeek[currentDate.getDay()];

        // Get the month name (e.g., "September")
        const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        const monthName = months[currentDate.getMonth()];

        // Get the year (e.g., "2023")
        const year = currentDate.getFullYear().toString().slice(-2);

        // Get the time of day (morning, noon, evening, or night)
        const hours = currentDate.getHours();
        let timeOfDay = "";

        if (hours >= 5 && hours < 12) {
            timeOfDay = "Good Morning";
        } else if (hours >= 12 && hours < 18) {
            timeOfDay = "Good Afternoon";
        } else {
            timeOfDay = "Good Evening";
        }

        // Update HTML elements with the generated information
        document.querySelector('#wise').textContent = timeOfDay;
        document.querySelector('#cdate').textContent = currentDate.getDate();
        document.querySelector('#CDinfo').textContent = `${dayOfWeek}, ${monthName} , ${year}`;
  </script>


  </div>

</body>

</html>