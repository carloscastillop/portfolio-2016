@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-gift"></i> Compras de "<strong>{{ 
            $usuario->nombre_novios}}</strong>"</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/compras') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar todos</a> 
            <a class="btn btn-primary" href="{{ URL::to('/backend/usuarios/'.$usuario->id.'/edit') }}"><span aria-hidden="true" class="glyphicon glyphicon-user"></span> Ver perfil usuario</a> 
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
        @if($usuario->lista()->first()->finalizado)
            <div role="alert" class="alert alert-warning"> <strong>ATENCION!</strong> La lista de deseos de este usuario ha finalizado [fecha: {{ Comunes::cambiaf_normal($usuario->lista()->first()->finalizado_at) }}] </div>
            @endif

        <div class="panel panel-default">
            <div class="panel-heading">
                Lista de regalos (Total: {{ count($compras) }})
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <ul class="nav nav-tabs tabsEventos">
                    <li role="presentation" @if($menuTipo == false) class="active" @endif>
                        <a href="{{ URL::to('backend/compras') }}">
                        <i class="fa fa-check"></i> Todos los regalos recibidos</a>
                    </li>
                    <li role="presentation" class="hidden" @if($menuTipo == 'inactivos') class="active" @endif>
                        <a href="{{ URL::to('backend/compras?op=inactivos') }}">
                        <i class="fa fa-trash"></i> Papelera</a>
                    </li>
                </ul>
                @if(count($compras) > 0)
                <div class="table-responsive">
                    <table class="table table-condensed table-striped table-bordered table-hover tabla-comprimida">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Código</th>
                                <th>F. Registro</th>
                                <th>País</th>
                                <th>Quien regala</th>
                                <th>Deseos</th>
                                <th>SubTotal</th> 
                                <th>Comisión</th>
                                <th>Total</th>
                                <th>Ver</th>
                                <th>Pagado</th>
                                <th>F. Pagado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                            $totalPagado = $subtotal = $total = $comision = $idPago = 0;    
                            ?>
                        	@foreach($compras as $key => $value)
                            <?php 
                                if($idPago==0){ $idPago = $value->id;}
                                $subtotal   += $value->subtotal;
                                $comision   += $value->comision_valor; 
                                $total      += $value->neto;
                            ?>
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->codigo }}</td>
                                <td>{{ Comunes::cambiaf_normal($value->created_at) }}</td>
                                
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
                                <td>
                                    {{ $value->usuario->pais->simbolo}}{{ number_format($value->subtotal, 0, ',','.') }}
                                </td>

                                <td>{{ $value->usuario->pais->simbolo}}{{ number_format($value->comision_valor, 0, ',','.') }}</td>
                                <td><span class="hidden">{{ number_format($value->neto, 0, ',','') }}</span>
                                    {{ $value->usuario->pais->simbolo}}{{ number_format($value->neto, 0, ',','.') }}
                                </td>
                                <td>
                                    
                                    <a class="btn btn-primary btn-xs"  href="{{ URL::to('/backend/compras/ver/' . $value->codigo ) }}" title="Ver compra"><i class="fa fa-search"></i></a>
                                    
                                </td>
                                <td>
                                    @if($value->pagado)
                                        <?php $totalPagado += $value->neto; ?>
                                        <i aria-hidden="true" class="fa fa-check-square-o" style="color:green;"></i>
                                    @else
                                        <i aria-hidden="true" class="fa fa-minus"></i>
                                    @endif
                                </td>
                                <td>
                                    @if($value->pagado)
                                        {{ Comunes::cambiaf_normal($value->pagado_at) }}
                                    @else
                                        <i aria-hidden="true" class="fa fa-minus"></i>
                                    @endif
                                </td>
                                <td>
                                    @if($value->pagado)
                                        
                                    @else
                                        <a href="{{ URL::to('backend/compras/pagar/'.$value->id) }}" class="btn btn-primary btn-xs">Pagar</a>
                                    @endif
                                </td>
                                
                                
                            </tr>
                            @endforeach
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6" class="active"></td>
                                <td class="active">
                                    <strong>
                                    {{ $value->usuario->pais->simbolo}}{{ number_format($subtotal, 0, ',','.') }}
                                    </strong>
                                </td>
                                <td class="success">
                                    <strong>
                                    {{ $value->usuario->pais->simbolo}}{{ number_format($comision, 0, ',','.') }}
                                    </strong>
                                </td>
                                <td class="info">
                                    <strong>
                                    {{ $value->usuario->pais->simbolo}}{{ number_format($total, 0, ',','.') }}
                                    </strong>
                                </td>
                                <td colspan="4" class="active"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.table-responsive -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="well wellTotal info">
                            <h5>Total recaudado <span class="pull-right"><strong>{{ $value->usuario->pais->simbolo}}{{ number_format($total, 0, ',','.') }}</strong></span></h5>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="well wellTotal ">
                            <h5>Total pagado <span class="pull-right"><strong>{{ $value->usuario->pais->simbolo}}{{ number_format($totalPagado, 0, ',','.') }}</strong></span></h5>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="well wellTotal @if($total-$totalPagado > 0) warning @else success @endif">
                            <h5>Saldo <span class="pull-right"><strong>{{ $value->usuario->pais->simbolo}}{{ number_format($total-$totalPagado, 0, ',','.') }}</strong></span></h5>
                        </div>
                    </div>
                </div>
                @else
                <div role="alert" class="alert alert-warning"> <strong>Ups!</strong> 
                Este usuario aún no ha recibido ninguna compra. </div>
                @endif

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