@extends('template')

	@section('menu')
		@include('menu')
	@endsection

	@section('content')

		<div class="panel panel-default">
			  <div class="panel-heading">
					<h3 class="panel-title">{{$modulo}} : {{$seccion}}</h3>
			  </div>
			  <div class="panel-body">				
				
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					    <div class="panel panel-default">
					      <div class="panel-heading" role="tab" id="headingTwo">
					        <h4 class="panel-title">
					          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#2" aria-expanded="false" aria-controls="collapseTwo">
					          Datos
					          </a>
					        </h4>
					      </div>
					      <div id="2" class="panel-collapse collapse in " role="tabpanel" aria-labelledby="headingTwo">
					        <div class="panel-body">    

					           {{ Form::date('categories') }}    
					        </div>
					      </div>
					    </div>
					      <div class="panel panel-default">
					      <div class="panel-heading" role="tab" id="headingThree">
					        <h4 class="panel-title">
					          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#4" aria-expanded="false" aria-controls="collapseThree">
					            Articulos
					          </a>
					        </h4>
					      </div>
					      <div id="4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
					        <div class="panel-body">
								{{Form::texto('items','Articulos')}}
								{{Form::texto('items','Cantidad')}}
								{{Form::texto('items','Descuento')}}
								<button class="btn  btn-success form-control">Agegar</button>
					        </div>
					      </div>
					    </div>
					     <div class="panel panel-default">
					      <div class="panel-heading" role="tab" id="headingThree">
					        <h4 class="panel-title">
					          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#5" aria-expanded="false" aria-controls="collapseThree">
					            Imagenes
					          </a>
					        </h4>
					      </div>
					      <div id="5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
					        <div class="panel-body">
					              {{ Form::file('image') }}
					        </div>
					      </div>
					    </div>
					  </div>
			  </div>
		</div>

		<!--- MODAL -->
		<div id="myModal" class="modal fade">
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