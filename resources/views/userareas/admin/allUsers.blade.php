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
 

<div class="row-fluid sortable activities_data_table">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Activities List</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				<tr>
	              <th>SL</th>
	              <th>User Photo</th>
	              <th>User Name</th>
	              <th>User Email</th>
	              <th>User Contact</th>
	              <th>User Designations</th>
	              <th>Status</th>
                </tr>
			  </thead>   
			  <tbody> 
				@php
                	$i = 1;
                @endphp
                @forelse($allUsers as $user)
                <tr>
                  <td>{{$i}}</td>
                  <td><img src="{{url('/')}}{{$user->us_profileImg}}" height="50" width="80"></td>
                  <td>{{$user->us_fullName}}</td>
                  <td>{{$user->us_email}}</td>
                  <td>{{$user->us_mobile}}</td> 
                  <td>{{$user->ro_name}}</td>
                  <td>
                  	 @if ($user->status == 1)
                  	 	<a href="{{url('userActive/'.$user->us_id)}}" id="active"><i class="fa-toggle-on" aria-hidden="true"></i>Active</a>
                  	 	<br>(Click to Unactive)
                  	 @else
                  	 	<a href="{{url('userUnactive/'.$user->us_id)}}" id="unactive"><i class="fa-toggle-off" aria-hidden="true"></i>Unactive</a>
                  	 	<br>(Click to Active)
                  	 @endif
                  </td>
                  {{-- <td><span class="label label-success">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> --}}
                </tr>
                @php
                	$i = $i+1;
                @endphp
                @empty
                <tr>
                	Sorry no Data Found
                </tr>  
                @endforelse
				 
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->


@endsection 