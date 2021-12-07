@extends('layouts.adminlte')

@section('content')
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">{{ $subtitle ?? 'control panel' }} {{ $datas->count() }}</h3>
		<div class="box-tools pull-right">
			<a href="{{ route('project.create') }}" class="btn btn-box-tool btn-default btn-xs">Tambah</a>
		</div>
	</div>
	<div class="box-body no-padding">
		<div class="table-responsive">
			<table class="table">
				<thead class="table-light">
					<th class="text-center">No</th>
					<th>Photo</th>
					<th>Judul project</th>
					<th>client</th>
					<th>show?</th>
					<th class="text-center">Action</th>
				</thead>
				<tbody>
					@foreach ($datas as $data)
					<tr>
						<td class="text-center">{{ $no++ }}</td>
						<td>
							<img src="/{{ $data->photo }}" alt="" width="150px">
						</td>
						<td>
							<div style="width: 400px">
								<h5 class="no-margin">{{ $data->title }}</h5>
								<small class="text-muted">{{ $data->keterangan }}</small>
								<br><small class="text-muted">{{ $data->created_at }}</small>
							</div>
						</td>
						<td style="width: 100px">{{ $data->client }}</td>
						<td>{{ $data->show ? 'tampil' : 'sembunyi' }}</td>
						<td class="text-center">
							<form action="{{ route('project.destroy', $data) }}" method="POST" onsubmit="return confirm('Are you sure?')">
								@csrf
								@method('DELETE')
								<a href="{{ route('project.edit', $data) }}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
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
@endsection