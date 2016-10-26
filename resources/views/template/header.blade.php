<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="{{ URL::to('/') }}" title="home Carlos Castillo portfolio" class="navbar-brand">Carlos Castillo</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li class="{{ (Request::is('/') ? 'active' : '') }}"><a href="{{ URL::to('/') }}" title="home">Home</a></li>
                <li class="{{ (Request::is('portfolio*') ? 'active' : '') }}"><a href="{{ URL::to('/portfolio') }}" title="portfolio of Carlos Castillo">My Portfolio</a></li>
                <li class="{{ (Request::is('skills-competences*') ? 'active' : '') }}"><a href="/skills-competences" title="Skills & Competences of Carlos Castillo">My Skills & Competences</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ (Request::is('contact*') ? 'active' : '') }}"><a href="{{ URL::to('/contact') }}" title="Contact to Carlos Castillo">Contact me</a></li>
            </ul>
        </div>
    </div>
</div>