<?php
include "conexion.php";

$nom=$_POST['nombre'];
$dir=$_POST['dir'];
$tel=$_POST['tel'];
$lat=$_POST['lat'];
$longt=$_POST['long'];
$foto="images/".$tel.".jpg";

$sql="INSERT INTO datosgen (id, nombre, dir, tel, foto, latitud, longitud) VALUES('','$nom','$dir','$tel','$foto','$lat', '$longt')";
$res=mysqli_query($conexion,$sql);
if($res){
		echo "Los datos se registraron de manera exitosa";

	}else{
  	echo "Se produjo un error al momento de registar los datos:".mysqli_error();
		}
mysqli_close($conexion);
?>
