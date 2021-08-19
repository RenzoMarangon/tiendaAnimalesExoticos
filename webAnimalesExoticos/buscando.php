<?php
include("conexion.php");

//guarda el dato ingresado en el formulario
$buscar=$_POST['buscar'];

//va buscar el producto ingresado en la base de datos
$sql="SELECT * FROM usuarios WHERE usuario like '%$buscar%'" ;



// te muestra valor buscado en la base de datos

$consulta=mysqli_query($con,$sql);


//escribe tabla
echo "<div>";
echo "<table >";
echo "<td>"."IDproducto";
    echo "<td>"."Nombre";
    echo "<td>"."Stock";
    echo "<td>"."Telefono";
     echo "<td>"."imagenes";
	echo "<tr>";
while($registro=mysqli_fetch_row($consulta)){
    

	foreach ($registro as $dato){
		echo "<td>".$dato."</td>";

		}


		echo "</tr>";
	}

	echo "</table>";
	echo "</div>";

	echo "<p>";

	$cuantos=mysqli_num_rows($consulta);

	echo "Se encontraron:  <b>".  $cuantos  .  "</b> resultados ";

	?>
	</center>
