<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/about') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Vote Foot</b> </span>
    </a>

   
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
     
        <a href="#" style="text-align:center" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{ trans('adminlte_lang::message.togglenav') }}</span>
        </a>

       
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Apropos du Créateur</li>
                        <li>
                            <!-- inner menu: contains the messages -->
                            <ul class="menu">
                                <li>
                                    <!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <!-- User Image -->
                                            <img src="images/me.png" class="img-circle" alt="User Image" />
                                        </div>
                                        <!-- Message title and timestamp -->
                                        <h4>
                                            Peterson Yuhala
                                            <small><i class="fa fa-clock-o"></i> </small>
                                        </h4>
                                        <!-- The message -->
                                        <p> <a href="https://yuhala.github.io/"> Peterson Yuhala</a> </p>
                                    </a>
                                </li><!-- end message -->
                            </ul><!-- /.menu -->
                        </li>

                    </ul>
                </li><!-- /.messages-menu -->

          
                <!-- Tasks Menu -->
                <li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button -->

                    <ul class="dropdown-menu">
                        <li class="header">{{ trans('adminlte_lang::message.tasks') }}</li>
                        <li>
                            <!-- Inner menu: contains the tasks -->
                            <ul class="menu">
                                <li>
                                    <!-- Task item -->
                                    <a href="#">
                                        <!-- Task title and progress text -->
                                        <h3>
                                            {{ trans('adminlte_lang::message.tasks') }}
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <!-- The progress bar -->
                                        <div class="progress xs">
                                            <!-- Change the css width attribute to simulate progress -->
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% {{ trans('adminlte_lang::message.complete') }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li><!-- end task item -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">{{ trans('adminlte_lang::message.alltasks') }}</a>
                        </li>
                    </ul>
                </li>

                <!-- User Account Menu -->

                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>