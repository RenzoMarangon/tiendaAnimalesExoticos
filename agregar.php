<?php

include("conexion.php");

//crear una carpeta imagenes donde ahi se guardan las imagenes


$carpeta="imagenes";
if(copy($_FILES['imagen']['tmp_name'],$carpeta."/".$_FILES['imagen']['animal'])){
	echo "<b>".$carpeta."/".$_FILES['imagen']['animal']."<b>";
	}else{
	echo "archivo no subido";
}


 //lo que se escribe en el formulario seguarda en las variables

$ID=$_POST['ID'];         
$animal=$_POST['animal'];

$imagen=$_FILES['imagen']['animal'];

//los carga en la base de datos 

$sql = "INSERT INTO animales (ID,animal,imagen) VALUES ('$ID', '$animal','$imagen')";
if (mysqli_query($con,$sql)){

	echo "agregado";
	



}else {
	//echo mysql_error($con);
	echo "ID producto repetido";
}
?>