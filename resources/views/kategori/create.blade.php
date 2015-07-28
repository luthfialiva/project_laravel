@extends('app')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Kategori
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
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Tambah Kategori Dokumen</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(['url' => 'kategori']) !!}
                        <div class="box-body">
                            <div class="form-group has-feedback {{$errors->has('nama_kategori') ? 'has-error' : ''}}">
                                <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                {!! Form::text('nama_kategori', null, ['class' => 'form-control', 'placeholder' => 'Nama Kategori']) !!}
                                {!!$errors->first('nama_kategori', '<span class="help-block">Nama Kategori field is required</span>')!!}
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            {!!Form::button('Batal', ['class' => 'btn btn-danger pull-left', 'onclick=window.location.href' => route('kategori.index')])!!}
                            {!! Form::submit('Tambah Kategori', ['class' => 'btn btn-primary pull-right']) !!}
                        </div>
                        {!!Form::close()!!}
                    </div><!-- /.box -->
@endsection