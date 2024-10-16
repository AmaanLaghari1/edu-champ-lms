
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->
<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />
	
	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('admin')}}/assets/images/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>EduWise : @stack('title') </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="{{asset('admin')}}/assets/js/html5shiv.min.js"></script>
	<script src="{{asset('admin')}}/assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/css/assets.css">
	<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/vendors/calendar/fullcalendar.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/css/shortcodes/shortcodes.css">

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.bootstrap5.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/css/dashboard.css">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/css/color/color-1.css">
	@stack('css')
</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	
	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<div class="ttr-logo-box">
				<div>
					<a href="{{route('dashboard')}}" class="ttr-logo">
						<img class="ttr-logo-mobile" alt="" src="{{asset('admin')}}/assets/images/logo-mobile.png" width="30" height="30">
						<img class="ttr-logo-desktop" alt="" src="{{asset('admin')}}/assets/images/logo-white.png" width="160" height="27">
					</a>
				</div>
			</div>
			<!--logo end -->
			<div class="ttr-header-menu">
				<!-- header left menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="/" class="ttr-material-button ttr-submenu-toggle">HOME</a>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle">QUICK MENU <i class="fa fa-angle-down"></i></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="../courses.html">Our Courses</a></li>
								<li><a href="../event.html">New Event</a></li>
								<li><a href="../membership.html">Membership</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<!-- header left menu end -->
			</div>
			<div class="ttr-header-right ttr-with-seperator">
				<!-- header right menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="fa fa-bell"></i></a>
						<div class="ttr-header-submenu noti-menu">
							<div class="ttr-notify-header">
								<span class="ttr-notify-text-top">9 New</span>
								<span class="ttr-notify-text">User Notifications</span>
							</div>
							<div class="noti-box-list">
								<ul>
									<li>
										<span class="notification-icon dashbg-gray">
											<i class="fa fa-check"></i>
										</span>
										<span class="notification-text">
											<span>Sneha Jogi</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 02:14</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-yellow">
											<i class="fa fa-shopping-cart"></i>
										</span>
										<span class="notification-text">
											<a href="#">Your order is placed</a> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 7 Min</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-red">
											<i class="fa fa-bullhorn"></i>
										</span>
										<span class="notification-text">
											<span>Your item is shipped</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 2 May</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-green">
											<i class="fa fa-comments-o"></i>
										</span>
										<span class="notification-text">
											<a href="#">Sneha Jogi</a> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 14 July</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-primary">
											<i class="fa fa-file-word-o"></i>
										</span>
										<span class="notification-text">
											<span>Sneha Jogi</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 15 Min</span>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img alt="" 
							src="{{auth()->user()->picture ? asset('website/assets/images/uploads/'. auth()->user()->picture)  : asset('admin/assets/images/testimonials/pic3.jpg')}}" 
							width="32" height="32"></span></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="{{route('user_profile')}}">My profile</a></li>
								<li><a href="list-view-calendar.html">Activity</a></li>
								<li><a href="mailbox.html">Messages</a></li>
								<li>
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button class="btn btn-sm btn-danger" type="submit">Logout</button>
                                    </form>
                                </li>
							</ul>
						</div>
					</li>
					<li class="ttr-hide-on-mobile">
						<a href="#" class="ttr-material-button"><i class="ti-layout-grid3-alt"></i></a>
						<div class="ttr-header-submenu ttr-extra-menu">
							<a href="#">
								<i class="fa fa-music"></i>
								<span>Musics</span>
							</a>
							<a href="#">
								<i class="fa fa-youtube-play"></i>
								<span>Videos</span>
							</a>
							<a href="#">
								<i class="fa fa-envelope"></i>
								<span>Emails</span>
							</a>
							<a href="#">
								<i class="fa fa-book"></i>
								<span>Reports</span>
							</a>
							<a href="#">
								<i class="fa fa-smile-o"></i>
								<span>Persons</span>
							</a>
							<a href="#">
								<i class="fa fa-picture-o"></i>
								<span>Pictures</span>
							</a>
						</div>
					</li>
				</ul>
				<!-- header right menu end -->
			</div>
			<!--header search panel start -->
			<div class="ttr-search-bar">
				<form class="ttr-search-form">
					<div class="ttr-search-input-wrapper">
						<input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
						<button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
					</div>
					<span class="ttr-search-close ttr-search-toggle">
						<i class="ti-close"></i>
					</span>
				</form>
			</div>
			<!--header search panel end -->
		</div>
	</header>
	<!-- header end -->
    @include('backend.includes.sidebar')
    @yield('main')

	<div class="ttr-overlay"></div>

<!-- External JavaScripts -->
<script src="{{asset('admin')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('admin')}}/assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="{{asset('admin')}}/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('admin')}}/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="{{asset('admin')}}/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="{{asset('admin')}}/assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="{{asset('admin')}}/assets/vendors/counter/waypoints-min.js"></script>
<script src="{{asset('admin')}}/assets/vendors/counter/counterup.min.js"></script>
<script src="{{asset('admin')}}/assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="{{asset('admin')}}/assets/vendors/masonry/masonry.js"></script>
<script src="{{asset('admin')}}/assets/vendors/masonry/filter.js"></script>
<script src="{{asset('admin')}}/assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src='{{asset('admin')}}/assets/vendors/scroll/scrollbar.min.js'></script>
<script src="{{asset('admin')}}/assets/js/functions.js"></script>
<script src="{{asset('admin')}}/assets/vendors/chart/chart.min.js"></script>
<script src="{{asset('admin')}}/assets/js/admin.js"></script>
<script src='{{asset('admin')}}/assets/vendors/calendar/moment.min.js'></script>
<script src='{{asset('admin')}}/assets/vendors/calendar/fullcalendar.js'></script>
<script src='{{asset('admin')}}/assets/vendors/switcher/switcher.js'></script>
<script type="text/javascript" src="{{asset('website/assets')}}/js/sweetalert2@11.js"></script>

@if (Session::has('message'))
	<script>
		Swal.fire({
			title: "{{ Session::get('title') }}",
			text: "{{ Session::get('message') }}",
			icon: "{{ Session::get('type') }}",
			timer: 5000

		})
	</script>
@endif
@stack('js')
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->
</html>