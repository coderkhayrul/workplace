<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">WorkPlace</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->user_name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard </p>
                    </a>
                </li>

                <li class="nav-header">Management</li>

                <li
                    class="nav-item has-treeview {{ Route::is('admin.user.*') ? 'menu-open' : '' }} {{ Route::is('admin.role.*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ Route::is('admin.user.*') ? 'active' : '' }}  {{ Route::is('admin.role.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            User Manager
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.user.index') }}"
                                class="nav-link {{ Route::is('admin.user.*') ? 'active' : '' }}">
                                <i class="fas fa-user-cog"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.role.index') }}"
                                class="nav-link {{ Route::is('admin.role.*') ? 'active' : '' }}">
                                <i class="fas fa-user-shield"></i>
                                <p>Role</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item has-treeview {{ Route::is('buyer.service.create.*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ Route::is('buyer.service.create.*') ? 'active' : '' }}">
                        <i class="fas fa-shopping-cart"></i>
                        <p>
                            Services Manager
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{Route('buyer.service.index')}}"
                                class="nav-link{{Route::is('buyer.service.index.*')}} ? 'active' : '' }}">
                                <i class="fas fa-comment"></i>
                                <p>Service Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Short Link</li>
                {{-- Live Visit --}}
                <li class="nav-item">
                    <a target="_blank" href="{{ route('web.home') }}" class="nav-link">
                        <i class="nav-icon fas fa-globe text-primary"></i>
                        <p> Live Visit </p>
                    </a>
                </li>
                {{-- Logout --}}
                <li class="nav-item">
                    <a href="{{ route('admin.logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
                        <p> LOGOUT </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
