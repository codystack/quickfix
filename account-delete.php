<?php
include "./components/header.php";
?>

<main>
	<section class="bg-secondary position-relative vh-100">
		<div class="container h-100 d-flex flex-column justify-content-center">
			<div class="row justify-content-center align-items-center">
				<div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5 position-relative">
					<div class="position-absolute bottom-0 end-0 mb-n8 me-n5 d-none d-sm-block">
						<img src="assets/images/blur-decoration-svg.svg" class="blur-8 opacity-2" alt="Grad shape">
					</div>

					<div class="card card-body bg-body bg-opacity-25 bg-blur border border-white border-opacity-10 position-relative rounded-4 shadow-primary text-center p-4 p-sm-5">
						<h1 class="mb-2 h3 fw-bold">Delete account</h1>
						<p class="mb-0">Fill all fields so we can get some info about you. And process your account for deletion.</p>

						<form class="mt-2 mt-sm-4">
							<div class="mb-3">
								<input type="text" class="form-control" placeholder="Enter full name" required>
							</div>
                            
							<div class="mb-3">
								<input type="email" class="form-control" placeholder="Enter email" required>
							</div>

                            <div class="mb-3">
								<input type="tell" class="form-control" placeholder="Enter phone" required>
							</div>

							<div class="mb-3 text-start form-check">
								<input type="checkbox" class="form-check-input border" id="exampleCheck1" required>
								<label class="form-check-label small" for="exampleCheck1">I agree to the <a href="terms">Terms & conditions</a> and the <a href="privacy">privacy policy</a>.</label>
							</div>
							
							<div class="d-grid"><button type="submit" class="btn btn-primary">Delete  account</button></div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/functions.js"></script>

</body>
</html>