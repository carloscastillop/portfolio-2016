@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Editar [ {{ $user->name }} ]</h1>
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
	<div class="col-lg-12">

	@if (Session::has('message'))
	    <div class="alert alert-success">{{ Session::get('message') }}</div>

	@endif
	</div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Editando <strong>{{ $user->name }}</strong>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
            	
                <div class="table-responsive">
                	<div class="col-md-6">

                	@if ($errors->any())
                		<div class="">
	                		<div role="alert" class="alert alert-danger"> <strong>Ups!</strong>
	                    		{{ HTML::ul($errors->all()) }}
	                    	</div>
                    	</div>
                    	<div class="clearfix"></div>
                    @endif

                   
                    {{ Form::model($user, array('route' => array('backend.usuarios.update', $user->id), 'method' => 'PUT', 'files' => true)) }}
                    	
                    	<div class="form-group">
					        {{ Form::label('tipo', 'Tipo de usuario') }}
					        <select name="tipo" class="form-control">
					        	<option value="2" @if($user->level == 2) selected="selected" @endif>Usuario</option>
					        	<option value="1" @if($user->level == 1) selected="selected" @endif>Admin</option>
					        </select>
					    </div>
					    <div class="clearfix"></div>

                    	<div class="form-group">
					        {{ Form::label('name', 'Nombre del usuario') }}
					        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
					    </div>
						
						<div class="clearfix"></div>

				     	<div class="form-group">
					        {{ Form::label('rut', 'RUT del usuario') }}
						        {{ Form::text('rut', Input::old('rut'), array('class' => 'form-control')) }}
					    </div>

					    <div class="clearfix"></div>

					    <div class="form-group">
					        {{ Form::label('movil', 'Móvil del usuario') }}
					        <div class="input-group">
						      <div class="input-group-addon">+56</div>
						      {{ Form::text('movil', Input::old('movil'), array('class' => 'form-control' , 'maxlength' => 9)) }}
						    </div>
					    </div>

					    

					    <div class="clearfix"></div>
					    <hr>
					    <div class="clearfix"></div>

					    <div class="form-group">
					        {{ Form::label('email', 'Email del usuario') }}
					        {{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'disabled' => 'disabled')) }}
					    </div>
					    <div class="clearfix"></div>
					    <div class="form-group">
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

					    <div class="form-group">
					        <div class="checkbox">
							    <label>
							      <input type="checkbox" name="active" id="active" value="1" @if($user->active == 1)checked @endif> Activo 
							    </label>
							</div>
					    </div>


					    <div class="clearfix"></div>
					    <hr>
					    <div class="clearfix"></div>

					    
						
						<div class="form-group">
					    	{{ Form::submit('Modificar usuario', array('class' => 'btn btn-primary btn-lg')) }}
					    </div>

                    {{ Form::close() }}

                	</div>

                	

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