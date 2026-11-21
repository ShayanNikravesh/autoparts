
<!DOCTYPE html>
<html lang="fa" direction="rtl" dir="rtl" style="direction: rtl" >
	<!--begin::Head-->
	<head><base href="../../../../">
		<meta charset="utf-8" />
		<title>Admin | Login</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="" />

		<!--begin::Page Custom Styles(used by this page)-->
		<link href="{{ asset('admin_assets/css/pages/login/login.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ asset('admin_assets/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('admin_assets/plugins/custom/prismjs/prismjs.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('admin_assets/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{ asset('admin_assets/css/themes/layout/header/base/light.rtl.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('admin_assets/css/themes/layout/header/menu/light.rtl.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('admin_assets/css/themes/layout/brand/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('admin_assets/css/themes/layout/aside/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->

        <!--Iranyekan Font-->
		<link href="{{asset('admin_assets/plugins/global/font.css')}}" rel="stylesheet" type="text/css" />
		<!--Iranyekan Font-->

		<link rel="shortcut icon" href="{{ asset('admin_assets/media/logos/favicon.ico') }}" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
				<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url({{ asset('admin_assets/media/bg/bg-1.jpg') }});">
					<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
						<!--begin::Login Header-->
						<div class="d-flex flex-center mb-15">
							<a href="javascript:;">
								<img src="{{ asset('admin_assets/media/logos/Logo.PNG') }}" class="max-h-100px rounded-circle" alt="" />
							</a>
						</div>
						<!--end::Login Header-->
						<!--begin::Login Sign in form-->
						<div class="login-signin">
							<div class="mb-10">
								<h3>ورود به پنل مدیریت</h3>
								<p class="opacity-60 font-weight-bold">مشخصات خود را جهت ورود وارد کنید :</p>
								@if ($errors->any())
									@foreach ($errors->all() as $error)
										<div class="alert alert-danger text-center">{{$error}}</div>
									@endforeach
								@endif
							</div>
							<form action="{{ route('sign_in') }}" method="POST" class="form" id="kt_login_signin_form">
                                @csrf
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="email" placeholder="ایمیل خود را وارد کنید." name="email" autocomplete="off" />
								</div>
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="password" placeholder="رمز عبور خود را وارد کنید." name="password" />
								</div>
								<div class="form-group text-center mt-10">
									<button id="kt_login_signin_submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">ورود</button>
								</div>
							</form>
						</div>
						<!--end::Login Sign in form-->
					</div>
				</div>
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		{{-- <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script> --}}
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('admin_assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('admin_assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
		<script src="{{ asset('admin_assets/js/scripts.bundle.js') }}"></script>
		{{-- <script src="https://keenthemes.com/metronic/assets/js/engage_code.js"></script> --}}
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{ asset('admin_assets/js/pages/custom/login/login-general.js') }}"></script>
		<!--end::Page Scripts-->
		<!--Inspect-->
		<script>
			document.addEventListener('contextmenu', function (event) {
				event.preventDefault();
			});
		</script>
	</body>
	<!--end::Body-->
</html>