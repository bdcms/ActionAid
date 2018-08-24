@extends('layout.layout')
@section('content')
 <ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Dashboard</a></li>
</ul>

{{-- showing msg --}}
@if(session('msg'))
	<div class="alert alert-{{session('class')}} alert-dismissible">
	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	   {{--  <h4><i class="icon fa fa-ban"></i> Alert!</h4> --}}
	    {{ session('msg') }}
	</div>
@endif

<div class="box box-info">
	<div class="box-header with-border">
	  <h3 class="box-title">Profile Form</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form class="form-horizontal" action="{{url('addUser/')}}" method="post">
		{{csrf_field()}}
	  <div class="box-body">  
		<div class="form-group">
	      <label for="inputEmail3" class="col-sm-2 control-label">User Email:</label> 
	      <div class="col-sm-10">
	        <input type="email" name="email" class="form-control" id="inputEmail3" ">
	        <span class="text-danger">{{ $errors->first('email')}} </span>
	      </div>
	    </div> 

	    <div class="form-group">
	      <label for="inputEmail3" class="col-sm-2 control-label">Password:</label> 
	      <div class="col-sm-10"> 
	        <input type="password" name="password" class="form-control">
	        <span class="text-danger">{{ $errors->first('password')}} </span>
	      </div>
	    </div>
	    <div class="form-group">
	    	<label for="inputEmail3" class="col-sm-2 control-label">Role:</label> 
	      	<div class="col-sm-10"> 
			    <select id="category" name="roleId">
				    <option value="" disabled="disabled" selected="selected">Please select a Role</option>
				    <option value="2">Country Director</option>
				    <option value="3">HROD</option>
				    <option value="4">HOFSP</option>
				    <option value="5">Hub Coordinator</option>
				    <option value="6">Programe Officer</option>
				    <option value="7">Line Manager</option>
				    <option value="8">Project Coordinator</option>
				    <option value="9">Regional MEL</option>
				    <option value="10">Finance Officer</option>
				    <option value="11">HOPP</option>
				</select>
				<span class="text-danger">{{ $errors->first('roleId')}} </span>
			</div>
		</div>


{{-- Conditional Div according to role --}}

{{-- for Project Coordinator --}}
		<div id="div8" class="form-group userReg">
		    <label class="col-sm-2 control-label">Line Manager:</label> 
		      <div class="col-sm-10"> 
		         <select id="lineManager" name="lineManager"> 
		         	@php
		         		$result = DB::table('ai_users')->where('role_id',7)->get();
		         	@endphp
		         	@foreach ($result as $lm) 
				    	<option value="{{$lm->us_id}}">{{$lm->us_fullName}}</option> 
		         	@endforeach
				</select>
		        <span class="text-danger">{{ $errors->first('lineManager')}} </span>
		      </div>
		</div>

{{-- for Reginal MEL Officer--}}
		<div id="div9" class="form-group userReg">
		    <label class="col-sm-2 control-label">Line Manager:</label> 
		      <div class="col-sm-10"> 
		         <select id="lineManager" name="lineManager"> 
		         	@php
		         		$result = DB::table('ai_users')->where('role_id',7)->get();
		         	@endphp
		         	@foreach ($result as $lm) 
				    	<option value="{{$lm->us_id}}">{{$lm->us_fullName}}</option> 
		         	@endforeach
				</select>
		        <span class="text-danger">{{ $errors->first('lineManager')}} </span>
		      </div>
		</div>

{{-- for Programe Officer --}}
		<div id="div6" class="form-group userReg">
		    <label class="col-sm-2 control-label">Hub Coordinator:</label> 
		      <div class="col-sm-10"> 
		         <select id="hubCoordinator" name="hubCoordinator"> 
		         	@php
		         		$result = DB::table('ai_users')->where('role_id',5)->get();
		         	@endphp
		         	@foreach ($result as $lm) 
				    	<option value="{{$lm->us_id}}">{{$lm->us_fullName}}</option> 
		         	@endforeach
				</select>
		        <span class="text-danger">{{ $errors->first('hubCoordinator')}} </span>
		      </div>
		</div>

{{-- for Line Manager --}}
		<div id="div7" class="form-group userReg">
		    <label class="col-sm-2 control-label">Hopp:</label> 
		      <div class="col-sm-10"> 
		         <select id="hopp" name="hopp"> 
		         	@php
		         		$result = DB::table('ai_users')->where('role_id',11)->get();
		         	@endphp
		         	@foreach ($result as $lm) 
				    	<option value="{{$lm->us_id}}">{{$lm->us_fullName}}</option> 
		         	@endforeach
				</select>
		        <span class="text-danger">{{ $errors->first('hopp')}} </span>
		      </div>
		</div>

{{-- for Hub Coordinator--}}
		<div id="div5" class="form-group userReg">
		    <label class="col-sm-2 control-label">Hofsp:</label> 
		      <div class="col-sm-10"> 
		         <select id="Hofsp" name="Hofsp"> 
		         	@php
		         		$result = DB::table('ai_users')->where('role_id',4)->get();
		         	@endphp
		         	@foreach ($result as $lm) 
				    	<option value="{{$lm->us_id}}">{{$lm->us_fullName}}</option> 
		         	@endforeach
				</select>
		        <span class="text-danger">{{ $errors->first('Hofsp')}} </span>
		      </div>
		</div>

	    </div>  
	  </div>
	  <!-- /.box-body -->
	  <div class="box-footer"> 
	    <button type="submit" class="btn btn-info pull-right">Save</button>
	  </div>
	  <!-- /.box-footer -->
	</form>
</div>

@endsection
