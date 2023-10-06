
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
      <title>Universities | Edudeve</title> 
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

    <div class="wrapper" style="margin-top: 56px;padding-left: 20px;">
      <div class="newboxheading">
        <div class="newhead">University
          <div class="newoptionmenu">


            <div> <button type="button" class="btn btn-secondary btn-lg waves-effect waves-light" onclick="loadpop2('Add Student Group',this,'400px')" data-toggle="modal" data-target="#myModal2" data-backdrop="static" popaction="action=addclientgroup">Add University</button>
            </div>

            
            <div>
              <form action="{{ route('uni.add') }}" method="get">
                 <input type="text"  name="search" class="form-control newsearchsec"
                  placeholder="Search by name, email, phone" value="" style="margin-top: 3px; width:250px;" require>
                 
              </form>
            </div>
            



          </div>
        </div>


      </div>
      <div class="container-fluid newpadding30" style="max-width: none;">
        <div class="main-content">

          <div class="page-content">

          <!---alert message --->
          @if(session('s_success'))
              <div class="alert alert-success bg-success text-white headersavealert" role="alert">
                  {{ session('s_success') }}
              </div>
          @endif
          <!---end message --->



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
                            <th width="1%">Number</th>
                            <th width="1%">Email</th>
                            <th >Address</th>
                          
                            <th width="1%">&nbsp;</th>
                            <th width="1%">&nbsp;</th>
                            <th width="1%">&nbsp;</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach ($unvs as $row)
                          <tr>
                            <td width="1%"> <input type="checkbox" name="assignall[]" class="checkBoxClass"
                                id="assignqury" value="100006" onclick="selectedfun();"
                                style="width: 16px; height: 16px;"></td>
                            <td width="1%"><a class="dropdown-item neweditpan" onclick="loadpop('Edit Course',this,'600px')" data-toggle="modal" data-target=".bs-example-modal-center" popaction="action=addcourse&amp;id=100001"><img src="{{ (!empty($row->logo)) ? asset('uploads/'.$row->logo.''):('https://bootdey.com/img/Content/avatar/avatar7.png') }}" width="35" height="35" style="border-radius: 25px;"></a></td>
                            <td><a href="display.html?ga=clients&id=100006&view=1"><strong>{{ $row->name  }}</strong></a>
                            </td>
                            <td width="13%">{{ $row->Unumber }}</td>
                            <td width="15%">{{$row->email}}</td>
                            <td >{{ $row->address  }}</td>
                          
                            <td width="1%"><a class="dropdown-item neweditpan"
                                href="display.html?ga=clients&id=100006&view=1" style="float:left;"><i class="fa fa-eye"
                                  aria-hidden="true"></i></a></td>
                            <td width="1%">
                              <a class="dropdown-item neweditpan uniedite" data-id="{{ $row->id }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </td>
                            <td width="1%">
                              <a class="dropdown-item neweditpan " href="javascript:void(0);" onclick="confirmDelete('{{ route('delete.uni', $row->id) }}');"><i class="fa fa-trash" aria-hidden="true" ></i></a>
                            </td>
                          </tr>
                        @endforeach  




                        </tbody>
                      </table>


                    </form>



                    <div class="mt-3 pageingouter">
                      <div
                        style="float: left; font-size: 13px; padding: 7px 11px; border: 1px solid #ededed; background-color: #fff; color: #000;">
                        Total Records: <strong>{{ count($unvs) }}</strong></div>
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
          <div class="modal-dialog" role="document" style="width: 500px; max-width: 500px;">
            <div class="modal-content">

                <div class="modal-header">
                  
                  <h4 class="modal-title" id="poptitle2">Save university record</h4>
                  
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">×</span>
                  </button>
                </div>

                <div class="modal-body" id="popcontent2">
                  <form id="uniForm"  method="POST" action="{{ route('store.uni') }}" enctype="multipart/form-data">	
                    @csrf
                      <div class="modal-body">			
                      <div class="row">

                      <div class="col-md-12"> 
                      <div class="form-group">
                      <label for="validationCustom02">University Name<span class="redmtext">*</span> </label>
                        <input value="{{old('name')}}" name="name" type="text" placeholder="Enter university name" class="form-control" id="name"  >
                        @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                      </div></div> 

                        
                      <div class="col-md-12"> 
                      <div class="form-group">
                      <label for="validationCustom02">Name in arabic</label>
                        <input type="text" value="{{old('arabic_name')}}" placeholder="أدخل اسم الجامعة" name="arabic_name" id="arabic_name" class="form-control" >
                      </div></div>

                      <div class="col-md-12"> 
                      <div class="form-group">
                      <label for="validationCustom02">Campus Name<span class="redmtext">*</span> </label>
                        <input value="{{old('campus')}}" name="campus" type="text" placeholder="Enter university campus name" class="form-control" id="campus"  >
                        @error('campus')<span class="text-danger">{{ $message }}</span>@enderror
                      </div></div> 

                      <div class="col-md-12"> 
                      <div class="form-group">
                      <label for="validationCustom02">University Number<span class="redmtext">*</span> </label>
                        <input type="text" name="u_number" value="{{old('u_number')}}" placeholder="Enter university number" class="form-control" id="unumber" >
                        @error('u_number')<span class="text-danger">{{ $message }}</span>@enderror
                      </div></div> 

                      <div class="col-md-12"> 
                      <div class="form-group">
                      <label for="validationCustom02">University Email<span class="redmtext">*</span> </label>
                        <input type="email" name="email" value="{{old('email')}}" placeholder="Enter university email" class="form-control"  id="uemail" >
                        @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                      </div></div> 


                      <div class="col-md-12"> 
                      <div class="form-group">
                      <label for="validationCustom02">Executive Number<span class="redmtext">*</span> </label>
                        <input   type="number" name="ex_number" value="{{old('ex_number')}}"  placeholder="Enter Executive number" class="form-control" id="ex_number" >
                        @error('ex_number')<span class="text-danger">{{ $message }}</span>@enderror
                      </div></div> 


                      <div class="col-md-12"> 
                      <div class="form-group">
                      <label for="validationCustom02">Executive Email<span class="redmtext">*</span> </label>
                        <input type="email" name="ex_email" value="{{old('ex_email')}}" placeholder="Enter Executive email" class="form-control"  id="ex_email" >
                        @error('ex_email')<span class="text-danger">{{ $message }}</span>@enderror
                      </div></div> 


                      <div class="col-md-12"> 
                      <div class="form-group">
                        <label for="validationCustom02">University Address<span class="redmtext">*</span> </label>
                        <textarea class="form-control" name="address" id="address">{{ old('address') }}</textarea>
                        @error('address')<span class="text-danger" style="margin-left: 31%;">{{ $message }}</span>@enderror
                      </div></div> 

                      <div class="col-md-12"> 
                        <div class="form-group">
                          <label for="validationCustom02">Description<span class="redmtext">*</span> </label>
                          <textarea class="form-control" name="remarks" id="remarks">{{ old('remarks') }}</textarea>
                          @error('remarks')<span class="text-danger" style="margin-left: 31%;">{{ $message }}</span>@enderror
                        </div>
                      </div>
                       
                       


                      <div class="col-md-12"> 
                      <div class="form-group">
                      <label for="validationCustom02">University Logo<span class="redmtext">*</span> </label>
                        <input type="file" id="logo"  name="logo"  class="form-control"   >
                        @error('logo')<span class="text-danger" style="margin-left: 31%;">{{ $message }}</span>@enderror
                      </div></div> 

                      <div class="col-md-12"> 
                      <div class="form-group">
                      <label for="validationCustom02">University Photo<span class="redmtext">*</span> </label>
                        <input type="file" id="photo" name="photo" class="form-control"  >
                        @error('photo')<span class="text-danger" style="margin-left: 31%;">{{ $message }}</span>@enderror
                      </div></div> 

                     
                      <div class="modal-footer"> 
                      <button type="button"  data-dismiss="modal" aria-label="Close" class="btn btn-secondary btn-lg waves-effect waves-light btn-primary-gray" >Cancel</button>
                      <input name="Save" type="submit" value="Save" id="savingbutton" class="btn btn-primary" onclick="this.value='Saving...'; " >
                      </div>

                      <input name="editId" type="hidden" id="editId" value="{{ old('editId', '') }}">

                      <!-- <input name="action" type="hidden" id="action" value="addclientgroup"> 
                      <input name="editId" type="hidden" id="" value=""> -->
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
      @if($errors->has('name') || $errors->has('email') || $errors->has('campus') || $errors->has('arabic_name') || $errors->has('ex_number')||$errors->has('ex_email')||$errors->has('u_number')
          || $errors->has('address')||$errors->has('remarks')||$errors->has('logo')||$errors->has('photo'))
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

      $('button[data-target="#myModal2"]').on('click', function() {
        // Get the form element by its ID
          var form = document.getElementById('uniForm');
          
          // Reset the form
          form.reset();
          $('.text-danger').html(''); 
      });

      $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });


      //ajax request for get the data 
      $(document).ready(function() {
          $('.uniedite').on('click', function(e) {
              e.preventDefault();

              // Get the record ID from the data-id attribute
              var recordId = $(this).data('id');

             
              // AJAX request to fetch the record data based on the ID
              $.ajax({
                  url: "uni-record/"+recordId, // Replace with your actual URL
                  type: 'GET',
                   // Use the appropriate HTTP method
                  dataType: 'json', // Expect JSON response
                  success: function(response) {
                      if (response.success) {
                        $('.text-danger').html(''); 
                        $('#name').val(response.data.name);
                        $('#arabic_name').val(response.data.ar_name);
                        $('#campus').val(response.data.campus_name);
                        $('#unumber').val(response.data.Unumber);
                        $('#uemail').val(response.data.email);
                        $('#ex_number').val(response.data.ex_number);
                        $('#ex_email').val(response.data.ex_email);
                        $('#address').val(response.data.address);
                        $('#remarks').val(response.data.remarks);
                        $('#editId').val(response.data.id);
                        // $('#name').val(response.name);
                        $('#myModal2').modal('show');

                        
                          // Populate the form fields or display the fetched data as needed
                          console.log('Fetched data:', response.data);
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

     
      function confirmDelete(deleteUrl) {
        if (confirm('Are you sure you want to delete this record?')) {
          window.location.href = deleteUrl; // Redirect to the delete route if confirmed
        }
      }

      
      
    </script>
    
  </body>
   
</html>