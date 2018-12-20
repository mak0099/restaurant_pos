<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Royal Restaurant</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{asset('public/admin/img/favicon.ico')}}" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="{{asset('public/admin/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('public/admin/css/bootstrap-responsive.min.css')}}" />
        <link rel="stylesheet" href="{{asset('public/admin/css/datepicker.css')}}" />
        <link rel="stylesheet" href="{{asset('public/admin/css/uniform.css')}}" />
        <link rel="stylesheet" href="{{asset('public/admin/css/select2.css')}}" />
        <link rel="stylesheet" href="{{asset('public/admin/css/matrix-style.css')}}" />
        <link rel="stylesheet" href="{{asset('public/admin/css/matrix-media.css')}}" />
        <link rel="stylesheet" href="{{asset('public/admin/css/bootstrap-wysihtml5.css')}}" />
        <link href="{{asset('public/admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="{{asset('public/admin/css/jquery-ui.css')}}">



        <script src="{{asset('public/admin/js/jquery.min.js')}}"></script> 
        <script src="{{asset('public/admin/js/jquery.ui.custom.js')}}"></script> 
        <script src="{{asset('public/admin/js/bootstrap.min.js')}}"></script> 
        <script src="{{asset('public/admin/js/bootstrap-colorpicker.js')}}"></script> 
        <script src="{{asset('public/admin/js/bootstrap-datepicker.js')}}"></script> 
        <script src="{{asset('public/admin/js/masked.js')}}"></script> 
        <script src="{{asset('public/admin/js/jquery.uniform.js')}}"></script> 
        <script src="{{asset('public/admin/js/select2.min.js')}}"></script> 
        <script src="{{asset('public/admin/js/matrix.js')}}"></script> 
        <script src="{{asset('public/admin/js/matrix.form_common.js')}}"></script> 
        <script src="{{asset('public/admin/js/wysihtml5-0.3.0.js')}}"></script> 
        <script src="{{asset('public/admin/js/jquery.peity.min.js')}}"></script> 
        <script src="{{asset('public/admin/js/bootstrap-wysihtml5.js')}}"></script> 
        <script src="{{asset('public/admin/js/jquery.flot.min.js')}}"></script> 
        <script src="{{asset('public/admin/js/jquery.flot.pie.min.js')}}"></script> 
        <script src="{{asset('public/admin/js/matrix.charts.js')}}"></script> 
        <script src="{{asset('public/admin/js/jquery.flot.resize.min.js')}}"></script> 
        <script src="{{asset('public/admin/js/matrix.dashboard.js')}}"></script> 
        <script src="{{asset('public/admin/js/bootstrap-datepicker.js')}}"></script> 
    </head>
    <body>

        <!--Header-part-->
        <div id="header">
            <h1><a href="{{route('index')}}"></a></h1>
        </div>
        <!--close-Header-part--> 


        <!--top-Header-menu-->
        @include('admin.partials.admin_top_menu')
        <!--close-top-Header-menu-->
        <!--sidebar-menu-->
        @include('admin.partials.admin_sidebar')
        <!--sidebar-menu-->

        <!--main-container-part-->
        @yield('admin_main_content')

        <!--end-main-container-part-->

        <!--Footer-part-->

        <div class="row-fluid">
            <div id="footer" class="span12"> 
                <p>2017 &copy; Royal Restaurant.</p>
                <p>Developed by <a href="http://shadowhiteanimators.com">shadowhiteanimators.com</a> </p>
            </div>
        </div>

        <!--end-Footer-part-->


        <script>
$('.textarea_editor').wysihtml5();
        </script>
        <script type="text/javascript">
            // This function is called from the pop-up menus to transfer to
            // a different page. Ignore if the value returned is a null string:
            function goPage(newURL) {

                // if url is empty, skip the menu dividers and reset the menu selection to default
                if (newURL != "") {

                    // if url is "-", it is this page -- reset the menu:
                    if (newURL == "-") {
                        resetMenu();
                    }
                    // else, send page to designated URL            
                    else {
                        document.location.href = newURL;
                    }
                }
            }

            // resets the menu selection upon entry to this page:
            function resetMenu() {
                document.gomenu.selector.selectedIndex = 2;
            }

            $('.textarea_editor').wysihtml5();

        </script>
    </body>
</html>
