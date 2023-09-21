<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from xatoadmin-demo1.web.app/ltr/auth_confirm_email_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Sep 2022 05:05:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Xato Auth Confirm Email</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/assets/img/favicon.ico') }}"/>
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
    <link href="{{ asset('assets/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/assets/css/authentication/auth_2.css') }}" rel="stylesheet" type="text/css">
    <!-- Page Level Plugin/Style Ends -->
</head>
<body class="login-two">
    <!-- Loader Starts -->
    <!--  Loader Ends -->
    <!-- Main Body Starts -->
    <div class="container-fluid login-two-container">
        <div class="row main-login-two">
            <div class="col-md-12 p-0 ">
                <div class="login-bg">
                    <div class="center-two-start w-50">
                    <div class="alert alert-warning"> Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</div>
                    @if(Session::get('status') == 'verification-link-sent')
                        <div class="mt-2 text-center">
                            <i class="las la-envelope-open-text text-success-teal font-65"></i>
                        </div>
                        <h6 class="right-bar-heading px-3 mt-1 text-success-teal text-center font-25 text-uppercase">Success !</h6>
                        <p class="text-center text-muted mt-4 mb-3 font-14"> 
                            A email has been sent to Your email address.
                            Please check the email and click on the verification link to reset your password. 
                        </p>
                    @endif
                        <div class="d-flex justify-content-start">
                                    <form class="form-horizontal mt-6" method="POST" action="{{ route('verification.send') }}">
                                    @csrf
            
                                        <div class="form-group pb-2 text-center row mt-3">
                                            <div class="col-12">
                                                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Resend Verification Email</button>
                                            </div>
                                        </div>
                                    </form>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                    <!-- <div class="form-group pb-2 text-center row mt-3">
                                            <div class="col-12">
                                                <a href="{{ route('login') }}"><button class="btn btn-success w-100 waves-effect waves-light" type="button">Back to Login page</button></a>
                                            </div>
                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->


                                    <form class="form-horizontal mt-6" method="POST" action="{{ route('logout') }}">
                                    @csrf
            
                                        <div class="form-group pb-2 text-center row mt-3">
                                            <div class="col-12">
                                                <button class="btn btn-danger w-100 waves-effect waves-light" type="submit">Logout</button>
                                            </div>
                                        </div>
                                    </form>
            
                                    
                             </div>

                    </div>
                </div>
            </div>
        </div>  
    </div>
    <!-- Main Body Ends -->
    <!-- Page Level Plugin/Script Starts -->
    <script src="asset('assets/assets/js/loader.js')"></script>
    <script src="asset('assets/assets/js/libs/jquery-3.1.1.min.js')"></script>
    <script src="asset('assets/bootstrap/js/bootstrap.min.js')"></script>
    <script src="asset('assets/assets/js/authentication/auth_2.js')"></script>
    <!-- Page Level Plugin/Script Ends -->
</body>

<!-- Mirrored from xatoadmin-demo1.web.app/ltr/auth_confirm_email_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Sep 2022 05:05:37 GMT -->
</html>