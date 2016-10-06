@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Editar Kit diseño: {{ $categoria->name }}</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/media') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar todos</a> 
			<a class="btn btn-primary" href="{{ URL::to('backend/media/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Crear nuevo</a> 
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
                Editando <strong>{{ $categoria->name }}</strong>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
            	
                <div class="table-responsive">
                	@if ($errors->any())
                		<div class="col-md-6">
	                		<div role="alert" class="alert alert-success"> <strong>Ups!</strong>
	                    		{{ HTML::ul($errors->all()) }}
	                    	</div>
                    	</div>
                    	<div class="clearfix"></div>
                    @endif

                   
                    {{ Form::model($categoria, array('route' => array('backend.media.update', $categoria->id), 'method' => 'PUT', 'files' => true)) }}
                    	   
                            <div class="form-group col-md-6">
                                <div class="checkbox well">
                                    <label>
                                      <input type="checkbox" value="1" id="activo" name="activo" @if($categoria->active ==true) checked="checked" @endif> 
                                      Contenido activo
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-md-6">
                                {{ Form::label('name', 'Título*') }}
                                {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
                            </div>
                            <div class="clearfix"></div>

                            <div class="form-group col-md-6">
                                {{ Form::label('description', 'Descripción corta*') }}
                                {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
                                <p class="help-text">Máx. 160 caracteres.</p>
                            </div>
                            <div class="clearfix"></div>

                            <div class="form-group col-md-6">
                                <label for="archivo">Archivo</label>
                                <input type="file" id="archivo" name="archivo">
                                <p class="help-block">Tamaño archivo máx. ({{Config::get('settings.maxUploadTxt')}})</p>
                              </div>
                            <div class="clearfix"></div>

					    
						<div class="form-group col-md-6">
					    	{{ Form::submit('Modificar contenido', array('class' => 'btn btn-primary btn-lg')) }}
					    </div>

                    {{ Form::close() }}

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