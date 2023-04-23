<!DOCTYPE html>
 
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../"/>
		<title>Music</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Authentication - Multi-steps-->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep" id="kt_create_account_stepper">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
					<div class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center" style="background-image: url(assets/media/misc/auth-bg.png)">
						<!--begin::Header-->
						<div class="d-flex flex-center py-10 py-lg-20 mt-lg-20">
							<!--begin::Logo-->
							<a href="../../demo1/dist/index.html">
								<img alt="Logo" src="assets/media/logos/custom-1.png" class="h-70px" />
							</a>
							<!--end::Logo-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="d-flex flex-row-fluid justify-content-center p-10">
							<!--begin::Nav-->
							<div class="stepper-nav">
								<!--begin::Step 1-->
								<div id="ss1" class="stepper-item current" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">1</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">Account Type</h3>
											<div class="stepper-desc fw-normal">Select your account type</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Line-->
									<div class="stepper-line h-40px"></div>
									<!--end::Line-->
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div id="ss2" class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">2</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">Account Info</h3>
											<div class="stepper-desc fw-normal">Setup your account settings</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Line-->
									<div class="stepper-line h-40px"></div>
									<!--end::Line-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div id="ss3" class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">3</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">Business Details</h3>
											<div class="stepper-desc fw-normal">Setup your business details</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Line-->
									<div class="stepper-line h-40px"></div>
									<!--end::Line-->
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div id="ss4" class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">4</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title">Billing Details</h3>
											<div class="stepper-desc fw-normal">Provide your payment info</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Line-->
									<div class="stepper-line h-40px"></div>
									<!--end::Line-->
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div id="ss5" class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">5</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title">Completed</h3>
											<div class="stepper-desc fw-normal">Your account is created</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 5-->
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="d-flex flex-center flex-wrap px-5 py-10">
							<!--begin::Links-->
							<div class="d-flex fw-normal">
								<a href="https://keenthemes.com" class="text-success px-5" target="_blank">Terms</a>
								<a href="https://devs.keenthemes.com" class="text-success px-5" target="_blank">Plans</a>
								<a href="https://1.envato.market/EA4JP" class="text-success px-5" target="_blank">Contact Us</a>
							</div>
							<!--end::Links-->
						</div>
						<!--end::Footer-->
					</div>
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-650px w-xl-700px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
							<form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form" action="{{ route('register') }}">
            						@csrf
									<input type="hidden"  name="account_type" value="personal" id="account_type" />
									<input type="hidden"  value="1" id="current_page" />
									<input type="hidden"  value="0" id="account_plan" />
									
								<!--begin::Step 1-->
								<div id="s1" class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold d-flex align-items-center text-dark">Choose Account Type
											<span class="ms-1" data-bs-toggle="tooltip" title="Billing is issued based on your selected account typ">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">If you need more info, please check out
											<a href="#" class="link-primary fw-bold">Help Page</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Row-->
											<div class="row">
												<!--begin::Col-->
												<div class="col-lg-6">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="account_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal" />
													<label data-id="Individual" class="company_individual btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
														<i class="ki-duotone ki-badge fs-3x me-5">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
														</i>
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<span class="text-dark fw-bold d-block fs-4 mb-2">Individual</span>
															<span class="text-muted fw-semibold fs-6">My business isn't registered</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-6">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="account_type" value="corporate" id="kt_create_account_form_account_type_corporate" />
													<label data-id="Company" class="company_individual btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
														<i class="ki-duotone ki-briefcase fs-3x me-5">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<span class="text-dark fw-bold d-block fs-4 mb-2">Company </span>
															<span class="text-muted fw-semibold fs-6">Includes  Inc, Ltd, LLC/LLP, Co, Corp, Pvt Ltd</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div id="s2" class="pending" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										 
										
										<!--begin::Input group-->
										<div class="mb-0 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center form-label mb-5">Select You Are
											<span class="ms-1" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></label>
											<!--end::Label-->
											<!--begin::Options-->
											<div class="mb-0">
												<!--begin:Option-->
												<label data-id="1" class="account_type d-flex flex-stack mb-5 cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label">
																<i class="ki-duotone ki-bank fs-1 text-gray-600">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Description-->
														<span class="d-flex flex-column">
															<span class="fw-bold text-gray-800 text-hover-primary fs-5">Artist</span>
														<!--<span class="fs-6 fw-semibold text-muted">Use images to enhance your post flow</span>-->
														</span>
														<!--end:Description-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input account_plan" checked="checked" type="radio"  value="1" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label data-id="2" class="account_type d-flex flex-stack mb-5 cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label">
																<i class="ki-duotone ki-chart fs-1 text-gray-600">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Description-->
														<span class="d-flex flex-column">
															<span class="fw-bold text-gray-800 text-hover-primary fs-5">Label</span>
															<!--<span class="fs-6 fw-semibold text-muted">Use images to your post time</span>-->
														</span>
														<!--end:Description-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input account_plan" type="radio"   value="2" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label data-id="3" class="account_type d-flex flex-stack mb-0 cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label">
																<i class="ki-duotone ki-chart-pie-4 fs-1 text-gray-600">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Description-->
														<span class="d-flex flex-column">
															<span class="fw-bold text-gray-800 text-hover-primary fs-5">Aggregator</span>
															<!--<span class="fs-6 fw-semibold text-muted">Use images to enhance time travel rivers</span>-->
														</span>
														<!--end:Description-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input account_plan" type="radio"  value="3" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label data-id="4" class="account_type d-flex flex-stack mb-0 cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label">
																<i class="ki-duotone ki-chart-pie-4 fs-1 text-gray-600">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Description-->
														<span class="d-flex flex-column">
															<span class="fw-bold text-gray-800 text-hover-primary fs-5"> Distributor</span>
															<!--<span class="fs-6 fw-semibold text-muted">Use images to enhance time travel rivers</span>-->
														</span>
														<!--end:Description-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input account_plan" type="radio"  value="4" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Options-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div id="s3" class="pending" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<h2 class="fw-bold text-dark">Personal Details</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">If you need more info, please check out
											<a href="#" class="link-primary fw-bold">Help Page</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Full Name </label>
											<!--end::Label-->
											<!--begin::Input-->
											<input name="name" id="name" placeholder="Please Enter Your Full Legal Name" class="form-control form-control-lg form-control-solid" value="" />
											<!--end::Input-->
										</div>
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Date Of Birth</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="date" name="dob" id="dob" placeholder="Please Enter Your DOB" class="form-control form-control-lg form-control-solid" value="" />
											<!--end::Input-->
										</div>
										<div class="fv-row mb-0">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label required">Contact Email</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input name="email" id="email" placeholder="Please Enter Your Email Id" class="form-control form-control-lg form-control-solid" value="" />
											<!--end::Input-->
										</div>

										<div class="fv-row mb-0">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label required">Mobile Number</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="number" name="mobile" placeholder="Please Enter Your Mobile Number" id="mobile" class="form-control form-control-lg form-control-solid" value="" />
											<!--end::Input-->
										</div>


										<div class="fv-row mb-0">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label required">Username</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" name="username" placeholder="Please Enter Your username" id="username" class="form-control form-control-lg form-control-solid" value="" />
											<!--end::Input-->
										</div>

										
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Country</label>
											<!--end::Label-->
											<!--begin::Input-->
											<select id="country" name="country" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select Country." data-allow-clear="true" data-hide-search="true">
												<option></option>
												<option value="1">S Corporation</option>
											 
											</select>
											<!--end::Input-->
										</div>
										 
										<div class="fv-row mb-0">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label required">Password</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" id="password" name="password" placeholder="Enter Your Password" class="form-control form-control-lg form-control-solid" value="" />
											<!--end::Input-->
										</div>


										<div class="fv-row mb-0">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label required">Confirm Password</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" id="c_password" placeholder="Re-Enter Your password" class="form-control form-control-lg form-control-solid" value="" />
											<!--end::Input-->
										</div>

										<div class="fv-row mb-10">
											<!--end::Label-->
											<label class="form-label">Agree T & C </label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="checkbox" id="c_password" class="form-check-input form-control" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div id="s4" class="pending" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold text-dark">OTP Verification</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">If you need more info, please check out
											<a href="#" class="text-primary fw-bold">Help Page</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
												<span class="required">Mobile OTP</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
											<input type="text" class="form-control form-control-solid" placeholder="Enter Mobile Number OTP" id="mobile_otp" name="mobile_otp" value="" />
										</div>

										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
												<span class="required">Email OTP</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
											<input type="text" class="form-control form-control-solid" placeholder="Enter Email OTP" id="email_otp" name="email_otp" value="" />
										</div>

										<!--end::Input group-->
									 										
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div id="s5" class="pending" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-8 pb-lg-10">
											<!--begin::Title-->
											<h2 class="fw-bold text-dark">Your Are Done!</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">If you need more info, please
											<a href="" class="link-primary fw-bold">Sign In</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="mb-0">
											<!--begin::Text-->
											<div class="fs-6 text-gray-600 mb-5">Writing headlines for blog posts is as much an art as it is a science and probably warrants its own post, but for all advise is with what works for your great & amazing audience.</div>
											<!--end::Text-->
											<!--begin::Alert-->
											<!--begin::Notice-->
											<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
												<!--begin::Icon-->
												<i class="ki-duotone ki-information fs-2tx text-warning me-4">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
												<!--end::Icon-->
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack flex-grow-1">
													<!--begin::Content-->
													<div class="fw-semibold">
														<h4 class="text-gray-900 fw-bold">We need your attention!</h4>
														<div class="fs-6 text-gray-700">To start using great tools, please,
														<a href="../../demo1/dist/utilities/wizards/vertical.html" class="fw-bold">Create Team Platform</a></div>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->
											<!--end::Alert-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 5-->
								
								
								<!--begin::Actions-->
								<div class="d-flex flex-stack pt-15">
									<div class="mr-2">
										<button id="previous" data-id="previous" type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
										<i class="ki-duotone ki-arrow-left fs-4 me-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>Previous</button>
									</div>
									<div>
										<button type="button" id="submit" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
											<span class="indicator-label">Submit
											<i class="ki-duotone ki-arrow-right fs-4 ms-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i></span>
											<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<button type="button" id="continue" data-id="continue"  class="btn btn-lg btn-primary d-inline-block" data-kt-stepper-action="next">Continue
										<i class="ki-duotone ki-arrow-right fs-4 ms-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i></button>
									</div>
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Multi-steps-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/utilities/modals/create-account.js1"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>

<script>
$(document).ready(function(){
 alert();
 
 $( ".company_individual" ).on( "click", function() {
	var data_account_type=$(this).attr("data-id");
 	$("#account_type").val(data_account_type);
});

$( ".account_plan" ).on( "click", function() {
	// alert(123);
	$( ".account_plan" ).removeClass( 'current');
 

	var account_plan=$(this).attr("data-id");

	var account_plan=$(this).attr("data-id");
 	$("#account_plan").val(account_plan);
});


$( "#submit" ).on( "click", function() {
	$( "#s1,#s2,#s3,#s4" ).addClass( 'pending');
		$( "#s1,#s2,#s3,#s4" ).removeClass( 'current');
		$( "#s5" ).addClass( 'current');

		$( "#ss1,#ss2,#ss3,#ss4" ).addClass( 'pending');
		$( "#ss1,#ss2,#ss3,#ss4" ).removeClass( 'current');
		$( "#ss5" ).addClass( 'current');
		$( "#submit" ).removeClass( 'd-inline-block');


		var baseUrl = ' <?php echo url(''); ?>';
        var spinner = $('#loader');
        $.ajax({
            url: baseUrl + '/register_api',
            method: "POST",
            data: {
				type_of_business: $("#account_type").val(), 
				type_of_user: $("#account_plan").val(),
				name: $("#name").val(),
				dob: $("#dob").val(),
				email: $("#email").val(),
				mobile: $("#mobile").val(),
				username: $("#username").val(),
				country: $("#country").val(),
				password: $("#password").val(),
				"_token": "{{ csrf_token() }}",

				},
            datatype: 'JSON',
            headers: {
             },
            beforeSend: function() {
               
            },
            success: function (data) {
                $(window).scrollTop(0);
                if (data['status'] == 'success' && data['data']) {
                    //  $(".alert-success.custom-msg strong").html(data['msg']);
					alert("Your are register successfully");
                 } else if (data['status'] == 'error' && data['msg']) {
                    //  $(".alert-danger.custom-msg strong").html(data['msg']);
					alert("somethink wrong plz try again");

                 }
                
              
            },
            done: function (result) {
                
            }
        });
		// $( "#submit" ).addClass( 'd-inline-block');

});



 $( "#continue,#previous" ).on( "click", function() {
	var current_page =$("#current_page").val();
	var tab_type=$(this).attr("data-id");
	if(tab_type=="previous"){
		var current_page=(parseInt(current_page)-1);
	}
	if(tab_type=="continue"){
		var current_page=(parseInt(current_page)+1);
	}
 	// alert(current_page);

	$("#current_page").val(current_page);
	
	// s
	// d-inline-block
	// d-none

	// ss
	// completed
	// current
	// pending

	if (current_page==1) {
 		$( "#s2,#s3,#s4,#s5" ).addClass( 'pending');
		$( "#s2,#s3,#s4,#s5" ).removeClass( 'current');
		$( "#s1" ).addClass( 'current');

		$( "#ss2,#ss3,#ss4,#ss5" ).addClass( 'pending');
		$( "#ss2,#ss3,#ss4,#ss5" ).removeClass( 'current');
		$( "#ss1" ).addClass( 'current');

		$( "#previous" ).addClass( 'd-none');
	}
	if (current_page==2) {
 		$( "#s1,#s3,#s4,#s5" ).addClass( 'pending');
		$( "#s1,#s3,#s4,#s5" ).removeClass( 'current');
		$( "#s2" ).addClass( 'current');

		$( "#ss1,#ss3,#ss4,#ss5" ).addClass( 'pending');
		$( "#ss1,#ss3,#ss4,#ss5" ).removeClass( 'current');
		$( "#ss2" ).addClass( 'current');
		$( "#previous" ).addClass( 'd-inline-block');

	}
	if (current_page==3) {
 		$( "#s1,#s2,#s4,#s5" ).addClass( 'pending');
		$( "#s1,#s2,#s4,#s5" ).removeClass( 'current');
		$( "#s3" ).addClass( 'current');

		$( "#ss1,#ss2,#ss4,#ss5" ).addClass( 'pending');
		$( "#ss1,#ss2,#ss4,#ss5" ).removeClass( 'current');
		$( "#ss3" ).addClass( 'current');

		$( "#previous" ).addClass( 'd-inline-block');
	}
	if (current_page==4) {
 		$( "#s1,#s2,#s3,#s5" ).addClass( 'pending');
		$( "#s1,#s2,#s3,#s5" ).removeClass( 'current');
		$( "#s4" ).addClass( 'current');

		$( "#ss1,#ss2,#ss3,#ss5" ).addClass( 'pending');
		$( "#ss1,#ss2,#ss3,#ss5" ).removeClass( 'current');
		$( "#ss4" ).addClass( 'current');


		// $( "#previous" ).addClass( 'd-inline-block');
		$( "#previous" ).removeClass( 'd-inline-block');
		$( "#continue" ).removeClass( 'd-inline-block');
		$( "#continue" ).addClass( 'd-none');
		$( "#submit" ).addClass( 'd-inline-block');
	}
	if (current_page==5) {
 		$( "#s1,#s2,#s3,#s4" ).addClass( 'pending');
		$( "#s1,#s2,#s3,#s4" ).removeClass( 'current');
		$( "#s5" ).addClass( 'current');

		$( "#ss1,#ss2,#ss3,#ss4" ).addClass( 'pending');
		$( "#ss1,#ss2,#ss3,#ss4" ).removeClass( 'current');
		$( "#ss5" ).addClass( 'current');

		

 		 
		
	}
	// $("#account_type").val(data_account_type);


	

});

});

</script>