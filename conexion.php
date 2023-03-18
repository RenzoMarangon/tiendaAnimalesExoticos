<?php
$base="flix";
$con=mysqli_connect("localhost","root","",$base);
if($con){
	//echo "conectado";
}else{
	echo mysql_error();
}
?>