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


    <!---main content section --->

    <!---alert message --->
    @if(session('s_success'))
    <div class="alert alert-success bg-success text-white headersavealert" role="alert">
        {{ session('s_success') }}
    </div>
    @endif
    <!---end message --->

    <div class="wrapper">
        <div class="container-fluid">
            <div class="main-content">

                <div class="page-content">



                    <!-- start page title -->


                    <div class=" ">
                        <div class="col-md-12 col-xl-12">
                            <div class="card" style="min-height:500px;">
                                <div class="card-body">

                                    <div class=" ">

                                        <form action="{{ route('mail.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class=" ">
                                                <div class="col-lg-12">


                                                    <div class="row">



                                                        <div class="col-lg-12">
                                                            <h4 class="card-title"
                                                                style=" margin-top:0px; overflow:hidden;">Add Email
                                                                Template<div class="float-right">
                                                                    <a href="{{ route('mail.list') }}"><button
                                                                            type="button"
                                                                            class="btn btn-primary btn-lg waves-effect waves-light"
                                                                            style="margin-bottom:10px;">Back</button></a>
                                                                </div>
                                                            </h4>
                                                            <div class="row"
                                                                style="padding: 5px; margin: 5px; border: 1px solid #ddd; padding-top: 12px; border-radius: 4px;">



                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="validationCustom02">Template
                                                                            Name</label>
                                                                        <input type="text"
                                                                            class="form-control redborder" id="name"
                                                                            name="name" value="" required>
                                                                    </div>
                                                                </div>


                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="validationCustom02">Email
                                                                            Subject</label>
                                                                        <input type="text"
                                                                            class="form-control redborder" id="subject"
                                                                            name="subject" value="" required>
                                                                    </div>
                                                                </div>



                                                                <div class="col-lg-12">

                                                                    <div class="form-group">
                                                                        <label for="validationCustom02">Email
                                                                            Body</label>



                                                                        <textarea name="details" class="form-control"
                                                                            id="details" rows="10" cols="80"
                                                                            required></textarea>



                                                                        <script type="text/javascript">
                                                                            CKEDITOR.replace('details');
                                                                        </script>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="form-group mb-0"
                                                                style="padding: 20px 20px;  border-top: 1px solid #e6e6e6; overflow:hidden; margin-top:20px;">



                                                                <button type="submit" id="savingbutton"
                                                                    class="btn btn-secondary"
                                                                    onclick="this.value='Saving...';"
                                                                    style="float:right;">
                                                                    Save Template
                                                                </button>
                                                                <input autocomplete="false" name="action" type="hidden"
                                                                    id="action" value="addemailtemplate">
                                                                <input autocomplete="false" name="editid" type="hidden"
                                                                    id="editid" value="">
                                                            </div>



                                                        </div>


                                                    </div>





                                                </div>



                                            </div>
                                        </form>
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
                    <tbody>
                        <tr>
                            <td colspan="2"><img src="images/remonder-bell_192.gif" style="width:70px;"></td>
                            <td width="90%" id="loadremindertask" style="padding-left:10px;">

                                <a href="display.html?ga=query&amp;view=1&amp;id=&amp;c=3" style="color:#333333;">
                                    <div style="font-size:10px; text-transform:uppercase; font-weight:600;">Reminder - 1
                                        Jan 1970 - 05:30 AM</div>
                                    <div
                                        style="  font-weight: 600; color: #c33030; font-size: 14px; margin-bottom:8px;">
                                    </div>
                                </a>

                                <button type="button" class="btn btn-secondary btn-lg waves-effect waves-light"
                                    style="background: linear-gradient(180deg, rgb(178 41 41) 0%, rgb(200 47 47) 46%, rgb(167 21 21) 100%);"
                                    onclick="loadpop('Alert',this,'600px')" data-toggle="modal"
                                    data-target=".bs-example-modal-center"
                                    popaction="action=confirmtask&amp;id=&amp;qid=">Confirm</button>

                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>








        <script>
            var intervalId = window.setInterval(function(){ 
         showcurrentworkinghours();
         
        }, 60000);
         
        showcurrentworkinghours();
        </script>


        <style>
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
        <!--- end fot the main contetn section --->

        <div style="height:50px;"></div>
        <iframe id="actoinfrm" name="actoinfrm" src="" style="display:none;"></iframe>
        @include('new_layouts.partials.footer')

        <!---this is the model section --->

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