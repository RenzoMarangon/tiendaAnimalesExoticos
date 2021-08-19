<?php
include("conexion.php");
$buscar=$_POST['buscar'];
/*$sql="SELECT * from inscriptos WHERE apellido LIKE '%$buscar%'";*/

					/* nombretabla.nombrecampo1, nombretabla.nombrecampo2,nombretabla2.nombrecampo1, nombretabla2.nombrecampo2*/	
//$sql="SELECT clientes.IDCliente, clientes.Producto, clientes.Cantidad, Clientes.FechaCompra, productos.IDProducto, productos.Stock, productos.FechaIngreso, productos.FechaEgreso, productos.Proovedor, productos.Origen, proveedor.IDProveedor, proveedor.Origen, proveedor.Producto from clientes, productos, proveedor where productos.IDProducto=clientes.Producto, productos.IDProducto=proveedor.Producto and productos.IDProducto='$buscar'";


$sql="SELECT  * from usuarios";
/*echo $sql;
die;
*/
/*
HAMBURGO HAM%
SOUTHAMPTON %HAM%
NOTINGHAM %HAM
*/


//$sql="SELECT dni,nombre,apellido from inscriptos";
//$sql="SELECT IDProducto, Stock, FechaIngreso, FechaEgreso, Proveedor, Origen from productos";



$consulta=mysqli_query($con,$sql);
echo "<table border=1>";
echo "<td>"."Usuario";
echo "<td>"."Contraseña";
echo "<td>"."Nombre";
echo "<td>"."Mail";
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
?>