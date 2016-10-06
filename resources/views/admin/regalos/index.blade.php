@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-gift"></i> {{ $estadoTitulo }}</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/compras') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar todos</a> 
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
                Lista de regalos (Total: {{ count($compras) }})
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <ul class="nav nav-tabs tabsEventos">
                    <li role="presentation" @if($estado == 3) class="active" @endif>
                        <a href="{{ URL::to('backend/compras') }}">
                        <i class="fa fa-check"></i> Compras realizadas</a>
                    </li>
                    <li role="presentation" @if($estado == 2) class="active" @endif>
                        <a href="{{ URL::to('backend/compras?op=en-proceso') }}">
                        En proceso de pago</a>
                    </li>
                    <li role="presentation" @if($estado == 5) class="active" @endif>
                        <a href="{{ URL::to('backend/compras?op=pendientes') }}">
                        Pendientes</a>
                    </li>
                    <li role="presentation" @if($estado == 4) class="active" @endif>
                        <a href="{{ URL::to('backend/compras?op=rechazadas') }}">
                        Rechazadas</a>
                    </li>
                    <li role="presentation" @if($estado == 6) class="active" @endif>
                        <a href="{{ URL::to('backend/compras?op=canceladas') }}">
                        Canceladas</a>
                    </li>
                </ul>

                <div class="table-responsive">
                    <table class="table dataTablesTabla table-condensed table-striped table-bordered table-hover tabla-comprimida">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Código</th>
                                <th>Registro</th>
                                <th>Nombre novios</th>
                                <th>País</th>
                                <th>Quien regala</th>
                                <th>Deseos</th>
                                <th>Total</th>
                                <th>Comisión</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($compras as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->codigo }}</td>
                                <td>{{ Comunes::cambiaf_normal($value->created_at) }}</td>
                                <td>{{ $value->usuario->nombre_novios }}</td>
                                
                                <td>
                                    <img src="{{ URL::to('images/banderas/'.$value->usuario->pais->flag) }}" align="{{ $value->usuario->pais->name }}" style="width: 25px; height: auto;">
                                </td>
                                <td>{{ $value->nombre }}</td>
                                <td>
                                    <?php $listaDeseos =0; ?>
                                    @foreach( $value->deseos as $deseo)
                                        <?php $listaDeseos= $listaDeseos + $deseo->qty; ?>
                                    @endforeach

                                    {{ $listaDeseos }}
                                </td>
                                <td><span class="hidden">{{ number_format($value->neto, 0, ',','') }}</span>
                                    {{ $value->usuario->pais->simbolo}}{{ number_format($value->neto, 0, ',','.') }}
                                </td>
                                <td>{{ $value->usuario->pais->simbolo}}{{ number_format($value->comision_valor, 0, ',','.') }}</td>
                                <td>
                                    @if($value->estado_compra_id == 3)
                                        <span class="label label-success">Pagado</span>
                                    @elseif($value->estado_compra_id == 2)    
                                        <span class="label label-default">En proceso</span>
                                    @else
                                        <i aria-hidden="true" class="fa fa-minus"></i>
                                    @endif
                                </td>
                                
                                <td>
                                    {{ Form::open(array('url' => 'backend/usuarios/' . $value->id , 'id' => 'delete-prod-'.$value->id, 'class' => '')) }}
                                    <div class="btn-group">
                                        <div class="btn-group btn-group-xs" role="group" aria-label="Large button group">
                                            <a title="Ver compra" href="{{ URL::to('backend/compras/ver/'.$value->codigo) }}" class="btn btn-primary"><i class="fa fa-search"></i></a>
                                            @if($estado == 3)
                                            <a href="{{ URL::to('backend/compras/usuario/' . $value->usuario->id ) }}" title="Ver compras del usuario" class="btn btn-success"><i class="fa fa-money"></i></a>
                                            @endif

                                        </div>
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