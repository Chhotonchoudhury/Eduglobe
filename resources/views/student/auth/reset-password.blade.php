<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from xatoadmin-demo1.web.app/ltr/auth_forget_password_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Sep 2022 05:05:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Student Password Reset</title>
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
                    <div class="center-two-start">
                        <h3 class="right-bar-heading px-3 mt-2 text-primary text-center font-25 text-uppercase">Create New Password</h3>

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

               

                    <form class="form-horizontal mt-3" method="POST" action="{{ route('student.password.update') }}">
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

                            @if(Session::get('status'))
                                <div class="alert alert-success">
                                    <ul>
                                    <li>{{ Session::get('status') }}</li>
                                    </ul>
                                </div>
                            @endif

                      <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div class="form-1">
                       
                           <div class="login-two-inputs mt-4">
                                <input  type="email" name="email" id="email" required="" placeholder="Email Address" value="{{ old('email', $request->email) }}"/>
                                <i class="las la-envelope"></i> 
                            </div>

                            <div class="login-two-inputs mt-4">
                                <input type="password"  id="password"  name="password" required="" placeholder="Password"/>
                                <i class="las la-lock"></i> 
                            </div>
                            <div class="login-two-inputs mt-3">
                                <input type="password" name="password_confirmation" id="password_confirmation" required="" placeholder="Password Confirmation"/>
                                <i class="las la-lock"></i> 
                            </div>
                            <div class="login-two-inputs text-center mt-4">
                                <button class="ripple-button ripple-button-primary btn-lg btn-login" type="submit">
                                    <div class="ripple-ripple js-ripple">
                                    <span class="ripple-ripple__circle"></span>
                                    </div>
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>

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
</body>

<!-- Mirrored from xatoadmin-demo1.web.app/ltr/auth_forget_password_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Sep 2022 05:05:37 GMT -->
</html>