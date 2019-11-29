@inject('request', 'Illuminate\Http\Request')
            
<ul class="nav nav-list">
    <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
        <a href="{{ url('/') }}">
            <i class="menu-icon fa fa-tachometer green"></i>
            <span class="menu-text">@lang('quickadmin.qa_dashboard')</span>
        </a>
    </li>
    @can('user_management_access')
            <li class="treeview">
                <a href='#' class='dropdown-toggle'>
                    <i class='menu-icon fa fa-table orange'></i>
                    <span class='menu-text'> @lang('quickadmin.user-management.title') </span>
                    <b class='arrow fa fa-angle-down'></b>
                </a>
                <b class='arrow'></b>
                <ul class='submenu'>
                    @can('role_access')
                        <li>
                            <a href="{{ route('admin.roles.index') }}">
                                <i class="fa fa-briefcase"></i>
                                <span>@lang('quickadmin.roles.title')</span>
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span>@lang('quickadmin.users.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('team_access')
                    <li>
                        <a href="{{ route('admin.teams.index') }}">
                            <i class="fa fa-users"></i>
                            <span>@lang('quickadmin.teams.title')</span>
                        </a>
                    </li>@endcan
                        
                </ul>
            </li>
        @endcan
        @can('product_access')
            <li>
                <a href="{{ route('admin.products.index') }}">
                    <i class="menu-icon fa fa-file-text blue"></i>
                    <span>@lang('quickadmin.products.title')</span>
                </a>
            </li>
        @endcan
            
            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="menu-icon fa fa-key yellow"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="menu-icon fa fa-arrow-left red"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>

</ul>