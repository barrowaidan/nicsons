<!DOCTYPE html>
	<html lang="en">
		<!--begin::Head-->
		<head>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="csrf-token" content="{{ csrf_token() }}">

			@if(!is_null(Auth::User()->company))
			<link rel="icon" href="{!! asset('assets/img/favicons/favicon-96x96.png') !!}"/>
			@else
			<link rel="icon" href="{!! asset('style/media/avatars/EBA.png') !!}"/>
			@endif
			<title>{{ config('app.name', 'Nicsons') }}</title> 

			<!--begin::Fonts-->
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
			<!--end::Fonts-->
			<!--begin::Page Vendor Stylesheets(used by this page)-->
			<link href="{{ asset('style/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
			<!--end::Page Vendor Stylesheets-->
			<!--begin::Global Stylesheets Bundle(used by all pages)-->
			<link href="{{ asset('style/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('style/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
			<!--end::Global Stylesheets Bundle-->
			<!-- Styles -->
			<link rel="stylesheet" href="{{ asset('css/app.css') }}">

			<!-- Scripts -->
			<script src="{{ asset('js/app.js') }}" defer></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<style>
				.sells-button
				{
				margin:5px;
				}
				.dashboard-box
				{
					height: 150px;
				}
				.dashboard-box-1
				{
					background-color: #fd9508;
				}
				.dashboard-box-2
				{
					background-color: #ee4c47;
				}
				.dashboard-box-3
				{
					background-color: #5cb05b;
				}
				.dashboard-box-4
				{
					background-color: #13b2ce;
				}
				.dashboard-box-5
				{
					background-color: #3b5a9b;
				}
				.dashboard-box-6
				{
					background-color: #7cc744;
				}
				.dashboard-box-7
				{
					background-color: #4d74b5;
				}
				.dashboard-box-8
				{
					background-color: #b74a36;
				}
				@media (max-width: 600px) {
					.data-empty
					{
					display: none;
					}
				}
			</style>
		</head>
		<!--end::Head-->
		<!--begin::Body-->
		<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed ">
			<!--begin::Main-->
			<!--begin::Root-->
			<div class="d-flex flex-column flex-root bg-secondary">
				<!--begin::Page-->
				<div class="page d-flex flex-row flex-column-fluid">
					<!--begin::Aside-->
					<div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'80px', '300px': '100px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
						<!--begin::Brand-->
						<div class="aside-logo py-8 bg-white" id="kt_aside_logo">
							<!--begin::Logo-->
							<a href="{{ route('dashboard') }}" class="d-flex align-items-center">
							<img alt="Logo" src="{{ asset('assets/img/favicons/favicon-96x96.png')}}" class="h-120px w-100px logo" />
								
							</a>
							<!--end::Logo-->
						</div>
						<!--end::Brand-->
						<!--begin::Aside menu-->
						<div class="aside-menu flex-column-fluid" id="kt_aside_menu">
							<!--begin::Aside Menu-->
							<div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
								<!--begin::Menu-->
								<div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
									<div class="menu-item py-2">
										<a class="menu-link menu-center" href="{{ route('dashboard') }}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
											<span class="menu-icon me-0">
												<i class="bi bi-house fs-2"></i>
											</span>
											<span class="menu-title">Dashboard</span>
										</a>
									</div>
									@can('Website_Management')
									<div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-2">
										<span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
											<span class="menu-icon me-0">
												<i class="bi bi-globe fs-2"></i>
											</span>
											<span class="menu-title">Website</span>
										</span>
										<div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
											<div class="menu-item">
												<div class="menu-content">
													<span class="menu-section fs-5 fw-bolder ps-1 py-1">Website</span>
												</div>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="{{ route('company.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Company details</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="{{ route('about_us.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">About</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="{{ route('service.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Services</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="{{ route('events.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Events</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="{{ route('title.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Title</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="{{ route('team.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Team</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="{{ route('requests.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Request</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="{{ route('faqs.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">FAQS</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="{{ route('testimonials.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Testimonials</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="{{ route('process.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Working Process</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="{{ route('statistical.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Statistical</span>
												</a>
											</div>
										</div>
									</div>
									@endcan
									@can('User_Management')
									<div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-2">
										<span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
											<span class="menu-icon me-0">
												<i class="bi bi-people fs-2"></i>
											</span>
											<span class="menu-title">Users</span>
										</span>
										<div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
											<div class="menu-item">
												<div class="menu-content">
													<span class="menu-section fs-5 fw-bolder ps-1 py-1">User Management</span>
												</div>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="{{ route('users.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Users</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="{{ route('roles.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Roles</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="{{ route('permissions.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Permissions</span>
												</a>
											</div>
										</div>
									</div>
									@endcan
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Aside Menu-->
						</div>
						<!--end::Aside menu-->
						<!--begin::Footer-->
						<div class="aside-footer flex-column-auto" id="kt_aside_footer">
							<!--begin::Menu-->
							<div class="d-flex justify-content-center">
								<button type="button" class="btn btm-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="Nicsons-application">
									<!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z" fill="black" />
											<path opacity="0.3" d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z" fill="black" />
											<path opacity="0.3" d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z" fill="black" />
											<path opacity="0.3" d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 2-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Nicsons-application</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator mb-3 opacity-75"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">New Ticket</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">New staff</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
										<!--begin::Menu item-->
										<a href="#" class="menu-link px-3">
											<span class="menu-title">New Group</span>
											<span class="menu-arrow"></span>
										</a>
										<!--end::Menu item-->
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Admin Group</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Staff Group</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Member Group</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">New Contact</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator mt-3 opacity-75"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content px-3 py-3">
											<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
										</div>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 2-->
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Aside-->
					<!--begin::Wrapper-->
					<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
						<!--begin::Header-->
						<div id="kt_header" style="" class="header align-items-stretch">
							<!--begin::Container-->
							<div class="container-fluid d-flex align-items-stretch justify-content-between">
								<!--begin::Aside mobile toggle-->
								<div class="d-flex align-items-center d-lg-none ms-n1 me-2" title="Show aside menu">
									<div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
										<span class="svg-icon svg-icon-2x mt-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
												<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Aside mobile toggle-->
								<!--begin::Mobile logo-->
								<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
									<a href="{{ route('dashboard')}}" class="d-lg-none">
									<img alt="Logo" src="{{ asset('assets/img/favicons/favicon-96x96.png')}}" class="h-30px logo" />
									</a>
								</div>
								<!--end::Mobile logo-->
								<!--begin::Wrapper-->
								<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
									<!--begin::Navbar-->
									<div class="d-flex align-items-stretch" id="kt_header_nav">
										<!--begin::Menu wrapper-->
										<div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
											<!--begin::Menu-->
											<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
												<div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
													<a class="menu-link py-3" href="{{ route('dashboard')}}">
														@if(!is_null(Auth::User()->company))
														<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">{{Setting::lowertoupper(Auth::User()->company->name)}}</h1>
														@else
														<img alt="Logo" src="{{ asset('assets/img/favicons/favicon-96x96.png')}}" class="h-120px w-100px logo" />
														@endif
														<span class="menu-arrow d-lg-none"></span>
													</a>
												</div>
												
											</div>
											<!--end::Menu-->
										</div>
										<!--end::Menu wrapper-->
									</div>
									<!--end::Navbar-->
									<!--begin::Topbar-->
									<div class="d-flex align-items-stretch flex-shrink-0">
										<!--begin::Toolbar wrapper-->
										<div class="d-flex align-items-stretch flex-shrink-0">
											
											
											<!--begin::User-->
											<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
												<!--begin::Menu wrapper-->
												<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
													@if(!is_null(Auth::User()->image))
													<img src="{{ asset('storage/user_uploaded_images/' . Auth::User()->image)}}" alt="image" />
													@else
													<img src="{{ asset('style/media/avatars/blank.png')}}" alt="image">
													@endif
												</div>
												<!--begin::Menu-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content d-flex align-items-center px-3">
															<!--begin::Avatar-->
															<div class="symbol symbol-50px me-5">
															@if(!is_null(Auth::User()->image))
															<img src="{{ asset('storage/user_uploaded_images/' . Auth::User()->image)}}" alt="image" />
															@else
															<img src="{{ asset('style/media/avatars/blank.png')}}" alt="image">
															@endif
															</div>
															<!--end::Avatar-->
															<!--begin::Username-->
															<div class="d-flex flex-column">
																<div class="fw-bolder d-flex align-items-center fs-5">{{ Auth::User()->name }}
																<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
																<a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{ Auth::User()->email }}</a>
															</div>
															<!--end::Username-->
														</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator my-2"></div>
													<!--end::Menu separator-->
													
													<!--begin::Menu item-->
													<div class="menu-item px-5 my-1">
														<a class="menu-link px-5" href="{{ route('logout') }}"
															onclick="event.preventDefault();
															document.getElementById('logout-form').submit();">
															{{ __('Logout') }}
														</a>
						
						
														<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
															@csrf
														</form>
													
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator my-2"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													
													<!--end::Menu item-->
												</div>
												<!--end::Menu-->
												<!--end::Menu wrapper-->
											</div>
											<!--end::User -->
											<!--begin::Heaeder menu toggle-->
											<div class="d-flex align-items-center d-lg-none ms-2" title="Show header menu">
												<div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
													<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="black" />
															<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
											</div>
											<!--end::Heaeder menu toggle-->
										</div>
										<!--end::Toolbar wrapper-->
									</div>
									<!--end::Topbar-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Header-->

						{{ $slot }}

						<!--begin::Footer-->
						<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
							<!--begin::Container-->
							<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
								<!--begin::Copyright-->
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-bold me-1">2021©</span>
									<a href="" target="_blank" class="text-gray-800 text-hover-primary">Nicsons website</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
									<li class="menu-item">
										<a href="" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="#" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Page-->
			</div>
			<!--end::Root-->
			<!--begin::Drawers-->
			
			<!--begin::Exolore drawer toggle-->
			<button id="kt_explore_toggle" class="explore-toggle btn btn-sm bg-body btn-color-gray-700 btn-active-primary shadow-sm position-fixed px-5 fw-bolder zindex-2 top-50 mt-10 end-0 transform-90 fs-6 rounded-top-0" title="Explore Nicsons-Application" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover">
				<span id="kt_explore_toggle_label">Nicsons</span>
			</button>
			<!--end::Exolore drawer toggle-->
			<!--begin::Exolore drawer-->
			<div id="kt_explore" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_explore_toggle" data-kt-drawer-close="#kt_explore_close">
				<!--begin::Card-->
				<div class="card shadow-none rounded-0 w-100">
					<!--begin::Header-->
					<div class="card-header" id="kt_explore_header">
						<h3 class="card-title fw-bolder text-gray-700">Nicsons</h3>
						<div class="card-toolbar">
							<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_explore_close">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</button>
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body" id="kt_explore_body">
						<!--begin::Content-->
						<div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_explore_body" data-kt-scroll-dependencies="#kt_explore_header" data-kt-scroll-offset="5px">
							<!--begin::Wrapper-->
							<div class="mb-0">
								<!--begin::Header-->
								<div class="mb-7">
									<div class="d-flex flex-stack">
										<h3 class="mb-0">Nicsons Application</h3>
										<a href="https://themeforest.net/licenses/standard" class="fw-bold" target="_blank">License FAQs</a>
									</div>
								</div>
								<!--end::Header-->
								<!--begin::License-->
								<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
									<div class="d-flex flex-stack">
										<div class="d-flex flex-column">
											<div class="d-flex align-items-center mb-1">
												<div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Regular License</div>
												<i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-dark" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client in a single end product which end users are not charged for."></i>
											</div>
											<div class="fs-7 text-muted">For single end product used by you or one client</div>
										</div>
										<div class="text-nowrap">
											<span class="text-muted fs-7 fw-bold me-n1">$</span>
											<span class="text-dark fs-1 fw-bolder">39</span>
										</div>
									</div>
								</div>
								<!--end::License-->
								<!--begin::License-->
								<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
									<div class="d-flex flex-stack">
										<div class="d-flex flex-column">
											<div class="d-flex align-items-center mb-1">
												<div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Extended License</div>
												<i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-dark" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."></i>
											</div>
											<div class="fs-7 text-muted">For single end product with paying users.</div>
										</div>
										<div class="text-nowrap">
											<span class="text-muted fs-7 fw-bold me-n1">$</span>
											<span class="text-dark fs-1 fw-bolder">939</span>
										</div>
									</div>
								</div>
								<!--end::License-->
								<!--begin::License-->
								<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
									<div class="d-flex flex-stack">
										<div class="d-flex flex-column">
											<div class="d-flex align-items-center mb-1">
												<div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Custom License</div>
											</div>
											<div class="fs-7 text-muted">Reach us for custom license offers.</div>
										</div>
										<div class="text-nowrap">
											<a href="https://keenthemes.com/contact/" class="btn btn-sm btn-success" target="_blank">Contact Us</a>
										</div>
									</div>
								</div>
								<!--end::License-->
								<!--begin::Purchase-->
								<a href="https://1.envato.market/EA4JP" class="btn btn-primary mb-15 w-100">Buy Now</a>
								<!--end::Purchase-->
								<!--begin::Demos-->
								<div class="mb-0">
									<h3 class="fw-bolder text-center mb-6">Nicsons Application</h3>
									
								</div>
								<!--end::Demos-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Card-->
			</div>
			<!--end::Exolore drawer-->
			
			<!--end::Drawers-->
			
			<!--begin::Scrolltop-->
			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
				<span class="svg-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
						<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
			<!--end::Scrolltop-->
			<!--end::Main-->
			<!--begin::Javascript-->
			<!--begin::Global Javascript Bundle(used by all pages)-->
			<script src="{{ asset('style/plugins/global/plugins.bundle.js')}}"></script>
			<script src="{{ asset('style/js/scripts.bundle.js')}}"></script>
			
			<!--end::Global Javascript Bundle-->
			<!--begin::Page Vendors Javascript(used by this page)-->
			<script src="{{ asset('style/plugins/custom/datatables/datatables.bundle.js')}}"></script>
			<!--end::Page Vendors Javascript-->
			<!--begin::Page Custom Javascript(used by this page)-->
			<script src="{{ asset('style/js/custom/widgets.js')}}"></script>
			<script src="{{ asset('style/js/custom/apps/chat/chat.js')}}"></script>
			<script src="{{ asset('style/js/custom/modals/create-app.js')}}"></script>
			<script src="{{ asset('style/js/custom/modals/upgrade-plan.js')}}"></script>
			
			<!--end::Page Custom Javascript-->
			<!--end::Javascript-->
		</body>
		<!--end::Body-->
	</html>