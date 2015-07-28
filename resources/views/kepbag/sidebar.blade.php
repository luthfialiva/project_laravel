<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset(Auth::user()->picture) }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info" >
                <p>{{ Auth::User()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <br>
        <div align="center">
            <img src="{{ asset('/component/dist/img/sucofindo.jpg') }}" />
        </div>
        <br>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{route('kepbag.index')}}"><i class="fa fa-home"></i> Home </i></a>
                    </li>
                    <li>
                        <a href="{{route('reminder.index')}}"><i class="fa fa-bell"></i> Reminder <i class="fa fa-angle-left pull-right"></i><span class="label label-info pull-right">{{ App\Doc::paginate(15)->total()}}</span></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('reminder.index')}}"><i class="fa fa-table"></i> Table</a></li>
                            <li><a href="{{route('reminder.create')}}"><i class="fa fa-plus-circle"></i> Create</a></li>
                        </ul>
                    </li>
                    {{--<li>--}}
                        {{--<a href="{{route('admin.all')}}"><i class="fa fa-user-plus" ></i> User Management <i class="fa fa-angle-left pull-right"></i><span class="label label-warning pull-right">{{App\User::paginate(15)->total()}}</span></a>--}}
                        {{--<ul class="treeview-menu">--}}
                            {{--<li><a href="{{route('admin.all')}}"><i class="fa fa-table"></i> Table</a></li>--}}
                            {{--<li><a href="{{route('admin.create')}}"><i class="fa fa-plus-circle"></i> Create</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    <li>
                        <a href="{{route('bidang.index')}}"><i class="fa fa-users"></i> Bidang Operasional <i class="fa fa-angle-left pull-right"></i><span class="label label-success pull-right">{{ App\Bidang::paginate(15)->total()}}</span></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('bidang.index')}}"><i class="fa fa-table"></i> Table</a></li>
                            <li><a href="{{route('bidang.create')}}"><i class="fa fa-plus-circle"></i> Create</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('kategori.index')}}"><i class="fa fa-fax"></i> Kategori <i class="fa fa-angle-left pull-right"></i><span class="label label-danger pull-right">{{ App\Kategori::paginate(15)->total()}}</span></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('kategori.index')}}"><i class="fa fa-table"></i> Table</a></li>
                            <li><a href="{{route('kategori.create')}}"><i class="fa fa-plus-circle"></i> Create</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="header">EXTRAS</li>
            <li><a href="{{action('PagesController@about')}}"><i class="fa fa-graduation-cap"></i> About</a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>