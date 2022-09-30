
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
@include('adminlte::layouts.partials.htmlheader')
@show



<head>
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        #wc_img img {
            width: 400;
        }

        input[type=checkbox] {
            /* Double-sized Checkboxes */
            -ms-transform: scale(2);
            /* IE */
            -moz-transform: scale(2);
            /* FF */
            -webkit-transform: scale(2);
            /* Safari and Chrome */
            -o-transform: scale(2);
            /* Opera */
            transform: scale(2);

            margin-left: 50px;
            margin-right: 5px;
            padding: 10px;
        }

        /* Might want to wrap a span around your checkbox text */
        .checkboxtext {
            /* Checkbox text */
            font-size: 110%;
            display: inline;
        }
    </style>

    <!-- Script to call Player controller when checkboxes are clicked -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/checkbox-handler.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->


<body class="skin-blue sidebar-collapse ">
    <div id="app" v-cloak>
        <div class="wrapper">

            @include('adminlte::layouts.partials.mainheader')

            @include('adminlte::layouts.partials.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">


                <!-- Main content -->
                <section class="content">
                    <!-- Your Page Content Here -->

                    @yield('page-title')
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->



            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                @include('adminlte::layouts.partials.contentheader')

                <!-- Main content -->
                <section class="content">
                    <!-- Your Page Content Here -->

                    @yield('goalie-content')
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                @include('adminlte::layouts.partials.contentheader')

                <!-- Main content -->
                <section class="content">
                    <!-- Your Page Content Here -->

                    @yield('defense-content')
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                @include('adminlte::layouts.partials.contentheader')

                <!-- Main content -->
                <section class="content">
                    <!-- Your Page Content Here -->

                    @yield('midfield-content')
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                @include('adminlte::layouts.partials.contentheader')

                <!-- Main content -->
                <section class="content">
                    <!-- Your Page Content Here -->

                    @yield('attack-content')
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->






            @include('adminlte::layouts.partials.controlsidebar')

            @include('adminlte::layouts.partials.footer')

        </div><!-- ./wrapper -->
    </div>
    @section('scripts')
    @include('adminlte::layouts.partials.scripts')
    @show

</body>

</html>