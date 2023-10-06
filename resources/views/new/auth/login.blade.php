<!DOCTYPE html>
<html lang="zxx">
 

<!-- Mirrored from tripcrm.in/educrm/crm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2023 18:55:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
 
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{ asset('new_assets/login2/assets/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('new_assets/login2/assets/fonts/font-awesome/css/font-awesome.min.css') }}"> 

    <!-- Favicon icon -->
    <link rel="icon" type="image/x-icon" href="{{ (!empty($cp->logo)) ? asset('uploads/'.$cp->logo):asset('assets/assets/img/favicon.ico')}}"/>

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('new_assets/login2/assets/css/style.css') }}"> 
	
	
 <style>
 .loginouter{ max-width:890px; margin:auto; margin-top:10%; background-color:#fff; box-shadow: 0px 2px 30px #ccc6; font-size:13px;}
 .loginouter .sectionpadding{padding:50px;}
 h1{font-size:26px; margin-bottom:5px; font-weight:500;}
 .sublinehead{font-size:14px; font-weight:600; margin-bottom:10px;}
 #loginForm{margin-top:20px;}
 .form-control{margin-bottom:20px; padding:10px 15px; font-size:14px;}
 .btn-primary{width: 100%; font-size: 14px; font-weight: 600; padding: 12px; margin-top: 10px;}
 
 @media only screen and (max-width: 600px) {
 .rightbox{display:none;}
 }
 </style>
</head>
<body>
  
 <img src="{{ asset('new_assets/images/loginbg.png')}}" style="position:fixed; left:0px; top:0px; width:100%; height:100%; z-index:-1;">
 
 <div class="loginouter">
 <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" width="60%">
	<div class="sectionpadding">
	<div style="margin-bottom:10px;"><img src="{{ asset('app_assets/img/logo1.png')}}" style="height:52px; margin-bottom:10px;"/></div>
	<h1>Sign in</h1>
	<div class="sublinehead">to access your account</div>
	
                   <form class="form-horizontal mt-3" method="POST" action="{{ route('login') }}">
                     @csrf

                          @if($errors)
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li style="color:red"><strong>{{ $error }}</strong></li>
                            @endforeach
                            </ul>
                          @endif

                            <div class="form-group clearfix">
                                <div class="form-box">
								 <input name="email"  value="{{ old('email') }}" type="email" id="emailAddress" class="form-control" placeholder="Email Address" aria-label="Email Address" required>
								  
                                    <i class="flaticon-mail-2"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <div class="form-box">
								<input  placeholder="Password"  name="password" type="password" class="form-control" id="userpass" autocomplete="off" placeholder="Password" aria-label="Password" required>
								 
                                    <i class="flaticon-password"></i>
                                </div>
                            </div>
                            <div class="checkbox form-group clearfix">
                                <div class="form-check float-start"> 
									<input id="remember-me" type="checkbox" name="remember" class="form-check-input" >
                                    <label class="form-check-label" for="rememberme">
                                        Remember me
                                    </label>
                                </div> 
                            </div>
                            <div class="form-group clearfix">
                                <button type="submit"  id="submitfrm" class="btn btn-primary btn-lg btn-theme">Login</button>
                            </div>
                    </form>
	
	</div>
	</td>
    <td style="border-left:2px solid #f1f1f1;" class="rightbox"><div class="sectionpadding" style="text-align:center; font-size:13px;"><img src="{{ asset('new_assets/images/crmlogin.png') }}" height="150">
	<div style="font-weight:600; font-size:16px;">System Features</div>
	<div style="margin-bottom:20px;">Lead Centralization, Sales Management & Automation, User Management, Marketing Communication & Automation, Payment Management and more...</div>
	<div style="font-size:11px; color:#666666;">by EduDeve</div>
	
	</div></td>
  </tr>
</table>

 </div>
 


  <script src="../../../code.jquery.com/jquery-1.12.4.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="jquery.md5.min.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" charset="utf-8">
    jQuery(document).ready(function($) {
      $('#submitfrm').click(function(){ 
	  $('#userpass').val($.MD5($('#userpass').val()));
	  $('#loginForm').submit();
      });
    });
  </script>

</body>
 

<!-- Mirrored from tripcrm.in/educrm/crm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2023 18:55:18 GMT -->
</html>