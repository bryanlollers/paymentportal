<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="{{url('/')}}"><i class="fa fa-flag"></i> <span>Tasks</span></a></li>
            <li><a href="{{url('/')}}"><i class="fa fa-sticky-note"></i> <span>Notes</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-users"></i> <span>User Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                <li><a href="{{ route('users.index') }}">Users</a></li>
                <li><a href="{{ route('roles.index') }}">Roles</a></li>
                <li><a href="{{ route('permissions.index') }}">Permissions</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
<!-- /.sidebar -->
</aside>
