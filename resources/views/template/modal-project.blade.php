<!-- Modal -->
<div class="modal fade portfolioModal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modalContainer">
        <div class="page-header-2">
            <div class="container">
                <h2 class="pull-left" id="modal-title">Project name 001</h2>
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
                                    <img id="modal-imgPpal" alt="" title="" src="http://placehold.it/640x480" class="img-responsive">
                                </div>
                                
                            </div>
                            
                        </div>

                        <!-- Fin carousel -->
                    </div>
                    <div class="col-md-5">
                        <h3 id="modal-mini-title">Name: <span>Project name 001</span></h3>
                        <h4 id="modal-client">Client: <span>XXX YYY</span></h4>
                        <hr>
                        <p id="modal-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis sagittis urna. Nulla convallis felis at felis ornare, ut fermentum justo euismod. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas et nulla eget tortor pulvinar vestibulum ac ut tortor.</p>
                        <hr>
                        <h5>Used technologies</h5>
                        <div class="row SkillsList SkillsListModal">
                            @foreach($skills as $skill)
                                <div id="modalEachSkill-{{ $skill->id }}" class="col-xs-6 col-sm-3 col-md-2 eachSkill" style="display:none">
                                    <div id="thumbnail-{{ $skill->id }}" class="thumbnail" data-toggle="tooltip" data-placement="bottom" title="{{ $skill->name }}">
                                        {!! $skill->image !!}
                                    </div>
                                </div>
                                @endforeach
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