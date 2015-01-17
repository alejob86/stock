<div class="table-responsive">
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th></th>
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
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<a href="#" class="thumbnail">
								<img src="{{$models->image}}" alt="">
							</a>
						</div>
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