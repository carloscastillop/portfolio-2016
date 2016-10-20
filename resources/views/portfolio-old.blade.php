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
    <h3>Masonry CSS with Bootstrap Panels</h3>
    <p class="">
        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
    </p>

    <div class="row rowMasonry portfolioList">
        <?php 
        $test = array(
                        "400x600.png",
                        "500x300.png",
                        "640x480.png",
                        "800x600.png"
                        );
        ?>
        @for( $i=0; $i < 20 ; $i++)
            <div class="">
                <div id="portfolio-{{ $i }}" class="panel panelMasonry panel-default eachPortfolio">
                    <div class="panel-image">
                        <img src="{{ URL::to('images/'.$test[rand(0, 3)]) }}" class="img-responsive" />
                    </div>
                    <div class="panel-heading">
                        <h2><a href="#" title="Name of the project">Name of the project {{ $i }}</a></h2>
                    </div>
                    <div class="panel-body">Content here.. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    Quisque mauris augue, gravida a libero. </div>
                    <div class="panel-footer">
                    </div>
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


<!-- Modal -->
<div class="modal fade portfolioModal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modalContainer">
        <div class="page-header-2">
            <div class="container">
                <h2 class="pull-left">Project name 001</h2>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">×</button>
            </div>
        </div>
        <div class="container">
            <div class="well">
                <div class="row">
                    <div class="col-md-7">
                        <!-- carousel -->
                        
                        <div class="carousel slide article-slide" id="article-photo-carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner cont-slider">

                                <div class="item active">
                                    <img alt="" title="" src="http://placehold.it/800x1400" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img alt="" title="" src="http://placehold.it/600x400" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img alt="" title="" src="http://placehold.it/600x400" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img alt="" title="" src="http://placehold.it/600x400" class="img-responsive">
                                </div>
                            </div>
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
                                    <img alt="" src="http://placehold.it/250x180">
                                </li>
                                <li class="" data-slide-to="1" data-target="#article-photo-carousel">
                                    <img alt="" src="http://placehold.it/250x180">
                                </li>
                                <li class="" data-slide-to="2" data-target="#article-photo-carousel">
                                    <img alt="" src="http://placehold.it/250x180">
                                </li>
                                <li class="" data-slide-to="3" data-target="#article-photo-carousel">
                                    <img alt="" src="http://placehold.it/250x180">
                                </li>
                            </ol>
                        </div>

                        <!-- Fin carousel -->
                    </div>
                    <div class="col-md-5">
                        <h3>Name: Project name 001</h3>
                        <h4>Client: XXX YYY</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis sagittis urna. Nulla convallis felis at felis ornare, ut fermentum justo euismod. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas et nulla eget tortor pulvinar vestibulum ac ut tortor.</p>
                        <h5>Used technologies</h5>
                        <div class="row SkillsList">
                            @for($i =0 ; $i<10 ; $i++)
                            <div class="col-xs-6 col-sm-3 col-md-2 eachSkill">
                                <div class="thumbnail">
                                    <svg viewBox="0 0 128 128">
                                        <path fill="#B3B3B3" d="M63.81 1.026l-59.257 20.854 9.363 77.637 49.957 27.457 50.214-27.828 9.36-77.635z"></path><path fill="#A6120D" d="M117.536 25.998l-53.864-18.369v112.785l45.141-24.983z"></path><path fill="#DD1B16" d="M11.201 26.329l8.026 69.434 44.444 24.651v-112.787z"></path><path fill="#F2F2F2" d="M78.499 67.67l-14.827 6.934h-15.628l-7.347 18.374-13.663.254 36.638-81.508 14.827 55.946zm-1.434-3.491l-13.295-26.321-10.906 25.868h10.807l13.394.453z"></path><path fill="#B3B3B3" d="M63.671 11.724l.098 26.134 12.375 25.888h-12.446l-.027 10.841 17.209.017 8.042 18.63 13.074.242z"></path>
                                    </svg>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom10">
                <div class="well">
                    <a href="#" class="btn btn-lg btn-block btn-primary" data-dismiss="modal" aria-label="Close">Close</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


