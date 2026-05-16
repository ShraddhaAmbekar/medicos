<!DOCTYPE html>
<html lang="en" data-footer="true" class="semi-dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Medocosmindz | Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @include('backend.common.allcss');

</head>

<body class="">
    <!--wrapper-->
    <div class="wrapper">
        @include('backend.common.sidebar')
        @include('backend.common.breadcrumb')
        <div class="page-wrapper">
            <div class="card" style="background-color: #eee;">
                <div class="card-body py-4">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5" style="text-transform: uppercase;font-weight:bold;">
                           
                        </div>
                        <div class="col-md-5 text-end " id="addbuttonsection">
                        </div>

                    </div>
                </div>
            </div>
            <div class="page-content">
                @yield('content')
                </div>
            </div>

            <!--end wrapper-->

            @include('backend.common.footer')

            <script>
                $(document).ready(function() {
                    var htmltext = $('#addbuttondiv').html();
                    $('#addbuttonsection').html(htmltext);
                    $('#addbuttondiv').html('');
                });
            </script>
            <style>
                .dt-input {
                    margin-right: 10px;
                }
            </style>
    </body>

    </html>
