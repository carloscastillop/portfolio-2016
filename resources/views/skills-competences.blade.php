@extends('default')
@section('content')

<!-- header -->
<div class="page-header">
    <div class="container">
        <h1><a href="{{ URL::to('portfolio') }}" title="Porftolio Web sites">Portfolio web <small class="pull-right top30 hidden-sm hidden-xs">Carlos Castillo - web developer</small></a></h1>
        <ol class="breadcrumb hidden-xs">
            <li><a href="{{ URL::to('/') }}" title="home">Home</a></li>
            <li class="active">Portfolio</li>
        </ol>
    </div>
</div>

<!-- List of jobs -->
<div class="container">
    <h3>My skills and competences</h3>
    <p class="">
        New skills and technologies soon
    </p>
    
    <h4 class="titleSkill">Web development</h4>
    <div class="row SkillsList">
        @foreach($skills as $skill)
        <div class="col-xs-4 col-sm-3 col-md-2 eachSkill">
            <div class="thumbnail" data-toggle="tooltip" data-placement="bottom" title="{{ $skill->name }}">
                {!! $skill->image !!}
            </div>
        </div>
        @endforeach
    </div>
    
    <div class="clearfix"></div>
    <hr>
    <div class="clearfix"></div>

    <h4 class="titleSkill">Other skills</h4>
    
    <div class="row SkillsList">
        <?php $i=0 ?>
        @foreach($others as $other)
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="otherSkill">
                    <a class="fancybox" href="{{ URL::to('images/skills/'.$other->image) }}" rel="gallery_group-{{ $other->id }}" title="{{$other->name}}">
                        <img rel="gallery_group-{{ $other->id }}" src="{{ URL::to('images/skills/'.$other->image) }}" class="img-responsive" alt="{{ $other->name }}">
                    </a>
                    <div class="hidden">
                        @if( count($other->gallery) > 0 )
                            @foreach($other->gallery as $leGallery)
                            <a class="fancybox" href="{{ URL::to('images/skills/'.$leGallery->image) }}" rel="gallery_group-{{ $other->id }}" title="{{ $other->name }} - {{ $leGallery->id }}">
                                <img rel="gallery_group-{{ $other->id }}" src="{{ URL::to('images/skills/'.$leGallery->image) }}" class="img-responsive" alt="{{$leGallery->id}}">
                            </a>
                            @endforeach
                        @endif
                    </div>
                    <h3>{{ $other->name }}</h3>
                </div>
            </div>
        @endforeach
    </div>    

    

    <div class="clearfix"></div>
    <hr>
    <div class="clearfix"></div>

    <!-- CALL ACTION -->
    @include('template.callaction')
    
<!-- FIN CONTAINER-->
</div>


@stop


