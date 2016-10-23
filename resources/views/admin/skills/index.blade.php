@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-trophy"></i> Skills</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/skills') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> List all</a> 
			<a class="btn btn-primary" href="{{ URL::to('backend/skills/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Create new</a> 
		</div>
	</div>
	<div class="col-lg-12">
		<hr>
	</div>
	<div class="col-lg-12">

	@if (Session::has('message'))
	    <div class="alert alert-success">
            <strong>Wohoooo!</strong> {{ Session::get('message') }}</div>
	    
	@endif

    @if (Session::has('messageError'))
        <div class="alert alert-danger"><strong>Ups!</strong> {{ Session::get('messageError') }}</div>
        
    @endif

    @if ($errors->any())
        <div role="alert" class="alert alert-danger"> <strong>Ups!</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <div class="clearfix"></div>
    @endif

	</div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Skill list (Total: {{ count($skills) }})
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <ul class="nav nav-tabs tabsEventos">
                    <li role="presentation" @if($menuTipo == 1) class="active" @endif>
                        <a href="{{ URL::to('backend/skills') }}">
                        <i class="fa fa-check"></i> Actives</a>
                    </li>
                    <li role="presentation" @if($menuTipo == 2) class="active" @endif>
                        <a href="{{ URL::to('backend/skills?op=inactives') }}">
                        <i class="fa fa-trash"></i> Inactives</a>
                    </li>
                </ul>

                <div class="table-responsive">
                    <table class="table dataTablesTabla table-condensed table-striped table-bordered table-hover tabla-comprimida">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Order</th>
                                <th>Active</th>
                                <th>Home</th>
                                <th>Projects</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($skills as $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->created_at }}</td>
                                <td>{{ str_limit($value->name, $limit = 15, $end = '...') }}</td>
                                <td>{{ $value->category->name }}</td>
                                <td><small>{{ str_limit($value->description, $limit = 30, $end = '...') }}</small></td>
                                <td>{{ $value->order }}</td>
                                <td>@if($value->active==1)
                                        <i aria-hidden="true" class="fa fa-check-square-o"></i> 
                                @else
                                    <i aria-hidden="true" class="fa fa-minus-square-o" title="Lista inactiva" style="color:#999999"></i>
                                @endif
                                </td>
                                <td>@if($value->home==1)
                                        <i aria-hidden="true" class="fa fa-check-square-o"></i> 
                                @else
                                    <i aria-hidden="true" class="fa fa-minus-square-o" title="Lista inactiva" style="color:#999999"></i>
                                @endif
                                </td>
                                <td>
                                    {{ count($value->projects) }}
                                </td>
                                <td>
                                	<div>
                                        <a class="btn btn-primary btn-xs" href="{{ URL::to('/backend/skills/'.$value->id.'/edit') }}" title="EDIT {{ $value->name }}">
                                            <span aria-hidden="true" class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        {{ Form::open(array('url' => 'backend/skills/' . $value->id, 'class' => 'pull-right')) }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-xs" title="DELETE {{ $value->name }}"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        {{ Form::close() }}
                                	</div>
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