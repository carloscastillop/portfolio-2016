@extends('default')
@section('content')

<!-- header -->
<div class="page-header">
    <div class="container">
        <h1><a href="{{ URL::to('get-my-cv') }}" title="Carlos Castillo CV">CV <small class="pull-right top30 hidden-sm hidden-xs">Carlos Castillo - web developer</small></a></h1>
        <ol class="breadcrumb hidden-xs">
            <li><a href="{{ URL::to('/') }}" title="home">Home</a></li>
            <li class="active">Get my CV</li>
        </ol>
    </div>
</div>

<!-- List of jobs -->
<div class="container">
    <div class="bottom40 text-center">
        <button type="button" class="btn btn-default btn-circle btn-xl text-block"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></button>
        <h3>I am pleased to present my CV for your consideration as a <br>PHP & Front-end Developer.</h3>
        <p class="">
             Please enter your contact information, once validated your information, you will receive an email with my CV.
        </p>
    </div>

    <div class="row top40">
        <div class="col-lg-6 col-lg-offset-3">
            @if (count($errors) > 0)
            <div class="alert alert-danger" role="alert">
                <i class="fa fa-frown-o fa-3x " aria-hidden="true"></i> <strong>Oooops!!</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(Session::has('mensajeError'))
            <div class="alert alert-danger" role="alert">
                <i class="fa fa-frown-o fa-3x " aria-hidden="true"></i> <strong>Oooops!!</strong>
                <br><br>
                {{Session::get('mensajeError')}}
            </div>
            @endif
            @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
                <a href="{{ URL::to('get-my-cv') }}" class="close" aria-label="Resfreh"><span aria-hidden="true">&times;</span></a>
                <i class="fa fa-smile-o fa-3x " aria-hidden="true"></i> <strong>Great!!</strong>
                <br><br>
                {{Session::get('message')}}
            </div>
            <hr>
            <div class="text-center">
                <a href="{{ URL::to('/') }}" title="Back to home" class="btn btn-primary btn-lg"><i class="fa fa-chevron-left" aria-hidden="true"></i> HOME</a>
            </div>
            @else
            <div class="well">
                {!! Form::open(array('route' => 'get-my-cv-store', 'class' => 'form')) !!}
                    <div class="form-group">
                        {!! Form::label('Your Name *') !!}
                        {!! Form::text('name', null, 
                            array('', 
                                  'class'=>'form-control input-lg', 
                                  'placeholder'=>'e.g. Elon Musk')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Your E-mail Address *') !!}
                        {!! Form::text('email', null, 
                            array('', 
                                  'class'=>'form-control input-lg', 
                                  'placeholder'=>'e.g. nickname@domain.com')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Your Mobile') !!}
                        <label class="sr-only" for="smsInput">Code area</label>
                        <div class="input-group">
                            <div class="input-group-addon">+44</div>
                            <input id="smsInput" name="dnis" type="text" class="form-control" maxlength="12" placeholder="7774 041604">
                        </div>
                        <p class="help-text"><i class="fa fa-comment-o" aria-hidden="true"></i> You will receive an SMS confirmation</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('Your company *') !!}
                        {!! Form::text('company', null, 
                            array('', 
                                  'class'=>'form-control input-lg', 
                                  'placeholder'=>'e.g. Space X')) !!}
                    </div>

                    <hr>
                    <div class="form-group">
                        {!! Form::button('<i class="fa fa-envelope" aria-hidden="true"></i> Get my CV!', 
                          array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block btnStar')) !!}
                    </div>
                    <p class="help-text">(*) Required fields</p>
                {!! Form::close() !!}
            </div>
            @endif
        </div>
    </div>
    
<!-- FIN CONTAINER-->
</div>


@stop


