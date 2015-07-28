<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PT. Sucofindo</title>
    <link href="{{ asset('/component/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/opener/css/form.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('output/final.css') }}" rel="stylesheet" type="text/css"/>

<body>
<div class="middlePage">
    <div class="page-header">
        <h1 class="logo">WELCOME <small> to SUCOFINDO Resources</small></h1>
    </div>
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Please Sign In</h3>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif
        <div class="panel-body">
            <div class="row">
                <div align="center" class="col-md-5" >
                    <img src="{{ asset('/component/dist/img/logo.jpg') }}" />
                </div>
                <div class="col-md-7" style="border-left:1px solid #ccc;height:160px">
                    {!!Form::open(['url' => 'auth/login', 'class' => 'form-signin'])!!}
                    <p>{!!Form::text('username', null, ['class' => 'form-control input-md', 'style' => 'margin-bottom: 10px', 'placeholder' => 'Username', 'required', 'autofocus'])!!}</p>
                    <p>{!!Form::password('password', ['class' => 'form-control input-md', 'placeholder' => 'Password', 'required'])!!}</p>
                    <div class="spacing"><input type="checkbox" name="checkboxes" id="checkboxes-0" value="1"><small> Remember me</small></div>
                    {!!Form::submit('Sign in', ['class' => 'btn btn-info btn-sm pull-right'])!!}
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
    <p>Copyright © 2014-2015 <a href="#">Muhammad Luthfi Aliva</a> . All rights reserved</p>
</div>
<script>
    $('div.alert').delay(3000).slideUp(300);
</script>
</body>
</html>
