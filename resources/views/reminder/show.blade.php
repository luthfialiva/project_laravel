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
                            <h3 class="box-title">Detail Dokumen</h3>
                         </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                        <table class="table table-striped">
                           <thead>
                           <tr>
                               <th>Nama Dokumen</th>
                               <th>:</th>
                               <th>{!! $doc->nama_doc !!}</th>
                           </tr>
                           <tr>
                               <th>Nomor Dokumen</th>
                               <th>:</th>
                               <th>{!! $doc->id_doc !!}</th>
                           </tr>
                           <tr>
                               <th>Kategori</th>
                               <th>:</th>
                               <th>{!! App\Kategori::find($doc->id_kategori)->nama_kategori !!}</th>
                           </tr>
                           <tr>
                               <th>Bidang Operasional</th>
                               <th>:</th>
                               <th>{!! App\Bidang::find($doc->id_bidang)->nama_bidang !!}</th>
                           </tr>
                           <tr>
                               <th>Start</th>
                               <th>:</th>
                               <th>{!! $doc->start_date !!}</th>
                           </tr>
                           <tr>
                               <th>Ending</th>
                               <th>:</th>
                               <th>{!! $doc->untill_date !!}</th>
                           </tr>
                           <tr>
                               <th>Remarks</th>
                               <th>:</th>
                               <th>{!! $doc->remarks !!}</th>
                           </tr>
                           <tr>
                               <th>Upload by</th>
                               <th>:</th>
                               <th>{!! App\User::find($doc->id_user)->name !!}</th>
                           </tr>
                           <tr>
                               <th>Status</th>
                               <th>:</th>
                               <th>
                                   @if($doc->ket == 1)
                                       Masih Berjalan
                                   @else Sudah Habis
                                   @endif
                               </th>
                           </tr>
                           </thead>
                     </table>
                            <div class="box-footer">
                                <button onclick="window.location.href='{{route('reminder.index')}}'" class="btn btn-danger pull-left">Kembali</button>
                            </div>
                   </div>
               </div>
           </div>
        </div>

@endsection
