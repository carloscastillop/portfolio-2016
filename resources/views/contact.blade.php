@extends('default')
@section('content')

<!-- header -->
<div class="page-header">
    <div class="container">
        <h1><a href="{{ URL::to('contact') }}" title="Contact web developer">Contact a web developer<small class="pull-right top30 hidden-sm hidden-xs">with Carlos Castillo</small></a></h1>
        <ol class="breadcrumb hidden-xs">
            <li><a href="{{ URL::to('/') }}" title="home">Home</a></li>
            <li class="active">Contact</li>
        </ol>
    </div>
</div>

<!-- List of jobs -->
<div class="container">
    <div class="bottom40 text-center">
        <button type="button" class="btn btn-default btn-circle btn-xl text-block"><i class="fa fa-hand-peace-o fa-2x" aria-hidden="true"></i></button>
        <h3>Get in touch with me today<br> 
            <small>Enter your contact info and comments in the form below</small></h3>
        <p class="">
            I will answer as soon as possible.
        </p>
    </div>
    
    <div class="row top40">
        <div class="col-lg-8 col-lg-offset-2">
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
                <a href="{{ URL::to('contact') }}" class="close" aria-label="Resfreh"><span aria-hidden="true">&times;</span></a>
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
                {!! Form::open(array('route' => 'contact-store', 'class' => 'form ContactForm')) !!}
                    <div class="form-group">
                        {!! Form::label('Subject *') !!}
                        <select class="form-control input-lg" name="subject">
                            @foreach($subjects as $subject)
                            <option value="{{ $subject->id }}" @if($op==$subject->id) selected="selected" @endif>{{ $subject->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div id="yourSubject" class="form-group" style="display: none">
                        {!! Form::label('Your subject *') !!}
                        {!! Form::text('yourSubject', null, 
                            array('', 
                                  'class'=>'form-control input-lg', 
                                  'placeholder'=>'e.g. Congratulations!')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Your Name *') !!}
                        {!! Form::text('name', null, 
                            array('', 
                                  'class'=>'form-control input-lg', 
                                  'placeholder'=>'e.g. Salvador Dalí')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Your E-mail Address *') !!}
                        {!! Form::text('email', null, 
                            array('', 
                                  'class'=>'form-control input-lg', 
                                  'placeholder'=>'e.g. nickname@domain.com')) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('Your mobile') !!}
                        <label class="sr-only" for="smsInput">Code area</label>
                        <div class="input-group">
                            <div class="input-group-addon">+44</div>
                            <input name="phone" type="text" class="form-control input-lg" maxlength="12" placeholder="07774 041604">
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('Your company') !!}
                        {!! Form::text('company', null, 
                            array('', 
                                  'class'=>'form-control input-lg', 
                                  'placeholder'=>'e.g. Umbrella Corporation')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Your message *') !!}
                        {!! Form::textarea('message', null, 
                            array('', 
                                  'class'=>'form-control input-lg', 
                                  'placeholder'=>'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...')) !!}
                    </div>

                    <hr>
                    <div class="form-group">
                        {!! Form::button('<i class="fa fa-envelope" aria-hidden="true"></i> Send', 
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


