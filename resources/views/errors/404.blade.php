@extends('default')
@section('content')

<!-- header -->
<div class="page-header error-header">
    <div class="container">
        <h1>404 Not Found</h1>
        <ol class="breadcrumb hidden-xs">
            <li><a href="{{ URL::to('/') }}" title="home">Home</a></li>
            <li class="active">404</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="error">
        <img src="http://i.giphy.com/9Tkx0181SifaE.gif" class="img-responsive thumbnail center-block">
        <div class="error-code m-b-10 m-t-20">404 <i class="fa fa-warning"></i></div>
        <h3 class="font-bold">We couldn't find the page..</h3>
        <div class="error-desc">
                Sorry, but the page you are looking for was either not found or does not exist. <br/>
                Try refreshing the page or click the button below to go back to the Homepage.
                <div class="top20">
                    <a class="btn btn-primary" href="{{ URL::to('/') }}">
                            <i class="fa fa-arrow-left"></i>
                            Homepage                        
                        </a>
                </div>
            </div>
    </div>
<!-- FIN CONTAINER-->
</div>


@stop


