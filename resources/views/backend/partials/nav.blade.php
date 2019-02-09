        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="/result">
                                <i class="ti-view-list"></i>
                                <!--<p class="notification">5</p>-->
								<p>Entrance Results</p>
                            </a>
                        </li>
                        <li>
                            <a href="/admissions">
                                <i class="ti-view-list"></i>
                                <p class="notification">5</p>
								<p>Applications</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="/message">Contact Us</a></li>
                                <!--<li><a href="#">Notification 2</a></li>-->
                                <!--<li><a href="#">Notification 3</a></li>-->
                                <!--<li><a href="#">Notification 4</a></li>-->
                                <!--<li><a href="#">Another notification</a></li>-->
                              </ul>
                        </li>
						<li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        
	                                   @if( Auth::check())
	                                      <span class="ti-user"> {{ ucfirst(Auth::user()->username) }}</span>
	                                   @endif
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <!--<li><a href="#">Profile</a></li>-->
                                <li class="divider"></li>
                                <li>
                                        <a href="{{ route('logout') }}">
                                            Logout
                                        </a>
                                </li>

                              </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>