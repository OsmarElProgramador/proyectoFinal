<?php 

$servidor = "192.162.0.11";
$baseDatos = "gentlefy";
$usuarioBd = "root";
$passwordBd = "perron11";

$conexionBd = mysql_connect($servidor , $usuarioBd, $passwordBd) or trigger_error(mysql_error(), E_USER_ERROR);

mysql_query("SET NAMES 'utf8'");

mysql_select_db($baseDatos, $conexionBd);

?>