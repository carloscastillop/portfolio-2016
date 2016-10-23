@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-coffee"></i> Projects/Portfolio</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/projects') }}">
				<span aria-hidden="true" class="glyphicon glyphicon-list"></span> List all
			</a> 
			<a class="btn btn-primary" href="{{ URL::to('backend/projects/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Create new</a> 
		</div>
	</div>
	<div class="col-lg-12">
		<hr>
	</div>

	<div class="crearProducto">

		<div class="col-lg-12">
		@if (Session::has('message'))
		    <div role="alert" class="alert alert-danger"> <strong>Ups!</strong>
		    	{{ Session::get('message') }}
		    </div>
		@endif
		@if (Session::has('messageError'))
		    <div role="alert" class="alert alert-danger"> <strong>Ups!</strong>
		    	{{ Session::get('messageError') }}
		    </div>
		@endif
		</div>
	    <div class="col-lg-12">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                <i class="fa fa-trophy"></i> New project
	            </div>
	            <!-- /.panel-heading -->
	            <div class="panel-body">
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

                	<div class="projectsForm projectsFormCreate">
                		{!! Form::open(array('url' => 'backend/projects', 'class' => 'form')) !!}
							<input type="hidden" id="myPhoto" name="myPhoto" value="">

							<fieldset>
								<div class="form-group">
									<div class="checkbox">
										<label>
											<input name="home" type="checkbox"> Home
										</label>
									</div>
								</div>
								<div class="form-group">
			                        {!! Form::label('Project name*') !!}
			                        {!! Form::text('name', null, 
			                            array('', 
			                                  'class'=>'form-control input-lg', 
			                                  'placeholder'=>'Portfolio')) !!}
			                    </div>
			                    <div class="form-group">
			                        {!! Form::label('Client name*') !!}
			                        {!! Form::text('client', null, 
			                            array('', 
			                                  'class'=>'form-control input-lg', 
			                                  'placeholder'=>'Tesla Motors')) !!}
			                    </div>
			                    <div class="form-group">
			                        {!! Form::label('Project description*') !!}
			                        {!! Form::textarea('description', null, 
			                            array('', 
			                                  'class'=>'form-control input-lg', 
			                                  'placeholder'=>'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...')) !!}
			                    </div>
			                    <div class="form-group">
			                        {!! Form::label('Link URL*') !!}
			                        {!! Form::text('link', null, 
			                            array('', 
			                                  'class'=>'form-control input-lg', 
			                                  'placeholder'=>'http://www.google.cl')) !!}
			                    </div>
			                    <div class="form-group">
									<div class="checkbox">
										<label>
											<input name="available" type="checkbox"> Link available
										</label>
									</div>
								</div>
								<div class="form-group">
									<div class="checkbox">
										<label>
											<input name="finished" type="checkbox"> Project finished
										</label>
									</div>
								</div>
								<div class="form-group">
								    <label>Skill used*</label>
								    <div class="clearfix"></div>
							    	<div class="row">
								        @foreach($skills as $skill)
								        <div class="col-sm-2">
									        <div class="checkbox well" style="padding: 5px;">
											  <label>
											    <input type="checkbox" name="skills[]" value="{{ $skill->id }}">
											    {{ $skill->name }}
											  </label>
											</div>
										</div>
										@endforeach
									</div>
								    
								</div>
								<div class="clearfix"></div>

								
			                    <div class="form-group">
			                    	<div class="form-group">
			                        	{!! Form::label('Image*') !!}
			                        	<div id="yourId"></div>
			                        	<div class="clearfix"></div>
			                        </div>

			                    </div>
			                   	<div class="clearfix"></div>
			                    <hr>
			                    <div class="form-group">
			                        {!! Form::label('Order*') !!}
			                        {!! Form::text('order', null, 
			                            array('', 
			                                  'class'=>'form-control input-lg',
			                                  'style' =>'width:100px', 
			                                  'placeholder'=>'1')) !!}
			                    </div>
								<hr>
			                    <div class="form-group">
			                        {!! Form::button('Create', 
			                          array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btnStar btnClick')) !!}
			                    </div>
			                    <p class="help-text">(*) Required fields</p>
								
								
								
						  		
								
							
								
								
							</fieldset>
						{{ Form::close() }}
					</div>

	            </div>
	            <!-- /.panel-body -->
	        </div>
	        <!-- /.panel -->
	    </div>
	    <!-- /.col-lg-6 -->
	</div>
</div>

@stop