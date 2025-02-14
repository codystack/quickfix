<div class="header-absolute">
	<header class="header-sticky bg-transparent">
		<nav class="navbar navbar-expand-xl">
			<div class="container">
				<a class="navbar-brand me-0" href="./">
					<img class="light-mode-item navbar-brand-item" src="assets/images/logo-dark.svg" alt="logo">
					<img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
				</a>

				<div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll dropdown-hover mx-auto">
                        <li class="nav-item"> <a class="nav-link <?php if($page=='Home'){echo 'active';}?>" href="./">Home</a> </li>

                        <li class="nav-item"> <a class="nav-link <?php if($page=='About us'){echo 'active';}?>" href="about">About us</a> </li>

						<li class="nav-item"> <a class="nav-link <?php if($page=='Services'){echo 'active';}?>" href="services">Services</a> </li>

                        <li class="nav-item"> <a class="nav-link <?php if($page=='Contact us'){echo 'active';}?>" href="contact">Contact us</a> </li>
                    </ul>
                </div>
            
				<ul class="nav align-items-center dropdown-hover ms-sm-2">
                    
					<li class="nav-item ms-2 d-none d-sm-block">
						<a href="#downloadCTA" class="btn btn-sm btn-dark mb-0"><i class="bi bi-cloud-download-fill me-2"></i>Download app</a>
					</li>
                    
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
	</header>
</div> 