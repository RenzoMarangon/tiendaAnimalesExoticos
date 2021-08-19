<?php
include("conexion.php");
$usuario=$_POST['usuario'];

$sql="DELETE  from usuarios WHERE usuario='$usuario'";


if(mysqli_query($con,$sql)){
	echo header("location:index_admin.php");
}else{
	echo mysqli_error($con);
}
?>