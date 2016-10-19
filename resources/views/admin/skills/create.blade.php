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
			<a class="btn btn-default" href="{{ URL::to('backend/skills') }}">
				<span aria-hidden="true" class="glyphicon glyphicon-list"></span> List all
			</a> 
			<a class="btn btn-primary" href="{{ URL::to('backend/skills/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Create new</a> 
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
	                <i class="fa fa-trophy"></i> New skill
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

                	<div class="skillsForm skillsFormCreate">
                		{!! Form::open(array('url' => 'backend/skills', 'class' => 'form')) !!}
							<input type="hidden" id="myPhoto" name="myPhoto" value="">
							<fieldset>
								<div class="form-group">
								    <label>Category skill
								        <select name="category" id="category" class="form-control input-lg">
								            <option value="SS">Select an option</option>
								            @foreach($category as $cat)
								               <option value="{{ $cat->id }}" {{ (collect(old('category'))->contains($cat->id)) ? 'selected':'' }}>{{ $cat->name}}</option>
								            @endforeach
								           </select>
								    </label>
								</div>

								<div class="form-group">
			                        {!! Form::label('Skill name*') !!}
			                        {!! Form::text('name', null, 
			                            array('', 
			                                  'class'=>'form-control input-lg', 
			                                  'placeholder'=>'Laravel')) !!}
			                    </div>
			                    <div class="form-group">
			                        {!! Form::label('Skill description*') !!}
			                        {!! Form::textarea('description', null, 
			                            array('', 
			                                  'class'=>'form-control input-lg', 
			                                  'placeholder'=>'html')) !!}
			                    </div>
			                    <div id="skillFormGroup" class="form-group" style="display: none">
			                        {!! Form::label('Skill image* (Html)') !!}
			                        {!! Form::textarea('image', null, 
			                            array('', 
			                                  'class'=>'form-control input-lg', 
			                                  'placeholder'=>'html')) !!}
			                    </div>
			                    <div id="skillOtherFormGroup" class="form-group" style="display: none">
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