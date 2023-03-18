<?php


include ("conexion.php");
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$nombre=$_POST['nombre'];
$mail=$_POST['mail'];

/*           tabla  set        dato viejo = dato nuevo      where    campo clave y unico*/
$sql="UPDATE usuarios  SET usuario='$usuario', contrasena='$contrasena', nombre='$nombre', mail='$mail' WHERE usuario='$usuario'";

if(mysqli_query($con,$sql)){
	echo header ("Location:index_admin.php");
}else{
	echo mysqli_error($con);
}
?>