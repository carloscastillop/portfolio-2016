<!-- Modal -->
<div class="modal fade portfolioModal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modalContainer">
        <div class="page-header-2">
            <div class="container">
                <button type="button" class="close pull-right hidden-xs" data-dismiss="modal" aria-label="Close">×</button>
                <h2 class="pull-left" id="modal-title">Project name 001</h2>
                
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
                                    <a class="fancybox" id="modal-fancy" href="http://placehold.it/640x480">
                                        <img id="modal-imgPpal" alt="" title="" src="http://placehold.it/640x480" class="img-responsive thumbnail">
                                    </a>
                                </div>
                                
                            </div>
                            
                        </div>

                        <!-- Fin carousel -->
                    </div>
                    <div class="col-md-5">
                        <small>Name:</small>
                        <h3 id="modal-mini-title">Project name 001</h3>
                        <small>Client:</small>
                        <h4 id="modal-client">My client</h4>
                        <hr>
                        <p id="modal-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis sagittis urna. Nulla convallis felis at felis ornare, ut fermentum justo euismod. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas et nulla eget tortor pulvinar vestibulum ac ut tortor.</p>
                        <div class="text-center">
                            <div class="hasLink" style="display: none">
                                <a id="modal-link" href="" class="btn btn-lg btn-primary" title="visit" target="_blank">Visit project <i class="fa fa-external-link" aria-hidden="true"></i></a>
                            </div>
                            <div class="noLink" style="display: none">
                                <button type="button" class="btn btn-default btn-lg" disabled="disabled"><i class="fa fa-chain-broken" aria-hidden="true"></i> Sorry, link not available</button>
                            </div>
                            
                        </div>
                        <hr>
                        <h5>Used technologies</h5>
                        <div class="row SkillsList SkillsListModal">
                            @foreach($skills as $skill)
                                <div id="modalEachSkill-{{ $skill->id }}" class="col-xs-4 col-sm-3 col-md-2 eachSkill" style="display:none">
                                    <div id="thumbnail-{{ $skill->id }}" class="thumbnail" data-toggle="tooltip" data-placement="bottom" title="{{ $skill->name }}">
                                        {!! $skill->image !!}
                                    </div>
                                </div>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom50">
                <div class="well">
                    <a href="#" class="btn btn-lg btn-block btn-primary" data-dismiss="modal" aria-label="Close"><i class="fa fa-close" aria-hidden="true"></i> Close</a>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>