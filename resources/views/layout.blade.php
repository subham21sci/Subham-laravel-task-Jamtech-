<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>@yield('title_section')</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="/adminassets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="/adminassets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="/adminassets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="/adminassets/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="/adminassets/assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="/adminassets/assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="/adminassets/assets/css/material_style.css">
	<!-- inbox style -->
	<link href="/adminassets/assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="/adminassets/assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="/adminassets/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="/adminassets/assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="/adminassets/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="/adminassets/assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="/assets/favicon.png" />
    <link href="/adminassets/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet">

    @yield('css_section')
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="/admin">
						<span class="logo-default" style="font-size: 16px;">  Jamtech Technologies</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
						<!-- start language menu -->
						
						<!-- end language menu -->
						
						
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<img alt="" class="img-circle " src="/adminassets/assets/img/dp.jpg" />
								<span class="username username-hide-on-mobile"> {{Auth::user()->name}} </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="/logout">
										<i class="icon-logout"></i> Log Out </a>
								</li>
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left info">
										<p> {{Auth::user()->name}}</p>
										<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												Online</span></a>
									</div>
								</div>
							</li>
							<li class="nav-item start active open">
								<a href="/admin" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
									<span class="selected"></span>
								</a>
								
							</li>
							
                            <li class="nav-item start">
								<a href="user-list" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">user-list</span>
									<span class="selected"></span>
								</a>
								
							</li>
    
							
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
            @yield('content_section')
		</div>
		<!-- end page container -->
		<!-- start footer -->
		
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="/adminassets/assets/plugins/jquery/jquery.min.js"></script>
	<script src="/adminassets/assets/plugins/popper/popper.js"></script>
	<script src="/adminassets/assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="/adminassets/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="/adminassets/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="/adminassets/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="/adminassets/assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="/adminassets/assets/js/pages/sparkline/sparkline-data.js"></script>
	<!-- Common js-->
	<script src="/adminassets/assets/js/app.js"></script>
	<script src="/adminassets/assets/js/layout.js"></script>
	<script src="/adminassets/assets/js/theme-color.js"></script>
	<!-- material -->
	<script src="/adminassets/assets/plugins/material/material.min.js"></script>
	<!--apex chart-->
	<script src="/adminassets/assets/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="/adminassets/assets/js/pages/chart/chartjs/home-data.js"></script>
	<!-- summernote -->
	<script src="/adminassets/assets/plugins/summernote/summernote.js"></script>
	<script src="/adminassets/assets/js/pages/summernote/summernote-data.js"></script>
	<!-- end js include path -->

    <!-- data tables -->
<script src="/adminassets/assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="/adminassets/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
	<script src="/adminassets/assets/js/pages/table/table_data.js"></script>

    @yield('js_section')

</body>

</html>