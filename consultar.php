<?php
include "conexion.php";

$sql="SELECT id, nombre, dir, tel, foto, latitud, longitud FROM datosgen";
$resp=mysqli_query($conexion,$sql);
$datos=array();

if($resp){
	$i=0;
	while($reg=mysqli_fetch_assoc($resp)){
		 $datos[$i]=$reg;
	  $i=$i+1;
	}

}else{
	echo "Error al ejecutar la cosulta: ".mysqli_error();
}
echo json_encode($datos);
mysqli_close($conexion);
?>
