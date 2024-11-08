<!DOCTYPE html>
<html lang="en-US">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Meet Particle, one of the Best HTML Templates with Modern & Tech Design. See it live now!">
	<meta name="author" content="Skilltech Web Design">
	<meta name="keywords" content="particle, particles js html, particle html, technology html, modern html, best html themes, best html templates, best websites, skilltech, skilltech web design, creative html, animated html, portfolio html, agency html, skilltechwebdesign.com"/>

	<meta property="og:title" content="This Modern, Tech & Startup HTML Theme will blow your mind!"/>
	<meta property="og:description" content="See the live interactive backgrounds react to your mouse movement and more. The Best Modern & Technology HTML Theme is here. Meet Particle!"/>
	<meta property="og:image" content="assets/images/facebook-post-img-1200x630-2021.jpg"/>
	<meta property="og:site_name" content="SkilltechWebDesign.com"/>

	<title>A Minute Jesus Devotional</title>

	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link href="assets/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&amp;family=Play:wght@400;700&amp;family=Source+Sans+Pro:ital,wght@0,300;1,300&amp;family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,700;0,900;1,200;1,300;1,400&amp;family=Blinker:wght@200;300;400;600;700;800&amp;display=swap" rel="stylesheet">
	<!-- Icon Fonts -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Animate.css -->
	<link href="assets/vendor/animate/animate.min.css" rel="stylesheet">
	<!-- Off Canvas Menu - Default Theme -->
	<link href="assets/vendor/offcanvas-nav/hc-offcanvas-nav.css" rel="stylesheet" />
	<!-- Off Canvas Menu - Carbon Theme -->
	<!-- <link href="assets/css/vendor/hc-offcanvas-nav.css" rel="stylesheet" /> -->

	<!-- Particle Theme CSS -->
	<link href="assets/css/particle-theme.css" rel="stylesheet">
	<link href="assets/css/particle-colors.css" rel="stylesheet">
<style>
	.custom-toggler {
    margin-left: auto;
}

.centered-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    min-height: 300px; /* Adjust based on your layout */
}

.center-image {
    max-width: 150px; /* Adjust the image size as needed */
    margin-bottom: 20px; /* Spacing between the image and text */
}


</style>
	
	<!-- Theme Preview Only CSS -->
	<link href="assets/css/theme-preview-color-styler.css" rel="stylesheet">

	<!-- jQuery -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-46362219-11"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-46362219-11');
	</script>

</head>

<body class="pa-homepage">

	<!-- Page Transitions
	================================================== -->
	<div class="pa-page-transition pa-page-transition-1 is-active"></div>
	<div class="pa-overlay" style="position: fixed; top: 0; left: 0; z-index: 10002; width: 100vw; height: 100vh; pointer-events: none; background: #091019;"></div>

	<!-- Navigation Menu
	================================================== -->
<!-- Mobile Main Logo -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Logo -->
    <a class="navbar-brand" href="#">
        <img src="assets/images/logo.png" alt="Logo" style="max-width: 100px; height: auto;">
    </a>

    <!-- Hamburger Toggle Button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible Content -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('verseoftheday') }}">Verse of the day</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('psalmoftheday') }}">Psalm of the day</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('proverboftheday') }}">Proverb of the day</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('promiseoftheday') }}">Promise of the day</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('user/register') }}">Register</a>
            </li>
        </ul>
    </div>
</nav>
<!-- /.pa-menu -->
<!-- /.pa-menu -->



	@yield('content')


	<!-- Footer
	================================================== -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-12 text-center my-2 pt-5 pb-4">
					<p>Copyright © 2024 - <a href="http://www.aminjesus.com/" target="_blank">A Minute Jesus Devotional</a></p>
				</div>
			</div>
		</div>
		<div class="pa-back-to-top-wrap">
			<a class="pa-back-to-top" href="#top"><span class="pa-back-to-top"></span></a>
		</div>
	</footer>


	<!-- Helper div for inserting before scripts
	================================================== -->
	<div class="pa-body-end"></div>


	<!-- Scripts / Body End
	================================================== -->
	<!-- Vendor Scripts -->
	<script src="assets/vendor/jquery/jquery-migrate.min.js"></script>
	<!-- <script src="assets/vendor/bootstrap/bootstrap.min.js"></script> -->
	<script src="assets/vendor/offcanvas-nav/hc-offcanvas-nav.js"></script>
	<script src="assets/vendor/parallax/parallax.min.js"></script>
	<script src="assets/vendor/jquery/jquery.easing.min.js"></script>
	<script src="assets/vendor/typed/typed.min.js"></script>
	<script src="assets/vendor/wow/wow.min.js"></script>
	<script src="assets/vendor/particles/particles.min.js"></script>
	<script src="assets/vendor/waypoints/waypoints.min.js"></script>
	<script src="assets/vendor/counterup/jquery.counterup.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	

	<!-- Theme Scripts and Inits -->
	<script src="assets/js/particle-theme.js"></script>
	<script src="assets/js/page-home.js"></script>

	<!-- Theme Preview Only Scripts -->
	<script src="assets/vendor/spectrum/spectrum.min.js"></script>
	<script src="assets/vendor/clipboard/clipboard.min.js"></script>
	<script src="assets/js/theme-preview-only.js"></script>

	<!-- Theme Preview Only CSS -->
	<link href="assets/vendor/spectrum/spectrum.min.css" rel="stylesheet">

</body>
</html>