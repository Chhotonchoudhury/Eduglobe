<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Courses | Edudeve</title>
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

    <div class="wrapper" style="margin-top: 56px;padding-left: 0px">
        <div class="container-fluid">
            <div class="main-content">

                <div class="page-content">


                    <div class="row" style="padding-left:20px;padding-right:20px;">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Setup SMTP Settings</h4>

                                    <div class="col-md-12">
                                        <div class="table-responsive mb-0 fixed-solution"
                                            data-pattern="priority-columns">
                                            <div class="alert icon-custom-alert alert-outline-success alert-success-shadow"
                                                role="alert" id="mailsenddiv" style=" display:none;   ">
                                                <i class="mdi mdi-check-all alert-icon"></i>
                                                <div class="alert-text">
                                                    <strong>Changes Saved</strong>
                                                </div>
                                            </div>
                                            <table class="table mb-0">
                                                <form method="post" action="{{ route('mail.settings.update') }}">
                                                    @csrf
                                                    @method('patch')
                                                    <tbody>
                                                        <tr>
                                                            <td width="30%">Name</td>
                                                            <td><input type="text" class="form-control" id="fromName"
                                                                    value="{{ $mailSetting->mail_name }}" maxlength="30"
                                                                    name="mail_name" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%">Email</td>
                                                            <td><input type="text" class="form-control"
                                                                    id="emailAccount"
                                                                    value="{{ $mailSetting->mail_from }}"
                                                                    name="mail_from" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%">Username</td>
                                                            <td><input type="text" class="form-control"
                                                                    id="emailPassword"
                                                                    value="{{ $mailSetting->mail_username }}"
                                                                    name="mail_username" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%">Password</td>
                                                            <td><input type="password" class="form-control"
                                                                    id="emailPassword"
                                                                    value="{{ $mailSetting->mail_password }}"
                                                                    name="mail_password" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%">SMTP Server</td>
                                                            <td><input type="text" class="form-control" id="smtpServer"
                                                                    value="{{ $mailSetting->mail_host }}"
                                                                    name="mail_host" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%">Port</td>
                                                            <td><input type="text" class="form-control" id="emailPort"
                                                                    value="{{ $mailSetting->mail_port }}" maxlength="5"
                                                                    name="mail_port" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%">Security Type</td>
                                                            <td>
                                                                <select id="securityType" class="form-control"
                                                                    displayname="Security Type" autocomplete="off"
                                                                    name="mail_encryption" required>
                                                                    <option value="">None</option>
                                                                    <option value="tls" @if($mailSetting->
                                                                        mail_encryption == 'tls') selected @endif>
                                                                        TLS</option>
                                                                    <option value="ssl" @if($mailSetting->
                                                                        mail_encryption == 'ssl') selected
                                                                        @endif>SSL
                                                                    </option>
                                                                </select>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%">&nbsp;</td>
                                                            <td><button type="submit"
                                                                    class="btn btn-primary px-5 py-2">Save</button>

                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </form>
                                            </table>
                                        </div>



                                    </div>

                                </div>
                            </div>
                            <!--end col-->
                        </div>


                        <div class="col-lg-6">
                            <div class="card">
                                <h5 class="card-header bg-secondary text-white mt-0">Configure Email</h5>
                                <div class="card-body">


                                    <div style="text-align:center;">
                                        Connect your email inbox and transform the way you do sales.<br>

                                        <table border="0" align="center" cellpadding="0" cellspacing="0"
                                            style="font-size:12px; margin:4px 0px;">
                                            <tbody>
                                                <tr>
                                                    <td align="center" style="padding:0px 20px;"><img
                                                            src="{{asset('assets/assets/img/e1.png')}}" height="97"><br>
                                                        Access your customer emails with holistic CRM information</td>
                                                    <td align="center" style="padding:0px 20px;"><img
                                                            src="{{asset('assets/assets/img/e2.png')}}" height="97"><br>
                                                        Send and receive mails from inside CRM records</td>
                                                    <td align="center" style="padding:0px 20px;"><img
                                                            src="{{asset('assets/assets/img/e3.png')}}" height="97"><br>
                                                        Synchronize your email inbox</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <br>


                                        <div style="padding:10px; background-color:#F5F5F5; text-align:left;">
                                            <strong>Use the following settings:</strong>
                                            <div style="margin-top:10px; font-size:12px;">

                                                1) Mail.com SMTP server
                                                address:&nbsp;<strong>smtp.yourdomain.com</strong><br>
                                                2) Mail.com SMTP username:&nbsp;<strong>Your full yourdomain.com email
                                                    address</strong><br>
                                                3) Mail.com SMTP password:&nbsp;<strong>Your yourdomain.com
                                                    password</strong><br>
                                                4) Mail.com
                                                SMTP&nbsp;port:&nbsp;<strong>587</strong>&nbsp;(alternatives:&nbsp;<strong>465&nbsp;</strong>and&nbsp;<strong>25</strong>)<br>
                                                5) Mail.com SMTPTLS/SSL
                                                required:&nbsp;<strong>yes&nbsp;</strong>(<strong>no&nbsp;</strong>can
                                                be used as an alternative)

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>

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




    </div>

</body>

</html>