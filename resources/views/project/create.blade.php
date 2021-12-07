@extends('layouts.adminlte')

@section('content')
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Tambah project</h3>
	</div>
	<form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="box-body">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label class="form-control-label" for="photo">photo project</label>
						<input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" placeholder="photo" accept="image/png, image/jpeg">
						@if($errors->has('photo'))
						<span class="invalid-feedback">{{ $errors->first('photo') }}</span>
						@endif
					</div>
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-control-label" for="title">Judul project</label>
								<input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="title">
								@if($errors->has('title'))
								<span class="invalid-feedback">{{ $errors->first('title') }}</span>
								@endif
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-control-label" for="client">Client project</label>
								<input type="text" class="form-control @error('client') is-invalid @enderror" id="client" name="client" placeholder="client">
								@if($errors->has('client'))
								<span class="invalid-feedback">{{ $errors->first('client') }}</span>
								@endif
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="keterangan">Description project</label>
						<textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" placeholder="keterangan" rows="5">Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Commodi recusandae, impedit quae molestiae aliquam ea delectus veritatis corporis fuga molestias optio, ducimus accusamus non eum magnam cum temporibus? Labore, officia!</textarea>
						@if($errors->has('keterangan'))
						<span class="invalid-feedback">{{ $errors->first('keterangan') }}</span>
						@endif
					</div>
					<div class="checkbox">
						<label class="form-control-label" for="show">
							<input type="checkbox" class="@error('show') is-invalid @enderror" id="show" name="show" placeholder="">
							Show project
						</label>
						@if($errors->has('show'))
							<span class="invalid-feedback">{{ $errors->first('show') }}</span>
						@endif
					</div>
						
				</div>
			</div>

		</div>
		<div class="box-footer">
			<button class="btn btn-primary"><i class="fa fa-save mr-2"></i> Simpan</button>
		</div>
	</form>
</div>
@endsection