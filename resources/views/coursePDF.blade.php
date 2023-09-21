<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from xatoadmin-demo1.web.app/ltr/starter_kit_breadcrumbs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Sep 2022 05:07:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>course PDF page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/assets/img/favicon.ico') }}"/>
    <!-- <link href="{{ asset('assets/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/assets/js/loader.js') }}"></script> -->
    <!-- Common Styles Starts -->
    
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&amp;display=swap" rel="stylesheet"> -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/assets/css/structure.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/highlight/styles/monokai-sublime.css') }}" rel="stylesheet" type="text/css" />
    <!-- Common Styles Ends -->
    <!-- Common Icon Starts -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/assets/css/line-awesome.min.css') }}"> -->
    
    <link href="{{ asset('assets/assets/css/apps/invoice.css') }}" rel="stylesheet" type="text/css" />

    <style>
        img {max-width: 100%}

                .the_article {
                width: 100%;
                margin: 30px auto;
                }

                .img-right {
                width: 300px;
                float: right;
                margin: 0 15px 0;
                }

                .img-left {
                width: 300px;
                float: left;
                margin: 0 15px 0;
                }


        /**This stylsesh for use case of theere of hr */        
        hr.style-one {
                padding: 0;
                border: none;
                border-top: medium double #333;
                color: #333;
                text-align: center;
                }
                hr.style-one:after {
                content: "Course Information";
                display: inline-block;
                position: relative;
                top: -0.7em;
                font-size: 1.5em;
                padding: 0 0.25em;
                background: white;
                }

                hr.style-three {
                height: 30px;
                border-style: solid;
                border-color: black;
                border-width: 1px 0 0 0;
                border-radius: 20px;
                }
                hr.style-three:before {
                display: block;
                content: "";
                height: 30px;
                margin-top: -31px;
                border-style: solid;
                border-color: black;
                border-width: 0 0 1px 0;
                border-radius: 20px;
                }

        /**end hr section  */
    </style>

    <!-- Common Icon Ends -->
</head>
<body>

        


        <div class="container"><br>

            <div class="col-md-12">
                <div class="text-center">
                <img src="{{ asset('uploads/'.$data->university->photo.'') }}" class="rounded-circle avatar-xl img-thumbnail" />
                <h3 class="in-heading">{{ $data->university->name  }}</h3>
                <p class="text-muted font-12 mb-1"><i class="las la-map-marker font-15"></i>{{ $data->university->address  }}</p>
                </div>

            </div><hr class="style-three" >


            <div class="row">
                <div class="col-sm-12">
                 {!! $pdf->details !!}
                </div>
            </div>
                

               <hr class="style-three" >
                <div class="row">
                        <div class="col-sm-3">
                        <img src="{{ asset('uploads/'.$data->university->photo.'') }}" class="rounded-circle avatar-xl img-thumbnail" />
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6 text-secondary">
                        Company Information <br>
                        Details 
                        contacts
                        </div>
                </div>
                <hr class="style-three" > 


        </div>

        



            <!-- Main Body Ends -->
    <script src="{{ asset('assets/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/assets/js/app.js') }}"></script> -->
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('assets/assets/js/custom.js') }}"></script>
    <!-- Common Script Ends -->
    <!-- Page Level Plugin/Script Starts -->
    <script src="{{ asset('assets/assets/js/apps/invoice.js') }}"></script>
           
</body>

<!-- Mirrored from xatoadmin-demo1.web.app/ltr/starter_kit_breadcrumbs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Sep 2022 05:07:04 GMT -->
</html>