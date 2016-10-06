@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Marcas de productos</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/marcas-productos') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar todos</a> 
			<a class="btn btn-primary" href="{{ URL::to('backend/marcas-productos/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Crear nuevo</a> 
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
                Lista de marcas de productos
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Marca</th>
                                <th></th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($marcas as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td></td>
                                <td>
                                	{{ Form::open(array('url' => 'backend/marcas-productos/' . $value->id , 'id' => 'delete-prod-'.$value->id)) }}
                                	<div aria-label="Large button group" role="group" class="btn-group btn-group-xs">
                                		<a class="btn btn-primary" href="{{ URL::to('backend/marcas-productos/' . $value->id . '/edit') }}">Editar</a>
                                		{{ Form::hidden('_method', 'DELETE') }}
						                {{ Form::submit('Eliminar', array('class' => 'btn btn-danger btnConfirmar', 'id' => 'prod-'.$value->id )) }}
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