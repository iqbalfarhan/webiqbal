<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ $title ?? "Dashboard" }} - {{ env('APP_NAME') }}</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">

	<link rel="stylesheet" href="/adminlte/bower_components/font-awesome/css/font-awesome.min.css">

	<link rel="stylesheet" href="/adminlte/bower_components/Ionicons/css/ionicons.min.css">

	<link rel="stylesheet" href="/adminlte/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="/adminlte/dist/css/skins/skin-blue.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	@livewireStyles
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="/home" class="logo">
				<span class="logo-mini"><b>B</b>MD</span>
				<span class="logo-lg"><b>{{ env('APP_NAME') }}</b></span>
			</a>

			<nav class="navbar navbar-static-top" role="navigation">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown messages-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-user-plus"></i>
							</a>
							<ul class="dropdown-menu">
								<li class="header">0 Pendaftar bot baru</li>
								<li>
									<ul class="menu">
									</ul>
								</li>
								<li class="footer"><a href="/user"> Lihat semua</a></li>
							</ul>
						</li>
						<li class="dropdown notifications-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
								<span class="label label-warning">8</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">Terdapat 8 Threshold Alarm</li>
								<li>
									<ul class="menu">
										<li>
											<a href="/alarm/60a5372e278ada24dd296d52">
												TTC-BJB-PSS32-03/IROADM-1-2-LINEOUT - BANJARBARU-PSS32-02/IROADM-1-3-LINEIN <small class="text-muted">8 jam yang lalu</small>
											</a>
										</li>
									</ul>
								</li>
								<li class="footer"><a href="/alarm?type=threshold">Lihat semua</a></li>
							</ul>
						</li>
						<li class="dropdown notifications-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-flag-o"></i>
								<span class="label label-danger">3</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">Terdapat 3 Degrade Alarm</li>
								<li>
									<ul class="menu">
										<li>
											<a href="/alarm/60a5a3b2a177d306124c5cc2">
												SAMPIT-PSS32-02/AHPHG-1-2-LINE - SP-BANGKAL-PSS32/AHPHG-1-2-LINE <small class="text-muted">31 menit yang lalu</small>
											</a>
										</li>
									</ul>
								</li>
								<li class="footer"><a href="/alarm?type=degrade">Lihat semua</a></li>
							</ul>
						</li>

						<li class="dropdown user user-menu">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown">

								<img src="/adminlte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">

								<span class="hidden-xs">{{ auth()->user()->name }}</span>
							</a>
							<ul class="dropdown-menu">

								<li class="user-header">
									<img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

									<p>
										{{ auth()->user()->name }} - admin
										<small>Member since {{ auth()->user()->created_at->format("M, Y") }}</small>
									</p>
								</li>

								<li class="user-footer">
									<div class="pull-left">
										<a href="/user/606fc6b2987a1e332e764272/edit" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right">
										<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
									</div>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<aside class="main-sidebar">


			<section class="sidebar">


				<div class="user-panel">
					<div class="pull-left image">
						<img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>{{ auth()->user()->name }}</p>
						<a href="#"><i class="fa fa-user text-success"></i> admin role</a>
					</div>
				</div>


				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" id="q" class="form-control" placeholder="Search menu...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>



				<ul class="sidebar-menu" data-widget="tree" id="menu-list">
					<li class="header">MAIN MENU</li>
					<li>
						<a href="{{ route('home') }}">
							<i class="fa fa-dashboard"></i>
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="{{ route('project.index') }}">
							<i class="fa fa-briefcase"></i>
							<span>Projects</span>
						</a>
					</li>
					<li>
						<a href="{{ route('terminal.index') }}">
							<i class="fa fa-terminal"></i>
							<span>Terminal</span>
						</a>
					</li>
					<li>
						<a href="{{ route('profile.index') }}">
							<i class="fa fa-user"></i>
							<span>Profile</span>
						</a>
					</li>
					<li>
						<a href="{{ route('socialmedia.index') }}">
							<i class="fa fa-commenting"></i>
							<span>Social media</span>
						</a>
					</li>
					<li class="header">ADMIN MENU</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-cog"></i>
							<span>Pengaturan</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="">Update cookies</a></li>
							<li><a href="">Update profile</a></li>
							<li><a href="">Telegram Bot</a></li>
						</ul>
					</li>
				</ul>

			</section>

		</aside>


		<div class="content-wrapper">
			@if (session('status'))
			<div class="callout callout-success" role="callout" style="border-radius: 0">
				{{ session('status') }}
			</div>
			@endif
			
			<section class="content-header">
				<h1>
					{{ $title ?? "Dashboard" }}
					<small>{{ $subtitle ?? "Control panel" }}</small>
				</h1>
			</section>

			<section class="content container-fluid">
				@yield('content')
			</section>
		</div>
		<footer class="main-footer">

			<div class="pull-right hidden-xs">
				{{ auth()->user()->name }}
			</div>

			<strong>{{ env('APP_NAME') }} &copy; {{ date('Y') }} <a href="#">iqbalfarhan.xyz</a>.</strong> WebCMS
		</footer>
		<aside class="control-sidebar control-sidebar-dark">

			<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
				<li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
				<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
			</ul>

			<div class="tab-content">

				<div class="tab-pane active" id="control-sidebar-home-tab">
					<h3 class="control-sidebar-heading">Recent Activity</h3>
					<ul class="control-sidebar-menu">
						<li>
							<a href="javascript:;">
								<i class="menu-icon fa fa-birthday-cake bg-red"></i>

								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

									<p>Will be 23 on April 24th</p>
								</div>
							</a>
						</li>
					</ul>


					<h3 class="control-sidebar-heading">Tasks Progress</h3>
					<ul class="control-sidebar-menu">
						<li>
							<a href="javascript:;">
								<h4 class="control-sidebar-subheading">
									Custom Template Design
									<span class="pull-right-container">
										<span class="label label-danger pull-right">70%</span>
									</span>
								</h4>

								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
								</div>
							</a>
						</li>
					</ul>


				</div>


				<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>


				<div class="tab-pane" id="control-sidebar-settings-tab">
					<form method="post">
						<h3 class="control-sidebar-heading">General Settings</h3>

						<div class="form-group">
							<label class="control-sidebar-subheading">
								Report panel usage
								<input type="checkbox" class="pull-right" checked>
							</label>

							<p>
								Some information about this general settings option
							</p>
						</div>

					</form>
				</div>

			</div>
		</aside>
		<div class="control-sidebar-bg"></div>
	</div>


	<script src="/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="/adminlte/dist/js/adminlte.min.js"></script>

	<script>
		$(document).ready(function(){
			$("#myInput").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("tbody tr").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});

			$("#q").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$(".sidebar-menu li:not('.header')").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script>

	@livewireScripts

</body>
</html>