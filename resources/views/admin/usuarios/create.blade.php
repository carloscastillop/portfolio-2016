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
		    <div role="alert" class="alert alert-danger"> <strong>Ups!</strong>
		    	{{ Session::get('message') }}
		    </div>
		@endif
		@if (Session::has('messageError'))
		    <div role="alert" class="alert alert-danger"> <strong>Ups!</strong>
		    	{{ Session::get('messageError') }}
		    </div>
		@endif
		</div>
	    <div class="col-lg-12">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                <i class="fa fa-user"></i> Nuevo usuario
	            </div>
	            <!-- /.panel-heading -->
	            <div class="panel-body">
                	@if ($errors->any())
                		<div role="alert" class="alert alert-danger"> <strong>Ups!</strong>
                    		{{ HTML::ul($errors->all()) }}
                    	</div>
                    	<div class="clearfix"></div>
                    @endif

                	<div class="registroForm well">
						{{ Form::open(array('url' => 'backend/usuarios', 'id' => 'registroForm', 'class' => 'form')) }}
							<fieldset>
								
								<!-- DATOS DE LA CUENTA -->
								<legend class="subLegend"><i class="fa fa-envelope"></i> Datos de usuario</legend>
								<div class="row">
									<div class="form-group clearfix">
										<div class="col-md-6">
									    	<label for="pais">País*</label>
									    	<?php 
												$paisInput 	= '';
												if(Input::old('pais')!=null){
													$paisInput= Input::old('pais'); 
												}
											?>
											<select class="form-control input-md" name="pais">
												@foreach($paises as $pais)
													<option value="{{ $pais->id }}" paisfono="{{ $pais->fono }}" @if($pais->id == $paisInput) selected="selected" @endif>
														{{ $pais->name }}
													</option>
												@endforeach
											</select>

										</div>	
										<div class="col-md-6">
											<div class="focus">
												{{ Form::label('movil', 'Móvil*') }}
												<div class="input-group">
													<span id="pais_fono" class="input-group-addon">+56</span>
													{{ Form::text('movil', Input::old('movil'), array('class' => 'form-control movilFormat', 'placeholder' => '98888 7777' )) }}
												</div>
											</div>
										</div>	
							  		</div>
						  		</div>
								<div class="row">
									<div class="form-group clearfix">
										<div class="col-md-12">
											{{ Form::label('email', 'Email*') }}
											{{ Form::text('email', Input::old('email'), array('class' => 'form-control input-md minusculas', 'placeholder' => 'nombre@dominio.cl' )) }}
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group clearfix">
										<div class="col-md-6">
											<label>Contraseña*</label>
											<div class="input-group">
												<input type="password" class="form-control verPassInput input-md" name="password" id="password">
												<div title="Ver contraseña" class="input-group-addon verPass"><i class="fa fa-eye"></i></div>
											</div>
											<p class="help-block">min. 6 caracteres</p>
										</div>
										<div class="col-md-6">
											<label>Repetir Contraseña*</label>
											<input type="password" class="form-control input-md" name="repassword" value="" id="repassword">
										</div>
									</div>
								</div>

								<!-- DATOS DE LOS NOVIOS -->
								<legend class="subLegend">
									<i class="fa fa-female"></i><i class="fa fa-heart"></i><i class="fa fa-male"></i> Datos de los novios
								</legend>
								<div class="row">
									<div class="form-group clearfix">
										<div class="col-md-5">
											{{ Form::label('tu_nombre', 'Tu nombre*') }}
											{{ Form::text('tu_nombre', Input::old('tu_nombre'), array('class' => 'form-control input-md capitalize', 'placeholder' => 'Tu nombre' )) }}
										</div>
										<div class="col-md-5">
											{{ Form::label('tu_apellido', 'Tu apellido*') }}
											{{ Form::text('tu_apellido', Input::old('tu_apellido'), array('class' => 'form-control input-md capitalize', 'placeholder' => 'Tu apellido' )) }}
										</div>
										<div class="col-md-2">
											<label for='tu_sexo'>Tu sexo*</label>
											<?php 
												$tu_sexo 	= '';
												if(Input::old('tu_sexo')!=null){
													$tu_sexo= Input::old('tu_sexo'); 
												}
											?>
											<select class="form-control input-md" name="tu_sexo">
												<option value="F" @if($tu_sexo=='F') selected='selected' @endif>F</option>
												<option value="M" @if($tu_sexo=='M') selected='selected' @endif>M</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group clearfix">
										<div class="col-md-5">
											{{ Form::label('pareja_nombre', 'Nombre de tu pareja*') }}
											{{ Form::text('pareja_nombre', Input::old('pareja_nombre'), array('class' => 'form-control input-md capitalize', 'placeholder' => 'Nombre de tu pareja' )) }}
										</div>
										<div class="col-md-5">
											{{ Form::label('pareja_apellido', 'Apellido de tu pareja*') }}
											{{ Form::text('pareja_apellido', Input::old('pareja_apellido'), array('class' => 'form-control input-md capitalize', 'placeholder' => 'Apellido de tu pareja' )) }}
										</div>
										<div class="col-md-2">
											<label for='pareja_sexo'>Su sexo*</label>
											<?php 
												$pareja_sexo 	= '';
												if(Input::old('pareja_sexo')!=null){
													$pareja_sexo= Input::old('pareja_sexo'); 
												}
											?>
											<select class="form-control input-md" name="pareja_sexo">
												<option value="F" @if($pareja_sexo=='F') selected='selected' @endif>F</option>
												<option value="M" @if($pareja_sexo=='M') selected='selected' @endif>M</option>
											</select>
										</div>
									</div>
								</div>

								<!-- DATOS DEL EVENTO -->
								<legend class="subLegend">
									<i class="fa fa-calendar"></i> Datos del evento
								</legend>
								<div class="row">
									<div class="form-group clearfix">
										<div class="col-md-6">
											{{ Form::label('evento_fecha', 'Fecha*') }}
											{{ Form::text('evento_fecha', Input::old('evento_fecha'), array('class' => 'form-control input-md fechaFormat', 'placeholder' => 'DD/MM/AAAA' )) }}
											<p class="help-block"><span id="miEdad">dd/mm/aaaa</span></p>
										</div>
										<div class="col-md-6">
											{{ Form::label('evento_hora', 'Hora (24hrs)') }}
											<div class="input-group">
											{{ Form::text('evento_hora', Input::old('evento_hora'), array('class' => 'form-control input-md horaFormat', 'placeholder' => '18:00' )) }}
											    <div class="input-group-addon">hrs.</div>
											</div>
											<p class="help-block"><span id="miHora">ej: 17:00</span></p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group clearfix">
										<div class="col-md-12">
											{{ Form::label('evento_direccion', 'Dirección*') }}
											{{ Form::text('evento_direccion', Input::old('evento_direccion'), array('class' => 'form-control input-md', 'placeholder' => 'Avenida, número, parcela, etc.' )) }}
										</div>
									</div>
								</div>
								
								<!-- DATOS DE LA CUENTA BANCARIA -->
								<legend class="subLegend">
									<i class="fa fa-bank"></i> Datos de la cuenta bancaria
								</legend>
								<div class="row">
									<div class="form-group clearfix">
										<div class="col-md-6">
									    	<label for="banco_nombre">Banco*</label>
									    	<select class="form-control input-md" name="banco_nombre">
												<option value="BB">Selecciona banco</option>
											</select>
										</div>	
										<div class="col-md-6 banco_tipocuentaContainer">
									    	<label for="banco_tipocuenta">Tipo de cuenta*</label>
											<select class="form-control input-md" name="banco_tipocuenta">
												@foreach($bancos_tipocuentas as $bancos_tipocuenta)
												<option value="{{$bancos_tipocuenta->id}}">{{$bancos_tipocuenta->name}}</option>
												@endforeach
											</select>
										</div>	
							  		</div>
						  		</div>
						  		<div class="row">
									<div class="form-group clearfix">
										<div class="col-md-12">

											{{ Form::label('banco_titular', 'Nombre del titular*') }}
											{{ Form::text('banco_titular', Input::old('banco_titular'), array('class' => 'form-control input-md capitalize', 'placeholder' => 'Nombre completo' )) }}
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group clearfix">
										<div class="col-md-6">
											{{ Form::label('banco_cuenta', 'Número de Cuenta*') }}
											{{ Form::text('banco_cuenta', Input::old('banco_cuenta'), array('class' => 'form-control input-md', 'placeholder' => 'Número de Cuenta' )) }}
										</div>
										<div class="col-md-6">
											{{ Form::label('banco_cedula', 'Cédula de identidad*') }}
											{{ Form::text('banco_cedula', Input::old('banco_cedula'), array('class' => 'form-control input-md', 'placeholder' => 'Cédula de identidad' )) }}
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">
										<hr>
									</div>
								
									<div class="col-md-12">

										{{ Form::submit('Registrar usuario', array('class' => 'btn btn-3d btn-primary pull-right btn-lg btnStart', 'id' => 'registroFormBtn', 'style' => 'display:none')) }}
									</div>
									<div class="col-md-12">
										<p class="help-text text-right">(*) Campos obligatorios</p>
									</div>
								</div>
								
								
							</fieldset>
						{{ Form::close() }}
					</div>

	            </div>
	            <!-- /.panel-body -->
	        </div>
	        <!-- /.panel -->
	    </div>
	    <!-- /.col-lg-6 -->
	</div>
</div>

@stop