<section class="page-section bg-primary text-white mb-0" id="about">
	<div class="container">

		<div class="text-center">
			<h2 class="page-section-heading d-inline-block text-white">Tentang saya</h2>
		</div>

		<div class="divider-custom divider-light">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>

		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="ml-auto">
					<p class="pre-wrap lead" style="column-count: 2;">{!! App\Profile::where('parameter', 'biografi')->first()->value ?? "not set" !!}</p>
				</div>
			</div>
		</div>
	</div>
</section>