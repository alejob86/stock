
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title">{{$modulo}} : {{$seccion}}</h4>
	</div>

	<div class="modal-body">
		@if(isset($model_edit))
			{{Form::model($model_edit,  array('route' => array('post_edit_item', $model_edit->id)) ) }}
		@else
			{{Form::open(array('route'=>'post_new_item' ,'class'=>'form-horizontal'))}}
		@endif

		@include($model.'_form')

		<hr>
		
			{{Form::submit('Guardar',array('class'=>'btn btn-primary'))}}	
		
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	</div>


	{{Form::close()}}	

