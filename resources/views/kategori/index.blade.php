@extends('app')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Kategori Dokumen
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('kategori.index')}}"><i class="fa fa-book"></i> Kategori</a></li>
                <li class="active">Table</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Tabel Kategori Dokumen</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @for($i=0; $i < count($kategoris); $i++)
                                    <tr>
                                        <th>{{$i+1}}</th>
                                        <td>{{$kategoris[$i]->nama_kategori}}</td>
                                        <td>
                                            <button onclick="window.location.href='{{route('kategori.edit', ['id_kategori' => $kategoris[$i]->id_kategori])}}'" class="btn btn-primary btn-sm">Edit</button>
                                            ||
                                            <button data-toggle="modal" data-target="#basicModal-{{ $kategoris[$i]->id_kategori }}" class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                @endfor
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>
            @foreach($kategoris as $kategori)
            <div class="modal fade" id="basicModal-{{ $kategori->id_kategori }}" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Warning !!!</h4>
                        </div>
                        <div class="modal-body">
                            Are you sure to delete this {{ $kategori->nama_kategori }} ???
                        </div>
                        <div class="modal-footer">
                            {!!Form::open(['method' => 'DELETE', 'route' => ['kategori.destroy', $kategori->id_kategori]])!!}
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
            <button onclick="window.location.href='{{route('kategori.create')}}'" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Kategori Dokumen</button>
@endsection