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
                        <h2><a href="#">Carlos Castillo</a></h2>
                        <h1><a href="#">Web developer</a></h1>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="profile-thumb">
                        <img id="imagen2Profile" src="{{ URL::to('/images/yo2.png') }}" alt="">
                        <img id="imagen1Profile" src="{{ URL::to('/images/yo.png') }}" alt="">
                    </div>
                    
                    <div class="socialInfoContainer">
                        <a href="#" class="fb-user-mail">info@carloscastillo.cl</a>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-git"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
        
        <div class="clearfix"></div>
        <!-- especiales -->

        <div class="col-md-8">
            <!-- last job -->
            <div class="panel panel-default">
                <div class="panel-heading"><h3>My last Job</h3></div>
                <div class="panel-body">
                    <div class="wp-block inverse no-margin">
                        <div class="figure">
                            <img src="{{ URL::to('images/portfolio/1b.jpg') }}" class="img-responsive thumbnail" />
                            <div class="wp-block-info-over left">
                                <h2>
                                    <span class="pull-left">
                                        <a href="#">Name of the project</a>
                                        <span class="label label-primary">Cathegory</span>
                                    </span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <p class="text-help">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit blandit nibh, id ultricies quam blandit feugiat. </p>
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
                            <div class="thumbnail" data-toggle="tooltip" data-placement="bottom" title="{{ $skill->name }}">
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
                        <div class="panel-heading"><h3>Do you want a Web app??</h3></div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit blandit nibh, id ultricies quam blandit feugiat. </p>
                            <div class="well center-block">
                                <button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-edit" aria-hidden="true"></i> Start here</button>
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
                                <a href="{{ URL::to('get-my-cv') }}" class="btn btn-primary btn-lg btn-block"><i class="fa fa-envelope" aria-hidden="true"></i> Start here</a>
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
                            <form id="smsForm" class="form">
                                <div class="form-group">
                                    <label class="sr-only" for="smsInput">Code area</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">+44</div>
                                        <input id="smsInput" type="text" class="form-control" maxlength="12" placeholder="07774 041604">
                                    </div>
                                </div>
                                <div id="recaptchaContainer">
                                    <div class="g-recaptcha" data-theme="light" data-sitekey="jatbC6AXE6iSK4zWDPpkhgYOP" style="transform:scale(0.85);-webkit-transform:scale(0.85);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                                </div>


                                <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-phone" aria-hidden="true"></i> Try a SMS</button>
                            </form>
                            <div class="itdPartner">
                                <img src="{{ URL::to('/images/logoItd.png') }}">
                                <p>My partner in UK. <br />
                                Do you need SMS bulk Services? <br />
                                <a>Read more <i class="fa fa-chevron-right" aria-hidden="true"></i></a>.</p>
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


