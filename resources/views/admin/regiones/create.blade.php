@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Usuarios</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/usuarios') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar todos</a> 
			<a class="btn btn-primary" href="{{ URL::to('backend/usuarios/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Crear nuevo</a> 
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
	                Nuevo usuario
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

	                    {{ Form::open(array('url' => 'backend/usuarios')) }}
	                    	<div class="form-group col-md-6">
						        {{ Form::label('tipo', 'Tipo de usuario') }}
						        <select name="tipo" class="form-control">
						        	<option value="2">Usuario</option>
						        	<option value="1">Admin</option>
						        </select>
						    </div>
						    <div class="clearfix"></div>
	                    	<div class="form-group col-md-6">
						        {{ Form::label('name', 'Nombre del usuario') }}
						        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
						    </div>
						    <div class="clearfix"></div>
						    <div class="form-group col-md-6">
						        {{ Form::label('rut', 'RUT del usuario') }}
						        {{ Form::text('rut', Input::old('rut'), array('class' => 'form-control')) }}
						    </div>

						    <div class="clearfix"></div>
						    <div class="form-group col-md-6">
						        {{ Form::label('movil', 'Móvil del usuario') }}
						        <div class="input-group">
							      <div class="input-group-addon">+56</div>
							      {{ Form::text('movil', Input::old('movil'), array('class' => 'form-control', 'maxlength' => 9)) }}
							    </div>
						    </div>

						    

						    <div class="clearfix"></div>
							<hr>
						    <div class="clearfix"></div>

						    
						    <div class="form-group col-md-6">
						        {{ Form::label('email', 'Email del usuario') }}
						        {{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
						    </div>
						    <div class="clearfix"></div>
						    <div class="form-group col-md-6">
						        {{ Form::label('password', 'Contraseña del usuario') }}
						        <div class="focus">
									<div class="input-group">
										<input type="password" id="password" name="password" class="form-control verPassInput">
										<div class="input-group-addon verPass" title="Ver contraseña"><i class="fa fa-eye"></i></div>
									</div>
								</div>
						    </div>


						   

						    

						    
						    
							<div class="clearfix"></div>
							<hr>
						    <div class="clearfix"></div>

						    
							
							<div class="form-group col-md-6">
						    	{{ Form::submit('Crear usuario', array('class' => 'btn btn-primary btn-lg')) }}
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