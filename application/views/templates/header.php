<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php echo $judul; ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?php echo base_url() . 'assets/img/icon.ico' ?>" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="<?php echo base_url() . 'assets/js/plugin/webfont/webfont.min.js' ?>"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['<?php echo base_url() . 'assets/css/fonts.min.css' ?>']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});

		function checkAll(ele) {
			var checkboxes = document.getElementsByTagName('input');
			if (ele.checked) {
				for (var i = 0; i < checkboxes.length; i++) {
					if (checkboxes[i].type == 'checkbox') {
						checkboxes[i].checked = true;
					}
				}
			} else {
				for (var i = 0; i < checkboxes.length; i++) {
					if (checkboxes[i].type == 'checkbox') {
						checkboxes[i].checked = false;
					}
				}
			}
		}
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/atlantis.min.css' ?>">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/demo.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/toggle.css' ?>">
</head>

<body data-background-color="bg1">
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="dark">

				<a href="<?php echo base_url() . 'home' ?>" class="logo">
					<img src="<?php echo base_url() . 'assets/img/logo.png' ?>" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>

						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?php echo base_url() . 'assets/img/profile.png' ?>" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="<?php echo base_url() . 'assets/img/profile.png' ?>" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4><?php echo $this->session->userdata('ses_id'); ?></h4>
												<p class="text-muted"><?php echo $this->session->userdata('ses_email'); ?></p>
												<a href="<?php echo base_url() . 'profil' ?>" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<!-- <div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Account Setting</a> -->
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?php echo base_url() . 'home/logout' ?>">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2" data-background-color="dark">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?php echo base_url() . 'assets/img/profile.png' ?>" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo $this->session->userdata('ses_id'); ?>
									<span class="user-level"><?php echo $this->session->userdata('ses_name'); ?></span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="<?php echo base_url() . 'profil' ?>">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="dashboard">
								<ul class="nav nav-collapse">
									<li class="<?php if ($this->uri->segment(1) == "home") {
													echo "active";
												} ?>">
										<a href="<?php echo base_url() . 'home' ?>">
											<span class="sub-item">Lab MST</span>
										</a>
									</li>
									<li class="<?php if ($this->uri->segment(1) == "telkom") {
													echo "active";
												} ?>">
										<a href="<?php echo base_url() . 'telkom' ?>">
											<span class="sub-item">Lab Telkom</span>
										</a>
									</li>
									<li class="<?php if ($this->uri->segment(1) == "history") {
													echo "active";
												} ?>">
										<a href="<?php echo base_url() . 'history' ?>">
											<span class="sub-item">History Data</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<!-- <li class="nav-item">
							<a data-toggle="collapse" href="#rooms">
								<i class="fas fa-layer-group"></i>
								<p>Config Rooms</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="rooms">
								<ul class="nav nav-collapse">
									<li>
										<a href="#">
											<span class="sub-item">Add New Room</span>
										</a>
									</li>
								</ul>
							</div>
						</li>	 -->
						<li class="nav-item <?php if ($this->uri->segment(1) == "add_user") {
												echo "active";
											} ?>">
							<a data-toggle="collapse" href="#users">
								<i class="fas fa-users"></i>
								<p>Config Users</p>
								<span class="caret"></span>
							</a>
							<div class="collapse <?php if ($this->uri->segment(1) == "add_user") {
														echo "show";
													} ?>" id="users">
								<ul class="nav nav-collapse">
									<li class="<?php if ($this->uri->segment(1) == "add_user") {
													echo "active";
												} ?>">
										<a href="<?php echo base_url() . 'add_user' ?>">
											<span class="sub-item">Add New User</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="#users">
								<i class="fas fa-lightbulb"></i>
								<p>About</p>
								<span class="caret"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->