@extends('app')
@section('content')

    <section class="content-header">
        <h1>
            About
            <small>creator</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Calendar</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        {{--<div class="[ container text-center ]">--}}
            {{--<div class="[ row ]">--}}
                {{--<div class="[ col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 ]" role="tabpanel">--}}
                    {{--<div class="[ col-xs-4 col-sm-12 ]">--}}
                        {{--<!-- Nav tabs -->--}}
                        {{--<ul class="[ nav nav-justified ]" id="nav-tabs" role="tablist">--}}
                            {{--<li role="presentation" class="active">--}}
                                {{--<a href="#dustin" aria-controls="dustin" role="tab" data-toggle="tab">--}}
                                    {{--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dustinlamont/128.jpg" />--}}
                                    {{--<span class="quote"><i class="fa fa-quote-left"></i></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li role="presentation" class="">--}}
                                {{--<a href="#daksh" aria-controls="daksh" role="tab" data-toggle="tab">--}}
                                    {{--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dakshbhagya/128.jpg" />--}}
                                    {{--<span class="quote"><i class="fa fa-quote-left"></i></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li role="presentation" class="">--}}
                                {{--<a href="#anna" aria-controls="anna" role="tab" data-toggle="tab">--}}
                                    {{--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/annapickard/128.jpg" />--}}
                                    {{--<span class="quote"><i class="fa fa-quote-left"></i></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li role="presentation" class="">--}}
                                {{--<a href="#wafer" aria-controls="wafer" role="tab" data-toggle="tab">--}}
                                    {{--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/waferbaby/128.jpg" />--}}
                                    {{--<span class="quote"><i class="fa fa-quote-left"></i></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="[ col-xs-8 col-sm-12 ]">--}}
                        {{--<!-- Tab panes -->--}}
                        {{--<div class="tab-content" id="tabs-collapse">--}}
                            {{--<div role="tabpanel" class="tab-pane fade in active" id="dustin">--}}
                                {{--<div class="tab-inner">--}}
                                    {{--<p class="lead">Etiam tincidunt enim et pretium efficitur. Donec auctor leo sollicitudin eros iaculis sollicitudin.</p>--}}
                                    {{--<hr>--}}
                                    {{--<p><strong class="text-uppercase">Dustin Lamont</strong></p>--}}
                                    {{--<p><em class="text-capitalize"> Senior web developer</em> at <a href="#">Apple</a></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div role="tabpanel" class="tab-pane fade" id="daksh">--}}
                                {{--<div class="tab-inner">--}}
                                    {{--<p class="lead">Suspendisse dictum gravida est, nec consequat tortor venenatis a. Suspendisse vitae venenatis sapien.</p>--}}
                                    {{--<hr>--}}
                                    {{--<p><strong class="text-uppercase">Daksh Bhagya</strong></p>--}}
                                    {{--<p><em class="text-capitalize"> UX designer</em> at <a href="#">Google</a></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div role="tabpanel" class="tab-pane fade" id="anna">--}}
                                {{--<div class="tab-inner">--}}
                                    {{--<p class="lead">Nullam suscipit ante ac arcu placerat, nec sagittis quam volutpat. Vestibulum aliquam facilisis velit ut ultrices.</p>--}}
                                    {{--<hr>--}}
                                    {{--<p><strong class="text-uppercase">Anna Pickard</strong></p>--}}
                                    {{--<p><em class="text-capitalize"> Master web developer</em> at <a href="#">Intel</a></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div role="tabpanel" class="tab-pane fade" id="wafer">--}}
                                {{--<div class="tab-inner">--}}
                                    {{--<p class="lead"> Fusce erat libero, fermentum quis sollicitudin id, venenatis nec felis. Morbi sollicitudin gravida finibus.</p>--}}
                                    {{--<hr>--}}
                                    {{--<p><strong class="text-uppercase">Wafer Baby</strong></p>--}}
                                    {{--<p><em class="text-capitalize"> Web designer</em> at <a href="#">Microsoft</a></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <!-- The time line -->
                <ul class="timeline">
                    <!-- timeline time label -->
                    <li class="time-label">
                  <span class="bg-blue">
                    16 Juny. 2014
                  </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-user bg-aqua"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><a href="#">Muhammad Luthfi Aliva</a> - NIM/TM : 1107011/2011</h3>
                            <div class="timeline-body">
                                Melakukan Praktek Lapangan Industri (PLI) di PT. Sucofingo Cabang Batam, yang bertujuan untuk menerapkan ilmu
                                yang didapat di bangku perkuliahan.
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <li class="time-label">
                  <span class="bg-red">
                    17 July. 2014
                  </span>
                    </li>
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-comments bg-aqua"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><a href="#">IT Team Support</a> perusahaan</h3>
                            <div class="timeline-body">
                                Setelah melalui beberapa rangkaian kegiatan dan proses bisnis yang ada
                                di PT. Sucofindo. pihak bagian IT menginginkan adanya sebuah aplikasi reminder
                                untuk mengingat dokumen kontrak kerja yang lebih informatif dan fungsional
                            </div>
                        </div>
                    </li>

                    <li class="time-label">
                  <span class="bg-green">
                    19 January. 2015
                  </span>
                    </li>

                    <li>
                        <i class="fa fa-bell bg-aqua"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><a href="#">Reminder</a> web application</h3>
                            <div class="timeline-body">
                                Aplikasi Reminder merupakan salah satu Tugas Akhir mahasiswa PTIK FT UNP Padang tahun 2015.
                                Adapun fungsi dan tujuan aplikasi ini adalah membantu mengingatkan sebuah dokumen kontrak kerja
                                yang memiliki rentan waktu yang penting dalam proses bisnis yang dilakukan oleh pihak perusahaan
                                di PT. Sufindo Batam.
                            </div>
                            <div class='timeline-footer'>
                                @if(Auth::User()->role == 1)
                                    <a onclick="window.location.href='{{route('admin.index')}}'" class="btn btn-success btn-flat btn-xs">View Project</a>
                                @elseif(Auth::User()->role == 2)
                                    <a onclick="window.location.href='{{route('kepbag.index')}}'" class="btn btn-success btn-flat btn-xs">View Project</a>
                                @else
                                    <a onclick="window.location.href='{{route('peg.index')}}'" class="btn btn-success btn-flat btn-xs">View Project</a>
                                @endif
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                    </li>
                </ul>
            </div><!-- /.col -->
        </div><!-- /.row -->
@endsection