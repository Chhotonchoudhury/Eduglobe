<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$data->name }} | {{ $subject }}</title>
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
                <img src="{{ (!empty($data->logo)) ? asset('uploads/'.$data->logo): asset('assets/assets/img/NoProfile.png')  }}" alt="Logo" width="100">
            </td>
        </tr>
        <!-- Body -->
        <tr>
            <td>
                <table class="container" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 3px; box-shadow: 0 6px 18px 0 rgba(0,0,0,0.06); margin: 0 auto; max-width: 600px;" width="100%">
                    <tr>
                        <td style="padding: 40px;">
                            <h3 style="color: #1e1e2d; font-size: 26px;">{{ $subject }}</h3>
                            <hr style="border-top: 1px solid #cecece; margin-bottom: 26px;">
                            <p style="color: #455056; font-size: 16px; line-height: 24px; margin-bottom: 25px;">
                            <!-- Ensure proper encoding -->
                            <!-- Decode HTML entities before displaying -->    
                            <p>{!! $message !!}</p>


                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- Footer -->
        <tr>
            <td style="background-color: #f2f3f8; padding: 20px; text-align: center;">
                <p style="color: #455056; font-size: 14px; margin: 0;">
                    Contact us: {{$data->phone }} | {{$data->email }} | {{$data->address }} 
                </p>
                <p style="color: #455056; font-size: 14px; margin: 0;">
                    &copy; 2023 {{$data->name }} . All rights reserved.
                </p>
            </td>
        </tr>
    </table>
</body>
</html>