<?php
include "./components/header.php";
?>

<!-- Header START -->
<div class="header-absolute">
	<!-- Header START -->
	<header class="header-sticky bg-transparent">
		<!-- Logo Nav START -->
		<nav class="navbar navbar-expand-xl">
			<div class="container">
				<!-- Logo START -->
				<a class="navbar-brand me-0" href="index.html">
					<img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
					<img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
				</a>
				<!-- Logo END -->

				<!-- Main navbar START -->
				<div class="navbar-collapse collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll dropdown-hover mx-auto">

					<!-- Nav item -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="#" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Demos</a>
						<div class="dropdown-menu dropdown-menu-size-lg overflow-hidden p-0">
							<div class="row px-3 py-4">
								<!-- Image and button -->
								<div class="col-sm-6">
									<ul class="list-unstyled">
										<li> <a class="dropdown-item" href="index.html">Classic Default</a> </li>
										<li> <a class="dropdown-item" href="index-software-company.html">Software Company</a> </li>
										<li> <a class="dropdown-item" href="index-finance-consulting.html">Finance Consulting</a> </li>
										<li> <a class="dropdown-item" href="index-ai-agency.html">AI Agency</a> </li>
										<li> <a class="dropdown-item" href="index-product-landing.html">Product Landing</a> </li>
									</ul>
								</div>

								<!-- Image and button -->
								<div class="col-sm-6">
									<ul class="list-unstyled">
										<li> <a class="dropdown-item" href="index-saas.html">SaaS</a> </li>
										<li> <a class="dropdown-item" href="index-ai-chatbot.html">SaaS AI Chatbot</a> </li>
										<li> <a class="dropdown-item active" href="index-application-showcase.html">Application Showcase</a> </li>
										<li> <a class="dropdown-item" href="index-personal-portfolio.html">Personal Portfolio</a> </li>
										<li> <a class="dropdown-item" href="index-blog.html">Blog home</a> </li>
									</ul>
								</div>
							</div>

							<!-- Cta -->
							 <div class="h-200px position-relative" style="background:url(assets/images/elements/nav-cta.jpg) no-repeat; background-size:cover; background-position:center;">
								<!-- Bg overlay -->
								 <div class="bg-overlay bg-dark bg-opacity-10"></div>
							 </div>
						</div>
					</li>

					<!-- Nav item -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu">
							<!-- Dropdown submenu -->
							<li class="dropdown dropend">
								<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">About</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="about-v1.html">About v.1</a> </li>
									<li> <a class="dropdown-item" href="about-v2.html">About v.2</a> </li>
									<li> <a class="dropdown-item" href="services-grid.html">Services Grid</a></li>
									<li> <a class="dropdown-item" href="services-list.html">Services List</a></li>
									<li> <a class="dropdown-item" href="service-single.html">Service Single</a></li>
									<li> <a class="dropdown-item" href="team.html">Team</a></li>
									<li> <a class="dropdown-item" href="career.html">Career <span class="badge text-bg-success ms-2">2 Job</span></a></li>
									<li> <a class="dropdown-item" href="career-single.html">Career Single</a></li>
								</ul>
							</li>

							<li> <a class="dropdown-item" href="contact-us-v1.html">Contact Us v1</a> </li>
							<li> <a class="dropdown-item" href="contact-us-v2.html">Contact Us v2</a> </li>
							<li> <a class="dropdown-item" href="pricing-v1.html">Pricing v1</a> </li>
							<li> <a class="dropdown-item" href="pricing-v2.html">Pricing v2</a> </li>

							<!-- Dropdown submenu -->
							<li class="dropdown dropend">
								<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Saas pages</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="feature-single.html">Feature Single</a> </li>
									<li> <a class="dropdown-item" href="integrations.html">Integrations</a> </li>
									<li> <a class="dropdown-item" href="integration-single.html">Integrations Single</a> </li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown dropend">
								<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Portfolio</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="portfolio-grid.html">Portfolio Grid</a> </li>
									<li> <a class="dropdown-item" href="portfolio-list.html">Portfolio List</a> </li>
									<li> <a class="dropdown-item" href="portfolio-modern.html">Portfolio Modern</a> </li>
									<li> <a class="dropdown-item" href="portfolio-case-study-v1.html">Portfolio case study v1</a> </li>
									<li> <a class="dropdown-item" href="portfolio-case-study-v2.html">Portfolio case study v2</a> </li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown dropend">
								<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Blog</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="blog-minimal.html">Blog Minimal</a> </li>
									<li> <a class="dropdown-item" href="blog-single.html">Blog Single</a> </li>
								</ul>
							</li>

							<li> <a class="dropdown-item" href="error-404.html">Error 404</a> </li>
							<li> <a class="dropdown-item" href="coming-soon.html">Coming soon</a> </li>

							<!-- Dropdown submenu -->
							<li class="dropdown dropend">
								<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Authentication</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="sign-in.html">Sign in</a> </li>
									<li> <a class="dropdown-item" href="sign-up.html">Sign up</a> </li>
									<li> <a class="dropdown-item" href="forgot-password.html">Forgot Password</a> </li>
								</ul>
							</li>
						</ul>
					</li>

					<!-- Nav item -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doc</a>
						<div class="dropdown-menu dropdown-menu-size-xl dropdown-menu-center p-xl-3">
							<div class="row row-cols-1 row-cols-md-2 pt-2">
								<!-- Doc menu -->
								<div class="col">
									<div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">
										<div class="d-flex">
											<!-- Icon -->
											<div class="icon-md bg-primary bg-opacity-15 text-primary rounded flex-shrink-0"><i class="bi bi-file-earmark-text fs-6"></i></div>
											<!-- Content -->
											<div class="mx-3">
												<p class="stretched-link heading-color fw-bold mb-0">Documentation</p>
												<p class="mb-0 text-body small">Using documentation you can easily develop projects</p>
											</div>
										</div>
										<!-- Button -->
										<a class="icon-link icon-link-hover text-primary-hover stretched-link" href="docs/index.html" target="_blank"><i class="bi bi-chevron-right"></i> </a>
									</div>
								</div>

								<!-- Doc menu -->
								<div class="col">
									<div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">
										<div class="d-flex">
											<!-- Icon -->
											<div class="icon-md bg-pink bg-opacity-15 text-pink rounded flex-shrink-0"><i class="bi bi-stickies fs-6"></i></div>
											<!-- Content -->
											<div class="mx-3">
												<p class="stretched-link heading-color fw-bold mb-0">Snippets</p>
												<p class="mb-0 text-body small">Development guides for building projects with Folio</p>
											</div>
										</div>
										<!-- Button -->
										<a class="icon-link icon-link-hover text-primary-hover stretched-link" href="docs/index.html" target="_blank"><i class="bi bi-chevron-right"></i> </a>
									</div>
								</div>

								<!-- Doc menu -->
								<div class="col">
									<div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">
										<div class="d-flex">
											<!-- Icon -->
											<div class="icon-md bg-success bg-opacity-15 text-success rounded flex-shrink-0"><i class="bi bi-bullseye fs-6"></i></div>
											<!-- Content -->
											<div class="mx-3">
												<p class="stretched-link heading-color fw-bold mb-0">Changelog</p>
												<p class="mb-0 text-body small">Recent feature release and announcement.</p>
											</div>
										</div>
										<!-- Button -->
										<a class="icon-link icon-link-hover text-primary-hover stretched-link" href="docs/changelog.html" target="_blank"><i class="bi bi-chevron-right"></i> </a>
									</div>
								</div>

								<!-- Doc menu -->
								<div class="col">
									<div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">
										<div class="d-flex">
											<!-- Icon -->
											<div class="icon-md bg-warning bg-opacity-15 text-warning rounded flex-shrink-0"><i class="bi bi-mask fs-6"></i></div>
											<!-- Content -->
											<div class="mx-3">
												<p class="stretched-link heading-color fw-bold mb-0">Playwright tips</p>
												<p class="mb-0 text-body small">Tips and In-depth guide for headless browser automation</p>
											</div>
										</div>
										<!-- Button -->
										<a class="icon-link icon-link-hover text-primary-hover stretched-link" href="#" target="_blank"><i class="bi bi-chevron-right"></i> </a>
									</div>
								</div>

								<!-- Doc menu -->
								<div class="col">
									<div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">
										<div class="d-flex">
											<!-- Icon -->
											<div class="icon-md bg-info bg-opacity-15 text-info rounded flex-shrink-0"><i class="bi bi-grid-fill fs-6"></i></div>
											<!-- Content -->
											<div class="mx-3">
												<p class="stretched-link heading-color fw-bold mb-0">Integrations</p>
												<p class="mb-0 text-body small">Taking advantage of integrations with other services.</p>
											</div>
										</div>
										<!-- Button -->
										<a class="icon-link icon-link-hover text-primary-hover stretched-link" href="integrations.html" target="_blank"><i class="bi bi-chevron-right"></i> </a>
									</div>
								</div>

								<!-- Doc menu -->
								<div class="col">
									<div class="dropdown-item bg-secondary-hover d-flex align-items-center justify-content-between position-relative text-wrap py-3">
										<div class="d-flex">
											<!-- Icon -->
											<div class="icon-md bg-purple bg-opacity-15 text-purple rounded flex-shrink-0"><i class="bi bi-chat-dots fs-6"></i></div>
											<!-- Content -->
											<div class="mx-3">
												<p class="stretched-link heading-color fw-bold mb-0">Supports</p>
												<p class="mb-0 text-body small">Need help? Our customers support is there to help you.</p>
											</div>
										</div>
										<!-- Button -->
										<a class="icon-link icon-link-hover text-primary-hover stretched-link" href="https://support.webestica.com" target="_blank"><i class="bi bi-chevron-right"></i> </a>
									</div>
								</div>
							</div>
						</div>
					</li>

					<!-- Nav item -->
					<li class="nav-item"> <a class="nav-link" href="contact-us-v1.html">Contact us</a> </li>
				</ul>
			</div>
				<!-- Main navbar END -->

				<!-- Buttons -->
				<ul class="nav align-items-center dropdown-hover ms-sm-2">
					<!-- Dark mode option START -->
					<li class="nav-item dropdown dropdown-animation">
						<button class="btn btn-link mb-0 px-2 lh-1" id="bd-theme"
						type="button"
						aria-expanded="false"
						data-bs-toggle="dropdown"
						data-bs-display="static">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  class="bi bi-circle-half theme-icon-active fill-mode fa-fw" viewBox="0 0 16 16">
							<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
							<use href="#"></use>
						</svg>
						</button>

						<ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
							<li class="mb-1">
								<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
									<svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
										<path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
										<use href="#"></use>
									</svg>Light
								</button>
							</li>
							<li class="mb-1">
								<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
										<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
										<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
										<use href="#"></use>
									</svg>Dark
								</button>
							</li>
							<li>
								<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
										<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
										<use href="#"></use>
									</svg>Auto
								</button>
							</li>
						</ul>
					</li>
					<!-- Dark mode option END -->

					<!-- Schedule button -->
					<li class="nav-item ms-2 d-none d-sm-block">
						<a href="#" class="btn btn-sm btn-dark mb-0"><i class="bi bi-cloud-download-fill me-2"></i>Download app</a>
					</li>
					<!-- Responsive navbar toggler -->
					<li class="nav-item">
						<button class="navbar-toggler ms-sm-3 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-animation">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</button>
					</li>	
				</ul>

			</div>
		</nav>
		<!-- Logo Nav END -->
	</header>
	<!-- Header END -->
</div> 
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Hero START -->
<section class="position-relative overflow-hidden pt-sm-8 pt-lg-9 pb-0">
	<!-- Curve bg -->
	<span>
		<svg class="position-absolute bottom-0 start-0 mb-n1 mb-lg-n4" viewBox="0 0 1920 149" style="enable-background:new 0 0 1920 149; z-index: 4" xml:space="preserve">
			<path class="text-secondary" d="M873.3,37.9C775,19.2,603.7-11.5,433.5,4.4C275.1,19.3,45.1,43.4-12,4.4v121V149l1946-2.6V97.6 c-109.9-35.9-230.6-93.1-468.8-75.4C1260.2,37.3,1089.7,79,873.3,37.9z" fill="currentColor"/>
		</svg>
	</span>

	<!-- Blur decoration -->
	<div class="position-absolute end-0 top-0">
		<img src="assets/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-2 blur-9 h-300px rotate-335" alt="Grad shape">
	</div>

	<div class="container position-relative pt-4 pt-sm-0 pb-8 pb-xl-9">
		<div class="row align-items-center">
			<!-- Content -->
			<div class="col-lg-6 mb-6 mb-lg-0">
				<h1 class="fw-bold mb-3 mb-md-4">Smart, Secure, and Simple Banking</h1>
				<p class="lead mb-3 mb-md-4">Experience seamless money transfers, hassle-free bill payments, and secure account management—all in one app.</p>

				<!-- Buttons -->
				<div class="d-sm-flex mb-4 mb-lg-7">
					<a href="#"> <img src="assets/images/elements/google-play.svg" class="btn-transition me-4 mb-2 mb-sm-0" width="180" alt="play store"> </a>
					<a href="#"> <img src="assets/images/elements/app-store.svg" class="btn-transition" width="180" alt="app-store"> </a>
				</div>

				<!-- Review deco -->
				<div class="d-flex align-items-center">
					<!-- Avatar list -->
					<ul class="avatar-group align-items-center justify-content-center mb-0 me-2">
						<li class="avatar avatar-sm">
							<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
						</li>
						<li class="avatar avatar-sm">
							<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
						</li>
						<li class="avatar avatar-sm">
							<img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg" alt="avatar">
						</li>
						<li class="avatar avatar-sm">
							<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
						</li>
						<li class="avatar avatar-sm">
							<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
						</li>
					</ul>

					<p class="heading-color mb-0"><span class="text-primary">5000+</span> users have downloaded our app</p>
				</div>
			</div>

			<!-- Image -->
			<div class="col-sm-9 col-lg-5 col-xxl-4 position-relative mx-auto">
				<!-- Decoration images -->
				<div class="position-absolute start-0 top-0 mt-6 ms-xl-n7 z-index-2 d-none d-sm-block">
					<img src="assets/images/mobile-app/deocration-2.jpg.png" class="aos rounded-3 shadow-primary" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="800" data-aos-easing="ease-in-out" style="height: 80px;" alt="deocration">
				</div>

				<div class="position-absolute top-50 end-0 translate-middle-y me-n6 me-xl-n8 mt-xl-n5 d-none d-sm-block">
					<img src="assets/images/mobile-app/deocration-3.jpg" class="aos rounded-3 shadow-primary" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="800" data-aos-easing="ease-in-out" alt="deocration">
				</div>

				<!-- Main image -->
				<img src="assets/images/mobile-app/hero.png" class="aos mb-n8 mb-md-n9 mb-xxl-n8" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-easing="ease-in-out" alt="mobile image">
			</div>

		</div>
	</div>
</section>
<!-- =======================
Hero END -->

<!-- =======================
Features and rating START -->
<section class="bg-secondary position-relative overflow-hidden z-index-2 pt-6">
	<div class="container">
		<!-- Title -->
		<div class="inner-container-small text-center mb-4 mb-md-6">
			<h2 class="mb-0">Discover the power of our online <span class="text-primary-grad">banking</span> app</h2>
		</div>

		<!-- Features and image -->
		<div class="row g-4 g-lg-5 align-items-lg-center">
			<!-- left side features -->
			<div class="col-md-6 col-lg-4 order-1 pe-5">
				<!-- Item -->
				<div class="aos d-flex justify-content-lg-end mb-4 mb-md-6" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<!-- Content -->
					<div class="text-lg-end order-1 ms-3 ms-lg-0 me-lg-3">
						<h6 class="mb-2">Instant money transfers</h6>
						<p class="mb-0">Transfer money to friends, family, or businesses quickly and securely.</p>
					</div>
					<!-- Icon -->
					<div class="icon-lg bg-body text-success rounded-circle flex-shrink-0 order-lg-2"><i class="bi bi-cash-stack fa-lg"></i></div>
				</div>

				<!-- Item -->
				<div class="aos d-flex justify-content-lg-end mb-4 mb-md-6" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<!-- Content -->
					<div class="text-lg-end order-1 ms-3 ms-lg-0 me-lg-3">
						<h6 class="mb-2">Easy bill payments</h6>
						<p class="mb-0">Pay utility bills, credit card bills, and more with just a few taps.</p>
					</div>
					<!-- Icon -->
					<div class="icon-lg bg-body text-purple rounded-circle flex-shrink-0 order-lg-2"><i class="bi bi-receipt fa-lg"></i></div>
				</div>

				<!-- Item -->
				<div class="aos d-flex justify-content-lg-end" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<!-- Content -->
					<div class="text-lg-end order-1 ms-3 ms-lg-0 me-lg-3">
						<h6 class="mb-2">Real-time notifications</h6>
						<p class="mb-0">Stay updated with real-time alerts for transactions and account activities.</p>
					</div>
					<!-- Icon -->
					<div class="icon-lg bg-body text-warning rounded-circle flex-shrink-0 order-lg-2"><i class="bi bi-bell fa-lg"></i></div>
				</div>
			</div>

			<!-- Image -->
			<div class="col-md-8 col-lg-4 mx-auto order-3 order-lg-2">
				<img src="assets/images/mobile-app/feature.png" class="aos" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out" alt="feature mobile">
			</div>

			<!-- Right side features -->
			<div class="col-md-6 col-lg-4 order-2 order-lg-3">
				<!-- Item -->
				<div class="aos d-flex mb-4 mb-md-6" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<!-- Icon -->
					<div class="icon-lg bg-body text-info rounded-circle flex-shrink-0"><i class="bi bi-person-vcard fa-lg"></i></div>
					<!-- Content -->
					<div class="ms-3">
						<h6 class="mb-2">Account management</h6>
						<p class="mb-0">Monitor your account balance, transaction history, and manage your finances efficiently.</p>
					</div>
				</div>

				<!-- Item -->
				<div class="aos d-flex mb-4 mb-md-6" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<!-- Icon -->
					<div class="icon-lg bg-body text-primary rounded-circle flex-shrink-0"><i class="bi bi-gear fa-lg"></i></div>
					<!-- Content -->
					<div class="ms-3">
						<h6 class="mb-2">Budgeting tools</h6>
						<p class="mb-0">Use built-in tools to set budgets, track spending, and save more effectively.</p>
					</div>
				</div>

				<!-- Item -->
				<div class="aos d-flex" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<!-- Icon -->
					<div class="icon-lg bg-body text-pink rounded-circle flex-shrink-0"><i class="bi bi-headset fa-lg"></i></div>
					<!-- Content -->
					<div class="ms-3">
						<h6 class="mb-2">24/7 customer support</h6>
						<p class="mb-0">Get help anytime with our dedicated customer support team, available around the clock.</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Ratings -->
		<div class="inner-container row g-4 mt-6 mt-md-8" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
			<!-- Rating number -->
			<div class="col-sm-6 col-md-4">
				<div class="text-center border-end pe-sm-5 h-100">
					<img src="assets/images/elements/review.svg" class="h-60px mb-4" alt="review image">
					<h4>4.5/5.0</h4>
					<p class="mb-0">Rating by 365 users</p>
				</div>
			</div>

			<!-- platform rating number -->
			<div class="col-sm-6 col-md-4">
				<div class="text-center border-end pe-sm-5 h-100">
					<div class="d-flex justify-content-center gap-2 mb-4">
						<img src="assets/images/elements/apple.svg" class="h-60px" alt="">
						<img src="assets/images/elements/play-store.svg" class="h-60px" alt="">
					</div>
					<h4>35K+</h4>
					<p class="mb-0">Review on google play and iOS</p>
				</div>
			</div>

			<!-- platform rating number -->
			<div class="col-md-4">
				<div class="text-center h-100">
					<span class="display-6 text-primary-grad"><i class="bi bi-people"></i></span>
					<h4>86M</h4>
					<p class="mb-0">Total members use this platform</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Features and rating END -->

<!-- =======================
Steps START -->
<section>
	<div class="container">
		<div class="row g-4 align-items-lg-center">
			<!-- Images -->
			<div class="col-md-6 col-xl-5 order-2 order-md-1">
				<div class="swiper" data-swiper-options='{
					"spaceBetween": 30,
					"effect": "fade",
					"autoplay":false,
					"simulateTouch":false,
					"navigation":{
						"nextEl":".swiper-button-next-steps",
						"prevEl":".swiper-button-prev-steps"
					}}'>
						
					<div class="swiper-wrapper">
						<!-- Testimonials item -->
						<div class="swiper-slide bg-body">
							<div class="bg-secondary-grad rounded-4 overflow-hidden p-5 h-100">
								<img src="assets/images/mobile-app/step-1.jpg" class="mb-n8 rounded-5 shadow-primary" alt="step image">
							</div>
						</div>

						<!-- Testimonials item -->
						<div class="swiper-slide bg-body">
							<div class="bg-secondary-grad rounded-4 overflow-hidden p-5 h-100">
								<img src="assets/images/mobile-app/step-2.jpg" class="mb-n8 rounded-5 shadow-primary" alt="step image">
							</div>
						</div>

						<!-- Testimonials item -->
						<div class="swiper-slide bg-body">
							<div class="bg-secondary-grad rounded-4 overflow-hidden p-5 h-100">
								<img src="assets/images/mobile-app/step-3.jpg" class="mb-n8 rounded-5 shadow-primary" alt="step image">
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Steps Content START -->
			<div class="col-md-6 order-1 ms-auto">		
				<!-- Slider START -->
				<div class="swiper" data-swiper-options='{
					"spaceBetween": 30,
					"autoplay":false,
					"simulateTouch":false,
					"navigation":{
						"nextEl":".swiper-button-next-steps",
						"prevEl":".swiper-button-prev-steps"
					}}'>
					
					<div class="swiper-wrapper mb-lg-5">
						<!-- Testimonials item -->
						<div class="swiper-slide">
							<span class="fw-semibold text-primary">Phase 1</span>
							<h2 class="my-3">Sign up and secure your account</h2>
							<p class="mb-0">Create an account using your email or phone number. Complete the straightforward verification process to ensure your account is protected. Follow the simple verification process to secure your account. This ensures a personalized and seamless banking experience.</p>
						</div>

						<!-- Testimonials item -->
						<div class="swiper-slide">
							<span class="fw-semibold text-primary">Phase 2</span>
							<h2 class="my-3">Enter your personal and financial getails</h2>
							<p class="mb-0">Provide the necessary information to set up your profile. This ensures a personalized and seamless banking experience tailored to your needs. This ensures a personalized and seamless banking experience.</p>
						</div>

						<!-- Testimonials item -->
						<div class="swiper-slide">
							<span class="fw-semibold text-primary">Phase 3</span>
							<h2 class="my-3">Explore the full range of banking features</h2>
							<p class="mb-0">Discover all the app’s functionalities, from instant money transfers to convenient bill payments, and start managing your finances with ease and efficiency. This ensures a personalized and seamless banking experience. Follow the simple verification process to secure your account.</p>
						</div>
					</div>
				</div>		
				<!-- Slider END -->
				 
				<!-- Slider arrow -->
				<div class="d-flex gap-3 position-relative mt-3">
					<a href="#" class="btn btn-lg btn-secondary btn-icon rounded-circle mb-0 swiper-button-prev-steps rtl-flip"><i class="bi bi-arrow-left"></i></a>
					<a href="#" class="btn btn-lg btn-secondary btn-icon rounded-circle mb-0 swiper-button-next-steps rtl-flip"><i class="bi bi-arrow-right"></i></a>
				</div>
			</div>
			<!-- Steps Content END -->
		</div>
	</div>
</section>
<!-- =======================
Steps END -->

<!-- =======================
Left right feature START -->
<section class="overflow-hidden pt-0">
	<div class="container">
		<div class="row align-items-lg-center">
			<!-- Content -->
			<div class="col-md-6">
				<!-- Title -->
				<h2 class="mb-lg-3">Experience the future of banking today</h2>
				<!-- List -->
				<ul class="list-group list-group-borderless mb-0">
					<li class="list-group-item d-flex fw-semibold pb-0"><i class="bi bi-check-circle text-primary me-2"></i>Convenience at your fingertips</li>
					<li class="list-group-item d-flex fw-semibold pb-0"><i class="bi bi-check-circle text-primary me-2"></i>Enhanced security</li>
					<li class="list-group-item d-flex fw-semibold pb-0"><i class="bi bi-check-circle text-primary me-2"></i>Comprehensive financial tools</li>
				</ul>

				<hr class="my-4"> <!-- Divider -->

				<!-- Skill sets -->
				<div class="row">
					<!-- Item -->
					<div class="col-lg-5">
						<div class="d-flex align-items-center mb-4">
							<div class="w-40px h-100 me-4 me-sm-5 flex-shrink-0">
								<div class="d-flex">
									<h4 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="98"	data-purecounter-delay="300">0</h4>
									<span class="h4 text-pink mb-0">%</span>
								</div>
							</div>
							<p class="mb-0">Customer satisfaction rate</p>
						</div>
					</div>

					<!-- Item -->
					<div class="col-lg-5">
						<div class="d-flex align-items-center mb-4">
							<div class="w-40px h-100 me-4 me-sm-5 flex-shrink-0">
								<div class="d-flex">
									<h4 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="60"	data-purecounter-delay="300">0</h4>
									<span class="h4 text-success mb-0">+</span>
								</div>
							</div>
							<p class="mb-0">Serving countries worldwide</p>
						</div>
					</div>
				</div>
			</div>

			<!-- Image -->
			<div class="col-md-6 col-lg-5 position-relative ms-auto">
				<img src="assets/images/mobile-app/01.jpg" class="rounded-4" alt="feature image">
				<!-- Rocket image -->
				<div class="position-absolute start-0 top-0 ms-n6 d-none d-lg-block">
					<img src="assets/images/elements/rocket-03.png" class="h-150px" alt="rocket image">
				</div>
				<!-- Decoration -->
				<div class="position-absolute bottom-0 end-0 me-lg-n5 mb-lg-n3">
					<img src="assets/images/mobile-app/deocration.jpg" class="shadow rounded-3 h-lg-70px" alt="decoration image">
				 </div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Left right feature END -->

<!-- =======================
Screen gallery and feature START -->
<section class="position-relative z-index-2 py-0" data-bs-theme="dark">
	<div class="container-fluid position-relative">
		<div class="max-width-1550 bg-dark position-relative rounded-4 overflow-hidden py-6 py-lg-8">
			<!-- Grad blur -->
			<div class="position-absolute top-0 end-0 mt-n6">
				<img src="assets/images/elements/grad-shape/blur-decoration.svg" class="rotate-270 blur-8 opacity-2" alt="Grad shape">
			</div>
			
			<!-- Title and content -->
			<div class="container inner-container-small text-center mb-7">
				<h2 class="mb-4">Get a closer look at how our app works</h2>
				<p class="mb-4"> Browse through our gallery to get a glimpse of the intuitive design and powerful features that make managing your finances effortless.</p>
				<div class="d-sm-flex justify-content-center">
					<a href="#"> <img src="assets/images/elements/google-play.svg" class="btn-transition me-sm-4 mb-2 mb-sm-0" width="180" alt="play store"> </a>
					<a href="#"> <img src="assets/images/elements/app-store.svg" class="btn-transition" width="180" alt="app-store"> </a>
				</div>
			</div>

			<!-- Slider START -->
			<div class="swiper swiper-outside-n5 pb-6 mx-3 mx-sm-0" data-swiper-options='{
				"slidesPerView": 1, 
				"spaceBetween": 50,
				"autoplay":{
					"delay": 2000, 
					"disableOnInteraction": false,
					"pauseOnMouseEnter": true
				},
				"breakpoints": { 
					"576": {"slidesPerView": 3}, 
					"992": {"slidesPerView": 5},
					"1300": {"slidesPerView": 7}
				},
				"pagination":{
					"el":".swiper-pagination",
					"clickable":"true"
				}}'>

				<!-- Slider items -->
				<div class="swiper-wrapper align-items-center">
					<!-- Image -->
					<div class="swiper-slide">
						<img src="assets/images/mobile-app/screen/s-01.jpg" class="rounded-4 border border-secondary border-3" alt="mobile screen">
					</div>

					<!-- Image -->
					<div class="swiper-slide">
						<img src="assets/images/mobile-app/screen/s-02.jpg" class="rounded-4 border border-secondary border-3" alt="mobile screen">
					</div>

					<!-- Image -->
					<div class="swiper-slide">
						<img src="assets/images/mobile-app/screen/s-03.jpg" class="rounded-4 border border-secondary border-3" alt="mobile screen">
					</div>

					<!-- Image -->
					<div class="swiper-slide">
						<img src="assets/images/mobile-app/screen/s-04.jpg" class="rounded-4 border border-secondary border-3" alt="mobile screen">
					</div>

					<!-- Image -->
					<div class="swiper-slide">
						<img src="assets/images/mobile-app/screen/s-05.jpg.png" class="rounded-4 border border-secondary border-3" alt="mobile screen">
					</div>

					<!-- Image -->
					<div class="swiper-slide">
						<img src="assets/images/mobile-app/screen/s-06.jpg" class="rounded-4 border border-secondary border-3" alt="mobile screen">
					</div>

					<!-- Image -->
					<div class="swiper-slide">
						<img src="assets/images/mobile-app/screen/s-07.jpg" class="rounded-4 border border-secondary border-3" alt="mobile screen">
					</div>

					<!-- Image -->
					<div class="swiper-slide">
						<img src="assets/images/mobile-app/screen/s-08.jpg" class="rounded-4 border border-secondary border-3" alt="mobile screen">
					</div>
				</div>

				<!-- Slider Pagination -->
				<div class="swiper-pagination swiper-pagination-primary position-absolute bottom-0 mb-4"></div>
			</div>	
			<!-- Slider END	 -->
		</div>
	</div>
</section>
<!-- =======================
Screen gallery and feature END -->

<!-- =======================
Testimonials START -->
<section>
	<div class="container">
		<div class="row align-items-center">
			<!-- Title and slider button -->
			<div class="col-lg-4 text-center text-lg-start">
				<h2 class="mb-3 mb-lg-4">Hear from our satisfied users</h2>
				<!-- Rating -->
				<ul class="avatar-group align-items-center justify-content-center justify-content-lg-start mb-2">
					<li class="avatar avatar-sm">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
					</li>
					<li class="avatar avatar-sm">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
					</li>
					<li class="avatar avatar-sm">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg" alt="avatar">
					</li>
					<li class="avatar avatar-sm">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
					</li>
					<li class="avatar avatar-sm">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
					</li>
				</ul>
				<p>Rated <span class="badge bg-dark">4.9/5.0</span> by over 100.000+ users</p>
			</div>

			<div class="col-lg-8 col-xl-7 ms-auto">
				<!-- Slider START -->
				<div class="swiper mt-2 mt-md-4" data-swiper-options='{
					"spaceBetween": 30,
					"autoplay":{
						"delay": 4000, 
						"disableOnInteraction": false,
						"pauseOnMouseEnter": true
					},
					"navigation":{
						"nextEl":".swiper-button-next-test",
						"prevEl":".swiper-button-prev-test"
					}}'>
					
					<div class="swiper-wrapper">
						<!-- Testimonial item -->
						 <div class="swiper-slide">
							<div class="card bg-secondary bg-opacity-50 rounded-4 overflow-hidden">
								<div class="row g-0">
									<div class="col-md-5">
										<!-- Image -->
										<img src="assets/images/team/01.jpg" class="rounded-start mb-3 mb-md-0" alt="...">
									</div>
									<div class="col-md-7 col-xl-6">
										<!-- Content -->
										<div class="card-body d-flex flex-column h-100 p-xl-4">
											<!-- Rating star -->
											<ul class="list-inline mb-2">
												<li class="list-inline-item me-0"><i class="bi bi-star-fill text-primary"></i></li>
												<li class="list-inline-item me-0"><i class="bi bi-star-fill text-primary"></i></li>
												<li class="list-inline-item me-0"><i class="bi bi-star-fill text-primary"></i></li>
												<li class="list-inline-item me-0"><i class="bi bi-star-fill text-primary"></i></li>
												<li class="list-inline-item me-0"><i class="bi bi-star-half text-primary"></i></li>
											</ul>
											<p class="heading-color">I've been using this app for over a year now, and it has made managing my finances so much easier. The user interface is incredibly intuitive.</p>
			
											<!-- Info -->
											<div class="mt-auto">
												<p class="lead heading-color fw-semibold mb-0">Emma Watson</p>
												<small>UI/UX Designer</small>
											</div>
			
										</div>
									</div>
								</div>
							</div>
						 </div>

						<!-- Testimonial item -->
						<div class="swiper-slide">
							<div class="card bg-secondary bg-opacity-50 rounded-4 overflow-hidden">
								<div class="row g-0">
									<div class="col-md-5">
										<!-- Image -->
										<img src="assets/images/team/04.jpg" class="rounded-start mb-3 mb-md-0" alt="...">
									</div>
									<div class="col-md-7 col-xl-6">
										<!-- Content -->
										<div class="card-body d-flex flex-column h-100 p-xl-4">
											<!-- Rating star -->
											<ul class="list-inline mb-2">
												<li class="list-inline-item me-0"><i class="bi bi-star-fill text-primary"></i></li>
												<li class="list-inline-item me-0"><i class="bi bi-star-fill text-primary"></i></li>
												<li class="list-inline-item me-0"><i class="bi bi-star-fill text-primary"></i></li>
												<li class="list-inline-item me-0"><i class="bi bi-star-fill text-primary"></i></li>
												<li class="list-inline-item me-0"><i class="bi bi-star-half text-primary"></i></li>
											</ul>
											<p class="heading-color">The app is fast, reliable, and customer support is always there when I need help. Highly recommended!</p>
			
											<!-- Info -->
											<div class="mt-auto">
												<p class="lead heading-color fw-semibold mb-0">Louis Ferguson</p>
												<small>Web Developer</small>
											</div>
			
										</div>
									</div>
								</div>
							</div>
						</div>	

						<!-- Testimonial item -->
						<div class="swiper-slide">
							<div class="card bg-secondary bg-opacity-50 rounded-4 overflow-hidden">
								<div class="row g-0">
									<div class="col-md-5">
										<!-- Image -->
										<img src="assets/images/team/03.jpg" class="rounded-start mb-3 mb-md-0" alt="...">
									</div>
									<div class="col-md-7 col-xl-6">
										<!-- Content -->
										<div class="card-body d-flex flex-column h-100 p-xl-4">
											<!-- Rating star -->
											<ul class="list-inline mb-2">
												<li class="list-inline-item me-0"><i class="bi bi-star-fill text-primary"></i></li>
												<li class="list-inline-item me-0"><i class="bi bi-star-fill text-primary"></i></li>
												<li class="list-inline-item me-0"><i class="bi bi-star-fill text-primary"></i></li>
												<li class="list-inline-item me-0"><i class="bi bi-star-fill text-primary"></i></li>
												<li class="list-inline-item me-0"><i class="bi bi-star-fill text-primary"></i></li>
											</ul>
											<p class="heading-color">The budgeting tools in this app have helped me save more and spend wisely.</p>
			
											<!-- Info -->
											<div class="mt-auto">
												<p class="lead heading-color fw-semibold mb-0">Jacqueline Miller</p>
												<small>Product designer</small>
											</div>
			
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

					<!-- Slider arrow -->
					<div class="d-flex justify-content-between position-absolute top-50 start-50 translate-middle w-100 z-index-2">
						<a href="#" class="btn btn-dark btn-icon btn-lg rounded-circle mb-0 swiper-button-prev-test rtl-flip ms-2"><i class="bi bi-arrow-left"></i></a>
						<a href="#" class="btn btn-dark btn-icon btn-lg rounded-circle mb-0 swiper-button-next-test rtl-flip me-2"><i class="bi bi-arrow-right"></i></a>
					</div>
				</div>		
				<!-- Slider END -->
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Testimonials END -->

<!-- =======================
Blog slider START -->
<section class="pt-0">
	<!-- Title and slider button -->
	<div class="container">
		<!-- Title and slider button -->
		 <div class="row g-4">
			<!-- Title -->
			<div class="col-sm-8 col-lg-5">
				<h3 class="mb-0 text-center text-sm-start">Our latest insights</h3>
			</div>

			<!-- Slider button -->
			<div class="col-sm-4 col-lg-5 ms-auto">
				<div class="d-flex justify-content-center justify-content-sm-end gap-3 position-relative mt-3">
					<a href="#" class="btn btn-secondary btn-lg btn-icon rounded-circle mb-0 swiper-button-prev"><i class="bi bi-arrow-left"></i></a>
					<a href="#" class="btn btn-secondary btn-lg btn-icon rounded-circle mb-0 swiper-button-next"><i class="bi bi-arrow-right"></i></a>
				</div>
			</div>

			<!-- Blogs START -->
			<div class="swiper mt-0" data-swiper-options='{
				"spaceBetween": 50,
				"loop": true,
				"autoplay":false,
				"navigation":{
					"nextEl":".swiper-button-next",
					"prevEl":".swiper-button-prev"
				},
				"breakpoints": { 
					"576": {"slidesPerView": 1},
					"768": {"slidesPerView": 2},
					"992": {"slidesPerView": 3}
				}}'>
				
				<div class="swiper-wrapper">
					<!-- Blog item -->
					<div class="swiper-slide py-4">
						<article class="card card-img-scale shadow-sm rounded-4 overflow-hidden h-100">
			
							<!-- Card image -->
							<div class="card-img-scale-wrapper">
								<img src="assets/images/blog/4by3/01.jpg" class="card-img-top img-scale" alt="Blog-img">
							</div>
			
							<!-- Card Body -->
							<div class="card-body pb-2">
								<!-- Title -->
								<h6 class="card-title"><a href="#">Tips for secure online banking</a></h6>
								<p class="mb-0">Learn essential tips to keep your online banking experience safe and secure.</p>
							</div>
							
							<!-- Card footer -->
							<div class="card-footer pt-0">
								<a class="icon-link icon-link-hover stretched-link" href="blog-single.html">Read more<i class="bi bi-arrow-right"></i> </a>
							</div>
						</article>
					</div>
			
					<!-- Blog item -->
					<div class="swiper-slide py-4">
						<article class="card card-img-scale shadow-sm rounded-4 overflow-hidden h-100">
			
							<!-- Card image -->
							<div class="card-img-scale-wrapper">
								<img src="assets/images/blog/4by3/02.jpg" class="card-img-top img-scale" alt="Blog-img">
							</div>
			
							<!-- Card Body -->
							<div class="card-body pb-2">
								<!-- Title -->
								<h6 class="card-title"><a href="#">The future of digital banking</a></h6>
								<p class="mb-0">Explore the latest trends in digital banking and how they are shaping the future.</p>
							</div>
							
							<!-- Card footer -->
							<div class="card-footer pt-0">
								<a class="icon-link icon-link-hover stretched-link" href="blog-single.html">Read more<i class="bi bi-arrow-right"></i> </a>
							</div>
						</article>
					</div>
			
					<!-- Blog item -->
					<div class="swiper-slide py-4">
						<article class="card card-img-scale shadow-sm rounded-4 overflow-hidden h-100">
			
							<!-- Card image -->
							<div class="card-img-scale-wrapper">
								<img src="assets/images/blog/4by3/03.jpg" class="card-img-top img-scale" alt="Blog-img">
							</div>
			
							<!-- Card Body -->
							<div class="card-body pb-2">
								<!-- Title -->
								<h6 class="card-title"><a href="#">How to maximize your savings with our app</a></h6>
								<p class="mb-0">Discover practical strategies to save more money using the features of our app.</p>
							</div>
							
							<!-- Card footer -->
							<div class="card-footer pt-0">
								<a class="icon-link icon-link-hover stretched-link" href="blog-single.html">Read more<i class="bi bi-arrow-right"></i> </a>
							</div>
						</article>
					</div>
			
					<!-- Blog item -->
					<div class="swiper-slide py-4">
						<article class="card card-img-scale shadow-sm rounded-4 overflow-hidden h-100">
			
							<!-- Card image -->
							<div class="card-img-scale-wrapper">
								<img src="assets/images/blog/4by3/04.jpg" class="card-img-top img-scale" alt="Blog-img">
							</div>
			
							<!-- Card Body -->
							<div class="card-body pb-2">
								<!-- Title -->
								<h6 class="card-title"><a href="#">Understanding mobile payment solutions</a></h6>
								<p class="mb-0"> Get a comprehensive overview of mobile payment solutions and how they work.</p>
							</div>
							
							<!-- Card footer -->
							<div class="card-footer pt-0">
								<a class="icon-link icon-link-hover stretched-link" href="blog-single.html">Read more<i class="bi bi-arrow-right"></i> </a>
							</div>
						</article>
					</div>
				</div>	
			</div>
			<!-- Blogs END -->
		 </div>
	</div>
</section>
<!-- =======================
Blog slider END -->

<!-- =======================
CTA START -->
<section class="bg-secondary-grad position-relative overflow-hidden py-7">
	<div class="container">
		<div class="row g-4 align-items-center">
			<!-- Content -->
			<div class="col-md-6">
				<!-- Title -->
				<h2 class="mb-4">Start your online banking today</h2>
				<p class="mb-4">Join the millions of users who are already enjoying a smarter, simpler, and more secure way to manage their finances.</p>
				<!-- Buttons -->
				<div class="d-sm-flex">
					<a href="#"> <img src="assets/images/elements/google-play.svg" class="btn-transition me-4 mb-2 mb-sm-0" width="150" alt="play store"> </a>
					<a href="#"> <img src="assets/images/elements/app-store.svg" class="btn-transition" width="150" alt="app-store"> </a>
				</div>
			</div>

			<!-- Image -->
			<div class="col-sm-9 col-md-6 mx-auto mb-n9">
				<img src="assets/images/mobile-app/cta.png" class="aos mb-n5 mb-lg-n9 ms-lg-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out" alt="cta image">
			</div>
		</div>
	</div>
</section>
<!-- =======================
CTA END -->

</main>

<?php include "./components/footer.php"; ?>