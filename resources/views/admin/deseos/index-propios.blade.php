@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Deseos de usuarios</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/deseos-propios') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar todos</a> 
			
		</div>
	</div>
	<div class="col-lg-12">
		<hr>
	</div>
	<div class="col-lg-12">
	@if (Session::has('message'))
	    <div class="alert alert-success">{{ Session::get('message') }}</div>
	    
	@endif
	</div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Lista de deseos
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">

                <ul class="nav nav-tabs tabsEventos">
                    <li role="presentation" @if($menuTipo == false) class="active" @endif>
                        <a href="{{ URL::to('backend/deseos-propios') }}">
                        <i class="fa fa-check"></i> Activos</a>
                    </li>
                    <li role="presentation" @if($menuTipo == 'inactivos') class="active" @endif>
                        <a href="{{ URL::to('backend/deseos-propios?op=inactivos') }}">
                        <i class="fa fa-minus"></i> Inactivos</a>
                    </li>
                    
                </ul>

                <div class="table-responsive">
                    <table class="dataTablesTabla table table-striped table-bordered table-hover table-condensed dataTable no-footer dtr-inline">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Usuario</th>
                                <th>País</th>
                                <th>Deseo</th>
                                <th>Precio</th>
                                <th>Categoría</th>
                                <th>Activo</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($lista as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->usuarios->email }}</td>
                                <td><img src="{{ URL::to('images/banderas/'.$value->usuarios->pais->flag) }}" alt="{{ $value->usuarios->pais->name }}" style="width: 25px; height: auto;"></td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->usuarios->pais->simbolo }}{{ number_format($value->price, 0, ',','') }}</td>
                                <td>Deseo propio</td>
                                <td>
                                    @if($value->active ==1 )
                                    <i class="fa fa-check-square-o" aria-hidden="true" style="color:green;"></i>
                                    @else
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                    @endif
                                </td>
                                <td>
                                	{{ Form::open(array('url' => 'backend/deseos/' . $value->id , 'id' => 'delete-prod-'.$value->id)) }}
                                	<div aria-label="Large button group" role="group" class="btn-group btn-group-xs">
                                		<a class="btn btn-primary" href="{{ URL::to('/backend/listas/'.$value->usuarios->id .'/edit?op=propios') }}">Ver propios</a>
                                		
                                	</div>
                                	{{ Form::close() }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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