@extends('default')
@section('content')

<!-- header -->
<div class="page-header">
    <div class="container">
        <h1>Internal Server Error 500</h1>
        <ol class="breadcrumb hidden-xs">
            <li><a href="{{ URL::to('/') }}" title="home">Home</a></li>
            <li class="active">500</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="error">
        <img src="http://i.giphy.com/9Tkx0181SifaE.gif" class="img-responsive thumbnail center-block">
        <div class="error-code m-b-10 m-t-20">500 <i class="fa fa-warning"></i></div>
        <h3 class="font-bold">Internal Server Error</h3>
        <div class="error-desc">
                Sorry, go to homepage.
                <div>
                    <a class="btn btn-primary top20" href="{{ URL::to('/') }}">
                            <i class="fa fa-arrow-left"></i>
                            Homepage                        
                        </a>
                </div>
            </div>
    </div>
<!-- FIN CONTAINER-->
</div>


@stop


