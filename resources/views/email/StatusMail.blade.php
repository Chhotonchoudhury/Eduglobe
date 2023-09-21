<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Welcome to Edudeve</title>
      
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
      <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('assets/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="{{ asset('assets/assets/css/line-awesome.min.css') }}">

      <style type="text/css">
         /* Force Hotmail to display emails at full width */
         .ExternalClass {
         width:100%;
         }
         /* Force Hotmail to display normal line spacing.  More on that: http://www.emailonacid.com/forum/viewthread/43/ */
         .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
         line-height: 100%;
         }
         /* Take care of image borders and formatting */
         img { 
         max-width: 600px; 
         outline: none; 
         text-decoration: none; 
         -ms-interpolation-mode: bicubic;
         margin:0;
         padding:0;
         display: block;
         }
         a img { border: none; }
         table { border-collapse: collapse !important; }
         #outlook a { padding:0; }
         .ReadMsgBody { width: 100%; }
         .ExternalClass {width:100%;}
         .backgroundTable {margin:0 auto; padding:0; width:100% !important;}
         table td {border-collapse: collapse;}
         .ExternalClass * {line-height: 115%;}
         /* General styling */
         td {
         font-family: Arial, sans-serif;
         }
         body {
         -webkit-font-smoothing:antialiased;
         -webkit-text-size-adjust:none;
         width: 100%;
         height: 100%;
         color: #6b7d90;2
         font-weight: 400;
         font-size: 18px;
         }
         h1 {
         margin: 10px 0;
         }
         a {
         color: #4baad4;
         text-decoration: underline;
         }
         .desktop-hide {
         display: none;
         }
         .hero-bg {
         background: -webkit-linear-gradient(90deg, #2991bf 0%,#7ecaec 100%);
         background-color: #4baad4;
         }
         .force-full-width {
         width: 100% !important;
         }
         .body-padding {
         padding: 0 75px;
         }
         .force-width-80 {
         width: 80% !important;
         }
      </style>
      <style type="text/css" media="screen">
         @media screen {
         /* Thanks Outlook 2013! http://goo.gl/XLxpyl */
         * {
         font-family:'Arial', 'sans-serif' !important;
         }
         .w280 {
         width: 280px !important;
         }
         }
      </style>
      <style type="text/css" media="only screen and (max-width: 480px)">
         /* Mobile styles */
         @media only screen and (max-width: 480px) {
         table[class*="w320"] {
         width: 320px !important;
         }
         td[class*="w320"] {
         width: 280px !important;
         padding-left: 20px !important;
         padding-right: 20px !important;
         }
         img[class*="w320"] {
         height: 40px !important;
         }
         td[class*="mobile-spacing"] {
         padding-top: 10px !important;
         padding-bottom: 10px !important;
         }
         *[class*="mobile-hide"] {
         display: none !important;
         }
         .desktop-hide {
         display: block!important;
         }
         *[class*="mobile-br"] {
         font-size: 12px !important;
         }
         td[class*="mobile-w20"] {
         width: 20px !important;
         }
         img[class*="mobile-w20"] {
         width: 20px !important;
         }
         td[class*="mobile-center"] {
         text-align: center !important;
         }
         table[class*="w100p"] {
         width: 100% !important;
         }
         td[class*="activate-now"] {
         padding-right: 0 !important;
         padding-top: 20px !important;
         }
         td[class*="mobile-resize"] {
         font-size: 22px !important;
         padding-left: 15px !important;
         }
         td[class*="mobile-hide"] {
         display:none;
         }
         }
      </style>
   </head>
   <body offset="0" class="body externalClass" style="padding:0; margin:0; display:block; background:#e8ecf0; -webkit-text-size-adjust:none;" bgcolor="#e8ecf0">
                        <table align="center" cellpadding="0" cellspacing="0" width="100%" height="100%">
                           <tr>
                              <td align="center" valign="top" style="background-color:#eeebeb" width="100%">
                                 <center>
                                    <table cellspacing="0" cellpadding="0" width="600" class="w320">
                                       <tr>
                                          <td align="center" valign="top">
                                          <table style="margin:0 auto;" cellspacing="0" cellpadding="0" width="100%" >
                                                <tr>
                                                   <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
                                                </tr>
                                                <tr style="padding:1px;">
                                                   <td style="text-align: left;">
                                                      <img class="w320" height="40" src="{{ (!empty($data['logo'])) ? asset('uploads/'.$data['logo']): asset('assets/assets/img/NoProfile.png')  }}" alt="{{ $data['name'] }}" >
                                                   </td>
                                                   <td align="right" style="color: #4baad4; font-size: 18px;" class="mobile-hide">
                                                      <div>
                                                         <a href="https://edudeve.com" target="_blank" style="color: #4baad4; text-decoration: none;">Go to site</a>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
                                                </tr>
                                             </table>
                                          </td>
                                       </tr>
                                    </table>
                                 </center>
                              </td>
                           </tr>
                        </table>


                        <table cellspacing="0" cellpadding="0" width="100%">
                           <tr>
                              <td class="hero-bg">
                                 <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#4baad4">
                                    <tr>
                                       <td height="15" style="font-size: 15px; line-height: 15px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                       <td style="font-size:40px; font-weight: 400; color: #ffffff; text-align:center;">
                                          Congratulation 🎉
                                          <br>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td height="15" style="font-size: 15px; line-height: 15px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                       <td style="font-size:24px; text-align:center; padding: 0 75px; color:#ffffff;">
                                          Your status updated successfully 
                                       </td>
                                    </tr>
                                    <tr>
                                       <td height="15" style="font-size: 15px; line-height: 15px;">&nbsp;</td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>

                           <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff" >
                              <tr>
                                 <td style="background-color:#ffffff;">
                                    <br>
                                    <center>
                                       <table style="margin: 0 auto;" cellspacing="0" cellpadding="0" width="100%">
                                        <tr style="margin: 0 auto;">
                                             <td align="left" valign="top" style="font-size: 20px; font-weight: bold; line-height: 24px;">
                                                <img src="{{ asset('assets/assets/img/update1.jpg') }}" width="106px" height="106px" alt="">
                                             </td>
                                             <td width="40">&nbsp;</td>
                                             <td align="left" style="font-size: 15px; line-height: 24px;">
                                                <div style="line-height: 24px;">
                                                   <span style="font-weight: bold;">Status updated:</span><br>  Your previous status was updated successfully.
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                            <td height="35" style="font-size: 20px; line-height: 24px;">&nbsp;</td>
                                          </tr>
                                
                                          <tr style="margin: 0 auto;">
                                             <td align="left" valign="top" style="font-size: 20px; font-weight: bold; line-height: 24px;">
                                                <img src="{{ asset('assets/assets/img/studentcheck.png') }}" width="106px" height="106px" alt="">
                                             </td>
                                             <td width="40">&nbsp;</td>
                                             <td align="left" style="font-size: 15px; line-height: 24px;">
                                                <div style="line-height: 24px;">
                                                   <span style="font-weight: bold;">Checking:</span><br>  Log in to your account to check your progress and current status!
                                                </div>
                                             </td>
                                          </tr>

                                      

                                    

                                     



                                       </table>
                                    </center>

                                    <table style="margin: 0 auto;" cellspacing="0" cellpadding="10" width="100%">
                                          <tr>
                                             <td style="text-align: center; margin: 0 auto;">
                                                <br>
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                                                <tr>
                                                   <td>
                                                      <div>
                                                      <!--[if mso]>
                                                      <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://www.appcues.com" style="v-text-align:center;height:36px;v-text-anchor:middle;width:150px;" strokecolor="#80c97a" fillcolor="#80c97a">
                                                         <w:anchorlock/>
                                                         <center style="color:#ffffff;font-family:Arial,sans-serif;font-size:18px;">Get started &rarr;</center>
                                                      </v:roundrect>
                                                      <![endif]-->
                                                      <a href="{{ route('student_dashboard') }}" target="_blank" style="background-color: black; border: 1px solid #80c97a; color: #ffffff; display: inline-block; font-family: Arial, sans-serif; font-size: 18px; line-height: 44px; text-align: center; text-decoration: none; width: 150px; -webkit-text-size-adjust:none; mso-hide:all;">Get started &rarr;</a>
                                                      </div>
                                                   </td>
                                                </tr>
                                                </table>
                                                <br>
                                             </td>
                                          </tr>
                                    </table>

                  

                                    <table cellspacing="0" cellpadding="0" width="100%">
                                             <tr>
                                                <td class="hero-bg">
                                                   <table cellspacing="0" cellpadding="0" width="100%" bgcolor="4baad4">
                                                   <tr>
                                                      <td height="20" style="font-size: 15px; line-height: 15px;">&nbsp;</td>
                                                   </tr>
                                                   <tr>
                                                      <td style="font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; line-height: 22px; color: #ffffff;" valign="top" align="center">
                                                         <strong>Contact Information:</strong><br><br>

                                                         Phone: <a href="#" target="_blank" style="color:#ffffff; text-decoration:underline; font-weight: bold;">{{ $data['phone'] }}</a>&nbsp;&nbsp;
                                                         Email: <a href="#" target="_blank" style="color:#ffffff; text-decoration:underline; font-weight: bold;">{{ $data['email'] }}</a><br>
                                                         Address: {{ $data['address']}}<br><br>
                                                         © 2023 {{ $data['name'] }}. All Rights Reserved.
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td height="20" style="font-size: 15px; line-height: 15px;">&nbsp;</td>
                                                   </tr>
                                                   </table>
                                                </td>
                                             </tr>
                                    </table>




                                 <!-- <table cellspacing="0" cellpadding="0" width="100%"  bgcolor="4baad4">
                                       
                                 </table> -->
                                            
                                    <!-- <table cellspacing="0" cellpadding="0" bgcolor="#e8ecf0"  class="force-full-width">
                                       <tr>
                                          <td style="background-color:#e8ecf0; text-align:center;">
                                             <br>
                                             <br>
                                             <a href="https://plus.google.com/+Appcues"><img width="30" src="https://s3.amazonaws.com/appcues-email-assets/images/google-icon.png" alt=""></a>
                                             <a href="https://www.facebook.com/appcues"><img width="30" src="https://s3.amazonaws.com/appcues-email-assets/images/facebook-icon.png" alt=""></a>
                                             <a href="https://twitter.com/appcues"><img width="30" src="https://s3.amazonaws.com/appcues-email-assets/images/twitter-icon.png" alt=""></a>
                                             <br>
                                             <br>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td style="color:#27aa90; font-size: 14px; text-align:center;">
                                             <a href="{% unsubscribe_url %}" class="untracked">Unsubscribe</a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td style="font-size:12px;">&nbsp;</td>
                                       </tr>
                                    </table> -->
                                 </td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                  </table>
               </center>
            </td>
         </tr>
      </table>
   </body>
</html>