<?php

$usario="u471947948_cavi";
$passwd="dafne832";
$servidor="mysql.hostinger.mx";
$BD="u471947948_serv";

/*$passwd="";
$servidor="localhost";
$BD="servicios";*/

/*$usario="n260m_14426545";
$passwd="drag0n";
$servidor="sql206.260mb.net";
$BD="n260m_14426545_pcatual";*/

$conexion=mysqli_connect($servidor,$usario,$passwd,$BD)or die("Error al conectarse a la base de datos:".mysqli_error());
//mysql_select_db($BD,$conexion);
?>
