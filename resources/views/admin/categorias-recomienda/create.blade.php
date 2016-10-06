@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Categorías de recomienda</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/categorias-recomienda') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar todos</a> 
			<a class="btn btn-primary" href="{{ URL::to('backend/categorias-recomienda/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Crear nuevo</a> 
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
	                Nueva categoría para recomendaciones
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

	                    {{ Form::open(array('url' => 'backend/categorias-recomienda', 'files' => true)) }}
	                    	<div class="form-group col-md-6">
						        {{ Form::label('name', 'Nombre de la categoría') }}
						        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
						    </div>


						    <div class="clearfix"></div>
							<div class="form-group col-md-6 hidden">
						    	{{ Form::label('description', 'Descripción') }}
						        {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
						    </div>
							<div class="clearfix"></div>
							
						    
							<div class="form-group col-md-6">
						    	{{ Form::submit('Crear categoría', array('class' => 'btn btn-primary btn-lg')) }}
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