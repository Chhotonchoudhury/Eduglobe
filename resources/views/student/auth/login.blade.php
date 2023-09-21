<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from xatoadmin-demo1.web.app/ltr/auth_login_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Sep 2022 05:05:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ $cp->name }}| Student Login</title>
    <link rel="icon" type="image/x-icon" href="{{ (!empty($cp->logo)) ? asset('uploads/'.$cp->logo):asset('assets/assets/img/favicon.ico')}}"/>
    <!-- Common Styles Starts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/assets/css/structure.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/highlight/styles/monokai-sublime.css') }}" rel="stylesheet" type="text/css" />
    <!-- Common Styles Ends -->
    <!-- Common Icon Starts -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/line-awesome.min.css') }}">
    <link href="{{ asset('assets/assets/css/basic-ui/custom_sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <!-- Common Icon Ends -->
    <!-- Page Level Plugin/Style Starts -->

    <link href="{{ asset('assets/assets/css/authentication/auth_2_student.css') }}" rel="stylesheet" type="text/css">
    <!-- Page Level Plugin/Style Ends -->
    <script src="{{ asset('assets/plugins/nanobar-master/nanobar.min.js') }}"></script>
    <style>
    .my-class .bar {
    background:	#6495ed;
    }
    </style>
</head>

<body class="login-two">
    <!-- Loader Starts -->
    <div class="nanobar my-class" id="my-id" style="position: fixed;">
    <div class="bar"></div>
    </div>
    <!--  Loader Ends -->
    <!-- Main Body Starts -->
    <div class="container-fluid login-two-container">
        <div class="row main-login-two">
            <div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block p-0">
                <div class="login-bg">
                    <div class="left-content-area">
                        <!--<img src="{{ asset('assets/assets/img/logo_white_transparent.png') }}" class="logo"/>-->
                        <div>
                            <h2 class="text-warning">A few clicks away from to access the app</h2>
                            <p class="text-primary">Start your journey in minutes. Save your time and money.</p>
                            <a class="btn mt-4 btn-dark" href="javascript:void(0)" type="button">Learn More</a>
                        </div>
                        <!--<div class="d-flex align-items-center mt-4">-->
                        <!--    <a class="font-13 text-white mr-3">Find us: </a>-->
                        <!--    <a class="font-13 text-white mr-3" href="javascript:void(0)">Facebook</a>-->
                        <!--    <a class="font-13 text-white mr-3" href="javascript:void(0)">Twitter</a>-->
                        <!--    <a class="font-13 text-white mr-3" href="javascript:void(0)">Linked In</a>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                <div class="login-two-start">
                    <h6 class="right-bar-heading px-3 mt-2 text-dark text-center font-30 text-uppercase">Login</h6>
                    <p class="text-center text-muted mt-1 mb-3 font-14">Please Log into your account</p>
                    <form class="form-horizontal mt-3" method="POST" action="{{ route('student_login') }}">
                    @csrf


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(Session::has('status'))
                    <div class="alert alert-success">
                            <ul>
                            <li>{{ Session::get('status') }}</li>
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

                    <div class="login-two-inputs mt-5">
                        <input type="email" required="" placeholder="Email Address"  name="email"  value="{{ old('email') }}">
                        <i class="las la-user-alt"></i> 
                    </div>
                    <div class="login-two-inputs mt-4">
                        <input type="password" required=""  placeholder="Password"  name="password"> 
                        <i class="las la-lock"></i>
                    </div>
                    <div class="login-two-inputs  mt-4 check">
                        <div class="box">
                            <input id="one" type="checkbox" name="remember">
                            <span class="check"></span>
                            <label for="one">Remember me</label>
                          </div>
                    </div>
                    <div class="login-two-inputs mt-5 text-center d-flex">
                        <button class="ripple-button ripple-button-primary w-100 btn-login ml-3 mr-3" type="submit">
                            <div class="ripple-ripple js-ripple">
                            <span class="ripple-ripple__circle"></span>
                            </div>
                            Login
                        </button>
                        <a class="btn btn-sm btn-outline-primary btn-login w-100 ml-3 mr-3" href="{{ route('student_registration_form') }}" type="button">
                            Signup
                        </a>
                    </div>
                  </form>

                    <div class="mt-4 text-center font-12 strong">
                        <a href="{{ route('student.password.request') }}" class="text-primary">Forgot your Password ?</a>
                    </div>
                    <div class="login-two-inputs mt-4">
                        <div class="find-us-container">
                            <p class="find-us text-center">Continue With</p>
                        </div>
                    </div>
                    <div class="login-two-inputs social-logins mt-4">
                        <div class="social-btn"><a href="javascript:void(0)" class="fb-btn"><i class="lab la-facebook-f"></i></a></div>
                        <div class="social-btn"><a href="javascript:void(0)" class="twitter-btn"><i class="lab la-twitter"></i>
                        </a></div>
                        <div class="social-btn"><a href="javascript:void(0)" class="google-btn"><i class="lab la-google-plus"></i>
                        </a></div>
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
    <script src="{{ asset('assets/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/basicui/sweet_alerts.js')}}"></script>
    <script>
        var options = {
            classname: 'my-class',
            id: 'my-id'
        };
        var nanobar = new Nanobar( options );
        nanobar.go( 30 );
        nanobar.go( 76 );
        nanobar.go(100);
    </script>
    <script>
        //this is the sweet alert notification
@if(session('info'))
     Swal.fire('Info', '{{ session('info') }}', 'info'); 
@elseif (session('s_success'))
        Swal.fire('Done', '{{ session('s_success') }}', 'success');
@elseif (session('warning'))
        Swal.fire('Danger', '{{ session('warning') }}', 'Danger');
 @endif

    </script>
    <!-- Page Level Plugin/Script Ends -->
</body>
</html>
