<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>{{ env('APP_NAME') }}</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
	<link href="/freelancer/css/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="/freelancer/css/heading.css">
	<link rel="stylesheet" href="/freelancer/css/body.css">
	@livewireStyles
</head>
<body id="page-top">
	<nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">
				iqbalfarhan.xyz
			</a>
			<button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portofolio</a>
					</li>
					<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Tentang saya</a>
					</li>
					<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Hubungi saya</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	@yield('content')
	
	<section class="copyright py-4 text-center text-white">
		<div class="container">
			<small class="pre-wrap">Copyright © iqbalfarhan.xyz 2020 ~ 2021 </small>
		</div>
	</section>
	
	<div class="scroll-to-top d-lg-none position-fixed">
		<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
			<i class="fa fa-chevron-up"></i>
		</a>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	
	<script src="/freelancer/assets/mail/jqBootstrapValidation.js"></script>
	<script src="/freelancer/assets/mail/contact_me.js"></script>
	
	<script src="/freelancer/js/scripts.js"></script>

	@livewireScripts
</body>
</html>