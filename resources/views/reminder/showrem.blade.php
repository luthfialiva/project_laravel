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
            <li class="active">Masuk Masa Tenggang</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="pad margin no-print">
            <div class="callout callout-warning" style="margin-bottom: 0!important;">
                <h4><i class="fa fa-info"></i> Note:</h4>
                Data tidak bisa dirubah, silahkan pilih dokumen proses kontrak apakah akan diperpanjang atau dihentikan !!!
            </div>
        </div>
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Dokumen : {!! $doc->nama_doc !!} Telah Masuk Masa Tenggang !!!</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    {!!Form::model($doc, ['route' => ['remind.update', $doc->id], 'method' => 'PATCH'])!!}
                    <div class="box-body">
                        <div class="form-group has-warning">
                            <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Nama Dokumen</label>
                            {!! Form::text('nama_doc', null, ['class' => 'form-control', 'placeholder' => 'Nama Dokumen', 'readonly']) !!}
                        </div>
                        <div class="form-group has-warning">
                            <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Nomor Dokumen</label>
                            {!! Form::text('id_doc', null, ['class' => 'form-control', 'placeholder' => 'Nomor Dokumen', 'readonly']) !!}
                        </div>
                        <div class="form-group has-warning">
                            <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Kategori Dokumen</label>
                            {!! Form::select('id_kategori', array('placeholder'=>'Silahkan Pilih Kategori')+App\Kategori::lists('nama_kategori','id_kategori'), null, array('id_kategori'=>'id_kategori', 'class' => 'form-control', 'readonly'))!!}
                        </div>
                        <div class="form-group has-warning">
                            <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Bidang Operasional</label>
                            {!! Form::select('id_bidang', array('placeholder'=>'Silahkan Pilih Bidang Operasional')+App\Bidang::lists('nama_bidang','id_bidang'), null, array('id_bidang'=>'id_bidang', 'class' => 'form-control', 'readonly'))!!}
                        </div>
                        <div class="form-group has-warning">
                            <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Start</label>
                            {!! Form::input('date', 'start_date', null, ['class' => 'form-control', 'placeholder' => 'Start', 'readonly']) !!}
                        </div>
                        <div class="form-group has-warning">
                            <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Ending</label>
                            {!! Form::input('date', 'untill_date', null, ['class' => 'form-control', 'placeholder' => 'Ending', 'readonly']) !!}
                        </div>
                        <div class="form-group has-warning">
                            <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Remarks</label>
                            {!! Form::text('remarks', null, ['class' => 'form-control', 'placeholder' => 'Remarks', 'readonly']) !!}
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        {!!Form::button('Perpanjang Kontrak', ['class' => 'btn btn-primary pull-right', 'onclick=window.location.href' => route('renew.show', ['id' => $doc->id])])!!}
                        {!!Form::submit('Hentikan Kontrak', ['class' => 'btn btn-danger pull-left', 'onClick' => 'return confirm("Apakah anda yakin untuk menghentikan kontrak ini ?")'])!!}
                    </div>
                    {!!Form::close()!!}
                </div><!-- /.box -->

@endsection
