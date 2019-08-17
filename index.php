<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pelicula</title>
</head>
<body>
	
	<h1>Tu pelicula Favorita</h1>
	<br>
	
	<form action="" method="GET">
		<input type="text" name="titulo" placeholder="Titulo" required="">
		<input type="text" name="anio" placeholder="Año" required="">
		<input type="text" name="director" placeholder="Director" required="">
		<input type="text" name="precio" placeholder="Precio" required="" >
		<label for="">Alquilada: </label>
		<label for="">Si </label>
		<input type="radio" name="alquilada" value="SI">
		<label for="">No </label>
		<input type="radio" name="alquilada" value="NO">
		<input type="date" name="FechaDevolucion" required="">

		<input type="submit" name="btnGuardar" value="Guardar">

	</form>

</body>
</html>



<?php 
	require "pelicula.php";


	if (isset($_GET['titulo']) && isset($_GET['anio']) && isset($_GET['director'])&& isset($_GET['precio']) && isset($_GET['alquilada']) && isset($_GET['FechaDevolucion'])) {
		
		$titulo=$_GET['titulo'];
		$anio=$_GET['anio'];
		$director=$_GET['director'];
		$precio=$_GET['precio'];
		$alquilada=$_GET['alquilada'];
		$FechaDevolucion=$_GET['FechaDevolucion'];


		$objPelicula = new VideoClub;

		$objPelicula -> setTitulo($titulo);
		$objPelicula -> setAnio($anio);
		$objPelicula -> setDirector($director);
		$objPelicula -> setPrecio($precio);		
		$objPelicula -> setAlquilada($alquilada);
		$objPelicula -> setFechaDevolucion($fechaDevolucion);

		$objPelicula -> calcularPago($fe);

		

		echo'<table>
				<thead>
					<tr>
						<th>Titulo</th>
						<th>Año</th>
						<th>Director</th>
						<th>Precio</th>
						<th>Alquilada</th>
						<th>FechaDevolucion</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>'.$objPelicula -> getTitulo().'</td>
						<td>'.$objPelicula -> getAnio().'</td>
						<td>'.$objPelicula -> getDirector().'</td>
						<td>'.$objPelicula -> getPrecio().'</td>
						<td>'.$alquilada.'</td>
						<td>'.$variable.'</td>
						<td>'.$diferencia.'</td>

					</tr>
				</tbody>
			</table>';



	}

 ?>