@extends('app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('peg.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="pad margin no-print">
            <div class="callout callout-info" style="margin-bottom: 0!important;">
                <h4><i class="fa fa-info"></i> Note:</h4>
                Selamat Datang {{ Auth::User()->name }}, sebagai Pegawai anda hanya bisa menambahkan data dokumen kontrak kerja baru !!!
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Lastest Document</h3>
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
                                    <th>Nama Dokumen</th>
                                    <th>Nomor Dokumen</th>
                                    <th>Status</th>
                                    <th>Validasi Berakhir</th>
                                    <th>Remarks</th>
                                </tr>
                                </thead>
                                @for($i=0; $i < count($docs); $i++)
                                    <tbody>
                                    <tr>
                                        <td><a href="">{{ $docs[$i]->nama_doc }}</a></td>
                                        <td>{{ $docs[$i]->id_doc }}</td>
                                        <td>
                                            @if($docs[$i]->ket == 1)
                                                <span class="label label-success">On Going</span>
                                            @else <span class="label label-danger">Expired</span>
                                            @endif
                                        </td>
                                        <td>{{ $docs[$i]->untill_date }}</td>
                                        <td><div class="sparkbar" data-color="#00a65a" data-height="20">{{ $docs[$i]->remarks }}</div></td>
                                    </tr>
                                    </tbody>
                                @endfor
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{ route('reminder.create') }}" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                        <a href="{{ route('reminder.index') }}" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
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
                </div><!-- /.box -->
                <!-- PRODUCT LIST -->
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