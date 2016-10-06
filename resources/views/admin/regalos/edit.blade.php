@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Editar lista de  [ {{ $user->nombre_novios }} ]</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/listas') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar todos</a> 
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
                Editando Lista <strong>{{ $user->nombre_novios }}</strong>
				
				<div class="pull-right">
					<div aria-label="Large button group" role="group" class="btn-group">
                		<a class="btn btn-primary" href="{{ URL::to('backend/usuarios/' . $user->id . '/edit') }}" title="Perfil usuario"><i aria-hidden="true" class="fa fa-user"></i></a>
                        <a class="btn btn-primary" href="{{ URL::to('backend/usuarios/' . $user->id . '/edit') }}" title="Ver regalos del usuario"><i class="fa fa-gift"></i></a>

                        <!--
                        {{ Form::hidden('_method', 'DELETE') }}
                            @if($user->active==1)
		                      
                              <button type="submit" id="prod-{{$user->id}}" class="btn btn-danger btnConfirmar" title="Enviar a la papelera"><i aria-hidden="true" class="fa fa-trash"></i></button>
                            @endif
                            @if($user->active==0)
                              {{ Form::submit('Activar', array('class' => 'btn btn-info ', 'id' => 'prod-'.$user->id )) }}
                            @endif
						-->
                	</div>
				</div>

				<div class="clearfix"></div>

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body miListaContainer">
            	
				<input type="hidden" id="idUsuario" name="idUsuario" value="{{ $user->id }}">


            	<!-- comienzo de mi lista -->
            	<div class="deseoPersonalizado bottom-20">
					<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDeseoPersonalizado">
						<i class="fa fa-heart"></i> <i class="fa fa-plus"></i> Crear tu propio deseo
					</a>
				</div>

				<!-- MODAL CREAR DESEO -->
				<div id="modalDeseoPersonalizado" class="modal fade" tabindex="-1" role="dialog">
				  	{{ Form::open(array('url' => '/usuario/mi-deseo-usuario', 'files' => false)) }}
				  	<input type="hidden" id="idUsuarioDeseo" name="idUsuarioDeseo" value="{{ $user->id }}">
				  	<div class="modal-dialog">
				    	<div class="modal-content">
				      		<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        	<h4 class="modal-title">Crear un deseo propio</h4>
				      		</div>
					      	<div class="modal-body">
					      		<div class="row">
					      			<div class="form-group col-md-8">
					      				{{ Form::label('name', 'Nombre del deseo') }}
							        	{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
					      			</div>
					      		
									<div class="form-group col-md-4">
								        {{ Form::label('price', 'Precio') }}
								        <div class="input-group">
				    						<span class="input-group-addon">{{Auth::user()->pais->simbolo}}</span>
									        {{ Form::text('price', Input::old('price'), array('class' => 'form-control')) }}
								        </div>
								    </div>
							    </div>
							</div>
						
					      	<div class="modal-footer">
					        	<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
						        <button type="submit" class="btn btn-primary btnStart" style="display:none"><i class="fa fa-heart"></i> Guardar</button>
					   	   	</div>
				    	</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
					{{ Form::close() }}
				</div><!-- /.modal -->
				<!-- FIN MODAL CRAR DESEO-->

				<!-- MODAL EDITAR DESEO -->
				<div id="modalDeseoPersonalizadoEditar" class="modal fade" tabindex="-1" role="dialog">
				  	{{ Form::open(array('url' => 'usuario/mi-deseo-edit-usuario', 'files' => false, 'id' => 'editarDeseoForm') ) }}
				  	<input type="hidden" name="id" id="id-deseo" value="">
				  	<input type="hidden" name="idUsuarioEdit" id="idUsuarioEdit" value="{{ $user->id }}">
				  	<div class="modal-dialog">
				    	<div class="modal-content">
				      		<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        	<h4 class="modal-title">Editar deseo propio</h4>
				      		</div>
					      	<div class="modal-body">
					      		<div class="row">
					      			<div class="form-group col-md-8">
					      				{{ Form::label('name', 'Nombre del deseo') }}
							        	{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
					      			</div>
					      		
									<div class="form-group col-md-4">
								        {{ Form::label('price', 'Precio') }}
								        <div class="input-group">
				    						<span class="input-group-addon">{{Auth::user()->pais->simbolo}}</span>
									        {{ Form::text('price', Input::old('price'), array('class' => 'form-control')) }}
								        </div>
								    </div>
							    </div>
							</div>
						
					      	<div class="modal-footer">
					        	<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
						        <a href="#" id="btnDeseoPersonalizadoEditar" class="btn btn-primary"><i class="fa fa-heart"></i> Actualizar</a>
					   	   	</div>
				    	</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
					{{ Form::close() }}
				</div><!-- /.modal -->
				<!-- FIN MODAL EDITAR DESEO -->

				<div class="listaRegalosTabla shop">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs bottom-10" role="tablist">
						<?php $catActivaName=''; ?>
						@foreach($categorias as $cat)
						<li role="presentation" @if($catActiva == $cat->id) class="active" <?php $catActivaName = $cat->name; ?> @endif>
							
							<a href="{{ URL::to('backend/listas/'.$user->id.'/edit?cat='.$cat->id) }}">
								{{ $cat->name }}
							</a>
						</li>
						@endforeach
						<li role="presentation" @if($catActiva == 'propios') class="active" <?php $catActivaName = "Mis deseos"; ?> @endif>
							
							<a href="{{ URL::to('backend/listas/'.$user->id.'/edit?op=propios') }}">
								Mis deseos
							</a>
						</li>
					</ul>
					
					<div class="tab-content">
	    				<div role="tabpanel" class="tab-pane active" id="home">
							<div class="panelTop">
								<div class="row">
									<div class="col-md-6">
										@if(Input::get('papelera')==1)
										<h4 class="bottom-20"><i aria-hidden="true" class="fa fa-trash"></i> Mi papelera</h4>
										@else
										<div class="agregarTodosCheckboxContainer bottom-20">
											<div class="checkbox">
											    <label>
											      <input id="agregarTodos-{{$catActiva}}" type="checkbox" class="agregarTodosCheckbox"> Agregar/quitar todos en <strong>{{ $catActivaName }}</strong>
											    </label>
											</div>
										</div>
					                    @endif	
									</div>
									<div class="col-md-6 text-right">
										@if(Input::get('papelera')==1)
										<a href="{{ URL::to('backend/listas/'.$user->id.'/edit?op=propios')}}" class="btn btn-primary btn-sm"><i aria-hidden="true" class="fa fa-chevron-left"></i> Volver a mis deseos activos</a>
										@else
										<a href="{{ URL::to('backend/listas/'.$user->id.'/edit?op=propios&papelera=1')}}" class="btn btn-danger btn-sm"><i aria-hidden="true" class="fa fa-trash"></i> ver Papelera</a>
										@endif
									</div>
								</div>	
							</div>
							<div class="table-responsive">
								<table class="table table-bordered dataTablesTabla @if($esPapelera ==1) esPapelera @endif  @if($catActivaName == "Mis deseos") tablaMisDeseos @endif">
									<thead>
								        <tr>
								          <td class="deseothcheck"><i class="fa fa-list"></i> mi lista</td>
								          <td class="deseothDeseo"><i class="fa fa-heart"></i> Deseo</td>
								          <td class="deseothRegalado"><i class="fa fa-gift"></i> Regalado</td>
								          <td class="deseothpriceUser"><i class="fa fa-money"></i> Precio</td>
								        </tr>
									</thead>
									<tbody>
										
										@foreach($deseos as $deseo)
											
										<?php
										  $esta= false;
										  $esta = DeseoController::enMiLista($miLista->deseos, $deseo->id);	
									      $precio = 0; 
									      if($user->pais->sigla == 'CL'){
									      	$precio=$deseo->price_cl;
									      }
									      if($user->pais->sigla == 'PE'){
									      	$precio=$deseo->price_pe;
									      }
									      if($deseo->privado == 1){
									      	$precio=$deseo->price;
									      }
									      if(isset($esta['price']) > 0){
									      	$precio = $esta['price'];
									      }
									      ?>

										<tr id="tr-{{$deseo->id}}">
											<td>
												<div class="btnMiListaContainer">
													<div class="checkbox">
													    <label>
													      <input id="deseo-{{$deseo->id}}" class="miListaCheckbox" type="checkbox" data-off-title="Eliminar de mi lista" data-on-title="Agregar a mi lista" value="1" 
													@if($esta) checked="checked" @endif >
													    </label>
													  </div>
								        			
								        			
								        		</div>
								        		<span class="hidden">@if($esta) 0 @else 1 @endif</span>
											</td>
								        	<td>
								        		<h6 class="deseoNombre">
								        			
								        			@if( ($deseo->user_id == $user->id) && $deseo->privado==1 && $deseo->active==1 )
								        				<a id="deseoProp-{{ $deseo->id }}" href="#" title="Editar deseo propio" data-toggle="modal" data-target="#modalDeseoPersonalizadoEditar" data-nombre="{{ $deseo->name }}" data-precio="{{ number_format($precio, 0, ',','') }}" data-id="{{ $deseo->id }}">
								        				<i class="fa fa-edit" aria-hidden="true"></i> {{ $deseo->name }}
								        				</a>
								        			@else
								        			{{ $deseo->name }}
								        			@endif
								        		</h6>
								        	</td>
								        	<td>
								        		<span class="vecesRegalado">
								        			<?php 
								        				if(isset($deseosComprados[$deseo->id]) ){
								        					echo $deseosComprados[$deseo->id];
								        				}else{
								        					echo '0';
								        				}
								        			?>
								        		</span>
								        	</td>
										  	<td >
												<div class="focus focusPrecio">
													<span class="hidden">{{ $precio }}</span>
													<div class="input-group">
												      <div class="input-group-addon">{{$user->pais->simbolo}}</div>
												      
												      <input type="text" class="form-control input-md deseoPriceInput" placeholder="0" maxlength="7" name="precio" id="deseo-price-{{$deseo->id}}" value="{{ number_format($precio, 0, ',','.') }}">
												    </div>
												</div>
										  	</td>
										</tr>
										@endforeach

										@if(count($deseos) == 0)
											<tr class="warning"> <th scope="row" colspan="4">No hay nada por aquí</th></tr>
										@endif
									
									</tbody>
								</table>
							</div>
						</div>

					</div>
				</div>






                <!-- FIN mi lista -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>
@stop