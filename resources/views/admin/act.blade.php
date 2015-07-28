@extends('app')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User Management
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.all')}}"><i class="fa fa-user-plus"></i> User Management</a></li>
                <li class="active">Activity Table</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table User Activity</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Activity</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                        </thead>
                        <tbody>
                          @include('includes.activity.table')                        
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Activity</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
        </div>
    <script type="text/javascript">
    $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>
@endsection