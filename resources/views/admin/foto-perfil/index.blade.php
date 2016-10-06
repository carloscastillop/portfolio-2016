@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Foto perfil/lista usuarios</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/foto-perfil') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar todos</a>  
            <a class="btn btn-primary" href="{{ URL::to('backend/foto-perfil/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Crear nuevo</a>
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
                Lista de fotos para el perfil (sección mi lista, random)
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Foto</th>
                                <th>Activo</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($categorias as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td><img src="{{ URL::to(Config::get('settings.uploadFolderPerfilBackground').'/'.$value->image) }}" class="img-responsive thumbnail" style="max-width:150px"></td>
                                <td>
                                    @if($value->active) 
                                        <i aria-hidden="true" class="fa fa-check"></i> 
                                    @else
                                        <i aria-hidden="true" class="fa fa-minus"></i>
                                    @endif
                                </td>
                                <td>
                                	{{ Form::open(array('url' => 'backend/foto-perfil/' . $value->id , 'id' => 'delete-prod-'.$value->id)) }}
                                	<div aria-label="Large button group" role="group" class="btn-group btn-group-xs">
                                		<a class="btn btn-primary" href="{{ URL::to('backend/foto-perfil/' . $value->id . '/edit') }}">Editar</a>
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Papelera', array('class' => 'btn btn-danger btnConfirmar', 'id' => 'prod-'.$value->id )) }}
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