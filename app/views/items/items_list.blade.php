<div class="table-responsive">
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th width="10%"></th>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th></th>
			</tr>
		</thead>
		<tbody>			
				@foreach($model  as $models)
				<tr>
					<td>
						<a href="#" class="thumbnail">

							@if(!is_null($models->image))
								<img src="{{$models->image}}" width="100%">	
							@else
								<img src="no_image.png" width="100%">	
							@endif
						</a>
					</td>
					<td>{{$models->code}}</td>
					<td>{{$models->name}}</td>
					<td>{{$models->description}}</td>
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
