<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
       <div class="sideber_menu"> 
    <section class="sidebar menu_sidebar">
      <!-- Sidebar user panel -->
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree"> 
         

        <li class="active">
          <a href="#">
            <i class="fa fa-dashboard"></i>  <span>Dashboard</span>
            <span class="pull-right-container"> 
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#"> 
            <i class="fa fa-bar-chart"></i>
            <span>My Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">  
            <li><a href="index.html"><i class="fa fa-fw fa-angle-double-right"></i> 
              <span class="hidden-tablet"> Activity Reports</span></a></li>
            <li><a href="index.html"><i class="fa fa-fw fa-angle-double-right"></i> 
              <span class="hidden-tablet"> Monthly progress reports</span></a></li>
            <li><a href="index.html"><i class="fa fa-fw fa-angle-double-right"></i> 
              <span class="hidden-tablet"> Quarterly Progress Reports</span></a></li>
            <li><a href="index.html"><i class="fa fa-fw fa-angle-double-right"></i> 
              <span class="hidden-tablet"> Bi-annual reports</span></a></li>
            <li><a href="index.html"><i class="fa fa-fw fa-angle-double-right"></i> 
              <span class="hidden-tablet"> Annual reports</span></a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#"> 
            <i class="fa fa-cubes"></i>
            <span>Activities</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">  
            <li><a href="add_activities.html"><i class="fa fa-fw fa-angle-double-right"></i> 
              <span class="hidden-tablet"> Activity List</span></a></li>
            <li><a href="index.html"><i class="fa fa-fw fa-angle-double-right"></i> 
              <span class="hidden-tablet"> Activity Concept Notes</span></a></li> 
          </ul>
        </li>


        <li class="treeview">
          <a href="#"> 
            <i class="fa fa-list-ol"></i>
            <span>MEL Framework</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">  
            <li><a href="index.html"><i class="fa fa-fw fa-angle-double-right"></i> 
              <span class="hidden-tablet"> Impact Indicators</span></a></li>
            <li><a href="index.html"><i class="fa fa-fw fa-angle-double-right"></i> 
              <span class="hidden-tablet"> Indicators</span></a></li> 
              <li><a href="index.html"><i class="fa fa-fw fa-angle-double-right"></i> 
              <span class="hidden-tablet"> Outcome Indicators</span></a></li> 
              <li><a href="index.html"><i class="fa fa-fw fa-angle-double-right"></i> 
              <span class="hidden-tablet"> Output Indicators</span></a></li> 
          </ul>
        </li>
        
        
        <li class="treeview">
          <a href="#"> 
            <i class="fa fa-fw fa-user"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">  
            <li><a href="{{url('allUsers/')}}"><i class="fa fa-fw fa-angle-double-right"></i> 
              <span class="hidden-tablet"> User List</span></a></li>
            <li><a href="{{url('newUser/')}}"><i class="fa fa-fw fa-angle-double-right"></i> 
              <span class="hidden-tablet"> Add New</span></a></li>  
          </ul>
        </li>

         

        <li><a href="index.html">  <i class="fa fa-clone"></i>  <span>Programmes</span> </a> </li> 
        <li><a href="index.html"><i class="fa fa-braille"></i>  <span>Projects</span> </a></li>
        <li><a href="index.html"><i class="fa fa-handshake-o"></i>  <span>Partnerships</span> </a></li>
        <li><a href="index.html"><i class="fa fa-file-text-o"></i>  <span>Priority Areas</span> </a></li>
        <li><a href="index.html"><i class="fa fa-calculator"></i>  <span>Finance</span> </a></li>

        <li class="treeview">
              <a href="#">
              <i class="fa fa-gears"></i> <span>Settings</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu menu-open">
              <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Generals</span></a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Categories</span></a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Currencies</span></a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Offline Payments</span></a></li> 
            </ul>
        </li>
 
          
      </ul>
    </section>
    </div>
    <!-- /.sidebar -->
  </aside>

<!--<div id="sidebar-left" class="span2">-->
<!--	<div class="nav-collapse sidebar-nav">-->
<!--		<ul class="nav nav-tabs nav-stacked main-menu"> -->

<!--			{{-- <li>-->
<!--				<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Activities</span><span class="label label-important"> 3 </span></a>-->
<!--				<ul>-->
<!--					<li><a class="submenu" href="{{URL::to('/AllActivities')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Activities List</span></a></li>-->
<!--					<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>-->
<!--					<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>-->
<!--				</ul>	-->
<!--			</li>  --}}-->



<!--			<li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	-->
<!--			<li>-->
<!--			<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Users</span><span class="label label-important"></span></a>-->
<!--				<ul>-->
<!--					<li><a class="submenu" href="{{url('allUsers/')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">User List</span></a></li>-->
<!--					<li><a class="submenu" href="{{url('newUser/')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add New</span></a></li> -->
<!--				</ul>	-->
<!--			</li>	-->
<!--			<li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>-->
<!--			<li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>-->
<!--			<li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>-->
<!--			<li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>-->
<!--			<li>-->
<!--				<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span><span class="label label-important"> 3 </span></a>-->
<!--				<ul>-->
<!--					<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>-->
<!--					<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>-->
<!--					<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>-->
<!--				</ul>	-->
<!--			</li>-->
<!--			<li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>-->
<!--			<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>-->
<!--			<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>-->
<!--			<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>-->
<!--			<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>-->
<!--			<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>-->
<!--			<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>-->
<!--			<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>-->
<!--			<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>-->
<!--		</ul>-->
<!--	</div>-->
<!--</div>-->



