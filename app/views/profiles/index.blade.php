@extends('template-2.template')
@section('content')

<section  class="panel ">
	<header class="panel-heading">		
		<b>{{Str::upper($module)}}</b>
		<div class="btn-group pull-right">
			<a href="{{$module}}/new" class="btn  btn-xs"><span class="fa fa-plus-square"></span> Agregar</a>			
			<a href="{{$module}}"class="btn  btn-xs" type="button"><span class="fa fa-bars"></span> Listar</a>
		</div>			
	</header>
	<div class="panel-body">
		@include('stock.'.$module.'.list')
	</div>
</section>
@stop