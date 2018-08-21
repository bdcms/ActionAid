@extends('layout.layout')
@section('content')
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tasks</a></li>
			</ul>

			<div class="row-fluid custom_row_fluid">  
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add New Activities</button>
				<a href="#" type="button" class="btn btn-primary btn-lg" >Print Activities</a> 
				
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="myModalLabel">Add a New Activities</h4>
					      </div>
					      <div class="modal-body">
					        <div class="default_form float_width activities_form">
								<form class="form-inline">
								  	<div class="form-group">
								  		<div class="span3"> 
								    		<label for="exampleInputName2">Activities Name:</label>
								  		</div>
								  		<div class="span9 default_form_txtfield">  
								    		<input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
								  		</div>
								  	</div>
								  	<div class="form-group">
								  		<div class="span3"> 
								    		<label for="exampleInputName2">Indicator:</label>
								  		</div>
								  		<div class="span9 default_form_txtfield" placeholder="Jane Doe">  
								    		<select class="form-control">
											  	<option>1</option>
											  	<option>2</option>
											  	<option>3</option>
											  	<option>4</option>
											  	<option>5</option>
											</select>
								  		</div>
								  	</div>

								  	<div class="form-group">
								  		<div class="span3">  
								  		</div>
								  		<div class="span9 default_form_txtfield" placeholder="Jane Doe">  
								    		 <button type="submit" class="btn btn-primary">Save changes</button>
											
								  		</div>
								  	</div>
								   
								 
								</form>
							</div>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
					      </div>
					    </div>
					  </div>
					</div>
			</div>

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
					  <th>Activities Name</th>
					  <th>Indicator Name</th>
					  <th>Create Date</th>
					  <th style="width: 50px;">Status</th>
					  <th style="width: 130px;">Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
				<tr>
					<td>dfsdf sdf sdf  regfdgfdg</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					
					<td class="center">
						<span class="label label-success">Active</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>  
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>  
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>
				<tr>
					<td>jhkhjgf Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-success">Active</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>  
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>  
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-success">Active</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>  
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>  
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
					</td>
				</tr>
				<tr>
					<td>A Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-success">Active</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-important">Banned</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-important">Banned</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-warning">Pending</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-warning">Pending</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-success">Active</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-success">Active</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-important">Banned</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-important">Banned</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label">Inactive</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label">Inactive</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-warning">Pending</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
							
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-warning">Pending</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
							
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-warning">Pending</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
							
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-success">Active</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
							
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-important">Banned</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
							
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label">Inactive</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
							
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label">Inactive</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
							
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-warning">Pending</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
							
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-warning">Pending</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
							
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-success">Active</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
							
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-success">Active</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
							
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-important">Banned</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
							
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-important">Banned</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
							
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label">Inactive</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
							
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-warning">Pending</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
							
						</a>
					</td>
				</tr>
				<tr>
					<td>Dennis Ji</td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-warning">Pending</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
							
						</a>
					</td>
				</tr>
				<tr>
					<td>sdfsdf sdf sdf dsf </td>
					<td class="center">Member</td>
					<td class="center">2012/01/01</td>
					<td class="center">
						<span class="label label-warning">Pending</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
							<i class="halflings-icon white zoom-in"></i>                                            
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 

						</a>
					</td>
				</tr>
				 
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->
@endsection