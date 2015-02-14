	
<nav class="navbar navbar-static-top navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Nav.</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" style='color:#F0AD4E;'> <strong>{</strong> stock <strong>}</strong> </a>
	</div>


	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th-list"></i> Menu</a>
				<ul class="dropdown-menu">
					<li><a href="inicio"><span class="glyphicon glyphicon-home"></span></a></li>
					<li class="divider"></li>
					<li><a href="{{route('items')}}">Articulos</a></li>
					<li><a href="{{route('doctors')}}">Doctores</a></li>
					<li><a href="{{route('clients')}}">Clientes</a></li>
					<li><a href="{{route('categories')}}">Categorias</a></li>
					<li><a href="{{route('obras')}}">Obras Sociales</a></li>
					<li class="divider"></li>
					<li><a href="{{route('purchases')}}">Compras</a></li>
					<li><a href="{{route('clients')}}">Ventas</a></li>
					<li class="divider"></li>
					<li><a href="{{route('users')}}">Usuarios</a></li>


				</ul>
			</li>
	


		</ul>
		<ul class="nav navbar-nav navbar-right">

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name}} </a>
				<ul class="dropdown-menu">
					<li><a href="#">Perfil</a></li>
				</ul>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-cog"></i></a>
				<ul class="dropdown-menu">
					<li><a href="#">Usuarios</a></li>
					<li><a href="#">Perfiles</a></li>
				</ul>
			</li>

			<li><a href="{{route('logout')}}"><i class="glyphicon glyphicon-log-out"></i></a>
			</li>

			<li><ul></ul>
			</li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>