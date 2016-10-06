@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-users"></i> Usuarios</h1>
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
	    <div class="alert alert-success"><strong>Wohoooo!</strong> {{ Session::get('message') }}</div>
	    
	@endif

    @if (Session::has('messageError'))
        <div class="alert alert-danger"><strong>Ups!</strong> {{ Session::get('messageError') }}</div>
        
    @endif

    @if ($errors->any())
        <div role="alert" class="alert alert-danger"> <strong>Ups!</strong>
            {{ HTML::ul($errors->all()) }}
        </div>
        <div class="clearfix"></div>
    @endif

	</div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Lista de usuarios (Total: {{ count($usuarios) }})
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <ul class="nav nav-tabs tabsEventos">
                    <li role="presentation" @if($menuTipo == false) class="active" @endif>
                        <a href="{{ URL::to('backend/usuarios') }}">
                        <i class="fa fa-check"></i> Activos</a>
                    </li>
                    <li role="presentation" @if($menuTipo == 'inactivos') class="active" @endif>
                        <a href="{{ URL::to('backend/usuarios?op=inactivos') }}">
                        <i class="fa fa-trash"></i> Papelera</a>
                    </li>
                </ul>

                <div class="table-responsive">
                    <table class="table dataTablesTabla table-condensed table-striped table-bordered table-hover tabla-comprimida">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Registro</th>
                                <th>Nombre novios</th>
                                <th>Email</th>
                                <th>Móvil</th>
                                <th>País</th>
                                <th>Lista</th>
                                <th>Finalizada</th>
                                <th>Compras</th>
                                <th>Exp.</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($usuarios as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ Comunes::cambiaf_normal($value->created_at) }}</td>
                                <td>{{ $value->nombre_novios }}</td>
                                <td>{{ $value->email }}</td>
                                <td><small>{{ $value->pais->fono }} {{ $value->movil }}</small></td>
                                <td>
                                <span class="hidden">{{ $value->pais->name }}</span>
                                <img src="{{ URL::to('images/banderas/'.$value->pais->flag) }}" alt="{{ $value->pais->name }}" title="{{ $value->pais->name }}" style="width: 25px; height: auto;"></td>
                                <td>@if($value->lista->first()->active==1)
                                    <a href="{{ URL::to('lista/'.Str::slug($value->url_novios)) }}" target="_blank" title="Ver lista" style="color:green">
                                        <i aria-hidden="true" class="fa fa-check-square-o"></i> 
                                    </a>   
                                @else
                                    <i aria-hidden="true" class="fa fa-minus-square-o" title="Lista inactiva" style="color:#999999"></i>
                                @endif
                                </td>
                                <td>
                                    @if($value->lista->first()->finalizado == true)
                                        <i aria-hidden="true" class="fa fa-circle" title="{{ Comunes::cambiaf_normal($value->finalizado_at) }}"></i>
                                    @else
                                        <i aria-hidden="true" class="fa fa-minus" title="Lista activa"></i>
                                    @endif
                                    <span class="hidden">{{ $value->lista->first()->finalizado }}</span>
                                </td>
                                <td>    
                                    @if(isset($totalRegalos[$value->id])) 
                                        {{ $totalRegalos[$value->id] }}
                                    @else 
                                        0
                                    @endif
                                </td>
                                
                                <td>
                                    @if(count($value->experiencia)>0)
                                        <i aria-hidden="true" style="color:green" class="fa fa-check-square-o"></i>
                                        
                                        @if($value->experiencia->show == true)
                                            <i style="color:green" title="Publicado en el sitio" class="fa fa-globe" aria-hidden="true"></i>
                                        @else
                                            <i style="color:red" title="Publicado en el sitio" class="fa fa-globe" aria-hidden="true"></i>
                                        @endif
                                    @else
                                        <i style="color:#999999" title="Lista inactiva" class="fa fa-minus-square-o" aria-hidden="true"></i>
                                    @endif
                                </td>
                                <td>
                                	{{ Form::open(array('url' => 'backend/usuarios/' . $value->id , 'id' => 'delete-prod-'.$value->id, 'class' => '')) }}
                                    <!-- GRUPO -->
                                        <div class="btn-group">
                                          <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Opciones <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="{{ URL::to('backend/usuarios/' . $value->id . '/edit') }}" title="Ver perfil usuario"><i aria-hidden="true" class="fa fa-eye"></i> Ver usuario</a>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li>
                                                <a href="{{ URL::to('/backend/listas/' . $value->id . '/edit') }}" title="Ver lista del usuario"><i aria-hidden="true" class="fa fa-eye"></i> Lista deseos del usuario</a>
                                            </li>
                                            <li>
                                                <a href="{{ URL::to('/backend/compras/usuario/' . $value->id ) }}" title="Ver regalos del usuario"><i aria-hidden="true" class="fa fa-eye"></i> Regalos del usuario</a>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                                @if(count($value->experiencia)==0)
                                                <li>
                                                    <a href="{{ URL::to('/backend/usuarios/enviar-experiencia/' . $value->id ) }}" title="Enviar formulario experiencia"><i aria-hidden="true" class="fa fa-envelope"></i> Enviar formulario exp. ({{$value->experiencias_envio }})</a>

                                                </li>
                                                @elseif(count($value->experiencia)>0)
                                                <li>
                                                    <a id="exp-{{ $value->experiencia->id }}" class="btnVerExperiencia" data-toggle="modal" data-target="#modalExperiencias" title="Ver experiencia del usuario"><i class="fa fa-eye" aria-hidden="true"></i> Ver experiencia</a>
                                                    <input type="hidden" name="expNombre-{{ $value->experiencia->id }}" id="expNombre-{{ $value->experiencia->id }}" value="{{ $value->nombre_novios }}">
                                                    <input type="hidden" name="expEstrellas-{{ $value->experiencia->id }}" id="expEstrellas-{{ $value->experiencia->id }}" value="{{ $value->experiencia->rate }}">
                                                    <input type="hidden" name="expDescription-{{ $value->experiencia->id }}" id="expDescription-{{ $value->experiencia->id }}" value="{{ $value->experiencia->description }}">
                                                </li>
                                                <li>
                                                    <a href="{{ URL::to('/backend/usuarios/onoff-experiencia/' . $value->id ) }}" title="Mostrar experiencia en sitio web"><i class="fa fa-globe" aria-hidden="true"></i> Mostrar/ocultar exp.</a>
                                                </li>
                                                @endif
                                            <li role="separator" class="divider"></li>
                                            <li>{{ Form::hidden('_method', 'DELETE') }}
                                                @if($value->active==1)
                                                  
                                                  <button type="submit" id="prod-{{$value->id}}" class="btn btn-link btnConfirmar" title="Enviar a la papelera"><i aria-hidden="true" class="fa fa-trash"></i> Enviar a papelera</button>
                                                @endif
                                                @if($value->active==0)
                                                  {{ Form::submit('Activar', array('class' => 'btn btn-info ', 'id' => 'prod-'.$value->id )) }}
                                                @endif
                                            </li>
                                          </ul>
                                        </div>
                                    <!-- FIN GRUPO -->
                                    {{ Form::close() }}
                                	</div>
                                	
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
                <div class="text-center">
                    <?php echo $usuarios->links(); ?>
                </div>
                <div class="clearfix"></div>
                
                <div class="modales">  
                    <!-- Modal -->
                    <div class="modal fade" id="modalExperiencias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        {{ Form::open(array('url' => 'backend/usuarios-experiencia', 'id' => 'actualizaExpForm')) }}
                        <input type="hidden" name="experienciaId" id="experienciaId" value="">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modalContactoLabel">Detalles del formulario</h4>
                          </div>
                          <div class="modal-body text-center">
                            
                            <h4 id="expNombre"></h4>
                            <div id="expEstrellas"></div>
                            <div class="desc">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <textarea id="expDescription" rows="10" cols="50" name="expDescription"  placeholder="Tu mensaje aquí" class="form-control"></textarea>
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>
                            

                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          </div>
                        </div>
                        </form>
                      </div>
                    </div>

                </div>

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>

@stop