@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Editar [ {{ $user->nombre_novios }} ]</h1>
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
		    <div role="alert" class="alert alert-info"> <strong>ok</strong>
		    	{{ Session::get('message') }}
		    </div>
		@endif
		@if (Session::has('messageError'))
		    <div role="alert" class="alert alert-danger"> <strong>Ups!</strong>
		    	{{ Session::get('messageError') }}
		    </div>
		@endif
		<!-- ALERTAS -->
		@if (Session::has('mensajeOK'))
		    <div class="alert alert-success">
		    	<strong class="lead"><i aria-hidden="true" class="fa fa-hand-peace-o"></i></strong> {{ Session::get('mensajeOK') }}</div>
		@endif	
		@if ($errors->any())
	    <div role="alert" class="alert alert-danger"> <strong>Ups!</strong>
        		{{ HTML::ul($errors->all()) }}
        		
        		<ul>
        		@if($errors->first('pais')== "The selected pais is invalid.")
        		<li>El <strong>Tu país</strong> aparenta ser incompleto o incorrecto.</li>
        		@endif
        		@if($errors->has('movil'))
        		<li>Tu <strong>teléfono móvil</strong> aparenta ser incompleto o incorrecto.</li>
        		@endif
        		@if($errors->first('email')== "The email field is required.")
        		<li>El <strong>email</strong> aparenta ser incompleto o incorrecto.</li>
        		@endif
        		@if($errors->first('email') == 'The email must be a valid email address.')
        		<li>El <strong>email</strong> aparenta ser incompleto o incorrecto.</li>
        		@endif
        		@if($errors->first('email') == "The email has already been taken.")
        		<li>El <strong>email {{ Input::old('email') }}</strong> ya se encuentra registrado.</li>
        		@endif
        		@if($errors->has('password'))
        		<li>La <strong>contrasena</strong> aparenta ser incompleta o incorrecta.</li>
        		@endif
        		@if($errors->has('repassword'))
        		<li><strong>Repetir tu contraseña</strong> aparenta ser incompleta o incorrecta.</li>
        		@endif
        		@if($errors->has('tu_nombre'))
        		<li>Tu <strong>nombre</strong> aparenta ser incompleto o incorrecto.</li>
        		@endif
        		@if($errors->has('tu_apellido'))
        		<li>Tu <strong>apellido</strong> aparenta ser incompleto o incorrecto.</li>
        		@endif
        		@if($errors->has('tu_sexo'))
        		<li>Tu <strong>sexo</strong> aparenta ser incompleto o incorrecto.</li>
        		@endif
        		@if($errors->has('pareja_nombre'))
        		<li>El <strong>nombre de tu pareja</strong> aparenta ser incompleto o incorrecto.</li>
        		@endif
        		@if($errors->has('pareja_apellido'))
        		<li>El <strong>apellido de tu pareja</strong> aparenta ser incompleto o incorrecto.</li>
        		@endif
        		@if($errors->has('pareja_sexo'))
        		<li>Tu <strong>sexo de tu pareja</strong> aparenta ser incompleto o incorrecto.</li>
        		@endif
        		@if($errors->has('evento_fecha'))
        		<li>Tu <strong>fecha del evento</strong> aparenta ser incompleto o incorrecto.</li>
        		@endif
        		@if($errors->has('evento_hora'))
        		<li>La <strong>hora del evento</strong> aparenta ser incompleto o incorrecto.</li>
        		@endif
        		@if($errors->has('evento_direccion'))
        		<li>La <strong>dirección del evento</strong> aparenta ser incompleto o incorrecto.</li>
        		@endif

        		@if($errors->has('banco_nombre'))
        		<li>El <strong>banco</strong> aparenta ser incompleto o incorrecto.</li>
        		@endif
        		@if($errors->has('banco_titular'))
        		<li>El <strong>nombre del titular del banco</strong> aparenta ser incompleto o incorrecto.</li>
        		@endif
        		@if($errors->has('banco_cuenta'))
        		<li>El <strong>número de cuenta</strong> aparenta ser incompleto o incorrecto.</li>
        		@endif
        		@if($errors->has('banco_cedula'))
        		<li>La <strong>cédula de identidad</strong> aparenta ser incompleto o incorrecto.</li>
        		@endif

				@if($errors->has('aceptoTerminos'))
        		<li><strong>Debes aceptar los términos y condiciones</strong> de <strong>{{ Config::get('settings.sitename') }}</strong> para poder registrarte.</li>
        		@endif
        		
        		

        		</ul>
        	</div>
		@endif

		@if (Session::has('message'))
    		<div role="alert" class="alert alert-danger"> <strong>Ups!</strong>
        		{{ Session::get('message') }}
        	</div>
        	<div class="clearfix"></div>
        @endif

		<!-- FIN ALERTAS -->
	</div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Editando <strong>{{ $user->nombre_novios }}</strong>
				
				<div class="pull-right">
					<div aria-label="Large button group" role="group" class="btn-group">
						
                        <a class="btn btn-primary" href="{{ URL::to('/backend/listas/' . $user->id . '/edit') }}" title="Ver lista del usuario"><i class="fa fa-list"></i></a>
                        <a class="btn btn-primary" href="{{ URL::to('/backend/compras/usuario/' . $user->id ) }}" title="Ver regalos del usuario"><i class="fa fa-gift"></i></a>

                        
                        {{ Form::hidden('_method', 'DELETE') }}
                            @if($user->active==1)
		                      
                              <button type="submit" id="prod-{{$user->id}}" class="btn btn-danger btnConfirmar" title="Enviar a la papelera"><i aria-hidden="true" class="fa fa-trash"></i></button>
                            @endif
                            @if($user->active==0)
                              {{ Form::submit('Activar', array('class' => 'btn btn-info ', 'id' => 'prod-'.$user->id )) }}
                            @endif

                	</div>
				</div>

				<div class="clearfix"></div>

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
            	
                <div class="row">
                	<div class="col-md-12">

                	@if ($errors->any())
                		<div class="">
	                		<div role="alert" class="alert alert-danger"> <strong>Ups!</strong>
	                    		{{ HTML::ul($errors->all()) }}
	                    	</div>
                    	</div>
                    	<div class="clearfix"></div>
                    @endif

                   	{{ Form::model($user, array('route' => array('backend.usuarios.update', $user->id), 'method' => 'PUT', 'files' => true, 'id' => 'perfilForm')) }}
						<input type="hidden" name="fondos_page_id" id="fondos_page_id" value="{{ $user->fondos_page_id }}">
						<input type="hidden" name="idUsuario" id="idUsuario" value="{{ $user->id }}">
					<!-- REGISTRO FORM -->
						<div class="">
							
							@if($user->lista()->first()->finalizado)
							<div role="alert" class="alert alert-warning"> <strong>ATENCION!</strong> La lista de deseos de este usuario ha finalizado [fecha: {{ Comunes::cambiaf_normal($user->lista()->first()->finalizado_at) }}] </div>
							@endif

							<div class="well">
								<div class="form-group clearfix">
									<div class="col-md-6">
								    	<label for="pais">Tipo de usuario*</label>
										<select class="form-control input-md" name="niveles">
											@foreach($niveles as $nivel)
												<option value="{{ $nivel->id }}" @if($user->niveles_id == $nivel->id) selected='selected' @endif>
													{{ $nivel->name }}
												</option>
											@endforeach
										</select>
									</div>	
								</div>
							</div>
							
							<section class="registry-top" style="margin-bottom:20px;">
								<div class="card hovercard">
									<div class="cardheader" style='background-image: url("{{  URL::to('/uploads/backgrounds/'.$user->fondo->image) }}");'>

									</div>
									<div class="avatar">
										<div class="row">
											<div class="col-md-6 col-md-offset-3">
												<input type="text" id="nombre_novios" value="{{  $user->nombre_novios }}" name="nombre_novios" placeholder="Sus nombres especiales" class="form-control input-md capitalize" maxlength="50">
											</div>
										</div>
										
										<a href="#" class="cambiaAvatar" data-toggle="modal" data-target="#modalSubirFoto" title="Actualizar foto de perfil">
											<div class="ActualUploadAvatar">
												<?php $laFoto="sin-foto.jpg";
													if($user->image_novios!=null){
														$laFoto = $user->image_novios;
													}?>
												<img id="imageScrPerfilFormA" alt="{{  $user->nombre_novios }}" src="{{ URL::to(Config::get('settings.uploadFolderNovios').$laFoto)}}">
											</div>
											<div class="uploadAvatar" style="display: none">
												<img src="{{ URL::to('/images/upload-avatar.png') }}">
											</div>
										</a>
									</div>
									<div class="info">
										<div class="row">
											<div class="col-md-6 col-md-offset-3">
												<label for="mensaje_novios"><i aria-hidden="true" class="fa fa-edit"></i> Escribe un mensaje para tus invitados</label>
												<textarea id="mensaje_novios" name="mensaje_novios" class="form-control" rows="2" placeholder="Un mensaje bonito para tus invitados...">{{  $user->mensaje_novios }}</textarea>
											</div>								
										</div>
									</div>
									
								</div>
								
							</section>
							
							

							<div class="infoPanel well">
								<div class="row">
									<div class="col-md-6 text-left">
										<h6><i aria-hidden="true" class="fa fa-link"></i> Configura tu URL</h6>
										<div id="url_noviosContainer" class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon hidden-xs">{{ URL::to('/lista/') }}/</div>
												<input type="text" class="form-control" id="url_noviosInput" placeholder="URL novios" name="url_novios" value="{{ Str::slug($user->url_novios) }}">
									      		<div class="input-group-addon hidden-xs getUrlEye">
									      			<a href="{{ URL::to('lista/'.Str::slug($user->url_novios)) }}" class="getUrlEyeLink" target="_blank" title="Ver mi lista como un invitado">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
									      		</div>
									    	</div>
									    	<p id="helpblockrespuesta" class="help-block"><i class="fa fa-cog fa-spin fa-fw margin-bottom"></i></p>
									  	</div>
									</div>
									<div class="col-md-6 text-right">
										<h6><i aria-hidden="true" class="fa fa-photo"></i> Cambiar imagen de fondo</h6>
										<div id="fondoGrupoNovios" class="btn-group" role="group" aria-label="grupo fondos">
											@foreach($fondos as $fondo)
										  	<button id="fondo-{{ $fondo->id }}" type="button" class="btn btn-primary btn-sm btnFondo @if($fondo->id == $user->fondos_page_id) active @endif" attr-image="{{ $fondo->image }}">{{ $fondo->name}}</button>
										  	@endforeach
										</div>
									</div>
								</div>
							</div>


							<!-- MODAL --> 
							<div id="modalSubirFoto" class="modal fade" tabindex="-1" role="dialog">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title">Subir foto</h4>
							      </div>
							      <div class="modal-body">
							        <div class="row">
							        	<div class="col-md-12 text-center">
											<img id="imageScrPerfilForm" class="center" src="{{ URL::to(Config::get('settings.uploadFolderNovios').$laFoto)}}" alt="{{  $user->nombre_novios }}">
											<div class="form-group text-center">
											<p class="help-block helpWarning" style="display: none"><i aria-hidden="true" class="fa fa-warning"></i> Imagen sin guardar <i aria-hidden="true" class="fa fa-warning"></i></p>
											<label for="imageUserProfileForm"><i class="fa fa-file-image-o"></i> Imagen de perfil</label>
											<input type="file" class="text-center center-block" id="imageUserProfileForm" name="image">
											<p class="help-block">Adjunta una imagen de 300x300px</p>
											</div>
										</div>
							        </div>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
							        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
							      </div>
							    </div><!-- /.modal-content -->
							  </div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
							<!-- FIN MODAL -->
							
						</div>

						<div class="clearfix"></div>
						<div class="">
							<div class="registroForm well">	
								<fieldset>
									<legend class="subLegend" style="margin-top: 10px;"><i class="fa fa-money"></i> Comision por transacción</legend>
										<div class="row">
											<div class="form-group clearfix">
												<div class="col-md-6">
													<?php //print_r($user); 
													?>
													<p></p>
													<div class="checkbox">
												    <label>
												      <input type="checkbox" id="miComision" name="miComision" value="1" @if($user->lista->first()->comision_invitados==1) checked="checked" @endif> Deseo que la comisión se aplique al invitado al momento de pagar.
												    </label>
												  </div>
													
									        	</div>
									        </div>
									    </div>

										<!-- DATOS DE LA CUENTA -->
										<legend class="subLegend"><i class="fa fa-envelope"></i> Datos de usuario</legend>
										<div class="row">
											<div class="form-group clearfix">
												<div class="col-md-6">
											    	<label for="pais">País*</label>
													<select class="form-control input-md" name="pais">
														@foreach($paises as $pais)
															<option value="{{ $pais->id }}" paisfono="{{ $pais->fono }}" @if($user->paises_id == $pais->id) selected='selected' @endif>
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
													{{ Form::text('email', Input::old('email'), array('class' => 'form-control input-md minusculas', 'placeholder' => 'nombre@dominio.cl', 'disabled'=>'disabled' )) }}
													<p class="help-block"><i aria-hidden="true" class="fa fa-info-circle"></i> El email no se puede cambiar</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group clearfix">
												<div class="col-md-6">
													<label>Contraseña*</label>
													<div class="input-group">
														<input type="password" class="form-control verPassInput input-md" name="password" id="password" autocomplete="off">
														<div title="Ver contraseña" class="input-group-addon verPass"><i class="fa fa-eye"></i></div>
													</div>
													<p class="help-block">min. 6 caracteres</p>
												</div>
												<div class="col-md-6">
													<label>Repetir Contraseña*</label>
													<input type="password" class="form-control input-md" name="repassword" value="" id="repassword" autocomplete="off">
												</div>
											</div>
										</div>
										
										<hr />

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
														$tu_sexo 	= $user->tu_sexo;
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
														$pareja_sexo 	= $user->pareja_sexo;
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
										
										<hr />

										<!-- DATOS DEL EVENTO -->
										<legend class="subLegend">
											<i class="fa fa-calendar"></i> Datos del evento
										</legend>
										<div class="row">
											<div class="form-group clearfix">
												<div class="col-md-6">
													<?php 
													$evento_fecha = Comunes::cambiaf_normal($user->evento_fecha);
													if(Input::old('evento_fecha') !== null){
														$evento_fecha = Input::old('evento_fecha');
													}
													?>
													{{ Form::label('evento_fecha', 'Fecha*') }}
													{{ Form::text('evento_fecha', $evento_fecha, array('class' => 'form-control input-md fechaFormat', 'placeholder' => 'DD/MM/AAAA' )) }}
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
										
										<hr />

										<!-- DATOS DE LA CUENTA BANCARIA -->
										<legend class="subLegend">
											<i class="fa fa-dollar"></i> Datos de la cuenta bancaria
										</legend>
										@foreach($user->bancos as $banco)
										<div class="row">
											<div class="form-group clearfix">
												<div class="col-md-6">
											    	<label for="banco_nombre">Banco*</label>
											    	<select class="form-control input-md" name="banco_nombre">
														<option value="BB">Selecciona banco</option>
														@foreach($bancos as $bancoList)
														<option value="{{ $bancoList->id }}" @if($bancoList->id == $banco->pivot->banco_id) selected="selected" @endif>{{ $bancoList->name }}</option>
														@endforeach
													</select>
												</div>	
												<div class="col-md-6 banco_tipocuentaContainer">
											    	<label for="banco_tipocuenta">Tipo de cuenta*</label>
													<select class="form-control input-md" name="banco_tipocuenta">
														@foreach($bancos_tipocuentas as $bancos_tipocuenta)
														<option value="{{$bancos_tipocuenta->id}}" @if($bancos_tipocuenta->id == $banco->pivot->banco_tipocuenta) selected="selected" @endif>{{$bancos_tipocuenta->name}}</option>
														@endforeach
													</select>
												</div>
									  		</div>
								  		</div>
								  		<div class="row">
											<div class="form-group clearfix">
												<div class="col-md-12">
													<?php 
														$banco_titular 	= $banco->pivot->banco_titular;
														if(Input::old('banco_titular')!=null){
															$banco_titular= Input::old('banco_titular'); 
														}
													?>
													{{ Form::label('banco_titular', 'Nombre del titular*') }}
													{{ Form::text('banco_titular', $banco_titular, array('class' => 'form-control input-md capitalize', 'placeholder' => 'Nombre completo' )) }}
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group clearfix">
												<div class="col-md-6">
													<?php 
														$banco_cuenta 	= $banco->pivot->banco_cuenta;
														if(Input::old('banco_cuenta')!=null){
															$banco_cuenta= Input::old('banco_cuenta'); 
														}
													?>
													{{ Form::label('banco_cuenta', 'Número de Cuenta*') }}
													{{ Form::text('banco_cuenta', $banco_cuenta, array('class' => 'form-control input-md', 'placeholder' => 'Número de Cuenta' )) }}
												</div>
												<div class="col-md-6">
													<?php 
														$banco_cedula 	= $banco->pivot->banco_cedula;
														if(Input::old('banco_cedula')!=null){
															$banco_cedula= Input::old('banco_cedula'); 
														}
													?>
													{{ Form::label('banco_cedula', 'Cédula de identidad*') }}
													{{ Form::text('banco_cedula', $banco_cedula, array('class' => 'form-control input-md', 'placeholder' => 'Cédula de identidad' )) }}
												</div>
											</div>
										</div>
										
										@endforeach

										<hr />

										<div class="row">
											
											<div class="col-md-12 clearfix">
												{{ Form::submit('Actualizar perfil', array('class' => 'btn btn-3d btn-primary pull-right btn-lg btnStart', 'id' => 'registroFormBtn', 'style' => 'display:none')) }}
											</div>
											<div class="col-md-12">
												<p class="help-text text-right">(*) Campos obligatorios</p>
											</div>
										</div>
										
										
									</fieldset>
								
							</div>
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