<?php
$conexion=(mysqli_connect("localhost","root",""));
mysqli_select_db($conexion,'mantenimiento') or die ("no se encuentra la bd");
mysqli_set_charset($conexion,"utf8");
?>
