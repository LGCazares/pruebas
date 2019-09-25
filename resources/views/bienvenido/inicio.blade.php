
<html>
<head>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}" crossorigin="anonymous">
	<title>BIENVENIDO</title>	
</head>
<body>
	<div class="m-5">
		<div class="btn-group mt-3">
			<img src="images/gobmxlogo.svg" style="height:29px;" alt=" ">
		</div>	
		<div style="float:right;">
			<button class="btn col-2 bt-01">Tramites</button>
			<button class="btn col-2 bt-01">Gobierno</button>
			<button class="btn col-2 bt-01">Participa</button>
			<button class="btn col-2 bt-01">Datos</button>
			<button class="btn col-2 bt-01"><img src="images/lupa.png" style="height:20px" ></button>
		</div>
		<div class="col">
			<img src="images/educa.png" class="col-6" style="height:150px">
			<img src="images/ipn.png" class="col-1" style="height:150px">

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
							<input type="text" class="form-control" placeholder="Apellido Paterno">
						</div>
						<div class="col">
							<input type="text" class="form-control" placeholder="Apellido Materno">
						</div>
						<div class="col">
							<input type="text" class="form-control" placeholder="Edad">
						</div>
						<button type="submit" class="btn btn-dark">GUARDAR</button>
					</div>
				</form>
			</div>
			<div>
				<table class="table mt-5">
					<thead class="thead-dark">
						<tr>
							<th scope="col">N°</th>
							<th scope="col">Nombre</th>
							<th scope="col">Apellido Paterno</th>
							<th scope="col">Apellido Materno</th>
							<th scope="col">Edad</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>










		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
	</html>