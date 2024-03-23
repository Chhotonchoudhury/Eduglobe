<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Email Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Responsive layout */
        @media only screen and (max-width: 600px) {
            .container {
                width: 100% !important;
            }
        }
    </style>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f2f3f8; margin: 0; padding: 0;">
    <table cellpadding="0" cellspacing="0" width="100%">
        <!-- Header -->
        <tr>
            <td style="padding: 20px 0; text-align: center;">
                <img src="{{ asset('assets/assets/img/NoProfile.png') }}" alt="Logo" width="150">
            </td>
        </tr>
        <!-- Body -->
        <tr>
            <td>
                <table class="container" cellpadding="0" cellspacing="0"
                    style="background-color: #ffffff; border-radius: 3px; box-shadow: 0 6px 18px 0 rgba(0,0,0,0.06); margin: 0 auto; max-width: 600px;"
                    width="100%">
                    <tr>
                        <td style="padding: 40px;">
                            <h1 style="color: #1e1e2d; font-size: 24px;">Email Subject</h1>
                            <hr style="border-top: 1px solid #cecece; margin-bottom: 26px;">
                            <p style="color: #455056; font-size: 16px; line-height: 24px; margin-bottom: 26px;">
                                Default email body content goes here.
                            </p>
                            <!---this is password reset button--->
                            <!--<table cellpadding="0" cellspacing="0" style="margin: 0 auto;">
                                <tr>
                                    <td style="border-radius: 26px; background-color: #000000; padding: 10px 20px;">
                                        <a href="#" style="color: #ffffff; text-decoration: none;">Reset Password</a>
                                    </td>
                                </tr>
                            </table>--->
                            <p style="color: #455056; font-size: 16px; line-height: 24px; margin-top: 26px;">
                                If you did not request a password reset, please ignore this email and contact us if you
                                have any concerns.
                            </p>

                            <!-- Attachments Section -->
                            <p style="color: #455056; font-size: 16px; line-height: 24px; margin-top: 26px;">
                                Attached Files:
                            </p>
                            <ul>
                                <li><a href="#" style="color: #455056; text-decoration: none;">Attachment1.pdf</a></li>
                                <li><a href="#" style="color: #455056; text-decoration: none;">Attachment2.docx</a></li>
                                <!-- Add more attachments as needed -->
                            </ul>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- Footer -->
        <tr>
            <td style="background-color: #f2f3f8; padding: 20px; text-align: center;">
                <p style="color: #455056; font-size: 14px; margin: 0;">
                    Contact us: Phone | Email | Address
                </p>
                <p style="color: #455056; font-size: 14px; margin: 0;">
                    &copy; 2023 Company Name. All rights reserved.
                </p>
            </td>
        </tr>
    </table>
</body>

</html>