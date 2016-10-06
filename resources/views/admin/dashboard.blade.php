@extends('admin.default')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Log sistema</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Lista ultimos Logs
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">

                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#web" aria-controls="home" role="tab" data-toggle="tab">Consola web</a></li>
                    
                </ul>

                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="web">
                        <h4>Web</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 75px;">#</th>
                                        <th style="width: 150px;">Fecha</th>
                                        <th>Descripción</th>
                                        <th>User</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($log as $key => $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ Comunes::cambiaf_normal_hora($value->created_at) }}</td>
                                        <td><small>{{ $value->description }}</small></td>
                                        <td>{{ $value->user_id }}</td>
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