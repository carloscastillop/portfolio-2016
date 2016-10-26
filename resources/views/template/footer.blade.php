<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <li class="pull-right hidden-xs"><a href="#top">To top <i class="fa fa-chevron-circle-up" aria-hidden="true"></i></a></li>
                    <li class="{{ (Request::is('/') ? 'active' : '') }}"><a href="{{ URL::to('/') }}" title="home">Home</a></li>
                    <li class="{{ (Request::is('portfolio*') ? 'active' : '') }}"><a href="{{ URL::to('/portfolio') }}" title="Carlos Castillo's portfolio">My Portfolio</a></li>
                    <li class="{{ (Request::is('skills-competences*') ? 'active' : '') }}"><a href="/skills-competences" title="Carlos Castillo's skills & competences">My Skills & Competences</a></li>
                    <li class="{{ (Request::is('skills-competences*') ? 'active' : '') }}"><a href="/get-my-cv" title="Get Carlos Castillo CV">Get my CV</a></li>
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

@if(Request::is('portfolio*'))
<!-- Le portfolio-->
<script src="{{ URL::to('js/jquery.lazyload.js?v=1.9.1') }}"></script>
<script type="text/javascript" charset="utf-8">
    $(function() {
        $("img.lazy").lazyload({
            threshold : 200,
            effect : "fadeIn"
        });
    });
</script>
@endif

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48954490-1', 'auto');
  ga('send', 'pageview');

</script>


</body>
</html>