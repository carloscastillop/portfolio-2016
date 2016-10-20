@extends('admin.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Editing [ {{ $project->name }} ]</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
			<a class="btn btn-default" href="{{ URL::to('backend/projects') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> List all</a> 
			<a class="btn btn-primary" href="{{ URL::to('backend/projects/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Create new </a> 
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
                Editing <strong>{{ $project->name }}</strong>

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

                   	<div class="projectsFormEdit">
                   		{!! Form::open(array('url' => 'backend/projects/'.$project->id, 'method' => 'PUT', 'class' => 'form')) !!}
                			<input type="hidden" name="id" value="{{ $project->id }}">
                			<input type="hidden" id="myPhoto" name="myPhoto" value="">
							<fieldset>
								<div class="form-group">
									<div class="checkbox">
										<label>
											<input name="active" type="checkbox" @if($project->active == true) checked="checked"@endif> Active
										</label>
									</div>
								</div>
								<div class="form-group">
			                        {!! Form::label('Project name*') !!}
			                        {!! Form::text('name', $project->name, 
			                            array('', 
			                                  'class'=>'form-control input-lg', 
			                                  'placeholder'=>'Portfolio')) !!}
			                    </div>
			                    <div class="form-group">
			                        {!! Form::label('Client name*') !!}
			                        {!! Form::text('client', $project->client, 
			                            array('', 
			                                  'class'=>'form-control input-lg', 
			                                  'placeholder'=>'Tesla Motors')) !!}
			                    </div>
								<div class="form-group">
			                        {!! Form::label('Project description*') !!}
			                        {!! Form::textarea('description', $project->description, 
			                            array('', 
			                                  'class'=>'form-control input-lg', 
			                                  'placeholder'=>'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...')) !!}
			                    </div>
			                    <div class="form-group">
			                        {!! Form::label('Link URL*') !!}
			                        {!! Form::text('link', $project->link, 
			                            array('', 
			                                  'class'=>'form-control input-lg', 
			                                  'placeholder'=>'http://www.google.cl')) !!}
			                    </div>
			                    <div class="form-group">
									<div class="checkbox">
										<label>
											<input name="available" type="checkbox" @if($project->link) checked="checked" @endif> Link available
										</label>
									</div>
								</div>
								<div class="form-group">
									<div class="checkbox">
										<label>
											<input name="finished" type="checkbox" @if($project->finished) checked="checked" @endif> Project finished
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
											    <input type="checkbox" name="skills[]" value="{{ $skill->id }}" @if(in_array($skill->id, $skillsProject)) checked="checked" @endif>
											    {{ $skill->name }}
											  </label>
											</div>
										</div>
										@endforeach
									</div>
								    
								</div>
								<div class="clearfix"></div>
			                    
			                    <div class="form-group">
			                    	{!! Form::label('Image*') !!}
			                    	<div id="showImageSkill">
			                    		<img src="{{ URL::to('/images/portfolio/'.$project->image) }}" class="img-responsive clearfix">
			                    		<button type="button" id="showImageSkillBtn" class="btn btn-primary btn-xs btnStar ">Change</button>
			                    		{!! Form::textarea('image', $project->image, 
			                            array('', 
			                                  'class'=>'form-control input-lg hidden', 
			                                  'placeholder'=>'html')) !!}
			                    	</div>
			                    	<div id="showImageSkillNew" style="display: none">
			                    		<div id="yourId"></div>
			                    	</div>
			                        <div class="clearfix"></div>
			                    </div>
			                    <hr>
			                    <div class="form-group">
			                        {!! Form::label('Order*') !!}
			                        {!! Form::text('order', $project->order, 
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