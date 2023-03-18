

<?php

/* insertar datos*/
include ("conexion.php");
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$nombre=$_POST['nombre'];
$mail=$_POST['mail'];




$sql="insert into usuarios values ('$usuario','$contrasena','$nombre','mail')";

$sqli="SELECT  * from  usuarios where usuario='$usuario' and contrasena='$contrasena'";




$consulta=mysqli_query($con,$sqli);

$cuantos=mysqli_num_rows($consulta);

if ($cuantos== 1){
	header ("Location:registro.php");
	
}else if  (mysqli_query($con,$sql)){
	header ("Location:index.html");
}else{

	
echo mysqli_error($con);
	
}



/*if(mysqli_query($con,$sql)){
	 
	header ("Location:index.html");
	
}else{
	echo mysqli_error($con);
}*/
?>