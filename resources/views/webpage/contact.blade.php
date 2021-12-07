<section class="page-section" id="contact">
	<div class="container">

		<div class="text-center">
			<h2 class="page-section-heading text-secondary d-inline-block mb-0">Hubungi saya</h2>
		</div>

		<div class="divider-custom">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>

		<div class="row justify-content-center">
			@foreach ($datas as $data)
				<div class="col-lg-4 mb-3">
					<div class="d-flex flex-column align-items-center">
						<a href="{{ $data->link }}" class="icon-contact mb-3">
							<i class="{{ $data->icon }}"></i>
						</a>
						<div class="text-muted">{{ $data->name }}</div>
						<div class="lead font-weight-bold">{{ $data->username }}</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>