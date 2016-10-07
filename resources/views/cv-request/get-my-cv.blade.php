@extends('default')
@section('content')

<!-- header -->
<div class="page-header">
    <div class="container">
        <h1>CV <small class="pull-right top30 hidden-sm hidden-xs">Carlos Castillo - web developer</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('/') }}" title="home">Home</a></li>
            <li class="active">Get my CV</li>
        </ol>
    </div>
</div>

<!-- List of jobs -->
<div class="container">
    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
    <p class="">
        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
    </p>

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
                                  'placeholder'=>'Your name')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Your E-mail Address *') !!}
                        {!! Form::text('email', null, 
                            array('', 
                                  'class'=>'form-control input-lg', 
                                  'placeholder'=>'nickname@domain.com')) !!}
                    </div>
                    <hr>
                    <div class="form-group">
                        {!! Form::button('<i class="fa fa-envelope" aria-hidden="true"></i> Get my CV!', 
                          array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block')) !!}
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


