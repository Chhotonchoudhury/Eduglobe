<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from xatoadmin-demo1.web.app/ltr/auth_forget_password_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Sep 2022 05:05:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Student Forget Password</title>
     <link rel="icon" type="image/x-icon" href="{{ (!empty($cp->logo)) ? asset('uploads/'.$cp->logo):asset('assets/assets/img/favicon.ico')}}"/>
    <!-- Common Styles Starts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/assets/css/structure.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/highlight/styles/monokai-sublime.css') }}" rel="stylesheet" type="text/css" />
    <!-- Common Styles Ends -->
    <!-- Common Icon Starts -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/line-awesome.min.css') }}">
    <!-- Common Icon Ends -->
    <!-- Page Level Plugin/Style Starts -->
    <!-- <link href="{{ asset('assets/assets/css/loader.css') }}" rel="stylesheet" type="text/css" /> -->
    <link href="{{ asset('assets/assets/css/authentication/auth_2.css') }}" rel="stylesheet" type="text/css">
    <!-- Page Level Plugin/Style Ends -->
    <style>
        .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('images/pageLoader.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
    </style>
</head>
<body class="login-two">
    <!-- Loader Starts -->
    <div class="" id="Page_loader"></div>
    <!--  Loader Ends -->
    <!-- Main Body Starts -->
    <div class="container-fluid login-two-container">
        <div class="row main-login-two">
            <div class="col-md-12 p-0 ">
                <div class="login-bg">
                    <div class="center-two-start">
                        <h6 class="right-bar-heading px-3 mt-2 text-dark text-center font-30 text-uppercase">Forget Password ?</h6>

                     

                    <form class="form-horizontal mt-3" method="POST" action="{{ route('student.password.email') }}">
                     @csrf

                       @if(Session::get('status'))
                        <div class="mt-2 text-center">
                            <i class="las la-envelope-open-text text-success-teal font-65"></i>
                        </div>
                        <h6 class="right-bar-heading px-3 mt-1 text-success-teal text-center font-25 text-uppercase">Success !</h6>
                        <p class="text-center text-muted mt-3 mb-3 font-14"> 
                            A email has been sent to Your email address.<br>
                            Please check the email and click on the verification<br> link to reset your password. 
                        </p>
                        @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (Session::has('error'))
                                <div class="alert alert-danger">
                                    <ul>
                                    <li>{{ Session::get('error') }}</li>
                                    </ul>
                                </div>
                            @endif

                        <div class="form-1">
                            @if(!Session::get('status'))
                            <p class="text-center text-muted mt-3 mb-3 font-14">Enter you email address below</p>
                            <div class="login-two-inputs mt-5">
                                <input type="text" name="email" placeholder="Email Address"/>
                                <i class="las la-envelope"></i> 
                            </div>
                            <div class="login-two-inputs mt-5 text-center d-flex">
                                <button class="ripple-button ripple-button-primary w-100 btn-login ml-3 mr-3" type="submit" id="getCodeButton">
                                    <div class="ripple-ripple js-ripple">
                                    <span class="ripple-ripple__circle"></span>
                                    </div>
                                    Get Validation Link
                                </button>
                            </div>
                            @endif
                        </div>
                    </form> 
                        <div class="form-2">
                            <p class="text-center text-danger  mt-3 mb-3 font-20">Wait a Moment Request is sending...</p>
                            <!-- <p class="text-center text-muted mt-3 mb-3 font-14">A verification code has been sent</p>
                            <form method="get" class="digit-group mt-5" data-group-name="digits" data-autosubmit="false" autocomplete="off">
                                <input type="text" id="digit-1" name="digit-1" data-next="digit-2" />
                                <input type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" />
                                <input type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" />
                                <span class="splitter">&ndash;</span>
                                <input type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" />
                                <input type="text" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4" />
                                <input type="text" id="digit-6" name="digit-6" data-previous="digit-5" />
                            </form>
                            <div class="login-two-inputs mt-4">
                                <input type="password" placeholder="New Password" required/>
                                <i class="las la-lock"></i> 
                            </div>
                            <div class="login-two-inputs mt-3">
                                <input type="password" placeholder="Confirm Password" required/>
                                <i class="las la-lock"></i> 
                            </div>
                            <div class="login-two-inputs text-center mt-4">
                                <button class="ripple-button ripple-button-primary btn-lg btn-login" type="button">
                                    <div class="ripple-ripple js-ripple">
                                    <span class="ripple-ripple__circle"></span>
                                    </div>
                                    Change Password
                                </button>
                            </div>
                            <div class="login-two-inputs mt-3 text-center font-12 strong">
                                <a href="javascript:void(0)" class="text-primary" id="changeEmailAddress">Change your email address</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <!-- Main Body Ends -->
    <!-- Page Level Plugin/Script Starts -->
    <script src="{{ asset('assets/assets/js/loader.js') }}"></script>
    <script src="{{ asset('assets/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/authentication/auth_2.js') }}"></script>
    <!-- Page Level Plugin/Script Ends -->
    <script>
    $('#getCodeButton').click(function(){
        $('#Page_loader').addClass('loader');
    });
   </scritp>
</body>

<!-- Mirrored from xatoadmin-demo1.web.app/ltr/auth_forget_password_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Sep 2022 05:05:37 GMT -->
</html>