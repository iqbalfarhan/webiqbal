@extends('layouts.adminlte')

@section('content')
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Socialmedia</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-toggle="modal" data-target="#addsocmed"><i class="fa fa-plus"></i> tambah</button>
			</div>
		</div>
		<div class="box-body">
			<div class="table-responsive">
				<table class="table">
					<thead class="table-light">
						<th>No</th>
						<th>Socialmedia name</th>
						<th>FontAwesome icon</th>
						<th>username</th>
						<th>link</th>
						<th class="text-center">Action</th>
					</thead>
					<tbody>
						@foreach ($datas as $data)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $data->name }}</td>
								<td><i class="{!! $data->icon !!}"></i> {{ $data->icon }}</td>
								<td>{{ $data->username }}</td>
								<td>{{ $data->link }}</td>
								<td class="p-2 text-center">
									<form action="{{ route('socialmedia.destroy', $data) }}" method="POST" onsubmit="return confirm('Are you sure?')">
										@csrf
										@method('DELETE')
										<a href="{{ route('socialmedia.show', $data) }}" class="btn btn-info btn-xs"><i class="fa fa-folder"></i></a>
										<a href="{{ route('socialmedia.edit', $data) }}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
										<button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="modal" id="addsocmed">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h5 class="modal-title">Tambah social media</h5>
				</div>
				<form action="{{ route('socialmedia.store') }}" method="POST">
					@csrf
					<div class="modal-body">
						<div class="form-group">
							<label class="form-control-label" for="name">Socialmedia name</label>
							<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="facebook, ect">
							@if($errors->has('name'))
								<span class="invalid-feedback">{{ $errors->first('name') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label class="form-control-label" for="icon">FontAwesome icon</label>
							<input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon" placeholder="fa fa-...">
							@if($errors->has('icon'))
								<span class="invalid-feedback">{{ $errors->first('icon') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label class="form-control-label" for="username">Username</label>
							<input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="username">
							@if($errors->has('username'))
								<span class="invalid-feedback">{{ $errors->first('username') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label class="form-control-label" for="link">direct Link</label>
							<input type="link" class="form-control @error('link') is-invalid @enderror" id="link" name="link" placeholder="socialmedia direct link">
							@if($errors->has('link'))
								<span class="invalid-feedback">{{ $errors->first('link') }}</span>
							@endif
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
		
@endsection