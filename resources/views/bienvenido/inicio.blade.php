
<html>
<head>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}" crossorigin="anonymous">
	<title>BIENVENIDO</title>	
</head>
<body>
	<div class="m-5">
		<div class="btn-group mt-3">
			<img src="images/gobmxlogo.svg" style="width:20%;" alt=" ">
		</div>	
		<div style="float:right;">
			<button class="btn col-2 bt-01">Tramites</button>
			<button class="btn col-2 bt-01">Gobierno</button>
			<button class="btn col-2 bt-01">Participa</button>
			<button class="btn col-2 bt-01">Datos</button>
			<button class="btn col-2 bt-01"><img src="images/lupa.png" style="height:20px" ></button>
		</div>
		<div class="col">
			<img src="images/educa.png" class="col-6">
			<img src="images/ipn.png" class="col-1">

		</div>
		<div class="container">
			<div>
				<form action="{{ route('guardar') }}" method="POST">
					@csrf
					<div class="row mt-5">
						<div class="col">
							<input type="text" name="nombre" class="form-control" placeholder="Nombre">
						</div>
						<div class="col">
							<input type="text" name="apellido_paterno" class="form-control" placeholder="Apellido Paterno">
						</div>
						<div class="col">
							<input type="text" name="apellido_materno" class="form-control" placeholder="Apellido Materno">
						</div>
						<div class="col">
							<input type="number" name="edad" class="form-control" placeholder="Edad">
						</div>
						<button type="submit" class="btn btn-dark">GUARDAR</button>
					</div>
				</form>
			</div>
			<div>
				<table class="table mt-5">
					<thead class="thead-dark">
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Nombre</th>
							<th scope="col">Apellido Paterno</th>
							<th scope="col">Apellido Materno</th>
							<th scope="col">Edad</th>
						</tr>
					</thead>
					<tbody>
						@foreach($personas as $persona)
						<tr>
							<th scope="row">{{ $persona->id }}</th>
							<td>{{ $persona->nombre }}</td>
							<td>{{ $persona->apellido_paterno }}</td>
							<td>{{ $persona->apellido_materno }}</td>
							<td>{{ $persona->edad }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="row justify-content-between">
					<a href="{{ route('maq01') }}" class="col-5 btn btn-dark">MAQUETA 1</a>

					<a href="{{ route('materias') }}" class="col-5 btn btn-WARNING">SIGUIENTE FORMULARIO</a>
				</div>

			</div>
		</div>










		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
	</html>