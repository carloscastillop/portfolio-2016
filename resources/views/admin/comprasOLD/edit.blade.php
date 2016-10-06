@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Compra Código: <strong>{{ $compra->codigo }}</strong></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/compras') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar todos</a> 
			<?php /*?><a class="btn btn-primary" href="{{ URL::to('backend/productos/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Crear nuevo</a> <?php */?>
		</div>
	</div>
	<div class="col-lg-12">
		<hr>
	</div>
	<div class="col-lg-12">
	@if (Session::has('message'))
	    <div class="alert alert-success">{{ Session::get('message') }}</div>
	    
	@endif
    @if (Session::has('messageError'))
        <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
        
    @endif
	</div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Fecha de generación: {{ Comunes::cambiaf_normal_hora($compra->created_at) }} hrs</h4>
                <h6>Fecha de última modificación: {{ Comunes::cambiaf_normal_hora($compra->updated_at) }} hrs</h6>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                {{ Form::open(array('url' => '/backend/compras/edit', 'method' => 'post')) }}
                

                <div class="well opcional">
                    <div class="form-group">
                        {{ Form::label('estado', 'Estado de la compra') }}
                        <select name="estado_compra" class="form-control">
                            <option value="EE">Seleccionar estado</option>
                            <?php $actual=""; ?>
                            @foreach($estados as $estado)
                                <option value="{{ $estado->id }}" @if($estado->id == $compra->estado_compra_id) selected="selected" <?php $actual=$estado->name; ?> @endif>{{ $estado->name }}</option>
                            @endforeach
                        </select>
                        <p class="help-text"><small>Estado actual: <?=$actual?></small></p>
                    </div>
                    <input type="hidden" name="id" value="{{ $compra->id }}">
                    
                    <div id="mensajeAlUsuario" class="form-group" style="display: none">
                        <label for="enviarMsg">
                            <input type="checkbox" id="enviarMsg" name="enviarMsg" value="1"> Enviar un email al usuario
                        </label>
                         
                        <?php
                        $arreglo = array('<br />', '<br>', '<br/>'); 
                        $mensaje = str_replace( $arreglo, "", $compra->mensaje); ;
                        if( Input::old('mensaje') !== null ){
                            $mensaje =Input::old('mensaje');
                        } 
                        ?>
                        {{ Form::textarea('mensaje', $mensaje, array('class' => 'form-control')) }}
                        <p class="help-block">(Opcional) Envía un mensaje al usuario informando que su órden de compra va en camino junto con su código de envío.</p>
                        
                        <span class="remember-box checkbox reenviarMsgContainer" style="display: none">
                            <label for="rememberme">
                                <input type="checkbox" id="reenviarMsg" name="reenviarMsg">Reenviar email
                            </label>
                        </span>
                    </div>
                    

                    <div class="form-group text-right">
                        {{ Form::submit('Modificar estado compra', array('class' => 'btn btn-primary btn-lg')) }}
                    </div>
                </div>

                <div class="clearfix"></div>
                <hr>
                <div class="clearfix"></div>

                <div class="elcont">

                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre producto</th>
                                <th>Código producto</th>
                                <th>$ Unidad</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($compra->productos as $row)
                            <tr id="tr-{{$row->id}}">
                                <td>
                                    <?php 
                                    $laFoto="";
                                    ($row->foto &&  strlen($row->foto)>0 ? $laFoto =$row->foto : $laFoto="generico-1.jpg" )
                                    ?>
                                    <a href="{{ URL::to('uploads/products/'.$laFoto) }}" title="{{ $row->name }}" class="image-popup" target="_blank">
                                        <img width="50" height="auto" alt="{{ $row->name }}" class="img-responsive" src="{{ URL::to('uploads/products/'.$laFoto) }}">
                                    </a>   
                                </td>
                                <td>
                                    <strong>{{ $row->name }}</strong>
                                </td>
                                <td><strong>{{ $row->code }}</strong></td>
                                <td><strong>{{ $row->pivot->price }}</strong></td>
                                <td>
                                    <strong>{{ $row->pivot->qty }}</strong>
                                </td>
                                <td><strong>{{ $row->pivot->total }}</strong></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="row">
                        <div class="col-md-6 col-md-offset-6">
                            <table class="table table-striped table-bordered table-hover">
                                <tbody>
                                    <tr>
                                      <td>Subtotal:</td>
                                      <td><strong>$ {{ number_format($compra->subtotal, "0", ",", ".") }}</strong></td>
                                    </tr>
                                    <tr>
                                      <td>Despacho:</td>
                                      <td>
                                        @if($compra->enviarporpagar ==1)
                                        Envío por pagar ({{ $compra->tipoenvio }}, sucursal: {{ $compra->sucursal }})
                                        @else
                                        $ {{ number_format($compra->despacho, "0", ',', '.') }}
                                        @endif
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>Total:</td>
                                      <td><strong>$ {{ number_format($compra->total, "0", ",", ".") }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    @if($compra->regalo ==1)
                    <div class="clearfix"></div>
                    <hr>
                    <div class="clearfix"></div>

                    <h4>MENSAJE PARA REGALO</h4>
                    <p class="lead">{{ $compra->regalo_mensaje }}</p>    
                    @endif
                    <div class="clearfix"></div>
                    <hr>
                    <div class="clearfix"></div>

                    <h4>DATOS DEL USUARIO</h4>

                    <table class="table table-striped table-bordered table-hover">
                        <tbody>
                            <tr>
                              <td>Nombres:</td>
                              <td><strong>{{ $compra->usuario->name }}</strong></td>
                            </tr>
                            <tr>
                              <td>RUT:</td>
                              <td><strong>{{ $compra->usuario->rut }}</strong></td>
                            </tr>
                            <tr>
                              <td>Email:</td>
                              <td>{{ $compra->usuario->email }}</td>
                            </tr>
                            <tr>
                              <td>Móvil:</td>
                              <td>+56 {{ $compra->usuario->movil }}</td>
                            </tr>
                            <tr>
                              <td>Sexo:</td>
                              <td><strong>{{ $compra->usuario->sexo }}</strong></td>
                            </tr>
                            <tr>
                              <td>F. Nacimiento:</td>
                              <td><strong>{{ Comunes::cambiaf_normal($compra->usuario->nacimiento) }}</strong></td>
                            </tr>
                          </tbody>
                    </table>
                    
                    
                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="clearfix"></div>

                    <h4>DIRECCIÓN DEL DESPACHO</h4>
                    <table class="table table-striped table-bordered table-hover">
                        <tbody>
                            <tr>
                              <td>Dirección de despacho:</td>
                              <td>
                                    @if($compra->enviarporpagar ==1)
                                            Envío por pagar ({{ $compra->tipoenvio }}, sucursal: {{ $compra->sucursal }})
                                            @else
                                            <strong>{{ $compra->direccion }}</strong>
                                            @endif
                              </td>
                            </tr>
                            <tr>
                              <td>Región/comuna:</td>
                              <td>{{ Comunes::nombreRegion($compra->region) }}/{{ Comunes::nombreComuna($compra->comuna) }}</td>
                            </tr>
                

                            <tr>
                              <td>Comentarios del despacho:</td>
                              <td><strong>{{ $compra->comentarios }}</strong></td>
                            </tr>
                          </tbody>
                    </table>

                    <div class="clearfix"></div>
                    <hr>
                    <div class="clearfix"></div>

                    <h4>FORMA DE PAGO</h4>

                    <table class="table table-striped table-bordered table-hover">
                        <tbody>
                            <tr>
                              <td>Forma de pago:</td>
                              <td><strong>{{ $compra->pago->name }}</strong></td>
                            </tr>
                          </tbody>
                    </table>
                    



                    <div class="clearfix"></div>
                    <hr>
                    <div class="clearfix"></div>
                    
                        
                    
                    <div class="form-group">
                        <a href="{{ URL::to('/backend/compras/imprimir/'.$compra->id) }}" class="btn btn-primary" target="_blank"><span aria-hidden="true" class="glyphicon glyphicon-print"></span> Imprimir</a>
                    </div>
                    
                </div>
                <!-- /.table-responsive -->
                {{ Form::close() }}


            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>

@stop