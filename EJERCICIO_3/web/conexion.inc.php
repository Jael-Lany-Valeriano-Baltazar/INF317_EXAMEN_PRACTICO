<?php
$con = mysqli_connect("127.0.0.1","root","");
mysqli_select_db($con,"MIBASEJAEL");



if($con->connect_errno){
  echo "Falló la conexión a la base de datos " . $conexion->connect_error;
}
?>