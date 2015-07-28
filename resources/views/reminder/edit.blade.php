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
                <li class="active">Edit Reminder</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Edit Dokumen : {!! $doc->nama_doc !!}</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        {!!Form::model($doc, ['route' => ['reminder.update', $doc->id], 'method' => 'PATCH'])!!}
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                {!! Form::text('nama_doc', null, ['class' => 'form-control', 'placeholder' => 'Nama Dokumen']) !!}
                            </div>
                            <div class="form-group has-feedback">
                                <span class="glyphicon glyphicon-exclamation-sign form-control-feedback"></span>
                                {!! Form::text('id_doc', null, ['class' => 'form-control', 'placeholder' => 'Nomor Dokumen']) !!}
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                {!! Form::select('id_kategori', array('placeholder'=>'Silahkan Pilih Kategori')+App\Kategori::lists('nama_kategori','id_kategori'), null, array('id_kategori'=>'id_kategori', 'class' => 'form-control'))!!}
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                {!! Form::select('id_bidang', array('placeholder'=>'Silahkan Pilih Bidang Operasional')+App\Bidang::lists('nama_bidang','id_bidang'), null, array('id_bidang'=>'id_bidang', 'class' => 'form-control'))!!}
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i> Start</span>
                                {!! Form::input('date', 'start_date', null, ['class' => 'form-control', 'placeholder' => 'Start']) !!}
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i> Ending</span>
                                {!! Form::input('date', 'untill_date', null, ['class' => 'form-control', 'placeholder' => 'Ending']) !!}
                            </div>
                            <br>
                            <div class="form-group has-feedback">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                {!! Form::text('remarks', null, ['class' => 'form-control', 'placeholder' => 'Remarks']) !!}
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            {!!Form::button('Batal', ['class' => 'btn btn-danger pull-left', 'onclick=window.location.href' => route('reminder.index')])!!}
                            {!!Form::submit('Simpan', ['class' => 'btn btn-primary pull-right'])!!}
                        </div>
                        {!!Form::close()!!}
                    </div><!-- /.box -->
@endsection
