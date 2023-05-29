<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" type="image/png" href="{{ asset('kcnew/frontend/img/news.jpg') }}"  sizes="160x160">
	<!--plugins-->
	@yield("style")
	<link href="{{ asset('admin_dashboard_assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin_dashboard_assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin_dashboard_assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('admin_dashboard_assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('admin_dashboard_assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('admin_dashboard_assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('admin_dashboard_assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_dashboard_assets/css/icons.css') }}" rel="stylesheet">

    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('admin_dashboard_assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_dashboard_assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_dashboard_assets/css/header-colors.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_dashboard_assets/css/my-style.css') }}" />
    <title>News - Quản Trị</title>
</head>

<body>

    @if(Session::has('success'))
        <div class="general-message alert alert-info">{{ Session::get('success') }}</div>
    @endif

    @if(Session::has('error'))
        <div class="general-message alert alert-danger">{{ Session::get('error') }}</div>
    @endif

	<div class="wrapper">	
		@include("admin_dashboard.layouts.header")
		@include("admin_dashboard.layouts.nav")
		@yield("wrapper")
		<div class="overlay toggle-icon"></div>
		<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>	
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('admin_dashboard_assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('admin_dashboard_assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('admin_dashboard_assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('admin_dashboard_assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('admin_dashboard_assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('admin_dashboard_assets/js/app.js') }}"></script>
	@yield("script")
</body>

</html>
