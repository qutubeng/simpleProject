<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Invoice - Ace Admin</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- basic styles -->

		<link href="http://www.admin.twosell.loc/lib/bootstrap3.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="http://www.admin.twosell.loc/lib/font-awesome/css/font-awesome.min.css">

		<!--[if IE 7]>
		  <link rel="stylesheet" href="http://www.admin.twosell.loc/lib/font-awesome/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
		<!-- ace styles -->

		<link rel="stylesheet" href="http://www.admin.twosell.loc/template/my-site/css/ace.min.css">
		<link rel="stylesheet" href="http://www.admin.twosell.loc/template/my-site/css/ace-rtl.min.css">
		<link rel="stylesheet" href="http://www.admin.twosell.loc/template/my-site/css/ace-skins.min.css">

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="http://www.admin.twosell.loc/template/my-site/css/ace-ie.min.css" />
		<![endif]-->
		
		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="js/ace-extra.min.js"></script>
		
		<!-- dont know yet after this need to find these two files -->
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		
		
	</head>
	<body class="navbar-fixed" style="">
		<div class="navbar navbar-default navbar-fixed-top" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>
			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
						<a href="http://192.69.216.111/themes/preview/ace/invoice.html#" class="navbar-brand">
							<small>
								<i class="icon-leaf"></i>
								<b>TWOSELL</b> Admin
							</small>
						</a><!-- /.brand -->
				</div><!-- /.navbar-header -->
				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="http://192.69.216.111/themes/preview/ace/invoice.html#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-ok"></i>
									4 Tasks to complete
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
										<div class="clearfix">
											<span class="pull-left">Software Update</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="progress-bar "></div>
										</div>
									</a>
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
										<div class="clearfix">
											<span class="pull-left">Hardware Upgrade</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:35%" class="progress-bar progress-bar-danger"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
										<div class="clearfix">
											<span class="pull-left">Unit Testing</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:15%" class="progress-bar progress-bar-warning"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
										<div class="clearfix">
											<span class="pull-left">Bug Fixes</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-striped active">
											<div style="width:90%" class="progress-bar progress-bar-success"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
										See tasks with details
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>
						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="http://192.69.216.111/themes/preview/ace/invoice.html#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-warning-sign"></i>
									8 Notifications
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
										<i class="btn btn-xs btn-primary icon-user"></i>
										Bob just signed up as an editor ...
									</a>
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												New Orders
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
										See all notifications
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="http://192.69.216.111/themes/preview/ace/invoice.html#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-envelope-alt"></i>
									5 Messages
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
										<img src="./Invoice - Ace Admin_files/avatar.png" class="msg-photo" alt="Alex&#39;s Avatar">
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
										<img src="./Invoice - Ace Admin_files/avatar3.png" class="msg-photo" alt="Susan&#39;s Avatar">
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
										<img src="./Invoice - Ace Admin_files/avatar4.png" class="msg-photo" alt="Bob&#39;s Avatar">
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/inbox.html">
										See all messages
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="http://192.69.216.111/themes/preview/ace/invoice.html#" class="dropdown-toggle">
								<img class="nav-user-photo" src="./Invoice - Ace Admin_files/user.jpg" alt="Jason&#39;s Photo">
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->	
				
			</div>
		</div><!-- /.navbar. navbar-fixed-top -->
		
		<!-- used for left and content -->
		<div class="main-container" id="main-container">
			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="http://192.69.216.111/themes/preview/ace/invoice.html#">
					<span class="menu-text"></span>
				</a>
				<div class="sidebar" id="sidebar">
					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->
					<!-- end sidebar-shortcut  -->
					<ul class="nav nav-list">
						<li>
							<a href="http://192.69.216.111/themes/preview/ace/index.html">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> Dashboard </span>
							</a>
						</li>
						<li class="active open">
							<a href="http://192.69.216.111/themes/preview/ace/invoice.html#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> UI Elements </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="http://192.69.216.111/themes/preview/ace/elements.html">
										<i class="icon-double-angle-right"></i>
										Elements
									</a>
								</li>

								<li class="active">
									<a href="http://192.69.216.111/themes/preview/ace/buttons.html">
										<i class="icon-double-angle-right"></i>
										Buttons &amp; Icons
									</a>
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/treeview.html">
										<i class="icon-double-angle-right"></i>
										Treeview
									</a>
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/jquery-ui.html">
										<i class="icon-double-angle-right"></i>
										jQuery UI
									</a>
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/nestable-list.html">
										<i class="icon-double-angle-right"></i>
										Nestable Lists
									</a>
								</li>

								<li>
									<a href="http://192.69.216.111/themes/preview/ace/invoice.html#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>

										Three Level Menu
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
												<i class="icon-leaf"></i>
												Item #1
											</a>
										</li>

										<li>
											<a href="http://192.69.216.111/themes/preview/ace/invoice.html#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												4th level
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
														<i class="icon-plus"></i>
														Add Product
													</a>
												</li>

												<li>
													<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">
														<i class="icon-eye-open"></i>
														View Products
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>	 
					
					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>
				<!-- end sidebar -->
				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">Home</a>
							</li>

							<li>
								<a href="http://192.69.216.111/themes/preview/ace/invoice.html#">More Pages</a>
							</li>
							<li class="active">Invoice</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off">
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>
					<!-- end breadcrumbs -->
					<div class="page-content">
						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="icon-double-angle-right"></i>
									overview &amp; stats
								</small>
							</h1>
						</div><!-- /.page-header -->
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="space-6"></div>
								<div class="row">
									<div class="col-xs-12">
										<!-- PAGE CONTENT BEGINS -->
										
										body sd
										<br />
										asd
									</div>
			
			
								</div>
								<!-- end row -->
							</div>
							<!-- end col-xs-12 -->
						</div>
					</div>
					<!-- end page content -->		
				</div>
				<!-- end main-content -->		
			</div>
			<!-- Main container inner -->
			
			
			<a href="http://192.69.216.111/themes/preview/ace/invoice.html#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
		<!-- footer? -->
		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="js/jquery.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script type="text/javascript">
			 window.jQuery || document.write("<script src='js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>
		<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->

		<script src="js/ace-elements.min.js"></script>
		<script src="js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	</body>
</html>