<?php
include("conexion.php");

//guarda el dato ingresado en el formulario
$buscar=$_POST['buscar'];

//va buscar el producto ingresado en la base de datos

$sql="SELECT * FROM animales WHERE ID like '%$buscar%'" ;



// te muestra valor buscado en la base de datos

$consulta=mysqli_query($con,$sql);
echo "<table border=1>";
echo "<td>"."ID";
echo "<td>"."Animal";
while($registro=mysqli_fetch_row($consulta)){
	
	echo "<tr>";
	foreach ($registro as $dato){
		echo "<br>";
		echo "<td>". $dato. "</td>";
	}
	echo "</tr>";
}

echo "</table>";
echo "<p>";
$cuantos=mysqli_num_rows($consulta);
echo "se encontraron: <b>". $cuantos . "</b> resultados ";
echo "<br>";
	?>
	
<!DOCTYPE html>
<html>

<body>
<button><a href="index.html">Volver</a></button>
</body>
</html>