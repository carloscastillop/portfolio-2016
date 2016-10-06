@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-gift"></i>  Regalo cod: {{ $compra->codigo }}</h1>
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
                Detalle regalo cod: {{ $compra->codigo }} <small class="pull-right">{{ Comunes::cambiaf_normal($compra->created_at) }}</small>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
               	<div class=" bottom-20 clearfix">
					<a target="_blank" title="Exportar a excel" class="btn btn-info btn-sm pull-right" href="{{ URL::to('/backend/compras/print/'.$compra->codigo) }}">
							<i class="fa fa-print" aria-hidden="true"></i> Imprimir
						</a>
				</div>

				<div class="well">
				{{ Form::open(array('url' => 'backend/compras/estado/'.$compra->codigo, 'id' => 'estadoCompraForm', 'class' => 'form row')) }}
				    	<label for="estadoTrans" class="col-md-12">ESTADO DE LA TRANSACCION*</label>
				    	<div class="form-group col-md-5">
							<select class="form-control input-lg" name="estadoTrans">
								<option value="pagado" @if($compra->estado_compra_id == 3) selected="selected" @endif>PAGADO</option>
								<option value="en-proceso" @if($compra->estado_compra_id == 2) selected="selected" @endif>EN PROCESO</option>
								<option value="pendientes" @if($compra->estado_compra_id == 5) selected="selected" @endif>PENDIENTE</option>
								<option value="rechazadas" @if($compra->estado_compra_id == 4) selected="selected" @endif>RECHAZADA</option>
								<option value="canceladas" @if($compra->estado_compra_id == 6) selected="selected" @endif>CANCELADA</option>
							</select>
							
						</div>
						<div class="form-group col-md-4">
							<button type="button" class="btn btn-primary btn-lg btnStart confirmarPagoBtnA" style="display:none;">Actualizar</button>
							<button type="submit" class="btn btn-success btn-lg confirmarPagoBtn" style="display:none;"><i aria-hidden="true" class="fa fa-thumbs-up"></i> Confirmar actualizar</button>
							
					  
						</div>

					</form>
				</div>

				<div class="well">
				  	<small>Quien ofreció el regalo: </small>
				  	<h1>{{ $compra->nombre }}</h1>
				  	<p>
				  		<i class="fa fa-envelope"></i> {{ $compra->email }}
				  		<br>
				  		<i class="fa fa-phone"></i> {{ $compra->movil }}
				  	</p>
				  	@if($compra->mensaje != null)
					<blockquote>
				  		<p class="elMensaje">"{{ $compra->mensaje }}"</p>
				  	</blockquote>
				  	@endif
				</div>

				<div class="listaRegalosTabla shop listaTransacciones">
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
						        <tr>
						          <td>Deseo</td>
						          <td>Precio</td>
						          <td>Cantidad</td>
						          <td>Subtotal</td>
						        </tr>
							</thead>
							<tbody>
								
								@foreach($compra->deseos as $row)
								<tr>
									<td>
						        		<h6>{{ $row->name }}</h6>
									</td>
						        	<td>
						        		<h6>{{$compra->usuario->pais->simbolo}}{{ number_format($row->price, 0, ',','.') }}</h6>
						        	</td>
						        	<td>
						        		<h6>{{ $row->qty }}</h6>
						        	</td>
								  	<td >
										<span class="vecesRegalado">{{$compra->usuario->pais->simbolo}}{{ number_format($row->total, 0, ',','.') }}</span>
								  	</td>
								  
								</tr>
								@endforeach
								
							
							</tbody>
						</table>
					</div>

					<div class="well wellTotal">
						<h6>SubTotal <span class="pull-right">{{$compra->usuario->pais->simbolo}}{{ number_format($compra->total, 0, ',','.') }}</span></h6>
					</div>
					
					<?php $nega='<i aria-hidden="true" class="fa fa-minus"></i>';?>
					<div class="well wellTotal wellComision">
						<h6>Comisión administrativa <span class="pull-right">{{$nega}} {{Auth::user()->pais->simbolo}} {{ number_format($comision, 0, ',','.') }}</span></h6>
					</div>
					

					<div class="well wellTotal">
						<h6>Total <span class="pull-right">{{$compra->usuario->pais->simbolo}}{{ number_format($compra->total - $comision, 0, ',','.') }}</span></h6>
					</div>


					<div class="clearfix"></div>
					@if($compra->pagado == 1)
					<div class="well">
						<small>Transferido a:</small>
					  	
					  	<blockquote>
					  		<p>
					  		Titular: <strong>{{ $compra->pagado_banco_titular }}</strong>
							<br>
					  		Banco: <strong>{{ $compra->pagado_banco }}</strong>
					  		<br>
					  		@if($compra->usuario->pais->paises_id == 1)
					  		Tipo cuenta: <strong>{{ $compra->pagado_tipo_cuenta }}</strong>
					  		<br>
					  		@endif
					  		Número de Cuenta: <strong>{{ $compra->pagado_numero_cuenta }}</strong>
					  		<br>
					  		Cédula de identidad: <strong>{{ $compra->pagado_cedula }}</strong>

					  		<br>
					  		Fecha de transferencia: <strong>{{Comunes::cambiaf_normal($compra->pagado_at) }} ({{ $compra->pagado_at }})</strong>
					  		
					  	</p>	
					  	</blockquote>
					</div>
					@else
					<div role="alert" class="alert alert-warning"> 
						<strong>Atención!</strong> Esta compra no ha sido devuelta al usuario</div>
					@endif
					
					<div class="clearfix"></div>
					<hr>
					<div class="clearfix"></div>
					

				
					@if(isset($compra->transaccion->id))
					<div class="well">
						<h6>Detalle de la Transacción</h6>
						<table class="table table-bordered table-hover table-condensed">
							<thead>
						        <tr>
						          <td>Variable</td>
						          <td>Valor</td>
						        </tr>
							</thead>
							<tbody>
								<?php 
								$datosTransaccion = $compra->transaccion;
								
								?>
								<tr>
									<td>compras_id</td>
						        	<td>{{ $datosTransaccion->compras_id }}</td>
						        </tr>
						        <tr>
									<td>compras_codigo</td>
						        	<td>{{ $datosTransaccion->compras_codigo }}</td>
						        </tr>
						        <tr>
									<td>merchant_id</td>
						        	<td>{{ $datosTransaccion->merchant_id }}</td>
						        </tr>
						        <tr>
									<td>state_pol</td>
						        	<td>{{ $datosTransaccion->state_pol }}</td>
						        </tr>
						        <tr>
									<td>risk</td>
						        	<td>{{ $datosTransaccion->risk }}</td>
						        </tr>
						        <tr>
									<td>response_code_pol</td>
						        	<td>{{ $datosTransaccion->response_code_pol }}</td>
						        </tr>
						        <tr>
									<td>reference_sale</td>
						        	<td>{{ $datosTransaccion->reference_sale }}</td>
						        </tr>
						        <tr>
									<td>reference_pol</td>
						        	<td>{{ $datosTransaccion->reference_pol }}</td>
						        </tr>
						        <tr>
									<td>sign</td>
						        	<td>{{ $datosTransaccion->sign }}</td>
						        </tr>
						        <tr>
									<td>extra1</td>
						        	<td>{{ $datosTransaccion->extra1 }}</td>
						        </tr>
						        <tr>
									<td>extra2</td>
						        	<td>{{ $datosTransaccion->extra2 }}</td>
						        </tr>
						        <tr>
									<td>payment_method</td>
						        	<td>{{ $datosTransaccion->payment_method }}</td>
						        </tr>
						        <tr>
									<td>payment_method_type</td>
						        	<td>{{ $datosTransaccion->payment_method_type }}</td>
						        </tr>
						        <tr>
									<td>installments_number</td>
						        	<td>{{ $datosTransaccion->installments_number }}</td>
						        </tr>
						        <tr>
									<td>value</td>
						        	<td>{{ $datosTransaccion->value }}</td>
						        </tr>
						        <tr>
									<td>tax</td>
						        	<td>{{ $datosTransaccion->tax }}</td>
						        </tr>
						        <tr>
									<td>additional_value</td>
						        	<td>{{ $datosTransaccion->additional_value }}</td>
						        </tr>
						        <tr>
									<td>transaction_date</td>
						        	<td>{{ $datosTransaccion->transaction_date }}</td>
						        </tr>
						        <tr>
									<td>currency</td>
						        	<td>{{ $datosTransaccion->currency }}</td>
						        </tr>
						        <tr>
									<td>email_buyer</td>
						        	<td>{{ $datosTransaccion->email_buyer }}</td>
						        </tr>
						        <tr>
									<td>cus</td>
						        	<td>{{ $datosTransaccion->cus }}</td>
						        </tr>
						        <tr>
									<td>pse_bank</td>
						        	<td>{{ $datosTransaccion->pse_bank }}</td>
						        </tr>
						        <tr>
									<td>test</td>
						        	<td>{{ $datosTransaccion->test }}</td>
						        </tr>
						        <tr>
									<td>description</td>
						        	<td>{{ $datosTransaccion->description }}</td>
						        </tr>
						        <tr>
									<td>billing_address</td>
						        	<td>{{ $datosTransaccion->billing_address }}</td>
						        </tr>
						        <tr>
									<td>shipping_address</td>
						        	<td>{{ $datosTransaccion->shipping_address }}</td>
						        </tr>
						        <tr>
									<td>phone</td>
						        	<td>{{ $datosTransaccion->phone }}</td>
						        </tr>
						        <tr>
									<td>office_phone</td>
						        	<td>{{ $datosTransaccion->office_phone }}</td>
						        </tr>
						        <tr>
									<td>account_number_ach</td>
						        	<td>{{ $datosTransaccion->account_number_ach }}</td>
						        </tr>
						        <tr>
									<td>account_type_ach</td>
						        	<td>{{ $datosTransaccion->account_type_ach }}</td>
						        </tr>
						        <tr>
									<td>administrative_fee</td>
						        	<td>{{ $datosTransaccion->administrative_fee }}</td>
						        </tr>
						        <tr>
									<td>administrative_fee_base</td>
						        	<td>{{ $datosTransaccion->administrative_fee_base }}</td>
						        </tr>
						        <tr>
									<td>administrative_fee_tax</td>
						        	<td>{{ $datosTransaccion->administrative_fee_tax }}</td>
						        </tr>
						        <tr>
									<td>airline_code</td>
						        	<td>{{ $datosTransaccion->airline_code }}</td>
						        </tr>
						        <tr>
									<td>attempts</td>
						        	<td>{{ $datosTransaccion->attempts }}</td>
						        </tr>
						        <tr>
									<td>authorization_code</td>
						        	<td>{{ $datosTransaccion->authorization_code }}</td>
						        </tr>
						        <tr>
									<td>bank_id</td>
						        	<td>{{ $datosTransaccion->bank_id }}</td>
						        </tr>
						        <tr>
									<td>billing_city</td>
						        	<td>{{ $datosTransaccion->billing_city }}</td>
						        </tr>
						        <tr>
									<td>billing_country</td>
						        	<td>{{ $datosTransaccion->billing_country }}</td>
						        </tr>
						        <tr>
									<td>commision_pol</td>
						        	<td>{{ $datosTransaccion->commision_pol }}</td>
						        </tr>
						        <tr>
									<td>commision_pol_currency</td>
						        	<td>{{ $datosTransaccion->commision_pol_currency }}</td>
						        </tr>
						        <tr>
									<td>customer_number</td>
						        	<td>{{ $datosTransaccion->customer_number }}</td>
						        </tr>
						        <tr>
									<td>date</td>
						        	<td>{{ $datosTransaccion->date }}</td>
						        </tr>
						        <tr>
									<td>error_code_bank</td>
						        	<td>{{ $datosTransaccion->error_code_bank }}</td>
						        </tr>
						        <tr>
									<td>error_message_bank</td>
						        	<td>{{ $datosTransaccion->error_message_bank }}</td>
						        </tr>
						        <tr>
									<td>exchange_rate</td>
						        	<td>{{ $datosTransaccion->exchange_rate }}</td>
						        </tr>
						        <tr>
									<td>ip</td>
						        	<td>{{ $datosTransaccion->ip }}</td>
						        </tr>
						        <tr>
									<td>nickname_buyer</td>
						        	<td>{{ $datosTransaccion->nickname_buyer }}</td>
						        </tr>
						        <tr>
									<td>nickname_seller</td>
						        	<td>{{ $datosTransaccion->nickname_seller }}</td>
						        </tr>
						        <tr>
									<td>payment_method_id</td>
						        	<td>{{ $datosTransaccion->payment_method_id }}</td>
						        </tr>
						        <tr>
									<td>payment_request_state</td>
						        	<td>{{ $datosTransaccion->payment_request_state }}</td>
						        </tr>
						        <tr>
									<td>pseReference1</td>
						        	<td>{{ $datosTransaccion->pseReference1 }}</td>
						        </tr>
						        <tr>
									<td>pseReference2</td>
						        	<td>{{ $datosTransaccion->pseReference2 }}</td>
						        </tr>
						        <tr>
									<td>pseReference3</td>
						        	<td>{{ $datosTransaccion->pseReference3 }}</td>
						        </tr>
						        <tr>
									<td>response_message_pol</td>
						        	<td>{{ $datosTransaccion->response_message_pol }}</td>
						        </tr>
						        <tr>
									<td>shipping_city</td>
						        	<td>{{ $datosTransaccion->shipping_city }}</td>
						        </tr>
						        <tr>
									<td>shipping_country</td>
						        	<td>{{ $datosTransaccion->shipping_country }}</td>
						        </tr>
						        <tr>
									<td>transaction_bank_id</td>
						        	<td>{{ $datosTransaccion->transaction_bank_id }}</td>
						        </tr>
						        <tr>
									<td>transaction_id</td>
						        	<td>{{ $datosTransaccion->transaction_id }}</td>
						        </tr>
						        <tr>
									<td>payment_method_name</td>
						        	<td>{{ $datosTransaccion->payment_method_name }}</td>
						        </tr>
						        <tr>
									<td>created_at</td>
						        	<td>{{ $datosTransaccion->created_at }}</td>
						        </tr>
						        <tr>
									<td>updated_at</td>
						        	<td>{{ $datosTransaccion->updated_at }}</td>
						        </tr>

							</tbody>
						</table>
							
					</div>
					@endif
				</div>
                
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>

@stop