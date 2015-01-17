<nav class="navbar navbar-static-top navbar-inverse" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Nav.</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#"></a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href=""><i class="glyphicon glyphicon-home"></i></a></li>		
			<li><a href="{{route('items')}}">Articulos</a></li>

			<li><a href="{{route('doctors')}}">Doctores</a></li>
			<li><a href="{{route('clients')}}">Clientes</a></li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li><button type="button" class="btn btn-xs navbar-btn"><i class="glyphicon glyphicon-log-out"></i></button></li>
			

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">USER <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Perfil</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li><a href="#">Separated link</a></li>
				</ul>

			</li>


		</ul>
	</div><!-- /.navbar-collapse -->
</nav>