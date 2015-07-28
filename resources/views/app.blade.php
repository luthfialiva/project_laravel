<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Reminder</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href={{asset('picture/icon.png')}}>
    <link href="{{ asset('output/final.css') }}" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/component/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('/component/plugins/jQuery/jQuery-2.1.4.min.js') }}" type="text/javascript"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
</head>
<body class="skin-blue">
<div class="wrapper">
    @if(Auth::User()->role == 1)
        @include('includes.header')
        @include('includes.sidebar')
        @elseif(Auth::User()->role == 2)
        @include('kepbag.header')
        @include('kepbag.sidebar')
        @else
        @include('pegawai.header')
        @include('pegawai.sidebar')
        @endif

    <div class="content-wrapper">

    @include('flash::message')

    @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Pendidikan Teknik Informatika</b> 2011
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="#">Muhammad Luthfi Aliva</a>.</strong> All rights reserved.
    </footer>
</div><!-- ./wrapper -->

<script src="{{ asset('output/final.js') }}" type="text/javascript"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<script>
    $('#flash-overlay-modal').modal();
</script>
<script>
    $('div.alert').delay(3000).slideUp(300);
</script>

</body>
</html>
@include('reminder')