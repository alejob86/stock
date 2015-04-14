<div class="table-responsive no-border">
	<table class="table table-bordered table-striped mg-t datatable ">
		<thead>
			<tr>
				<th>Perfil</th>						
				<th class='no-sort'></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($profiles as $profile)
				<tr>
					<td>{{ $profile->profile }} </td>							
					<td>
						<div class="btn-group pull-right">
							<a type="button" href="{{$module}}/edit/{{ Crypt::encrypt($profile->id) }}" class="btn btn-sm  btn-success"><i class="fa fa-edit"></i></a>
							<a href="{{$module}}/del/{{ Crypt::encrypt($profile->id) }}" class="btn btn-sm  btn-danger " type="button"><i class="fa fa-times-circle "></i></a>
						</div>
					</td>
				</tr>
			@endforeach
		</tbody>   
	</table>
</div>