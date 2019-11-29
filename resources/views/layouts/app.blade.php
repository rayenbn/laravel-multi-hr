<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body class="no-skin">
    <!-- Main NavBar -->
    @include('partials.topbar')

    <div class="main-container" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.check('main-container', 'fixed')
            } catch (e) {}
        </script>
        <div id="sidebar" class="sidebar sidebar-fixed responsive">
            <!--orifinale togliere sidebar-fixed -->
            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'fixed')
                } catch (e) {}
            </script>
            <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                    Your IP 196.178.1.95
                </div>

                <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                    <span class="btn btn-success"></span>
                    <span class="btn btn-info"></span>
                    <span class="btn btn-warning"></span>
                    <span class="btn btn-danger"></span>
                </div>
            </div><!-- /.sidebar-shortcuts -->

            <!-- Sidebar -->
            @include('partials.sidebar')


            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
            </div>

            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'collapsed')
                } catch (e) {}
            </script>
        </div>
        <div class="main-content">
            <div class="main-content-inner">
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                        try {
                            ace.settings.check('breadcrumbs', 'fixed')
                        } catch (e) {}
                    </script>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class='fa fa-calendar'></i> Agosto 2019</a></li>
                        <li><a href="#">De Gennaro Andrea</a></li>
                        <li><a href='#' data-toggle='modal' data-target='#modal_azienda'><i class="fa fa-refresh"></i> cambia societ&aacute; attiva</a></li>
                        <li>
                            <span class='hidden-print green' id='btn_chart_main_change_v'><i class='fa fa-bar-chart'></i> Vedi grafici affiancati</span>
                            <span class='hidden-print green' id='btn_chart_main_change_o' style="display:none;"><i class='fa fa-bar-chart'></i> Vedi grafici elenco</span>
                        </li>
                    </ul><!-- /.breadcrumb -->
                </div>
                <section class="content">
                    @if(isset($siteTitle))
                        <h3 class="page-title">
                            {{ $siteTitle }}
                        </h3>
                    @endif

                    <div class="row">
                        <div class="col-md-12">

                            @if (Session::has('message'))
                                <div class="alert alert-info">
                                    <p>{{ Session::get('message') }}</p>
                                </div>
                            @endif
                            @if ($errors->count() > 0)
                                <div class="alert alert-danger">
                                    <ul class="list-unstyled">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @yield('content')

                        </div>
                    </div>
                </section>
                <!-- <div class="page-content"> -->
                    <!-- <div class="row"> -->
                        <!-- <div class="col-xs-12"> -->
                            <!-- PAGE CONTENT BEGINS -->
                            <!-- <div class="space-6"></div> -->
                                <!-- <div class="row"> -->
                                    <!-- @yield('content') -->
                                <!-- </div>/.col -->
                        <!-- </div>/.row -->
                    <!-- </div>/.page-content -->
                </div>
            </div><!-- /.main-content -->
            <div class="footer hidden-print hidden">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">digitafro.com</span>
                            Application &copy; 2019 </span>

                        &nbsp; &nbsp;
                        <span class="action-buttons">
                            <a target="_blank" href="">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

                            <a target="_blank" href="">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>

        </div>
        {!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
        <button type="submit">Logout</button>
        {!! Form::close() !!}

        @include('partials.javascripts')
</body>


</html>