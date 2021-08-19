<?php
include("conexion.php");
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];



$sql="SELECT  * from  usuarios where usuario='$usuario' and contrasena='$contrasena'";




$consulta=mysqli_query($con,$sql);

$cuantos=mysqli_num_rows($consulta);
if ($contrasena='admin' and $usuario='admin') {
	echo header ("Location:index_admin.php");
}else if ($cuantos== 1){
	echo header ("Location:index.php");
}else{
	
	echo header ("Location:registro.php");
}

?>