<footer class="footer text-center">
	<div class="container">
		<div class="row">

			<div class="col-lg-4 mb-5 mb-lg-0">
				<h4 class="mb-4">ALAMAT</h4>
				<p class="pre-wrap lead mb-0">{!! App\Profile::where('parameter', 'alamat')->first()->value ?? "not set" !!}</p>
			</div>

			<div class="col-lg-4 mb-5 mb-lg-0">
				<h4 class="mb-4">MEDIA SOSIAL</h4>
				@foreach (App\Socialmedia::get()->take(4) as $socmed)
					<a class="btn btn-outline-light btn-social mx-1" href="{{ $socmed->link }}" target="_blank"><i class="{{ $socmed->icon }}"></i></a>
				@endforeach
			</div>

			<div class="col-lg-4">
				<h4 class="mb-4">Bidang keahlian</h4>
				<p class="pre-wrap lead mb-0">{!! App\Profile::where('parameter', 'keahlian')->first()->value ?? "not set" !!}</p>
			</div>
		</div>
	</div>
</footer>