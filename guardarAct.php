<?php
//Se Agrega el archivo que contine la conexion a la BD
include "conexion.php";
$nom=$_POST['nombre'];
$dir=$_POST['dir'];
$tel=$_POST['tel'];
$lat=$_POST['lat'];
$longt=$_POST['long'];
$foto="images/".$tel.".jpg";

$sql="UPDATE datosgen SET nombre='$nom', dir='$dir',  tel='$tel',foto='$foto', latitud='$lat', longitud='$longt' WHERE id=$id";
$res=mysqli_query($conexion,$sql);
if($res){
	echo "Los datos se actualizaron de manera exitosa";
	}else{
		  echo "Se produjo un error al momento de Actualizar los datos:".mysqli_error();
		}
mysqli_close($conexion);
?>
