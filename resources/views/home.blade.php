@extends('default')
@section('content')

<div class="full-width"></div>
<div class="container">
    <div class="row">
        <!-- mi perfil top -->
        <div class="col-md-12">
            <div class="panel panelTopCCP">
                <div class="cover-photo">
                    <div class="fb-name">
                        <h2><a href="{{ URL::to('/') }}" title="Carlos Castillo web developer">Carlos Castillo</a></h2>
                        <h1><a href="{{ URL::to('/') }}" title="Carlos Castillo web developer">Web developer</a></h1>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="profile-thumb">
                        <img id="imagen2Profile" src="{{ URL::to('/images/yo.png') }}" alt="Carlos Castillo web developer">
                        <img id="imagen1Profile" src="{{ URL::to('/images/yo2.png') }}" alt="Carlos Castillo web developer hover">
                    </div>
                    
                    <div class="socialInfoContainer">
                        <a href="mailto:info@carloscastillo.cl" class="fb-user-mail" title="Mail me">{{ $user->email }}</a>
                        <ul class="social-icons">
                            @if($user->linkedin)
                            <li><a href="{{ $user->linkedin }}" target="_blank" title="My Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            @endif
                            @if($user->facebook)
                            <li><a href="{{ $user->facebook }}" target="_blank" title="My Facebook"><i class="fa fa-facebook"></i></a></li>
                            @endif
                            @if($user->twitter)
                            <li><a href="{{ $user->twitter }}" target="_blank" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a></li>
                            @endif
                            @if($user->git)
                            <li><a href="{{ $user->git }}" target="_blank" title="My GitLab"><i class="fa fa-git"></i></a></li>
                            @endif
                            @if($user->google)
                            <li><a href="{{ $user->google }}" target="_blank" title="My Google Plus"><i class="fa fa-google-plus"></i></a></li>
                            @endif
                            @if($user->skype)
                            <li><a href="skype:{{ $user->skype }}?call" target="_blank" title="Call me by Skype"><i class="fa fa-skype"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
        
        <div class="clearfix"></div>
        <!-- especiales -->

        <div class="col-md-8">
            <!-- last job -->
            <div class="panel panel-default panelHomeProject">
                <div class="panel-heading"><h3>My last projects</h3></div>
                <div class="panel-body">
                    <div class="rowMasonryHome portfolioList">
                        @foreach($leProject as $project)
                        <a id="title-{{ $project->id }}" href="{{ URL::to('/portfolio/'.str_slug($project->name, '-').'/'.$project->id)}}" title="{{ $project->name }}">
                        <div id="portfolio-{{ $project->id }}" class="panel panelMasonry panel-default eachPortfolio">
                            <div class="panel-image">
                                <img id="minPpal-{{ $project->id }}" src="{{ URL::to('images/portfolio/'.$project->image) }}" class="img-responsive" alt="{{ $project->name }}" />
                            </div>
                            <div class="panel-heading">
                                <h2><a id="title-{{ $project->id }}" href="{{ URL::to('/portfolio/'.str_slug($project->name, '-').'/'.$project->id)}}" title="{{ $project->name }}">{{ $project->name }}</a></h2>
                            </div>
                            <div class="panel-body" id="description-{{ $project->id }}">
                                <?php $leSkills = ''; $count=0;?>
                                    @foreach($project->skills as $lsk)
                                        @if($count < 5)
                                        <?php $leSkills.= $lsk->name.', ';
                                        $count ++; ?>
                                        @endif
                                    @endforeach
                                    <?php $leSkills = substr($leSkills, 0, -2).' and more...';?>
                                    {{ $leSkills }}
                            </div>
                        </div> 
                        </a>                               
                        @endforeach
                    </div>
                </div>
                <div class="panel-footer clearfix">
                    <i class="fa fa-eye fa-2x pull-left btnEyeHide" aria-hidden="true"></i>
                    <a href="{{ URL::to('portfolio') }}" class="btn btn-primary btn-xs pull-right btnEye">See my portfolio <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>
            </div>
            
            <!-- Skills -->
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Skills & competences</h3></div>
                <div class="panel-body">
                    <div class="row SkillsList">
                        @foreach($skills as $skill)
                        <div class="col-xs-6 col-sm-3 col-md-2 eachSkill">
                            <div class="thumbnail home" data-toggle="tooltip" data-placement="bottom" title="{{ $skill->name }}">
                                {!! $skill->image !!}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="panel-footer clearfix">
                    <i class="fa fa-eye fa-2x pull-left btnEyeHide" aria-hidden="true"></i>
                    <a href="{{ URL::to('/skills-competences') }}" class="btn btn-primary btn-xs pull-right btnEye">See my skills <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>
            </div>

        </div>
        <div class="col-md-4">

            <div class="row">
                <!-- FORM WEB -->
                <div class="col-sm-6 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3>Do you want a web project??</h3></div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit blandit nibh, id ultricies quam blandit feugiat. </p>
                            <div class="well center-block">
                                <a href="{{ URL::to('/contact/?op=2') }}" class="btn btn-primary btn-lg btn-block" title="Click to contact me"><i class="fa fa-edit" aria-hidden="true"></i> Start here</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- GET CV -->
                <div class="col-sm-6 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3>Get my CV</h3></div>
                        <div class="panel-body">
                            <p>Curabitur hendrerit blandit nibh, id ultricies quam blandit feugiat. </p>
                            <div class="well center-block">
                                <a href="{{ URL::to('get-my-cv') }}" class="btn btn-primary btn-lg btn-block" title="Click for the next step!"><i class="fa fa-envelope" aria-hidden="true"></i> Start here</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SMS api -->
                <div class="col-sm-6 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3>Send a SMS!!</h3></div>
                        <div class="panel-body">
                            <p>Consectetur adipiscing elit. Curabitur hendrerit blandit nibh, id ultricies quam blandit feugiat. </p>
                            {!! Form::open(array('url' => '/send-sms', 'class' => 'form smsForm', 'id' => 'smsForm')) !!}
                                <div class="form-group">
                                    <label class="sr-only" for="smsInput">Code area</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">+44</div>
                                        <input id="smsInput" name="dnis" type="text" class="form-control" maxlength="12" placeholder="7774 041604">
                                    </div>
                                </div>
                                
                                <div id="smsMessage" class="alert alert-danger" style="display: none">
                                    <strong>Ups!</strong> <span></span>
                                </div>
                                <div id="smsMessageOk" class="alert alert-success" style="display: none">
                                    <strong>Great!</strong> <span></span>
                                    <a id="smsAgain" href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i> Try again</a>
                                </div>

                                <button type="button" id="smsButton" class="btn btn-primary btn-lg btn-block btnStar btnClick"><i class="fa fa-phone" aria-hidden="true"></i> Try a SMS</button>
                            </form>
                            <div class="itdPartner">
                                <p>
                                <a href="{{ URL::to('contact?op=5') }}">Do you need SMS API or SMS Bulk services? <i class="fa fa-chevron-right" aria-hidden="true"></i></a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
    
<!-- FIN CONTAINER-->
</div>
@stop


