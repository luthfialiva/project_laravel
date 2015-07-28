@extends('app')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Bidang Operasional
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('bidang.index')}}"><i class="fa fa-users"></i> Bidang Operasional</a></li>
                <li class="active">Edit Bidang</li>
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
                            <h3 class="box-title">Edit Bidang : {!! $bidang->name !!}</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::model($bidang, ['route' => ['bidang.update', $bidang->id_bidang], 'method' => 'PATCH']) !!}
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <span class="glyphicon glyphicon-bold form-control-feedback"></span>
                                {!! Form::text('nama_bidang', null, ['class' => 'form-control']) !!}
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            {!!Form::button('Batal', ['class' => 'btn btn-danger pull-left', 'onclick=window.location.href' => route('bidang.index')])!!}
                            {!! Form::submit('Simpan', ['class' => 'btn btn-primary pull-right']) !!}
                        </div>
                        {!!Form::close()!!}
                    </div><!-- /.box -->
@endsection
