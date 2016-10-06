@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Regiones/comunas</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
        <form class="form-inline formTramos">
            <h4>Límite entre tramos</h4>
            <div class="form-group">
                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                <div class="input-group">
                    <div class="input-group-addon">Tramo A</div>
                    <input type="text" class="form-control input-lg" id="limiteTramoInput" value="{{ $limiteTramo->valor }}" placeholder="$ precio limite despacho">
                    <div class="input-group-addon">Tramo B</div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg editarLimiteTramoBtn">Actualizar límite</button>
            <p class="help-text">actual: $<span id="editarLimiteTramoSpan">{{ $limiteTramo->valor }}</span></p>
        </form>
    </div>
    <?php /*
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/regiones') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar todos</a> 
			<a class="btn btn-primary" href="{{ URL::to('backend/regiones/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Crear nuevo</a> 
		</div>
	</div>
	<div class="col-lg-12">
		<hr>
	</div>
    */ ?>
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
                Lista de comunas
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="dataTablesTabla table table-striped table-bordered table-hover dataTable no-footer dtr-inline">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Región</th>
                                <th>Comuna</th>
                                <th>Tramo A</th>
                                <th>Tramo B</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count=1; ?>
                        	@foreach($usuarios as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->nombre }}</td>
                                <td>{{ $value->region->nombre }}</td>
                                <td>
                                    <div class="input-group tramoInput">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" id="tramoA-{{ $value->id }}" name="tramoA-{{ $value->id }}" value="{{ $value->tramo_a }}" class="form-control input-sm tramoInput" tabindex="<?php $count++ ?>">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group tramoInput">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" id="tramoB-{{ $value->id }}" name="tramoB-{{ $value->id }}" value="{{ $value->tramo_b }}" class="form-control input-sm" tabindex="<?php $count++ ?>">
                                    </div>
                                </td>
                                <td>
                                	<a class="btn btn-primary btn-sm editarComunaBtn" href="#" id="comunaBtn-{{ $value->id }}" tabindex="<?php $count++ ?>">Editar</a>
                                	
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
                
                <div class="clearfix"></div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>

@stop