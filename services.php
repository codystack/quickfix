<?php
$page = "Services";
include "./components/header.php";
include "./components/navbar.php";
?>

<main>

	<section class="bg-secondary-grad position-relative overflow-hidden z-index-2 pt-sm-8 pt-lg-9">
		<div class="container">
			<div class="inner-container-small text-center mb-4 mb-md-6">
				<h1 class="mb-0">Our Services</h1>
			</div>

			<div class="row g-4 g-lg-5 align-items-lg-center">
				<div class="col-md-6 col-lg-4 order-1 pe-5">
					<div class="aos d-flex justify-content-lg-end mb-4 mb-md-6" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
						<div class="text-lg-end order-1 ms-3 ms-lg-0 me-lg-3">
							<h6 class="mb-2">Laundry Services</h6>
							<p class="mb-0">We provide top-quality washing, drying, ironing, and folding services. Say goodbye to laundry stress and hello to fresh clothes delivered to your doorstep.</p>
						</div>
						<!-- <div class="icon-lg bg-body text-success rounded-circle flex-shrink-0 order-lg-2"><i class="bi bi-cash-stack fa-lg"></i></div> -->
					</div>

					<div class="aos d-flex justify-content-lg-end mb-4 mb-md-6" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
						<div class="text-lg-end order-1 ms-3 ms-lg-0 me-lg-3">
							<h6 class="mb-2">House Cleaning</h6>
							<p class="mb-0">From deep cleaning to regular maintenance, our trained professionals ensure your home stays spotless. Choose from a range of cleaning plans tailored to your needs.</p>
						</div>
						<!-- <div class="icon-lg bg-body text-purple rounded-circle flex-shrink-0 order-lg-2"><i class="bi bi-receipt fa-lg"></i></div> -->
					</div>
				</div>

				<div class="col-md-8 col-lg-4 mx-auto order-3 order-lg-2">
					<img src="assets/images/quickfix_feature.png" class="aos" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out" alt="feature mobile">
				</div>

				<div class="col-md-6 col-lg-4 order-2 order-lg-3">
					<div class="aos d-flex mb-4 mb-md-6" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
						<!-- <div class="icon-lg bg-body text-info rounded-circle flex-shrink-0"><i class="bi bi-person-vcard fa-lg"></i></div> -->
						<div class="ms-3">
							<h6 class="mb-2">Car Wash</h6>
							<p class="mb-0">Give your vehicle the care it deserves with our premium car wash services. We provide interior and exterior cleaning, leaving your car looking brand new.</p>
						</div>
					</div>

					<div class="aos d-flex mb-4 mb-md-6" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
						<!-- <div class="icon-lg bg-body text-primary rounded-circle flex-shrink-0"><i class="bi bi-gear fa-lg"></i></div> -->
						<div class="ms-3">
							<h6 class="mb-2">Track Your Order</h6>
							<p class="mb-0">Stay updated with real-time tracking of your service request. Our intuitive tracking system allows you to monitor the progress of your laundry, house cleaning, or car wash.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

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
							<div class="swiper-slide bg-body">
								<div class="bg-secondary-grad rounded-4 overflow-hidden p-5 h-100">
									<img src="assets/images/step1.jpg" class="mb-n8 rounded-5 shadow-primary" alt="step image">
								</div>
							</div>

							<div class="swiper-slide bg-body">
								<div class="bg-secondary-grad rounded-4 overflow-hidden p-5 h-100">
									<img src="assets/images/step2.jpg" class="mb-n8 rounded-5 shadow-primary" alt="step image">
								</div>
							</div>

							<div class="swiper-slide bg-body">
								<div class="bg-secondary-grad rounded-4 overflow-hidden p-5 h-100">
									<img src="assets/images/step3.jpg" class="mb-n8 rounded-5 shadow-primary" alt="step image">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 order-1 ms-auto">
					<div class="swiper" data-swiper-options='{
						"spaceBetween": 30,
						"autoplay":false,
						"simulateTouch":false,
						"navigation":{
							"nextEl":".swiper-button-next-steps",
							"prevEl":".swiper-button-prev-steps"
						}}'>
						
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<span class="fw-semibold text-primary">Step 1</span>
								<h2 class="my-3">Create an Account</h2>
								<p class="mb-0">Sign up with your email or phone number and set up your profile for a personalized experience.</p>
							</div>

							<div class="swiper-slide">
								<span class="fw-semibold text-primary">Step 2</span>
								<h2 class="my-3">Choose a Service</h2>
								<p class="mb-0">Select from laundry, house cleaning, or car wash services based on your needs.</p>
							</div>

							<div class="swiper-slide">
								<span class="fw-semibold text-primary">Step 3</span>
								<h2 class="my-3">Enjoy Hassle-Free Service</h2>
								<p class="mb-0">Pick a time slot that works for you and enter your address for doorstep service and make payment.</p>
							</div>
						</div>
					</div>		
					
					<div class="d-flex gap-3 position-relative mt-3">
						<a href="#" class="btn btn-lg btn-secondary btn-icon rounded-circle mb-0 swiper-button-prev-steps rtl-flip"><i class="bi bi-arrow-left"></i></a>
						<a href="#" class="btn btn-lg btn-secondary btn-icon rounded-circle mb-0 swiper-button-next-steps rtl-flip"><i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include "./components/cta.php"; ?>

</main>

<?php include "./components/footer.php"; ?>