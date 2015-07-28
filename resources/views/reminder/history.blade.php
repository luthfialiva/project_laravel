@extends('app')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Reminder
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('reminder.index')}}"><i class="fa fa-bell"></i> Reminder</a></li>
                <li class="active">History Table</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">History Data Table Reminder</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <td rowspan="2"><div align="left"><strong>No</strong></div></td>
                                    <td rowspan="2"><div align="left"><strong>Nama Dokumen</strong></div></td>
                                    <td rowspan="2"><div align="left"><strong>Nomor Dokumen</strong></div></td>
                                    <td rowspan="2"><div align="left"><strong>Kategori</strong></div></td>
                                    <td rowspan="2"><div align="left"><strong>Bidang Operasi</strong></div></td>
                                    <td colspan="2"><div align="center"><strong>Validasi</strong></div></td>
                                    <td rowspan="2"><div align="left"><strong>Remarks</strong></div></td>
                                    <td rowspan="2"><div align="left"><strong>Status</strong></div></td>
                                    <td rowspan="2"><div align="left"><strong>Action</strong></div></td>
                                </tr>
                                <tr>
                                    <td><div align="center"><strong>Mulai</strong></div></td>
                                    <td><div align="center"><strong>Selesai</strong></div></td>
                                </tr>
                                </thead>
                                <tbody>
                                @for($i = 0; $i < count($docs); $i++)
                                        <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{ $docs[$i]->nama_doc }}</td>
                                        <td>{{ $docs[$i]->id_doc }}</td>
                                        <td>{{ App\Kategori::find($docs[$i]->id_kategori)->nama_kategori }}</td>
                                        <td>{{ App\Bidang::find($docs[$i]->id_bidang)->nama_bidang }}</td>
                                        <td>{{ $docs[$i]->start_date }}</td>
                                        <td>{{ $docs[$i]->untill_date }}</td>
                                        <td>{{ $docs[$i]->remarks }}</td>
                                        <td>
                                                @if($docs[$i]->ket == 1)
                                                    <span class="label label-success">Berjalan</span>
                                                @else <span class="label label-danger">Expired</span>
                                                @endif
                                        </td>
                                        <td>
                                            <button onclick="window.location.href='{{route('reminder.show', ['id' => $docs[$i]->id])}}'" class="btn btn-info btn-sm">Detail</button>
                                            ||
                                            <button data-toggle="modal" data-target="#basicModal-{{ $docs[$i]->id }}" class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                @endfor
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Dokumen</th>
                                    <th>Nomor Dokumen</th>
                                    <th>Kategori</th>
                                    <th>Bidang Operasi</th>
                                    <th><div align="center">Mulai</div></th>
                                    <th><div align="center">Selesai</div></th>
                                    <th>Remarks</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>
            @foreach($docs as $doc)
                <div class="modal fade" id="basicModal-{{ $doc->id }}" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Warning !!!</h4>
                            </div>
                            <div class="modal-body">
                                Are you sure to delete this {{ $doc->nama_doc }} ???
                            </div>
                            <div class="modal-footer">
                                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                                {!!Form::open(['method' => 'DELETE', 'route' => ['reminder.destroy', $doc->id]])!!}
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
@endsection
