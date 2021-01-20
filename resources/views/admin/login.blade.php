<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistem Informasi Pendaftaran Seminar Online">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Sistem Informasi Pendaftaran Seminar Online">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>.:Login Sidanar:.</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('template/css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('template/css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('template/css/font-awesome.css') }}" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('template/css/style-responsive.css') }}" rel="stylesheet" />
</head>

<body class="login-img3-body">

  <div class="container">

  <form class="login-form" role="form" method="POST" action="{{ url('/admin/auth') }}">
    {{ csrf_field() }}
      <div class="login-wrap">
        <p class="login-img">SIDANAR</p>
        <i>Sistem </i>
        
        <div class="input-group">
            <span class="input-group-addon"><i class="icon_profile"></i></span>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="password">
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
        Sisitem Informasi Pendaftaran Seminar
      </div>
    </div>
  </div>


</body>

</html>