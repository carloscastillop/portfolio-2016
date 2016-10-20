@extends('default')
@section('content')

<!-- header -->
<div class="page-header">
    <div class="container">
        <h1>Portfolio web <small class="pull-right top30 hidden-sm hidden-xs">Carlos Castillo - web developer</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('/') }}" title="home">Home</a></li>
            <li class="active">Portfolio</li>
        </ol>
    </div>
</div>

<!-- List of jobs -->
<div class="container">
    <h3>My skills and competences</h3>
    <p class="">
        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
    </p>
    
    <h4 class="titleSkill">Web development</h4>
    <div class="row SkillsList">
        @foreach($skills as $skill)
        <div class="col-xs-6 col-sm-3 col-md-2 eachSkill">
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
            <?php $i++ ?>
            <div class="col-xs-6 col-sm-3 col-md-4">
                <div class="otherSkill">
                    <a class="fancybox" href="{{ URL::to('images/skills/'.$other->image) }}" rel="gallery_group-{{$i}}" title="{{$other->description}}-1">
                        <img rel="gallery_group-{{$i}}" src="{{ URL::to('images/skills/'.$other->image) }}" class="img-responsive" alt="{{$i}}-1">
                    </a>
                    <div class="hidden">
                        <a class="fancybox" href="{{ URL::to('images/640x480.png') }}" rel="gallery_group-{{$i}}" title="Lorem ipsum dolor sit amet {{$i}}-2">
                            <img rel="gallery_group-{{$i}}" src="{{ URL::to('images/640x480.png') }}" class="img-responsive" alt="{{$i}}-2">
                        </a>
                        <a class="fancybox" href="{{ URL::to('images/640x480.png') }}" rel="gallery_group-{{$i}}" title="Lorem ipsum dolor sit amet {{$i}}-3">
                            <img rel="gallery_group-{{$i}}" src="{{ URL::to('images/640x480.png') }}" class="img-responsive" alt="{{$i}}-3">
                        </a>
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
    <div class="bs-calltoaction bs-calltoaction-default">
        <div class="row">
            <div class="col-md-9 cta-contents">
                <h3 class="cta-title">Do you want to hire me?</h3>
                <div class="cta-desc">
                    <p>Lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus..</p>
                </div>
            </div>
            <div class="col-md-3 cta-button">
                <a href="#" class="btn btn-lg btn-block btn-primary">Go for It!</a>
            </div>
         </div>
    </div>
    
<!-- FIN CONTAINER-->
</div>


@stop


