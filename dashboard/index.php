<!DOCTYPE html>

<!--
Theme: Keen - The Ultimate Bootstrap Admin Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: You must have a valid license purchased only from https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/ in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Administrador | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>

		<!--end::Web font -->

		<!--begin::Page Vendors Styles -->
		<link href="../assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="../assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="../assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/custom/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles -->
		<link href="../assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins -->
		<link href="../assets/demo/default/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="../assets/demo/default/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="../assets/demo/default/skins/brand/navy.css" rel="stylesheet" type="text/css" />
		<link href="../assets/demo/default/skins/aside/navy.css" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="../assets/media/logos/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="k-header--fixed k-header-mobile--fixed k-aside--enabled k-aside--fixed">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="k_header_mobile" class="k-header-mobile  k-header-mobile--fixed ">
			<div class="k-header-mobile__logo">
				<a href="index.html">
					<img alt="Logo" src="../assets/media/logos/image.png" />
				</a>
			</div>
			<div class="k-header-mobile__toolbar">
				<button class="k-header-mobile__toolbar-toggler k-header-mobile__toolbar-toggler--left" id="k_aside_mobile_toggler"><span></span></button>
				<button class="k-header-mobile__toolbar-toggler" id="k_header_mobile_toggler"><span></span></button>
				<button class="k-header-mobile__toolbar-topbar-toggler" id="k_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="k-grid k-grid--hor k-grid--root">
			<div class="k-grid__item k-grid__item--fluid k-grid k-grid--ver k-page">

				<!-- begin:: Aside -->
				<button class="k-aside-close " id="k_aside_close_btn"><i class="la la-close"></i></button>
				<div class="k-aside  k-aside--fixed 	k-grid__item k-grid k-grid--desktop k-grid--hor-desktop" id="k_aside">

					<!-- begin:: Aside -->
					<div class="k-aside__brand	k-grid__item " id="k_aside_brand">
						<div class="k-aside__brand-logo">
							<a href="index.html">
								<img alt="Logo" src="../assets/media/logos/image.png" />
							</a>
						</div>
						<div class="k-aside__brand-tools">
							<button class="k-aside__brand-aside-toggler k-aside__brand-aside-toggler--left" id="k_aside_toggler"><span></span></button>
						</div>
					</div>

					<!-- end:: Aside -->

					<!-- begin:: Aside Menu -->
					<div class="k-aside-menu-wrapper	k-grid__item k-grid__item--fluid" id="k_aside_menu_wrapper">
						<div id="k_aside_menu" class="k-aside-menu " data-kmenu-vertical="1" data-kmenu-scroll="1" data-kmenu-dropdown-timeout="500">
							<ul class="k-menu__nav ">
								<li class="k-menu__item  k-menu__item--submenu k-menu__item--open k-menu__item--here" aria-haspopup="true" data-kmenu-submenu-toggle="hover"><a href="javascript:;" class="k-menu__link k-menu__toggle"><i class="k-menu__link-icon flaticon2-notepad"></i><span class="k-menu__link-text">Tickets</span><i class="k-menu__ver-arrow la la-angle-right"></i></a>
									<div class="k-menu__submenu "><span class="k-menu__arrow"></span>
										<ul class="k-menu__subnav">
											<li class="k-menu__item  k-menu__item--parent" aria-haspopup="true"><span class="k-menu__link"><span class="k-menu__link-text">Tickets</span></span></li>
											<li class="k-menu__item  k-menu__item--active" aria-haspopup="true"><a href="index.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Nuevos</span></a></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="dashboards_brand-aside.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Estadisticas</span></a></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="dashboards_navy-header.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Reportes</span></a></li>
										</ul>
									</div>
								</li>
								<li class="k-menu__item  k-menu__item--submenu k-menu__item--open k-menu__item--here" aria-haspopup="true" data-kmenu-submenu-toggle="hover"><a href="javascript:;" class="k-menu__link k-menu__toggle"><i class="k-menu__link-icon flaticon-time-2"></i><span class="k-menu__link-text">Mantenimiento</span><i class="k-menu__ver-arrow la la-angle-right"></i></a>
									<div class="k-menu__submenu "><span class="k-menu__arrow"></span>
										<ul class="k-menu__subnav">
											<li class="k-menu__item  k-menu__item--parent" aria-haspopup="true"><span class="k-menu__link"><span class="k-menu__link-text">Mantenimiento</span></span></li>
											<li class="k-menu__item  k-menu__item--active" aria-haspopup="true"><a href="index.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Nuevos</span></a></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="dashboards_brand-aside.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Estadisticas</span></a></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="dashboards_navy-header.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Reportes</span></a></li>
										</ul>
									</div>
								</li>







								<li class="k-menu__section ">
									<h4 class="k-menu__section-text">Panel de Control</h4>
									<i class="k-menu__section-icon flaticon-more-v2"></i>
								</li>
								<li class="k-menu__item  k-menu__item--submenu" aria-haspopup="true" data-kmenu-submenu-toggle="hover"><a href="javascript:;" class="k-menu__link k-menu__toggle"><i class="k-menu__link-icon flaticon2-calendar-3"></i><span class="k-menu__link-text">Usuarios</span><i class="k-menu__ver-arrow la la-angle-right"></i></a>
									<div class="k-menu__submenu "><span class="k-menu__arrow"></span>
										<ul class="k-menu__subnav">
											<li class="k-menu__item  k-menu__item--parent" aria-haspopup="true"><span class="k-menu__link"><span class="k-menu__link-text">Usuarios</span></span></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="custom_blog_grid.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Blog Grid</span></a></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="custom_blog_grid-v2.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Blog Grid v2</span></a></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="custom_blog_list.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Blog List</span></a></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="custom_blog_post.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Blog Post</span></a></li>
										</ul>
									</div>
								</li>
								<li class="k-menu__item  k-menu__item--submenu" aria-haspopup="true" data-kmenu-submenu-toggle="hover"><a href="javascript:;" class="k-menu__link k-menu__toggle"><i class="k-menu__link-icon flaticon2-open-text-book"></i><span class="k-menu__link-text">Materiales</span><i class="k-menu__ver-arrow la la-angle-right"></i></a>
									<div class="k-menu__submenu "><span class="k-menu__arrow"></span>
										<ul class="k-menu__subnav">
											<li class="k-menu__item  k-menu__item--parent" aria-haspopup="true"><span class="k-menu__link"><span class="k-menu__link-text">Materiales</span></span></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="custom_pricing_pricing-v1.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Pricing v1</span></a></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="custom_pricing_pricing-v2.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Pricing v2</span></a></li>
										</ul>
									</div>
								</li>
								<li class="k-menu__item  k-menu__item--submenu" aria-haspopup="true" data-kmenu-submenu-toggle="hover"><a href="javascript:;" class="k-menu__link k-menu__toggle"><i class="k-menu__link-icon flaticon2-browser-1"></i><span class="k-menu__link-text">Laboratorios</span><i class="k-menu__ver-arrow la la-angle-right"></i></a>
									<div class="k-menu__submenu "><span class="k-menu__arrow"></span>
										<ul class="k-menu__subnav">
											<li class="k-menu__item  k-menu__item--parent" aria-haspopup="true"><span class="k-menu__link"><span class="k-menu__link-text">Invoices</span></span></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="custom_invoices_invoice-v1.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Invoice v1</span></a></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="custom_invoices_invoice-v2.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Invoice v2</span></a></li>
										</ul>
									</div>
								</li>

							</ul>
						</div>
					</div>

					<!-- end:: Aside Menu -->

					<!-- begin:: Aside -->
					<div class="k-aside__footer		k-grid__item" id="k_aside_footer">
						<div class="k-aside__footer-nav">
							<div class="k-aside__footer-item">
								<a href="#" class="btn btn-icon"><i class="flaticon2-gear"></i></a>
							</div>
							<div class="k-aside__footer-item">
								<a href="#" class="btn btn-icon"><i class="flaticon2-cube"></i></a>
							</div>
							<div class="k-aside__footer-item">
								<a href="#" class="btn btn-icon"><i class="flaticon2-bell-alarm-symbol"></i></a>
							</div>
							<div class="k-aside__footer-item">
								<button type="button" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="flaticon2-add"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-left">
									<ul class="k-nav">
										<li class="k-nav__section k-nav__section--first">
											<span class="k-nav__section-text">Export Tools</span>
										</li>
										<li class="k-nav__item">
											<a href="#" class="k-nav__link">
												<i class="k-nav__link-icon la la-print"></i>
												<span class="k-nav__link-text">Print</span>
											</a>
										</li>
										<li class="k-nav__item">
											<a href="#" class="k-nav__link">
												<i class="k-nav__link-icon la la-copy"></i>
												<span class="k-nav__link-text">Copy</span>
											</a>
										</li>
										<li class="k-nav__item">
											<a href="#" class="k-nav__link">
												<i class="k-nav__link-icon la la-file-excel-o"></i>
												<span class="k-nav__link-text">Excel</span>
											</a>
										</li>
										<li class="k-nav__item">
											<a href="#" class="k-nav__link">
												<i class="k-nav__link-icon la la-file-text-o"></i>
												<span class="k-nav__link-text">CSV</span>
											</a>
										</li>
										<li class="k-nav__item">
											<a href="#" class="k-nav__link">
												<i class="k-nav__link-icon la la-file-pdf-o"></i>
												<span class="k-nav__link-text">PDF</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="k-aside__footer-item">
								<a href="#" class="btn btn-icon"><i class="flaticon2-calendar-2"></i></a>
							</div>
						</div>
					</div>

					<!-- end:: Aside -->
				</div>

				<!-- end:: Aside -->
				<div class="k-grid__item k-grid__item--fluid k-grid k-grid--hor k-wrapper" id="k_wrapper">

					<!-- begin:: Header -->
					<div id="k_header" class="k-header k-grid__item  k-header--fixed ">

						<!-- begin: Header Menu -->
						<button class="k-header-menu-wrapper-close" id="k_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
						<div class="k-header-menu-wrapper" id="k_header_menu_wrapper">
							<div id="k_header_menu" class="k-header-menu k-header-menu-mobile ">
								<ul class="k-menu__nav ">

									<li class="k-menu__item  k-menu__item--submenu k-menu__item--rel" data-kmenu-submenu-toggle="click" data-kmenu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="k-menu__link k-menu__toggle"><span class="k-menu__link-text">Apps</span><i class="k-menu__hor-arrow la la-angle-down"></i><i class="k-menu__ver-arrow la la-angle-right"></i></a>
										<div class="k-menu__submenu k-menu__submenu--classic k-menu__submenu--left">
											<ul class="k-menu__subnav">
												<li class="k-menu__item " data-kmenu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">eCommerce</span></a></li>
												<li class="k-menu__item  k-menu__item--submenu" data-kmenu-submenu-toggle="hover" data-kmenu-link-redirect="1" aria-haspopup="true"><a href="components_datatable_v1.html" class="k-menu__link k-menu__toggle"><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Audience</span><i class="k-menu__hor-arrow la la-angle-right"></i><i class="k-menu__ver-arrow la la-angle-right"></i></a>
													<div class="k-menu__submenu k-menu__submenu--classic k-menu__submenu--right">
														<ul class="k-menu__subnav">
															<li class="k-menu__item " data-kmenu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="k-menu__link "><i class="k-menu__link-icon flaticon-users"></i><span class="k-menu__link-text">Active Users</span></a></li>
															<li class="k-menu__item " data-kmenu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="k-menu__link "><i class="k-menu__link-icon flaticon-interface-1"></i><span class="k-menu__link-text">User Explorer</span></a></li>
															<li class="k-menu__item " data-kmenu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="k-menu__link "><i class="k-menu__link-icon flaticon-lifebuoy"></i><span class="k-menu__link-text">Users Flows</span></a></li>
															<li class="k-menu__item " data-kmenu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="k-menu__link "><i class="k-menu__link-icon flaticon-graphic-1"></i><span class="k-menu__link-text">Market Segments</span></a></li>
															<li class="k-menu__item " data-kmenu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="k-menu__link "><i class="k-menu__link-icon flaticon-graphic"></i><span class="k-menu__link-text">User Reports</span></a></li>
														</ul>
													</div>
												</li>
												<li class="k-menu__item " data-kmenu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Marketing</span></a></li>
												<li class="k-menu__item " data-kmenu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Campaigns</span><span class="k-menu__link-badge"><span class="k-badge k-badge--success">3</span></span></a></li>
												<li class="k-menu__item  k-menu__item--submenu" data-kmenu-submenu-toggle="hover" data-kmenu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="k-menu__link k-menu__toggle"><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Cloud Manager</span><i class="k-menu__hor-arrow la la-angle-right"></i><i class="k-menu__ver-arrow la la-angle-right"></i></a>
													<div class="k-menu__submenu k-menu__submenu--classic k-menu__submenu--right">
														<ul class="k-menu__subnav">
															<li class="k-menu__item " data-kmenu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="k-menu__link "><i class="k-menu__link-icon flaticon-add"></i><span class="k-menu__link-text">File Upload</span><span class="k-menu__link-badge"><span class="k-badge k-badge--danger">3</span></span></a></li>
															<li class="k-menu__item " data-kmenu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="k-menu__link "><i class="k-menu__link-icon flaticon-signs-1"></i><span class="k-menu__link-text">File Attributes</span></a></li>
															<li class="k-menu__item " data-kmenu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="k-menu__link "><i class="k-menu__link-icon flaticon-folder"></i><span class="k-menu__link-text">Folders</span></a></li>
															<li class="k-menu__item " data-kmenu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="k-menu__link "><i class="k-menu__link-icon flaticon-cogwheel-2"></i><span class="k-menu__link-text">System Settings</span></a></li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<!-- end: Header Menu -->

						<!-- begin:: Header Topbar -->
						<div class="k-header__topbar">

							<!--begin: Search -->

							<!--end: Search -->

							<!--begin: Notifications -->
							<div class="k-header__topbar-item dropdown">
								<div class="k-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px -2px">
									<span class="k-header__topbar-icon"><i class="flaticon2-bell-alarm-symbol"></i></span>
									<span class="k-badge k-badge--dot k-badge--notify k-badge--sm k-badge--brand"></span>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
									<div class="k-head" style="background-image: url(../assets/media/misc/head_bg_sm.jpg)">
										<h3 class="k-head__title">User Notifications</h3>
										<div class="k-head__sub"><span class="k-head__desc">23 new notifications</span></div>
									</div>
									<div class="k-notification k-margin-t-30 k-margin-b-20 k-scroll" data-scroll="true" data-height="270" data-mobile-height="220">
										<a href="#" class="k-notification__item">
											<div class="k-notification__item-icon">
												<i class="flaticon2-line-chart k-font-success"></i>
											</div>
											<div class="k-notification__item-details">
												<div class="k-notification__item-title">
													New order has been received
												</div>
												<div class="k-notification__item-time">
													2 hrs ago
												</div>
											</div>
										</a>
										<a href="#" class="k-notification__item">
											<div class="k-notification__item-icon">
												<i class="flaticon2-box-1 k-font-brand"></i>
											</div>
											<div class="k-notification__item-details">
												<div class="k-notification__item-title">
													New customer is registered
												</div>
												<div class="k-notification__item-time">
													3 hrs ago
												</div>
											</div>
										</a>
										<a href="#" class="k-notification__item">
											<div class="k-notification__item-icon">
												<i class="flaticon2-chart2 k-font-danger"></i>
											</div>
											<div class="k-notification__item-details">
												<div class="k-notification__item-title">
													Application has been approved
												</div>
												<div class="k-notification__item-time">
													3 hrs ago
												</div>
											</div>
										</a>
										<a href="#" class="k-notification__item">
											<div class="k-notification__item-icon">
												<i class="flaticon2-image-file k-font-warning"></i>
											</div>
											<div class="k-notification__item-details">
												<div class="k-notification__item-title">
													New file has been uploaded
												</div>
												<div class="k-notification__item-time">
													5 hrs ago
												</div>
											</div>
										</a>
										<a href="#" class="k-notification__item">
											<div class="k-notification__item-icon">
												<i class="flaticon2-bar-chart k-font-info"></i>
											</div>
											<div class="k-notification__item-details">
												<div class="k-notification__item-title">
													New user feedback received
												</div>
												<div class="k-notification__item-time">
													8 hrs ago
												</div>
											</div>
										</a>
										<a href="#" class="k-notification__item">
											<div class="k-notification__item-icon">
												<i class="flaticon2-pie-chart-2 k-font-success"></i>
											</div>
											<div class="k-notification__item-details">
												<div class="k-notification__item-title">
													System reboot has been successfully completed
												</div>
												<div class="k-notification__item-time">
													12 hrs ago
												</div>
											</div>
										</a>
										<a href="#" class="k-notification__item">
											<div class="k-notification__item-icon">
												<i class="flaticon2-favourite k-font-focus"></i>
											</div>
											<div class="k-notification__item-details">
												<div class="k-notification__item-title">
													New order has been placed
												</div>
												<div class="k-notification__item-time">
													15 hrs ago
												</div>
											</div>
										</a>
										<a href="#" class="k-notification__item k-notification__item--read">
											<div class="k-notification__item-icon">
												<i class="flaticon2-safe k-font-primary"></i>
											</div>
											<div class="k-notification__item-details">
												<div class="k-notification__item-title">
													Company meeting canceled
												</div>
												<div class="k-notification__item-time">
													19 hrs ago
												</div>
											</div>
										</a>
										<a href="#" class="k-notification__item">
											<div class="k-notification__item-icon">
												<i class="flaticon2-psd k-font-success"></i>
											</div>
											<div class="k-notification__item-details">
												<div class="k-notification__item-title">
													New report has been received
												</div>
												<div class="k-notification__item-time">
													23 hrs ago
												</div>
											</div>
										</a>
										<a href="#" class="k-notification__item">
											<div class="k-notification__item-icon">
												<i class="flaticon-download-1 k-font-danger"></i>
											</div>
											<div class="k-notification__item-details">
												<div class="k-notification__item-title">
													Finance report has been generated
												</div>
												<div class="k-notification__item-time">
													25 hrs ago
												</div>
											</div>
										</a>
										<a href="#" class="k-notification__item">
											<div class="k-notification__item-icon">
												<i class="flaticon-security k-font-warning"></i>
											</div>
											<div class="k-notification__item-details">
												<div class="k-notification__item-title">
													New customer comment recieved
												</div>
												<div class="k-notification__item-time">
													2 days ago
												</div>
											</div>
										</a>
										<a href="#" class="k-notification__item">
											<div class="k-notification__item-icon">
												<i class="flaticon2-pie-chart k-font-focus"></i>
											</div>
											<div class="k-notification__item-details">
												<div class="k-notification__item-title">
													New customer is registered
												</div>
												<div class="k-notification__item-time">
													3 days ago
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>

							<!--end: Notifications -->

							<!--begin: Quick actions -->


							<!--end: Quick actions -->

							<!--begin: Language bar -->

							<!--end: Language bar -->

							<!--begin: User bar -->
							<div class="k-header__topbar-item k-header__topbar-item--user">
								<div class="k-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px -2px">
									<div class="k-header__topbar-user">
										<span class="k-header__topbar-welcome k-hidden-mobile">Bienvenido</span>
										<span class="k-header__topbar-username k-hidden-mobile">@Administrador</span>


										<!--use below badge element instead the user avatar to display username's first letter(remove k-hidden class to display it) -->
										<span class="k-badge k-badge--username k-badge--lg k-badge--brand k-hidden">A</span>
									</div>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-md">
									<div class="k-user-card k-margin-b-50 k-margin-b-30-tablet-and-mobile" style="background-image: url(../assets/media/misc/head_bg_sm.jpg)">
										<div class="k-user-card__wrapper">
											<div class="k-user-card__pic">
												<img alt="Pic" src="../assets/media/users/300_21.jpg" />
											</div>
											<div class="k-user-card__details">
												<div class="k-user-card__name">Administrador</div>
												<div class="k-user-card__position"></div>
											</div>
										</div>
									</div>
									<ul class="k-nav k-margin-b-10">
										<li class="k-nav__item">
											<a href="custom_user_profile-v1.html" class="k-nav__link">
												<span class="k-nav__link-icon"><i class="flaticon2-calendar-3"></i></span>
												<span class="k-nav__link-text">Mi Perfil</span>
											</a>
										</li>
										<li class="k-nav__item">
											<a href="custom_user_profile-v1.html" class="k-nav__link">
												<span class="k-nav__link-icon"><i class="flaticon2-browser-2"></i></span>
												<span class="k-nav__link-text">Mis Tareas</span>
											</a>
										</li>

										<li class="k-nav__item">
											<a href="custom_user_profile-v1.html" class="k-nav__link">
												<span class="k-nav__link-icon"><i class="flaticon2-gear"></i></span>
												<span class="k-nav__link-text">Configiración</span>
											</a>
										</li>
										<li class="k-nav__item k-nav__item--custom k-margin-t-15">
											<a href="custom_user_login-v2.html" target="_blank" class="btn btn-outline-metal btn-hover-brand btn-upper btn-font-dark btn-sm btn-bold">Cerrar Sesión</a>
										</li>
									</ul>
								</div>
							</div>

							<!--end: User bar -->

							<!--begin: Quick panel toggler -->


							<!--end: Quick panel toggler -->
						</div>

						<!-- end:: Header Topbar -->
					</div>

					<!-- end:: Header -->

					<!-- begin:: Content -->
					<div class="k-content	k-grid__item k-grid__item--fluid k-grid k-grid--hor" id="k_content">

						<!-- begin:: Content Head -->
						<div class="k-content__head	k-grid__item">
							<div class="k-content__head-toolbar">
								<div class="k-content__head-wrapper">
									<div class="dropdown dropdown-inline k-hide" data-toggle="k-tooltip" title="Quick actions" data-placement="left">
										<button type="button" class="btn btn-sm btn-elevate btn-danger btn-bold btn-upper dropdown-toggle-" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											New
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#"><i class="la la-plus"></i> New Report</a>
											<a class="dropdown-item" href="#"><i class="la la-user"></i> Add Customer</a>
											<a class="dropdown-item" href="#"><i class="la la-cloud-download"></i> New Download</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
										</div>
									</div>
									<a href="#" class="btn btn-sm btn-elevate btn-brand" id="k_dashboard_daterangepicker" data-toggle="k-tooltip" title="Select dashboard daterange" data-placement="left">
										<span class="k-opacity-7" id="k_dashboard_daterangepicker_title">Fecha</span>&nbsp;
										<span class="k-font-bold" id="k_dashboard_daterangepicker_date">Aug 16</span>
										<i class="flaticon-calendar-with-a-clock-time-tools k-padding-l-5 k-padding-r-0"></i>
									</a>
								</div>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content Body -->
						<div class="k-content__body	k-grid__item k-grid__item--fluid" id="k_content_body">

							<!--begin::Dashboard 1-->

							<!--begin::Row-->
							<div class="row">
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

									<!--begin::Portlet-->
									<div class="k-portlet k-portlet--height-fluid">
										<div class="k-portlet__head k-portlet__head--noborder">
											<div class="k-portlet__head-label">
												<h3 class="k-portlet__head-title">Author Sales</h3>
											</div>
											<div class="k-portlet__head-toolbar">
												<div class="k-portlet__head-toolbar-wrapper">
													<div class="dropdown dropdown-inline">
														<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="flaticon-more-1"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<ul class="k-nav">
																<li class="k-nav__section k-nav__section--first">
																	<span class="k-nav__section-text">Export Tools</span>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-print"></i>
																		<span class="k-nav__link-text">Print</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-copy"></i>
																		<span class="k-nav__link-text">Copy</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-file-excel-o"></i>
																		<span class="k-nav__link-text">Excel</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-file-text-o"></i>
																		<span class="k-nav__link-text">CSV</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-file-pdf-o"></i>
																		<span class="k-nav__link-text">PDF</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="k-portlet__body k-portlet__body--fluid">
											<div class="k-widget-19">
												<div class="k-widget-19__title">
													<div class="k-widget-19__label"><small>$</small>64M</div>
													<img class="k-widget-19__bg" src="../assets/media/misc/iconbox_bg.png" alt="bg" />
												</div>
												<div class="k-widget-19__data">

													<!--Doc: For the chart bars you can use state helper classes: k-bg-success, k-bg-info, k-bg-danger. Refer: components/custom/colors.html -->
													<div class="k-widget-19__chart">
														<div class="k-widget-19__bar">
															<div class="k-widget-19__bar-45" data-toggle="k-tooltip" data-skin="brand" data-placement="top" title="45"></div>
														</div>
														<div class="k-widget-19__bar">
															<div class="k-widget-19__bar-95" data-toggle="k-tooltip" data-skin="brand" data-placement="top" title="95"></div>
														</div>
														<div class="k-widget-19__bar">
															<div class="k-widget-19__bar-63" data-toggle="k-tooltip" data-skin="brand" data-placement="top" title="63"></div>
														</div>
														<div class="k-widget-19__bar">
															<div class="k-widget-19__bar-11" data-toggle="k-tooltip" data-skin="brand" data-placement="top" title="11"></div>
														</div>
														<div class="k-widget-19__bar">
															<div class="k-widget-19__bar-46" data-toggle="k-tooltip" data-skin="brand" data-placement="top" title="46"></div>
														</div>
														<div class="k-widget-19__bar">
															<div class="k-widget-19__bar-88" data-toggle="k-tooltip" data-skin="brand" data-placement="top" title="88"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

									<!--begin::Portlet-->
									<div class="k-portlet k-portlet--height-fluid">
										<div class="k-portlet__head  k-portlet__head--noborder">
											<div class="k-portlet__head-label">
												<h3 class="k-portlet__head-title">Technologies</h3>
											</div>
											<div class="k-portlet__head-toolbar">
												<div class="k-portlet__head-toolbar-wrapper">
													<div class="dropdown dropdown-inline">
														<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="flaticon-more-1"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<ul class="k-nav">
																<li class="k-nav__section k-nav__section--first">
																	<span class="k-nav__section-text">Export Tools</span>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-print"></i>
																		<span class="k-nav__link-text">Print</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-copy"></i>
																		<span class="k-nav__link-text">Copy</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-file-excel-o"></i>
																		<span class="k-nav__link-text">Excel</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-file-text-o"></i>
																		<span class="k-nav__link-text">CSV</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-file-pdf-o"></i>
																		<span class="k-nav__link-text">PDF</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="k-portlet__body k-portlet__body--fluid">
											<div class="k-widget-21">
												<div class="k-widget-21__title">
													<div class="k-widget-21__label">9.3M</div>
													<img src="../assets/media/misc/iconbox_bg.png" class="k-widget-21__bg" alt="bg" />
												</div>
												<div class="k-widget-21__data">

													<!--Doc: For the chart legend bullet colors can be changed with state helper classes: k-bg-success, k-bg-info, k-bg-danger. Refer: components/custom/colors.html -->
													<div class="k-widget-21__legends">
														<div class="k-widget-21__legend">
															<i class="k-bg-brand"></i>
															<span>HTML</span>
														</div>
														<div class="k-widget-21__legend">
															<i class="k-shape-bg-color-4"></i>
															<span>CSS</span>
														</div>
														<div class="k-widget-21__legend">
															<i class="k-shape-bg-color-3"></i>
															<span>Angular</span>
														</div>
													</div>
													<div class="k-widget-21__chart">
														<div class="k-widget-21__stat">+37%</div>

														<!--Doc: For the chart initialization refer to "widgetTechnologiesChart" function in "src\theme\app\scripts\custom\dashboard.js" -->
														<canvas id="k_widget_technologies_chart" style="height: 110px; width: 110px;"></canvas>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

									<!--begin::Portlet-->
									<div class="k-portlet k-portlet--height-fluid">
										<div class="k-portlet__head  k-portlet__head--noborder">
											<div class="k-portlet__head-label">
												<h3 class="k-portlet__head-title">Total Orders</h3>
											</div>
											<div class="k-portlet__head-toolbar">
												<div class="k-portlet__head-toolbar-wrapper">
													<div class="dropdown dropdown-inline">
														<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="flaticon-more-1"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<ul class="k-nav">
																<li class="k-nav__section k-nav__section--first">
																	<span class="k-nav__section-text">Export Tools</span>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-print"></i>
																		<span class="k-nav__link-text">Print</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-copy"></i>
																		<span class="k-nav__link-text">Copy</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-file-excel-o"></i>
																		<span class="k-nav__link-text">Excel</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-file-text-o"></i>
																		<span class="k-nav__link-text">CSV</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-file-pdf-o"></i>
																		<span class="k-nav__link-text">PDF</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="k-portlet__body k-portlet__body--fluid">
											<div class="k-widget-20">
												<div class="k-widget-20__title">
													<div class="k-widget-20__label">17M</div>
													<img class="k-widget-20__bg" src="../assets/media/misc/iconbox_bg.png" alt="bg" />
												</div>
												<div class="k-widget-20__data">
													<div class="k-widget-20__chart">

														<!--Doc: For the chart initialization refer to "widgetTotalOrdersChart" function in "src\theme\app\scripts\custom\dashboard.js" -->
														<canvas id="k_widget_total_orders_chart"></canvas>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

									<!--begin::Portlet-->
									<div class="k-portlet k-portlet--height-fluid k-widget ">
										<div class="k-portlet__body">
											<div id="k-widget-slider-13-1" class="k-slider carousel slide" data-ride="carousel" data-interval="8000">
												<div class="k-slider__head">
													<div class="k-slider__label">Announcements</div>
													<div class="k-slider__nav">
														<a class="k-slider__nav-prev carousel-control-prev" href="#k-widget-slider-13-1" role="button" data-slide="prev">
															<i class="fa fa-angle-left"></i>
														</a>
														<a class="k-slider__nav-next carousel-control-next" href="#k-widget-slider-13-1" role="button" data-slide="next">
															<i class="fa fa-angle-right"></i>
														</a>
													</div>
												</div>
												<div class="carousel-inner">
													<div class="carousel-item active k-slider__body">
														<div class="k-widget-13">
															<div class="k-widget-13__body">
																<a class="k-widget-13__title" href="#">Keen Admin Launch Day</a>
																<div class="k-widget-13__desc">
																	To start a blog, think of a topic about and first brainstorm party is ways to write details
																</div>
															</div>
															<div class="k-widget-13__foot">
																<div class="k-widget-13__label">
																	<div class="btn btn-sm btn-label btn-bold">
																		07 OCT, 2018
																	</div>
																</div>
																<div class="k-widget-13__toolbar">
																	<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View</a>
																</div>
															</div>
														</div>
													</div>
													<div class="carousel-item k-slider__body">
														<div class="k-widget-13">
															<div class="k-widget-13__body">
																<a class="k-widget-13__title" href="#">Incredibly Positive Reviews</a>
																<div class="k-widget-13__desc">
																	To start a blog, think of a topic about and first brainstorm party is ways to write details
																</div>
															</div>
															<div class="k-widget-13__foot">
																<div class="k-widget-13__title">
																	<div class="btn btn-sm btn-label btn-bold">
																		17 NOV, 2018
																	</div>
																</div>
																<div class="k-widget-13__toolbar">
																	<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View</a>
																</div>
															</div>
														</div>
													</div>
													<div class="carousel-item k-slider__body">
														<div class="k-widget-13">
															<div class="k-widget-13__body">
																<a class="k-widget-13__title" href="#">Award Winning Theme</a>
																<div class="k-widget-13__desc">
																	To start a blog, think of a topic about and first brainstorm party is ways to write details
																</div>
															</div>
															<div class="k-widget-13__foot">
																<div class="k-widget-13__label">
																	<div class="btn btn-sm btn-label btn-bold">
																		03 SEP, 2018
																	</div>
																</div>
																<div class="k-widget-13__toolbar">
																	<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

									<!--begin::Portlet-->
									<div class="k-portlet k-portlet--height-fluid k-widget-13">
										<div class="k-portlet__body">
											<div id="k-widget-slider-13-2" class="k-slider carousel slide" data-ride="carousel" data-interval="4000">
												<div class="k-slider__head">
													<div class="k-slider__label">Projects</div>
													<div class="k-slider__nav">
														<a class="k-slider__nav-prev carousel-control-prev" href="#k-widget-slider-13-2" role="button" data-slide="prev">
															<i class="fa fa-angle-left"></i>
														</a>
														<a class="k-slider__nav-next carousel-control-next" href="#k-widget-slider-13-2" role="button" data-slide="next">
															<i class="fa fa-angle-right"></i>
														</a>
													</div>
												</div>
												<div class="carousel-inner">
													<div class="carousel-item active k-slider__body">
														<div class="k-widget-13">
															<div class="k-widget-13__body">
																<a class="k-widget-13__title" href="#">Keen Admin Launch Day</a>
																<div class="k-widget-13__desc">
																	To start a blog, think of a topic about and first brainstorm party is ways to write details
																</div>
															</div>
															<div class="k-widget-13__foot">
																<div class="k-widget-13__progress">
																	<div class="k-widget-13__progress-info">
																		<div class="k-widget-13__progress-status">
																			Progress
																		</div>
																		<div class="k-widget-13__progress-value">78%</div>
																	</div>
																	<div class="progress">
																		<div class="progress-bar k-bg-brand" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="carousel-item k-slider__body">
														<div class="k-widget-13">
															<div class="k-widget-13__body">
																<a class="k-widget-13__title" href="#">First Milestone Achivement</a>
																<div class="k-widget-13__desc">
																	To start a blog, think of a topic about and first brainstorm party is ways to write details
																</div>
															</div>
															<div class="k-widget-13__foot">
																<div class="k-widget-13__progress">
																	<div class="k-widget-13__progress-info">
																		<div class="k-widget-13__progress-status">
																			Progress
																		</div>
																		<div class="k-widget-13__progress-value">55%</div>
																	</div>
																	<div class="progress">
																		<div class="progress-bar k-bg-brand" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="carousel-item k-slider__body">
														<div class="k-widget-13">
															<div class="k-widget-13__body">
																<a class="k-widget-13__title" href="#">Reached 50,000 sales</a>
																<div class="k-widget-13__desc">
																	To start a blog, think of a topic about and first brainstorm party is ways to write details
																</div>
															</div>
															<div class="k-widget-13__foot">
																<div class="k-widget-13__progress">
																	<div class="k-widget-13__progress-info">
																		<div class="k-widget-13__progress-status">
																			Progress
																		</div>
																		<div class="k-widget-13__progress-value">24%</div>
																	</div>
																	<div class="progress">
																		<div class="progress-bar k-bg-brand" role="progressbar" style="width: 24%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

									<!--begin::Portlet-->
									<div class="k-portlet k-portlet--height-fluid k-widget-13">
										<div class="k-portlet__body">
											<div id="k-widget-slider-13-3" class="k-slider carousel slide" data-ride="carousel" data-interval="12000">
												<div class="k-slider__head">
													<div class="k-slider__label">Today's Schedule</div>
													<div class="k-slider__nav">
														<a class="k-slider__nav-prev carousel-control-prev" href="#k-widget-slider-13-3" role="button" data-slide="prev">
															<i class="fa fa-angle-left"></i>
														</a>
														<a class="k-slider__nav-next carousel-control-next" href="#k-widget-slider-13-3" role="button" data-slide="next">
															<i class="fa fa-angle-right"></i>
														</a>
													</div>
												</div>
												<div class="carousel-inner">
													<div class="carousel-item active k-slider__body">
														<div class="k-widget-13">
															<div class="k-widget-13__body">
																<a class="k-widget-13__title" href="#">Octa Pre-Launch Meeting</a>
																<div class="k-widget-13__desc k-widget-13__desc--xl k-font-brand">
																	9:20AM - 10:00AM
																</div>
															</div>
															<div class="k-widget-13__foot">
																<div class="k-widget-13__label">
																	<i class="fa fa-map-marker-alt k-label-font-color-2"></i>
																	<span class="k-label-font-color-2">490 E Main St. Norwich...</span>
																</div>
																<div class="k-widget-13__toolbar">
																	<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View Map</a>
																</div>
															</div>
														</div>
													</div>
													<div class="carousel-item k-slider__body">
														<div class="k-widget-13">
															<div class="k-widget-13__body">
																<a class="k-widget-13__title" href="#">UI/UX Design Updates</a>
																<div class="k-widget-13__desc k-widget-13__desc--xl k-font-brand">
																	11:15AM - 12:30PM
																</div>
															</div>
															<div class="k-widget-13__foot">
																<div class="k-widget-13__label">
																	<i class="fa fa-map-marker-alt k-label-font-color-2"></i>
																	<span class="k-label-font-color-2">246 R St. Manhattan NY...</span>
																</div>
																<div class="k-widget-13__toolbar">
																	<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View Map</a>
																</div>
															</div>
														</div>
													</div>
													<div class="carousel-item k-slider__body">
														<div class="k-widget-13">
															<div class="k-widget-13__body">
																<a class="k-widget-13__title" href="#">Sales Report Summary Meet-up</a>
																<div class="k-widget-13__desc k-widget-13__desc--xl k-font-brand">
																	4:30PM - 5:30PM
																</div>
															</div>
															<div class="k-widget-13__foot">
																<div class="k-widget-13__label">
																	<i class="fa fa-map-marker-alt k-label-font-color-2"></i>
																	<span class="k-label-font-color-2">492 F Sub St. Norwich CT...</span>
																</div>
																<div class="k-widget-13__toolbar">
																	<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View Map</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
							</div>

							<!--end::Row-->

							<!--begin::Row-->
							<div class="row">
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

									<!--begin::Portlet-->
									<div class="k-portlet k-portlet--height-fluid">
										<div class="k-portlet__head">
											<div class="k-portlet__head-label">
												<h3 class="k-portlet__head-title">Top Products</h3>
											</div>
											<div class="k-portlet__head-toolbar">
												<div class="k-portlet__head-toolbar-wrapper">
													<div class="dropdown dropdown-inline">
														<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="flaticon-more-1"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<ul class="k-nav">
																<li class="k-nav__section k-nav__section--first">
																	<span class="k-nav__section-text">Export Tools</span>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-print"></i>
																		<span class="k-nav__link-text">Print</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-copy"></i>
																		<span class="k-nav__link-text">Copy</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-file-excel-o"></i>
																		<span class="k-nav__link-text">Excel</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-file-text-o"></i>
																		<span class="k-nav__link-text">CSV</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-file-pdf-o"></i>
																		<span class="k-nav__link-text">PDF</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="k-portlet__body">
											<div class="k-widget-1">
												<ul class="nav nav-pills nav-tabs-btn nav-pills-btn-brand" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#k_tabs_19_15be902d44070b" role="tab">
															<span class="nav-link-icon"><i class="flaticon2-graphic"></i></span>
															<span class="nav-link-title">Settings</span>
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#k_tabs_19_25be902d44070b" role="tab">
															<span class="nav-link-icon"><i class="flaticon2-position"></i></span>
															<span class="nav-link-title">Code</span>
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#k_tabs_19_35be902d44070b" role="tab">
															<span class="nav-link-icon"><i class="flaticon2-layers-1"></i></span>
															<span class="nav-link-title">Design</span>
														</a>
													</li>
												</ul>
												<div class="tab-content">
													<div class="tab-pane fade active show" id="k_tabs_19_15be902d44070b" role="tabpanel">
														<div class="k-widget-1__item">
															<div class="k-widget-1__item-info">
																<a href="#" class="k-widget-1__item-title">
																	HTML 5 Templates
																</a>
																<div class="k-widget-1__item-desc">Font-end,Admin & Email</div>
															</div>
															<div class="k-widget-1__item-stats">
																<div class="k-widget-1__item-value">+79%</div>
																<div class="k-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-danger" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="k-widget-1__item">
															<div class="k-widget-1__item-info">
																<a href="#" class="k-widget-1__item-title">
																	Wordpress Themes
																</a>
																<div class="k-widget-1__item-desc">eCommerce Website, Plugin</div>
															</div>
															<div class="k-widget-1__item-stats">
																<div class="k-widget-1__item-value">+21%</div>
																<div class="k-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-brand" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="k-widget-1__item">
															<div class="k-widget-1__item-info">
																<a href="#" class="k-widget-1__item-title">eCommerce Websites</a>
																<div class="k-widget-1__item-desc">Shops, Fasion wep sites & atc</div>
															</div>
															<div class="k-widget-1__item-stats">
																<div class="k-widget-1__item-value">-16%</div>
																<div class="k-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar  bg-success" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="k-widget-1__item">
															<div class="k-widget-1__item-info">
																<a href="#" class="k-widget-1__item-title">UI/UX Design</a>
																<div class="k-widget-1__item-desc">Evrything you ever imagine</div>
															</div>
															<div class="k-widget-1__item-stats">
																<div class="k-widget-1__item-value">+4%</div>
																<div class="k-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-focus" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="k-widget-1__item">
															<div class="k-widget-1__item-info">
																<a href="#" class="k-widget-1__item-title">Freebie Themes</a>
																<div class="k-widget-1__item-desc">Font-end & Admin</div>
															</div>
															<div class="k-widget-1__item-stats">
																<div class="k-widget-1__item-value">+34</div>
																<div class="k-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane fade" id="k_tabs_19_25be902d44070b" role="tabpanel">
														<div class="k-widget-1__item">
															<div class="k-widget-1__item-info">
																<a href="#" class="k-widget-1__item-title">UI/UX Design</a>
																<div class="k-widget-1__item-desc">Evrything you ever imagine</div>
															</div>
															<div class="k-widget-1__item-stats">
																<div class="k-widget-1__item-value">+4%</div>
																<div class="k-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-focus" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="k-widget-1__item">
															<div class="k-widget-1__item-info">
																<a href="#" class="k-widget-1__item-title">HTML 5 Templates</a>
																<div class="k-widget-1__item-desc">Font-end,Admin & Email</div>
															</div>
															<div class="k-widget-1__item-stats">
																<div class="k-widget-1__item-value">+79%</div>
																<div class="k-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-danger" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="k-widget-1__item">
															<div class="k-widget-1__item-info">
																<a href="#" class="k-widget-1__item-title">Wordpress Themes</a>
																<div class="k-widget-1__item-desc">eCommerce Website, Plugin</div>
															</div>
															<div class="k-widget-1__item-stats">
																<div class="k-widget-1__item-value">+21%</div>
																<div class="k-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-brand" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="k-widget-1__item">
															<div class="k-widget-1__item-info">
																<a href="#" class="k-widget-1__item-title">eCommerce Websites</a>
																<div class="k-widget-1__item-desc">Shops, Fasion wep sites & atc</div>
															</div>
															<div class="k-widget-1__item-stats">
																<div class="k-widget-1__item-value">-16%</div>
																<div class="k-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar  bg-success" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="k-widget-1__item">
															<div class="k-widget-1__item-info">
																<a href="#" class="k-widget-1__item-title">Freebie Themes</a>
																<div class="k-widget-1__item-desc">Font-end & Admin</div>
															</div>
															<div class="k-widget-1__item-stats">
																<div class="k-widget-1__item-value">+34</div>
																<div class="k-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane fade" id="k_tabs_19_35be902d44070b" role="tabpanel">
														<div class="k-widget-1__item">
															<div class="k-widget-1__item-info">
																<a href="#" class="k-widget-1__item-title">eCommerce Websites</a>
																<div class="k-widget-1__item-desc">Shops, Fasion wep sites & atc</div>
															</div>
															<div class="k-widget-1__item-stats">
																<div class="k-widget-1__item-value">-16%</div>
																<div class="k-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar  bg-success" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="k-widget-1__item">
															<div class="k-widget-1__item-info">
																<a href="#" class="k-widget-1__item-title">UI/UX Design</a>
																<div class="k-widget-1__item-desc">Evrything you ever imagine</div>
															</div>
															<div class="k-widget-1__item-stats">
																<div class="k-widget-1__item-value">+4%</div>
																<div class="k-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-focus" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="k-widget-1__item">
															<div class="k-widget-1__item-info">
																<a href="#" class="k-widget-1__item-title">Latest Trends</a>
																<div class="k-widget-1__item-desc">eCommerce Website, Plugin</div>
															</div>
															<div class="k-widget-1__item-stats">
																<div class="k-widget-1__item-value">+34%</div>
																<div class="k-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="k-widget-1__item">
															<div class="k-widget-1__item-info">
																<a href="#" class="k-widget-1__item-title">HTML 5 Templates</a>
																<div class="k-widget-1__item-desc">Font-end,Admin & Email</div>
															</div>
															<div class="k-widget-1__item-stats">
																<div class="k-widget-1__item-value">+79%</div>
																<div class="k-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-danger" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="k-widget-1__item">
															<div class="k-widget-1__item-info">
																<a href="#" class="k-widget-1__item-title">Freebie Themes</a>
																<div class="k-widget-1__item-desc">Font-end & Admin</div>
															</div>
															<div class="k-widget-1__item-stats">
																<div class="k-widget-1__item-value">+34</div>
																<div class="k-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-12 col-xl-8 order-lg-2 order-xl-1">

									<!--begin::Portlet-->
									<div class="k-portlet k-portlet--height-fluid">
										<div class="k-portlet__head">
											<div class="k-portlet__head-label">
												<h3 class="k-portlet__head-title">Sales Statistics</h3>
											</div>
											<div class="k-portlet__head-toolbar">
												<div class="k-portlet__head-toolbar-wrapper">
													<div class="dropdown dropdown-inline">
														<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="flaticon-more-1"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<ul class="k-nav">
																<li class="k-nav__section k-nav__section--first">
																	<span class="k-nav__section-text">Export Tools</span>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-print"></i>
																		<span class="k-nav__link-text">Print</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-copy"></i>
																		<span class="k-nav__link-text">Copy</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-file-excel-o"></i>
																		<span class="k-nav__link-text">Excel</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-file-text-o"></i>
																		<span class="k-nav__link-text">CSV</span>
																	</a>
																</li>
																<li class="k-nav__item">
																	<a href="#" class="k-nav__link">
																		<i class="k-nav__link-icon la la-file-pdf-o"></i>
																		<span class="k-nav__link-text">PDF</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="k-portlet__body">
											<div class="k-widget-9">
												<div class="k-widget-9__panel">
													<div class="k-widget-9__legends">
														<div class="k-widget-9__legend">
															<div class="k-widget-9__legend-bullet k-bg-brand"></div>
															<div class="k-widget-9__legend-label">Author</div>
														</div>
														<div class="k-widget-9__legend">
															<div class="k-widget-9__legend-bullet k-label-bg-color-1"></div>
															<div class="k-widget-9__legend-label">Customer</div>
														</div>
													</div>
													<div class="k-widget-9__toolbar">
														<div class="dropdown dropdown-inline">
															<button type="button" class="btn btn-default dropdown-toggle btn-font-sm btn-bold btn-upper" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																August
															</button>
															<div class="dropdown-menu dropdown-menu-right">
																<ul class="k-nav">
																	<li class="k-nav__section k-nav__section--first">
																		<span class="k-nav__section-text">Export Tools</span>
																	</li>
																	<li class="k-nav__item">
																		<a href="#" class="k-nav__link">
																			<i class="k-nav__link-icon la la-print"></i>
																			<span class="k-nav__link-text">Print</span>
																		</a>
																	</li>
																	<li class="k-nav__item">
																		<a href="#" class="k-nav__link">
																			<i class="k-nav__link-icon la la-copy"></i>
																			<span class="k-nav__link-text">Copy</span>
																		</a>
																	</li>
																	<li class="k-nav__item">
																		<a href="#" class="k-nav__link">
																			<i class="k-nav__link-icon la la-file-excel-o"></i>
																			<span class="k-nav__link-text">Excel</span>
																		</a>
																	</li>
																	<li class="k-nav__item">
																		<a href="#" class="k-nav__link">
																			<i class="k-nav__link-icon la la-file-text-o"></i>
																			<span class="k-nav__link-text">CSV</span>
																		</a>
																	</li>
																	<li class="k-nav__item">
																		<a href="#" class="k-nav__link">
																			<i class="k-nav__link-icon la la-file-pdf-o"></i>
																			<span class="k-nav__link-text">PDF</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<div class="k-widget-9__chart">

													<!--Doc: For the chart initialization refer to "widgetSalesStatisticsChart" function in "src\theme\app\scripts\custom\dashboard.js" -->
													<canvas id="k_chart_sales_statistics" height="300"></canvas>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

									<!--begin::Portlet-->
									<div class="k-portlet k-portlet--height-fluid k-portlet--tabs">
										<div class="k-portlet__head">
											<div class="k-portlet__head-label">
												<h3 class="k-portlet__head-title">
													Latest Tasks
												</h3>
											</div>
											<div class="k-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-bold" role="tablist">
													<li class="nav-item">
														<a class="nav-link active show" data-toggle="tab" href="#k_portlet_tabs_1_1_content" role="tab" aria-selected="false">
															Today
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#k_portlet_tabs_1_2_content" role="tab" aria-selected="false">
															Week
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#k_portlet_tabs_1_3_content" role="tab" aria-selected="true">
															Month
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="k-portlet__body">
											<div class="tab-content">
												<div class="tab-pane fade active show" id="k_portlet_tabs_1_1_content" role="tabpanel">
													<div class="k-widget-5">
														<div class="k-widget-5__item k-widget-5__item--info">
															<div class="k-widget-5__item-info">
																<a href="#" class="k-widget-5__item-title">
																	Management meeting
																</a>
																<div class="k-widget-5__item-datetime">
																	09:30 AM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--danger">
															<div class="k-widget-5__item-info">
																<a href="#" class="k-widget-5__item-title">
																	Replace datatables rows color
																</a>
																<div class="k-widget-5__item-datetime">
																	12:00 AM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--brand">
															<div class="k-widget-5__item-info">
																<a href="#" class="k-widget-5__item-title">
																	Export Navitare booking table
																</a>
																<div class="k-widget-5__item-datetime">
																	01:20 PM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--success">
															<div class="k-widget-5__item-info">
																<a href="#" class="k-widget-5__item-title">
																	NYCS internal discussion
																</a>
																<div class="k-widget-5__item-datetime">
																	03: 00 PM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--danger">
															<div class="k-widget-5__item-info">
																<a href="#" class="k-widget-5__item-title">
																	Project Launch
																</a>
																<div class="k-widget-5__item-datetime">
																	11: 00 AM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--success">
															<div class="k-widget-5__item-info">
																<a href="#" class="k-widget-5__item-title">
																	Server maintenance
																</a>
																<div class="k-widget-5__item-datetime">
																	4: 30 PM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="k_portlet_tabs_1_2_content" role="tabpanel">
													<div class="k-widget-5">
														<div class="k-widget-5__item k-widget-5__item--brand">
															<div class="k-widget-5__item-info">
																<a href="#" class="k-widget-5__item-title">
																	Export Navitare booking table
																</a>
																<div class="k-widget-5__item-datetime">
																	01:20 PM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--danger">
															<div class="k-widget-5__item-info">
																<a href="#" class="k-widget-5__item-title">
																	Replace datatables rows color
																</a>
																<div class="k-widget-5__item-datetime">
																	12:00 AM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--brand">
															<div class="k-widget-5__item-info">
																<a href="#" class="k-widget-5__item-title">
																	Export Navitare booking table
																</a>
																<div class="k-widget-5__item-datetime">
																	01:20 PM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--danger">
															<div class="k-widget-5__item-info">
																<a href="#" class="k-widget-5__item-title">
																	Replace datatables rows color
																</a>
																<div class="k-widget-5__item-datetime">
																	12:00 AM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--success">
															<div class="k-widget-5__item-info">
																<a href="#" class="k-widget-5__item-title">
																	NYCS internal discussion
																</a>
																<div class="k-widget-5__item-datetime ">
																	03: 00 PM
																</div>
															</div>
															<div class="k-widget-5__item-check ">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--info ">
															<div class="k-widget-5__item-info ">
																<a href="#" class="k-widget-5__item-title">
																	Management meeting
																</a>
																<div class="k-widget-5__item-datetime ">
																	09:30 AM
																</div>
															</div>
															<div class="k-widget-5__item-check ">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade " id="k_portlet_tabs_1_3_content" role="tabpanel">
													<div class="k-widget-5 ">
														<div class="k-widget-5__item k-widget-5__item--success">
															<div class="k-widget-5__item-info ">
																<a href="#" class="k-widget-5__item-title">
																	NYCS internal discussion
																</a>
																<div class="k-widget-5__item-datetime">
																	03: 00 PM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--danger">
															<div class="k-widget-5__item-info ">
																<a href="#" class="k-widget-5__item-title">
																	Replace datatables rows color
																</a>
																<div class="k-widget-5__item-datetime">
																	12:00 AM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--danger">
															<div class="k-widget-5__item-info">
																<a href="#" class="k-widget-5__item-title">
																	Replace datatables rows color
																</a>
																<div class="k-widget-5__item-datetime">
																	12:00 AM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--brand">
															<div class="k-widget-5__item-info">
																<a href="#" class="k-widget-5__item-title">
																	Export Navitare booking table
																</a>
																<div class="k-widget-5__item-datetime">
																	01:20 PM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--brand">
															<div class="k-widget-5__item-info ">
																<a href="#" class="k-widget-5__item-title">
																	Export Navitare booking table
																</a>
																<div class="k-widget-5__item-datetime ">
																	01:20 PM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--info">
															<div class="k-widget-5__item-info ">
																<a href="#" class="k-widget-5__item-title">
																	Management meeting
																</a>
																<div class="k-widget-5__item-datetime">
																	09:30 AM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-12 col-xl-8 order-lg-2 order-xl-1">

									<!--begin::Portlet-->
									<div class="k-portlet k-portlet--height-fluid-half k-widget-14">
										<div class="k-portlet__body">

											<!-- Doc: The bootstrap carousel is a slideshow for cycling through a series of content, see https://getbootstrap.com/docs/4.1/components/carousel/ -->
											<div id="k-widget-slider-14-1" class="k-slider carousel slide" data-ride="carousel" data-interval="8000">
												<div class="k-slider__head">
													<div class="k-slider__label">New Products</div>
													<div class="k-slider__nav">
														<a class="k-slider__nav-prev carousel-control-prev" href="#k-widget-slider-14-1" role="button" data-slide="prev">
															<i class="fa fa-angle-left"></i>
														</a>
														<a class="k-slider__nav-next carousel-control-next" href="#k-widget-slider-14-1" role="button" data-slide="next">
															<i class="fa fa-angle-right"></i>
														</a>
													</div>
												</div>
												<div class="carousel-inner">
													<div class="carousel-item active">
														<div class="k-widget-14__body">
															<div class="k-widget-14__product">
																<div class="k-widget-14__thumb">
																	<a href="#"><img src="../assets/media/blog/1.jpg" class="k-widget-14__image--landscape" alt="" title="" /></a>
																</div>
																<div class="k-widget-14__content">
																	<a href="#">
																		<h3 class="k-widget-14__title">Active Smartwatch</h3>
																	</a>
																	<div class="k-widget-14__desc">
																		Beautifully designed watch that helps you track your fitness and diet – while keeping you motivated!
																	</div>
																</div>
															</div>
															<div class="k-widget-14__data">
																<div class="k-widget-14__info">
																	<div class="k-widget-14__info-title k-font-brand">246</div>
																	<div class="k-widget-14__desc">Purchases</div>
																</div>
																<div class="k-widget-14__info">
																	<div class="k-widget-14__info-title">37</div>
																	<div class="k-widget-14__desc">Reviews</div>
																</div>
															</div>
														</div>
														<div class="k-widget-14__foot">
															<div class="k-widget-14__foot-info">
																<div class="k-widget-14__foot-label btn btn-sm btn-label-brand btn-bold">
																	24 Nov, 2018
																</div>
																<div class="k-widget-14__foot-desc">Date of Release</div>
															</div>
															<div class="k-widget-14__foot-toolbar">
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Preview</a>
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Details</a>
															</div>
														</div>
													</div>
													<div class="carousel-item">
														<div class="k-widget-14__body">
															<div class="k-widget-14__product">
																<div class="k-widget-14__thumb">
																	<a href="#"><img src="../assets/media/blog/2.jpg" class="k-widget-14__image--landscape" alt="" title="" /></a>
																</div>
																<div class="k-widget-14__content">
																	<a href="#">
																		<h3 class="k-widget-14__title">DSLR Lens</h3>
																	</a>
																	<div class="k-widget-14__desc">
																		Wide-angle, Quick Focus. Emphasis is on modern lenses for 35 mm film SLRs and for DSLRs with sensor sizes less than or equal to 35 mm.
																	</div>
																</div>
															</div>
															<div class="k-widget-14__data">
																<div class="k-widget-14__info">
																	<div class="k-widget-14__info-title k-font-brand">142</div>
																	<div class="k-widget-14__desc">Purchases</div>
																</div>
																<div class="k-widget-14__info">
																	<div class="k-widget-14__info-title">25</div>
																	<div class="k-widget-14__desc">Reviews</div>
																</div>
															</div>
														</div>
														<div class="k-widget-14__foot">
															<div class="k-widget-14__foot-info">
																<div class="k-widget-14__foot-label btn btn-sm btn-label-brand btn-bold">
																	24 Nov, 2018
																</div>
																<div class="k-widget-14__foot-desc">Date of Release</div>
															</div>
															<div class="k-widget-14__foot-toolbar">
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Preview</a>
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Details</a>
															</div>
														</div>
													</div>
													<div class="carousel-item">
														<div class="k-widget-14__body">
															<div class="k-widget-14__product">
																<div class="k-widget-14__thumb">
																	<a href="#"><img src="../assets/media/blog/4.jpg" class="k-widget-14__image--landscape" alt="" title="" /></a>
																</div>
																<div class="k-widget-14__content">
																	<a href="#">
																		<h3 class="k-widget-14__title">Polaroid Camera</h3>
																	</a>
																	<div class="k-widget-14__desc">
																		Instant is back! Make photos fun again with the new range of Polaroid Instant Cameras with Vintage Effects and Built in Flash
																	</div>
																</div>
															</div>
															<div class="k-widget-14__data">
																<div class="k-widget-14__info">
																	<div class="k-widget-14__info-title k-font-brand">3578</div>
																	<div class="k-widget-14__desc">Purchases</div>
																</div>
																<div class="k-widget-14__info">
																	<div class="k-widget-14__info-title">457</div>
																	<div class="k-widget-14__desc">Reviews</div>
																</div>
															</div>
														</div>
														<div class="k-widget-14__foot">
															<div class="k-widget-14__foot-info">
																<div class="k-widget-14__foot-label btn btn-sm btn-label-brand btn-bold">
																	24 Nov, 2018
																</div>
																<div class="k-widget-14__foot-desc">Date of Release</div>
															</div>
															<div class="k-widget-14__foot-toolbar">
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Preview</a>
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Details</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->

									<!--begin::Portlet-->
									<div class="k-portlet k-portlet--height-fluid-half k-widget-15">
										<div class="k-portlet__body">

											<!-- Doc: The bootstrap carousel is a slideshow for cycling through a series of content, see https://getbootstrap.com/docs/4.1/components/carousel/ -->
											<div id="k-widget-slider-14-2" class="k-slider carousel slide" data-ride="carousel" data-interval="8000">
												<div class="k-slider__head">
													<div class="k-slider__label">New Authors</div>
													<div class="k-slider__nav">
														<a class="k-slider__nav-prev carousel-control-prev" href="#k-widget-slider-14-2" role="button" data-slide="prev">
															<i class="fa fa-angle-left"></i>
														</a>
														<a class="k-slider__nav-next carousel-control-next" href="#k-widget-slider-14-2" role="button" data-slide="next">
															<i class="fa fa-angle-right"></i>
														</a>
													</div>
												</div>
												<div class="carousel-inner">
													<div class="carousel-item active">
														<div class="k-widget-15__body">
															<div class="k-widget-15__author">
																<div class="k-widget-15__photo">
																	<a href="#"><img src="../assets/media/users/100_14.jpg" alt="" title="" /></a>
																</div>
																<div class="k-widget-15__detail">
																	<a href="#" class="k-widget-15__name">Andy John</a>
																	<div class="k-widget-15__desc">
																		AngularJS Expert
																	</div>
																</div>
															</div>
															<div class="k-widget-15__wrapper">
																<div class="k-widget-15__info">
																	<a href="#" class="btn btn-icon btn-sm btn-circle btn-success"><i class="fa fa-envelope"></i></a>
																	<a href="#" class="k-widget-15__info--item">sale@boatline.com</a>
																</div>
																<div class="k-widget-15__info">
																	<a href="#" class="btn btn-icon btn-sm btn-circle btn-brand"><i class="fa fa-phone"></i></a>
																	<a href="#" class="k-widget-15__info--item">(+44) 345 345 4705</a>
																</div>
															</div>
														</div>
														<div class="k-widget-15__foot">
															<div class="k-widget-15__foot-info">
																<div class="k-widget-15__foot-label btn btn-sm btn-label-brand btn-bold">
																	01 Sep, 2018
																</div>
																<div class="k-widget-15__foot-desc">Joined Date</div>
															</div>
															<div class="k-widget-15__foot-toolbar">
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Message</a>
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Profile</a>
															</div>
														</div>
													</div>
													<div class="carousel-item">
														<div class="k-widget-15__body">
															<div class="k-widget-15__author">
																<div class="k-widget-15__photo">
																	<a href="#"><img src="../assets/media/users/100_3.jpg" alt="" title="" /></a>
																</div>
																<div class="k-widget-15__detail">
																	<a href="#" class="k-widget-15__name">Patrick Smith</a>
																	<div class="k-widget-15__desc">
																		ReactJS Expert
																	</div>
																</div>
															</div>
															<div class="k-widget-15__wrapper">
																<div class="k-widget-15__info">
																	<a href="#" class="btn btn-icon btn-sm btn-circle btn-success"><i class="fa fa-envelope"></i></a>
																	<a href="#" class="k-widget-15__info--item">patrick@boatline.com</a>
																</div>
																<div class="k-widget-15__info">
																	<a href="#" class="btn btn-icon btn-sm btn-circle btn-brand"><i class="fa fa-phone"></i></a>
																	<a href="#" class="k-widget-15__info--item">(+44) 345 345 5574</a>
																</div>
															</div>
														</div>
														<div class="k-widget-15__foot">
															<div class="k-widget-15__foot-info">
																<div class="k-widget-15__foot-label btn btn-sm btn-label-brand btn-bold">
																	01 Sep, 2018
																</div>
																<div class="k-widget-15__foot-desc">Joined Date</div>
															</div>
															<div class="k-widget-15__foot-toolbar">
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Message</a>
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Profile</a>
															</div>
														</div>
													</div>
													<div class="carousel-item">
														<div class="k-widget-15__body">
															<div class="k-widget-15__author">
																<div class="k-widget-15__photo">
																	<a href="#"><img src="../assets/media/users/100_7.jpg" alt="" title="" /></a>
																</div>
																<div class="k-widget-15__detail">
																	<a href="#" class="k-widget-15__name">Amanda Collin</a>
																	<div class="k-widget-15__desc">
																		Project Manager
																	</div>
																</div>
															</div>
															<div class="k-widget-15__wrapper">
																<div class="k-widget-15__info">
																	<a href="#" class="btn btn-icon btn-sm btn-circle btn-success"><i class="fa fa-envelope"></i></a>
																	<a href="#" class="k-widget-15__info--item">amanda@boatline.com</a>
																</div>
																<div class="k-widget-15__info">
																	<a href="#" class="btn btn-icon btn-sm btn-circle btn-brand"><i class="fa fa-phone"></i></a>
																	<a href="#" class="k-widget-15__info--item">(+44) 345 345 1247</a>
																</div>
															</div>
														</div>
														<div class="k-widget-15__foot">
															<div class="k-widget-15__foot-info">
																<div class="k-widget-15__foot-label btn btn-sm btn-label-brand btn-bold">
																	01 Sep, 2018
																</div>
																<div class="k-widget-15__foot-desc">Joined Date</div>
															</div>
															<div class="k-widget-15__foot-toolbar">
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Message</a>
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Profile</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-12 col-xl-4 order-lg-2 order-xl-1">

									<!--begin::Portlet-->
									<div class="k-portlet k-portlet--height-fluid">
										<div class="k-portlet__head">
											<div class="k-portlet__head-label">
												<h3 class="k-portlet__head-title">Latest Uploads</h3>
											</div>
											<div class="k-portlet__head-toolbar">
												<div class="k-portlet__head-actions">
													<a href="#" class="btn btn-default btn-upper btn-sm btn-bold">All FILES</a>
												</div>
											</div>
										</div>
										<div class="k-portlet__body k-portlet__body--fit k-portlet__body--fluid">
											<div class="k-widget-7">
												<div class="k-widget-7__items">
													<div class="k-widget-7__item">
														<div class="k-widget-7__item-pic">
															<img src="../assets/media/files/doc.svg" alt="" />
														</div>
														<div class="k-widget-7__item-info">
															<a href="#" class="k-widget-7__item-title">
																Keeg Design Reqs
															</a>
															<div class="k-widget-7__item-desc">
																95 MB
															</div>
														</div>
														<div class="k-widget-7__item-toolbar">
															<div class="dropdown dropdown-inline">
																<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="flaticon-more-1"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-right">
																	<ul class="k-nav">
																		<li class="k-nav__section k-nav__section--first">
																			<span class="k-nav__section-text">EXPORT TOOLS</span>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-eye"></i>
																				<span class="k-nav__link-text">View</span>
																			</a>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-comment-o"></i>
																				<span class="k-nav__link-text">Coments</span>
																			</a>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-copy"></i>
																				<span class="k-nav__link-text">Copy</span>
																			</a>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-file-excel-o"></i>
																				<span class="k-nav__link-text">Excel</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="k-widget-7__item">
														<div class="k-widget-7__item-pic">
															<img src="../assets/media/files/pdf.svg" alt="" />
														</div>
														<div class="k-widget-7__item-info">
															<a href="#" class="k-widget-7__item-title">
																S.E.R Agreement
															</a>
															<div class="k-widget-7__item-desc">
																805 MB
															</div>
														</div>
														<div class="k-widget-7__item-toolbar">
															<div class="dropdown dropdown-inline">
																<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="flaticon-more-1"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-right">
																	<ul class="k-nav">
																		<li class="k-nav__section k-nav__section--first">
																			<span class="k-nav__section-text">EXPORT TOOLS</span>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-eye"></i>
																				<span class="k-nav__link-text">View</span>
																			</a>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-comment-o"></i>
																				<span class="k-nav__link-text">Coments</span>
																			</a>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-copy"></i>
																				<span class="k-nav__link-text">Copy</span>
																			</a>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-file-excel-o"></i>
																				<span class="k-nav__link-text">Excel</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="k-widget-7__item">
														<div class="k-widget-7__item-pic">
															<img src="../assets/media/files/jpg.svg" alt="" />
														</div>
														<div class="k-widget-7__item-info">
															<a href="#" class="k-widget-7__item-title">
																FlyMore Screenshot
															</a>
															<div class="k-widget-7__item-desc">
																4 MB
															</div>
														</div>
														<div class="k-widget-7__item-toolbar">
															<div class="dropdown dropdown-inline">
																<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="flaticon-more-1"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-right">
																	<ul class="k-nav">
																		<li class="k-nav__section k-nav__section--first">
																			<span class="k-nav__section-text">EXPORT TOOLS</span>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-eye"></i>
																				<span class="k-nav__link-text">View</span>
																			</a>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-comment-o"></i>
																				<span class="k-nav__link-text">Coments</span>
																			</a>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-copy"></i>
																				<span class="k-nav__link-text">Copy</span>
																			</a>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-file-excel-o"></i>
																				<span class="k-nav__link-text">Excel</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="k-widget-7__item">
														<div class="k-widget-7__item-pic">
															<img src="../assets/media/files/zip.svg" alt="" />
														</div>
														<div class="k-widget-7__item-info">
															<a href="#" class="k-widget-7__item-title">
																ST.11 Dacuments
															</a>
															<div class="k-widget-7__item-desc">
																Unknown
															</div>
														</div>
														<div class="k-widget-7__item-toolbar">
															<div class="dropdown dropdown-inline">
																<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="flaticon-more-1"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-right">
																	<ul class="k-nav">
																		<li class="k-nav__section k-nav__section--first">
																			<span class="k-nav__section-text">EXPORT TOOLS</span>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-eye"></i>
																				<span class="k-nav__link-text">View</span>
																			</a>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-comment-o"></i>
																				<span class="k-nav__link-text">Coments</span>
																			</a>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-copy"></i>
																				<span class="k-nav__link-text">Copy</span>
																			</a>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-file-excel-o"></i>
																				<span class="k-nav__link-text">Excel</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="k-widget-7__item">
														<div class="k-widget-7__item-pic">
															<img src="../assets/media/files/xml.svg" alt="" />
														</div>
														<div class="k-widget-7__item-info">
															<a href="#" class="k-widget-7__item-title">
																XML AOL Data Fetchin
															</a>
															<div class="k-widget-7__item-desc">
																4 MB
															</div>
														</div>
														<div class="k-widget-7__item-toolbar">
															<div class="dropdown dropdown-inline">
																<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="flaticon-more-1"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-right">
																	<ul class="k-nav">
																		<li class="k-nav__section k-nav__section--first">
																			<span class="k-nav__section-text">EXPORT TOOLS</span>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-eye"></i>
																				<span class="k-nav__link-text">View</span>
																			</a>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-comment-o"></i>
																				<span class="k-nav__link-text">Coments</span>
																			</a>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-copy"></i>
																				<span class="k-nav__link-text">Copy</span>
																			</a>
																		</li>
																		<li class="k-nav__item">
																			<a href="#" class="k-nav__link">
																				<i class="k-nav__link-icon la la-file-excel-o"></i>
																				<span class="k-nav__link-text">Excel</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="k-widget-7__foot">
													<img src="../assets/media/misc/clouds.png" alt="" />
													<div class="k-widget-7__upload">
														<a href="#"><i class="flaticon-upload"></i></a>
														<span>Drag files here</span>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-12 col-xl-8 order-lg-3 order-xl-1">

									<!--begin::Portlet-->
									<div class="k-portlet k-portlet--height-fluid">
										<div class="k-portlet__head k-portlet__head--lg k-portlet__head--noborder k-portlet__head--break-sm">
											<div class="k-portlet__head-label">
												<h3 class="k-portlet__head-title">Recent Orders <small>32500 total</small></h3>
											</div>
											<div class="k-portlet__head-toolbar">
												<div class="k-portlet__head-wrapper k-form">
													<div class="k-form__group k-form__group--inline k-margin-r-10">
														<div class="k-form__label">Sort By:</div>
														<div class="k-form__control" style="width: 160px;">
															<select class="form-control bootstrap-select" id="k_form_status" title="Status">
																<option value="1">Pending</option>
																<option value="2">Delivered</option>
																<option value="3">Canceled</option>
																<option value="4">Success</option>
																<option value="5">Info</option>
																<option value="6">Danger</option>
															</select>
														</div>
													</div>
													<a href="#" class="btn btn-brand btn-upper btn-bold">New Record</a>
												</div>
											</div>
										</div>
										<div class="k-portlet__body k-portlet__body--fit">

											<!--Doc: For the datatable initialization refer to "recentOrdersInit" function in "src\theme\app\scripts\custom\dashboard.js" -->
											<div class="k-datatable" id="k_recent_orders"></div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
							</div>

							<!--end::Row-->

							<!--end::Dashboard 1-->
						</div>

						<!-- end:: Content Body -->
					</div>

					<!-- end:: Content -->

					<!-- begin:: Footer -->
					<div class="k-footer	k-grid__item k-grid k-grid--desktop k-grid--ver-desktop">
						<div class="k-footer__copyright">
							2018&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/keen" target="_blank" class="k-link">Keenthemes</a>
						</div>
						<div class="k-footer__menu">
							<a href="http://keenthemes.com/keen" target="_blank" class="k-footer__menu-link k-link">About</a>
							<a href="http://keenthemes.com/keen" target="_blank" class="k-footer__menu-link k-link">Team</a>
							<a href="http://keenthemes.com/keen" target="_blank" class="k-footer__menu-link k-link">Contact</a>
						</div>
					</div>

					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin:: Topbar Offcanvas Panels -->

		<!-- begin::Offcanvas Toolbar Search -->
		<div id="k_offcanvas_toolbar_search" class="k-offcanvas-panel">
			<div class="k-offcanvas-panel__head">
				<h3 class="k-offcanvas-panel__title">
					Search
				</h3>
				<a href="#" class="k-offcanvas-panel__close" id="k_offcanvas_toolbar_search_close"><i class="flaticon2-delete"></i></a>
			</div>
			<div class="k-offcanvas-panel__body">
				<div class="k-search">
					<div class="k-search__form">
						<form action="#" method="get">
							<input type="text" name="query" class="form-control" placeholder="Type here...">
						</form>
					</div>
					<div class="k-search__result">
						<div class="k-search__section">
							Documents
						</div>
						<div class="k-search__item">
							<div class="k-search__item-img k-search__item-img--file">
								<img src="../assets/media/files/doc.svg" alt="" />
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									AirPlus Requirements
								</a>
								<div class="k-search__item-desc">
									by Grog John
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-img k-search__item-img--file">
								<img src="../assets/media/files/pdf.svg" alt="" />
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									TechNav Documentation
								</a>
								<div class="k-search__item-desc">
									by Mary Broun
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-img k-search__item-img--file">
								<img src="../assets/media/files/zip.svg" alt="" />
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									All Framework Docs
								</a>
								<div class="k-search__item-desc">
									by Grog John
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-img k-search__item-img--file">
								<img src="../assets/media/files/xml.svg" alt="" />
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									AirPlus Requirements
								</a>
								<div class="k-search__item-desc">
									by Grog John
								</div>
							</div>
						</div>
						<div class="k-search__section">
							Members
						</div>
						<div class="k-search__item">
							<div class="k-search__item-img">
								<img src="../assets/media/users/300_14.jpg" alt="" />
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									Jimmy Curry
								</a>
								<div class="k-search__item-desc">
									Software Developer
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-img">
								<img src="../assets/media/users/300_20.jpg" alt="" />
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									Milena Gibson
								</a>
								<div class="k-search__item-desc">
									UI Designer
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-img">
								<img src="../assets/media/users/300_21.jpg" alt="" />
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									Stefan JohnStefan
								</a>
								<div class="k-search__item-desc">
									Marketing Manager
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-img">
								<img src="../assets/media/users/300_2.jpg" alt="" />
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									Anna Strong
								</a>
								<div class="k-search__item-desc">
									Software Developer
								</div>
							</div>
						</div>
						<div class="k-search__section">
							Files
						</div>
						<div class="k-search__item">
							<div class="k-search__item-icon">
								<i class="flaticon2-box k-font-danger"></i>
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									2 New items submitted
								</a>
								<div class="k-search__item-desc">
									Marketing Manager
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-icon">
								<i class="flaticon-psd k-font-brand"></i>
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									79 PSD files generated
								</a>
								<div class="k-search__item-desc">
									by Grog John
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-icon">
								<i class="flaticon2-supermarket k-font-warning"></i>
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									$2900 worth products sold
								</a>
								<div class="k-search__item-desc">
									Total 234 items
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-icon">
								<i class="flaticon-safe-shield-protection k-font-info"></i>
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									4 New items submitted
								</a>
								<div class="k-search__item-desc">
									Marketing Manager
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end::Offcanvas Toolbar Search -->

		<!-- begin::Offcanvas Toolbar Quick Actions -->
		<div id="k_offcanvas_toolbar_quick_actions" class="k-offcanvas-panel">
			<div class="k-offcanvas-panel__head">
				<h3 class="k-offcanvas-panel__title">
					Quick Actions
				</h3>
				<a href="#" class="k-offcanvas-panel__close" id="k_offcanvas_toolbar_quick_actions_close"><i class="flaticon2-delete"></i></a>
			</div>
			<div class="k-offcanvas-panel__body">
				<div class="k-grid-nav-v2">
					<a href="#" class="k-grid-nav-v2__item">
						<div class="k-grid-nav-v2__item-icon"><i class="flaticon2-box"></i></div>
						<div class="k-grid-nav-v2__item-title">Orders</div>
					</a>
					<a href="#" class="k-grid-nav-v2__item">
						<div class="k-grid-nav-v2__item-icon"><i class="flaticon-download-1"></i></div>
						<div class="k-grid-nav-v2__item-title">Uploades</div>
					</a>
					<a href="#" class="k-grid-nav-v2__item">
						<div class="k-grid-nav-v2__item-icon"><i class="flaticon2-supermarket"></i></div>
						<div class="k-grid-nav-v2__item-title">Products</div>
					</a>
					<a href="#" class="k-grid-nav-v2__item">
						<div class="k-grid-nav-v2__item-icon"><i class="flaticon2-avatar"></i></div>
						<div class="k-grid-nav-v2__item-title">Customers</div>
					</a>
					<a href="#" class="k-grid-nav-v2__item">
						<div class="k-grid-nav-v2__item-icon"><i class="flaticon2-list"></i></div>
						<div class="k-grid-nav-v2__item-title">Blog Posts</div>
					</a>
					<a href="#" class="k-grid-nav-v2__item">
						<div class="k-grid-nav-v2__item-icon"><i class="flaticon2-settings"></i></div>
						<div class="k-grid-nav-v2__item-title">Settings</div>
					</a>
				</div>
			</div>
		</div>

		<!-- end::Offcanvas Toolbar Quick Actions -->

		<!-- end:: Topbar Offcanvas Panels -->

		<!-- begin::Quick Panel -->
		<div id="k_quick_panel" class="k-quick-panel">
			<div class="k-quick-panel__nav">
				<ul class="nav nav-pills" role="tablist">
					<li class="nav-item active">
						<a class="nav-link active" data-toggle="tab" href="#k_quick_panel_tab_notifications" role="tab">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#k_quick_panel_tab_actions" role="tab">Actions</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#k_quick_panel_tab_settings" role="tab">Settings</a>
					</li>
				</ul>
				<button class="k-quick-panel__close" id="k_quick_panel_close_btn"><i class="la la-close"></i></button>
			</div>
			<div class="k-quick-panel__content">
				<div class="tab-content">
					<div class="tab-pane fade show k-scroll active" id="k_quick_panel_tab_notifications" role="tabpanel">

						<!--Begin::Timeline -->
						<div class="k-timeline">

							<!--Begin::Item -->
							<div class="k-timeline__item k-timeline__item--success">
								<div class="k-timeline__item-section">
									<div class="k-timeline__item-section-border">
										<div class="k-timeline__item-section-icon">
											<i class="flaticon-feed k-font-success"></i>
										</div>
									</div>
									<span class="k-timeline__item-datetime">02:30 PM</span>
								</div>
								<a href="" class="k-timeline__item-text">
									KeenThemes created new layout whith tens of new options for Keen Admin panel
								</a>
								<div class="k-timeline__item-info">
									HTML,CSS,VueJS
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="k-timeline__item k-timeline__item--danger">
								<div class="k-timeline__item-section">
									<div class="k-timeline__item-section-border">
										<div class="k-timeline__item-section-icon">
											<i class="flaticon-safe-shield-protection k-font-danger"></i>
										</div>
									</div>
									<span class="k-timeline__item-datetime">01:20 AM</span>
								</div>
								<a href="" class="k-timeline__item-text">
									New secyrity alert by Firewall & order to take aktion on User Preferences
								</a>
								<div class="k-timeline__item-info">
									Security, Fieewall
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="k-timeline__item k-timeline__item--brand">
								<div class="k-timeline__item-section">
									<div class="k-timeline__item-section-border">
										<div class="k-timeline__item-section-icon">
											<i class="flaticon2-box k-font-brand"></i>
										</div>
									</div>
									<span class="k-timeline__item-datetime">Yestardey</span>
								</div>
								<a href="" class="k-timeline__item-text">
									FlyMore design mock-ups been uploadet by designers Bob, Naomi, Richard
								</a>
								<div class="k-timeline__item-info">
									PSD, Sketch, AJ
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="k-timeline__item k-timeline__item--warning">
								<div class="k-timeline__item-section">
									<div class="k-timeline__item-section-border">
										<div class="k-timeline__item-section-icon">
											<i class="flaticon-pie-chart-1 k-font-warning"></i>
										</div>
									</div>
									<span class="k-timeline__item-datetime">Aug 13,2018</span>
								</div>
								<a href="" class="k-timeline__item-text">
									Meeting with Ken Digital Corp ot Unit14, 3 Edigor Buildings, George Street, Loondon<br> England, BA12FJ
								</a>
								<div class="k-timeline__item-info">
									Meeting, Customer
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="k-timeline__item k-timeline__item--info">
								<div class="k-timeline__item-section">
									<div class="k-timeline__item-section-border">
										<div class="k-timeline__item-section-icon">
											<i class="flaticon-notepad k-font-info"></i>
										</div>
									</div>
									<span class="k-timeline__item-datetime">May 09, 2018</span>
								</div>
								<a href="" class="k-timeline__item-text">
									KeenThemes created new layout whith tens of new options for Keen Admin panel
								</a>
								<div class="k-timeline__item-info">
									HTML,CSS,VueJS
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="k-timeline__item k-timeline__item--accent">
								<div class="k-timeline__item-section">
									<div class="k-timeline__item-section-border">
										<div class="k-timeline__item-section-icon">
											<i class="flaticon-bell k-font-accent"></i>
										</div>
									</div>
									<span class="k-timeline__item-datetime">01:20 AM</span>
								</div>
								<a href="" class="k-timeline__item-text">
									New secyrity alert by Firewall & order to take aktion on User Preferences
								</a>
								<div class="k-timeline__item-info">
									Security, Fieewall
								</div>
							</div>

							<!--End::Item -->
						</div>

						<!--End::Timeline -->
					</div>
					<div class="tab-pane fade k-scroll" id="k_quick_panel_tab_actions" role="tabpanel">

						<!--begin::Portlet-->
						<div class="k-portlet k-portlet--solid-success">
							<div class="k-portlet__head">
								<div class="k-portlet__head-label">
									<span class="k-portlet__head-icon k-hide"><i class="flaticon-stopwatch"></i></span>
									<h3 class="k-portlet__head-title">Recent Bills</h3>
								</div>
								<div class="k-portlet__head-toolbar">
									<div class="k-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="k-portlet__body">
								<div class="k-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="k-portlet__foot k-portlet__foot--sm k-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->

						<!--begin::Portlet-->
						<div class="k-portlet k-portlet--solid-focus">
							<div class="k-portlet__head">
								<div class="k-portlet__head-label">
									<span class="k-portlet__head-icon k-hide"><i class="flaticon-stopwatch"></i></span>
									<h3 class="k-portlet__head-title">Latest Orders</h3>
								</div>
								<div class="k-portlet__head-toolbar">
									<div class="k-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="k-portlet__body">
								<div class="k-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="k-portlet__foot k-portlet__foot--sm k-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->

						<!--begin::Portlet-->
						<div class="k-portlet k-portlet--solid-info">
							<div class="k-portlet__head">
								<div class="k-portlet__head-label">
									<h3 class="k-portlet__head-title">Latest Invoices</h3>
								</div>
								<div class="k-portlet__head-toolbar">
									<div class="k-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="k-portlet__body">
								<div class="k-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="k-portlet__foot k-portlet__foot--sm k-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->

						<!--begin::Portlet-->
						<div class="k-portlet k-portlet--solid-warning">
							<div class="k-portlet__head">
								<div class="k-portlet__head-label">
									<h3 class="k-portlet__head-title">New Comments</h3>
								</div>
								<div class="k-portlet__head-toolbar">
									<div class="k-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="k-portlet__body">
								<div class="k-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="k-portlet__foot k-portlet__foot--sm k-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->

						<!--begin::Portlet-->
						<div class="k-portlet k-portlet--solid-brand">
							<div class="k-portlet__head">
								<div class="k-portlet__head-label">
									<h3 class="k-portlet__head-title">Recent Posts</h3>
								</div>
								<div class="k-portlet__head-toolbar">
									<div class="k-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="k-portlet__body">
								<div class="k-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="k-portlet__foot k-portlet__foot--sm k-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->
					</div>
					<div class="tab-pane fade k-scroll" id="k_quick_panel_tab_settings" role="tabpanel">
						<form class="k-form">
							<div class="k-heading k-heading--space-sm">Notifications</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable notifications:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable audit log:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm">
										<label>
											<input type="checkbox" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Notify on new orders:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="k-separator k-separator--space-md k-separator--border-dashed"></div>
							<div class="k-heading k-heading--space-sm">Orders</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable order tracking:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm k-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable orders reports:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm k-switch--danger">
										<label>
											<input type="checkbox" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Allow order status auto update:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm k-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="k-separator k-separator--space-md k-separator--border-dashed"></div>
							<div class="k-heading k-heading--space-sm">Customers</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable customer singup:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm k-switch--success">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable customers reporting:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm k-switch--success">
										<label>
											<input type="checkbox" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Notifiy on new customer registration:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm k-switch--success">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
											<span></span>
										</label>
									</span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- end::Quick Panel -->

		<!-- begin::Scrolltop -->
		<div id="k_scrolltop" class="k-scrolltop">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		<!-- begin::Sticky Toolbar -->

		<!-- end::Sticky Toolbar -->

		<!-- begin::Demo Panel -->
		<div id="k_demo_panel" class="k-demo-panel">
			<div class="k-demo-panel__head">
				<h3 class="k-demo-panel__title">
					Select A Demo

					<!--<small>5</small>-->
				</h3>
				<a href="#" class="k-demo-panel__close" id="k_demo_panel_close"><i class="flaticon2-delete"></i></a>
			</div>
			<div class="k-demo-panel__body">
				<div class="k-demo-panel__item k-demo-panel__item--active">
					<div class="k-demo-panel__item-title">
						Default
					</div>
					<div class="k-demo-panel__item-preview">
						<img src="../assets/media/demos-mini/default.png" alt="" />
						<div class="k-demo-panel__item-preview-overlay">
							<a href="../default/index.html" class="btn btn-brand btn-elevate" target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="k-demo-panel__item ">
					<div class="k-demo-panel__item-title">
						Demo 2
					</div>
					<div class="k-demo-panel__item-preview">
						<img src="../assets/media/demos-mini/demo2.png" alt="" />
						<div class="k-demo-panel__item-preview-overlay">
							<a href="../demo2/index.html" class="btn btn-brand btn-elevate" target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="k-demo-panel__item ">
					<div class="k-demo-panel__item-title">
						Demo 3
					</div>
					<div class="k-demo-panel__item-preview">
						<img src="../assets/media/demos-mini/demo3.png" alt="" />
						<div class="k-demo-panel__item-preview-overlay">
							<a href="../demo3/index.html" class="btn btn-brand btn-elevate" target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="k-demo-panel__item ">
					<div class="k-demo-panel__item-title">
						Demo 4
					</div>
					<div class="k-demo-panel__item-preview">
						<img src="../assets/media/demos-mini/demo4.png" alt="" />
						<div class="k-demo-panel__item-preview-overlay">
							<a href="../demo4/index.html" class="btn btn-brand btn-elevate" target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="k-demo-panel__item ">
					<div class="k-demo-panel__item-title">
						Demo 5
					</div>
					<div class="k-demo-panel__item-preview">
						<img src="../assets/media/demos-mini/demo5.png" alt="" />
						<div class="k-demo-panel__item-preview-overlay">
							<a href="../demo5/index.html" class="btn btn-brand btn-elevate" target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<a href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/" target="_blank" class="k-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
					Buy Keen Now!
				</a>
			</div>
		</div>

		<!-- end::Demo Panel -->

		<!-- begin::Global Config -->
		<script>
			var KAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"metal": "#c4c5d6",
						"light": "#ffffff",
						"accent": "#00c5dc",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995",
						"focus": "#9816f4"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="../assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="../assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/theme/framework/vendors/bootstrap-datepicker/init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/theme/framework/vendors/bootstrap-timepicker/init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/inputmask/dist/inputmask/inputmask.phone.extensions.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/theme/framework/vendors/bootstrap-markdown/init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/theme/framework/vendors/jquery-validation/init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/theme/framework/vendors/sweetalert2/init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle -->
		<script src="../assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors -->
		<script src="../assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<script src="../assets/app/scripts/custom/dashboard.js" type="text/javascript"></script>

		<!--end::Page Scripts -->

		<!--begin::Global App Bundle -->
		<script src="../assets/app/scripts/bundle/app.bundle.js" type="text/javascript"></script>

		<!--end::Global App Bundle -->
	</body>

	<!-- end::Body -->
</html>
