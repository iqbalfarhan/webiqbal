@extends('layouts.adminlte')

@section('content')
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">profile</h3>
			<button data-toggle="modal" data-target="#addProfile" class="btn btn-primary"><i class="fa fa-plus mr-2"></i> tambah</button>
		</div>
		<div class="box-body">
			<div class="table-responsive">
				<table class="table">
					<thead class="table-light">
						<th>No</th>
						<th>Parameter</th>
						<th>Value</th>
						<th class="text-center">Action</th>
					</thead>
					<tbody>
						@foreach ($datas as $data)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $data->parameter }}</td>
								<td>{{ $data->value }}</td>
								<td class="p-2 text-center">
									<form action="{{ route('profile.destroy', $data) }}" method="POST" onsubmit="return confirm('Are you sure?')">
										@csrf
										@method('DELETE')
										<a href="{{ route('profile.show', $data) }}" class="btn btn-info btn-xs"><i class="fa fa-folder"></i></a>
										<a href="{{ route('profile.edit', $data) }}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
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
	<div class="modal fade" tabindex="-1" role="modal" id="addProfile">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h5 class="modal-title">tambah profile</h5>
				</div>
				<form action="{{ route('profile.store') }}" method="POST">
					@csrf
					<div class="modal-body">
						<div class="form-group">
							<label class="form-control-label" for="parameter">Parameter</label>
							<input type="text" class="form-control @error('parameter') is-invalid @enderror" id="parameter" name="parameter" placeholder="parameter">
							@if($errors->has('parameter'))
								<span class="invalid-feedback">{{ $errors->first('parameter') }}</span>
							@endif
						</div>
						<div class="form-group">
							<label class="form-control-label" for="value">Value</label>
							<input type="text" class="form-control @error('value') is-invalid @enderror" id="value" name="value" placeholder="value">
							@if($errors->has('value'))
								<span class="invalid-feedback">{{ $errors->first('value') }}</span>
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