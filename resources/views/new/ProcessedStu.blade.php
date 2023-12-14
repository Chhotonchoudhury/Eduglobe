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
            <div class="newhead">Processing Students
                <div class="newoptionmenu">


                    <div>
                        {{-- <button type="button" class="btn btn-secondary btn-lg waves-effect waves-light"
                            onclick="loadpop2('Add Student',this,'600px')" data-toggle="modal" data-target="#myModal2"
                            data-backdrop="static" popaction="action=addclient">Add Student</button> --}}
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
                                                    <th width="10%">Mobile</th>
                                                    <th width="1%">Email</th>
                                                    <th width="1%">Processing status</th>
                                                    <th width="1%">EMGS status</th>
                                                    <th width="1%">Payment status</th>

                                                    <th width="1%">&nbsp;</th>
                                                    {{-- <th width="1%">&nbsp;</th>
                                                    <th width="1%">&nbsp;</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($students as $row)
                                                <tr>

                                                    <td width="1%"><a class="dropdown-item neweditpan"
                                                            onclick="loadpop('Edit Course',this,'600px')"
                                                            data-toggle="modal" data-target=".bs-example-modal-center"
                                                            popaction="action=addcourse&amp;id=100001"><img
                                                                src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):('https://bootdey.com/img/Content/avatar/avatar7.png') }}"
                                                                width="30" height="30" style="border-radius: 25px;"></a>
                                                    </td>
                                                    <td width="10%"><strong>{{ $row->name }}</strong></a>
                                                    </td>
                                                    <td width="10%">+{{$row->country_code}}{{$row->phone}}</td>
                                                    <td width="1%">{{$row->email}}</td>


                                                    <td width="1%">
                                                        @if($row->status_id == null )
                                                        <span class="badge badge-danger">Not active</span>
                                                        @else
                                                        <span class="badge badge-primary">{{ $row->status->status
                                                            }}</span>
                                                        @endif
                                                    </td>
                                                    <td width="1%">
                                                        @if($row->emg_status == null )
                                                        <span class="badge badge-danger">Not started</span>
                                                        @else
                                                        <span class="badge badge-info">{{ $row->emgs->status
                                                            }}</span>
                                                        @endif
                                                    </td>
                                                    <td width="1%">
                                                        @if($row->payment_status == null )
                                                        <span class="badge badge-danger">Not started</span>
                                                        @else
                                                        <span class="badge badge-warning">{{
                                                            $row->studentPaymentStatus->status
                                                            }}</span>
                                                        @endif
                                                    </td>



                                                    <td width="1%"><a class="studentInfo dropdown-item neweditpan"
                                                            data-id="{{ $row->id }}" href="#" style="float:left;"><i
                                                                class="fa fa-id-card-o" aria-hidden="true"></i></a>
                                                    </td>

                                                    {{-- <td width="1%">
                                                        <a class="dropdown-item neweditpan"
                                                            onclick="loadpop2('Edit Student',this,'600px')"
                                                            data-toggle="modal" data-target="#myModal2"
                                                            data-backdrop="static"
                                                            popaction="action=addclient&id=100006"><i
                                                                class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    </td> --}}
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

    <!---this is the model section --->
    <div class="modelnew modal right fade " id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document" style="width: 650px; max-width: 650px;">
            <div class="modal-content">

                <div class="modal-header">

                    <h6 class="modal-title" id="poptitle2">Save university record</h6>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <form method="POST" action="{{ route('process.status') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body" id="popcontent2">

                        <a>
                            <div class="media" style="margin-left: 2%;">
                                <div class="mr-3 align-self-center">
                                    <img id="stu_photo"
                                        src="http://localhost/eduglobe/public/uploads/202212281610student1.jpg" alt=""
                                        class="avatar-sm rounded-circle"
                                        style="width: 140px;border-radius:0% !important;">
                                </div>
                                <div class="media-body " style="margin-top: 1%;">
                                    <h5 class="font-size-16 mb-1" id="stu_name">MOHAMMED YOUSIF</h5>
                                    <p class="text-truncate mb-0"><span class="lightbox">Email:
                                            <strong id="stu_email">callslink@gmail.com</strong> &nbsp;|&nbsp;
                                            Mobile:
                                            <strong
                                                id="stu_mobile">183290270</strong>&nbsp;&nbsp;|&nbsp;&nbsp;City:</span>
                                        <strong id="stu_city">Kuala Lumpur</strong>&nbsp;&nbsp;
                                    </p>

                                    <p><span class="lightbox">Country: <strong id="stu_country">Malaysia</strong>
                                            &nbsp;|&nbsp;
                                            Passport No: <strong id="stu_passport">A1234321</strong></span>
                                    </p>

                                </div>

                            </div>
                        </a>

                        <hr>
                        <style>
                            /* Custom styles for the select elements */
                            .custom-select {
                                display: block;
                                width: 100%;
                                padding: 0.375rem 0.75rem;
                                font-size: 1rem;
                                line-height: 1.5;
                                color: #495057;
                                background-color: #fff;
                                background-clip: padding-box;
                                border: 1px solid #ced4da;
                                border-radius: 0.25rem;
                                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                            }
                        </style>

                        <table style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="padding: 5; width: 33.33%;">
                                    <label style="margin-bottom: 0;">Processing status</label>
                                    <select class="custom-select" id="p_status" name="p_status">
                                        <option value="">select option</option>
                                        @foreach($status as $row)
                                        <option value="{{ $row->id }}">{{ $row->status }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td style="padding: 5; width: 33.33%;">
                                    <label style="margin-bottom: 0;">EMGS status</label>
                                    <select class="custom-select" id="emgs_status" name="emgs_status">
                                        <option value="">select option</option>
                                        @foreach($emgs_status as $row)
                                        <option value="{{ $row->id }}">{{ $row->status }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td style="padding: 5; width: 33.33%;">
                                    <label style="margin-bottom: 0;">Payment status</label>
                                    <select class="custom-select" id="payment_status" name="payment_status">
                                        <option value="">select option</option>
                                        @foreach($payment_status as $row)
                                        <option value="{{ $row->id }}">{{ $row->status }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                        </table><br><br><br>
                        <input type="hidden" name="studentId" id="studentId">
                    </div>

                    <div class="modal-footer">
                        <input name="Save" type="submit" value="Save" id="savingbutton" class="btn btn-primary"
                            onclick="this.value='Saving...';">
                    </div>

                </form>

            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div>
    <!---end of the section ---->

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
          $('.studentInfo').on('click', function(e) {
              e.preventDefault();

              // Get the record ID from the data-id attribute
              var recordId = $(this).data('id');
            //   alert(recordId);
             
              // AJAX request to fetch the record data based on the ID
              $.ajax({
                  url: "processed-stu-record/"+recordId, // Replace with your actual URL
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
                            

                            //student info section 
                            $('#studentId').val(response.student.id);
                            $('#stu_name').append(response.student.name);
                            $('#stu_email').append(response.student.email);
                            $('#stu_mobile').append(response.student.phone);
                            $('#stu_city').append(response.student.city);
                            $('#stu_country').append(response.student.country);
                            $('#stu_passport').append(response.student.passport_no);

                            if (response.status !== null && response.status !== undefined && response.status !== '') {
                                $('#p_status').val(response.status);
                            }

                            if (response.emgs !== null && response.emgs !== undefined && response.emgs !== '') {
                                $('#emgs_status').val(response.emgs);
                            }

                            if (response.payment_status !== null && response.payment_status !== undefined && response.payment_status !== '') {
                                $('#payment_status').val(response.payment_status);
                            }

                            if( response.student.photo !== ''){

                            var imageUrl = "{{ asset('uploads') }}/" + response.student.photo;
                            $('#stu_photo').attr('src', imageUrl);
                            }
                   
                            // $('#name').val(response.name);
                            $('#myModal2').modal('show');

                        
                            // Populate the form fields or display the fetched data as needed
                            console.log('Fetched data:', response.payment_status);
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
    </script>


    </div>

</body>

</html>