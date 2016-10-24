@extends('admin.default')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">System log</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Last logs
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">

                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#web" aria-controls="home" role="tab" data-toggle="tab">Web console</a></li>
                    
                </ul>

                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="web">
                        <h4>Web</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 75px;">#</th>
                                        <th style="width: 150px;">Date</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($logs as $key => $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->created_at }}</td>
                                        <td><small>{!! $value->description !!}</small></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>    
                    
                   
                </div>

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>

@stop