<?php 
$carpeta="imagenes";
if(copy($_IMAGEN['imagen']['tmp_name'],$carpeta."/".$_IMAGEN['imagen']['animal'])){
	echo "<b>".$carpeta."/".$_IMAGEN['imagen']['animal']."<b>";
}else{
	echo "archivo no subido";
}
?>