@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Editing [ {{ $skill->name }} ]</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/skills') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> List all</a> 
			<a class="btn btn-primary" href="{{ URL::to('backend/skills/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Create new </a> 
		</div>
	</div>
	<div class="col-lg-12">
		<hr>
	</div>
	<div class="col-lg-12">
		@if (Session::has('message'))
		    <div role="alert" class="alert alert-success"> <strong>Great!</strong>
		    	{{ Session::get('message') }}
		    </div>
		@endif
		@if (Session::has('messageError'))
		    <div role="alert" class="alert alert-danger"> <strong>Ups!</strong>
		    	{{ Session::get('messageError') }}
		    </div>
		@endif
		<!-- ALERTAS -->
		@if (Session::has('mensajeOK'))
		    <div class="alert alert-success">
		    	<strong class="lead"><i aria-hidden="true" class="fa fa-hand-peace-o"></i></strong> {{ Session::get('mensajeOK') }}</div>
		@endif	


		<!-- FIN ALERTAS -->
	</div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Editando <strong>{{ $skill->name }}</strong>

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
            	
                <div class="row">
                	<div class="col-md-12">

                	@if ($errors->any())
                		<div class="">
	                		<div role="alert" class="alert alert-danger"> <strong>Ups!</strong>
	                    		<ul>
	                                @foreach($errors->all() as $error)
	                                    <li>{{ $error }}</li>
	                                @endforeach
	                            </ul>
	                    	</div>
                    	</div>
                    	<div class="clearfix"></div>
                    @endif

                   	<div class="skillsFormEdit">
                   		{!! Form::open(array('url' => 'backend/skills/'.$skill->id, 'method' => 'PUT', 'class' => 'form')) !!}
                			<input type="hidden" name="id" value="{{ $skill->id }}">
                			<input type="hidden" id="myPhoto" name="myPhoto" value="">
							<fieldset>
								<div class="form-group">
									<div class="checkbox">
										<label>
											<input name="active" type="checkbox" @if($skill->active == true) checked="checked"@endif> Active
										</label>
									</div>
								</div>
								<div class="form-group">
								    <label>Category skill
								        <select name="category" id="category" class="form-control input-lg">
								            <option value="SS">Select an option</option>
								            @foreach($categories as $cat)
								               <option value="{{ $cat->id}}" @if($skill->skill_categories_id == $cat->id) selected="selected"@endif>{{ $cat->name}}</option>
								            @endforeach
								           </select>
								    </label>
								</div>
								<div class="form-group">
			                        {!! Form::label('Skill name*') !!}
			                        {!! Form::text('name', $skill->name, 
			                            array('', 
			                                  'class'=>'form-control input-lg', 
			                                  'placeholder'=>'Laravel')) !!}
			                    </div>
			                    <div class="form-group">
			                        {!! Form::label('Skill description*') !!}
			                        {!! Form::textarea('description', $skill->description, 
			                            array('', 
			                                  'class'=>'form-control input-lg', 
			                                  'placeholder'=>'html')) !!}
			                    </div>
			                    @if($skill->skill_categories_id==1)
			                    <div class="form-group">
			                        {!! Form::label('Skill image*') !!}
			                        {!! Form::textarea('image', $skill->image, 
			                            array('', 
			                                  'class'=>'form-control input-lg', 
			                                  'placeholder'=>'html')) !!}
			                    </div>
			                    @elseif($skill->skill_categories_id==2)
			                    <div class="form-group">
			                    	{!! Form::label('Image*') !!}
			                    	<div id="showImageSkill">
			                    		<img src="{{ URL::to('/images/skills/'.$skill->image) }}" class="img-responsive clearfix">
			                    		<button type="button" id="showImageSkillBtn" class="btn btn-primary btn-xs btnStar ">Change</button>
			                    		{!! Form::textarea('image', $skill->image, 
			                            array('', 
			                                  'class'=>'form-control input-lg hidden', 
			                                  'placeholder'=>'html')) !!}
			                    	</div>
			                    	<div id="showImageSkillNew" style="display: none">
			                    		<div id="yourId"></div>
			                    	</div>
			                        <div class="clearfix"></div>
			                    </div>
			                    @endif
			                    <hr>
			                    <div class="form-group">
			                        {!! Form::label('Order*') !!}
			                        {!! Form::text('order', $skill->order, 
			                            array('', 
			                                  'class'=>'form-control input-lg',
			                                  'style' =>'width:100px', 
			                                  'placeholder'=>'1')) !!}
			                    </div>
								<hr>
			                    <div class="form-group">
			                        {!! Form::button('Save', 
			                          array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btnStar btnClick')) !!}
			                    </div>
			                    <p class="help-text">(*) Required fields</p>
								
								
							</fieldset>
						{{ Form::close() }}
					</div>

                	</div>

                	

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