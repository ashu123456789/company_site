<html lang="en">
<!--begin::Head-->

<head>
	<base href="../../../">
	<meta charset="utf-8" />
	<title>Deorwine</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
	<meta name="keywords" content="" />
	<link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="{{ asset('images/deorwine-favicon.png') }}" type="image/x-icon" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('admin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-white" style="background-image: url(admin/assets/images/login_page/login1.jpg)">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Authentication - Sign-in -->
		@yield('content')

		<!--end::Authentication - Sign-in-->
	</div>
	<!--end::Main-->
	<!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
	<script src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="{{ asset('admin/assets/js/custom/authentication/sign-in/general.js') }}"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>