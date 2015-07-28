@extends('app')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Bidang
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('bidang.index')}}"><i class="fa fa-users"></i> bidang</a></li>
                <li class="active">Table</li>
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
                            <h3 class="box-title">Tambah Bidang Operasional</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(['url' => 'bidang']) !!}
                        <div class="box-body">
                            <div class="form-group has-feedback {{$errors->has('nama_bidang') ? 'has-error' : ''}}">
                                <span class="glyphicon glyphicon-bold form-control-feedback"></span>
                                {!! Form::text('nama_bidang', null, ['class' => 'form-control', 'placeholder' => 'Nama Bidang']) !!}
                                {!!$errors->first('nama_bidang', '<span class="help-block">Nama Bidang field is required</span>')!!}
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            {!!Form::button('Batal', ['class' => 'btn btn-danger pull-left', 'onclick=window.location.href' => route('bidang.index')])!!}
                            {!! Form::submit('Tambah Bidang', ['class' => 'btn btn-primary pull-right']) !!}
                        </div>
                        {!!Form::close()!!}
                    </div><!-- /.box -->
@endsection