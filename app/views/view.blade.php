@extends('template')

	@section('content')

		<div class="panel panel-default">
			  <div class="panel-heading">
					<h3 class="panel-title">{{$modulo}} : {{$seccion}}</h3>
			  </div>		

			  <div class="panel-body">
				
				<div class="row">	
					<div class="col-xs-8">
						<a href="{{route('new_form_item')}}" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal">Nuevo</a>
					</div>
					<div class="col-xs-4">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Buscar">
							<span class="input-group-btn"><button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button></span>
						</div>
					</div>
				</div>
				<hr>

				@include('doctors_list')
		
					
			  </div>
		</div>



		<!--- MODAL -->
		<div id="myModal" class="modal fade"  tabindex="-1"	>
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- Content will be loaded here from "remote.php" file -->
					</div>
				</div>
			</div>
		<!-- END MODAL -->



	@endsection

	@section('js')
		<script type="text/javascript">
			$('body').on('hidden.bs.modal', '.modal', function () {
				$(this).removeData('bs.modal');
			});
		</script>
	@endsection
@stop