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
    <div class="bottom40">
        <h3>PHP & Responsive Front-end Development</h3>
        <p class="">
            Only some of my projects the last two years.
        </p>
    </div>
    
    @if(count($projects) == 0)
        <div class="alert alert-info" role="alert"> 
            <a href="{{ URL::to('portfolio') }}" class="close" aria-label="Resfreh"><span aria-hidden="true">&times;</span></a>
            <h4>Just a heads up!</h4> There are not any profesional project with this skill at this moment. 
        </div>
    @endif

    @if(isset($theSkill) && count($theSkill)>0)
        <h5>Filtering by:</h5>
        <div class="filterSkills">
            <div class="row SkillsList">
                <div id="eachSkillFilter-{{ $theSkill->id }}" class="col-xs-3 col-sm-2 col-md-1 eachSkill">
                    <a href="{{ URL::to('portfolio/skill/'.str_slug($theSkill->name, '-').'/'.$theSkill->id) }}">
                    <div id="thumbnail-{{ $theSkill->id }}" class="thumbnail" data-toggle="tooltip" data-placement="bottom" title="{{ $theSkill->name }}">
                        {!! $theSkill->image !!}
                    </div>
                    </a>
                </div>
            </div>
        </div>
    @endif

    <div class="row grid rowMasonryX portfolioList clearfix">
        
        @foreach($projects as $project)
        <div class="col-xs-12 col-sm-6 col-md-4 eachProject">
            <div id="portfolio-{{ $project->id }}" class="panel panelMasonry panel-default eachPortfolio">
                <div class="panel-image">
                    <img id="minPpal-{{ $project->id }}" data-original="{{ URL::to('images/portfolio/'.$project->image) }}" class="img-responsive lazy" alt="{{ $project->name }}"/>
                </div>
                <div class="panel-heading">
                    <h2><a id="title-{{ $project->id }}" href="{{ URL::to('/portfolio/'.str_slug($project->name, '-').'/'.$project->id)}}" title="{{ $project->name }}">{{ $project->name }}</a></h2>
                    <h4><i class="fa fa-user" aria-hidden="true"></i> {{ $project->client }}</h4>
                </div>
                <div class="panel-body" id="description-{{ $project->id }}">{{ $project->description }}</div>
                <div class="panel-footer">
                    
                    <input type="hidden" name="client" id="client-{{ $project->id }}" value="{{ $project->client }}">
                    <?php 
                        $skillsP='';
                        foreach($project->skills as $leSkill){
                            $skillsP.=$leSkill->id.',';
                        }
                        $skillsP = substr($skillsP, 0, -1);
                    ?>
                    <input type="hidden" name="skills" id="skills-{{ $project->id }}" value="{{ $skillsP }}">
                    @if($project->link_available)
                    <input type="hidden" name="link" id="link-{{ $project->id }}" value="{{ $project->link }}">
                    @else
                    <input type="hidden" name="link" id="link-{{ $project->id }}" value="">
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    
    <div class="clearfix"></div>
    <hr>
    <div class="clearfix"></div>
    <h4 class="bottom40">Filter by skills</h4>
    <!-- my skills -->
    <div class="footerSkills">
        <div class="row SkillsList">
            @foreach($skills as $skill)
            <div id="eachSkill-{{ $skill->id }}" class="col-xs-4 col-sm-3 col-md-1 eachSkill">
                <a href="{{ URL::to('portfolio/skill/'.str_slug($skill->name, '-').'/'.$skill->id) }}">
                <div id="thumbnail-{{ $skill->id }}" class="thumbnail" data-toggle="tooltip" data-placement="bottom" title="{{ $skill->name }}">
                    {!! $skill->image !!}
                </div>
                </a>
            </div>
            @endforeach
            <div id="eachSkill-all" class="col-xs-6 col-sm-3 col-md-1 eachSkill">
                <a href="{{ URL::to('portfolio') }}" class="btn btn-md btn-primary" data-dismiss="modal" aria-label="Close">View all</a>
            </div>
        </div>
    </div>


    <div class="clearfix"></div>
    <hr>
    <div class="clearfix"></div>

    @include('template.callaction')
    
<!-- FIN CONTAINER-->
</div>

@include('template.modal-project')

@stop


