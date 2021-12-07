<header class="masthead bg-primary text-white text-center">
	<div class="container d-flex align-items-center flex-column">
		<img class="masthead-avatar mb-5" src="{!! App\Profile::where('parameter', 'photo')->first()->value ?? "not set" !!}" alt="">
		<h1 class="masthead-heading mb-0">{!! App\Profile::where('parameter', 'nama')->first()->value ?? "not set" !!}</h1>
		<div class="divider-custom divider-light">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>
		<p class="pre-wrap masthead-subheading font-weight-light mb-0">{!! App\Profile::where('parameter', 'keahlian')->first()->value ?? "not set" !!}</p>
	</div>
</header>