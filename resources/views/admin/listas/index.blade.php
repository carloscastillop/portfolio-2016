@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-list"></i> Listas de deseos</h1>
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
	    <div class="alert alert-success"><strong>Wohoooo!</strong> {{ Session::get('message') }}</div>
	    
	@endif

    @if (Session::has('messageError'))
        <div class="alert alert-danger"><strong>Ups!</strong> {{ Session::get('messageError') }}</div>
        
    @endif

	</div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Lista de deseos (Total: {{ count($listas) }})
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <ul class="nav nav-tabs tabsEventos">
                    <li role="presentation" @if($menuTipo == false) class="active" @endif>
                        <a href="{{ URL::to('backend/listas') }}">
                        <i class="fa fa-check"></i> Activos</a>
                    </li>
                    <li role="presentation" @if($menuTipo == 'inactivos') class="active" @endif>
                        <a href="{{ URL::to('backend/listas?op=inactivos') }}">
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
                                <th>País</th>
                                <th>Activa</th>
                                <th>Deseos</th>
                                <th>Compras</th>
                                <th>Finalizada</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($listas as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ Comunes::cambiaf_normal($value->created_at) }}</td>
                                <td>{{ $value->usuarios->nombre_novios }}</td>
                                <td>{{ $value->usuarios->email }}</td>
                                <td>
                                    <img src="{{ URL::to('images/banderas/'.$value->usuarios->pais->flag) }}" align="{{ $value->usuarios->pais->name }}" style="width: 25px; height: auto;">
                                </td>
                                <td>@if($value->active==1)
                                    <a href="{{ URL::to('lista/'.Str::slug($value->usuarios->url_novios)) }}" target="_blank" title="Ver lista" style="color:green">
                                        <i aria-hidden="true" class="fa fa-check-square-o"></i> 
                                    </a>   
                                @else
                                    <i aria-hidden="true" class="fa fa-minus-square-o" title="Lista inactiva" style="color:#999999"></i>
                                @endif</td>
                                <td>
                                <?php $cuenta=0;?>
                                @foreach($value->deseos as $unDeseo)
                                    @if($unDeseo->pivot->active == 1)
                                        <?php $cuenta++ ;?>
                                    @endif
                                @endforeach
                                {{ $cuenta }}
                                </td>
                                <td>{{ count($value->usuarios->compras) }}</td>
                                <td>
                                    @if($value->finalizado == true)
                                        <i aria-hidden="true" class="fa fa-circle" title="{{ Comunes::cambiaf_normal($value->finalizado_at) }}"></i>
                                    @else
                                        <i aria-hidden="true" class="fa fa-minus" title="Lista activa"></i>
                                    @endif
                                </td>
                                <td>
                                	{{ Form::open(array('url' => 'backend/listas/' . $value->id , 'id' => 'delete-prod-'.$value->id, 'class' => '')) }}
                                	<div aria-label="Large button group" role="group" class="btn-group btn-group-xs">
                                		
                                        <a class="btn btn-primary" href="{{ URL::to('backend/listas/' . $value->usuarios->id . '/edit') }}" title="Ver lista del usuario"><i class="fa fa-search"></i></a>

                                        <a class="btn btn-primary" href="{{ URL::to('http://novios.local/backend/compras/usuario/'.$value->usuarios->id) }}" title="Ver regalos del usuario"><i class="fa fa-gift"></i></a>

                                        

                                        <a class="btn btn-primary" href="{{ URL::to('backend/usuarios/' . $value->usuarios->id . '/edit') }}" title="Perfil usuario"><i aria-hidden="true" class="fa fa-user"></i></a>
                                        
                                        <!--
                                        {{ Form::hidden('_method', 'DELETE') }}
                                            @if($value->active==1)
                                              
                                              <button type="submit" id="prod-{{$value->id}}" class="btn btn-danger btnConfirmar" title="Enviar a la papelera"><i aria-hidden="true" class="fa fa-trash"></i></button>
                                            @endif
                                            @if($value->active==0)
                                              {{ Form::submit('Activar', array('class' => 'btn btn-info ', 'id' => 'prod-'.$value->id )) }}
                                            @endif
                                        -->
                                    </div>
                                    {{ Form::close() }}
                                        
                                        
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
                <div class="text-center">
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>

@stop