@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-gift"></i> Pagar a "<strong>{{ 
            $usuario->nombre_novios}}</strong>"</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/compras/usuario/'.$usuario->id) }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar compras del usuario</a> 
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
    <div class="col-lg-12 devolverPagoContainer">
        <div class="panel panel-default">
            <div class="panel-heading">
                Lista de compras a pagar (Total: {{ count($compras) }})
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                
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
                            </tr>
                        </thead>
                        <tbody>
                        	<?php 
                        	$subtotal = $total = $comision = $idPago = 0;	
                        	?>
                        	@foreach($compras as $key => $value)
                        	<?php 
                        	if($idPago==0){ $idPago = $value->id;}
                        	$subtotal 	+= $value->subtotal;
                        	$comision 	+= $value->comision_valor; 
                        	$total 		+= $value->neto;
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
                                    
                                    <a class="btn btn-primary btn-xs"  href="{{ URL::to('/backend/compras/ver/' . $value->codigo ) }}" title="Ver compra" target="_blank"><i class="fa fa-search"></i></a>        
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        	<tr>
                        		<td colspan="6" style="background-color:#F5F5F5"></td>
                        		<td>
                        			{{ $value->usuario->pais->simbolo}}{{ number_format($subtotal, 0, ',','.') }}
                        		</td>
                        		<td>
                        			{{ $value->usuario->pais->simbolo}}{{ number_format($comision, 0, ',','.') }}
                        		</td>
                        		<td>
									<strong>
                        			{{ $value->usuario->pais->simbolo}}{{ number_format($total, 0, ',','.') }}
                        			</strong>
                        		</td>
                        		<td style="background-color:#F5F5F5"></td>
                        	</tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.table-responsive -->
                
                <div class="clearfix"></div>

				<div class="well">
					<small>Datos para el depósito bancario</small>
				  	<?php //print_r($usuario->bancos->first() )
				  	?>

				  	<h1>{{ $usuario->bancos->first()->pivot->banco_titular }}</h1>
				  	
				  	<blockquote>
				  		<p>
				  		Banco: <strong>{{ $usuario->bancos->first()->name }}</strong>
				  		<br>
				  		@if($usuario->paises_id == 1)
				  		Tipo cuenta: <strong>{{ $bancoTipocuenta->name }}</strong>
				  		<br>
				  		@endif
				  		Número de Cuenta: <strong>{{ $usuario->bancos->first()->pivot->banco_cuenta }}</strong>
				  		<br>
				  		Cédula de identidad: <strong>{{ $usuario->bancos->first()->pivot->banco_cedula }}</strong>
				  		<br>
				  		Total a pagar: <strong>{{ $value->usuario->pais->simbolo}}{{ number_format($total, 0, ',','.') }}</strong>
				  	</p>	
				  	</blockquote>
				  	<p>
					  <a href="{{ URL::to('backend/compras/usuario/'.$usuario->id) }}" class="btn btn-default btn-lg">
					  	<i aria-hidden="true" class="fa fa-chevron-left"></i> Cancelar
					  </a>
					  <a href="#" class="btn btn-primary btn-lg confirmarPagoBtnA btnStart" style="display:none">
					  	<i aria-hidden="true" class="fa fa-money"></i> Pagar
					  </a>
					  <a href="{{ URL::to('backend/compras/pagar/aceptar/'.$idPago) }}" class="btn btn-success btn-lg confirmarPagoBtn" style="display:none;">
					  	<i aria-hidden="true" class="fa fa-thumbs-up"></i> Confirmar pago realizado
					  </a>
					  
					</p>
				</div>

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>

@stop