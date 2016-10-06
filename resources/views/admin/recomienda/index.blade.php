@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Recomendaciones</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/recomienda') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar todos</a> 
			<a class="btn btn-primary" href="{{ URL::to('backend/recomienda/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Crear nuevo</a> 
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
                Lista de recomendaciones
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <ul class="nav nav-tabs tabsEventos">
                    <li role="presentation" @if($menuTipo == false) class="active" @endif>
                        <a href="{{ URL::to('backend/recomienda') }}">
                        <i class="fa fa-check"></i> Activos</a>
                    </li>
                    <li role="presentation" @if($menuTipo == 'inactivos') class="active" @endif>
                        <a href="{{ URL::to('backend/recomienda?op=inactivos') }}">
                        <i class="fa fa-trash"></i> Papelera</a>
                    </li>
                </ul>


                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Categoría</th>
                                <th>Activo</th>
                                <th>Destacado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($categorias as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->categoria->name }}</td>
                                <td>
                                    @if($value->active)
                                    <i style="color:green" class="fa fa-check-square-o" aria-hidden="true"></i>
                                    @else
                                    <i aria-hidden="true" class="fa fa-minus-square-o" title="Lista inactiva" style="color:#999999"></i>
                                    @endif
                                </td>
                                <td>
                                    @if($value->destacado)
                                    <i style="color:green" class="fa fa-check-square-o" aria-hidden="true"></i>
                                    @else
                                    <i aria-hidden="true" class="fa fa-minus-square-o" title="Lista inactiva" style="color:#999999"></i>
                                    @endif
                                </td>
                                <td>
                                	{{ Form::open(array('url' => 'backend/recomienda/' . $value->id , 'id' => 'delete-prod-'.$value->id)) }}
                                	<div aria-label="Large button group" role="group" class="btn-group btn-group-xs">
                                		<a class="btn btn-primary" href="{{ URL::to('backend/recomienda/' . $value->id . '/edit') }}">Editar</a>
                                        
                                		{{ Form::hidden('_method', 'DELETE') }}
						                @if(!$value->deleted)
                                            {{ Form::submit('Papelera', array('class' => 'btn btn-danger btnConfirmar', 'id' => 'prod-'.$value->id )) }}
                                        @else
                                            {{ Form::submit('Activar', array('class' => 'btn btn-info btnConfirmar', 'id' => 'prod-'.$value->id )) }}
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