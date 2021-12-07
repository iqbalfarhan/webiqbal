@extends('layouts.adminlte')

@section('content')
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">{{ $subtitle ?? "box title" }}</h3>
		</div>
		<form action="{{ route('terminal.store') }}" method="POST">
			@csrf
			<div class="box-body">
				<div class="input-group">
					<span class="input-group-addon">php artisan</span>
					<input type="text" class="form-control" name="command" autofocus="true" autocomplete="off">
				</div>
			</div>
			<div class="box-footer">
				<button class="btn btn-primary"><i class="fa fa-play mr-2"></i> Run</button>
			</div>
		</form>
	</div>
@endsection