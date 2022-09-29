<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->


        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">

            <li >
                <a href="{{ url('/market') }}">
                    <i class="fa fa-shopping-cart"></i> <span>Market</span>
                </a>

            </li>
            <li>
                <a href="{{ url('/profile') }}">
                    <i class="fa fa-home"></i> <span>Profile</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/market') }}">
                    <i class="fa fa-table"></i> <span>Statistics</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow"></small>

            </span>
                </a>
            </li>


        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
