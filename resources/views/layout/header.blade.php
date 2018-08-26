<nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                
              {{session()->get('userName')}}
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu logout_dropdown">
               <li><a href="{{url('getProfile/')}}"><i class="fa fa-fw fa-user"></i> Profile</a></li>
				<li><a href="{{url('logout/')}}"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          
          
          
          
           
          
        </ul>
      </div>
    </nav>

<!--<div class="nav-no-collapse header-nav">-->
<!--					<ul class="nav pull-right">-->
<!--						<li class="dropdown hidden-phone">-->
<!--							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">-->
<!--								<i class="halflings-icon white warning-sign"></i>-->
<!--							</a>-->
<!--							<ul class="dropdown-menu notifications">-->
<!--								<li class="dropdown-menu-title">-->
<!-- 									<span>You have 11 notifications</span>-->
<!--									<a href="#refresh"><i class="icon-repeat"></i></a>-->
<!--								</li>	-->
<!--                            	<li>-->
<!--                                    <a href="#">-->
<!--										<span class="icon blue"><i class="icon-user"></i></span>-->
<!--										<span class="message">New user registration</span>-->
<!--										<span class="time">1 min</span> -->
<!--                                    </a>-->
<!--                                </li>-->
<!--								<li>-->
<!--                                    <a href="#">-->
<!--										<span class="icon green"><i class="icon-comment-alt"></i></span>-->
<!--										<span class="message">New comment</span>-->
<!--										<span class="time">7 min</span> -->
<!--                                    </a>-->
<!--                                </li>-->
								 
<!--                                <li class="dropdown-menu-sub-footer">-->
<!--                            		<a>View all notifications</a>-->
<!--								</li>	-->
<!--							</ul>-->
<!--						</li>-->
						<!-- start: Notifications Dropdown -->
<!--						<li class="dropdown hidden-phone">-->
<!--							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">-->
<!--								<i class="halflings-icon white tasks"></i>-->
<!--							</a>-->
<!--							<ul class="dropdown-menu tasks">-->
<!--								<li class="dropdown-menu-title">-->
<!-- 									<span>You have 17 tasks in progress</span>-->
<!--									<a href="#refresh"><i class="icon-repeat"></i></a>-->
<!--								</li>-->
<!--								<li>-->
<!--                                    <a href="#">-->
<!--										<span class="header">-->
<!--											<span class="title">iOS Development</span>-->
<!--											<span class="percent"></span>-->
<!--										</span>-->
<!--                                        <div class="taskProgress progressSlim red">80</div> -->
<!--                                    </a>-->
<!--                                </li> -->
<!--								<li>-->
<!--                            		<a class="dropdown-menu-sub-footer">View all tasks</a>-->
<!--								</li>	-->
<!--							</ul>-->
<!--						</li>-->
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
<!--						<li class="dropdown hidden-phone">-->
<!--							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">-->
<!--								<i class="halflings-icon white envelope"></i>-->
<!--							</a>-->
<!--							<ul class="dropdown-menu messages">-->
<!--								<li class="dropdown-menu-title">-->
<!-- 									<span>You have 9 messages</span>-->
<!--									<a href="#refresh"><i class="icon-repeat"></i></a>-->
<!--								</li>	 -->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>-->
<!--										<span class="header">-->
<!--											<span class="from">-->
<!--										    	Dennis Ji-->
<!--										     </span>-->
<!--											<span class="time">-->
<!--										    	Jul 25, 2012-->
<!--										    </span>-->
<!--										</span>-->
<!--                                        <span class="message">-->
<!--                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore-->
<!--                                        </span>  -->
<!--                                    </a>-->
<!--                                </li>-->
<!--								<li>-->
<!--                            		<a class="dropdown-menu-sub-footer">View all messages</a>-->
<!--								</li>	-->
<!--							</ul>-->
<!--						</li>-->
						<!-- end: Message Dropdown -->
<!--						<li>-->
<!--							<a class="btn" href="#">-->
<!--								<i class="halflings-icon white wrench"></i>-->
<!--							</a>-->
<!--						</li>-->
						<!-- start: User Dropdown -->
<!--						<li class="dropdown">-->
<!--							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">-->
<!--								<i class="halflings-icon white user"></i> {{session()->get('userName')}}-->
<!--								<span class="caret"></span>-->
<!--							</a>-->
<!--							<ul class="dropdown-menu">-->
<!--								<li class="dropdown-menu-title">-->
<!-- 									<span>Account Settings</span>-->
<!--								</li>-->
<!--								<li><a href="{{url('getProfile/')}}"><i class="halflings-icon user"></i> Profile</a></li>-->
<!--								<li><a href="{{url('logout/')}}"><i class="halflings-icon off"></i> Logout</a></li>-->
<!--							</ul>-->
<!--						</li>-->
						<!-- end: User Dropdown -->
<!--					</ul>-->
<!--				</div>-->