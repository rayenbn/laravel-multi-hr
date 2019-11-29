<div id="navbar" class="navbar navbar-fixed-top">
    <!--originale navbar-default-->
    <script type="text/javascript">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {}
    </script>

    <div class="navbar-container" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">@lang('quickadmin.quickadmin_title')</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="logon.php" class="navbar-brand">
                <small>
                    <img src="{{ asset('theme/img/favicon/favicon-32x32.png')}}" class="img img-circle" style="width:24px; height:24px; background-color:#fff;" />
                    HR-ECO <span class='label label-warning arrowed arrowed-right'>soluzione migliore</span> <!-- Soc. attiva: ECO -->
                </small>
            </a>
        </div>
        @can('team_select')
            {!! Form::open(['method' => 'POST', 'url' => route('admin.team-select.select'), 'id' => 'navbar__select-team-form']) !!}
            {!! Form::hidden('redirect', 'back') !!}
            {!! Form::select('team_id', Auth::user()->teams->pluck('name', 'id'), session('team_id'), ['class' => 'select2', 'id' => 'navbar__select-team']) !!}
            {!! Form::close() !!}
        @endif
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="{{ asset('theme/img/favicon/favicon-32x32.png')}}" style=" background-color:#fff; width:24px; height:24px;" alt="" />
                        <span class="user-info">
                            <small>{{ Auth::user()->name }}</small>
                        </span>
                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="prf.php?spg=prf1" data-tooltip='tooltip' title='cambia la password'>
                                <i class="ace-icon fa fa-user-o green"></i>
                                Password
                            </a>
                        </li>
                        <li>
                            <a href="prf.php?spg=prf2" data-tooltip='tooltip' title='Centri di costo abilitati'>
                                <i class="ace-icon fa fa-creative-commons blue"></i>
                                Centri di costo
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>