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
                <li class="active">Table</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table User</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($i = 0; $i < count($users); $i++)
                            <tr>
                                <th>{{$i+1}}</th>
                                <td><img src="{{ asset($users[$i]->picture) }}" class="img-circle" alt="User Image" style="height:50px" /></td>
                                <td>{{$users[$i]->name}}</td>
                                <td>{{$users[$i]->username}}</td>
                                <td>
                                    {{--{{$users[$i]->role}}--}}
                                    @if($users[$i]->role == 1)
                                        Administrator
                                    @elseif($users[$i]->role == 2)
                                        Kepala Bagian
                                    @elseif($users[$i]->role == 3)
                                        Pegawai
                                    @endif
                                </td>
                                <td>{{$users[$i]->email}}</td>
                                <td>{{$users[$i]->created_at->diffForHumans()}}</td>
                                <td>
                                        <button onclick="window.location.href='{{route('admin.edit', ['id' => $users[$i]->id])}}'" class="btn btn-primary btn-sm">Edit</button>
                                            ||
                                        <button data-toggle="modal" data-target="#basicModal-{{ $users[$i]->id }}" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        @endfor
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
        </div>
            @foreach($users as $user)
                <div class="modal fade" id="basicModal-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Warning !!!</h4>
                            </div>
                            <div class="modal-body">
                                Are you sure to delete this {{ $user->name }} ???
                            </div>
                            <div class="modal-footer">
                                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                                {!!Form::open(['method' => 'DELETE', 'route' => ['admin.destroy', $user->id]])!!}
                                {!!Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
                                {!!Form::close()!!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <script type="text/javascript">
                $(function () {
                    $("#example1").dataTable();
                    $('#example2').dataTable({
                        "bPaginate": true,
                        "bLengthChange": false,
                        "bFilter": false,
                        "bSort": true,
                        "bInfo": true,
                        "bAutoWidth": false
                    });
                });
            </script>
     <button onclick="window.location.href='{{route('admin.create')}}'" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Tambah User</button>
@endsection