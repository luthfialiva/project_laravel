@extends('app')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Kategori Dokumen
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.all')}}"><i class="fa fa-book"></i> Kategori Dokumen</a></li>
                <li class="active">Edit Kategori</li>
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
                            <h3 class="box-title">Edit Kategori : {!! $kategori->name !!}</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::model($kategori, ['route' => ['kategori.update', $kategori->id_kategori], 'method' => 'PATCH']) !!}
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <span class="glyphicon glyphicon-book form-control-feedback"></span>
                                {!! Form::text('nama_kategori', null, ['class' => 'form-control']) !!}
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            {!!Form::button('Batal', ['class' => 'btn btn-danger pull-left', 'onclick=window.location.href' => route('kategori.index')])!!}
                            {!! Form::submit('Simpan', ['class' => 'btn btn-primary pull-right']) !!}
                        </div>
                        {!!Form::close()!!}
                    </div><!-- /.box -->
@endsection
