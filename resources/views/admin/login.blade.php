<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="{{ Config::get('settings.author') }}">
    <title>Admin | {{ Config::get('settings.sitename') }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::to('/admin/')}}/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{URL::to('/admin/')}}/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::to('/admin/')}}/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::to('/admin/')}}/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Carlos CSS -->
    <link href="{{URL::to('/admin/')}}/estilos.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="logoLogin">
                    <img src="{{ URL::to('/images/logo.png') }}" alt="" class="img-responsive center-block">
                </div>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bienvenido Admin</h3>
                    </div>
                    <div class="panel-body">
                        
                        {{ Form::open(array('url' => 'backend-login')) }}
                            <fieldset>
                                @if ($errors->any())
                                <div role="alert" class="alert alert-danger">
                                    <strong>Ups!</strong> <br/>
                                    {{ HTML::ul($errors->all()) }}
                                </div>
                                @endif
                                @if (Session::has('messageError'))
                                <div role="alert" class="alert alert-danger">
                                    <strong>Ups!</strong> <br/>
                                    {{Session::get('messageError')}}
                                </div>
                                @endif

                                <div class="form-group">
                                    {{ Form::label('email', 'E-mail') }}
                                    {{ Form::text('email', Input::old('email'), array('class'=>'form-control', 'placeholder' => 'awesome@awesome.com')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('email', 'Contraseña') }}
                                    {{ Form::password('password', array('class'=>'form-control', 'placeholder' => 'Contaseña')) }}
                                </div>
                                <div class="checkbox">
                                    <label for="rememberme">
                                        <input type="checkbox" name="rememberme" id="rememberme">
                                        Recordarme
                                        </label>
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                {{ Form::submit('Login', array('class'=>'btn btn-lg btn-primary btn-block')) }}
                            </fieldset>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{URL::to('/admin/')}}/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::to('/admin/')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{URL::to('/admin/')}}/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{URL::to('/admin/')}}/dist/js/sb-admin-2.js"></script>

</body>

</html>
