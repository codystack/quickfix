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
    <style>
        @supports (animation: grow .5s cubic-bezier(.25, .25, .25, 1) forwards) {
            .tick {
                stroke-opacity: 0;
                stroke-dasharray: 29px;
                stroke-dashoffset: 29px;
                animation: draw .5s cubic-bezier(.25, .25, .25, 1) forwards;
                animation-delay: .6s
            }

            .circle {
                fill-opacity: 0;
                stroke: #219a00;
                stroke-width: 16px;
                transform-origin: center;
                transform: scale(0);
                animation: grow 1s cubic-bezier(.25, .25, .25, 1.25) forwards;   
            }   
        }

        @keyframes grow {
            60% {
                transform: scale(.8);
                stroke-width: 4px;
                fill-opacity: 0;
            }
            100% {
                transform: scale(.9);
                stroke-width: 8px;
                fill-opacity: 1;
                fill: #219a00;
            }
        }

        @keyframes draw {
            0%, 100% { stroke-opacity: 1; }
            100% { stroke-dashoffset: 0; }
        }

    </style>

</head>

<body>

<main>

    <section class="bg-secondary position-relative pt-xl-5 vh-100 overflow-hidden">
        <div class="container text-center mx-auto position-relative pt-9 pt-sm-9">
            <div class="text-center">
                <div class="lines-style-6">
                    <div class="line show-on-scroll" data-show-duration="500" data-show-distance="140" data-show-delay="400" data-show-origin="right"></div>
                    <div class="line show-on-scroll" data-show-duration="500" data-show-distance="120" data-show-delay="200"></div>
                </div>
                <div class="svg-container">    
                    <svg class="ft-green-tick" xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 48 48" aria-hidden="true">
                        <circle class="circle" fill="#5bb543" cx="24" cy="24" r="22"/>
                        <path class="tick" fill="none" stroke="#FFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M14 27l5.917 4.917L34 17"/>
                    </svg>
                </div>
                <p class="h4 mb-10 mt-5 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="100">Payment Successful</p>
                <p class="mb-10 pb-2 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="200">Do not close, you're being redirected.</p>
                
            </div>
        </div>
    </section>

</main>

<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/functions.js"></script>

</body>
</html>