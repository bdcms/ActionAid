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

@endsection