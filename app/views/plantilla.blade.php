<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tienda</title>
	<!-- Incluimos el CSS de bootstrap y el CSS de la plantilla que usamos con los helpers de laravel -->
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/jumbotron-narrow.css') }}

</head>
<body>
	<div class="container">
		<div class="header">
			<ul class="nav nav-pills pull-right">
				<li>
					{{ HTML::link('/', 'Inicio') }}
				</li>
				<li>
					{{ HTML::link('vendedor', 'Vendedores') }}
				</li>
				<li>
					{{ HTML::link('producto', 'Productos') }}
				</li>

				<h3 class="text-muted">Tienda</h3>
			</ul>	
		</div>

		@yield('contenido')
		<!-- Aquí se incluiran los códigos que use cada método de los controladores -->

		<div class="footer">
			<p>Codehero + Kompanhero</p>
		</div>
	</div>
	<!-- Incluimos jQuery -->
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<!-- Incluímos el JS de bootstrap con el helper de laravel -->
	{{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>