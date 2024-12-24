<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Error 404 :: QuickFix&reg;</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="webify.com.ng">

	<script>
		const storedTheme = localStorage.getItem('theme')
 
		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})
		
	</script>

	<link rel="shortcut icon" href="assets/images/favicon.png">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

<main>

    <section class="bg-secondary position-relative pt-xl-5 vh-100 overflow-hidden">

        <div class="position-absolute top-0 start-0 mt-n9 ms-n5">
            <img src="assets/images/blur-decoration-svg" class="blur-7 opacity-2" alt="Grad shape">
        </div>

        <div class="position-absolute top-0 start-50 mt-n9 ms-n9">
            <img src="assets/images/blur-decoration-svg" class="blur-8 opacity-1" alt="Grad shape">
        </div>
        
        <div class="container text-center mx-auto position-relative pt-4 pt-sm-5">
            <img src="assets/images/404.svg" class="h-md-400px mb-4 mb-lg-6" alt="404 image">
            <h1 class="h3 mb-3">Ooops! Page not found 😭</h1>
            <p class="mb-3">The page you were looking for doesn't exis</p>
            <a href="./" class="btn btn-white-shadow mb-0">Back to Homepage</a>
        </div>
    </section>

</main>

<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/functions.js"></script>

</body>
</html>