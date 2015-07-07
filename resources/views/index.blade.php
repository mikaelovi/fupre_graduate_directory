@extends('app')

@section('title') Form @stop

@section('content')
<div class="container">
  <div class="row">
    
    <div class="col-md-12"> 
      
      <div class="panel">
        <div class="panel-body">
          

          @if (count($errors) > 0)
          	<div class="alert alert-danger">
          		<strong>Whoops!</strong> There were some problems with your input.<br><br>
          		<ul>
          			@foreach ($errors->all() as $error)
          				<li>{{ $error }}</li>
          			@endforeach
          		</ul>
          	</div>
          @endif
          
		<p class="text-center"><img src="{{asset('/avatars/defaults/fupre.jpg')}}"></p>
			<br><br>

          {!! Form::open(['url'=>'/graduate/details', 'method'=>'POST', 'files'=>'true', 'class'=>'form-horizontal', 'role'=>'form' ]) !!}
          	<input type="hidden" name="_token" value="{{ csrf_token() }}">

          	<div class="form-group">
          		<label class="col-md-4 control-label">First Name</label>
          		<div class="col-md-6">
          			<input type="text" class="form-control" name="fname" value="{{ old('fname') }}">
          		</div>
          	</div>

          	<div class="form-group">
          		<label class="col-md-4 control-label">Last Name</label>
          		<div class="col-md-6">
          			<input type="text" class="form-control" name="lname" value="{{ old('lname') }}">
          		</div>
          	</div>

          	<div class="form-group">
          		<label class="col-md-4 control-label">Home Address</label>
          		<div class="col-md-6">
          			<input type="text" class="form-control" name="h_addr" value="{{ old('h_addr') }}">
          		</div>
          	</div>

          	<div class="form-group">
          		<label class="col-md-4 control-label">Mobile</label>
          		<div class="col-md-6">
          			<input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
          		</div>
          	</div>

          	<div class="form-group">
          		<label class="col-md-4 control-label">E-Mail Address</label>
          		<div class="col-md-6">
          			<input type="email" class="form-control" name="email" value="{{ old('email') }}">
          		</div>
          	</div>

          	<div class="form-group">
          		<label class="col-md-4 control-label">Matric Number</label>
          		<div class="col-md-6">
          			<input type="text" class="form-control" name="mat_no" value="{{ old('mat_no') }}">
          		</div>
          	</div>

          	<div class="form-group">
          		<label class="col-md-4 control-label">College</label>
          		<div class="col-md-6">
          			<select class="form-control" name="college">
          			  <option value="blank">Select College</option>
          			  <option {{ 'Science'== Input::old('college')?'selected="selected"':"" }} value="Science">Science</option>
          			  <option {{ 'Technology'== Input::old('college')?'selected="selected"':"" }} value="Technology">Technology</option>
          			</select>
          		</div>
          	</div> 
				<div class="form-group">
					<label class="col-md-4 control-label">Department</label>
					<div class="col-md-6">
						<select class="form-control" name="dept">
						  <option value="blank">Select Department</option>
						  <option {{ 'Physics'== Input::old('dept')?'selected="selected"':"" }} value="Physics">Physics</option>
						  <option {{ 'Chemistry'== Input::old('dept')?'selected="selected"':"" }} value="Chemistry">Chemistry</option>
						  <option {{ 'Industrial-Chemistry'== Input::old('dept')?'selected="selected"':"" }} value="Industrial-Chemistry">Industrial Chemistry</option>
						  <option {{ 'Earth-Sciences-Geology'== Input::old('dept')?'selected="selected"':"" }} value="Earth-Sciences-Geology">Earth Sciences-Geology</option>
						  <option {{ 'Earth-Sciences-Geophysics'== Input::old('dept')?'selected="selected"':"" }} value="Earth-Sciences-Geophysics">Earth Sciences-Geophysics</option>
						  <option {{ 'Mathematics-Computer-Science'== Input::old('dept')?'selected="selected"':"" }} value="Mathematics-Computer-Science">Mathematics/Computer Science</option>
						  <option {{ 'Environmental-Science'== Input::old('dept')?'selected="selected"':"" }} value="Environmental-Science">Environmental Science</option>
						  <option {{ 'Mechanical-Engineering'== Input::old('dept')?'selected="selected"':"" }} value="Mechanical-Engineering">Mechanical Engineering</option>
						  <option {{ 'Chemical-Engineering'== Input::old('dept')?'selected="selected"':"" }} value="Chemical-Engineering">Chemical Engineering</option>
						  <option {{ 'Petroleum-Engineering'== Input::old('dept')?'selected="selected"':"" }} value="Petroleum-Engineering">Petroleum Engineering</option>
						  <option {{ 'Electrical-Engineering'== Input::old('dept')?'selected="selected"':"" }} value="Electrical-Engineering">Electrical Engineering</option>
						  <option {{ 'Marine-Engineering'== Input::old('dept')?'selected="selected"':"" }} value="Marine-Engineering">Marine Engineering</option>
						</select>
					</div>
				</div> 
				

          	<div class="form-group">
          		<label class="col-md-4 control-label">Set</label>
          		<div class="col-md-6">
          			<select class="form-control" name="set">
          			  <option value="blank">Select Set</option>
          			  <option {{ '2008'== Input::old('set')?'selected="selected"':"" }} value="2008">2008</option>
          			  <option {{ '2009'== Input::old('set')?'selected="selected"':"" }} value="2009">2009</option>
          			  <option {{ '2010'== Input::old('set')?'selected="selected"':"" }} value="2010">2010</option>
          			  <option {{ '2011'== Input::old('set')?'selected="selected"':"" }} value="2011">2011</option>
          			</select>
          		</div>
          	</div>


          	<div class="form-group">
          		<label class="col-md-4 control-label">Graduation Session</label>
          		<div class="col-md-6">
          			<select class="form-control" name="grad">
          			  <option value="blank">Select Graduation Session</option>
          			  <option {{ '2010-2011'== Input::old('grad')?'selected="selected"':"" }} value="2010-2011">2010/2011</option>
          			  <option {{ '2011-2012'== Input::old('grad')?'selected="selected"':"" }} value="2011-2012">2011/2012</option>
          			  <option {{ '2012-2013'== Input::old('grad')?'selected="selected"':"" }} value="2012-2013">2012/2013</option>
          			  <option {{ '2013-2014'== Input::old('grad')?'selected="selected"':"" }} value="2013-2014">2013/2014</option>
          			</select>
          		</div>
          	</div>


          	<div class="form-group">
          	  <label class="col-md-4 control-label">Photo</label>
          	  <div class="col-md-6">
          	  	<input type="file" name="photo">
          	  	<p class="help-block col-md-8 control-label"> 
          	  		(leave blank if no photo available)
          	  	</p>
          	  </div>
          	</div>
          	<br><br>


          	<div class="form-group">
          		<div class="col-md-6 col-md-offset-4">
          			<button type="submit" class="btn btn-primary">
          				Submit
          			</button>
          		</div>
          	</div>
          {!! Form::close() !!}
        
          
        </div>
      </div>
                                                                                       
	                                                
                                                      
   	</div><!--/col-12-->
  </div>
</div>
@endsection
