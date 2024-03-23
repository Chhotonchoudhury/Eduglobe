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

    <!---alert message --->
    @if(session('s_success'))
    <div class="alert alert-success bg-success text-white headersavealert" role="alert">
        {{ session('s_success') }}
    </div>
    @endif
    <!---end message --->

    <div class="wrapper" style="margin-top: 56px;padding-left: 20px;">
        <div class="newboxheading">
            <div class="newhead">Email Templates
                <div class="newoptionmenu">


                    <div>
                        <a href="{{ route('mail.create') }}"><button type="button"
                                class="btn btn-secondary btn-lg waves-effect waves-light"
                                onclick="loadpop2('Add Student',this,'600px')" data-toggle="modal"
                                data-target="#myModal2" data-backdrop="static" popaction="action=addclient">Add New
                                Template</button></a>
                    </div>
                    <div>
                        <form action="" method="get" enctype="multipart/form-data">
                            <input type="text" name="keyword" class="form-control newsearchsec"
                                placeholder="Search by name, email, phone" value=""
                                style="margin-top: 3px; width:250px;">
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

                                    <form action="frmaction.html" method="post" enctype="multipart/form-data"
                                        name="addeditfrm" target="actoinfrm" id="addeditfrm">
                                        <div id="bulkassign"
                                            style="display:none;padding: 11px 2px 5px; background-color: #e4f3ff; border-bottom: 2px solid rgb(221, 221, 221); border-radius: 3px; width: 100%; float: left; display: none;">
                                            <table border="0" cellspacing="0" cellpadding="5">
                                                <tr>
                                                    <td style="font-size:13px;"><input type="checkbox" id="ckbCheckAll"
                                                            style="width: 16px; height: 16px;margin-left: 6px;" /></td>
                                                    <td style="font-size:13px;">Select All&nbsp;</td>
                                                    <td><select id="assignToPerson" name="assignToPerson"
                                                            class="form-control"
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
                                                    <td><input autocomplete="false" name="action" type="hidden"
                                                            id="action" value="bulkclientaddtogroup" /></td>
                                                </tr>
                                            </table>
                                        </div>


                                        <table class="table table-hover mb-0">

                                            <thead>
                                                <tr>
                                                    <th width="1%"></th>
                                                    <th width="10%">Name</th>
                                                    <th width="15%" align="left">Subject</th>
                                                    <th width="10%">Date</th>
                                                    <th width="8%" align="left">By</th>

                                                    <th width="1%">&nbsp;</th>
                                                    <th width="1%">&nbsp;</th>
                                                    {{-- <th width="1%">&nbsp;</th>
                                                    <th width="1%">&nbsp;</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($templates as $row)
                                                <tr>

                                                    <td width="1%"> <input type="checkbox" name="assignall[]"
                                                            class="checkBoxClass" id="assignqury" value="100006"
                                                            onclick="selectedfun();" style="width: 16px; height: 16px;">
                                                    </td>
                                                    <td width="10%"><strong>{{ $row->name }}</strong></a>
                                                    </td>
                                                    <td width="15%" align="left">{{ $row->subject }}</td>

                                                    <td width="10%">{{ $row->created_at->format('F j, Y g:i A') }}
                                                    </td>
                                                    <td width="8%" align="left">
                                                        <table border="0" cellpadding="0" cellspacing="0"
                                                            class="addbynewbadges">
                                                            <tr>
                                                                @if($row->entry_id == '')

                                                                <td colspan="2">
                                                                    <div class="listnameicon">O</div>
                                                                </td>
                                                                <td>Online</td>

                                                                @else

                                                                <td colspan="2">
                                                                    <div class="listnameicon">{{
                                                                        substr($row->user->name, 0, 1) }}</div>
                                                                </td>
                                                                <td>{{ $row->user->name }}</td>
                                                                @endif

                                                            </tr>

                                                        </table>
                                                    </td>


                                                    <td width="1%"><a
                                                            class="studentInfo dropdown-item neweditpan show-email"
                                                            style="float:left;" data-id="{{ $row->id }}"><i
                                                                class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>



                                                    <td width="1%">
                                                        <a class="dropdown-item neweditpan"
                                                            href="{{ route('mail.edite', $row->id) }}"
                                                            data-backdrop="static"
                                                            popaction="action=addclient&id=100006"><i
                                                                class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    </td>





                                                    {{--<td width="1%">
                                                        <a class="dropdown-item neweditpan"
                                                            onclick="loadpop2('Edit Student',this,'600px')"
                                                            data-toggle="modal" data-target="#myModal2"
                                                            data-backdrop="static"
                                                            popaction="action=addclient&id=100006"><i
                                                                class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </td> --}}






                                                </tr>
                                                @endforeach




                                            </tbody>
                                        </table>


                                    </form>



                                    <div class="mt-3 pageingouter">
                                        <div
                                            style="float: left; font-size: 13px; padding: 7px 11px; border: 1px solid #ededed; background-color: #fff; color: #000;">
                                            Total Records: <strong>{{ $templates->count() }}</strong></div>
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


    <!---template show model --->

    <!---end of the model ---->

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

    <!---this is the model section for showing the email part--->
    <div class="modal fade show-modal">
        <div class="modal-dialog modal-dialog-centered " style="max-width: 1100px; width: 1100px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="poptitle">Template Preview</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" id="popcontent">



                    <div style="padding:10px 0px; border-bottom:1px solid #ddd; font-size:16px;">
                        <strong>Name : </strong> <span id="tem-name">Stage Contact</span>
                    </div>

                    <div style="padding:10px 0px; border-bottom:1px solid #ddd; font-size:16px; margin-bottom:30px;">
                        <strong>Email Subject : </strong><span id="tem-subject">Thank you intrest in our services</span>
                    </div>

                    <p id="tem-details">

                    </p>




                </div>
            </div>
        </div>
    </div>
    <!---end of the model part ---->

    <script>
        //this is the alert function message
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
        //end of the alert function method 

       //ajax request for get the data 
      $(document).ready(function() {
          $('.show-email').on('click', function(e) {
              e.preventDefault();

              // Get the record ID from the data-id attribute
              var recordId = $(this).data('id');
             
             
              // AJAX request to fetch the record data based on the ID
              $.ajax({
                  url: "mail-template-show/"+recordId, // Replace with your actual URL
                  type: 'GET',
                   // Use the appropriate HTTP method
                  dataType: 'json', // Expect JSON response
                  success: function(response) {
                      if (response.success) {
                       
                            $('#tem-name').html('');
                            $('#tem-subject').html('');
                            $('#tem-details').html('');


                            //student info section 
                            
                            $('#tem-name').append(response.template.name);
                            $('#tem-subject').append(response.template.subject);
                            $('#tem-details').append(response.template.body);

              
                   
                            // $('#name').val(response.name);
                            $('.show-modal').modal('show');

                        
                           
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
    </script>


    </div>

</body>

</html>