<header class="main-header">
    <!-- Logo -->
    <a href="{{route('peg.index')}}" class="logo"><b>Reminder</b><i>.webapp</i></a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset(Auth::user()->picture) }}" class="user-image" alt="User Image"/>
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ asset(Auth::user()->picture) }}" class="img-circle" alt="User Image" />
                            <p>
                                {{ Auth::user()->name }} - Pegawai
                                <small>Member since {{ Auth::user()->created_at->diffForHumans() }}</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="{{url('auth/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                            <div class="pull-left">
                                <a href="{{route('profile.show', Auth::user()->id)}}" class="btn btn-default btn-flat">Edit Profile</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>