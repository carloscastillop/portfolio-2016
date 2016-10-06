@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Recomendación</h1>
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

	<div class="crearProducto">

		<div class="col-lg-12">
		@if (Session::has('message'))
		    <div class="alert alert-info">{{ Session::get('message') }}</div>
		    <div role="alert" class="alert alert-danger"> <strong>Ups!</strong>
		    	{{ Session::get('message') }}
		    </div>
		@endif
		</div>
	    <div class="col-lg-12">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                Nueva recomendación
	            </div>
	            <!-- /.panel-heading -->
	            <div class="panel-body">
	                <div class="table-responsive">
	                	@if ($errors->any())
	                		<div class="col-md-6">
		                		<div role="alert" class="alert alert-danger"> <strong>Ups!</strong>
		                    		{{ HTML::ul($errors->all()) }}
		                    	</div>
	                    	</div>
	                    	<div class="clearfix"></div>
	                    @endif

	                    {{ Form::open(array('url' => 'backend/recomienda', 'files' => true)) }}
	                    	<div class="form-group col-md-6">
						        {{ Form::label('name', 'Nombre') }}
						        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
						    </div>

						    <div class="clearfix"></div>

							<div class="form-group col-md-6">
								<?php 
								$catOld ='';
								if(Input::old('categoria')!=null){
									$catOld=Input::old('categoria');
								}

								?>
						        {{ Form::label('categoria', 'Categoría') }}
						        <select name="categoria" class="form-control">
						        	<option value="MM">Seleccionar categoría</option>
						        	@foreach($categorias as $cat)
						        		<option value="{{ $cat->id }}" @if($catOld==$cat->id) selected="selected" @endif>{{ $cat->name }}</option>
						        	@endforeach
						        </select>
						    </div>


						    <div class="clearfix"></div>
							<div class="form-group col-md-6">
						    	{{ Form::label('short_description', 'Descripción corta') }}
						        {{ Form::textarea('short_description', Input::old('short_description'), array('class' => 'form-control')) }}
						        <p><span id="short_descriptionMsg">0/140</span> caracteres máximo.</p>
						    </div>
							<div class="clearfix"></div>


							<div class="form-group col-md-10">
						    	{{ Form::label('description', 'Descripción') }}
						        {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control editorTexto')) }}
						    </div>
							<div class="clearfix"></div>
							
							<div class="form-group col-md-6">
							    <label for="archivo">Imagen</label>
							    <input type="file" id="archivo" name="archivo">
							    <p class="help-block">Óptimo: 850x450px , tamaño archivo máx. ({{Config::get('settings.maxUploadTxt')}})</p>
							  </div>
						    <div class="clearfix"></div>
							
						    
							<div class="form-group col-md-6">
						    	{{ Form::submit('Crear recomendación', array('class' => 'btn btn-primary btn-lg')) }}
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
</div>

@stop