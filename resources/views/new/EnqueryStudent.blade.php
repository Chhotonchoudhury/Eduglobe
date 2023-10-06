
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
      <title>Enquries| Edudeve</title> 
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge"> 	  
      <link rel="icon" type="image/x-icon" href="{{ (!empty($cp->logo)) ? asset('uploads/'.$cp->logo):asset('assets/assets/img/favicon.ico')}}"/>
       @include('new_layouts.partials.header') 
       
    </head>

   <body>

    <style>
        .welcomename{background: rgb(233,45,24); background: linear-gradient(180deg, rgba(233,45,24,1) 0%, rgba(246,173,1,1) 32%, rgba(49,116,241,1) 66%, rgba(36,154,65,1) 100%); border:0px;}
        #tograypanelmenu .welcomename{height:27px; width:27px; padding: 2px; border:0px;}
        #tograypanelmenu .welcomename .inside{width:100%; height:100%; border-radius: 100%; text-align:center; background-color:#fff; font-size:15px;}
        
        
        .prifilemenuouter{background-color:#2d2f31; position:fixed; right:10px; top:40px; color:#fff; z-index:999; width:376px;border-radius: 28px; padding:10px; display:none;}
        .prifilemenuouter .inside{ background-color:#1f1f1f; border-radius: 24px;}
        .prifilemenuouter .content{padding:10px;}
        .buddyouter{background: rgb(233,45,24); background: linear-gradient(180deg, rgba(233,45,24,1) 0%, rgba(246,173,1,1) 32%, rgba(49,116,241,1) 66%, rgba(36,154,65,1) 100%); padding:4px; border-radius:100px; width:64px; height:64px; margin-right:5px; position:relative;}
        .buddyouter .buddyimg{background-color:#fff;  width:100%; height:100%;border-radius:100px; font-size:35px; text-align:center; color:#000;}
        .buttonprofile{border: 1px solid #adadad70; padding: 5px 10px; color: #FFFFFF; font-size: 14px; font-weight: 600; margin-top:10px; text-align: left; border-radius: 10px; cursor: pointer; }
        .buttonprofile:hover{ background-color: #cccccc12;}
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
                    onclick="loadpop('Import',this,'400px')" data-toggle="modal" data-target=".bs-example-modal-center"
                    popaction="action=importFBleads">Import Excel</a><a class="dropdown-item" style="cursor:pointer;"
                    href="https://tripcrm.in/educrm/crm/exportQuery.php?startDate=&endDate=&statusid=&searchcity=&searchsource=&searchconfirmproposal=&searchusers=&keyword=&keyword="
                    target="_blank">Export Data</a>
                </div>
              </div>



              <div>
                <a href="getloadfromdocs.php" target="actoinfrm"><button type="button"
                    class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray"
                    style="margin-bottom:10px;" onclick="$('#loadleads').show();">

                    Load Leads <img src="loadleads.webp" style="width:16px;display:none;" id="loadleads" /></button></a>
              </div>

              <div>
              
                  <button type="button" class="btn btn-secondary btn-lg waves-effect waves-light"
                    style="margin-bottom:10px;"  data-toggle="modal" data-target="#myModal2">Add Enquiry </button>
                
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
                                class="btn btn-secondary btn-lg waves-effect waves-light" style="padding: 6px 10px;"><i
                                  class="fa fa-search" aria-hidden="true"></i> Search</button></td>



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
                              <div @if($idFromUrl == 1)class="ripple"@endif ></div> {{ count($penstudent) }}

                            </div>Total Pending
                          </div>
                        </a>
                      </td>

                      <td width="10%" align="left" valign="top"><a
                          href="{{ route('enq.stu', 2) }}">

                          <div class="statusbox" style="background-color:#655be6;">
                            <div style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                             <div @if($idFromUrl == 2)class="ripple"@endif ></div> {{ count($verifystu) }}


                            </div><span class="badge badge-primary">Verified</span>
                          </div>
                        </a></td>

                      <td width="10%" align="left" valign="top"><a
                          href="{{ route('enq.stu', 3) }}">

                          <div class="statusbox" style="background-color:#e45555;">

                            <div style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                            <div @if($idFromUrl == 3)class="ripple"@endif ></div> {{ count($notverifystu) }}
                          
                          </div><span class="badge badge-secondary ">Not verified</span>
                          </div>
                        </a></td>

                      <td width="10%" align="left" valign="top"><a
                          href="{{ route('enq.stu', 4) }}">

                          <div class="statusbox" style="background-color:#cc00a9;">
                            <div style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                              <div @if($idFromUrl == 4)class="ripple"@endif ></div> {{ count($referstu) }}
                            
                            </div><span
                              class="badge badge-secondary">Refered</span>
                          </div>
                        </a></td>
                       
                        <td width="10%" align="left" valign="top"><a
                            href="{{ route('enq.stu', 5) }}">

                            <div class="statusbox" style="background-color:#46cd93;">


                            <div style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                                <div @if($idFromUrl == 5)class="ripple"@endif ></div> {{ count($coursestu) }}
                            
                            </div><span
                                class="badge badge-secondary">Course accepted</span>
                            </div>
                        </a></td>  


                      <td width="10%" align="left" valign="top"><a
                          href="{{ route('enq.stu', 6) }}">

                          <div class="statusbox" style="background-color:#FF6600;">

                            <div style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                               <div @if($idFromUrl == 6)class="ripple"@endif ></div> {{ count($prostu) }}
                            </div><span
                              class="badge badge-orange">Processed</span>
                          </div>
                        </a></td>


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

                            <td width="3%" align="left" valign="top" style="padding-right:10px;"><input type="checkbox"
                                name="assignall[]" class="checkBoxClass" id="assignqury" value="100008"
                                onclick="selectedfun();" style="width: 16px; height: 16px;"> </td>

                            <td width="17%" align="left" valign="top" style="padding-right:20px;">
                              @if($idFromUrl == 1)
                               <span class="badge badge-dark" style="background-color:#000;">Pending</span>
                              @elseif($idFromUrl == 2)
                               <span class="badge badge-secondary" style="background-color:#655be6;">Verified</span>
                              @elseif($idFromUrl == 3)
                                <span class="badge badge-danger" style="background-color:#e45555;">Not verified</span>
                              @elseif($idFromUrl == 4)
                                <span class="badge badge-secondary" style="background-color:#cc00a9;">Refered</span>
                              @elseif($idFromUrl == 5)
                               <span class="badge badge-success" style="background-color:#46cd93;">Course accepted</span>
                              @else
                                <span class="badge badge-dark" style="background-color:#FF6600;">Processed</span>
                              @endif 


                              <div
                                style="font-size:15px; font-weight:500;line-height: 16px; margin-bottom:3px; font-weight:600;">
                                <a href="display.html?ga=query&view=1&id=100008">Age {{ $row->age }}</a></div>

                              
                            </td>

                            <td width="20%" align="left" valign="top" style="padding-right:20px;">
                              <div
                                style="font-size:13px; line-height: 16px; margin-bottom:3px;white-space: nowrap; max-width:200px; overflow: hidden; text-overflow: ellipsis;font-weight:600;">
                                {{ $row->name }}</div>



                              <div style="font-size:13px; color:#686868;">{{ $row->email }}</div>
                            </td>

                            <!-- <td width="17%" align="left" valign="top" style="padding-right:20px;">



                              <div style="font-size:13px; line-height: 16px;"><span style="color:#686868;">Address<br />

                              <span style="max-width:180px; overflow:hidden;overflow-wrap: break-word;">
                                  <span class="badge badge-boxed  badge-soft-success"
                                    style=" background-color: #737373 !important; color:#fff; font-size: 11px; padding: 5px 6px;">{{ $row->country }}</span>

                                <span style="max-width:180px; overflow:hidden;overflow-wrap: break-word;">
                                  <span class="badge badge-boxed  badge-soft-success"
                                    style=" background-color: #737373 !important; color:#fff; font-size: 11px; padding: 5px 6px;">{{ $row->city }}</span>
   


                                  <span class="badge badge-boxed  badge-soft-success"
                                    style=" background-color: #737373 !important; color:#fff; font-size: 11px; padding: 5px 6px;"></span>

                                </span></div>
                            </td> -->

                          

                            <td align="left" width="15%"  valign="top" style="font-size:13px; line-height: 16px;">Student Interested</span>



                              <div
                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-size:12px;color:#686868;white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width:200px;">
                                <i class="fa fa-sticky-note" aria-hidden="true" style=" color:#ffa500;"></i> &nbsp;{{ $row->remarks  }}No
                                Notes</div>

                            </td>

                            <td width="13%" align="right" valign="middle">



                              <div class="btn-group" role="group" aria-label="Option">



                                <a href="display.html?ga=query&view=1&id=100008"><button type="button"
                                    class="btn btn-secondary"><i class="fa fa-eye" aria-hidden="true"></i></button></a>









                                <a target="_blank"
                                  href="https://api.whatsapp.com/send?text=Hi&phone=+916294998402"><button type="button"
                                    class="btn btn-secondary"><i class="fa fa-whatsapp"
                                      aria-hidden="true"></i></button></a>





                                <a popaction="action=composemail&queryId=100008"
                                  onclick="loadpop('Compose Mail',this,'900px')" data-toggle="modal"
                                  data-target=".bs-example-modal-center"><button type="button"
                                    class="btn btn-secondary"><i class="fa fa-envelope-o"
                                      aria-hidden="true"></i></button></a>



                                <a onclick="createquery('100008');"><button type="button" class="btn btn-secondary"><i
                                      class="fa fa-pencil" aria-hidden="true"></i></button></a>




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
                            
                            <td width="3%" align="center" valign="top" style="padding-right:10px;">
                              <img src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):asset('assets/assets/img/NoProfile.png') }}" width="35" height="35" style="border-radius: 25px;" />
                            </td>

                            <td width="17%" align="left" valign="top" style="padding-right:20px;">
                              <div
                                style="font-size:13px; line-height: 16px; margin-bottom:3px;white-space: nowrap; max-width:200px; overflow: hidden; text-overflow: ellipsis;font-weight:600;">
                                Contacts</div>



                              <div style="font-size:13px; color:#686868;">+{{ $row->country_code }} {{ $row->phone }}</div>
                            </td>

                   
                              
                            <td width="20%" align="left" valign="top" style="padding-right:20px;">
                            <div
                                style="font-size:13px; line-height: 16px; margin-bottom:3px;white-space: nowrap; max-width:200px; overflow: hidden; text-overflow: ellipsis;font-weight:600;">
                                Address</div>

                              <div style="font-size:13px; line-height: 16px;">
                                 {{ $row->country }} , {{ $row->city }}
                              </div>
                            </td>

                            <td width="15%" align="left" valign="top" style="padding-right:20px;">
                              <div style="color:#303030; font-size:12px; margin-bottom:3px;">Assigned to</div>



                               <div style="font-size:12px;"><select id="assignTo100008" name="assignTo100008"
                                  class="form-control"
                                  style="padding: 3px; font-size: 12px; height: 25px; line-height: 15px; color: #000; font-weight: 600;"
                                  autocomplete="off" onchange="changeAssignTo('100008');">

                                  <option value="1">Assign to me</option>


                                  </select>
                                  
                              </div>
                            </td>

                            <!-- <td width="13%" align="left" valign="top">
                              <div style="font-size:12px; line-height: 16px; margin-bottom:3px;"><span
                                  style="color:#686868;"><i class="fa fa-clock-o" aria-hidden="true"></i> Created</span>
                              </div>

                              <div style="font-size:11px; line-height: 16px; margin-bottom:3px;">23-08-2023</div>
                            </td> -->

                            <td width="13%" align="right" valign="middle">
                              <div style="font-size:12px; line-height: 16px; margin-bottom:3px;"><span
                                  style="color:#686868;"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;Created at</span></div>

                              <div style="font-size:11px; line-height: 16px; margin-bottom:3px;">{{ date('F j, Y g:i A', strtotime($row->created_at)) }}
                                          </div>
                            </td>

                          </tr>

                        </tbody>
                      </table>
                    </div>


                    <div class="viewpackageheader" onclick="$('#pro8').toggle();"><i class="fa fa-dot-circle-o"
                        aria-hidden="true"></i> &nbsp;View Proposal (1)</div>

                    <div class="proposallistouter" style="display:none;" id="pro8">


                      <a href="display.html?ga=itineraries&view=1&id=100018"><i class="fa fa-list-alt"
                          aria-hidden="true"></i> &nbsp;Regular Classroom Program: VR and AR (&#8377;50,000 ) &nbsp;
                      </a>






                    </div>


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

















        </div><!--end col-->



        <!-- end row -->



      </div>



      <!-- End Page-content -->





    </div>

  </div>
</div>

<script>



  function dltfunction(id) {

    if (confirm('Are you sure your want to delete?')) {

      window.location.href = 'display.html?ga=query&dltid=' + id;

    }

  }





  $(function () {

    $("#startDate").datepicker({

      dateFormat: 'dd-mm-yy', changeMonth: true, changeYear: true, yearRange: "-90:+00"

    });



    $("#endDate").datepicker({

      dateFormat: 'dd-mm-yy', changeMonth: true, changeYear: true, yearRange: "-90:+00"

    });

  });





</script>





<script>

  function changeAssignTo(id) {

    var assignTo = $('#assignTo' + id).val();

    $('#actoinfrm').attr('src', 'actionpage.php?action=changeassignstatus&queryid=' + id + '&assignTo=' + assignTo);

  }



  $(document).ready(function () {

    $('[data-toggle="tooltip"]').tooltip();

  });









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

    
       <!---model section ------>
       <div class="modelnew modal right fade " id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" >
          <div class="modal-dialog" role="document" style="width: 600px; max-width: 600px;">
            <div class="modal-content">

                <div class="modal-header">
                  
                  <h4 class="modal-title" id="poptitle2">Add new Enquiery</h4>
                  
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">×</span>
                  </button>
                </div>

                <div class="modal-body" id="popcontent2">

                <form class="custom-validation" action="frmaction.html" target="actoinfrm" novalidate="" method="post" enctype="multipart/form-data">	
 
                  <div class="modal-body">			
                  <div class="row">


                  <div class="col-md-4"> 
                  <div class="form-group">
                  <label for="validationCustom02">Student Name </label>
                    <input type="text" class="form-control reqfield" required="" name="firstName" value="">
                  </div></div>

                  <div class="col-md-6"> 
                  <div class="form-group">
                  <label for="validationCustom02">Student Email  </label>
                    <input type="email" class="form-control reqfield" required="" name="email" value="">
                  </div></div>

                  <div class="col-md-6"> 
                  <div class="form-group">
                  <label for="validationCustom02">Date of birth  </label>
                    <input type="date" class="form-control reqfield" required="" name="lastName" value="">
                  </div></div>

                  
                  <div class="col-md-2"> 
                  <div class="form-group">
                  <label for="validationCustom02">Student country </label>
                        <select class="form-control basic reqfield" id="country"  name="country">
                                                  <option  value="">Select Country</option>
                                                  <option data-countryCode="213" value="Algeria">Algeria (+213)</option>
                                                  <option data-countryCode="376" value="Andorra">Andorra (+376)</option>
                                                  <option data-countryCode="244" value="Angola">Angola (+244)</option>
                                                  <option data-countryCode="1264" value="Anguilla">Anguilla (+1264)</option>
                                                  <option data-countryCode="1268" value="Antigua &amp; Barbuda">Antigua &amp; Barbuda (+1268)</option>
                                                  <option data-countryCode="54" value="Argentina">Argentina (+54)</option>
                                                  <option data-countryCode="374" value="Armenia">Armenia (+374)</option>
                                                  <option data-countryCode="297" value="Aruba">Aruba (+297)</option>
                                                  <option data-countryCode="61" value="Australia">Australia (+61)</option>
                                                  <option data-countryCode="43" value="Austria">Austria (+43)</option>
                                                  <option data-countryCode="994" value="Azerbaijan">Azerbaijan (+994)</option>
                                                  <option data-countryCode="1242" value="Bahamas">Bahamas (+1242)</option>
                                                  <option data-countryCode="973" value="Bahrain">Bahrain (+973)</option>
                                                  <option data-countryCode="880" value="Bangladesh">Bangladesh (+880)</option>
                                                  <option data-countryCode="1246" value="Barbados">Barbados (+1246)</option>
                                                  <option data-countryCode="375" value="Belarus">Belarus (+375)</option>
                                                  <option data-countryCode="32" value="Belgium">Belgium (+32)</option>
                                                  <option data-countryCode="501" value="Belize">Belize (+501)</option>
                                                  <option data-countryCode="229" value="Benin">Benin (+229)</option>
                                                  <option data-countryCode="1441" value="Bermuda">Bermuda (+1441)</option>
                                                  <option data-countryCode="975" value="Bhutan">Bhutan (+975)</option>
                                                  <option data-countryCode="591" value="Bolivia">Bolivia (+591)</option>
                                                  <option data-countryCode="387" value="Bosnia Herzegovina">Bosnia Herzegovina (+387)</option>
                                                  <option data-countryCode="267" value="Botswana">Botswana (+267)</option>
                                                  <option data-countryCode="55" value="Brazil">Brazil (+55)</option>
                                                  <option data-countryCode="673" value="Brunei">Brunei (+673)</option>
                                                  <option data-countryCode="359" value="Bulgaria">Bulgaria (+359)</option>
                                                  <option data-countryCode="226" value="Bulgaria">Bulgaria (+226)</option>
                                                  <option data-countryCode="257" value="Burundi">Burundi (+257)</option>
                                                  <option data-countryCode="855" value="Cambodia">Cambodia (+855)</option>
                                                  <option data-countryCode="237" value="Cameroon">Cameroon (+237)</option>
                                                  <option data-countryCode="1" value="Canada">Canada (+1)</option>
                                                  <option data-countryCode="238" value="Cape Verde Islands">Cape Verde Islands (+238)</option>
                                                  <option data-countryCode="1345" value="Cayman Islands">Cayman Islands (+1345)</option>
                                                  <option data-countryCode="236" value="Central African Republic">Central African Republic (+236)</option>
                                                  <option data-countryCode="56" value="Chile">Chile (+56)</option>
                                                  <option data-countryCode="86" value="China">China (+86)</option>
                                                  <option data-countryCode="57" value="Colombia">Colombia (+57)</option>
                                                  <option data-countryCode="269" value="Comoros">Comoros (+269)</option>
                                                  <option data-countryCode="242" value="Congo">Congo (+242)</option>
                                                  <option data-countryCode="682" value="Cook Islands">Cook Islands (+682)</option>
                                                  <option data-countryCode="506" value="Costa Rica">Costa Rica (+506)</option>
                                                  <option data-countryCode="385" value="Croatia">Croatia (+385)</option>
                                                  <option data-countryCode="53" value="Cuba">Cuba (+53)</option>
                                                  <option data-countryCode="90392" value="Cyprus North">Cyprus North (+90392)</option>
                                                  <option data-countryCode="357" value="Cyprus South">Cyprus South (+357)</option>
                                                  <option data-countryCode="42" value="Czech Republic">Czech Republic (+42)</option>
                                                  <option data-countryCode="45" value="Denmark">Denmark (+45)</option>
                                                  <option data-countryCode="253" value="Djibouti">Djibouti (+253)</option>
                                                  <option data-countryCode="1809" value="Dominica">Dominica (+1809)</option>
                                                  <option data-countryCode="1809" value="Dominican Republic">Dominican Republic (+1809)</option>
                                                  <option data-countryCode="593" value="Ecuador">Ecuador (+593)</option>
                                                  <option data-countryCode="20" value="Egypt">Egypt (+20)</option>
                                                  <option data-countryCode="503" value="El Salvador">El Salvador (+503)</option>
                                                  <option data-countryCode="240" value="Equatorial Guinea">Equatorial Guinea (+240)</option>
                                                  <option data-countryCode="291" value="Eritrea">Eritrea (+291)</option>
                                                  <option data-countryCode="372" value="Estonia">Estonia (+372)</option>
                                                  <option data-countryCode="251" value="Ethiopia">Ethiopia (+251)</option>
                                                  <option data-countryCode="500" value="Falkland Islands">Falkland Islands (+500)</option>
                                                  <option data-countryCode="298" value="Faroe Islands">Faroe Islands (+298)</option>
                                                  <option data-countryCode="679" value="Fiji">Fiji (+679)</option>
                                                  <option data-countryCode="358" value="Finland">Finland (+358)</option>
                                                  <option data-countryCode="33" value="France">France (+33)</option>
                                                  <option data-countryCode="594" value="French Guiana">French Guiana (+594)</option>
                                                  <option data-countryCode="689" value="French Polynesia">French Polynesia (+689)</option>
                                                  <option data-countryCode="241" value="Gabon">Gabon (+241)</option>
                                                  <option data-countryCode="220" value="Gambia">Gambia (+220)</option>
                                                  <option data-countryCode="7880" value="Georgia">Georgia (+7880)</option>
                                                  <option data-countryCode="49" value="Germany">Germany (+49)</option>
                                                  <option data-countryCode="233" value="Ghana">Ghana (+233)</option>
                                                  <option data-countryCode="350" value="Gibraltar">Gibraltar (+350)</option>
                                                  <option data-countryCode="30" value="Greece">Greece (+30)</option>
                                                  <option data-countryCode="299" value="Greenland">Greenland (+299)</option>
                                                  <option data-countryCode="1473" value="Grenada">Grenada (+1473)</option>
                                                  <option data-countryCode="590" value="Guadeloupe">Guadeloupe (+590)</option>
                                                  <option data-countryCode="671" value="Guam">Guam (+671)</option>
                                                  <option data-countryCode="502" value="Guatemala">Guatemala (+502)</option>
                                                  <option data-countryCode="224" value="Guinea">Guinea (+224)</option>
                                                  <option data-countryCode="245" value="Guinea">Guinea - Bissau (+245)</option>
                                                  <option data-countryCode="592" value="Guyana">Guyana (+592)</option>
                                                  <option data-countryCode="509" value="Haiti">Haiti (+509)</option>
                                                  <option data-countryCode="504" value="Honduras">Honduras (+504)</option>
                                                  <option data-countryCode="852" value="Hong Kong">Hong Kong (+852)</option>
                                                  <option data-countryCode="36" value="Hungary">Hungary (+36)</option>
                                                  <option data-countryCode="354" value="Iceland">Iceland (+354)</option>
                                                  <option data-countryCode="91" value="India">India (+91)</option>
                                                  <option data-countryCode="62" value="Indonesia">Indonesia (+62)</option>
                                                  <option data-countryCode="98" value="Iran">Iran (+98)</option>
                                                  <option data-countryCode="964" value="Iraq">Iraq (+964)</option>
                                                  <option data-countryCode="353" value="Ireland">Ireland (+353)</option>
                                                  <option data-countryCode="972" value="Israel">Israel (+972)</option>
                                                  <option data-countryCode="39" value="Italy">Italy (+39)</option>
                                                  <option data-countryCode="1876" value="Jamaica">Jamaica (+1876)</option>
                                                  <option data-countryCode="81" value="Japan">Japan (+81)</option>
                                                  <option data-countryCode="962" value="Jordan">Jordan (+962)</option>
                                                  <option data-countryCode="7" value="Kazakhstan">Kazakhstan (+7)</option>
                                                  <option data-countryCode="254" value="Kenya">Kenya (+254)</option>
                                                  <option data-countryCode="686" value="Kiribati">Kiribati (+686)</option>
                                                  <option data-countryCode="850" value="Korea North">Korea North (+850)</option>
                                                  <option data-countryCode="82" value="Korea South">Korea South (+82)</option>
                                                  <option data-countryCode="965" value="Kuwait">Kuwait (+965)</option>
                                                  <option data-countryCode="996" value="Kyrgyzstan">Kyrgyzstan (+996)</option>
                                                  <option data-countryCode="856" value="Laos">Laos (+856)</option>
                                                  <option data-countryCode="371" value="Latvia">Latvia (+371)</option>
                                                  <option data-countryCode="961" value="Lebanon">Lebanon (+961)</option>
                                                  <option data-countryCode="266" value="Lesotho">Lesotho (+266)</option>
                                                  <option data-countryCode="231" value="Liberia">Liberia (+231)</option>
                                                  <option data-countryCode="218" value="Libya">Libya (+218)</option>
                                                  <option data-countryCode="417" value="Liechtenstein">Liechtenstein (+417)</option>
                                                  <option data-countryCode="370" value="Lithuania">Lithuania (+370)</option>
                                                  <option data-countryCode="352" value="Luxembourg">Luxembourg (+352)</option>
                                                  <option data-countryCode="853" value="Macao">Macao (+853)</option>
                                                  <option data-countryCode="389" value="Macedonia">Macedonia (+389)</option>
                                                  <option data-countryCode="261" value="Madagascar">Madagascar (+261)</option>
                                                  <option data-countryCode="265" value="Malawi">Malawi (+265)</option>
                                                  <option data-countryCode="60" value="Malaysia">Malaysia (+60)</option>
                                                  <option data-countryCode="960" value="Maldives">Maldives (+960)</option>
                                                  <option data-countryCode="223" value="Mali">Mali (+223)</option>
                                                  <option data-countryCode="356" value="Malta">Malta (+356)</option>
                                                  <option data-countryCode="692" value="Marshall Islands">Marshall Islands (+692)</option>
                                                  <option data-countryCode="596" value="Martinique">Martinique (+596)</option>
                                                  <option data-countryCode="222" value="Mauritania">Mauritania (+222)</option>
                                                  <option data-countryCode="263" value="Mayotte">Mayotte (+269)</option>
                                                  <option data-countryCode="52" value="Mexico">Mexico (+52)</option>
                                                  <option data-countryCode="691" value="Micronesia">Micronesia (+691)</option>
                                                  <option data-countryCode="373" value="Moldova">Moldova (+373)</option>
                                                  <option data-countryCode="377" value="Monaco">Monaco (+377)</option>
                                                  <option data-countryCode="976" value="Mongolia">Mongolia (+976)</option>
                                                  <option data-countryCode="1664" value="Montserrat">Montserrat (+1664)</option>
                                                  <option data-countryCode="212" value="Morocco">Morocco (+212)</option>
                                                  <option data-countryCode="258" value="Mozambique">Mozambique (+258)</option>
                                                  <option data-countryCode="95" value="Myanmar">Myanmar (+95)</option>
                                                  <option data-countryCode="264" value="Namibia">Namibia (+264)</option>
                                                  <option data-countryCode="674" value="Nauru">Nauru (+674)</option>
                                                  <option data-countryCode="977" value="Nepal">Nepal (+977)</option>
                                                  <option data-countryCode="31" value="Netherlands">Netherlands (+31)</option>
                                                  <option data-countryCode="687" value="New Caledonia">New Caledonia (+687)</option>
                                                  <option data-countryCode="64" value="New Zealand">New Zealand (+64)</option>
                                                  <option data-countryCode="505" value="Nicaragua">Nicaragua (+505)</option>
                                                  <option data-countryCode="227" value="Niger">Niger (+227)</option>
                                                  <option data-countryCode="234" value="Nigeria">Nigeria (+234)</option>
                                                  <option data-countryCode="683" value="Niue">Niue (+683)</option>
                                                  <option data-countryCode="672" value="Norfolk Islands">Norfolk Islands (+672)</option>
                                                  <option data-countryCode="670" value="Northern Marianas">Northern Marianas (+670)</option>
                                                  <option data-countryCode="47" value="Norway">Norway (+47)</option>
                                                  <option data-countryCode="968" value="Oman">Oman (+968)</option>
                                                  <option data-countryCode="680" value="Palau">Palau (+680)</option>
                                                  <option data-countryCode="507" value="Panama">Panama (+507)</option>
                                                  <option data-countryCode="675" value="Papua New Guinea">Papua New Guinea (+675)</option>
                                                  <option data-countryCode="595" value="Paraguay">Paraguay (+595)</option>
                                                  <option data-countryCode="51" value="Peru">Peru (+51)</option>
                                                  <option data-countryCode="63" value="Philippines">Philippines (+63)</option>
                                                  <option data-countryCode="48" value="Poland">Poland (+48)</option>
                                                  <option data-countryCode="351" value="Portugal">Portugal (+351)</option>
                                                  <option data-countryCode="1787" value="Puerto Rico">Puerto Rico (+1787)</option>
                                                  <option data-countryCode="974" value="Qatar">Qatar (+974)</option>
                                                  <option data-countryCode="262" value="Reunion">Reunion (+262)</option>
                                                  <option data-countryCode="40" value="Romania">Romania (+40)</option>
                                                  <option data-countryCode="7" value="Russia">Russia (+7)</option>
                                                  <option data-countryCode="250" value="Rwanda">Rwanda (+250)</option>
                                                  <option data-countryCode="378" value="San Marino">San Marino (+378)</option>
                                                  <option data-countryCode="239" value="Sao Tome">Sao Tome &amp; Principe (+239)</option>
                                                  <option data-countryCode="966" value="Saudi Arabia">Saudi Arabia (+966)</option>
                                                  <option data-countryCode="221" value="Senegal">Senegal (+221)</option>
                                                  <option data-countryCode="381" value="Serbia">Serbia (+381)</option>
                                                  <option data-countryCode="248" value="Seychelles">Seychelles (+248)</option>
                                                  <option data-countryCode="232" value="Sierra Leone">Sierra Leone (+232)</option>
                                                  <option data-countryCode="65" value="Singapore">Singapore (+65)</option>
                                                  <option data-countryCode="421" value="Slovak Republic">Slovak Republic (+421)</option>
                                                  <option data-countryCode="386" value="Slovenia">Slovenia (+386)</option>
                                                  <option data-countryCode="677" value="Solomon Islands">Solomon Islands (+677)</option>
                                                  <option data-countryCode="252" value="Somalia">Somalia (+252)</option>
                                                  <option data-countryCode="27" value="South Africa">South Africa (+27)</option>
                                                  <option data-countryCode="34" value="Spain">Spain (+34)</option>
                                                  <option data-countryCode="94" value="Sri Lanka">Sri Lanka (+94)</option>
                                                  <option data-countryCode="290" value="St. Helena">St. Helena (+290)</option>
                                                  <option data-countryCode="1869" value="St. Kitts">St. Kitts (+1869)</option>
                                                  <option data-countryCode="1758" value="St. Lucia">St. Lucia (+1758)</option>
                                                  <option data-countryCode="249" value="Sudan">Sudan (+249)</option>
                                                  <option data-countryCode="597" value="Suriname">Suriname (+597)</option>
                                                  <option data-countryCode="268" value="Swaziland">Swaziland (+268)</option>
                                                  <option data-countryCode="46" value="Sweden">Sweden (+46)</option>
                                                  <option data-countryCode="41" value="Switzerland">Switzerland (+41)</option>
                                                  <option data-countryCode="963" value="Syria">Syria (+963)</option>
                                                  <option data-countryCode="886" value="Taiwan">Taiwan (+886)</option>
                                                  <option data-countryCode="7" value="Tajikstan">Tajikstan (+7)</option>
                                                  <option data-countryCode="66" value="Thailand">Thailand (+66)</option>
                                                  <option data-countryCode="228" value="Togo">Togo (+228)</option>
                                                  <option data-countryCode="676" value="Tonga">Tonga (+676)</option>
                                                  <option data-countryCode="1868" value="Trinidad &amp; Tobago">Trinidad &amp; Tobago (+1868)</option>
                                                  <option data-countryCode="216" value="Tunisia">Tunisia (+216)</option>
                                                  <option data-countryCode="90" value="Turkey">Turkey (+90)</option>
                                                  <option data-countryCode="7" value="Turkmenistan">Turkmenistan (+7)</option>
                                                  <option data-countryCode="993" value="Turkmenistan">Turkmenistan (+993)</option>
                                                  <option data-countryCode="1649" value="Turks">Turks &amp; Caicos Islands (+1649)</option>
                                                  <option data-countryCode="688" value="Tuvalu">Tuvalu (+688)</option>
                                                  <option data-countryCode="256" value="Uganda ">Uganda (+256)</option>
                                                  <option data-countryCode="44" value="UK">UK (+44)</option>
                                                  <option data-countryCode="380" value="Ukraine">Ukraine (+380)</option>
                                                  <option data-countryCode="971" value="United Arab Emirates">United Arab Emirates (+971)</option>
                                                  <option data-countryCode="598" value="Uruguay">Uruguay (+598)</option>
                                                  <option data-countryCode="1" value="USA">USA (+1)</option>
                                                  <option data-countryCode="7" value="Uzbekistan">Uzbekistan (+7)</option>
                                                  <option data-countryCode="678" value="Vanuatu">Vanuatu (+678)</option>
                                                  <option data-countryCode="379" value="Vatican City">Vatican City (+379)</option>
                                                  <option data-countryCode="58" value="Venezuela">Venezuela (+58)</option>
                                                  <option data-countryCode="84" value="Vietnam">Vietnam (+84)</option>
                                                  <option data-countryCode="1284" value="Virgin Islands">Virgin Islands - British (+1284)</option>
                                                  <option data-countryCode="1340" value="Virgin Islands">Virgin Islands - US (+1340)</option>
                                                  <option data-countryCode="681" value="Wallis &amp; Futuna">Wallis &amp; Futuna (+681)</option>
                                                  <option data-countryCode="969" value="Yemen (North)">Yemen (North)(+969)</option>
                                                  <option data-countryCode="967" value="Yemen (South)">Yemen (South)(+967)</option>
                                                  <option data-countryCode="260" value="Zambia">Zambia (+260)</option>
                                                  <option data-countryCode="263" value="Zimbabwe">Zimbabwe (+263)</option>
                        </select>
                  </div></div>
                  
                    
                  
                  <div class="col-md-4"> 
                  <div class="form-group">
                  <label for="validationCustom02">Mobile Number </label>
                  <table border="0" cellpadding="0" cellspacing="0" class="groupfields">
                    <tbody><tr>
                      <td colspan="2"><input type="text" class="form-control" id="code" placeholder="+91" required="" name="mobileCode2" value="" style="    width:67px !important; margin-right:5px;" readonly></td>
                      <td><input type="text" class="form-control reqfield" required="" name="mobile2" value="" style="    width: 300px !important;"></td>
                      </tr>
                    </tbody>
                  </table>
                  
                  </div></div>


                  <div class="col-md-6"> 
                  <div class="form-group">
                  <label for="validationCustom02">Passport No</label>
                    <input type="email" class="form-control" required="" name="email2" value="">
                  </div></div>





                  <div class="col-md-6"> 
                  <div class="form-group">
                  <label for="validationCustom02">City <span class="redmtext">*</span></label>
                  <input type="text" class="form-control reqfield" onkeyup="getSearchCIty('pickupCitySearch','pickupCity','searchcitylists');" id="pickupCitySearch" required="" name="pickupCitySearch" value="" autocomplete="off"> 
                    <input name="city" id="pickupCity" type="hidden" value="">
                    <div style="height:0px; font-size:0px; position:relative;  " id="searchcitylists"></div>
                  </div></div>
                    
                    
                    <div class="col-md-6"> 
                  <div class="form-group">
                  <label for="validationCustom02">Contact Address </label>
                    <input type="text" class="form-control" name="address" value="">
                  </div></div>

                  <div class="col-md-6"> 
                  <div class="form-group">
                  <label for="validationCustom02">Password </label>
                    <input type="text" class="form-control reqfield" name="address" value="">
                  </div></div>

                  <div class="col-md-12"> 
                  <div class="form-group">
                  <label for="validationCustom02">Confirm password </label>
                    <input type="text" class="form-control reqfield" name="address" value="">
                  </div></div>

                  <div class="col-md-2"> 
                    <div class="form-group">
                      <label for="validationCustom02">Student country </label>
                      <select class="form-control basic reqfield"  name="status">
                                              <option value="">Select Status</option>
                                              <option value="1">Active</option>
                                              <option value="0">Deactive</option>
                                          </select>
                    </div>
                  </div><hr>

                  <div class="col-md-12"> 
                      <div class="form-group">
                      <label for="validationCustom02">Student Photo</label>
                        <input type="file" id="logo"  name="logo"  class="form-control"   >
                        @error('logo')<span class="text-danger" style="margin-left: 31%;">{{ $message }}</span>@enderror
                      </div></div> 


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
                  
                  <div class="modal-footer">  <button type="button"  data-dismiss="modal" aria-label="Close" class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray" >Cancel</button>
                  <input name="Save" type="submit" value="Save" id="savingbutton" class="btn btn-primary" onclick="this.form.submit();">
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

            .modelnew.show .modal-dialog{
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
              .modal.left.fade .modal-dialog{
                left: -320px;
                -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
                  -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
                    -o-transition: opacity 0.3s linear, left 0.3s ease-out;
                        transition: opacity 0.3s linear, left 0.3s ease-out;
              }
              
              .modal.left.fade.in .modal-dialog{
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

            .table>tbody>tr>td, .table>tfoot>tr>td, .table>thead>tr>td {
                padding: 10px 12px;
            }
            
            .container-fluid .col-md-12 .card-body{padding:0px;}
            body, html{background-color:#fff;}

            .card { 
                -webkit-box-shadow: 0 0 1.25rem rgb(108 118 134 / 0%);
                box-shadow: 0 0 1.25rem rgb(108 118 134 / 0%); 
            }
            .topnavigation{padding-top:0px !important;} 
            #ui-datepicker-div{z-index:99999999 !important;}
          </style>
       <!--model style end-->
      
    </div>    
    
    <script>
      $("select[name=country]" ).change(function() {
               $('input#code').val('+'+$(this).find(':selected').attr('data-countryCode'));
            });
    </script>
    
   </body>
   
</html>