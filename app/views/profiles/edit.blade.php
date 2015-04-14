@extends('template-2.template')


@section('content')

<section  class="panel ">

	<header class="panel-heading">
		
		<b>{{Str::upper($module)}}</b>

		<div class="btn-group pull-right">

		
			<a href="#modal-id" data-toggle="modal" class="btn  btn-xs" type="button"><span class="fa fa-plus-square"></span> Agregar</a>

			<a href="{{$module}}"class="btn  btn-xs" type="button"><span class="fa fa-bars"></span> Listar</a>
		</div>
			
	</header>

	<div class="panel-body">
		@include('stock.category.form')		
		<button type="button" class="col-sm-5 btn btn-default pull-right" data-dismiss="modal">Cerrar</button>
		{{ Form::submit('Aceptar', array('class' => 'col-sm-5 btn btn-primary pull-right'))}}
		{{ Form::close() }}	
	</div>
</section>
@stop