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
	                Nuevo deseo
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

	                    {{ Form::open(array('url' => 'backend/deseos', 'files' => true)) }}
	                    	<div class="form-group col-md-6">
						        {{ Form::label('name', 'Nombre del deseo') }}
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

						    <div class="form-group col-md-3">
						        {{ Form::label('price_cl', 'Precio CL') }}
						        <div class="input-group">
	    						<span class="input-group-addon">{{ $chile->simbolo }}</span>
						        	{{ Form::text('price_cl', Input::old('price_cl'), array('class' => 'form-control')) }}
						        </div>
						    </div>

						    <div class="form-group col-md-3">
						        {{ Form::label('price_pe', 'Precio PE') }}
						        <div class="input-group">
	    						<span class="input-group-addon">{{ $peru->simbolo }}</span>
						        	{{ Form::text('price_pe', Input::old('price_pe'), array('class' => 'form-control')) }}
						        </div>
						    </div>

						    

							
						    <div class="clearfix"></div>
							
							<div class="form-group col-md-6">
						    	{{ Form::submit('Crear deseo', array('class' => 'btn btn-primary btn-lg')) }}
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