@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Deseos</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/deseos') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar todos</a> 
			<a class="btn btn-primary" href="{{ URL::to('backend/deseos/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Crear nuevo</a> 
		</div>
	</div>
	<div class="col-lg-12">
		<hr>
	</div>
	<div class="col-lg-12">
	@if (Session::has('message'))
	    <div class="alert alert-success">{{ Session::get('message') }}</div>
	    
	@endif
	</div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Lista de deseos
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">

                <ul class="nav nav-tabs tabsEventos">
                    <li role="presentation" @if($menuTipo == false) class="active" @endif>
                        <a href="{{ URL::to('backend/deseos') }}">
                        <i class="fa fa-check"></i> Activos</a>
                    </li>
                    <li role="presentation" @if($menuTipo == 'inactivos') class="active" @endif>
                        <a href="{{ URL::to('backend/deseos?op=inactivos') }}">
                        <i class="fa fa-trash"></i> Papelera</a>
                    </li>
                </ul>

                <div class="table-responsive">
                    <table class="dataTablesTabla table table-striped table-bordered table-hover table-condensed dataTable no-footer dtr-inline">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Deseo</th>
                                <th>Precio CL</th>
                                <th>Precio PE</th>
                                <th>Categoría</th>
                                <th>En lista</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($lista as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td>$ {{ number_format($value->price_cl, 0, ',','.') }}</td>
                                <td>S/. {{ number_format($value->price_pe, 0, ',','.') }}</td>
                                <td>{{ $value->categoria->name }}</td>
                                <td>{{ count($value->lista) }}</td>
                                <td>
                                	{{ Form::open(array('url' => 'backend/deseos/' . $value->id , 'id' => 'delete-prod-'.$value->id)) }}
                                	<div aria-label="Large button group" role="group" class="btn-group btn-group-xs">
                                		<a class="btn btn-primary" href="{{ URL::to('backend/deseos/' . $value->id . '/edit') }}">Editar</a>
                                		{{ Form::hidden('_method', 'DELETE') }}
						                @if($value->active == 1)
                                        {{ Form::submit('Papelera', array('class' => 'btn btn-danger btnConfirmar', 'id' => 'prod-'.$value->id )) }}
                                        @endif
                                        @if($value->active == 0)
                                        {{ Form::submit('Activar', array('class' => 'btn btn-success', 'id' => 'prod-'.$value->id )) }}
                                        @endif
                                	</div>
                                	{{ Form::close() }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>

@stop