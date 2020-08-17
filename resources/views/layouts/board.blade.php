<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Arconesia</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        @include('includes.style')
        
        @yield('css')

    </head>


    <body class="fixed-left">

        @include('includes.loader')

        <!-- Begin page -->
        <div id="wrapper">

            @include('includes.sidebar')

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    @include('includes.navbar')

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            @yield('content')

                        </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                @include('includes.footer')

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        @include('includes.script')

        @yield('js')

    </body>
</html>