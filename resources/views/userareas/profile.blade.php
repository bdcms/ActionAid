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
	<form class="form-horizontal" action="{{url('updateProfile/')}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
	  <div class="box-body">
	    <div class="form-group">
	      <label for="inputEmail3" class="col-sm-2 control-label">Full Name:</label> 
	      <div class="col-sm-10">
	        <input type="text" name="FullName" class="form-control" value="{{$getUser->us_fullName}}">
	        <span class="text-danger">{{ $errors->first('FullName')}} </span>
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="inputEmail3" class="col-sm-2 control-label">User Email:</label> 
	      <div class="col-sm-10">
	        <input type="email" name="email" class="form-control" id="inputEmail3" value="{{$getUser->us_email}}">
	        <span class="text-danger">{{ $errors->first('email')}} </span>
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="inputEmail3" class="col-sm-2 control-label">User Contact:</label> 
	      <div class="col-sm-10">
	        <input type="number" name="contact" class="form-control" value="{{$getUser->us_mobile}}">
	        <span class="text-danger">{{ $errors->first('contact')}} </span>
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="inputEmail3" class="col-sm-2 control-label">User Location ID:</label> 
	      <div class="col-sm-10">
	        <input type="number" name="Location" class="form-control" value="{{$getUser->us_location}}">
	        <span class="text-danger">{{ $errors->first('Location')}} </span>
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="inputEmail3" class="col-sm-2 control-label">User Profile Pic:</label> 
	      <div class="col-sm-10">
	      	<img src="{{url('/')}}{{$getUser->us_profileImg}}" height="50px" width="80px">
	        <input type="file" name="profile_img" class="form-control">
	        <span class="text-danger">{{ $errors->first('profile_img')}} </span>
	      </div>
	    </div>
	    <input type="hidden" name="old_img" value="{{$getUser->us_profileImg}}">
	    <div class="form-group">
	      <label for="inputEmail3" class="col-sm-2 control-label">Password:</label> 
	      <div class="col-sm-10">
	      	<span>If you don't change your password, please make it empty</span>
	        <input type="password" name="password" class="form-control">
	        <span class="text-danger">{{ $errors->first('password')}} </span>
	      </div>
	    </div>
	  </div>
	  <!-- /.box-body -->
	  <div class="box-footer"> 
	    <button type="submit" class="btn btn-info pull-right">Update</button>
	  </div>
	  <!-- /.box-footer -->
	</form>
</div>

@endsection
