<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PT. Sucofindo</title>

    <link href="{{ asset('/opener/css/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/opener/css/splashscreen.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/opener/css/login.css') }}" rel="stylesheet" type="text/css">
    {{--    <link href="{{ asset('/component/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>--}}
    <script src="{{ asset('/opener/js/jquery-1.9.1.js') }}"></script>
    <script src="{{ asset('/opener/js/jquery.splashscreen.js') }}"></script>
    <script src="{{ asset('/opener/js/script.js') }}"></script>

</head>
<body>

<div id="page">
    <div id="promoIMG">
        <div class="container_16">
            <div class="grid_6 prefix_5 suffix_5">
                <h1>PT. Sucofindo (Persero)- Please Login</h1>
                <div id="login">
                    <p>Masukkan Username dan Password Anda</p>
                    <br>
                    <hr/>
                    <br>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
                    {!!Form::open(['url' => 'auth/login', 'class' => 'form-signin'])!!}
                    <p>{!!Form::text('username', null, ['class' => 'inputText', 'style' => 'margin-bottom: 10px', 'placeholder' => 'Username', 'required', 'autofocus'])!!}</p>
                    <p>{!!Form::password('password', ['class' => 'inputText', 'placeholder' => 'Password', 'required'])!!}</p>
                    <p><div class="">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div></p>
                    {!!Form::submit('Sign in', ['class' => 'black_button'])!!}
                    {!!Form::close()!!}
                </div>
                <div id="forgot">
                    <a href="#" class="forgotlink"><span>Aplikasi Reminder PT.Sucofindo Batam</span></a></div>
            </div>
        </div>
        <br clear="all" />
    </div>
</div>
</body>
</html>
