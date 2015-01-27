@extends('template')

	@section('menu')
		@include('menu')
	@endsection

	@section('content')
		<h4>Bienvenido</h4>
		<h3>{{Session::get('company')}}</h3>
		<h4>{{Auth::user()->name}}</h4>
	@endsection

@stop