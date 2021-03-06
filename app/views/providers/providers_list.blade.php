<div class="table-responsive">
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th width="10%">Image</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Celular</th>
				<th>Operaciones</th>
			</tr>
		</thead>
		<tbody>			
				@foreach($model  as $models)
				<tr>
					<td>						
						@if(!is_null($models->image) && $models->image != "")
							<a href="{{ $models->image }}" target="_blank" class="thumbnail">
								<img src="{{ $models->image }}" width="100%">	
							</a>
						@else
							<a href="no_image.png" target="_blank">
								<img src="no_image.png" width="100%">	
							</a>
						@endif						
					</td>
					<td>{{$models->name}}</td>
					<td>{{$models->last_name}}</td>
					<td>{{$models->dni}}</td>
					<td>{{$models->email}}</td>
					<td>
						<div class="btn-group btn-group-xs">
							<a href="{{route($ruta.'_edit_form',$models->id)}}" class="btn btn-default" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-edit"></i></a>
							<a href="{{route($ruta.'_delete',$models->id)}}"type="button" class="del_confirm btn btn-default"><i class="glyphicon glyphicon-remove-circle"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
	<ul class="pagination">
		{{ $model->links() }}
	</ul>
</div>
