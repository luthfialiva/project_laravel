@extends('app')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">

    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ App\Doc::paginate(15)->total()}}<sup style="font-size: 20px"> dokumen</sup></h3>
                    <p>Reminder</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-notifications"></i>
                </div>
                <a href="{{route('reminder.index')}}" class="small-box-footer">More info ... <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{ App\User::paginate(15)->total()}}<sup style="font-size: 20px"> member</sup></h3>
                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{route('admin.all')}}" class="small-box-footer">More info ... <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ App\Bidang::paginate(15)->total()}}<sup style="font-size: 20px"> bagian</sup></h3>
                    <p>Bidang Operasional</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-people"></i>
                </div>
                <a href="{{route('bidang.index')}}" class="small-box-footer">More info ... <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{ App\Kategori::paginate(15)->total()}}<sup style="font-size: 20px"> kelompok</sup></h3>
                    <p>Kategori Dokumen</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-document"></i>
                </div>
                <a href="{{route('kategori.index')}}" class="small-box-footer">More info ... <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
    </div><!-- /.row -->
    <!-- Main row -->
<div class="row">
    <div class="col-md-8">
        <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Recent Activities</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="table no-margin">
                    <thead>
                    <tr>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>Activity</th>
                        <th>Date</th>
                        <th>Time</th>                        
                    </tr>
                    </thead>
                    <tbody>
                        @include('includes.activity.list')                        
                    </tbody>
                </table>
            </div><!-- /.table-responsive -->
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">
            <a href="{{action('AdminController@act')}}" class="btn btn-sm btn-default btn-flat pull-right">View All Activities</a>
        </div><!-- /.box-footer -->
    </div><!-- /.box -->
    </div>

    <div class="col-md-4">
        <!-- Info Boxes Style 2 -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Chart</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="chart-responsive">
                            <canvas id="pieChart" height="150"></canvas>
                        </div><!-- ./chart-responsive -->
                    </div><!-- /.col -->
                    <div class="col-md-4">
                        <ul class="chart-legend clearfix">
                            <li><i class="fa fa-circle text-red"></i> Kategori Dokumen</li>
                            <li><i class="fa fa-circle text-green"></i> Bidang Operasional</li>
                            <li><i class="fa fa-circle text-yellow"></i> Member User</li>
                            <li><i class="fa fa-circle text-aqua"></i> Dokumen Kontrak</li>
                        </ul>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.box-body -->
            <div class="box-footer no-padding">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="{{route('reminder.index')}}">Dokumen Kontrak Kerja <span class="pull-right text-aqua"> {{ App\Doc::paginate(15)->total()}} Dokumen</span></a></li>
                    <li><a href="{{route('admin.all')}}">Member User <span class="pull-right text-yellow"> {{ App\User::paginate(15)->total()}} Orang</span></a></li>
                    <li><a href="{{route('bidang.index')}}">Bidang Operasional <span class="pull-right text-green"> {{ App\Bidang::paginate(15)->total()}} Bagian</span></a></li>
                    <li><a href="{{route('kategori.index')}}">Kategori Dokumen<span class="pull-right text-red"> {{ App\Kategori::paginate(15)->total()}} Kelompok</span></a></li>
                </ul>
            </div>
        </div><!-- /.box -->
    </div><!-- /.col -->
    <script type="text/javascript">
        'use strict';
        $(function () {
            //-------------
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var kategori = {{ App\Kategori::paginate(15)->total()}};
            var bidang = {{ App\Bidang::paginate(15)->total()}};
            var member = {{ App\User::paginate(15)->total()}};
            var doc = {{ App\Doc::paginate(15)->total()}};
            var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
            var pieChart = new Chart(pieChartCanvas);
            var PieData = [
                {
                    value: kategori,
                    color: "#f56954",
                    highlight: "#f56954",
                    label: "Kategori"
                },
                {
                    value: bidang,
                    color: "#00a65a",
                    highlight: "#00a65a",
                    label: "Bidang"
                },
                {
                    value: member,
                    color: "#f39c12",
                    highlight: "#f39c12",
                    label: "Member"
                },
                {
                    value: doc,
                    color: "#00c0ef",
                    highlight: "#00c0ef",
                    label: "Dokumen Kontrak"
                }
            ];
            var pieOptions = {
                //Boolean - Whether we should show a stroke on each segment
                segmentShowStroke: true,
                //String - The colour of each segment stroke
                segmentStrokeColor: "#fff",
                //Number - The width of each segment stroke
                segmentStrokeWidth: 1,
                //Number - The percentage of the chart that we cut out of the middle
                percentageInnerCutout: 50, // This is 0 for Pie charts
                //Number - Amount of animation steps
                animationSteps: 100,
                //String - Animation easing effect
                animationEasing: "easeOutBounce",
                //Boolean - Whether we animate the rotation of the Doughnut
                animateRotate: true,
                //Boolean - Whether we animate scaling the Doughnut from the centre
                animateScale: false,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true,
                // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: false,
                //String - A legend template
                legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
                //String - A tooltip template
                tooltipTemplate: "<%=value %> <%=label%>"
            };
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            pieChart.Doughnut(PieData, pieOptions);
            //-----------------
            //- END PIE CHART -
            //-----------------
            });
    </script>

</div>
@endsection