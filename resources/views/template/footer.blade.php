<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <li class="pull-right hidden-xs"><a href="#top">To top <i class="fa fa-chevron-circle-up" aria-hidden="true"></i></a></li>
                    <li class="{{ (Request::is('/') ? 'active' : '') }}"><a href="{{ URL::to('/') }}" title="home">Home</a></li>
                    <li class="{{ (Request::is('portfolio*') ? 'active' : '') }}"><a href="{{ URL::to('/portfolio') }}" title="portfolio of Carlos Castillo">Portfolio</a></li>
                    <li class="{{ (Request::is('skills-competences*') ? 'active' : '') }}"><a href="/skills-competences" title="Skills & Competences of Carlos Castillo">Skills & Competences</a></li>
                    <li class="{{ (Request::is('contact*') ? 'active' : '') }}"><a href="{{ URL::to('/contact') }}" title="Contact to Carlos Castillo">Contact me</a></li>
                </ul>
                <p>Made by <a href="{{ URL::to('/') }}" title="{{ Config::get('settings.sitename') }}">Carlos Castillo</a>.</p>
                <p>Based on <a href="https://laravel.com" rel="nofollow">Laravel 5</a>, <a href="http://getbootstrap.com" rel="nofollow">Bootstrap 3</a>, <a href="https://jquery.com/JQuery" rel="nofollow">JQuery</a> and <a href="http://bootswatch.com/" rel="nofollow">Bootswatch</a>. Icons from <a href="http://fortawesome.github.io/Font-Awesome/" rel="nofollow">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts" rel="nofollow">Google</a>.</p>
                
                <div class="well center-block top20 hidden-lg hidden-md hidden-sm"> 
                    <a href="#top" class="btn btn-primary btn-md btn-block"><i class="fa fa-chevron-up" aria-hidden="true"></i> To top</a>
                </div>
                <?php $debug = config('app.debug'); ?>
                @if( $debug == 1 )
                <div class="colorPalette">
                    <img src="{{ URL::to('/images/colors.png') }}" alt="Color palette" style="width:100px;">
                </div>
                @endif
            </div>
        </div>
    </div>
</footer>
<div class="modal-load"></div>
<div class="modal-menu-mobile"></div>

<!-- Le Javascript-->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::to('js/custom.js') }}"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="{{ URL::to('js/fancybox/source/jquery.fancybox.css?v=2.1.5') }}" type="text/css" media="screen" />
<script type="text/javascript" src="{{ URL::to('js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5') }}"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
@if(Request::is('portfolio*'))
<!-- Le portfolio-->
    <script>
        
    </script>
@endif


</body>
</html>