				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<!--begin::Logo-->
						<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
							<!--begin::Logo image-->
							<a href="../../demo1/dist/index.html">
								<img alt="Logo" src="assets/media/logos/default-dark.svg" class="h-25px app-sidebar-logo-default" />
								<img alt="Logo" src="assets/media/logos/default-small.svg" class="h-20px app-sidebar-logo-minimize" />
							</a>
							<!--end::Logo image-->
							<!--begin::Sidebar toggle-->
							<!--begin::Minimized sidebar setup:
								if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") {
									1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
									2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
									3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
									4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
								}
							-->
							<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
								<i class="ki-duotone ki-double-left fs-2 rotate-180">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
							<!--end::Sidebar toggle-->
						</div>
						<!--end::Logo-->
						<!--begin::sidebar menu-->
						<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
							<!--begin::Menu wrapper-->
							<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
								<!--begin::Menu-->
								<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-element-11 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">Dashboards</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/index.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Default</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/dashboards/ecommerce.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">eCommerce</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/dashboards/projects.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Projects</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/dashboards/online-courses.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Online Courses</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/dashboards/marketing.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Marketing</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_dashboards_collapse">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo1/dist/dashboards/bidding.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Bidding</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo1/dist/dashboards/pos.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">POS System</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo1/dist/dashboards/call-center.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Call Center</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo1/dist/dashboards/logistics.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Logistics</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo1/dist/dashboards/website-analytics.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Website Analytics</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo1/dist/dashboards/finance-performance.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Finance Performance</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo1/dist/dashboards/store-analytics.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Store Analytics</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo1/dist/dashboards/social.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Social</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo1/dist/dashboards/delivery.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Delivery</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo1/dist/dashboards/crypto.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Crypto</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo1/dist/dashboards/school.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">School</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo1/dist/dashboards/podcast.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Podcast</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../../demo1/dist/landing.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Landing</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<div class="menu-item">
												<div class="menu-content">
													<a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse" data-kt-toggle-text="Show Less">
														<span data-kt-toggle-text-target="true">Show 12 More</span>
														<i class="ki-duotone ki-minus-square toggle-on fs-2 me-0">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<i class="ki-duotone ki-plus-square toggle-off fs-2 me-0">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</a>
												</div>
											</div>
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item pt-5">
										<!--begin:Menu content-->
										<div class="menu-content">
											<span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
										</div>
										<!--end:Menu content-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-address-book fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
											<span class="menu-title">User Profile</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link active" href="../../demo1/dist/pages/user-profile/overview.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Overview</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/user-profile/projects.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Projects</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/user-profile/campaigns.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Campaigns</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/user-profile/documents.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Documents</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/user-profile/followers.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Followers</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/user-profile/activity.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Activity</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-element-plus fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
												</i>
											</span>
											<span class="menu-title">Account</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/overview.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Overview</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/settings.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Settings</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/security.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Security</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/activity.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Activity</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/billing.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Billing</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/statements.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Statements</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/referrals.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Referrals</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/api-keys.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">API Keys</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/logs.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Logs</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-user fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Authentication</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Corporate Layout</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/sign-in.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Sign-in</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/sign-up.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Sign-up</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/two-factor.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Two-Factor</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/reset-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Reset Password</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/new-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">New Password</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Overlay Layout</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/overlay/sign-in.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Sign-in</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/overlay/sign-up.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Sign-up</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/overlay/two-factor.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Two-Factor</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/overlay/reset-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Reset Password</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/overlay/new-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">New Password</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Creative Layout</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/creative/sign-in.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Sign-in</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/creative/sign-up.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Sign-up</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/creative/two-factor.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Two-Factor</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/creative/reset-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Reset Password</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/creative/new-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">New Password</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Fancy Layout</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/fancy/sign-in.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Sign-in</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/fancy/sign-up.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Sign-up</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/fancy/two-factor.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Two-Factor</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/fancy/reset-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Reset Password</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/layouts/fancy/new-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">New Password</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Email Templates</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/email/welcome-message.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Welcome Message</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/email/reset-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Reset Password</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/email/subscription-confirmed.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Subscription Confirmed</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/email/card-declined.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Credit Card Declined</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/email/promo-1.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Promo 1</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/email/promo-2.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Promo 2</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/email/promo-3.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Promo 3</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/authentication/extended/multi-steps-sign-up.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Multi-steps Sign-up</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/authentication/general/welcome.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Welcome Message</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/authentication/general/verify-email.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Verify Email</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/authentication/general/coming-soon.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Coming Soon</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/authentication/general/password-confirmation.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Password Confirmation</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/authentication/general/account-deactivated.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Account Deactivation</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/authentication/general/error-404.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Error 404</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/authentication/general/error-500.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Error 500</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-file fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Corporate</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/about.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">About</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/team.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Our Team</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/contact.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Contact Us</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/licenses.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Licenses</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/sitemap.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Sitemap</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-abstract-39 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Social</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/social/feeds.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Feeds</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/social/activity.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Activty</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/social/followers.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Followers</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/social/settings.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Settings</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-bank fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Blog</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion menu-active-bg">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/blog/home.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Blog Home</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/blog/post.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Blog Post</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-chart-pie-3 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
											<span class="menu-title">FAQ</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion menu-active-bg">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/faq/classic.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">FAQ Classic</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/faq/extended.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">FAQ Extended</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-bucket fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">Pricing</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion menu-active-bg">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/pricing/column.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Column Pricing</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/pricing/table.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Table Pricing</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-call fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
													<span class="path6"></span>
													<span class="path7"></span>
													<span class="path8"></span>
												</i>
											</span>
											<span class="menu-title">Careers</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/careers/list.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Careers List</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/careers/apply.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Careers Apply</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-color-swatch fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
													<span class="path6"></span>
													<span class="path7"></span>
													<span class="path8"></span>
													<span class="path9"></span>
													<span class="path10"></span>
													<span class="path11"></span>
													<span class="path12"></span>
													<span class="path13"></span>
													<span class="path14"></span>
													<span class="path15"></span>
													<span class="path16"></span>
													<span class="path17"></span>
													<span class="path18"></span>
													<span class="path19"></span>
													<span class="path20"></span>
													<span class="path21"></span>
												</i>
											</span>
											<span class="menu-title">Utilities</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Modals</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">General</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/general/invite-friends.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Invite Friends</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/general/view-users.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">View Users</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/general/select-users.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Select Users</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/general/upgrade-plan.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Upgrade Plan</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/general/share-earn.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Share & Earn</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Forms</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/forms/new-target.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Target</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/forms/new-card.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Card</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/forms/new-address.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Address</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/forms/create-api-key.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create API Key</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/forms/bidding.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Bidding</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Wizards</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-app.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create App</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-campaign.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create Campaign</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-account.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create Business Acc</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-project.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create Project</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Top Up Wallet</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/offer-a-deal.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Offer a Deal</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/two-factor-authentication.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Two Factor Auth</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Search</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/search/users.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Users</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/search/select-location.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Select Location</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Search</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/search/horizontal.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Horizontal</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/search/vertical.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Vertical</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/search/users.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Users</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/search/select-location.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Location</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Wizards</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/wizards/horizontal.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Horizontal</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/wizards/vertical.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Vertical</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/wizards/two-factor-authentication.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Two Factor Auth</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/wizards/create-app.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create App</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/wizards/create-campaign.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create Campaign</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/wizards/create-account.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create Account</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/wizards/create-project.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create Project</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Top Up Wallet</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/wizards/offer-a-deal.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Offer a Deal</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-element-7 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Widgets</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/widgets/lists.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Lists</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/widgets/statistics.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Statistics</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/widgets/charts.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Charts</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/widgets/mixed.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Mixed</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/widgets/tables.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Tables</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/widgets/feeds.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Feeds</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item pt-5">
										<!--begin:Menu content-->
										<div class="menu-content">
											<span class="menu-heading fw-bold text-uppercase fs-7">Apps</span>
										</div>
										<!--end:Menu content-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-abstract-41 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Projects</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/projects/list.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">My Projects</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/projects/project.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">View Project</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/projects/targets.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Targets</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/projects/budget.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Budget</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/projects/users.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Users</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/projects/files.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Files</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/projects/activity.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Activity</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/projects/settings.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Settings</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-basket fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">eCommerce</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Catalog</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/products.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Products</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/categories.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Categories</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/add-product.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Add Product</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Edit Product</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/add-category.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Add Category</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Edit Category</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Sales</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/listing.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Orders Listing</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/details.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Order Details</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/add-order.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Add Order</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/edit-order.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Edit Order</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Customers</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/customers/listing.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Customer Listing</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/customers/details.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Customer Details</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Reports</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Products Viewed</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/sales.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Sales</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/returns.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Returns</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/customer-orders.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Customer Orders</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/shipping.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Shipping</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/ecommerce/settings.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Settings</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-abstract-25 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Contacts</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/contacts/getting-started.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Getting Started</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/contacts/add-contact.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Add Contact</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/contacts/edit-contact.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Edit Contact</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/contacts/view-contact.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">View Contact</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-chart fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Support Center</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/support-center/overview.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Overview</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Tickets</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/support-center/tickets/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Tickets List</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/support-center/tickets/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">View Ticket</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Tutorials</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/support-center/tutorials/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Tutorials List</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/support-center/tutorials/post.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Tutorial Post</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/support-center/faq.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">FAQ</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/support-center/licenses.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Licenses</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/support-center/contact.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Contact Us</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-abstract-28 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">User Management</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Users</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/user-management/users/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Users List</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/user-management/users/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">View User</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Roles</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/user-management/roles/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Roles List</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/user-management/roles/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">View Role</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/user-management/permissions.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Permissions</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-abstract-38 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Customers</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/customers/getting-started.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Getting Started</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/customers/list.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Customer Listing</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/customers/view.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Customer Details</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-map fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
											<span class="menu-title">Subscription</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/subscriptions/getting-started.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Getting Started</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/subscriptions/list.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Subscription List</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/subscriptions/add.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Add Subscription</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/subscriptions/view.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">View Subscription</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-credit-cart fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Invoice Manager</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">View Invoices</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/invoices/view/invoice-1.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Invoice 1</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/invoices/view/invoice-2.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Invoice 2</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/invoices/view/invoice-3.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Invoice 3</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/invoices/create.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Create Invoice</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-switch fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">File Manager</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/file-manager/folders.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Folders</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/file-manager/files.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Files</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/file-manager/blank.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Blank Directory</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/file-manager/settings.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Settings</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-sms fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Inbox</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/inbox/listing.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Messages</span>
													<span class="menu-badge">
														<span class="badge badge-success">3</span>
													</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/inbox/compose.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Compose</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/inbox/reply.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">View & Reply</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-message-text-2 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
											<span class="menu-title">Chat</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/chat/private.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Private Chat</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/chat/group.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Group Chat</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/chat/drawer.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Drawer Chat</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link" href="../../demo1/dist/apps/calendar.html">
											<span class="menu-icon">
												<i class="ki-duotone ki-calendar-8 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
													<span class="path6"></span>
												</i>
											</span>
											<span class="menu-title">Calendar</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item pt-5">
										<!--begin:Menu content-->
										<div class="menu-content">
											<span class="menu-heading fw-bold text-uppercase fs-7">Layouts</span>
										</div>
										<!--end:Menu content-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-element-7 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Layout Options</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/layouts/light-sidebar.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Light Sidebar</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/layouts/dark-sidebar.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Dark Sidebar</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/layouts/light-header.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Light Header</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/layouts/dark-header.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Dark Header</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-text-align-center fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">Toolbars</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/toolbars/classic.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Classic</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/toolbars/saas.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">SaaS</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/toolbars/accounting.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Accounting</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/toolbars/extended.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Extended</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/toolbars/reports.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Reports</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html">
											<span class="menu-icon">
												<i class="ki-duotone ki-abstract-13 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Layout Builder</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item pt-5">
										<!--begin:Menu content-->
										<div class="menu-content">
											<span class="menu-heading fw-bold text-uppercase fs-7">Help</span>
										</div>
										<!--end:Menu content-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank">
											<span class="menu-icon">
												<i class="ki-duotone ki-rocket fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Components</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank">
											<span class="menu-icon">
												<i class="ki-duotone ki-abstract-26 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Documentation</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank">
											<span class="menu-icon">
												<i class="ki-duotone ki-code fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">Changelog v8.1.8</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Menu wrapper-->
						</div>
						<!--end::sidebar menu-->
						<!--begin::Footer-->
						<div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
							<a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
								<span class="btn-label">Docs & Components</span>
								<i class="ki-duotone ki-document btn-icon fs-2 m-0">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</a>
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Sidebar-->
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Overview</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">User Profile</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">
										<!--begin::Filter menu-->
										<div class="m-0">
											<!--begin::Menu toggle-->
											<a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<i class="ki-duotone ki-filter fs-6 text-muted me-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>Filter</a>
											<!--end::Menu toggle-->
											<!--begin::Menu 1-->
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641d50ee24ced">
												<!--begin::Header-->
												<div class="px-7 py-5">
													<div class="fs-5 text-dark fw-bold">Filter Options</div>
												</div>
												<!--end::Header-->
												<!--begin::Menu separator-->
												<div class="separator border-gray-200"></div>
												<!--end::Menu separator-->
												<!--begin::Form-->
												<div class="px-7 py-5">
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Status:</label>
														<!--end::Label-->
														<!--begin::Input-->
														<div>
															<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_641d50ee24ced" data-allow-clear="true">
																<option></option>
																<option value="1">Approved</option>
																<option value="2">Pending</option>
																<option value="2">In Process</option>
																<option value="2">Rejected</option>
															</select>
														</div>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Member Type:</label>
														<!--end::Label-->
														<!--begin::Options-->
														<div class="d-flex">
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																<input class="form-check-input" type="checkbox" value="1" />
																<span class="form-check-label">Author</span>
															</label>
															<!--end::Options-->
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																<span class="form-check-label">Customer</span>
															</label>
															<!--end::Options-->
														</div>
														<!--end::Options-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Notifications:</label>
														<!--end::Label-->
														<!--begin::Switch-->
														<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
															<label class="form-check-label">Enabled</label>
														</div>
														<!--end::Switch-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="d-flex justify-content-end">
														<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
														<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Form-->
											</div>
											<!--end::Menu 1-->
										</div>
										<!--end::Filter menu-->
										<!--begin::Secondary button-->
										<!--end::Secondary button-->
										<!--begin::Primary button-->
										<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
										<!--end::Primary button-->
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Navbar-->
									<div class="card mb-5 mb-xxl-8">
										<div class="card-body pt-9 pb-0">
											<!--begin::Details-->
											<div class="d-flex flex-wrap flex-sm-nowrap">
												<!--begin: Pic-->
												<div class="me-7 mb-4">
													<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
														<img src="assets/media/avatars/300-1.jpg" alt="image" />
														<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
													</div>
												</div>
												<!--end::Pic-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<!--begin::Title-->
													<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
														<!--begin::User-->
														<div class="d-flex flex-column">
															<!--begin::Name-->
															<div class="d-flex align-items-center mb-2">
																<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Max Smith</a>
																<a href="#">
																	<i class="ki-duotone ki-verify fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</a>
															</div>
															<!--end::Name-->
															<!--begin::Info-->
															<div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
																<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
																<i class="ki-duotone ki-profile-circle fs-4 me-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>Developer</a>
																<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
																<i class="ki-duotone ki-geolocation fs-4 me-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>SF, Bay Area</a>
																<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
																<i class="ki-duotone ki-sms fs-4 me-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>max@kt.com</a>
															</div>
															<!--end::Info-->
														</div>
														<!--end::User-->
														<!--begin::Actions-->
														<div class="d-flex my-4">
															<a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
																<i class="ki-duotone ki-check fs-3 d-none"></i>
																<!--begin::Indicator label-->
																<span class="indicator-label">Follow</span>
																<!--end::Indicator label-->
																<!--begin::Indicator progress-->
																<span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																<!--end::Indicator progress-->
															</a>
															<a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>
															<!--begin::Menu-->
															<div class="me-0">
																<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																	<i class="ki-solid ki-dots-horizontal fs-2x me-1"></i>
																</button>
																<!--begin::Menu 3-->
																<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
																	<!--begin::Heading-->
																	<div class="menu-item px-3">
																		<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
																	</div>
																	<!--end::Heading-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Create Invoice</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link flex-stack px-3">Create Payment
																		<span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																			<i class="ki-duotone ki-information fs-6">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span></a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Generate Bill</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
																		<a href="#" class="menu-link px-3">
																			<span class="menu-title">Subscription</span>
																			<span class="menu-arrow"></span>
																		</a>
																		<!--begin::Menu sub-->
																		<div class="menu-sub menu-sub-dropdown w-175px py-4">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3">Plans</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3">Billing</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3">Statements</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu separator-->
																			<div class="separator my-2"></div>
																			<!--end::Menu separator-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<div class="menu-content px-3">
																					<!--begin::Switch-->
																					<label class="form-check form-switch form-check-custom form-check-solid">
																						<!--begin::Input-->
																						<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																						<!--end::Input-->
																						<!--end::Label-->
																						<span class="form-check-label text-muted fs-6">Recuring</span>
																						<!--end::Label-->
																					</label>
																					<!--end::Switch-->
																				</div>
																			</div>
																			<!--end::Menu item-->
																		</div>
																		<!--end::Menu sub-->
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3 my-1">
																		<a href="#" class="menu-link px-3">Settings</a>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu 3-->
															</div>
															<!--end::Menu-->
														</div>
														<!--end::Actions-->
													</div>
													<!--end::Title-->
													<!--begin::Stats-->
													<div class="d-flex flex-wrap flex-stack">
														<!--begin::Wrapper-->
														<div class="d-flex flex-column flex-grow-1 pe-8">
															<!--begin::Stats-->
															<div class="d-flex flex-wrap">
																<!--begin::Stat-->
																<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																	<!--begin::Number-->
																	<div class="d-flex align-items-center">
																		<i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																		<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
																	</div>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="fw-semibold fs-6 text-gray-400">Earnings</div>
																	<!--end::Label-->
																</div>
																<!--end::Stat-->
																<!--begin::Stat-->
																<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																	<!--begin::Number-->
																	<div class="d-flex align-items-center">
																		<i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																		<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="80">0</div>
																	</div>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="fw-semibold fs-6 text-gray-400">Projects</div>
																	<!--end::Label-->
																</div>
																<!--end::Stat-->
																<!--begin::Stat-->
																<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																	<!--begin::Number-->
																	<div class="d-flex align-items-center">
																		<i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																		<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
																	</div>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="fw-semibold fs-6 text-gray-400">Success Rate</div>
																	<!--end::Label-->
																</div>
																<!--end::Stat-->
															</div>
															<!--end::Stats-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Progress-->
														<div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
															<div class="d-flex justify-content-between w-100 mt-auto mb-2">
																<span class="fw-semibold fs-6 text-gray-400">Profile Compleation</span>
																<span class="fw-bold fs-6">50%</span>
															</div>
															<div class="h-5px mx-3 w-100 bg-light mb-3">
																<div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<!--end::Progress-->
													</div>
													<!--end::Stats-->
												</div>
												<!--end::Info-->
											</div>
											<!--end::Details-->
											<!--begin::Navs-->
											<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="../../demo1/dist/pages/user-profile/overview.html">Overview</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo1/dist/pages/user-profile/projects.html">Projects</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo1/dist/pages/user-profile/campaigns.html">Campaigns</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo1/dist/pages/user-profile/documents.html">Documents</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo1/dist/pages/user-profile/followers.html">Followers</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo1/dist/pages/user-profile/activity.html">Activity</a>
												</li>
												<!--end::Nav item-->
											</ul>
											<!--begin::Navs-->
										</div>
									</div>
									<!--end::Navbar-->
									<!--begin::Row-->
									<div class="row g-5 g-xxl-8">
										<!--begin::Col-->
										<div class="col-xl-6">
											<!--begin::Feeds Widget 1-->
											<div class="card mb-5 mb-xxl-8">
												<!--begin::Body-->
												<div class="card-body pb-0">
													<!--begin::Header-->
													<div class="d-flex align-items-center">
														<!--begin::User-->
														<div class="d-flex align-items-center flex-grow-1">
															<!--begin::Avatar-->
															<div class="symbol symbol-45px me-5">
																<img src="assets/media/avatars/300-6.jpg" alt="" />
															</div>
															<!--end::Avatar-->
															<!--begin::Info-->
															<div class="d-flex flex-column">
																<a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Grace Green</a>
																<span class="text-gray-400 fw-bold">PHP, SQLite, Artisan CLI</span>
															</div>
															<!--end::Info-->
														</div>
														<!--end::User-->
														<!--begin::Menu-->
														<div class="my-0">
															<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<i class="ki-duotone ki-category fs-6">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</button>
															<!--begin::Menu 2-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
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
																	<a href="#" class="menu-link px-3">New Customer</a>
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
													<!--end::Header-->
													<!--begin::Form-->
													<form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
														<!--begin::Editor-->
														<div id="kt_forms_widget_1_editor" class="py-6"></div>
														<!--end::Editor-->
														<div class="separator"></div>
														<!--begin::Toolbar-->
														<div id="kt_forms_widget_1_editor_toolbar" class="ql-toolbar d-flex flex-stack py-2">
															<div class="me-2">
																<span class="ql-formats ql-size ms-0">
																	<select class="ql-size w-75px"></select>
																</span>
																<span class="ql-formats">
																	<button class="ql-bold"></button>
																	<button class="ql-italic"></button>
																	<button class="ql-underline"></button>
																	<button class="ql-strike"></button>
																	<button class="ql-image"></button>
																	<button class="ql-link"></button>
																	<button class="ql-clean"></button>
																</span>
															</div>
															<div class="me-n3">
																<span class="btn btn-icon btn-sm btn-active-color-primary">
																	<i class="ki-duotone ki-paper-clip fs-2"></i>
																</span>
																<span class="btn btn-icon btn-sm btn-active-color-primary">
																	<i class="ki-duotone ki-geolocation fs-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</div>
														</div>
														<!--end::Toolbar-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Feeds Widget 1-->
											<!--begin::Feeds Widget 2-->
											<div class="card mb-5 mb-xxl-8">
												<!--begin::Body-->
												<div class="card-body pb-0">
													<!--begin::Header-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::User-->
														<div class="d-flex align-items-center flex-grow-1">
															<!--begin::Avatar-->
															<div class="symbol symbol-45px me-5">
																<img src="assets/media/avatars/300-23.jpg" alt="" />
															</div>
															<!--end::Avatar-->
															<!--begin::Info-->
															<div class="d-flex flex-column">
																<a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Nick Logan</a>
																<span class="text-gray-400 fw-bold">PHP, SQLite, Artisan CLI</span>
															</div>
															<!--end::Info-->
														</div>
														<!--end::User-->
														<!--begin::Menu-->
														<div class="my-0">
															<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<i class="ki-duotone ki-category fs-6">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</button>
															<!--begin::Menu 2-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
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
																	<a href="#" class="menu-link px-3">New Customer</a>
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
													<!--end::Header-->
													<!--begin::Post-->
													<div class="mb-5">
														<!--begin::Text-->
														<p class="text-gray-800 fw-normal mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</p>
														<!--end::Text-->
														<!--begin::Toolbar-->
														<div class="d-flex align-items-center mb-5">
															<a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
															<i class="ki-duotone ki-message-text-2 fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>120</a>
															<a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
															<i class="ki-duotone ki-heart fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>15</a>
														</div>
														<!--end::Toolbar-->
													</div>
													<!--end::Post-->
													<!--begin::Separator-->
													<div class="separator mb-4"></div>
													<!--end::Separator-->
													<!--begin::Reply input-->
													<form class="position-relative mb-6">
														<textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
														<div class="position-absolute top-0 end-0 me-n5">
															<span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
																<i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
															</span>
															<span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
																<i class="ki-duotone ki-geolocation fs-2 mb-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</div>
													</form>
													<!--edit::Reply input-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Feeds Widget 2-->
											<!--begin::Feeds Widget 3-->
											<div class="card mb-5 mb-xxl-8">
												<!--begin::Body-->
												<div class="card-body pb-0">
													<!--begin::Header-->
													<div class="d-flex align-items-center mb-3">
														<!--begin::User-->
														<div class="d-flex align-items-center flex-grow-1">
															<!--begin::Avatar-->
															<div class="symbol symbol-45px me-5">
																<img src="assets/media/avatars/300-21.jpg" alt="" />
															</div>
															<!--end::Avatar-->
															<!--begin::Info-->
															<div class="d-flex flex-column">
																<a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Carles Nilson</a>
																<span class="text-gray-400 fw-bold">Yestarday at 5:06 PM</span>
															</div>
															<!--end::Info-->
														</div>
														<!--end::User-->
														<!--begin::Menu-->
														<div class="my-0">
															<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<i class="ki-duotone ki-category fs-6">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</button>
															<!--begin::Menu 2-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
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
																	<a href="#" class="menu-link px-3">New Customer</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																	<!---begin::Menu item-->
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
													<!--end::Header-->
													<!--begin::Post-->
													<div class="mb-7">
														<!--begin::Text-->
														<div class="text-gray-800 mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</div>
														<!--end::Text-->
														<!--begin::Toolbar-->
														<div class="d-flex align-items-center mb-5">
															<a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
															<i class="ki-duotone ki-message-text-2 fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>12</a>
															<a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
															<i class="ki-duotone ki-heart fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>150</a>
														</div>
														<!--end::Toolbar-->
													</div>
													<!--end::Post-->
													<!--begin::Replies-->
													<div class="mb-7">
														<!--begin::Reply-->
														<div class="d-flex mb-5">
															<!--begin::Avatar-->
															<div class="symbol symbol-45px me-5">
																<img src="assets/media/avatars/300-14.jpg" alt="" />
															</div>
															<!--end::Avatar-->
															<!--begin::Info-->
															<div class="d-flex flex-column flex-row-fluid">
																<!--begin::Info-->
																<div class="d-flex align-items-center flex-wrap mb-1">
																	<a href="#" class="text-gray-800 text-hover-primary fw-bold me-2">Alice Danchik</a>
																	<span class="text-gray-400 fw-semibold fs-7">1 day</span>
																	<a href="#" class="ms-auto text-gray-400 text-hover-primary fw-semibold fs-7">Reply</a>
																</div>
																<!--end::Info-->
																<!--begin::Post-->
																<span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper you need to make sure you have to sit down and write.</span>
																<!--end::Post-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Reply-->
														<!--begin::Reply-->
														<div class="d-flex">
															<!--begin::Avatar-->
															<div class="symbol symbol-45px me-5">
																<img src="assets/media/avatars/300-9.jpg" alt="" />
															</div>
															<!--end::Avatar-->
															<!--begin::Info-->
															<div class="d-flex flex-column flex-row-fluid">
																<!--begin::Info-->
																<div class="d-flex align-items-center flex-wrap mb-1">
																	<a href="#" class="text-gray-800 text-hover-primary fw-bold me-2">Harris Bold</a>
																	<span class="text-gray-400 fw-semibold fs-7">2 days</span>
																	<a href="#" class="ms-auto text-gray-400 text-hover-primary fw-semibold fs-7">Reply</a>
																</div>
																<!--end::Info-->
																<!--begin::Post-->
																<span class="text-gray-800 fs-7 fw-normal pt-1">Outlines keep you honest. They stop you from indulging in poorly</span>
																<!--end::Post-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Reply-->
													</div>
													<!--end::Replies-->
													<!--begin::Separator-->
													<div class="separator mb-4"></div>
													<!--end::Separator-->
													<!--begin::Reply input-->
													<form class="position-relative mb-6">
														<textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
														<div class="position-absolute top-0 end-0 me-n5">
															<span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
																<i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
															</span>
															<span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
																<i class="ki-duotone ki-geolocation fs-2 mb-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</div>
													</form>
													<!--edit::Reply input-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Feeds Widget 3-->
											<!--begin::Feeds Widget 4-->
											<div class="card mb-5 mb-xxl-8">
												<!--begin::Body-->
												<div class="card-body pb-0">
													<!--begin::Header-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::User-->
														<div class="d-flex align-items-center flex-grow-1">
															<!--begin::Avatar-->
															<div class="symbol symbol-45px me-5">
																<img src="assets/media/avatars/300-7.jpg" alt="" />
															</div>
															<!--end::Avatar-->
															<!--begin::Info-->
															<div class="d-flex flex-column">
																<a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Carles Nilson</a>
																<span class="text-gray-400 fw-bold">Last week at 10:00 PM</span>
															</div>
															<!--end::Info-->
														</div>
														<!--end::User-->
														<!--begin::Menu-->
														<div class="my-0">
															<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<i class="ki-duotone ki-category fs-6">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</button>
															<!--begin::Menu 3-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
																<!--begin::Heading-->
																<div class="menu-item px-3">
																	<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
																</div>
																<!--end::Heading-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Create Invoice</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link flex-stack px-3">Create Payment
																	<span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																		<i class="ki-duotone ki-information fs-6">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</span></a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Generate Bill</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
																	<a href="#" class="menu-link px-3">
																		<span class="menu-title">Subscription</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Plans</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Billing</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Statements</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu separator-->
																		<div class="separator my-2"></div>
																		<!--end::Menu separator-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<div class="menu-content px-3">
																				<!--begin::Switch-->
																				<label class="form-check form-switch form-check-custom form-check-solid">
																					<!--begin::Input-->
																					<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																					<!--end::Input-->
																					<!--end::Label-->
																					<span class="form-check-label text-muted fs-6">Recuring</span>
																					<!--end::Label-->
																				</label>
																				<!--end::Switch-->
																			</div>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3 my-1">
																	<a href="#" class="menu-link px-3">Settings</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 3-->
														</div>
														<!--end::Menu-->
													</div>
													<!--end::Header-->
													<!--begin::Post-->
													<div class="mb-7">
														<!--begin::Text-->
														<div class="text-gray-800 mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</div>
														<!--end::Text-->
														<!--begin::Toolbar-->
														<div class="d-flex align-items-center mb-5">
															<a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
															<i class="ki-duotone ki-message-text-2 fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>22</a>
															<a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
															<i class="ki-duotone ki-heart fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>59</a>
														</div>
														<!--end::Toolbar-->
													</div>
													<!--end::Post-->
													<!--begin::Separator-->
													<div class="separator mb-4"></div>
													<!--end::Separator-->
													<!--begin::Reply input-->
													<form class="position-relative mb-6">
														<textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
														<div class="position-absolute top-0 end-0 me-n5">
															<span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
																<i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
															</span>
															<span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
																<i class="ki-duotone ki-geolocation fs-2 mb-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</div>
													</form>
													<!--edit::Reply input-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Feeds Widget 4-->
											<!--begin::Feeds widget 5-->
											<div class="card d-none" id="kt_widget_5">
												<!--begin::Body-->
												<div class="card-body pb-0">
													<!--begin::Header-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::User-->
														<div class="d-flex align-items-center flex-grow-1">
															<!--begin::Avatar-->
															<div class="symbol symbol-45px me-5">
																<img src="assets/media/avatars/300-7.jpg" alt="" />
															</div>
															<!--end::Avatar-->
															<!--begin::Info-->
															<div class="d-flex flex-column">
																<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Carles Nilson</a>
																<span class="text-gray-400 fw-bold">Last week at 10:00 PM</span>
															</div>
															<!--end::Info-->
														</div>
														<!--end::User-->
														<!--begin::Menu-->
														<div class="my-0">
															<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<i class="ki-duotone ki-category fs-6">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</button>
															<!--begin::Menu 2-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
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
																	<a href="#" class="menu-link px-3">New Customer</a>
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
													<!--end::Header-->
													<!--begin::Post-->
													<div class="mb-7">
														<!--begin::Image-->
														<div class="bgi-no-repeat bgi-size-cover rounded min-h-250px mb-5" style="background-image:url('assets/media/stock/900x600/19.jpg');"></div>
														<!--end::Image-->
														<!--begin::Text-->
														<div class="text-gray-800 mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</div>
														<!--end::Text-->
														<!--begin::Toolbar-->
														<div class="d-flex align-items-center mb-5">
															<a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
															<i class="ki-duotone ki-message-text-2 fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>20</a>
															<a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
															<i class="ki-duotone ki-heart fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>50</a>
														</div>
														<!--end::Toolbar-->
													</div>
													<!--end::Post-->
													<!--begin::Separator-->
													<div class="separator mb-4"></div>
													<!--end::Separator-->
													<!--begin::Reply input-->
													<form class="position-relative mb-6">
														<textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
														<div class="position-absolute top-0 end-0 me-n5">
															<span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
																<i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
															</span>
															<span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
																<i class="ki-duotone ki-geolocation fs-2 mb-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</div>
													</form>
													<!--edit::Reply input-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Feeds widget 5-->
											<!--begin::Feeds widget 4, 5 load more-->
											<button class="btn btn-primary w-100 text-center" id="kt_widget_5_load_more_btn">
												<span class="indicator-label">More Feeds</span>
												<span class="indicator-progress">Loading...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
											<!--end::Feeds widget 4, 5 load more-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-6">
											<!--begin::Charts Widget 1-->
											<div class="card mb-5 mb-xxl-8">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold fs-3 mb-1">Recent Statistics</span>
														<span class="text-muted fw-semibold fs-7">More than 400 new members</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Menu-->
														<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<i class="ki-duotone ki-category fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</button>
														<!--begin::Menu 1-->
														<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641d50ee2cab3">
															<!--begin::Header-->
															<div class="px-7 py-5">
																<div class="fs-5 text-dark fw-bold">Filter Options</div>
															</div>
															<!--end::Header-->
															<!--begin::Menu separator-->
															<div class="separator border-gray-200"></div>
															<!--end::Menu separator-->
															<!--begin::Form-->
															<div class="px-7 py-5">
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Status:</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<div>
																		<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_641d50ee2cab3" data-allow-clear="true">
																			<option></option>
																			<option value="1">Approved</option>
																			<option value="2">Pending</option>
																			<option value="2">In Process</option>
																			<option value="2">Rejected</option>
																		</select>
																	</div>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Member Type:</label>
																	<!--end::Label-->
																	<!--begin::Options-->
																	<div class="d-flex">
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																			<input class="form-check-input" type="checkbox" value="1" />
																			<span class="form-check-label">Author</span>
																		</label>
																		<!--end::Options-->
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																			<span class="form-check-label">Customer</span>
																		</label>
																		<!--end::Options-->
																	</div>
																	<!--end::Options-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Notifications:</label>
																	<!--end::Label-->
																	<!--begin::Switch-->
																	<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
																		<label class="form-check-label">Enabled</label>
																	</div>
																	<!--end::Switch-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="d-flex justify-content-end">
																	<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																	<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
																</div>
																<!--end::Actions-->
															</div>
															<!--end::Form-->
														</div>
														<!--end::Menu 1-->
														<!--end::Menu-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Chart-->
													<div id="kt_charts_widget_1_chart" style="height: 350px"></div>
													<!--end::Chart-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Charts Widget 1-->
											<!--begin::List Widget 5-->
											<div class="card mb-5 mb-xxl-8">
												<!--begin::Header-->
												<div class="card-header align-items-center border-0 mt-4">
													<h3 class="card-title align-items-start flex-column">
														<span class="fw-bold mb-2 text-dark">Activities</span>
														<span class="text-muted fw-semibold fs-7">890,344 Sales</span>
													</h3>
													<div class="card-toolbar">
														<!--begin::Menu-->
														<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<i class="ki-duotone ki-category fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</button>
														<!--begin::Menu 1-->
														<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641d50ee2da74">
															<!--begin::Header-->
															<div class="px-7 py-5">
																<div class="fs-5 text-dark fw-bold">Filter Options</div>
															</div>
															<!--end::Header-->
															<!--begin::Menu separator-->
															<div class="separator border-gray-200"></div>
															<!--end::Menu separator-->
															<!--begin::Form-->
															<div class="px-7 py-5">
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Status:</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<div>
																		<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_641d50ee2da74" data-allow-clear="true">
																			<option></option>
																			<option value="1">Approved</option>
																			<option value="2">Pending</option>
																			<option value="2">In Process</option>
																			<option value="2">Rejected</option>
																		</select>
																	</div>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Member Type:</label>
																	<!--end::Label-->
																	<!--begin::Options-->
																	<div class="d-flex">
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																			<input class="form-check-input" type="checkbox" value="1" />
																			<span class="form-check-label">Author</span>
																		</label>
																		<!--end::Options-->
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																			<span class="form-check-label">Customer</span>
																		</label>
																		<!--end::Options-->
																	</div>
																	<!--end::Options-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Notifications:</label>
																	<!--end::Label-->
																	<!--begin::Switch-->
																	<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
																		<label class="form-check-label">Enabled</label>
																	</div>
																	<!--end::Switch-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="d-flex justify-content-end">
																	<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																	<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
																</div>
																<!--end::Actions-->
															</div>
															<!--end::Form-->
														</div>
														<!--end::Menu 1-->
														<!--end::Menu-->
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-5">
													<!--begin::Timeline-->
													<div class="timeline-label">
														<!--begin::Item-->
														<div class="timeline-item">
															<!--begin::Label-->
															<div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-warning fs-1"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Text-->
															<div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And keep structure</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item">
															<!--begin::Label-->
															<div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-success fs-1"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Content-->
															<div class="timeline-content d-flex">
																<span class="fw-bold text-gray-800 ps-3">AEOL meeting</span>
															</div>
															<!--end::Content-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item">
															<!--begin::Label-->
															<div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-danger fs-1"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Desc-->
															<div class="timeline-content fw-bold text-gray-800 ps-3">Make deposit
															<a href="#" class="text-primary">USD 700</a>. to ESL</div>
															<!--end::Desc-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item">
															<!--begin::Label-->
															<div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-primary fs-1"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Text-->
															<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item">
															<!--begin::Label-->
															<div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-danger fs-1"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Desc-->
															<div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
															<a href="#" class="text-primary">#XF-2356</a>.</div>
															<!--end::Desc-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item">
															<!--begin::Label-->
															<div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-primary fs-1"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Text-->
															<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item">
															<!--begin::Label-->
															<div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-danger fs-1"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Desc-->
															<div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
															<a href="#" class="text-primary">#XF-2356</a>.</div>
															<!--end::Desc-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="timeline-item">
															<!--begin::Label-->
															<div class="timeline-label fw-bold text-gray-800 fs-6">10:30</div>
															<!--end::Label-->
															<!--begin::Badge-->
															<div class="timeline-badge">
																<i class="fa fa-genderless text-success fs-1"></i>
															</div>
															<!--end::Badge-->
															<!--begin::Text-->
															<div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch preparion meeting</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Timeline-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end: List Widget 5-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2023&copy;</span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>