@extends('admin.default')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Producto: {{ $producto->name }}</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/productos') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar todos</a> 
			<a class="btn btn-primary" href="{{ URL::to('backend/productos/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Crear nuevo</a> 
		</div>
	</div>
	<div class="col-lg-12">
		<hr>
	</div>
	<div class="clearfix"></div>
	<div class="detalleProducto">    
	    <div class="col-lg-6">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                Detalle del producto
	            </div>
	            <!-- /.panel-heading -->
	            <div class="panel-body">
	                <div class="heading">
	                    <h2>{{ $producto->name }}</h2>
	                </div>
	                <div class="marca">
	                	<p>{{ $marca->name }} </p>
	                </div>
	                <div class="precio">
	                	<p>CLP: {{ $producto->price }} </p>
	                </div>
	                <div class="product-feature">
	                	{{ $producto->description }} 
	                </div>

	                <a target="_blank" href="" class="btn btn-primary btn-sm descargaPDF">
	                	<i class="fa fa-file-pdf-o fa-1"></i> Descargar manual
	               	</a>
	                <!-- /.table-responsive -->
	            </div>
	            <!-- /.panel-body -->
	        </div>
	        <!-- /.panel -->
	    </div>

	    <div class="col-lg-6">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                Imágenes del producto
	            </div>
	            <!-- /.panel-heading -->
	            <div class="panel-body">
	            	<div class="row">
	            	<?php for($i=1; $i<5; $i++){
	            		echo '<div class="col-md-4 cadaFoto">';
	            		echo '<img class="img-responsive" src="http://lorempixel.com/400/200/sports/'.$i.'"> ';
	            		echo '</div>';
	            	}?>
	            	</div>
	            </div>
	        </div>
	    </div>
	    <!-- /.col-lg-6 -->
    </div>
</div>

@stop