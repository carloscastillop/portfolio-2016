<!DOCTYPE html>
<html lang="en">

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
                <div class="logoLogin" style="margin-top: 5px">
                    
                </div>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        
                        <img src="http://i.giphy.com/l41lIV220U3I4mVdC.gif" alt="" class="img-responsive center-block thumbnail">
                        <h3 class="panel-title">Welcome Admin!</h3>
                    </div>
                    <div class="panel-body">
                        
                        {{ Form::open(array('url' => '/backend/login')) }}
                            <fieldset>
                                @if ($errors->any())
                                    <div role="alert" class="alert alert-danger">
                                        <strong>Ups!</strong> <br/>
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (Session::has('messageError'))
                                <div role="alert" class="alert alert-danger">
                                    <strong>Ups!</strong> <br/>
                                    {{Session::get('messageError')}}
                                </div>
                                @endif
                                <div class="form-group">
                                    {!! Form::label('email', 'E-mail*') !!}
                                    {!! Form::text('email', null, 
                                        array('', 
                                              'class'=>'form-control input-lg', 
                                              'placeholder'=>'awesome@awesome.com')) !!}
                                </div>
                                
                                <div class="form-group">
                                    {{ Form::label('password', 'Password*') }}
                                    {{ Form::password('password', array('class'=>'form-control input-lg', 'placeholder' => 'Password')) }}
                                </div>
                                <div class="checkbox">
                                    <label for="rememberme">
                                        <input type="checkbox" name="rememberme" id="rememberme">
                                        Rememberme
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
