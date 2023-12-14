<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Expenses | Edudeve</title>
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

        ::-webkit-scrollbar {
            width: 10px;
        }
    </style>

    <div class="wrapper" style="margin-top: 56px;padding-left: 20px;">
        <div class="container-fluid ">
            <div class="main-content">

                <!---alert message --->
                @if(session('s_success'))
                <div class="alert alert-success bg-success text-white headersavealert" role="alert">
                    {{ session('s_success') }}
                </div>
                @endif
                <!---end message --->


                <div class="page-content">

                    <div class="newboxheading">
                        <div class="newhead">Expenses
                            <div class="newoptionmenu">

                                <div>
                                    <button type="button" class="btn btn-secondary btn-lg waves-effect waves-light"
                                        data-toggle="modal" data-target="#myModal2" data-backdrop="static"
                                        popaction="action=addcompanyexpense">Add Expense</button>
                                </div>

                            </div>
                        </div>


                    </div>

                    <!-- start page title -->


                    <div class="" style="">
                        <div class="col-md-12 col-xl-12" style="padding-top: 34px;">
                            <div class="card">
                                <div class="card-body" style="padding:0px;">

                                    <div
                                        style="  margin-bottom: 10px; float: left; width: 100%; border-top: 1px solid #dee2e6; border-bottom: 2px solid #dee2e6; background-color: #f3f3f3; padding: 8px;">

                                        <div class="row" style="margin-right: 0px; margin-left: 0px;">


                                            <div class="col-md-3 col-xl-3">
                                                <form action="" method="get" enctype="multipart/form-data">
                                                    <table border="0" cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text"
                                                                        class="form-control hasDatepicker"
                                                                        id="startDate" name="startDate" readonly=""
                                                                        placeholder="From" value="01-11-2023"
                                                                        style="width:130px;"></td>
                                                                <td style="padding-left:5px;"><input type="text"
                                                                        class="form-control hasDatepicker" id="endDate"
                                                                        name="endDate" readonly="" placeholder="From"
                                                                        value="30-11-2023" style="width:130px;"></td>
                                                                <td style="padding-left:5px;"><input type="text"
                                                                        name="keyword" class="form-control"
                                                                        placeholder="Keyword" value=""
                                                                        style=" width:250px;">
                                                                    <input name="page" type="hidden" value=""><input
                                                                        name="ga" type="hidden" value="company-expense">
                                                                </td>
                                                                <td style="padding-left:5px;"><select
                                                                        name="transectionType" class="form-control"
                                                                        style="width:180px;">
                                                                        <option value="">All Type</option>

                                                                        <option value="1">Advertising</option>

                                                                        <option value="2">Bank fees</option>

                                                                        <option value="17">Credit card bill</option>

                                                                        <option value="3">Dues and subscriptions
                                                                        </option>

                                                                        <option value="4">Insurance</option>

                                                                        <option value="6">Legal and professional
                                                                            expenses</option>

                                                                        <option value="16">Loans EMI</option>

                                                                        <option value="5">Maintenance and repairs
                                                                        </option>

                                                                        <option value="7">Office expenses</option>

                                                                        <option value="10">Postage and shipping</option>

                                                                        <option value="11">Printing</option>

                                                                        <option value="12">Rent</option>

                                                                        <option value="13">Salaries</option>

                                                                        <option value="15">Software</option>

                                                                        <option value="8">Telephone</option>

                                                                        <option value="14">Travel</option>

                                                                        <option value="9">Utilities</option>
                                                                    </select></td>
                                                                <td style="padding-left:5px;"><select name="status"
                                                                        class="form-control" style="width:150px;">
                                                                        <option value="">All Status</option>
                                                                        <option value="1">Paid</option>
                                                                        <option value="2">Pending</option>
                                                                    </select> </td>
                                                                <td style="padding-left:5px;"><button type="submit"
                                                                        class="btn btn-secondary btn-lg waves-effect waves-light"
                                                                        style="padding: 6px 10px;"><i
                                                                            class="fa fa-search" aria-hidden="true"></i>
                                                                        Search</button></td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>

                                    </div>

                                    <div style="margin:10px;">
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td width="33%" align="left" valign="top">
                                                        <div class="statusbox" style="background-color:#655be6;">
                                                            <div
                                                                style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                                                                ₹100
                                                            </div>Total Amount
                                                        </div>
                                                    </td>
                                                    <td width="33%" align="left" valign="top">
                                                        <div class="statusbox" style="background-color:#0cb5b5;">
                                                            <div
                                                                style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                                                                ₹0</div>
                                                            Paid
                                                        </div>
                                                    </td>

                                                    <td width="33%" align="left" valign="top">
                                                        <div class="statusbox"
                                                            style="background-color:#e45555; margin-right:0px;">
                                                            <div
                                                                style="margin-bottom: 0px; font-size: 30px; line-height: 38px;">
                                                                ₹100</div>Pending
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>






                                    <table class="table table-hover mb-0" style="border:1px solid #ddd;">

                                        <thead>
                                            <tr>
                                                <th width="10%">ID </th>
                                                <th width="15%">Type</th>
                                                <th width="10%">Amount</th>
                                                <th>Remark</th>
                                                <th width="15%">Payment Date</th>
                                                <th width="1%">Status</th>
                                                <th width="1%">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($expense as $row)

                                            <tr>
                                                <td width="10%" align="left" valign="middle">{{ $row->transaction_id }}
                                                </td>
                                                <td width="15%" align="left" valign="middle"><span
                                                        class="badge badge-dark">{{ $row->type }}</span></td>
                                                <td width="10%" align="left" valign="middle">{{ $row->amount }}</td>
                                                <td align="left" valign="middle">{{ $row->remarks }}</td>
                                                <td width="15%" align="left" valign="middle">{{ $row->payment_date }}
                                                </td>
                                                <td width="1%" align="left" valign="middle">
                                                    @if($row->status == 2 )
                                                    <span class="badge badge-danger">Pending</span>
                                                    @else
                                                    <span class="badge badge-success">paid</span>
                                                    @endif
                                                </td>
                                                <td width="1%" align="left" valign="top"><a
                                                        class="dropdown-item neweditpan expenseEdite"
                                                        data-id="{{ $row->id }}"><i class="fa fa-pencil"
                                                            aria-hidden="true"></i></a>
                                                </td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>




                                    <div class="mt-3 pageingouter">
                                        <div
                                            style="float: left; font-size: 13px; padding: 7px 11px; border: 1px solid #ededed; background-color: #fff; color: #000;">
                                            Total Records: <strong>1</strong></div>
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


    <!---model section ------>
    <div class="modelnew modal right fade " id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document" style="width: 500px; max-width: 500px;">
            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title" id="poptitle2">Save expense record</h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body" id="popcontent2">
                    <form id="uniForm" method="POST" action="{{ route('store.expense') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">


                            <div class="row">

                                <div class="col-md-12 paid" style="  ">
                                    <div class="form-group">
                                        <label for="validationCustom02">Payment Type*</label>
                                        <select name="paymentType" id="paymentType" class="form-control" required>

                                            <option value="">Select type</option>
                                            <option value="Advertising">Advertising</option>

                                            <option value="Bank fees">Bank fees</option>

                                            <option value="Credit card bill">Credit card bill</option>

                                            <option value="Dues and subscriptions">Dues and subscriptions</option>

                                            <option value="Insurance">Insurance</option>

                                            <option value="Legal and professional expenses">Legal and professional
                                                expenses</option>

                                            <option value="Loans EMI">Loans EMI</option>

                                            <option value="Maintenance and repairs">Maintenance and repairs</option>

                                            <option value="Office expenses">Office expenses</option>

                                            <option value="Postage and shipping">Postage and shipping</option>

                                            <option value="Printing">Printing</option>

                                            <option value="Rent">Rent</option>

                                            <option value="Salaries">Salaries</option>

                                            <option value="Software">Software</option>

                                            <option value="Telephone">Telephone</option>

                                            <option value="Travel">Travel</option>

                                            <option value="Utilities">Utilities</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="validationCustom02">Amount*</label>
                                        <input name="amount" type="number" class="form-control" id="amount" value=""
                                            required="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="validationCustom02">Date*</label>
                                        <input type="date" class="form-control hasDatepicker" required=""
                                            name="PaymentDate" id="expenseDate" value="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="validationCustom02">Status*</label>
                                        <select name="status" id="paymentStatus" class="form-control" required>
                                            <option value="">Status</option>
                                            <option value="1">Paid</option>
                                            <option value="2">Pending</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="validationCustom02">Remark</label>
                                        <textarea name="remark" id="remarks" rows="2" class="form-control"
                                            required></textarea>
                                    </div>
                                </div>





                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" aria-label="Close"
                                        class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray">Cancel</button>
                                    <input name="Save" type="submit" value="Save" id="savingbutton"
                                        class="btn btn-primary">
                                </div>



                                <!-- <input name="action" type="hidden" id="action" value="addclientgroup">--->
                                <input name="editId" type="hidden" id="editId" value="{{ old('editId') }}">
                    </form>
                </div>

            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div>
    <!---end of the model---->

    <!-- This is the update model -->

    <!---End of the  model --->


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

    <script>
        $(document).ready(function() {
        // Check if the success alert exists
        if($('.headersavealert').length){
                setTimeout(function() {
                    $('.headersavealert').slideUp(500, function() {
                        $(this).remove(); // Remove the alert from the DOM
                    });
                }, 3000); // Hide the alert after 3 seconds (adjust as needed)
            }
        });

        //form reset section 

        $('button[data-target="#myModal2"]').on('click', function() {
        // Get the form element by its ID
          var form = document.getElementById('uniForm');
          
          // Reset the form
          form.reset();
          $('.text-danger').html(''); 
          $('#poptitle2').html('Add new Expense record');
        });

        //end of this section 


        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });


        //ajax request for get the data 
        $(document).ready(function() {
          $('.expenseEdite').on('click', function(e) {
              e.preventDefault();

              // Get the record ID from the data-id attribute
              var recordId = $(this).data('id');
            //   alert(recordId);
             
              // AJAX request to fetch the record data based on the ID
              $.ajax({
                  url: "expense-record/"+recordId, // Replace with your actual URL
                  type: 'GET',
                   // Use the appropriate HTTP method
                  dataType: 'json', // Expect JSON response
                  success: function(response) {
                      if (response.success) {
                        $('.text-danger').html(''); 
                        $('#paymentType').val(response.data.type);
                        $('#amount').val(response.data.amount);
                        $('#paymentStatus').val(response.data.status);
                        $('#expenseDate').val(response.data.payment_date);
                        $('#remarks').val(response.data.remarks);
                        $('#name').val(response.name);
                        $('#myModal2').modal('show');
                        $('#editId').val(response.data.id);
                        $('#poptitle2').html('Update Expense record');
                        console.log(response.data);

          
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