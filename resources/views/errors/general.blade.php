@extends('default')
@section('content')

<!-- header -->
<div class="page-header error-header">
    <div class="container">
        <h1>Oops, We've hit a snag</h1>
        <ol class="breadcrumb hidden-xs">
            <li><a href="{{ URL::to('/') }}" title="home">Home</a></li>
            <li class="active">Error page</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="error">
        <div class="error-code m-b-10 m-t-20"><i class="fa fa-warning"></i></div>
        <h3 class="font-bold">Well, this is embarrassing. </h3>
        <div class="error-desc">
                Click on the next button to visit our homepage.
                <div class="top20">
                    <a class="btn btn-primary " href="{{ URL::to('/') }}">
                            <i class="fa fa-arrow-left"></i>
                            Homepage                        
                        </a>
                </div>
            </div>
    </div>
<!-- FIN CONTAINER-->
</div>


@stop


