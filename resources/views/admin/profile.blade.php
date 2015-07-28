@extends('app')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Profile
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.all')}}"><i class="fa fa-user"></i> Profile</a></li>
                <li class="active">Edit Profile</li>
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
                            <h3 class="box-title">Edit Profile : {!! $user->name !!}</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        {!!Form::model($user, ['route' => ['profile.update', $user->id], 'method' => 'PATCH', 'files' => 'true'])!!}
                        <div class="box-body">
                            <div class="form-group {{$errors->has('picture') ? 'has-error' : ''}}">
                                <label class="control-label"><i class="fa fa-upload"></i> Profile Picture</label>
                                <br>
                                <img src="{{ asset(Auth::user()->picture) }}" class="img-circle" alt="User Image" style="height:150px" />
                                <br>
                                <br>
                                {!!Form::file('picture', null, ['class' => 'form-control'])!!}
                                {!!$errors->first('picture', '<span class="help-block">:message</span>')!!}
                            </div>
                            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name'])!!}
                                {!!$errors->first('name', '<span class="help-block">:message</span>')!!}
                            </div>
                            <div class="form-group has-feedback {{$errors->has('username') ? 'has-error' : ''}}">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                {!!Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username'])!!}
                                {!!$errors->first('username', '<span class="help-block">:message</span>')!!}
                            </div>
                            <div class="form-group has-feedback {{$errors->has('password') ? 'has-error' : ''}}">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                {!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required data-toggle' => 'popover', 'title' => 'Password Strength', 'data-content' => 'Enter Password...', 'id' => 'password'])!!}
                                {!!$errors->first('password', '<span class="help-block">:message</span>')!!}
                            </div>
                            <div class="form-group has-feedback {{$errors->has('password') ? 'has-error' : ''}}">
                                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                {!!Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password Confirmation', 'required data-toggle' => 'popover', 'title' => 'Password Confirmation', 'data-content' => 'Repeat...', 'id' => 'password'])!!}
                                {!!$errors->first('password', '<span class="help-block">:message</span>')!!}
                            </div>
                            <div class="form-group has-feedback {{$errors->has('email') ? 'has-error' : ''}}">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                {!!Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address'])!!}
                                {!!$errors->first('email', '<span class="help-block">:message</span>')!!}
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            @if(Auth::User()->role == 1)
                                {!!Form::button('Batal', ['class' => 'btn btn-danger pull-left', 'onclick=window.location.href' => route('admin.all')])!!}
                            @elseif(Auth::User()->role == 2)
                                {!!Form::button('Batal', ['class' => 'btn btn-danger pull-left', 'onclick=window.location.href' => route('kepbag.index')])!!}
                            @else
                                {!!Form::button('Batal', ['class' => 'btn btn-danger pull-left', 'onclick=window.location.href' => route('peg.index')])!!}
                            @endif
                                {!!Form::submit('Simpan', ['class' => 'btn btn-primary pull-right'])!!}
                        </div>
                        {!!Form::close()!!}
                    </div><!-- /.box -->
                    <script type="text/javascript">
                        $(document).ready(function(){

                            //minimum 8 characters
                            var bad = /(?=.{8,}).*/;
                            //Alpha Numeric plus minimum 8
                            var good = /^(?=\S*?[a-z])(?=\S*?[0-9])\S{8,}$/;
                            //Must contain at least one upper case letter, one lower case letter and (one number OR one special char).
                            var better = /^(?=\S*?[A-Z])(?=\S*?[a-z])((?=\S*?[0-9])|(?=\S*?[^\w\*]))\S{8,}$/;
                            //Must contain at least one upper case letter, one lower case letter and (one number AND one special char).
                            var best = /^(?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9])(?=\S*?[^\w\*])\S{8,}$/;

                            $('#password').on('keyup', function () {
                                var password = $(this);
                                var pass = password.val();
                                var passLabel = $('[for="password"]');
                                var stength = 'Weak';
                                var pclass = 'danger';
                                if (best.test(pass) == true) {
                                    stength = 'Very Strong';
                                    pclass = 'success';
                                } else if (better.test(pass) == true) {
                                    stength = 'Strong';
                                    pclass = 'warning';
                                } else if (good.test(pass) == true) {
                                    stength = 'Almost Strong';
                                    pclass = 'warning';
                                } else if (bad.test(pass) == true) {
                                    stength = 'Weak';
                                } else {
                                    stength = 'Very Weak';
                                }

                                var popover = password.attr('data-content', stength).data('bs.popover');
                                popover.setContent();
                                popover.$tip.addClass(popover.options.placement).removeClass('danger success info warning primary').addClass(pclass);

                            });

                            $('input[data-toggle="popover"]').popover({
                                placement: 'top',
                                trigger: 'focus'
                            });

                        })
                    </script>
@endsection
