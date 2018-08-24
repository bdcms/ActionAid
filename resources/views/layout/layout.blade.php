<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('/css/bootstrap.min.css')}} " rel="stylesheet">
<link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	
 
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
	<!-- end: Favicon -->

<!-- togole button style -->
<style> 
div.userReg
{
  display:none;
}
</style>
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="{{URL::to('/')}}"><span>{{session('userRole')}} Panel</span></a>
								
				<!-- start: Header Menu -->
				@include('layout.header')
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			@include('layout.sidebar')
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10"> 
       			@yield('content') 
			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="{{asset('js/jquery-1.9.1.min.js')}}"></script>
		<script src="{{asset('js/jquery-migrate-1.0.0.min.js')}}"></script>
	
		<script src="{{asset('js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	
		<script src="{{asset('js/jquery.ui.touch-punch.js')}}"></script>
	
		<script src="{{asset('js/modernizr.js')}}"></script>
	
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
	
		<script src="{{asset('js/jquery.cookie.js')}}"></script>
	
		<script src='{{asset('js/fullcalendar.min.js')}}'></script>
	
		<script src='{{asset('js/jquery.dataTables.min.js')}}'></script>

		<script src="{{asset('js/excanvas.js')}}"></script>

		<script src="{{asset('js/jquery.flot.js')}}"></script>

		<script src="{{asset('js/jquery.flot.pie.js')}}"></script>

		<script src="{{asset('js/jquery.flot.stack.js')}}"></script>

		<script src="{{asset('js/jquery.flot.resize.min.js')}}"></script>
	
		<script src="{{asset('js/jquery.chosen.min.js')}}"></script>
	
		<script src="{{asset('js/jquery.uniform.min.js')}}"></script>
		
		<script src="{{asset('js/jquery.cleditor.min.js')}}"></script>
	
		<script src="{{asset('js/jquery.noty.js')}}"></script>
	
		<script src="{{asset('js/jquery.elfinder.min.js')}}"></script>
	
		<script src="{{asset('js/jquery.raty.min.js')}}"></script>
	
		<script src="{{asset('js/jquery.iphone.toggle.js')}}"></script>
	
		<script src="{{asset('js/jquery.uploadify-3.1.min.js')}}"></script>
	
		<script src="{{asset('js/jquery.gritter.min.js')}}"></script>
	
		<script src="{{asset('js/jquery.imagesloaded.js')}}"></script>
	
		<script src="{{asset('js/jquery.masonry.min.js')}}"></script>
	
		<script src="{{asset('js/jquery.knob.modified.js')}}"></script>
	
		<script src="{{asset('js/jquery.sparkline.min.js')}}"></script>
	
		<script src="{{asset('js/counter.js')}}"></script>
	
		<script src="{{asset('js/retina.js')}}"></script>

		<script src="{{asset('js/custom.js')}}"></script>

		<script type="text/javascript">
			$('#category').on('change', function () {
			    $('div.userReg').hide();
			    var val = $('#category option:selected').val();
			    console.log(val);
			    $('#div' + val).show();
			});
		</script>

		{{-- <script type="text/javascript">
    $('#active').click(function(){   
    	//alert('Something');
	       $.ajax({
			url:"{{ url('/ajax_status_active'.'/'.$user->us_id)}}",
			method:"GET",
			data:{_token:'{{csrf_token()}}'},
			success:function(data){
				//alert('');
				// $('#keystatus').fadeIn();
				// $('#keystatus').html(data);
				console.log(data);
			}
		});
});
    // setInterval(function(){
    //     $('#autoview').load("{{url('/showdata')}}").fadeIn('slow');
    // },1000);
</script> --}}
	<!-- end: JavaScript-->
	
</body>
</html>
