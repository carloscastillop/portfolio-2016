@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Compras</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <?php /*?>
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/cotizaciones') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar todos</a> 
			<a class="btn btn-primary" href="{{ URL::to('backend/productos/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Crear nuevo</a> 
		</div>
	</div>
    <?php */?>
	
	<div class="col-lg-12">
	@if (Session::has('message'))
	    <div class="alert alert-success">{{ Session::get('message') }}</div>
	    
	@endif
	</div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Lista de compras
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <ul class="nav nav-tabs tabsEventos">
                        <li role="presentation" @if($menuTipo == false) class="active" @endif>
                            <a href="{{ URL::to('backend/compras') }}">Todos los eventos</a>
                        </li>
                        <li role="presentation" @if($menuTipo == 1) class="active" @endif>
                            <a href="{{ URL::to('backend/compras?estado=1') }}">
                            <i class="fa fa-exclamation-circle"></i> Pendientes/nuevas</a>
                        </li>
                        <li role="presentation" @if($menuTipo == 2) class="active" @endif>
                            <a href="{{ URL::to('backend/compras?estado=2') }}">
                            <i class="fa fa-dollar"></i> Aceptadas</a>
                        </li>
                        <li role="presentation" @if($menuTipo == 3) class="active" @endif>
                            <a href="{{ URL::to('backend/compras?estado=3') }}">
                            <i class="fa fa-truck"></i> En proceso</a>
                        </li>
                        <li role="presentation" @if($menuTipo == 4) class="active" @endif>
                            <a href="{{ URL::to('backend/compras?estado=4') }}">
                            <i class="fa fa-level-down"></i> Finalizadas</a>
                        </li>
                        <li role="presentation" @if($menuTipo == 5) class="active" @endif>
                            <a href="{{ URL::to('backend/compras?estado=5') }}">
                                <i class="fa fa-trash"></i> Canceladas
                            </a>
                        </li>
                </ul>
                <div class="table-responsive">
                    <table class="table dataTablesTabla table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Fecha</th>
                                <th>Código</th>
                                <th>Productos</th>
                                <th>Usuario</th>
                                <th>Subtotal</th>
                                <th>Despacho</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($compras as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ Comunes::cambiaf_normal_hora($value->created_at) }}</td>
                                <td>{{ $value->codigo }}</td>
                                <td>
                                    <?php 
                                        $total=0;
                                        foreach($value->productos as $cuenta){
                                            $total +=  $cuenta->pivot->qty;               
                                        }
                                    ?>
                                {{ $total }}</td>
                                <td>{{ $value->usuario->name }}</td>
                                <td>$ {{ number_format($value->subtotal, "0", ',', '.') }}</td>
                                <td>
                                    @if($value->enviarporpagar ==1)
                                    en domicilio
                                    @else
                                    $ {{ number_format($value->despacho, "0", ',', '.') }}
                                    @endif
                                </td>
                                <td>$ {{ number_format($value->total, "0", ',', '.') }}</td>
                                <td>
                                    @if($value->estado->id == 1) 
                                    <!-- //pendiente-->
                                    <span class="label label-default">{{ $value->estado->name }}</span>
                                    @endif
                                    @if($value->estado->id == 2)
                                    <!-- //Aceptado-->
                                    <span class="label label-success">{{ $value->estado->name }}</span>
                                    @endif
                                    @if($value->estado->id == 3)
                                    <!-- //en proceso-->
                                    <span class="label label-info">{{ $value->estado->name }}</span>
                                    @endif
                                    @if($value->estado->id == 4)
                                    <!-- //finalizada-->
                                    <span class="label label-primary">{{ $value->estado->name }}</span>
                                    @endif
                                    @if($value->estado->id == 5)
                                    <!-- //cancelada-->
                                    <span class="label label-danger">{{ $value->estado->name }}</span>
                                    @endif
                                </td>

                                <td>
                                    <?php /*
                                	{{ Form::open(array('url' => 'backend/compras/delete', 'method' => 'post', 'id' => 'delete-prod-'.$value->id)) }}
                                        <input type="hidden" name="id" value="{{ $value->id }}">
                                    	<div aria-label="Large button group" role="group" class="btn-group btn-group-xs">
                                    		<a class="btn btn-info" href="{{ URL::to('backend/compras/' . $value->id) }}">Ver</a>
                                    		
    						                {{ Form::submit('Eliminar', array('class' => 'btn btn-danger btnConfirmar', 'id' => 'prod-'.$value->id )) }}
                                    	</div>
                                	{{ Form::close() }}
                                    */?>
                                   <div aria-label="Large button group" role="group" class="btn-group btn-group-xs">
                                    <a class="btn btn-info" href="{{ URL::to('backend/compras/' . $value->id) }}">Ver</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <?php //echo $compras->appends(Input::except('page'))->links(); ?>
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