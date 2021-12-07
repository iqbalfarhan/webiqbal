<div>
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"><i class="fa fa-clipboard"></i> Task List</h3>
			<div class="box-tools pull-right">
				<button type="button" data-toggle="modal" data-target="#addTodo" class="btn btn-box-tool">
					<i class="fa fa-plus"></i> &nbsp;tambah
				</button>
			</div>
		</div>
		<div class="box-body">
			<ul class="todo-list">
				@foreach ($datas as $data)
				<li>
					<span class="handle">
						<i class="fa fa-ellipsis-v"></i>
						<i class="fa fa-ellipsis-v"></i>
					</span>
					<input type="checkbox" value="" {{ $data->status == 1 ? 'checked' : '' }} wire:change="ubahStatus('{{ $data->id }}')">
					<span class="text">
						@if ($data->status == 1)
						<strike>{{ $data->todo }}</strike>
						@else
						{{ $data->todo }}
						@endif
					</span>
					<small class="label label-danger"><i class="fa fa-clock-o"></i> {{ $data->created_at->diffForHumans() }}</small>
					<div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o" wire:click="hapus('{{ $data->id }}')"></i>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
		<div class="box-footer clearfix no-border">
			<div wire:loading>
				<i class="fa fa-refresh fa-spin"></i> Processing ...
			</div>
		</div>
	</div>

	<div wire:ignore.self class="modal fade" tabindex="-1" role="modal" id="addTodo">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h5 class="modal-title">Tambah todolist</h5>
				</div>
				<form method="POST" action="{{ route('todo.store') }}">
					@csrf
					<div class="modal-body">
						<div class="form-group">
							<label class="form-control-label" for="todo">tugas baru</label>
							<input type="text" class="form-control @error('todo') is-invalid @enderror" id="todo" name="todo" placeholder="todo " wire:model="new_todo">
							@if($errors->has('todo'))
							<span class="invalid-feedback">{{ $errors->first('todo') }}</span>
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

</div>