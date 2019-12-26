<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('public/back/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/back/dist/css/AdminLTE.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Admin </b>Login</a>
    </div>

    <div class="login-box-body">

        @if ($errors->has('email'))
            <div class="alert alert-danger">
                {{ $errors->first('email') }}
            </div>
        @endif

        <p class="login-box-msg"></p>

        <form action="{{route('login')}}" method="post">
            {{csrf_field()}}
            <div class="form-group has-feedpublic/back">
                <input type="email" class="form-control" name="email" placeholder="Email">

            </div>
            <div class="form-group has-feedpublic/back">
                <input type="password" class="form-control" name="password" placeholder="Password">

            </div>
            <div class="row">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
            </div>
        </form>

    </div>

</div>

</body>
</html>
