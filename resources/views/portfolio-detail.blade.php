@extends('default')
@section('content')

<!-- header -->
<div class="page-header">
    <div class="container">
        <h1><a href="{{ URL::to('portfolio/'.str_slug($project->name, '-').'/'.$project->id) }}" title="{{ $project->name }}">{{ $project->name }}</a></h1>
        <ol class="breadcrumb hidden-xs">
            <li><a href="{{ URL::to('/') }}" title="home">Home</a></li>
            <li><a href="{{ URL::to('/portfolio/') }}" title="Portfolio">Portfolio</a></li>
            <li class="active">{{ $project->name }}</li>
        </ol>
    </div>
</div>

<!-- List of jobs -->
<div class="container projectDetail">
    
    <div class="well">
        <div class="row">
            <div class="col-md-7">
                <!-- carousel -->
                
                <div class="carousel slide article-slide" id="article-photo-carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner cont-slider">

                        <div class="item active">
                            <img id="modal-imgPpal" alt="{{ $project->name }}" src="{{ URL::to('images/portfolio/'.$project->image) }}" class="img-responsive thumbnail">
                        </div>
                        
                    </div>
                    
                </div>

                <!-- Fin carousel -->
            </div>
            <div class="col-md-5">
                <small>Name:</small>
                <h3 id="modal-mini-title"><a id="title-{{ $project->id }}" href="{{ URL::to('/portfolio/'.str_slug($project->name, '-').'/'.$project->id)}}" title="{{ $project->name }}">{{ $project->name }}</a></h3>
                <small>Client:</small>
                <h4 id="modal-client">{{ $project->client }}</h4>
                <hr>
                <p id="modal-description">{{ $project->description }}</p>
                <div class="text-center">
                    @if($project->link_available)
                    <a href="{{ $project->link }}" class="btn btn-lg btn-primary" title="visit {{ $project->name }}" target="_blank">Visit project <i class="fa fa-external-link" aria-hidden="true"></i></a>
                    @else
                    <button type="button" class="btn btn-default btn-lg" disabled="disabled"><i class="fa fa-chain-broken" aria-hidden="true"></i> Sorry, link not available</button>
                    @endif
                </div>
                <hr>
                <h5>Skills used</h5>
                <div class="row SkillsList SkillsListModal">
                    @foreach($project->skills as $skill)
                    <div id="modalEachSkill-{{ $skill->id }}" class="col-xs-4 col-sm-3 col-md-3 col-lg-2 eachSkill">
                        <div id="thumbnail-{{ $skill->id }}" class="thumbnail" data-toggle="tooltip" data-placement="bottom" title="{{ $skill->name }}">
                            {!! $skill->image !!}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    

    
    
    


    <div class="clearfix"></div>
    <hr>
    <div class="clearfix"></div>

    @include('template.callaction')
    
    <div class="clearfix"></div>
    <hr>
    <div class="clearfix"></div>

    <a href="{{ URL::to('/portfolio') }}" class="btn btn-lg btn-primary" title="Back to portfolio"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back to portfolio</a>
<!-- FIN CONTAINER-->
</div>

@stop


