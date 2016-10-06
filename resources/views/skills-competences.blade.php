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
        @for( $i=0; $i < 20 ; $i++)
        <div class="col-xs-6 col-sm-3 col-md-2 eachSkill">
            <div class="thumbnail" data-toggle="tooltip" data-placement="bottom" title="Angulajs">
                <svg viewBox="0 0 128 128">
                    <path fill="#B3B3B3" d="M63.81 1.026l-59.257 20.854 9.363 77.637 49.957 27.457 50.214-27.828 9.36-77.635z"></path><path fill="#A6120D" d="M117.536 25.998l-53.864-18.369v112.785l45.141-24.983z"></path><path fill="#DD1B16" d="M11.201 26.329l8.026 69.434 44.444 24.651v-112.787z"></path><path fill="#F2F2F2" d="M78.499 67.67l-14.827 6.934h-15.628l-7.347 18.374-13.663.254 36.638-81.508 14.827 55.946zm-1.434-3.491l-13.295-26.321-10.906 25.868h10.807l13.394.453z"></path><path fill="#B3B3B3" d="M63.671 11.724l.098 26.134 12.375 25.888h-12.446l-.027 10.841 17.209.017 8.042 18.63 13.074.242z"></path>
                </svg>
            </div>
        </div>
        @endfor
    </div>
    
    <div class="clearfix"></div>
    <hr>
    <div class="clearfix"></div>

    <h4 class="titleSkill">Other skills</h4>
    
    <div class="row SkillsList">
        @for( $i=0; $i < 10 ; $i++)
            <div class="col-xs-6 col-sm-3 col-md-6">
                <div class="otherSkill">
                    <a class="fancybox" href="{{ URL::to('images/640x480.png') }}" rel="gallery_group-{{$i}}" title="Lorem ipsum dolor sit amet {{$i}}-1">
                        <img rel="gallery_group-{{$i}}" src="{{ URL::to('images/640x480.png') }}" class="img-responsive" alt="{{$i}}-1">
                    </a>
                    <div class="hidden">
                        <a class="fancybox" href="{{ URL::to('images/640x480.png') }}" rel="gallery_group-{{$i}}" title="Lorem ipsum dolor sit amet {{$i}}-2">
                            <img rel="gallery_group-{{$i}}" src="{{ URL::to('images/640x480.png') }}" class="img-responsive" alt="{{$i}}-2">
                        </a>
                        <a class="fancybox" href="{{ URL::to('images/640x480.png') }}" rel="gallery_group-{{$i}}" title="Lorem ipsum dolor sit amet {{$i}}-3">
                            <img rel="gallery_group-{{$i}}" src="{{ URL::to('images/640x480.png') }}" class="img-responsive" alt="{{$i}}-3">
                        </a>
                    </div>
                    <h3>Painting</h3>
                </div>
            </div>
        @endfor
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


